<?php
add_action('init', 'elessi_style_color_heading');
if (!function_exists('elessi_style_color_heading')) {
    function elessi_style_color_heading() {
        // Set the Options Array
        global $of_options;
        if (empty($of_options)) {
            $of_options = array();
        }
        
        $of_options[] = array(
            "name" => esc_html__("Style and Colors", 'elessi-theme'),
            "target" => 'style-color',
            "type" => "heading"
        );

        $of_options[] = array(
            "name" => esc_html__("Colors Options", 'elessi-theme'),
            "std" => "<h4>" . esc_html__("Colors Options", 'elessi-theme') . "</h4>",
            "type" => "info",
            'class' => 'first'
        );
        
        $of_options[] = array(
            "name" => esc_html__("Primary Color", 'elessi-theme'),
            "desc" => esc_html__("Change primary color. Used for primary buttons, link hover, background, etc.", 'elessi-theme'),
            "id" => "color_primary",
            "std" => "",
            "type" => "color"
        );

        $of_options[] = array(
            "name" => esc_html__("Success Color", 'elessi-theme'),
            "id" => "color_success",
            "std" => "",
            "type" => "color"
        );

        $of_options[] = array(
            "name" => esc_html__("Custom Badge Color", 'elessi-theme'),
            "id" => "color_hot_label",
            "std" => "",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Featured Badge Color", 'elessi-theme'),
            "id" => "color_featured_label",
            "std" => "",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Backorders Badge Color", 'elessi-theme'),
            "id" => "color_backorders_label",
            "std" => "",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Video Badge Color", 'elessi-theme'),
            "id" => "color_video_label",
            "std" => "",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => esc_html__("360&#176; Badge Color", 'elessi-theme'),
            "id" => "color_360_label",
            "std" => "",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Deal Badge Color", 'elessi-theme'),
            "id" => "color_deal_label",
            "std" => "",
            "type" => "color"
        );

        $of_options[] = array(
            "name" => esc_html__("Sale Badge Color", 'elessi-theme'),
            "id" => "color_sale_label",
            "std" => "",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Variants Badge Color", 'elessi-theme'),
            "id" => "color_variants_label",
            "std" => "",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Bulk Discount Badge Color", 'elessi-theme'),
            "id" => "color_bulk_label",
            "std" => "",
            "type" => "color"
        );

        $of_options[] = array(
            "name" => esc_html__("Price Color", 'elessi-theme'),
            "id" => "color_price_label",
            "std" => "",
            "type" => "color"
        );

        $of_options[] = array(
            "name" => esc_html__("Buttons Style Options", 'elessi-theme'),
            "std" => "<h4>" . esc_html__("Buttons Style Options", 'elessi-theme') . "</h4>",
            "type" => "info"
        );

        $of_options[] = array(
            "name" => esc_html__("Buttons Background Color", 'elessi-theme'),
            "id" => "color_button",
            "std" => "",
            "type" => "color"
        );

        $of_options[] = array(
            "name" => esc_html__("Buttons Background Color Hover", 'elessi-theme'),
            "desc" => esc_html__("Default use primary color", 'elessi-theme'),
            "id" => "color_hover",
            "std" => "",
            "type" => "color"
        );

        $of_options[] = array(
            "name" => esc_html__("Buttons Border Color", 'elessi-theme'),
            "id" => "button_border_color",
            "std" => "",
            "type" => "color"
        );

        $of_options[] = array(
            "name" => esc_html__("Buttons Border Color Hover", 'elessi-theme'),
            "id" => "button_border_color_hover",
            "std" => "",
            "type" => "color"
        );

        $of_options[] = array(
            "name" => esc_html__("Buttons Text Color", 'elessi-theme'),
            "id" => "button_text_color",
            "std" => "",
            "type" => "color"
        );

        $of_options[] = array(
            "name" => esc_html__("Buttons Text Color Hover", 'elessi-theme'),
            "id" => "button_text_color_hover",
            "std" => "",
            "type" => "color"
        );
        
        $of_options[] = array(
            "name" => esc_html__("Buttons Radius", 'elessi-theme'),
            "id" => "button_radius",
            "std" => "0",
            "step" => "1",
            "max" => '100',
            "type" => "sliderui"
        );

        $of_options[] = array(
            "name" => esc_html__("Buttons Border Width", 'elessi-theme'),
            "id" => "button_border",
            "std" => "1",
            "step" => "1",
            'min' => '1',
            "max" => '5',
            "type" => "sliderui"
        );

        $of_options[] = array(
            "name" => esc_html__("Inputs Radius", 'elessi-theme'),
            "id" => "input_radius",
            "std" => "0",
            "step" => "1",
            "max" => "100",
            "type" => "sliderui"
        );
    }
}
