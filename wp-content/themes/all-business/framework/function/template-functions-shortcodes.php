<?php 
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.8
 * 
 * Template Functions for Shortcodes
 * Created by CMSMasters
 * 
 */


/**
 * Posts Slider Functions
 */



/* Get Posts Hightlight Function */
function all_business_get_slider_post_color($cmsmasters_id, $type = 'post', $show = true) {
	$cmsmasters_slider_post_color = get_post_meta($cmsmasters_id, 'cmsmasters_post_color', true);
	$cmsmasters_slider_project_color = get_post_meta($cmsmasters_id, 'cmsmasters_project_color', true);
	
	if ($cmsmasters_slider_post_color !='') {
		$out = '<style type="text/css">';
			if ($type == 'post') { 
				$out .= '#post-' . $cmsmasters_id . '.post .cmsmasters_slider_post_cont .cmsmasters_post_cont_info span a:hover,' . 
				'#post-' . $cmsmasters_id . '.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_footer .cmsmasters_post_read_more,' . 
				'#post-' . $cmsmasters_id . '.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_footer .cmsmasters_slider_post_meta_info > a:hover:before,' . 
				'#post-' . $cmsmasters_id . '.post .cmsmasters_slider_post_cont .cmsmasters_slider_post_footer .cmsmasters_slider_post_meta_info > a.active:before {' . 
					'color:' . $cmsmasters_slider_post_color . ';' . 
				'}';
				
				$out .= '#post-' . $cmsmasters_id . '.post .cmsmasters_slider_post_cont .thumb_wrap .cmsmasters_slider_post_header:after {' . 
					'background:-moz-linear-gradient(top,  rgba(0,0,0,0) 0%, ' . $cmsmasters_slider_post_color . ' 100%);' . 
					'background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,' . $cmsmasters_slider_post_color . ' 100%);' . 
					'background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,' . $cmsmasters_slider_post_color . ' 100%);' . 
					'filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#00000000", endColorstr="#000000",GradientType=0 );' . 
				'}';
			}
		
		$out .= '</style>';
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
	
	if ($cmsmasters_slider_project_color !='') {
		$out = '<style type="text/css">';
			if ($type == 'project') { 
				$out .= '#post-' . $cmsmasters_id . '.project .slider_project_outer .slider_project_inner {' . 
					'background-color:' . $cmsmasters_slider_project_color . ';' . 
				'}';
				
				$out .= '#post-' . $cmsmasters_id . '.project .slider_project_outer .slider_project_inner:before {' . 
					'background:-moz-linear-gradient(top,  rgba(0,0,0,0) 0%, ' . $cmsmasters_slider_project_color . ' 100%);' . 
					'background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,' . $cmsmasters_slider_project_color . ' 100%);' . 
					'background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,' . $cmsmasters_slider_project_color . ' 100%);' . 
					'filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#00000000", endColorstr="#000000",GradientType=0 );' . 
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



/* Get Posts Slider Heading Function */
function all_business_slider_post_heading($cmsmasters_id, $type = 'post', $tag = 'h1', $link_redirect = false, $link_url = false, $show = true, $link_target = false) { 
	if ($type == 'post') {
		$out = '<header class="cmsmasters_slider_post_header entry-header">' . 
			'<' . esc_html($tag) . ' class="cmsmasters_slider_post_title entry-title">' . 
				'<a href="' . esc_url(get_permalink()) . '">' . cmsmasters_title($cmsmasters_id, false) . '</a>' . 
			'</' . esc_html($tag) . '>' . 
		'</header>';
	} elseif ($type == 'project') {
		$out = '<header class="cmsmasters_slider_project_header entry-header">' . 
			'<' . esc_html($tag) . ' class="cmsmasters_slider_project_title entry-title">' . 
				'<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink())) . '"' . (($link_target == 'true') ? ' target="_blank"' : '') . '>' . cmsmasters_title($cmsmasters_id, false) . '</a>' . 
			'</' . esc_html($tag) . '>' . 
		'</header>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Slider Content/Excerpt Function */
function all_business_slider_post_exc_cont($type = 'post', $show = true) {
	if ($type == 'post') {
		$out = cmsmasters_divpdel('<div class="cmsmasters_slider_post_content entry-content">' . "\n" . 
			wpautop(theme_excerpt(20, false)) . 
		'</div>' . "\n");
	} elseif ($type == 'project') {
		$out = cmsmasters_divpdel('<div class="cmsmasters_slider_project_content entry-content">' . "\n" . 
			wpautop(theme_excerpt(20, false)) . 
		'</div>' . "\n");
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Check Posts Slider Content/Excerpt Not Empty Function */
function all_business_slider_post_check_exc_cont($type = 'post') {
	$exc = all_business_slider_post_exc_cont($type, false);
	
	$no_tags_exc = strip_tags($exc);
	
	$trim_exc = trim($no_tags_exc);
	
	
	if ($trim_exc != '') {
		return true;
	} else {
		return false;
	}
}



/* Get Posts Slider Date Function */
function all_business_get_slider_post_date($type = 'post', $show = true) {
	if ($type == 'post') {
		$out = '<span class="cmsmasters_post_date">' . 
			'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
				esc_html(get_the_date()) . 
			'</abbr>' . 
			'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
				esc_html(get_the_modified_date()) . 
			'</abbr>' . 
		'</span>';
	} elseif ($type == 'project') {
		$out = '<abbr class="published cmsmasters_slider_project_date" title="' . esc_attr(get_the_date()) . '">' . 
			esc_html(get_the_date()) . 
		'</abbr>' . 
		'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
			esc_html(get_the_modified_date()) . 
		'</abbr>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Slider Author Function */
function all_business_get_slider_post_author($type = 'post', $show = true) {
	if ($type == 'post') {
		$out = '<span class="cmsmasters_slider_post_user_name">' . 
			esc_html__('by', 'all-business') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'all-business') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	} elseif ($type == 'project') {
		$out = '<span class="cmsmasters_slider_project_user_name">' . 
			esc_html__('by', 'all-business') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'all-business') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Slider Category Function */
function all_business_get_slider_post_category($cmsmasters_id, $taxonomy, $type = 'post', $show = true) {
	$out = '';
	
	
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($type == 'post') {
			$out = '<span class="cmsmasters_slider_post_category">' . 
				esc_html__('In ', 'all-business') . 
				all_business_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
			'</span>';
		} elseif ($type == 'project') {
			$out = '<span class="cmsmasters_slider_project_category">' . 
				all_business_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
			'</span>';
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Slider Like Function */
function all_business_slider_post_like($type = 'post', $show = true) {
	if ($type == 'post') {
		$out = cmsmastersLike(false);
	} elseif ($type == 'project') {
		$out = cmsmastersLike(false);
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Slider Comments Function */
function all_business_get_slider_post_comments($type = 'post', $show = true) {
	if (comments_open()) {
		if ($type == 'post') {
			$out = '<a class="cmsmasters_post_comments cmsmasters_theme_icon_custom_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'all-business') . ' ' . esc_attr(get_the_title()) . '">' . 
				'<span>' . esc_html(get_comments_number()) . '</span>' . 
			'</a>';
		} elseif ($type == 'project') {
			$out = '<a class="cmsmasters_post_comments cmsmasters_theme_icon_custom_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'all-business') . ' ' . esc_attr(get_the_title()) . '">' . 
				'<span>' . esc_html(get_comments_number()) . '</span>' . 
			'</a>';
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Posts Slider More Button/Link Function */
function all_business_slider_post_more($cmsmasters_id, $show = true) {
	$cmsmasters_post_read_more = get_post_meta($cmsmasters_id, 'cmsmasters_post_read_more', true);
	
	
	if ($cmsmasters_post_read_more == '') {
		$cmsmasters_post_read_more = esc_attr__('Continue reading', 'all-business');
	}
	
	
	$out = '<a class="cmsmasters_post_read_more" href="' . esc_url(get_permalink($cmsmasters_id)) . '">' . esc_html($cmsmasters_post_read_more) . '</a>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}

