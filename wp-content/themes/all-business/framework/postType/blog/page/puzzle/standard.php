<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.0
 * 
 * Blog Page Puzzle Standard Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = explode(',', $cmsmasters_metadata);


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$views = (in_array('views', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$post_sort_categs = get_the_terms(0, 'category');

if ($post_sort_categs != '') {
	$post_categs = '';
	
	foreach ($post_sort_categs as $post_sort_categ) {
		$post_categs .= ' ' . $post_sort_categ->slug;
	}
	
	$post_categs = ltrim($post_categs, ' ');
}

?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_puzzle_type'); ?> data-category="<?php echo esc_attr($post_categs); ?>">
	<?php all_business_get_post_color(get_the_ID(), get_post_format(), 'puzzle'); ?>
	
	<div class="cmsmasters_post_cont">
	<?php
		if (!post_password_required() && has_post_thumbnail()) {
			echo '<div class="puzzle_post_img_wrap">';
			
				all_business_thumb(get_the_ID(), 'cmsmasters-square-thumb', true, false, true, false, true, true, false);
			
				all_business_post_heading(get_the_ID(), 'h3');
				
			echo '</div>';
		} else {
			echo '<div class="puzzle_post_img_wrap">' . 
				'<figure>' . 
					'<a href="' . esc_url(get_permalink()) . '" class="preloader"><span class="cmsmasters_theme_icon_std"></span></a>' . 
				'</figure>';
				
				all_business_post_heading(get_the_ID(), 'h3');
				
			echo '</div>';
		}
		
		
		echo '<div class="puzzle_post_content_wrapper">' . 
			'<div class="puzzle_post_content_wrap">';
			
			
			if ($date) {
				echo '<div class="cmsmasters_post_cont_info entry-meta">';
					
					$date ? all_business_get_post_date('page', 'default') : '';
					
				echo '</div>';
			}
			
			
			all_business_post_exc_cont();
			
			
			$more ? all_business_post_more(get_the_ID()) : '';
			
			
			if ($author || $categories || $comments || $likes) {
				echo '<footer class="cmsmasters_post_footer entry-meta">';
					
					if ($author || $categories) {
						echo '<div class="cmsmasters_post_wrap_info entry-meta">';
							
							$author ? all_business_get_post_author('page') : '';
							
							$categories ? all_business_get_post_category(get_the_ID(), 'category', 'page') : '';
							
						echo '</div>';
					}
					
					
					if ($comments || $likes) {
						echo '<div class="cmsmasters_post_meta_info">';
							
							$comments ? all_business_get_post_comments('page') : '';
							
							echo '<div class="cl"></div>';
							
							$likes ? all_business_get_post_likes('page') : '';
							
						echo '</div>';
					}
					
				echo '</footer>';
			}
			
			
		echo '</div>' . 
		'</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

