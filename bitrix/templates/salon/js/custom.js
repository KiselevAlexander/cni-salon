$(window).ready(function() {
	
	"use strict";
	$('.item-body').on('click' , '.service-image , .service-name' ,function(){
		if (window.screen.availWidth <= 768 ) {
			if (!$(this).parent('.item-body').hasClass('visCont')){
				$('.s-list').fadeOut(300);
				$('.item-body').removeClass('visCont')
				$('.s-list close').remove();
				$(this).parent('.item-body').addClass('visCont').find('.s-list').fadeIn(300).height($(this).parent('.item-body').find('.s-list li').length * 47);
				$('.s-list').append('<div class="close">+</div>');
				return false;
			}else if ($(this).parent('.item-body').hasClass('visCont')){
				$('.item-body').removeClass('visCont')
				$('.s-list .close').remove();
				$('.s-list').fadeOut(300);
				return false;
			}else{
				$('.s-list').fadeOut(300);
				$('.item-body').removeClass('visCont')
				$('.s-list .close').remove();
				return false;
			}
		}
	});
	$('body').on('click' , '.s-list .close' , function(){
		$(this).parent().fadeOut(300);
		$('.s-list .close').remove();
		$('.item-body').removeClass('visCont')
	});
	if (window.screen.availWidth >= 768 ) {
		$('.s-list').each(function( u ) {
	    	if( $(this).children('li').length < 2 ) {
	    		$(this).parent().addClass('hidden-children')
	    	}
	    	if ($(this).children('li').length > 5){
	    		$(this).append('<div class="see-all"><span>Все услуги</span></div>')
	    	}
	    });
	    $('.item-body').on('click' , '.see-all' , function(){
	    	var modalContent = $(this).parent().html();
	    	if (!$('.service-modal').length){
	    		$('body').append('<div class="service-modal"><ul>' + modalContent + '</ul><div class="service-close"></div></div>')
	    		$('.service-modal').fadeIn(300).css({'height':$('.service-modal ul').height() })
	    	}else{
	    		$('.service-modal').html('<ul>' + modalContent + '</ul><div class="service-close"></div></div>');
	    		$('.service-modal').fadeIn(300).css({'height':$('.service-modal ul').height() })
	    	}
	    });
	}
	$('body').on('click' , '.hidden-children' , function(){
		window.location = $(this).find('a').attr('href');
	});
	$('body').on('click' , '.service-close' , function(){
		$('.service-modal').fadeOut(300);
	});
});