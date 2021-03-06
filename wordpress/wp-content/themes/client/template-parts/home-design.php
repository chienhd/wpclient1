<!-- Block 2 -->
<div class="home-info-title">
    <div class="container">
        <div class="vc_text_separator">
            <div class="separator_wrapper">
                <div class="separator_content"><h2><?php echo prefix_get_option('home-design-title'); ?></h2></div>
            </div>
            <div class="separator_line"></div>
        </div>
    </div>
</div>

<!-- Tabs -->
<div class="home-wrap-project">
    <!-- Nav tabs -->
    <?php
    $group = prefix_get_option('home-design-group');
    if (isset($group) && is_array($group)) { ?>
        <div class="container-fluid">
            <ul class="nav nav-tabs" role="tablist">
                <?php foreach ($group as $i => $name) { ?>
                    <li role="presentation" class="<?php if ($i == 0) echo 'active'; ?>">
                        <a href="#tab-design-<?php echo $name['home-design-group-select']; ?>"
                           aria-controls="tab-design-<?php echo $name['home-design-group-select']; ?>" role="tab"
                           data-toggle="tab"><?php echo $name['home-design-name-project'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- Tab panes -->
        <div class="tab-content wrap-project-content">
            <?php foreach ($group as $key => $name) { ?>
                <div role="tabpanel" class="tab-pane <?php if ($key == 0) echo 'in active'; ?>"
                     id="tab-design-<?php echo $name['home-design-group-select'] ?>">
                    <div class="container container--mod">
                        <div class="row">
                            <?php
                            $query = new WP_Query(
                                array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'order' => 'DESC',
                                    'orderby' => 'ID',
                                    'cat' => $name['home-design-group-select'],
                                    'posts_per_page' => 6
                                )
                            );
                            $i = 1;
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="project-content-item">
                                        <a href="<?php echo esc_url(get_permalink()) ?>">
                                            <div class="project-content-item_top">
                                                <div class="image">
                                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnails'); ?>"
                                                         alt="<?php echo get_the_title(); ?>">
                                                </div>
                                                <div class="info">
                                                    <div class="name"><?php echo get_the_title(); ?></div>
                                                </div>
                                            </div>
                                            <div class="project-content-item_bottom clearfix">
                                                <div class="number"><?php echo '0' . $i; ?></div>
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
            <?php } ?>
        </div>
    <?php }
    ?>
</div>
<!-- end Block 2