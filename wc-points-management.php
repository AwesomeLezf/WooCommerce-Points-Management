<?php 
/**
 * Plugin Name: WooCommerce Points Management
 * Plugin URI: https://github.com/AwesomeLezf/wc-pont-menagment.git
 * Description: Plugin to manage loyal points
 * Version: 1.0
 * Author: Marcin Kowalski
 * Author URI: https://github.com/AwesomeLezf/
 * License: GPLv3 or later
 */
if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
    
    define('WCP_LAND_DIR', plugin_dir_path(__FILE__).'languages/');

    // Includes with created objects
    include_once(plugin_dir_path(__FILE__).'../woocommerce/woocommerce.php');
    include_once('includes/wc-points-management.php');
    include_once('includes/wcp-class-database-menager.php');
    include_once('includes/wcp-woocommerce-integration.php');    
    
function initPlugin(){
    //Create new Wc_Points_Menagment
    new Wc_Points_Menagment();
    //Create object response for create and manage database
    $wcp_db = new WCP_Database_Menager();
    //Call method that create all needed databases.
    $wcp_db->create_databases();
}

initPlugin();