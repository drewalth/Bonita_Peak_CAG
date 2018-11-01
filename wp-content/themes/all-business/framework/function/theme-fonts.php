<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.1.1
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function all_business_theme_fonts() {
	$cmsmasters_option = all_business_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version 	1.1.1
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_style'] . ";
	}
	
	.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_meta_info > a:before,
	.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_meta_info > a:before,
	.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_meta_info > a:before,
	.post.cmsmasters_puzzle_type .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_meta_info > a:before,
	.portfolio.grid .project .project_inner .cmsmasters_project_footer .cmsmasters_project_meta_info a:before,
	.portfolio.puzzle .project .project_inner .cmsmasters_project_info_wrap .cmsmasters_project_footer a:before,
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_footer .cmsmasters_slider_post_meta_info a:before,
	.cmsmasters_posts_slider .project .slider_project_outer .slider_project_inner .cmsmasters_slider_project_cont_info_wrap .cmsmasters_slider_project_footer a:before,
	.blog.opened-article .post .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_meta_info a:before {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] . "px;
	}
	
	.cmsmasters_twitter .cmsmasters_twitter_item_content,
	.cmsmasters_twitter .cmsmasters_twitter_item_content a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] + 1) . "px;
	}
	
	.header_top .meta_wrap > *:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_quotes_slider .wrap_quote_title,
	.cmsmasters_quotes_slider .wrap_quote_title a
	.cmsmasters_quotes_grid .wrap_quote_title,
	.cmsmasters_quotes_grid .wrap_quote_title a,
	.cmsmasters_twitter .published,
	.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info .cmsmasters_post_date,
	.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_date,
	.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_date,
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_post_date,
	.blog.opened-article .post .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_cont_info .cmsmasters_post_date,
	.post_comments .cmsmasters_comment_item_date,
	.footer_copyright,
	.widget_calendar #wp-calendar thead,
	.widget_custom_twitter_entries .tweet_list .tweet_time {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	.header_top,
	.header_top a,
	.post.cmsmasters_post_default .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_meta_info > a,
	.post.cmsmasters_masonry_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_meta_info > a,
	.post.cmsmasters_timeline_type .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_meta_info > a,
	.post.cmsmasters_puzzle_type .cmsmasters_post_cont .cmsmasters_post_footer .cmsmasters_post_meta_info > a,
	.portfolio.grid .project .project_inner .cmsmasters_project_footer .cmsmasters_project_meta_info a,
	.portfolio.puzzle .project .project_inner .cmsmasters_project_info_wrap .cmsmasters_project_footer a,
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_footer .cmsmasters_slider_post_meta_info a,
	.cmsmasters_posts_slider .project .slider_project_outer .slider_project_inner .cmsmasters_slider_project_cont_info_wrap .cmsmasters_slider_project_footer a,
	.blog.opened-article .post .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_meta_info a,
	.cmsmasters_archive_type .cmsmasters_archive_item_type,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_latest .cmsmasters_lpr_tabs_cont .published,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_popular .cmsmasters_lpr_tabs_cont .published,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_comments li small,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_archive_type .cmsmasters_archive_item_type,
	.widget_calendar #wp-calendar thead,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a {
		text-transform:uppercase;
	}
	
	.cmsmasters_archive_type .cmsmasters_archive_item_type,
	.cmsmasters_twitter .cmsmasters_twitter_item_content a,
	.footer_copyright,
	.widget_tag_cloud .tagcloud a,
	.widget_recent_comments a,
	.widget_recent_entries a,
	.widget_rss .rsswidget,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .cmsmasters_tab.tab_comments li a {
		font-weight:500;
	}
	/* Finish Content Font */


	/* Start Link Font */
	a {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_font_text_decoration'] . ";
	}
	
	a:hover {
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	.navigation > li > a, 
	.top_line_nav > li > a {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_text_transform'] . ";
	}
	
	.footer_nav > li > a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] - 1) . "px;
	}
	
	.top_line_nav > li > a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] - 2) . "px;
	}
	
	.navigation > li > a .nav_subtitle {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] - 4) . "px;
		font-weight:600;
		text-transform:uppercase;
	}
	
	.navigation > li > a .nav_tag {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] - 5) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_title_font_font_size'] - 2) . "px;
		font-weight:700;
		text-transform:uppercase;
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	.navigation ul li a,
	.top_line_nav ul li a {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_text_transform'] . ";
	}
	
	.top_line_nav ul li a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] - 2) . "px;
	}
	
	.navigation .menu-item-mega-container > ul > li > a .nav_title {
		font-weight:500;
		vertical-align:bottom;
	}
	
	.navigation ul li a .nav_tag {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_nav_dropdown_font_font_size'] - 2) . "px;
		font-weight:700;
		text-transform:uppercase;
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	.logo .title,
	.cmsmasters_pricing_table .cmsmasters_pricing_item .pricing_title,
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_price,
	.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .quote_content,
	.post.cmsmasters_post_default.format-standard .cmsmasters_post_cont > .cmsmasters_post_header h2 a,
	.cmsmasters_profile.vertical .profile .pl_content .entry-title,
	.cmsmasters_profile.vertical .profile .pl_content .entry-title a,
	.blog.opened-article .post .cmsmasters_post_cont_wrap .cmsmasters_post_cont .cmsmasters_post_header .cmsmasters_post_title,
	.blog.opened-article .post .cmsmasters_post_cont_wrap .cmsmasters_post_img_wrap .cmsmasters_post_header .cmsmasters_post_title,
	.profiles.opened-article .profile .cmsmasters_profile_header .cmsmasters_profile_title {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_pricing_table .cmsmasters_pricing_item .pricing_title {
		font-weight:400; /* static */
	}
	
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_currency,
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_price,
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_coins,
	.cmsmasters_quotes_slider.cmsmasters_quotes_slider_type_center .quote_content {
		font-weight:300; /* static */
	}
	
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_price {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] + 48) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 22) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_currency,
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_coins {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] - 8) . "px;
	}
	
	.cmsmasters_dropcap {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:36px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:20px; /* static */
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 14) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 20) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 10) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 30) . "px;
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.post_nav .post_nav_inner > span a,
	.widget_custom_popular_projects_entries .entry-title,
	.widget_custom_popular_projects_entries .entry-title a,
	.widget_custom_latest_projects_entries .entry-title,
	.widget_custom_latest_projects_entries .entry-title a,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a, 
	.comment-respond .comment-reply-title {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_decoration'] . ";
	}
	
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] . "px;
	}
	
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before {
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] . "px;
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap .cmsmasters_stat_counter {
		font-size:42px; /* static */
		line-height:60px; /* static */
		font-weight:300; /* static */
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap .cmsmasters_stat_units {
		font-size:18px; /* static */
		line-height:42px; /* static */
		font-weight:500; /* static */
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .stat_has_titleicon .cmsmasters_stat_counter_wrap .cmsmasters_stat_counter {
		font-size:34px; /* static */
		line-height:52px; /* static */
		font-weight:300; /* static */
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .stat_has_titleicon .cmsmasters_stat_counter_wrap .cmsmasters_stat_units {
		font-size:16px; /* static */
		line-height:40px; /* static */
		font-weight:500; /* static */
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] + 40) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] + 42) . "px;
		font-weight:300; /* static */
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_image .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] + 24) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] + 30) . "px;
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] + 10) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] + 16) . "px;
	}
	
	.cmsmasters_counters.counters_type_horizontal .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner {
		padding-" . ((is_rtl()) ? 'right' : 'left') . ":" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] + 14) . "px;
	}
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a,
	.cmsmasters_stats.stats_mode_circles  .cmsmasters_stat_wrap .cmsmasters_stat_title,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title a,
	.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_title,
	.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_title a,
	.profiles.opened-article .profile .profile_sidebar .profile_social_icons .profile_social_icons_title,
	.profiles.opened-article .profile .profile_sidebar .profile_social_icons .profile_social_icons_title a,
	.widgettitle {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	
	.bypostauthor > .comment-body .alignleft:before {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
	}
	
	.bypostauthor > .comment-body .alignleft:before {
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.bypostauthor > .comment-body .alignleft:before {
		width:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.bypostauthor > .comment-body .alignleft:before {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a, 
	.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title,
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap,
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_price_price_period .cmsmasters_period,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .tab_latest .cmsmasters_lpr_tabs_cont > a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs.lpr .cmsmasters_tabs_wrap .tab_popular .cmsmasters_lpr_tabs_cont > a,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap,
	.cmsmasters_pricing_table .cmsmasters_pricing_item .cmsmasters_price_wrap .cmsmasters_price_price_period .cmsmasters_period {
		font-weight:normal; /* static */
	}
	
	.portfolio.opened-article .project .project_sidebar .project_details .project_details_item > div.project_details_item_title,
	.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item > div.profile_details_item_title {
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_weight'] . ";
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a,
	.cmsmasters_table tr th,
	.cmsmasters_table tr td,
	.share_posts a,
	.comment-respond .comment-reply-title a,
	.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a,
	.cmsmasters_toggles .cmsmasters_toggle_title > a {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a,
	.cmsmasters_toggles .cmsmasters_toggle_title > a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_table tr th,
	.cmsmasters_table tfoot tr td,
	.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item > a,
	.cmsmasters_toggles .cmsmasters_toggle_title > a {
		font-weight:500; /* static */
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a,
	.headline_outer, 
	.headline_outer a {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button, 
	.button, 
	input[type=submit], 
	input[type=button], 
	button,
	.share_posts .share_posts_inner a,
	.post_comments .cmsmasters_comment_item_cont_info > a {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	
	.post.cmsmasters_post_default .cmsmasters_post_footer .cmsmasters_post_read_more,
	.post.cmsmasters_masonry_type .cmsmasters_post_footer .cmsmasters_post_read_more,
	.post.cmsmasters_timeline_type .cmsmasters_post_footer .cmsmasters_post_read_more,
	.post.cmsmasters_puzzle_type .puzzle_post_content_wrapper .cmsmasters_post_read_more,
	.portfolio.grid .project .project_inner .cmsmasters_project_footer .cmsmasters_project_read_more,
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li,
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a,
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_block a,
	.cmsmasters_posts_slider .post .cmsmasters_slider_post_cont .cmsmasters_slider_post_cont_wrap .cmsmasters_slider_post_footer .cmsmasters_post_read_more,
	.post_nav .post_nav_inner > span span.sub {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] - 16) . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	
	.share_posts .share_posts_inner a,
	.post_comments .cmsmasters_comment_item_cont_info > a {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] - 2) . "px;
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] . "px !important;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small,
	form .formError .formErrorContent {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_text_transform'] . ";
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_line_height'] . "px !important;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	textarea,
	select,
	option,
	code {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_style'] . ";
	}
	
	.gform_wrapper input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_style'] . ";
	}
	
	q {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";


if (CMSMASTERS_DONATIONS) {

	$custom_css .= "
/***************** Start CMSMASTERS Donations Font Styles ******************/

	/* Start Content Font */
	.campaign .cmsmasters_campaign_meta_info {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start Navigation Title Font */
	/* Finish Navigation Title Font */
	
	
	/* Start H1 Font */
	.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_title, 
	.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_title a {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.donations.opened-article > .donation .cmsmasters_donation_title, 
	.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.donations.opened-article > .donation .cmsmasters_donation_title {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 4) . "px;
	}
	
	.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] * 2 + 4) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] * 2 + 4) . "px;
	}
	
	@media only screen and (max-width: 540px) {
		.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
			font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] + 4) . "px;
			line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] + 4) . "px;
		}
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.donations.opened-article > .donation .cmsmasters_donation_campaign, 
	.donations.opened-article > .donation .cmsmasters_donation_campaign a, 
	.cmsmasters_donations .donation .cmsmasters_donation_amount_currency {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_rest_amount {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.donation_confirm .donation_confirm_info_title, 
	.cmsmasters_donations .donation .cmsmasters_donation_campaign, 
	.cmsmasters_donations .donation .cmsmasters_donation_campaign a, 
	.cmsmasters_donations .donation .cmsmasters_donation_amount_title, 
	.cmsmasters_campaigns .campaign .cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat_title_wrap {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.related_posts_tabs_campaign .cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.related_posts_tabs_campaign .cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	.related_posts_tabs_campaign .cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_subtitle, 
	.related_posts_tabs_campaign .rel_post_content .related_posts_campaign_wrap .related_posts_campaign_togo {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_small_font_font_size'] + 1) . "px;
	}
	/* Finish Small Text Font */

/***************** Finish CMSMASTERS Donations Font Styles ******************/


";

}


if (CMSMASTERS_WOOCOMMERCE) {

	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/

	/* Start Content Font */
	ul.order_details li > strong {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_style'] . ";
	}
	
	#page .shop_table td.product-quantity input {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment_container .comment-text .meta,
	.widget ul.product_list_widget li del {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_dynamic_cart:hover .widget_shopping_cart_content, 
	.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button:hover + .widget_shopping_cart_content, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content:hover {
		top:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] + 15) . "px;
	}
	
	.cmsmasters_dynamic_cart .widget_shopping_cart_content {
		top:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] + 40) . "px;
	}
	
	.cmsmasters_dynamic_cart .cmsmasters_dynamic_cart_button {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
	}
	
	.widget ul.product_list_widget li > a,
	.widget_shopping_cart .widget_shopping_cart_content .total > * {
		font-weight:500; /* static */
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	.cmsmasters_single_product .price ins,
	.cmsmasters_single_product .price > .amount {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.cmsmasters_single_product #comments > .cmsmasters_star_rating,
	.cmsmasters_single_product #comments > .cmsmasters_star_rating .cmsmasters_star_color_inner,
	.cmsmasters_single_product #comments > .cmsmasters_star_rating .cmsmasters_star {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] . "px;
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_info .price ins,
	.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_info .price > .amount,
	.cmsmasters_single_product .cmsmasters_woo_tabs #reviews #comments .commentlist .comment_container .comment-text h5,
	.shop_table thead tr th,
	ul.order_details li,
	.product-category .woocommerce-loop-category__title {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	
	ul.order_details li {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_star_rating .cmsmasters_star,
	.cmsmasters_single_product .price del {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
	}
	
	.cmsmasters_star_rating .cmsmasters_star {
		width:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
	}
	
	.cmsmasters_star_rating,
	.cmsmasters_star_rating .cmsmasters_star_color_inner,
	.cmsmasters_star_rating .cmsmasters_star {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
	}
	
	.cmsmasters_star_rating,
	.cmsmasters_star_rating .cmsmasters_star_color_inner {
		width:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] * 5) . "px;
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total > *,
	.shop_table td.product-subtotal,
	.shop_table td.product-name a,
	.cart-collaterals .cart_totals .amount,
	.woocommerce-MyAccount-content legend {
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_weight'] . ";
	}
	
	.cmsmasters_single_product #comments .commentlist .cmsmasters_star_rating .cmsmasters_star {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
	}
	
	.cmsmasters_single_product #comments .commentlist .cmsmasters_star_rating .cmsmasters_star {
		width:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] . "px;
	}
	
	.cmsmasters_single_product #comments .commentlist .cmsmasters_star_rating,
	.cmsmasters_single_product #comments .commentlist .cmsmasters_star_rating .cmsmasters_star_color_inner {
		width:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] * 5) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li a.remove {
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.onsale, 
	.out-of-stock,
	.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_info .price del,
	.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_footer > a,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button,
	.woocommerce-MyAccount-navigation > ul > li > a {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	
	.shop_table td.actions .button {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] - 1) . "px;
	}
	
	.onsale, 
	.out-of-stock,
	.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_footer > a,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button,
	.widget_shopping_cart .widget_shopping_cart_content .buttons .button,
	.widget_price_filter .price_slider_wrapper .price_slider_amount .button {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] - 14) . "px;
	}
	
	.cmsmasters_products .product .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_info .price del {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] - 20) . "px;
	}
	
	.cmsmasters_products .cmsmasters_product .cmsmasters_product_inner .cmsmasters_product_footer {
		margin-bottom:-" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] - 4) . "px;
	}
	
	.cmsmasters_single_product .cmsmasters_product_right_column .cart .quantity .qty {
		height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */
	
	
	/* Start Text Fields Font */
	.select2-dropdown {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish WooCommerce Font Styles ******************/


";

}


if (CMSMASTERS_EVENTS_CALENDAR) {

	$custom_css .= "
/***************** Start Events Font Styles ******************/

	/* Start Content Font */
	#tribe-events-bar #tribe-bar-views *,
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=tribe-events-event-] .tribe-events-month-event-title,
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=tribe-events-event-] .tribe-events-month-event-title a {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_row .tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] . "px;
	}
	
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-],
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a,
	.tribe-events-tooltip,
	#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-list-event-description .tribe-events-read-more {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] - 2) . "px;
	}
	
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td div,
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar tbody td div *,
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek,
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_content_font_line_height'] - 4) . "px;
	}
	
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner > div label,
	#tribe-events-bar #tribe-bar-views *,
	#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th,
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=tribe-events-event-] .tribe-events-month-event-title,
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=tribe-events-event-] .tribe-events-month-event-title a,
	#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-list-event-description,
	#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-list-event-description .tribe-events-read-more,
	#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-event-meta *,
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title,
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title a,
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column,
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column a,
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule,
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info,
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info a,
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info > div *,
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div > span,
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under,
	.widget ol.vcalendar li .cmsmasters_widget_event_info *,
	.widget ul.vcalendar li .cmsmasters_widget_event_info *,
	.widget .tribe-events-widget-link a,
	.widget.tribe-this-week-events-widget .tribe-events-page-title {
		font-weight:500;
	}
	
	#tribe-events-bar #tribe-bar-views *,
	#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th,
	#tribe-events-content.tribe-events-list .vevent .cmsmasters_events_list_event_wrap .tribe-events-list-event-description .tribe-events-read-more,
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column,
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column a,
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div > span,
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under,
	.widget .tribe-events-widget-link a {
		text-transform:uppercase;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-single-event-title,
	.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_left .entry-title {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	#tribe-events-content.tribe-events-photo .tribe-events-photo-event .tribe-events-event-details .tribe-events-list-event-title,
	#tribe-events-content.tribe-events-photo .tribe-events-photo-event .tribe-events-event-details .tribe-events-list-event-title a,
	.cmsmasters_row .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .entry-title,
	.cmsmasters_row .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .entry-title a {
		font-family:" . all_business_get_google_font($cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_google_font']) . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.widget.tribe-events-countdown-widget .tribe-countdown-text,
	.widget.tribe-events-countdown-widget .tribe-countdown-text a,
	.widget.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name,
	.widget.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h3_font_font_weight'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.tribe-events-tooltip .entry-title,
	.tribe-events-tooltip .tribe-event-title {
		font-size:" . ((int) $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_font_size'] - 1) . "px;
		line-height:" . ((int)$cmsmasters_option[CMSMASTERS_SHORTNAME . '_h4_font_line_height'] - 2) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.widget.tribe-this-week-events-widget .tribe-events-page-title {
		font-size:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option[CMSMASTERS_SHORTNAME . '_h5_font_line_height'] . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish Events Font Styles ******************/


";

}
	
	return $custom_css;
}

