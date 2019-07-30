$(document).ready(function() {


	$('.pdbor').change(function(){
		if($(this).prop('checked')){
			$(".vinn").fadeIn(500);
		}
		else{
			$(".vinn").fadeOut(500);
		}
	});


    $('.svzsnm').click(function() {
        console.log('feedbackotpravka');
    });
    $(".carousel").carousel({
        interval: 4100
    })
    $(".auto-brands .bxslider").bxSlider({
        pause: 4000,
        auto: true,
        easing: 'linear',
        slideWidth: 110,
        minSlides: 7,
        maxSlides: 7,
        moveSlides: 1,
        slideMargin: 10,
        responsive: false,
        pager: false
    });
    $(".products .bxslider").bxSlider({
        pause: 4000,
        auto: true,
        easing: 'linear',
        slideWidth: 166,
        minSlides: 5,
        maxSlides: 5,
        moveSlides: 1,
        slideMargin: 10,
        responsive: false,
        pager: false
    });
    $(".featured-gallery .bxslider").bxSlider({
        pause: 4000,
        auto: true,
        easing: 'linear',
        slideWidth: 220,
        minSlides: 4,
        maxSlides: 4,
        moveSlides: 1,
        slideMargin: 20,
        responsive: false,
        pager: false
    });
    $('.button-search').bind('click', function() {
        url = $('base').attr('href') + 'index.php?route=product/search';
        var filter_name = $('input[name=\'filter_name\']').attr('value');
        if (filter_name) {
            url += '&filter_name=' + encodeURIComponent(filter_name);
        }
        location = url;
    });
    $('#header input[name=\'filter_name\']').bind('keydown', function(e) {
        if (e.keyCode == 13) {
            url = $('base').attr('href') + 'index.php?route=product/search';
            var filter_name = $('input[name=\'filter_name\']').attr('value');
            if (filter_name) {
                url += '&filter_name=' + encodeURIComponent(filter_name);
            }
            location = url;
        }
    });
    $('#cart > .heading a').live('click', function() {
        $('#cart').addClass('active');
        $('#cart').load('index.php?route=module/cart #cart > *');
        $('#cart').live('mouseleave', function() {
            $(this).removeClass('active');
        });
    });
    $('#menu ul > li > a + div').each(function(index, element) {
        if ($.browser.msie && ($.browser.version == 7 || $.browser.version == 6)) {
            var category = $(element).find('a');
            var columns = $(element).find('ul').length;
            $(element).css('width', (columns * 143) + 'px');
            $(element).find('ul').css('float', 'left');
        }
        var menu = $('#menu').offset();
        var dropdown = $(this).parent().offset();
        i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#menu').outerWidth());
        if (i > 0) {
            $(this).css('margin-left', '-' + (i + 5) + 'px');
        }
    });
    if ($.browser.msie) {
        if ($.browser.version <= 6) {
            $('#column-left + #column-right + #content, #column-left + #content').css('margin-left', '195px');
            $('#column-right + #content').css('margin-right', '195px');
            $('.box-category ul li a.active + ul').css('display', 'block');
        }
        if ($.browser.version <= 7) {
            $('#menu > ul > li').bind('mouseover', function() {
                $(this).addClass('active');
            });
            $('#menu > ul > li').bind('mouseout', function() {
                $(this).removeClass('active');
            });
        }
    }
    $('.success img, .warning img, .attention img, .information img').live('click', function() {
        $(this).parent().fadeOut('slow', function() {
            $(this).remove();
        });
    });
    $("#fb_phone").mask("+375 (99) 999-99-99");
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.fixed_menu').fadeIn();
        } else {
            $('.fixed_menu').fadeOut();
        }
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
    });
    var link = window.location.pathname;
    $('.topmenu li a').each(function(indx) {
        if ($(this).attr('href') == link) {
            $(this).parent('li').addClass('curr');
        }
    });
    $('.fixed_menu li a').each(function(indx) {
        if ($(this).attr('href') == link) {
            $(this).parent('li').addClass('curr');
        }
    });
    $('.botmenu li a').each(function(indx) {
        if ($(this).attr('href') == link) {
            $(this).parent('li').addClass('curr');
        }
    });
});

function getURLVar(urlVarName) {
    var urlHalves = String(document.location).toLowerCase().split('?');
    var urlVarValue = '';
    if (urlHalves[1]) {
        var urlVars = urlHalves[1].split('&');
        for (var i = 0; i <= (urlVars.length); i++) {
            if (urlVars[i]) {
                var urlVarPair = urlVars[i].split('=');
                if (urlVarPair[0] && urlVarPair[0] == urlVarName.toLowerCase()) {
                    urlVarValue = urlVarPair[1];
                }
            }
        }
    }
    return urlVarValue;
}

function addToCart(product_id, quantity) {
    quantity = typeof(quantity) != 'undefined' ? quantity : 1;
    $.ajax({
        url: 'index.php?route=checkout/cart/add',
        type: 'post',
        data: 'product_id=' + product_id + '&quantity=' + quantity,
        dataType: 'json',
        success: function(json) {
            $('.success, .warning, .attention, .information, .error').remove();
            if (json['redirect']) {
                location = json['redirect'];
            }
            if (json['success']) {
                $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
                $('.success').fadeIn('slow');
                if (json['total_sum'] != 0) {
                    $('#cart_visible').css("display", "block");
                    $('#empty_cart').css("display", "none");
                } else {
                    $('#cart_visible').css("display", "none");
                    $('#empty_cart').css("display", "block");
                }
                $('#cart-total1').html(json['total']);
                $('#cart-total_sum').html(json['total_sum']);
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            }
        }
    });
}

function addToWishList(product_id) {
    $.ajax({
        url: 'index.php?route=account/wishlist/add',
        type: 'post',
        data: 'product_id=' + product_id,
        dataType: 'json',
        success: function(json) {
            $('.success, .warning, .attention, .information').remove();
            if (json['success']) {
                $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
                $('.success').fadeIn('slow');
                $('#wishlist-total').html(json['total']);
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            }
        }
    });
}

function addToCompare(product_id) {
    $.ajax({
        url: 'index.php?route=product/compare/add',
        type: 'post',
        data: 'product_id=' + product_id,
        dataType: 'json',
        success: function(json) {
            $('.success, .warning, .attention, .information').remove();
            if (json['success']) {
                $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
                $('.success').fadeIn('slow');
                $('#compare-total').html(json['total']);
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            }
        }
    });
}
$('#sandbox-container').datepicker({
    format: "dd.mm.yyyy",
    weekStart: 1
});
$('#sandbox-container_modal').datepicker({
    format: "dd.mm.yyyy",
    weekStart: 1
});

function reset() {
    $('input[name=fio]').val("");
    $('input[name=phone]').val("");
    $("#_wt option[value='BR']").attr("selected", "selected");
    $("#_techCentrum option[value='BR']").attr("selected", "selected");
    $('#sandbox-container').val("");
    $('#comments').val("");
    $('input[name=contact_modal]').val("");
    $("#_wt_modal option[value='BR']").attr("selected", "selected");
    $("#_techCentrum_modal option[value='BR']").attr("selected", "selected");
    $('#sandbox-container_modal').val("");
    $('#comments_modal').val("");
}

function showMessg(ttl, data) {
    $('#dialog-message').html(data);
    $('#dialog-message').attr("title", ttl);
    $("#dialog-message").dialog({
        modal: true,
        buttons: {
            Ok: function() {
                $(this).dialog("close");
            }
        }
    });
}

function sendmail(idform) {
    if ($('input[name=phone]').attr("value") == "") {
        showMessg('Сообщение', 'Укажите номер телефона или E-mail')
        return;
    }
    if ($("#_techCentrum option:selected").val() == "BR") {
        showMessg('Сообщение', 'Выберите автотехцентр')
        return;
    }
    switch (idform) {
        case 'skidka':
            break;
    }

    res = '<table>' + '<tr><td>Телефон/E-mail:</td><td>' + $('input[name=phone]').attr("value") + '</td></tr>' + '</td></tr>' + '<tr><td>Комментарий:</td><td>' + $("textarea[name=comment]").val() + '</td></tr>' + '</table>';
    subject_val = $("#_techCentrum option:selected").text();
    $.ajax({
        type: "POST",
        url: "sendmail.php?zajavka=1",
        data: {
            html: res,
            subject: subject_val
        },
        success: function(data) {
            showMessg('Сообщение', 'Менеджер свяжется в вами в ближайшее время.');
            reset();
            return;
        }
    });
}

function showError_modal(data) {
    $('#dialog-message_modal').html(data);
}

function showSuccess_modal(data) {
    $('#form_ord_rep .form-container').html(data);
}

function sendmail_modal() {
    var asf = $('input[name=asf]').prop('checked');
    if ($('input[name=contact_modal]').val() == "") {
        showError_modal('Укажите номер телефона');
        $('input[name=contact_modal]').css('border', '1px solid red');
        return;
    }
    dataLayer.push({
        'event': 'form_remont_success'
    });
    var ms;
    if($('.pdbor').prop('checked')){
    	 ms = "<td>VIN:</td>" + '<td>' + $('input[name=vin_modal]').attr("value") + '</td>';
    	console.log(ms);
    }
    console.log(ms);

    res = '<table>' + '<tr><td>Телефон:</td><td>' + $('input[name=contact_modal]').attr("value") + '</td></tr>' + '<tr><td>Комментарий:</td><td>' + $("textarea[name=comment_modal]").val() + '</td></tr>' + '<tr>'+ms+'</tr>' +'</table>';
    subject_val = $("#_techCentrum_modal option:selected").text();
    $.ajax({
        type: "POST",
        url: "sendmail.php?zajavka=1",
        data: {
            html: res,
            subject: subject_val,
            asf: asf
        },
        success: function(data) {
            showSuccess_modal('<div class="text-report">Спасибо! Ваша заявка успешно отправлена.</div>');
            reset();
            return;
        }
    });
}

function show_window(id) {
    $('#' + id).prev('.blackout').toggle();
    $('#' + id).toggle();
    normalize_modal();
}
$(window).resize(function() {
    normalize_modal();
});

function normalize_modal() {
    var wind_height = $(window).height();
    var width = $(window).width();
    if (width < 1024) {
        $('#form_ord_rep .form-container').css('height', 'auto');
    }
}