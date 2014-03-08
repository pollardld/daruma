// Smooth Scroll
jQuery(function(){
	jQuery('a[href^="#"]').click(function(e){
		e.preventDefault();
		var currentClass = "current",
			$this = jQuery(this),
			hash = $this.attr("href"),
			$hash = jQuery(hash),
			hashTop = $hash.offset().top || 0;
		jQuery('html, body').animate( {"scrollTop": hashTop}, 500 );
	});
});

// NAV TRANSITION
jQuery('.homepg-cta').waypoint( function() {
  jQuery(this).find('.container').toggleClass('cta-animate');
}, { offset: 400 });

// Big Video
jQuery( function() {
	var BV = new jQuery.BigVideo();
	BV.init();
	BV.show( 'http://dev.darumayoga.com/wp-content/themes/daruma/vid/san_francisco,_ca_640x360.mp4' );
	BV.getPlayer().on("ended", function () {
    	jQuery('#scroll-btn').addClass('ended');
	});
});