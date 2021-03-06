$(document).ready(function() {		
	
	$('#profile').click(function(){
		$(this).addClass('active');
		$('#availableProgramms').removeClass('active');
		$('.availableProgramms').css('display', 'none');
		$('.programms').css('display', 'none');
		$('.profile').css('display', 'flex');
	});
	$('#availableProgramms').click(function(){
		$(this).addClass('active');
		$('#profile').removeClass('active');
		$('.availableProgramms').css('display', 'flex');
		$('.programms').css('display', 'flex');
		$('.profile').css('display', 'none');
	});

	$('.testMenuItem').click(function(){
		if($(this).find(".testMenuItemToggle").css('display') == "none"){
			$(this).find(".testMenuItemToggle").slideToggle( "slow" );
		} else {
			$(this).find(".testMenuItemToggle").slideToggle( "slow" );
		}
	});

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
  	
	$(function(){
    // global variables
    captchaResized = false;
    captchaWidth = 304;
    captchaHeight = 78;
    captchaWrapper = $('#contactsPageCaptcha');
    captchaElements = $('#rc-imageselect, .g-recaptcha');

    resizeCaptcha();
    $(window).on('resize', function() {
            resizeCaptcha();
        });
    });

    $(function(){
    // global variables
    captchaResized = false;
    captchaWidth = 304;
    captchaHeight = 78;
    captchaWrapper = $('#thisEducationProgrammCaptcha');
    captchaElements = $('#rc-imageselect, .g-recaptcha');

    resizeCaptcha();
    $(window).on('resize', function() {
            resizeCaptcha();
        });
    });
    
    function resizeCaptcha() {
        if (captchaWrapper.width() >= captchaWidth) {
            if (captchaResized) {
                captchaElements.css('transform', '').css('-webkit-transform', '').css('-ms-transform', '').css('-o-transform', '').css('transform-origin', '').css('-webkit-transform-origin', '').css('-ms-transform-origin', '').css('-o-transform-origin', '');
                captchaWrapper.height(captchaHeight);
                captchaResized = false;
            }
        } else {
            var scale = (1 - (captchaWidth - captchaWrapper.width()) * (0.05/15));
            captchaElements.css('transform', 'scale('+scale+')').css('-webkit-transform', 'scale('+scale+')').css('-ms-transform', 'scale('+scale+')').css('-o-transform', 'scale('+scale+')').css('transform-origin', '0 0').css('-webkit-transform-origin', '0 0').css('-ms-transform-origin', '0 0').css('-o-transform-origin', '0 0');
            captchaWrapper.height(captchaHeight * scale);
            if (captchaResized == false) captchaResized = true;
        }
    };

    

});


$('#passingTestPage').ready(function() {
	var seconds = 8*60+1, h,m,s,t;
	function countDown() {
	    if (seconds > 0) {
	            seconds --;
	                h = seconds/3600 ^ 0,
	                m = (seconds-h*3600)/60 ^ 0,
	                s = seconds-h*3600-m*60,
	                time = (m<10?"0"+m:m)+":"+(s<10?"0"+s:s);
	            $(".timerText").text(time);
	    } 
	    setTimeout(function() {
	        countDown();
	    }, 1000);
	}
	$(function() {
	  countDown()
	});
});

$('#news').ready(function() {
	$(function(){
	    news = $('.news');
	    newses = [];
	    $(news).each(function(index, newsBlock) {
	      newses.push(newsBlock);
	    });
	    $("#pager").pagination({
	      pageSize: 12,
	      dataSource: newses,
	      callback: function(data, pagination) {
	        var html = simpleTemplating(data);
	        $('#data').html(html);
	      },
	      showNavigator: true,
	      className: 'paginationjs-theme-blue paginationjs-small'
	    });

	    function simpleTemplating(data) {
	        var html = '';
	        $.each(data, function(index, item){
	          var content = item.outerHTML;
	            html += content;
	        });
	        html += '';
	        return html;
	    }
	});
});

$('#q-a').ready(function() {
	$(function(){
	    question = $('.question');
	    questions = [];
	    $(question).each(function(index, questionCard) {
	      questions.push(questionCard);
	    });
	    $("#pagerQuestions").pagination({
	      pageSize: 8,
	      dataSource: questions,
	      callback: function(data, pagination) {
	        var html = simpleTemplating(data);
	        $('#accordionExample').html(html);
	      },
	      showNavigator: true,
	      className: 'paginationjs-theme-blue paginationjs-small'
	    });

	    function simpleTemplating(data) {
	        var html = '';
	        $.each(data, function(index, item){
	          var content = item.outerHTML;
	            html += content;
	        });
	        html += '';
	        return html;
	    }
	});
});

$('#commentsPage').ready(function() {
	$(function(){
	    comment = $('.comment');
	    comments = [];
	    $(comment).each(function(index, commentCard) {
	      comments.push(commentCard);
	    });
	    $("#pagerComments").pagination({
	      pageSize: 5,
	      dataSource: comments,
	      callback: function(data, pagination) {
	        var html = simpleTemplating(data);
	        $('#dataComments').html(html);
	      },
	      showNavigator: true,
	      className: 'paginationjs-theme-blue paginationjs-small'
	    });

	    function simpleTemplating(data) {
	        var html = '';
	        $.each(data, function(index, item){
	          var content = item.outerHTML;
	            html += content;
	        });
	        html += '';
	        return html;
	    }
	});
});