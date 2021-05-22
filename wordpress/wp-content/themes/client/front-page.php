<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package client
 */

get_header();
?>
    <main id="home" class="site-home page-body-content">
        <?php
            get_template_part('template-parts/home', 'banner');
            get_template_part('template-parts/home', 'heading');
            get_template_part('template-parts/home', 'design');
            get_template_part('template-parts/home', 'project-finished');
            get_template_part('template-parts/home', 'choose-us');
        ?>



        <!-- Block 2 -->

        <div class="home-info-title">
            <div class="container">
                <div class="vc_text_separator">
                    <div class="separator_wrapper">
                        <div class="separator_content"><h2>THIẾT KẾ NỘI THẤT PHONG CÁCH HIỆN ĐẠI</h2></div>
                    </div>
                    <div class="separator_line"></div>
                </div>
            </div>
        </div>


        <!-- Tabs -->
        <div class="home-wrap-project">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab-home" aria-controls="home" role="tab"
                                                          data-toggle="tab">Home</a></li>
                <li role="presentation"><a href="#tab-profile" aria-controls="profile" role="tab"
                                           data-toggle="tab">Profile</a></li>
                <li role="presentation"><a href="#tab-messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a>
                </li>
                <li role="presentation"><a href="#tab-settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content wrap-project-content">
                <div role="tabpanel" class="tab-pane in active" id="tab-home">
                    <div class="container container--mod">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="project-content-item">
                                    <a href="#">
                                        <div class="project-content-item_top">
                                            <div class="image">

                                                <img src="/wp-content/uploads/2021/04/dai-dien-web-scaled-2.jpg"
                                                     alt="dai-dien-web-scaled-1.jpg">
                                            </div>
                                            <div class="info">
                                                <div class="name">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo
                                                    Phong Cách Hiện
                                                    Đại
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-content-item_bottom clearfix">
                                            <div class="number">01</div>
                                            <div class="subtitle-wrap">
                                                <h3 class="subtitle">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo
                                                    Phong Cách Hiện Đại</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="project-content-item">
                                    <a href="#">
                                        <div class="project-content-item_top">
                                            <div class="image">

                                                <img src="/wp-content/uploads/2021/04/dai-dien-web-scaled-2.jpg"
                                                     alt="dai-dien-web-scaled-1.jpg">
                                            </div>
                                            <div class="info">
                                                <div class="name">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo
                                                    Phong Cách Hiện
                                                    Đại
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-content-item_bottom clearfix">
                                            <div class="number">01</div>
                                            <div class="subtitle-wrap">
                                                <h3 class="subtitle">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo
                                                    Phong Cách Hiện Đại</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="project-content-item">
                                    <a href="#">
                                        <div class="project-content-item_top">
                                            <div class="image">

                                                <img src="/wp-content/uploads/2021/04/dai-dien-web-scaled-2.jpg"
                                                     alt="dai-dien-web-scaled-1.jpg">
                                            </div>
                                            <div class="info">
                                                <div class="name">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo
                                                    Phong Cách Hiện
                                                    Đại
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-content-item_bottom clearfix">
                                            <div class="number">01</div>
                                            <div class="subtitle-wrap">
                                                <h3 class="subtitle">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo
                                                    Phong Cách Hiện Đại</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="project-content-item">
                                    <a href="#">
                                        <div class="project-content-item_top">
                                            <div class="image">

                                                <img src="/wp-content/uploads/2021/04/dai-dien-web-scaled-2.jpg"
                                                     alt="dai-dien-web-scaled-1.jpg">
                                            </div>
                                            <div class="info">
                                                <div class="name">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo
                                                    Phong Cách Hiện
                                                    Đại
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-content-item_bottom clearfix">
                                            <div class="number">01</div>
                                            <div class="subtitle-wrap">
                                                <h3 class="subtitle">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo
                                                    Phong Cách Hiện Đại</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="project-content-item">
                                    <a href="#">
                                        <div class="project-content-item_top">
                                            <div class="image">

                                                <img src="/wp-content/uploads/2021/04/dai-dien-web-scaled-2.jpg"
                                                     alt="dai-dien-web-scaled-1.jpg">
                                            </div>
                                            <div class="info">
                                                <div class="name">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo
                                                    Phong Cách Hiện
                                                    Đại
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-content-item_bottom clearfix">
                                            <div class="number">01</div>
                                            <div class="subtitle-wrap">
                                                <h3 class="subtitle">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo
                                                    Phong Cách Hiện Đại</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="project-content-item">
                                    <a href="#">
                                        <div class="project-content-item_top">
                                            <div class="image">

                                                <img src="/wp-content/uploads/2021/04/dai-dien-web-scaled-2.jpg"
                                                     alt="dai-dien-web-scaled-1.jpg">
                                            </div>
                                            <div class="info">
                                                <div class="name">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo
                                                    Phong Cách Hiện
                                                    Đại
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-content-item_bottom clearfix">
                                            <div class="number">01</div>
                                            <div class="subtitle-wrap">
                                                <h3 class="subtitle">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo
                                                    Phong Cách Hiện Đại</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab-profile">...</div>
                <div role="tabpanel" class="tab-pane" id="tab-messages">...</div>
                <div role="tabpanel" class="tab-pane" id="tab-settings">...</div>
            </div>
        </div>
        <!-- end Block 2 -->

        <?php
        /**
         * home architect
         */
        get_template_part('template-parts/home', 'architect');

        get_template_part('template-parts/home', 'contact');
       
        /**
         * home news
         */
        get_template_part('template-parts/home', 'news');
        ?>
    </main><!-- #main -->

<?php
get_footer();
