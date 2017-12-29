(function($) {

	$('#menu-main-menu').hover(
		function(){$('.project-info').css('opacity', '.1')},
		function(){$('.project-info').css('opacity', '')}
	);
	
	$('#menu-main-menu > li > a').mouseenter(
		function(){$('.overlay').css('opacity', '.9')}
	);
	
	$('#menu-main-menu').mouseleave(
		function(){$('.overlay').css('opacity', '')}
	);
	
	$("#menu-icon").click(function(e) {
		e.preventDefault();
		$(".sub-menu").toggle();
	});
		
	$(function() {
	});	

	$(window).load(function() {
		if ($('.artwork-container')) {
			$('.artwork').each(function() {
				width = $(this).width();
				$(this).parent().parent().find('span').width(width);
			});
			equalheight('.artwork-wrap > div > a');
			var count = document.images.length;
			var counter = 0;
			if (count > 0) {
				var imagesLoaded = setInterval(function(){
					$('img').each(function() {
						if( this.complete ) {
							counter = counter+1;
							if (counter == count) {
								console.log('all images loaded');
								$('body').delay(500).css('opacity', '1');
								clearInterval(imagesLoaded);
							} else {
								console.log('images still loading');
							}	
						}
					});
				}, 200);
			} else {
				$('body').css('opacity', '1');
			}
		}
	});
	
	$(window).resize(function(){
		if ($('.artwork-container')) {
			$('.artwork').each(function() {
				width = $(this).width();
				$(this).parent().parent().find('span').width(width);
			});
			equalheight('.artwork-wrap > div > a');
		}
	});

	equalheight = function(container){

		var currentTallest = 0;
		var currentRowStart = 0;
		var rowDivs = new Array();
		var $el;
		var topPosition = 0;
		var currentDiv;

		$(container).each(function() {
			$el = $(this);
			$($el).height('auto')
			topPosition = $el.position().top;

			if (currentRowStart != topPosition) {
				for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
					rowDivs[currentDiv].height(currentTallest);
				}
				rowDivs.length = 0; // empty the array
				currentRowStart = topPosition;
				currentTallest = $el.height();
				rowDivs.push($el);

			} else {
				rowDivs.push($el);
				currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
			}

			for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
				rowDivs[currentDiv].height(currentTallest);
			}
		});
	}

})(jQuery);