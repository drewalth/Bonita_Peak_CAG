<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.6
 * 
 * Blog Page Masonry Gallery Post Format Template
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


$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));


$post_sort_categs = get_the_terms(0, 'category');

if ($post_sort_categs != '') {
	$post_categs = '';
	
	foreach ($post_sort_categs as $post_sort_categ) {
		$post_categs .= ' ' . $post_sort_categ->slug;
	}
	
	$post_categs = ltrim($post_categs, ' ');
}


$uniqid = uniqid();

?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_masonry_type'); ?> data-category="<?php echo esc_attr($post_categs); ?>">
	<?php all_business_get_post_color(get_the_ID(), get_post_format(), 'masonry'); ?>
	
	<div class="cmsmasters_post_cont_wrap">
	<?php 
		if (!post_password_required()) {
			echo '<div class="cmsmasters_post_img_wrap">';
				
				if ($date) {
				
					$date ? all_business_get_post_date('page', 'default') : '';
					
				}
			
			
				if (sizeof($cmsmasters_post_images) > 1) {
				?>
					<script type="text/javascript">
						jQuery(document).ready(function () {
							jQuery('.cmsmasters_slider_<?php echo esc_attr($uniqid); ?>').owlCarousel( { 
								singleItem : 		true, 
								transitionStyle : 	false, 
								rewindNav : 		true, 
								slideSpeed : 		200, 
								paginationSpeed : 	800, 
								rewindSpeed : 		1000, 
								autoPlay : 			false, 
								stopOnHover : 		false, 
								pagination : 		false, 
								navigation : 		true, 
								navigationText : 	[ 
									'<span></span>', 
									'<span></span>' 
								] 
							} );
						} );
					</script>
					<div id="cmsmasters_owl_carousel_<?php the_ID(); ?>" class="cmsmasters_slider_<?php echo esc_attr($uniqid); ?> cmsmasters_owl_slider">
					<?php 
						foreach ($cmsmasters_post_images as $cmsmasters_post_image) {
							$image_atts = wp_prepare_attachment_for_js(strstr($cmsmasters_post_image, '|', true));
							
							
							echo '<div>' . 
								'<figure>' . 
									wp_get_attachment_image(strstr($cmsmasters_post_image, '|', true), 'cmsmasters-blog-masonry-thumb', false, array( 
										'class' => 	'full-width', 
										'alt' => ($image_atts['alt'] != '') ? esc_attr($image_atts['alt']) : cmsmasters_title(get_the_ID(), false), 
										'title' => ($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsmasters_title(get_the_ID(), false) 
									)) . 
								'</figure>' . 
							'</div>';
						}
					?>
					</div>
				<?php 
				} elseif (sizeof($cmsmasters_post_images) == 1 && $cmsmasters_post_images[0] != '') {
					all_business_thumb(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, $cmsmasters_post_images[0]);
				} elseif (has_post_thumbnail()) {
					all_business_thumb(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
				}
				
				all_business_post_heading(get_the_ID(), 'h2');
				
			echo '</div>';
		}
		?>
		
		<div class="cmsmasters_post_cont">
		<?php
			if ($author || $categories) {
				echo '<div class="cmsmasters_post_cont_info entry-meta' . ((!$more && theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
					
					$author ? all_business_get_post_author('page') : '';
					
					$categories ? all_business_get_post_category(get_the_ID(), 'category', 'page') : '';
					
				echo '</div>';
			}
			
			
			all_business_post_exc_cont();
			
			
			if ($comments || $likes || $more) {
				echo '<footer class="cmsmasters_post_footer entry-meta">';
					
					echo '<div class="cmsmasters_post_footer_info' . ((!$more) ? ' no_mt' : '') . '">';
						
						
						if ($comments || $likes) {
							echo '<div class="cmsmasters_post_meta_info">';
								
								$comments ? all_business_get_post_comments('page') : '';
								
								$likes ? all_business_get_post_likes('page') : '';
								
							echo '</div>';
						}
						
						$more ? all_business_post_more(get_the_ID()) : '';
						
					echo '</div>' . 
				'</footer>';
			}
		?>
		</div>
	</div>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

