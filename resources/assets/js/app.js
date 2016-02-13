$(".nav-item").on("click", function(){
	$(".nav-item").removeClass("is-active");
	$(this).addClass("is-active");
});

$('.carousel').slick({
	// autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
    arrows: false
});
