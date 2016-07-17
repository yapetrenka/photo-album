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
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJmaWxlIjoiYXBwLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJChmdW5jdGlvbigpe1xyXG4gICAgJ3VzZSBzdHJpY3QnO1xyXG5cclxuXHQkKGRvY3VtZW50KS5vbignY2xpY2snLCAnLmZsaXAtbGluaycsIGZ1bmN0aW9uKGUpe1xyXG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuICAgICAgICB2YXIgJHRoaXMgPSAkKHRoaXMpLFxyXG4gICAgICAgICAgICBpZCA9ICR0aGlzLmF0dHIoJ2hyZWYnKS5yZXBsYWNlKCcjJywgJycpO1xyXG4gICAgICAgICQoJy53ZWxjb21lX19pdGVtJykucmVtb3ZlQ2xhc3MoJ3dlbGNvbWVfX2l0ZW1fYWN0aXZlJyk7XHJcbiAgICAgICAgJCgnLndlbGNvbWVfX2l0ZW1bZGF0YS1pZD1cIicraWQrJ1wiXScpLmFkZENsYXNzKCd3ZWxjb21lX19pdGVtX2FjdGl2ZScpO1xyXG4gICAgfSk7XHJcblxyXG59KTsiXSwic291cmNlUm9vdCI6Ii9zb3VyY2UvIn0=
