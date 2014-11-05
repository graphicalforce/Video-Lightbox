<?php
/**
* Plugin Name: Video Lightbox
* Description: Allows videos to be displayed in a lightbox using a shortcode.
* Version: 1.0
* Author: Jeff Freeman
* Author URI: GraphicalForce.com
* License: GPL12
*/


add_action( 'init', 'freeman_video_lightbox' );

function freeman_video_lightbox() {
	wp_enqueue_script( 'video_lightbox', plugins_url() . '/js/lightGallery.js' );
}