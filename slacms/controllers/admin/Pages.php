<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
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
class Pages extends CI_Controller {

    function __construct() {
        parent::__construct();
        define('LANG', $this->Sla_admin_model->getLang());
        $this->lang->load('admin', LANG);
        $this->template->set_template('admin');
        $this->_init();
    }

    public function _init() {
        $row = $this->Sla_admin_model->load_config();
        $pageURL = $this->Sla_admin_model->getCurPages();
        $this->template->set('core_css', $this->Sla_admin_model->coreCss());
        $this->template->set('core_js', $this->Sla_admin_model->coreJs());
        $this->template->set('title', 'Backend System | ' . $row->site_name);
        $this->template->set('meta_tags', $this->Sla_admin_model->coreMetatags('Backend System for SLA Content Management'));
        $this->template->set('cur_page', $pageURL);
    }

    public function index() {
        admin_helper::is_logged_in($this->session->userdata('admin_email'));
        admin_helper::is_allowchk('pages content');
        $this->load->library('pagination');
        $this->db->cache_on();
        $this->sla_referrer->setIndex();
        // Pages variable
        $search_arr = '';
        if($this->input->get('lang') && $this->input->get('lang') != 'all'){
            $search_arr.= ' 1=1 ';
            if($this->input->get('lang')){
                $search_arr.= " AND lang_iso LIKE '%".$this->input->get('lang', TRUE)."%'";
            }
        }
        $result_per_page = 20;
        $total_row = $this->Sla_admin_model->countTable('pages', $search_arr);
        $num_link = 10;
        $base_url = $this->Sla_model->base_link(). '/admin/pages/';
        // Pageination config
        $this->Sla_admin_model->pageSetting($base_url,$total_row,$result_per_page,$num_link);    
        ($this->uri->segment(3))? $pagination = ($this->uri->segment(3)) : $pagination = 0;        
        //Get users from database
        $this->template->setSub('pages', $this->Sla_admin_model->getIndexData('pages', $result_per_page, $pagination, 'pages_id', 'asc', $search_arr));
        $this->template->setSub('lang', $this->Sla_model->loadAllLang());
        //Load the view
        $this->template->loadSub('admin/pages_index');
    }

    public function addPages() {
        admin_helper::is_logged_in($this->session->userdata('admin_email'));
        admin_helper::is_allowchk('pages content');       
        $this->template->set('extra_js', '<script type="text/javascript">'.$this->Sla_admin_model->getSaveDraftJS().'</script>');
        //Get lang from database
        $this->template->setSub('lang', $this->Sla_model->loadAllLang());
        
        //Load the form helper
        $this->load->helper('form');
        //Load the view
        $this->template->loadSub('admin/pages_add');
    }

    public function insert() {
        admin_helper::is_logged_in($this->session->userdata('admin_email'));
        admin_helper::is_allowchk('pages content');
        admin_helper::is_allowchk('save');
        //Load the form validation library       
        $this->load->library('form_validation');
        //Set validation rules
        $this->form_validation->set_rules('page_name', 'Pages Name', 'required');
        $this->form_validation->set_rules('page_title', 'Pages Title', 'required');
        $this->form_validation->set_rules('page_keywords', 'Pages Keywords', 'required');
        $this->form_validation->set_rules('page_desc', 'Pages Description', 'required');

        if ($this->form_validation->run() == FALSE) {
            //Validation failed
            $this->addPages();
        } else {
            //Validation passed
            //Add the user
            $this->Sla_admin_model->insertPage();
            //Return to user list
            $this->db->cache_delete_all();
            $this->session->set_flashdata('error_message','<div class="alert alert-success" role="alert">'.$this->lang->line('success_message_alert').'</div>');
            redirect($this->sla_referrer->getIndex(), 'refresh');
        }
    }

    public function editPages() {
        admin_helper::is_logged_in($this->session->userdata('admin_email'));
        admin_helper::is_allowchk('pages content');
        //Load the form helper
        $this->load->helper('form');
        if($this->uri->segment(4)){
            $this->db->cache_on();
            $pages = $this->Sla_model->getValue('*', 'pages', 'pages_id', $this->uri->segment(4), 1);
            if($pages !== FALSE){
                $this->template->setSub('lang', $this->Sla_model->loadAllLang());
                $this->template->setSub('pages', $pages);
                //Load the view
                $this->template->loadSub('admin/pages_edit');
            }else{
                redirect($this->sla_referrer->getIndex(), 'refresh');
            }
        }else{
            redirect($this->sla_referrer->getIndex(), 'refresh');
        }
    }

    public function edited() {
        admin_helper::is_logged_in($this->session->userdata('admin_email'));
        admin_helper::is_allowchk('pages content');
        admin_helper::is_allowchk('save');
        //Load the form validation library
        $this->load->library('form_validation');
        //Set validation rules
        $this->form_validation->set_rules('page_name', 'Pages Name', 'required');
        $this->form_validation->set_rules('page_title', 'Pages Title', 'required');
        $this->form_validation->set_rules('page_keywords', 'Pages Keywords', 'required');
        $this->form_validation->set_rules('page_desc', 'Pages Description', 'required');

        if ($this->form_validation->run() == FALSE) {
            //Validation failed
            $this->editPages();
        } else {
            //Validation passed
            //Update the user
            $this->Sla_admin_model->updatePage($this->uri->segment(4));
            //Return to user list
            $this->db->cache_delete_all();
            $this->session->set_flashdata('error_message','<div class="alert alert-success" role="alert">'.$this->lang->line('success_message_alert').'</div>');
            redirect($this->sla_referrer->getIndex(), 'refresh');
        }
    }

    public function delete() {
        admin_helper::is_logged_in($this->session->userdata('admin_email'));
        admin_helper::is_allowchk('pages content');
        admin_helper::is_allowchk('delete');
        if($this->uri->segment(4)){
            //Delete the languages
            if($this->uri->segment(4) != 1) {
                $this->Sla_model->clear_all_cache();
                $this->Sla_admin_model->removeData('pages', 'pages_id', $this->uri->segment(4));
                $this->db->cache_delete_all();
            } else {
                echo "<script>alert(\"" . $this->lang->line('pages_delete_default') . "\");</script>";
            }
            $this->session->set_flashdata('error_message','<div class="alert alert-success" role="alert">'.$this->lang->line('success_message_alert').'</div>');
        }
        //Return to languages list
        redirect($this->sla_referrer->getIndex(), 'refresh');
    }
    
    public function asCopy() {
        admin_helper::is_logged_in($this->session->userdata('admin_email'));
        admin_helper::is_allowchk('pages content');
        admin_helper::is_allowchk('save');
        if($this->uri->segment(4)){
            $page = $this->Sla_model->getValue('*', 'pages', 'pages_id', $this->uri->segment(4), 1);
            if($page !== FALSE){
                $data = array(
                    'page_name' => $page->page_name.'-copy',
                    'page_url' => $page->page_url.'-copy',
                    'lang_iso' => $page->lang_iso,
                    'page_title' => $page->page_title,
                    'page_keywords' => $page->page_keywords,
                    'page_desc' => $page->page_desc,
                    'content' => $page->content,
                    'active' => 0,
                );
                $this->Sla_model->insertAsCopy('pages', $data);
                $this->db->cache_delete_all();
            }
        }
        redirect($this->sla_referrer->getIndex(), 'refresh');
    }
}
