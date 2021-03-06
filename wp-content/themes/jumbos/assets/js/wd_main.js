//****************************************************************//
/*							Main JS								  */
//****************************************************************//

jQuery(document).ready(function($) {
	"use strict";
	
	
	//Form login and cart
	jQuery('.cart_dropdown,.form_drop_down').hide();
	jQuery('.wd_tini_cart_wrapper,.wd_tini_account_wrapper').hoverIntent(
		function(){
			jQuery(this).children('.drop_down_container').slideDown(300);
		}
		,function(){
			jQuery(this).children('.drop_down_container').slideUp(300);
		}
	
	);
	jQuery('body').live('mini_cart_change',function(){
		jQuery('.wd_tini_cart_wrapper,.wd_tini_account_wrapper').hoverIntent(
			function(){
				jQuery(this).children('.drop_down_container').slideDown(300);
			}
			,function(){
				jQuery(this).children('.drop_down_container').slideUp(300);
			}
		
		);
	});
	
	//Hide Popup
	jQuery(".popup").hide();

	jQuery(".wd-click-popup-search").click(function () {
		if(jQuery(".wd-popup-search" ).hasClass( "hidden" )){
			jQuery(".wd-popup-search").removeClass('hidden').addClass('show')	
		}else{
			jQuery(".wd-popup-search").removeClass('show').addClass('hidden')
		}
	});
	jQuery(".wd-search-close").click(function () {
		jQuery(".wd-popup-search").removeClass('show').addClass('hidden')
	});

	//Scroll Button
	if( jQuery('html').offset().top < 100 ){
		jQuery("#to-top").hide();
	}
	jQuery(window).scroll(function () {
		
		if (jQuery(this).scrollTop() > 100) {
			jQuery("#to-top").fadeIn();
		} else {
			jQuery("#to-top").fadeOut();
		}
	});
	jQuery('.scroll-button').click(function(){
		jQuery('body,html').animate({
		scrollTop: '0px'
		}, 1000);
		return false;
	});

	jQuery('body').addClass('loaded');
});

// Wishlist
jQuery(document).ready(function($) {
	jQuery( "html .woocommerce table.wishlist_table tbody tr td.product-name" ).attr({
	  "data-title": "Product"
	});
	jQuery( "html .woocommerce table.wishlist_table tbody tr td.product-price" ).attr({
	  "data-title": "Price"
	});
	jQuery( "html .woocommerce table.wishlist_table tbody tr td.product-stock-status" ).attr({
	  "data-title": "Stock"
	});
});

jQuery( document ).ready( function($) {
	$(document).on ( 'click', '.tvlgiao_playvideo', function( event ) {
		var _this 	  = $(this);
		var video_url = _this.parent().find('#tvlgiao_urlvideo').val();
		jQuery(".popup iframe").attr("src",video_url);
	    jQuery(".openpop").fadeOut('slow');
	    jQuery(".popup").fadeIn('slow');
	    jQuery(".tvlgiao_playvideo").hide();
	});
	//Close Popup
	jQuery(".close").click(function () {
	    jQuery(".popup").hide();
	    jQuery(".tvlgiao_playvideo").show();
	   	jQuery(".popup iframe").attr("src",'');
	    jQuery(".openpop").show();
	});
});