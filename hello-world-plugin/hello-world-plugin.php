<?php

/*
 * Plugin Name:       Hello World
 * Plugin URI:        #
 * Description:       This is my first plugin.
 * Version:           1.0.0
 * Requires at least: 6.6
 * Requires PHP:      8.0
 * Author:            Sujoy Sen
 * Author URI:        #
 * Text Domain:       hw
 */

// We will learn here
// (1) Admin Notices
// (2) Admin Dashboard Widget



// Admin Notices


add_action("admin_notices", "hw_show_message");

function hw_show_message(){

	echo '<div class="notice notice-success is-dismissible"><p>Hello I am a Success Message</p></div>';

}



// Admin Dashboard Widget


add_action("wp_dashboard_setup", 'hw_hello_world_dashboard_widget');

function hw_hello_world_dashboard_widget(){
	
    wp_add_dashboard_widget("hw_hello_world", "Hello World Widget", "hw_custom_admin_widget");

}

function hw_custom_admin_widget() {

    echo "This is Hello World Custom Dashboard Widget";

}

