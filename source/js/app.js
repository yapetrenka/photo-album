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

});