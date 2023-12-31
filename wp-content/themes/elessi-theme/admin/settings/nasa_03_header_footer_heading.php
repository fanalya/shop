<?php
add_action('init', 'elessi_header_footer_heading');
if (!function_exists('elessi_header_footer_heading')) {
    function elessi_header_footer_heading() {
        // Set the Options Array
        global $of_options;
        if (empty($of_options)) {
            $of_options = array();
        }
        
        $static_blocks = elessi_admin_get_static_blocks();
        
        $of_options[] = array(
            "name" => esc_html__("Header and Footer", 'elessi-theme'),
            "target" => 'header-footer',
            "type" => "heading"
        );

        $of_options[] = array(
            "name" => esc_html__("Header Options", 'elessi-theme'),
            "std" => "<h4>" . esc_html__("Header Options", 'elessi-theme') . "</h4>",
            "type" => "info",
            'class' => 'first'
        );
        
        $header_type_list = array(
            '1' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-1.jpg',
            '2' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-2.jpg',
            '3' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-3.jpg',
            '4' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-4.jpg',
            '5' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-5.jpg',
            '6' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-6.jpg',
            '7' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-7.jpg',
            'nasa-custom' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-builder-wpbakery.jpg',
            'nasa-elm' => ELESSI_ADMIN_DIR_URI . 'assets/images/header-builder-elementor.jpg',
        );
        
        $of_options[] = array(
            "name" => esc_html__("Header Layout", 'elessi-theme'),
            "id" => "header-type",
            "std" => "1",
            "type" => "images",
            "options" => $header_type_list,
            'class' => 'nasa-header-type-select'
        );
        
        /**
         * Header Builder
         */
        $header_builder = elessi_admin_get_header_builder();
        $header_options = array_merge(
            array('default' => esc_html__('Select the Header Builder', 'elessi-theme')),
            $header_builder
        );
        
        $of_options[] = array(
            "name" => esc_html__("Header Theme Builder", 'elessi-theme'),
            "id" => "header-custom",
            "type" => "select",
            'override_numberic' => true,
            "options" => $header_options,
            'std' => '',
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-nasa-custom nasa-header-custom'
        );
        
        /**
         * Headers Elementor Builder
         */
        $header_builder = elessi_admin_get_header_elementor();
        $header_builder['0'] = esc_html__('Select the Header Elementor', 'elessi-theme');
        $of_options[] = array(
            "name" => esc_html__("Header Elementor Builder", 'elessi-theme'),
            "id" => "header-elm",
            "type" => "select",
            'override_numberic' => true,
            "options" => $header_builder,
            'std' => '',
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-nasa-elm nasa-header-elm'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Menu Options", 'elessi-theme'),
            "std" => "<h4>" . esc_html__("Menu Options", 'elessi-theme') . "</h4>",
            "type" => "info",
            // 'class' => 'first'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Flexible - Menu Resizing (Desktop and Tablet)", 'elessi-theme'),
            "id" => "flexible_menu",
            "std" => 1,
            "type" => "switch",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-flexible_menu'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Menu Font Size (Desktop and Tablet)", 'elessi-theme'),
            "id" => "font_size_menu",
            "std" => "100",
            "step" => "1",
            "min" => '80',
            "max" => '150',
            "type" => "sliderui"
        );
        
        $option_menu = elessi_admin_get_menu_options();
        
        $of_options[] = array(
            "name" => esc_html__("Vertical Menu", 'elessi-theme'),
            "id" => "vertical_menu_selected",
            "std" => "",
            "type" => "select",
            'override_numberic' => true,
            "options" => $option_menu,
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-4 nasa-header-type-select-6'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Vertical Root Level - Parent - 0", 'elessi-theme'),
            "id" => "v_root",
            "std" => 0,
            "type" => "switch",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-4 nasa-header-type-select-6'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Vertical Root Level - Limit", 'elessi-theme'),
            "id" => "v_root_limit",
            "std" => '',
            "type" => "text",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-4 nasa-header-type-select-6'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Ordering Mobile Menu", 'elessi-theme'),
            "id" => "order_mobile_menus",
            "std" => "",
            "type" => "select",
            'override_numberic' => true,
            "options" => array(
                '' => esc_html__("Main Menu > Vertical Menu", 'elessi-theme'),
                'v-focus' => esc_html__("Vertical Menu > Main Menu", 'elessi-theme'),
            ),
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-4 nasa-header-type-select-6'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Fullwidth Main Menu", 'elessi-theme'),
            "id" => "fullwidth_main_menu",
            "std" => 1,
            "type" => "switch",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-2 nasa-header-type-select-3 nasa-fullwidth_main_menu'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Addon Options", 'elessi-theme'),
            "std" => "<h4>" . esc_html__("Addon Options", 'elessi-theme') . "</h4>",
            "type" => "info",
            // 'class' => 'first'
        );
        
        /* $of_options[] = array(
            "name" => esc_html__("Transparent Header", 'elessi-theme'),
            "id" => "header_transparent",
            "std" => 0,
            "type" => "switch",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-5 nasa-header-type-select-7 nasa-header_transparent'
        ); */
        
        $of_options[] = array(
            "name" => esc_html__("The Block Under Header", 'elessi-theme'),
            "desc" => esc_html__("Please Create Static Block to use.", 'elessi-theme'),
            "id" => "header-block",
            "type" => "select",
            "options" => $static_blocks,
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-5 nasa-header-type-select-6 nasa-header-type-select-7 nasa-header-block'
        );
        
        $of_options[] = array(
            "name" => esc_html__("The Block beside Logo in Header Type 2", 'elessi-theme'),
            "desc" => esc_html__("Please Create Static Block to use.", 'elessi-theme'),
            "id" => "header-block-type_2",
            "type" => "select",
            "options" => $static_blocks,
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-2 nasa-header-block-type_2'
        );
        
        $of_options[] = array(
            "name" => esc_html__("The Block beside Main menu in Header Type 4, 6", 'elessi-theme'),
            "desc" => esc_html__("Please Create Static Block to use.", 'elessi-theme'),
            "id" => "header-block-type_4",
            "type" => "select",
            "options" => $static_blocks
        );

        $of_options[] = array(
            "name" => esc_html__("Sticky", 'elessi-theme'),
            "id" => "fixed_nav",
            "std" => 1,
            "type" => "switch",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-fixed_nav'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Background Color Header", 'elessi-theme'),
            "id" => "bg_color_header",
            "std" => "",
            "type" => "color",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-bg_color_header'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Header Icons", 'elessi-theme'),
            "id" => "text_color_header",
            "std" => "",
            "type" => "color",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-text_color_header'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Header Icons Hover", 'elessi-theme'),
            "id" => "text_color_hover_header",
            "std" => "",
            "type" => "color",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-text_color_hover_header'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Main Menu Background Color", 'elessi-theme'),
            "id" => "bg_color_main_menu",
            "std" => "",
            "type" => "color",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-bg_color_main_menu'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Main Menu Text Color", 'elessi-theme'),
            "id" => "text_color_main_menu",
            "std" => "",
            "type" => "color",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-text_color_main_menu'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Vertical Menu Background - Focus", 'elessi-theme'),
            "id" => "bg_color_v_menu",
            "std" => "",
            "type" => "color",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-4 nasa-header-type-select-6 nasa-bg_color_v_menu'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Vertical Menu Text Color - Focus", 'elessi-theme'),
            "id" => "text_color_v_menu",
            "std" => "",
            "type" => "color",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-4 nasa-header-type-select-6 nasa-text_color_v_menu'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Search Options", 'elessi-theme'),
            "std" => "<h4>" . esc_html__("Search Options", 'elessi-theme') . "</h4>",
            "type" => "info",
            // 'class' => 'first'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Search Bar Effect", 'elessi-theme'),
            "id" => "search_effect",
            "std" => "right-to-left",
            "type" => "select",
            "options" => array(
                "rightToLeft" => esc_html__("Right To Left", 'elessi-theme'),
                "fadeInDown" => esc_html__("Fade In Down", 'elessi-theme'),
                "fadeInUp" => esc_html__("Fade In Up", 'elessi-theme'),
                "leftToRight" => esc_html__("Left To Right", 'elessi-theme'),
                "fadeIn" => esc_html__("Fade In", 'elessi-theme'),
                "noEffect" => esc_html__("No Effect", 'elessi-theme')
            ),
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-search_effect'
        );
        
        if (NASA_WOO_ACTIVED) {
            // Options live search products
            $of_options[] = array(
                "name" => esc_html__("Search Anything After Submit", 'elessi-theme'),
                "id" => "anything_search",
                "std" => 0,
                "type" => "switch",
                "desc" => '<span class="nasa-warning red-color">' . esc_html__("If Turn on, the live search Ajax feature will be lost", 'elessi-theme') . '</span>',
            );

            // Options live search products
            $of_options[] = array(
                "name" => esc_html__("Live Search Ajax Products", 'elessi-theme'),
                "id" => "enable_live_search",
                "std" => 1,
                "type" => "switch"
            );

            // Options Support search products by SKU
            $of_options[] = array(
                "name" => esc_html__("Support Search By SKU", 'elessi-theme'),
                "id" => "sp_search_sku",
                "std" => 0,
                "type" => "switch"
            );

            // limit_results_search
            $of_options[] = array(
                "name" => esc_html__("Results Ajax Search (Limit Products)", 'elessi-theme'),
                "id" => "limit_results_search",
                "std" => "5",
                "type" => "text"
            );

            $of_options[] = array(
                "name" => esc_html__("Suggested Keywords", 'elessi-theme'),
                "desc" => 'Please input the Suggested keywords (ex: Sweater, Jacket, T-shirt ...).',
                "id" => "hotkeys_search",
                "std" => '',
                "type" => "textarea"
            );

            $of_options[] = array(
                "name" => esc_html__("Popular Keywords", 'elessi-theme'),
                "desc" => 'Please input the Popular Searches keywords (ex: Sweater, Jacket, T-shirt).',
                "id" => "popkeys_search",
                "std" => '',
                "type" => "textarea"
            );

            $of_options[] = array(
                "name" => esc_html__("Live Search Layout - (Header type 1, 2, 5, 7)", 'elessi-theme'),
                "id" => "search_layout",
                "std" => "classic",
                "type" => "select",
                "options" => array(
                    "classic" => esc_html__("Classic", 'elessi-theme'),
                    "modern" => esc_html__("Modern", 'elessi-theme')
                )
            );
            // End Options live search products
        }
        
        $of_options[] = array(
            "name" => esc_html__("Top Bar Options", 'elessi-theme'),
            "std" => "<h4>" . esc_html__("Top Bar Options", 'elessi-theme') . "</h4>",
            "type" => "info",
            // 'class' => 'first'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Top Bar", 'elessi-theme'),
            "id" => "topbar_on",
            "std" => 1,
            "type" => "switch",
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-fixed_nav'
        );

        $of_options[] = array(
            "name" => esc_html__("Toggle Top Bar", 'elessi-theme'),
            "id" => "topbar_toggle",
            "std" => 0,
            "type" => "switch",
            'class' => 'hidden-tag nasa-topbar_toggle nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-fixed_nav'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Toggle Top Bar - Initialize", 'elessi-theme'),
            "id" => "topbar_default_show",
            "std" => 1,
            "type" => "switch",
            'class' => 'hidden-tag nasa-topbar_df-show'
        );

        $of_options[] = array(
            "name" => esc_html__("Languages Switcher - Requires WPML", 'elessi-theme'),
            "id" => "switch_lang",
            "std" => 0,
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Currencies Switcher - Requires WPML | FOX - Currency Switcher Professional for WooCommerce | CURCY - Multi Currency for WooCommerce", 'elessi-theme'),
            "id" => "switch_currency",
            "std" => 0,
            "type" => "switch"
        );
        
        //(%symbol%) %code%
        $of_options[] = array(
            "name" => esc_html__("Format Currency - Only for WPML", 'elessi-theme'),
            "desc" => esc_html__("Default (%symbol%) %code%. You can custom for this. Ex (%name% (%symbol%) - %code%)", 'elessi-theme'),
            "id" => "switch_currency_format",
            "std" => "",
            "type" => "text"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Top Bar Content", 'elessi-theme'),
            "desc" => esc_html__("Please Create Static Block to use.", 'elessi-theme'),
            "id" => "topbar_content",
            "type" => "select",
            "options" => $static_blocks,
            'class' => 'hidden-tag nasa-header-type-child nasa-header-type-select-1 nasa-header-type-select-2 nasa-header-type-select-3 nasa-header-type-select-4 nasa-header-type-select-6 nasa-topbar_content'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Topbar Background", 'elessi-theme'),
            "id" => "bg_color_topbar",
            "std" => "",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Topbar Text color", 'elessi-theme'),
            "id" => "text_color_topbar",
            "std" => "",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Topbar Text color hover", 'elessi-theme'),
            "id" => "text_color_hover_topbar",
            "std" => "",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Footer Options", 'elessi-theme'),
            "std" => "<h4>" . esc_html__("Footer Options", 'elessi-theme') . "</h4>",
            "type" => "info"
        );
        
        /**
         * Disable Footer Build In
         */
        $of_options[] = array(
            "name" => esc_html__("Footer Built-In Support (Widgets Builder)", 'elessi-theme'),
            "id" => "f_buildin",
            "std" => 1,
            "type" => "switch",
            "desc" => '<span class="nasa-warning red-color">' . esc_html__("Recommend Turn Off to use Builder Mode", 'elessi-theme') . '</span>',
        );
        
        $modes = array(
            "build-in" => esc_html__("Built-in - Widgets Place", 'elessi-theme'),
            "builder" => esc_html__("Builder - Suport WPBakery", 'elessi-theme')
        );
        if (NASA_ELEMENTOR_ACTIVE && NASA_HF_BUILDER) {
            $modes["builder-e"] = esc_html__("Builder - Support HFE-Elementor", 'elessi-theme');
        }
        
        $of_options[] = array(
            "name" => esc_html__("Mode", 'elessi-theme'),
            "id" => "footer_mode",
            "std" => 'builder',
            "type" => "select",
            "options" => $modes,
            'class' => 'nasa-theme-option-parent'
        );
        
        /**
         * Footer Build-in Desktop
         */
        $of_options[] = array(
            "name" => esc_html__("Footer Layout", 'elessi-theme'),
            "id" => "footer_build_in",
            "type" => "select",
            'override_numberic' => true,
            "options" => array(
                '1' => esc_html__("Built-in Light 1", 'elessi-theme'),
                '2' => esc_html__("Built-in Light 2", 'elessi-theme'),
                '3' => esc_html__("Built-in Light 3", 'elessi-theme'),
                '4' => esc_html__("Built-in Dark", 'elessi-theme')
            ),
            'std' => '2',
            'class' => 'nasa-footer_mode nasa-footer_mode-build-in nasa-theme-option-child'
        );
        
        /**
         * Footer Build-in Mobile
         */
        $of_options[] = array(
            "name" => esc_html__("Footer Mobile Layout", 'elessi-theme'),
            "id" => "footer_build_in_mobile",
            "type" => "select",
            'override_numberic' => true,
            "options" => array(
                '' => esc_html__("Extends from Desktop", 'elessi-theme'),
                'm-1' => esc_html__("Build-in Mobile", 'elessi-theme')
            ),
            'std' => '',
            'class' => 'nasa-footer_mode nasa-footer_mode-build-in nasa-theme-option-child'
        );
        
        /**
         * Footers Builder
         */
        $footers_options = elessi_admin_get_footer_builder();
        
        $footers_desk = array_merge(
            array('default' => esc_html__('Select the Footer Type', 'elessi-theme')),
            $footers_options
        );
        $footers_mobile = array_merge(
            array('default' => esc_html__('Extends from Desktop', 'elessi-theme')),
            $footers_options
        );
        
        /**
         * Footer Desktop
         */
        $of_options[] = array(
            "name" => esc_html__("Footer Layout", 'elessi-theme'),
            "id" => "footer-type",
            "type" => "select",
            'override_numberic' => true,
            "options" => $footers_desk,
            'std' => 'default',
            'class' => 'nasa-footer_mode nasa-footer_mode-builder nasa-theme-option-child'
        );
        
        /**
         * Footer Mobile
         */
        $of_options[] = array(
            "name" => esc_html__("Footer Mobile Layout", 'elessi-theme'),
            "id" => "footer-mobile",
            "type" => "select",
            'override_numberic' => true,
            "options" => $footers_mobile,
            'std' => 'default',
            'class' => 'nasa-footer_mode nasa-footer_mode-builder nasa-theme-option-child'
        );
        
        /**
         * Footers Elementor Builder
         */
        $footers_options = elessi_admin_get_footer_elementor();
        $footers_desk = $footers_options;
        $footers_desk['0'] = esc_html__('Select the Footer Elementor', 'elessi-theme');
        $footers_mobile = $footers_options;
        $footers_mobile['0'] = esc_html__('Extends from Desktop', 'elessi-theme');
        
        /**
         * Footer Desktop
         */
        $of_options[] = array(
            "name" => esc_html__("Footer Layout", 'elessi-theme'),
            "id" => "footer_elm",
            "type" => "select",
            'override_numberic' => true,
            "options" => $footers_desk,
            'std' => 'default',
            'class' => 'nasa-footer_mode nasa-footer_mode-builder-e nasa-theme-option-child'
        );
        
        /**
         * Footer Mobile
         */
        $of_options[] = array(
            "name" => esc_html__("Footer Mobile Layout", 'elessi-theme'),
            "id" => "footer_elm_mobile",
            "type" => "select",
            'override_numberic' => true,
            "options" => $footers_mobile,
            'std' => 'default',
            'class' => 'nasa-footer_mode nasa-footer_mode-builder-e nasa-theme-option-child'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Mobile Bottom Bar Options", 'elessi-theme'),
            "std" => "<h4>" . esc_html__("Mobile Bottom Bar Options", 'elessi-theme') . "</h4>",
            "type" => "info"
        );
        
        /**
         * On | Off Mobile Bottom Bar
         */
        $of_options[] = array(
            "name" => esc_html__("Mobile Bottom Bar", 'elessi-theme'),
            "id" => "m_bot_bar",
            "std" => 1,
            "type" => "switch"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Mobile Bottom Bar Content", 'elessi-theme'),
            "desc" => esc_html__("Please Create Static Block to use.", 'elessi-theme'),
            "id" => "m_bot_bar_ct",
            "type" => "select",
            "options" => $static_blocks
        );
    }
}
