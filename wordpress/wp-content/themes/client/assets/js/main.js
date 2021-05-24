$('.tp-banner').revolution({
    dottedOverlay: 'none',
    delay: 5000,
    startwidth: 1600,
    startheight: 725,

    hideThumbs: 200,
    thumbWidth: 50,
    thumbHeight: 40,
    thumbAmount: 2,

    navigationType: 'bullet',
    navigationArrows: 'solo',
    navigationStyle: 'round',

    touchenabled: 'on',
    onHoverStop: 'off',

    swipe_velocity: 0.7,
    swipe_min_touches: 1,
    swipe_max_touches: 1,
    drag_block_vertical: false,

    spinner: 'none',
    keyboardNavigation: 'off',

    navigationHAlign: 'center',
    navigationVAlign: 'bottom',
    navigationHOffset: 0,
    navigationVOffset: 20,

    soloArrowLeftHalign: 'left',
    soloArrowLeftValign: 'center',
    soloArrowLeftHOffset: 20,
    soloArrowLeftVOffset: 0,

    soloArrowRightHalign: 'right',
    soloArrowRightValign: 'center',
    soloArrowRightHOffset: 20,
    soloArrowRightVOffset: 0,

    shadow: 0,
    fullWidth: 'on',
    fullScreen: 'off',

    stopLoop: 'off',
    stopAfterLoops: -1,
    stopAtSlide: -1,

    shuffle: 'off',

    autoHeight: 'off',
    forceFullWidth: 'off',
    fullScreenAlignForce: 'off',
    minFullScreenHeight: 0,
    hideNavDelayOnMobile: 1500,

    hideThumbsOnMobile: 'off',
    hideBulletsOnMobile: 'off',
    hideArrowsOnMobile: 'off',
    hideThumbsUnderResolution: 0,

    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    hideAllCaptionAtLilmit: 0,
    startWithSlide: 0,
    fullScreenOffsetContainer: ''
});

$(".footer_widget_title").click(function () {
    $(this).next().slideToggle('active');
});
$(".menu-item-has-children").click(function () {
    let submenu = $(this).children('.sub-menu').hasClass('sub-menu-active')
    if(submenu) {
        $(this).children('.sub-menu').removeClass('sub-menu-active');
    } else {
        $(".menu-item-has-children").children('.sub-menu').removeClass('sub-menu-active');
        $(this).children('.sub-menu').addClass('sub-menu-active');
    }
});

$('.btn-play-news-video').click(function() {
    let $this = $('.btn-play-news-video');
    let img = $this.next('img');
    let iframe = $('#iframe-news');
    $this.hide();
    img.hide();
    iframe[0].src += "?autoplay=1&mute=1";
    iframe.show();
});

$('.kts-right-item').mouseover(function() {
    let i = $(this).attr('data-index');
    $('.kts-left-item').removeClass('kts-left-item-show');
    $('.kts-left-item' + i).addClass('kts-left-item-show');

});

$('.back-to-top').on('click', function(e){
    $("html, body").animate({scrollTop: $("#top").offset().top}, 500);
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 350) {
        $('.back-to-top').fadeIn();
    } else {
        $('.back-to-top').fadeOut();
    }
});

if($('.introducr-block-5-slider').length) {
    $('.introducr-block-5-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        items:1,
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    })
}