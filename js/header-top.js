var startPosTop = 0,winScrollTopTop = 0;
$(window).on('scroll',function(){
	winScrollTopTop = $(this).scrollTop();
	if(startPosTop <= 70){
		$('.j-header-top').removeClass('j-top-hide');
	}else if (winScrollTopTop >= startPosTop) {
		$('.j-header-top').addClass('j-top-hide');
	}else {
		$('.j-header-top').removeClass('j-top-hide');
	}
	startPosTop = winScrollTopTop;
});