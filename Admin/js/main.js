$.noConflict();

jQuery(document).ready(function($) {

	"use strict";

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
		new SelectFx(el);
	} );

	jQuery('.selectpicker').selectpicker;


	$('#menuToggle').on('click', function(event) {
		$('body').toggleClass('open');
	});

	$('.search-trigger').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').addClass('open');
	});

	$('.search-close').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').removeClass('open');
	});

	// $('.user-area> a').on('click', function(event) {
	// 	event.preventDefault();
	// 	event.stopPropagation();
	// 	$('.user-menu').parent().removeClass('open');
	// 	$('.user-menu').parent().toggleClass('open');
	// });


		

		// set car start
		$(".content").each(function(){

		$('.removecar').click(function(){
			
            $(".setcarcov").hide();
           
        });
		

        $(".editcar").click(function(){
            $(".carinfocontent").hide();
            $(".editcarinfocontent").show("slow");
        });


        $(".backbut").click(function(){
        	 $(".carinfocontent").show("slow");
            $(".editcarinfocontent").hide();
        });


        

		});

		// set car end

		// add car start

        $(".addbut").click(function(){
        	$(".setcarcov").hide();
        	$(".removebut").hide();
        	$(".editbut").hide();
        	$(".add").slideDown("slow");
        	$(".originview").hide();
        	// e.preventDefault();
        });

        $(".backbut").click(function(){
        	$(".setcarcov").show();
        	$(".add").hide();
        	$(".editbut").show();
        	$(".removebut").show();
        	$('.remth').hide();
            $('.editth').hide();            
            $('.editstuinfodel').hide();
            $('.editstuinfoedit').hide();
            $('.hidecardel').hide();
            $('.hidecaredit').hide();
        	e.preventDefault();
        });

        // add car end


        // nextpg	
        $(".next").click(function(){
		$(".orshow").hide();
		$(".orhide").show("slow");
		$(".backbut").hide();
		$(".backtoback").show("slow");
		$(".next").hide();
		$(".submit").show();
		});

		$(".backtoback").click(function(){
		$(".orshow").show("slow");
		$(".orhide").hide();
		$(".backbut").show("slow");
		$(".backtoback").hide();
		$(".next").show();
		$(".submit").hide();
		});



		
	
		
});



