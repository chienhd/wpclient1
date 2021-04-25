<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package client
 */

?>

<footer id="footer" class="site-footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-footer">
                    <?php echo prefix_get_option('footer_tab_block_1'); ?>
                </div>
                <div class="col-md-3 col-footer">
                    <?php echo prefix_get_option('footer_tab_block_2'); ?>
                </div>
                <div class="col-md-3 col-footer">
                    <?php echo prefix_get_option('footer_tab_block_3'); ?>
                </div>
                <div class="col-md-3 col-footer">
                    <?php echo prefix_get_option('footer_tab_block_4'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    $gallery_opt = prefix_get_option('footer_tab_block_5');
    $gallery_ids = explode(',', $gallery_opt);
    if (!empty($gallery_ids)) {
        ?>
        <div class="container">
            <div class="footer_bottom">
                <ul class="clearfix">
                    <?php
                    foreach ($gallery_ids as $gallery_item_id) {
                        echo '<li>' . wp_get_attachment_image($gallery_item_id, 'full') . '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <?php
    }
    ?>

    <div class="copyright text-center"><?php echo prefix_get_option('footer_tab_block_5_2') ?></div>

    </div>
    </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<a href="#" class="back-to-top"><img src="/wp-content/themes/client/assets/images/back-to-top.png" alt="to top"></a>
<div class="support">
    <div class="support-item " style="background: #1e130b">
        <a href="https://m.me/ahome8866" style="color: #fff">
            <img src="https://noithatahome.vn//messicon.png">Messenger
        </a>
    </div>
    <div class="support-item " style="background: #1e130b">
        <a href="tel:0981088866" style="color: #fff">
            <img src="https://noithatahome.vn//phoneicon-1.png">0981088866
        </a>
    </div>
    <div class="support-item " style="background: #1e130b">
        <a href="https://zalo.me/0973188866" style="color: #fff">
            <img src="https://noithatahome.vn//zaloicon.png">Zalo
        </a>
    </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
