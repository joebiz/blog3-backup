 jQuery(document).ready(function($) { 
    $(window).scroll(function() {
    if ($(this).scrollTop() > 150){ 
	    
	            $('.header-nav').addClass("sticky").fadeIn("1000");
    }
    else{
	   
        $('.header-nav').removeClass("sticky");
        
    }
});

});