<?php
/*
Plugin Name: WP Comment Form Validation
Plugin URI:  https://wordpress.org/plugins/wp-comment-form-validation/
Description: This plugin is used for wordpress comments validation to the comment form. only need to activate the plugin.
Version:     1.1
Author:      Upendra Singh Tomar
License:     GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function wpcf_validation() {
	
	
	 wp_register_script( 'wpvalidate-script', plugins_url( '/js/jquery-validation.js', __FILE__ ), array( 'jquery' ) );
	 wp_enqueue_script( 'wpvalidate-script' );
     wp_register_script( 'wpcommentvalidationjs-script', plugins_url( '/js/comment-validation.js', __FILE__ ), array('jquery') );
	 wp_enqueue_script( 'wpcommentvalidationjs-script' );
	 wp_register_style( 'wpcommentvalidationcss', plugins_url( '/css/comment-validation.css', __FILE__ ));
	 wp_enqueue_style( 'wpcommentvalidationcss' );
	
}
add_action('init', 'wpcf_validation');

?>