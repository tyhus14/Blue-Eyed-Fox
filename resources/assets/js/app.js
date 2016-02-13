$(".nav-item").on("click", function(){
	$(".nav-item").removeClass("is-active");
	$(this).addClass("is-active");
});