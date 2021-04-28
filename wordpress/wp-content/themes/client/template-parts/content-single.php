<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package client
 */

?>
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content main-content-single">
        <div id="single-title">
        <h2><?php echo get_the_title(); ?></h2>
        </div>
        <div id="single-content" class="single-content">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'client' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'client' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content -->

        <div class="single-single_readmore">
            <p><?php echo get_next_post_link('<span>>> Xem thêm: %link</span>');?></p>
            <p><?php echo get_previous_post_link('<span>>> Xem thêm: %link<span>'); ?></p>
        </div>

        <h3 class="section-title">Có thể bạn quan tâm</h3>
        <div class="single-related-loop row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 related-item1">
                 <div class="ih-item square effect6 from_top_and_bottom">
                    <a href="https://byzan.vn/mau-sac-cua-nam-2021/">
                       <div class="img"> <img src="https://byzan.vn/wp-content/uploads/2020/12/mau-sac-cua-nam-2021-2.jpg" alt="img"></div>
                       <div class="info">
                          <h3>XÁM TRUNG TÍNH LÀ 1 TRONG 2 MÀU SẮC CỦA NĂM 2021</h3>
                       </div>
                    </a>
                 </div>
                 <a class="related-item-title" href="https://byzan.vn/mau-sac-cua-nam-2021/"><span>XÁM TRUNG TÍNH LÀ 1 TRONG 2 MÀU SẮC CỦA NĂM 2021</span></a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 related-item2">
                 <div class="ih-item square effect6 from_top_and_bottom">
                    <a href="https://byzan.vn/xu-huong-thiet-ke-noi-that/">
                       <div class="img"> <img src="https://byzan.vn/wp-content/uploads/2020/10/1cce1e103156055.5f46b4b0bfadb.jpg" alt="img"></div>
                       <div class="info">
                          <h3>8 XU HƯỚNG THIẾT KẾ NỘI THẤT PHỔ BIẾN NĂM 2020</h3>
                       </div>
                    </a>
                 </div>
                 <a class="related-item-title" href="https://byzan.vn/xu-huong-thiet-ke-noi-that/"><span>8 XU HƯỚNG THIẾT KẾ NỘI THẤT PHỔ BIẾN NĂM 2020</span></a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 related-item3">
                 <div class="ih-item square effect6 from_top_and_bottom">
                    <a href="https://byzan.vn/phong-cach-noi-that-dan-dau-xu-huong-nam-2020/">
                       <div class="img"> <img src="https://byzan.vn/wp-content/uploads/2020/07/3-2.jpg" alt="img"></div>
                       <div class="info">
                          <h3>TÌM HIỂU PHONG CÁCH NỘI THẤT DẪN ĐẦU XU HƯỚNG NĂM 2020</h3>
                       </div>
                    </a>
                 </div>
                 <a class="related-item-title" href="https://byzan.vn/phong-cach-noi-that-dan-dau-xu-huong-nam-2020/"><span>TÌM HIỂU PHONG CÁCH NỘI THẤT DẪN ĐẦU XU HƯỚNG NĂM 2020</span></a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 related-item4">
                 <div class="ih-item square effect6 from_top_and_bottom">
                    <a href="https://byzan.vn/xu-huong-noi-that-2020/">
                       <div class="img"> <img src="https://byzan.vn/wp-content/uploads/2020/05/1.1.jpg" alt="img"></div>
                       <div class="info">
                          <h3>PHONG CÁCH HIỆN ĐẠI, SANG TRỌNG – ĐÁNH DẤU XU HƯỚNG NỘI THẤT NĂM 2020</h3>
                       </div>
                    </a>
                 </div>
                 <a class="related-item-title" href="https://byzan.vn/xu-huong-noi-that-2020/"><span>PHONG CÁCH HIỆN ĐẠI, SANG TRỌNG – ĐÁNH DẤU XU HƯỚNG NỘI THẤT NĂM 2020</span></a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 related-item5">
                 <div class="ih-item square effect6 from_top_and_bottom">
                    <a href="https://byzan.vn/10-mau-thiet-ke-noi-that-hien-dai-sang-trong/">
                       <div class="img"> <img src="https://byzan.vn/wp-content/uploads/2020/05/11-4-scaled.jpg" alt="img"></div>
                       <div class="info">
                          <h3>10+ MẪU THIẾT KẾ NỘI THẤT HIỆN ĐẠI, SANG TRỌNG CHO CHUNG CƯ, BIỆT THỰ VÀ NHÀ PHỐ NĂM 2020</h3>
                       </div>
                    </a>
                 </div>
                 <a class="related-item-title" href="https://byzan.vn/10-mau-thiet-ke-noi-that-hien-dai-sang-trong/"><span>10+ MẪU THIẾT KẾ NỘI THẤT HIỆN ĐẠI, SANG TRỌNG CHO CHUNG CƯ, BIỆT THỰ VÀ NHÀ PHỐ NĂM 2020</span></a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 related-item6">
                 <div class="ih-item square effect6 from_top_and_bottom">
                    <a href="https://byzan.vn/xu-hong-thiet-ke-noi-that-phong-ngu/">
                       <div class="img"> <img src="https://byzan.vn/wp-content/uploads/2020/04/8d61c641acc04a9e13d1.jpg" alt="img"></div>
                       <div class="info">
                          <h3>XU HƯỚNG THIẾT KẾ NỘI THẤT PHÒNG NGỦ ẤN TƯỢNG 2020</h3>
                       </div>
                    </a>
                 </div>
                 <a class="related-item-title" href="https://byzan.vn/xu-hong-thiet-ke-noi-that-phong-ngu/"><span>XU HƯỚNG THIẾT KẾ NỘI THẤT PHÒNG NGỦ ẤN TƯỢNG 2020</span></a>
              </div>
           </div>
        </div>
    </div>
</div>