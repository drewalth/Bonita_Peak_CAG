<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.0
 * 
 * Content Composer Tabs Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid();


$this->tabs_atts = array(
	'style_tab' => 		'', 
	'out_tabs' => 		'', 
	'tabs_mode' => 		$mode, 
	'tab_active' => 	(int) $active, 
	'tab_counter' => 	0 
);


$tabs = do_shortcode($content);


if ($custom_colors == 'true') { 
	$this->tabs_atts['style_tab'] .= "\n" . '#cmsmasters_tabs_list_' . $unique_id . ' .magic-line { ' . 
		"\n\t" . cmsmasters_color_css('background-color', $bg_color) . 
	"\n" . '} ' . "\n";
}


$out = (($this->tabs_atts['style_tab'] != '') ? '<style type="text/css"> ' . $this->tabs_atts['style_tab'] . '</style> ' . "\n" : '') . 
'<div class="cmsmasters_tabs tabs_mode_' . $mode . 
(($mode == 'tour') ? ' ' . 'tabs_pos_' . $position : '') . 
(($classes != '') ? ' ' . $classes : '') . 
'"' . 
(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
'>' . "\n" . 
	'<ul id="cmsmasters_tabs_list_' . $unique_id . '" class="cmsmasters_tabs_list">' . "\n" . 
		$this->tabs_atts['out_tabs'] . 
	'</ul>' . "\n" . 
	'<div class="cmsmasters_tabs_wrap">' . "\n" . 
		$tabs . 
	'</div>' . "\n" . 
'</div>';


echo $out;

