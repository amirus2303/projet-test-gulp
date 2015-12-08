$(document).ready(function(){
	
	$('.js-box-img').mouseenter(function(){
		$(this).find('h3').addClass('animated slideInDown');
		$(this).find('p').addClass('animated slideInUp');
	})

	$('.js-box-img').mouseleave(function(){
		$(this).find('h3').removeClass('animated slideInDown');
		$(this).find('p').removeClass('animated slideInUp');
	})

	

})
