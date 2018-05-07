jQuery(document).ready(function($){

	// FRONT PAGE SERVICES
    var services = $('.services');
        services.waypoint(function() {
            services.addClass("animated zoomIn"); 
            services.removeClass("ini-pos-js"); 
        }, {offset: '50%'});



	// FRONT PAGE PROPERTY MAINTENANCE
    var hitw = $('.property-maintanance h1.headline'); // HEADLINE
        hitw.waypoint( function() {
            hitw.addClass("animated fadeInRight");
            hitw.removeClass("ini-pos-js");
    }, { offset: '70%'});
	 
	// FRONT PAGE PROPERTY MAINTENANCE- RESIDENTIAL
    var residential = $('.residential');
    residential.css('visibility', 'hidden');
    residential.waypoint(function() {
        residential.addClass("animated slideInUp");
        residential.css('visibility', 'visible');
    }, {offset: '70%'});
	    
	// FRONT PAGE PROPERTY MAINTENANCE- COMMERCIAL
    var commercial = $('.commercial');
    commercial.css('visibility', 'hidden');
    commercial.waypoint(function() {
        commercial.addClass("animated slideInUp");
        commercial.css('visibility', 'visible');
    }, {offset: '70%'});  
	    
	// FRONT PAGE PROPERTY MAINTENANCE- INSPECTIONS
    var inspections = $('.inspections');
    inspections.css('visibility', 'hidden');
    inspections.waypoint(function() {
        inspections.addClass("animated slideInUp");
        inspections.css('visibility', 'visible');
    }, {offset: '70%'}); 
	    
	// FRONT PAGE PROPERTY MAINTENANCE- ROOFING
    var roofing = $('.roofing');
    roofing.css('visibility', 'hidden');
    roofing.waypoint(function() {
        roofing.addClass("animated slideInUp");
        roofing.css('visibility', 'visible');
    }, {offset: '70%'});

    // FRONT PAGE PROPERTY MAINTENANCE BUTTON
    var pptmnbtn = $('.ppt-btn');
        pptmnbtn.waypoint( function() {
            pptmnbtn.addClass("animated fadeInLeft");
            pptmnbtn.removeClass("ini-pos-js");
    }, { offset: '90%'});



    // PROPERTY MAINTENANCE PAGE
    var pptmnpage = $('.service-loop--ppt-maintanance');
        pptmnpage.waypoint( function() {
            pptmnpage.addClass("animated fadeInLeft");
            pptmnpage.removeClass("ini-pos-js");
    }, { offset: '90%'});  

    // PROPERTY MAINTENANCE SINGLE POST
    var single_pptmntce = $('.single-service-content--pptmntce');
        single_pptmntce.waypoint( function() {
            single_pptmntce.addClass("animated zoomIn");
            single_pptmntce.removeClass("ini-pos-js");
    }, { offset: '90%'}); 

    // CONTACT PAGE HEADING
    var contact_head = $('.well--contact-head');
        contact_head.waypoint( function() {
            contact_head.addClass("animated bounceInLeft");
            contact_head.removeClass("ini-pos-js");
    }, { offset: '90%'}); 

    // CONTACT PAGE FORM
    var contact_form = $('.contact-page--form');
        contact_form.waypoint( function() {
            contact_form.addClass("animated bounceInRight");
            contact_form.removeClass("ini-pos-js");
    }, { offset: '90%'}); 


    // OWL CAROUSEL
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                767:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
      });
      $('.play').on('click', function() {
        owl.trigger('play.owl.autoplay', [1000])
      })
      $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
      });
       




 




 




    
    
});






