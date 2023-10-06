<?php
$close = NASA_WOO_ACTIVED ? is_product() : false;
$is_close = apply_filters('nasa_close_mobile_bottom_bar', $close);

if (!$is_close) :
    $is_store = false;
    
    if (NASA_WOO_ACTIVED) :
        $is_product_taxonomy = is_product_taxonomy();
        $is_shop = is_shop();
        $is_store = $is_product_taxonomy || $is_shop ? true : false;
    endif;
    
    $shop_link = !$is_store && NASA_WOO_ACTIVED ? wc_get_page_permalink('shop') : home_url('/');
    $class_shop = 'nasa-bot-icons';
    $class_shop .= !$is_store ? ' nasa-bot-icon-shop' : ' nasa-bot-icon-home';
    
    $svg_shop = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="nasa-svg-shop" height="26px" width="26px" viewBox="0 -70 700 700">
    <g>
     <path d="m341.22 17.504v139.97h17.504v-139.97z"></path>
     <path d="m236.32 16.406-17.504 140.04 17.375 2.1289 17.504-139.97z"></path>
     <path d="m463.68 16.406-17.375 2.1953 17.504 139.97 17.375-2.1328z"></path>
     <path d="m131.23 209.99v262.5s-0.11328 14.953 7.4922 30.164c7.6055 15.211 23.145 31.07 53.805 31.07h314.95s14.953 0.17969 30.164-7.4297c15.211-7.6055 31.133-23.34 31.133-53.805v-262.5h-17.504v262.5c0 22.113-10.406 32.59-21.445 38.109-11.039 5.5195-22.348 5.6836-22.348 5.6836h-314.95c-21.883 0-32.656-10.406-38.172-21.445-5.5234-11.039-5.6211-22.348-5.6211-22.348v-262.5z"></path>
     <path d="m315 332.52c-30.566 0-46.133 15.855-53.738 31.07-7.6094 15.211-7.4961 30.164-7.4961 30.164v131.25h17.504v-131.25s0.10156-11.312 5.6211-22.348c5.5195-11.039 16.07-21.379 38.109-21.379h70.016s11.312 0.097656 22.348 5.6211c11.039 5.5195 21.379 16.09 21.379 38.109l0.003907 131.25h17.504v-131.25c0-30.438-15.855-46.133-31.07-53.738-15.211-7.6094-30.164-7.4961-30.164-7.4961z"></path>
     <path d="m140.04 8.7461c-4.0352-0.015625-7.5586 2.7344-8.5273 6.6523l-35.008 140.04c-0.16797 0.67578-0.25391 1.3711-0.25781 2.0664 0 38.555 31.461 70.016 70.016 70.016 30.348 0 52.508-19.164 61.234-36.082 8.7773 16.816 30.941 36.082 61.297 36.082 30.348 0 52.477-19.324 61.168-36.082 8.8086 16.91 30.941 36.082 61.297 36.082s52.512-19.348 61.297-36.082c8.7148 16.891 30.887 36.082 61.234 36.082 38.555 0 69.953-31.461 69.953-70.016-0.003906-0.69531-0.089844-1.3906-0.25781-2.0664l-34.945-140.04c-0.96875-3.918-4.4883-6.668-8.5273-6.6523zm6.8477 17.504h406.28l32.941 131.64c-0.24609 28.883-23.375 52.125-52.32 52.125-29.098 0-52.512-23.414-52.512-52.512 0-11.668-17.504-11.668-17.504 0 0 29.098-23.414 52.512-52.512 52.512s-52.512-23.414-52.512-52.512c0-11.668-17.504-11.668-17.504 0 0 29.098-23.352 52.512-52.449 52.512-29.098 0-52.512-23.414-52.512-52.512-0.007812-11.664-17.512-11.664-17.504 0 0 29.098-23.414 52.512-52.512 52.512-28.941 0-52.07-23.246-52.32-52.125z"></path>
    </g>
   </svg>';
    $icon_home = apply_filters('nasa_bot_icon_home', (!$is_store ? $svg_shop : '<i class="nasa-icon pe-7s-home"></i>'));
    $icon_filter = apply_filters('nasa_bot_icon_filter', '<i class="nasa-icon pe-7s-filter"></i>');
    $icon_cats = apply_filters('nasa_bot_icon_filter_cats', '<i class="nasa-icon pe-7s-keypad"></i>');
    
    $login_ajax = !NASA_CORE_USER_LOGGED && (!isset($nasa_opt['login_ajax']) || $nasa_opt['login_ajax'] == 1) ? '1' : '0';
    $links_acc = elessi_link_account();
    $icon_acc = apply_filters('nasa_bot_icon_account', '<i class="nasa-icon pe7-icon pe-7s-user"></i>');
    ?>

    <ul class="nasa-bottom-bar-icons">
        <li class="nasa-bot-item">
            <a class="<?php echo esc_attr($class_shop); ?>" href="<?php echo esc_url($shop_link); ?>" title="<?php echo !$is_store ? esc_attr__('Shop', 'elessi-theme') : esc_attr__('Home', 'elessi-theme'); ?>">
                <?php echo $icon_home; ?>
                <?php echo !$is_store ? esc_html__('Shop', 'elessi-theme') : esc_html__('Home', 'elessi-theme'); ?>
            </a>
        </li>

        <li class="nasa-bot-item nasa-bot-item-sidebar hidden-tag">
            <a class="nasa-bot-icons nasa-bot-icon-sidebar" href="javascript:void(0);" title="<?php echo esc_attr__('Filters', 'elessi-theme'); ?>" rel="nofollow">
                <?php echo $icon_filter; ?>
                <?php echo esc_html__('Filters', 'elessi-theme'); ?>
            </a>
        </li>
        
        <?php if (NASA_WOO_ACTIVED) : ?>
            <li class="nasa-bot-item">
                <a class="nasa-bot-icons nasa-bot-icon-categories filter-cat-icon-mobile" href="javascript:void(0);" title="<?php echo esc_attr__('Categories', 'elessi-theme'); ?>" rel="nofollow">
                    <?php echo $icon_cats; ?>
                    <?php echo esc_html__('Categories', 'elessi-theme'); ?>
                </a>
            </li>
        <?php endif; ?>

        <li class="nasa-bot-item nasa-bot-item-acc">
            <a class="nasa-bot-icons nasa-bot-icon-acc botbar-mobile-acc nasa-login-register-ajax" data-enable="<?php echo $login_ajax; ?>" href="<?php echo esc_url($links_acc); ?>" title="<?php echo esc_attr__('Account', 'elessi-theme'); ?>" rel="nofollow">
                <?php echo $icon_acc; ?>
                <?php echo esc_html__('Account', 'elessi-theme'); ?>
            </a>
        </li>

        <?php
        /**
         * Wishlist bottom bar
         */
        $wishlist_icons = elessi_icon_wishlist();
        
        if ($wishlist_icons) :
            ?>
            <li class="nasa-bot-item item-other hidden-tag">
                <a class="nasa-bot-icons nasa-bot-icon-wishlist botbar-wishlist-link" href="javascript:void(0);" title="<?php echo esc_attr__('Wishlist', 'elessi-theme'); ?>" rel="nofollow">
                    <i class="nasa-icon wishlist-icon icon-nasa-like"></i>
                    <?php echo esc_html__('Wishlist', 'elessi-theme'); ?>
                </a>
                <?php echo $wishlist_icons; ?>
            </li>

        <?php else:

            /**
             * Cart bottom bar If Has Not Wishlist Featured
             */
            $is_cart = !NASA_WOO_ACTIVED || (isset($nasa_opt['disable-cart']) && $nasa_opt['disable-cart']) ? false : true;

            if ($is_cart) :
                $icon_class = elessi_mini_cart_icon();
                ?>
                <li class="nasa-bot-item item-other hidden-tag">
                    <a class="nasa-bot-icons nasa-bot-icon-cart botbar-cart-link" href="javascript:void(0);" title="<?php echo esc_attr__('Cart', 'elessi-theme'); ?>" rel="nofollow">
                        <i class="nasa-icon <?php echo $icon_class; ?>"></i>
                        <?php echo esc_html__('Cart', 'elessi-theme'); ?>
                    </a>
                </li>
            <?php endif; ?>
            
        <?php endif; ?>
    </ul>

<?php
endif;