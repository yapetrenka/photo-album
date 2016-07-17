$(function(){
    'use strict';

	$(document).on('click', '.flip-link', function(e){
        e.preventDefault();
        var $this = $(this),
            id = $this.attr('href').replace('#', '');
        $('.welcome__item').removeClass('welcome__item_active');
        $('.welcome__item[data-id="'+id+'"]').addClass('welcome__item_active');
    });

});