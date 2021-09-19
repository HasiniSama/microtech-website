(function ($) {
    "use strict";

    /* [ Fixed Header ] */
    var header = $('.container-menu');
    var wrapMenu = $('.wrap-menu');

    if($('.top-bar').length > 0) {
        var posWrapHeader = $('.top-bar').height();
    }
    else {
        var posWrapHeader = 0;
    }
    

    if($(window).scrollTop() > posWrapHeader) {
        $(header).addClass('fix-menu');
        $(wrapMenu).css('top',0); 
    }  
    else {
        $(header).removeClass('fix-menu');
        $(wrapMenu).css('top',posWrapHeader - $(this).scrollTop()); 
    }

    $(window).on('scroll',function(){
        if($(this).scrollTop() > posWrapHeader) {
            $(header).addClass('fix-menu');
            $(wrapMenu).css('top',0); 
        }  
        else {
            $(header).removeClass('fix-menu');
            $(wrapMenu).css('top',posWrapHeader - $(this).scrollTop()); 
        } 
    });

    /* [ Show / hide modal search ] */
    $('.js-show-modal-search').on('click', function(){
        $('.modal-search-header').addClass('show-modal-search');
        $(this).css('opacity','0');
    });

    $('.js-hide-modal-search').on('click', function(){
        $('.modal-search-header').removeClass('show-modal-search');
        $('.js-show-modal-search').css('opacity','1');
    });

    $('.container-search-header').on('click', function(e){
        e.stopPropagation();
    });

})(jQuery);
