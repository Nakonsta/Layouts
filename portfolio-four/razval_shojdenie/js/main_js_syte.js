jQuery(document).ready(function($) {
    $(".bxslider2").owlCarousel({
        items: 3,
        nav: true,
        margin: 15,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        navText: ['<span class="prev__slide__news"></span>', '<span class="next__slide__news"></span>'],
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            480: {
                items: 2,
                nav: false
            },
            705: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });
    $('.poisk_btn').click(function() {
        $('#ya-site-form1').toggleClass('act');
    });
    $('.menu_btn_buter').click(function() {
        $('.hidden_menu .topmenu').toggleClass('act');
    });
    $('.parents_li a').on("click", function() {
        var open = $(this).parents('.parents_li').attr('data-open');
        if (open == 'false') {
            $('.parents_li').attr('data-open', 'false').removeClass('act');
            $(this).parents('.parents_li').attr('data-open', 'true');
            $(this).parents('.parents_li').addClass('act');
            return false;
        }
    });

    function openCloseData() {
        $('.parents_li').each(function(index, el) {
            $(el).attr({
                'data-open': 'false'
            });
        });
    }
    openCloseData();
    if (window.matchMedia('(max-width: 1216px)').matches) {}
    if (window.matchMedia('(max-width: 1050px)').matches) {}
    if (window.matchMedia('(max-width: 480px)').matches) {
        $(".new_footer .fk-btn span").text("Заказать звонок с сайта");
        $('.hidden_btn').click(function() {
            $('.hidden_text').addClass('act');
            $(this).addClass('act');
        });
    }
    $('.category-info table.prices').wrapAll('<div class="scroll">');
    $('.category-info table.to-toy').wrapAll('<div class="scroll">');


    var indexTab;
    $(".tbs_inp").click(function() {
        if ($(this).hasClass("active")) return;
        indexTab = $(this).index();
        $('#response-sel option:eq(' + (indexTab) + ')').attr("selected", "selected");  
        console.log($(this).children("input"));
        functionClick.call($(this).children("input"));
        $(".inl-bl").prop("checked", false);
        $(this).children(".inl-bl").prop("checked", true);
    });

    $("#response-sel").change(function() {

        indexTab = $(this).find("option:selected").index();
        
        $(".inl-bl").prop("checked", false);  
        $('.tbs_inp:eq(' + (indexTab) + ') .inl-bl').prop("checked", true);
        console.log('.tbs_inp:eq(' + (indexTab) + ') .inl-bl');
        functionClick.call($('.tbs_inp:eq(' + (indexTab) + ') .inl-bl'));  

    });


    var functionClick = function() {
        i = indexTab;
        $(this).addClass('active').siblings().removeClass('active');
        $(".tbs_inp").removeClass('active');
        $(this).closest(".tbs_inp").addClass("active");
        var p = $(this).parents('div.tabs_container');
        p.find('div.tab_container').hide();
        p.find('div.tab_container:eq(' + i + ')').fadeIn(1000);
    }
    $("div.tabs input:checked").removeAttr("checked");
    $('div.tabs input.active').prop("checked", true);
    $('div.tabs').each(function() {
        $(this).find('input').each(function(i) {});
    });
});