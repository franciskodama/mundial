/*
Template Name: Lank – Creative Agency & Portfolio HTML Template
Theme URL:
Description: Premium Creative Agency & Portfolio Template
Author: Sego Themes
Author URL:
Version: 1.0
Tags: Agency, Portfolio, HTML5, CSS3, Bootstrap, Jquery, Onepage
*/

/*----------------------
	Script Guide
------------------------
01. BROWSER AGENT FUNCTION
	01.1 Check CHROME (Mobile / Tablet)
	01.2 Check IOS
	01.3 Check FIREFOX
	01.4 Check IE (< IE10)
	01.5 Check IE11
	01.6 Check IE11 (Not Windows Phone)
	01.7 Check IE10
	01.8 Check IE9
	01.9 Check Safari/Chrome Mac

02. PACE ON HIDE Functions
	02.1 Preloader
	02.2 Stellar Parallax

03. OWL CAROUSEL
    03.1 Hero Slider
	03.2 Testmonials Carousel
	03.3 Journal Carousel
	03.4 Hero slider background setting

04. ELEMENT
    04.1 Magnific Zoom Gallery
    04.2 Skill Bar
    04.3 Portfolio Filterizr
	04.4 Onepage smooth scroll
	04.5 Active current menu while scrolling
	04.6 Mobile Menu
	04.7 Audio Controls
	04.8 When window scroll

05. Custom google map

*/
(function ($) {
    'use strict';

$(document).ready(function () {


    // 01. BROWSER AGENT FUNCTION
	//====================================================================================

	// 01.1 Check Chrome (Mobile / Tablet)
	//================================================================================
	var isChromeMobile = function isChromeMobile() {
		if (device.tablet() || device.mobile()) {
			if (window.navigator.userAgent.indexOf("Chrome") > 0 || window.navigator.userAgent.indexOf("CriOS") > 0){
				return 1;
			}
		}
	}

	// 01.2 Check IOS
	//================================================================================
	var isIOS = function isIOS() {
		if (window.navigator.userAgent.indexOf("iPhone") > 0 || window.navigator.userAgent.indexOf("iPad") > 0 || window.navigator.userAgent.indexOf("iPod") > 0){
			return 1;
		}
	}

	// 01.3 Check FIREFOX
	//================================================================================
	var is_firefox = function is_firefox() {
		if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1){
			return 1;
		}
	}

	// 01.4 Check IE (< IE10)
	//================================================================================
	var isIE = function isIE() {
 		if (window.navigator.userAgent.indexOf("MSIE ") > 0 || !!navigator.userAgent.match(/Trident\/7\./)) {
   		 	return 1;
		}
	}

	// 01.5 Check IE11
	//================================================================================
	var isIE11 = function isIE11() {
 		if (!!navigator.userAgent.match(/Trident\/7\./)) {
   		 	return 1;
		}
	}

	// 01.6 Check IE11 (Not Windows Phone)
	//================================================================================
	var isIE11desktop = function isIE11desktop() {
 		if (!!navigator.userAgent.match(/Trident\/7\./) && window.navigator.userAgent.indexOf("Windows Phone") < 0) {
   		 	return 1;
		}
	}

	// 01.7 Check IE10
	//================================================================================
	var isIE10 = function isIE10() {
 		if (window.navigator.userAgent.indexOf("MSIE 10.0") > 0) {
   		 	return 1;
		}
	}

	// 01.8 Check IE9
	//================================================================================
	var isIE9 = function isIE9() {
 		if (window.navigator.userAgent.indexOf("MSIE 9.0") > 0) {
   		 	return 1;
		}
	}

	// 01.9 Check Safari/Chrome Mac
	//================================================================================
	var isSafari = function isSafari() {
	 	if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Mac') != -1) {
   		 	return 1;
		}
	}




    // 02. PACE ON HIDE Functions
	//====================================================================================
	Pace.on('hide', function () {

    // 02.1 Preloader
	//====================================================================================
	/*var preloader = $('#preloader');
	preloader.delay(850).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(850).css({'overflow':'visible'});*/

	// 02.3 Stellar Parallax
	//================================================================================
	if( !device.tablet() && !device.mobile() && !isIE9() && !isIE10() && !isSafari() ) {
        var parallax_nwds = $(".parallax");
		parallax_nwds.css("background-attachment","fixed");
		$(window).stellar({
			horizontalScrolling: false,
			responsive: true,
		});
	}

	}); // END of Pace on Hide

    // 03. OWL CAROUSEL
	//====================================================================================

	// 03.1 Hero Slider
	//================================================================================
	var heroslider = $('#hero-slide');
    heroslider.owlCarousel({
    loop:true,
    nav:true,
    navText: ["<i class='icon-back'></i>","<i class='icon-next'></i>"],
    pagination:true,
    items:1,
    navigation:true,
    autoplay:true,
    autoplayTimeout:5000,
    animateOut: 'fadeOut'
    });

    var logoslider = $('#logo-slide');
    logoslider.owlCarousel({
        loop:true,
        nav:false,
        navText: ["<i class='icon-back'></i>","<i class='icon-next'></i>"],
        pagination:true,
        navigation:false,
        autoplay:true,
        autoplayTimeout:4000,
        animateOut: 'fadeOut',
        dots: false,
        slideBy: 4,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            720: {
                items: 3
            },
            991: {
                items: 4
            }
        }
    });


	// 03.2 Testmonials Slider
	//================================================================================
    var testmonials = $('#testmonial-slider');
    testmonials.owlCarousel({
    loop:true,
    nav:false,
    pagination:true,
    margin: 16,
    navigation:true,
    autoplay:true,
    autoplayTimeout:5000,
    responsive:{

        0:{
            items:1
        },

        640:{
            items:2
        },

        991:{
            items:2
        },

       1100:{
            items:3
        }
    }
    });

	// 03.3 Journal Slider
	//================================================================================
    var journal = $('#journal-slider');
    journal.owlCarousel({
    loop:true,
    nav:false,
    pagination:true,
    margin: 16,
    navigation:true,
    autoplay:true,
    autoplayTimeout:5000,
    responsive:{

        0:{
            items:1
        },

        640:{
            items:1
        },

        768:{
            items:2
        },

       1100:{
            items:2
        }
    }
    });


	// 03.4 Hero slider background setting
	//================================================================================
    function sliderBgSetting() {
        if ($(".owl-full-width .slide").length) {
            $(".owl-full-width .slide").each(function() {
                var $this = $(this);
                var img = $this.children(img);
                var imgSrc = img.attr("src");

                $this.css({
                    backgroundImage: "url("+ imgSrc +")",
                    backgroundSize: "cover",
                    backgroundPosition: "center center"
                })
            });
        }
    }
	// initialization function on document.ready
	sliderBgSetting();


    // 04. ELEMENT
	//====================================================================================

	// 04.1 Magnific Zoom Gallery
	//================================================================================
	var zommgallery = $('.work-gallery');

    zommgallery.magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
          verticalFit: true,
          titleSrc: function(item) {
            return item.el.attr('title');
          }
        },
        gallery: {
          enabled: true
        },
        zoom: {
          enabled: true,
          duration: 300, // don't foget to change the duration also in CSS
          opener: function(element) {
            return element.find('img');
          }
        }

    });


	// 04.2 Skill Bar
	//================================================================================
    $('.skillbar').each(function(){
	$(this).find('.skillbar-bar').animate({
	width:jQuery(this).attr('data-percent')
	},6000);
	});


	// 04.3 Portfolio Filterizr
	//================================================================================
    var workfilter = $('.work-masonry');
	workfilter.filterizr({
	   //your options here
	  layout: 'packed',
	});

    $('.filters-group li .filter').on('click', function() {
      $('.filters-group li .filter').removeClass('is-checked');
      $(this).addClass('is-checked');
    });

    setTimeout(function(){
        $('.filter-1').trigger('click');
        $('.filter-all').trigger('click');
    }, 2000);

});

 	// 04.4 Onepage smooth scroll
	//================================================================================

        $("ul.site-menu > li > a, .smooth").on("click", function() {
            if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $("[name=" + this.hash.slice(1) +"]");
                if (target.length) {
                    $("html, body").animate({
                    scrollTop: target.offset().top -60
                }, 1000, "easeInOutExpo");
                    return false;
                }
            }

            return false;
        });


 	// 04.5 Active current menu while scrolling
	//================================================================================
    var sections = $(".section"),
        nav = $("header "),
        nav_height = nav.outerHeight();

    function activeMenuItem() {

        var cur_pos = $(window).scrollTop();
        sections.each(function() {
            var top = $(this).offset().top - nav_height - 20,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                nav.find("ul > li > a").parent().removeClass("active");
                nav.find("a[href='#" + $(this).attr('id') + "']").parent().addClass("active");
            } else if (cur_pos === 2) {
                nav.find("ul > li > a").parent().removeClass("active");
            }
        });
    }


  	// 04.6 Mobile Menu
	//================================================================================

	  var navicon = $('#nav-icon'),
	  sitemenu = $('.site-menu'),
	  section = $('.section'),
	  body = $('body'),
	  link = $('.site-menu li a');
	  navicon.on('click', function(){
	  $(this).toggleClass('open');
	  section.toggleClass('is-active');
	  sitemenu.toggleClass('is-active');
	  body.toggleClass('overflow');
	  });

	  link.on('click', function(){
	  navicon.toggleClass('open');
	  section.toggleClass('is-active');
	  sitemenu.toggleClass('is-active');
	  body.toggleClass('overflow');
	  });

	  var backtop = $('.back-top')
      backtop.on('click', function(){
	  $('html, body').animate({scrollTop: $('#home').offset().top}, 3000);
      });


 	// 04.7 Sticky Header
	//================================================================================
	var stickyNavTop = $( 'body' ).offset().top + 10;
	var stickyNav = function ()
		{
			 var scrollTop = $( window ).scrollTop(); if ( scrollTop > stickyNavTop ){
			  $("header").addClass("is-active");
			 } else{
			  $("header").removeClass("is-active");
			 }
		 };
		 stickyNav();

	/*==========================================================================
	 04.8 When window scroll
	==========================================================================*/
    $(window).on("scroll", function() {
        activeMenuItem();
        stickyNav();
    });

   // Custom google map

    google.maps.event.addDomListener(window, 'load', init);

	function init() {
    	 // Basic options for a simple Google Map
    	// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    	var mapOptions = {
    	// How zoomed in you want the map to start at (always required)
    	zoom: 16,
    	// Disable mouse scroll wheel scaling on Google Maps
    	scrollwheel: false,
    	// The latitude and longitude to center the map (always required)
    	center: new google.maps.LatLng(-19.739730,-47.965990),
    	//Find your latitude and longitude: http://www.latlong.net/
    	// How you would like to style the map.
    	// This is where you would paste any style found on Snazzy Maps.
    	styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#ffffff"},{"visibility":"on"}]}]
    	                };
    	// Get the HTML DOM element that will contain your map
    	// We are using a div with id="map" seen below in the <body>
    	var mapElement = document.getElementById('map');
    	// Create the Google Map using our element and options defined above
    	var map = new google.maps.Map(mapElement, mapOptions);
    	// Let's also add a marker while we're at it
    	var marker = new google.maps.Marker({
    	 position: new google.maps.LatLng(-19.739730,-47.965990),
    	 map: map,
    	 title: 'Mundial Comunicação Visual'
    	 });
	}

    $('#phone').focus(function(){
        $(this).mask("(99)9999-9999?9", {
          completed: function(){
            $(this).mask("(99)99999-9999");
          }
        });
      });

	})(jQuery);