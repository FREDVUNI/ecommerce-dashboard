// JavaScript Document


$(document).ready(function () {

//Mobile Menu Sidebar					
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });

  /* ---- For Content Dropdown JS Start ---- */
    $('.content-link').on("click", function() {
      $('.content-dropdown').toggle();

	    if ($(this).hasClass("open")) {
	      $(this).removeClass('open');
	    }
	    else
	    {
	      $(this).addClass('open');
	    }
    });
    /* ---- For Content Dropdown JS End ---- */
  
/* ----- Search open close Start  ------ */
	//$('.search-opener').click(function(){
		//if($('.top-search-bar').hasClass('open')){
		//  $('.top-search-bar').removeClass('open');
		//}else{
		//  $('.top-search-bar').addClass('open');
		//}
	//});
/* ----- Search open close End  ------ */

/* ---- For Footer JS Start ---- */
  $('.footer-static-block span.opener').on("click", function(){
  
    if ($(this).hasClass("plus")) {
      $(this).parent().find('.footer-block-contant').slideDown();
      $(this).removeClass('plus');
      $(this).addClass('minus');
    }
    else
    {
      $(this).parent().find('.footer-block-contant').slideUp();
      $(this).removeClass('minus');
      $(this).addClass('plus');
    }
    return false;
  });
/* ---- For Footer JS End ---- */
/* ---- For Sidebar JS Start ---- */
    $('.sidebar-box span.opener').on("click", function(){
        var sidebaropener = $(this);
        if (sidebaropener.hasClass("plus")) {
          sidebaropener.parent().find('.sidebar-contant').slideDown();
          sidebaropener.removeClass('plus');
          sidebaropener.addClass('minus');
        }
        else
        {
          sidebaropener.parent().find('.sidebar-contant').slideUp();
          sidebaropener.removeClass('minus');
          sidebaropener.addClass('plus');
        }
        return false;
    });
/* ---- For Sidebar JS End ---- */
 
});

// Mobile Menu
 $(document).ready(function () {
	var $menu = $('#menu');
	$('.ochow-menu-item-toggle').on('click', function () {
	    var $btn = $(this);
	    $menu
	      .find('.dropdown')
	        .removeClass('open')
	          .find('.ochow-open')
	            .removeClass('ochow-open')
	            .addClass('ochow-close');

	    if ($btn.hasClass('ochow-close')) {
	      $btn
	        .removeClass('ochow-close')
	        .addClass('ochow-open')
	          .parent()
	            .addClass('open')
	    } else {
	      $btn
	        .removeClass('ochow-open')
	        .addClass('ochow-close')
	          .parent()
	            .removeClass('open')
	    }
	});
});

//Product-Zoom

$(document).ready(function() {
		// zoom        
	$(".thumbnails-image img").elevateZoom({
		zoomType : "inner",
		cursor: "crosshair",
		gallery:'gallery_01', 
		galleryActiveClass: "active", 
		imageCrossfade: true,
		responsive: true	
	});
});
 
 //custom-JS

$(document).ready(function() {	
	$(".bestseller_box,.latest_box").wrapAll('<div class="cat-block ptb-70"><div class="container"><div class="pro-small-view row">');
	//$(".home-side-banner,.main-banner").wrapAll('<section class="pb-sm-30"><div class="row">');
	$(".pagination-bar ul").removeClass('pagination');
	$(".pagination-bar ul").addClass('pagination-list');
});

/* Best seller slider start */
function bestseller(){
	if($('#bestseller_slide').length>0){
		$('#bestseller_slide').owlCarousel({ 
		    items: 4,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [991,2],
			itemsTablet: [767,3],	
			itemsMobile : [479,2],
			autoPlay: false,
			navigation: true,
			//navigationText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>'],  
			pagination: false
		});
	}	
}
$(document).ready(function(){ bestseller(); });
/*$(window).resize(function(){ bestseller(); });*/
/* Best seller slider end */

/* latest slider start */
function latest(){
	if($('#latest_slide').length>0){
		$('#latest_slide').owlCarousel({ 
		    items: 1,
			itemsDesktop : [1199,1],
			itemsDesktopSmall : [991,1],
			itemsTablet: [620,1],	
			itemsMobile : [479,1],
			autoPlay: false,
			navigation: true,
			//navigationText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>'],  
			pagination: false
		});
	}	
}
$(document).ready(function(){ latest(); });
/*$(window).resize(function(){ latest(); });*/
/* latest slider end */


/* featured slider start */
$(document).ready(function(){
	if($('#featured_slide').length>0){
		$('#featured_slide').owlCarousel({
			items: 4,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [991,2],
			itemsTablet: [620,2],	
			itemsMobile : [479,2],
			autoPlay: false,
			navigation: true,
			//navigationText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>'],  
			pagination: false
		});
	}	
});
/* featured slider end */


/* cctv slider start */
$(document).ready(function(){
	if($('#cctv_slide').length>0){
		$('#cctv_slide').owlCarousel({
			items: 4,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [991,2],
			itemsTablet: [620,2],	
			itemsMobile : [479,2],
			autoPlay: false,
			navigation: true,
			//navigationText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>'],  
			pagination: false
		});
	}	
});
/* cctv slider end */

/* biometric slider start */
$(document).ready(function(){
	if($('#biometric_slide').length>0){
		$('#biometric_slide').owlCarousel({
			items: 4,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [991,2],
			itemsTablet: [620,2],	
			itemsMobile : [479,2],
			autoPlay: false,
			navigation: true,
			//navigationText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>'],  
			pagination: false
		});
	}	
});
/* biometric slider end */


/* Solar slider start */
$(document).ready(function(){
	if($('#solar_slide').length>0){
		$('#solar_slide').owlCarousel({
			items: 4,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [991,2],
			itemsTablet: [620,2],	
			itemsMobile : [479,2],
			autoPlay: false,
			navigation: true,
			//navigationText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>'],  
			pagination: false
		});
	}	
});
/* Solar slider end */


/* recommended slider start */
$(document).ready(function(){
	if($('#recommended_slide').length>0){
		$('#recommended_slide').owlCarousel({
			items: 4,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [991,2],
			itemsTablet: [620,2],	
			itemsMobile : [479,2],
			autoPlay: false,
			navigation: true,
			//navigationText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>'],  
			pagination: false
		});
	}	
});
/* recommended slider end */

/* special slider start */
$(document).ready(function(){
	if($('#fire_slide').length>0){
		$('#fire_slide').owlCarousel({
		    items: 4,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [980,2],
			itemsTablet: [620,2],	
			itemsMobile : [479,2],
			autoPlay: false,
			navigation: true,
			//navigationText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>'],  
			pagination: false
		});
	}	
});	
/* special slider end */

 //Testimonial-Parallax
//$(document).ready(function() {	
		//$('.testimonial-outer').parallax("50%", 0.1);
	//});

//Blog-Carousel
$(document).ready(function(){
	if($('.blog-carousel').length>0){
		$('.blog-carousel').owlCarousel({
			items: 2,
			/*autoPlay: 10000,*/
			singleItem: false,
			navigation: true,
			//navigationText: ['<div class="prev-button">prev</div>', '<div class="next-button">next</div>'],
			pagination: false,
			itemsDesktop : [1000,2],
			itemsDesktopSmall :	[991,1],
			itemsTablet: [768,1]
		});
	}
});	

//Testimonial-Carousel
$(document).ready(function(){
	if($('.testimonial-data').length>0){
		$('.testimonial-data').owlCarousel({
			items: 1,
			itemsCustom : false,
			itemsDesktop : [1199,1],
			itemsDesktopSmall : [980,1],
			itemsTablet: [768,1],
			itemsTabletSmall: false,
			itemsMobile : [479,1],
			singleItem : false,
			itemsScaleUp : false,
			/*autoPlay: 10000,*/
			singleItem: false,
			navigation: true,
			//navigationText: ['<div class="prev-button">prev</div>', '<div class="next-button">next</div>'],
			pagination: false,
			animateOut: 'fadeOut',
			stagePadding:30,
			smartSpeed:450,				
			
		});
	}
});


//image-additional
$(document).ready(function(){
    if($('.product-additional').length>0){	
	   $('.product-additional').owlCarousel({
	      navigation:true,
	      pagination: false,
	      slideSpeed : 1000,
	      goToFirstSpeed : 1500,
	      autoHeight : true,
	      items :5, 
	      itemsDesktop : [1199,5], 
	      itemsDesktopSmall : [991,5], 
	      itemsTablet: [767,5], 
	      itemsMobile : [479,5] 
	    });
	}   
}); 

//Related-Product-Carousel
$(document).ready(function(){
    if($('#related_slide').length>0){	
		$('#related_slide').owlCarousel({ 
			items: 4,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [980,3],
			itemsTablet: [620,2],	
			itemsMobile : [479,2],
			autoPlay: false,
			navigation: true,
			//navigationText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>'],  
			pagination: false
		});
	}		
});

//Back-To-Top
$(document).ready(function(){     
     $(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('#toTop').fadeIn();
		} else {
			$('#toTop').fadeOut();
		}
	});

	//Click event to scroll to top
	$('#toTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
});

//Quickview-Popup
$(document).ready(function(){
      if($('.iframe').length>0){
	      $('.iframe').magnificPopup({
				type:'ajax',
				fixedContentPos: true,
				fixedBgPos: true,				
				closeBtnInside: true,
				closeOnContentClick: false,
				preloader: false,
				midClick: false,
				removalDelay: 300,
				//alignTop: true,
		        overflowY: 'scroll'
    	});		
     }
});

function scrolltop_arrow () {
   /* ---- Page Scrollup JS Start ---- */
   //When distance from top = 250px fade button in/out
    $(window).scroll(function(){
        var scrollup = $('#scrollup');
        if ($(this).scrollTop() > 250) {
            scrollup.fadeIn(300);
        } else {
            scrollup.fadeOut(300);
        }
    });
    //On click scroll to top of page t = 1000ms
    $('#scrollup').on("click", function(){
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });
    /* ---- Page Scrollup JS End ---- */
}

function scrolltodiv (divcls="") {
    $('html, body').animate({
        scrollTop: $("."+divcls).offset().top
    }, 2000);
}



$(document).ready(function(){
 	scrolltop_arrow ();
});

$( window ).on( "load", function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
  });


// Wait for window load
	//$(window).load(function() {
	//	$(".se-pre-con").fadeOut(5000);
	//});



