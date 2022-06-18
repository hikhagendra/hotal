<?php
    /* 
        This is the template for the header.
        @package hotal
    */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo( 'name' ); wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11" >
        <?php if( is_singular() && pings_open( get_queried_object() ) ) : ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <header>
            <div class="top-header">
                <div class="contact-details">
                    <p>+977 081-540707 | Book@krishnahotel.com.np | Kohalpur-11, Banke (Nepal)</p>
                </div>
                <div class="social-links">
                    <ul>
                        <li><a href="#"><span class="hotal-icon hotal-facebook"></span></a></li>
                        <li><a href="#"><span class="hotal-icon hotal-youtube"></span></a></li>
                        <li><a href="#"><span class="hotal-icon hotal-instagram"></span></a></li>
                        <li><a href="#"><span class="hotal-icon hotal-tiktok"></span></a></li>
                    </ul>
                </div>
            </div> <!-- .top-header -->

            <div class="main-header">
                <div class="site-branding">
                    <?php if ( function_exists( 'the_custom_logo' ) ) { echo get_custom_logo(); } ?>
                </div> <!-- .site-branding -->

                <div class="site-navigation"></div>
            </div> <!-- .main-header -->
        </header>