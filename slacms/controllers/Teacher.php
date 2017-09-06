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
class Teacher extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
        $this->load->database();
        $row = $this->Sla_model->load_config();
        if($row->maintenance_active){
            //Return to home page
            redirect('./', 'refresh');
            exit;
        }
        $this->template->set_template('teacher');
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
        $title = 'Teacher | ' . $row->site_name;
        $this->template->set('title', $title);
        $this->template->set('meta_tags', $this->Sla_model->coreMetatags($title, $row->keywords, $title));
        $this->template->set('cur_page', $pageURL);
    }

    public function index() {
        Teacher_helper::is_logged_in($this->session->userdata('admin_email'));
        $this->sla_referrer->setIndex('teacher');
        $this->template->setSub('users', $this->Sla_admin_model->getUser($this->session->userdata('user_admin_id')));
        $this->template->loadSub('teacher/home');
    }

    public function login() {
        Teacher_helper::login_already($this->session->userdata('admin_email'));
        //Load the form helper

        $this->template->setSub('config', $this->Sla_model->load_config());
        $this->template->setSub('error', '');
        $this->load->helper('form');
        $this->template->loadSub('frontend/login-teacher');
    }

    public function loginCheck() {
        Teacher_helper::login_already($this->session->userdata('admin_email'));
        $email = $this->Sla_model->cleanEmailFormat($this->input->post('email', TRUE));
        $password = $this->input->post('password', TRUE);
        $result = $this->Sla_model->teacherLogin($email, $password);
        if ($result == 'SUCCESS') {
            $this->Sla_model->saveLogs($email, 'Frontend Login Successful!', $result);
            if($this->session->userdata('slaflogin_cururl')){
                redirect($this->session->userdata('slaflogin_cururl'), 'refresh');
            }else{
                redirect($this->Sla_model->base_link().'/teacher', 'refresh');
            }
        } else {
            $this->Sla_model->saveLogs($email, 'Frontend Login Invalid!', $result);
            $this->template->setSub('config', $this->Sla_model->load_config());
            $this->template->setSub('error', $result);
            $this->load->helper('form');
            $this->template->loadSub('frontend/login-teacher');
        }
    }

    public function logout() {
        $this->Sla_model->logout($this->Sla_model->base_link().'/teacher');
    }

    public function editTeacher() {
        Teacher_helper::is_logged_in($this->session->userdata('admin_email'));
        //Load the form helper
        $this->load->helper('form');
        if ($this->session->userdata('user_admin_id')) {
            //Get user details from database
            $this->template->setSub('users', $this->Sla_admin_model->getUser($this->session->userdata('user_admin_id')));
            //Load the view
            $this->template->loadSub('teacher/edit');
        }
    }

    public function saveEditTeacher() {
        Teacher_helper::is_logged_in($this->session->userdata('admin_email'));
        Teacher_helper::is_allowchk('profile save');
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
                redirect('teacher', 'refresh');
            }else{
                $this->load->helper('form');
                if ($this->session->userdata('user_admin_id')) {
                    //Get user details from database
                    $this->template->setSub('users', $this->Sla_admin_model->getUser($this->session->userdata('user_admin_id')));
                    //Load the view
                    $this->session->set_flashdata('f_error_message','<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Login Incorrect</div>');
                    $this->template->loadSub('teacher/edit');
                }
            }
            
        }
    }
       

}