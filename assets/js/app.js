
jQuery(document).ready(function ($) {
	/** Drop down menu making link active (check nav walker) **/

	$('.navbar-nav.dropdown').hover(function () {
		$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
	}, function () {
		$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
	});
	$('.navbar-nav .dropdown > a').click(function () {
		location.href = this.href;
	});
	// Bootstrap menu magic
	$(window).resize(function () {
		if ($(window).width() < 768) {
			$(".dropdown-toggle").attr('data-toggle', 'dropdown');
		} else {
			$(".dropdown-toggle").removeAttr('data-toggle dropdown');
		}
	});
	/* Mmenu  */
	$("#menu").mmenu({
		extensions: ["shadow-panels", "fx-panels-slide-100", "border-none", "theme-black", "fullscreen"],
		offCanvas: {
			//  position    : "right"
		},
		navbars: {
			content: ["prev", "close"],
			height: 2
		},
		setSelected: true,
	}, {});

	/* vario page */
	$('.vario_backgroundx').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: false,
		dots: false,
		infinate: false,
		speed: 500,
		fade: true,
		cssEase: 'linear'

	});

	$(function () {

		$.fn.centerMe = function () {
			$(this).css({
				'left': ($(window).width() - $(this).width()) / 2,
			//	'right': ($(window).width() - $(this).width()) / 2,
			});
		};
		
		//$('.thinLine').centerMe();
	});
	var href = path.templateUrl;
	var left = href+'/assets/images/arrow-left.png';
	var right = href+'/assets/images/arrow-right.png';
	/* new style doors */
	/*$('.cat-circles').slick({
		slidesToShow:7,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed: 2000,
		prevArrow:"<img class='a-left control-c prev slick-prev' src='"+left+"'>",
		nextArrow:"<img class='a-right control-c next slick-next' src='"+right+"'>",
		responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: false
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		  ]
	});*/
	$('.ytp-large-play-button').hide();
	/* single product */

	console.info(left);
	$('.config_rep').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed: 7000,
		arrows: true,
		dots: true,
		infinate: false,
		prevArrow:"<img class='a-left control-c prev slick-prev' src='"+left+"'>",
		nextArrow:"<img class='a-right control-c next slick-next' src='"+right+"'>"
	});

	$('.handles_img').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 7000,
		arrows: true,
		dots: false,
		infinate: false,
		prevArrow:"<img class='a-left control-c prev slick-prev' src='"+left+"'>",
		nextArrow:"<img class='a-right control-c next slick-next' src='"+right+"'>"
	
	});
	$('.taxonomy_background').slick({
		dots: false,
		arrows: false,
		autoplay: true,
		autoplaySpeed:1000,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear'
	})
	$('#styles').on('click', function(){
		//
		$(this).removeClass('change').siblings('button').addClass('change');

		$('#style-wrapper').show(); 
		$('#wood-wrapper').hide(); 
	});
	$('#woods').on('click', function(){
		//
		$(this).removeClass('change').siblings('button').addClass('change');
		$('#style-wrapper').hide();
		$('#wood-wrapper').show();  
	});
	//$('[data-toggle="tooltip"]').tooltip();  
	$('.icon').on('click', function(e){
		$(this).hide();
		
			   $("#video")[0].src += "&autoplay=1";
			  // e.preventDefault();
			
	});

	// fllow scroll 
	
});

jQuery(document).ready(function($){
	
		//trigger slide change on click
		$('.animate a').each(function(){
			$(this).click(function(event){      
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top - 140}, 500);
				$('.animate a').removeClass('active');
				   var sectionLab = $(this).attr('class');
				   $('.' + sectionLab).addClass('active');
			});
		});
	
		//trigger nav change as page scrolls
		$('.section').waypoint(function(direction) {
			var triggerID = $(this).attr('id');
			var prTritterID = $(this).prev().attr('id');
	
			$('nav ul li a').removeClass('active');
			
			if(direction == 'down'){
				$('.' + triggerID + '-nav').addClass('active');
	
			}else{
				$('.' + prTritterID + '-nav').addClass('active');
			}   
		},{
			offset:'140px'
		});
	
		//scroll animate
		$('.scroll-animate').viewportChecker({
			classToAdd: 'sa-visible',
			offset: 200
		});
		
		//add active class to parents li of dropdown submenu 
		$('.active').parents('.dropdown').addClass('addContent');
		if($('.navbar-nav').children('li.dropdown').hasClass('active')){
			$('.active').addClass('addContent');
		}
		if($('.navbar-nav').children('.page_item').hasClass('active')){
			$('.page_item.active').addClass('addContent');
		}

		//fancybox for prices
		$('.fancybox-price').fancybox({
            autoSize: false,
            fitToView: true,
            closeClick: false,
            openEffect: 'fade',
            closeEffect: 'fade',
            prevEffect: 'fade',
            nextEffect: 'fade',
            scrolling: 'no',
            height: '300px',
            maxHeight: '300px',
            autoWidth: true,
        });
	
	})