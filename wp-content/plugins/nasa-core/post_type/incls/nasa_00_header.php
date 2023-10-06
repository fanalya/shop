<?php
/**
 * Post type header
 */
add_action('init', 'nasa_register_header');
function nasa_register_header() {
    $labels = array(
        'name' => __('Header', 'nasa-core'),
        'singular_name' => __('Header', 'nasa-core'),
        'add_new' => __('Add New Header', 'nasa-core'),
        'add_new_item' => __('Add New Header', 'nasa-core'),
        'edit_item' => __('Edit Header', 'nasa-core'),
        'new_item' => __('New Header', 'nasa-core'),
        'view_item' => __('View Header', 'nasa-core'),
        'search_items' => __('Search Header', 'nasa-core'),
        'not_found' => __('No Headers found', 'nasa-core'),
        'not_found_in_trash' => __('No Header found in Trash', 'nasa-core'),
        'parent_item_colon' => __('Parent Header:', 'nasa-core'),
        'menu_name' => __('Header Builder', 'nasa-core'),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => __('List Headers', 'nasa-core'),
        'supports' => array('title', 'editor'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 4,
        'show_in_nav_menus' => false,
        'publicly_queryable' => false,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => false,
        'menu_icon' => 'dashicons-editor-table'
    );
    register_post_type('header', $args);

    if ($options = get_option('wpb_js_content_types')) {
        $check = true;
        foreach ($options as $value) {
            if ($value == 'header') {
                $check = false;
                break;
            }
        }
        if ($check) {
            $options[] = 'header';
        }
    } else {
        $options = array('page', 'header');
    }
    
    update_option('wpb_js_content_types', $options);
}
