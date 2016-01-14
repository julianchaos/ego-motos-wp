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
		items: 5,
		margin: 5,
		loop: true,
		autoWidth: true,
		nav: true,
		navText: false,
		dots: false
	});
	jQuery('#modelo-fotos-carousel').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: true,
		closeOnBgClick: true
	});
	
	//Formulário para cotação em lightbox
	jQuery('.open-popup-link').magnificPopup({
		type:'inline',
		midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});

	// Máscaras no formulário de cotação
	jQuery('input[name=pessoal-tel]').mask('(00) 0000-00000');
	jQuery('input[name=financiamento-entrada]').mask('000.000.000,00', {reverse: true});
	
	// Masonry na lista de novidades
	var $grid = jQuery('.masonry-grid').masonry({
		itemSelector: '.item-container',
		
		percentPosition: true
	});
	$grid.imagesLoaded().progress( function() {
		$grid.masonry('layout');
	});
});