<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.1.1
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function all_business_theme_colors_secondary() {
	$cmsmasters_option = all_business_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.1.1
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		if (CMSMASTERS_DONATIONS) {
			$custom_css .= "
/***************** Start {$title} CMSMASTERS Donations Color Scheme Rules ******************/

	/* Start Header Donation Button Colors */
	#header .header_donation_but .cmsmasters_button {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_hover_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_hover']) . "
	}
	
	#header .header_donation_but .cmsmasters_button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_link']) . "
	}
	
	#header .header_top_donation_but {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_hover']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_border']) . "
	}
	
	#header .header_top_donation_but:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_border']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_hover']) . "
	}
	/* Finish Header Donation Button Colors */
	
	
	/* Start Main Content Font Color */
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donations_count_number, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_campaign, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_campaign a, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_campaign, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_campaign a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_target_number, 
	{$rule}.related_posts_tabs_campaign .rel_post_content .related_posts_campaign_wrap .related_posts_campaign_togo > span, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_amount_currency, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_campaign a:hover, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_amount_currency, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_campaign a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_wrap_heading {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_img_wrap .preloader:hover:after {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . ", 0.85);
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.cmsmasters_campaigns .owl-buttons {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.cmsmasters_campaigns .owl-buttons span:hover,
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_details_item_title, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_amount_title, 
	{$rule}.opened-article > .campaign .cmsmasters_campaign_cont_info > span, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat_title_wrap {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.donation_confirm .donation_confirm_info_title {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_img_wrap .preloader:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_donated_percent .cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat canvas {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.opened-article > .campaign .campaign_meta_wrap > div {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.donation_confirm .donation_confirm_info_title {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.opened-article > .campaign .campaign_meta_wrap > div,
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_info, 
	{$rule}.donation_confirm .donation_confirm_info, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_cont_wrap, 
	{$rule}.cmsmasters_featured_campaign .campaign, 
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_donated_percent .cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_donations .donation .img_placeholder, 
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_wrap_img .img_placeholder, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_img_wrap .img_placeholder {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_details_item, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_footer, 
	{$rule}.campaign .cmsmasters_campaign_cont_info {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} CMSMASTERS Donations Color Scheme Rules ******************/


";
		}
		
		
		if (CMSMASTERS_WOOCOMMERCE) {
			$custom_css .= "
/***************** Start {$title} WooCommerce Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active,
	{$rule}ul.order_details li > strong,
	{$rule}.select2-container .select2-selection--single .select2-selection__rendered,
	{$rule}.product-category .woocommerce-loop-category__title .count {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	{$rule}.out-of-stock {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.required,
	{$rule}.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_cat a:hover,
	{$rule}.cmsmasters_theme_icon_custom_star_full,
	{$rule}.cmsmasters_single_product .product_meta > span a:hover,
	{$rule}.comment-form-rating .stars > span a:hover,
	{$rule}.comment-form-rating .stars > span a.active,
	{$rule}.shop_table .product-name a:hover,
	{$rule}.shop_table .product-remove .remove:hover,
	{$rule}.widget_product_categories ul li a:hover:before,
	{$rule}.woocommerce-store-notice .woocommerce-store-notice__dismiss-link {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_img_wrap .cmsmasters_product_footer > a:hover,
	{$rule}.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_img_wrap .cmsmasters_product_footer > a.cmsmasters_visible,
	{$rule}.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_img_wrap .cmsmasters_product_footer > a.loading,
	{$rule}.shop_table td.actions .button:hover,
	{$rule}.input-checkbox + label:after, 
	{$rule}.input-radio + label:after, 
	{$rule}input.shipping_method + label:after,
	{$rule}.woocommerce-MyAccount-navigation > ul > li > a,
	{$rule}.widget .button:hover,
	{$rule}.widget button:hover,
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-range,
	{$rule}.widget_product_tag_cloud .tagcloud a:hover,
	{$rule}.widget_product_tag_cloud .tagcloud a[style='font-size: 22pt;'],
	{$rule}.woocommerce-store-notice {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.select2-container.select2-container--open .select2-selection--single,
	{$rule}.select2-container.select2-container--focus .select2-selection--single {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_cat a,
	{$rule}.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_info .price > .amount,
	{$rule}.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_info .price del,
	{$rule}.cmsmasters_single_product .price del,
	{$rule}.cmsmasters_single_product .product_meta > span a,
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment_container .comment-text .meta,
	{$rule}.comment-form-rating .stars > span,
	{$rule}.widget_product_search .search_bar_wrap .search_button button,
	{$rule}.product-category a .woocommerce-loop-category__title:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_img_wrap .cmsmasters_product_footer > a,
	{$rule }.shop_table td.actions .button,
	{$rule}.cart-collaterals .cart_totals .wc-proceed-to-checkout .button:hover,
	{$rule}.woocommerce-MyAccount-navigation > ul > li > a:hover,
	{$rule}.woocommerce-MyAccount-navigation > ul > li.is-active > a,
	{$rule}.widget .button,
	{$rule}.widget button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice,
	{$rule}.select2-drop.select2-drop-above.select2-drop-active {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-error li,
	{$rule}.shop_table thead tr th,
	{$rule}.shop_table .product-name a,
	{$rule}.shop_table .product-remove .remove,
	{$rule}.cart-collaterals .cart_totals th,
	{$rule}ul.order_details li,
	{$rule}.widget_product_categories ul li *,
	{$rule}.widget_product_tag_cloud .tagcloud a,
	{$rule}.product-category .woocommerce-loop-category__title {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.sidebar .widget_product_search .search_bar_wrap .search_field input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]) {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . ", 0.024);
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.onsale,
	{$rule}.out-of-stock,
	{$rule}.woocommerce-MyAccount-navigation > ul > li > a,
	{$rule}.woocommerce-store-notice,
	{$rule}.woocommerce-store-notice p a,
	{$rule}.woocommerce-store-notice p a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.select2-drop, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice,
	{$rule}.form-row label,
	{$rule}.woocommerce-MyAccount-content fieldset,
	{$rule}.woocommerce-MyAccount-content legend,
	{$rule}.sidebar .widget_product_search .search_bar_wrap .search_field,
	{$rule}.select2-container .select2-selection--single,
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-event,
	{$rule}#tribe-events-content-wrapper .tribe-events-list .tribe-events-loop .tribe-event-featured,
	{$rule}.tribe-events-grid .tribe-grid-body .tribe-event-featured.tribe-events-week-hourly-single,
	{$rule}.tribe-events-grid .tribe-grid-body .tribe-event-featured.tribe-events-week-hourly-single:hover,
	{$rule}#tribe-events-content-wrapper .tribe-events-list #tribe-events-day.tribe-events-loop .tribe-event-featured,
	{$rule}#tribe-events-content-wrapper .type-tribe_events.tribe-events-photo-event.tribe-event-featured .tribe-events-photo-event-wrap,
	{$rule}#tribe-events-content-wrapper .type-tribe_events.tribe-events-photo-event.tribe-event-featured .tribe-events-photo-event-wrap:hover,
	{$rule}#tribe-events-content-wrapper #tribe-events-content table.tribe-events-calendar .type-tribe_events.tribe-event-featured,
	{$rule}.widget.tribe-events-list-widget .tribe-event-featured,
	{$rule}.widget.tribe-events-venue-widget .tribe-event-featured,
	{$rule}.widget .tribe-mini-calendar-list-wrapper .tribe-event-featured,
	{$rule}.widget.tribe-events-adv-list-widget .tribe-event-featured .tribe-mini-calendar-event,
	{$rule}.tribe-events-organizer .tribe-events-list .tribe-events-loop .tribe-event-featured,
	{$rule}.tribe-events-venue .tribe-events-list .tribe-events-loop .tribe-event-featured, 
	{$rule}.woocommerce-store-notice .woocommerce-store-notice__dismiss-link {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-grid-body .tribe-event-featured.tribe-events-week-hourly-single,
	{$rule}.tribe-events-grid .tribe-grid-body .tribe-event-featured.tribe-events-week-hourly-single:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.widget_product_tag_cloud .tagcloud a:hover,
	{$rule}.widget_product_tag_cloud .tagcloud a[style='font-size: 22pt;'] {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-error, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice,
	{$rule}.select2-drop.select2-drop-above.select2-drop-active,
	{$rule}.cmsmasters_products .product,
	{$rule}#page .cmsmasters_single_product .comment-respond .comment-form > p:not(.comment-form-rating):not(.form-submit) input,
	{$rule}#page .cmsmasters_single_product .comment-respond .comment-form > p:not(.comment-form-rating) textarea,
	{$rule}.shop_table th,
	{$rule}.shop_table td,
	{$rule}.shop_table td.actions .coupon .input-text,
	{$rule}.cart-collaterals .cart_totals table,
	{$rule}#order_review #payment,
	{$rule}ul.order_details,
	{$rule}.widget_product_tag_cloud .tagcloud a,
	{$rule}#order_review #payment .place-order .terms label,
	{$rule}.product-category .woocommerce-loop-category__title .count {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content:after {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_theme_icon_custom_star_empty,
	{$rule}.widget_product_categories ul li a:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.select2-container .select2-choice,
	{$rule}.select2-container.select2-drop-above .select2-choice {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.input-checkbox + label:before,
	{$rule}.input-radio + label:before,
	{$rule}input.shipping_method + label:before,
	{$rule}body .select2-drop.select2-drop-active,
	{$rule}body .select2-drop.select2-drop-above.select2-drop-active,
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs .shop_attributes th,
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs .shop_attributes td,
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist,
	{$rule}.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment_container,
	{$rule}.shop_table th,
	{$rule}.shop_table td,
	{$rule}.cart-collaterals .cart_totals th,
	{$rule}.cart-collaterals .cart_totals td,
	{$rule}ul.order_details li,
	{$rule}ul.order_details li > strong,
	{$rule}.select2-dropdown,
	{$rule}.select2-container .select2-selection--single {
		border-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.8);
	}
	
	@media only screen and (max-width: 768px) {
		{$rule}.shop_table.cart .cart_item {
			border-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.8);
		}
	}
	/* Finish Borders Color */
	
	
	/* Start Secondary Color */
	{$rule}.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_info .price ins,
	{$rule}.cmsmasters_single_product .price ins,
	{$rule}.cmsmasters_single_product .price > .amount,
	{$rule}.shop_table td.product-subtotal,
	{$rule}.cart-collaterals .cart_totals td,
	{$rule}.widget_shopping_cart .widget_shopping_cart_content .total .amount {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.onsale,
	{$rule}.cart-collaterals .cart_totals .wc-proceed-to-checkout .button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content,
	{$rule}.cmsmasters_dynamic_cart .cmsmasters_added_product_info {
		-webkit-box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.1);
		-moz-box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.1);
		box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.1);
	}
	
	{$rule}.cmsmasters_products .product {
		-webkit-box-shadow:0 2px 3px 0 rgba(0, 0, 0, 0.1);
		-moz-box-shadow:0 2px 3px 0 rgba(0, 0, 0, 0.1);
		box-shadow:0 2px 3px 0 rgba(0, 0, 0, 0.1);
	}
	
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content:before {
		border-bottom-color:rgba(0, 0, 0, 0.07);
	}
	
	{$rule}.shop_table,
	{$rule}.woocommerce-checkout-payment,
	{$rule}ul.order_details,
	{$rule}.widget_product_tag_cloud .tagcloud a {
		-webkit-box-shadow:0 2px 3px 0 rgba(0, 0, 0, 0.1);
		-moz-box-shadow:0 2px 3px 0 rgba(0, 0, 0, 0.1);
		box-shadow:0 2px 3px 0 rgba(0, 0, 0, 0.1);
	}
	
	{$rule}.cmsmasters_products .product:hover {
		-webkit-box-shadow:0 2px 4px 2px rgba(0, 0, 0, 0.07);
		-moz-box-shadow:0 2px 4px 2px rgba(0, 0, 0, 0.07);
		box-shadow:0 2px 4px 2px rgba(0, 0, 0, 0.07);
	}
	/* Finish Secondary Color */

/***************** Finish {$title} WooCommerce Color Scheme Rules ******************/


";
		}
		
		
		if (CMSMASTERS_EVENTS_CALENDAR) {
			$custom_css .= "
/***************** Start {$title} Events Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.tribe-events-sub-nav li a,
	/*   */
	{$rule}.recurringinfo {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option a:hover,
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option.tribe-bar-active a,
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-list-event-description .tribe-events-read-more:hover,
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details a:hover,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right a:hover,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item a:hover,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info > div a:hover,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a:hover,
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a:hover,
	{$rule}.widget ol.vcalendar li .cmsmasters_widget_event_info a:hover,
	{$rule}.widget ul.vcalendar li .cmsmasters_widget_event_info a:hover,
	{$rule}.widget .tribe-events-widget-link a:hover,
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue a:hover,
	/*   */
	{$rule}#tribe-events-footer > a:hover, 
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .cmsmasters_events_list_event_header .tribe-events-event-cost, 
	{$rule}.recurringinfo a:hover, 
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details a:hover, 
	{$rule}ul.tribe-related-events > li .tribe-related-events-thumbnail .cmsmasters_events_img_placeholder:hover, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a:hover, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right a:hover, 
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile .tribe-events-event-body .time-details,
	{$rule}.widget .vcalendar .vevent .entry-title a:hover, 
	{$rule}.widget .vcalendar .vevent .cmsmasters_widget_event_info .cmsmasters_widget_event_info_date, 
	{$rule}.widget .vcalendar .vevent .cmsmasters_widget_event_venue_info_loc .cmsmasters_widget_event_venue_info a:hover, 
	{$rule}.widget .vcalendar .vevent .cmsmasters_widget_event_venue_info_loc .cmsmasters_widget_event_venue_loc a,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-info, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-info .tribe-mini-calendar-event-venue a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th,
	{$rule}.tribe-events-sub-nav li a:hover,
	{$rule}.cmsmasters_event_date .cmsmasters_event_month,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header,
	{$rule}#tribe-events-bar #tribe-bar-views ul.tribe-bar-views-list .magic-line,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div,
	{$rule}.tribe-this-week-widget-header-date .day,
	/*   */
	{$rule}.tribe_events .cmsmasters_post_cont .cmsmasters_post_title:before, 
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-list-separator-month:before,
	{$rule}.tribe-bar-views-open label.button,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column a:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.tribe-events-tooltip .tribe-event-duration,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"],
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-event-meta .time-details .cmsmasters_event_time,
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details,
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details a,
	{$rule}#tribe-events-content.tribe-events-photo .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-meta .cmsmasters_event_time,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right a,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item a,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td.tribe-events-has-events div,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td.tribe-events-has-events *,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td.tribe-events-has-events.tribe-events-present div .tribe-mini-calendar-day-link:hover,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info > div,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info > div a,
	{$rule}.widget ol.vcalendar li .cmsmasters_widget_event_info *,
	{$rule}.widget ul.vcalendar li .cmsmasters_widget_event_info *,
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-event .duration .cmsmasters_event_time,
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue *,
	/*   */
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a, 
	{$rule}.recurringinfo a, 
	{$rule}.tribe-events-tooltip .tribe-events-event-body .duration {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td.tribe-events-has-events div .tribe-mini-calendar-day-link:hover:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td.tribe-events-has-events.tribe-events-present div .tribe-mini-calendar-day-link:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	@media only screen and (max-width: 768px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-has-events:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
		}
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option a,
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-list-event-description .tribe-events-read-more,
	{$rule}.cmsmasters_event_date .cmsmasters_event_day,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title a,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a,
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name,
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a,
	{$rule}.widget .tribe-events-widget-link a,
	{$rule}.tribe-this-week-widget-header-date .date,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"] a,
	/*   */
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .tribe-events-address address .adr span:first-child, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule > div:before, 
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-event-meta > div:before, 
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-event-meta > div > div:before, 
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details:before, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back:before, 
	{$rule}.tribe-events-list-widget-events .tribe-events-list-widget-content-wrap .duration:before, 
	{$rule}.widget .vcalendar .vevent .cmsmasters_widget_event_info > div:before, 
	{$rule}.widget .vcalendar .vevent .cmsmasters_widget_event_venue_info_loc > div:before, 
	{$rule}.tribe-events-list-widget-events .tribe-events-list-widget-content-wrap .tribe-events-event-cost, 
	{$rule}.widget .vcalendar .vevent .cmsmasters_widget_event_info .tribe-events-event-cost, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item dt, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-date-filter #tribe-bar-dates label, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-search-filter label, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-geoloc-filter label, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-submit label, 
	{$rule}#tribe-events-footer > a, 
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-list-separator-month, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date,
	{$rule}#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5, 
	{$rule}.tribe-events-notices, 
	{$rule}ul.tribe-related-events > li .tribe-related-events-thumbnail .cmsmasters_events_img_placeholder, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a:before, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a:hover:before, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right a, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right a:hover:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-info .duration:before, 
	{$rule}.widget .vcalendar .vevent .cmsmasters_widget_event_info .cmsmasters_widget_event_info_cost, 
	{$rule}.widget .vcalendar .vevent .entry-title, 
	{$rule}.widget .vcalendar .vevent .entry-title a, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .cmsmasters_widget_event_info > div:before, 
	{$rule}.widget .vcalendar .vevent .cmsmasters_widget_event_venue_info_loc .cmsmasters_widget_event_venue_info a, 
	{$rule}.widget .vcalendar .vevent .cmsmasters_widget_event_venue_info_loc .cmsmasters_widget_event_venue_loc a:hover, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-info .tribe-mini-calendar-event-venue, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-info .tribe-mini-calendar-event-venue a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:hover,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.tribe-events-tooltip.recurring-info-tooltip:before {
		border-bottom-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . ", 1) !important;
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek,
	/*   */
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a:hover,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"],
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth .tribe-events-month-event-title a,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-has-events.tribe-events-present div[id*=\"tribe-events-daynum-\"]:hover,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td.tribe-events-othermonth,
	/*   */
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner label.button .cmsmasters_next_arrow, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner label.button .cmsmasters_next_arrow:before, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner label.button .cmsmasters_next_arrow:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	@media only screen and (max-width: 768px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth.mobile-active *, 
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth.tribe-events-present * {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		}
		
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		}
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.tribe-events-sub-nav li a:hover,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"]:hover a,
	{$rule}.cmsmasters_event_date .cmsmasters_event_month,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title:hover,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title a:hover,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event:hover > div:first-child > .entry-title a,
	{$rule}.tribe-this-week-events-widget .tribe-events-sub-nav li a:hover:before,
	{$rule}.tribe-this-week-widget-header-date .day,
	{$rule}#tribe-events-sub-nav.post_nav .post_nav_inner *,
	/*   */
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td > div:hover .tribe-events-month-event-title a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a:hover, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-events-past .tribe-week-event:hover > div:first-child a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}#tribe-events-sub-nav.post_nav .post_nav_inner .sub,
	{$rule}#tribe-events-sub-nav.post_nav .post_nav_inner a:hover,
	{$rule}#tribe-events-sub-nav.post_nav .post_nav_inner a:hover * {
		color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . ", 0.55);
	}
	
	@media only screen and (max-width: 768px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.mobile-active div[id*=\"tribe-events-daynum-\"] a:hover {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
		}
	}
	
	{$rule}#tribe-events-bar #tribe-bar-views:before,
	{$rule}.tribe-events-sub-nav li a,
	{$rule}.tribe-events-tooltip,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-block,
	{$rule}.cmsmasters_event_date,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link span,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name,
	{$rule}.tribe-this-week-widget-header-date,
	/*   */
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-month-event-title a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td,
	{$rule}.tribe_events .cmsmasters_post_cont, 
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-list-separator-month, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date, 
	{$rule}#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5, 
	{$rule}.tribe-events-notices, 
	{$rule}ul.tribe-related-events > li .tribe-related-events-thumbnail .cmsmasters_events_img_placeholder, 
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-today {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	@media only screen and (max-width: 768px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
		}
	}
	
	{$rule}.tribe-events-tooltip:before,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:before,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link span:before,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link span:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-body .tribe-events-tooltip:before {
		border-right-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . ", 1) !important;
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-body .tribe-events-right .tribe-events-tooltip:before {
		border-left-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . ", 1) !important;
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.bd_font_color {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}#tribe-events-bar #tribe-bar-views:before,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-grid-body .tribe-week-grid-hours div,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td,
	/*   */
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar,
	{$rule}#tribe-events-content.tribe-events-list .vevent, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-viewmore, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-scroller, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-content-wrap .column, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-grid-outer-wrap .tribe-week-grid-inner-wrap .tribe-week-grid-block div, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-grid-outer-wrap .tribe-week-grid-inner-wrap .tribe-week-grid-block div:before, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile, 
	{$rule}.widget .vcalendar .vevent {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"],
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-day {
		border-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.8);
	}
	
	{$rule}.tribe_events .cmsmasters_post_cont_info,
	{$rule}.tribe_events .cmsmasters_post_footer_info, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe_events .cmsmasters_post_cont_info {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
	/* Start Secondary Color */
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a:hover,
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-event-meta .time-details .cmsmasters_event_time:before,
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details:before,
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-event-cost,
	{$rule}#tribe-events-content.tribe-events-photo .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-meta .cmsmasters_event_time:before,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule > div:before,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back a:before,
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right .tribe-events-back a:before,
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_left .tribe-events-event-meta .cmsmasters_location,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td.tribe-events-present,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td.tribe-events-has-events.tribe-events-present div .tribe-mini-calendar-day-link,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td.tribe-events-has-events.tribe-events-present,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td.tribe-events-has-events.tribe-events-present a,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td.tribe-events-has-events.tribe-events-present div .tribe-mini-calendar-day-link:hover,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td.tribe-events-has-events a:hover,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info div:before,
	{$rule}.widget.tribe-events-countdown-widget .tribe-countdown-text:before,
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name:before,
	{$rule}.widget ol.vcalendar li .cmsmasters_widget_event_info div:before,
	{$rule}.widget ul.vcalendar li .cmsmasters_widget_event_info div:before,
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-event .duration .cmsmasters_event_time:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-has-events div[id*=\"tribe-events-daynum-\"]:hover,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td > div:hover .tribe-events-month-event-title a,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth .tribe-events-month-event-title a:hover,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title:hover,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event:hover > div:first-child > .entry-title,
	{$rule}.tribe-events-notices:before,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td.tribe-events-has-events div .tribe-mini-calendar-day-link:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td.tribe-events-has-events.tribe-events-present div .tribe-mini-calendar-day-link:hover:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}
	
	@media only screen and (max-width: 768px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-has-events:hover:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
		}
	}
	/* Finish Secondary Color */
	
	{$rule}.tribe-events-sub-nav li a,
	{$rule}.tribe-events-tooltip,
	{$rule}.cmsmasters_event_date,
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap,
	{$rule}.tribe-events-notices,
	{$rule}.widget.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue,
	{$rule}.tribe-this-week-widget-header-date {
		-webkit-box-shadow:0 1px 2px 1px rgba(0, 0, 0, 0.05);
		-moz-box-shadow:0 1px 2px 1px rgba(0, 0, 0, 0.05);
		box-shadow:0 1px 2px 1px rgba(0, 0, 0, 0.05);
	}

/***************** Finish {$title} Events Color Scheme Rules ******************/


";
		}
	}
	
	
	$custom_css .= "
/***************** Start Header Middle Color Scheme Rules ******************/

	/* Start Header Middle Content Color */
	.header_mid,
	.header_mid input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_mid textarea,
	.header_mid select,
	.header_mid option,
	.header_mid .cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button,
	.header_mid .cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button:hover,
	.header_mid .cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_color']) . "
	}
	/* Finish Header Middle Content Color */
	
	
	/* Start Header Middle Primary Color */
	.header_mid a,
	.header_mid .mid_search_but_wrap .mid_search_but,
	#page .header_mid .cmsmasters_social_icon,
	.header_mid .cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button:before,
	.header_mid .cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li .quantity,
	.cmsmasters_header_search_form .cmsmasters_header_search_form_close,
	.cmsmasters_header_search_form button {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_link']) . "
	}
	
	.header_mid .button:hover,
	.header_mid input[type=submit]:hover,
	.header_mid input[type=button]:hover,
	.header_mid button:hover,
	.header_mid .cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid .resp_mid_nav .resp_nav_button,
		.header_mid .resp_mid_nav .resp_nav_button:before,
		.header_mid .resp_mid_nav .resp_nav_button:after {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_link']) . "
		}
	}
	/* Finish Header Middle Primary Color */
	
	
	/* Start Header Middle Rollover Color */
	.header_mid a:hover, 
	.header_mid .mid_search_but_wrap .mid_search_but:hover,
	#page .header_mid .cmsmasters_social_icon:hover,
	.header_mid .cmsmasters_dynamic_cart:hover .cmsmasters_dynamic_cart_button:before,
	.header_mid .cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a:hover,
	.header_mid .cmsmasters_dynamic_cart .widget_shopping_cart_content .total .amount,
	.cmsmasters_header_search_form .cmsmasters_header_search_form_close:hover,
	.cmsmasters_header_search_form button:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid .resp_mid_nav:hover .resp_nav_button,
		.header_mid .resp_mid_nav:hover .resp_nav_button:before,
		.header_mid .resp_mid_nav:hover .resp_nav_button:after,
		.header_mid .resp_mid_nav.active .resp_nav_button,
		.header_mid .resp_mid_nav.active .resp_nav_button:before,
		.header_mid .resp_mid_nav.active .resp_nav_button:after {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_hover']) . "
		}
	}
	
	.header_mid .button, 
	.header_mid input[type=submit], 
	.header_mid input[type=button], 
	.header_mid button,
	.header_mid .cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_hover']) . "
	}
	
	.header_mid input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]):focus,
	.header_mid textarea:focus,
	.header_mid select:focus,
	.cmsmasters_header_search_form input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]):focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_hover']) . "
	}
	
	.header_mid .search_wrap .search_bar_wrap input[type=search]:focus {
		-webkit-box-shadow:inset 0 -1px 0 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_hover']) . ", 1);
		-moz-box-shadow:inset 0 -1px 0 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_hover']) . ", 1);
		box-shadow:inset 0 -1px 0 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_hover']) . ", 1);
	}
	/* Finish Header Middle Rollover Color */
	
	
	/* Start Header Middle Background Color */
	.header_mid .button,
	.header_mid input[type=submit],
	.header_mid input[type=button],
	.header_mid button,
	.header_mid .button:hover,
	.header_mid input[type=submit]:hover,
	.header_mid input[type=button]:hover,
	.header_mid button:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_bg']) . "
	}
	
	.header_mid,
	.header_mid input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_mid textarea,
	.header_mid select,
	.header_mid option,
	.header_mid .cmsmasters_added_product_info {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_bg']) . "
	}
	/* Finish Header Middle Background Color */
	
	
	/* Start Header Middle Background Color on Scroll */
	.header_mid .cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button,
	.header_mid .cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_bg_scroll']) . "
	}
	
	.header_mid.header_mid_scroll,
	.header_mid .cmsmasters_dynamic_cart .widget_shopping_cart_content {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_bg_scroll']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_bg_scroll']) . "
		}
	}
	/* Finish Header Middle Background Color on Scroll */
	
	
	/* Start Header Middle Borders Color */
	.header_mid input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_mid textarea,
	.header_mid select,
	.header_mid option,
	.cmsmasters_header_search_form input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]) {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_border']) . "
	}
	/* Finish Header Middle Borders Color */
	
	
	/* Start Header Middle Custom Rules */
	.header_mid ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_bg']) . "
	}
	
	.header_mid ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_mid_bg']) . "
	}
	/* Finish Header Middle Custom Rules */

/***************** Finish Header Middle Color Scheme Rules ******************/



/***************** Start Header Bottom Color Scheme Rules ******************/

	/* Start Header Bottom Content Color */
	.header_bot,
	.header_bot input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_bot textarea,
	.header_bot select,
	.header_bot option {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_color']) . "
	}
	/* Finish Header Bottom Content Color */
	
	
	/* Start Header Bottom Primary Color */
	.header_bot a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_link']) . "
	}
	
	.header_bot .button:hover, 
	.header_bot input[type=submit]:hover, 
	.header_bot input[type=button]:hover, 
	.header_bot button:hover, 
	.header_bot .search_wrap .search_bar_wrap .search_button button:hover, 
	.header_bot .search_wrap.search_opened .search_bar_wrap .search_button button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot .resp_nav_button,
		.header_bot .resp_nav_button:before,
		.header_bot .resp_nav_button:after {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_link']) . "
		}
	}
	/* Finish Header Bottom Primary Color */
	
	
	/* Start Header Bottom Rollover Color */
	.header_bot a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_hover']) . "
	}
	
	.header_bot .button, 
	.header_bot input[type=submit], 
	.header_bot input[type=button], 
	.header_bot button,
	.header_bot .search_wrap .search_bar_wrap .search_button button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot .resp_bot_nav:hover .resp_nav_button,
		.header_bot .resp_bot_nav:hover .resp_nav_button:before,
		.header_bot .resp_bot_nav:hover .resp_nav_button:after,
		.header_bot .resp_bot_nav.active .resp_nav_button,
		.header_bot .resp_bot_nav.active .resp_nav_button:before,
		.header_bot .resp_bot_nav.active .resp_nav_button:after {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_hover']) . "
		}
	}
	
	.header_bot input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]):focus,
	.header_bot textarea:focus,
	.header_bot select:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_hover']) . "
	}
	/* Finish Header Bottom Rollover Color */
	
	
	/* Start Header Bottom Background Color */
	.header_bot .button, 
	.header_bot input[type=submit], 
	.header_bot input[type=button], 
	.header_bot button, 
	.header_bot .search_wrap .search_bar_wrap .search_button button {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_bg']) . "
	}
	
	.header_bot,
	.header_bot input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_bot textarea,
	.header_bot select,
	.header_bot option {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_bg']) . "
	}
	/* Finish Header Bottom Background Color */
	
	
	/* Start Header Bottom Background Color on Scroll */
	.header_bot.header_bot_scroll {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_bg_scroll']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_bg_scroll']) . "
		}
	}
	/* Finish Header Bottom Background Color on Scroll */
	
	
	/* Start Header Bottom Borders Color */
	.header_bot input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_bot textarea,
	.header_bot select,
	.header_bot option {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_border']) . "
	}
	/* Finish Header Bottom Borders Color */
	
	
	/* Start Header Bottom Custom Rules */
	.header_bot ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_bg']) . "
	}
	
	.header_bot ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_bot_bg']) . "
	}
	/* Finish Header Bottom Custom Rules */

/***************** Finish Header Bottom Color Scheme Rules ******************/



/***************** Start Navigation Color Scheme Rules ******************/

	/* Start Navigation Title Link Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_title_link']) . "
		}
	}
	/* Finish Navigation Title Link Color */
	
	
	/* Start Navigation Title Link Hover Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a:hover,
		ul.navigation > li > a:hover .nav_subtitle,
		ul.navigation > li:hover > a,
		ul.navigation > li:hover > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_title_link_hover']) . "
		}
	}
	/* Finish Navigation Title Link Hover Color */
	
	
	/* Start Navigation Title Link Current Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li.menu-item.current-menu-item > a,
		ul.navigation > li.menu-item.current-menu-item > a .nav_subtitle,
		ul.navigation > li.menu-item.current-menu-ancestor > a,
		ul.navigation > li.menu-item.current-menu-ancestor > a .nav_subtitle,
		ul.navigation > li > a .nav_tag {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_title_link_current']) . "
		}
		
		.navigation .magic-line-nav {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_title_link_current']) . "
		}
	}
	/* Finish Navigation Title Link Current Color */
	
	
	/* Start Navigation Title Link Subtitle Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_title_link_subtitle']) . "
		}
		
		ul.navigation > li > a .nav_tag {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_title_link_subtitle']) . "
		}
		
		ul.navigation > li > a .nav_tag:before {
			" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_title_link_subtitle']) . "
		}
	}
	/* Finish Navigation Title Link Subtitle Color */
	
	
	/* Start Navigation Title Link Background Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_title_link_bg']) . "
		}
	}
	/* Finish Navigation Title Link Background Color */
	
	
	/* Start Navigation Title Link Hover Background Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a:hover,
		ul.navigation > li:hover > a {
			background-color:transparent;
		}
		
		.navigation:hover .magic-bg-nav {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_title_link_bg_hover']) . "
		}
	}
	/* Finish Navigation Title Link Hover Background Color */
	
	
	/* Start Navigation Title Link Current Background Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li.menu-item.current-menu-item > a, 
		ul.navigation > li.menu-item.current-menu-ancestor > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_title_link_bg_current']) . "
		}
	}
	/* Finish Navigation Title Link Current Background Color */
	
	
	/* Start Navigation Title Link Border Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_title_link_border']) . "
		}
		
		.navigation:hover .magic-bg-nav {
			" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_title_link_border']) . "
		}
	}
	/* Finish Navigation Title Link Border Color */
	
	
	/* Start Navigation Dropdown Text Color */
	.navigation li .menu-item-mega-description-container, 
	.navigation li .menu-item-mega-description-container * {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_text']) . "
	}
	/* Finish Navigation Dropdown Tex Color */
	
	
	/* Start Navigation Dropdown Background Color */
	@media only screen and (max-width: 1024px) {
		ul.navigation {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1025px) {
		ul.navigation ul, 
		ul.navigation .menu-item-mega-container,
		#header nav > div > ul div.menu-item-mega-container > ul > li > a:hover,
		#header nav > div > ul div.menu-item-mega-container > ul > li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_bg']) . "
		}
	}
	/* Finish Navigation Dropdown Background Color */
	
	
	/* Start Navigation Dropdown Border Color */
	@media only screen and (min-width: 1025px) {
		/* ul.navigation ul,
		ul.navigation .menu-item-mega-container, */
		ul.navigation .menu-item-mega-container > ul > li {
			" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_border']) . "
		}
	}
	
	@media only screen and (max-width: 1024px) {
		ul.navigation li {
			" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_border']) . "
		}
	}
	/* Finish Navigation Dropdown Border Color */
	
	
	/* Start Navigation Dropdown Link Color */
	.navigation li a,
	#header nav > div > ul div.menu-item-mega-container > ul > li > a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.navigation > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_link']) . "
		}
	}
	/* Finish Navigation Dropdown Link Color */
	
	
	/* Start Navigation Dropdown Link Hover Color */
	.navigation li > a:hover,
	.navigation li > a:hover .nav_subtitle,
	.navigation li.current-menu-item > a, 
	.navigation li.current-menu-item > a .nav_subtitle, 
	.navigation li a .nav_tag {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_link_hover']) . "
	}
	
	@media only screen and (min-width: 1025px) {
		ul.navigation li > ul li:hover > a, 
		ul.navigation li > ul li:hover > a .nav_subtitle, 
		ul.navigation li > ul li.current-menu-ancestor > a, 
		ul.navigation li > ul li.current-menu-ancestor > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_link_hover']) . "
		}
	}
	
	@media only screen and (max-width: 1024px) {
		.navigation > li > a:hover,
		.navigation > li > a:hover .nav_subtitle,
		.navigation > li:hover > a,
		.navigation > li:hover > a .nav_subtitle,
		.navigation > li.current-menu-item > a, 
		.navigation > li.current-menu-item > a .nav_subtitle, 
		.navigation > li.current-menu-ancestor > a, 
		.navigation > li.current-menu-ancestor > a .nav_subtitle, 
		.navigation > li a .nav_tag,
		#header nav > div > ul div.menu-item-mega-container > ul > li > a:hover,
		#header nav > div > ul div.menu-item-mega-container > ul > li:hover > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_link_hover']) . "
		}
	}
	/* Finish Navigation Dropdown Link Hover Color */
	
	
	/* Start Navigation Dropdown Link Subtitle Color */
	.navigation li a .nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_link_subtitle']) . "
	}
	
	.navigation li a .nav_tag {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_link_subtitle']) . "
	}
	/* Finish Navigation Dropdown Link Subtitle Color */
	
	
	/* Start Navigation Dropdown Link Hover Highlight Color */
	.navigation li > a:hover,
	.navigation li:hover > a,
	.navigation li.current-menu-item > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_link_highlight']) . "
	}
	
	@media only screen and (min-width: 1025px) {
		ul.navigation li > ul li:hover > a, 
		ul.navigation li > ul li.current-menu-ancestor > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_link_highlight']) . "
		}
	}
	
	@media only screen and (max-width: 1024px) {
		.navigation > li > a:hover,
		.navigation > li:hover > a,
		.navigation li.current-menu-item > a,
		.navigation li.current-menu-item > a .nav_subtitle,
		.navigation li.current-menu-ancestor > a,
		.navigation li.current-menu-ancestor > a .nav_subtitle {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_link_highlight']) . "
		}
	}
	/* Finish Navigation Dropdown Link Hover Highlight Color */
	
	
	/* Start Navigation Dropdown Link Border Color */
	.navigation li {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_dropdown_link_border']) . "
	}
	/* Finish Navigation Dropdown Link Border Color */
	
	
	/* Start Other Elemets Navigation */
	@media only screen and (max-width: 1024px) {
		.navigation li a:hover .cmsmasters_resp_nav_toggle,
		.navigation li.current-menu-item > a .cmsmasters_resp_nav_toggle,
		.navigation li.current-menu-ancestor > a .cmsmasters_resp_nav_toggle {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_magic_line']) . "
		}
	}
	
	@media only screen and (min-width: 1025px) {
		#header .menu-item-mega-container > .sub-menu .sub-menu:hover > .magic-mega-drop-bg-nav,
		#header #navigation > li > .sub-menu:hover > .magic-drop-bg-nav,
		#header #navigation > li > .sub-menu .sub-menu:hover > .magic-drop-bg-chn-nav,
		#header .menu-item-mega-container > ul > li > ul .current_page_item a:after,
		#header #navigation > li > .sub-menu .current_page_item a:after,
		#header #navigation > li > .sub-menu  .sub-menu .current_page_item a:after,
		#header nav > div > ul li.current-menu-ancestor .sub-menu .current-menu-ancestor > a:after {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_magic_line']) . "
		}
	}
	
	@media only screen and (max-width: 1024px) {
		#header nav a:hover:after,
		#header #navigation > li:hover > a:after,
		#header #navigation > li.current-menu-ancestor > a:after,
		#header #navigation > li.current_page_item > a:after,
		#header nav > div > ul > li > ul .current_page_item > a:after,
		#header nav > div > ul div.menu-item-mega-container > ul > li > a:hover:after,
		#header nav > div > ul div.menu-item-mega-container > ul > li:hover > a:after,
		#header nav > div > ul div.menu-item-mega-container > ul > li.current_page_item > a:after,
		#header nav > div > ul div.menu-item-mega-container > ul > li.current-menu-ancestor > a:after {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_navigation_magic_line']) . "
		}
	}
	/* Finish Other Elemets Navigation */

/***************** Finish Navigation Color Scheme Rules ******************/



/***************** Start Header Top Color Scheme Rules ******************/

	/* Start Header Top Content Color */
	.header_top {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_color']) . "
	}
	/* Finish Header Top Content Color */
	
	
	/* Start Header Top Primary Color */
	.header_top a,
	.header_top .header_top_but {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
	}
	
	#page .header_top .cmsmasters_social_icon {
		color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . ", .25);
	}
	
	.header_top .responsive_top_nav .resp_top_nav_button,
	.header_top .responsive_top_nav .resp_top_nav_button:after,
	.header_top .responsive_top_nav .resp_top_nav_button:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
	}
	/* Finish Header Top Primary Color */
	
	
	/* Start Header Top Rollover Color */
	.header_top a:hover,
	.header_top .meta_wrap [class^=cmsmasters-icon-]:before,
	.header_top .meta_wrap [class*= cmsmasters-icon-]:before,
	.header_top .responsive_top_nav,
	.header_top .header_top_but:hover,
	.header_top .header_top_but.opened,
	#page .header_top .cmsmasters_social_icon:hover,
	.header_top .meta_wrap > *:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_hover']) . "
	}
	
	.header_top .responsive_top_nav:hover .resp_top_nav_button,
	.header_top .responsive_top_nav:hover .resp_top_nav_button:after,
	.header_top .responsive_top_nav:hover .resp_top_nav_button:before,
	.header_top .responsive_top_nav.active .resp_top_nav_button,
	.header_top .responsive_top_nav.active .resp_top_nav_button:after,
	.header_top .responsive_top_nav.active .resp_top_nav_button:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_hover']) . "
	}
	/* Finish Header Top Rollover Color */
	
	
	/* Start Header Top Background Color */
	.header_top {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_bg']) . "
	}
	/* Finish Header Top Background Color */
	
	
	/* Start Header Top Borders Color */
	.header_top .header_top_inner:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_border']) . "
	}
	
	.header_top .header_top_but,
	.header_top .responsive_top_nav {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_border']) . "
	}
	/* Finish Header Top Borders Color */
	
	
	/* Start Header Top Custom Rules */
	.header_top ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_bg']) . "
	}
	
	.header_top ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_bg']) . "
	}
	/* Finish Header Top Custom Rules */

/***************** Finish Header Top Color Scheme Rules ******************/



/***************** Start Header Top Navigation Color Scheme Rules ******************/

	/* Start Header Top Navigation Title Link Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_title_link']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Color */
	
	
	/* Start Header Top Navigation Title Link Hover Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a:hover,
		ul.top_line_nav > li:hover > a,
		ul.top_line_nav > li.current-menu-item > a,
		ul.top_line_nav > li.current-menu-ancestor > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_title_link_hover']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Hover Color */
	
	
	/* Start Header Top Navigation Title Link Background Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_title_link_bg']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Background Color */
	
	
	/* Start Header Top Navigation Title Link Hover Background Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a:hover,
		ul.top_line_nav > li:hover > a,
		ul.top_line_nav > li.current-menu-item > a,
		ul.top_line_nav > li.current-menu-ancestor > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_title_link_bg_hover']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Hover Background Color */
	
	
	/* Start Header Top Navigation Title Link Border Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li:hover {
			" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_title_link_border']) . "
		}
		
		ul.top_line_nav > li:hover + li {
			" . cmsmasters_color_css('border-left-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_title_link_border']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Border Color */
	
	
	/* Start Header Top Navigation Dropdown Background Color */
	@media only screen and (max-width: 1024px) {
		ul.top_line_nav {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_bg']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Background Color */
	
	
	/* Start Header Top Navigation Dropdown Border Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul {
			" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_border']) . "
		}
	}
	
	@media only screen and (max-width: 1024px) {
		.top_nav_wrap .top_line_nav li {
			" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_border']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Border Color */
	
	
	/* Start Header Top Navigation Dropdown Link Color */
	.top_line_nav li a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_link']) . "
	}
	/* Finish Header Top Navigation Dropdown Link Color */
	
	
	/* Start Header Top Navigation Dropdown Link Hover Color */
	.top_line_nav li > a:hover,
	.top_line_nav li.current-menu-item > a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_link_hover']) . "
	}
	
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul li:hover > a, 
		ul.top_line_nav ul li.current-menu-ancestor > a {
			" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_link_hover']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Link Hover Color */
	
	
	/* Start Header Top Navigation Dropdown Link Hover Highlight Color */
	.top_line_nav li > a:hover,
	.top_line_nav li.current-menu-item > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_link_highlight']) . "
	}
	
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul li:hover > a,
		ul.top_line_nav ul li.current-menu-ancestor > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_link_highlight']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Link Hover Highlight Color */
	
	
	/* Start Header Top Navigation Dropdown Link Border Color */
	.top_line_nav li {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_header_top_dropdown_link_border']) . "
	}
	/* Finish Header Top Navigation Dropdown Link Border Color */

/***************** Finish Header Top Navigation Color Scheme Rules ******************/

";
	
	
	return $custom_css;
}

