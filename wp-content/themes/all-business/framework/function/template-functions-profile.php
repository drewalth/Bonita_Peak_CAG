<?php 
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.0
 * 
 * Template Functions for Profiles & Profile
 * Created by CMSMasters
 * 
 */


/* Get Profiles Hightlight Function */
function all_business_get_profile_color($cmsmasters_id, $layout_type = 'horizontal', $show = true) {
	$cmsmasters_profile_color = get_post_meta($cmsmasters_id, 'cmsmasters_profile_color', true);
	
	if ($cmsmasters_profile_color !='') {
		$out = '<style type="text/css">';
			$out .= '#post-' . $cmsmasters_id . '.profile .pl_social_list li a:hover,' . 
			'#post-' . $cmsmasters_id . '.profile > .pl_title_wrap a:hover,' . 
			'#post-' . $cmsmasters_id . '.profile > .pl_title_wrap .pl_subtitle {' . 
				'color:' . $cmsmasters_profile_color . ';' . 
			'}';
			
			if ($layout_type == 'horizontal') {
				$out .= '#post-' . $cmsmasters_id . '.profile .pl_img_wrap .pl_title_wrap:after {' . 
					'background:-moz-linear-gradient(top,  rgba(0,0,0,0) 0%, ' . $cmsmasters_profile_color . ' 100%);' . 
					'background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,' . $cmsmasters_profile_color . ' 100%);' . 
					'background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,' . $cmsmasters_profile_color . ' 100%);' . 
					'filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#00000000", endColorstr="#000000",GradientType=0 );' . 
				'}';
			}
			
			if ($layout_type == 'vertical') {
				$out .= '#post-' . $cmsmasters_id . '.profile .pl_content .entry-title a:hover,' . 
				'#post-' . $cmsmasters_id . '.profile .pl_content .pl_subtitle,' . 
				'#post-' . $cmsmasters_id . '.profile .pl_img .pl_noimg:before {' . 
					'color:' . $cmsmasters_profile_color . ';' .  
				'}';
			}
		
		$out .= '</style>';
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}


/* Get Profiles Heading Function */
function all_business_profile_heading($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '<header class="cmsmasters_profile_header entry-header">' . 
		'<' . esc_html($tag) . ' class="cmsmasters_profile_title entry-title">' . 
			'<a href="' . esc_url(get_permalink()) . '">' . cmsmasters_title($cmsmasters_id, false) . '</a>' . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Profiles Heading Without Link Function */
function all_business_profile_title_nolink($cmsmasters_id, $tag = 'h1', $sub_title = false, $tag_sub = 'h5', $show = true) { 
	$out = '<' . esc_html($tag) . ' class="cmsmasters_profile_title entry-title">' . 
		cmsmasters_title($cmsmasters_id, false) . 
	'</' . esc_html($tag) . '>';
	
	
	if ($sub_title) {
		$out .= '<' . $tag_sub . ' class="cmsmasters_profile_subtitle">' . 
			esc_html($sub_title) . 
		'</' . esc_html($tag) . '>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}


/* Get Profiles Content/Excerpt Function */
function all_business_profile_exc_cont($show = true) {
	$out = cmsmasters_divpdel('<div class="cmsmasters_profile_content entry-content">' . "\n" . 
		wpautop(theme_excerpt(20, false)) . 
	'</div>' . "\n");
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Profiles Category Function */
function all_business_get_profile_category($cmsmasters_id, $taxonomy, $template_type = 'page', $show = true) {
	$out = '';
	
	
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out .= '<span class="cmsmasters_profile_category">' . 
				all_business_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = all_business_get_global_options();
			
			
			if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_profile_post_cat']) {
				$out .= '<div class="profile_details_item">' . 
					'<div class="profile_details_item_title">' . esc_html__('Categories', 'all-business') . ':' . '</div>' . 
					'<div class="profile_details_item_desc">' . 
						'<span class="cmsmasters_profile_category">' . 
							all_business_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
						'</span>' . 
					'</div>' . 
				'</div>';
			}
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Projects Like Function */
function all_business_get_profile_likes($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = cmsmastersLike(false);
	} elseif ($template_type == 'post') {
		$cmsmasters_option = all_business_get_global_options();
		
		$out = '';
		
		
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_profile_post_like']) {
			$out = '<div class="profile_details_item">' . 
				'<div class="profile_details_item_title">' . esc_html__('Like', 'all-business') . ':' . '</div>' . 
				'<div class="profile_details_item_desc details_item_desc_like">' . 
					cmsmastersLike(false) . 
				'</div>' . 
			'</div>';
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Profiles Comments Function */
function all_business_get_profile_comments($template_type = 'page', $show = true) {
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = '<a class="cmsmasters_profile_comments cmsmasters_theme_icon_custom_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'all-business') . ' ' . esc_attr(get_the_title()) . '">' . esc_html(get_comments_number()) . '</a>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = all_business_get_global_options();
			
			$out = '';
			
			
			if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_profile_post_comment']) {
				$out .= '<div class="profile_details_item">' . 
					'<div class="profile_details_item_title">' . esc_html__('Comments', 'all-business') . ':' . '</div>' . 
					'<div class="profile_details_item_desc details_item_desc_comments">' . 
						'<a class="cmsmasters_post_comments cmsmasters_theme_icon_custom_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'all-business') . ' ' . esc_attr(get_the_title()) . '">' . 
							'<span>' . esc_html(get_comments_number()) . '</span>' . 
						'</a>' . 
					'</div>' . 
				'</div>';
			}
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Profiles Features Function */
function all_business_get_profile_features($features_position = 'features', $features = '', $features_title = false, $tag = 'h2', $show = true) {
	if (
		!empty($features[0][0]) && 
		!empty($features[0][1])
	) {
		$out = '';
		
		if ($features_position == 'features') {
			$out .= '<div class="profile_features entry-meta">' . 
				($features_title ? '<' . esc_html($tag) . ' class="profile_features_title">' . esc_html($features_title) . '</' . esc_html($tag) . '>' : '');
		}
		
		
		foreach ($features as $feature) {
			if ($feature[0] != '' && $feature[1] != '') {
				$feature_lists = explode("\n", $feature[1]);
				
				$out .= '<div class="profile_' . esc_attr($features_position) . '_item">' . 
					'<div class="profile_' . esc_attr($features_position) . '_item_title">' . esc_html($feature[0]) . '</div>' . 
					'<div class="profile_' . esc_attr($features_position) . '_item_desc">';
				
						foreach ($feature_lists as $feature_list) {
							$out .= trim($feature_list);
						}
				
					$out .= '</div>' . 
				'</div>';
			}
		}
		
		
		if ($features_position == 'features') {
			$out .= '</div>';
		}
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Profiles Social Icons Function */
function all_business_profile_social_icons($social_icons, $title_box = false, $tag = 'h2', $show = true) {
	if ($social_icons != '') {
		$out = '<div class="profile_social_icons">';
			if ($title_box) {
				$out .= '<' . esc_html($tag) . ' class="profile_social_icons_title">' . esc_html($title_box) . '</' . esc_html($tag) . '>';
			}
			
			$out .= '<ul class="profile_social_icons_list">';
			
				foreach($social_icons as $social_icon) {
					$social_icon_item = explode('|', str_replace(' ', '', $social_icon));
					
					$social_icon_icon = $social_icon_item[0];
					$social_icon_link = $social_icon_item[1];
					$social_icon_title = $social_icon_item[2];
					$social_icon_target = $social_icon_item[3];
					
					$out .= '<li>' . 
						'<a href="' . esc_url($social_icon_link) . '" class="' . esc_attr($social_icon_icon) . '" title="' . esc_attr($social_icon_title) . '"' . (($social_icon_target == 'true') ? ' target="_blank"' : '') . '></a>' . 
					'</li>';
				}
			
			$out .= '</ul>' . 
		'</div>';
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}

