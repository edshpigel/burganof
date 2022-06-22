//
// jQuery 
//
window.$ = window.jQuery = $ = require('jquery');

//
// Swiper import
//
import Swiper from './libs/swiper.min.js';

//
// Fancybox import
//
var fancybox = require('@fancyapps/fancybox');

//
// maskedinput import
//
import mask from "./libs/maskedinput.min.js";

//
// validate import
//
import validate from "./libs/jquery.validate.min.js";

//
// AOS import
//
import AOS from "./libs/aos.min.js";


//
// Scroll to section
//

$(document).ready(function () {
    $("a[href*='#']:not([href*='#modal'])").each(function () {
        $(this).click(function () {
            if (window.location.pathname == '/') {
                var id = $(this).attr('href');
                if ($(id).is('section, h2')) {
                    event.preventDefault();
                    var heightheader = $(".header").height();
                    var top = $(id).offset().top - heightheader;
                    $('body,html').animate({ scrollTop: top }, 800);
                }
            } else {
                var id = $(this).attr('href');
                location.href = '/' + id;
            }
        });
    });
});

//
// Load more  
// 

$(document).ready(function () {
    // if ($(".desc-table tr").length > 8) {
    //     var loadmore_btn = '<div class="load-more-single">Показать полностью</div>'
    //     $(".desc-table tr").slice(8, 99).hide();
    //     $(loadmore_btn).appendTo($(".desc-table").find('tbody'));

    //     $(".desc-table .load-more-single").on('click', function () {
    //         if ($(this).hasClass('is-active')) {
    //             $(".desc-table tr").slice(8, 99).slideUp();
    //             $(this).removeClass('is-active').text("Показать полностью");
    //         } else {
    //             $(".desc-table tr").slice(8, 99).slideDown();
    //             $(this).addClass('is-active').text("Скрыть");
    //         }
    //     });
    // }
});


//
// Fancybox settings
//

$(document).ready(function () {

    $('[data-fancybox]').fancybox({
        backFocus: false,
        loop: true,
    });

    $('.link-youtube').fancybox({
        openEffect: 'none',
        closeEffect: 'none',
        helpers: {
            media: {

            }
        }
    });
});

//
// Swiper settings
//

$(document).ready(function () {

    var heroSwiper = new Swiper('.hero-swiper', {
        slidesPerView: 1,
        loop: true,
        navigation: {
            prevEl: '.swiper-prev-hero',
            nextEl: '.swiper-next-hero',
        },
    });

    document.querySelectorAll('.project-single-swiper').forEach(function (elem) {
        new Swiper(elem, {
            slidesPerView: 1,
            loop: true,
            navigation: {
                prevEl: elem.previousElementSibling.querySelectorAll('.swiper-prev-project-single'),
                nextEl: elem.previousElementSibling.querySelectorAll('.swiper-next-project-single'),
            }
        });
    });

    var instaSwiper = new Swiper('.insta-swiper', {
        slidesPerView: 2.2,
        spaceBetween: 12,
        loop: true,
        navigation: {
            prevEl: '.swiper-prev-insta',
            nextEl: '.swiper-next-insta',
        },
        breakpoints: {
            576: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 3,
            },
            998: {
                slidesPerView: 4,
                spaceBetween: 22,
            },
            1300: {
                slidesPerView: 4,
            },
            1450: {
                slidesPerView: 6,
            },
        },
    });

    var productionSwiper = new Swiper('.production-swiper', {
        slidesPerView: 1,
        loop: true,
        navigation: {
            prevEl: '.swiper-prev-production',
            nextEl: '.swiper-next-production',
        },
    });

    // var reviewThumbs = new Swiper('.review-thumbs', {
    //     slidesPerView: 1,
    //     spaceBetween: 10,
    //     direction: 'vertical',
    //     observer: true,
    //     observeParents: true,
    //     observeSlideChildren: true,
    //     breakpoints: {
    //         330: {
    //             slidesPerView: 2,
    //         },
    //         998: {
    //             slidesPerView: 6,
    //             // allowTouchMove: false,
    //             // longSwipes: false,
    //             // freeMode: false,
    //             // cssMode: false,
    //         },
    //     },
    // });

    // var reviewSwiper = new Swiper('.review-swiper', {
    //     slidesPerView: 1,
    //     direction: 'vertical',
    //     loop: true,
    //     observer: true,
    //     observeParents: true,
    //     observeSlideChildren: true,
    //     thumbs: {
    //         swiper: reviewThumbs
    //     }
    // });

    const myCustomSlider = document.querySelectorAll('.review-swiper');
    const myCustomGalleryThumbs = document.querySelectorAll('.review-thumbs');

    for (var i = 0; i < myCustomSlider.length; i++) {

        myCustomSlider[i].classList.add('review-swiper-' + i);
        myCustomGalleryThumbs[i].classList.add('review-thumbs-' + i);

        var galleryThumbs = new Swiper('.review-thumbs-' + i, {
            slidesPerView: 6,
            spaceBetween: 10,
            direction: 'vertical',
            observer: true,
            observeParents: true,
            observeSlideChildren: true,
            breakpoints: {
                998: {
                    // slidesPerView: 6,
                    // allowTouchMove: false,
                    // longSwipes: false,
                    // freeMode: false,
                    // cssMode: false,
                },
            },
        });

        var galleryTop = new Swiper('.review-swiper-' + i, {
            slidesPerView: 'auto',
            direction: 'vertical',
            loop: true,
            spaceBetween: 10,
            observer: true,
            observeParents: true,
            observeSlideChildren: true,
            breakpoints: {
                576: {
                    slidesPerView: 1,
                    // allowTouchMove: false,
                    // longSwipes: false,
                    // freeMode: false,
                    // cssMode: false,
                },
            },
            thumbs: {
                // el: '.thumbs-class',
                // slidesPerView: 5,
                swiper: galleryThumbs
            }
        });

    }
});

//
// hover kitchen
//

$(document).ready(function () {
    $(".kitchen-product").hover(function () {
        $(this).addClass("hoverin");
    }, function () {
        $(this).removeClass("hoverin");
    }
    );
});

//
// Mask tel
//

$(document).ready(function () {
    $('input[type=tel]').mask('+A (000) 000-00-00', {
        'translation': {
            A: { 
                pattern: /[7]/, 
                fallback: '7', 
            },
        }
    });
});
//
// policy default 
// 

$(document).ready(function () {
    $(".policy-input").each(function () {
        $(this).attr("checked", "checked");
    });
});

//
// Load more .kitchen 
// 

$(document).ready(function () {
    if ($(".populars .kitchen-product").length > 4) {
        var loadmore_btn = '<div class="btn-load-more load-more-kitchen" data-aos="fade-up">Загрузить больше кухонь</div>'
        $(".populars .kitchen-product").slice(4, 20).hide();
        $(loadmore_btn).insertAfter($(".populars__grid"));

        $(".load-more-kitchen").on('click', function () {
            $(".populars .kitchen-product").slice(4, 20).slideToggle();
            $(this).fadeOut();
        });
    }
});

$(document).ready(function () {
    if ($(".k-sales .kitchen-product").length > 4) {
        var loadmore_btn = '<div class="btn-load-more load-more-kitchen" data-aos="fade-up">Загрузить больше кухонь</div>'
        $(".k-sales .kitchen-product").slice(4, 20).hide();
        $(loadmore_btn).insertAfter($(".k-sales__grid"));

        $(".load-more-kitchen").on('click', function () {
            $(".k-sales .kitchen-product").slice(4, 20).slideToggle();
            $(this).fadeOut();
        });
    }
});

//
// Load more .projects 
// 

$(document).ready(function () {
    if ($(".projects .project-product").length > 6) {
        var loadmore_btn = '<div class="btn-load-more load-more-project" data-aos="fade-up">Загрузить больше работ</div>'
        $(".projects .project-product").slice(6, 20).hide();
        $(loadmore_btn).insertAfter($(".projects__grid"));

        $(".load-more-project").on('click', function () {
            $(".projects .project-product").slice(6, 20).slideToggle();
            $(this).fadeOut();
        });
    }
});

//
// Load more .review 
// 

$(document).ready(function () {
    if ($(".reviews .review-product").length > 2) {
        var loadmore_btn = '<div class="btn-load-more load-more-review" data-aos="fade-up">Загрузить больше отзывов</div>'
        $(".reviews .review-product").slice(2, 20).hide();
        $(loadmore_btn).insertAfter($(".reviews__grid"));

        $(".load-more-review").on('click', function () {
            $(".reviews .review-product").slice(2, 20).slideToggle();
            $(this).fadeOut();
        });
    }
});


//
// Validate settings
//

$(document).ready(function () {
    var output = $('#modal-form').find('.wpcf7-response-output');
    $(output).prependTo($(output).parents('.wpcf7-form'));
    $('.js-form-item').find('input').click(function () {
        $(this).siblings('.wpcf7-not-valid-tip').hide();
    });
});
$('.flex-form').find('input').each(function () {
    $(this).focus(function () {
        $(this).parents('label').addClass('input--onfocus');
    });
    $(this).focusout(function () {
        $(this).parents('label').removeClass('input--onfocus');
    });
});

var Form = {
    init: function () {
        Form.validation();
    },
    validation: function () {
        $('.wpcf7-form:not(.js-form-item)').each(function (i) {
            $(this).validate({
                rules: {
                    your_name: {
                        required: true,
                    },
                    your_tel: {
                        required: true,
                        minlength: 18
                    },
                    your_policy: {
                        required: true,
                    }
                },
                highlight: function (element) {
                    $(element).removeClass('form--valid').addClass('form--error');
                    $(element).parents('label, .label-block').removeClass('label--valid').addClass('label--error');
                },
                unhighlight: function (element) {
                    $(element).removeClass('form--error').addClass('form--valid');
                    $(element).parents('label, .label-block').removeClass('label--error').addClass('label--valid');
                },
                errorPlacement: function (error, element) {
                    var error_label = error.addClass('input-label--error').text();
                    $(element).parents('label, .label-block').children('span.label-span').attr('aria-label-error', error_label);
                },
                messages: {
                    your_name: {
                        required: "Введите",
                    },
                    your_tel: {
                        required: "Введите",
                    },
                    your_policy: {
                        required: "Поставьте галочку",
                    }
                },
            });
        });
    }
}
$(function () { Form.init(); });



//
// faq block 
// 

$(document).ready(function () {
    $(".js-question").each(function () {
        $(this).parents('.js-faq-item').not('.is-active').find('.js-ask').hide();
    });
    $(".js-question").click(function () {
        var this_quest = $(this);
        if (this_quest.parents('.js-faq-item').hasClass('is-active')) {
            this_quest.parents('.js-faq-item').removeClass('is-active');
            this_quest.parents('.js-faq-item').find('.js-ask').slideUp();
        } else {
            this_quest.parents('.js-faq-item').addClass('is-active');
            this_quest.parents('.js-faq-item').find('.js-ask').slideDown();
            this_quest.parents('.js-faq-item').siblings(".js-faq-item.is-active").find('.js-ask').slideToggle();
            this_quest.parents('.js-faq-item').siblings(".js-faq-item.is-active").removeClass('is-active');
        }
    });
    $(".js-arrow").click(function () {
        var this_quest = $(this);
        if (this_quest.parents('.js-faq-item').hasClass('is-active')) {
            this_quest.parents('.js-faq-item').removeClass('is-active');
            this_quest.parents('.js-faq-item').find('.js-ask').slideUp();
        } else {
            this_quest.parents('.js-faq-item').addClass('is-active');
            this_quest.parents('.js-faq-item').find('.js-ask').slideDown();
            this_quest.parents('.js-faq-item').siblings(".js-faq-item.is-active").find('.js-ask').slideToggle();
            this_quest.parents('.js-faq-item').siblings(".js-faq-item.is-active").removeClass('is-active');
        }
    });
});


//
// From_where to CF7 
//


$(document).ready(function () {
    $('a[href*="#m-review"]').addClass('modal-inline-review');
    $(".modal-inline-review").each(function () {
        $(this).fancybox({
            smallBtn: true,
            buttons: [],
        });
    });

    $('a[href*="#modal"]').addClass('modal-inline');
    var modal_form = $('#modal-form'),
        from_where_default = "";

    function default_after_close() {
        modal_form.find('input[name="from_where"]').removeAttr('value');
    };
    $(".modal-inline").each(function () {
        var this_val = $(this).attr('from_where');
        var this_desc = $(this).attr('modal_desc');
        $(this).fancybox({
            smallBtn: false,
            buttons: [],
            beforeShow: function () {
                setTimeout(function () {
                    modal_form.find('input[name="from_where"]').val(this_val);
                    modal_form.find('.modal-form-desc').html(this_desc);
                }, 100);
            },
            afterClose: function () {
                default_after_close();
            }
        });
    });
});

//
// cf7 redirect 
//

document.addEventListener('wpcf7mailsent', function (event) {
    window.location.href = "/thanks/"
}, !1);

//
// Heading after scrolling
//

$(document).ready(function () {
    function scrollFixed() {
        if ($(window).scrollTop() > 180) {
            $('.header').addClass('fixed');
            $('.header').slideDown(500);
        } else if ($(window).scrollTop() < 41) {
            $('.header').removeClass('fixed');
        }
        if ($(window).scrollTop() > 200) {
            $('.to-top-fixed').addClass('fixed');
        } else if ($(window).scrollTop() < 201) {
            $('.to-top-fixed').removeClass('fixed');
        }
    };

    setTimeout(function () {
        scrollFixed();
    }, 100);
    $(window).scroll(function () {
        scrollFixed();
    });
    $('.to-top-fixed, .js-to-top').click(function () {
        $('body,html').animate({ scrollTop: 0 }, 800);
    });
});

//
// Antispam
//

$(document).ready(function () {
    setTimeout(function () {
        jQuery('.antispam').prop('checked', !1)
    }, 500)
});

//
// Menu hamburger
//

$(document).ready(function () {
    var clickstatus = 0;
    function addClass_menu() {
        $(".js-header-hamburger").addClass('toggled');
        $(".header").addClass('toggled');
        $(".js-header-dropdown").addClass('toggled');
        $(".overlay").addClass('toggled');
        $("body").addClass('menu-toggled');
    }
    function removeClass_menu() {
        $(".js-header-hamburger").removeClass('toggled');
        $(".header").removeClass('toggled');
        $(".js-header-dropdown").removeClass('toggled');
        $(".overlay").removeClass('toggled');
        $("body").removeClass('menu-toggled');
    }
    $(".js-header-hamburger").click(function () {
        if (clickstatus == 0) {
            addClass_menu();
            clickstatus = 1;
        } else if (clickstatus == 1) {
            removeClass_menu();
            clickstatus = 0;
        }
    });
    $(".overlay").click(function () {
        if (clickstatus == 1) {
            removeClass_menu();
            clickstatus = 0;
        }
    });
    $("a").click(function () {
        if (clickstatus == 1) {
            removeClass_menu();
            clickstatus = 0;
        }
    });
});

//
// Load more
//

$(document).ready(function () {
    $(".js-archive-item").slice(0, 4).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".js-archive-item:hidden").slice(0, 4).slideDown();
        if ($(".js-archive-item:hidden").length == 0) {
            $("#loadMore").fadeOut('slow');
        }
    });
    if ($(".js-archive-item:hidden").length == 0) {
        $("#loadMore").fadeOut('slow');
    }
});

//
// AOS settings
//
document.addEventListener("DOMContentLoaded", () => {
    var file = get_template_directory_uri.home + '/assets/css/vendor/animation.css';
    var link = document.createElement("link");
    link.href = file.substr(0, file.lastIndexOf(".")) + ".css";
    link.type = "text/css";
    link.rel = "stylesheet";
    link.media = "screen,print";
    document.getElementsByTagName("head")[0].appendChild(link);
    $(window).on('load', function () {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
        });
    })
});

//
// Mail Quiz
//

$(document).ready(function () {
    jQuery.fn.shake = function (interval, distance, times) {
        interval = typeof interval == "undefined" ? 100 : interval;
        distance = typeof distance == "undefined" ? 10 : distance;
        times = typeof times == "undefined" ? 3 : times;
        var jTarget = $(this);
        jTarget.css('position', 'relative');
        for (var iter = 0; iter < (times + 1); iter++) {
            jTarget.animate({ left: ((iter % 2 == 0 ? distance : distance * -1)) }, interval);
        }
        return jTarget.animate({ left: 0 }, interval);
    }

    var length_slide = $('.quiz-slide').length;
    $('.quiz-slide').each(function () {
        var index_slide = $(this).index();
        index_slide++;
        $(this).find('.quiz-progress').text(100 / length_slide * index_slide + '%');
        $(this).find('.quiz-line-in').width(100 / length_slide * index_slide + '%');
    });
    $('.quiz-sale').each(function () {
        var much_question = $(this).data('much-question');
        $(this).css('left', 100 / length_slide * much_question + '%');
    });
    for (let i = 0; i < length_slide; i++) {
        $('.quiz-slide').each(function () {
            var count = i + 1;
            var left_dotted = 100 / length_slide * count;
            if (left_dotted != 100) {
                var html_dotted = '<div class="quiz__line__dotted quiz-dotted" style="left: ' + left_dotted + '%;"></div>';
                $(html_dotted).appendTo($(this).find('.quiz-line'));
            }
        });
    }
    // $('.quiz-slide').find('input[type=radio]').click(function () {
    //     if ($(this).is(':checked')) {
    //         $(this).parents('.quiz-slide').fadeOut("normal", function () {
    //             $(this).removeClass('active').next().fadeIn().addClass('active');
    //         });
    //     }
    // });
    $('.btn-next').click(function () {
        if ($(this).parents('.quiz-slide').find('input[type=radio]').is(':checked')) {
            $(this).parents('.quiz-slide').fadeOut("normal", function () {
                $(this).removeClass('active').next().fadeIn().addClass('active');
                if (!($(this).parents('.quiz-slide').find('input[type=radio]').not(':checked'))) {
                    $(this).addClass('disabled');
                }
            });
        }
        if ($(this).hasClass('disabled')) {
            $(this).parents('.quiz-slide').find('label').shake(100, 10, 3);
        }
        var heightheader = $(".header").height();
        var top = $('#quiz-form').offset().top - heightheader;
        $('body,html').animate({ scrollTop: top }, 800);
    });
    $('.quiz-slide').find('input[type=radio]').click(function () {
        if ($(this).is(':checked')) {
            $(this).parents('.quiz-slide').find('.btn-next').removeClass('disabled');
        } else {
            $(this).parents('.quiz-slide').find('.btn-next').addClass('disabled');
        }
    }).each(function () {
        if ($(this).is(':checked')) {
            $(this).parents('.quiz-slide').find('.btn-next').removeClass('disabled');
        } else {
            $(this).parents('.quiz-slide').find('.btn-next').addClass('disabled');
        }
    });
    $('.btn-back').click(function () {
        if (!($(this).parents('.quiz-slide.active').is(':first-child'))) {
            $(this).parents('.quiz-slide').fadeOut("normal", function () {
                $(this).removeClass('active').prev().fadeIn().addClass('active');
            });
        }
    });
    var FormQuiz = {
        init: function () {
            FormQuiz.validation();
        },
        validation: function () {
            $('#quiz-form').each(function (i) {
                $(this).find('[name=your_policy]').prop("checked");
                var th = $(this);
                $(this).validate({
                    rules: {
                        name: {
                            required: true,
                        },
                        tel: {
                            required: true,
                            minlength: 18
                        },
                        your_policy: {
                            required: true,
                        }
                    },
                    highlight: function (element) {
                        var el_placeholder = $(element).attr('placeholder');
                        $(element).removeClass('form--valid').addClass('form--error');
                        $(element).parents('label, .label-block').removeClass('label--valid').addClass('label--error');
                    },
                    unhighlight: function (element) {
                        var el_placeholder = $(element).attr('placeholder');
                        $(element).removeClass('form--error').addClass('form--valid');
                        $(element).parents('label, .label-block').removeClass('label--error').addClass('label--valid');

                    },
                    errorPlacement: function (error, element) {
                        var el_placeholder = $(element).attr('placeholder');
                        var error_label = error.addClass('input-label--error').text();
                        $(element).attr('placeholder', error_label);
                        if ($(element).hasClass('policy-input')) {
                            $(element).css('color', '#dc3545');
                        }
                    },
                    submitHandler: function (form) {
                        $.ajax({
                            type: "POST",
                            url: "/wp-content/themes/theme/mail/req.php",
                            data: th.serialize()
                        }).done(function () {
                            window.location.href = "/thanks/";
                        });
                    },
                    messages: {
                        name: {
                            required: "Введите имя",
                        },
                        tel: {
                            required: "Введите номер телефона",
                        },
                        your_policy: {
                            required: "Поставьте галочку",
                        },
                    },
                });
            });
        }
    }
    $(function () { FormQuiz.init(); });
});