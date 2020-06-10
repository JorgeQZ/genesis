$(document).ready(function (e) {
    $("header").removeClass("scrolled");
});

$(window).on('scroll', function () {
    let top = $(window).scrollTop();
    (top >= 100) ? $('header').addClass('scrolled') : $('header').removeClass('scrolled');
});