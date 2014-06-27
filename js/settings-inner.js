$(window).load(function(){
	
	// Banner Slider Start

	new fwslider().init({
		duration: "1000", /* Fade Speed (miliseconds) */
		pause:    "6000"  /* Autoslide pause between slides (miliseconds)*/
	});

	// Banner Slider End
	
	//-----------------------------------------------------------------------------
	
	// Mobile Navigation Start
	
	$(".nav-trigger").click(function(){
		$("nav.main").slideToggle();
	});
	
	// Mobile Navigation End
	
	//-----------------------------------------------------------------------------
	
	// Dropdown Menu Start
	
	if ($(window).width() > 768) {
		
		$("nav.main ul li").hover(function(){
			$(this).children("ul").slideToggle("fast");
		});
	
	}
	
	$("nav.main li:last-child").addClass("last");

	// Dropdown Menu End
	
	//-----------------------------------------------------------------------------
	
	// Blog Dropdown Start
	
	$(".blog-nav li").hover(function(){
		$(this).children("ul").slideToggle("fast");
	});

	$(".blog-nav li:last-child").addClass("last");

	// Blog Dropdown End
	
	//-----------------------------------------------------------------------------
	
	// Tables Start
	
	$("tr:odd").addClass("odd");

	// Tables End
	
	//-----------------------------------------------------------------------------
		
});


