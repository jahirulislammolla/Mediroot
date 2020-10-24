(function ($) {
	"use strict";

    jQuery(document).ready(function($){


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        
        $('[data-toggle="tooltip"]').tooltip();

		jQuery('.main_menu').slicknav();

		
		jQuery("#owl_demo").owlCarousel({
			navigation : true,
			singleItem : true,
			paginationSpeed : 600,
			slideSpeed : 600,
			autoPlay : 4500,
			transitionStyle : "fadeUp",
			pagination:false,
			navigationText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
		});
        
		
		
		jQuery(".Testimonial_slider").owlCarousel({
			navigation : true,
			singleItem : true,
			paginationSpeed : 800,
			slideSpeed : 800,
			//autoPlay : 3500,
			pagination:false,
			navigationText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
		});
		
		
		jQuery(".blog_post_slider").owlCarousel({
			navigation : true,
			singleItem : true,
			paginationSpeed : 800,
			slideSpeed : 800,
			autoPlay : 3500,
			transitionStyle : "fadeUp",
			pagination:false,
			navigationText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
		});
		
		

    });


    jQuery(window).load(function(){

        
    });


}(jQuery));	