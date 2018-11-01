<?php 
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.7
 * 
 * Template Functions
 * Created by CMSMasters
 * 
 */


/* Get Page Container Classes */
function all_business_get_page_classes($cmsmasters_option, $classes = false) {
	$browser = new Browser();
	if (
		( $browser->getPlatform() != Browser::PLATFORM_IPHONE ) && 
		( $browser->getPlatform() != Browser::PLATFORM_IPOD ) && 
		( $browser->getPlatform() != Browser::PLATFORM_IPAD ) && 
		( $browser->getPlatform() != Browser::PLATFORM_BLACKBERRY ) && 
		( $browser->getPlatform() != Browser::PLATFORM_ANDROID ) && 
		( $browser->getPlatform() != Browser::PLATFORM_APPLE ) 
	) {
		echo 'csstransition ';
	}

	if ( $browser->getBrowser() == Browser::BROWSER_CHROME ) {
		echo 'chrome_only ';
	}

	if (
		( $browser->getBrowser() == Browser::BROWSER_SAFARI ) &&
		( $browser->getBrowser() != Browser::BROWSER_CHROME ) 
	) {
		echo 'safari_only ';
	}

	if ( $browser->getBrowser() == Browser::BROWSER_IE ) {
		echo 'ie_only ';
	}

	echo 'cmsmasters_' . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_theme_layout'] . ' ';

	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_fixed_header']) {
		echo 'fixed_header ';
	}

	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line']) {
		echo 'enable_header_top ';
	}

	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_styles'] != 'default') {
		echo 'enable_header_bottom ';
	}

	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_styles'] == 'r_nav') {
		echo 'enable_header_right ';
	}

	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_styles'] == 'c_nav') {
		echo 'enable_header_centered ';
	}


	if (is_singular()) {
		$cmsmasters_page_id = get_the_ID();
	} elseif (CMSMASTERS_WOOCOMMERCE && is_shop()) {
		$cmsmasters_page_id = wc_get_page_id('shop');
	}

	$cmsmasters_header_overlaps = '';

	if (
		is_singular() || 
		(CMSMASTERS_WOOCOMMERCE && is_shop())
	) {
		$cmsmasters_header_overlaps = get_post_meta($cmsmasters_page_id, 'cmsmasters_header_overlaps', true);
	}

	if ($cmsmasters_header_overlaps == '') {
		$cmsmasters_header_overlaps = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_overlaps'];
	}

	if ($cmsmasters_header_overlaps != 'false') {
		echo 'cmsmasters_heading_under_header ';
	} else {
		echo 'cmsmasters_heading_after_header ';
	}
	
	
	if ($classes && $classes != '') {
		echo esc_attr($classes) . ' ';
	}
}



/* Get Header Top Function */
function all_business_header_top($cmsmasters_option) {
	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line']) {
		echo '<div class="header_top" data-height="' . esc_attr($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_height']) . '">' . 
			'<div class="header_top_outer">' . 
				'<div class="header_top_inner">';
					
					if (
						$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line_add_cont'] !== 'none' || 
						(
							CMSMASTERS_DONATIONS && 
							isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line_donations_but']) && 
							$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line_donations_but'] &&
							isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line_donations_but_text']) && 
							$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line_donations_but_text'] != '' 
						)
					) {
						echo '<div class="header_top_right">';
						
						
						if (
							$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line_add_cont'] == 'social' && 
							isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_social_icons'])
						) {
							all_business_social_icons();
						} elseif (
							$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line_add_cont'] == 'nav' && 
							has_nav_menu('top_line')
						) {
							echo '<div class="top_nav_wrap">' . 
								'<a class="responsive_top_nav cmsmasters_theme_icon_resp_nav" href="javascript:void(0);">' . 
									'<span class="resp_top_nav_button"></span>' . 
								'</a>' . 
								'<nav>';
							
							
							wp_nav_menu(array( 
								'theme_location' => 	'top_line', 
								'menu_id' => 			'top_line_nav', 
								'menu_class' => 		'top_line_nav', 
								'link_before' => 		'<span class="nav_item_wrap">', 
								'link_after' => 		'</span>' 
							));
							
							
							echo '</nav>' . 
							'</div>';
						}
						
						
						if (
							CMSMASTERS_DONATIONS && 
							isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line_donations_but']) && 
							$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line_donations_but'] &&
							isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line_donations_but_text']) && 
							$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line_donations_but_text'] != '' 
						) {
							$cmsmasters_donations_form_page = get_option('cmsmasters_donations_form_page');
							
							echo '<a href="' . esc_url(get_permalink($cmsmasters_donations_form_page)) . '" class="header_top_donation_but"><span>' . esc_html($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line_donations_but_text']) . '</span></a>';
						}
						
						
						echo '</div>';
					}
					
					
					if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line_short_info'] !== '') {
						echo '<div class="header_top_left">' . 
							'<div class="meta_wrap">' . 
								stripslashes($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_line_short_info']) . 
							'</div>' . 
						'</div>';
					} 
					
					
				echo '</div>' . 
			'</div>' . 
			'<div class="header_top_but closed">' . 
				'<span class="cmsmasters_theme_icon_slide_bottom"></span>' . 
			'</div>' . 
		'</div>';
	}
}



/* Get Header Middle Function */
function all_business_header_mid($cmsmasters_option) {
	echo '<div class="header_mid" data-height="' . esc_attr($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_height']) . '">' . 
		'<div class="header_mid_outer">' . 
			'<div class="header_mid_inner">' . 
				'<div class="logo_wrap">';
					
					all_business_logo();
					
				echo '</div>';
				
				
				if (
					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_search'] && 
					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_styles'] != 'c_nav'
				) {
					echo '<div class="mid_search_but_wrap">' . 
						'<a href="' . esc_js("javascript:void(0)") . '" class="mid_search_but cmsmasters_header_search_but cmsmasters_theme_icon_custom_search"></a>' . 
					'</div>';
				}
				
				
				if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_styles'] == 'default') {
					echo '<div class="resp_mid_nav_wrap">' . 
						'<div class="resp_mid_nav_outer">' . 
							'<a class="responsive_nav resp_mid_nav cmsmasters_theme_icon_resp_nav" href="javascript:void(0);">' . 
								'<span class="resp_nav_button"></span>' . 
							'</a>' . 
						'</div>' . 
					'</div>';
				}
				
				
				if (CMSMASTERS_WOOCOMMERCE) {
				
					all_business_woocommerce_cart_dropdown();
					
					all_business_woocommerce_header_cart_link();
					
				}
				
				
				if (
					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_styles'] != 'default' && 
					$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_styles'] != 'c_nav'
				) { 
					if (
						$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_add_cont'] == 'cust_html' && 
						$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_add_cont_cust_html'] !== ''
					) {
						echo '<div class="slogan_wrap">' . 
							'<div class="slogan_wrap_inner">' . 
								'<div class="slogan_wrap_text">' . 
									stripslashes($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_add_cont_cust_html']) . 
								'</div>' . 
							'</div>' . 
						'</div>';
					} elseif (
						$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_add_cont'] == 'social' && 
						isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_social_icons'])
					) {
						all_business_social_icons();
					}
				}
				
				
				if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_styles'] == 'default') {
					echo '<div class="mid_nav_wrap">' . 
						'<nav role="navigation">';
							
							$nav_args = array( 
								'theme_location' => 	'primary', 
								'menu_id' => 			'navigation', 
								'menu_class' => 		'mid_nav navigation', 
								'link_before' => 		'<span class="nav_item_wrap">', 
								'link_after' => 		'</span>', 
								'fallback_cb' => 		'all_business_fallback_menu' 
							);
							
							
							if (class_exists('Walker_Cmsmasters_Nav_Mega_Menu')) {
								$nav_args['walker'] = new Walker_Cmsmasters_Nav_Mega_Menu();
							}
							
							
							wp_nav_menu($nav_args);
							
						echo '</nav>' . 
					'</div>' . 
					'<!-- _________________________ Finish Navigation _________________________ -->';
				}
				
				
			echo '</div>' . 
		'</div>' . 
	'</div>';
}



/* Get Header Bottom Function */
function all_business_header_bot($cmsmasters_option) {
	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_styles'] != 'default') {
		echo '<div class="header_bot" data-height="' . esc_attr($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_height']) . '">' . 
			'<div class="header_bot_outer">' . 
				'<div class="header_bot_inner">' . 
					'<div class="resp_bot_nav_wrap">' . 
						'<div class="resp_bot_nav_outer">' . 
							'<a class="responsive_nav resp_bot_nav cmsmasters_theme_icon_resp_nav" href="javascript:void(0);">' . 
								'<span class="resp_nav_button"></span>' . 
							'</a>' . 
						'</div>' . 
					'</div>' . 
					'<!-- _________________________ Start Navigation _________________________ -->' . 
					'<div class="bot_nav_wrap">' . 
						'<nav role="navigation">';
							
							$nav_args = array( 
								'theme_location' => 	'primary', 
								'menu_id' => 			'navigation', 
								'menu_class' => 		'bot_nav navigation', 
								'link_before' => 		'<span class="nav_item_wrap">', 
								'link_after' => 		'</span>', 
								'fallback_cb' => 		'all_business_fallback_menu' 
							);
							
							
							if (class_exists('Walker_Cmsmasters_Nav_Mega_Menu')) {
								$nav_args['walker'] = new Walker_Cmsmasters_Nav_Mega_Menu();
							}
							
							
							wp_nav_menu($nav_args);
							
						echo '</nav>' . 
					'</div>' . 
					'<!-- _________________________ Finish Navigation _________________________ -->' . 
				'</div>' . 
			'</div>' . 
		'</div>';
	}
}



/* Get Logo Function */
function all_business_logo() {
	$cmsmasters_option = all_business_get_global_options();
	
	
	$header_mid_height = (($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_height'] !== '') ? $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_height'] : '95');
	
	
	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_logo_type'] == 'text') {
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_logo_title'] != '') {
			$blog_title = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_logo_title'];
		} else {
			$blog_title = (get_bloginfo('name')) ? get_bloginfo('name') : CMSMASTERS_FULLNAME;
		}
		
		
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_logo_subtitle'] != '') {
			$blog_descr = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_logo_subtitle'];
		} else {
			$blog_descr = (get_bloginfo('description')) ? get_bloginfo('description') : esc_html__('Default Logo Subtitle', 'all-business');
		}
		
		
		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr($blog_title) . '" class="logo">' . "\n\t" . 
			'<span class="logo_text_wrap">' . 
				'<span class="title">' . esc_html($blog_title) . '</span>' . "\n" . 
				($cmsmasters_option[CMSMASTERS_SHORTNAME . '_logo_subtitle'] ? '<span class="title_text">' . esc_html($blog_descr) . '</span>' : '') . 
			'</span>' . 
		'</a>';
	} else {
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_logo_url'] == '') {
			echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
				'<img src="' . esc_url(get_template_directory_uri()) . '/img/logo.png" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\n\t" . 
				'<img class="logo_retina" src="' . esc_url(get_template_directory_uri()) . '/img/logo_retina.png" alt="' . esc_attr(get_bloginfo('name')) . '" width="192" height="40" />' . "\r" . 
			'</a>' . "\n";
			
			
			$logo_def_style_width = (int) ($header_mid_height * (192 / 40));
			
			
			echo "
<style type=\"text/css\">
	.header_mid .header_mid_inner .logo_wrap {
		width : {$logo_def_style_width}px;
	}
</style>
";
			
			
			echo "
<style type=\"text/css\">
	.header_mid_inner .logo .logo_retina {
		width : 192px;
		max-width: 192px;
	}
</style>
";
		} else {
			$logo_img = explode('|', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_logo_url']);
			
			
			if (is_numeric($logo_img[0])) {
				$logo_img_url = wp_get_attachment_image_src((int) $logo_img[0], 'full');
			}
			
			
			$logo_img_width = ((is_numeric($logo_img[0])) ? (int) $logo_img_url[1] : '192');
			
			$logo_img_height = ((is_numeric($logo_img[0])) ? (int) $logo_img_url[2] : '40');
			
			
			if ($logo_img_height >= $header_mid_height) {
				$logo_style_width = (int) ($header_mid_height * ($logo_img_width / $logo_img_height));
			} else {
				$logo_style_width = $logo_img_width;
			}
			
			
			echo "
<style type=\"text/css\">
	.header_mid .header_mid_inner .logo_wrap {
		width : {$logo_style_width}px;
	}
</style>
";
			
			
			echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
				'<img src="' . ((is_numeric($logo_img[0])) ? esc_url($logo_img_url[0]) : esc_url($logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
			
			
			if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_logo_url_retina'] != '') {
				$logo_img_retina = explode('|', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_logo_url_retina']);
			
				if (is_numeric($logo_img_retina[0])) {
					$logo_img_retina_url = wp_get_attachment_image_src((int) $logo_img_retina[0], 'full');
				}
				
				$logo_img_retina_width = ((is_numeric($logo_img_retina[0])) ? ((int) $logo_img_retina_url[1] / 2) : '192');
				
				$logo_img_retina_height = ((is_numeric($logo_img_retina[0])) ? ((int) $logo_img_retina_url[2] / 2) : '40');
				
				
				echo "
<style type=\"text/css\">
	.header_mid_inner .logo .logo_retina {
		width : {$logo_img_retina_width}px;
		max-width : {$logo_img_retina_width}px;
	}
</style>
";
				
				
				echo '<img class="logo_retina" src="' . 
				((is_numeric($logo_img_retina[0])) ? esc_url($logo_img_retina_url[0]) : esc_url($logo_img_retina[1])) . 
				'" alt="' . esc_attr(get_bloginfo('name')) . 
				'" width="' . $logo_img_retina_width . 
				'" height="' . $logo_img_retina_height . 
				'" />' . "\r";
			} else {
				echo '<img class="logo_retina" src="' . ((is_numeric($logo_img[0])) ? esc_url($logo_img_url[0]) : esc_url($logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
			}
			
			
			echo '</a>' . "\n";
		}
	}
}



/* Get Footer Logo Function */
function all_business_footer_logo($cmsmasters_option) {
	if (
		$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_type'] == 'default' && 
		$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_logo']
	) {
		echo '<div class="footer_logo_wrap">';
		
		
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_logo_url'] == '') {
			echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" class="footer_logo">' . "\n\t" . 
				'<img src="' . esc_url(get_template_directory_uri()) . '/img/logo_footer.png" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\n\t" . 
				'<img class="footer_logo_retina" src="' . esc_url(get_template_directory_uri()) . '/img/logo_footer_retina.png" alt="' . esc_attr(get_bloginfo('name')) . '" width="192" height="40" />' . "\r" . 
			'</a>' . "\n";
			
			
			echo "
			<style type=\"text/css\">
			.footer_inner .footer_logo .footer_logo_retina {
				width : 192px;
			}
			</style>
			";
		} else {
			$footer_logo_img = explode('|', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_logo_url']);
			
			
			if (is_numeric($footer_logo_img[0])) {
				$footer_logo_img_url = wp_get_attachment_image_src((int) $footer_logo_img[0], 'full');
			}
			
			
			echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" class="footer_logo">' . "\n\t" . 
				'<img src="' . ((is_numeric($footer_logo_img[0])) ? esc_url($footer_logo_img_url[0]) : esc_url($footer_logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
			
			
			if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_logo_url_retina'] != '') {
				$footer_logo_img_retina = explode('|', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_logo_url_retina']);
			
				if (is_numeric($footer_logo_img_retina[0])) {
					$footer_logo_img_retina_url = wp_get_attachment_image_src((int) $footer_logo_img_retina[0], 'full');
				}
				
				$footer_logo_img_retina_width = ((is_numeric($footer_logo_img_retina[0])) ? ((int) $footer_logo_img_retina_url[1] / 2) : '192');
				
				$footer_logo_img_retina_height = ((is_numeric($footer_logo_img_retina[0])) ? ((int) $footer_logo_img_retina_url[2] / 2) : '40');
				
				
				echo '<img class="footer_logo_retina" src="' . 
				((is_numeric($footer_logo_img_retina[0])) ? esc_url($footer_logo_img_retina_url[0]) : esc_url($footer_logo_img_retina[1])) . 
				'" alt="' . esc_attr(get_bloginfo('name')) . 
				'" width="' . $footer_logo_img_retina_width . 
				'" height="' . $footer_logo_img_retina_height . 
				'" />' . "\r";
			} else {
				echo '<img class="footer_logo_retina" src="' . ((is_numeric($footer_logo_img[0])) ? esc_url($footer_logo_img_url[0]) : esc_url($footer_logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
			}
			
			
			echo '</a>' . "\n";
		}
		
		
		echo '</div>';
	}
}



/* Get Footer Custom HTML Function */
function all_business_get_footer_custom_html($cmsmasters_option) {
	if (
		(
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_type'] == 'default' && 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_html'] !== ''
		) || (
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_type'] == 'small' && 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_additional_content'] == 'text' && 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_html'] !== ''
		)
	) {
		echo '<div class="footer_custom_html_wrap">' . 
			'<div class="footer_custom_html">' . 
				do_shortcode(stripslashes($cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_html'])) . 
			'</div>' . 
		'</div>';
	}
}



/* Get Footer Navigation Function */
function all_business_get_footer_nav($cmsmasters_option) {
	if (
		has_nav_menu('footer') && 
		(
			(
				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_type'] == 'default' && 
				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_nav']
			) || (
				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_type'] == 'small' && 
				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_additional_content'] == 'nav'
			)
		)
	) {
		echo '<div class="footer_nav_wrap">' . 
			'<nav>';
			
			
			wp_nav_menu(array( 
				'theme_location' => 'footer', 
				'menu_id' => 'footer_nav', 
				'menu_class' => 'footer_nav' 
			));
		
		
			echo '</nav>' . 
		'</div>';
	}
}



/* Get Footer Social Icons Function */
function all_business_get_footer_social_icons($cmsmasters_option) {
	if (
		isset($cmsmasters_option[CMSMASTERS_SHORTNAME . '_social_icons']) && 
		(
			(
				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_type'] == 'default' && 
				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_social']
			) || (
				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_type'] == 'small' && 
				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_additional_content'] == 'social'
			)
		)
	) {
		all_business_social_icons();
	}
}



/* Get Footer Social Icons Function */
function all_business_get_footer_copyright($cmsmasters_option) {
	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_type'] == 'small') {
		echo '<span class="footer_copyright copyright">' . esc_html(stripslashes($cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_copyright'])) . '</span>';
	} elseif ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_type'] == 'default') {
		echo '<div class="footer_copyright_wrap">' . 
			'<div class="footer_copyright_inner">' . 
				'<span class="footer_copyright copyright">' . esc_html(stripslashes($cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_copyright'])) . '</span>' . 
			'</div>' . 
		'</div>';
	}
}



/* Get Header Search Form Function */
function all_business_get_header_search_form($cmsmasters_option) {
	if (
		$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_search'] && 
		$cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_styles'] != 'c_nav'
	) {
		echo "<div class=\"cmsmasters_header_search_form\">
			<span class=\"cmsmasters_header_search_form_close cmsmasters_theme_icon_cancel\"></span>
			<form method=\"get\" action=\"" . esc_url(home_url('/')) . "\">
				<div class=\"cmsmasters_header_search_form_field\">
					<input type=\"search\" name=\"s\" placeholder=\"" . esc_attr__('Enter Keywords', 'all-business') . "\" value=\"\" />
					<button class=\"cmsmasters_theme_icon_custom_search\" type=\"submit\"></button>
				</div>
			</form>
		</div>";
	}
}



/* Get Page Heading Function */
function all_business_page_heading() {
	$cmsmasters_option = all_business_get_global_options();
	
	
	if (is_singular()) {
		$cmsmasters_page_id = get_the_ID();
	} elseif (CMSMASTERS_WOOCOMMERCE && is_shop()) {
		$cmsmasters_page_id = wc_get_page_id('shop');
	}
	
	
	$cmsmasters_heading = '';
	
	if (
		is_singular() || 
		(CMSMASTERS_WOOCOMMERCE && is_shop())
	) {
		$cmsmasters_heading = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading', true);
	}
	
	
	if (
		$cmsmasters_heading != '' && 
		(
			is_singular() || 
			(CMSMASTERS_WOOCOMMERCE && is_shop())
		)
	) {
		$cmsmasters_heading_block_disabled = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_block_disabled', true);
		$cmsmasters_header_overlaps = get_post_meta($cmsmasters_page_id, 'cmsmasters_header_overlaps', true);
		
		$cmsmasters_heading_height = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_height', true);
		$cmsmasters_heading_alignment = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_alignment', true);
		$cmsmasters_heading_scheme = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_scheme', true);
		$cmsmasters_heading_bg_color = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_bg_color', true);
		$cmsmasters_heading_bg_img_enable = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_bg_img_enable', true);
		$cmsmasters_heading_bg_img = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_bg_img', true);
		$cmsmasters_heading_bg_rep = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_bg_rep', true);
		$cmsmasters_heading_bg_att = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_bg_att', true);
		$cmsmasters_heading_bg_size = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_bg_size', true);
		
		$cmsmasters_heading_title = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_title', true);
		$cmsmasters_heading_subtitle = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_subtitle', true);
		$cmsmasters_heading_icon = get_post_meta($cmsmasters_page_id, 'cmsmasters_heading_icon', true);
		
		$cmsmasters_breadcrumbs = get_post_meta($cmsmasters_page_id, 'cmsmasters_breadcrumbs', true);
	} else {
		$cmsmasters_heading = 'default';
		$cmsmasters_heading_block_disabled = 'false';
		$cmsmasters_header_overlaps = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_overlaps'] ? 'true' : 'false';
		
		$cmsmasters_heading_height = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_height'];
		$cmsmasters_heading_alignment = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_alignment'];
		$cmsmasters_heading_scheme = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_scheme'];
		$cmsmasters_heading_bg_color = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_color'];
		$cmsmasters_heading_bg_img_enable = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_image_enable'] ? 'true' : 'false';
		$cmsmasters_heading_bg_img = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_image'];
		$cmsmasters_heading_bg_rep = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_repeat'];
		$cmsmasters_heading_bg_att = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_attachment'];
		$cmsmasters_heading_bg_size = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_heading_bg_size'];
		
		$cmsmasters_breadcrumbs = $cmsmasters_option[CMSMASTERS_SHORTNAME . '_breadcrumbs'] ? 'true' : 'false';
	}
	
	
	if (
		CMSMASTERS_EVENTS_CALENDAR && 
		tribe_is_event_query() && 
		is_archive() 
	) {
		$cmsmasters_heading = 'disabled';
	}
	
	
	list($cmsmasters_layout) = all_business_theme_page_layout_scheme();
	
	
	if (
		$cmsmasters_heading_block_disabled == 'true' && 
		$cmsmasters_layout == 'fullwidth' && 
		$cmsmasters_header_overlaps == 'true' 
	) {
		echo "";
	} else {
		$options_img = explode('|', $cmsmasters_heading_bg_img);
		
		
		if (is_numeric($options_img[0])) {
			$options_img_url = wp_get_attachment_image_src((int) $options_img[0], 'full');
		}
		
		
		echo "<style type=\"text/css\">";
		
		
		if ($cmsmasters_heading_bg_img_enable == 'true' && $cmsmasters_heading_bg_img != '') {
			echo ".headline_outer {
				background-image:url(" . ((is_numeric($options_img[0])) ? $options_img_url[0] : $options_img[0]) . ");
				background-repeat:{$cmsmasters_heading_bg_rep};
				background-attachment:{$cmsmasters_heading_bg_att};
				background-size:{$cmsmasters_heading_bg_size};
			}";
		}
		
		
		echo ".headline_color {
				background-color:{$cmsmasters_heading_bg_color};
			}
			.headline_aligner, 
			.cmsmasters_breadcrumbs_aligner {
				min-height:{$cmsmasters_heading_height}px;
			}
		</style>
		<div class=\"headline cmsmasters_color_scheme_{$cmsmasters_heading_scheme}\">
			<div class=\"headline_outer" . ($cmsmasters_heading == 'disabled' ? ' cmsmasters_headline_disabled' : '') . "\">
				<div class=\"headline_color\"></div>";
		
		
		if ($cmsmasters_heading != 'disabled') {
			echo "<div class=\"headline_inner align_{$cmsmasters_heading_alignment}\">
				<div class=\"headline_aligner\"></div>" . 
				'<div class="headline_text' . (($cmsmasters_heading == 'custom') ? (($cmsmasters_heading_icon != '') ? ' headline_icon ' . $cmsmasters_heading_icon : '') . (($cmsmasters_heading_subtitle != '') ? ' headline_subtitle' : '') : '') . '">';
			
			
			if ($cmsmasters_heading == 'custom') {
				if ($cmsmasters_heading_subtitle == '') {
					echo '<h1 class="entry-title">' . (($cmsmasters_heading_title != '') ? $cmsmasters_heading_title : esc_html(get_the_title())) . '</h1>';
				} else {
					echo '<h1 class="entry-title">' . (($cmsmasters_heading_title != '') ? $cmsmasters_heading_title : esc_html(get_the_title())) . '</h1>' . 
						'<h4 class="entry-subtitle">' . str_replace("\n", "<br />", $cmsmasters_heading_subtitle) . '</h4>';
				}
			} elseif (CMSMASTERS_WOOCOMMERCE && is_woocommerce() && !is_singular()) {
				echo '<h1 class="entry-title">';
				
					esc_html(woocommerce_page_title());
					
				echo '</h1>';
			} elseif (is_archive() || is_search()) {
				echo '<h1 class="entry-title">';
				
				
				if (is_search()) {
					global $wp_query;
					
					
					if (!empty($wp_query->found_posts)) {
						echo sprintf(esc_html(_n('1 search result for: %2$s', '%1$d search results for: %2$s', $wp_query->found_posts, 'all-business')), $wp_query->found_posts, get_search_query());
					} else {
						echo sprintf(esc_html__('0 search results for: %s', 'all-business'), get_search_query());
					}
				} elseif (is_archive()) {
					if (is_author()) {
						if (get_the_author_meta('first_name') != '' || get_the_author_meta('last_name') != '') {
							echo sprintf(esc_html__('Author: %1$s (%2$s %3$s)', 'all-business'), '<span class="vcard">' . get_the_author() . '</span>', get_the_author_meta('first_name'), get_the_author_meta('last_name'));
						} else {
							echo sprintf(esc_html__('Author: %s', 'all-business'), '<span class="vcard">' . get_the_author() . '</span>');
						}
					} else {
						echo esc_html(get_the_archive_title());
					}
				}
				
				
				echo '</h1>';
			} elseif ($cmsmasters_heading == 'default') {
				echo the_title('<h1 class="entry-title">', '</h1>', false);
			}
			
			
			echo '</div>';
			
			
			if ( 
				!is_front_page() && 
				$cmsmasters_breadcrumbs == 'true' && 
				!(
					CMSMASTERS_EVENTS_CALENDAR && 
					(
						tribe_is_list_view() || 
						tribe_is_month() || 
						tribe_is_day() || 
						(function_exists('tribe_is_past') && tribe_is_past()) || 
						(function_exists('tribe_is_upcoming') && tribe_is_upcoming()) || 
						(function_exists('tribe_is_week') && tribe_is_week()) || 
						(function_exists('tribe_is_map') && tribe_is_map()) || 
						(function_exists('tribe_is_photo') && tribe_is_photo()) 
					)
				)
			) {
				echo '<div class="cmsmasters_breadcrumbs">' . 
					'<div class="cmsmasters_breadcrumbs_aligner"></div>' . 
					'<div class="cmsmasters_breadcrumbs_inner">';
				
				
				if (CMSMASTERS_WOOCOMMERCE && is_woocommerce()) {
					woocommerce_breadcrumb();
				} elseif (function_exists('yoast_breadcrumb')) {
					$yoast_enable = get_option('wpseo_internallinks');
					
					
					if ($yoast_enable['breadcrumbs-enable']) {
						yoast_breadcrumb();
					} else {
						breadcrumbs();
					}
				} else {
					breadcrumbs();
				}
				
				
				echo '</div>' . 
				'</div>';
			}
			
			
			echo "</div>";
		}
		
		
			echo "</div>
		</div>";
	}
}



/* Get Social Icons Function */
function all_business_social_icons() {
	$cmsmasters_option = all_business_get_global_options();
	
	$i = 1;
	
	
	$out = "
<div class=\"social_wrap\">
	<div class=\"social_wrap_inner\">
		<ul>";
	
	
	foreach ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_social_icons'] as $cmsmasters_social_icons) {
		$cmsmasters_social_icon = explode('|', str_replace(' ', '', $cmsmasters_social_icons));
		
		if (
			(isset($cmsmasters_social_icon[4]) && $cmsmasters_social_icon[4] != '') ||
			(isset($cmsmasters_social_icon[5]) && $cmsmasters_social_icon[5] != '')
		) {
			$social_icon_color = ' cmsmasters_social_icon_color';
		} else {
			$social_icon_color = '';
		}
		
		$out .= "
			<li>
				<a href=\"" . esc_url($cmsmasters_social_icon[1]) . "\" class=\"cmsmasters_social_icon cmsmasters_social_icon_{$i} " . esc_attr($cmsmasters_social_icon[0]) . "{$social_icon_color}\" title=\"" . esc_attr($cmsmasters_social_icon[2]) . "\"" . (($cmsmasters_social_icon[3] == "true") ? " target=\"_blank\"" : "") . "></a>
			</li>";
		
		
		$i++;
	}
	
	
	$out .= "
		</ul>
	</div>
</div>";
	
	
	echo $out;
}



/* Get Social Icons Styles Function */
function all_business_theme_social_icons_styles() {
	$cmsmasters_option = all_business_get_global_options();
	
	$out = '';
	
	$i = 1;
	
	
	foreach ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_social_icons'] as $cmsmasters_social_icons) {
		$cmsmasters_social_icon = explode('|', str_replace(' ', '', $cmsmasters_social_icons));
		
		
		if (isset($cmsmasters_social_icon[4]) && $cmsmasters_social_icon[4] != '') {
			$out .= "
	
	#page .cmsmasters_social_icon_color.cmsmasters_social_icon_{$i} {
		color:{$cmsmasters_social_icon[4]};
	}
	";
		}
		
		
		if (isset($cmsmasters_social_icon[5]) && $cmsmasters_social_icon[5] != '') {
			$out .= "
	
	#page .cmsmasters_social_icon_color.cmsmasters_social_icon_{$i}:hover {
		color:{$cmsmasters_social_icon[5]};
	}";
		}
		
		
		$i++;
	}
	
	
	return $out;
}



/* Get Posts Thumbnail Function */
function all_business_thumb($cmsmasters_id, $type = 'post-thumbnail', $link = true, $group = false, $preload = true, $highImg = false, $fullwidth = true, $show = true, $attachment = false, $unique = false, $link_icon = false, $placeholder_icon = 'cmsmasters_theme_icon_image') {
	$args = array( 
		'class' => (($fullwidth) ? 'full-width' : ''), 
		'alt' => cmsmasters_title($cmsmasters_id, false), 
		'title' => cmsmasters_title($cmsmasters_id, false) 
	);
	
	
	$link_href = ($attachment) ? wp_get_attachment_image_src(strstr($attachment, '|', true), 'full') : wp_get_attachment_image_src((int) get_post_thumbnail_id($cmsmasters_id), 'full');
	
	
	if (!$unique) {
		$unique_id = uniqid();
	} else {
		$unique_id = $unique;
	}
	
	
	$out = '<figure class="cmsmasters_img_wrap">' . 
		'<a href="' . (($link) ? esc_url(get_permalink()) : esc_url($link_href[0])) . '"' . 
		' title="' . cmsmasters_title($cmsmasters_id, false) . '"' . 
		(($group) ? ' rel="ilightbox[' . esc_attr($group) . '_' . esc_attr($unique_id) . ']"' : '') . 
		' class="cmsmasters_img_link' . 
		(($preload) ? ' preloader' . (($highImg) ? ' highImg' : '') : '') . 
		($link_icon ? ' ' . esc_attr($link_icon) : '') . 
		'">';
	
	
	if ($attachment) {
		$out .= wp_get_attachment_image(strstr($attachment, '|', true), (($type) ? $type : 'full'), false, $args);
	} elseif (has_post_thumbnail($cmsmasters_id)) {
		$out .= get_the_post_thumbnail($cmsmasters_id, (($type) ? $type : 'full'), $args);
	} else {
		$out .= '<span class="img_placeholder ' . esc_attr($placeholder_icon) . '"></span>';
	}
	
	
	$out .= '</a>' . 
	'</figure>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Thumbnail With Rollover Function */
function all_business_thumb_rollover($cmsmasters_id, $type = 'post-thumbnail', $rollover = true, $open_link = true, $group = false, $attachment_images = false, $attachment_video_type = false, $attachment_video_link = false, $attachment_video_links = false, $highImg = false, $show = true, $link_redirect = false, $link_url = false, $link_target = false, $placeholder_icon = 'cmsmasters_theme_icon_image') {
	$cmsmasters_title = cmsmasters_title($cmsmasters_id, false);

	$args = array( 
		'class' => 'full-width', 
		'alt' => $cmsmasters_title, 
		'title' => $cmsmasters_title 
	);
	
	$unique_id = uniqid();
	
	
	$out = '<figure class="cmsmasters_img_rollover_wrap preloader' . (($highImg) ? ' highImg' : '') . '">';
	
	
	if (has_post_thumbnail($cmsmasters_id)) {
		$out .= get_the_post_thumbnail($cmsmasters_id, (($type) ? $type : 'full'), $args);
		
		$cmsmasters_image_link = wp_get_attachment_image_src((int) get_post_thumbnail_id($cmsmasters_id), 'full');
	} elseif ($attachment_images && $attachment_images[0] != '' && sizeof($attachment_images) > 0) {
		$out .= wp_get_attachment_image(strstr($attachment_images[0], '|', true), (($type) ? $type : 'full'), false, $args);
		
		$cmsmasters_image_link = wp_get_attachment_image_src(strstr($attachment_images[0], '|', true), 'full');
	} else {
		$out .= '<span class="img_placeholder ' . esc_attr($placeholder_icon) . '"></span>';
		
		$cmsmasters_image_link = '';
	}
	
	
	$is_video_selfhosted = false;
	
	
	if (
		$attachment_video_type == 'selfhosted' && 
		!empty($attachment_video_links) && 
		sizeof($attachment_video_links) > 0
	) {
		$is_video_selfhosted = true;
		
		
		$shv_out = 'href="' . esc_url($attachment_video_links[0]) . '"';
		
		
		$shvl_out = '';
		
		
		unset($attachment_video_links[0]);
		
		
		foreach($attachment_video_links as $attachment_video_link_url) {
			$video_format = substr(strrchr($attachment_video_link_url, '.'), 1);
			
			$shvl_out .= $video_format . ":'{$attachment_video_link_url}', ";
		}
		
		
		$shv_out .= ' data-options="' . 
			'html5video: {' . 
				substr($shvl_out, 0, -2) . 
			'}' . 
		'"';
	}
	
	
	if ($rollover) {
		$out .= '<div class="cmsmasters_img_rollover">';
		
		if (
			$group && 
			(
				(
					$attachment_video_type == 'embedded' && 
					$attachment_video_link != ''
				) || 
				$is_video_selfhosted || 
				$cmsmasters_image_link != ''
			)
		) {
			$out .= '<a ' . ($is_video_selfhosted ? $shv_out : 'href="' . ((!$attachment_video_link) ? esc_url($cmsmasters_image_link[0]) : $attachment_video_link) . '"') . ' rel="ilightbox[' . esc_attr($cmsmasters_id) . '_' . esc_attr($unique_id) . ']"' . (($link_redirect == 'true' && $link_target == 'true') ? ' target="_blank"' : '') . ' title="' . esc_attr($cmsmasters_title) . '" class="cmsmasters_image_link' . (($open_link) ? '' : ' no_open_link') . '"><span class="cmsmasters_theme_icon_custom_search"></span></a>';
		}
		
		
		if ($open_link) {
			$out .= '<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink($cmsmasters_id))) . '"' . (($link_redirect == 'true' && $link_target == 'true') ? ' target="_blank"' : '') . ' title="' . esc_attr($cmsmasters_title) . '" class="cmsmasters_open_link"><span class="cmsmasters_theme_icon_link_pj"></span></a>';
		}
		
		$out .= '</div>';
	} elseif ($open_link) {
		$out .= '<div class="cmsmasters_img_rollover">' . 
			'<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink($cmsmasters_id))) . '"' . (($link_redirect == 'true' && $link_target == 'true') ? ' target="_blank"' : '') . ' title="' . esc_attr($cmsmasters_title) . '" class="cmsmasters_open_post_link cmsmasters_theme_icon_custom_edit"></a>' . 
		'</div>';
	}
	
	
	$out .= '</figure>';
	
	
	if ($group && $attachment_images && sizeof($attachment_images) > 1) {
		if (!has_post_thumbnail($cmsmasters_id)) {
			unset($attachment_images[0]);
		}
		
		$out .= '<div class="dn">';
		
		foreach ($attachment_images as $attachment_image) {
			$attachment_image_link = wp_get_attachment_image_src(strstr($attachment_image, '|', true), 'full');
			
			$out .= '<figure>' . 
				'<a href="' . esc_url($attachment_image_link[0]) . '" rel="ilightbox[' . esc_attr($cmsmasters_id) . '_' . esc_attr($unique_id) . ']" title="' . esc_attr($cmsmasters_title) . '" class="preloader highImg">' . 
					wp_get_attachment_image(strstr($attachment_image, '|', true), 'full', false, $args) . 
				'</a>' . 
			'</figure>';
		}
		
		$out .= '</div>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Small Thumbnail Function */
function all_business_thumb_small($cmsmasters_id, $type = 'post', $w = 100, $h = 100, $show = true) {
	$out = '<figure class="alignleft">' . 
		'<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsmasters_title($cmsmasters_id, false) . '">';

		$args = array( 
			'alt' => cmsmasters_title($cmsmasters_id, false), 
			'title' => cmsmasters_title($cmsmasters_id, false), 
			'style' => 'width:' . $w . 'px; height:' . $h . 'px;' 
		);
		
		
		if (has_post_thumbnail()) {
			$out .= get_the_post_thumbnail($cmsmasters_id, 'cmsmasters-square-thumb', $args);
		} elseif ($type == 'post') { // Post type - post
			if (get_post_format() == 'audio') {
				$out .= '<span class="img_placeholder cmsmasters_theme_icon_audio"></span>';
			} elseif (get_post_format() == 'gallery') {
				$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta($cmsmasters_id, 'cmsmasters_post_images', true))));
				
				$cmsmasters_post_image = $cmsmasters_post_images[0];
				
				if (isset($cmsmasters_post_image) && $cmsmasters_post_image != '') {
					$out .= wp_get_attachment_image(strstr($cmsmasters_post_image, '|', true), 'cmsmasters-square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsmasters_theme_icon_gallery"></span>';
				}
			} elseif (get_post_format() == 'image') {
				$cmsmasters_post_image = get_post_meta($cmsmasters_id, 'cmsmasters_post_image_link', true);
				
				if (isset($cmsmasters_post_image) && $cmsmasters_post_image != '') {
					$out .= wp_get_attachment_image(strstr($cmsmasters_post_image, '|', true), 'cmsmasters-square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsmasters_theme_icon_image"></span>';
				}
			} elseif (get_post_format() == 'video') {
				$out .= '<span class="img_placeholder cmsmasters_theme_icon_video"></span>';
			} else {
				$out .= '<span class="img_placeholder cmsmasters_theme_icon_strd"></span>';
			}
		} elseif ($type == 'project') { // Post type - project
			if (get_post_format() == 'gallery' || get_post_format() == 'standard') {
				$cmsmasters_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta($cmsmasters_id, 'cmsmasters_project_images', true))));
				
				$cmsmasters_project_image = $cmsmasters_project_images[0];
				
				if (isset($cmsmasters_project_image) && $cmsmasters_project_image != '') {
					$out .= wp_get_attachment_image(strstr($cmsmasters_project_image, '|', true), 'cmsmasters-square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsmasters_theme_icon_gallery"></span>';
				}
			} else {
				$out .= '<span class="img_placeholder cmsmasters_theme_icon_video"></span>';
			}
		} elseif ($type == 'profile') { // Post type - profile
			$out .= '<span class="img_placeholder cmsmasters_theme_icon_custom_person"></span>';
		}
		
		$out .= '</a>' . 
	'</figure>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Title Function */
function cmsmasters_title($cmsmasters_id, $show = true) { 
	$cmsmasters_heading = get_post_meta($cmsmasters_id, 'cmsmasters_heading', true);
	
	$cmsmasters_heading_title = get_post_meta($cmsmasters_id, 'cmsmasters_heading_title', true);
	
	$out = '';
	
	if ($cmsmasters_heading == 'custom' && $cmsmasters_heading_title != '') {
		$out .= esc_attr($cmsmasters_heading_title);
	} else {
		$out .= esc_attr(strip_tags(get_the_title($cmsmasters_id) ? get_the_title($cmsmasters_id) : $cmsmasters_id));
	} 
    
	
    if ($show) {
        echo $out;
    } else {
        return $out;
    }
}



/* Get Heading Function */
function cmsmasters_heading($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '<header class="entry-header">' . 
		'<' . esc_html($tag) . ' class="entry-title">' . 
			'<a href="' . esc_url(get_permalink()) . '">' . cmsmasters_title($cmsmasters_id, false) . '</a>' . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}





/****************************** Blog, Portfolio, Profiles Single Functions ******************************/

/* Get Previous & Next Post Links Function */
function all_business_prev_next_posts() {
	$cmsmasters_post_type = get_post_type();

	$published_posts = wp_count_posts($cmsmasters_post_type)->publish;
	
	
	if ($published_posts > 1) {
		echo '<aside class="post_nav">' . 
			'<div class="post_nav_inner">';
			
				previous_post_link('<span class="cmsmasters_prev_post">%link<span class="cmsmasters_prev_arrow"><span></span></span><span class="sub">' . esc_html__('previous', 'all-business') . '</span></span>');
				
				next_post_link('<span class="cmsmasters_next_post">%link<span class="cmsmasters_next_arrow"><span></span></span><span class="sub">' . esc_html__('next', 'all-business') . '</span></span>');
				
			echo '</div>' . 
		'</aside>';
	}
}



/* Get Sharing Box Function */
function all_business_sharing_box($title_box = false, $tag = 'h3') {
	$page_link = urlencode(get_permalink());
	
	$social_title = cmsmasters_title(get_the_ID(), false);
	
	$website_name = get_bloginfo('name');
	
	
	if (has_post_thumbnail() && get_post_format() != '' || get_post_type() != 'post') {
		$post_img_id = get_post_thumbnail_id();
		
		$post_img_url = wp_get_attachment_url($post_img_id);
		
		$pinterest_img = urlencode($post_img_url);
	} else {
		preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', do_shortcode(get_the_content()), $img_matches);
		
		
		if (!empty($img_matches[1][0])) {
			$first_img = $img_matches[1][0];
		} else {
			$first_img = get_template_directory_uri() . '/img/logo.png';
		}
		
		
		$pinterest_img = urlencode($first_img);
	}
	
	
	echo "<aside class=\"share_posts\">
		" . ($title_box ? "<{$tag} class=\"share_posts_title\">{$title_box}</{$tag}>" : "") . "
		<div class=\"share_posts_inner\">
			<a class=\"facebook\" href=\"https://www.facebook.com/sharer/sharer.php?display=popup&u={$page_link}\">" . esc_html__('Facebook', 'all-business') . "</a>
			<a class=\"google\" href=\"https://plus.google.com/share?url={$page_link}\">" . esc_html__('Google+', 'all-business') . "</a>
			<a class=\"twitter\" href=\"https://twitter.com/intent/tweet?text=" . urlencode(html_entity_decode(sprintf(esc_attr__("Check out '%s' on %s website", 'all-business'), $social_title, $website_name), ENT_QUOTES, 'UTF-8')) . "&url={$page_link}\">" . esc_html__('Twitter', 'all-business') . "</a>
			<a class=\"pinterest\" href=\"https://pinterest.com/pin/create/button/?url={$page_link}&media={$pinterest_img}&description={$social_title}\">" . esc_html__('Pinterest', 'all-business') . "</a>
		</div>
	</aside>
";
}



/* Get About Author Box Function */
function all_business_author_box($title_box = false, $tag = 'h3', $author_tag = 'h4') {
	$user_email = get_the_author_meta('user_email');
	
	
	$user_first_name = get_the_author_meta('first_name') ? get_the_author_meta('first_name') : false;
	
	$user_last_name = get_the_author_meta('last_name') ? get_the_author_meta('last_name') : false;
	
	$user_url = get_the_author_meta('url') ? get_the_author_meta('url') : false;
	
	$user_description = get_the_author_meta('description') ? get_the_author_meta('description') : false;
	
	if ($user_description) {
		echo '<aside class="about_author">';
		
		
		if ($title_box) {
			echo '<' . esc_html($tag) . ' class="about_author_title">' . esc_html($title_box) . '</' . esc_html($tag) . '>';
		}
		
		
		echo '<div class="about_author_inner">';
		
		
		$out = '';
		
		
		if ($user_first_name) {
			$out .= $user_first_name;
		}
		
		
		if ($user_first_name && $user_last_name) {
			$out .= ' ' . $user_last_name;
		} elseif ($user_last_name) {
			$out .= $user_last_name;
		}
		
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ' (';
		}
		
		
		if (get_the_author()) {
			$out .= get_the_author();
		}
		
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ')';
		}
		
		
		echo '<div class="about_author_cont_title_wrap">' . 
			'<figure class="about_author_avatar">' . 
				get_avatar($user_email, 60, get_option('avatar_default')) . 
			'</figure>';
			
			
			if ($out != '') {
				echo '<' . esc_html($author_tag) . ' class="about_author_cont_title vcard author"><span class="fn" rel="author">' . esc_html($out) . '</span></' . esc_html($author_tag) . '>';
			}
		echo '</div>' . 
		
		'<div class="about_author_cont">';
		
		
		if ($user_description) {
			echo '<p>' . str_replace("\n", '<br />', $user_description) . '</p>';
		}
		
		
		if ($user_url) {
			echo '<a href="' . esc_url($user_url) . '" title="' . esc_attr(get_the_author()) . ' ' . esc_attr__('website', 'all-business') . '" target="_blank">' . esc_html($user_url) . '</a>';
		}
		
		
		echo '</div>' . 
			'</div>' . 
		'</aside>';
	}
}



/* Get Related, Popular & Recent Posts Function */
function all_business_related($tag = 'h3', $box_type = false, $tgsarray = null, $items_number = 5, $pause_time = 5, $type = 'post', $taxonomy = null) {
	if ( 
		($box_type == 'related' && !empty($tgsarray)) || 
		$box_type == 'popular' || 
		$box_type == 'recent' 
	) {
		$autoplay = ((int) $pause_time > 0) ? $pause_time * 1000 : 'false';
		
		
		$r_args = array( 
			'posts_per_page' => $items_number, 
			'post_status' => 'publish', 
			'ignore_sticky_posts' => 1, 
			'post__not_in' => array(get_the_ID()), 
			'post_type' => $type 
		);
		
		
		if ($box_type == 'related' && !empty($tgsarray)) {
			if ($type == 'post') {
				$r_args['tag__in'] = $tgsarray;
			} elseif ($type != 'post' && $taxonomy) {
				$r_args['tax_query'] = array( 
					array( 
						'taxonomy' => $taxonomy, 
						'field' => 'term_id', 
						'terms' => $tgsarray 
					) 
				);
			}
		} elseif ($box_type == 'popular') {
			$r_args['order'] = 'DESC';
			
			$r_args['orderby'] = 'meta_value_num';
			
			$r_args['meta_key'] = 'cmsmasters_likes';
		}
		
		
		$r_query = new WP_Query($r_args);
		
		
		echo "<aside class=\"cmsmasters_single_slider" . (($type == 'campaign') ? ' cmsmasters_single_slider_campaign' : '') . "\">
			<" . esc_html($tag) . " class=\"cmsmasters_single_slider_title\">";
			
			
			if ($type == 'post') {
				esc_html_e('More posts', 'all-business');
			} elseif ($type == 'campaign') {
				esc_html_e('More campaigns', 'all-business');
			} else {
				esc_html_e('More projects', 'all-business');
			}
			
			
			echo "</" . esc_html($tag) . ">";
			
			
			if ($r_query->have_posts()) {
				echo "<div class=\"cmsmasters_single_slider_inner\">
					<script type=\"text/javascript\">
						jQuery(document).ready(function () { 
							var container = jQuery('.cmsmasters_single_slider_wrap'), 
								containerWidth = container.width(), 
								contentWrap = container.closest('.content_wrap'), 
								firstPost = container.find('.cmsmasters_single_slider_item'), 
								postMinWidth = Number(firstPost.css('minWidth').replace('px', '')), 
								postThreeColumns = (postMinWidth * 4) - 1, 
								postTwoColumns = (postMinWidth * 3) - 1, 
								postOneColumns = (postMinWidth * 2) - 1, 
								itemsNumber = 2;
							
							
							if (contentWrap.hasClass('fullwidth')) {
								itemsNumber = 3;
							} else if (contentWrap.hasClass('r_sidebar') || contentWrap.hasClass('l_sidebar')) {
								itemsNumber = 3;
							}
							
							
							jQuery('.cmsmasters_single_slider_wrap').owlCarousel( {
								items : 				itemsNumber, 
								itemsDesktop : 			false, 
								itemsDesktopSmall : 	[postThreeColumns, 3], 
								itemsTablet : 			[postTwoColumns, 2], 
								itemsMobile : 			[postOneColumns, 1], 
								transitionStyle : 		false, 
								rewindNav : 			true, 
								slideSpeed : 			200, 
								paginationSpeed : 		800, 
								rewindSpeed : 			1000, 
								autoPlay : 				{$autoplay}, 
								stopOnHover : 			true, 
								autoHeight : 			true, 
								addClassActive : 		true, 
								responsiveBaseWidth : 	'.cmsmasters_single_slider_wrap', 
								pagination : 			false, 
								navigation : 			true, 
								navigationText : [ 
									'<span class=\"cmsmasters_prev_arrow\"><span></span></span>', 
									'<span class=\"cmsmasters_next_arrow\"><span></span></span>' 
								] 
							} );
						} );	
					</script>
					<div class=\"cmsmasters_single_slider_wrap cmsmasters_owl_slider\">";
						while ($r_query->have_posts()) : $r_query->the_post();
							echo "<div id=\"post-"; the_ID(); echo"\" class=\"cmsmasters_single_slider_item\">";
								all_business_get_post_color(get_the_ID(), get_post_format(), 'single');
								echo "<div class=\"cmsmasters_single_slider_item_outer\">";
								
									all_business_thumb(get_the_ID(), 'cmsmasters-single-project-thumb', true, false, true, false, true, true, false, false, false, 'cmsmasters_theme_icon_image');
									
									echo "<div class=\"cmsmasters_single_slider_item_inner\">
										<h4 class=\"cmsmasters_single_slider_item_title\">
											<a href=\"" . esc_url(get_permalink()) . "\">" . cmsmasters_title(get_the_ID(), false) . "</a>
										</h4>
									</div>
								</div>
							</div>";
						endwhile;
					echo "</div>";
			} else {
				echo "<h5 class=\"cmsmasters_single_slider_no_items\">";
				
				
				if ($type == 'post') {
					esc_html_e('No posts found', 'all-business');
				} elseif ($type == 'campaign') {
					esc_html_e('No campaigns found', 'all-business');
				} else {
					esc_html_e('No projects found', 'all-business');
				}
				
				
				echo "</h5>";
			}
		
		
		echo "</aside>";
		
		
		wp_reset_postdata();
	}
}



/* Get Posts Author Avatar Function */
function all_business_author_avatar($template_type = 'page') {
	$user_email = get_the_author_meta('user_email') ? get_the_author_meta('user_email') : false;
	
	
	if ($template_type == 'page') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	} else if ($template_type == 'post') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	}
}



/* Get Category List */
function all_business_get_the_category_list($cmsmasters_id, $taxonomy, $sep = '', $before = '', $after = '') {
	$terms = get_the_terms($cmsmasters_id, $taxonomy);
	
	
	if (is_wp_error($terms)) {
		return $terms;
	}
	
	
	if (empty($terms)) {
		return false;
	}
	
	
	$links = array();
	
	
	foreach ($terms as $term) {
		$link = get_term_link($term, $taxonomy);
		
		
		if (is_wp_error($link)) {
			return $link;
		}
		
		
		$links[] = '<a href="' . esc_url($link) . '" class="cmsmasters_cat_color cmsmasters_cat_' . esc_attr($term->term_id) . '" id="cmsmasters_cat_' . esc_attr($term->term_id) . '" rel="category tag">' . esc_html($term->name) . '</a>';
	}
	
	
    $term_links = apply_filters("term_links-$taxonomy", $links);
	
	
	return $before . implode($sep, $term_links) . $after;
}



/* Get Pingbacks & Trackbacks Function */
if (!function_exists('all_business_get_post_pings')) {

function all_business_get_post_pings($id, $tag = 'h3') {
	$out = '';
	
	$pings = get_comments(array(
		'type' => 		'pings',
		'post_id' => 	$id
	));
	
	
	if (pings_open($id) && sizeof($pings) > 0) {
		$out .= '<aside class="cmsmasters_pings_list">' . "\n" .
			'<' . esc_html($tag) . '>' . esc_html__('Trackbacks and Pingbacks', 'all-business') . '</' . esc_html($tag) . '>' . "\n" .
			'<div class="cmsmasters_pings_wrap">' . "\n" .
				'<ol class="pingslist">' . "\n";
		
		
		$out .= wp_list_comments(array(
			'short_ping' => 	true,
			'echo' => 			false
		), $pings);
		
		
		$out .= '</ol>' . "\n" .
			'</div>' . "\n" .
		'</aside>';
	}
	
	
	return $out;
}

}

