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
    <main id="home" class="site-home">
        <?php
            get_template_part('template-parts/home', 'banner');
            get_template_part('template-parts/home', 'heading');
            get_template_part('template-parts/home', 'design');
            get_template_part('template-parts/home', 'project-finished');
            get_template_part('template-parts/home', 'choose-us');
        ?>



        <?php
        /**
         * home news
         */
        get_template_part('template-parts/home', 'architect');
        ?>

        <!--     Contact form -->
        <div id="home-customer-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <span class="home-customer-title">NHẬN TƯ VẤN MIỄN PHÍ</span>
                        <span class="home-customer-right-des">Tặng kèm Ebook 39 mẫu Thiết kế nội thất mới nhất 2019 trị giá 19$</span>
                        <div id="home-customer-right-frm">
                            <?php 
                            $shortcCode = prefix_get_option('contact-form-1');
                            echo do_shortcode($shortcCode); 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        /**
         * home news
         */
            get_template_part('template-parts/home', 'news');
        ?>
    </main><!-- #main -->

<?php
get_footer();
