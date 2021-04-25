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

<main id="home" class="site-home">
    <?php
echo do_shortcode('[rev_slider alias="slider-11"][/rev_slider]');
?>
    <!-- Home Info Title -->
    <div class="home-info-title">
        <div class="container">
            <div class="vc_text_separator">
                <div class="separator_wrapper">
                    <div class="separator_content"><h1>BYZAN - DẪN ĐẦU PHONG CÁCH HIỆN ĐẠI</h1></div>
                </div>
                <div class="separator_line"></div>
            </div>
        </div>
    </div>

    <!-- Home info text -->
    <div class="home-info-text">
        <div class="container">
            <div class="row row--mod">
                <div class="col-xs-12 col-sm-12 col-lg-8 col-md-8">
                    <div class="home-info-text_content">
                        <p> Byzan JSC là thương hiệu lớn và uy tín trong ngành thiết kế và thi công nội thất, khác
                            biệt với các đơn vị trên thị trường là Byzan chỉ làm một phong cách duy nhất là Hiện
                            Đại. Đồng thời là đơn vị tiên phong tạo ra xu hướng trong phong cách hiện đại với những
                            giải pháp về ứng dụng vật liệu, màu sắc và mảng khối đồng nhất trong phong cách hiện
                            đại. Với 10 năm kinh nghiệm, Byzan hiện đang sở hữu nhà máy sản xuất cùng quy trình quản
                            lý đạt chuẩn, đội ngũ được đào tạo bài bản. Nhằm đáp ứng nhu cầu khách hàng ngày càng
                            gia tăng tại các tỉnh thành trong cả nước, với mục tiêu mở rộng và cung cấp tốt nhất các
                            dịch vụ tiện ích cho khách hàng. Byzan hiện là đơn vị có nhiều công trình thi công nhất
                            và luôn cập nhật những hình ảnh thực tế giúp khách hàng có những đánh giá khách quan
                            nhất về chúng tôi. <br>Byzan JSC xin gửi lời mời hợp tác đến Quý đối tác là các tổ
                            chức/Cá nhân quan tâm và mong muốn hợp tác kinh doanh dịch vụ Nội thất Nhà ở - Dịch vụ
                            theo Phong cách Hiện đại.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                                            
                                            <img src="http://localhost:8888/wp-content/uploads/2021/04/dai-dien-web-scaled-1.jpg"
                                                 alt="dai-dien-web-scaled-1.jpg">
                                        </div>
                                        <div class="info">
                                            <div class="name">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo Phong Cách Hiện
                                                Đại</div>
                                        </div>
                                    </div>
                                    <div class="project-content-item_bottom clearfix">
                                        <div class="number">01</div>
                                        <div class="subtitle-wrap">
                                            <h3 class="subtitle">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo Phong Cách Hiện Đại</h3>
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
                                            <div class="name">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo Phong Cách Hiện
                                                Đại</div>
                                        </div>
                                    </div>
                                    <div class="project-content-item_bottom clearfix">
                                        <div class="number">01</div>
                                        <div class="subtitle-wrap">
                                            <h3 class="subtitle">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo Phong Cách Hiện Đại</h3>
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
                                            <div class="name">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo Phong Cách Hiện
                                                Đại</div>
                                        </div>
                                    </div>
                                    <div class="project-content-item_bottom clearfix">
                                        <div class="number">01</div>
                                        <div class="subtitle-wrap">
                                            <h3 class="subtitle">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo Phong Cách Hiện Đại</h3>
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
                                            <div class="name">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo Phong Cách Hiện
                                                Đại</div>
                                        </div>
                                    </div>
                                    <div class="project-content-item_bottom clearfix">
                                        <div class="number">01</div>
                                        <div class="subtitle-wrap">
                                            <h3 class="subtitle">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo Phong Cách Hiện Đại</h3>
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
                                            <div class="name">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo Phong Cách Hiện
                                                Đại</div>
                                        </div>
                                    </div>
                                    <div class="project-content-item_bottom clearfix">
                                        <div class="number">01</div>
                                        <div class="subtitle-wrap">
                                            <h3 class="subtitle">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo Phong Cách Hiện Đại</h3>
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
                                            <div class="name">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo Phong Cách Hiện
                                                Đại</div>
                                        </div>
                                    </div>
                                    <div class="project-content-item_bottom clearfix">
                                        <div class="number">01</div>
                                        <div class="subtitle-wrap">
                                            <h3 class="subtitle">Thi Công Nội Thất Chung Cư Imperia Minh Khai Theo Phong Cách Hiện Đại</h3>
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


<!-- TẠI SAO CHỌN BYZAN? -->
    <div class="home-info-title">
        <div class="container">
            <div class="vc_text_separator">
                <div class="separator_wrapper">
                    <div class="separator_content"><h2>TẠI SAO CHỌN BYZAN?</h2></div>
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
                        <p>Trong một thị trường nội thất ngày càng sôi động và đa dạng như ở Việt Nam, Byzan luôn tự hào là đơn vị dẫn đầu và tạo ra xu hướng trong phong cách thiết kế Hiện Đại ( Theo tạp chí kiến trúc Việt Nam bình chọn ) các thiết kế của chúng tôi luôn hướng đến sự hài hoà giữa công năng sử dụng và thẩm mỹ, với ngôn ngữ thiết kế đồng nhất từ mảng khối cho đến màu sắc sao cho mỗi không gian sống luôn là đứa con tinh thần, là nơi mà bạn muốn trở về sau cuối ngày làm việc mệt mỏi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-v1-section hvr-grow">
                       <div class="service-v1"> <img alt="" class="icon-services" src="https://byzan.vn/wp-content/uploads/2019/01/100-NAM-KINH-NGHIEM.png" title="" height="auto" width="100%"></div>
                       <h3 class="service-title">10 năm 1 phong cách</h3>
                       <p class="is-mb-0">10 năm theo đuổi phong cách hiện đại, Byzan khẳng định vị thế dẫn đầu trong trường phái này. Với &gt; 400 căn hộ được thiết kế &amp; thi công nội thất trọn gói mỗi năm, chúng tôi là 1 trong những đơn vị uy tín hàng đầu miền Bắc.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-v1-section hvr-grow">
                       <div class="service-v1"> <img alt="" class="icon-service" src="https://byzan.vn/wp-content/uploads/2019/01/QUY-TRINH-CHAT-CHE.png" title="" height="auto" width="100%"></div>
                       <h3 class="service-title">Quy Trình Chặt Chẽ</h3>
                       <p class="is-mb-0"> Sỡ hữu Nhà máy sản xuất rộng trên 2000m2 cùng hệ thống kiểm soát chất lượng chặt chẽ từ khâu sản xuất đến dịch vụ, bạn có thể hoàn toàn yên tâm khi sử dụng dịch vụ thiết kế - thi công trọn gói của chúng tôi.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-v1-section hvr-grow">
                       <div class="service-v1"> <img alt="" class="icon-service" src="https://byzan.vn/wp-content/uploads/2019/01/icon-phong-thuy1.png" title="" height="auto" width="100%"></div>
                       <h3 class="service-title">Đề Cao Phong Thủy</h3>
                       <p class="is-mb-0">Phong thủy luôn là yếu tố được cân nhắc đầu tiên trong thiết kế nội thất hiện đại của Byzan, nhằm việc tạo không gian sống phù hợp với tuổi, mệnh của gia chủ, giúp hạn chế điềm xấu, tài vận sinh sôi.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-v1-section hvr-grow">
                       <div class="service-v1"> <img alt="" class="icon-service" src="https://byzan.vn/wp-content/uploads/2019/01/CAM-KET-TIEN-DO-123.png" title="" height="auto" width="100%"></div>
                       <h3 class="service-title">Cam Kết Tiến Độ</h3>
                       <p class="is-mb-0">Byzan là đơn vị duy nhất hiện nay cam kết nếu thời gian thi công căn hộ chậm tiến độ so với hợp đồng thi công thì sẽ chịu phạt tiến độ với mức phạt 1 triệu đồng/1 ngày.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!--     Contact form -->
<div id="home-customer-wrap">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <span class="home-customer-title">NHẬN TƯ VẤN MIỄN PHÍ</span>
            <span class="home-customer-right-des">Tặng kèm Ebook 39 mẫu Thiết kế nội thất mới nhất 2019 trị giá 19$</span>
            <div id="home-customer-right-frm">
               <div role="form" class="wpcf7" id="wpcf7-f2785-o1" lang="en-US" dir="ltr">
                  <div class="screen-reader-response"></div>
                  <form action="/#wpcf7-f2785-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                     <div style="display: none;"> <input type="hidden" name="_wpcf7" value="2785"> <input type="hidden" name="_wpcf7_version" value="4.9.2"> <input type="hidden" name="_wpcf7_locale" value="en_US"> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2785-o1"> <input type="hidden" name="_wpcf7_container_post" value="0"></div>
                     <p><span class="wpcf7-form-control-wrap text-524"><input type="text" name="text-524" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required home-ho-ten" aria-required="true" aria-invalid="false" placeholder="Họ tên"></span><br> <span class="wpcf7-form-control-wrap tel-172"><input type="tel" name="tel-172" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel home-phone" aria-required="true" aria-invalid="false" placeholder="Số điện thoại"></span><br> <span class="wpcf7-form-control-wrap email-689"><input type="email" name="email-689" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email home-email" aria-required="true" aria-invalid="false" placeholder="Email"></span><br> <input type="submit" value="Đăng ký" class="wpcf7-form-control wpcf7-submit hvr-grow"><span class="ajax-loader"></span></p>
                     <div class="wpcf7-response-output wpcf7-display-none"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</main><!-- #main -->
     

<?php
get_footer();
