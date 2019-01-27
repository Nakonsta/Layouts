$(function() {
    $('.slick-top').slick({
    	prevArrow: '',
    	nextArrow: '',
    	//autoplay: true,
  		autoplaySpeed: 1500,
  		dots: true,
 		infinite: true
	});
	
	$(".fa-search").on("click", function() {
		$(".search").toggle(1000);
	});

	$(window).scroll(function() {
		if ($(this).scrollTop() > 300){
			$('header').addClass("header__scroll");
		}
		else{
			$('header').removeClass("header__scroll");
		}
	});

	$('.menu__choose').click(function() {
		$(".menu__card").css("display", "none");
		var thisCard = '.' + $(this).attr('data-menu');
		$(thisCard).fadeIn(500);
		$(".menu__choose").removeClass("menu__active");
		$(this).addClass("menu__active");
		$(".menu__coffee").addClass("d-lg-block");
		$(".menu__text").removeClass("col-12");
		$(".menu__text").addClass("col-lg-8");
		$(".menu__all").css("display", "block");
	});


	$(".menu__all").click (function(evt) {
		evt.preventDefault();
		$(".menu__coffee").removeClass("d-lg-block");
		$(".menu__text").addClass("col-12");
		$(".menu__text").removeClass("col-lg-8");
		$(".menu__card-breakfasts, .menu__card-drinks, .menu__card-beans").fadeIn(500);
		$(".menu__breakfast, .menu__drinks, .menu__beans").addClass("menu__active");
		$(".menu__all").css("display", "none");
	});

	$('.reviews__carousel').slick({
		dots: true,
		arrows: false
	});

	$('select').selectize();

	ymaps.ready(init);
    function init(){
		var centers = [];
		var centersTexts = [];
		$('.map-button').each(function() {
			var point = $(this).attr('data-coordinates');
			centers.push(point);
			var point = $(this).text();
			centersTexts.push(point);
		});
        var myMap = new ymaps.Map("map", {
            center: [64.143943, -21.939843],
			zoom: 16
		});

		for (var i = 0; i < centers.length; i++) {
			var point = centers[i].split(', ');
			var text = 'Caffeinate, ' + centersTexts[i];
			var placemark = new ymaps.Placemark(point, {
				balloonContent: '<img src="http://img-fotki.yandex.ru/get/6114/82599242.2d6/0_88b97_ec425cf5_M" />',
				iconContent: text}
			, {
				preset: "islands#yellowStretchyIcon",
				balloonCloseButton: false,
				hideIconOnBalloonOpen: false
			});
			myMap.geoObjects.add(placemark);
		}

		myMap.behaviors.disable('scrollZoom');
		
		$('.menu__button-dark').click(function(){
			var country = '.' + $(this).attr('data-place');
			$('.map__panorama').hide();
			$(country).show();
			var coordinates = $(this).attr('data-coordinates').split(', ');
			coordinates = [parseFloat(coordinates[0]), parseFloat(coordinates[1])];
			myMap.setCenter(coordinates);
		});
	}
	
	//Map buttons

	$('body').on('click', '.map-button', function() {
		$('.map-button').removeClass('map-button-active');
		$(this).addClass('map-button-active');
	})

	
	$("#back-top").hide();

	// появление/затухание кнопки #back-top
	$(function (){
		$(window).scroll(function (){
			if ($(this).scrollTop() > 100){
				$('#back-top').fadeIn();
			} else{
				$('#back-top').fadeOut();
			}
		});

		// при клике на ссылку плавно поднимаемся вверх
		$('#back-top a').click(function (){
			$('body,html').scrollTo(0);
			return false;
		});
	});	


});