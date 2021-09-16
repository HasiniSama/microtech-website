(function ($) {
    "use strict";
    /* [ Show modal search ] */
    $('.js-show-modal-search').on('click', function(){
        $('.modal-search-header').addClass('show-modal-search');
        $(this).css('opacity','0');
    });

})(jQuery);
