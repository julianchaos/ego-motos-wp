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
	
	//Animação de cores de modelos
	jQuery('.animacao-container .animacao-cores a').on('click', function(){
		jQuery('.animacao-container .animacao-cores a').removeClass('active');
		jQuery(this).addClass('active');
		
		var modeloIndex = jQuery(this).attr('id').replace("cor", "imagem");
		jQuery('.animacao-container .animacao-imagens img').removeClass('active');
		jQuery('#'+modeloIndex).addClass('active');
	});
	
	//Carrossel de imagens na página single de modelos
	jQuery('#modelo-fotos-carousel').owlCarousel({
		navigation: true,
		navigationText: false,
		pagination: false,
		itemsMobile: [768,3]
	});
	jQuery('#modelo-fotos-carousel').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: true,
		closeOnBgClick: true
	});
});