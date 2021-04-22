<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package client
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page-wrap">
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 header-left">
                    <?php
                    the_custom_logo();
                    ?>

                </div><!-- .site-branding -->
                <div class="col-xs-10 header-right">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id' => 'menu-main-menu-right',
                                'class' => 'menu'
                            )
                        );
                        ?>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
