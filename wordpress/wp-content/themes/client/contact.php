<?php
/**
 * Template Name: contact

 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package client
 */

get_header();
?>

<main id="contact" class="page-body-content">
    <?php get_template_part('template-parts/home', 'banner'); ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
    <div id="page-contact">
        <section class="section-nd">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h2>CÔNG TY CỔ PHẦN KIẾN TRÚC NỘI THẤT AHOME</h2>
                        <p>Office &amp; Showroom Nội thất: Số 35 Phan Kế Bính – Ba Đình – Hà Nội</p>
                        <p>Showroom Decor: Số 116 Phan Kế Bính – Ba Đình – Hà Nội</p>
                        <p>Thời gian mở cửa: 8h30 – 18h30 kể cả thứ 7 và Chủ Nhật</p>
                        <p>Hotline : 098.10.888.66</p>
                        <p>Email : ahome8866@gmail.com</p>
                        <p>Website : <a href="https://noithatahome.vn">noithatahome.vn</a></p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                     <img src="https://noithatahome.vn/wp-content/uploads/map-01.jpg">
                 </div>
             </div>
         </div>
         <div class="clear"></div>
         <div class="container"><h3 class="title-section">BẢN ĐỒ</h3></div>
         <div class="video-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9322673729157!2d105.80662701476344!3d21.035395985994803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab6912cd1d81%3A0xbf798b44563bc91b!2zVGhp4bq_dCBr4bq_IG7hu5lpIHRo4bqldCBBaG9tZQ!5e0!3m2!1svi!2s!4v1610337082778!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
        </section>
    </div>
</main>

<?php
get_footer();
