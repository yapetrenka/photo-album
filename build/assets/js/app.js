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
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJhcHAuanMiLCJzb3VyY2VzQ29udGVudCI6WyIkKGZ1bmN0aW9uKCl7XHJcbiAgICAndXNlIHN0cmljdCc7XHJcblxyXG5cdCQoJy5mbGlwLWxpbmsnKS5vbignY2xpY2snLCBmdW5jdGlvbihlKXtcclxuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgICAgdmFyICR0aGlzID0gJCh0aGlzKSxcclxuICAgICAgICAgICAgaWQgPSAkdGhpcy5hdHRyKCdocmVmJykucmVwbGFjZSgnIycsICcnKTtcclxuICAgICAgICAkKCcud2VsY29tZV9faXRlbScpLnJlbW92ZUNsYXNzKCd3ZWxjb21lX19pdGVtX2FjdGl2ZScpO1xyXG4gICAgICAgICQoJy53ZWxjb21lX19pdGVtW2RhdGEtaWQ9XCInK2lkKydcIl0nKS5hZGRDbGFzcygnd2VsY29tZV9faXRlbV9hY3RpdmUnKTtcclxuICAgIH0pO1xyXG5cclxuICAgICQoJyNnb191cCcpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgJCgnYm9keSxodG1sJykuYW5pbWF0ZSh7XHJcbiAgICAgICAgICAgIHNjcm9sbFRvcDogMFxyXG4gICAgICAgIH0sICdzbG93Jyk7XHJcbiAgICAgICAgcmV0dXJuIGZhbHNlO1xyXG4gICAgfSk7XHJcblxyXG59KTsiXSwic291cmNlUm9vdCI6Ii9zb3VyY2UvIn0=
