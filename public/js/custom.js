$(document).ready(function() {

    "use strict";
    
    // Start Fall Rain
    creatRain();

    /* ========================================================================= */
    /*  Slider Header
    /* ========================================================================= */

	$('.header-slider').owlCarousel({
		loop: true,
        margin: 0,
        autoplay: true,
        dots: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
	});

    /* ========================================================================= */
    /*  Color Switcher
    /* ========================================================================= */

    var toggle = $('.color-switcher .toggle');
    var colorTile = $('.color-switcher .color a'); 
    toggle.on('click', function(){
        $(this).parent().toggleClass('open');
    });
    colorTile.on('click', function(e){
        colorTile.removeClass('current');
        $(this).addClass('current');
        var color = $(this).attr('data-color');
        $('head link.color-scheme').attr('href', 'css/colors/theme-' + color + '.css');
        e.preventDefault();
    });

    /* ========================================================================= */
    /*  Navigation Bar
    /* ========================================================================= */

    $(window).on('scroll', function() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });

    // Navbar Smoothscroll js
    $(function() {
        $('.sec-nav a, #home a, #home02 a, #home03 a').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 70
            }, 1000);
            event.preventDefault();
        });
    });

    // Navbar ScollSpy
    $("body").scrollspy({

        target: ".navbar-collapse",
        offset: 95

    });

    /* ========================================================================= */
    /*  Change Photo On Mobile Services [Homepage Style 01]
    /* ========================================================================= */

    $('.features-slider').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    /* Change Button */

    var b = $(".features-slider"),
        k = $(".mobile-nav-pills li");
    b.on('changed.owl.carousel', function(event) {
        var n = (event.item.index + 1) - event.relatedTarget._clones.length / 2;
        var o = event.item.count;
        if (n > o || n == 0) {
            n = o - (n % o);
        }

        (n > o || 0 == n) && (n = o - n % o), n--;
        var t = $(".mobile-nav-pills li:nth(" + n + ")");
        a(t)

    }), k.on("click", function() {
        var e = $(this).data("owl-item");
        b.trigger("to.owl.carousel", e), a($(this));
    });

    function a(e) {
        k.removeClass("active-icon");
        e.addClass("active-icon");
    }

    /* Change Text */
    var b = $(".features-slider"),
        i = $(".mobile-tab-pane");
    b.on('changed.owl.carousel', function(event) {
        var h = (event.item.index + 1) - event.relatedTarget._clones.length / 2;
        var v = event.item.count;
        if (h > v || h == 0) {
            h = v - (h % v);
        }

        (h > v || 0 == h) && (h = v - h % v), h--;
        var w = $(".mobile-tab-pane:nth(" + h + ")");
        c(w)

    }), $(".mobile-nav-pills li").on("click", function() {
        return false;
        var y = $(this).data("owl-item");
        b.trigger("to.owl.carousel", y), c($(".mobile-tab-pane"));
    });

    function c(y) {
        i.removeClass("active");
        y.addClass("active");
    }

    /* ========================================================================= */
    /*  Change Photo On Mobile Services [Homepage Style 02]
    /* ========================================================================= */

    $('.feat02-slider').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    /* Change Button */

    var s = $(".feat02-slider"),
        q = $(".icon-feat");
    s.on('changed.owl.carousel', function(event) {
        var m = (event.item.index + 1) - event.relatedTarget._clones.length / 2;
        var p = event.item.count;
        if (m > p || m == 0) {
            m = p - (m % p);
        }

        (m > p || 0 == m) && (m = p - m % p), m--;
        var w = $(".icon-feat:nth(" + m + ")");
        x(w)

    }), q.on("click", function() {
        var f = $(this).data("owl-item");
        s.trigger("to.owl.carousel", f), x($(this));
    });

    function x(f) {
        q.removeClass("active-service");
        f.addClass("active-service");
    }

    /* ========================================================================= */
    /*  Change Photo On Mobile Services [Homepage Style 03]
    /* ========================================================================= */

    $('.feat03-slider').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    /* Change Button */

    var featSlider = $(".feat03-slider"),
        pillsLI = $(".mobile-nav-pills li");
        featSlider.on('changed.owl.carousel', function(event) {
        var itemN = (event.item.index + 1) - event.relatedTarget._clones.length / 2;
        var itemO = event.item.count;
        if (itemN > itemO || itemN == 0) {
            itemN = itemO - (itemN % itemO);
        }

        (itemN > itemO || 0 == itemN) && (itemN = itemO - itemN % itemO), itemN--;
        var itemT = $(".mobile-nav-pills li:nth(" + itemN + ")");
        itemA(itemT)

    }), pillsLI.on("click", function() {
        var itemE = $(this).data("owl-item");
        featSlider.trigger("to.owl.carousel", itemE), itemA($(this));
    });

    function itemA(itemE) {
        pillsLI.removeClass("active-icon");
        itemE.addClass("active-icon");
    }

    /* Change Text */
    var featSlider = $(".feat03-slider"),
        itemII = $(".mobile-tab-pane");
        featSlider.on('changed.owl.carousel', function(event) {
        var itemH = (event.item.index + 1) - event.relatedTarget._clones.length / 2;
        var itemV = event.item.count;
        if (itemH > itemV || itemH == 0) {
            itemH = itemV - (itemH % itemV);
        }

        (itemH > itemV || 0 == itemH) && (itemH = itemV - itemH % itemV), itemH--;
        var itemW = $(".mobile-tab-pane:nth(" + itemH + ")");
        itemC(itemW)

    }), $(".mobile-nav-pills li").on("click", function() {
        return false;
        var itemY = $(this).data("owl-item");
        featSlider.trigger("to.owl.carousel", itemY), itemC($(".mobile-tab-pane"));
    });

    function itemC(itemY) {
        itemII.removeClass("active");
        itemY.addClass("active");
    }

    /* ========================================================================= */
    /*  Screenshots Section [Homepage Style 01]
    /* ========================================================================= */

    var swiper = new Swiper('.swiper-screenshots', {
        loop: true,
        slidesPerView: 'auto',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
        coverflow: {
            rotate: 5,
            stretch: 0,
            depth: 100,
            modifier: 3,
            slideShadows: false
        }
    });

    /* ========================================================================= */
    /*  Screenshots Section [Homepage Style 02]
    /* ========================================================================= */

    var swiper = new Swiper('.swiper-screenshots02', {
        loop: true,
        slidesPerView: 'auto',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        autoplay: true,
        disableOnInteraction: false,
        spaceBetween: 70,
        coverflow: {
            rotate: 5,
            stretch: 0,
            depth: 100,
            modifier: 3,
            slideShadows: false
        }
    });

    /* ========================================================================= */
    /*  Testimonials Slider
    /* ========================================================================= */

    $('.testimonials-slider').owlCarousel({
        loop: true,
        autoplay: true,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            700: {
                items: 2
            },
            1000: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });

    /* ========================================================================= */
    /*  Clients Slider
    /* ========================================================================= */

    $('.clients-slider').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });

    /* ========================================================================= */
    /*  Statistic Counter
    /* ========================================================================= */

    $('.statistic-number').each(function() {
        $(this).appear(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        }, {
            accX: 0,
            accY: 0
        });
    });

    /* ========================================================================= */
    /*  Google Map Toggle Buttons [Homepage Style 02]
    /* ========================================================================= */

    $('.button-map button.open-map').on('click', function() {
        $('.google-map-area').slideDown(function() {
            $('.button-map button.open-map').slideUp(50, function() {
                $('.button-map button.close-map').slideDown(50);
            });
        });
    });

    $('.button-map button.close-map').on('click', function() {
        $('.google-map-area').slideUp(function() {
            $('.button-map button.close-map').slideUp(50, function() {
                $('.button-map button.open-map').slideDown(50);
            });
        });
    });

    /* ========================================================================= */
    /*  Change Photo On History App [Style 03]
    /* ========================================================================= */
    
    $(".callimg").on("click", function() {
            
        var callme = $(this).attr('call-img');
        
        $(".img-icon").fadeOut("fast", function() {
            $(".img-icon").attr('src', callme);
            $(".img-iconA").attr('href', callme);
            $(".magnifier img").attr('src', callme);
        });

        $(".img-icon").fadeIn("slow", function() {});
        
    });

    if ($(".closer-content").length) {
        var closeCon = $(".closer-content");
        var iconsPlace = closeCon.children();
        iconsPlace.each(function() {
            var iconOne = $(this);
            var iconSize = iconOne.attr("iconSize");
            iconOne.css({
                'width': 10 * iconSize + "px",
                'height': 10 * iconSize + "px",
                'line-height': 10 * iconSize + 'px',
                'font-size': 5 * iconSize + 'px'
            });
        });
    }

    // End

});

/* ========================================================================= */
/*  Preloader
/* ========================================================================= */

$(window).on("load", function() {
    $(".loader").fadeOut(function() {
        $("#loading-mask").fadeOut("slow");
    });
});

/* ========================================================================= */
/*  Back To Top
/* ========================================================================= */

$(window).on('scroll', function() {
    if ($(this).scrollTop() >= 800) {
        $("#scroll-top").addClass("show");
    } else {
        $("#scroll-top").removeClass("show");
    }
});
$("#scroll-top").on('click', function() {
    $("html, body").animate({
        scrollTop: 0
    }, 1500);
});

/* ========================================================================= */
/*  Fall Rain
/* ========================================================================= */

var nbDrop = 858;
function randRange(minNum, maxNum) {
    return (Math.floor(Math.random() * (maxNum - minNum + 1)) + minNum);
}
function creatRain() {
    for (i = 1; i < nbDrop; i++) {
        var dropLeft = randRange(0, 1600);
        var dropTop = randRange(-1000, 1400);
        $('.rain').append('<div class="drop" id="drop' + i + '"></div>');
        $('#drop' + i).css('left', dropLeft);
        $('#drop' + i).css('top', dropTop);
    }
}

/* ========================================================================= */
/*  Header Parallax
/* ========================================================================= */

var $layerParallax = $('.layer-parallax');
if ( ! Modernizr.touch ) {
    if ( $layerParallax.length > 0 ) {
    $layerParallax.parallax();
    }
}