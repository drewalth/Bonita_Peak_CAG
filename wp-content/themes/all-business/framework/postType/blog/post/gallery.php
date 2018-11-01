<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.6
 * 
 * Blog Post Gallery Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = all_business_get_global_options();


$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);

$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));


list($cmsmasters_layout) = all_business_theme_page_layout_scheme();

if ($cmsmasters_layout == 'fullwidth') {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-thumb';
} else {
	$cmsmasters_image_thumb_size = 'post-thumbnail';
}


$uniqid = uniqid();

?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php all_business_get_post_color(get_the_ID(), get_post_format(), 'post'); ?>
	
	<div class="cmsmasters_post_cont_wrap">
		<?php
		if (!post_password_required()) {
			echo '<div class="cmsmasters_post_img_wrap">';
				
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
									wp_get_attachment_image(strstr($cmsmasters_post_image, '|', true), $cmsmasters_image_thumb_size, false, array( 
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
					all_business_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'img_' . get_the_ID(), true, true, true, true, $cmsmasters_post_images[0]);
				} elseif (has_post_thumbnail()) {
					all_business_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'img_' . get_the_ID(), true, true, true, true, false);
				}
				
				if ($cmsmasters_post_title == 'true') {
					all_business_post_title_nolink(get_the_ID(), 'h2');
				}
				
			echo '</div>';
		}
		?>
		
		<div class="cmsmasters_post_cont">
		<?php
			if (
				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_author'] || 
				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_cat'] || 
				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_tag'] || 
				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_date'] 
			) {
				echo '<div class="cmsmasters_post_cont_info entry-meta">';
				
					all_business_get_post_author('post');
					
					all_business_get_post_category(get_the_ID(), 'category', 'post');
					
					all_business_get_post_tags();
					
					all_business_get_post_date('post');
					
				echo '</div>';
			}
			
			
			if (get_the_content() != '') {
				echo '<div class="cmsmasters_post_content entry-content">';
				
					the_content();
					
					
					wp_link_pages(array( 
						'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'all-business') . ':</strong>', 
						'after' => '</div>', 
						'link_before' => ' [ ', 
						'link_after' => ' ] ' 
					));
					
					echo '<div class="cl"></div>' . 
				'</div>';
			}
			
			
			if (
				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_comment'] || 
				$cmsmasters_option[CMSMASTERS_SHORTNAME . '_blog_post_like'] 
			) {
				echo '<div class="cmsmasters_post_meta_info">';
				
					all_business_get_post_comments('post');
					
					all_business_get_post_likes('post');
					
				echo '</div>';
			}
		?>
		</div>
	</div>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

