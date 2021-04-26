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
                            <div role="form" class="wpcf7" id="wpcf7-f2785-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="/#wpcf7-f2785-o1" method="post" class="wpcf7-form"
                                      novalidate="novalidate">
                                    <div style="display: none;"><input type="hidden" name="_wpcf7" value="2785"> <input
                                                type="hidden" name="_wpcf7_version" value="4.9.2"> <input type="hidden"
                                                                                                          name="_wpcf7_locale"
                                                                                                          value="en_US">
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2785-o1"> <input
                                                type="hidden" name="_wpcf7_container_post" value="0"></div>
                                    <p><span class="wpcf7-form-control-wrap text-524"><input type="text" name="text-524"
                                                                                             value="" size="40"
                                                                                             class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required home-ho-ten"
                                                                                             aria-required="true"
                                                                                             aria-invalid="false"
                                                                                             placeholder="Họ tên"></span><br>
                                        <span class="wpcf7-form-control-wrap tel-172"><input type="tel" name="tel-172"
                                                                                             value="" size="40"
                                                                                             class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel home-phone"
                                                                                             aria-required="true"
                                                                                             aria-invalid="false"
                                                                                             placeholder="Số điện thoại"></span><br>
                                        <span class="wpcf7-form-control-wrap email-689"><input type="email"
                                                                                               name="email-689" value=""
                                                                                               size="40"
                                                                                               class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email home-email"
                                                                                               aria-required="true"
                                                                                               aria-invalid="false"
                                                                                               placeholder="Email"></span><br>
                                        <input type="submit" value="Đăng ký"
                                               class="wpcf7-form-control wpcf7-submit hvr-grow"><span
                                                class="ajax-loader"></span></p>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
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
