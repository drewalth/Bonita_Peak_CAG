<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.7
 * 
 * Single Project Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = all_business_get_global_options();


$project_tags = get_the_terms(get_the_ID(), 'pj-tags');


$cmsmasters_project_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_project_sharing_box', true);

$cmsmasters_project_author_box = get_post_meta(get_the_ID(), 'cmsmasters_project_author_box', true);

$cmsmasters_project_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_project_more_posts', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<div class="middle_content entry">';


if (have_posts()) : the_post();
	echo '<div class="portfolio opened-article">' . "\n";
	
	
	if (get_post_format() != '') {
		get_template_part('framework/postType/portfolio/post/' . get_post_format());
	} else {
		get_template_part('framework/postType/portfolio/post/standard');
	}
	
	
	if ($cmsmasters_project_sharing_box == 'true') {
		all_business_sharing_box(esc_html__('Like this project?', 'all-business'), 'h2');
	}
	
	
	if ($cmsmasters_project_author_box == 'true') {
		all_business_author_box(esc_html__('About author', 'all-business'), 'h5');
	}
	
	
	if ($project_tags) {
		$tgsarray = array();
		
		
		foreach ($project_tags as $tagone) {
			$tgsarray[] = $tagone->term_id;
		}  
	} else {
		$tgsarray = '';
	}
	
	
	comments_template(); 
	
	
	if ($cmsmasters_project_more_posts != 'hide') {
		all_business_related( 
			'h3', 
			$cmsmasters_project_more_posts, 
			$tgsarray, 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_more_projects_count'], 
			$cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_more_projects_pause'], 
			'project', 
			'pj-tags' 
		);
	}
	
	
	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_portfolio_project_nav_box']) {
		all_business_prev_next_posts();
	}
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

