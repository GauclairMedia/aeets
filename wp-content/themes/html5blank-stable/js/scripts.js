// FONTS
// WebFont.load({
// 	google: {
// 		families: ['Oxanium:300,500,700','Lato:900']
// 	}
// });

// var $body = $('body');


function onLoad(){
	$body.on('click', '.hamburger', function(){
		$('.hamburger').toggleClass('is-active');
		// $('#menu').clearQueue().stop().slideToggle();
	});



};


(function ($, root, undefined) {

	$(function () {

		'use strict';

		$(".hamburger").click(function(){
	  		$('.hamburger').toggleClass('is-active');
	  		$('.mobile').toggleClass('active');
		});

		if($('.section_comite').length > 0){
			$('.bloc_comite').on('click', function(){
				var id = $(this).data('id');

				if(!$(this).hasClass('active')){
					$('.section_comite .bloc_comite').removeClass('active');
					$('.section_info_comite .info_comite').stop().slideUp(600);
					$(this).addClass('active');
					$('.info_comite[data-id="'+ id +'"]').stop().slideDown(600);
				}

				$('html, body').animate({
					scrollTop: $('.info_comite').offset().top - 200
				}, 300);
			});
		}

		function scrollEvent(){
			var positionWindow = $(window).scrollTop();
			if(positionWindow >= 15 || viewport().width <= 1024){
				$(".nav").addClass('scroll');

			}else{
				$(".nav").removeClass('scroll');

			}
		}

		if($('.home').length > 0){
			$(window).scroll(function() {
			    var scroll = $(window).scrollTop();

			    if (scroll >= 700) {
			        $(".header").addClass("scroll");
				} else {
					$(".header").removeClass("scroll");
				}
			}); //missing );
		}else{
			$(window).scroll(function() {
			    var scroll = $(window).scrollTop();

			    if (scroll >= 200) {
			        $(".header").addClass("scroll");
				} else {
					$(".header").removeClass("scroll");
				}
			}); //missing );
		}


		$('.list_scroll .contenu').parents('.zone_cliquable').on('click', function(){
	        if(!$(this).hasClass('contenu_open')){
	            console.log('enseigne');
	            $('.list_scroll .contenu').slideUp();
	            $('.list_scroll .zone_cliquable').removeClass('contenu_open');
	            $(this).addClass('contenu_open');
	            $(this).find('.contenu').slideDown();
	        }else{
	            $('.list_scroll .contenu').slideUp();
	            $('.list_scroll .zone_cliquable').removeClass('sub_menu_open');
	        }
	    });
	});

})(jQuery, this);
