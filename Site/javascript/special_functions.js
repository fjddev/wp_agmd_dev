/* ===================================================
 * special functions
 * ========================================================== */

/* ===================================================
:: removes the designview class from the web browser view
 * ========================================================== */
	jQuery(document).ready(function() {
		jQuery("body").removeClass("designview");
	});





		
		jQuery(document).on("scroll",function(){
			if(jQuery(document).scrollTop()>100){ 
				jQuery("header").removeClass("large").addClass("small");
				}
			else{
				jQuery("header").removeClass("small").addClass("large");
				}
			});

		jQuery(document).on("scroll",function(){
			if(jQuery(document).scrollTop()>100){ 
				jQuery(".header2").removeClass("large2").addClass("small2");
				}
			else{
				jQuery(".header2").removeClass("small2").addClass("large2");
				}
			});
