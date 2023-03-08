// $('.owl-carousel').owlCarousel({
//   loop:true,
//   margin:10,
//   nav:true,
//   responsive:{
//     0:{
//       items:1
//     },
//     600:{
//       items:3
//     },
//     1000:{
//         items:5
//         }
//     }
// });

// $(document).ready(function(){
//     $("a").on('click', function(event) {
//       if (this.hash !== "") {
//         event.preventDefault();
//         var hash = this.hash;
//         $('html, body').animate({
//           scrollTop: $(hash).offset().top
//         }, 800, function(){
//           window.location.hash = hash;
//         });
//     }
//   });
// });

// $(document).ready(function(){       
//     var scroll_start = 0;
//     var startchange = $('#startchange');
//     var offset = startchange.offset();
//     if (startchange.length){
//       $(document).scroll(function() { 
//         scroll_start = $(this).scrollTop();
//           if(scroll_start > offset.top) {
//             $('.navbar').css('opacity', '1');
//             $('.navbar').css('background-color', '#FFBB00');;
//             $('.navbar').css('transition', '.5s ease-in-out')

//           } 
//           else{
//             $('.navbar').css('opacity', '0');
//           }
          
//     });
//   }
// });

// $(window).on('scroll', function(){
//   if($(window).scrollTop()){
//       $('nav').addClass('black');
//   }
//   else{
//       $('nav').removeClass('black');
//   }
// })

// (function ($) {
// 	"use strict";
// 	var nav = $('nav');
//   var navHeight = nav.outerHeight();
  
//   $('.navbar-toggler').on('click', function() {
//     if( ! $('#mainNav').hasClass('navbar-reduce')) {
//       $('#mainNav').addClass('navbar-reduce');
//     }
//   });


// //    Star Scrolling nav 
// 	$('a.js-scroll[href*="#"]:not([href="#"])').on("click", function () {
// 		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
// 			var target = $(this.hash);
// 			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
// 			if (target.length) {
// 				$('html, body').animate({
// 					scrollTop: (target.offset().top - navHeight + 5)
// 				}, 1000, "easeInOutExpo");
// 				return false;
// 			}
// 		}
// 	});

// 	// Closes responsive menu when a scroll trigger link is clicked
// 	$('.js-scroll').on("click", function () {
// 		$('.navbar-collapse').collapse('hide');
// 	});

// 	// Activate scrollspy to add active class to navbar items on scroll
// 	$('body').scrollspy({
// 		target: '#mainNav',
// 		offset: navHeight
// 	});
// 	/*--/ End Scrolling nav /--*/

// 	/*--/ Navbar Menu Reduce /--*/
$(window).trigger('scroll');
$(window).on('scroll', function () {
  var pixels = 50; 
  var top = 1200;
  if ($(window).scrollTop() > pixels) {
    $('.navbar-expand-md').addClass('navbar-reduce');
    $('.navbar-expand-md').removeClass('navbar-trans');
  } else {
    $('.navbar-expand-md').addClass('navbar-trans');
    $('.navbar-expand-md').removeClass('navbar-reduce');
  }
  if ($(window).scrollTop() > top) {
    $('.scrolltop-mf').fadeIn(1000, "easeInOutExpo");
  } else {
    $('.scrolltop-mf').fadeOut(1000, "easeInOutExpo");
  }
});