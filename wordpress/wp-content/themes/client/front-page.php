<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package client
 */

get_header();
?>
    <main id="home" class="site-home page-body-content">
        <?php
            get_template_part('template-parts/home', 'banner');
            get_template_part('template-parts/home', 'heading');
            get_template_part('template-parts/home', 'design');
            get_template_part('template-parts/home', 'project-finished');
            get_template_part('template-parts/home', 'choose-us');
        ?>



        <?php
        /**
         * home architect
         */
        get_template_part('template-parts/home', 'architect');

        get_template_part('template-parts/home', 'contact');
       
        /**
         * home news
         */
        get_template_part('template-parts/home', 'news');
        ?>
    </main><!-- #main -->

<?php
get_footer();
