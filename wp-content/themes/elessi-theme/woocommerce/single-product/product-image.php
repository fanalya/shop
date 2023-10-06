<?php
/**
 * Custom Product image
 *
 * @author  NasaTheme
 * @package Elessi-theme/WooCommerce
 * @version 7.8.0
 */
if (!defined('ABSPATH')) :
    exit; // Exit if accessed directly
endif;

global $product, $nasa_opt;

$product_id = $product->get_id();
$post_thumbnail_id = $product->get_image_id();

$attachment_ids = $product->get_gallery_image_ids();
$data_rel = '';

$image_size = apply_filters('woocommerce_gallery_image_size', 'woocommerce_single');
$full_size = apply_filters('woocommerce_gallery_full_size', apply_filters('woocommerce_product_thumbnails_large_size', 'full'));

$image_title = esc_attr(get_the_title($post_thumbnail_id));
$alt_text = trim(wp_strip_all_tags(get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true)));

$image_full = wp_get_attachment_image_src($post_thumbnail_id, $full_size);
$image_link = isset($image_full[0]) ? $image_full[0] : wp_get_attachment_url($post_thumbnail_id);
$image_large = wp_get_attachment_image_src($post_thumbnail_id, $image_size);
$src_large = isset($image_large[0]) ? $image_large[0] : $image_link;

$image = wp_get_attachment_image(
    $post_thumbnail_id,
    $image_size,
    false,
    apply_filters(
        'woocommerce_gallery_image_html_attachment_image_params',
        array(
            'title'                   => _wp_specialchars(get_post_field('post_title', $post_thumbnail_id), ENT_QUOTES, 'UTF-8', true),
            'alt'                     => $alt_text,
            'data-caption'            => _wp_specialchars(get_post_field('post_excerpt', $post_thumbnail_id), ENT_QUOTES, 'UTF-8', true),
            'data-src'                => esc_url($image_full[0]),
            'data-large_image'        => esc_url($image_full[0]),
            'data-large_image_width'  => esc_attr($image_full[1]),
            'data-large_image_height' => esc_attr($image_full[2]),
            'class'                   => 'wp-post-image skip-lazy attachment-shop_single size-shop_single',
        ),
        $post_thumbnail_id,
        $image_size,
        true
    )
);

$attachment_count = count($attachment_ids);

$slideHoz = false;
if (isset($nasa_opt['product_detail_layout']) && $nasa_opt['product_detail_layout'] === 'classic' && isset($nasa_opt['product_thumbs_style']) && $nasa_opt['product_thumbs_style'] === 'hoz') :
    $slideHoz = true; 
endif;

if (in_array($nasa_opt['product_detail_layout'], array('modern-1'))) :
    $slideHoz = true;
endif;

$imageMobilePadding = 'mobile-padding-left-5 mobile-padding-right-5';
if (isset($nasa_opt['product_detail_layout']) && $nasa_opt['product_detail_layout'] == 'new' && isset($nasa_opt['product_image_style']) && $nasa_opt['product_image_style'] == 'scroll') :
    $imageMobilePadding = 'mobile-padding-left-0 mobile-padding-right-0 nasa-flex align-start';
endif;

$class_main_imgs = 'main-images nasa-single-product-main-image nasa-main-image-default';

$class_wrapimg = 'row nasa-mobile-row woocommerce-product-gallery__wrapper';

$show_thumbnail = true;
if (isset($nasa_opt['product_detail_layout']) && in_array($nasa_opt['product_detail_layout'], array('full'))) :
    $show_thumbnail = false;
    $class_wrapimg = 'nasa-row nasa-mobile-row woocommerce-product-gallery__wrapper nasa-columns-padding-0';
    $imageMobilePadding = 'mobile-padding-left-0 mobile-padding-right-0';
    
    if (isset($nasa_opt['half_full_slide']) && $nasa_opt['half_full_slide']) :
        $class_main_imgs .= ' no-easyzoom';
    endif;
endif;

$sliders_arrow = isset($nasa_opt['product_slide_arrows']) && $nasa_opt['product_slide_arrows'] && $nasa_opt['product_image_style'] === 'slide' ? true : false;

$in_mobile = isset($nasa_opt['nasa_in_mobile']) && $nasa_opt['nasa_in_mobile'] ? true : false;
$mobile_app = $in_mobile && isset($nasa_opt['mobile_layout']) && $nasa_opt['mobile_layout'] == 'app' ? true : false;

$wrapper_classes = apply_filters(
    'woocommerce_single_product_image_gallery_classes',
    array(
        'woocommerce-product-gallery',
        'woocommerce-product-gallery--' . ($post_thumbnail_id ? 'with-images' : 'without-images'),
        'images',
    )
);
?>

<div class="<?php echo esc_attr(implode(' ', array_map('sanitize_html_class', $wrapper_classes))); ?>">
    <div class="<?php echo esc_attr($class_wrapimg); ?>">
        <div class="large-12 columns <?php echo $imageMobilePadding; ?>">
            
            <?php if ($show_thumbnail && !$slideHoz && !$in_mobile) : ?>
                <div class="nasa-thumb-wrap rtl-right">
                    <?php do_action('woocommerce_product_thumbnails'); ?>
                </div>
            <?php endif; ?>
            
            <div class="nasa-main-wrap rtl-left<?php echo $slideHoz ? ' nasa-thumbnail-hoz' : ''; ?>">
                <div class="product-images-slider images-popups-gallery">
                    <div class="nasa-main-image-default-wrap">
                        <?php if ($mobile_app && $attachment_count) : ?>
                            <div class="ns-img-count nasa-flex jc fs-13">
                                <span class ="ns-img-now">1</span>/<span class ="ns-img-total">
                                    <?php echo $attachment_count + 1; ?>
                                </span>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($sliders_arrow) : ?>
                            <div class="nasa-single-slider-arrows">
                                <a class="nasa-single-arrow nasa-disabled" data-action="prev" href="javascript:void(0);" rel="nofollow"></a>
                                <a class="nasa-single-arrow" data-action="next" href="javascript:void(0);" rel="nofollow"></a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="<?php echo esc_attr($class_main_imgs); ?>">
                            <div class="item-wrap first" >
                                <div class="nasa-item-main-image-wrap" data-key="0">
                                    <?php if ($post_thumbnail_id) : ?>
                                        <div class="easyzoom first">
                                            <?php
                                            echo apply_filters(
                                                'woocommerce_single_product_image_thumbnail_html',
                                                sprintf(
                                                    '<a href="%s" class="woocommerce-main-image product-image woocommerce-product-gallery__image" data-o_href="%s" data-full_href="%s" title="%s">%s</a>',
                                                    $image_link,
                                                    $src_large,
                                                    $image_link,
                                                    $image_title,
                                                    $image
                                                ),
                                                $post_thumbnail_id
                                            );
                                            ?>
                                        </div>
                                    <?php else : ?>
                                        <div class="easyzoom">
                                            <?php echo apply_filters(
                                                'woocommerce_single_product_image_thumbnail_html',
                                                sprintf(
                                                    '<div class="woocommerce-product-gallery__image--placeholder"><img src="%s" alt="%s" class="wp-post-image" /></div>',
                                                        esc_url(wc_placeholder_img_src('woocommerce_single')),
                                                        esc_html__('Awaiting product image', 'elessi-theme')
                                                    ),
                                                $post_thumbnail_id
                                            ); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                            $_i = 0;
                            if ($attachment_count > 0) :
                                foreach ($attachment_ids as $attachment_id) :
                                    $_i++;
                                    ?>
                                    <div class="item-wrap" >
                                        <div class="nasa-item-main-image-wrap" data-key="<?php echo (int) $_i; ?>">
                                            <div class="easyzoom">
                                                <?php
                                                $image_title = esc_attr(get_the_title($attachment_id));
                                                $alt_text = trim(wp_strip_all_tags(get_post_meta($attachment_id, '_wp_attachment_image_alt', true)));
                                                
                                                $image_full = wp_get_attachment_image_src($attachment_id, $full_size);
                                                $image_link = isset($image_full[0]) ? $image_full[0] : wp_get_attachment_url($attachment_id);
                                                
                                                $image = wp_get_attachment_image(
                                                    $attachment_id,
                                                    $image_size,
                                                    false,
                                                    apply_filters(
                                                        'woocommerce_gallery_image_html_attachment_image_params',
                                                        array(
                                                            'title'                   => _wp_specialchars(get_post_field('post_title', $attachment_id), ENT_QUOTES, 'UTF-8', true),
                                                            'alt'                     => $alt_text,
                                                            'data-caption'            => _wp_specialchars(get_post_field('post_excerpt', $attachment_id), ENT_QUOTES, 'UTF-8', true),
                                                            'data-src'                => esc_url($image_full[0]),
                                                            'data-large_image'        => esc_url($image_full[0]),
                                                            'data-large_image_width'  => esc_attr($image_full[1]),
                                                            'data-large_image_height' => esc_attr($image_full[2]),
                                                            'class'                   => 'skip-lazy attachment-shop_single size-shop_single',
                                                        ),
                                                        $post_thumbnail_id,
                                                        $image_size,
                                                        false
                                                    )
                                                );
                                                
                                                $image = $image ? $image : wc_placeholder_img('woocommerce_single');
                                                
                                                echo sprintf(
                                                    '<a href="%s" class="woocommerce-additional-image product-image" title="%s">%s</a>',
                                                    $image_link,
                                                    $image_title,
                                                    $image
                                                );
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>

                    <div class="product-image-btn">
                        <?php do_action('nasa_single_buttons'); ?>
                    </div>
                </div>
                
                <div class="nasa-end-scroll"></div>
            </div>
            
            <?php if ($show_thumbnail && $slideHoz) : ?>
                <div class="nasa-thumb-wrap nasa-thumbnail-hoz">
                    <?php do_action('woocommerce_product_thumbnails'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
