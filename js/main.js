$(document).ready(function() {		
	
	
	// function windowSizeMobile(){
 //    	if ($(window).width() <= '768'){
 //    		$('.partnersSlider').slick('unslick');
 //        	$('.partnersSlider').slick({
 //    		    infinite: true,
 //    		    slidesToShow: 1,
 //    		    slidesToScroll: 1,
 //    		    prevArrow: '.prev3',
 //        		nextArrow: '.next3'
 //  		    });
 //  		    $('.certificatesSlider').slick({
 //    		    infinite: true,
 //    		    slidesToShow: 1,
 //    		    slidesToScroll: 1,
 //    		    prevArrow: '.prev2',
 //        		nextArrow: '.next2'
 //  		    });
 //    	} 
 //    }
 //    function windowSize(){
 //    	if ($(window).width() > '768'){
 //    		$('.partnersSlider').slick({
	// 			infinite: true,
	// 			slidesToShow: 4,
	// 			slidesToScroll: 1,
	// 			prevArrow: '.prev3',
	// 			nextArrow: '.next3'
	// 		});
 //    	}
 //    }

	// $(window).on('load resize',windowSizeMobile);
	// $(window).on('load resize',windowSize);


  	$('.headSlider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '.prev1',
		nextArrow: '.next1'
	});
	$('.commentSLider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: '.prev2',
		nextArrow: '.next2'
	});
	$('.partnersSlider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '.prev4',
		nextArrow: '.next4'
	});
	$('.certificatesSlider').slick({
	    infinite: true,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    prevArrow: '.prev3',
		nextArrow: '.next3'
	});
  	
	$(function() {
		$(window).scroll(function() {
			if($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		});
		$('#toTop').click(function() {
			$('body,html').animate({scrollTop:0},10);
		});
	});


























	// $('#toggle').click(function () {
	// 	$('#toggle').toggleClass('on');
	// 	if($('#toggle').hasClass('on')){
	// 		$('#aboutCompany').stop().fadeOut(50);
	// 	} else {
	// 		$('#aboutCompany').fadeIn(2000);
	// 	}
	// })



});