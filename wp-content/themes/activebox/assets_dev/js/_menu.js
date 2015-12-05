
$(window).scroll(function(){
	if ($(this).scrollTop() >0){
		$('.js-menu').addClass('menu-scroll');
	}
	else{
		$('.js-menu').removeClass('menu-scroll');
	}
});
