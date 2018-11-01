<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.1
 * 
 * Portfolio Grid Standard Project Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_project_metadata = explode(',', $cmsmasters_pj_metadata);

$title = (in_array('title', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$author = (in_array('author', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && (in_array('categories', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$likes = (in_array('likes', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$rollover = in_array('rollover', $cmsmasters_project_metadata) ? true : false;
$more = (in_array('more', $cmsmasters_project_metadata) || is_home() || is_archive() || is_search()) ? true : false;


$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);

$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);


$project_thumb_size = (($cmsmasters_pj_layout_mode == 'masonry') ? 'cmsmasters-project-masonry-thumb' : 'cmsmasters-project-thumb');

$project_thumb_high = (($cmsmasters_pj_layout_mode == 'masonry') ? true : false);


$project_sort_categs = get_the_terms(0, 'pj-categs');

$project_categs = '';

if ($project_sort_categs != '') {
	foreach ($project_sort_categs as $project_sort_categ) {
		$project_categs .= ' ' . $project_sort_categ->slug;
	}
	
	$project_categs = ltrim($project_categs, ' ');
}

?>

<!--_________________________ Start Standard Project _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); echo (($project_categs != '') ? ' data-category="' . esc_attr($project_categs) . '"' : '') ?>>
	<?php all_business_get_project_color(get_the_ID()); ?>
	
	<div class="project_outer">
	<?php 
		all_business_thumb_rollover(get_the_ID(), $project_thumb_size, false, $rollover, false, false, false, false, false, $project_thumb_high, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, $cmsmasters_project_link_target);
		
		
		if (!$title) {
			echo '<div class="dn">';
				
				all_business_project_heading(get_the_ID(), 'h2');
				
			echo '</div>';
		}
		
		
		if ($title || $categories || $excerpt || $likes || $comments) {
			echo '<div class="project_inner">';
				
				($title) ? all_business_project_heading(get_the_ID(), ((!is_home() && !is_archive() && !is_search()) ? 'h2' : 'h5'), true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, $cmsmasters_project_link_target) : '';
				
				
				if ($categories) {
					echo '<div class="cmsmasters_project_cont_info entry-meta">';
						
						$author ? all_business_get_project_author('page') : '';
						
						all_business_get_project_category(get_the_ID(), 'pj-categs', 'page');
						
					echo '</div>';
				}
				
				
				($excerpt && all_business_project_check_exc_cont()) ? all_business_project_exc_cont() : '';
				
				
				if ($likes || $comments || $more) {
					echo '<footer class="cmsmasters_project_footer entry-meta">';
						
						if ($comments || $likes) {
							echo '<div class="cmsmasters_project_meta_info">';
							
								$comments ? all_business_get_project_comments('page') : '';
								
								$likes ? all_business_get_project_likes('page') : '';
								
							echo '</div>';
						}
					
						$more ? all_business_project_more(get_the_ID()) : '';
						
					echo '</footer>';
				}
				
			echo '</div>';
		}
		
		echo '<span class="dn meta-date">' . get_the_time('YmdHis') . '</span>';
	?>
		<div class="cl"></div>
	</div>
</article>
<!--_________________________ Finish Standard Project _________________________ -->

