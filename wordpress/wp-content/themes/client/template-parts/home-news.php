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
                            <div class="read-more-all-video-wrap">
                                <a href="<?php echo prefix_get_option('home-news-read-all') ?>" class="read-more-all-video">Xem tất cả video</a>
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
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" class="attachment-thumb-news-home size-thumb-news-home wp-post-image" alt="<?php echo get_the_title(); ?>"/>                 
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

<style type="text/css">
    .read-more-all-video-wrap {
        width: 100%;
        display: block;
        text-align: center;
    }
    .read-more-all-video {
        padding: 9px 12px;
        position: relative;
        display: block;
        font-size: 15px;
        color: #182633;
        font-weight: 500;
        background-color: transparent;
        border: 1px solid #878786;
        border-radius: 3px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        text-decoration: none !important;
        width: max-content;
        margin-bottom: 30px;
    }
     .read-more-all-video:hover {
        background-color: #efefef;
        color: #182633 !important;
     }
</style>