<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.0.0
 * 
 * Content Composer Quotes Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


if ($columns == '4') {
	$new_columns = 'quote_four';
} elseif ($columns == '3') {
	$new_columns = 'quote_three';
} elseif ($columns == '2') {
	$new_columns = 'quote_two';
} else {
	$new_columns = 'quote_one';
}


$this->quotes_atts = array(
	'quote_mode' => 	$mode, 
	'quote_type' => 	$type, 
	'quote_counter' => 	0, 
	'column_count' => 	$columns, 
	'quote_content' => 	'', 
	'quote_image' => 	'', 
	'quote_name' => 	'', 
	'quote_subtitle' => '', 
	'quote_link' => 	'', 
	'quote_website' => 	'' 
);


$unique_id = uniqid();

$quotes_out = '';


$quote_out = do_shortcode($content);


if ($this->quotes_atts['quote_mode'] == 'slider') {
	$quotes_out .= '<div class="cmsmasters_quotes_slider_wrap"' . 
	(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	'>' . "\n" . 
		'<script type="text/javascript">' . 
			'jQuery(document).ready(function () { ' . 
				'jQuery("#cmsmasters_quotes_slider_' . $unique_id . '").owlCarousel( { ' . 
					'singleItem : true, ' . 
					(($speed == 0) ? 'autoPlay : false, ' : 'autoPlay : ' . ($speed * 1000) . ',') . 
					'stopOnHover : true, ' . 
					'pagination : false, ' . 
					'navigation : true, ' . 
					'navigationText : 	[ ' . 
						'"<span class=\"cmsmasters_prev_arrow\"><span></span></span>", ' . 
						'"<span class=\"cmsmasters_next_arrow\"><span></span></span>" ' . 
					'] ' . 
				'} );' . 
			'} );' . 
		'</script>' . "\n" . 
		'<div id="cmsmasters_quotes_slider_' . $unique_id . '" class="cmsmasters_quotes cmsmasters_quotes_slider cmsmasters_quotes_slider_type_' . $type . ' owl-carousel' . 
		(($classes != '') ? ' ' . $classes : '') . 
		'">' . "\n" . 
			$quote_out . 
		'</div>' . "\n" . 
	'</div>';
} else {
	$quotes_out .= '<div class="cmsmasters_quotes cmsmasters_quotes_grid ' . $new_columns . 
	(($classes != '') ? ' ' . $classes : '') . 
	'"' . 
	(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	'>' . "\n" . 
		'<span class="cmsmasters_quotes_vert"><span></span></span>' . 
		'<div class="cmsmasters_quotes_list">' . "\n" . 
			$quote_out . 
			'<span class="cl"></span>' . 
		'</div>' . "\n" . 
	'</div>';
}


$out = $quotes_out;

echo $out;

