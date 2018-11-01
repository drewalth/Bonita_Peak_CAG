<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.0.0
 * 
 * Content Composer Table Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$out = '<div class="cmsmasters_table_wrap' . 
(($classes != '') ? ' ' . $classes : '') . 
'"' . 
(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
'>';

	if ($caption !='') {
		$out .= '<span class="caption">' . $caption . '</span>';
	}
	
	$out .= '<table class="cmsmasters_table">' . 
		do_shortcode($content) . 
	'</table>' . 
'</div>';

echo $out;

