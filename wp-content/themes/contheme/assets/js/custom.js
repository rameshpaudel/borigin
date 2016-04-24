
$(function() {
    
    // jQuery for page loader
    $(window).load(function() {
        $('#loader').fadeOut('fast');
    });
    
    
    // jQuery for the Side Menu
    $('#sidebar').click(function(e) {
        e.preventDefault();
        $('#sidebar-wrapper').toggleClass('active').css('box-shadow', '0 0 13px rgba(0, 0, 0, 0.2)');
    });
    
    $('#menu-close').click(function(e) {
        e.preventDefault();
        $('#sidebar-wrapper').toggleClass('active').css('box-shadow', 'none');
    });
    
    
    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        
        var offset = $('body').attr('data-offset');
        
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - (offset - 1)
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
    
    
    // // jQuery sticky
    // $("#navigation").sticky({topSpacing: 0});
});
$(document).ready(function() {
	var icon = $('div.content-box-icon');

	icon.next().on('hover').removeClass('fa-rocket');
	/* Owl carousel */
	$(".owl-carousel").owlCarousel({
		slideSpeed : 500,
		rewindSpeed : 1000,
		mouseDrag : true,
		stopOnHover : true
	});


});
$(document).ready(function(){
	wow = new WOW(
	  {
		animateClass: 'animated',
		offset:       150
	  }
	);
	wow.init();							  
});

$('.slider').backstretch(slidingImages, {duration: 3000, fade: 1750});