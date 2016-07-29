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
            midClick: true,
            gallery: {
                enabled: true
            },
        });
        $(document).on('click', '.popup-close', function (e) {
            e.preventDefault();
            $.magnificPopup.close();
        });



        $('.gallery-link').magnificPopup({
            type: 'ajax',
            mainClass: 'gallery-popup',
            gallery: {
                enabled: true,
                arrowMarkup: '<button type="button" class="mfp-arrow mfp-arrow-%dir%"><svg class="icon svg-arrow_%dir%-dims"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#arrow_%dir%"></use></svg></button>'
            }
        });

    });


});
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJhcHAuanMiLCJzb3VyY2VzQ29udGVudCI6WyIkKGZ1bmN0aW9uKCl7XHJcbiAgICAndXNlIHN0cmljdCc7XHJcblxyXG5cdCQoJy5mbGlwLWxpbmsnKS5vbignY2xpY2snLCBmdW5jdGlvbihlKXtcclxuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgICAgdmFyICR0aGlzID0gJCh0aGlzKSxcclxuICAgICAgICAgICAgaWQgPSAkdGhpcy5hdHRyKCdocmVmJykucmVwbGFjZSgnIycsICcnKTtcclxuICAgICAgICAkKCcud2VsY29tZV9faXRlbScpLnJlbW92ZUNsYXNzKCd3ZWxjb21lX19pdGVtX2FjdGl2ZScpO1xyXG4gICAgICAgICQoJy53ZWxjb21lX19pdGVtW2RhdGEtaWQ9XCInK2lkKydcIl0nKS5hZGRDbGFzcygnd2VsY29tZV9faXRlbV9hY3RpdmUnKTtcclxuICAgIH0pO1xyXG5cclxuICAgICQoJyNnb191cCcpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgJCgnYm9keSxodG1sJykuYW5pbWF0ZSh7XHJcbiAgICAgICAgICAgIHNjcm9sbFRvcDogMFxyXG4gICAgICAgIH0sICdzbG93Jyk7XHJcbiAgICAgICAgcmV0dXJuIGZhbHNlO1xyXG4gICAgfSk7XHJcblxyXG4gICAgJCgnLm9wZW4tcG9wdXAtbGluaycpLm1hZ25pZmljUG9wdXAoe1xyXG4gICAgICAgIHR5cGU6ICdpbmxpbmUnLFxyXG4gICAgICAgIG1pZENsaWNrOiB0cnVlXHJcbiAgICB9KTtcclxuXHJcblxyXG4gICAgJChmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgJCgnLm9wZW4tcG9wdXAtbGluaycpLm1hZ25pZmljUG9wdXAoe1xyXG4gICAgICAgICAgICB0eXBlOiAnaW5saW5lJyxcclxuICAgICAgICAgICAgbWlkQ2xpY2s6IHRydWUsXHJcbiAgICAgICAgICAgIGdhbGxlcnk6IHtcclxuICAgICAgICAgICAgICAgIGVuYWJsZWQ6IHRydWVcclxuICAgICAgICAgICAgfSxcclxuICAgICAgICB9KTtcclxuICAgICAgICAkKGRvY3VtZW50KS5vbignY2xpY2snLCAnLnBvcHVwLWNsb3NlJywgZnVuY3Rpb24gKGUpIHtcclxuICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgICAgICAgICAkLm1hZ25pZmljUG9wdXAuY2xvc2UoKTtcclxuICAgICAgICB9KTtcclxuXHJcblxyXG5cclxuICAgICAgICAkKCcuZ2FsbGVyeS1saW5rJykubWFnbmlmaWNQb3B1cCh7XHJcbiAgICAgICAgICAgIHR5cGU6ICdhamF4JyxcclxuICAgICAgICAgICAgbWFpbkNsYXNzOiAnZ2FsbGVyeS1wb3B1cCcsXHJcbiAgICAgICAgICAgIGdhbGxlcnk6IHtcclxuICAgICAgICAgICAgICAgIGVuYWJsZWQ6IHRydWUsXHJcbiAgICAgICAgICAgICAgICBhcnJvd01hcmt1cDogJzxidXR0b24gdHlwZT1cImJ1dHRvblwiIGNsYXNzPVwibWZwLWFycm93IG1mcC1hcnJvdy0lZGlyJVwiPjxzdmcgY2xhc3M9XCJpY29uIHN2Zy1hcnJvd18lZGlyJS1kaW1zXCI+PHVzZSB4bWxuczp4bGluaz1cImh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmtcIiB4bGluazpocmVmPVwiLi8uLi9hc3NldHMvaW1nL2ljb25zL3Nwcml0ZS5zdmcjYXJyb3dfJWRpciVcIj48L3VzZT48L3N2Zz48L2J1dHRvbj4nXHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuXHJcbiAgICB9KTtcclxuXHJcblxyXG59KTsiXSwic291cmNlUm9vdCI6Ii9zb3VyY2UvIn0=
