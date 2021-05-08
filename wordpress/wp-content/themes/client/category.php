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
<div id="breadcrumb-wrap">
    <div class="container container--mod">
        <div class="row">
            <div class="col-xs-12">
                <?php the_breadcrumb(); ?>
            </div>
        </div>
    </div>
</div>

<?php
$cat = get_category(get_query_var('cat'));
$cat_id = $cat->cat_ID;
?>
    <main id="category" class="site-category">
        <div class="title">
            <h1 class="category-title"><?php echo $cat->name; ?></h1>
        </div>
        <?php
        if (category_has_children($cat_id)) {
            /**parent category*/
            ?>
            <div class="category-tab">
                <div class="container-fluid">
                    <?php 
                    $description = get_field('category_top_description',  $cat->taxonomy. '_' . $cat->term_id);
                    if(!empty($description)):
                    ?>
                    <div class="container container--mod">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="taxonomy-description">
                                    <?php echo $description; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <ul id="category-tab_top" class="nav nav-tabs" role="tablist">
                        <?php
                        $categories = get_categories(
                            array('parent' => $cat_id)
                        );
                        if ($categories):
                            foreach ($categories as $key => $value):
                                ?>
                                <li role="presentation" class="<?php if ($key == 0): echo 'active'; endif; ?>">
                                    <a href="#category-tab-<?php echo $key; ?>"
                                       aria-controls="category-tab-<?php echo $key; ?>"
                                       role="tab"
                                       data-toggle="tab" aria-expanded="true"><?php echo $value->name; ?></a>
                                </li>
                            <?php
                            endforeach;
                        endif;
                        ?>
                    </ul>
                </div>

                <div class="tab-content wrap-project-content">
                    <?php foreach ($categories as $key => $value): ?>
                        <div role="tabpanel" class="tab-pane in <?php if ($key == 0): echo 'active'; endif ?>"
                             id="category-tab-<?php echo $key; ?>">
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
                                            'posts_per_page' => 6,
                                        )
                                    );
                                    $i = 1;
                                    while ($query->have_posts()):
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
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 ">
                                        <a class="home-project-view-more hvr-grow" href="<?php echo $value->slug; ?>">Xem thêm&gt;&gt;
                                            "<?php echo $value->name ?>"</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                        <?php $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 15,
                                'cat' => $value->cat_ID,
                                'meta_key' => 'host_product',
                                'meta_value'    => '1'
                            );
                            $host_product = new WP_Query( $args ); 
                            if($host_product->have_posts()):
                        ?>
                        <div class="container--mod">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="title">
                                        <p><strong>Xem các chung cư cao cấp đang sử dụng Dịch vụ thiết kế nội thất của nhadephanoi.vn</strong></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <?php
                                $i = 1;
                                while ($host_product->have_posts()) :
                                    $host_product->the_post();
                                    if($i % 5 == 0 && $i >= 5)
                                        echo '</div> <div class="col-md-4">';
                                    ?>
                                    <p>
                                        <span><img src="/wp-content/themes/client/assets/images/hot-1.gif"></span> <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title() ?></a>
                                    </p>
                                    <?php
                                    $i++;
                                endwhile;
                                ?>
                                </div>
                            </div>
                            <?php 
                            $description = get_field('category_bottom_description',  $cat->taxonomy. '_' . $cat->term_id);
                            if(!empty($description)):
                            ?>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div id="cat-des-bottom">
                                        <?php echo $description; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php
        } else {
            /** Category*/
            ?>
            <div class="category-tab">
                <div class="tab-content wrap-project-content">
                    <div class="container container--mod">
                        <?php 
                        $description = get_field('category_top_description',  $cat->taxonomy. '_' . $cat->term_id);
                        if(!empty($description)): ?>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="taxonomy-description">
                                    <?php echo $description; ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div id="category-tab_top"></div>

                        <div class="row">

                            <?php if (have_posts()) :
                                /* Start the Loop */
                                $i = 1;
                                while (have_posts()) :
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
                                                        <div class="name"><?php echo get_the_title(); ?></div>
                                                    </div>
                                                </div>
                                                <div class="project-content-item_bottom clearfix">
                                                    <div class="number"><?php if ($i < 10): echo '0' . $i; else: echo $i; endif ?></div>
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
                                my_get_the_category_navigation();
                            else :
                                get_template_part('template-parts/content', 'none');
                            endif;
                            ?>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="title">
                                    <p><strong>Xem các chung cư cao cấp đang sử dụng Dịch vụ thiết kế nội thất của nhadephanoi.vn</strong></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <?php $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 15,
                                'cat' => $cat->cat_ID,
                                'meta_key' => 'host_product',
                                'meta_value'    => '1'
                            );
                            $host_product = new WP_Query( $args ); 
                            $i = 1;
                            while ($host_product->have_posts()) :
                                $host_product->the_post();
                                if($i % 5 == 0 && $i >= 5)
                                    echo '</div> <div class="col-md-4">';
                                ?>
                                <p>
                                    <span><img src="/wp-content/themes/client/assets/images/hot-1.gif"></span> <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                </p>
                                <?php
                                $i++;
                            endwhile;
                            ?>
                            </div>
                        </div>

                        <?php 
                        $description = get_field('category_bottom_description',  $cat->taxonomy. '_' . $cat->term_id);
                        if(!empty($description)):
                        ?>
                        <div class="row">
                            <div class="col-xs-12">
                                <div id="cat-des-bottom">
                                    <?php echo $description; ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

        <?php
            get_template_part('template-parts/home', 'choose-us');
            get_template_part('template-parts/home', 'contact');
        ?>

    </main><!-- #main -->

<?php
get_footer();
