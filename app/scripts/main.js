$(function() {
    


    var target = $("#scrolled-to").offset().top,
        timeout = null;

    $(window).scroll(function () {
        if (!timeout) {
            timeout = setTimeout(function () {
                console.log('scroll');            
                clearTimeout(timeout);
                timeout = null;
                if ($(window).scrollTop() >= target) {
                    $(".header-home").addClass('appear');
                }
                if ($(window).scrollTop() + 400 <= target) {
                    $(".header-home").removeClass('appear');
                }
            }, 250);
        }
    });


    $('.featured-one').hover(function(){
        $('.featured-hover-one').toggleClass('active');
        $('.featured-text-one').toggleClass('active');
    });

    $('.featured-two').hover(function(){
        $('.featured-hover-two').toggleClass('active');
        $('.featured-text-two').toggleClass('active');
        $('.macbook-blur').toggleClass('opacity');
    });

    $('.featured-three').hover(function(){
        $('.featured-hover-three').toggleClass('active');
        $('.featured-text-three').toggleClass('active');
    });

    $('.featured-four').hover(function(){
        $('.featured-hover-four').toggleClass('active');
        $('.featured-text-four').toggleClass('active');
    });

    $('.featured-five').hover(function(){
        $('.featured-hover-five').toggleClass('active');
        $('.featured-text-five').toggleClass('active');
    });

    $('.featured-six').hover(function(){
        $('.featured-hover-six').toggleClass('active');
        $('.featured-text-six').toggleClass('active');
    });

    $('.logo').hover(function(){
        $('.bubble').toggleClass('active');
    });

    if ($(window).width() < 768) {
        $('.menu-toggle').click(function(){
            $('.footer').addClass('display');
            $('.header').addClass('display');
            $('.main-section').addClass('display');
            $('.featured-left').addClass('display');
            $('.featured-right').addClass('display');
            $('.section-one').addClass('display');
            $('.section-four').addClass('display');
        });

        $('.menu-toggle-nav').click(function(){
            $('.footer').removeClass('display');
            $('.header').removeClass('display');
            $('.main-section').removeClass('display');
            $('.featured-left').removeClass('display');
            $('.featured-right').removeClass('display');
            $('.section-one').removeClass('display');
            $('.section-four').removeClass('display');
        });

        $('.nav-item').click(function(){
            $('.footer').removeClass('display');
            $('.header').removeClass('display');
            $('.main-section').removeClass('display');
            $('.featured-left').removeClass('display');
            $('.featured-right').removeClass('display');
            $('.section-one').removeClass('display');
            $('.section-four').removeClass('display');
            $('.menu-nav').removeClass('active');
            $('body').removeClass('active');
            $('.logo').removeClass('nav-active');
            $('.menu-toggle').removeClass('active');
            $('.bubble').removeClass('nav-up');
            $('.icons').removeClass('active');
        });


    }
        else {
          
        }

    $('.menu-toggle').click(function(){
        $('.menu-nav').addClass('active');
        $('body').addClass('active');
        $('.logo').addClass('nav-active');
        $(this).addClass('active');
        $('.bubble').addClass('nav-up');
        $('.icons').addClass('active');
    });

    $('.menu-toggle-nav').click(function(){
        $('.menu-nav').removeClass('active');
        $('body').removeClass('active');
        $('.logo').removeClass('nav-active');
        $('.menu-toggle').removeClass('active');
        $('.bubble').removeClass('nav-up');
        $('.icons').removeClass('active');
    });



    $(".nav-item-home").bind("click", function(e) {

        e.preventDefault();
        var location = $(this).attr("href")

        $('html, body').animate({
            scrollTop: $(location).offset().top - 60
        }, 1500);

    });



    $(window).bind("load resize scroll",function(e) {
        var y = $(window).scrollTop();
     
        $(".main-section").filter(function() {
            return $(this).offset().top < (y + $(window).height()) &&
                   $(this).offset().top + $(this).height() > y;
        }).css('background-position', '0px ' + parseInt(-y / 6) + 'px');
    });

    $('.go-to-demo').hover(function(){
        $('.arrow').toggleClass('active');
    })

});
