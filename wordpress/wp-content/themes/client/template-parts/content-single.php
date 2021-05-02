<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package client
 */

?>
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content main-content-single">
        <div id="single-title">
            <h2><?php echo get_the_title(); ?></h2>
        </div>
        <div id="single-content" class="single-content">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'client'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'client'),
                    'after' => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content -->

        <div class="single-single_readmore">
            <p><?php echo get_next_post_link('<span>>> Xem thêm: %link</span>'); ?></p>
            <p><?php echo get_previous_post_link('<span>>> Xem thêm: %link<span>'); ?></p>
        </div>

        <h3 class="section-title">Có thể bạn quan tâm</h3>
        <div class="single-related-loop row">
                <?php
                $post_id = get_the_ID();
                $current_post_type = get_post_type($post_id);
                $cat = wp_get_post_categories($post_id);
                if(isset($cat[0])) {
                   $cat_id = $cat[0];
                    $query_args = array(
                        'category__in' => $cat_id,
                        'post_type' => $current_post_type,
                        'post__not_in' => array($post_id),
                        'posts_per_page' => '6',
                    );

                    $related_cats_post = new WP_Query($query_args);
                    $i = 1;
                    while ($related_cats_post->have_posts()) :
                        $related_cats_post->the_post();
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12 related-item<?php echo $i; ?>">
                            <div class="ih-item square effect6 from_top_and_bottom">
                                <a href="<?php echo get_the_permalink(); ?>">
                                    <div class="img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img"></div>
                                    <div class="info">
                                        <h3><?php echo get_the_title(); ?></h3>
                                    </div>
                                </a>
                            </div>
                            <a class="related-item-title"
                               href="<?php echo get_the_permalink(); ?>"><span><?php echo get_the_title(); ?></span></a>
                        </div>
                        <?php
                        $i++;
                    endwhile; // End of the loop.
                    wp_reset_postdata(); 
                }
                ?>
        </div>
    </div>
    </div>
</div>