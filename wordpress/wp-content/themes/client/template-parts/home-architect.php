<div id="home-kts-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12"><h2 class="home-kts-title">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h2></div>
            <div class="col-lg-12 col-md-12 col-sm-12 home-kts-content">
                <?php 
                    $query = new WP_Query(
                        array(
                            'post_type' => 'architects',
                            'post_status' => 'publish'
                        )
                    );
                ?>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 kts-left">
                    <?php 
                        $i = 1;
                        while ($query->have_posts()) {
                        $query->the_post();
                    ?>
                    <div data-index="<?php echo $i; ?>" class="kts-left-item kts-left-item<?php echo $i; ?> <?php if($i == 1) { echo 'kts-left-item-show'; } ?>">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 kts-1-img"> <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_post_thumbnail_url(); ?>"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 kts-1-info">
                            <span class="kts-1-name"><?php echo get_the_title(); ?></span> <span class="kts-1-position"><?php //echo get_the_excerpt(); ?></span>
                            <div id="kts-1-des">
                                <?php echo get_the_content(); ?>
                            </div>
                            <!-- <div id="kts-1-mxh">
                                <ul>
                                    <li>
                                        <a class="hvr-grow" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(150,150,150,1)">
                                                <path d="M19,4V7H17A1,1 0 0,0 16,8V10H19V13H16V20H13V13H11V10H13V7.5C13,5.56 14.57,4 16.5,4M20,2H4A2,2 0 0,0 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hvr-grow" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(150,150,150,1)">
                                                <path d="M17.71,9.33C17.64,13.95 14.69,17.11 10.28,17.31C8.46,17.39 7.15,16.81 6,16.08C7.34,16.29 9,15.76 9.9,15C8.58,14.86 7.81,14.19 7.44,13.12C7.82,13.18 8.22,13.16 8.58,13.09C7.39,12.69 6.54,11.95 6.5,10.41C6.83,10.57 7.18,10.71 7.64,10.74C6.75,10.23 6.1,8.38 6.85,7.16C8.17,8.61 9.76,9.79 12.37,9.95C11.71,7.15 15.42,5.63 16.97,7.5C17.63,7.38 18.16,7.14 18.68,6.86C18.47,7.5 18.06,7.97 17.56,8.33C18.1,8.26 18.59,8.13 19,7.92C18.75,8.45 18.19,8.93 17.71,9.33M20,2H4A2,2 0 0,0 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hvr-grow" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(150,150,150,1)">
                                                <path d="M10,16.5V7.5L16,12M20,4.4C19.4,4.2 15.7,4 12,4C8.3,4 4.6,4.19 4,4.38C2.44,4.9 2,8.4 2,12C2,15.59 2.44,19.1 4,19.61C4.6,19.81 8.3,20 12,20C15.7,20 19.4,19.81 20,19.61C21.56,19.1 22,15.59 22,12C22,8.4 21.56,4.91 20,4.4Z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <?php 
                        $i++;
                        }
                    ?>
                   
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 kts-right">
                    <ul>
                        <?php 
                        $i = 1;
                        while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <li data-index="<?php echo $i; ?>" class="kts-right-item kts-right-item<?php echo $i; ?>">
                            <a href="#">
                                <img class="kts-right-item-img img-responsive"
                                     src="<?php echo get_the_post_thumbnail_url(); ?>"
                                     alt="<?php echo get_the_post_thumbnail_url(); ?>"> <span class="kts-right-item-name"><?php echo get_the_title(); ?></span>
                                <span class="kts-right-item-des">
                           <?php echo get_the_content(); ?>
                        </span>
                            </a>
                            <p><a href="#"> </a></p>
                        </li>
                        <?php 
                        $i++;
                        }
                    ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>