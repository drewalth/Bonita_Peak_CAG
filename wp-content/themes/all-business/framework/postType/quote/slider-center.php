<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.6
 * 
 * Quotes Centered Slider Format Template
 * Created by CMSMasters
 * 
 */


?>

<!--_________________________ Start Quotes Centered Slider Article _________________________ -->

<article class="cmsmasters_quote_inner">
<?php
	if ($quote_image != '') {
		echo '<figure class="quote_image">' . "\n" . 
			wp_get_attachment_image(strstr($quote_image, '|', true), 'cmsmasters-square-thumb') . 
		'</figure>' . "\n";
	}
	
	
	echo '<div class="quote_content_wrap">' . "\n" . 
		cmsmasters_divpdel('<div class="quote_content">' . "\n" . 
			do_shortcode(wpautop($quote_content)) . 
		'</div>' . "\n");
	?>
		<div class="wrap_quote_title">
		<?php
			if ($quote_name != '') {
				echo '<h3 class="quote_title">' . esc_html($quote_name) . '</h3>' . "\n";
			}
			
			
			if ($quote_subtitle != '') {
				echo '<span class="quote_subtitle">' . esc_html($quote_subtitle) . '</span>' . "\n";
			}
			
			
			if ($quote_subtitle != '' && ($quote_link != '' || $quote_website != '')) {
				echo ' - ';
			}
			
			
			if ($quote_link != '' && $quote_website != '') {
				echo '<a class="quote_link" target="_blank" href="' . esc_url($quote_link) . '">' . esc_html($quote_website) . '</a>' . "\n";
			} elseif ($quote_link == '' && $quote_website != '') {
				echo '<span class="quote_site">' . esc_html($quote_website) . '</span>' . "\n";
			} elseif ($quote_link != '' && $quote_website == '') {
				echo '<a class="quote_link" target="_blank" href="' . esc_url($quote_link) . '">' . esc_html($quote_link) . '</a>' . "\n";
			}
		?>
		</div>
	</div>
</article>
<!--_________________________ Finish Quotes Centered Slider Article _________________________ -->

