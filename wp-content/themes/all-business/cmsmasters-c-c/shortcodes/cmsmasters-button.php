<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.0.0
 * 
 * Content Composer Button Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid();


if ($button_font_family != '') {
	$font_family_array = str_replace('+', ' ', explode(':', $button_font_family));
	
	$font_family_name = "'" . $font_family_array[0] . "'";
	
	$font_family_url = str_replace('+', ' ', $button_font_family);
	
	
	cmsmasters_theme_google_font($font_family_url, $font_family_array[0]);
}


$out = '';


if (
	$button_style != '' || 
	$button_font_family != '' || 
	$button_font_size != '' || 
	$button_line_height != '' || 
	$button_font_weight != '' || 
	$button_font_style != '' || 
	$button_padding_hor != '' || 
	$button_border_width != '' || 
	$button_border_style != '' || 
	$button_border_radius != '' || 
	$button_bg_color != '' || 
	$button_text_color != '' || 
	$button_border_color != '' || 
	$button_bg_color_h != '' || 
	$button_text_color_h != '' || 
	$button_border_color_h != '' 
) {
	$button_custom_styles = 'true';
} else {
	$button_custom_styles = 'false';
}


$out .= '<style type="text/css">' . "\n" . 
	'#cmsmasters_button_' . $unique_id . ' { ' . 
		"\n\t" . (($button_text_align == 'center') ? 'text-align' : 'float') . ':' . $button_text_align . '; ' . 
	"\n" . '} ' . "\n\n" . 
	'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button:before { ' . 
		"\n\t" . 'margin-right:' . (($content != null) ? '.5em; ' : '0;') . 
		"\n\t" . 'margin-left:0; ' . 
		"\n\t" . 'vertical-align:baseline; ' . 
	"\n" . '} ' . "\n\n";
	
	if ($button_custom_styles == 'true') {
		$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button { ' . 
			(($button_font_family != '') ? "\n\t" . 'font-family:' . str_replace('+', ' ', $font_family_name) . '; ' : '') . 
			(($button_font_size != '') ? "\n\t" . 'font-size:' . $button_font_size . 'px; ' : '') . 
			(($button_line_height != '') ? "\n\t" . 'line-height:' . $button_line_height . 'px; ' : '') . 
			(($button_font_weight != '') ? "\n\t" . 'font-weight:' . $button_font_weight . '; ' : '') . 
			(($button_font_style != '') ? "\n\t" . 'font-style:' . $button_font_style . '; ' : '') . 
			(($button_padding_hor != '') ? "\n\t" . 'padding-right:' . $button_padding_hor . 'px; ' : '') . 
			(($button_padding_hor != '') ? "\n\t" . 'padding-left:' . $button_padding_hor . 'px; ' : '') . 
			(($button_border_width != '') ? "\n\t" . 'border-width:' . $button_border_width . 'px; ' : '') . 
			(($button_border_style != '') ? "\n\t" . 'border-style:' . $button_border_style . '; ' : '') . 
			(($button_border_radius != '') ? "\n\t" . '-webkit-border-radius:' . $button_border_radius . '; ' . "\n\t" . 'border-radius:' . $button_border_radius . '; ' : '') . 
			(($button_bg_color != '') ? "\n\t" . cmsmasters_color_css('background-color', $button_bg_color) : '') . 
			(($button_text_color != '') ? "\n\t" . cmsmasters_color_css('color', $button_text_color) : '') . 
			(($button_border_color != '') ? "\n\t" . cmsmasters_color_css('border-color', $button_border_color) : '') . 
		"\n" . '} ' . "\n";
		
		$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button:hover { ' . 
			(($button_bg_color_h != '') ? "\n\t" . cmsmasters_color_css('background-color', $button_bg_color_h) : '') . 
			(($button_text_color_h != '') ? "\n\t" . cmsmasters_color_css('color', $button_text_color_h) : '') . 
			(($button_border_color_h != '') ? "\n\t" . cmsmasters_color_css('border-color', $button_border_color_h) : '') . 
		"\n" . '} ' . "\n";
	}
	
	
	if ($button_style != '') {
		if (
			$button_style == 'cmsmasters_but_bg_slide_left' || 
			$button_style == 'cmsmasters_but_bg_slide_right' || 
			$button_style == 'cmsmasters_but_bg_slide_top' || 
			$button_style == 'cmsmasters_but_bg_slide_bottom' || 
			$button_style == 'cmsmasters_but_bg_expand_vert' || 
			$button_style == 'cmsmasters_but_bg_expand_hor' || 
			$button_style == 'cmsmasters_but_bg_expand_diag' 
		) {
			if ($button_bg_color != '') {
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_bg_slide_left:hover, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_bg_slide_right:hover, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_bg_slide_top:hover, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_bg_expand_hor:hover, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_bg_expand_diag:hover { ' . 
					"\n\t" . cmsmasters_color_css('background-color', $button_bg_color) . 
				"\n" . '} ' . "\n";
			}
			
			if ($button_bg_color_h != '') {
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_bg_slide_left:after, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_bg_slide_right:after, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_bg_slide_top:after, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_bg_expand_vert:after, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_bg_expand_hor:after, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_bg_expand_diag:after { ' . 
					"\n\t" . cmsmasters_color_css('background-color', $button_bg_color_h) . 
				"\n" . '} ' . "\n";
			}
		}
		
		
		if (
			$button_style == 'cmsmasters_but_icon_dark_bg' || 
			$button_style == 'cmsmasters_but_icon_light_bg' || 
			$button_style == 'cmsmasters_but_icon_divider' || 
			$button_style == 'cmsmasters_but_icon_inverse' 
		) {
			$but_icon_pad = ($button_padding_hor != '' ? $button_padding_hor : '20') + ($button_line_height != '' ? $button_line_height : '40');
			
			if ($button_padding_hor != '' || $button_line_height != '') {
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_dark_bg, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_light_bg, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_divider, ' .  
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_inverse { ' . 
					"\n\t" . 'padding-left:' . $but_icon_pad . 'px; ' . 
				"\n" . '} ' . "\n";
				
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_dark_bg:before, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_light_bg:before, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_divider:before, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_inverse:before, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_dark_bg:after, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_light_bg:after, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_divider:after, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_inverse:after { ' . 
					"\n\t" . 'width:' . $button_line_height . 'px; ' . 
				"\n" . '} ' . "\n";
			}
			
			
			if ($button_border_color != '' || $button_border_color_h != '') {
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_divider:after { ' . 
					"\n\t" . cmsmasters_color_css('border-color', $button_border_color) . 
				"\n" . '} ' . "\n";
				
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_divider:hover:after { ' . 
					"\n\t" . cmsmasters_color_css('border-color', $button_border_color_h) . 
				"\n" . '} ' . "\n";
			}
			
			
			if ($button_style == 'cmsmasters_but_icon_inverse') {
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_inverse:before { ' . 
					(($button_text_color_h != '') ? "\n\t" . cmsmasters_color_css('color', $button_text_color_h) : '') . 
				"\n" . '} ' . "\n";
			
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_inverse:after { ' . 
					(($button_bg_color_h != '') ? "\n\t" . cmsmasters_color_css('background-color', $button_bg_color_h) : '') . 
				"\n" . '} ' . "\n";
				
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_inverse:hover:before { ' . 
					(($button_text_color != '') ? "\n\t" . cmsmasters_color_css('color', $button_text_color) : '') . 
				"\n" . '} ' . "\n";
				
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_inverse:hover:after { ' . 
					(($button_bg_color != '') ? "\n\t" . cmsmasters_color_css('background-color', $button_bg_color) : '') . 
				"\n" . '} ' . "\n";
			}
		}
		
		
		if (
			$button_style == 'cmsmasters_but_icon_slide_left' || 
			$button_style == 'cmsmasters_but_icon_slide_right' 
		) {
			if ($button_padding_hor != '') {
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_slide_left, ' . 
				'#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_slide_right { ' . 
					"\n\t" . 'padding-left:' . ($button_padding_hor * 2) . 'px; ' . 
					"\n\t" . 'padding-right:' . ($button_padding_hor * 2) . 'px; ' . 
				"\n" . '} ' . "\n";
				
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_slide_left:before { ' . 
					"\n\t" . 'width:' . ($button_padding_hor * 2) . 'px; ' . 
					"\n\t" . 'left:-' . ($button_padding_hor * 2) . 'px; ' . 
				"\n" . '} ' . "\n";
				
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_slide_left:hover:before { ' . 
					"\n\t" . 'left:0; ' . 
				"\n" . '} ' . "\n";
				
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_slide_right:before { ' . 
					"\n\t" . 'width:' . ($button_padding_hor * 2) . 'px; ' . 
					"\n\t" . 'right:-' . ($button_padding_hor * 2) . 'px; ' . 
				"\n" . '} ' . "\n";
				
				$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button.cmsmasters_but_icon_slide_right:hover:before { ' . 
					"\n\t" . 'right:0; ' . 
				"\n" . '} ' . "\n";
			}
		}
	}
	
	
	if ($button_text_color_h != '') {
		$out .= '#cmsmasters_button_' . $unique_id . ' .cmsmasters_button .ripple-effect { ' . 
			"\n\t" . cmsmasters_color_css('background-color', $button_text_color_h) . 
		"\n" . '} ' . "\n";
	}
$out .= '</style>' . "\n";


if ($button_type == 'donation') {
	$cmsmasters_donations_form_page = get_option('cmsmasters_donations_form_page');
	
	
	if ($button_campaign != '') {
		$link = add_query_arg('campaign_id', urlencode($button_campaign), get_permalink($cmsmasters_donations_form_page));
	} else {
		$link = get_permalink($cmsmasters_donations_form_page);
	}
} else {
	$link = $button_link;
}


$out .= '<div id="cmsmasters_button_' . $unique_id . '" class="button_wrap">' . 
	'<a href="' . $link . '" class="ripple cmsmasters_button' . 
	(($button_style != '') ? ' cmsmasters_but_clear_styles ' . $button_style : '') . 
	(($button_icon != '') ? ' ' . $button_icon : '') . 
	(($classes != '') ? ' ' . $classes : '') . 
	'"' . 
	(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	(($button_target == 'blank') ? ' target="_blank"' : '') . 
	'>' . 
		'<span>' . $content . '</span>' . 
	'</a>' . 
'</div>' . "\n";

echo $out;

