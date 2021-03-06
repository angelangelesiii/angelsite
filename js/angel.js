// Angel.js
// By Angel Angeles III

hljs.initHighlightingOnLoad();

//Jquery Dollar Sign for WP


(function($) {})( jQuery );

// Document Ready
jQuery(document).ready(function($){
	// -----> STICKY FOOTER
	var contentHeight = $(window).height() - ($('#site-nav').outerHeight() + $('footer.site-footer').outerHeight());
	console.log(contentHeight);
	$('.site-content').css('min-height', contentHeight+'px');
	$('.nav-spacer').css('min-height', $('#site-nav').outerHeight()+'px');

	// -----> MENU TOGGLE
	function menuToggle() {
		if($('.menu-overlay').hasClass('menu-closed')) {
			$('.menu-overlay').removeClass('menu-closed').addClass('menu-opened');
			$('.menu-pane-container').removeClass('closed').addClass('opened');
			// $('html').css('overflow','hidden');
		} else {
			$('.menu-overlay').removeClass('menu-opened').addClass('menu-closed');
			$('.menu-pane-container').removeClass('open').addClass('closed');
			// $('html').css('overflow','visible');
		}
		
	}

	$('#menu-toggle-button').click(function(){
		menuToggle();
	});
	$('.menu-overlay').click(function(){
		menuToggle();
	});
	$('#menu-pane .top-bar i').click(function(){
		menuToggle();
	});

	// -----> ANIMATIONS
	// ScrollMagic initialization
	var controller = new ScrollMagic.Controller();

	// parallax background front-page
	var frontPageParallax = new ScrollMagic.Scene({
		triggerElement: '#front-page-section',
		duration: '100%',
		triggerHook: 0
	})
	.setTween(TweenMax.to('#front-page-section .parallax-bg', 1, {
		y: '50%',
		opacity: 0.1,
		ease: Power0.easeNone
	}))
	.addTo(controller);

	// pin navbar after scroll
	var pinNav = new ScrollMagic.Scene({
		triggerElement: '#site-nav',
		triggerHook: 0
	})
	.setPin('#site-nav')
	.setClassToggle('#site-nav', 'scrolled')
	.addTo(controller);
	
});