$(document).ready(function() {		
	
   // 	function windowSize(){
   //  	if ($(window).width() <= '1200'){
   //  		$('.certificatesSlider').slick({
			//     infinite: true,
			//     slidesToShow: 1,
			//     slidesToScroll: 1,
			//     dots: true,
			// 	dotsClass: "my-dotsDark",
			//     prevArrow: '.prev3',
			// 	nextArrow: '.next3'
			// });
   //  	} else {
   //  		$('.advantagesSlider').slick('unslick');
   //  	}
   //  }
   //  $(window).on('load resize',windowSize);

  	$('.headSlider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		dotsClass: "my-dots",
		prevArrow: '.prev1',
		nextArrow: '.next1'
	});
	$('.commentSLider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: true,
		dotsClass: "my-dotsDark",
		prevArrow: '.prev2',
		nextArrow: '.next2',
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					infinite: true,
					slidesToShow: 2,
					slidesToScroll: 1,
					prevArrow: '.prev2',
					nextArrow: '.next2'
				}
			},
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
	$('.certificatesSlider').slick({
		infinite: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		responsive: [
			{
				breakpoint: 6000,
				settings: "unslick"
			},
			{
				breakpoint: 960,
				settings: {
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true,
					dotsClass: "my-dotsDark",
				}
			}
		]
	});
	$('.partnersSlider').slick({
	    infinite: true,
	    slidesToShow: 4,
	    slidesToScroll: 1,
	    dots: true,
		dotsClass: "my-dotsDark",
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