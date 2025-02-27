<?php

add_action( 'wp_enqueue_scripts', 'remove_global_styles' );
function remove_global_styles(){
    wp_dequeue_style( 'global-styles' );
}

add_action( 'init', 'disable_emojis' );
function disable_emojis() {
     remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
     remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
     remove_action( 'wp_print_styles', 'print_emoji_styles' );
     remove_action( 'admin_print_styles', 'print_emoji_styles' );    
     remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
     remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );    
     remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}


/* vendors */


add_filter( 'aioseo_post_metabox_priority', 'aioseo_filter_metabox_priority' );
function aioseo_filter_metabox_priority( $priority) {
   return 'low';
}


if ( function_exists( 'acf_add_local_field_group' ) ) {

	add_filter('acf/settings/save_json', 'my_acf_json_save_point');
	function my_acf_json_save_point( $path ) {
		$path = get_stylesheet_directory() . '/acf-json';
		return $path;
	}
	
	add_filter('acf/settings/load_json', 'my_acf_json_load_point');
	function my_acf_json_load_point( $paths ) {
		unset($paths[0]);
		$paths[] = get_stylesheet_directory() . '/acf-json';
		return $paths;
	}

}
