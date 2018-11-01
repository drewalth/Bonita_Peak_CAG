<?php 
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.0
 * 
 * Colored Categories
 * Created by CMSMasters
 * 
 */


/* Add Category Color */
function all_business_add_category_color() {
	wp_register_script('cmsmasters_theme_settings_js', get_template_directory_uri() . '/framework/admin/settings/js/cmsmasters-theme-settings.js', array('jquery', 'farbtastic'), '1.0.0', true);
	
	wp_localize_script('cmsmasters_theme_settings_js', 'cmsmasters_setting', array( 
		'palettes' => implode(',', cmsmasters_color_picker_palettes()) 
	));
	
	
	wp_enqueue_script('cmsmasters_theme_settings_js');
	
	?>
	<div class="form-field">
		<label for="term_meta[cmsmasters_cat_color]"><?php esc_html_e('Category Color', 'all-business'); ?></label>
		<input type="text" id="term_meta[cmsmasters_cat_color]" name="term_meta[cmsmasters_cat_color]" value="" class="cmsmasters-color-field" data-alpha="true" data-reset-alpha="true" />
	</div>
	<?php
}



/* Edit Category Color */
function all_business_edit_category_color($term) {
	wp_register_script('cmsmasters_theme_settings_js', get_template_directory_uri() . '/framework/admin/settings/js/cmsmasters-theme-settings.js', array('jquery', 'farbtastic'), '1.0.0', true);
	
	wp_localize_script('cmsmasters_theme_settings_js', 'cmsmasters_setting', array( 
		'palettes' => 			implode(',', cmsmasters_color_picker_palettes()) 
	));
	
	
	wp_enqueue_script('cmsmasters_theme_settings_js');
	
	
	$t_id = $term->term_id;
	
	$term_meta = get_option( "taxonomy_$t_id" );
	
	?>
	<tr class="form-field">
		<th scope="row" valign="top">
			<label for="term_meta[cmsmasters_cat_color]"><?php esc_html_e('Category Color', 'all-business'); ?></label>
		</th>
		<td>
			<input type="text" id="term_meta[cmsmasters_cat_color]" name="term_meta[cmsmasters_cat_color]" value="<?php echo (esc_attr($term_meta['cmsmasters_cat_color']) ? esc_attr( $term_meta['cmsmasters_cat_color']) : ''); ?>" class="cmsmasters-color-field" data-alpha="true" data-reset-alpha="true" />
		</td>
	</tr>
	<?php 
}



/* Save Category Color */
function all_business_save_category_color($term_id) {
	if (isset($_POST['term_meta'])) {
		$t_id = $term_id;
		
		$term_meta = get_option("taxonomy_$t_id");
		
		$cat_keys = array_keys($_POST['term_meta']);
		
		
		foreach ($cat_keys as $key) {
			if (isset($_POST['term_meta'][$key])) {
				$term_meta[$key] = $_POST['term_meta'][$key];
			}
		}
		
		
		update_option("taxonomy_$t_id", $term_meta);
	}
}



/* Category Color Actions */
add_action('category' . '_add_form_fields', 'all_business_add_category_color', 10, 2);
add_action('pj-categs' . '_add_form_fields', 'all_business_add_category_color', 10, 2);
add_action('pl-categs' . '_add_form_fields', 'all_business_add_category_color', 10, 2);

if (CMSMASTERS_WOOCOMMERCE) {
	add_action('product_cat' . '_add_form_fields', 'all_business_add_category_color', 10, 2);
}

if (CMSMASTERS_EVENTS_CALENDAR) {
	add_action('tribe_events_cat' . '_add_form_fields', 'all_business_add_category_color', 10, 2);
}

if (CMSMASTERS_DONATIONS) {
	add_action('cp-categs' . '_add_form_fields', 'all_business_add_category_color', 10, 2);
}

if (CMSMASTERS_TIMETABLE) {
	add_action('events_category' . '_add_form_fields', 'all_business_add_category_color', 10, 2);
}


add_action('category' . '_edit_form_fields', 'all_business_edit_category_color', 10, 2);
add_action('pj-categs' . '_edit_form_fields', 'all_business_edit_category_color', 10, 2);
add_action('pl-categs' . '_edit_form_fields', 'all_business_edit_category_color', 10, 2);

if (CMSMASTERS_WOOCOMMERCE) {
	add_action('product_cat' . '_edit_form_fields', 'all_business_edit_category_color', 10, 2);
}

if (CMSMASTERS_EVENTS_CALENDAR) {
	add_action('tribe_events_cat' . '_edit_form_fields', 'all_business_edit_category_color', 10, 2);
}

if (CMSMASTERS_DONATIONS) {
	add_action('cp-categs' . '_edit_form_fields', 'all_business_edit_category_color', 10, 2);
}

if (CMSMASTERS_TIMETABLE) {
	add_action('events_category' . '_edit_form_fields', 'all_business_edit_category_color', 10, 2);
}


add_action('edited_' . 'category', 'all_business_save_category_color', 10, 2);  
add_action('create_' . 'category', 'all_business_save_category_color', 10, 2);
add_action('edited_' . 'pj-categs', 'all_business_save_category_color', 10, 2);  
add_action('create_' . 'pj-categs', 'all_business_save_category_color', 10, 2);
add_action('edited_' . 'pl-categs', 'all_business_save_category_color', 10, 2);  
add_action('create_' . 'pl-categs', 'all_business_save_category_color', 10, 2);

if (CMSMASTERS_WOOCOMMERCE) {
	add_action('edited_' . 'product_cat', 'all_business_save_category_color', 10, 2);
	add_action('create_' . 'product_cat', 'all_business_save_category_color', 10, 2);
}

if (CMSMASTERS_EVENTS_CALENDAR) {
	add_action('edited_' . 'tribe_events_cat', 'all_business_save_category_color', 10, 2);
	add_action('create_' . 'tribe_events_cat', 'all_business_save_category_color', 10, 2);
}

if (CMSMASTERS_DONATIONS) {
	add_action('edited_' . 'cp-categs', 'all_business_save_category_color', 10, 2);
	add_action('create_' . 'cp-categs', 'all_business_save_category_color', 10, 2);
}

if (CMSMASTERS_TIMETABLE) {
	add_action('edited_' . 'events_category', 'all_business_save_category_color', 10, 2);
	add_action('create_' . 'events_category', 'all_business_save_category_color', 10, 2);
}



/* Theme Category Styles */
function all_business_theme_category_styles() {
	$out = '';
	
	$taxonomies_arr = array('category', 'pj-categs', 'pl-categs');
	
	
	if (CMSMASTERS_WOOCOMMERCE) {
		$taxonomies_arr[] = 'product_cat';
	}
	
	if (CMSMASTERS_EVENTS_CALENDAR) {
		$taxonomies_arr[] = 'tribe_events_cat';
	}
	
	if (CMSMASTERS_DONATIONS) {
		$taxonomies_arr[] = 'cp-categs';
	}
	
	if (CMSMASTERS_TIMETABLE) {
		$taxonomies_arr[] = 'events_category';
	}
	
	
	$cats = get_terms($taxonomies_arr, 'hide_empty=0');
	
	
	if (!empty($cats) && !is_wp_error($cats)) {
		foreach ($cats as $cat) {
			$cat_color = get_option('taxonomy_' . (string) $cat->term_id);
			
			
			if ( 
				isset($cat_color) && 
				is_array($cat_color) && 
				isset($cat_color['cmsmasters_cat_color']) && 
				$cat_color['cmsmasters_cat_color'] != '' 
			) {
				$out .= "
	
	a#cmsmasters_cat_" . (string) $cat->term_id . ":hover {
		" . cmsmasters_color_css('color', $cat_color['cmsmasters_cat_color']) . "
	}	
";
			}
		}
	}
	
	
	return $out;
}

