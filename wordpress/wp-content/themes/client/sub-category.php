<?php
/**
 * The template for displaying Category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package client
 */

get_header();
?>
<main id="category" class="site-category">
    <div class="title">
        <h1 class="category-title"><?php echo single_cat_title(); ?></h1>
    </div>
    <div class="category-tab">
        <div class="tab-content wrap-project-content">
            <div class="container container--mod">
               <div id="category-tab_top"></div>

               <div class="row">

                <?php if ( have_posts() ) :
                    /* Start the Loop */
                    $i = 1;
                    while ( have_posts() ) :
                        the_post();

                        /*
                         * Include the Post-Type-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                         */
                        ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-content-item">
                                <a href="<?php echo esc_url(get_permalink()) ?>">
                                    <div class="project-content-item_top">
                                        <div class="image">

                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                            alt="<?php echo get_the_title(); ?>">
                                        </div>
                                        <div class="info">
                                            <div class="name"><?php echo get_the_title(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-content-item_bottom clearfix">
                                    <div class="number"><?php if($i < 10){ echo '0'.$i;}else{ echo $i; } ?></div>
                                    <div class="subtitle-wrap">
                                        <h3 class="subtitle"><?php echo get_the_title(); ?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                    $i++;
                endwhile;

                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>
        </div>
    </div>
</div>
</div>


<?php get_template_part('template-parts/home', 'choose-us'); ?>

</main><!-- #main -->

<?php
get_footer();
