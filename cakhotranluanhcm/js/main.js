$(document).ready(function() {
    "use strict";


    var window_width = $(window).width(),
        window_height = window.innerHeight,
        header_height = $(".default-header").height(),
        fitscreen = window_height - header_height;

    $(".fullscreen").css("height", window_height)
    $(".fitscreen").css("height", fitscreen);



    $(document).ready(function() {

        $('html, body').hide();

        if (window.location.hash) {

            setTimeout(function() {

                $('html, body').scrollTop(0).show();

                $('html, body').animate({

                    scrollTop: $(window.location.hash).offset().top - 108

                }, 1000)

            }, 0);

        } else {

            $('html, body').show();

        }

    });

    //------- Header Scroll Class  js --------//  

    $(document).ready(function() {
        $('.navbar-nav li, .hot-email, .email ,.primary-btn').on('click', function() {

            var scrollAnchor = $(this).attr('data-scroll'),
                scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top - 28;

            $('body,html').animate({
                scrollTop: scrollPoint
            }, 500);
            return true;
        })

        $('.navbar-nav li').on('click', function() {
            $('.fekit-header-h-2 .navbar-collapse').toggleClass('offcanvas-collapse--open');
        });



        // Scroll Menu
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 5) {
                $("header").addClass("active");
                // $("header nav .navbar-brand img").attr("src","./asset/img/dacsantaybac/logo-white-02.png");
            } else {
                $("header").removeClass("active");
                $("header .nav-link a:after").attr("background-size", "5px");
                $("header .headertop").attr("background-size", "5px");
                // $("header nav .navbar-brand img").attr("src","./asset/img/dacsantaybac/logo-02.png");
            }
        });

        // Off canvas
        $('.fekit-header-h-2 .navbar-toggler').on('click', function() {
            $('.fekit-header-h-2 .navbar-collapse').toggleClass('offcanvas-collapse--open');
        });


        // Show form shop
        $('.fekit-header-h-2 .menutool__shop').on('click', function() {
            $('.fekit-header-h-2__shop').addClass('shop__open');
            $('.fekit-header-h-2 .overlay').css({ "opacity": "1", "z-index": "91", "position": "fixed" });
            $('.fekit-header-h-2 .navbar-toggler').css("z-index", "90");
        });

        // Off shop
        $('.fekit-header-h-2__shop button').on('click', function() {
            $('.fekit-header-h-2__shop').removeClass('shop__open');
            $('.fekit-header-h-2 .overlay').css({ "opacity": "0", "z-index": "-1", "position": "initial" });
        });


        // Change img logo when mobile
        if ($(window).width() <= 1200) {
            $('.headermain').children().removeClass('container');
        } else {
            $('.headermain').children().addClass('container');
        };


        ////////////////////////////////////////////////////////////////
        // DEVEVLOP
        ////////////////////////////////////////////////////////////////
        $(window).resize(function() {
            // Change img when mobile
            if ($(window).width() <= 1200) {
                $('.headermain').children().removeClass('container');
            } else {
                $('.headermain').children().addClass('container');
            };
        })
    });

    $('#decs_ex').click(function() {
        if ($("#wrap-gallery").hasClass("wrap-gallery")) {
            $("#wrap-gallery").removeClass("wrap-gallery");
            $("#wrap-gallery").addClass("unhide-wrap-gallery");
            $("#decs_ex").text("Thu gọn");
        } else {
            $("#wrap-gallery").addClass("wrap-gallery");
            $("#wrap-gallery").removeClass("unhide-wrap-gallery");
            $("#decs_ex").text("Xem thêm");
        }
        if ($("#button").hasClass("btn-wrap-gallery")) {
            $("#button").removeClass("btn-wrap-gallery");
            $("#button").addClass("unbtn-wrap-gallery");
        } else {
            $("#button").addClass("btn-wrap-gallery");
            $("#button").removeClass("unbtn-wrap-gallery");
        }
    });

    //------- to Top --------//  

    $(window).scroll(function() {
        if ($(this).scrollTop() > 250) {
            $('#toTop').addClass('scroll');
            $('#hot-phone').addClass('hot-phone');
            $('#hot-email').addClass('hot-email');
            $('#hot-mess').addClass('hot-mess');
        } else {
            $('#toTop').removeClass('scroll');
            $('#hot-phone').removeClass('hot-phone');
            $('#hot-email').removeClass('hot-email');
            $('#hot-mess').removeClass('hot-mess');
        }
    });

    $('#toTop').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        return false;
    });

    $(window).scroll(function() {

        var scrollPos = $(this).scrollTop();


        $('.banner-content').css({
            'opacity': 1 - (scrollPos / 400)
        });

        if (scrollPos > 300) {
            $('.banner-content').css('display', 'none');
        } else {
            $('.banner-content').css('display', 'block');
        }


    });

    $(document).ready(function() {
        var owl = $('#about .owl-carousel');
        owl.owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsiveClass: true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            pagination: false,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                    margin: 10
                },
                767: {
                    items: 4,
                    nav: false,
                    margin: 10
                },
                1201: {
                    items: 1,
                    nav: false
                }
            }
        });
    })
    $(document).ready(function() {
        var owl = $('#feedback .owl-carousel');
        owl.owlCarousel({
            loop: true,
            margin: 15,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                992: {
                    items: 1,
                    nav: false
                },
                1200: {
                    items: 2,
                    nav: false
                }
            }
        });
    })
    $(document).ready(function() {
        var $grid = $('.grid').imagesLoaded(function() {
            $grid.isotope({
                itemSelector: 'a'
            });
        });

        // Fancybox
        $().fancybox({
            selector: '.imglist a:visible',
            thumbs: {
                autoStart: true
            }
        });
    });

});
new WOW().init();
$(".snake").snakeify({
    speed: 200
});
console.log('%c FpolyHub', 'margin: auto; font-size:100px;color:#ff451a;text-shadow:0 1px 0 #f73936,0 2px 0 #f73936 ,0 3px 0 #f73936 ,0 4px 0 #f73936 ,0 5px 0 #f73936 ,0 6px 1px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1),0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);')
console.log('%c     Welcome!', 'border-radius: 2px; padding: 3px; color: #ff451a');
console.log('%c     We are Web Developers. Welcome to FPT College', 'border-radius: 2px; padding: 3px; color: #ff451a');
console.log('%c     Address: 778/B1 Nguyen Kiem, Ward 3, Phu Nhuan Distric, Ho Chi Minh City', 'border-radius: 2px; padding: 3px; color: #ff451a');
console.log('%c     Contact: 090 678 1940 - Mr.Khoa', 'border-radius: 2px; padding: 3px; color: #ff451a')