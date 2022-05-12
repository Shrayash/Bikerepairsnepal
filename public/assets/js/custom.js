/**	

	Custom JS
	
	1. MAIN SLIDER
	2. VIDEO POPUP
	3. TESTIMONIALS (SLICK SLIDER)
	4. SCROLL TOP BUTTON
	5. CLIENTS SLIDEER ( SLICK SLIDER )
	6. PORTFOLIO GALLERY
	7. PORTFOLIO POPUP VIEW ( IMAGE LIGHTBOX )
	
	
**/



(function( $ ){

	/* ----------------------------------------------------------- */
	/*  1. MAIN SLIDER
	/* ----------------------------------------------------------- */

	$('.glocal-slide').slick({
		arrows: true,
		dots: false,
		infinite: true,
		speed: 500,
		autoplay: true,
		cssEase: 'linear'
	});

	
	/* ----------------------------------------------------------- */
	/*  2. VIDEO POPUP
	/* ----------------------------------------------------------- */

   $('.glocal-video-play-btn').on('click', function(event) {
	   
        event.preventDefault();
        
        $('.glocal-video-iframe-area').addClass('glocal-video-iframe-display');
       
    });
   
    // when click the close btn

    // disappear iframe window
    
    $('.glocal-video-close-btn').on('click', function(event) {
	    
	    event.preventDefault();
	    
		$('.glocal-video-iframe-area').removeClass('glocal-video-iframe-display');
		
    });

    // stop iframe if it is play while close the iframe window

    $('.glocal-video-close-btn').click(function(){

        $('.glocal-video-iframe').attr('src', $('.glocal-video-iframe').attr('src'));

    });

    // when click overlay area

     $('.glocal-video-iframe-area').on('click', function(event) {
	    
	    event.preventDefault();
	    
		$('.glocal-video-iframe-area').removeClass('glocal-video-iframe-display');
		
    });

	$('.glocal-video-iframe-area, .glocal-video-iframe').on('click', function(e){
	    e.stopPropagation();
	});


   	/* ----------------------------------------------------------- */
	/*  3. TESTIMONIALS (SLICK SLIDER)
	/* ----------------------------------------------------------- */

		$('.glocal-testimonial-slide').slick({
			arrows: true,
			dots: false,
			infinite: true,
			speed: 500,
			autoplay: true,
			cssEase: 'linear'
		});

	/* ----------------------------------------------------------- */
  	/*  4. SCROLL TOP BUTTON
  	/* ----------------------------------------------------------- */

	  //Check to see if the window is top if not then display button

	    jQuery(window).scroll(function(){
	      if (jQuery(this).scrollTop() > 300) {
	        jQuery('.scrollToTop').fadeIn();
	      } else {
	        jQuery('.scrollToTop').fadeOut();
	      }
	    });
	     
	    //Click event to scroll to top

	    jQuery('.scrollToTop').click(function(){
	      jQuery('html, body').animate({scrollTop : 0},800);
	      return false;
	    });
	 
		
	/* ----------------------------------------------------------- */
	/*  5. CLIENTS SLIDEER ( SLICK SLIDER )
	/* ----------------------------------------------------------- */

		$('.glocal-shows-slider').slick({
		  slidesToShow: 4,
		  arrows: false,
		  autoplay: true,
		  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        arrows: false,
		        slidesToShow: 3
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        arrows: false,
		        slidesToShow: 2
		      }
		    }
		  ]
		});

	
	/* ----------------------------------------------------------- */
	/*  6. PORTFOLIO GALLERY
	/* ----------------------------------------------------------- */ 
	
		$('.filtr-container').filterizr();

		//Simple filter controls

	    $('.glocal-simplefilter li').click(function() {
	       $('.glocal-simplefilter li').removeClass('active');
	        $(this).addClass('active');
	    });


	/* ----------------------------------------------------------- */
	/*  7. PORTFOLIO POPUP VIEW ( IMAGE LIGHTBOX )
	/* ----------------------------------------------------------- */ 

	$('.glocal-imglink').magnificPopup({
	  type: 'image',
	  mainClass: 'mfp-fade',
	  gallery:{
	    enabled:true
	  }
	});

	
	
})( jQuery );



  
	