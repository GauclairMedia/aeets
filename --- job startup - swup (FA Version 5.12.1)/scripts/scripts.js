// FONTS
WebFont.load({
	google: {
		families: ['Heebo:300,500,700','Lato:900']
	}
});

var $body = $('body');
var $content = $('#content');
var $nav = $('#nav');
var $menu = $('#menu');

if (!isIE()) {
    // PAGE TRANSITION
    var swup = new Swup({
        containers: ['#swup'],
        linkSelector: 'a:not(.noSwup), a:not([target="_blank"])',
        animateHistoryBrowsing: true,
        cache: false
    });

    swup.on('contentReplaced', onLoad);
    swup.on('transitionStart, animationStart', reset);
    swup.on('willReplaceContent', destroy);
}

function onLoad(){
    $content = $('#content');
    $nav = $('#nav');
    $menu = $('#menu');
    randomPH(16);
	recursivePH(16, recursivePH);

    // OPEN MENU
    $body.on('click', '.hamburger', function(){
        $('.hamburger').toggleClass('is-active');
        // $('#menu').clearQueue().stop().slideToggle();
    });

    $('select.selectric').selectric({
        disableOnMobile: false,
        nativeOnMobile: false,
        arrowButtonMarkup: '<span class="selectric-icon far fa-angle-down"></span>'
    });

	// ACCUEIL
	// if($('#content.home').length > 0){
    //
    //     $('.slick_hdr').slick({
    //         dots: false,
    //         arrows: true,
    //         infinite: true,
    //         speed: 1200,
    //         fade: true,
    //         autoplay: true,
    //         autoplaySpeed: 5000,
    //         slidesToShow: 1,
    //         slidesToScroll: 1,
    //         pauseOnFocus: false,
    //         pauseOnHover: false,
    //         draggable: false,
    //         swipe: false,
    //         //prevArrow: $('#header .slickPrev'),
    //         //nextArrow: $('#header .slickNext'),
    //         responsive: [
    //             {
    //                 breakpoint: 1024,
    //                 settings: {
    //                     arrows: false,
    //                     autoplaySpeed: 3000,
    //                 }
    //             }
    //         ]
    //     });
	// }

    // LINK SCROLL
	$("a.pageScroll").on('click', function(e){
		e.preventDefault();
		//					href		/		offset
        scrollPage( $(this).attr("href"), $('#nav').outerHeight() );
	});

	// PLACEHOLDER //
	$('form input[type="text"], form textarea').each(function(){
		colorInputForm($(this));
	});
	$('form input[type="text"], form textarea').focus(function(){
		clickclear($(this), $(this).attr('placeholder'));
	});
	$('form input[type="text"], form textarea').blur(function(){
		clickrecall($(this), $(this).attr('placeholder'));
	});

	$(window).trigger('resize');
	$(window).trigger('scroll');
} // onLoad()
function reset(){
    // Remove event listeners
    $content.off();
    $body.off().removeClass();
    $('.hamburger').removeClass('is-active');
    $('html, body').animate({
        scrollTop: 0
    }, 250);
} // reset()
function destroy(e){
    if(!e){
        window.scrollTo(0, 0);
    }
    $('select.selectric').selectric('destroy');
    $('.slick-initialized').slick('unslick');
} // destroy()

function viewport(){
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}

function clickclear($thisfield, defaulttext){
	if ($thisfield.val() == defaulttext) {
		$thisfield.val("");
	}
}
function clickrecall($thisfield, defaulttext){
	if ($thisfield.val() == "") {
		$thisfield.val(defaulttext);
	}
}
function colorInputForm($input){
	if ($input.val() != $input.attr('placeholder') && $input.val() != '') {
	}else{
		$input.val($input.attr('placeholder'));
	}
}

function giveSizeToOthers($context, $toResize, minWidth, maxWidth){
	 if($context.length > 0){
		 if ($toResize.length > 0) {
			 if(!minWidth) var minWidth = 0;  	// compatibilité IE
			 if(!maxWidth) var maxWidth = 9999;  	// compatibilité IE
			 if(viewport().width > minWidth && viewport().width < maxWidth){
				 $context.each(function(){
					 var height = 0;
					 var $objects = $(this).find('.'+$toResize.attr("class").split(' ')[0]);

					 $objects.each(function(){
						 $objects.height('');
						 var currentHeight = $(this).children('.resize').outerHeight();

						 if(currentHeight > height) height = currentHeight;
					 });
					 $objects.children('.resize').parent().height(height);
				 });
			 }
			 else{
				 $toResize.height('');
			 }
		 } else if($context.length > 0 ) {
			 // console.log('"$toResize == undefined" dans giveSizeToOthers : '+$toResize.selector);
		 }
	 }
 }

// function scrollEvent(){
// 	var positionWindow = $(window).scrollTop();
// 	if(positionWindow >= 15 || viewport().width <= 1024){
// 		$("#nav").addClass('scroll');
//
// 	}else{
// 		$("#nav").removeClass('scroll');
//
// 	}
// }

// $(window).on('resize', function(){
	// scrollEvent();
    // giveSizeToOthers($('#content.home .row'), $('.resized'), 768);
// });

// Detect IE
function isIE() {
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)){    // If Internet Explorer, return version number
        return true;
    }

    return false;
}

// IMAGE RANDOMIZER
var recursivePHCount = 1;
function pad2(number) {
	return (number < 10 ? '0' : '') + number
}
function randomBasic(imgNumber){
	var imgName = 'images/PH/fake';
	var fileExt = '.jpg';
	var image = imgName + pad2(Math.floor(Math.random() * imgNumber) + 1) + fileExt;
	return image;
}
function randomPH(imgNumber){
	$('[data-ph="bg"]').each(function(){
		$(this).css('background-image', 'url('+randomBasic(imgNumber)+')');
	});
	$('[data-ph="img"]').each(function(){
		$(this).attr('src', randomBasic(imgNumber));
	});
}
function recursivePH(imgNumber, callback){
	var target = $('[data-ph="bg'+recursivePHCount+'"]');
	var length = target.length;
	if(length > 0){
		target.css('background-image', 'url('+randomBasic(imgNumber)+')');
		recursivePHCount++;
		length = $('[data-ph="bg'+recursivePHCount+'"]').length;
		if(length > 0){
			callback(imgNumber, callback);
		}
	}
}

$(window).on('scroll', function(){
	// scrollEvent();

	if(viewport().width > 768){
		$('.visible').each(function(){
			var it = $(this);

			if(it.visible(true)){
				setTimeout(function(){
					it.addClass('alive');
				}, 300);
			}
			else if(!it.visible(true)){
				if(!it.hasClass('once')){
					it.removeClass('alive');
				}
			}
		});
	}
});
$(window).on('load', function(){
    onLoad();

	$(window).trigger('resize');
	$(window).trigger('scroll');
});


// Resize Fn
function onResize(){
    // giveSizeToOthers($('#content.news .row'), $('.article'), 768);
}

$(window).on('load', function(){
    $(window).trigger('resize');
});
