// Import styles
import './scss/app.scss';
// Import scripts
import TweenMax from "gsap/TweenMax";
import CSSPlugin from "gsap/CSSPlugin";
import TweenLite from "gsap/TweenLite";
//header
	function scrollAnimated(){
		var lastScrollTop = 0, delta = 20;
		/*$(window).on('scroll',function(){
			var nowScrollTop = $(this).scrollTop();
			if (nowScrollTop > 50){
				$('.bot-nav').addClass('animated');
			} else {
				$('.bot-nav').removeClass('animated');
			}
		});*/
	}
	scrollAnimated();
//another ios
	var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
	if (iOS) {
	 	//
	}
//scroll
	/*$('.anchor a').on('click', function(event){
      	event.preventDefault();
      	let $this = $(this);
      	let href = $this.attr('href');
      	$('html, body').stop().animate({scrollTop: $(href).offset().top - 130}, 800);
 	});*/
	
//header animation
	

//credits
console.log("ღ Blank Theme! ღ \n Dev con Amor por wampy para el mundo");

/* MENU RESPONSIVE */

