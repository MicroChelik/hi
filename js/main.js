$(document).ready(function() {		
	
   	function windowSize(){
    	if ($(window).width() <= '960'){
    		$('.certificatesSlider').slick({
			    infinite: true,
			    slidesToShow: 1,
			    slidesToScroll: 1,
			    prevArrow: '.prev3',
				nextArrow: '.next3'
			});
    	} else {
    		$('.advantagesSlider').slick('unslick');
    	}
    }
    $(window).on('load resize',windowSize);


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
		nextArrow: '.next2',
		responsive: [
			{
				breakpoint: 960,
				settings: {
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					prevArrow: '.prev2',
					nextArrow: '.next2'
				}
			}
		]
	});
	$('.partnersSlider').slick({
	    infinite: true,
	    slidesToShow: 4,
	    slidesToScroll: 1,
	    prevArrow: '.prev4',
		nextArrow: '.next4',
	    responsive: [
			{
				breakpoint: 960,
				settings: {
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					prevArrow: '.prev4',
					nextArrow: '.next4'
				}
			}
		]
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




























});