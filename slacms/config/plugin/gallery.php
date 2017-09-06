<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* For your plugin config.
 * Importnt! Please Don't change the config item index name (for systems config)
 * 
 * For load plugin config:
 * $this->Sla_model->getPluginConfig('plugin_config_filename', 'item index name');
 * Ex. $this->Sla_model->getPluginConfig('article', 'plugin_name');
 * 
 */

/* Start System Config (Important) */
/* General Config */
$plugin_config['plugin_name']  = 'Gallery';
$plugin_config['plugin_urlrewrite']  = 'gallery'; /* Please don't have any blank space */
$plugin_config['plugin_author']  = 'SLACMS'; /* For your name */
$plugin_config['plugin_version']   = '1.0.3';
$plugin_config['plugin_description']   = 'gallery plugin'; /* For your plugin description */

/* for menu inside member zone. If not have please blank. 
 * Example: $plugin_config['plugin_member_menu'] = 'link_name';
 * The link automatic to {base_url}/plugin/{your_plugin_urlrewrite}
 * plugin_menu_permission_name is permission name from user_perms table on DB
 */
$plugin_config['plugin_member_menu'] = '';
$plugin_config['plugin_menu_permission_name'] = '';

/* Database Config */
$plugin_config['plugin_db_table']   = array(
    'gallery_db',
    'gallery_picture',
); /* Please input all your pludin db table name */

/* Sitemap Generater Config (for content view page only) 
 * If don't want to use sitemap for your plugin. Please blank.
 */
$plugin_config['plugin_sitemap_viewtable']   = 'gallery_db';
/* for sitemap sql extra condition for this view table. If not have please blank. */
$plugin_config['plugin_sqlextra_condition']   = "active = '1' AND url_rewrite != ''";

/* Sitemap Generater Config (for content category page only) 
 * If don't want to use sitemap for your plugin. Please blank.
 */
$plugin_config['plugin_sitemap_cattable']   = '';
/* for sitemap sql extra condition for this category table. If not have please blank. */
$plugin_config['plugin_sqlextra_catcondition']   = "";

/* All your plugin file path 
 * For directory please put / into the end of path.
 * Filename or Directory name is case sensitive.
 */
$plugin_config['plugin_file_path']   = array(
    FCPATH . '/photo/plugin/gallery/',
    FCPATH . '/slacms/config/plugin/gallery.php',
    FCPATH . '/slacms/controllers/admin/plugin/Gallery.php',
    FCPATH . '/slacms/models/plugin/Gallery_model.php',
    FCPATH . '/slacms/modules/plugin/controllers/Gallery.php',
    FCPATH . '/slacms/modules/plugin/views/gallery/',
    FCPATH . '/slacms/views/admin/plugin/gallery/',
    FCPATH . '/slacms/language/dutch/plugin/gallery_lang.php',
    FCPATH . '/slacms/language/english/plugin/gallery_lang.php',
    FCPATH . '/slacms/language/italian/plugin/gallery_lang.php',
    FCPATH . '/slacms/language/spanish/plugin/gallery_lang.php',
    FCPATH . '/slacms/language/thai/plugin/gallery_lang.php',
);
/* End System Config (Important) */

/* Custom config (For your plugin config)
 * Please add your config after this section
 */
