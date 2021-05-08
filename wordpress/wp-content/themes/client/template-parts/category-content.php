<div class="col-md-4 col-sm-6">
    <div class="project-content-item">
        <a href="<?php echo esc_url(get_permalink()) ?>">
            <div class="project-content-item_top">
                <div class="image">

                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
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