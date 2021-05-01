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
            $group = array();

            $group = prefix_get_option('home-choose-us-group');
            if(!empty($group)) {

            }
            $group[0]['image'] = '<img alt="" class="icon-services" src="/wp-content/themes/client/assets/images/choose/100-NAM-KINH-NGHIEM.png" title="" height="auto" width="100%">';
            $group[1]['image'] = '<img alt="" class="icon-service" src="https://byzan.vn/wp-content/uploads/2019/01/QUY-TRINH-CHAT-CHE.png" title="" height="/wp-content/themes/client/assets/images/choose/QUY-TRINH-CHAT-CHE.pnguto" width="100%">';
            $group[2]['image'] = '<img alt="" class="icon-service" src="/wp-content/themes/client/assets/images/choose/icon-phong-thuy1.png" title="" height="auto" width="100%">';
            $group[3]['image'] = '<img alt="" class="icon-service" src="/wp-content/themes/client/assets/images/choose/CAM-KET-TIEN-DO-123.png" title="" height="auto" width="100%">';
            if ($group) {
                foreach ($group as $key => $item) {
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-v1-section hvr-grow">
                            <div class="service-v1">
                                <?php echo $item['image']; ?>
                            </div>
                            <?php //echo $item['content']; ?>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>