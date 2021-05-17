<?php
/**
 * Template Name: Introduce

 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package client
 */

get_header();
?>

<main id="introduce" class="page-body-content">
    <?php if(get_the_post_thumbnail_url()): ?>
    <section id="slideshow">
        <div class="single-banner-other-page">
            <img class="position-image-center" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>
    </section>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
    <section id="gt1" class="section-nd">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 text-justify">
                    <h2 class="title-section"><?php echo prefix_get_option('page_introduce_block_1_title'); ?></h2>
                    <?php echo prefix_get_option('page_introduce_block_1_editor'); ?>
                    <hr>
                </div>
                <div class="col-xs-12 col-md-6">
                    <img src="<?php echo prefix_get_option('page_introduce_block_1_image')['thumbnail']; ?>" alt="<?php echo prefix_get_option('page_introduce_block_1_image')['thumbnail']; ?>">
                    <div class="number">01</div>
                </div>
            </div>
        </div>
    </section>

    <section id="gt2" class="section-nd" style="background: url(<?php echo prefix_get_option('page_introduce_block_2_image')['thumbnail']; ?>) center;">
        <div class="container">
            <div class="row row-40">
                <div class="col-xs-12 col-md-4 col-title">
                    <h2 class="title-section text-uppercase"><?php echo prefix_get_option('page_introduce_block_2_title'); ?></h2>
                    <div class="number">02</div>
                </div>
                <div class="col-xs-12 col-md-8 col-content text-justify">
                    <?php echo prefix_get_option('page_introduce_block_2_editor'); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="gt3" class="section-nd">
        <div class="container">
            <div class="row row-40">
                <div class="col-xs-12 col-md-4 col-title col-title-order-1">
                    <h2 class="title-section text-uppercase"><?php echo prefix_get_option('page_introduce_block_3_title'); ?></h2>
                    <div class="number">03</div>
                </div>
                <div class="col-xs-12 col-md-8 col-content text-justify">
                    <?php echo prefix_get_option('page_introduce_block_3_editor'); ?>
                </div>
                <div class="col-xs-12 col-md-4 col-title col-title-order-2">
                    <h2 class="title-section text-uppercase"><?php echo prefix_get_option('page_introduce_block_3_title'); ?></h2>
                    <div class="number">03</div>
                </div>
            </div>
        </div>
    </section>

    <section id="gt4" class="section-nd" style="background: url(<?php echo prefix_get_option('page_introduce_block_4_image')['thumbnail']; ?>) center;">
        <div class="container">
            <div class="row row-40">
                <div class="col-xs-12 col-md-5 col-title">
                    <h2 class="title-section text-uppercase"><?php echo prefix_get_option('page_introduce_block_4_title'); ?></h2>
                    <div class="number">04</div>
                </div>
                <div class="col-xs-12 col-md-7 col-content text-justify">
                    <?php echo prefix_get_option('page_introduce_block_4_editor'); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="gt5" class="section-nd">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-7 col-content">
                    <img src="<?php echo prefix_get_option('page_introduce_block_5_image')['thumbnail']; ?>">
                </div>
                <div class="col-xs-12 col-md-5 col-title">
                    <h2 class="title-section text-uppercase"><?php echo prefix_get_option('page_introduce_block_5_title'); ?></h2>
                    <div class="number">05</div>
                    <div class="text-justify clearfix">
                        <?php echo prefix_get_option('page_introduce_block_5_editor'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
