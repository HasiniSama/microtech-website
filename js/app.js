(function ($) {
    "use strict";

    initTimer();

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

    /* [ Timer ] */
    function initTimer(){
        if($('.timer').length){

            //var target_date = new Date("May 21,2021").getTime();
            var date = new Date();
            date.setDate(date.getDate() + 3);
            var target_date = date.getTime();

            //variables for time units
            var days,hours,minutes,seconds;
            var d = $('#day');
            var h = $('#hour');
            var m = $('#min');
            var s = $('#sec');

            setInterval(function(){
                //find the amount fo seconds between now and target
                var current_date = new Date().getTime();
                var seconds_left = (target_date - current_date)/1000;

                //time calculations
                days = parseInt(seconds_left/86400);
                day = '0' + days;
                seconds_left = seconds_left % 86400;

                hours = parseInt(seconds_left/3600);
                seconds_left = seconds_left % 3600;

                minutes = parseInt(seconds_left/60);
                seconds = parseInt(seconds_left % 60);

                //display
                d.text(days);
                h.text(hours);
                m.text(minutes);
                s.text(seconds);

            },1000);
        }
    }
})(jQuery);
