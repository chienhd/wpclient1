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
                        <h2>Công ty Cổ phần Kiến trúc Xây dựng Nhà Đẹp Hà Nội</h2>
                        <p>Số 1 đường Thanh Bình, mộ lao, Hà Đông, Hà Nội</p>
                        <p>Hotline : 0948439439</p>
                        <p>Email : namttbxd@gmail.com</p>
                        <p>Website : <a href="https://nhadephanoi.vn/">nhadephanoi.vn/</a></p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                     <img src="/wp-content/themes/client/assets/images/dai-dien-web-scaled-2-1.jpg">
                 </div>
             </div>
         </div>
         <div class="clear"></div>
         <div class="container"><h3 class="title-section">BẢN ĐỒ</h3></div>
         <div class="video-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.4268181936923!2d105.77843981542684!3d20.975521294968363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134532ce87031f1%3A0x95da8e7a511277f2!2zMSDEkC4gVGhhbmggQsOsbmgsIFAuIE3hu5kgTGFvLCBIw6AgxJDDtG5nLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1619967981334!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        </section>
    </div>
</main>

<?php
get_footer();
