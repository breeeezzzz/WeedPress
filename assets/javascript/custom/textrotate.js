(function(jQuery){
    jQuery.fn.extend({ 
        rotaterator: function(options) {
 
            var defaults = {
                fadeSpeed: 500,
                pauseSpeed: 100,
				child:null
            };
             
            var options = jQuery.extend(defaults, options);
         
            return this.each(function() {
                  var o =options;
                  var obj = jQuery(this);                
                  var items = jQuery(obj.children(), obj);
				  items.each(function() {jQuery(this).hide();})
				  if(!o.child){var next = jQuery(obj).children(':first');
				  }else{var next = o.child;
				  }
				  jQuery(next).fadeIn(o.fadeSpeed, function() {
						jQuery(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function() {
							var next = jQuery(this).next();
							if (next.length == 0){
									next = jQuery(obj).children(':first');
							}
							jQuery(obj).rotaterator({child : next, fadeSpeed : o.fadeSpeed, pauseSpeed : o.pauseSpeed});
						})
					});
            });
        }
    });
})(jQuery);

 jQuery(document).ready(function() {
        jQuery('#rotate').rotaterator({fadeSpeed:700, pauseSpeed:3000});
 });