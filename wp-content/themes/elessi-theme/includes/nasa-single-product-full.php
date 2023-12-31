<?php
if (!isset($nasa_opt)) :
    global $nasa_opt;
endif;

global $product;

$dots = isset($nasa_opt['product_slide_dot']) && $nasa_opt['product_slide_dot'] ? 'true' : 'false';
$auto = isset($nasa_opt['product_slide_auto']) && $nasa_opt['product_slide_auto'] ? 'true' : 'false';

$num_main = apply_filters('nasa_number_main_single_product_gallery_full', 3);

$half_item = isset($nasa_opt['half_full_slide']) && $nasa_opt['half_full_slide'] ? true : false;

$main_attrs_values = array(
    'class="' . esc_attr($main_class) . ' padding-left-0 padding-right-0"',
    'data-num_main="' . ((int) $num_main) . '"',
    'data-num_thumb="0"',
    'data-speed="300"',
    'data-dots="' . $dots . '"',
    'data-autoplay="' . esc_attr($auto) . '"',
);

if ($half_item) :
    $main_attrs_values[] = 'data-padding="10%"';
    $main_attrs_values[] = 'data-padding_small="15%"';
endif;

$main_attrs = apply_filters('nasa_single_product_full_slide_attrs', $main_attrs_values);

$info_class = 'large-12 columns summary entry-summary product-info';

if (!isset($nasa_opt['full_info_col']) || $nasa_opt['full_info_col'] != 2) :
    $info_class .= ' text-center';
endif;
?>

<div id="product-<?php echo (int) $product->get_id(); ?>" <?php post_class(); ?>>
    <?php if ($nasa_actsidebar && $nasa_sidebar != 'no') : ?>
        <div class="nasa-toggle-layout-side-sidebar nasa-sidebar-single-product <?php echo esc_attr($nasa_sidebar); ?>">
            <div class="li-toggle-sidebar">
                <a class="toggle-sidebar-shop" href="javascript:void(0);" rel="nofollow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="26px" height="24px" fill="currentColor"><path d="M 4 7 L 4 9 L 28 9 L 28 7 Z M 4 15 L 4 17 L 28 17 L 28 15 Z M 4 23 L 4 25 L 28 25 L 28 23 Z"></path></svg>
                </a>
            </div>
        </div>
    <?php endif; ?>
    
    <div class="nasa-product-details-page modern nasa-layout-full padding-top-10">
        <div<?php echo !empty($main_attrs) ? ' ' . implode(' ', $main_attrs) : ''; ?>>
            <div class="nasa-row row-fullwidth">
                <div class="large-12 columns product-gallery nasa-gallery-full">
                    <?php do_action('woocommerce_before_single_product_summary'); ?>
                </div>
            </div>

            <div class="row">
                <div class="<?php echo esc_attr($info_class); ?>">
                    <div class="nasa-product-info-wrap">
                        <?php do_action('woocommerce_single_product_summary'); ?>
                    </div>
                </div>
            </div>
            
            <?php do_action('woocommerce_after_single_product_summary'); ?>
        </div>

        <?php if ($nasa_actsidebar && $nasa_sidebar != 'no') : ?>
            <div class="<?php echo esc_attr($bar_class); ?>">     
                <a href="javascript:void(0);" title="<?php echo esc_attr__('Close', 'elessi-theme'); ?>" class="hidden-tag nasa-close-sidebar" rel="nofollow">
                    <?php echo esc_html__('Close', 'elessi-theme'); ?>
                </a>
                
                <div class="nasa-sidebar-off-canvas">
                    <?php dynamic_sidebar('product-sidebar'); ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
    
    <div class="nasa-clear-both"></div>
</div>
