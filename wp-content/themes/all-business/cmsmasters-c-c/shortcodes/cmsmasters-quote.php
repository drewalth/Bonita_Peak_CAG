<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.0.8
 * 
 * Content Composer Quote Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$this->quotes_atts['quote_counter']++;


if ($content == null || $content == "<br />\n") {
	$this->quotes_atts['quote_content'] = esc_html__('Enter quote text here', 'all-business');
} else {
	$this->quotes_atts['quote_content'] = $content;
}

$this->quotes_atts['quote_image'] = 	$image;
$this->quotes_atts['quote_name'] = 		$name;
$this->quotes_atts['quote_subtitle'] = 	$subtitle;
$this->quotes_atts['quote_link'] = 		$link;
$this->quotes_atts['quote_website'] = 	$website;


$quote_out = '';


$quote_out = '<div class="cmsmasters_quote' . 
	(($classes != '') ? ' ' . $classes : '') . 
'">' . "\n" . 
	cmsmasters_composer_ob_load_template('framework/postType/quote/' . $this->quotes_atts['quote_mode'] . (($this->quotes_atts['quote_mode'] != 'grid') ? '-' . $this->quotes_atts['quote_type'] : '') . '.php', $this->quotes_atts) . 
'</div>' . "\n";


if ($this->quotes_atts['quote_mode'] == 'grid' && (($this->quotes_atts['quote_counter'] % $this->quotes_atts['column_count']) == 0)) {
	$quote_out .= '</div><div class="cmsmasters_quotes_list">' . "\n";
}


echo $quote_out;

