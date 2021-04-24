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
                        <p> Byzan JSC là thương hiệu lớn và uy tín trong ngành thiết kế và thi công nội thất, khác biệt với các đơn vị trên thị trường là Byzan chỉ làm một phong cách duy nhất là Hiện Đại. Đồng thời là đơn vị tiên phong tạo ra xu hướng trong phong cách hiện đại với những giải pháp về ứng dụng vật liệu, màu sắc và mảng khối đồng nhất trong phong cách hiện đại. Với 10 năm kinh nghiệm, Byzan hiện đang sở hữu nhà máy sản xuất cùng quy trình quản lý đạt chuẩn, đội ngũ được đào tạo bài bản. Nhằm đáp ứng nhu cầu khách hàng ngày càng gia tăng tại các tỉnh thành trong cả nước, với mục tiêu mở rộng và cung cấp tốt nhất các dịch vụ tiện ích cho khách hàng. Byzan hiện là đơn vị có nhiều công trình thi công nhất và luôn cập nhật những hình ảnh thực tế giúp khách hàng có những đánh giá khách quan nhất về chúng tôi. <br>Byzan JSC xin gửi lời mời hợp tác đến Quý đối tác là các tổ chức/Cá nhân quan tâm và mong muốn hợp tác kinh doanh dịch vụ Nội thất Nhà ở - Dịch vụ theo Phong cách Hiện đại.</p>
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
    <div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="home">...</div>
            <div role="tabpanel" class="tab-pane fade" id="profile">...</div>
            <div role="tabpanel" class="tab-pane fade" id="messages">...</div>
            <div role="tabpanel" class="tab-pane fade" id="settings">...</div>
        </div>

    </div>

</main><!-- #main -->

<?php
get_footer();
