$(document).ready(function() {

	$('#header-menu-layer').hover(function() {
	
		$(this).stop().animate({height: '180px'}, 'fast');
	
	}, function() {
	
		$(this).stop().animate({height: '40px'}, 'fast');
	
	});

});