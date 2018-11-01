<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.0.6
 * 
 * Content Composer Attributes Filters
 * Created by CMSMasters
 * 
 */


/* Register Admin Panel JS Scripts */
function register_admin_js_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('composer-shortcodes-extend', get_template_directory_uri() . '/cmsmasters-c-c/js/cmsmasters-c-c-shortcodes-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('composer-shortcodes-extend', 'composer_shortcodes_extend', array( 
			'translate_name_1' 					=> 		esc_attr__('Translate value 1', 'all-business'), 
			'translate_name_2' 					=> 		esc_attr__('Translate value 2', 'all-business'), 
			'quotes_field_slider_type_title' 	=> 		esc_attr__('Slider Type', 'all-business'), 
			'quotes_field_slider_type_descr'	=> 		esc_attr__('Choose your quotes slider style type', 'all-business'), 
			'quotes_field_type_choice_box' 		=> 		esc_attr__('Boxed', 'all-business'), 
			'quotes_field_type_choice_center' 	=> 		esc_attr__('Centered', 'all-business'), 
			'blog_field_layout_mode_puzzle' 	=> 		esc_attr__('Puzzle', 'all-business') 
		));
	}
}

add_action('admin_enqueue_scripts', 'register_admin_js_scripts');


// Quotes Shortcode Attributes Filter
add_filter('cmsmasters_quotes_atts_filter', 'cmsmasters_quotes_atts');

function cmsmasters_quotes_atts() {
	return array( 
		'mode' => 				'grid', 
		'type' => 				'boxed', 
		'columns' => 			'2', 
		'speed' => 				'10', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}


// Tabs Shortcode Attributes Filter
add_filter('cmsmasters_tabs_atts_filter', 'cmsmasters_tabs_atts');

function cmsmasters_tabs_atts() {
	return array( 
		'mode' => 				'tab', 
		'position' => 			'left', 
		'custom_colors' =>		'', 
		'bg_color' =>			'', 
		'active' => 			'1', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}


// Tabs Shortcode Attributes Filter
add_filter('cmsmasters_tab_atts_filter', 'cmsmasters_tab_atts');

function cmsmasters_tab_atts() {
	return array( 
		'title' => 				'tab', 
		'icon' =>				'', 
		'classes' =>			'' 
	);
}


// Tabs Shortcode Attributes Filter
add_filter('cmsmasters_blog_atts_filter', 'cmsmasters_blog_atts');

function cmsmasters_blog_atts() {
	return array( 
		'orderby' => 			'date', 
		'order' => 				'DESC', 
		'count' => 				'12', 
		'categories' => 		'', 
		'layout' => 			'standard', 
		'layout_mode' => 		'', 
		'columns' => 			'', 
		'metadata' => 			'', 
		'filter' => 			'', 
		'filter_cats_text' => 	'', 
		'pagination' => 		'pagination', 
		'more_text' => 			'', 
		'classes' => 			'' 
	);
}


// Tabs Shortcode Attributes Filter
add_filter('cmsmasters_portfolio_atts_filter', 'cmsmasters_portfolio_atts');

function cmsmasters_portfolio_atts() {
	return array( 
		'orderby' => 			'date', 
		'order' => 				'DESC', 
		'count' => 				'12', 
		'categories' => 		'', 
		'layout' => 			'grid', 
		'layout_mode' => 		'perfect', 
		'columns' => 			'4', 
		'metadata_grid' => 		'', 
		'metadata_puzzle' => 	'', 
		'gap' => 				'large', 
		'filter' => 			'', 
		'filter_cats_text' => 	'', 
		'sorting' => 			'', 
		'sorting_name_text' => 	'', 
		'sorting_date_text' => 	'', 
		'pagination' => 		'pagination', 
		'more_text' => 			'', 
		'classes' => 			'' 
	);
}

