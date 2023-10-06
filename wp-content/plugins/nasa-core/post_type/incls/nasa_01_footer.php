<?php
/**
 * Post type footer
 */
add_action('init', 'nasa_register_footer');
function nasa_register_footer() {
    $labels = array(
        'name' => __('Footer', 'nasa-core'),
        'singular_name' => __('Footer', 'nasa-core'),
        'add_new' => __('Add New Footer', 'nasa-core'),
        'add_new_item' => __('Add New Footer', 'nasa-core'),
        'edit_item' => __('Edit Footer', 'nasa-core'),
        'new_item' => __('New Footer', 'nasa-core'),
        'view_item' => __('View Footer', 'nasa-core'),
        'search_items' => __('Search Footers', 'nasa-core'),
        'not_found' => __('No Footers found', 'nasa-core'),
        'not_found_in_trash' => __('No Footers found in Trash', 'nasa-core'),
        'parent_item_colon' => __('Parent Footer:', 'nasa-core'),
        'menu_name' => __('Footer Builder', 'nasa-core'),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => __('List Footer', 'nasa-core'),
        'supports' => array('title', 'editor'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_nav_menus' => false,
        'publicly_queryable' => false,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => false,
        'menu_icon' => 'dashicons-editor-underline'
    );
    
    register_post_type('footer', $args);
    
    $options = get_option('wpb_js_content_types');
    
    if ($options) {
        $check = true;
        
        foreach ($options as $value) {
            if ($value == 'footer') {
                $check = false;
                break;
            }
        }
        
        if ($check) {
            $options[] = 'footer';
        }
    } else {
        $options = array('page', 'footer');
    }
    
    update_option('wpb_js_content_types', $options);
}
