$(function() {

	// jQuery Goes here!
	$('.burger').on('click', function(){
		$(".nav").animate({top: '0'}, 250, 'swing');
	});

	$('.close').on('click', function(){
		$(".nav").animate({top: '-100%'}, 250, 'swing');
	});

});


$(function() {
	$('.smoothScroll').smoothScroll({
		speed: 1000
	});
});	


$(function() {
	new WOW().init();
});	


