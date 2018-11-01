<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.6
 * 
 * Single Post Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = all_business_get_global_options();


list($cmsmasters_layout) = all_business_theme_page_layout_scheme();


$cmsmasters_post_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_post_sharing_box', true);

$cmsmasters_post_author_box = get_post_meta(get_the_ID(), 'cmsmasters_post_author_box', true);

$cmsmasters_post_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_post_more_posts', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content_wrap_inner">' . "\n\t" . 
	'<div class="content entry" role="main">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content_wrap_inner">' . "\n\t" . 
	'<div class="content entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content entry">';
}


if (have_posts()) : the_post();
	echo '<div class="blog opened-article">' . "\n";
	
	
	if (get_post_format() != '') {
		get_template_part('framework/postType/blog/post/' . get_post_format());
	} else {
		get_template_part('framework/postType/blog/post/standard');
	}
	
	
	if ($cmsmasters_post_sharing_box == 'true') {
		all_business_sharing_box(esc_html__('Like this post?', 'all-business'), 'h3');
	}
	
	
	if ($cmsmasters_post_author_box == 'true') {
		all_business_author_box(esc_html__('About author', 'all-business'), 'h3', 'h2');
	}
	
	
	if (get_the_tags()) {
		$tgsarray = array();
		
		foreach (get_the_tags() as $tagone) {
			$tgsarray[] = $tagone->term_id;
		}
	} else {
		$tgsarray = '';
	}
	
	
	echo all_business_get_post_pings(get_the_ID(), 'h2');
	
	
	comments_template();
	
	
	if ($cmsmasters_post_more_posts != 'hide') {
		all_business_related( 
			'h2', 
			$cmsmasters_post_more_posts, 
			$tgsarray, 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_more_posts_count'], 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_more_posts_pause'], 
			'post' 
		);
	}
	
	
	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_nav_box']) {
		all_business_prev_next_posts();
	}
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar" role="complementary">' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar fl" role="complementary">' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
}


get_footer();

