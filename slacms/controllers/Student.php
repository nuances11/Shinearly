<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * SLA CMS
 *
 * An open source content management system
 *
 * Copyright (c) 2016, Astian Foundation.
 *
 * Astian Develop Public License (ADPL)
 * 
 * This Source Code Form is subject to the terms of the Astian Develop Public
 * License, v. 1.0. If a copy of the APL was not distributed with this
 * file, You can obtain one at http://astian.org/about-ADPL
 * 
 * @author	SHINEARLY
 * @copyright   Copyright (c) 2016, Astian Foundation.
 * @license	http://astian.org/about-ADPL	ADPL License
 * @link	https://www.slacms.com
 * @since	Version 1.0.0
 */
class Student extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
        $this->load->database();
        $row = $this->Sla_model->load_config();
        if ($this->session->userdata('admin_email')) {
            $this->template->set_template('student');
        }else {
                if ($row->themes_config) {
                $this->template->set_template($row->themes_config);
                define('THEME', $row->themes_config);
            }
        }
        if($row->maintenance_active){
            //Return to home page
            redirect('./', 'refresh');
            exit;
        }
        /*if ($row->themes_config) {
            $this->template->set_template($row->themes_config);
            define('THEME', $row->themes_config);
        }*/

        if (!$this->session->userdata('fronlang_iso')) {
            $this->Sla_model->setSiteLang();
        }
        if ($this->Sla_model->chkLangAlive($this->session->userdata('fronlang_iso')) == 0) {
            $this->session->unset_userdata('fronlang_iso');
            $this->Sla_model->setSiteLang();
        }
        $this->_init();
    }

    public function _init() {
        $this->template->set('core_css', $this->Sla_model->coreCss());
        $this->template->set('core_js', $this->Sla_model->coreJs());
        $row = $this->Sla_model->load_config();
        $pageURL = $this->Sla_model->getCurPages();
        $this->template->set('additional_js', $row->additional_js);
        $this->template->set('additional_metatag', $row->additional_metatag);
        $title = 'Student | ' . $row->site_name;
        $this->template->set('title', $title);
        $this->template->set('meta_tags', $this->Sla_model->coreMetatags($title, $row->keywords, $title));
        $this->template->set('cur_page', $pageURL);
    }

    public function index() {
        Student_helper::is_logged_in($this->session->userdata('admin_email'));
        $this->sla_referrer->setIndex('student');
        $this->template->setSub('users', $this->Sla_admin_model->getUser($this->session->userdata('user_admin_id')));
        $this->template->loadSub('student/home');
    }

    public function login() {
        Student_helper::login_already($this->session->userdata('admin_email'));
        //Load the form helper

        $this->template->setSub('config', $this->Sla_model->load_config());
        $this->template->setSub('error', '');
        $this->load->helper('form');
        $this->template->loadSub('frontend/login');
    }

    public function loginCheck() {
        Student_helper::login_already($this->session->userdata('admin_email'));
        $email = $this->Sla_model->cleanEmailFormat($this->input->post('email', TRUE));
        $password = $this->input->post('password', TRUE);
        $result = $this->Sla_model->studentLogin($email, $password);
        if ($result == 'SUCCESS') {
            $this->Sla_model->saveLogs($email, 'Frontend Login Successful!', $result);
            if($this->session->userdata('slaflogin_cururl')){
                redirect($this->session->userdata('slaflogin_cururl'), 'refresh');
            }else{
                redirect($this->Sla_model->base_link().'/student', 'refresh');
            }
        } else {
            $this->Sla_model->saveLogs($email, 'Frontend Login Invalid!', $result);
            $this->template->setSub('config', $this->Sla_model->load_config());
            $this->template->setSub('error', $result);
            $this->load->helper('form');
            $this->template->loadSub('frontend/login');
        }
    }

    public function logout() {
        $this->Sla_model->logout($this->Sla_model->base_link().'/student');
    }

    public function registStudent() {
        Student_helper::login_already($this->session->userdata('admin_email'));
        $config = $this->Sla_model->load_config();
        if($config->member_close_regist){
            $this->session->set_flashdata('f_error_message','<div class="alert alert-danger text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Sorry!!! Member register is closed!</div>');
            redirect($this->Sla_model->base_link().'/login', 'refresh');
            exit();
        }else{
            //Load the form helper
            $this->load->helper('form');
            //Load the view
            $this->template->setSub('chksts', 0);
            $this->template->loadSub('frontend/register');
        }

    }

    public function saveStudent() {
        Student_helper::login_already($this->session->userdata('admin_email'));
        $config = $this->Sla_model->load_config();
        //Load the form validation library
        $this->load->library('form_validation');
        //Set validation rules
        $this->form_validation->set_rules('name', $this->Sla_model->getLabelLang('display_name'), 'required|is_unique[user_admin.name]');
        $this->form_validation->set_rules('email', $this->Sla_model->getLabelLang('login_email'), 'trim|required|valid_email|is_unique[user_admin.email]');
        $this->form_validation->set_rules('password', $this->Sla_model->getLabelLang('login_password'), 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('con_password', $this->Sla_model->getLabelLang('confirm_password'), 'trim|required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->template->setSub('chksts', 0);
            $this->form_validation->set_message('email', $this->Sla_model->getLabelLang('email_already'));
            $this->template->loadSub('frontend/register');
        } else if ($this->Sla_model->chkCaptchaRes() == '') {
            $this->template->setSub('chksts', 0);
            $this->template->loadSub('frontend/regist');
        } else {
            $email = $this->Sla_model->cleanEmailFormat($this->input->post('email', TRUE));
            $md5_hash = $this->Sla_model->createStudent();
            if($md5_hash !== FALSE){
                if($config->member_confirm_enable){
                    /* now we will send an email */
                    # ---- set subject --#
                    $subject = $this->Sla_model->getLabelLang('email_confirm_subject');
                    # ---- set from, to, bcc --#
                    $from_name = $config->site_name;
                    $from_email = 'no-reply@' . EMAIL_DOMAIN;
                    $to_email = $email;
                    $message_html = $this->Sla_model->getLabelLang('email_dear') . $email . ',<br><br>' . $this->Sla_model->getLabelLang('email_confirm_message') . '<br><a href="' . $this->Sla_model->base_link(). '/member/confirm/' . $md5_hash . '" target="_blank"><b>' . $this->Sla_model->base_link(). '/member/confirm/' . $md5_hash . '</b></a><br><br>' . $this->Sla_model->getLabelLang('email_footer') . ' <br><a href="' . $this->Sla_model->base_link(). '" target="_blank"><b>' . $config->site_name . '</b></a>';
                    @$this->Sla_model->sendEmail($to_email, $subject, $message_html, $from_email, $from_name);
                    $this->template->setSub('chksts', 1);
                    $this->template->loadSub('frontpage/member/regist');
                }else{
                    $this->session->set_flashdata('reg_success_message','<div class="alert alert-success text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Account Registered Successfully!</div>');
                    redirect($this->Sla_model->base_link(). '/login');
                    // redirect($this->Sla_model->base_link(). '/member/confirm/' . $md5_hash, 'refresh');
                    exit();
                }
            }else{
                $this->session->set_flashdata('f_error_message','<div class="alert alert-danger text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Sorry!!! Member register is closed!</div>');
                redirect('frontpage/login', 'refresh');
                exit();
            }
        }
    }

    public function editStudent() {
        Student_helper::is_logged_in($this->session->userdata('admin_email'));
        //Load the form helper
        $this->load->helper('form');
        if ($this->session->userdata('user_admin_id')) {
            //Get user details from database
            $this->template->setSub('users', $this->Sla_admin_model->getUser($this->session->userdata('user_admin_id')));
            //Load the view
            $this->template->loadSub('student/edit');
        }
    }

    public function saveEditStudent() {
        Student_helper::is_logged_in($this->session->userdata('admin_email'));
        Student_helper::is_allowchk('profile save');
        //Load the form validation library
        $this->load->library('form_validation');
        //Set validation rules
        $this->form_validation->set_rules('name', $this->Sla_model->getLabelLang('display_name'), 'required|is_unique[user_admin.name.user_admin_id.' . $this->session->userdata('user_admin_id') . ']');
        $this->form_validation->set_rules('email', $this->Sla_model->getLabelLang('login_email'), 'trim|required|valid_email|is_unique[user_admin.email.user_admin_id.' . $this->session->userdata('user_admin_id') . ']');
        $this->form_validation->set_rules('cur_password', $this->Sla_model->getLabelLang('login_password'), 'trim|min_length[4]|max_length[32]');
        $this->form_validation->set_message('cur_password', $this->Sla_model->getLabelLang('login_incorrect'));
        if ($this->form_validation->run() == FALSE) {
            //Validation failed
            $this->editMember();
        } else {
            //Validation passed
            //Update the user
            $rs = $this->Sla_model->updateMember($this->session->userdata('user_admin_id'));
            if($rs !== FALSE){
                //Return to user list
                $this->session->set_flashdata('edit_success_message','<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Updated Successfully</div>');
                redirect('student', 'refresh');
            }else{
                $this->load->helper('form');
                if ($this->session->userdata('user_admin_id')) {
                    //Get user details from database
                    $this->template->setSub('users', $this->Sla_admin_model->getUser($this->session->userdata('user_admin_id')));
                    //Load the view
                    $this->session->set_flashdata('f_error_message','<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Login Incorrect</div>');
                    $this->template->loadSub('student/edit');
                }
            }
            
        }
    }

    public function studClass(){
         Student_helper::is_logged_in($this->session->userdata('admin_email'));
        $this->sla_referrer->setIndex('student');
        $this->template->setSub('users', $this->Sla_admin_model->getUser($this->session->userdata('user_admin_id')));
        $this->template->loadSub('student/class');
    }

    public function studAddClass(){
        Student_helper::is_logged_in($this->session->userdata('admin_email'));
        $this->template->setSub('config', $this->Sla_model->load_config());
        $this->template->setSub('error', '');
        $this->load->helper('form');

        $this->sla_referrer->setIndex('student');
        $this->template->setSub('users', $this->Sla_admin_model->getUser($this->session->userdata('user_admin_id')));
        $this->template->loadSub('student/add_class');
    }

    public function selectClass(){
       Student_helper::is_logged_in($this->session->userdata('admin_email'));
       $sched = $this->input->post('sched');
       $type = "teacher";
       if ($sched == '') {
        //    redirect user
        $this->template->setSub('config', $this->Sla_model->load_config());
        $this->template->setSub('error', '');
        $this->load->helper('form');

        $this->sla_referrer->setIndex('student');
        $this->template->setSub('users', $this->Sla_admin_model->getUser($this->session->userdata('user_admin_id')));
        $this->session->set_flashdata('f_error_message','<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Please Select Schedule</div>');
        $this->template->loadSub('student/add_class');
       }else {
           $result = $this->Sla_model->chkSched($sched);
           if ($result == 'FREE') {
            //    Load form for Free Scheduling
            $this->template->setSub('config', $this->Sla_model->load_config());
            $this->template->setSub('error', '');
            $this->load->helper('form');
            
            $this->sla_referrer->setIndex('student');
            $this->template->setSub('users', $this->Sla_admin_model->getUser($this->session->userdata('user_admin_id')));
            $this->template->setSub('teacher', $this->Sla_admin_model->getTeacher());
            $this->template->loadSub('student/free_form');

           }elseif ($result == 'FIXED') {
            //    Load form for Fixed Scheduling
            $this->template->setSub('config', $this->Sla_model->load_config());
            $this->template->setSub('error', '');
            $this->load->helper('form');
            
            $this->sla_referrer->setIndex('student');
            $this->template->setSub('users', $this->Sla_admin_model->getUser($this->session->userdata('user_admin_id')));
            $this->template->setSub('teacher', $this->Sla_admin_model->getTeacher('teacher'));
            $this->template->loadSub('student/fixed_form');

           } 
        }
    }

    public function selectSlot(){
        Student_helper::is_logged_in($this->session->userdata('admin_email'));

        if($this->uri->segment(4)){
            $this->template->setSub('config', $this->Sla_model->load_config());
            $this->template->setSub('error', '');
            $this->load->helper('form');

            $this->template->setSub('reserve', $this->Sla_model->get_schedule($this->uri->segment(4)));
            $this->template->setSub('users', $this->Sla_admin_model->getUser($this->session->userdata('user_admin_id')));
            $this->template->setSub('teacher', $this->Sla_admin_model->getTeacher('teacher'));
            $this->template->loadSub('student/schedule-slot');
        }else{
            $this->template->loadSub('student/add_class');
        }


    }
       

}