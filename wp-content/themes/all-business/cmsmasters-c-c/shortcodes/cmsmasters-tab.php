<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.0.0
 * 
 * Content Composer Tab Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid();


$this->tabs_atts['tab_counter']++;


$this->tabs_atts['out_tabs'] .= '<li class="cmsmasters_tabs_list_item' . 
(($this->tabs_atts['tab_active'] == $this->tabs_atts['tab_counter']) ? ' current_tab' : '') . 
'">' . "\n" . 
	'<a href="#"' . 
	(($icon != '') ? ' class="' . $icon . '"' : '') . 
	'>' . "\n" . 
		'<span>' . $title . '</span>' . "\n" . 
	'</a>' . "\n" . 
'</li>';

$out = '<div id="cmsmasters_tab_' . $unique_id . '" class="cmsmasters_tab' . 
(($this->tabs_atts['tab_active'] == $this->tabs_atts['tab_counter']) ? ' active_tab' : '') . 
(($classes != '') ? ' ' . $classes : '') . 
'">' . "\n" . 
	cmsmasters_divpdel('<div class="cmsmasters_tab_inner">' . "\n" . 
		do_shortcode(wpautop($content)) . 
	'</div>' . "\n") . 
'</div>';


echo $out;

