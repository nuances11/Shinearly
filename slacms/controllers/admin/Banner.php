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
class Banner extends CI_Controller {

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
        admin_helper::is_allowchk('banner');
        $this->load->helper('form');
        $this->load->library('pagination');
        $this->sla_referrer->setIndex();
        $search_arr = '';
        if($this->input->get('search') || $this->input->get('start_date') || $this->input->get('end_date')){
            $search_arr.= ' 1=1 ';
            if($this->input->get('search')){
                $search_arr.= " AND (url LIKE '%".$this->input->get('search', TRUE)."%' OR name LIKE '%".$this->input->get('search', TRUE)."%')";
            }
            if($this->input->get('start_date') && !$this->input->get('end_date')){
                $search_arr.= " AND start_date >= '".$this->input->get('start_date',true)."'";
            }elseif($this->input->get('end_date') && !$this->input->get('start_date')){
                $search_arr.= " AND end_date <= '".$this->input->get('end_date',true)."'";
            }elseif($this->input->get('start_date') && $this->input->get('end_date')){
                $search_arr.= " AND start_date >= '".$this->input->get('start_date',true)."' AND end_date <= '".$this->input->get('end_date',true)."'";
            }
        }
        // Pages variable
        $result_per_page = 20;
        $total_row = $this->Sla_model->countData('banner_mgt', $search_arr);
        $num_link = 10;
        $base_url = $this->Sla_model->base_link(). '/admin/banner/';

        // Pageination config
        $this->Sla_admin_model->pageSetting($base_url,$total_row,$result_per_page,$num_link);     
        ($this->uri->segment(3))? $pagination = $this->uri->segment(3) : $pagination = 0;

        //Get users from database
        $this->template->setSub('banner', $this->Sla_admin_model->getIndexData('banner_mgt', $result_per_page, $pagination, 'timestamp_create', 'desc', $search_arr));
        $this->template->setSub('total_row',$total_row);
        //Load the view
        $this->template->loadSub('admin/banner_index');
    }
    
    public function addBanner() {
        admin_helper::is_logged_in($this->session->userdata('admin_email'));
        admin_helper::is_allowchk('banner');
        //Load the form helper
        $this->load->helper('form');
        //Load the view
        $this->template->loadSub('admin/banner_add');
    }

    public function insert() {
        admin_helper::is_logged_in($this->session->userdata('admin_email'));
        admin_helper::is_allowchk('banner');
        admin_helper::is_allowchk('save');
        //Load the form validation library
        $this->load->library('form_validation');
        //Set validation rules
        $this->form_validation->set_rules('name', $this->lang->line('banner_name'), 'required');
        $this->form_validation->set_rules('link', $this->lang->line('banner_link'), 'required');
        $this->form_validation->set_rules('start_date', $this->lang->line('startdate_field'), 'required');
        $this->form_validation->set_rules('end_date', $this->lang->line('enddate_field'), 'required');
        if ($this->form_validation->run() == FALSE) {
            //Validation failed
            $this->addBanner();
        } else {
            //Validation passed
            //Add the user
            $this->Sla_admin_model->insertBanner();
            //Return to user list
            $this->db->cache_delete_all();
            $this->Sla_model->clear_file_cache('banner_*', TRUE);
            $this->session->set_flashdata('error_message', '<div class="alert alert-success" role="alert">' . $this->lang->line('success_message_alert') . '</div>');
            redirect($this->sla_referrer->getIndex(), 'refresh');
        }
    }
    
    public function editBanner() {
        admin_helper::is_logged_in($this->session->userdata('admin_email'));
        admin_helper::is_allowchk('banner');
        //Load the form helper
        $this->load->helper('form');
        if ($this->uri->segment(4)) {
            $this->db->cache_on();
            $banner = $this->Sla_model->getValue('*', 'banner_mgt', 'banner_mgt_id', $this->uri->segment(4), 1);
            if($banner !== FALSE){
                $this->template->setSub('banner', $banner);
                //Load the view
                $this->template->loadSub('admin/banner_edit');
            }else{
                redirect($this->sla_referrer->getIndex(), 'refresh');
            }
        } else {
            redirect($this->sla_referrer->getIndex(), 'refresh');
        }
    }

    public function update() {
        admin_helper::is_logged_in($this->session->userdata('admin_email'));
        admin_helper::is_allowchk('banner');
        admin_helper::is_allowchk('save');
        //Load the form validation library
        $this->load->library('form_validation');
        //Set validation rules
        $this->form_validation->set_rules('name', $this->lang->line('banner_name'), 'required');
        $this->form_validation->set_rules('link', $this->lang->line('banner_link'), 'required');
        $this->form_validation->set_rules('start_date', $this->lang->line('startdate_field'), 'required');
        $this->form_validation->set_rules('end_date', $this->lang->line('enddate_field'), 'required');
        if ($this->form_validation->run() == FALSE) {
            //Validation failed
            $this->editBanner();
        } else {
            //Validation passed
            if($this->uri->segment(4)){
                //Update the user
                $this->Sla_admin_model->updateBanner($this->uri->segment(4));
                //Return to user list
                $this->db->cache_delete_all();
                $this->Sla_model->clear_file_cache('banner_*', TRUE);
                $this->session->set_flashdata('error_message', '<div class="alert alert-success" role="alert">' . $this->lang->line('success_message_alert') . '</div>');
            }          
            redirect($this->sla_referrer->getIndex(), 'refresh');
        }
    }
    
    public function view() {
        admin_helper::is_logged_in($this->session->userdata('admin_email'));
        admin_helper::is_allowchk('banner');
        if($this->uri->segment(4)){
            if($this->uri->segment(5)){
                $search_arr = "banner_mgt_id = '".$this->uri->segment(4)."' AND timestamp_create LIKE '".$this->uri->segment(5)."%'";
                $bannerstat = $this->Sla_model->getValueArray("DATE(timestamp_create) AS bannerdate, DATE_FORMAT(timestamp_create, '%d %M %Y') AS bannerdateF", 'banner_statistic', $search_arr, '', 0, 'bannerdate', 'DESC', 'bannerdate');
                if ($bannerstat === FALSE) { 
                    redirect($this->sla_referrer->getIndex('view'), 'refresh');
                    exit();
                }
                $this->template->setSub('bannerstat', $bannerstat);
                $this->template->setSub('click_allcount', number_format($this->Sla_model->countData('banner_statistic', $search_arr)));
            }else{
                $this->sla_referrer->setIndex('view');
                $search_arr = "banner_mgt_id = '".$this->uri->segment(4)."' ";
                $year = $this->Sla_model->getValueArray('YEAR(timestamp_create) AS banner_year', 'banner_statistic', $search_arr, '', 0, 'banner_year', 'DESC', 'banner_year');
                if ($year === FALSE) { 
                    redirect($this->sla_referrer->getIndex(), 'refresh');
                    exit();
                }
                $this->template->setSub('year', $year);                
                $this->template->setSub('click_allcount', number_format($this->Sla_model->countData('banner_statistic', $search_arr)));
            }
            $this->template->setSub('banner', $this->Sla_model->getValue('*', 'banner_mgt', 'banner_mgt_id', $this->uri->segment(4), 1));
            //Load the view
            $this->template->loadSub('admin/banner_view');
        }else{
            redirect($this->sla_referrer->getIndex(), 'refresh');
        }
    }
    
    public function deleteIndex() {
        admin_helper::is_logged_in($this->session->userdata('admin_email'));
        admin_helper::is_allowchk('linkstats');
        admin_helper::is_allowchk('delete');
        $delR = $this->input->post('delR');
        if(isset($delR)){
            foreach ($delR as $value) {
                if ($value) {
                    $getimg = $this->Sla_model->getValue('img_path', 'banner_mgt', 'banner_mgt_id', $value, 1);
                    if($getimg->img_path && $getimg->img_path !== NULL){ @unlink('photo/banner/'.$getimg->img_path); }
                    $this->Sla_admin_model->removeData('banner_statistic', 'banner_mgt_id', $value);
                    $this->Sla_admin_model->removeData('banner_mgt', 'banner_mgt_id', $value);
                }
            }
        }
        $this->db->cache_delete_all();
        $this->Sla_model->clear_file_cache('banner_*', TRUE);
        $this->session->set_flashdata('error_message','<div class="alert alert-success" role="alert">'.$this->lang->line('success_message_alert').'</div>');
        redirect($this->sla_referrer->getIndex(), 'refresh');
    }
    
}
