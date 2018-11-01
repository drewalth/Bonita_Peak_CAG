<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.7
 * 
 * Website Footer Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = all_business_get_global_options();
?>


		</div>
	</div>
</div>
<!-- _________________________ Finish Middle _________________________ -->
<?php 

get_sidebar('bottom');

?>
<a href="javascript:void(0);" id="slide_top" class="cmsmasters_theme_icon_slide_top"></a>
</div>
<!-- _________________________ Finish Main _________________________ -->

<!-- _________________________ Start Footer _________________________ -->
<footer id="footer" role="contentinfo" class="<?php echo 'cmsmasters_color_scheme_' . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_scheme'] . ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_type'] == 'default' ? ' cmsmasters_footer_default' : ' cmsmasters_footer_small'); ?>">
	<div class="footer_inner">
	<?php 
		all_business_get_footer_custom_html($cmsmasters_option);
		
		
		all_business_footer_logo($cmsmasters_option);
		
		
		all_business_get_footer_social_icons($cmsmasters_option);
		
		
		if ($cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_type'] == 'default') {
			echo '<div class="cl"></div>';
		}
		
		
		all_business_get_footer_nav($cmsmasters_option);
		
		
		all_business_get_footer_copyright($cmsmasters_option);
	?>
	</div>
</footer>
<!-- _________________________ Finish Footer _________________________ -->

</div>
<span class="cmsmasters_responsive_width"></span>
<!-- _________________________ Finish Page _________________________ -->

<?php wp_footer(); ?>
</body>
</html>
