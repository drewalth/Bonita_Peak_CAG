<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.0.6
 * 
 * 404 Error Page Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = all_business_get_global_options();

?>

</div>

<!-- _________________________ Start Content _________________________ -->
<div class="entry">
	<div class="error">
		<div class="error_bg">
			<div class="error_inner">
				<h1 class="error_title"><?php echo esc_html__('404', 'all-business'); ?></h1>
			</div>
		</div>
	</div>
</div>
<div class="content_wrap fullwidth">
	<div class="error">
		<?php 
			echo '<h2 class="error_subtitle">' . esc_html__("We're sorry, but the page you were looking for doesn't exist.", 'all-business') . '</h2>';
			
			
			if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_error_search']) { 
				get_search_form(); 
			}
			
			
			if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_error_sitemap_button'] && $cmsmasters_option[CMSMASTERS_SHORTNAME . '_error_sitemap_link'] != '') {
				echo '<div class="error_button_wrap"><a href="' . esc_url($cmsmasters_option[CMSMASTERS_SHORTNAME . '_error_sitemap_link']) . '" class="button">' . esc_html__('Sitemap', 'all-business') . '</a></div>';
			}
		?>
	</div>
<!-- _________________________ Finish Content _________________________ -->

<?php 
get_footer();

