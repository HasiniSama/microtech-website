(function ($) {
    "use strict";

    /* Background Set */
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

})(jQuery);
