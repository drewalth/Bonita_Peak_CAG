<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.8
 * 
 * Posts Slider Gallery Project Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_project_metadata);

$title = in_array('title', $cmsmasters_metadata) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && in_array('categories', $cmsmasters_metadata)) ? true : false;
$comments = (comments_open() && in_array('comments', $cmsmasters_metadata)) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;


$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);

$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);


$cmsmasters_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_project_images', true))));

?>

<!--_________________________ Start Gallery Project _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php all_business_get_slider_post_color(get_the_ID(), 'project'); ?>
	
	<div class="slider_project_outer">
	<?php 
		all_business_thumb_rollover(get_the_ID(), 'cmsmasters-single-project-thumb', false, false, true, $cmsmasters_project_images, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);
		
		
		if ($title || $categories || $comments || $likes) {
			echo '<div class="slider_project_inner">';
				
				($title) ? all_business_slider_post_heading(get_the_ID(), 'project', 'h2', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, true, $cmsmasters_project_link_target) : '';
				
				if ($categories || $comments || $likes) {
					echo '<div class="cmsmasters_slider_project_cont_info_wrap">';
					
						if ($categories) {
							echo '<div class="cmsmasters_slider_project_cont_info entry-meta">';
								
								all_business_get_slider_post_category(get_the_ID(), 'pj-categs', 'project');
								
							echo '</div>';
						}
						
						
						if ($comments || $likes) {
							echo '<footer class="cmsmasters_slider_project_footer entry-meta">';
								
								($comments) ? all_business_get_slider_post_comments('project') : '';
								
								($likes) ? all_business_slider_post_like('project') : '';
								
							echo '</footer>';
						}
						
					echo '</div>';
				}
				
			echo '</div>';
		}
	?>
		<div class="cl"></div>
	</div>
</article>
<!--_________________________ Finish Gallery Project _________________________ -->

