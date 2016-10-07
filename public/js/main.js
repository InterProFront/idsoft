/**
 * Created by Косаностра on 26.08.2016.
 */
$(document).ready(function () {
    $('.js_order_popup').magnificPopup({
        type: 'inline',
        midClick: true,
        callbacks: {}
    });

    $('.slider-list').bxSlider({
        nextText: '<div class="right-slide"></div>',
        prevText: '<div class="left-slide"></div>',
        auto: true,
        speed: 1500,
        pause: 5000,
        responsive: true
    });
    $('.zoom').elevateZoom({
        gallery: 'gallery_01',
        cursor: 'pointer',
        galleryActiveClass: 'active',
        imageCrossfade: true,
        borderColour: '#cccccc',
        borderSize: 1
    });

    $('.mobile-button').on('click',function(){
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $('.wrap.popup').fadeOut();
        }else{
            $(this).addClass('active');
            $('.wrap.popup').fadeIn();
        }
    });


    //===============================================================
    //======= Обработчики для подсветки текущего пунтка меню ========
    //===============================================================
    var items = document.location.pathname;
    var category = items.split('/')[1];
    var category2 = items.split('/')[2];
    $('.all-site-menu').each(function(){
       if($(this).attr('href') == '/'+category){
           console.log($(this).attr('href')+'  '+category);
           $(this).closest('li').addClass('active');
       }else if($(this).attr('href') == '/inf/'+category2){
           $(this).closest('li').addClass('active');
       }
    });
    $('.menu-item .link').each(function(){
        if($(this).attr('href') == items  ){
            $(this).closest('.menu-item').addClass('active');
        }
    });

    $('.item-popup a').each(function(){
        if($(this).attr('href') == items  ){
            $(this).closest('.item-popup').addClass('active');
        }
    });
    $('.type-menu .client-filter').each(function(){
        $href = $(this).attr('href').split('/');
        if( $href[3] == items.split('/')[3]){
            $(this).closest('li').addClass('active');
        }
    });
    $('.city-menu .client-filter').each(function(){
        $href = $(this).attr('href').split('/');
        if( $href[2] == items.split('/')[2] ){
            $(this).closest('li').addClass('active');
        }
    });

    $('#ask-me').magnificPopup({
        type: 'inline'
    });
    $('#buy').magnificPopup({
        type: 'inline'
    });

    $('.open-close-button a').on('click',function(e){

        if($(this).hasClass('open')){
            $(this).text('Свернуть').addClass('close').removeClass('open');
        }else{
            $(this).text('Развернуть').addClass('open').removeClass('close');
        }
        $('.parameters-block').slideToggle();
        e.preventDefault();
    });
});