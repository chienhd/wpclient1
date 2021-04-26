<!-- TẠI SAO CHỌN BYZAN? -->
<div class="home-info-title">
    <div class="container">
        <div class="vc_text_separator">
            <div class="separator_wrapper">
                <div class="separator_content"><h2><?php echo prefix_get_option('home-choose-us-1'); ?></h2></div>
            </div>
            <div class="separator_line"></div>
        </div>
    </div>
</div>
<!-- Home info text -->
<div class="home-info-text">
    <div class="container">
        <div class="row row--mod">
            <div class="col-md-10">
                <div class="home-info-text_content">
                    <?php echo prefix_get_option('home-choose-us-2'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-choose-us">
    <div class="container">
        <div class="row">
            <?php
            $group = prefix_get_option('home-choose-us-group');
            if ($group) {
                foreach ($group as $key => $item) {
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-v1-section hvr-grow">
                            <div class="service-v1">
                                <img alt="<?php echo $item['image']['title'] ?>" class="icon-services"
                                     src="<?php echo $item['image']['url'] ?>" height="auto" width="100%">
                            </div>
                            <?php echo $item['content']; ?>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>