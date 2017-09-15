jQuery(document).ready(function($) {

    'use strict';

    /* ======= Preloader ======= */

    $("#preloader").delay(100).fadeOut(500);

    /* ======= Trend News Slider ======= */

    $('.trend-news').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        vertical : true,
        verticalSwiping : true,
        autoplay : true
    });

    /* ======= Navbar Dropdown ======= */

    $('header .nav-item,header .nav-submenu-item').hover(function() {
        $(this).addClass('didropdown').find('.dropdown-menu,.nav-submenu').first().stop(true, true).delay(100).slideDown();
    }, function() {
        var na = $(this)
        na.find('.dropdown-menu,.nav-submenu').first().stop(true, true).delay(100).slideUp('fast', function() { na.removeClass('extra-nav-class') })
    });


    /* ======= Header Search ======= */

    $('.open-search-form').on('click', function(event) {
        event.preventDefault();
        $('body').addClass('no-scroll');
        $('.header-search').addClass('open');
    });
    $('.close-search').on('click', function(event) {
        event.preventDefault();
        $('body').removeClass('no-scroll');
        $('.header-search').removeClass('open');
    });

    /* ======= Mobile Side menu ======= */

    $('.open-side-menu').on('click', function() {
        $('body').addClass('no-scroll');
        $('.main').addClass('main-open-side-menu');
    });

    $('.closebtn-sidenav').on('click', function() {
        $('body').removeClass('no-scroll');
        $('.main').removeClass('main-open-side-menu');
    });

    $('a.dropmenu-link').on('click', function() {
        var el = $(this);
        var submenu = $(el.data('target'));
        $('.sidenav-menu').removeClass('menu-opened').addClass('menu-closed');
        submenu.addClass('menu-opened');
    });

    $('a.backbtn').on('click', function() {
        $('.sidenav-menu').removeClass('menu-opened').addClass('menu-closed');
        $('#main-menu').addClass('menu-opened');
    });

    /* ======= Banner Slider ======= */

    $('.banner').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            }
        ]
    });

    /* ======= Post Gallary ======= */

    $('.post-gallary').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        fade: true,
        cssEase: 'linear',
        adaptiveHeight: true
    });

    /* ======= Counter in about page ======= */
    
    $('.timer').countTo({
        speed: 5000
    });
});