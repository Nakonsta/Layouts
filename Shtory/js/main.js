$(function() {
    // Modals for 'Our works'
    $('.fancy').fancybox();

    // Copywrite year

    var today = new Date();
    $('.footer__copywrite-year').text(today.getFullYear());

});