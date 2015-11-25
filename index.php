<?php
/*
Plugin Name: Custom Login Page by Jemee
Plugin URI: https://jeweltheme.com
Description: Custom Login Page helps you to create an awesome login page with images, color and login form. Choose your perfect images and make your login page awesome. 
Author: Jemee Roy
Author URI:  https://jeweltheme.com
Version: 1.0.0
*/

// Adding the function to the login page
add_action('login_head', 'custom_login');
  
// Custom function that includes the custom stylesheet
function custom_login() {
wp_enqueue_style( 'custom-login', plugins_url( 'css/custom-login.css' , __FILE__ ) );
}
?>
