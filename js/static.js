// Angel.js
// By Angel Angeles III

//Jquery Dollar Sign for WP
(function($) {})( jQuery );

// Document Ready
jQuery(document).ready(function($){

	var static = new ScrollMagic.Controller();

	// front-page animation
	var frontpageScene = new ScrollMagic.Scene({
		triggerElement: '#front-page-section',
		triggerHook: 0,
		duration: '100%'
	})
	.setTween(TweenMax.to('#front-page-section .container',1,{
		y: '100%',
		opacity: 0,
		scale: 0.9,
		ease: Power0.easeNone
	}))
	// .addIndicators()
	.addTo(static);

	// intro button click smooth scroll to introduction
	var introPos = $('#introduction').offset().top;
	// console.log('offset: '+introPos);
	$('#intro-btn').click(function(e){
		TweenMax.to(window, 2.5, {scrollTo: introPos, ease: Power3.easeInOut})
	})

	// ICON STAGGER
	var iconTL = new TimelineMax();

	iconTL
		.staggerFrom('#introduction .intro-icon', 0.5, {y: 50, autoAlpha: 0, ease: Power2.easeOut}, 0.3, 'x')
		.staggerFrom('#introduction .intro-icon i', 1, {y: '-250%', ease: Power3.easeOut}, 0.3, '-=1');
		// .staggerFrom('#introduction .icons h2', 1, {autoAlpha: 0, ease: Power2.easeOut}, 0.2, 'y')
		// .from('#introduction .icons p', 1.5, {autoAlpha: 0, ease: Power2.easeOut});

	var iconStagger = new ScrollMagic.Scene({
		triggerElement: '#introduction .icons',
		triggerHook: 1,
		offset: 150
	})
	.setTween(iconTL)
	// .addIndicators()
	.addTo(static);

	// WORKS INTO SCENE
	var worksTL = new TimelineMax();
	worksTL 
		.staggerFrom('#works .posts .thumbnail', 1.25, {autoAlpha: 0, y: 200, ease: Power3.easeOut}, 0.25)
		.from('#works a.btn', 1, {autoAlpha: 0, ease: Power2.easeOut}, '-=0.5');

	var worksTransition = new ScrollMagic.Scene({
		triggerElement: '#workshook',
		triggerHook: 1,
		offset: 300
	})
	.setTween(worksTL)
	// .addIndicators()
	.addTo(static);
});