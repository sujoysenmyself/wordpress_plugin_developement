<?php

/*
 * Plugin Name:       Shortcode Plugin
 * Plugin URI:        #
 * Description:       This is my second plugin.
 * Version:           1.0.0
 * Requires at least: 6.6
 * Requires PHP:      8.0
 * Author:            Sujoy Sen
 * Author URI:        #
 * Text Domain:       sp
 */



// Basic Shortcode

 add_shortcode("message", "sp_show_static_message");

 function sp_show_static_message() {

     return "<p style='color:red;font-size:36px;font-weight:bold;'>Hello I am a simple shortcode message</p>";
     
 }


// Shortcode with parameters

 add_shortcode("student", "sp_handle_student_data");

 function sp_handle_student_data($attribute){

    $attribute = shortcode_atts( array(
        "name" => "Default Student",
        "email" => "Default Email"
    ), $attribute, "student" );

    return "<h3 style='color:blue;'>Student Data: Name - {$attribute['name']}, Email - {$attribute['email']}</h3>";

 }





 