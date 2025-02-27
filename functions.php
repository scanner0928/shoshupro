<?php

add_theme_support('post-thumbnails');
add_post_type_support('page', 'excerpt');


include TEMPLATEPATH . '/functions/functions-setting.php';
include TEMPLATEPATH . '/functions/functions-inv.php';

add_action('wp_enqueue_scripts', 'gm_load_scripts');
function gm_load_scripts()
{
	$root = get_template_directory_uri();
	// css
	wp_enqueue_style('gm-style', $root . '/_assets/css/default.css', '');
	// js

	wp_enqueue_script(
		'wow',
		$root . '/_assets/js/wow.js',
		'',
		false,
		false
	);
	wp_enqueue_script(
		'slick',
		'//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
		'',
		false,
		true
	);
	wp_enqueue_script(
		'default',
		$root . '/_assets/js/default.js',
		array('jquery'),
		false,
		true
	);
	/*wp_enqueue_script(
		'remodal',
		'https://unpkg.com/remodal@1.1.1/dist/remodal.min.js',
		'',
		false,
		true
	);*/
	// wp_enqueue_script(
	// 	'modal-video',
	// 	$root . '/_assets/js/modal-video.js',
	// 	array( 'jquery' ),
	// 	false,
	// 	true
	// );

}

function gm_querySet($query)
{
	if (!is_admin() && $query->is_main_query()) {
		if (is_category()) {
			$query->set('post_type', 'works');
			return;
		}
	}
}
add_action('pre_get_posts', 'gm_querySet');
add_filter('tiny_mce_before_init', function ($init) {
	global $typenow;

	// カスタム投稿タイプが 'blog' の場合のみ適用
	if ($typenow === 'blog') {
		$init['block_formats'] = '見出し3=h3;見出し4=h4;段落=p';
	}

	return $init;
});
