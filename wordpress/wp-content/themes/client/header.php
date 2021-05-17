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
<div id="top"></div>
<div id="page-wrap">
    <header id="masthead" class="site-header">
        <nav class="navbar navbar-default site-header_navbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand custom-logo-link" href="/">
                        <img src="<?php echo prefix_get_option('opt-media-logo')['url'] ?>" alt="Logo">
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-navbar-collapse" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'container_id' => 'main-menu-navbar-collapse',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_id' => 'menu-main-menu-right',
                        'class' => 'menu nav navbar-nav navbar-right'
                    )
                );
                ?>
            </div><!-- /.container-fluid -->
        </nav>
    </header><!-- #masthead -->
