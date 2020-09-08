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

    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

    //Slide options
    add_theme_support( 'wc-product-gallery-lightbox' );

    //Don't show zeros if to the whole dollar
    add_filter( 'woocommerce_price_trim_zeros', '__return_true' );

    //Redirect when adding to cart
    function my_custom_add_to_cart_redirect( $url ) {
        return '/cart';
    }
    add_filter( 'woocommerce_add_to_cart_redirect', 'my_custom_add_to_cart_redirect' );

    // Add flavour description under short description
    add_filter( 'woocommerce_short_description', 'add_text_after_excerpt_single_product', 20, 1 );

    function add_text_after_excerpt_single_product( $post_excerpt ){
        $description = $post_excerpt;

        // Your custom text
        $post_excerpt = '<div class="description main">' . $description . '</div><div class="description pa_flavours"></div><div class="description pa_themes"></div></div>';

        return $post_excerpt;
    }

    // Add closing div after cart form
    add_filter( 'woocommerce_after_single_product_summary', 'add_closing_div', 20, 1 );

    function add_closing_div(){
        return '<div><!-- end of summary -->';
    }
?>