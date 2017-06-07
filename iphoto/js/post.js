jQuery(document).ready(function($) {
	var $stick = $('#sidebar-inner'),$images= $('.post-content a:has(img)'),theWindow = $(window),oldTop = $stick.offset().top;
	$images.css({
		display:'block',
		width:$('.post-content').width()
	}).phzoom({});
	theWindow.scroll(function() {
		var top = theWindow.scrollTop();
		if ( top + 20 >= oldTop ) {
			$stick.css({
				position: 'fixed',
				top: 20
			});
		} else if (top +20 < oldTop) {
			$stick.css({
				position: 'static',
				top: ''
			});
		}
	});
});