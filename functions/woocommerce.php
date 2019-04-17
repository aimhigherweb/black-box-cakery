<?php

    //Add Woocommerce support
    function customtheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );

    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

    //Slide options
    add_theme_support( 'wc-product-gallery-lightbox' );
    // add_theme_support( 'wc-product-gallery-slider' );

    //Add in text after price
    // add_filter( 'woocommerce_get_price_html', 'custom_price_message' );
    // function custom_price_message( $price ) {
    //     $text = '<span class="price-disclaimer">including delivery</span>';
    //     return $price . $text;
    // }

    //Don't show zeros if to the whole dollar
    add_filter( 'woocommerce_price_trim_zeros', '__return_true' );

    //Redirect when adding to cart
    function my_custom_add_to_cart_redirect( $url ) {
        return '/cart';
    }
    add_filter( 'woocommerce_add_to_cart_redirect', 'my_custom_add_to_cart_redirect' );
?>