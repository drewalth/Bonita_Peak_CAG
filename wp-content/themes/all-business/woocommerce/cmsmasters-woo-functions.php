<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.1.1
 * 
 * Website WooCommerce Functions
 * Created by CMSMasters
 * 
 */


/* Woocommerce Dynamic Cart */
function all_business_woocommerce_cart_dropdown() {
	global $woocommerce;
	
	
	$cart_count = $woocommerce->cart->get_cart_contents_count();
	
	
	echo '<div class="cmsmasters_dynamic_cart">' . 
		'<div class="cmsmasters_dynamic_cart_inner">' . 
			'<a href="' . esc_js("javascript:void(0)") . '" class="cmsmasters_dynamic_cart_button cmsmasters_theme_icon_custom_basket">' . 
				'<span class="count cmsmasters_dynamic_cart_count">' . esc_html($cart_count) . '</span>' . 
			'</a>' . 
			'<div class="widget_shopping_cart_content"></div>' . 
		'</div>' . 
	'</div>';
}


function all_business_woocommerce_cart_dropdown_count_update($fragments) {
	global $woocommerce;
	
	
	ob_start();
	
	
	echo '<span class="count cmsmasters_dynamic_cart_count">' . $woocommerce->cart->get_cart_contents_count() . '</span>';
	
	$fragments['span.cmsmasters_dynamic_cart_count'] = ob_get_clean();
	
	
	return $fragments;
}

add_filter('woocommerce_add_to_cart_fragments', 'all_business_woocommerce_cart_dropdown_count_update');


/* Woocommerce Header Cart */
function all_business_woocommerce_header_cart_link() {
	global $woocommerce;
	
	
	$cart_count = $woocommerce->cart->get_cart_contents_count();
	
	
	echo '<div class="cmsmasters_header_cart_link_wrap">' . 
		'<a href="' . esc_url(wc_get_cart_url()) . '" class="cmsmasters_dynamic_cart_button cmsmasters_header_cart_link cmsmasters_theme_icon_custom_basket">' . 
			'<span class="count cmsmasters_dynamic_cart_count">' . esc_html($cart_count) . '</span>' . 
		'</a>' . 
	'</div>';
}


/* Woocommerce Add to Cart Button */
function all_business_woocommerce_add_to_cart_button() {
	global $woocommerce, 
		$product;
	
	
	if ( 
		$product->is_purchasable() && 
		$product->is_type( 'simple' ) && 
		$product->is_in_stock() 
	) {
		echo '<a href="' . esc_url($product->add_to_cart_url()) . '" data-product_id="' . esc_attr($product->get_id()) . '" data-product_sku="' . esc_attr($product->get_sku()) . '" class="button add_to_cart_button cmsmasters_add_to_cart_button product_type_simple cmsmasters_theme_icon_custom_basket ajax_add_to_cart" title="' . esc_attr__('Add to Cart', 'all-business') . '">' . 
			'<span>' . esc_html__('Add to Cart', 'all-business') . '</span>' . 
		'</a>' . 
		'<a href="' . esc_url(wc_get_cart_url()) . '" class="button added_to_cart wc-forward cmsmasters_theme_icon_custom_check" title="' . esc_attr__('View Cart', 'all-business') . '">' . 
			'<span>' . esc_html__('View Cart', 'all-business') . '</span>' . 
		'</a>';
	}
}


/* Woocommerce Rating */
function all_business_woocommerce_rating($icon_trans = '', $icon_color = '', $in_review = false, $comment_id = '', $show = true) {
	global $product;
	
	
	if (get_option( 'woocommerce_enable_review_rating') === 'no') {
		return;
	}
	
	
	$rating = (($in_review) ? intval(get_comment_meta($comment_id, 'rating', true)) : ($product->get_average_rating() ? $product->get_average_rating() : '0'));
	
	$itemtype = $in_review ? 'Rating' : 'AggregateRating';
	
	
	$out = "
<div class=\"cmsmasters_star_rating\" itemscope itemtype=\"http://schema.org/{$itemtype}\" title=\"" . sprintf(esc_html__('Rated %s out of 5', 'all-business'), $rating) . "\">
<div class=\"cmsmasters_star_trans_wrap\">
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
</div>
<div class=\"cmsmasters_star_color_wrap\" style=\"width:" . (($rating / 5) * 100) . "%\">
	<div class=\"cmsmasters_star_color_inner\">
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
	</div>
</div>
<span class=\"rating dn\"><strong itemprop=\"ratingValue\">" . esc_html($rating) . "</strong> " . esc_html__('out of 5', 'all-business') . "</span>
</div>
";
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}


function all_business_woocommerce_demo_store($html, $notice) {
	return '<div class="woocommerce-store-notice demo_store">' . 
		'<a href="#" class="cmsmasters_theme_icon_cancel woocommerce-store-notice__dismiss-link"></a>' . 
		'<p>' . wp_kses_post($notice) . '</p>' . 
	'</div>';
}

add_filter('woocommerce_demo_store', 'all_business_woocommerce_demo_store', 10, 2);


function all_business_woocommerce_support() {
    add_theme_support('woocommerce', array( 
		'thumbnail_image_width' => 540, 
		'single_image_width' => 600 
	));
}

add_action('after_setup_theme', 'all_business_woocommerce_support');


if (version_compare(WOOCOMMERCE_VERSION, '2.1') >= 0) {
	add_filter('woocommerce_enqueue_styles', '__return_false');
} else {
	define('WOOCOMMERCE_USE_CSS', false);
}

