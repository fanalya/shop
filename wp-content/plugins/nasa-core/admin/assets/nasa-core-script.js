jQuery(document).ready(function ($) {
    'use strict';
    if (typeof wp === 'undefined') {
        var wp = window.wp;
    }
    
    $('body').on('nasa_admin_init_select2', function() {
        if ($('select.nasa-ad-select-2:not(.nasa-inited)').length) {
            $('select.nasa-ad-select-2:not(.nasa-inited)').each(function() {
                $(this).addClass('nasa-inited');
                $(this).select2();
            });
        }
    });
    
    if ($('select.nasa-ad-select-2:not(.nasa-inited)').length) {
        $('body').trigger('nasa_admin_init_select2');
    }
    
    $('body').on('click', '.nasa-clear-variations-cache', function() {
        var _this = $(this);
        var _ok = $(_this).attr('data-ok');
        var _miss = $(_this).attr('data-miss');
        var _fail = $(_this).attr('data-fail');
        if(!$(_this).hasClass('nasa-disable')) {
            $(_this).addClass('nasa-disable');
            $.ajax({
                url: ajax_admin_nasa_core,
                type: 'get',
                dataType: 'html',
                data: {
                    action: 'nasa_clear_all_cache'
                },
                beforeSend: function() {
                    if($('.nasa-admin-loader').length) {
                        $('.nasa-admin-loader').show();
                    }
                },
                success: function(res){
                    $(_this).removeClass('nasa-disable');
                    if($('.nasa-admin-loader').length) {
                        $('.nasa-admin-loader').hide();
                    }
                    
                    if(res === 'ok') {
                        alert(_ok);
                    } else {
                        alert(_miss);
                    }
                },
                error: function () {
                    $(_this).removeClass('nasa-disable');
                    if($('.nasa-admin-loader').length) {
                        $('.nasa-admin-loader').hide();
                    }
                    
                    alert(_fail);
                }
            });
        }
    });
    
    $('body').on('click', '.nasa-clear-fake-sold-cache', function() {
        var _this = $(this);
        var _ok = $(_this).attr('data-ok');
        var _miss = $(_this).attr('data-miss');
        var _fail = $(_this).attr('data-fail');
        if(!$(_this).hasClass('nasa-disable')) {
            $(_this).addClass('nasa-disable');
            $.ajax({
                url: ajax_admin_nasa_core,
                type: 'get',
                dataType: 'html',
                data: {
                    action: 'nasa_clear_fake_sold'
                },
                beforeSend: function() {
                    if($('.nasa-admin-loader').length) {
                        $('.nasa-admin-loader').show();
                    }
                },
                success: function(res){
                    $(_this).removeClass('nasa-disable');
                    if($('.nasa-admin-loader').length) {
                        $('.nasa-admin-loader').hide();
                    }
                    
                    if(res === 'ok') {
                        alert(_ok);
                    } else {
                        alert(_miss);
                    }
                },
                error: function () {
                    $(_this).removeClass('nasa-disable');
                    if($('.nasa-admin-loader').length) {
                        $('.nasa-admin-loader').hide();
                    }
                    
                    alert(_fail);
                }
            });
        }
    });
    
    if ($('.term-parent-wrap select[name="parent"]').val() === '-1') {
        $('.nasa-term-root').show();
        if ($('.nasa-term-root select').length) {
            $('.nasa-term-root select').each(function () {
                var _val = $(this).val();
                var _name = $(this).attr('name');
                $('.nasa-term-root-child.' + _name).hide();
                if (_val) {
                    $('.nasa-term-root-child.nasa-term-' + _name + '-' + _val).show();
                }
            });
        }
    } else {
        $('.nasa-term-root, .nasa-term-root-child').hide();
    }

    $('body').on('change', '.term-parent-wrap select[name="parent"]', function() {
        var _val = $(this).val();
        if(_val === '-1') {
            $('.nasa-term-root').show();
            
            if ($('.nasa-term-root select').length) {
                $('.nasa-term-root select').each(function () {
                    var _val = $(this).val();
                    var _name = $(this).attr('name');
                    
                    $('.nasa-term-root-child.' + _name).hide();
                    if (_val) {
                        $('.nasa-term-root-child.nasa-term-' + _name + '-' + _val).show();
                    }
                });
            }
        } else {
            $('.nasa-term-root, .nasa-term-root-child').hide();
        }
    });
    
    $('body').on('change', '.nasa-term-root select', function() {
        var _val = $(this).val();
        var _name = $(this).attr('name');

        $('.nasa-term-root-child.' + _name).hide();
        if (_val) {
            $('.nasa-term-root-child.nasa-term-' + _name + '-' + _val).show();
        }
    });
    
    if ($('.nasa-select-main').length) {
        $('.nasa-select-main').each(function() {
            var _this = $(this);
            var _panel = $(_this).parents('.woocommerce_options_panel');
            var _selected = $(_this).val();
            
            $(_panel).find('.nasa-select-child').parents('.form-field').hide();
            $(_panel).find('.nasa-v-' + _selected).parents('.form-field').show();
        });
        
        $('body').on('change', '.nasa-select-main', function() {
            var _this = $(this);
            var _panel = $(_this).parents('.woocommerce_options_panel');
            var _selected = $(_this).val();
            
            $(_panel).find('.nasa-select-child').parents('.form-field').hide();
            $(_panel).find('.nasa-v-' + _selected).parents('.form-field').show();
        });
    }
    
    /**
     * Add Gallery
     * 
     * @param {type} $
     * @returns {undefined}
     */
    $('body').on('click', '.nasa-add-gallery', function(event) {
        var _this = $(this);

        event.preventDefault();

        var _wrap = $(_this).parents('.nasa-gallery-wrapper');
        var $image_gallery_ids = $(_wrap).find('.nasa-gallery-images-input');
        var $product_images = $(_wrap).find('.nasa-gallery-images-list');
        
        var product_gallery_frame;

        // If the media frame already exists, reopen it.
        if (product_gallery_frame) {
            product_gallery_frame.open();
            return;
        }

        // Create the media frame.
        product_gallery_frame = wp.media.frames.product_gallery = wp.media({
            // Set the title of the modal.
            title: $(_this).data('choose'),
            button: {
                text: $(_this).data('update')
            },
            states: [
                new wp.media.controller.Library({
                    title: $(_this).data('choose'),
                    filterable: 'all',
                    multiple: true
                })
            ]
        });

        // When an image is selected, run a callback.
        product_gallery_frame.on('select', function () {
            var selection = product_gallery_frame.state().get('selection');
            var attachment_ids = $image_gallery_ids.val();

            selection.map(function (attachment) {
                attachment = attachment.toJSON();

                if (attachment.id) {
                    attachment_ids = attachment_ids ? attachment_ids + ',' + attachment.id : attachment.id;
                    var attachment_image = attachment.sizes && attachment.sizes.thumbnail ? attachment.sizes.thumbnail.url : attachment.url;

                    $product_images.append('<li class="image" data-attachment_id="' + attachment.id + '"><img src="' + attachment_image + '" /><ul class="actions"><li><a href="javascript:void(0);" class="delete">' + $(_this).data('text') + '</a></li></ul></li>');
                }
            });

            $image_gallery_ids.val(attachment_ids);
        });

        // Finally, open the modal.
        product_gallery_frame.open();
    });
    
    // Remove Image from Gallery
    $('body').on('click', '.nasa-gallery-images-list .actions a.delete', function () {
        var _this = $(this);
        
        var _wrap = $(_this).parents('.nasa-gallery-wrapper');
        var _list = $(_this).parents('.nasa-gallery-images-list');
        $(_this).parents('li.image').remove();

        var attachment_ids = '';

        $(_list).find('li.image').each(function () {
            var attachment_id = $(this).attr('data-attachment_id');
            attachment_ids = attachment_ids + attachment_id + ',';
        });

        $(_wrap).find('.nasa-gallery-images-input').val(attachment_ids);
        
        return false;
    });
    
    /**
     * Sort by drag and drop
     * 
     * @param {type} $
     * @returns {undefined}
     */
    nasa_gallery_images($);
    
    /**
     * Bulk Discounts
     * 
     * @param {type} $
     * @returns {undefined}
     */
    $('body').on('click', '.nasa-add-bulk-dsct', function() {
        var _tmp = $(this).find('template').html();
        
        var _list = $(this).parents('.nasa-bulk-dsct-wrapper').find('.nasa-bulk-dsct-list');
        $(_list).append(_tmp);
        
        nasa_rename_bulk_dsct($, _list);
    });
    
    $('body').on('click', '.nasa-rm-bulk-dsct', function() {
        var _this = $(this);
        var _root = $(_this).parents('.nasa-bulk-dsct-wrapper');
        var _cft = $(_this).attr('data-confirm');
        if (confirm(_cft)) {
            $(_this).parents('.nasa-bulk-dsct-item').remove();
            var _list = $(_root).find('.nasa-bulk-dsct-list');
            nasa_rename_bulk_dsct($, _list);
            
            $('body').trigger('nasa_render_bulk_value', [_root]);
        }
        
        else {
            return false;
        }
    });
    
    $('body').on('change', '.nasa-bulk-dsct-item input', function() {
        var _root = $(this).parents('.nasa-bulk-dsct-wrapper');
        $('body').trigger('nasa_render_bulk_value', [_root]);
    });
    
    $('body').on('keyup', '.nasa-bulk-dsct-item input', function() {
        $(this).trigger('change');
    });
    
    $('body').on('nasa_render_bulk_value', function(ev, _root) {
        var _wrap = $(_root).find('.nasa-bulk-dsct-list');
        
        if ($(_wrap).find('.nasa-bulk-dsct-item').length <= 0) {
            $(_root).find('input.bulk-request-values').val('').trigger('change');
        } else {
            var _val = [];
            var max = 0;
            var _has_rule = false;
            var _qty_arr = [];

            $(_wrap).find('.nasa-bulk-dsct-item').each(function() {
                var _item = $(this);
                var _qty = parseFloat($(_item).find('input.qty-name').val());
                var _dsct = $(_item).find('input.dsct-name').val();
                _dsct = _dsct !== '' ? parseFloat(_dsct) : '';

                if (_qty > 0 && _dsct !== '') {
                    if (_qty_arr.indexOf(_qty) === -1) {
                        _qty_arr.push(_qty);
                        
                        max = _qty && _qty > max ? _qty : max;
                        
                        var _it_arr = {'qty': _qty, 'dsct': _dsct};
                        _val.push(_it_arr);
                        
                        _has_rule = true;
                    }
                }
            });

            if (_has_rule) {
                var max_arr = {'max': max};
                _val.push(max_arr);

                $(_root).find('input.bulk-request-values').val(JSON.stringify(_val)).trigger('change');
            } else {
                $(_root).find('input.bulk-request-values').val('').trigger('change');
            }
        }
    });
    
    /**
     * Bulk Discounts
     * 
     * @param {type} $
     * @returns {undefined}
     */
    $('body').on('click', '.nasa-add-ct-tab', function() {
        var _tmp = $(this).find('template').html();
        
        var _list = $(this).parents('.nasa-ct-tabs-wrapper').find('.nasa-ct-tabs-list');
        $(_list).append(_tmp);
        
        nasa_rename_nasa_ct_tabs($, _list);
        nasa_limit_ct_tabs($, _list);
        
        var _root = $(this).parents('.nasa-ct-tabs-wrapper');
        $('body').trigger('nasa_render_ct_tabs_value', [_root]);
    });
    
    $('body').on('click', '.nasa-rm-tab', function() {
        var _this = $(this);
        var _root = $(_this).parents('.nasa-ct-tabs-wrapper');
        var _cft = $(_this).attr('data-confirm');
        if (confirm(_cft)) {
            $(_this).parents('.nasa-ct-tabs-item').remove();
            var _list = $(_root).find('.nasa-ct-tabs-list');
            nasa_rename_nasa_ct_tabs($, _list);
            
            $('body').trigger('nasa_render_ct_tabs_value', [_root]);
            nasa_limit_ct_tabs($, _list);
        }
        
        else {
            return false;
        }
    });
    
    $('body').on('change', '.nasa-ct-tabs-item input, .nasa-ct-tabs-item select', function() {
        var _root = $(this).parents('.nasa-ct-tabs-wrapper');
        $('body').trigger('nasa_render_ct_tabs_value', [_root]);
    });
    
    $('body').on('keyup', '.nasa-ct-tabs-item input', function() {
        $(this).trigger('change');
    });
    
    $('body').on('nasa_render_ct_tabs_value', function(ev, _root) {
        var _wrap = $(_root).find('.nasa-ct-tabs-list');
        
        if ($(_wrap).find('.nasa-ct-tabs-item').length <= 0) {
            $(_root).find('input.tabs-request-values').val('').trigger('change');
        } else {
            var _val = [];

            $(_wrap).find('.nasa-ct-tabs-item').each(function() {
                var _item = $(this);
                var _tab = $(_item).find('.glb-tab').val();

                if (_tab !== '') {
                    _val.push(_tab);
                }
            });

            if (_val.length > 0) {
                $(_root).find('input.tabs-request-values').val(JSON.stringify(_val)).trigger('change');
            } else {
                $(_root).find('input.tabs-request-values').val('').trigger('change');
            }
        }
    });
    
    /**
     * Open Desc Zone
     */
    $('body').on('click', '#open-add-desc-zone', function() {
        if (!$('.zone-desc-content').hasClass('actived')) {
            $('.zone-desc-content').addClass('actived');
        }
    });
    
    /**
     * Close Desc Zone
     */
    $('body').on('click', '.close-wrap', function() {
        if ($('.zone-desc-content').hasClass('actived')) {
            $('.zone-desc-content').removeClass('actived');
        }
    });
    
    $('body').on('saved:methods', function() {
        
    });
    
    $('body').on('click', '.ns-advance-fields', function() {
        var _this = $(this);
        
        var opened = $(_this).hasClass('opened') ? true : false;
        
        var _form = $(_this).parents('form');
        
        if ($(_form).length && $(_form).find('.ns-advance-field').length) {
            if (opened) {
                $(_this).html($(_this).attr('data-more'));
                $(_this).removeClass('opened');
                $(_form).find('.ns-advance-field').removeClass('ns-open');
            } else {
                $(_this).html($(_this).attr('data-less'));
                $(_this).addClass('opened');
                $(_form).find('.ns-advance-field').addClass('ns-open');
            }
        }
    });
    
    if ($('body.post-type-page').length) {
        if ($('body.post-type-page').find('.ns-advance-metaboxs').length <= 0) {
            var _btn = $('#ns-advance-metaboxs-btn').length ? $('#ns-advance-metaboxs-btn').html() : '<a class="ns-advance-metaboxs button" href="javascript:void(0);">+ Advance Options</a>';
            $('#nasa_metabox_footer').after(_btn);
        }
    }
    
    $('body').on('click', '.ns-advance-metaboxs', function() {
        var _this = $(this);
        
        var opened = $(_this).hasClass('opened') ? true : false;
        
        if (opened) {
            // $(_this).html($(_this).attr('data-more'));
            $(_this).removeClass('opened');
            $('#nasa_metabox_general').removeClass('ns-open');
            $('#nasa_metabox_general').removeClass('ns-open');
            $('#nasa_metabox_font').removeClass('ns-open');
            $('#nasa_metabox_header').removeClass('ns-open');
            $('#nasa_metabox_footer').removeClass('ns-open');
        } else {
            // $(_this).html($(_this).attr('data-less'));
            $(_this).addClass('opened');
            $('#nasa_metabox_general').addClass('ns-open');
            $('#nasa_metabox_general').removeClass('hide-if-js');
            $('#nasa_metabox_font').addClass('ns-open');
            $('#nasa_metabox_font').removeClass('hide-if-js');
            $('#nasa_metabox_header').addClass('ns-open');
            $('#nasa_metabox_header').removeClass('hide-if-js');
            $('#nasa_metabox_footer').addClass('ns-open');
            $('#nasa_metabox_footer').removeClass('hide-if-js');
        }
    });
});

/**
 * rename input bulk discount
 * 
 * @param {type} $
 * @returns {undefined}
 */
function nasa_rename_bulk_dsct($, _wrap) {
    var _k = 0;
    
    $(_wrap).find('.nasa-bulk-dsct-item').each(function() {
        var _item = $(this);
        var _qty_name = 'qty_name_' + _k;
        var _dsct_name = 'dsct_name_' + _k;
        
        $(_item).find('input.qty-name').attr('name', _qty_name);
        $(_item).find('input.dsct-name').attr('name', _dsct_name);
        
        _k++;
    });
}

/**
 * rename input ct tabs
 * 
 * @param {type} $
 * @returns {undefined}
 */
function nasa_rename_nasa_ct_tabs($, _wrap) {
    var _k = 0;
    
    $(_wrap).find('.nasa-ct-tabs-item').each(function() {
        var _item = $(this);
        
        var _tab = 'tab_' + _k;
        var _label = $(_item).find('.tab-label').attr('data-label') + ' #' + (_k + 1);
        
        $(_item).find('.glb-tab').attr('name', _tab);
        $(_item).find('.tab-label').html(_label);
        
        _k++;
    });
    
    $('body').trigger('nasa_admin_init_select2');
}

/**
 * Check limit ct tabs
 * 
 * @param {type} $
 * @returns {undefined}
 */
function nasa_limit_ct_tabs($, _wrap) {
    if ($(_wrap).find('.nasa-ct-tabs-item').length > 4) {
        if (!$('.nasa-action-add-ct-tab').hasClass('hidden-tag')) {
            $('.nasa-action-add-ct-tab').addClass('hidden-tag');
        }
    } else {
        $('.nasa-action-add-ct-tab').removeClass('hidden-tag');
    }
}

/**
 * Sort by drag and drop
 * 
 * @param {type} $
 * @returns {undefined}
 */
function nasa_gallery_images($) {
    $('.nasa-gallery-images-list').each(function () {
        var _this = $(this);
        var _wrap = $(_this).parents('.nasa-gallery-wrapper');
        
        _this.sortable({
            items: 'li.image',
            cursor: 'move',
            scrollSensitivity: 40,
            forcePlaceholderSize: true,
            forceHelperSize: false,
            helper: 'clone',
            opacity: 0.65,
            placeholder: 'wc-metabox-sortable-placeholder',
            start: function (event, ui) {
                ui.item.css('background-color', '#f6f6f6');
            },
            stop: function (event, ui) {
                ui.item.removeAttr('style');
            },
            update: function () {
                var attachment_ids = '';

                $(_this).find('li.image').css('cursor', 'default').each(function () {
                    var attachment_id = $(this).attr('data-attachment_id');
                    attachment_ids = attachment_ids + attachment_id + ',';
                });

                $(_wrap).find('.nasa-gallery-images-input').val(attachment_ids);
            }
        });
    });
}
