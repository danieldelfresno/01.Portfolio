function sticky_relocate() {
	var window_top = $(window).scrollTop();
	var div_top = 0;
// 	var div_top = $('#segundbloco').offset().top;
	if (window_top > div_top) {
		$('#moldurpeq').css('visibility', 'visible');
		$('#moldur').css('visibility', 'hidden');
	} else {
		$('#moldurpeq').css('visibility', 'hidden');
		$('#moldur').css('visibility', 'visible');
	}
}

$(function() {
	$(window).scroll(sticky_relocate);
	sticky_relocate();
});

