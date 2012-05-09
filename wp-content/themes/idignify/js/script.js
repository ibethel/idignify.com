/* Author: Some by Jesse, most by more better and intelligenter coders
*/

// To add the photo icon over the photos in the gallery
 jQuery(document).ready(function(){
	 jQuery('.gallery-item a img').after('<span class="photo-icon"><img src="http://alpha.revivalcry.com/wp-content/themes/revivalcry/images/photo-icon.png" width="50" height="50" alt="Photo"></span>')
});

/* Tooltipsy - for top menu */
 jQuery('ul#menu-top-nagivation li a, .connect-with-us a').tooltipsy();

 
 /* scrollTo - for newsletter signup */
 jQuery(document).ready(function(){
	 jQuery('ul.nav li a.home').click(function(e){
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
	jQuery('ul.nav li a.involved').click(function(e){
		 jQuery.scrollTo( this.hash || 0, 500);
		e.preventDefault();
		jQuery('#involved').focus();
	});
});

// Options for front page banner
    	jQuery(document).ready(	
			function() {
				jQuery("#banner").wtRotator({
					width:1280,
					height:429,
					thumb_width:24,
            		thumb_height:24,
					button_width:24,
					button_height:24,
					button_margin:5,
					auto_start:true,
					delay:5000,
					play_once:false,
					transition:"fade",
					transition_speed:800,
					auto_center:true,
					easing:"",
					cpanel_position:"inside",
					cpanel_align:"BC",
					timer_align:"top",
					display_thumbs:true,
					display_dbuttons:true,
					display_playbutton:false,
					display_thumbimg:false,
           			display_side_buttons:true,
					display_numbers:true,
					display_timer:false,
					mouseover_pause:true,
					cpanel_mouseover:false,
					text_mouseover:false,
					text_effect:"fade",
					text_sync:true,
					tooltip_type:"none",
					lock_tooltip:true,
					shuffle:false,
					block_size:75,
					vert_size:55,
					horz_size:50,
					block_delay:25,
					vstripe_delay:75,
					hstripe_delay:180			
				});
			}
		);