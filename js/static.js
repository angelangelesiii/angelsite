// Angel.js
// By Angel Angeles III

//Jquery Dollar Sign for WP
(function($) {})( jQuery );

// Document Ready
jQuery(document).ready(function($){

	var static = new ScrollMagic.Controller();

	// ICON STAGGER
	var iconTL = new TimelineMax();

	iconTL
		// .staggerFrom('#introduction .intro-icon', 0.5, {y: 50, autoAlpha: 0, ease: Power2.easeOut}, 0.2, 'x')
		.staggerFrom('#introduction .intro-icon i', 1, {y: '-250%', ease: Power3.easeOut}, 0.2);

	var iconStagger = new ScrollMagic.Scene({
		triggerElement: '#introduction .icons',
		triggerHook: 1,
		offset: 150,
		reverse: false
	})
	.setTween(iconTL)
	.addIndicators()
	.addTo(static);

});