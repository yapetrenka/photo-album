$(function(){
    'use strict';

	$('.flip-link').on('click', function(e){
        e.preventDefault();
        var $this = $(this),
            id = $this.attr('href').replace('#', '');
        $('.welcome__item').removeClass('welcome__item_active');
        $('.welcome__item[data-id="'+id+'"]').addClass('welcome__item_active');
    });

    $('#go_up').on('click', function(){
        $('body,html').animate({
            scrollTop: 0
        }, 'slow');
        return false;
    });

    $('.open-popup-link').magnificPopup({
        type: 'inline',
        midClick: true
    });


    $(function () {
        $('.open-popup-link').magnificPopup({
            type: 'inline',
            midClick: true
        });
        $(document).on('click', '.popup-close', function (e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    });


});