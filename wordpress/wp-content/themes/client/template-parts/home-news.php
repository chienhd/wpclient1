<section id="home-news" class="section-nd">
    <div class="container">
        <h2 class="title-section text-uppercase text-center"><?php echo prefix_get_option('home-news-1'); ?></h2>
        <div class="content-section">
            <div class="row">
                <div class="col-left col-xs-12 col-md-7">
                    <div class="post-thumb thumb-large">

                        <div class="box-video-home">
                            <div class="wrapper">
                                <div class="youtube">
                                    <!-- <div class="play-button btn-play-news-video"></div>
                                    <img src="http://i3.ytimg.com/vi/ZyY-fvRTGQc/hqdefault.jpg"> -->
                                    <!-- <iframe id="iframe-news" frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/ZyY-fvRTGQc?rel=0&amp;showinfo=0&amp;autoplay=1"></iframe> -->
                                    <?php echo prefix_get_option('home-news-2'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-right col-xs-12 col-md-5">
                <?php 

                $query = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'orderby' => 'ID',
                                'post__in' => prefix_get_option('home-news-3')
                            )
                        );
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <div class="post-thumb thumb-small">
                        <div class="row">
                            <div class="col-xs-4">
                                <a href="<?php echo esc_url(get_permalink()) ?>" class="img-thumb">
                                    <img width="172" height="115" src="<?php echo get_the_post_thumbnail_url(); ?>" class="attachment-thumb-news-home size-thumb-news-home wp-post-image" alt="<?php echo get_the_title(); ?>"/>                 
                                </a>
                            </div>
                            <div class="col-xs-8">
                                <h3 class="title-thumb">
                                    <a href="<?php echo esc_url(get_permalink()) ?>"><?php echo get_the_title(); ?></a>
                                </h3>
                                <p class="thumb-excerpt"><?php echo get_the_excerpt() ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
                </div>
            </div>
        </div>
    </div>
</section>