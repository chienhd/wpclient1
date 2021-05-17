<?php

// Control core classes for avoid errors
if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_framework';

    //
    // Create options
    CSF::createOptions($prefix, array(
        'menu_title' => 'Tùy chọn chủ đề',
        'menu_slug' => 'my-framework',
    ));
    /*&======================Logo=============================*/
    // Create a top-tab
    CSF::createSection($prefix, array(
        'id' => 'logo', // Set a unique slug-like ID
        'title' => 'Logo',
        'fields' => array(
            array(
                'id' => 'opt-media-logo',
                'type' => 'media',
                'title' => 'Logo',
                'library' => 'image',
                'preview_size' => 'full'
            ),

        )
    ));
    /**======================End Logo=============================*/

    /**======================Banner*======================*/
    CSF::createSection($prefix, array(
        'id' => 'banner', // Set a unique slug-like ID
        'title' => 'Banner',
        'fields' => array(
            array(
                'id' => 'opt-group-banner',
                'type' => 'group',
                'title' => 'Group Banner',
                'fields' => array(
                    array(
                        'id' => 'opt-group-banner-head',
                        'type' => 'text',
                        'title' => 'Head',
                    ),
                    array(
                        'id' => 'opt-group-banner-subhead',
                        'type' => 'text',
                        'title' => 'Sub Head',
                    ),
                    array(
                        'id' => 'opt-group-banner-link',
                        'type' => 'text',
                        'title' => 'Link Product',
                    ),
                    array(
                        'id' => 'opt-group-banner-logo',
                        'type' => 'media',
                        'title' => 'Logo',
                        'library' => 'image',
                        'preview_size' => 'full'
                    ),
                ),
            ),
        )
    ));
    /**======================End Banner*======================*/

    /**==============================h1 heading==============================*/
    CSF::createSection($prefix, array(
        'id' => 'home-heading', // Set a unique slug-like ID
        'title' => 'Home Giới thiệu',
        'fields' => array(
            array(
                'id' => 'opt-h1-head',
                'type' => 'text',
                'title' => 'Tiêu đề',
            ),
            array(
                'id' => 'opt-h1-desc',
                'type' => 'wp_editor',
                'title' => 'Mô tả',
                'tinymce' => true,
            ),
        )
    ));
    /**==============================end h1 heading==============================*/

    /**==============================Thiết kế nội thất==============================*/
    CSF::createSection($prefix, array(
        'id' => 'home-design', // Set a unique slug-like ID
        'title' => 'Home Thiết Nế Nội Thất',
        'fields' => array(
            array(
                'id' => 'home-design-title',
                'type' => 'text',
                'title' => 'Tiêu đề',
            ),
            array(
                'id' => 'home-design-group',
                'type' => 'group',
                'title' => 'Dự án',
                'fields' => array(
                    array(
                        'id' => 'home-design-name-project',
                        'type' => 'text',
                        'title' => 'Tên Dự án',
                    ),
                    array(
                        'id' => 'home-design-group-select',
                        'type' => 'select',
                        'title' => 'Chọn một danh mục',
                        'placeholder' => 'Chọn một danh mục',
                        'options' => 'categories',
                    ),

                ),
            ),
        )
    ));
    /**==============================end Thiết kế nội thất==============================*/

    /**======================== Dự án đã hoàn thành =================================*/
    CSF::createSection($prefix, array(
        'id' => 'home-project', // Set a unique slug-like ID
        'title' => 'Home Thi công',
        'fields' => array(
            array(
                'id' => 'home-project-title',
                'type' => 'text',
                'title' => 'Tiêu đề',
            ),
            array(
                'id' => 'home-project-group',
                'type' => 'group',
                'title' => 'Dự án',
                'fields' => array(
                    array(
                        'id' => 'name',
                        'type' => 'text',
                        'title' => 'Tên Dự án',
                    ),
                    array(
                        'id' => 'category',
                        'type' => 'select',
                        'title' => 'Chọn một danh mục',
                        'placeholder' => 'Chọn một danh mục',
                        'options' => 'categories',
                    ),

                ),
            ),
        )
    ));
    /**======================== end Dự án đã hoàn thành =================================*/

    /**======================== chon chúng tôi ========================*/
    CSF::createSection($prefix, array(
        'id' => 'home-choose-us', // Set a unique slug-like ID
        'title' => 'Home Lựa chọn chúng tôi',
        'fields' => array(
            array(
                'id' => 'home-choose-us-1',
                'type' => 'text',
                'title' => 'Tiêu đề',
            ),
            array(
                'id'            => 'home-choose-us-2',
                'type'          => 'wp_editor',
                'title'         => 'Mô tả ngắn',
                'tinymce'       => true,
                'quicktags'     => true,
                'media_buttons' => true,
                'height'        => '100px',
            ),
            array(
                'id' => 'home-choose-us-group',
                'type' => 'group',
                'title' => 'Mô tả các block',
                'fields' => array(
                    array(
                        'id' => 'image',
                        'type' => 'media',
                        'title' => 'Icon',
                        'library' => 'image',
                        'preview_size' => 'full',
                        'url' => false
                    ),
                    array(
                        'id'            => 'content',
                        'type'          => 'wp_editor',
                        'title'         => 'Nội dung block',
                        'tinymce'       => true,
                        'quicktags'     => true,
                        'media_buttons' => true,
                        'height'        => '100px',
                    ),
                ),
            ),
        )
    ));
    /**======================== end chon chúng tôi ========================*/
    /*Contact form*/
     CSF::createSection($prefix, array(
        'id' => 'contact-form', // Set a unique slug-like ID
        'title' => 'Form liên Hệ',
        'fields' => array(
            array(
                'id' => 'contact-form-1',
                'type' => 'text',
                'title' => 'Thêm short code contact Form',
            ),
        )
    ));
    /*end Contact form*/
        /*Home Tin Tức*/
     CSF::createSection($prefix, array(
        'id' => 'home-news', // Set a unique slug-like ID
        'title' => 'Home Tin Tức',
        'fields' => array(
            array(
                'id' => 'home-news-1',
                'type' => 'text',
                'title' => 'Tiêu đề',
            ),
            array(
              'id'    => 'home-news-2',
              'type'  => 'code_editor',
              'title'   => 'video (iframe)',
              'sanitize' => false,
              'settings' => array(
                    'theme' => 'shadowfox',
                    'mode' => 'htmlmixed',
              ),
            ),
            array(
                'id' => 'home-news-read-all',
                'type' => 'text',
                'title' => 'Xem tất cả video(link url)',
            ),
            array(
              'id'          => 'home-news-3',
              'type'        => 'select',
              'title'       => 'Chọn bài posts (3 bài)',
              'placeholder' => 'Select posts',
              'chosen'      => true,
              'multiple'    => true,
              'sortable'    => true,
              'options'     => 'posts',
            ),
        )
    ));
    /*end Home Tin Tức*/
    /**================Footer Options================*/
    // Create a top-tab
    CSF::createSection($prefix, array(
        'id' => 'footer_tab', // Set a unique slug-like ID
        'title' => 'Footer',
    ));
    // Create a sub-tab
    CSF::createSection($prefix, array(
        'parent' => 'footer_tab', // The slug id of the parent section
        'title' => 'Footer Block 1',

        'fields' => array(

            // Footer block 1
            array(
                'id' => 'footer_tab_block_1',
                'type' => 'code_editor',
                'title' => 'HTML Editor 1',
                'settings' => array(
                    'theme' => 'shadowfox',
                    'mode' => 'htmlmixed',
                ),
                'default' => '<div class="widget footer_widget_name">
   <h4 class="footer_widget_title">CÔNG TY CỔ PHẦN KIẾN TRÚC<br>
      NỘI THẤT AHOME
   </h4>
   <p>Office &amp; Showroom Nội thất: Số 35 – Phan Kế Bính – Ba Đình – Hà Nội</p>
   <p>Showroom Decor: Số 116 – Phan Kế Bính – Ba Đình – Hà Nội</p>
   <p>Thời gian mở cửa: 8h30 – 18h30 kể cả thứ 7 và Chủ nhật.</p>
   <p>Có vị trí đỗ xe ô tô</p>
   <p><a href="https://www.google.com/maps/place/Thi%E1%BA%BFt+k%E1%BA%BF+n%E1%BB%99i+th%E1%BA%A5t+Ahome/@21.035396,105.806627,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab6912cd1d81:0xbf798b44563bc91b!8m2!3d21.035396!4d105.8088157?hl=vi-VN"><img class="size-full wp-image-98 alignleft" src="https://noithatahome.vn/wp-content/uploads/2018/04/icon-map.png" alt="" width="32" height="31"> Bản đồ chỉ dẫn </a></p>
</div>'
            ),

        )
    ));
    // Footer block 2
    CSF::createSection($prefix, array(
        'parent' => 'footer_tab',
        'title' => 'Footer Block 2',
        'fields' => array(

            // HTML Editor
            array(
                'id' => 'footer_tab_block_2',
                'type' => 'code_editor',
                'title' => 'HTML Editor 2',
                'settings' => array(
                    'theme' => 'shadowfox',
                    'mode' => 'htmlmixed',
                ),
                'default' => '<div class="widget footer_widget_contact">
   <h4 class="footer_widget_title">THÔNG TIN LIÊN HỆ</h4>
   <div class="textwidget">
      <p>Hotline : 098 10 888 66</p>
      <p>Email : ahome8866@gmail.com</p>
      <p>Website : <a href="https://noithatahome.vn">noithatahome.vn</a></p>
      <div class="social">
        <a href="https://www.facebook.com/ahome8866/">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="#">
          <i class="fa fa-google-plus" aria-hidden="true"></i>
        </a>
        <a href="https://plus.google.com/u/0/105582762864756550248">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCSyZd433RzC_ueCdsAxHf2g">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
      </div>

      <!-- dmca !-->
      <a href="//www.dmca.com/Protection/Status.aspx?ID=7bf91cdc-d573-4b4b-bca9-1d100a23314a&amp;refurl=https://noithatahome.vn/" title="DMCA.com Protection Status" class="dmca-badge"> <img src="https://images.dmca.com/Badges/_dmca_premi_badge_4.png?ID=7bf91cdc-d573-4b4b-bca9-1d100a23314a" alt="DMCA.com Protection Status"></a>
      <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>

      <!-- end dmca !-->
   </div>
</div>',
            ),

        )
    ));
    // HTML Editor
    CSF::createSection($prefix, array(
        'parent' => 'footer_tab',
        'title' => 'Footer Block 3',
        'fields' => array(

            // A textarea field
            array(
                'id' => 'footer_tab_block_3',
                'type' => 'code_editor',
                'title' => 'HTML Editor 3',
                'settings' => array(
                    'theme' => 'shadowfox',
                    'mode' => 'htmlmixed',
                ),
                'default' => '<div class="widget footer_widget_link">
   <h4 class="footer_widget_title">Liên kết</h4>
   <div class="textwidget">
      <ul>
         <li><a href="https://noithatahome.vn/thiet-ke-noi-that/">Thiết kế nội thất</a></li>
         <li><a href="https://noithatahome.vn/thi-cong-noi-that/">Thi công nội thất</a></li>
         <li><a href="https://noithatahome.vn/showroom-noi-that-ahome/">Nội thất cao cấp</a></li>
      </ul>
      
   </div>
</div>
<div class="widget footer_widget_newspapers">
   <div class="textwidget">
      <ul>
         <li><a href="http://dantri.com.vn/nha-dep/noi-that-ahome-ra-mat-bo-suu-tap-phong-cach-y-20180614093844195.htm"><img src="https://noithatahome.vn/wp-content/uploads/dt.png"></a></li>
         <li><a href="#"><img src="https://noithatahome.vn/wp-content/uploads/h1.png"></a></li>
         <li><a href="https://vnexpress.net/ben-trong-biet-thu-230m2-o-ha-noi-4011897.html"><img src="https://noithatahome.vn/wp-content/uploads/vn.png"></a></li>
         <li><a href="https://vtv.vn/video/khong-gian-xanh-kien-truc-su-luu-phuc-loc-to-am-gan-ket-yeu-thuong-424808.htm"><img src="https://noithatahome.vn/wp-content/uploads/vtv.png"></a></li>
      </ul>
   </div>
</div>'
            ),

        )
    ));
    // HTML Editor
    CSF::createSection($prefix, array(
        'parent' => 'footer_tab',
        'title' => 'Footer Block 4',
        'fields' => array(

            // A textarea field
            array(
                'id' => 'footer_tab_block_4',
                'type' => 'code_editor',
                'title' => 'HTML Editor 4',
                'settings' => array(
                    'theme' => 'shadowfox',
                    'mode' => 'htmlmixed',
                ),
                'default' => '<div class="widget footer_widget_support">
   <h3 class="footer_widget_title">HỖ TRỢ KHÁCH HÀNG</h3>
   <div class="textwidget">
      <ul>
         <li><a href="https://noithatahome.vn/chinh-sach-bao-mat-thong-tin-cua-ahome/">Chính sách bảo mật thông tin</a></li>
         <li><a href="https://noithatahome.vn/chinh-sach-va-quy-dinh-ve-dich-vu-cua-ahome/">Chính sách và quy định</a></li>
         <li><a href="https://noithatahome.vn/map-chi-duong-den-showroom-noi-that/">Sơ đồ chỉ đường</a></li>
      </ul>
   </div>
</div>'
            ),

        )
    ));
    // HTML Editor
    CSF::createSection($prefix, array(
        'parent' => 'footer_tab',
        'title' => 'Footer Block 5',
        'fields' => array(

            // A textarea field
            array(
                'id' => 'footer_tab_block_5',
                'type' => 'gallery',
                'title' => 'Ảnh bên dưới Footer',
                'add_title' => 'Add Images',
                'edit_title' => 'Edit Images',
                'clear_title' => 'Remove Images',
            ),

            array(
                'id' => 'footer_tab_block_5_2',
                'type' => 'text',
                'title' => 'Copy Right',
                'default' => '© 2018 - Nội thất Ahome'
            ),
            array(
                'id' => 'footer_tab_block_5_3',
                'type' => 'text',
                'title' => 'Phone',
            ),
            array(
                'id' => 'footer_tab_block_5_4',
                'type' => 'text',
                'title' => 'Zalo',
            ),
            array(
                'id' => 'footer_tab_block_5_5',
                'type' => 'text',
                'title' => 'Message',
            ),
        )
    ));
    /**================End Footer Options================*/


    /*Page Gioi Thieu*/
     CSF::createSection($prefix, array(
        'id' => 'page_introduce', // Set a unique slug-like ID
        'title' => 'Page Giới thiệu',
    ));
    // Create a sub-tab
    CSF::createSection($prefix, array(
        'parent' => 'page_introduce', // The slug id of the parent section
        'title' => 'Giới thiệu Block 1',

        'fields' => array(
            // Giới thiệu block 1
           array(
            'id' => 'page_introduce_block_1_title',
            'type' => 'text',
            'title' => 'Tiêu đề',
        ),
           array(
            'id'            => 'page_introduce_block_1_editor',
            'type'          => 'wp_editor',
            'title'         => 'Nội dung block 1',
            'tinymce'       => true,
            'quicktags'     => true,
            'media_buttons' => false,
            'height'        => '100px',
        ),
           array(
            'id' => 'page_introduce_block_1_image',
            'type' => 'media',
            'title' => 'Hình ảnh mô tả',
            'library' => 'image',
            'preview_size' => 'full',
            'url' => false
        ),

       ),
    ));
    CSF::createSection($prefix, array(
        'parent' => 'page_introduce', // The slug id of the parent section
        'title' => 'Giới thiệu Block 2',

        'fields' => array(
            // Giới thiệu block 1
           array(
            'id' => 'page_introduce_block_2_title',
            'type' => 'text',
            'title' => 'Tiêu đề',
        ),
           array(
            'id'            => 'page_introduce_block_2_editor',
            'type'          => 'wp_editor',
            'title'         => 'Nội dung block 2',
            'tinymce'       => true,
            'quicktags'     => true,
            'media_buttons' => false,
            'height'        => '100px',
        ),
            array(
            'id' => 'page_introduce_block_2_image',
            'type' => 'media',
            'title' => 'Hình ảnh mô tả',
            'library' => 'image',
            'preview_size' => 'full',
            'url' => false
        ),

       ),
    ));
    CSF::createSection($prefix, array(
        'parent' => 'page_introduce', // The slug id of the parent section
        'title' => 'Giới thiệu Block 3',

        'fields' => array(
            // Giới thiệu block 1
           array(
            'id' => 'page_introduce_block_3_title',
            'type' => 'text',
            'title' => 'Tiêu đề',
        ),
           array(
            'id'            => 'page_introduce_block_3_editor',
            'type'          => 'wp_editor',
            'title'         => 'Nội dung block 3',
            'tinymce'       => true,
            'quicktags'     => true,
            'media_buttons' => false,
            'height'        => '100px',
        ),
       ),
    ));
    CSF::createSection($prefix, array(
        'parent' => 'page_introduce', // The slug id of the parent section
        'title' => 'Giới thiệu Block 4',

        'fields' => array(
            // Giới thiệu block 1
           array(
            'id' => 'page_introduce_block_4_title',
            'type' => 'text',
            'title' => 'Tiêu đề',
        ),
           array(
            'id'            => 'page_introduce_block_4_editor',
            'type'          => 'wp_editor',
            'title'         => 'Nội dung block 4',
            'tinymce'       => true,
            'quicktags'     => true,
            'media_buttons' => false,
            'height'        => '100px',
        ),
            array(
            'id' => 'page_introduce_block_4_image',
            'type' => 'media',
            'title' => 'Hình ảnh mô tả',
            'library' => 'image',
            'preview_size' => 'full',
            'url' => false
        ),

       ),
    ));
    CSF::createSection($prefix, array(
        'parent' => 'page_introduce', // The slug id of the parent section
        'title' => 'Giới thiệu Block 5',

        'fields' => array(
            // Giới thiệu block 1
           array(
            'id' => 'page_introduce_block_5_title',
            'type' => 'text',
            'title' => 'Tiêu đề',
        ),
           array(
            'id'            => 'page_introduce_block_5_editor',
            'type'          => 'wp_editor',
            'title'         => 'Nội dung block 5',
            'tinymce'       => true,
            'quicktags'     => true,
            'media_buttons' => false,
            'height'        => '100px',
        ),
            array(
            'id' => 'page_introduce_block_5_image',
            'type' => 'media',
            'title' => 'Hình ảnh mô tả',
            'library' => 'image',
            'preview_size' => 'full',
            'url' => false
        ),

       ),
    ));
    /*End Page Gioi Thieu*/

}
