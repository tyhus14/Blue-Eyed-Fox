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

    $('.menu-toggle').click(function(){
        $('.menu-nav').addClass('active');
        $('body').addClass('active');
        $('.logo').addClass('nav-active');
        $(this).addClass('active');
        $('.bubble').addClass('nav-up');
    });

    $('.menu-toggle-nav').click(function(){
        $('.menu-nav').removeClass('active');
        $('body').removeClass('active');
        $('.logo').removeClass('nav-active');
        $('.menu-toggle').removeClass('active');
        $('.bubble').removeClass('nav-up');
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




});
