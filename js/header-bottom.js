var startPosBottom = 0,winScrollBottom = 0;
$(window).on('scroll',function(){
	winScrollBottom = $(this).scrollTop();
	if(startPosBottom <= 70){
		$('.j-header-bottom').removeClass('j-bottom-hide');
	}else if (winScrollBottom >= startPosBottom) {
		$('.j-header-bottom').addClass('j-bottom-hide');
	}else {
		$('.j-header-bottom').removeClass('j-bottom-hide');
	}
	startPosBottom = winScrollBottom;
});