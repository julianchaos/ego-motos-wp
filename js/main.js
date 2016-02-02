jQuery(function(){
	//Control window resizes
	var carouselResize = function()
	{
		if(jQuery(window).width() < jQuery(window).height()) {
			jQuery('.img-desktop').hide();
			jQuery('.img-mobile').show();
		} else {
			jQuery('.img-mobile').hide();
			jQuery('.img-desktop').show();
		}
	}
	var pageFeaturedImageResize = function(){
		if(jQuery('.home-carousel').length > 0)
		{
			carouselResize();
		}
		if(jQuery('.page-featured-image').length > 0)
		{
			jQuery('.page-featured-image + section').css('margin-top', '');
			var elementDefaultTopMargin = jQuery('.page-featured-image + section').css('margin-top').replace('px', '');
			var elementNewTopMargin = Number(jQuery('.page-featured-image').height())+Number(elementDefaultTopMargin);
			jQuery('.page-featured-image + section').css('margin-top', elementNewTopMargin);
		}
	};
	pageFeaturedImageResize();
	jQuery(window).resize(pageFeaturedImageResize);
	
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
		items: 2,
		margin: 5,
		loop: true,
		autoWidth: true,
		nav: true,
		navText: false,
		dots: false
	});
	jQuery('#modelo-fotos-container').hide();
	jQuery('#modelo-fotos-carousel img.item').on('click', function(e){
		console.log('item');
		jQuery('#modelo-fotos-container').height(calculaModeloFotoContainerAltura());
		console.log(jQuery(this).attr('data-url'));
		jQuery('#modelo-fotos-container').css('background-image', "url(" + jQuery(this).attr('data-url') +")");
		jQuery('#modelo-fotos-container').show();
		
		e.stopPropagation();
		return false;
	});
	var calculaModeloFotoContainerAltura = function(){
		var modeloHeaderPaddingTop = Number(jQuery('#modelo-header').css('padding-top').replace("px", ''));
		var modeloHeaderHeight = Number(jQuery('#modelo-header').height());
		var modeloAnimacaoHeight = Number(jQuery('#modelo-animacao').height());
		
		return modeloHeaderHeight+modeloHeaderPaddingTop+modeloAnimacaoHeight;
	};
	
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
//	$grid.imagesLoaded().progress( function() {
//		$grid.masonry('layout');
//	});
	
	// Fade in de todos os elementos inicialmente invisíveis
	jQuery('.init-hide').fadeIn();
});