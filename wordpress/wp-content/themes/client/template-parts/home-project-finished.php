<!-- Block 2 -->
<div class="home-info-title">
    <div class="container">
        <div class="vc_text_separator">
            <div class="separator_wrapper">
                <div class="separator_content"><h2><?php echo prefix_get_option('home-project-finished-1'); ?></h2>
                </div>
            </div>
            <div class="separator_line"></div>
        </div>
    </div>
</div>


<!-- Tabs -->
<div class="home-wrap-project">

    <!-- Tab panes -->
    <div class="tab-content wrap-project-content">
        <div class="container container--mod">
            <div class="row">
                <?php
                $project = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'order' => 'DESC',
                        'orderby' => 'ID',
                        'cat' => prefix_get_option('home-project-finished-2'),
                        'posts_per_page' => 6
                    )
                );
                $i = 1;
                while ($project->have_posts()) {
                    $project->the_post();
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="project-content-item">
                            <a href="#">
                                <div class="project-content-item_top">
                                    <div class="image">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                    </div>
                                    <div class="info">
                                        <div class="name"><?php echo get_the_title(); ?></div>
                                    </div>
                                </div>
                                <div class="project-content-item_bottom clearfix">
                                    <div class="number"><?php echo '0'.$i; ?></div>
                                    <div class="subtitle-wrap">
                                        <h3 class="subtitle"><?php echo get_the_title(); ?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
<!-- end Block 2 -->