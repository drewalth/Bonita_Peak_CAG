<?php 
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.0
 * 
 * Template Functions for Blog & Post
 * Created by CMSMasters
 * 
 */


/* Get Posts Hightlight Function */
function all_business_get_post_color($cmsmasters_id, $post_format, $layout_type = 'default', $show = true) {
	$cmsmasters_post_color = get_post_meta($cmsmasters_id, 'cmsmasters_post_color', true);
	
	if ($cmsmasters_post_color !='') {
		$out = '<style type="text/css">';
		
			$out .= '#post-' . $cmsmasters_id . '.post .cmsmasters_post_cont_info a:hover,' . 
			'#post-' . $cmsmasters_id . '.post .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_header a:hover,' . 
			'#post-' . $cmsmasters_id . '.post .cmsmasters_post_meta_info .cmsmastersLike.active:before,' . 
			'#post-' . $cmsmasters_id . '.post .cmsmasters_post_meta_info .cmsmastersLike:hover:before,' . 
			'#post-' . $cmsmasters_id . '.post .cmsmasters_post_meta_info .cmsmasters_post_comments:hover:before,' . 
			'#post-' . $cmsmasters_id . '.post .cmsmasters_post_footer .cmsmasters_post_read_more {' . 
				'color:' . $cmsmasters_post_color . ';' . 
			'}';
			
			$out .= '#post-' . $cmsmasters_id . '.post .cmsmasters_post_img_wrap .owl-controls .owl-buttons > div:hover {' . 
				'background-color:' . $cmsmasters_post_color . ';' . 
			'}';
			
			$out .= '#post-' . $cmsmasters_id . '.post .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .cmsmasters_post_header:after {' . 
				'background:-moz-linear-gradient(top,  rgba(0,0,0,0) 0%, ' . $cmsmasters_post_color . ' 100%);' . 
				'background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,' . $cmsmasters_post_color . ' 100%);' . 
				'background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,' . $cmsmasters_post_color . ' 100%);' . 
				'filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#00000000", endColorstr="#000000",GradientType=0 );' . 
			'}';
			
			if ($post_format == 'video') {
				$out .= '#post-' . $cmsmasters_id . '.post .cmsmasters_post_img_wrap .cmsmasters_post_header a:hover {' . 
					'color:' . $cmsmasters_post_color . ';' . 
				'}';
			}
			
			if ($layout_type == 'default') {
				$out .= '#post-' . $cmsmasters_id . '.post .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap:after {' . 
					'-webkit-box-shadow:inset 0 -60px 56px 0' . $cmsmasters_post_color . ';' . 
					'-moz-box-shadow:inset 0 -60px 56px 0' . $cmsmasters_post_color . ';' . 
					'box-shadow:inset 0 -60px 56px 0' . $cmsmasters_post_color . ';' . 
				'}';
			}
			
			if ($layout_type == 'timeline') {
				$out .= '#post-' . $cmsmasters_id . '.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap:hover + .cmsmasters_post_bullet {' . 
					'background-color:' . $cmsmasters_post_color . ';' . 
				'}';
			}
			
			if ($layout_type == 'puzzle') {
				$out .= '#post-' . $cmsmasters_id . '.post .cmsmasters_post_cont .puzzle_post_content_wrapper .cmsmasters_post_header a:hover,' . 
				'#post-' . $cmsmasters_id . '.post .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_wrap_info a:hover,' . 
				'#post-' . $cmsmasters_id . '.post .cmsmasters_post_cont .cmsmasters_post_read_more,' . 
				'#post-' . $cmsmasters_id . '.post .cmsmasters_post_cont .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper .puzzle_post_content_wrap .cmsmasters_post_footer .cmsmasters_post_wrap_info a,' . 
				'#post-' . $cmsmasters_id . '.post .cmsmasters_post_cont .puzzle_post_img_wrap:hover + .puzzle_post_content_wrapper .puzzle_post_content_wrap .cmsmasters_post_footer .cmsmasters_post_meta_info a {' . 
					'color:' . $cmsmasters_post_color . ';' . 
				'}';
			
				$out .= '#post-' . $cmsmasters_id . '.post .cmsmasters_post_cont .puzzle_post_img_wrap > figure {' . 
					'background-color:' . $cmsmasters_post_color . ';' . 
				'}';
				
				$out .= '#post-' . $cmsmasters_id . '.post.cmsmasters_puzzle_type .cmsmasters_post_cont .puzzle_post_img_wrap .cmsmasters_post_header:after {' . 
					'background:-moz-linear-gradient(top,  rgba(0,0,0,0) 0%, ' . $cmsmasters_post_color . ' 100%);' . 
					'background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,' . $cmsmasters_post_color . ' 100%);' . 
					'background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,' . $cmsmasters_post_color . ' 100%);' . 
					'filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#00000000", endColorstr="#000000",GradientType=0 );' . 
				'}';
			}
			
			if ($layout_type == 'single') {
				$out .= '#post-' . $cmsmasters_id . '.cmsmasters_single_slider_item .cmsmasters_single_slider_item_inner {' . 
					'background-color:' . $cmsmasters_post_color . ';' . 
				'}';
				
				$out .= '#post-' . $cmsmasters_id . '.cmsmasters_single_slider_item .cmsmasters_single_slider_item_inner:before {' . 
					'background:-moz-linear-gradient(top,  rgba(0,0,0,0) 0%, ' . $cmsmasters_post_color . ' 100%);' . 
					'background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,' . $cmsmasters_post_color . ' 100%);' . 
					'background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,' . $cmsmasters_post_color . ' 100%);' . 
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


/* Get Posts Heading Function */
function all_business_post_heading($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '';
	
	
	if (cmsmasters_title($cmsmasters_id, false) != $cmsmasters_id) {
		$out = '<header class="cmsmasters_post_header entry-header">' . 
			'<' . esc_html($tag) . ' class="cmsmasters_post_title entry-title">' . 
				'<a href="' . esc_url(get_permalink()) . '">' . cmsmasters_title($cmsmasters_id, false) . '</a>' . 
			'</' . esc_html($tag) . '>' . 
		'</header>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Heading Without Link Function */
function all_business_post_title_nolink($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '';
	
	
	if (cmsmasters_title($cmsmasters_id, false) != $cmsmasters_id) {
		$out = '<header class="cmsmasters_post_header entry-header">' . 
			'<' . esc_html($tag) . ' class="cmsmasters_post_title entry-title">' . 
				cmsmasters_title($cmsmasters_id, false) . 
			'</' . esc_html($tag) . '>' . 
		'</header>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Date Function */
function all_business_get_post_date($template_type = 'page', $layout_type = 'default', $show = true) {
	if ($template_type == 'page') {
		if ($layout_type == 'default') {
			$out = '<span class="cmsmasters_post_date">' . 
				'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
					esc_html(get_the_date()) . 
				'</abbr>' . 
				'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
					esc_html(get_the_modified_date()) . 
				'</abbr>' . 
			'</span>';
		}
		
		
		if (cmsmasters_title(get_the_ID(), false) == get_the_ID()) {
			$out = '<a href="' . esc_url(get_permalink()) . '">' . $out . '</a>';
		}
	} elseif ($template_type == 'post') {
		$cmsmasters_option = all_business_get_global_options();
		
		$out = '';
		
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_date']) {
			$out .= '<span class="cmsmasters_post_date">' . 
				'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
					esc_html(get_the_date()) . 
				'</abbr>' . 
				'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
					esc_html(get_the_modified_date()) . 
				'</abbr>' . 
			'</span>';
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Author Function */
function all_business_get_post_author($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<span class="cmsmasters_post_user_name">' . 
			esc_html__('by', 'all-business') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'all-business') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author">' . 
				'<span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span>' . 
			'</a>' . 
		'</span>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = all_business_get_global_options();
		$out = '';
		
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_author']) {
			$out .= '<span class="cmsmasters_post_user_name">' . 
				esc_html__('by', 'all-business') . ' ' . 
				'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'all-business') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author">' . 
					'<span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span>' . 
				'</a>' . 
			'</span>';
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Category Function */
function all_business_get_post_category($cmsmasters_id, $taxonomy, $template_type = 'page', $show = true) {
	$out = '';
	
	
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out .= '<span class="cmsmasters_post_category">' . 
				esc_html__('In', 'all-business') . ' ' . 
				all_business_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = all_business_get_global_options();
			
			
			if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_cat']) {
				$out .= '<span class="cmsmasters_post_category">' . 
					esc_html__('In', 'all-business') . ' ' . 
					all_business_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
				'</span>';
			}
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Tags Function */
function all_business_get_post_tags($template_type = 'page', $show = true) {
	if (get_the_tags()) {
		$cmsmasters_option = all_business_get_global_options();
		$out = '';
		
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_tag']) {
			$out .= '<span class="cmsmasters_post_tags">' . 
				get_the_tag_list(esc_html__('tags', 'all-business') . ' ', ', ', '') . 
			'</span>';
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Posts Content/Excerpt Function */
function all_business_post_exc_cont($show = true) {
	$out = cmsmasters_divpdel('<div class="cmsmasters_post_content entry-content">' . "\n" . 
		wpautop(theme_excerpt(20, false)) . 
	'</div>' . "\n");
	
	
	if (theme_excerpt(20, false) != '') {
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Posts Like Function */
function all_business_get_post_likes($template_type = 'page', $show = true) {
	$out = '';
	
	
	if ($template_type == 'page') {
		$out = cmsmastersLike(false);
	} elseif ($template_type == 'post') {
		$cmsmasters_option = all_business_get_global_options();
		
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_like']) {
			$out = cmsmastersLike(false);
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Comments Function */
function all_business_get_post_comments($template_type = 'page', $show = true) {
	$out = '';
	
	
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = '<a class="cmsmasters_post_comments cmsmasters_theme_icon_custom_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'all-business') . ' ' . esc_attr(get_the_title()) . '">' . 
				'<span>' . esc_html(get_comments_number()) . '</span>' . 
			'</a>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = all_business_get_global_options();
			$out = '';
			
			if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_comment']) {
				$out = '<a class="cmsmasters_post_comments cmsmasters_theme_icon_custom_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'all-business') . ' ' . esc_attr(get_the_title()) . '">' . 
					'<span>' . esc_html(get_comments_number()) . '</span>' . 
				'</a>';
			}
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts More Button/Link Function */
function all_business_post_more($cmsmasters_id, $show = true) {
	$cmsmasters_post_read_more = get_post_meta($cmsmasters_id, 'cmsmasters_post_read_more', true);
	
	
	if ($cmsmasters_post_read_more == '') {
		$cmsmasters_post_read_more = esc_html__('Continue reading', 'all-business');
	}
	
	
	$out = '<a class="cmsmasters_post_read_more" href="' . esc_url(get_permalink($cmsmasters_id)) . '">' . esc_html($cmsmasters_post_read_more) . '</a>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Post Format Icon Placeholder Function */
function all_business_post_format_icon_placeholder($cmsmasters_id, $format = 'std', $show = true) {
	$out = '<figure>' . 
		'<a href="' . esc_url(get_permalink()) . '" title="' . cmsmasters_title($cmsmasters_id, false) . '" class="preloader cmsmasters_theme_icon_' . esc_attr($format) . '"></a>' . 
	'</figure>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}

