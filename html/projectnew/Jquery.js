(function ($) {
    $.fn.hightlight=function () {
        return $(this).each(function (index,element) {
            $(element).css('background','red');
        });
    }
})(jQuery);