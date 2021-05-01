<?php
/**
 * The template for displaying Category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package client
 */

get_header();

$news = get_category_by_slug('tin-tuc');

$categories = get_categories(
    array('parent' => $news->cat_ID)
);

?>
    <div id="breadcrumb-wrap">
        <div class="container container--mod">
            <div class="row">
                <div class="col-xs-12">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>
        </div>
    </div>
    <main id="category" class="site-category-news">
        <div class="title">
            <h1 class="category-title"><?php echo $news->name; ?></h1>
        </div>
        <div class="category-tab">
            <div class="container-fluid">
                <ul id="category-tab_top" class="nav nav-tabs" role="tablist">
                    <?php
                    if ($categories) {
                    foreach ($categories as $key => $value) {
                        ?>
                        <li role="presentation" class="<?php if ($key == 0) {
                            echo 'active';
                        } ?>">
                            <a href="#category-tab-<?php echo $key; ?>" aria-controls="category-tab-<?php echo $key; ?>"
                               role="tab"
                               data-toggle="tab" aria-expanded="true"><?php echo $value->name; ?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div class="tab-content wrap-project-content">
                <?php foreach ($categories as $key => $value) { ?>
                    <div role="tabpanel" class="tab-pane in <?php if ($key == 0) {
                        echo 'active';
                    } ?>" id="category-tab-<?php echo $key; ?>">
                        <div class="container container--mod">
                            <div class="row">
                                <?php
                                $query = new WP_Query(
                                    array(
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'order' => 'DESC',
                                        'orderby' => 'ID',
                                        'cat' => $value->cat_ID,
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

                                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                             alt="<?php echo get_the_title(); ?>">
                                                    </div>
                                                    <div class="info">
                                                        <div class="name"><?php echo get_the_title(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="project-content-item_bottom clearfix">
                                                    <div class="number">0<?php echo $i; ?></div>
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
                <!-- link here -->
                <div class="container-fluid">
                    <div class="col-xs-12 ">
                        <a class="home-project-view-more hvr-grow" href="<?php echo $value->slug; ?>">Xem thêm&gt;&gt;
                            "<?php echo $value->name ?>"</a>
                    </div>
                </div>
            </div>

            <?php
            }
            ?>
        </div>


        <?php get_template_part('template-parts/home', 'choose-us'); ?>

    </main><!-- #main -->

<?php
get_footer();
