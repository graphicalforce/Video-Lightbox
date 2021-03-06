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

	wp_enqueue_style( 'video_lightbox', plugins_url() . '/videoLightbox/css/lightGallery.css' );

	wp_enqueue_style( 'video_lightbox_style', plugins_url() . '/videoLightbox/css/lightGalleryStyle.css' );

}

add_shortcode('video', 'freeman_video_shortcode');

function freeman_video_shortcode( $atts ) {
	$a = shortcode_atts( array(
		'url' => 'something',
		'thumb' => 'nothing',
	), $atts );

	$video_url =  $a['url'];
	$thumb_url = $a['thumb'];

	$trim = "https://www.youtube.com/watch?v=";

	$trimmed = ltrim( $video_url, $trim );

	return '<ul class="video"><li data-src="' . $video_url . '"><a href="#"><img src="' . $thumb_url . '" /><div id="freeman-play-button"></div></a></li></ul>';
}
