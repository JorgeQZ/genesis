$(document).ready(function (e) {
    $("header").removeClass("scrolled");
});

$(window).on('scroll', function () {
    fixHeader();
    checkOffset();
});


function fixHeader() {
    let top = $(window).scrollTop();
    (top >= 150) ? $('header').addClass('scrolled') : $('header').removeClass('scrolled');
}

function checkOffset() {
    var a = $(document).scrollTop() + window.innerHeight;
    var b = $('footer').offset().top;
    if (a < b) {
        $('.call-center').css('bottom', '20px');
    } else {
        $('.call-center').css('bottom', (10 + (a - b)) + 'px');
    }
}