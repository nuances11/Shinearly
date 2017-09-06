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
class Search extends CI_Controller {

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
        if ($row->themes_config) {
            $this->template->set_template($row->themes_config);
            define('THEME', $row->themes_config);
        }
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
        $title = 'Search | ' . $row->site_name;
        $this->template->set('title', $title);
        $this->template->set('meta_tags', $this->Sla_model->coreMetatags($title, $row->keywords, $title));
        $this->template->set('cur_page', $pageURL);
    }

    public function index() {
        $config = $this->Sla_admin_model->load_config();
        if($config->gsearch_active && !empty($config->gsearch_cxid) && $config->gsearch_cxid !== NULL){
            $this->template->setSub('config', $config);
            $this->template->loadSub('frontpage/search');
        }else{
            redirect(BASE_URL, 'refresh');
        }
    }

}