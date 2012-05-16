/* Author: Some by Jesse, most by more better and intelligenter coders
*/
 
jQuery(document).ready(function(){
	
	//ScrollTo
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
	// Find all  videos
	var $allVideos = $("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com']"),
	
	    // The element that is fluid width
	    $fluidEl = $(".video-embed");
	
	// Figure out and save aspect ratio for each video
	$allVideos.each(function() {
	
	  $(this)
	    .data('aspectRatio', this.height / this.width)
	
	    // and remove the hard coded width/height
	    .removeAttr('height')
	    .removeAttr('width');
	
	});
	
	// When the window is resized
	$(window).resize(function() {
	
	  var newWidth = $fluidEl.width();
	
	  // Resize all videos according to their own aspect ratio
	  $allVideos.each(function() {
	
	    var $el = $(this);
	    $el
	      .width(newWidth)
	      .height(newWidth * $el.data('aspectRatio'));
	
	  });
	
	// Kick off one resize to fix all videos on page load
	}).resize();
	
});

jQuery(document).ready(function(){
	$(function() {
		var input = document.createElement("input");
	    if(('placeholder' in input)==false) { 
			$('[placeholder]').focus(function() {
				var i = $(this);
				if(i.val() == i.attr('placeholder')) {
					i.val('').removeClass('placeholder');
					if(i.hasClass('password')) {
						i.removeClass('password');
						this.type='password';
					}			
				}
			}).blur(function() {
				var i = $(this);	
				if(i.val() == '' || i.val() == i.attr('placeholder')) {
					if(this.type=='password') {
						i.addClass('password');
						this.type='text';
					}
					i.addClass('placeholder').val(i.attr('placeholder'));
				}
			}).blur().parents('form').submit(function() {
				$(this).find('[placeholder]').each(function() {
					var i = $(this);
					if(i.val() == i.attr('placeholder'))
						i.val('');
				})
			});
		}
	});
});