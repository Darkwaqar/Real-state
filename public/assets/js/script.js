
// user image update

//phone number formatter
$(document).ready(function () {
    // Get references to the input fields
    var $mobileNumberInput = $("#mobile-number-input");
    var $mobileNumberHidden = $("#mobile-number-hidden");
    // Format the mobile number on input
    $mobileNumberInput.on("input", function () {
        var unformattedNumber = $mobileNumberInput.val().replace(/\D/g, ''); // Remove non-numeric characters
        var formattedNumber = "(" + unformattedNumber.substr(0, 3) + ") " + unformattedNumber.substr(3, 3) + "-" + unformattedNumber.substr(6);
        $mobileNumberInput.val(formattedNumber); // Display formatted number in the input field
        $mobileNumberHidden.val(unformattedNumber); // Set the unformatted number in the hidden input field
    });
});
//end of phone number formatter

$(function () {
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // https://www.desmos.com/calculator/brs54l4xou
        smooth: true,
        mouseMultiplier: 1,
    })
    lenis.scrollTo(document.querySelector('#home'))

    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf);
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            lenis.scrollTo(this.getAttribute("href"));
        });
    });
    $('.lazy').lazy({
        effect: "fadeIn",  // Fade-in effect when content becomes visible
        effectTime: 500,  // Fade-in effect duration in milliseconds
        threshold: 200,   // Distance from element, in pixels, at which loading starts
        //placeholder: "{{ asset('public/assets/images/aris_gif_logo1.gif') }}", // Path to a loading spinner image
        delay: 1000,      /// Delay in milliseconds before loading starts
    });
});

(function ($) {
    "use strict";
    //Hide Loading Box (Preloader)
    // function handlePreloader() {
    // 	if($('.loader-wrap').length){
    // 		$('.loader-wrap').delay(1000).fadeOut(500);
    // 	}
    // }
    // if ($(".preloader-close").length) {
    //     $(".preloader-close").on("click", function(){
    //         $('.loader-wrap').delay(200).fadeOut(500);
    //     })
    // }

    function handlePreloader() {

    }

    if ($(".preloader-close").length) {

        $(".preloader-close").on("click", function () {

            $('.loader-wrap').delay(200).fadeOut(500);

        })

    }

    // Aris Realtor Swiper Sell With Aris

    var swiper = new Swiper(".ArisRealtorSwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        // autoplay: true,
        autoplay: {
            delay: 9000,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
    var swiper = new Swiper(".calenderSwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        // autoplay: true,
        autoplay: {
            delay: 9000,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });

    var swiper = new Swiper(".calender_swiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        autoplay: {
            delay: 9000,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 6,
            },
        },
    });


    var swiper = new Swiper(".six_item_swiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        autoplay: {
            delay: 9000,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 6,
            },
        },
    });

    // logo loader js
    window.addEventListener("load", function () {
        setTimeout(function () {
            document.getElementById("logo").style.opacity = "0";
            document.getElementById("logo").style.display = "none";
        }, 500); // Set the timeout to 3 seconds (3000 milliseconds)
    });

    //
    $(".option").click(function () {
        $(".option").removeClass("active");
        $(this).addClass("active");

    });

    // Aris Realtor Swiper Sell With Aris

    var swiper = new Swiper(".ArisRealtorSwipertwo", {

        slidesPerView: 1,

        spaceBetween: 30,

        loop: true,

        autoplay: {

            delay: 9000,

        },

        // autoplay: true,

        navigation: {

            nextEl: ".swiper-button-next",

            prevEl: ".swiper-button-prev",

        },

        breakpoints: {

            320: {

                slidesPerView: 1,

                spaceBetween: 20,

            },

            640: {

                slidesPerView: 2,

                spaceBetween: 20,

            },

            768: {

                slidesPerView: 2,

                spaceBetween: 30,

            },

            1024: {

                slidesPerView: 2,

                spaceBetween: 30,

            },

        },

    });

    // Stories Slider Sell With Aris

    var swiper = new Swiper(".StoriesSwiper", {

        slidesPerView: 1,

        spaceBetween: 30,

        loop: true,

        autoplay: {

            delay: 9000,

        },

        navigation: {

            nextEl: ".swiper-button-next",

            prevEl: ".swiper-button-prev",

        },

        //   pagination: {

        //     el: ".swiper-pagination",

        //     clickable: true,

        //   },

    });

    // Stories Slider loan

    var swiper = new Swiper(".StoriesSwiperfour", {

        slidesPerView: 3,

        spaceBetween: 20,

        loop: true,

        autoplay: {

            delay: 9000,

        },

        navigation: {

            nextEl: ".swiper-button-next",

            prevEl: ".swiper-button-prev",

        },

        breakpoints: {

            320: {

                slidesPerView: 1,

                spaceBetween: 20,

            },

            640: {

                slidesPerView: 2,

                spaceBetween: 20,

            },

            768: {

                slidesPerView: 2,

                spaceBetween: 30,

            },

            1024: {

                slidesPerView: 3,

                spaceBetween: 30,

            },

        },

        //   pagination: {

        //     el: ".swiper-pagination",

        //     clickable: true,

        //   },

    });

    // Stories Slider loan

    var swiper = new Swiper(".StoriesSwiperfive", {

        slidesPerView: 3,

        spaceBetween: 20,

        loop: true,

        autoplay: {

            delay: 7000,

        },

        navigation: {

            nextEl: ".swiper-button-next",

            prevEl: ".swiper-button-prev",

        },

        breakpoints: {

            320: {

                slidesPerView: 1,

                spaceBetween: 20,

            },

            640: {

                slidesPerView: 2,

                spaceBetween: 20,

            },

            768: {

                slidesPerView: 2,

                spaceBetween: 30,

            },

            1024: {

                slidesPerView: 3,

                spaceBetween: 30,

            },

        },

        //   pagination: {

        //     el: ".swiper-pagination",

        //     clickable: true,

        //   },

    });

    // Aris Realtor Swiper Sell With Aris

    var swiper = new Swiper(".latestMortgagenews", {

        slidesPerView: 3,

        spaceBetween: 30,

        loop: true,

        autoplay: {

            delay: 9000,

        },

        navigation: {

            nextEl: ".swiper-button-next",

            prevEl: ".swiper-button-prev",

        },

        breakpoints: {

            320: {

                slidesPerView: 1,

                spaceBetween: 20,

            },

            640: {

                slidesPerView: 2,

                spaceBetween: 20,

            },

            768: {

                slidesPerView: 3,

                spaceBetween: 30,

            },

            1024: {

                slidesPerView: 3,

                spaceBetween: 30,

            },

        },

    });

    // switch button ==================================================================>

    $(".nav-toggler").on("click", function () {

        var _this = $(this);

        var _switch = $(_this).parents('.switch_btn_one');

        $(".search-field .switch_btn_one").not(_switch).removeClass("active");

    });

    $(".search__toggler , .done_btn").on("click", function () {

        var _this = $(this);

        var _switch = $(_this).parents('.switch_btn_one');

        if ($(_switch).hasClass('active') == true) {

            $(".search-field .switch_btn_one").removeClass("active");

        } else {

            $(_switch).addClass("active");

        }

    });

    $(document).on('click', function (e) {

        var container = $(".advanced-search");

        if (!$(e.target).closest(container).length) {

            $(".search-field .switch_btn_one").removeClass("active");

        }

    });

    // switch button ==================================================================>

    //Update Header Style and Scroll to Top

    let pathName = window.location.href.split('/');
    console.log(pathName[pathName.length - 1], 'ppppp')
    function headerStyle() {

        if ($('.main-header').length) {
            var windowpos = $(window).scrollTop();
            var siteHeader = $('.main-header');
            var headerImage1 = $('.aris_multiple_logo1');
            var headerImage2 = $('.aris_multiple_logo2');
            var scrollLink = $('.scroll-top');
            if (windowpos >= 110) {
                siteHeader.addClass('fixed-header');
                scrollLink.addClass('open');
            }
            else {
                siteHeader.removeClass('fixed-header');
                scrollLink.removeClass('open');
            }

        }

    }

    headerStyle();

    //Submenu Dropdown Toggle

    if ($('.main-header li.dropdown ul').length) {

        $('.main-header .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');

    }

    //Mobile Nav Hide Show

    if ($('.mobile-menu').length) {

        $('.mobile-menu .menu-box').mCustomScrollbar();

        var mobileMenuContent = $('.main-header .menu-area .main-menu').html();

        $('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);

        $('.sticky-header .main-menu').append(mobileMenuContent);

        //Dropdown Button

        $('.mobile-menu li.dropdown .dropdown-btn').on('click', function () {

            $(this).toggleClass('open');

            $(this).prev('ul').slideToggle(500);

        });

        //Dropdown Button

        $('.mobile-menu li.dropdown .dropdown-btn').on('click', function () {

            $(this).prev('.megamenu').slideToggle(900);

        });

        //Menu Toggle Btn

        $('.mobile-nav-toggler').on('click', function () {

            $('body').addClass('mobile-menu-visible');

        });

        //Menu Toggle Btn

        $('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function () {

            $('body').removeClass('mobile-menu-visible');

        });

    }

    // Scroll to a Specific Div

    if ($('.scroll-to-target').length) {

        $(".scroll-to-target").on('click', function () {

            var target = $(this).attr('data-target');

            // animate

            $('html, body').animate({

                scrollTop: $(target).offset().top

            }, 1000);

        });

    }

    // Elements Animation

    if ($('.wow').length) {

        var wow = new WOW({

            mobile: false

        });

        wow.init();

    }

    //Contact Form Validation

    if ($('#contact-form').length) {

        $('#contact-form').validate({

            rules: {

                username: {

                    required: true

                },

                email: {

                    required: true,

                    email: true

                },

                phone: {

                    required: true

                },

                subject: {

                    required: true

                },

                message: {

                    required: true

                }

            }

        });

    }

    //Fact Counter + Text Count

    if ($('.count-box').length) {

        $('.count-box').appear(function () {

            var $t = $(this),

                n = $t.find(".count-text").attr("data-stop"),

                r = parseInt($t.find(".count-text").attr("data-speed"), 10);

            if (!$t.hasClass("counted")) {

                $t.addClass("counted");

                $({

                    countNum: $t.find(".count-text").text()

                }).animate({

                    countNum: n

                }, {

                    duration: r,

                    easing: "linear",

                    step: function () {

                        $t.find(".count-text").text(Math.floor(this.countNum));

                    },

                    complete: function () {

                        $t.find(".count-text").text(this.countNum);

                    }

                });

            }

        }, { accY: 0 });

    }

    //LightBox / Fancybox

    if ($('.lightbox-image').length) {

        $('.lightbox-image').fancybox({

            openEffect: 'fade',

            closeEffect: 'fade',

            helpers: {

                media: {}

            }

        });

    }

    // //Tabs Box
    // var full_name = document.getElementById('full_name');
    // var emailAgent = document.getElementById('emailAgent');
    // var agentAddress = document.getElementById('agentAddress');
    // var number = document.getElementById('number');
    // var locality = document.getElementById('locality');
    // var administrative_area_level_1 = document.getElementById('administrative_area_level_1');
    // var country = document.getElementById('country');
    // var postal_code = document.getElementById('postal_code');
    // var job_title = document.getElementById('job_title');
    // if ($('.tabs-box').length) {
    //     $('.tabs-box .tab-buttons .tab-btn').on('click', function (e) {
    //         var target = $($(this).attr('data-tab'));
    //         console.log(target, 'target')

    //         // if ($(target).is(':visible')) {
    //         //     return false;

    //         // }
    //         if (full_name.value === "" || emailAgent.value === "" || agentAddress.value === "" || number.value === "" || locality.value === "" || administrative_area_level_1.value === "" || country.value === "" || postal_code.value === "") {
    //             alert('Please enter the mandatory fields')
    //         }

    //         else {
    //             e.preventDefault();
    //             target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
    //             $(this).addClass('active-btn');
    //             target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
    //             target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
    //             $(target).fadeIn(300);
    //             $(target).addClass('active-tab');
    //         }
    //     });

    // }
    // Assuming you have jQuery loaded as the code uses jQuery functions

    // Assuming you have jQuery loaded as the code uses jQuery functions

    $(document).ready(function () {
        // Initialize the current tab index to 0 (first tab)
        var currentTabIndex = 0;

        // Function to validate the input fields for a given tab
        function validateTabFields(tab) {
            // Add your validation logic here for the input fields in the given tab
            // For example, you can check if the required fields are not empty

            // Define an array of non-mandatory field IDs
            var nonMandatoryFields = ['linkedin_link', 'web_link'];

            var inputs = $(tab).find('input[type="text"], input[type="email"], select,input[type="file"],input[type="number"],textarea,input[type="checkbox"]');
            for (var i = 0; i < inputs.length; i++) {
                var fieldId = inputs[i].id;
                // Check if the field is mandatory and not empty (for text inputs)
                if (inputs[i].tagName === 'INPUT' && nonMandatoryFields.indexOf(fieldId) === -1 && inputs[i].value.trim() === '') {
                    return false; // Validation failed
                }
                // Check if the field is mandatory and not empty (for select inputs)
                else if (inputs[i].tagName === 'SELECT' && nonMandatoryFields.indexOf(fieldId) === -1 && inputs[i].value.trim() === '') {
                    return false; // Validation failed
                }
            }
            return true; // Validation successful
        }

        $('.tabs-box .tab-buttons .tab-btn').on('click', function (e) {
            var target = $($(this).attr('data-tab'));

            // Validate the current tab before switching to the next one
            if (currentTabIndex < $('.tabs-box .tab-buttons .tab-btn').index(this)) {
                if (!validateTabFields($('.tabs-content .tab').eq(currentTabIndex))) {
                     $("#exampleModalsubmit").modal('show');
                    return; // Stop switching tabs if validation fails
                }
            }

            // Switch to the next tab
            $('.tabs-box .tab-buttons .tab-btn').removeClass('active-btn');
            $(this).addClass('active-btn');
            $('.tabs-content .tab').fadeOut(0).removeClass('active-tab');
            $(target).fadeIn(300).addClass('active-tab');

            // Update the current tab index
            currentTabIndex = $('.tabs-box .tab-buttons .tab-btn').index(this);
        });
    });
$('.alert_close_btn').click(()=>{
    $("#exampleModalsubmit").modal('hide');
})
    //Accordion Box

    if ($('.accordion-box').length) {

        $(".accordion-box").on('click', '.acc-btn', function () {

            var outerBox = $(this).parents('.accordion-box');

            var target = $(this).parents('.accordion');

            if ($(this).hasClass('active') !== true) {

                $(outerBox).find('.accordion .acc-btn').removeClass('active');

            }

            if ($(this).next('.acc-content').is(':visible')) {

                return false;

            } else {

                $(this).addClass('active');

                $(outerBox).children('.accordion').removeClass('active-block');

                $(outerBox).find('.accordion').children('.acc-content').slideUp(300);

                target.addClass('active-block');

                $(this).next('.acc-content').slideDown(300);

            }

        });

    }

    //two-column-carousel

    if ($('.two-column-carousel').length) {

        $('.two-column-carousel').owlCarousel({

            loop: true,

            margin: 30,

            nav: true,

            smartSpeed: 1000,

            autoplay: 500,

            navText: ['<span class="fas fa-algle-left"></span>', '<span class="fas fa-algle-left-right"></span>'],

            responsive: {

                0: {

                    items: 1

                },

                480: {

                    items: 1

                },

                600: {

                    items: 1

                },

                800: {

                    items: 2

                },

                1024: {

                    items: 2

                }

            }

        });

    }

    //three-item-carousel
    if ($('.three-item-carousel').length) {
        $('.three-item-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            smartSpeed: 1000,
            autoplay: 500,
            navText: ['<span class="far fa-angle-left"></span>', '<span class="far fa-angle-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 3
                }
            },
            // Add the center option
            center: true
        });
    }
    if ($('.three-item-carousel-no-loop').length) {
        $('.three-item-carousel-no-loop').owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            smartSpeed: 1000,
            autoplay: 500,
            navText: ['<span class="far fa-angle-left"></span>', '<span class="far fa-angle-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 3
                }
            },
            // Add the center option
            center: true
        });
    }

    // Five Item Carousel

    if ($('.five-item-carousel').length) {

        $('.five-item-carousel').owlCarousel({

            loop: true,

            margin: 30,

            nav: true,

            smartSpeed: 500,

            autoplay: 5000,

            navText: ['<span class="fas fa-angle-left"></span>', '<span class="fas fa-angle-right"></span>'],

            responsive: {

                0: {

                    items: 1

                },

                600: {

                    items: 2

                },

                800: {

                    items: 3

                },

                1024: {

                    items: 4

                },

                1200: {

                    items: 5

                }

            }

        });

    }

    // Four Item Carousel

    if ($('.four-item-carousel').length) {

        $('.four-item-carousel').owlCarousel({

            loop: true,

            margin: 30,

            nav: true,

            smartSpeed: 500,

            autoplay: 5000,

            navText: ['<span class="fas fa-angle-left"></span>', '<span class="fas fa-angle-right"></span>'],

            responsive: {

                0: {

                    items: 1

                },

                600: {

                    items: 2

                },

                800: {

                    items: 3

                },

                1024: {

                    items: 4

                },

                1200: {

                    items: 4

                }

            }

        });

    }

    // single-item-carousel

    if ($('.single-item-carousel').length) {

        $('.single-item-carousel').owlCarousel({

            loop: true,

            margin: 30,

            nav: false,

            smartSpeed: 500,

            autoplay: 1000,

            navText: ['<span class="far fa-angle-left"></span>', '<span class="far fa-angle-right"></span>'],

            responsive: {

                0: {

                    items: 1

                },

                480: {

                    items: 1

                },

                600: {

                    items: 1

                },

                800: {

                    items: 1

                },

                1200: {

                    items: 1

                }

            }

        });

    }

    // banner-carousel

    if ($('.banner-carousel').length) {

        $('.banner-carousel').owlCarousel({

            loop: true,

            margin: 0,

            nav: true,

            animateOut: 'fadeOut',

            animateIn: 'fadeIn',

            active: true,

            smartSpeed: 1000,

            autoplay: 9000,

            navText: ['<span class="far fa-angle-left"></span>', '<span class="far fa-angle-right"></span>'],

            responsive: {

                0: {

                    items: 1

                },

                600: {

                    items: 1

                },

                800: {

                    items: 1

                },

                1024: {

                    items: 1

                }

            }

        });

    }

    //Add One Page nav

    if ($('.scroll-nav').length) {

        $('.scroll-nav').onePageNav();

    }

    //Sortable Masonary with Filters

    function enableMasonry() {

        if ($('.sortable-masonry').length) {

            var winDow = $(window);

            // Needed variables

            var $container = $('.sortable-masonry .items-container');

            var $filter = $('.filter-btns');

            $container.isotope({

                filter: '*',

                masonry: {

                    columnWidth: '.masonry-item.small-column'

                },

                animationOptions: {

                    duration: 500,

                    easing: 'linear'

                }

            });

            // Isotope Filter

            $filter.find('li').on('click', function () {

                var selector = $(this).attr('data-filter');

                try {

                    $container.isotope({

                        filter: selector,

                        animationOptions: {

                            duration: 500,

                            easing: 'linear',

                            queue: false

                        }

                    });

                } catch (err) {

                }

                return false;

            });

            winDow.on('resize', function () {

                var selector = $filter.find('li.active').attr('data-filter');

                $container.isotope({

                    filter: selector,

                    animationOptions: {

                        duration: 500,

                        easing: 'linear',

                        queue: false

                    }

                });

            });

            var filterItemA = $('.filter-btns li');

            filterItemA.on('click', function () {

                var $this = $(this);

                if (!$this.hasClass('active')) {

                    filterItemA.removeClass('active');

                    $this.addClass('active');

                }

            });

        }

    }

    enableMasonry();

    //Price Range Slider

    if ($('.price-range-slider').length) {

        $(".price-range-slider").slider({

            range: true,

            min: 0,

            max: 10000000,

            values: [0, 4900000],

            slide: function (event, ui) {

                $("input.property-amount").val('$' + ui.values[0] + " - " + '$' + ui.values[1]);

            }

        });

        $("input.property-amount").val($(".price-range-slider").slider("values", 0) + " - $" + $(".price-range-slider").slider("values", 1));

    }

    //Area Range Slider

    if ($('.area-range-slider').length) {

        $(".area-range-slider").slider({

            range: true,

            min: 0,

            max: 7000,

            values: [700, 4000],

            slide: function (event, ui) {

                $("input.area-range").val(ui.values[0] + " - " + ui.values[1]);

            }

        });

        $("input.area-range").val($(".area-range-slider").slider("values", 0) + " - sq ft" + $(".area-range-slider").slider("values", 1));

    }

    // Progress Bar

    if ($('.count-bar').length) {

        $('.count-bar').appear(function () {

            var el = $(this);

            var percent = el.data('percent');

            $(el).css('width', percent).addClass('counted');

        }, { accY: -50 });

    }

    $(document).ready(function () {
        $('select:not(.ignore)').niceSelect();
    });

    // color switcher

    function swithcerMenu() {

        if ($('.switch_menu').length) {

            $('.switch_btn button').on('click', function () {

                $('.switch_menu').toggle(500)

            });

            $('#styleOptions').styleSwitcher({

                hasPreview: true,

                fullPath: 'assets/css/color/',

                cookie: {

                    expires: 30,

                    isManagingLoad: true

                }

            });

        };

    }

    // page direction

    function directionswitch() {

        if ($('.page_direction').length) {

            $('.direction_switch button').on('click', function () {

                $('body').toggleClass(function () {

                    return $(this).is('.rtl, .ltr') ? 'rtl ltr' : 'rtl';

                })

            });

        };

    }

    if ($('.paroller').length) {

        $('.paroller').paroller({

            factor: 0.1,            // multiplier for scrolling speed and offset, +- values for direction control

            factorLg: 0.1,          // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control

            type: 'foreground',     // background, foreground

            direction: 'vertical' // vertical, horizontal

        });

    }

    if ($('.paroller-2').length) {

        $('.paroller-2').paroller({

            factor: -0.1,            // multiplier for scrolling speed and offset, +- values for direction control

            factorLg: -0.1,          // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control

            type: 'foreground',     // background, foreground

            direction: 'vertical' // vertical, horizontal

        });

    }

    // Date picker

    function datepicker() {

        if ($('#datepicker').length) {

            $('#datepicker').datepicker();

        };

    }

    // Time picker

    function timepicker() {

        if ($('input[name="time"]').length) {

            $('input[name="time"]').ptTimeSelect();

        }

    }

    if ($('.property-details .bxslider').length) {

        $('.property-details .bxslider').bxSlider({

            auto: true,

            nextSelector: '.property-details #slider-next',

            prevSelector: '.property-details #slider-prev',

            nextText: '<i class="fa fa-angle-right"></i>',

            prevText: '<i class="fa fa-angle-left"></i>',

            mode: 'fade',

            auto: 'true',

            speed: '700',

            pagerCustom: '.property-details .slider-pager .thumb-box'

        });

    };

    /*	=========================================================================

    When document is Scrollig, do

    ========================================================================== */

    jQuery(document).on('ready', function () {

        (function ($) {

            // add your functions

            directionswitch();

            swithcerMenu();

            datepicker();

            timepicker();

        })(jQuery);

    });

    /* ==========================================================================

    When document is Scrollig, do

    ========================================================================== */

    $(window).on('scroll', function () {

        headerStyle();

    });

    /* ==========================================================================

    When document is loaded, do

    ========================================================================== */

    $(window).on('load', function () {

        handlePreloader();

        enableMasonry();

    });

})(window.jQuery);

//

//AgentDetail-item-carousel

if ($('.agentDetail-item-carousel').length) {

    $('.agentDetail-item-carousel').owlCarousel({

        items: 1,

        loop: true,

        margin: 30,

        nav: true,

        smartSpeed: 1500,

        autoplay: 500,

        navText: ['<span class="far fa-angle-left"></span>', '<span class="far fa-angle-right"></span>'],

    });

}

//

$(document).ready(function () {

    $(".reviwmain").click(function () {

        // alert('working....')

    });

    var typingTimer;                //timer identifier
    var doneTypingInterval = 1000;  //time in ms, 5 second for example
    //on keyup, start the countdown
    $('#searchPropertyText4x').keyup(function () {
        clearTimeout(typingTimer);
        if ($('#searchPropertyText4x').val) {
            typingTimer = setTimeout(function () {
                //do stuff here e.g ajax call etc....
                var address = $("#searchPropertyText4x").val();
                //$("#out").html(v);
                //console.log(address);
                var componentForm = {
                    //locality: 'long_name',
                    postal_code: 'long_name',
                    street_number: 'short_name',
                    //route: 'long_name',
                    //administrative_area_level_1: 'long_name',
                    //country: 'long_name',
                    postal_code: 'short_name'
                };
                var geocoder, map, address;
                geocoder = new google.maps.Geocoder();
                //alert(geocoder)
                geocoder.geocode({
                    'address': address,

                    // componentRestrictions: { country: "us" },
                }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        // Get the first result
                        const result = results[0];

                        // Get the address components
                        const addressComponents = result.address_components;

                        // Find the house number, street, and zip code
                        let houseNumber = "";
                        let street = "";
                        let zipCode = "";
                        var anchorHere = '';
                        for (let i = 0; i < addressComponents.length; i++) {
                            const component = addressComponents[i];

                            if (component.types.includes("street_number")) {
                                houseNumber = component.long_name;
                            }

                            if (component.types.includes("route")) {
                                street = component.short_name;
                            }

                            if (component.types.includes("postal_code")) {
                                zipCode = component.long_name;
                            }

                        }//loop here
                        if (houseNumber != '' && street != '' && zipCode != '') {
                            anchorHere += '<a class="slcwhw" href="javascript:void(0)" data-text="' + street + '" data-id="' + houseNumber + '" value="' + zipCode + '">' +
                                houseNumber + ' ' + street + ' ' + zipCode
                                + '</a>';

                        }
                        else {
                            $('#skzmtle').text('Aris360 Property Estimation');
                            $('#skzmbdy').text('The given address is not valid; please provide the correct address.');
                            $('#skzModalNoti').modal('show');
                            setTimeout(() => {
                                $('#skzModalNoti').modal('hide');
                            }, 2000);
                        }
                        // console.log(`House Number: ${houseNumber}`);
                        // console.log(`Street: ${street}`);
                        // console.log(`Zip Code: ${zipCode}`);

                        $('.skzHworth').html(anchorHere);
                        // Log the results to the console

                    }
                });

            }, doneTypingInterval);
        }
    });

    $("body").on("click", "a.slcwhw", function (a) {

        {
            var b = $(this).data("text"),
                c = $(this).data("id");
            myvalue = $(this).attr('value');
            $(a.target)
        }
        $.ajax({
            type: "GET",
            url: sturl + "/houseCanary",
            data: {
                skzAddress: b,
                skzHouseNumber: c,
                skzZip: myvalue,

            },
            success: function (a) {
                //$redirectUrl = '';
                //var b = JSON.parse(a);
                console.log(a);
                if (a.return == true) {
                    var redirectUrl = sturl + '/' + 'estimation/' + a.data[0] + '/' + a.data[1] + '/' + a.data[2];
                    window.location.href = redirectUrl;
                }
                else {
                    $('#skzmtle').text('Aris360 Property Estimation');
                    $('#skzmbdy').text('If you want an estimate and don\'t see one, double-check your address.');
                    $('#skzModalNoti').modal('show');
                    setTimeout(() => {
                        $('#skzModalNoti').modal('hide');
                    }, 2000);
                    //alert('address not found.')//skzModalNoti
                }
            },
            error: function () {
                //console.log("error function here")
                ('#skzmbdy').text('There is an issue with the address. Please try again.');
                $('#skzModalNoti').modal('show');
                setTimeout(() => {
                    $('#skzModalNoti').modal('hide');
                }, 2000);
            }
        })
    })

    $("body").on("click", "button#skzwmhw", function (a) {
        var addressskzVal = $('#searchPropertyText4x').val();
        if (addressskzVal == "") {
            $('#skzmtle').text('Aris360 Property Estimation');
            $('#skzmbdy').text('Address field is required.');
            $('#skzModalNoti').modal('show');
            setTimeout(() => {
                $('#skzModalNoti').modal('hide');
            }, 2000);
        } else {
            if ($('.skzHworth').find('a').hasClass('slcwhw')) {
                $('#skzmtle').text('Aris360 Property Estimation');
                var spiner = '<div class="spinner-grow" role="status">';
                spiner += '<span class="sr-only">Loading...</span>'
                spiner += '</div>'
                $('#skzmbdy').html('We are processing your request please wait' + spiner);
                $('#skzModalNoti').modal('show');
                {
                    var b = $('.slcwhw').data("text"),
                        c = $('.slcwhw').data("id");
                    myvalue = $('.slcwhw').attr('value');
                    $(a.target)
                }
                $.ajax({
                    type: "GET",
                    url: sturl + "/houseCanary",
                    data: {
                        skzAddress: b,
                        skzHouseNumber: c,
                        skzZip: myvalue,

                    },
                    success: function (a) {
                        //$redirectUrl = '';
                        //var b = JSON.parse(a);
                        //console.log(a);
                        if (a.return == true) {
                            var redirectUrl = sturl + '/' + 'estimation/' + a.data[0] + '/' + a.data[1] + '/' + a.data[2];
                            window.location.href = redirectUrl;
                        }
                        else {
                            $('#skzmtle').text('Aris360 Property Estimation');
                            $('#skzmbdy').text('If you want an estimate and don\'t see one, double-check your address.');
                            $('#skzModalNoti').modal('show');
                            setTimeout(() => {
                                $('#skzModalNoti').modal('hide');
                            }, 2000);
                            //alert('address not found.')//skzModalNoti//
                        }
                    },
                    error: function () {
                        console.log("error function here")
                            ('#skzmbdy').text('There was an error, please try again later.');
                        $('#skzModalNoti').modal('show');
                        setTimeout(() => {
                            $('#skzModalNoti').modal('hide');
                        }, 2000);
                    }
                })
            }
            else {
                $('#skzmtle').text('Aris360 Property Estimation');
                $('#skzmbdy').text('There is an issue with the address. Please try again.');
                $('#skzModalNoti').modal('show');
                setTimeout(() => {
                    $('#skzModalNoti').modal('hide');
                }, 2000);
            }
        }

    })

    $("body").on("click", "button#loginNow", function (a) {
        $('#skzmtle').text('Login Now');
        $('#skzmbdy').text('You shold login before geting the estimation values of the property.');
        $('#skzModalNoti').modal('show');
        setTimeout(() => {
            $('#skzModalNoti').modal('hide');
            window.location = "https://www.aris360.com/login";
        }, 2000);

    });

    $("body").on("click", "a.skzAqs", function (a) {
        var textAsk = $(".textareaaks").val();
        if (!$(".textareaaks").val()) {
            $('#skzmtle').text('Ask ARIS360 Prime Agent a question');
            $('#skzmbdy').text('Please check the required fiels and try agian');
            $('#skzModalNoti').modal('show');
            setTimeout(() => {
                $('#skzModalNoti').modal('hide');
            }, 2000);
        } else {
            $.ajax({
                type: "GET",
                url: sturl + "/askprimeagent",
                data: {
                    askmessage: $(".textareaaks").val(),
                    curntproty: $(".curntproty").val(),
                },
                success: function (a) {
                    //$redirectUrl = '';
                    //var b = JSON.parse(a);
                    //alert(a);
                    if (a.return == true) {
                        $('#skzmtle').text('Ask ARIS360 Prime Agent a question');
                        $('#skzmbdy').text(a.message);
                        $('#skzModalNoti').modal('show');
                        setTimeout(() => {
                            $('#skzModalNoti').modal('hide');
                        }, 2000);
                    }
                    else {
                        //alert(a.message);
                        $('#skzmtle').text('Ask ARIS360 Prime Agent a question');
                        $('#skzmbdy').text(a.message);
                        $('#skzModalNoti').modal('show');
                        setTimeout(() => {
                            $('#skzModalNoti').modal('hide');
                        }, 2000);
                    }
                },
                error: function () {
                    $('#skzmtle').text('Ask ARIS360 Prime Agent a question');
                    $('#skzmbdy').text('Something went wrong please try agian.');
                    $('#skzModalNoti').modal('show');
                    setTimeout(() => {
                        $('#skzModalNoti').modal('hide');
                    }, 2000);
                }
            })
        }

    });

    $(window).bind("load", function () {
        if ($('#xkykksdf').length) {
            //alert('working..')

        }

    });

});

function initskzMap(latitute, longitute = null) {
    // Initialize the map
    //alert(latitute)
    const map = new google.maps.Map(document.getElementById("skzMapEst"), {
        center: { lat: latitute, lng: longitute },
        zoom: 14,
    });

    // Create a marker
    const marker = new google.maps.Marker({
        position: { lat: latitute, lng: longitute },
        map: map,
        icon: {
            url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            scaledSize: new google.maps.Size(50, 50),
            anchor: new google.maps.Point(25, 50)
        }
    });

    // Set a value in the marker
    marker.value = 42;
}

//       function initialize() {
//     initAutocomplete();
// }

// function initAutocomplete() {
//     // Create the autocomplete object, restricting the search to geographical
//     // location types.

//     autocomplete = new google.maps.places.Autocomplete(
//         /** @type {!HTMLInputElement} */
//         (search1), {
//             types: ['geocode']
//         });

//     autocomplete = new google.maps.places.Autocomplete(
//         /** @type {!HTMLInputElement} */
//         (search2), {
//             types: ['geocode']
//         });

//     autocomplete = new google.maps.places.Autocomplete(
//         /** @type {!HTMLInputElement} */
//         (search4), {
//             types: ['geocode']
//         });

//         autocomplete = new google.maps.places.Autocomplete(
//             /** @type {!HTMLInputElement} */
//             ($('#searchPropertyText4x')), {
//                 types: ['geocode']
//             });

// }

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1280: {
            slidesPerView: 5,
            spaceBetween: 40,
        },
        1440: {
            slidesPerView: 5,
            spaceBetween: 40,
        },
        1600: {
            slidesPerView: 5,
            spaceBetween: 40,
        },
    },
});

var swiper = new Swiper(".listing_agent_detail", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },

});

$(function () {
    $('.map_custom_btn').click(function () {
        if ($('.fixed_search_section').hasClass("active")) {

            $('.fixed_search_section').removeClass('active');
        }
        else {

            $('.fixed_search_section').addClass('active');
        }
    });
});

// Date Slider js
var swiper = new Swiper(".dateSlider", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// Property Detail Prev and Next Button

function bootstrapTabControl() {
    var i, items = $('.property_modal_images_left .nav-link'), pane = $('.property_modal_images_right .tab-pane');
    // next
    $('.property_detail_prev').on('click', function () {
        for (i = 0; i < items.length; i++) {
            if ($(items[i]).hasClass('active') == true) {

                break;
            }
        }
        if (i <= items.length - 1) {
            // for tab

            if (i + 1 == items.length) {
                $(items[i]).removeClass('active');
                $(items[0]).addClass('active');
                // for pane
                $(pane[i]).removeClass('show active');
                $(pane[0]).addClass('show active');
                $(".property_modal_images_left").scrollDown();
            }
            else {
                $(items[i]).removeClass('active');
                $(items[i + 1]).addClass('active');
                // for pane
                $(pane[i]).removeClass('show active');
                $(pane[i + 1]).addClass('show active');
            }
        }

    });
    // Prev
    $('.property_detail_next').on('click', function () {
        for (i = 0; i < items.length; i++) {
            if ($(items[i]).hasClass('active') == true) {
                break;
            }
        }
        // if(i != 0){
        console.log(i, items.length);
        if (i == 0) {
            $(items[i]).removeClass('active');
            $(items[items.length - 1]).addClass('active');
            // for pane
            $(pane[i]).removeClass('show active');
            $(pane[items.length - 1]).addClass('show active');
            $(".property_modal_images_left").scrollTop()
        }
        else {
            // for tab
            $(items[i]).removeClass('active');
            $(items[i - 1]).addClass('active');
            // for pane
            $(pane[i]).removeClass('show active');
            $(pane[i - 1]).addClass('show active');
        }

        // }
    });
}
bootstrapTabControl();

// Section id Js
$("a[href^='#']").click(function (e) {
    e.preventDefault();

    var position = $($(this).attr("href")).offset().top;
    $("body, html").animate({
        scrollTop: position
    }, '3000');
});

// Aris Estimate SliderJs
// var swiper = new Swiper(".ArisEstimateSlider", {
// 	slidesPerView: 2,
// 	spaceBetween: 30,
// 	navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
//   });

// Transit and Place Tab Show js
$('.transitTab').click(function () {
    $('#pills-transit-tab').tab('show')
})

$('.placeTab').click(function () {
    $('#pills-homePlace-tab').tab('show')
})

// Climate Tab Show js
$('.floodclimateTab').click(function () {
    $('#pills-Flood-tab').tab('show')
})
$('.fireclimateTab').click(function () {
    $('#pills-Fire-tab').tab('show')
})
$('.heatclimateTab').click(function () {
    $('#pills-Heat-tab').tab('show')
})

// Climatecheck Tab Show js
$('.stormrisktab').click(function () {
    $('#pills-storm-tab').tab('show')
})
$('.droughttab').click(function () {
    $('#pills-Drought-tab').tab('show')
})
//   property detail read more text js
$(document).ready(function () {
    // Configure/customize these variables.
    var showChar = 300;  // How many characters are shown by default
    var ellipsestext = "..";
    var moretext = "Read More";
    var lesstext = "Read Less";

    $('.more').each(function () {
        var content = $(this).html();

        if (content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);

            var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

            $(this).html(html);
        }

    });

    $(".morelink").click(function () {
        if ($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });

});

//
const progress = document.querySelector('.progresss');

progress.addEventListener('input', function () {
    const value = this.value;
    this.style.background = `linear-gradient(to right, rgb(222 30 37) 0%, rgb(222 30 37) ${value}%, #fff ${value}%, white 100%)`
})

//Downpayment Modal Script
$(document).ready(function () {
    $(".downPaymentSection").click(function () {
        $(".downPaymentSection_modal").show();
    });
    $(".downPaymentclose").click(function () {
        $(".downPaymentSection_modal").hide();
    });

});

//   Home Price Modal
$(document).ready(function () {
    $(".HomePriceValue").click(function () {
        $(".HomePrice_modal").show();
    });
    $(".Priceclose").click(function () {
        $(".HomePrice_modal").hide();
    });
});

// LoanDetailValue_modal
$(document).ready(function () {
    $(".LoanDetailValue").click(function () {
        $(".LoanDetailValue_modal").show();
    });
    $(".interestclose").click(function () {
        $(".LoanDetailValue_modal").hide();
    });
});

//   AdvanceValueOpt
$(document).ready(function () {
    $(".AdvanceValueOpt").click(function () {
        $(".AdvanceValueOpt_modal").show();
    });
    $(".AdvanceValueOptclose").click(function () {
        $(".AdvanceValueOpt_modal").hide();
    });

    $('#zkssaque').on('click', function () {
        let message = $('#zksquestxtar').val();
        let _token = $('#zkscrsr').val();
        let prprtyId = $('#prprtyId').val();

        let emailID = $('#emailID').val();
        let agentID = $('#agentID').val();
        let agentUserName = $('#agentUserName').val();

        if ($.trim(message) === '') {
            $('#skzmtle').html('The message field is required.');
            $('#skzmbdy').hide();
            $('#skzModalNoti').find('.modal-footer').hide();
            $('#skzModalNoti').modal('show');

        }
        else {
            $.ajax({
                url: sturl + '/askquestion',  // the endpoint
                type: 'POST',  // http method
                data: { message: message, _token: _token, prprtyId: prprtyId, emailID: emailID, agentID: agentID, agentUserName: agentUserName },  // data sent with the post request

                success: function (response) {
                    if (response.message == 'Ensure you are logged in prior to submitting your message.') {
                        $('#skzmtle').html(response.message);
                        $('#skzmbdy').hide();
                        $('#skzModalNoti').find('.modal-footer').hide();
                        $('#skzModalNoti').modal('show');
                        setTimeout(() => {
                            $('#skzModalNoti').modal('hide');
                            window.location.href = sturl + '/login';
                        }, 2000);

                    } else {
                        $('#skzmtle').html('<span class="modalcenter">Thank You!</span><br>We have received your inquiry and our representative will be connecting with you shortly.');
                        $('#skzmbdy').hide();
                        $('#skzModalNoti').find('.modal-footer').hide();
                        $('#skzModalNoti').modal('show');
                        // setTimeout(() => {
                        //     $('#skzModalNoti').modal('hide');
                        // }, 2000);
                        $('#zksquestxtar').val('');
                    }

                    //console.log(response.message);
                },

                error: function (response) {
                    $('#skzmtle').html(response.message);
                    $('#skzmbdy').hide();
                    $('#skzModalNoti').find('.modal-footer').hide();
                    $('#skzModalNoti').modal('show');
                    // setTimeout(() => {
                    //     $('#skzModalNoti').modal('hide');
                    // }, 2000);
                    // Code here for error response
                    //console.log(response);
                }
            });
        }

    });

    $('#schedule_now').on('click', function () {

        let _token = $('#schedule_token').val();
        let prprtyId = $('#prprtyId').val();
        let date = $('input[name="date"]:checked').val();

        let emailID = $('#emailID').val();
        let agentID = $('#agentID').val();
        let agentUserName = $('#agentUserName').val();

        if (date === undefined) {
            $('#skzmtle').html('');
            $('#skzmtle').html('To schedule this property, please kindly select the date first. Your cooperation is appreciated.');
            $('#skzmbdy').hide();
            $('#skzModalNoti').find('.modal-footer').hide();
            $('#skzModalNoti').modal('show');
        }
        else {
            $.ajax({
                url: sturl + '/schedule',  // the endpoint
                type: 'POST',  // http method
                data: { _token: _token, prprtyId: prprtyId, emailID: emailID, agentID: agentID, agentUserName: agentUserName, date: date },  // data sent with the post request

                success: function (response) {
                    if (response.message == 'Ensure you are logged in prior to submitting your message.') {
                        $('#skzmtle').html('');
                        $('#skzmtle').html(response.message);
                        $('#skzmbdy').hide();
                        $('#skzModalNoti').find('.modal-footer').hide();
                        $('#skzModalNoti').modal('show');
                        setTimeout(() => {
                            $('#skzModalNoti').modal('hide');
                            window.location.href = sturl + '/login';
                        }, 2000);

                    } else {
                        $('#skzmtle').html('');
                        $('#skzmtle').html('<span class="modalcenter">Thank You!</span><br>We have received your tour request and our representative will be connecting with you shortly.');
                        $('#skzmbdy').hide();
                        $('#skzModalNoti').find('.modal-footer').hide();
                        $('#skzModalNoti').modal('show');
                        $('#zksquestxtar').val('');
                    }

                    //console.log(response.message);
                },

                error: function (response) {
                    $('#skzmtle').html('');
                    $('#skzmtle').html(response.message);
                    $('#skzmbdy').hide();
                    $('#skzModalNoti').find('.modal-footer').hide();
                    $('#skzModalNoti').modal('show');
                    // setTimeout(() => {
                    //     $('#skzModalNoti').modal('hide');
                    // }, 2000);
                    // Code here for error response
                    //console.log(response);
                }
            });
        }
    });
});
// Calculator
const homeVal = document.getElementById("homeVal");
const downPay = document.getElementById("downpay");
const percent1 = document.getElementById("percent1");
const interest = document.getElementById("interest");
const years = document.getElementById("years");
const totalAmount = document.getElementById("totalAmount");
const mortgageAmount = document.getElementById("mortgageAmount");
const allPayment = document.getElementById("allPayment");
const totalInterest = document.getElementById("totalInterest");
const insuranceValue = document.getElementById("insuranceValue");
const tax = document.getElementById("tax");
const homeOwnerIns = document.getElementById("homeOwnerIns");
const pmi = document.getElementById("pmi");
const hoa = document.getElementById("hoa");
const downpayValue = document.getElementById("downpayValue");
const downpayValue2 = document.getElementById("downpayValue2");
const homePrice = document.getElementById("homePrice");
const rangeinput = document.getElementById("rangeinput");
const downpayRange = document.getElementById("downpayRange");
const monthlyPaymentHeading = document.getElementById("monthlyPaymentHeading");
const loanInput = document.getElementById("loanInput");
const LoanType1 = document.getElementById("LoanType1");
const LoanType2 = document.getElementById("LoanType2");
const LoanType3 = document.getElementById("LoanType3");
const taxPercent = document.getElementById("taxPercent");
const propertyTaxInner = document.getElementById("propertyTaxInner");
const HOAInner = document.getElementById("HOAInner");
const HomeownersTaxInner = document.getElementById("HomeownersTaxInner");
const PrincipalTaxInner = document.getElementById("PrincipalTaxInner");
//Functions

// Get the progress bar elements
var progressBar1 = document.getElementById('progressBar1');
var progressBar2 = document.getElementById('progressBar2');
var progressBar3 = document.getElementById('progressBar3');

// Function to update the progress bars
const onchangeTax = () => {
    // Calculate the percentages of progress
    var percentage1 = (tax.value / 100) * 100;
    var percentage2 = (hoa.value / 100) * 100;
    var percentage3 = (homeOwnerIns.value / 100) * 100;

    // Update the widths of the progress bars
    progressBar1.style.width = percentage1 + '%';
    progressBar2.style.width = percentage2 + '%';
    progressBar3.style.width = percentage3 + '%';
    const selectedOption = document.querySelector('input[name="loantypeRadio"]:checked');
    const numberOfPayments = parseInt(selectedOption.value) * 12;
    const monthlyPayment = downPay.value.replace(/,/g, "") / numberOfPayments;
    var totalMonthlyPayment = monthlyPayment + parseInt(tax.value) + parseInt(hoa.value) + parseInt(homeOwnerIns.value);
    monthlyPaymentHeading.innerHTML = ` $${Math.trunc(totalMonthlyPayment).toLocaleString()}  per month`
    propertyTaxInner.innerHTML = `$${parseInt(tax.value).toLocaleString()}`
}

const onchangeHOA = () => {
    // Calculate the percentages of progress
    var percentage1 = (tax.value / 100) * 100;
    var percentage2 = (hoa.value / 100) * 100;
    var percentage3 = (homeOwnerIns.value / 100) * 100;

    // Update the widths of the progress bars
    progressBar1.style.width = percentage1 + '%';
    progressBar2.style.width = percentage2 + '%';
    progressBar3.style.width = percentage3 + '%';
    const selectedOption = document.querySelector('input[name="loantypeRadio"]:checked');
    const numberOfPayments = parseInt(selectedOption.value) * 12;
    const monthlyPayment = downPay.value.replace(/,/g, "") / numberOfPayments;
    var totalMonthlyPayment = monthlyPayment + parseInt(tax.value) + parseInt(hoa.value) + parseInt(homeOwnerIns.value);
    monthlyPaymentHeading.innerHTML = `$${Math.trunc(totalMonthlyPayment).toLocaleString()}  per month`
    HOAInner.innerHTML = `$${parseInt(hoa.value).toLocaleString()}`

}
const onchangeinsurance = () => {
    // Calculate the percentages of progress
    var percentage1 = (tax.value / 100) * 100;
    var percentage2 = (hoa.value / 100) * 100;
    var percentage3 = (homeOwnerIns.value / 100) * 100;

    // Update the widths of the progress bars
    progressBar1.style.width = percentage1 + '%';
    progressBar2.style.width = percentage2 + '%';
    progressBar3.style.width = percentage3 + '%';
    const selectedOption = document.querySelector('input[name="loantypeRadio"]:checked');
    const numberOfPayments = parseInt(selectedOption.value) * 12;
    const monthlyPayment = downPay.value.replace(/,/g, "") / numberOfPayments;
    var totalMonthlyPayment = monthlyPayment + parseInt(tax.value) + parseInt(hoa.value) + parseInt(homeOwnerIns.value);
    monthlyPaymentHeading.innerHTML = `$${Math.trunc(totalMonthlyPayment).toLocaleString()}  per month`
    HomeownersTaxInner.innerHTML = `$${parseInt(homeOwnerIns.value).toLocaleString()}`

}
const calculatePercentage = () => {
    const percentage = (homeVal.value.replace(/,/g, "") * percent1.value) / 100;
    downPay.value = parseFloat(percentage).toLocaleString();
    const result = homeVal.value.replace(/,/g, "") - downPay.value.replace(/,/g, "");
    downpayValue.innerHTML = `${result.toLocaleString()}`;
    downpayValue2.innerHTML = `${result.toLocaleString()}`;
    // Number of monthly payment
    const monthlyInterestRate = interest.value / (12 * 100);
    const numberOfPayments = years.value * 12;
    const numerator = downPay.value.value.replace(/,/g, "") * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, numberOfPayments);
    const denominator = Math.pow(1 + monthlyInterestRate, numberOfPayments) - 1;
    const monthlyPayment = numerator / denominator;
    monthlyPaymentHeading.innerHTML = ` ${monthlyPayment}`
};
const InterestInput = () => {
    const monthlyInterestRate = loanInput.value / (12 * 100);
    const selectedOption = document.querySelector('input[name="loantypeRadio"]:checked');
    const numberOfPayments = parseInt(selectedOption.value) * 12;
    // Number of monthly payment
    const numerator = downPay.value.replace(/,/g, "") * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, numberOfPayments);
    const denominator = Math.pow(1 + monthlyInterestRate, numberOfPayments) - 1;
    const monthlyPayment = numerator / denominator;
    PrincipalTaxInner.innerHTML = `$${Math.trunc(monthlyPayment).toLocaleString()}  per month`
    monthlyPaymentHeading.innerHTML = `<a href="javascript:void(0)">Reset</a>$${Math.trunc(monthlyPayment).toLocaleString()}  per month`
}
const RadioChange = () => {
    const selectedOption = document.querySelector('input[name="loantypeRadio"]:checked');
    const numberOfPayments = parseInt(selectedOption.value) * 12;
    const monthlyPayment = downPay.value.replace(/,/g, "") / numberOfPayments;
}

const calculateHomePrice = () => {
    homePrice.innerHTML = `${homeVal.value.toLocaleString()}`;
}
const calculateHomePriceRange = () => {
    homePrice.innerHTML = `${rangeinput.value}`;
    homeVal.value = `${rangeinput.value}`;
}
const DownpayRange = () => {
    const percentageDownPay = (homeVal.value.replace(/,/g, "") / downpayRange.value) * 100;
    percent1.value = parseFloat(percentageDownPay);
    downpayValue.innerHTML = `${downpayRange.value}`;
    downpayValue2.innerHTML = `${downpayRange.value}`;
    downPay.value = downpayRange.value.toLocaleString();
}
// Calculate interest and loan
const calculate = () => {
    const monthlyInterestRate = interest.value / (12 * 100);
    const numberOfPayments = years.value * 12;

    // Changing Value of html
    totalAmount.innerHTML = `$${downPay.value.toLocaleString()}`;
    allPayment.innerHTML = `$${homeVal.value.toLocaleString()}`;
    totalInterest.innerHTML = `$${Math.trunc(monthlyPayment).toLocaleString()}`;
    var totalMonthlyPayment = monthlyPayment + tax.value + homeOwnerIns.value + pmi.value + hoa.value;
    console.log(tax.value, 'callll')
};

// calculate percentage of down payment
const calculatePercentageDownPay = () => {
    const percentageDownPay = (homeVal.value.replace(/,/g, "") / downPay.value.replace(/,/g, "")) * 100;
    percent1.value = parseFloat(percentageDownPay);
    const result = homeVal.value.replace(/,/g, "") - downPay.value.replace(/,/g, "");
    mortgageAmount.value = result.toLocaleString();
    if (percent1.value === "Infinity") {
        percent1.value = 0;
    }
};
