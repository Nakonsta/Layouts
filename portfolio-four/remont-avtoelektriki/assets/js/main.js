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
        $('.home-slider').slick();
        $('.gallery-slider-desktop').slick({
          centerMode: true,
          slidesToShow: 3,
          centerPadding: '0px',
          dots: true, 
          autoplay:true,
          infinite: true
        });
        $('.gallery-slider-mobile').slick({
          slidesToShow: 1,
          dots: true, 
          autoplay:true,    
          mobileFirst: true  
        });
        $('.review-slider').slick({
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 2,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
          ]
        });
     $('.right-slider').slick({
              arrows:false,
              dots: true,
              slidesToScroll: 1,
              slidesToShow: 1,
            });
});
