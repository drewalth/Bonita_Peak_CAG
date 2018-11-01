<?php 
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.8
 * 
 * Template Functions for Portfolio & Project
 * Created by CMSMasters
 * 
 */


/* Get Projects Hightlight Function */
function all_business_get_project_color($cmsmasters_id, $show = true) {
	$cmsmasters_project_color = get_post_meta($cmsmasters_id, 'cmsmasters_project_color', true);
	
	if ($cmsmasters_project_color !='') {
		$out = '<style type="text/css">';
		
			$out .= '.portfolio.grid #post-' . $cmsmasters_id . '.project .project_inner .cmsmasters_project_header .cmsmasters_project_title a:hover,' . 
			'.portfolio.grid #post-' . $cmsmasters_id . '.project .project_inner .cmsmasters_project_cont_info a:hover,' . 
			'.portfolio.grid #post-' . $cmsmasters_id . '.project .project_inner .cmsmasters_project_footer .cmsmasters_project_read_more,' . 
			'.portfolio.grid #post-' . $cmsmasters_id . '.project .project_inner .cmsmasters_project_footer .cmsmasters_project_meta_info > a:hover:before,' . 
			'.portfolio.grid #post-' . $cmsmasters_id . '.project .project_inner .cmsmasters_project_footer .cmsmasters_project_meta_info > a.active:before,' . 
			'.portfolio.grid #post-' . $cmsmasters_id . '.project .cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_open_post_link:before,' . 
			'.portfolio.opened-article #post-' . $cmsmasters_id . '.project.format-gallery .preloader .cmsmasters_img_rollover a span:before {' . 
				'color:' . $cmsmasters_project_color . ';' .
			'}';
			
			$out .= '.portfolio.grid #post-' . $cmsmasters_id . '.project .cmsmasters_img_rollover_wrap .cmsmasters_img_rollover,' . 
			'.portfolio.opened-article #post-' . $cmsmasters_id . '.project.format-gallery .preloader .cmsmasters_img_rollover,' . 
			'.portfolio.opened-article #post-' . $cmsmasters_id . '.project .owl-controls .owl-buttons > div:hover {' . 
				'background-color:rgba(' . color2rgb($cmsmasters_project_color) . ', 0.9);' . 
			'}';
		
			$out .= '.portfolio.puzzle #post-' . $cmsmasters_id . '.project .project_inner,' . 
			'.portfolio.opened-article #post-' . $cmsmasters_id . '.cmsmasters_single_slider_item .cmsmasters_single_slider_item_inner {' . 
				'background-color:' . $cmsmasters_project_color . ';' .
			'}';
			
			$out .= '.portfolio.puzzle #post-' . $cmsmasters_id . '.project .project_inner:before,' . 
			'.portfolio.opened-article #post-' . $cmsmasters_id . '.cmsmasters_single_slider_item .cmsmasters_single_slider_item_inner:before {' . 
				'background:-moz-linear-gradient(top,  rgba(0,0,0,0) 0%, ' . $cmsmasters_project_color . ' 100%);' . 
				'background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,' . $cmsmasters_project_color . ' 100%);' . 
				'background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,' . $cmsmasters_project_color . ' 100%);' . 
				'filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#00000000", endColorstr="#000000",GradientType=0 );' . 
			'}';
			
		$out .= '</style>';
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}

 
/* Get Projects More Button/Link Function */
function all_business_project_more($cmsmasters_id, $show = true) {
	$cmsmasters_project_read_more = get_post_meta($cmsmasters_id, 'cmsmasters_project_read_more', true);
	
	
	if ($cmsmasters_project_read_more == '') {
		$cmsmasters_project_read_more = esc_attr__('Read More', 'all-business');
	}
	
	
	$out = '<a class="cmsmasters_project_read_more" href="' . esc_url(get_permalink($cmsmasters_id)) . '">' . esc_html($cmsmasters_project_read_more) . '</a>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Projects Heading Function */
function all_business_project_heading($cmsmasters_id, $tag = 'h1', $show = true, $link_redirect = false, $link_url = false, $link_target = false) { 
	$out = '<header class="cmsmasters_project_header entry-header">' . 
		'<' . esc_html($tag) . ' class="cmsmasters_project_title entry-title">' . 
			'<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink())) . '"' . (($link_target == 'true') ? ' target="_blank"' : '') . '>' . cmsmasters_title($cmsmasters_id, false) . '</a>' . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Projects Heading Without Link Function */
function all_business_project_title_nolink($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '<' . esc_html($tag) . ' class="cmsmasters_project_title entry-title">' . 
		cmsmasters_title($cmsmasters_id, false) . 
	'</' . esc_html($tag) . '>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Projects Content/Excerpt Function */
function all_business_project_exc_cont($show = true) {
	$out = cmsmasters_divpdel('<div class="cmsmasters_project_content entry-content">' . "\n" . 
		wpautop(theme_excerpt(20, false)) . 
	'</div>' . "\n");
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Check Projects Content/Excerpt Not Empty Function */
function all_business_project_check_exc_cont() {
	$exc = all_business_project_exc_cont(false);
	
	$no_tags_exc = strip_tags($exc);
	
	$trim_exc = trim($no_tags_exc);
	
	
	if ($trim_exc != '') {
		return true;
	} else {
		return false;
	}
}



/* Get Projects Category Function */
function all_business_get_project_category($cmsmasters_id, $taxonomy, $template_type = 'page', $show = true) {
	$out = '';
	
	
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out = '<span class="cmsmasters_project_category">' . 
				esc_html__('in', 'all-business') . ' ' . 
				all_business_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = all_business_get_global_options();
			
			
			if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_cat']) {
				$out .= '<div class="project_details_item">' . 
					'<div class="project_details_item_title">' . esc_html__('Categories', 'all-business') . ':' . '</div>' . 
					'<div class="project_details_item_desc">' . 
						'<span class="cmsmasters_project_category">' . 
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
function all_business_get_project_likes($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = cmsmastersLike(false);
	} elseif ($template_type == 'post') {
		$cmsmasters_option = all_business_get_global_options();
		
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_like']) {
			$out = '<div class="project_details_item">' . 
				'<div class="project_details_item_title">' . esc_html__('Likes', 'all-business') . ':' . '</div>' . 
				'<div class="project_details_item_desc details_item_desc_like">' . 
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



/* Get Projects Comments Function */
function all_business_get_project_comments($template_type = 'page', $show = true) {
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = '<a class="cmsmasters_post_comments cmsmasters_theme_icon_custom_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'all-business') . ' ' . esc_attr(get_the_title()) . '">' . 
				'<span>' . esc_html(get_comments_number()) . '</span>' . 
			'</a>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = all_business_get_global_options();
			
			
			$out = '';
			
			
			if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_comment']) {
				$out .= '<div class="project_details_item">' . 
					'<div class="project_details_item_title">' . esc_html__('Comments', 'all-business') . ':' . '</div>' . 
					'<div class="project_details_item_desc details_item_desc_comments">' . 
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



/* Get Projects Date Function */
function all_business_get_project_date($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<abbr class="published cmsmasters_project_date" title="' . esc_attr(get_the_date()) . '">' . 
			esc_html(get_the_date()) . 
		'</abbr>' . 
		'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
			esc_html(get_the_modified_date()) . 
		'</abbr>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = all_business_get_global_options();
		
		$out = '';
		
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_date']) {
			$out .= '<div class="project_details_item">' . 
				'<div class="project_details_item_title">' . esc_html__('Date', 'all-business') . ':' . '</div>' . 
				'<div class="project_details_item_desc">' . 
					'<abbr class="published cmsmasters_project_date" title="' . esc_attr(get_the_date()) . '">' . 
						esc_html(get_the_date()) . 
					'</abbr>' . 
					'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
						esc_html(get_the_modified_date()) . 
					'</abbr>' . 
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



/* Get Projects Author Function */
function all_business_get_project_author($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<span class="cmsmasters_project_author">' . 
			esc_html__('by', 'all-business') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Projects by', 'all-business') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = all_business_get_global_options();
		
		$out = '';
		
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_author']) {
			$out .= '<div class="project_details_item">' . 
				'<div class="project_details_item_title">' . esc_html__('Author', 'all-business') . ':' . '</div>' . 
				'<div class="project_details_item_desc vcard author">' . 
					'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Projects by', 'all-business') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="cmsmasters_project_author fn"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
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



/* Get Projects Tags Function */
function all_business_get_project_tags($cmsmasters_id, $taxonomy, $template_type = 'page', $show = true) {
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out = '<span class="cmsmasters_project_tags">' . 
				get_the_term_list($cmsmasters_id, $taxonomy, '', ', ', '') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = all_business_get_global_options();
			$out = '';
			
			if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_tag']) {
				$out = '<div class="project_details_item">' . 
					'<div class="project_details_item_title">' . esc_html__('Tags', 'all-business') . ':' . '</div>' . 
					'<div class="project_details_item_desc">' . 
						'<span class="cmsmasters_project_tags">' . 
							get_the_term_list($cmsmasters_id, $taxonomy, '', ', ', '') . 
						'</span>' . 
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



/* Get Projects Features Function */
function all_business_get_project_features($features_position = 'features', $features = '', $features_title = false, $tag = 'h2', $show = true) {
	if (
		!empty($features[0][0]) && 
		!empty($features[0][1])
	) {
		$out = '';
		
		if ($features_position == 'features') {
			$out .= '<div class="project_features entry-meta">' . 
				($features_title ? '<' . esc_html($tag) . ' class="project_features_title">' . esc_html($features_title) . '</' . esc_html($tag) . '>' : '');
		}
		
		
		foreach ($features as $feature) {
			if ($feature[0] != '' && $feature[1] != '') {
				$feature_lists = explode("\n", $feature[1]);
				
				$out .= '<div class="project_' . esc_attr($features_position) . '_item">' . 
					'<div class="project_' . esc_attr($features_position) . '_item_title">' . esc_html($feature[0]) . '</div>' . 
					'<div class="project_' . esc_attr($features_position) . '_item_desc">';
				
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



/* Get Projects Link Function */
function all_business_project_link($link_text, $link_url, $link_target, $show = true) {
	$cmsmasters_option = all_business_get_global_options();
	$out = '';
	
	if ( 
		$cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_link'] && 
		$link_text != '' && 
		$link_url != '' 
	) {
		$out = '<div class="project_details_item">' . 
			'<div class="project_details_item_title">' . esc_html__('Project Link', 'all-business') . ':' . '</div>' . 
			'<div class="project_details_item_desc">' . 
				'<span class="cmsmasters_project_tags">' . 
					'<a href="' . esc_url($link_url) . '" title="' . esc_attr($link_text) . '"' . (($link_target == 'true') ? ' target="_blank"' : '') . '>' . esc_html($link_text) . '</a>' . 
				'</span>' . 
			'</div>' . 
		'</div>';
	}
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}

