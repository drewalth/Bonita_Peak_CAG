<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.0
 * 
 * Blog Post Audio Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = all_business_get_global_options();


$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);

$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);

?>

<!--_________________________ Start Audio Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php all_business_get_post_color(get_the_ID(), get_post_format(), 'post'); ?>
	
	<div class="cmsmasters_post_cont_wrap">
		<div class="cmsmasters_post_cont">
		<?php
			if ($cmsmasters_post_title == 'true') {
				all_business_post_title_nolink(get_the_ID(), 'h2');
			}
			
			
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
			
			
			if (!post_password_required() && !empty($cmsmasters_post_audio_links) && sizeof($cmsmasters_post_audio_links) > 0) {
				$attrs = array(
					'preload' => 'none'
				);
				
				
				foreach ($cmsmasters_post_audio_links as $cmsmasters_post_audio_link_url) {
					$attrs[substr(strrchr($cmsmasters_post_audio_link_url, '.'), 1)] = $cmsmasters_post_audio_link_url;
				}
				
				
				echo '<div class="cmsmasters_audio">' . 
					wp_audio_shortcode($attrs) . 
				'</div>';
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
<!--_________________________ Finish Audio Article _________________________ -->

