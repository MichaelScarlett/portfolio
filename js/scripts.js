$(function(){
	$(".typing").typed({
	            strings: ["Michael Scarlett"],
	            typeSpeed: 25,
	            // backDelay: 2100,
	            // loop: true
	        });


	
	// $(".typing_2").typed({
	//             strings: ["Front-end developer"],
	//             typeSpeed: 25,
	//             startDelay: 25,
	//             // backDelay: 2100,
	//             // loop: true
	//         });
});










	// prevents getting stuck in google map scroll trap
  $('.map').click(function () {
      $('.map iframe').css("pointer-events", "auto");
  });


$('#menuIcon').on('click',function(){

        $('ul#menu-top-menu').toggleClass('show-menu');

        $(this).toggleClass('fa-times fa-bars');
    })

        $('#menu-top-menu li').on('click',function(){

            $('ul#menu-top-menu').removeClass('show-menu')
            $('#menuIcon').toggleClass('fa-times fa-bars')
        });







  // smooth scroll //
  $(document).on('click', '.smoothScroll a, .smoothScroll', function(e){
      e.preventDefault();

      $('html, body').animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top
      }, 550);
  });


	$(function(){
			//add code to open and close the menu on smaller screens
		$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	  	var target = $(this.hash);
	  	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	  if (target.length) {
	    $('html, body').animate({
	      scrollTop: target.offset().top
	    }, 1500);
	    return false;
	  }
	}
	});

		console.log("working???");
});




