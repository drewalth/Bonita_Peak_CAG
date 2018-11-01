<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.0.8
 * 
 * Content Composer Stats Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid();


if ($this->stats_atts['stats_mode'] == 'bars') {
	$this->stats_atts['style_stats'] .= "\n" . '.cmsmasters_stats.shortcode_animated #cmsmasters_stat_' . $unique_id . '.cmsmasters_stat { ' . 
		"\n\t" . (($this->stats_atts['stats_type'] == 'horizontal') ? 'width' : 'height') . ':' . $progress . '%; ' . 
	"\n" . '} ' . "\n\n" . 
	'.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap #cmsmasters_stat_' . $unique_id . ' .cmsmasters_stat_inner:before,' . 
	'.cmsmasters_stats.stats_mode_bars.stats_type_vertical #cmsmasters_stat_wrap_' . $unique_id . ' .cmsmasters_stat_container:before { ' . 
		(($color != '') ? "\n\t" . cmsmasters_color_css('color', $color) : '') . 
	"\n" . '} ' . "\n" . 
	'.cmsmasters_stats.stats_mode_bars.stats_type_horizontal #cmsmasters_stat_wrap_' . $unique_id . '.cmsmasters_stat_wrap:before,' . 
	'#cmsmasters_stat_' . $unique_id . ' .cmsmasters_stat_inner,' . 
	'#cmsmasters_stat_' . $unique_id . ' .cmsmasters_stat_inner .cmsmasters_stat_inner_cont:before,' . 
	'#cmsmasters_stat_' . $unique_id . ' .cmsmasters_stat_inner .cmsmasters_stat_inner_cont:after { ' . 
		(($color != '') ? "\n\t" . cmsmasters_color_css('background-color', $color) : '') . 
	"\n" . '} ' . "\n";
}

if ($this->stats_atts['stats_mode'] == 'circles') {
	$this->stats_atts['style_stats'] .= "\n" . '.cmsmasters_stats.shortcode_animated #cmsmasters_stat_' . $unique_id . '.cmsmasters_stat { ' . 
		"\n\t" . (($this->stats_atts['stats_type'] == 'horizontal') ? 'width' : 'height') . ':' . $progress . '%; ' . 
	"\n" . '} ' . "\n\n" . 
	'#cmsmasters_stat_' . $unique_id . '.cmsmasters_stat .cmsmasters_stat_inner:after { ' . 
		(($color != '') ? "\n\t" . cmsmasters_color_css('border-color', $color) : '') . 
	"\n" . '} ' . "\n";
}


$hex_color = explode('|', $color);


$out = '<div id="cmsmasters_stat_wrap_' . $unique_id . '" class="cmsmasters_stat_wrap' . (($this->stats_atts['stats_mode'] == 'circles' || ($this->stats_atts['stats_mode'] == 'bars' && $this->stats_atts['stats_type'] == 'vertical')) ? $this->stats_atts['stats_count'] : '') . '">' . "\n" . 
	(($this->stats_atts['stats_mode'] == 'bars' && $this->stats_atts['stats_type'] == 'vertical') ? '<div class="cmsmasters_stat_container' . 
	((($icon != '' && ($this->stats_atts['stats_mode'] == 'bars' && $this->stats_atts['stats_type'] == 'vertical'))) ? ' ' . $icon : '') . 
	'">' . "\n" : '') . 
		'<div id="cmsmasters_stat_' . $unique_id . '" class="cmsmasters_stat' . 
		(($classes != '') ? ' ' . $classes : '') . 
		(($content == '' && $icon == '') ? ' stat_only_number' : '') . 
		(($content != '' && $icon != '') ? ' stat_has_titleicon' : '') . '"' . 
		' data-percent="' . $progress . '"' . 
		(($this->stats_atts['stats_mode'] == 'circles' && $color != '') ? ' data-bar-color="' . $hex_color[0] . '"' : '') . 
		'>' . "\n" . 
			'<div class="cmsmasters_stat_inner' . 
			(($icon != '' && ($this->stats_atts['stats_type'] != 'vertical')) ? ' ' . $icon : '') . 
			'">' . "\n" . 
				'<div class="cmsmasters_stat_inner_cont">' . "\n" . 
					(($content != '' && $this->stats_atts['stats_mode'] == 'bars' && $this->stats_atts['stats_type'] == 'horizontal') ? '<span class="cmsmasters_stat_title">' . $content . '</span>' . "\n" : '');
					
					if ($this->stats_atts['stats_mode'] != 'bars' || $this->stats_atts['stats_type'] == 'vertical') {
						$out .= '<span class="cmsmasters_stat_counter_wrap">' . "\n" . 
							'<span class="cmsmasters_stat_counter">' . (($this->stats_atts['stats_mode'] == 'bars') ? $progress : '0') . '</span>' . 
							'<span class="cmsmasters_stat_units">%</span>' . "\n" . 
						'</span>' . "\n";
					}
					
					$out .= '<span class="cmsmasters_stat_inner_shadow"></span>' . "\n" . 
				'</div>' . "\n" . 
			'</div>' . "\n" . 
		'</div>' . "\n" . 
	(($this->stats_atts['stats_mode'] == 'bars' && $this->stats_atts['stats_type'] == 'vertical') ? '</div>' . "\n" : '') . 
	(($content != '' && $this->stats_atts['stats_mode'] == 'circles') ? '<span class="cmsmasters_stat_title">' . $content . '</span>' . "\n" : '') . 
	(($content != '' && $this->stats_atts['stats_mode'] == 'bars' && $this->stats_atts['stats_type'] == 'vertical') ? '<span class="cmsmasters_stat_title">' . $content . '</span>' . "\n" : '');
	
	if ($this->stats_atts['stats_mode'] == 'bars' && $this->stats_atts['stats_type'] == 'horizontal') {
		$out .= '<span class="cmsmasters_stat_counter_wrap">' . "\n" . 
			'<span class="cmsmasters_stat_counter">' . (($this->stats_atts['stats_mode'] == 'bars') ? $progress : '0') . '</span>' . 
			'<span class="cmsmasters_stat_units">%</span>' . "\n" . 
		'</span>' . "\n";
	}
	
	$out .= (($subtitle != '') ? '<span class="cmsmasters_stat_subtitle">' . $subtitle . '</span>' . "\n" : '') . 
'</div>';

echo $out;

