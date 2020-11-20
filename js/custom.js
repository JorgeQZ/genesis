$(document).ready(function (e) {


    // Header Menu
    $('#menu-button').on('click', function (e) {
        $("header .cont-menu").slideToggle('slow');
    });


    // Result open - close button
    $('.button-fold').on('click', function (e) {
        e.preventDefault();
        let id = $(this).attr('data-id');
        if ($('#' + id).hasClass('active')) {
            $('#' + id).removeClass('active');
            $(this).removeClass('active');
        } else {
            $('#' + id).addClass('active');
            $(this).addClass('active');

        }
    });

    $('.result-tab-item').on('click', function (e) {
        e.preventDefault();
        let id = $(this).attr('data-id');

        if (!$('#' + id).hasClass('active')) {
            $('.result-tab-item').removeClass('active');
            $('.result-tab-cont').removeClass('active');
            $(this).addClass('active');
            $('#' + id).addClass('active');
        }
    });

    // CUSTOM SEARCH DEPARTAMENTS
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
        $(this).parent().removeClass('active')
            .siblings('.value')
            .val(text_value)
            .css({
                'border-color': 'unset',
                'box-shadow': 'unset'
            });
    });

    // CUSTOM SEARCH DEPARTAMENTS
    // ------------------ CONTACT FORM HOME --------------
    $('.select-cont .value').click(function (e) {
        e.preventDefault();
        $(this).siblings('ul').toggleClass('active');
    });

    $('.select-cont li').click(function (e) {
        e.preventDefault();
        let text_value = $(this).text();
        $(this).parent().removeClass('active').siblings('.value').html(text_value);
    });

    // ------------------ CONTACT FORM HOME --------------

    // Mini BAnner slider Home
    if ($('.mini-banner-slider').length != 0) {
        $('.mini-banner-slider').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            items: 1,
            autoHeight: true
        })
    }
    // Slider Range Owl Carousel Desarrollos
    // let slider_width = $('.departments-carousel .owl-stage').width(),
    //     total_items = $('.departments-carousel .owl-stage .owl-item').length,
    //     slide_width = (slider_width / total_items),
    //     max_slider_range = Math.floor((slide_width) * (total_items - 4));

    // const owl = $(".departments-carousel"), inputType = $("#departments-slider");

    // inputType.attr({ "max": max_slider_range });

    // inputType.on('input', function (e) {
    //     e.preventDefault();
    //     $('.departments-carousel .owl-stage').css({
    //         'transform': 'translate3d(-' + parseInt($(this).val()) + 'px, 0px, 0px)',
    //     });
    // });

    // owl.on('changed.owl.carousel', function (e) {
    //     inputType.val(slide_width * e.item.index);
    // });


    // LightBox

    $('.light').on('click', function (e) {
        let screen_w = $(window).width();
        let screen_h = $(window).height();

        e.preventDefault();
        // let naturalW = $(this).find('.bed-img')[0].naturalWidth,
        //     naturalH = $(this).find('.bed-img')[0].naturalHeight,
        let imgSrc = $(this).find('.bed-img').attr('src'),
            imgAlt = $(this).find('.bed-img').attr('alt');

        $('#img_light-box').attr('src', imgSrc).css({
            'width': 'auto',
            'height': 'auto',
            'max-height': screen_h * .8,
        });
        $('#img_light-box').attr('alt', imgAlt);
        $('.light-box').fadeIn();
    });

    // Close Lightbox
    $('#close-button').on('click', function (e) {
        e.preventDefault();
        $('.light-box').fadeOut();
    });

    // // Panoramic
    // function changePanoramic() {
    //     let img = $('.panoramic-active').find('img').attr('data-src');
    //     $('.panoramic-content').css({
    //         'background-image': 'url("' + img + '")'
    //     });
    // }

    // $('.panoramic-item').on('click', function (e) {
    //     e.preventDefault();
    //     $('.panoramic-item').removeClass('panoramic-active')
    //     $(this).addClass('panoramic-active');
    //     changePanoramic();
    // });
    // changePanoramic();

    //  Tabs Type Bedrooms
    var room_tabs = document.getElementsByClassName('room-tab');
    $(room_tabs).on('click', function (e) {
        e.preventDefault();
        if (!$(this).hasClass('active')) {
            let data_id = $(this).attr('data-id');
            $('.room-tab').removeClass('active');
            $(this).addClass('active');
            $('.room-type').hide();
            document.getElementById(data_id).style.display = 'block';
        }
    });

    // Tabs numero de recamaras
    var room_sub_tabs = document.getElementsByClassName('option-tab');
    $(room_sub_tabs).on('click', function (e) {
        e.preventDefault();
        let w_width = $(window).width();
        if (!$(this).hasClass('active')) {
            let sub_data_id = $(this).attr('data-id');

            $(this).addClass('active')
                .siblings().removeClass('active');

            $(this).parent().siblings('.sub-option').hide();
            document.getElementById(sub_data_id).style.display = 'flex';


        }

        if (w_width <= 899) {
            let text_data_id = $(this).attr('data-text');
            let text_beds = $(this).text();
            let bed_type = $(this).attr('data-bed-type');
            console.log(bed_type);
            $('#' + bed_type).slideToggle(400);
            $('#' + text_data_id).text(text_beds);
        }

    });


    // PROTOTIPOS
    $('.burguer-types').on('click', function (e) {
        e.preventDefault();
        let w_width = $(window).width();
        if (w_width <= 899) {
            $('.tabs-left').slideToggle(800);
        }
        return false;
    });

    // Add clases to tabs on mobile screens
    Set_mobile_clasess();

    $('.mobile-tab').on('click', function (e) {
        e.preventDefault();
        let w_width = $(window).width();
        if (w_width <= 899) {
            $('.tabs-left').slideToggle(800);
        }
        return false;
    });


    $('.burguer-bed').on('click', function (e) {
        e.preventDefault();
        // $('.tabs-left').slideToggle(800);
        let w_width = $(window).width();
        if (w_width <= 899) {
            let bed_type = $(this).attr('data-bed-type');
            $('#' + bed_type).slideToggle(400);
        }
        return false;
    });


});

$(document).keyup(function (e) {

    if (e.key === "Escape") {
        // write your logic here.
        $('.light-box').fadeOut();
    }
});

$(window).resize(function () {
    Set_mobile_clasess();
});

function Set_mobile_clasess() {
    let w_width = $(window).width();
    if (w_width <= 899) {
        $('.tabs-left .tab-container .tab').addClass('mobile-tab');
    }
    else {
        $('.tabs-left .tab-container .tab').removeClass('mobile-tab');

    }
}
