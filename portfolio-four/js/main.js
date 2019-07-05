$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.header__fixed').slideDown();
        } else {
            $('.header__fixed').slideUp();
        }
    });
    $('.header__fixed_menu').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 400);
        return false;
    });
    $('.slider-main').slick({
        slidesToShow: 1,
        dots: true, 
        //autoplay: true  	  
    });
    if($('.news-page').length) {
        $('.pagination').pagination({
            items: 100,
            itemsOnPage: 9,
            cssStyle: 'light-theme',
            nextText: '>'
        });
    }

    $('body').on('click', '.pagination-begin', function() {
        if(!($('.pagination-begin.active').length)) {
            $(this).addClass('active');
        }
    });
    
});
