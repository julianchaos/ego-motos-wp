jQuery(function(){
	
	var homeSliderResize = function(){
		if(jQuery('#carousel-main').length > 0) {
			var width = jQuery(window).width();
			var height = jQuery(window).height();
			
			if(width > height) {
				jQuery('.img-mobile').hide();
				jQuery('.img-desktop').show();
			} else {
				jQuery('.img-desktop').hide();
				jQuery('.img-mobile').show();
			}
		}
	};
	
	//Control window resizes
	var onWindowResize = function(){
		homeSliderResize();
	};
	onWindowResize();
	jQuery(window).resize(onWindowResize);
});