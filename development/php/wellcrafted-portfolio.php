<?php
/**
 * Plugin Name: Wellcrafted Portfolio
 * Plugin URI: http://msherstobitow.com/plugins/portfolio
 * Description: Wellcrafted Portfolio is an easy to use plugin that allows you to create a stunning portfolio.
 * Version: 1.0
 * Author: Maksim Sherstobitow
 * Author URI: http://msherstobitow.com
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */ 

/**
 * Wellcrafted Portfolio initializer
 * 
 * @package Wellcrafted\Portfolio
 * @version  1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}

/**
 * Initilize the plugin on Wellcrafted Core action call.
 *
 * @since  1.0.0
 */
add_action( 'wellcrafted_core_initilized', 'wellcrafted_portfolio_initialize' );

function wellcrafted_portfolio_initialize() {
    require dirname( __FILE__ ) . '/wellcrafted/portfolio/portfolio.php';
    \Wellcrafted\Portfolio\Portfolio::instance()->init();
}


