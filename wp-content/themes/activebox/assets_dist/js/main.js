
$( document ).ready(function() {
    new WOW().init();
});

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


$(window).scroll(function(){
	if ($(this).scrollTop() >0){
		$('.js-menu').addClass('menu-scroll');
	}
	else{
		$('.js-menu').removeClass('menu-scroll');
	}
});
