<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.0
 * 
 * Single Profile Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = all_business_get_global_options();


$cmsmasters_profile_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_profile_sharing_box', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<div class="middle_content entry">';


if (have_posts()) : the_post();
	echo '<div class="profiles opened-article">' . "\n";
	
	
	get_template_part('framework/postType/profile/post/standard');
	
	
	if ($cmsmasters_profile_sharing_box == 'true') {
		all_business_sharing_box(esc_html__('Share this profile?', 'all-business'), 'h3');
	}
	
	
	comments_template(); 

	
	if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_profile_post_nav_box']) {
		all_business_prev_next_posts();
	}
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

