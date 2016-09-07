/**
 * Created by Косаностра on 26.08.2016.
 */
$(document).ready(function(){
    $('.js_order_popup').magnificPopup({
        type: 'inline',
        midClick: true,
        callbacks: {
        }
    });

    $('.slider-list').bxSlider({
        nextText: '<div class="right-slide"></div>',
        prevText: '<div class="left-slide"></div>',
        auto: true,
        speed: 1500,
        pause: 5000
    });
    $('.zoom').elevateZoom({
        gallery:'gallery_01',
        cursor: 'pointer',
        galleryActiveClass: 'active',
        imageCrossfade: true,
        borderColour: '#cccccc',
        borderSize: 1});
});