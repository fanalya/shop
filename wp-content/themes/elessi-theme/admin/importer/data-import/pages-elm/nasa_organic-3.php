<?php
function nasa_elm_organic_3() {
    $imgs_1 = elessi_import_upload('/wp-content/uploads/2022/06/organic-3-slider1.jpg', '3556', array(
        'post_title' => 'organic-3-slider1',
        'post_name' => 'organic-3-slider1',
    ));
    
    $imgs_2 = elessi_import_upload('/wp-content/uploads/2022/06/organic-3-slider2.jpg', '3556', array(
        'post_title' => 'organic-3-slider2',
        'post_name' => 'organic-3-slider2',
    ));
    
    $imgs_3 = elessi_import_upload('/wp-content/uploads/2022/06/organic-3-banner1.jpg', '3555', array(
        'post_title' => 'organic-3-banner1',
        'post_name' => 'organic-3-banner1',
    ));
    
    $imgs_4 = elessi_import_upload('/wp-content/uploads/2022/06/organic-3-banner2.jpg', '3555', array(
        'post_title' => 'organic-3-banner2',
        'post_name' => 'organic-3-banner2',
    ));
    
    $imgs_5 = elessi_import_upload('/wp-content/uploads/2022/06/organic-3-banner3-1.jpg', '3658', array(
        'post_title' => 'organic-3-banner3-1',
        'post_name' => 'organic-3-banner3-1',
    ));
    
    $imgs_6 = elessi_import_upload('/wp-content/uploads/2022/06/organic-3-banner4-1.jpg', '3658', array(
        'post_title' => 'organic-3-banner4-1',
        'post_name' => 'organic-3-banner4-1',
    ));
    
    $imgs_7 = elessi_import_upload('/wp-content/uploads/2022/06/organic-3-banner5-1.jpg', '3658', array(
        'post_title' => 'organic-3-banner5-1',
        'post_name' => 'organic-3-banner5-1',
    ));
    
    $imgs_8 = elessi_import_upload('/wp-content/uploads/2022/06/organic-3-v-banner-2-1.jpg', '3153', array(
        'post_title' => 'organic-3-v-banner-2-1',
        'post_name' => 'organic-3-v-banner-2-1',
    ));
    
    $imgs_url_1 = elessi_import_upload('/wp-content/uploads/2022/06/organic-3-product-slider-bg.jpg', '3100', array(
        'post_title' => 'organic-3-product-slider-bg',
        'post_name' => 'organic-3-product-slider-bg',
    ));
    $imgs_url_src_1 = $imgs_url_1 ? wp_get_attachment_image_url($imgs_url_1, 'full') : 'https://via.placeholder.com/1920x590?text=1920x590';
    
    $imgs_url_2 = elessi_import_upload('/wp-content/uploads/2022/06/organic-3-newsletter-bg.jpg', '3319', array(
        'post_title' => 'organic-3-newsletter-bg',
        'post_name' => 'organic-3-newsletter-bg',
    ));
    $imgs_url_src_2 = $imgs_url_2 ? wp_get_attachment_image_url($imgs_url_2, 'full') : 'https://via.placeholder.com/1920x170?text=1920x170';
    
    $result = array(
        'post' => array(
            'post_title' => 'ELM Organic V3',
            'post_name' => 'elm-organic-v3'
        ),
        
        'post_meta' => array(
            '_elementor_data' => '[{"id":"7af2ae9","elType":"section","settings":{"content_width":{"unit":"px","size":1600,"sizes":[]},"structure":"20","margin":{"unit":"px","top":"60","right":0,"bottom":"80","left":0,"isLinked":false},"margin_tablet":{"unit":"px","top":"30","right":0,"bottom":"30","left":0,"isLinked":false},"margin_mobile":{"unit":"px","top":"10","right":0,"bottom":"50","left":0,"isLinked":false},"padding":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false}},"elements":[{"id":"3605d4af","elType":"column","settings":{"_column_size":50,"_inline_size":66.691,"padding":{"unit":"px","top":"0","right":"10","bottom":"0","left":"10","isLinked":false},"padding_mobile":{"unit":"px","top":"0","right":"10","bottom":"10","left":"10","isLinked":false},"_inline_size_tablet":67},"elements":[{"id":"27f59e81","elType":"widget","settings":{"wp":{"title":"","align":"center","sliders":{"1639643221874":{"img_src":"' . $imgs_1 . '","link":"","content_width":"","align":"left","move_x":"9%","valign":"top","text_align":"text-left","content":"<h3 class=\"fs-14 mobile-fs-15 margin-top-5 margin-bottom-15\" style=\"color: #b8b7b9;\">PURE AND NATURE<\/h3>\r\n<h2 class=\"fs-35 tablet-fs-30 mobile-fs-20 margin-bottom-20 mobile-margin-bottom-10\" style=\"line-height: 1.2;\">Discover Real\r\nOrganic <span class=\"primary-color\">Flavors<\/span><\/h2>\r\n<h5 class=\"fs-14 mobile-fs-15 margin-bottom-10\" style=\"color: #b8b7b9; line-height: 1.8;\">Today discount<\/h5>\r\n<h2 class=\"fs-45 tablet-fs-30 mobile-fs-20 margin-top-0 margin-bottom-20\" style=\"line-height: 1.2; color: #e6480e;\">30<sup>%<\/sup><\/h2>\r\n<a class=\"primary-color button hide-for-mobile fs-14 tablet-fs-11 force-radius-5 hide-for-medium\" style=\"text-transform: none; letter-spacing: 0; padding: 10px 25px;\" title=\"Shop now\" href=\"#\">Shop now<\/a>","effect_text":"fadeInLeft","data_delay":"300ms","hover":"","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":""},"1639643224158":{"img_src":"' . $imgs_2 . '","link":"","content_width":"","align":"left","move_x":"9%","valign":"top","text_align":"text-left","content":"<h3 class=\"fs-12 mobile-fs-15 margin-top-5 margin-bottom-15\" style=\"color: #b8b7b9;\">FRESH AND TASTY<\/h3>\r\n<h2 class=\"fs-35 tablet-fs-30 mobile-fs-20 margin-bottom-20 mobile-margin-bottom-10\" style=\"line-height: 1.2;\">Farm Market\r\nOrganic <span class=\"primary-color\">Shop<\/span><\/h2>\r\n<h5 class=\"fs-14 mobile-fs-15 margin-bottom-10\" style=\"color: #b8b7b9; line-height: 1.8;\">Today discount<\/h5>\r\n<h2 class=\"fs-45 tablet-fs-30 mobile-fs-20 margin-top-0 margin-bottom-20\" style=\"line-height: 1.2; color: #e6480e;\">30<sup>%<\/sup><\/h2>\r\n<a class=\"primary-color button hide-for-mobile fs-14 tablet-fs-11 force-radius-5 hide-for-medium\" style=\"text-transform: none; letter-spacing: 0; padding: 10px 25px;\" title=\"Shop now\" href=\"#\">Shop now<\/a>","effect_text":"fadeInLeft","data_delay":"300ms","hover":"","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":""}},"bullets":"false","bullets_pos":"inside","bullets_align":"center","navigation":"true","column_number":"1","column_number_small":"1","column_number_tablet":"1","padding_item":"","padding_item_small":"","padding_item_medium":"","force":"false","autoplay":"false","paginationspeed":"600","el_class":"right-now"}},"elements":[],"widgetType":"wp-widget-nasa_sliders_2_sc"}],"isInner":false},{"id":"10eefc27","elType":"column","settings":{"_column_size":50,"_inline_size":33.268,"padding":{"unit":"px","top":"0","right":"10","bottom":"0","left":"10","isLinked":false},"_inline_size_tablet":33,"padding_mobile":{"unit":"px","top":"0","right":"10","bottom":"0","left":"10","isLinked":false}},"elements":[{"id":"71a9942c","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_3 . '","link":"","content_width":"","align":"left","move_x":"3%","valign":"top","text_align":"text-left","content":"<h3 class=\"fs-14 margin-top-20 tablet-margin-top-10 margin-bottom-10 tablet-margin-bottom-10\" style=\"color: #499679\">GET EXTRA 50% OFF<\/h3>\r\n<h4 class=\"fs-25 tablet-fs-16 mobile-fs-18 margin-bottom-15 tablet-margin-bottom-0 tablet-margin-bottom-0\" style=\"line-height: 1.2;color: #f8810c\">Fresh\r\nEveryday<\/h4>\r\n<a class=\"fs-12 tablet-fs-12 mobile-fs-12\" title=\"Shop now\" href=\"#\">Shop now<\/a>","effect_text":"fadeInLeft","data_delay":"300ms","hover":"zoom","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":""},"_css_classes":"mobile-margin-bottom-10"},"elements":[],"widgetType":"wp-widget-nasa_banner_2_sc"},{"id":"1ea48897","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_4 . '","link":"","content_width":"","align":"left","move_x":"6%","valign":"top","text_align":"text-left","content":"<h3 class=\"fs-14 margin-top-20 tablet-margin-top-0 margin-bottom-10\" style=\"color: #ec8561\">HOT THIS WEEK<\/h3>\r\n<h4 class=\"fs-25 tablet-fs-16 mobile-fs-18 margin-bottom-20 tablet-margin-bottom-0\" style=\"line-height: 1.2\">Fresh <span class=\"primary-color\">vegetable\r\n&amp; Fruit<\/span> basket<\/h4>\r\n<h5 class=\"fs-12\" style=\"color: #afafaf\">Fresh Packed to order<\/h5>","effect_text":"fadeInLeft","data_delay":"300ms","hover":"zoom","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":""},"_css_classes":"mobile-margin-bottom-10"},"elements":[],"widgetType":"wp-widget-nasa_banner_2_sc"}],"isInner":false}],"isInner":false},{"id":"35b8700","elType":"section","settings":{"background_background":"gradient","background_color":"#F9F9F9","background_color_b":"#F9F9F9","css_classes":" ","margin":{"unit":"px","top":"0","right":0,"bottom":"50","left":0,"isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":0,"bottom":"30","left":0,"isLinked":false},"padding":{"unit":"px","top":"40","right":"0","bottom":"30","left":"0","isLinked":false},"content_width":{"unit":"px","size":1600,"sizes":[]}},"elements":[{"id":"36bb2ce5","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"7fd7218f","elType":"widget","settings":{"wp":{"title":"","list_cats":"men, woman, haircare-woman, makeup-woman, nails-woman, bracelets-woman, earrings-woman, necklaces-woman","number":"0","disp_type":"Horizontal4","parent":"true","root_cat":"","hide_empty":"1","columns_number":"6","columns_number_small":"2","columns_number_tablet":"3","number_vertical":"4","auto_slide":"false","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_product_categories_sc"}],"isInner":false}],"isInner":false},{"id":"5d55f5de","elType":"section","settings":{"content_width":{"unit":"px","size":1600,"sizes":[]},"margin":{"unit":"px","top":"0","right":0,"bottom":"50","left":0,"isLinked":false},"margin_tablet":{"unit":"px","top":"0","right":0,"bottom":"30","left":0,"isLinked":false}},"elements":[{"id":"51ff69c0","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"ec7265b","elType":"widget","settings":{"wp":{"title":"Recommendations","title_font_size":"l","desc":"","alignment":"right","style":"2d-has-bg-none","tabs":{"1657181747813":{"tab_title":"All","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"0","dots":"false","auto_slide":"false","number":"6","auto_delay_time":"6","columns_number":"6","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""},"1657181757364":{"tab_title":"Fruits & Vegetables","type":"top_rate","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"6","auto_delay_time":"6","columns_number":"6","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""},"1657181759194":{"tab_title":"Frozen Seafoods","type":"best_selling","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"6","auto_delay_time":"6","columns_number":"6","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""},"1657181761363":{"tab_title":"Raw Meats","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"6","auto_delay_time":"6","columns_number":"6","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""},"1657181763029":{"tab_title":"Coffes & Teas","type":"featured_product","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"6","auto_delay_time":"6","columns_number":"6","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""}},"el_class":"letter-spacing-none"}},"elements":[],"widgetType":"wp-widget-nasa_products_tabs_sc"}],"isInner":false}],"isInner":false},{"id":"1d6d6d99","elType":"section","settings":{"content_width":{"unit":"px","size":1600,"sizes":[]},"background_background":"classic","background_image":{"id":3100,"url":' . json_encode($imgs_url_src_1) . ',"alt":"","source":"library"},"background_repeat":"no-repeat","background_size":"cover","margin":{"unit":"px","top":"0","right":0,"bottom":"60","left":0,"isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":0,"bottom":"30","left":0,"isLinked":false},"padding_tablet":{"unit":"px","top":"50","right":"0","bottom":"50","left":"0","isLinked":false}},"elements":[{"id":"6b502994","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"3e218854","elType":"widget","settings":{"wp":{"title_shortcode":"","type":"deals","style":"slide_slick_2","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"0","dots":"true","auto_slide":"false","number":"3","auto_delay_time":"6","columns_number":"4","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"3","cat":"","not_in":"","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_products_sc"}],"isInner":false}],"isInner":false},{"id":"8779c10","elType":"section","settings":{"content_width":{"unit":"px","size":1600,"sizes":[]},"margin":{"unit":"px","top":"0","right":0,"bottom":"50","left":0,"isLinked":false},"margin_tablet":{"unit":"px","top":"0","right":0,"bottom":"0","left":0,"isLinked":true},"margin_mobile":{"unit":"px","top":"0","right":0,"bottom":"0","left":0,"isLinked":false}},"elements":[{"id":"273fe56c","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"3f27d884","elType":"widget","settings":{"wp":{"title":"Top Best Selling Items","title_font_size":"l","desc":"","alignment":"right","style":"2d-has-bg-none","tabs":{"1657181747813":{"tab_title":"All","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"0","dots":"false","auto_slide":"false","number":"6","auto_delay_time":"6","columns_number":"6","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""},"1657181757364":{"tab_title":"Fruits & Vegetables","type":"top_rate","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"6","auto_delay_time":"6","columns_number":"6","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""},"1657181759194":{"tab_title":"Milks & Dairies","type":"recent_review","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"6","auto_delay_time":"6","columns_number":"6","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""},"1657181761363":{"tab_title":"Pet Foods","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"6","auto_delay_time":"6","columns_number":"6","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""}},"el_class":"letter-spacing-none"}},"elements":[],"widgetType":"wp-widget-nasa_products_tabs_sc"}],"isInner":false}],"isInner":false},{"id":"77d599b7","elType":"section","settings":{"structure":"30","margin":{"unit":"px","top":"0","right":0,"bottom":"40","left":0,"isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":0,"bottom":"50","left":0,"isLinked":false},"margin_tablet":{"unit":"px","top":"0","right":0,"bottom":"40","left":0,"isLinked":false},"content_width":{"unit":"px","size":1600,"sizes":[]}},"elements":[{"id":"4438b4be","elType":"column","settings":{"_column_size":33,"_inline_size":null},"elements":[{"id":"3d07cf12","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_5 . '","link":"","content_width":"","align":"left","move_x":"7%","valign":"top","text_align":"text-left","content":"<h4 class=\"fs-22 tablet-fs-16 margin-bottom-20 tablet-margin-bottom-10\" style=\"line-height: 1.2\">Fresh\r\nVegetable<\/h4>\r\n<h6 class=\"fs-14 margin-bottom-15 tablet-margin-bottom-10 mobile-margin-bottom-20\" style=\"color: #a9a9a9\">Sale off <span class=\"fs-25 tablet-fs-16 mobile-fs-15\" style=\"color: #ff0000\">25%<\/span><\/h6>\r\n<a class=\"fs-14 tablet-fs-12 mobile-fs-12\" title=\"Shop now\" href=\"#\">Shop now<\/a>","effect_text":"fadeInLeft","data_delay":"200ms","hover":"zoom","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_2_sc"}],"isInner":false},{"id":"38456194","elType":"column","settings":{"_column_size":33,"_inline_size":null},"elements":[{"id":"179e25fc","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_6 . '","link":"","content_width":"","align":"left","move_x":"8%","valign":"top","text_align":"text-left","content":"<h4 class=\"fs-14 margin-top-10 tablet-margin-top-0 margin-bottom-10\" style=\"color: #afaeac\">BEST CHOISE<\/h4>\r\n<h4 class=\"fs-22 tablet-fs-16 margin-top-10 margin-bottom-30 tablet-margin-bottom-0 mobile-margin-bottom-20\" style=\"line-height: 1.2\">Discover\r\nReal Organic Juice<\/h4>\r\n<h6 class=\"fs-14 tablet-fs-10\" style=\"line-height: 1.4;color: #c0c2bd\">ONLY\r\n<span class=\"fs-29 tablet-fs-16 mobile-fs-15\" style=\"color: #ff0000\">$19.00<\/span><\/h6>","effect_text":"fadeInLeft","data_delay":"200ms","hover":"zoom","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_2_sc"}],"isInner":false},{"id":"3f5859f2","elType":"column","settings":{"_column_size":33,"_inline_size":null},"elements":[{"id":"586e582e","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_7 . '","link":"","content_width":"","align":"left","move_x":"9%","valign":"top","text_align":"text-left","content":"<h3 class=\"fs-23 tablet-fs-20 margin-bottom-50 tablet-margin-bottom-10 tablet-margin-top-5 mobile-margin-bottom-25\" style=\"color: #015a02\">Green Fruits\r\nand Vegetables<\/h3>\r\n<h3 class=\"fs-35 tablet-fs-16 mobile-fs-20 margin-bottom-0\" style=\"color: #ff0000\">100%<\/h3>\r\n<h3 class=\"fs-20 margin-top-5\" style=\"color: #015a02\">ORGANIC<\/h3>","effect_text":"fadeInLeft","data_delay":"200ms","hover":"zoom","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_banner_2_sc"}],"isInner":false}],"isInner":false},{"id":"1cc2d290","elType":"section","settings":{"content_width":{"unit":"px","size":1600,"sizes":[]},"structure":"20","margin":{"unit":"px","top":"0","right":0,"bottom":"20","left":0,"isLinked":false},"padding":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":0,"bottom":"0","left":0,"isLinked":false}},"elements":[{"id":"31632545","elType":"column","settings":{"_column_size":50,"_inline_size":25,"padding":{"unit":"px","top":"10","right":"40","bottom":"0","left":"10","isLinked":false},"hide_tablet":"hidden-tablet","hide_mobile":"hidden-mobile"},"elements":[{"id":"7bedd72c","elType":"widget","settings":{"title":"Essential Products","header_size":"h3","typography_typography":"custom","typography_font_size":{"unit":"px","size":29,"sizes":[]},"_margin":{"unit":"px","top":"10","right":"0","bottom":"0","left":"0","isLinked":false},"_css_classes":"margin-bottom-30","title_color":"#333333"},"elements":[],"widgetType":"heading"},{"id":"33db531d","elType":"widget","settings":{"wp":{"img_src":"' . $imgs_8 . '","link":"","content_width":"","align":"left","move_x":"14%","valign":"top","text_align":"text-left","content":"<h4 class=\"fs-30 tablet-fs-22 margin-bottom-20\" style=\"line-height: 1.2;color: #3d3d3d\">Bring nature\r\ninto your home<\/h4>\r\n<h5 class=\"fs-14 margin-bottom-40 nasa-bold-500\" style=\"color: #7f7f7f;line-height: 1.8\">Contrary to popular belief,\r\nLorem Ipsum is not simply random text<\/h5>\r\n<a class=\"primary-color nasa-bold-500 button fs-14 force-radius-5\" style=\"text-transform: none;letter-spacing: 0;padding: 10px 15px\" title=\"Shop now\" href=\"#\">Shop now<\/a>","effect_text":"fadeIn","data_delay":"","hover":"","border_inner":"no","border_outner":"no","hide_in_m":"","el_class":"text-banner-org"}},"elements":[],"widgetType":"wp-widget-nasa_banner_2_sc"}],"isInner":false},{"id":"38908d5b","elType":"column","settings":{"_column_size":50,"_inline_size":75,"_inline_size_tablet":100},"elements":[{"id":"4cc8fb1f","elType":"widget","settings":{"wp":{"title":"","title_font_size":"","desc":"","alignment":"right","style":"2d-no-border","tabs":{"1657181747813":{"tab_title":"Featured","type":"featured_product","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"0","dots":"false","auto_slide":"false","number":"10","auto_delay_time":"6","columns_number":"5","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""},"1657181757364":{"tab_title":"Popular","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"10","auto_delay_time":"6","columns_number":"5","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""},"1657181759194":{"tab_title":"Best Selling","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"10","auto_delay_time":"6","columns_number":"5","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""},"1657181761363":{"tab_title":"Top Rate","type":"stock_desc","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"10","auto_delay_time":"6","columns_number":"5","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""},"1657181763029":{"tab_title":"On Sale","type":"featured_product","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"10","auto_delay_time":"6","columns_number":"5","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""},"1657181764747":{"tab_title":"New Added","type":"recent_product","style":"grid","style_viewmore":"1","style_row":"1","pos_nav":"top","title_align":"left","shop_url":"0","arrows":"1","dots":"false","auto_slide":"false","number":"10","auto_delay_time":"6","columns_number":"5","columns_number_small":"2","columns_number_small_slider":"2","columns_number_tablet":"4","cat":"","not_in":"","el_class":""}},"el_class":"letter-spacing-none"}},"elements":[],"widgetType":"wp-widget-nasa_products_tabs_sc"}],"isInner":false}],"isInner":false},{"id":"18ed6a14","elType":"section","settings":{"margin":{"unit":"px","top":"0","right":0,"bottom":"30","left":0,"isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":0,"bottom":"0","left":0,"isLinked":false},"margin_tablet":{"unit":"px","top":"50","right":0,"bottom":"50","left":0,"isLinked":false},"content_width":{"unit":"px","size":1600,"sizes":[]}},"elements":[{"id":"79d8e23","elType":"column","settings":{"_column_size":100,"_inline_size":null},"elements":[{"id":"24480df3","elType":"widget","settings":{"title":"Latest blog","header_size":"h3","align":"center","title_color":"#000000","typography_typography":"custom","typography_font_weight":"800","_css_classes":"margin-bottom-10"},"elements":[],"widgetType":"heading"},{"id":"4bd87a2","elType":"widget","settings":{"wp":{"title":"","content":"<p class=\"nasa-title-desc text-center margin-bottom-0\">The freshest and most exctings news<\/p>"},"_margin":{"unit":"px","top":"0","right":"0","bottom":"10","left":"0","isLinked":false}},"elements":[],"widgetType":"wp-widget-custom_html"},{"id":"1a6b9911","elType":"widget","settings":{"wp":{"title":"","title_desc":"","show_type":"slide","auto_slide":"false","arrows":"1","dots":"true","posts":"8","columns_number":"4","columns_number_small":"1","columns_number_small_slider":"1","columns_number_tablet":"2","category":"","cats_enable":"yes","date_enable":"yes","author_enable":"yes","readmore":"no","date_author":"bot","des_enable":"no","page_blogs":"no","info_align":"left","el_class":""}},"elements":[],"widgetType":"wp-widget-nasa_post_sc"}],"isInner":false}],"isInner":false},{"id":"35b6b07e","elType":"section","settings":{"content_width":{"unit":"px","size":1600,"sizes":[]},"structure":"30","background_background":"classic","background_image":{"id":3319,"url":' . json_encode($imgs_url_src_2) . ',"alt":"","source":"library"},"background_size":"cover","margin":{"unit":"px","top":"0","right":0,"bottom":"60","left":0,"isLinked":false},"padding":{"unit":"px","top":"20","right":"50","bottom":"20","left":"50","isLinked":false},"background_position_tablet":"center right","background_position_mobile":"center center","background_repeat_tablet":"no-repeat","background_size_tablet":"cover","background_size_mobile":"cover","background_bg_width":{"unit":"px","size":100,"sizes":[]},"padding_tablet":{"unit":"px","top":"50","right":"0","bottom":"40","left":"50","isLinked":false},"padding_mobile":{"unit":"px","top":"40","right":"15","bottom":"30","left":"15","isLinked":false},"margin_tablet":{"unit":"px","top":"0","right":0,"bottom":"80","left":0,"isLinked":false},"margin_mobile":{"unit":"px","top":"0","right":0,"bottom":"50","left":0,"isLinked":false}},"elements":[{"id":"661d4e59","elType":"column","settings":{"_column_size":33,"_inline_size":28.809,"content_position":"center","_inline_size_tablet":100},"elements":[{"id":"f8f04bf","elType":"widget","settings":{"html":"<h3 class=\"fs-25\" style=\"margin: 0; white-space: nowrap;\"><i class=\"icon-nasa-icons-12\"><\/i> Sign up to Newsletter<\/h3>","_margin_mobile":{"unit":"px","top":"0","right":"0","bottom":"10","left":"0","isLinked":false}},"elements":[],"widgetType":"html"}],"isInner":false},{"id":"3f1e9bc2","elType":"column","settings":{"_column_size":33,"_inline_size":30.517,"content_position":"center","_inline_size_tablet":100},"elements":[{"id":"4f6a99dc","elType":"widget","settings":{"wp":{"title":"","content":"<h5 class=\"fs-15\" style=\"color: #666; margin: 0; white-space: nowrap;\">\u2026and receive $10 coupon for first shopping<\/h5>"}},"elements":[],"widgetType":"wp-widget-custom_html"}],"isInner":false},{"id":"66727177","elType":"column","settings":{"_column_size":33,"_inline_size":40.007,"content_position":"center","_inline_size_tablet":60},"elements":[{"id":"6e4bedf4","elType":"widget","settings":{"shortcode":"[contact-form-7 id=\"210\" title=\"Elessi Newsletter Footer\"]","_css_classes":"organic-style-wrap"},"elements":[],"widgetType":"shortcode"}],"isInner":false}],"isInner":false}]',
            '_elementor_controls_usage' => '',
            '_elementor_css' => 'a:6:{s:4:"time";i:1639650069;s:5:"fonts";a:1:{i:0;s:4:"Jost";}s:5:"icons";a:0:{}s:20:"dynamic_elements_ids";a:0:{}s:6:"status";s:4:"file";i:0;s:0:"";}',
            
            // '_nasa_custom_header' => '6',
            // '_nasa_plus_wide_option' => '1',
            // '_nasa_plus_wide_width' => '400',
            // '_nasa_pri_color_flag' => 'on',
            // '_nasa_pri_color' => '#6bad0d',
        ),
        
        'globals' => array(
            'header-type' => '6',
            
            'fixed_nav' => '0',
            
            'plus_wide_width' => '400',
            'color_primary' => '#6bad0d',
            
            // 'bg_color_topbar' => '28aeb1',
            // 'text_color_topbar' => '#ffffff',
            
            // 'fullwidth_main_menu' => '1',
            
            // 'bg_color_main_menu' => '#e4272c',
            // 'text_color_main_menu' => '#ffffff',
            
            // 'bg_color_v_menu' => '#000000',
            // 'text_color_v_menu' => '#ffffff',
            
            'footer_mode' => 'builder-e',
            'footer_elm' => elessi_elm_fid_by_slug('hfe-footer-light-3'),
            'footer_elm_mobile' => elessi_elm_fid_by_slug('hfe-footer-mobile'),
            
            // 'category_sidebar' => 'right-classic',
            
            // 'product_detail_layout' => 'classic',
            'product_image_layout' => 'single',
            // 'product_image_style' => 'slide',
            // 'single_product_layout_bg' => '#f6f6f6',
            // 'tab_style_info' => '2d-no-border',
            
            // 'single_product_thumbs_style' => 'hoz',
            
            'loop_layout_buttons' => 'modern-1',
            
            'animated_products' => 'hover-zoom',
            
            'nasa_attr_image_style' => 'square',
            // 'nasa_attr_image_single_style' => 'extends',
            // 'nasa_attr_color_style' => 'round',
            // 'nasa_attr_label_style' => 'round',
            
            // 'breadcrumb_row' => 'single',
            // 'breadcrumb_type' => 'default',
            // 'breadcrumb_bg_color' => '#f8f8f8',
            // 'breadcrumb_align' => 'text-left',
            // 'breadcrumb_height' => '60',
        ),
        
        'css' => ''
    );
    
    /* if (function_exists('hfe_init')) {
        if (isset($result['post_meta']['_nasa_footer_build_in'])) {
            unset($result['post_meta']['_nasa_footer_build_in']);
            unset($result['post_meta']['_nasa_footer_build_in_mobile']);
        }
        
        $result['post_meta']['_nasa_footer_mode'] = 'builder-e';
        $result['post_meta']['_nasa_footer_builder_e'] = elessi_elm_fid_by_slug('hfe-footer-light-3');
        $result['post_meta']['_nasa_footer_builder_e_mobile'] = elessi_elm_fid_by_slug('hfe-footer-light-3');
    } */
    
    return $result;
}
