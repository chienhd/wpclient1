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
    if (isset($group)) { ?>

        <ul class="nav nav-tabs" role="tablist">
            <?php foreach ($group as $i => $name) { ?>
                <li role="presentation" class="<?php if($i == 0) echo 'active'; ?>">
                    <a href="#tab-design-<?php echo $name['home-design-group-select']; ?>"
                       aria-controls="home-<?php echo $name['home-design-group-select']; ?>" role="tab"
                       data-toggle="tab"><?php echo $name['home-design-name-project'] ?>
                    </a>
                </li>
            <?php } ?>
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

                                            <img src="http://localhost:8888/wp-content/uploads/2021/04/dai-dien-web-scaled-1.jpg"
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

                                            <img src="http://localhost:8888/wp-content/uploads/2021/04/dai-dien-web-scaled-1.jpg"
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

                                            <img src="http://localhost:8888/wp-content/uploads/2021/04/dai-dien-web-scaled-1.jpg"
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

                                            <img src="http://localhost:8888/wp-content/uploads/2021/04/dai-dien-web-scaled-1.jpg"
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

                                            <img src="http://localhost:8888/wp-content/uploads/2021/04/dai-dien-web-scaled-1.jpg"
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

                                            <img src="http://localhost:8888/wp-content/uploads/2021/04/dai-dien-web-scaled-1.jpg"
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

    <?php }
    ?>
</div>
<!-- end Block 2 -->