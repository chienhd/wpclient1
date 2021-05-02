<div id="home-customer-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <span class="home-customer-title">NHẬN TƯ VẤN MIỄN PHÍ</span>
                <span class="home-customer-right-des">Tặng kèm Ebook 39 mẫu Thiết kế nội thất mới nhất 2019 trị giá 19$</span>
                <div id="home-customer-right-frm">
                    <?php 
                        $shortcCode = prefix_get_option('contact-form-1');
                        echo do_shortcode($shortcCode); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
