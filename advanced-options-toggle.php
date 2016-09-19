<?php
/*
Plugin Name: Advanced Options Toggle
Plugin URI:  http://writethisdown.ca
Description: Adds a button to the Admin Menu Bar to toggle more advanced menu items. This will help simplify the view in the Admin Dashboard, useful for learning purposes.
Version:     1.0
Author:      Laurena Rehbein
Author URI:  http://writethisdown.ca
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: advanced-options-toggle
*/

function wtd_enqueue(){
    wp_enqueue_script( 'ajax-script',
        plugins_url( '/js/myjs3.js', __FILE__ ),
        array( 'jquery' )
    );
}
add_action( 'admin_enqueue_scripts', 'wtd_enqueue' );

/* 
function wtd_enqueue_styles(){
		wp_enqueue_style( 'aotstyle', plugin_dir_url( __FILE__ ) . 'aotstyle.css' );
}
add_action( 'admin_enqueue_scripts', 'wtd_enqueue_styles' );
*/

function wtd_toggle($wp_admin_bar){
	$args = array(
		'id' => 'advanced-options',
		'title' => __( 'Toggle Advanced Options', 'advanced-options-toggle' ),
		'meta' => array(
		'class' => 'advanced-options-class'
		)
	);
$wp_admin_bar->add_node($args);
}
add_action('admin_bar_menu', 'wtd_toggle', 50);
