/* Author: Some by Jesse, most by more better and intelligenter coders
*/
 
 /* scrollTo - for newsletter signup */
 jQuery(document).ready(function(){
	 jQuery('ul.nav li a.home, a.brand').click(function(e){
		 jQuery.scrollTo( this.hash || 0, 500);
		e.preventDefault();
		jQuery('#home').focus();
	});
	jQuery('ul.nav li a.about').click(function(e){
		 jQuery.scrollTo( this.hash || 0, 500);
		e.preventDefault();
		jQuery('#about').focus();
	});
	jQuery('ul.nav li a.issue').click(function(e){
		 jQuery.scrollTo( this.hash || 0, 500);
		e.preventDefault();
		jQuery('#issue').focus();
	});
	jQuery('ul.nav li a.giving').click(function(e){
		 jQuery.scrollTo( this.hash || 0, 500);
		e.preventDefault();
		jQuery('#giving').focus();
	});
	jQuery('ul.nav li a.involved, a.involved-btn').click(function(e){
		 jQuery.scrollTo( this.hash || 0, 500);
		e.preventDefault();
		jQuery('#involved').focus();
	});

	// Fluid Video Width
	// Find all YouTube videos
	var jQueryallVideos = jQuery("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com']"),
	
	    // The element that is fluid width
	    jQueryfluidEl = jQuery(".video-embed");
	
	// Figure out and save aspect ratio for each video
	jQueryallVideos.each(function() {
	
	  jQuery(this)
	    .data('aspectRatio', this.height / this.width)
	
	    // and remove the hard coded width/height
	    .removeAttr('height')
	    .removeAttr('width');
	
	});
	
	// When the window is resized
	jQuery(window).resize(function() {
	
	  var newWidth = jQueryfluidEl.width();
	
	  // Resize all videos according to their own aspect ratio
	  jQueryallVideos.each(function() {
	
	    var jQueryel = jQuery(this);
	    jQueryel
	      .width(newWidth)
	      .height(newWidth * jQueryel.data('aspectRatio'));
	
	  });
	
	// Kick off one resize to fix all videos on page load
	}).resize();
	
	//ScrollSpy
	jQuery('#navbar').scrollspy()
});