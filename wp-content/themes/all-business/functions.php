<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.9
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */


/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
if (!function_exists('all_business_system_fonts_list')) {
	function all_business_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Google Fonts List
if (!function_exists('all_business_get_google_fonts_list')) {
	function all_business_get_google_fonts_list() {
		$fonts = array( 
			'' => esc_html__('None', 'all-business'), 
			'Playfair+Display:400,400italic,700,700italic,900,900italic' => 'Playfair Display', 
			'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic' => 'Titillium Web', 
			'Roboto:300,300italic,400,400italic,500,500italic,700,700italic' => 'Roboto', 
			'Roboto+Condensed:400,400italic,700,700italic' => 'Roboto Condensed', 
			'Open+Sans:300,300italic,400,400italic,700,700italic' => 'Open Sans', 
			'Open+Sans+Condensed:300,300italic,700' => 'Open Sans Condensed', 
			'Droid+Sans:400,700' => 'Droid Sans', 
			'Droid+Serif:400,400italic,700,700italic' => 'Droid Serif', 
			'PT+Sans:400,400italic,700,700italic' => 'PT Sans', 
			'PT+Sans+Caption:400,700' => 'PT Sans Caption', 
			'PT+Sans+Narrow:400,700' => 'PT Sans Narrow', 
			'PT+Serif:400,400italic,700,700italic' => 'PT Serif', 
			'Ubuntu:400,400italic,700,700italic' => 'Ubuntu', 
			'Ubuntu+Condensed' => 'Ubuntu Condensed', 
			'Headland+One' => 'Headland One', 
			'Source+Sans+Pro:300,300italic,400,400italic,700,700italic' => 'Source Sans Pro', 
			'Lato:400,400italic,700,700italic' => 'Lato', 
			'Cuprum:400,400italic,700,700italic' => 'Cuprum', 
			'Oswald:300,400,700' => 'Oswald', 
			'Yanone+Kaffeesatz:300,400,700' => 'Yanone Kaffeesatz', 
			'Lobster' => 'Lobster', 
			'Lobster+Two:400,400italic,700,700italic' => 'Lobster Two', 
			'Questrial' => 'Questrial', 
			'Raleway:300,400,500,600,700' => 'Raleway', 
			'Dosis:300,400,500,700' => 'Dosis', 
			'Cutive+Mono' => 'Cutive Mono', 
			'Quicksand:300,400,700' => 'Quicksand', 
			'Montserrat:400,700' => 'Montserrat', 
			'Cookie' => 'Cookie', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('all_business_text_transform_list')) {
	function all_business_text_transform_list() {
		$list = array( 
			'none' => esc_html__('none', 'all-business'), 
			'uppercase' => esc_html__('uppercase', 'all-business'), 
			'lowercase' => esc_html__('lowercase', 'all-business'), 
			'capitalize' => esc_html__('capitalize', 'all-business'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('all_business_text_decoration_list')) {
	function all_business_text_decoration_list() {
		$list = array( 
			'none' => esc_html__('none', 'all-business'), 
			'underline' => esc_html__('underline', 'all-business'), 
			'overline' => esc_html__('overline', 'all-business'), 
			'line-through' => esc_html__('line-through', 'all-business'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('all_business_custom_color_schemes_list')) {
	function all_business_custom_color_schemes_list() {
		$list = array( 
			'first' => esc_html__('Custom 1', 'all-business'), 
			'second' => esc_html__('Custom 2', 'all-business'), 
			'third' => esc_html__('Custom 3', 'all-business') 
		);
		
		
		return $list;
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/



// Theme Plugin Support Constants
if (class_exists('Cmsmasters_Content_Composer')) {
	define('CMSMASTERS_CONTENT_COMPOSER', true);
} else {
	define('CMSMASTERS_CONTENT_COMPOSER', false);
}

if (!defined('CMSMASTERS_WOOCOMMERCE') && class_exists('woocommerce')) {
	define('CMSMASTERS_WOOCOMMERCE', true);
} elseif (!defined('CMSMASTERS_WOOCOMMERCE')) {
	define('CMSMASTERS_WOOCOMMERCE', false);
}

if (!defined('CMSMASTERS_EVENTS_CALENDAR') && class_exists('Tribe__Events__Main')) {
	define('CMSMASTERS_EVENTS_CALENDAR', true);
} elseif (!defined('CMSMASTERS_EVENTS_CALENDAR')) {
	define('CMSMASTERS_EVENTS_CALENDAR', false);
}

if (!defined('CMSMASTERS_PAYPALDONATIONS') && class_exists('PayPalDonations')) {
	define('CMSMASTERS_PAYPALDONATIONS', true);
} elseif (!defined('CMSMASTERS_PAYPALDONATIONS')) {
	define('CMSMASTERS_PAYPALDONATIONS', false);
}

if (!defined('CMSMASTERS_DONATIONS') && class_exists('Cmsmasters_Donations')) {
	define('CMSMASTERS_DONATIONS', false);
} elseif (!defined('CMSMASTERS_DONATIONS')) {
	define('CMSMASTERS_DONATIONS', false);
}

if (!defined('CMSMASTERS_TIMETABLE') && function_exists('timetable_events_init')) {
	define('CMSMASTERS_TIMETABLE', false);
} elseif (!defined('CMSMASTERS_TIMETABLE')) {
	define('CMSMASTERS_TIMETABLE', false);
}

if (!defined('CMSMASTERS_TC_EVENTS') && class_exists('TC')) {
	define('CMSMASTERS_TC_EVENTS', false);
} elseif (!defined('CMSMASTERS_TC_EVENTS')) {
	define('CMSMASTERS_TC_EVENTS', false);
}


// Theme Colored Categories Constant
if (!defined('CMSMASTERS_COLORED_CATEGORIES')) {
	define('CMSMASTERS_COLORED_CATEGORIES', true);
}

// Theme Projects Compatible
if (!defined('CMSMASTERS_PROJECT_COMPATIBLE')) {
	define('CMSMASTERS_PROJECT_COMPATIBLE', true);
}

// Theme Profiles Compatible
if (!defined('CMSMASTERS_PROFILE_COMPATIBLE')) {
	define('CMSMASTERS_PROFILE_COMPATIBLE', true);
}

// Change FS Method
if (!defined('FS_METHOD')) {
	define('FS_METHOD', 'direct');
}



// Theme Image Thumbnails Size
if (!function_exists('all_business_get_image_thumbnail_list')) {
	function all_business_get_image_thumbnail_list() {
		$list = array( 
			'cmsmasters-small-thumb' => array( 
				'width' => 		50, 
				'height' => 	50, 
				'crop' => 		true 
			), 
			'cmsmasters-square-thumb' => array( 
				'width' => 		300, 
				'height' => 	300, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Square', 'all-business') 
			), 
			'cmsmasters-blog-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	320, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Masonry Blog', 'all-business') 
			), 
			'cmsmasters-project-thumb' => array( 
				'width' => 		580, 
				'height' => 	450, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project', 'all-business') 
			), 
			'cmsmasters-project-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Project', 'all-business') 
			), 
			'post-thumbnail' => array( 
				'width' => 		860, 
				'height' => 	420, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Featured', 'all-business') 
			), 
			'cmsmasters-masonry-thumb' => array( 
				'width' => 		860, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry', 'all-business') 
			), 
			'cmsmasters-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	650, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Full', 'all-business') 
			), 
			'cmsmasters-project-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	750, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project Full', 'all-business') 
			), 
			'cmsmasters-full-masonry-thumb' => array( 
				'width' => 		1160, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Full', 'all-business') 
			), 
			'cmsmasters-single-project-thumb' => array( 
				'width' => 		580, 
				'height' => 	400, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Single Project', 'all-business') 
			) 
		);
		
		
		if (CMSMASTERS_EVENTS_CALENDAR) {
			$list['cmsmasters-event-thumb'] = array( 
				'width' => 		260, 
				'height' => 	260, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Event', 'all-business') 
			);
		}
		
		
		return $list;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('all_business_all_color_schemes_list')) {
	function all_business_all_color_schemes_list() {
		$list = array( 
			'default' => 		esc_html__('Default', 'all-business'), 
			'header' => 		esc_html__('Header', 'all-business'), 
			'navigation' => 	esc_html__('Navigation', 'all-business'), 
			'header_top' => 	esc_html__('Header Top', 'all-business'), 
			'bottom' => 		esc_html__('Bottom', 'all-business'), 
			'footer' => 		esc_html__('Footer', 'all-business') 
		);
		
		
		$out = array_merge($list, all_business_custom_color_schemes_list());
		
		
		return apply_filters('cmsmasters_all_color_schemes_list_filter', $out);
	}
}



// Theme Settings Color Schemes Default Colors
if (!function_exists('all_business_color_schemes_defaults')) {
	function all_business_color_schemes_defaults() {
		$list = array( 
			'default' => array( // content default color scheme
				'color' => 		'#626262', 
				'link' => 		'#00bcd4', 
				'hover' => 		'#aaaaaa', 
				'heading' => 	'#212121', 
				'bg' => 		'#fafafa', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#dddddd', 
				'secondary' => 	'#ff4081' 
			), 
			'header' => array( // Header color scheme
				'mid_color' => 		'#919191', 
				'mid_link' => 		'#b2b2b2', 
				'mid_hover' => 		'#00bcd4', 
				'mid_bg' => 		'#ffffff', 
				'mid_bg_scroll' => 	'#ffffff', 
				'mid_border' => 	'#e1e1e1', 
				'bot_color' => 		'#ffffff', 
				'bot_link' => 		'rgba(255,255,255,0.65)', 
				'bot_hover' => 		'#ffffff', 
				'bot_bg' => 		'#00bcd4', 
				'bot_bg_scroll' => 	'#00bcd4', 
				'bot_border' => 	'#e1e1e1' 
			), 
			'navigation' => array( // Navigation color scheme
				'title_link' => 				'rgba(255,255,255,0.65)', 
				'title_link_hover' => 			'#ffffff', 
				'title_link_current' => 		'#ffffff', 
				'title_link_subtitle' => 		'rgba(255,255,255,0.65)', 
				'title_link_bg' => 				'rgba(255,255,255,0)', 
				'title_link_bg_hover' => 		'rgba(255,255,255,0.1)', 
				'title_link_bg_current' => 		'rgba(255,255,255,0)', 
				'title_link_border' => 			'rgba(255,255,255,0)', 
				'dropdown_text' => 				'#626262', 
				'dropdown_bg' => 				'#ffffff', 
				'dropdown_border' => 			'#e4e4e4', 
				'dropdown_link' => 				'#626262', 
				'dropdown_link_hover' => 		'#212121', 
				'dropdown_link_subtitle' =>		'#626262', 
				'dropdown_link_highlight' =>	'#fafafa', 
				'dropdown_link_border' => 		'rgba(255,255,255,0)', 
				'magic_line' => 				'#00bcd4' 
			), 
			'header_top' => array( // Header Top color scheme
				'color' => 					'#212121', 
				'link' => 					'#212121', 
				'hover' => 					'#00bcd4', 
				'bg' => 					'#ffffff', 
				'border' => 				'#e1e1e1', 
				'title_link' => 			'#212121', 
				'title_link_hover' => 		'#00bcd4', 
				'title_link_bg' => 			'rgba(255,255,255,0)', 
				'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
				'title_link_border' => 		'rgba(255,255,255,0)', 
				'dropdown_bg' => 			'#ffffff', 
				'dropdown_border' => 		'rgba(255,255,255,0)', 
				'dropdown_link' => 			'#212121', 
				'dropdown_link_hover' => 	'#00bcd4', 
				'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
				'dropdown_link_border' => 	'rgba(255,255,255,0)' 
			), 
			'bottom' => array( // Bottom color scheme
				'color' => 		'#595959', 
				'link' => 		'#707070', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#212121', 
				'alternate' => 	'#2c2c2c', 
				'border' => 	'#333333', 
				'secondary' => 	'#00bcd4' 
			), 
			'footer' => array( // Footer color scheme
				'color' => 		'#595959', 
				'link' => 		'#707070', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#212121', 
				'alternate' => 	'#2c2c2c', 
				'border' => 	'#333333', 
				'secondary' => 	'#ff4081' 
			), 
			'first' => array( // custom color scheme 1
				'color' => 		'#ffffff', 
				'link' => 		'#ffffff', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#ffffff', 
				'bg' => 		'rgba(255,255,255,0)', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#ffffff', 
				'secondary' => 	'#ffffff' 
			), 
			'second' => array( // custom color scheme 2
				'color' => 		'#c4c4c4', 
				'link' => 		'#ffffff', 
				'hover' => 		'#00bcd4', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#212121', 
				'border' => 	'#e4e4e4', 
				'secondary' => 	'#00bcd4' 
			), 
			'third' => array( // custom color scheme 3
				'color' => 		'#626262', 
				'link' => 		'#00bcd4', 
				'hover' => 		'#aaaaaa', 
				'heading' => 	'#212121', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#fafafa', 
				'border' => 	'#dddddd', 
				'secondary' => 	'#ff4081' 
			) 
		);
		
		
		return $list;
	}
}



// CMSMasters Framework Directories Constants
if (!defined('CMSMASTERS_FRAMEWORK')) {
	define('CMSMASTERS_FRAMEWORK', 'framework');
}

if (!defined('CMSMASTERS_ADMIN')) {
	define('CMSMASTERS_ADMIN', CMSMASTERS_FRAMEWORK . '/admin');
}

if (!defined('CMSMASTERS_SETTINGS')) {
	define('CMSMASTERS_SETTINGS', CMSMASTERS_ADMIN . '/settings');
}

if (!defined('CMSMASTERS_OPTIONS')) {
	define('CMSMASTERS_OPTIONS', CMSMASTERS_ADMIN . '/options');
}

if (!defined('CMSMASTERS_ADMIN_INC')) {
	define('CMSMASTERS_ADMIN_INC', CMSMASTERS_ADMIN . '/inc');
}

if (!defined('CMSMASTERS_CLASS')) {
	define('CMSMASTERS_CLASS', CMSMASTERS_FRAMEWORK . '/class');
}

if (!defined('CMSMASTERS_FUNCTION')) {
	define('CMSMASTERS_FUNCTION', CMSMASTERS_FRAMEWORK . '/function');
}


if (!defined('CMSMASTERS_COMPOSER')) {
	define('CMSMASTERS_COMPOSER', 'cmsmasters-c-c');
}



// Load Framework Parts
locate_template(CMSMASTERS_CLASS . '/Browser.php', true);

locate_template(CMSMASTERS_ADMIN_INC . '/config-functions.php', true);

locate_template(CMSMASTERS_FUNCTION . '/theme-functions.php', true);

locate_template(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings.php', true);

locate_template(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options.php', true);

locate_template(CMSMASTERS_ADMIN_INC . '/admin-scripts.php', true);

locate_template(CMSMASTERS_ADMIN_INC . '/plugin-activator.php', true);

locate_template(CMSMASTERS_CLASS . '/twitteroauth.php', true);

locate_template(CMSMASTERS_CLASS . '/widgets.php', true);

locate_template(CMSMASTERS_FUNCTION . '/breadcrumbs.php', true);

locate_template(CMSMASTERS_FUNCTION . '/likes.php', true);

locate_template(CMSMASTERS_FUNCTION . '/pagination.php', true);

locate_template(CMSMASTERS_FUNCTION . '/single-comment.php', true);

locate_template(CMSMASTERS_FUNCTION . '/theme-fonts.php', true);

locate_template(CMSMASTERS_FUNCTION . '/theme-colors-primary.php', true);

locate_template(CMSMASTERS_FUNCTION . '/theme-colors-secondary.php', true);

locate_template(CMSMASTERS_FUNCTION . '/template-functions.php', true);

locate_template(CMSMASTERS_FUNCTION . '/template-functions-post.php', true);

locate_template(CMSMASTERS_FUNCTION . '/template-functions-project.php', true);

locate_template(CMSMASTERS_FUNCTION . '/template-functions-profile.php', true);

locate_template(CMSMASTERS_FUNCTION . '/template-functions-shortcodes.php', true);

locate_template(CMSMASTERS_FUNCTION . '/template-functions-widgets.php', true);


// Theme Colored Categories Functions
if (CMSMASTERS_COLORED_CATEGORIES) {
	locate_template(CMSMASTERS_FUNCTION . '/theme-colored-categories.php', true);
}


if (class_exists('Cmsmasters_Content_Composer')) {
	locate_template(CMSMASTERS_COMPOSER . '/filters/cmsmasters-c-c-atts-filters.php', true);
}


// CMSMASTERS Donations functions
if (CMSMASTERS_DONATIONS) {
	locate_template('cmsmasters-donations/function/template-functions-donation.php', true);
}

// Woocommerce functions
if (CMSMASTERS_WOOCOMMERCE) {
	locate_template('woocommerce/cmsmasters-woo-functions.php', true);
}

// Events functions
if (CMSMASTERS_EVENTS_CALENDAR) {
	locate_template('tribe-events/cmsmasters-events-functions.php', true);
}



// Load Theme Local File
if (!function_exists('all_business_load_theme_textdomain')) {
	function all_business_load_theme_textdomain() {
		load_theme_textdomain('all-business', get_template_directory() . '/' . CMSMASTERS_FRAMEWORK . '/languages');
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'all_business_load_theme_textdomain')) {
	add_action('after_setup_theme', 'all_business_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('all_business_theme_activation')) {
	function all_business_theme_activation() {
		if (get_option('cmsmasters_active_theme') != CMSMASTERS_SHORTNAME) {
			add_option('cmsmasters_active_theme', CMSMASTERS_SHORTNAME, '', 'yes');
			
			
			all_business_add_global_options();
			
			
			all_business_add_global_icons();
			
			
			wp_redirect(esc_url(admin_url('admin.php?page=cmsmasters-settings&upgraded=true')));
		}
	}
}

add_action('after_switch_theme', 'all_business_theme_activation');



// Framework Deactivation
if (!function_exists('all_business_theme_deactivation')) {
	function all_business_theme_deactivation() {
		delete_option('cmsmasters_active_theme');
	}
}

// Framework Deactivation Action
if (!has_action('switch_theme', 'all_business_theme_deactivation')) {
	add_action('switch_theme', 'all_business_theme_deactivation');
}

