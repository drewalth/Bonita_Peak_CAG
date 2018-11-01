<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.0
 * 
 * Blog Page Timeline Image Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = explode(',', $cmsmasters_metadata);


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);

?>

<!--_________________________ Start Image Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_timeline_type'); ?>>
	<?php all_business_get_post_color(get_the_ID(), get_post_format(), 'timeline'); ?>
	
	<div class="cmsmasters_post_cont_wrap">
	<?php
		if (!post_password_required() && has_post_thumbnail()) {
			echo '<div class="cmsmasters_post_img_wrap">';
				
				if ($date) {
				
					$date ? all_business_get_post_date('page', 'default') : '';
					
				}
				
				
				if (!post_password_required()) {
					if ($cmsmasters_post_image_link != '') {
						all_business_thumb(get_the_ID(), 'cmsmasters-masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, $cmsmasters_post_image_link);
					} elseif (has_post_thumbnail()) {
						all_business_thumb(get_the_ID(), 'cmsmasters-masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
					}
				}
				
				all_business_post_heading(get_the_ID(), 'h2');
				
			echo '</div>';
		}
		?>
		
		<div class="cmsmasters_post_cont">
		<?php
			if ($author || $categories) {
				echo '<div class="cmsmasters_post_cont_info entry-meta' . ((theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
				
					$author ? all_business_get_post_author('page') : '';
					
					$categories ? all_business_get_post_category(get_the_ID(), 'category', 'page') : '';
			
			
					if (!post_password_required() && !has_post_thumbnail()) {
				
						if ($date) {
						
							$date ? all_business_get_post_date('page', 'default') : '';
							
						}
						
					}
					
				echo '</div>';
			}
			
			
			if (!post_password_required() && !has_post_thumbnail()) {
			
				all_business_post_heading(get_the_ID(), 'h2');
				
			}
			
			
			all_business_post_exc_cont();
			
			
			if ($comments || $likes || $more) {
				echo '<footer class="cmsmasters_post_footer entry-meta">';
					
					if ($comments || $likes) {
						echo '<div class="cmsmasters_post_meta_info">';
							
							$comments ? all_business_get_post_comments('page') : '';
							
							$likes ? all_business_get_post_likes('page') : '';
							
						echo '</div>';
					}
					
					$more ? all_business_post_more(get_the_ID()) : '';
					
				echo '</footer>';
			}
		?>
			<div class="cl"></div>
		</div>
	</div>
	
	<span class="cmsmasters_post_bullet"></span>
</article>
<!--_________________________ Finish Image Article _________________________ -->

