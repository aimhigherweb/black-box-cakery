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
        <link rel="profile" href="http://gmpg.org/xfn/11" />

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

<body id="root" class="<?php if(is_front_page()) {echo 'home';}; ?>">
    <header>
        <div class="wrap">
            <div class="site-logo">
                <a href="/">
                    <?php
                        $logo = wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ), 'full')[0];
                        echo file_get_contents($logo);
                    ?>
                </a>
            </div>

            <div id="nav-main" class="nav-main">
                <button class="hamburger" onClick='mobileMenu()'><span class="open">&#x2630</span><span class="close">&#xd7</span></button>
                <?php wp_nav_menu(array(
                    'theme_location' => 'main_menu',
                    'container' => 'nav',
                    'container_class' => 'menu main'
                    )); 
                ?>
            </div>
        </div>
    </header>

    <div class="wrap">
