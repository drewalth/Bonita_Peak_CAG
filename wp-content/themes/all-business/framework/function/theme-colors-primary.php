<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.0.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function all_business_theme_colors_primary() {
	$cmsmasters_option = all_business_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.0.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	{$rule}input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}.cmsmasters_prev_arrow,
	{$rule}.cmsmasters_next_arrow,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers,
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .owl-buttons > div > span > span,
	{$rule}.cmsmasters_twitter .owl-controls .owl-buttons > div > span:hover,
	{$rule}.cmsmastersLike,
	{$rule}.cmsmastersLike:hover,
	{$rule}.cmsmasters_post_comments,
	{$rule}.cmsmasters_post_comments:hover,
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details_item > div.project_details_item_desc.details_item_desc_like a > span, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details_item > div.project_details_item_desc.details_item_desc_like a:hover > span, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details_item > div.project_details_item_desc.details_item_desc_comments a > span,
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details_item > div.project_details_item_desc.details_item_desc_comments a:hover > span,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details_item > div.profile_details_item_desc.details_item_desc_like a > span, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details_item > div.profile_details_item_desc.details_item_desc_like a:hover > span, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details_item > div.profile_details_item_desc.details_item_desc_comments a > span,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details_item > div.profile_details_item_desc.details_item_desc_comments a:hover > span,
	{$rule}.widget_custom_contact_info_entries *,
	{$rule}.widget_tag_cloud .tagcloud a,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_comments li .color_2 {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}a,
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	{$rule}blockquote:before,
	{$rule}.cmsmasters_notice .notice_close:hover,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_quotes_slider .wrap_quote_title,
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .owl-buttons > div:hover > span > span,
	{$rule}.cmsmasters_quotes_grid .wrap_quote_title,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab > a,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title > a,
	{$rule}.twr_icon,
	{$rule}.cmsmastersLike:hover:before,
	{$rule}.cmsmastersLike.active:before,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a, 
	{$rule}.cmsmasters_post_comments:hover:before,
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info > span a:hover,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info > span a:hover,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info > span a:hover,
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_cont .puzzle_post_content_wrapper .cmsmasters_post_wrap_info > span a:hover,
	{$rule}.cmsmasters_profile .pl_social_list li a:hover,
	{$rule}.cmsmasters_profile.horizontal .profile > .pl_title_wrap .pl_subtitle,
	{$rule}.cmsmasters_profile.vertical .profile .pl_subtitle,
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_open_post_link:hover:before,
	{$rule}.portfolio.grid .project .project_inner .cmsmasters_project_cont_info > span a:hover,
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_open_post_link:before,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li.current a,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li.current a:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.active,
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info span a:hover,
	{$rule}.blog.opened-article .post .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info > span a:hover,
	{$rule}.share_posts a:hover,
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details_item .project_details_item_desc a:hover,
	{$rule}.portfolio.opened-article .project.format-gallery .preloader .cmsmasters_img_rollover a,
	{$rule}.profiles.opened-article .profile .cmsmasters_profile_header .cmsmasters_profile_subtitle,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details_item .profile_details_item_desc a:hover,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_social_icons .profile_social_icons_list li a:hover,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info a:hover,
	{$rule}.widget ul li > a:hover,
	{$rule}.widget_archive ul li a:hover:before,
	{$rule}.widget_categories ul li a:hover:before,
	{$rule}.widget_calendar #wp-calendar tfoot a:hover,
	{$rule}.widget_custom_contact_info_entries a:hover,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_cont_info a:hover,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_cont_info a:hover,
	{$rule}.widget_custom_twitter_entries .tweet_list li .tweet_time:before,
	{$rule}.widget_nav_menu > div > ul li > a[href]:hover,
	{$rule}.widget_nav_menu > div > ul li.current_page_item > a[href],
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_latest .cmsmasters_lpr_tabs_cont > a:hover,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_popular .cmsmasters_lpr_tabs_cont > a:hover,
	{$rule}.cmsmasters_dropcap.type1,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_heading_left .icon_box_heading:before,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	{$rule}#wp-calendar thead th,
	{$rule}.bypostauthor > .comment-body .alignleft:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a:hover,
	{$rule}.widget_custom_contact_info_entries *:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button,
	{$rule}.owl-pagination .owl-page:hover,
	{$rule}.owl-pagination .owl-page.active,
	{$rule}.cmsmasters_wrap_pagination ul li a.page-numbers:hover,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current,
	{$rule}.cmsmasters_prev_arrow:hover,
	{$rule}.cmsmasters_next_arrow:hover,
	{$rule}.cmsmasters_content_slider .owl-controls .owl-buttons .owl-prev:hover,
	{$rule}.cmsmasters_content_slider .owl-controls .owl-buttons .owl-next:hover,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .pricing_title:before,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .pricing_title,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap,
	{$rule}.cmsmasters_table tr th,
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab:before,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab:hover:before,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title:before,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title:hover:before,
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .owl-controls .owl-buttons > div:hover,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .owl-controls .owl-buttons > div:hover,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .owl-controls .owl-buttons > div:hover,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap:hover + .cmsmasters_post_bullet,
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_cont .puzzle_post_img_wrap > figure,
	{$rule}.portfolio.puzzle .project .project_inner,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list .magic-line,
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_inner,
	{$rule}.blog.opened-article .post .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .owl-controls .owl-buttons > div:hover,
	{$rule}.post_nav:before,
	{$rule}.portfolio.opened-article .project .owl-controls .owl-buttons > div:hover,
	{$rule}.cmsmasters_single_slider_item .cmsmasters_single_slider_item_inner,
	{$rule}.widget_tag_cloud .tagcloud a[href]:hover,
	{$rule}.widget_tag_cloud .tagcloud a[style='font-size: 22pt;'],
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:after,
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:after,
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:after,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:after,
	{$rule}.widget_nav_menu > div > ul li > a:hover[href]:before,
	{$rule}.widget_nav_menu > div > ul li.current_page_item > a[href]:before,
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	" . (($scheme == 'default') ? "mark," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme} mark," : '') . "
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.button, 
	{$rule}input[type=submit], 
	{$rule}input[type=button], 
	{$rule}button, 
	{$rule}#page .cmsmasters_social_icon {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.portfolio.grid .cmsmasters_img_rollover_wrap .cmsmasters_img_rollover,
	{$rule}.portfolio.opened-article .project.format-gallery .preloader .cmsmasters_img_rollover {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . ", 0.9);
	}
	
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap:after,
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .cmsmasters_post_header:after,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .cmsmasters_post_header:after,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .cmsmasters_post_header:after,
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_cont .puzzle_post_img_wrap .cmsmasters_post_header:after,
	{$rule}.cmsmasters_profile.horizontal .pl_img_wrap .pl_title_wrap:after,
	{$rule}.portfolio.puzzle .project .project_inner:before,
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_inner:before,
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .thumb_wrap .cmsmasters_slider_post_header:after,
	{$rule}.cmsmasters_single_slider_item .cmsmasters_single_slider_item_inner:before {
		background:-moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . ", 1) 100%);
		background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . ", 1) 100%);
		background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . ", 1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#000000',GradientType=0 );
	}
	
	{$rule}.cmsmasters_hover_slider .cmsmasters_hover_slider_thumbs > li.hovered_item a:before {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . ", 0.7);
	}
	
	{$rule}.owl-pagination .owl-page:hover,
	{$rule}.owl-pagination .owl-page.active,
	{$rule}input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]):focus,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap,
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div:hover,
	{$rule}input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]):focus,
	{$rule}textarea:focus,
	{$rule}select:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]):focus,
	{$rule}.area_opened input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]) {
		-webkit-box-shadow:inset 0 -1px 0 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . ", 1);
		-moz-box-shadow:inset 0 -1px 0 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . ", 1);
		box-shadow:inset 0 -1px 0 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . ", 1);
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}a:hover,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a:hover, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a:hover, 
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}html #page .post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_read_more:hover,
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info .cmsmasters_post_date,
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info > span a,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .cmsmasters_post_date,
	{$rule}html #page .post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_read_more:hover,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info .cmsmasters_post_date,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info > span a,
	{$rule}html #page .post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_read_more:hover,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_date,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info > span a,
	{$rule}html #page .post.cmsmasters_puzzle_type .cmsmasters_post_cont .puzzle_post_content_wrapper .cmsmasters_post_read_more:hover,
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_cont .cmsmasters_post_cont_info .cmsmasters_post_date,
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_wrap_info > span a,
	{$rule}.cmsmasters_profile .pl_social_list li a,
	{$rule}html #page .cmsmasters_profile.vertical .profile .pl_img .pl_noimg:hover:before,
	{$rule}.portfolio.grid .project .project_inner .cmsmasters_project_cont_info > span a,
	{$rule}html #page .portfolio.grid .project .project_inner .cmsmasters_project_footer .cmsmasters_project_read_more:hover,
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_post_cont_info span a,
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_post_date,
	{$rule}html #page .cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_slider_post_footer .cmsmasters_post_read_more:hover,
	{$rule}.blog.opened-article .post .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info > span a,
	{$rule}.blog.opened-article .post .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info .cmsmasters_post_date,
	{$rule}.post_comments .cmsmasters_comment_item_date,
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details_item .project_details_item_desc a,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details_item .profile_details_item_desc a,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_social_icons .profile_social_icons_list li a,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_type,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info a,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_date_wrap,
	{$rule}.widget_calendar #wp-calendar tfoot *,
	{$rule}.widget_calendar #wp-calendar caption:before,
	{$rule}.widget .cmsmasters-form-builder label,
	{$rule}.widget_search .search_bar_wrap .search_button button:before,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_cont_info a,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_cont_info a,
	{$rule}.widget_custom_twitter_entries .tweet_list li .tweet_time,
	{$rule}.widget_rss .rss-date,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_latest .cmsmasters_lpr_tabs_cont .published,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_popular .cmsmasters_lpr_tabs_cont .published,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_comments li small,
	{$rule}a.cmsmasters_cat_color:hover,
	{$rule}.footer_nav > li.current-menu-item > a, 
	{$rule}.footer_nav > li.current-menu-ancestor > a {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.cmsmasters_button:hover,
	{$rule}.button:hover, 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button]:hover, 
	{$rule}button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	" . (($scheme == 'default') ? ".headline_outer a:hover," : '') . "
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}.headline_outer span,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_inner,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_inner:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap *,
	{$rule}.cmsmasters_table tfoot tr td,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > a,
	{$rule}.post.cmsmasters_post_default.format-video .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .cmsmasters_post_header a,
	{$rule}.post.cmsmasters_masonry_type.format-video .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .cmsmasters_post_header a,
	{$rule}.post.cmsmasters_timeline_type.format-video .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .cmsmasters_post_header a,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	{$rule}.cmsmasters_posts_slider.project .cmsmasters_owl_slider .owl-buttons > div:hover > span,
	{$rule}.share_posts a,
	{$rule}.cmsmasters_single_slider .cmsmasters_owl_slider .owl-buttons > div:hover > span,
	{$rule}.widget ul li > a,
	{$rule}.widget_nav_menu > div > ul li > a:not([href]):hover,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_latest .cmsmasters_lpr_tabs_cont > a,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_popular .cmsmasters_lpr_tabs_cont > a,
	{$rule}fieldset legend,
	{$rule}blockquote footer,
	{$rule}table caption,
	{$rule}#wp-calendar caption,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li a:before,
	{$rule}.search_bar_wrap .search_button button {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.headline_outer a,
	{$rule}.headline_outer .breadcrumbs_sep {
		color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . ", 0.5);
	}
	
	{$rule}.cmsmasters_prev_arrow_pixel:before,
	{$rule}.cmsmasters_prev_arrow_pixel:after,
	{$rule}.cmsmasters_next_arrow_pixel:before,
	{$rule}.cmsmasters_next_arrow_pixel:after,
	{$rule}form .formError .formErrorContent {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_content_slider .owl-controls .owl-buttons .owl-prev,
	{$rule}.cmsmasters_content_slider .owl-controls .owl-buttons .owl-next {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . ", 0.4);
	}
	
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .owl-controls .owl-buttons > div,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .owl-controls .owl-buttons > div,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .owl-controls .owl-buttons > div,
	{$rule}.blog.opened-article .post .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .owl-controls .owl-buttons > div,
	{$rule}.portfolio.opened-article .project .owl-controls .owl-buttons > div,
	{$rule}.cmsmasters_posts_slider.project .cmsmasters_owl_slider .owl-buttons > div > span,
	{$rule}.cmsmasters_single_slider .cmsmasters_owl_slider .owl-buttons > div > span {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . ", 0.3);
	}
	
	{$rule}.cmsmasters_notice {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . ", 0.055);
	}
	
	{$rule}.content_wrap .content_wrap_inner:before,
	{$rule}.sidebar .widget_calendar #wp-calendar tfoot #prev a:before,
	{$rule}.sidebar .widget_custom_contact_form_entries input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}.sidebar .widget_custom_contact_form_entries textarea,
	{$rule}.sidebar .widget_custom_contact_form_entries select,
	{$rule}.sidebar .widget_search .search_bar_wrap .search_field input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]) {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . ", 0.024);
	}
	
	@media only screen and (max-width: 950px) {
		{$rule}.sidebar:after {
			background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_heading']) . ", 0.024);
		}
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}mark,
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_inner_cont .cmsmasters_stat_inner_shadow,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter,
	{$rule}.cmsmasters_quotes.cmsmasters_quotes_grid .cmsmasters_quotes_list,
	{$rule}.cmsmasters_quotes.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_wrap,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap .cmsmasters_toggle_title:hover,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a:hover,
	{$rule}.cmsmasters_twitter_wrap,
	{$rule}.widget_calendar #wp-calendar tfoot #prev a:after,
	{$rule}.sidebar .widget_custom_contact_form_entries .form_field_wrap,
	{$rule}.sidebar .widget_search .search_bar_wrap .search_field {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_profile.vertical .profile .pl_img {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . ", 0.5);
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.cmsmasters_button,
	{$rule}.cmsmasters_button:hover,
	{$rule}.cmsmasters_prev_arrow:hover,
	{$rule}.cmsmasters_next_arrow:hover,
	{$rule}.cmsmasters_wrap_pagination ul li a.page-numbers:hover,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current,
	{$rule}.cmsmasters_content_slider .owl-controls .owl-buttons > div > span,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .pricing_title,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap *,
	{$rule}.cmsmasters_table tr th,
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item a,
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .cmsmasters_post_header a,
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .owl-controls .owl-buttons > div > span:before,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .cmsmasters_post_header a,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .owl-controls .owl-buttons > div > span:before,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .cmsmasters_post_header a,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .owl-controls .owl-buttons > div > span:before,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_info,
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_cont .puzzle_post_img_wrap .cmsmasters_post_header a,
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_cont .puzzle_post_img_wrap > figure a,
	{$rule}.cmsmasters_profile.horizontal .pl_img_wrap .pl_title_wrap a,
	{$rule}.cmsmasters_profile.horizontal .pl_img_wrap .pl_title_wrap .pl_subtitle,
	{$rule}.portfolio.puzzle .project .project_inner .cmsmasters_project_header .cmsmasters_project_title a,
	{$rule}.portfolio.puzzle .project .project_inner .cmsmasters_project_info_wrap .cmsmasters_project_cont_info,
	{$rule}.portfolio.puzzle .project .project_inner .cmsmasters_project_info_wrap .cmsmasters_project_cont_info a,
	{$rule}.portfolio.puzzle .project .project_inner .cmsmasters_project_info_wrap .cmsmasters_project_cont_info a:hover,
	{$rule}.portfolio.puzzle .project .project_inner .cmsmasters_project_footer a,
	{$rule}.portfolio.puzzle .project .project_inner .cmsmasters_project_footer a:before,
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .thumb_wrap .cmsmasters_slider_post_header,
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .thumb_wrap .cmsmasters_slider_post_header a,
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_inner *,
	{$rule}.cmsmasters_posts_slider .project .slider_project_outer .slider_project_inner *:before,
	{$rule}.cmsmasters_posts_slider.project .cmsmasters_owl_slider .owl-buttons > div > span,
	{$rule}.blog.opened-article .post .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .cmsmasters_post_header .cmsmasters_post_title,
	{$rule}.blog.opened-article .post .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .owl-controls .owl-buttons > div,
	{$rule}.cmsmasters_single_slider .cmsmasters_owl_slider .owl-buttons > div > span,
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_item_title,
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_item_title a,
	{$rule}.post_nav .post_nav_inner > span > span,
	{$rule}.post_nav .post_nav_inner > span a,
	{$rule}.portfolio.opened-article .project .owl-controls .owl-buttons > div > span:before,
	{$rule}.widget_tag_cloud .tagcloud a[href]:hover,
	{$rule}.widget_tag_cloud .tagcloud a[title='2 topics'],
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:after,
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:after,
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon_wrap,
	{$rule}.button, 
	{$rule}input[type=submit], 
	{$rule}input[type=button], 
	{$rule}button, 
	{$rule}.button:hover, 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button]:hover, 
	{$rule}button:hover, 
	{$rule}#page .cmsmasters_social_icon {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.owl-pagination .owl-page,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers,
	{$rule}.cmsmasters_notice .notice_content,
	{$rule}.cmsmasters_icon_list_items .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .pricing_title:before,
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote .cmsmasters_quote_inner,
	{$rule}.cmsmasters_quotes.cmsmasters_quotes_grid .cmsmasters_quotes_list .cmsmasters_quote,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_container:after,
	{$rule}.cmsmasters_table tr td,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_wrap,
	{$rule}.cmsmasters_tabs.tabs_mode_tab .magic-line,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab a:hover,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title:hover,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > .cmsmasters_toggle_plus > span,
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap,
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_cont,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_bullet,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont,
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_cont,
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_cont .puzzle_post_content_wrapper .puzzle_post_content_wrap .cmsmasters_post_footer,
	{$rule}.cmsmasters_profile .profile .pl_content,
	{$rule}.cmsmasters_profile .profile .pl_social,
	{$rule}.cmsmasters_profile.horizontal .profile > .pl_title_wrap,
	{$rule}.cmsmasters_profile.vertical .profile,
	{$rule}.portfolio.grid .project .project_inner,
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_open_post_link,
	{$rule}.cmsmasters_items_filter_wrap,
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_post_date,
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap,
	{$rule}.cmsmasters_posts_slider.project .cmsmasters_owl_slider .owl-buttons > div:hover > span,
	{$rule}.blog.opened-article .post .cmsmasters_post_cont_wrap,
	{$rule}.share_posts a,
	{$rule}.cmsmasters_single_slider .cmsmasters_owl_slider .owl-buttons > div:hover > span,
	{$rule}.post_comments .commentlist,
	{$rule}.portfolio.opened-article .project.format-gallery .preloader .cmsmasters_img_rollover a,
	{$rule}.widget_tag_cloud .tagcloud a,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_inner,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_inner,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before,
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before,
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}.widget_nav_menu > div > ul li > a,
	{$rule}.widget_custom_facebook_entries .fb_iframe_widget,
	{$rule}fieldset,
	{$rule}fieldset legend,
	{$rule}.cmsmasters_featured_block,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.gallery-item .gallery-icon,
	{$rule}.gallery-item .gallery-caption,
	{$rule}.cmsmasters_img.with_caption, 
	{$rule}.cmsmasters_prev_arrow,
	{$rule}.cmsmasters_next_arrow, 
	{$rule}.about_author .about_author_inner, 
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_item_outer,
	{$rule}.widget_custom_twitter_entries .tweet_list {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_button .ripple-effect {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_icon:after,
	{$rule}.widget_custom_advertisement_entries .adv_image_wrap .adv_widget_image,
	{$rule}.widget_custom_flickr_entries .flickr_badge_image img {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .quote_info_wrap:after,
	{$rule}.cmsmasters_quotes_grid .quote_info_wrap:after {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .pricing_title {
		border-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . ", 0.3);
	}
	
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_cont .puzzle_post_img_wrap:hover > figure {
		-webkit-box-shadow:inset 0 -1px 0 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . ", 0.3);
		-moz-box-shadow:inset 0 -1px 0 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . ", 0.3);
		box-shadow:inset 0 -1px 0 0 rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_alternate']) . ", 0.3);
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmastersLike:before,
	{$rule}.cmsmasters_post_comments:before,
	{$rule}.widget_archive ul li a:before,
	{$rule}.widget_categories ul li a:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.content_wrap:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li:before,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item:hover:before,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap .cmsmasters_toggle_title:hover:before,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title > .cmsmasters_toggle_plus {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	@media only screen and (max-width: 950px) {
		{$rule}.sidebar:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
		}
	}
	
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item:before,
	{$rule}.blog.timeline:before,
	{$rule}.post.cmsmasters_timeline_type:before {
		background-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.8);
	}
	
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before,
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before,
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .quote_info_wrap:before,
	{$rule}.cmsmasters_quotes_grid .quote_info_wrap:before {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.widget_custom_twitter_entries .tweet_list li {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}hr,
	{$rule}input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}.cmsmasters_divider,
	{$rule}.cmsmasters_widget_divider,
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_info,
	{$rule}.cmsmasters_icon_wrap .cmsmasters_simple_icon, 
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.owl-pagination .owl-page,
	{$rule}.cmsmasters_notice:after,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .pricing_title,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap,
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .quote_info_wrap,
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div,
	{$rule}.cmsmasters_quotes_grid:before,
	{$rule}.cmsmasters_quotes_grid:after,
	{$rule}.cmsmasters_quotes_grid .quote_info_wrap,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_vert,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_list .cmsmasters_quote,
	{$rule}.cmsmasters_table tr,
	{$rule}.cmsmasters_table tr td,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap,
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_footer,
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_footer,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_footer,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info,
	{$rule}.cmsmasters_profile.vertical .profile .pl_img,
	{$rule}.cmsmasters_items_filter_wrap,
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap,
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_footer,
	{$rule}.blog.opened-article .post .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_meta_info,
	{$rule}.about_author .about_author_cont_title_wrap + .about_author_cont,
	{$rule}.post_comments .cmsmasters_comment_item,
	{$rule}.post_comments .cmsmasters_comment_item_content,
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details_item,
	{$rule}.portfolio.opened-article .project .project_sidebar .project_features_item,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details_item,
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_features_item,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before,
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before,
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}.widget_nav_menu > div > ul li > a,
	{$rule}.cmsmasters_prev_arrow,
	{$rule}.cmsmasters_next_arrow {
		border-color:rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.8);
	}
	
	{$rule}textarea {
		background:-moz-linear-gradient(rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.8) 1px, rgba(0, 0, 0, 0) 1px);
		background:-webkit-linear-gradient(rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.8) 1px, rgba(0, 0, 0, 0) 1px);
		background:-o-linear-gradient(rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.8) 1px, rgba(0, 0, 0, 0) 1px);
		background:-ms-linear-gradient(rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.8) 1px, rgba(0, 0, 0, 0) 1px);
		background:linear-gradient(rgba(" . color2rgb($cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.8) 1px, rgba(0, 0, 0, 0) 1px);
		background-size:100% 38px;
		background-position:0 -1px;
	}
	/* Finish Borders Color */
	
	
	/* Start Borders Color */
	{$rule}.color_2,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_container:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap:before,
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_inner_cont:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_inner_cont:after,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title > .cmsmasters_toggle_plus,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title:hover > .cmsmasters_toggle_plus {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_inner:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_secondary']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Theme Shadow Rules */
	{$rule}.cmsmasters_notice,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner,
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote .cmsmasters_quote_inner,
	{$rule}.cmsmasters_quotes_grid,
	{$rule}.cmsmasters_table,
	{$rule}.cmsmasters_tabs.tabs_mode_tab,
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap,
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_cont,
	{$rule}.cmsmasters_profile .profile,
	{$rule}.portfolio.grid.grid.large_gap .project .project_outer,
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont,
	{$rule}.blog.opened-article .post .cmsmasters_post_cont_wrap,
	{$rule}.share_posts a,
	{$rule}.about_author .about_author_inner,
	{$rule}.post_comments .commentlist,
	{$rule}.widget_tag_cloud .tagcloud a,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_outer,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_outer,
	{$rule}.widget_custom_twitter_entries .tweet_list,
	{$rule}.widget_custom_facebook_entries .fb_iframe_widget,
	{$rule}.cmsmasters_post_bullet {
		-webkit-box-shadow:0 2px 3px 0 rgba(0, 0, 0, 0.1);
		-moz-box-shadow:0 2px 3px 0 rgba(0, 0, 0, 0.1);
		box-shadow:0 2px 3px 0 rgba(0, 0, 0, 0.1);
	}
	
	{$rule}.cmsmasters_notice:hover,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_pricing_item_inner:hover,
	{$rule}.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_box .cmsmasters_quote:hover .cmsmasters_quote_inner,
	{$rule}.cmsmasters_quotes_grid:hover,
	{$rule}.cmsmasters_table:hover,
	{$rule}.cmsmasters_tabs.tabs_mode_tab:hover,
	{$rule}.post.cmsmasters_post_default .cmsmasters_post_cont_wrap:hover,
	{$rule}.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap:hover,
	{$rule}.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap:hover,
	{$rule}.post.cmsmasters_puzzle_type .cmsmasters_post_cont:hover,
	{$rule}.cmsmasters_profile .profile:hover,
	{$rule}.portfolio.grid.large_gap .project .project_outer:hover,
	{$rule}.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont:hover,
	{$rule}.blog.opened-article .post .cmsmasters_post_cont_wrap:hover,
	{$rule}.share_posts a:hover,
	{$rule}.about_author .about_author_inner:hover,
	{$rule}.post_comments .commentlist:hover {
		-webkit-box-shadow:0 2px 4px 2px rgba(0, 0, 0, 0.07);
		-moz-box-shadow:0 2px 4px 2px rgba(0, 0, 0, 0.07);
		box-shadow:0 2px 4px 2px rgba(0, 0, 0, 0.07);
	}
	
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_outer,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_outer {
		-webkit-box-shadow:0 1px 1px 0 rgba(0, 0, 0, 0.1);
		-moz-box-shadow:0 1px 1px 0 rgba(0, 0, 0, 0.1);
		box-shadow:0 1px 1px 0 rgba(0, 0, 0, 0.1);
	}
	/* Finish Theme Shadow Color */
	
	
	/* Start Custom Rules */
	{$rule}::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	";
	
	
	if ($scheme != 'default') {
		$custom_css .= "
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_top_zigzag:before, 
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_bot_zigzag:after {
			background-image: -webkit-linear-gradient(135deg, " . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-webkit-linear-gradient(45deg, " . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -moz-linear-gradient(135deg, " . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-moz-linear-gradient(45deg, " . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -ms-linear-gradient(135deg, " . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-ms-linear-gradient(45deg, " . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -o-linear-gradient(135deg, " . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-o-linear-gradient(45deg, " . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: linear-gradient(315deg, " . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					linear-gradient(45deg, " . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
		}
		";
	}
	
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start Bottom Color Scheme Rules ******************/
	/* Start Color Background Color */
	{$rule}#bottom .widget.tribe_mini_calendar_widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info *,
	{$rule}#bottom .widget ol.vcalendar li .cmsmasters_widget_event_info *,
	{$rule}#bottom .widget ul.vcalendar li .cmsmasters_widget_event_info *,
	{$rule}#bottom .widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_comments li small,
	{$rule}#bottom .widget_product_categories ul li *,
	{$rule}#bottom .widget .cmsmasters-form-builder label {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_color']) . "
	}
	/* Finish Color Background Color */
	
	/* Start Heading Background Color */
	{$rule}#bottom .widget .widgettitle {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_heading']) . "
	}
	/* Finish Heading Background Color */
	
	/* Start Link Background Color */
	{$rule}#bottom .widget ul li > a,
	{$rule}#bottom .widget .button,
	{$rule}#bottom .widget .cmsmastersLike,
	{$rule}#bottom .widget .cmsmastersLike:hover,
	{$rule}#bottom .widget .cmsmastersLike:before,
	{$rule}#bottom .widget .cmsmasters_post_comments,
	{$rule}#bottom .widget .cmsmasters_post_comments:hover,
	{$rule}#bottom .widget .cmsmasters_post_comments:before,
	{$rule}#bottom .widget.tribe_mini_calendar_widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info a,
	{$rule}#bottom .widget ol.vcalendar li .cmsmasters_widget_event_info a,
	{$rule}#bottom .widget ul.vcalendar li .cmsmasters_widget_event_info a,
	{$rule}#bottom .widget_custom_popular_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_cont_info a,
	{$rule}#bottom .widget_custom_latest_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_cont_info a,
	{$rule}#bottom .widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_latest .cmsmasters_lpr_tabs_cont .published,
	{$rule}#bottom .widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_popular .cmsmasters_lpr_tabs_cont .published,
	{$rule}#bottom .widget.tribe-this-week-events-widget .tribe-this-week-event .duration .cmsmasters_event_time,
	{$rule}#bottom .widget.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue * {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_link']) . "
	}
	/* Finish Link Background Color */
	
	/* Start Hover Background Color */
	{$rule}#bottom .widget ul li > a:hover,
	{$rule}#bottom .widget_archive ul li a:hover:before,
	{$rule}#bottom .widget_categories ul li a:hover:before,
	{$rule}#bottom .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item a,
	{$rule}#bottom .widget .button:hover,
	{$rule}#bottom .widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div,
	{$rule}#bottom .widget.tribe_mini_calendar_widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info a:hover,
	{$rule}#bottom .widget .cmsmasters_event_date .cmsmasters_event_month,
	{$rule}#bottom .widget ol.vcalendar li .cmsmasters_widget_event_info a:hover,
	{$rule}#bottom .widget ul.vcalendar li .cmsmasters_widget_event_info a:hover,
	{$rule}#bottom .widget_custom_popular_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_cont_info a:hover,
	{$rule}#bottom .widget_custom_latest_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_cont_info a:hover,
	{$rule}#bottom .widget ul.product_list_widget li > a,
	{$rule}#bottom .widget_product_categories ul li a:hover:before,
	{$rule}#bottom .widget.tribe-this-week-events-widget .tribe-this-week-widget-header-date .day,
	{$rule}#bottom .widget.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_hover']) . "
	}
	
	{$rule}#bottom .widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link span,
	{$rule}#bottom .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .magic-line {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_hover']) . "
	}
	
	{$rule}#bottom .widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:before,
	{$rule}#bottom .widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link span:before,
	{$rule}#bottom .widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link span:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_hover']) . "
	}
	/* Finish Hover Background Color */
	
	/* Start BG Background Color */
	{$rule}#bottom .widget_custom_advertisement_entries .adv_image_wrap .adv_widget_image {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_bg']) . "
	}
	/* Finish BG Background Color */
	
	/* Start Alternative Background Color */
	{$rule}#bottom .widget .button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_alternate']) . "
	}
	/* Finish Alternative Background Color */
	
	/* Start Border Background Color */
	{$rule}#bottom .widget_archive ul li a:before,
	{$rule}#bottom .widget_categories ul li a:before,
	{$rule}#bottom .widget_product_categories ul li a:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_border']) . "
	}
	/* Finish Border Background Color */
	
	/* Start Secondary Background Color */
	{$rule}#bottom .widget .cmsmastersLike:hover:before,
	{$rule}#bottom .widget .cmsmastersLike.active:before,
	{$rule}#bottom .widget .cmsmasters_post_comments:hover:before,
	{$rule}#bottom .cmsmasters_theme_icon_custom_star_full,
	{$rule}#bottom .widget ul.product_list_widget li > a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_secondary']) . "
	}
	
	{$rule}#bottom .widget .widgettitle:before,
	{$rule}#bottom .widget .button:hover,
	{$rule}#bottom .widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div,
	{$rule}#bottom .widget .cmsmasters_event_date .cmsmasters_event_month,
	{$rule}#bottom .widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:hover span,
	{$rule}#bottom .cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list,
	{$rule}#bottom .widget.tribe-this-week-events-widget .tribe-this-week-widget-header-date .day {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_secondary']) . "
	}
	
	{$rule}#bottom .widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:hover:before,
	{$rule}#bottom .widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:hover span:before,
	{$rule}#bottom .widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:hover span:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_bottom_secondary']) . "
	}
	/* Finish Secondary Background Color */
/***************** Finish Bottom Color Scheme Rules ******************/


/***************** Start Footer Color Scheme Rules ******************/
	{$rule}#footer .footer_inner .cmsmasters_social_icon {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_link']) . "
	}
	
	{$rule}#footer .footer_inner .cmsmasters_social_icon:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_hover']) . "
	}
	
	{$rule}#footer .footer_inner {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_footer_border']) . "
	}
/***************** Finish Footer Color Scheme Rules ******************/




/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, 
	{$rule}.cmsmasters_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:before, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:after, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom:hover, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_paypal_donations > form:hover + .cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option[CMSMASTERS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}
	
	
	return $custom_css;
}

