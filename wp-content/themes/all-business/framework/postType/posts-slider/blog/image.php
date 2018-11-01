<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.0
 * 
 * Posts Slider Image Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_post_metadata);

$excerpt = in_array('excerpt', $cmsmasters_metadata) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_metadata))) ? true : false;
$author = in_array('author', $cmsmasters_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_metadata))) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;


$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);

?>

<!--_________________________ Start Image Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php all_business_get_slider_post_color(get_the_ID(), 'post'); ?>
	
	<div class="cmsmasters_slider_post_cont">
	<?php
		$date ? all_business_get_slider_post_date('post') : '';
		
		
		if (!post_password_required()) {
			echo '<div class="thumb_wrap">';
				
				if ($cmsmasters_post_image_link != '') {
					all_business_thumb(get_the_ID(), 'cmsmasters-blog-masonry-thumb', true, false, true, true, true, true, $cmsmasters_post_image_link);
				} elseif (has_post_thumbnail()) {
					all_business_thumb(get_the_ID(), 'cmsmasters-blog-masonry-thumb', true, false, true, false, true, true, false);
				}
				
				all_business_slider_post_heading(get_the_ID(), 'post', 'h3');
				
			echo '</div>';
		}
		
		
		echo '<div class="cmsmasters_slider_post_cont_wrap">';
		
			if (!post_password_required() && !has_post_thumbnail()) {
			
				all_business_slider_post_heading(get_the_ID(), 'post', 'h3');
				
			}
			
			
			if ($author || $categories) {
				echo '<div class="cmsmasters_post_cont_info entry-meta">';
				
					$author ? all_business_get_slider_post_author('post') : '';
					
					$categories ? all_business_get_slider_post_category(get_the_ID(), 'category', 'post') : '';
					
				echo '</div>';
			}
			
			
			$excerpt ? all_business_slider_post_exc_cont('post') : '';
			
			
			if ($comments || $likes || $more) {
				echo '<footer class="cmsmasters_slider_post_footer entry-meta">';
				
					if ($comments || $likes) {
						echo '<div class="cmsmasters_slider_post_meta_info">';
						
							$comments ? all_business_get_slider_post_comments('post') : '';
							
							$likes ? all_business_slider_post_like('post') : '';
							
						echo '</div>';
					}
					
					$more ? all_business_slider_post_more(get_the_ID()) : '';
					
				echo '</footer>';
			}
			
		echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Image Article _________________________ -->

