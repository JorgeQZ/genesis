$(document).ready(function (e) {
    $('.filter-cont .value').click(function (e) {
        e.preventDefault();
        if ($(this).siblings('ul.active').length == 0) {
            $('.filter-cont ul').removeClass('active');
            $(this).siblings('ul').addClass('active');
        } else {
            $(this).siblings('ul').removeClass('active');
        }
    });

    $('.filter-cont li').click(function (e) {
        e.preventDefault();
        let text_value = $(this).text();
        $(this).parent().removeClass('active').siblings('.value').html(text_value);
    });


    $('.select-cont .value').click(function (e) {
        e.preventDefault();
        $(this).siblings('ul').toggleClass('active');
    });

    $('.select-cont li').click(function (e) {
        e.preventDefault();
        let text_value = $(this).text();
        $(this).parent().removeClass('active').siblings('.value').html(text_value);
    });

});


$(window).on('scroll', function () {
    let top = $(window).scrollTop();
    (top >= 100) ? $('header').addClass('scrolled') : $('header').removeClass('scrolled');
    console.info(top);
});