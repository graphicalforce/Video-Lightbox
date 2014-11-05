<?php
/**
* Plugin Name: Video Lightbox
* Description: Allows videos to be displayed in a lightbox using a shortcode.
* Version: 1.0
* Author: Jeff Freeman
* Author URI: GraphicalForce.com
* License: GPL12
*/


add_action( 'init', 'freeman_enque_script_styles' );

function freeman_enque_script_styles() {

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'video_lightbox_lightGallery', plugins_url() . '/videoLightbox/js/lightGallery.js' );

	wp_enqueue_script( 'video_lightbox_script', plugins_url() . '/videoLightbox/js/script.js' );

	wp_enqueue_style( 'video_lightbox_style', plugins_url() . '/videoLightbox/css/lightGallery.css' );
}