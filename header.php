<?php
/**
 * The header template
 *
 *
 * @package Black Box Cakery
 * @version 1.0
 */
?>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TXS44DP');</script>
        <!-- End Google Tag Manager -->

        <link href="/wp-content/themes/blackboxcakery/style.css" rel="stylesheet" />
        
        <title>Black Box Cakery</title>
        <meta name="description" content="Black Box Cakery" />

        <meta property="og:title" content="Black Box Cakery" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="Black Box Cakery" />

        <meta name="twitter:title" content="Black Box Cakery" />
        <meta name="twitter:description" content="Black Box Cakery" />
        <meta name="twitter:image" content="" />

        <?php wp_head(); ?>
    </head>

<body class="<?php if(is_front_page()) {echo 'home';}; ?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TXS44DP"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
            <nav class="main">
                <ul>
                <li class="site-logo">
                <a href="/">
                    <?php
                        $logo = wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ), 'full')[0];
                        echo file_get_contents($logo);
                    ?>
                </a>
                </li>

                <?php wp_nav_menu(array(
                    'theme_location' => 'main_menu',
                    'container' => false,
                    'items_wrap' => '%3$s'
                    )); 
                ?>
                </ul>
            </nav>

            <?php wp_nav_menu(array(
                'theme_location' => 'social_menu',
                'container' => 'nav',
                'container_class' => 'menu social icons'
                )); 
			?>

    </header>

    <div class="content">
