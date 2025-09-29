$(document).ready(function () {

  // sticky-menu
  $(window).scroll(function () {
	if ($(window).scrollTop() > 20) {
	  $(".main-menu").addClass('sticky');
	} else {
	  $(".main-menu").removeClass('sticky');
	}
  });

  //BackToTop
  $(document).ready(function () {
	$(window).scroll(function () {
	  if ($(this).scrollTop() > 50) {
		$('#back_to_top').fadeIn();
	  } else {
		$('#back_to_top').fadeOut();
	  }
	});
	// scroll body to 0px on click
	$('#back_to_top').click(function () {
	  $('#back-to-top').tooltip('hide');
	  $('body,html').animate({
		scrollTop: 0
	  }, 800);
	  return false;
	});

	$('#back_to_top').tooltip('show');

  });
});

// banner-slider-play-button-js-here
$('#toggle').click(function () {
  if ($(this).hasClass('fa-pause')) {
    $('.banner-slider').slick('slickPause')
    $(this).removeClass('fa-pause');
    $(this).addClass('fa-play');
  } else {
    $('.banner-slider').slick('slickPlay')
    $(this).removeClass('fa-play').addClass('fa-pause')
  }
});

// back-to
var btn = $('#button');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
	btn.addClass('show');
  } else {
	btn.removeClass('show');
  }
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '300');
});

// counter-js
// $(document).ready(function ($) {
//   function isScrolledIntoView(elem) {
// 	var docViewTop = $(window).scrollTop();
// 	var docViewBottom = docViewTop + $(window).height();
// 	var elemTop = $(elem).offset().top;
// 	var elemBottom = elemTop + $(elem).height();
// 	return ((elemBottom <= docViewBottom));
//   }
//   function countUp() {
// 	$('.counter').each(function () {
// 	  var $this = $(this),
// 		countTo = $this.attr('data-count');
// 	  ended = $this.attr('ended');

// 	  if (ended != "true" && isScrolledIntoView($this)) {
// 		$({ countNum: $this.text() }).animate({
// 		  countNum: countTo
// 		},
// 		  {
// 			duration: 2500,
// 			easing: 'swing',
// 			step: function () {
// 			  $this.text(Math.floor(this.countNum));
// 			},
// 			complete: function () {
// 			  $this.text(this.countNum);
// 			}
// 		  });
// 		$this.attr('ended', 'true');
// 	  }
// 	});
//   }
  //Start animation on page-load
//   if (isScrolledIntoView(".counter")) {
// 	countUp();
//   }
  //Start animation on screen
//   $(document).scroll(function () {
// 	if (isScrolledIntoView(".counter")) {
// 	  countUp();
// 	}
//   });


// hero-slider-js-here
$(document).ready(function () {
  $('.hero-slider').slick({
	dots: true,
	fade: true,
	arrows: false,
	infinite: true,
	speed: 1000,
	lazyLoad: 'ondemand',
	autoplay: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	responsive: [
	  {
		breakpoint: 1023,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  infinite: true,
		  dots: true,
		}
	  },
	  {
		breakpoint: 992,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
		}
	  },
	  {
		breakpoint: 768,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
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

	]

  }).slickAnimation();
});

// slider
$(document).ready(function () {
  $('.testimonials-slider').slick({
	dots: true,
	arrows: false,
	infinite: true,
	autoplay: true,
	autoplaySpeed: 2000,
	prevArrow: '<span class="priv_arrow"><i class="fas fa-chevron-left"></i></span>',
	nextArrow: '<span class="next_arrow"><i class="fas fa-chevron-right"></i></span>',
	slidesToShow: 1,
	slidesToScroll: 1,
	responsive: [
	  {
		breakpoint: 1023,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  infinite: false,
		}
	  },
	  {
		breakpoint: 992,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
		}
	  },
	  {
		breakpoint: 768,
		settings: {
		  slidesToShow: 1,
		  slidesToScroll: 1
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

	]

  });
});




