<?php

/**
 * Plugin Name: Dae - B2S
 * Plugin URI: https://ic.Unicamp.br/~everton
 * Description: Plugin para gerenciamento do site da Dae
 * Author: Everton Messias.
 * Version: 1.0
 * Text Domain: Dae - B2S
 * Plugin Dae - B2S
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// ***************** Add DB
function add_db_access()
{
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'access';
    $sql = "CREATE TABLE $table_name (`id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,`ipadress` text NOT NULL,`time` datetime DEFAULT '0000-00-00 00:00:00' NOT NULL)$charset_collate;";

    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
    
    remove_role('contributor');
    remove_role('author');
    flush_rewrite_rules();
    
}
register_activation_hook(__FILE__, 'add_db_access');


// DEACTIVATE *************************************************
function deactivate()
{
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'deactivate');


// FUNCTIONS ************************************************
include ABSPATH . '/wp-content/plugins/dae/includes/functions.php';

// SETTINGS ************************************************
include ABSPATH . '/wp-content/plugins/dae/includes/settings.php';

// TYPES ************************************************
//include ABSPATH . '/wp-content/plugins/dae/includes/types/agenda.php';
//include ABSPATH . '/wp-content/plugins/dae/includes/types/album.php';
//include ABSPATH . '/wp-content/plugins/dae/includes/types/convenio.php';
//include ABSPATH . '/wp-content/plugins/dae/includes/types/equipe.php';

