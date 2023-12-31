<?php
add_action('init', 'elessi_product_global_heading');
if (!function_exists('elessi_product_global_heading')) {
    function elessi_product_global_heading() {
        // Set the Options Array
        global $of_options;
        if (empty($of_options)) {
            $of_options = array();
        }
        
        $of_options[] = array(
            "name" => esc_html__("Product Global Options", 'elessi-theme'),
            "target" => 'product-global',
            "type" => "heading",
        );
        
        $of_options[] = array(
            "name" => esc_html__("Global Options", 'elessi-theme'),
            "std" => "<h4>" . esc_html__("Global Options", 'elessi-theme') . "</h4>",
            "type" => "info",
            'class' => 'first'
        );
        
        // Loop Group Buttons layout
        $of_options[] = array(
            "name" => esc_html__("Product Card Styles", 'elessi-theme'),
            "id" => "loop_layout_buttons",
            "std" => "ver-buttons",
            "type" => "images",
            "options" => array(
                'ver-buttons'   => ELESSI_ADMIN_DIR_URI . 'assets/images/loop-product-df.jpg',
                'hoz-buttons'   => ELESSI_ADMIN_DIR_URI . 'assets/images/loop-product-df-2.jpg',
                'modern-1'      => ELESSI_ADMIN_DIR_URI . 'assets/images/loop-product-md-1.jpg',
                'modern-2'      => ELESSI_ADMIN_DIR_URI . 'assets/images/loop-product-md-2.jpg',
                'modern-3'      => ELESSI_ADMIN_DIR_URI . 'assets/images/loop-product-md-3.jpg',
                'modern-4'      => ELESSI_ADMIN_DIR_URI . 'assets/images/loop-product-md-4.jpg',
                'modern-5'      => ELESSI_ADMIN_DIR_URI . 'assets/images/loop-product-md-5.jpg',
                'modern-6'      => ELESSI_ADMIN_DIR_URI . 'assets/images/loop-product-md-6.jpg',
                'modern-7'      => ELESSI_ADMIN_DIR_URI . 'assets/images/loop-product-md-7.jpg',
            ),
            'class' => 'flex-row flex-wrap flex-start img-max-height-150'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Hover Product Effect", 'elessi-theme'),
            "id" => "animated_products",
            "std" => "hover-fade",
            "type" => "select",
            "options" => array(
                "hover-fade" => esc_html__("Fade", 'elessi-theme'),
                "hover-zoom" => esc_html__("Zoom", 'elessi-theme'),
                "hover-to-top" => esc_html__("Move To Top", 'elessi-theme'),
                "hover-flip" => esc_html__("Flip Horizontal", 'elessi-theme'),
                "hover-bottom-to-top" => esc_html__("Bottom To Top", 'elessi-theme'),
                "hover-top-to-bottom" => esc_html__("Top To Bottom", 'elessi-theme'),
                "hover-left-to-right" => esc_html__("Left To Right", 'elessi-theme'),
                "hover-right-to-left" => esc_html__("Right To Left", 'elessi-theme'),
                "hover-carousel" => esc_html__("Gallery - Carousel", 'elessi-theme'),
                "" => esc_html__("No Effect", 'elessi-theme')
            )
        );
        
        $of_options[] = array(
            "name" => esc_html__("Back Image in Mobile Layout", 'elessi-theme'),
            "id" => "mobile_back_image",
            "std" => "0",
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Featured Badge", 'elessi-theme'),
            "id" => "featured_badge",
            "std" => "0",
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Backorder Allowed Badge", 'elessi-theme'),
            "id" => "backorder_badge",
            "std" => "0",
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Display product Categories on the Grid", 'elessi-theme'),
            "id" => "loop_categories",
            "std" => "0",
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Display product SKU on the Grid", 'elessi-theme'),
            "id" => "loop_sku",
            "std" => "0",
            "type" => "switch"
        );

        $of_options[] = array(
            "name" => esc_html__("Catalog Mode - Disable Add To Cart Feature", 'elessi-theme'),
            "id" => "disable-cart",
            "std" => "0",
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Add To Cart in Loop", 'elessi-theme'),
            "id" => "loop_add_to_cart",
            "std" => "1",
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Event After Add to Cart", 'elessi-theme'),
            "id" => "event-after-add-to-cart",
            "std" => "sidebar",
            "type" => "select",
            "options" => array(
                "sidebar" => esc_html__("Open Cart Sidebar", 'elessi-theme'),
                "popup" => esc_html__("Popup Your Order - Not use with Mobile App Simulation", 'elessi-theme'),
                "notice" => esc_html__("Show Notice", 'elessi-theme'),
            ),
            'class' => 'nasa-theme-option-parent'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Mini Cart - You may be interested in…", 'elessi-theme'),
            "id" => "mini_cart_crsells",
            "std" => "0",
            "type" => "switch",
            //'class' => 'hidden-tag nasa-theme-option-child nasa-event-after-add-to-cart nasa-event-after-add-to-cart-sidebar'
        ); 
        
        $of_options[] = array(
            "name" => esc_html__("Mini Cart - Note", 'elessi-theme'),
            "id" => "mini_cart_note",
            "std" => "0",
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Mini Cart - Shipping", 'elessi-theme'),
            "id" => "mini_cart_shipping",
            "std" => "0",
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Mini Cart - Coupon", 'elessi-theme'),
            "id" => "mini_cart_coupon",
            "std" => "0",
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Public Coupons - Mini Cart (one per line)", 'elessi-theme'),
            "desc" => 'Please input the coupon code you want to publish in Mini Cart Sidebar (one per line).',
            "id" => "mini_cart_p_coupon",
            "std" => '',
            "type" => "textarea"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Icon Mini Cart in Header", 'elessi-theme'),
            "id" => "mini-cart-icon",
            "std" => "1",
            "type" => "images",
            "options" => array(
                // icon-nasa-cart-3 - default
                '1' => ELESSI_ADMIN_DIR_URI . 'assets/images/mini-cart-1.jpg',
                // icon-nasa-cart-2
                '2' => ELESSI_ADMIN_DIR_URI . 'assets/images/mini-cart-2.jpg',
                // icon-nasa-cart-4
                '3' => ELESSI_ADMIN_DIR_URI . 'assets/images/mini-cart-3.jpg',
                // pe-7s-cart
                '4' => ELESSI_ADMIN_DIR_URI . 'assets/images/mini-cart-4.jpg',
                // fa fa-shopping-cart
                '5' => ELESSI_ADMIN_DIR_URI . 'assets/images/mini-cart-5.jpg',
                // fa fa-shopping-bag
                '6' => ELESSI_ADMIN_DIR_URI . 'assets/images/mini-cart-6.jpg',
                // fa fa-shopping-basket
                '7' => ELESSI_ADMIN_DIR_URI . 'assets/images/mini-cart-7.jpg'
            )
        );
        
        $of_options[] = array(
            "name" => esc_html__("Icon Add To Cart in Grid", 'elessi-theme'),
            "id" => "cart-icon-grid",
            "std" => "1",
            "type" => "images",
            "options" => array(
                // fa fa-plus - default
                '1' => ELESSI_ADMIN_DIR_URI . 'assets/images/cart-plus.jpg',
                // icon-nasa-cart-3
                '2' => ELESSI_ADMIN_DIR_URI . 'assets/images/mini-cart-1.jpg',
                // icon-nasa-cart-2
                '3' => ELESSI_ADMIN_DIR_URI . 'assets/images/mini-cart-2.jpg',
                // icon-nasa-cart-4
                '4' => ELESSI_ADMIN_DIR_URI . 'assets/images/mini-cart-3.jpg',
                // pe-7s-cart
                '5' => ELESSI_ADMIN_DIR_URI . 'assets/images/mini-cart-4.jpg',
                // fa fa-shopping-cart
                '6' => ELESSI_ADMIN_DIR_URI . 'assets/images/mini-cart-5.jpg',
                // fa fa-shopping-bag
                '7' => ELESSI_ADMIN_DIR_URI . 'assets/images/mini-cart-6.jpg',
                // fa fa-shopping-basket
                '8' => ELESSI_ADMIN_DIR_URI . 'assets/images/mini-cart-7.jpg'
            )
        );
        
        $of_options[] = array(
            "name" => esc_html__("Quantity Input - Off-Canvas Cart", 'elessi-theme'),
            "id" => "mini_cart_qty",
            "std" => "1",
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Quantity Input - Checkout Page", 'elessi-theme'),
            "id" => "mini_checkout_qty",
            "std" => "0",
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Subtotal for Item - Off-Canvas Cart", 'elessi-theme'),
            "id" => "mini_cart_subtotal",
            "std" => "1",
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Auto Update - Cart Page", 'elessi-theme'),
            "id" => "auto_update_cart",
            "std" => "0",
            "type" => "switch"
        );
        
        if (class_exists('WooCommerce_Advanced_Free_Shipping')) {
            $of_options[] = array(
                "name" => esc_html__("Reach Free Shipping Effect - WooCommerce Advanced Free Shipping", 'elessi-theme'),
                "id" => "free_shipping_effect",
                "std" => "0",
                "type" => "switch"
            );
        }
        
        $of_options[] = array(
            "name" => esc_html__("Compact Number - Cart, Wishlist, Compare (9+)", 'elessi-theme'),
            "id" => "compact_number",
            "std" => "1",
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Disable Quick View", 'elessi-theme'),
            "id" => "disable-quickview",
            "desc" => esc_html__("Yes, Please!", 'elessi-theme'),
            "std" => "0",
            "type" => "checkbox"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Quickview Layout", 'elessi-theme'),
            "id" => "style_quickview",
            "std" => "sidebar",
            "type" => "select",
            "options" => array(
                'popup' => esc_html__('Popup Classical - Not use with Mobile App Simulation', 'elessi-theme'),
                'sidebar' => esc_html__('Off-Canvas', 'elessi-theme')
            ),
            
            'class' => 'nasa-theme-option-parent'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Number Show Quickview Thumbnail", 'elessi-theme'),
            "id" => "quick_view_item_thumb",
            "std" => "1-item",
            "type" => "select",
            "options" => array(
                '1-item' => esc_html__('Single Thumbnail', 'elessi-theme'),
                '2-items' => esc_html__('Double Thumbnails', 'elessi-theme')
            ),
            
            'class' => 'nasa-style_quickview nasa-style_quickview-sidebar nasa-theme-option-child'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Cart Sidebar Layout", 'elessi-theme'),
            "id" => "style-cart",
            "std" => "style-1",
            "type" => "select",
            "options" => array(
                'style-1' => esc_html__('Light', 'elessi-theme'),
                'style-2' => esc_html__('Dark', 'elessi-theme')
            )
        );
        
        $of_options[] = array(
            "name" => esc_html__("Wishlist Sidebar Layout", 'elessi-theme'),
            "id" => "style-wishlist",
            "std" => "style-1",
            "type" => "select",
            "options" => array(
                'style-1' => esc_html__('Light', 'elessi-theme'),
                'style-2' => esc_html__('Dark', 'elessi-theme')
            )
        );
        
        $of_options[] = array(
            "name" => esc_html__("Checkout Layout", 'elessi-theme'),
            "id" => "checkout_layout",
            "std" => "",
            "type" => "select",
            "options" => array(
                '' => esc_html__('Default', 'elessi-theme'),
                'modern' => esc_html__('Modern - No Header, No Footer', 'elessi-theme')
            ),
            'class' => 'nasa-theme-option-parent'
        );
        
        // Only show one Shipping Method in Cart
        $of_options[] = array(
            "name" => esc_html__("Only Show one Shipping Method in Cart Page", 'elessi-theme'),
            "id" => "cart_1_shiping",
            "std" => "1",
            "type" => "switch",
            'class' => 'nasa-checkout_layout nasa-checkout_layout-modern nasa-theme-option-child'
        );
        
        if (defined('YITH_WCPB')) {
            // Enable Gift in grid
            $of_options[] = array(
                "name" => esc_html__("Enable Promotion Gifts featured icon", 'elessi-theme'),
                "id" => "enable_gift_featured",
                "std" => 1,
                "type" => "switch"
            );
        }
        
        $of_options[] = array(
            "name" => esc_html__("Top Filter Categories", 'elessi-theme'),
            "id" => "show_icon_cat_top",
            "std" => "show-in-shop",
            "type" => "select",
            "options" => array(
                'show-in-shop' => esc_html__('On Archive Product Pages', 'elessi-theme'),
                'show-all-site' => esc_html__('On All Pages', 'elessi-theme'),
                'not-show' => esc_html__('Off', 'elessi-theme'),
            )
        );
        
        $of_options[] = array(
            "name" => esc_html__("Max Depth Level - Top Filter Categories", 'elessi-theme'),
            "id" => "depth_cat_top",
            "std" => "0",
            "type" => "select",
            "options" => array(
                '0' => esc_html__('Unlimited', 'elessi-theme'),
                '1' => esc_html__('1 Level', 'elessi-theme'),
                '2' => esc_html__('2 Levels', 'elessi-theme'),
                '3' => esc_html__('3 Levels', 'elessi-theme')
            ),
            'override_numberic' => true
        );
        
        $of_options[] = array(
            "name" => esc_html__("Order by - Top Filter Categories", 'elessi-theme'),
            "id" => "order_cat_top",
            "std" => "order",
            "type" => "select",
            "options" => array(
                'order' => esc_html__('Category Order', 'elessi-theme'),
                'name' => esc_html__('Name', 'elessi-theme')
            )
        );
        
        // Hide categories empty product
        $of_options[] = array(
            "name" => esc_html__("Hide categories empty product - Top Filter Categories", 'elessi-theme'),
            "id" => "hide_empty_cat_top",
            "std" => 0,
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Disable top level of categories follow current category archive (Use for Multi stores)", 'elessi-theme'),
            "desc" => esc_html__("Yes, Please!", 'elessi-theme'),
            "id" => "disable_top_level_cat",
            "std" => 0,
            "type" => "checkbox"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Uncategorized Product", 'elessi-theme'),
            "id" => "show_uncategorized",
            "std" => 0,
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Disable ajax Progress Bar Loading", 'elessi-theme'),
            "id" => "disable_ajax_product_progress_bar",
            "desc" => esc_html__("Yes, Please!", 'elessi-theme'),
            "std" => 0,
            "type" => "checkbox"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Cross-Sells Products", 'elessi-theme'),
            "std" => "<h4>" . esc_html__("You may be interested in…", 'elessi-theme') . "</h4>",
            "type" => "info"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Columns", 'elessi-theme'),
            "id" => "crs_columns_desk",
            "std" => "5-cols",
            "type" => "select",
            "options" => array(
                "5-cols" => esc_html__("5 columns", 'elessi-theme'),
                "4-cols" => esc_html__("4 columns", 'elessi-theme'),
                "3-cols" => esc_html__("3 columns", 'elessi-theme'),
            )
        );
        
        $of_options[] = array(
            "name" => esc_html__("Tablet Columns", 'elessi-theme'),
            "id" => "crs_columns_tablet",
            "std" => "3-cols",
            "type" => "select",
            "options" => array(
                "4-cols" => esc_html__("4 columns", 'elessi-theme'),
                "3-cols" => esc_html__("3 columns", 'elessi-theme'),
                "2-cols" => esc_html__("2 columns", 'elessi-theme')
            )
        );
        
        $of_options[] = array(
            "name" => esc_html__("Mobile Columns", 'elessi-theme'),
            "id" => "crs_columns_small",
            "std" => "2-cols",
            "type" => "select",
            "options" => array(
                "2-cols" => esc_html__("2 columns", 'elessi-theme'),
                "1.5-cols" => esc_html__("1,5 column", 'elessi-theme'),
                "1-col" => esc_html__("1 column", 'elessi-theme')
            )
        );
        
        $of_options[] = array(
            "name" => esc_html__("Auto Slide", 'elessi-theme'),
            "id" => "crs_slide_auto",
            "std" => 0,
            "type" => "switch"
        );
    }
}
