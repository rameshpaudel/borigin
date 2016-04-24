$(function(){
    
    // Only animate elements when using non-mobile devices    
    if (jQuery.browser.mobile === false) 
    {
        // Animate elements in Intro Section
        $('#intro > .intro-body > .intro-content').css('opacity', 0).one('inview', function(isInView) {
            if (isInView) {$(this).addClass('animated bounceIn').css('opacity', 1);}
        });
        
        
        // Animate elements in Who We Are Section
        $('#who-we-are #carousel-who-we-are').css('opacity', 0).one('inview', function(isInView) {
            if (isInView) {$(this).addClass('animated fadeInUp delayp1').css('opacity', 1);}
        });
        
        $('#who-we-are .who-we-are-text').css('opacity', 0).one('inview', function(isInView) {
            if (isInView) {$(this).addClass('animated fadeInUp delayp3').css('opacity', 1);}
        });
        
        
        // Animate elements in Quote Section
        $('#quote .quote-text > .quote-icon').css('opacity', 0).one('inview', function(isInView) {
        if (isInView) {$(this).addClass('animated fadeInUp delayp1').css('opacity', 1);}
        });

        $('#quote .quote-text > h2').css('opacity', 0).one('inview', function(isInView) {
            if (isInView) {$(this).addClass('animated fadeInUp delayp3').css('opacity', 1);}
        });
        
        $('#quote .quote-text > h2.quote-by').css('opacity', 0).one('inview', function(isInView) {
            if (isInView) {$(this).addClass('animated fadeInUp delayp5').css('opacity', 1);}
        });
        
        
        // Animate elements in Keep In Touch Section
        $('#keep-in-touch .social-icon-item').each(function(i)
        {            
            var element = $(this),
            itemsDelay   = ( isNaN($(this).data('animation-delay')) ? 50 : $(this).data('animation-delay') );
            element.css('opacity', 0).one('inview', function(isInView) {
                if (isInView)
                {
                    setTimeout(function(){
                        element.addClass('animated bounceIn').css('opacity', 1);
                    } , itemsDelay * (i * 2));
                }
            });
        });
        
        
        // Animate elements in Contact Us Section 
        $('#contact-us .contact-us-form').css('opacity', 0).one('inview', function(isInView) {
            if (isInView) {$(this).addClass('animated fadeInUp delayp1').css('opacity', 1);}
        });
        
        $('#contact-us .social-icon-text').css('opacity', 0).one('inview', function(isInView) {
            if (isInView) {$(this).addClass('animated fadeInUp delayp3').css('opacity', 1);}
        });
        
       
        // Animate elements in Footer
        $('#footer .footer-column').each(function(i)
        {            
            var element = $(this),
            itemsDelay   = ( isNaN($(this).data('animation-delay')) ? 50 : $(this).data('animation-delay') );
            element.css('opacity', 0).one('inview', function(isInView) {
                if (isInView)
                {
                    setTimeout(function(){
                        element.addClass('animated fadeInUp').css('opacity', 1);
                    } , itemsDelay * (i * 2));
                }
            });
        });
    }
});