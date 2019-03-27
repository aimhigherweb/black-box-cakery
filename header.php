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
