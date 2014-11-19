var target = $("#scrolled-to").offset().top,
    timeout = null;

$(window).scroll(function () {
    if (!timeout) {
        timeout = setTimeout(function () {
            console.log('scroll');            
            clearTimeout(timeout);
            timeout = null;
            if ($(window).scrollTop() >= target) {
                $(".header").addClass('appear');
            }
            if ($(window).scrollTop() + 400 <= target) {
                $(".header").removeClass('appear');
            }
        }, 250);
    }
});
