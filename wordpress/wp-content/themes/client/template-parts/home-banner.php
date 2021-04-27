<section id="slideshow">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul class="list-unstyled">
                <?php
                $banners = prefix_get_option('opt-group-banner');
                if (isset($banners) && is_array($banners)) {
                    foreach ($banners as $key => $banner) {
                        $image = $banner['opt-group-banner-logo']['url'] ?? null;
                        $head = $banner['opt-group-banner-head'] ?? null;
                        $subhead = $banner['opt-group-banner-subhead'] ?? null;
                        $link = $banner['opt-group-banner-link'] ?? null;
                        ?>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1000"
                            data-thumb="<?php echo $image; ?>">
                            <img src="<?php echo $image; ?>"
                                 alt="<?php echo $head; ?>" title="<?php echo $head; ?>"
                                 data-lazyload="<?php echo $image; ?>"
                                 data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <span class="slider-overlay hidden-xs"></span>
                            <div class="caption lft ltb slide-title hidden-xs" data-x="center" data-y="center"
                                 data-voffset="-50" data-speed="1000" data-start="1900" data-easing="easeOutBack">
                                <?php echo $head; ?>
                            </div>
                            <div class="caption lfr ltl slide-description hidden-xs" data-x="center" data-y="center"
                                 data-speed="1000" data-start="2200" data-easing="easeOutBack">
                                <span class="border"></span><span><?php echo $subhead; ?></span><span
                                        class="border"></span></div>
                            <div class="caption lfb ltt slide-link hidden-xs" data-x="center" data-y="center"
                                 data-voffset="50"
                                 data-speed="1000" data-start="2400" data-easing="easeOutBack">
                                <a href="<?php echo $link; ?>" class="slide-read-more"
                                   title="<?php echo $head; ?>">Xem sản phẩm</a>
                            </div>
                        </li>
                        <?php
                    }
                } ?>
            </ul>
        </div>
    </div>
</section>
