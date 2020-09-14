$(document).ready(function (e) {
    $("header").removeClass("scrolled");
});

$(window).on('scroll', function () {
    let top = $(window).scrollTop();
    (top >= 150) ? $('header').addClass('scrolled') : $('header').removeClass('scrolled');
});