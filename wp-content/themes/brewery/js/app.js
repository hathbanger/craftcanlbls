/* ----------------- Start Document ----------------- */
(function($){
	$(document).ready(function(){
		'use strict';

/*----------------------------------------------------*/
/*	 Foundation - http://foundation.zurb.com/docs
/*----------------------------------------------------*/
	$(document).foundation();

/*----------------------------------------------------*/
/*  Flexslider Reference: http://goo.gl/ul0ijo & http://goo.gl/sSF90P
/*----------------------------------------------------*/

   $(".flexslider").flexslider({
     slideshow: false,
     controlNav: false,
   });


/*----------------------------------------------------*/
/*  Blog Page Masonry
/*----------------------------------------------------*/

	var $container = $('#masonry-container'); 

	$container.imagesLoaded( function() { 
		$container.masonry({ 
			columnWidth: 590, 
			itemSelector: '.brick', 
			isAnimated: true 
		}); 
	});

/*----------------------------------------------------*/
/*  Accessibility: Skip Link Focus Fix
/*  Reference: http://goo.gl/q8qJWs
/*----------------------------------------------------*/
	( function() {
		var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
		    is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
		    is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

		if ( ( is_webkit || is_opera || is_ie ) && document.getElementById && window.addEventListener ) {
			window.addEventListener( 'hashchange', function() {
				var element = document.getElementById( location.hash.substring( 1 ) );

				if ( element ) {
					if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
						element.tabIndex = -1;

					element.focus();
				}
			}, false );
		}
	})();

/* ------------------ End Document ------------------ */
});
	
})(this.jQuery);
