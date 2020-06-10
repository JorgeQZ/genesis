$(document).ready(function (e) {
    // Custom Li's
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
        $(this).parent().removeClass('active').siblings('.value').val(text_value);
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


    // Slider Range Owl Carousel Desarrollos
    let slider_width = $('.departments-carousel .owl-stage').width(),
        total_items = $('.departments-carousel .owl-stage .owl-item').length,
        slide_width = (slider_width / total_items),
        max_slider_range = Math.floor((slide_width) * (total_items - 4));

    const owl = $(".departments-carousel"), inputType = $("#departments-slider");

    inputType.attr({ "max": max_slider_range });

    inputType.on('input', function (e) {
        e.preventDefault();
        $('.departments-carousel .owl-stage').css({
            'transform': 'translate3d(-' + parseInt($(this).val()) + 'px, 0px, 0px)',
        });
    });

    owl.on('changed.owl.carousel', function (e) {
        inputType.val(slide_width * e.item.index);
    });


    // LightBox

    $('.gallery-carousel .item').on('click', function (e) {
        e.preventDefault();
        let slide = $(this), obj = slide.parent('div'),
            classList = obj.attr('class').split(' '),
            imgSrc = slide.find('.img-item img').attr('src'),
            imgAlt = slide.find('.img-item img').attr('alt');
        if (classList.includes('center')) {
            $('#img_light-box').attr('src', imgSrc);
            $('#img_light-box').attr('alt', imgAlt);
            $('.light-box').fadeIn();
        }
    });

    // Close Lightbox
    $('#close-button').on('click', function (e) {
        e.preventDefault();
        $('.light-box').fadeOut();
    });

});
$(document).keyup(function (e) {

    if (e.key === "Escape") {
        // write your logic here.
        $('.light-box').fadeOut();
    }
});