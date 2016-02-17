// Add highlight to Nav
$(".nav-item").on("click", function(){
	$(".nav-item").removeClass("is-active");
	$(this).addClass("is-active");
});

// Carousel
$('.carousel').slick({
	autoplay: true,
    autoplaySpeed: 7000,
    dots: true,
    arrows: false
});

// Smooth Scroll
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 70
        }, 1000);
        return false;
      }
    }
  });
});

// Form Submit 
$( ".js-contact-form" ).submit(function(e) {
  $(".contact-form").addClass("is-active");
  e.preventDefault();
});
