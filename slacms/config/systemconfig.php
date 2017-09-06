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
/* 
 * For SLA CMS version config
 */
$config['sla_version'] = '1.1.7'; /* For CMS Version */
$config['sla_release'] = 'release'; /* For release or beta */

/* 
 * For SLA CMS check lastest version xml url
 * Defualt url https://www.slacms.com/downloads/lastest_version.xml
 * Backup url https://slacms.sourceforge.io/xml/lastest_version.xml
 */
$config['sla_chkverxmlurl_main'] = 'https://www.slacms.com/downloads/lastest_version.xml';
$config['sla_chkverxmlurl_backup'] = 'https://slacms.sourceforge.io/xml/lastest_version.xml';

/* 
 * For SLA CMS upgrade server file path Ex. https://www.slacms.com/downloads/upgrade/upgrade-to-1.1.4.zip
 * The upgrade file is "upgrade-to-1.1.4.zip" (Can't change the file upgrade name to other format. This format only)
 * Please set the server with path only https://www.slacms.com/downloads/upgrade/
 */
$config['sla_upgrade_server_1'] = 'http://jaist.dl.sourceforge.net/project/slacms/upgrade/';
$config['sla_upgrade_server_2'] = 'https://www.slacms.com/downloads/upgrade/';

/* 
 * For SLA CMS Official Website News RSS Feed URL on Backend Dashboard
 * Defualt Url https://www.slacms.com/plugin/article/rss
 */
$config['sla_backend_feed_url'] = 'https://www.slacms.com/plugin/article/rss';
$config['sla_backend_feed_backup_url'] = 'http://astian.org/plugin/article/rss';

/* 
 * For SLA CMS plugin version checking xml url
 * Defualt url http://localhost/plugintest/plugin_list.xml
 * Backup url http://localhost/plugintest/plugin_list.xml
 */
$config['sla_pluginxmlurl_main'] = 'https://www.slacms.com/downloads/plugins/plugin_list.xml';
$config['sla_pluginxmlurl_backup'] = 'https://slacms-plugin.sourceforge.io/plugin_list.xml';

/* 
 * For SLA CMS plugin install server file path Ex. http://localhost/plugintest/install/shop_install_1.0.6.zip
 * The upgrade file is "shop_install_1.0.6.zip" (Can't change the file install name to other format. This format only)
 * Please set the server with path only http://localhost/plugintest/install/
 */
$config['sla_plugin_install_server_1'] = 'http://jaist.dl.sourceforge.net/project/slacms-plugin/install/';
$config['sla_plugin_install_server_2'] = 'https://www.slacms.com/downloads/plugins/install/';

/* 
 * For SLA CMS plugin upgrade server file path Ex. http://localhost/plugintest/upgrade/shop_upgrade_1.0.6.zip
 * The upgrade file is "shop_upgrade_1.0.6.zip" (Can't change the file upgrade name to other format. This format only)
 * Please set the server with path only http://localhost/plugintest/upgrade/
 */
$config['sla_plugin_upgrade_server_1'] = 'http://jaist.dl.sourceforge.net/project/slacms-plugin/upgrade/';
$config['sla_plugin_upgrade_server_2'] = 'https://www.slacms.com/downloads/plugins/upgrade/';
