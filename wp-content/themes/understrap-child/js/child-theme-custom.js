var playPause = anime({
	targets: "div.box",
	translateY: [{ value: 500, duration: 500 }, { value: 220, duration: 800 }],

	//translateX: [{ value: 500, duration: 500 }, { value: 220, duration: 800 }],
	rotate: {
		value: "1turn",
		easing: "easeInOutSine",
		duration: 1000
	},
	scale: {
		value: 2,
		duration: 2000
	},
	opacity: 0.8,
	delay: function(el, i, l) {
		return i * 300;
	},
	direction: "alternate",
	autoplay: false
	//loop: true,
	//direction: "reverse",
});

var svgAttributes = anime({
	targets: ".shape polygon",
	points: [
		{
			value:
				"70 41 118.574 59.369 111.145 132.631 60.855 84.631 20.426 60.369"
		},
		{
			value:
				"70 6 119.574 60.369 100.145 117.631 39.855 117.631 55.426 68.369"
		},
		{
			value:
				"70 57 136.574 54.369 89.145 100.631 28.855 132.631 38.426 64.369"
		},
		{
			value:
				"70 24 119.574 60.369 100.145 117.631 50.855 101.631 3.426 54.369"
		}
	],
	easing: "easeOutQuad",
	duration: 2000,
	loop: true
});

anime({
	targets: "#animiraj",
	translateX: 150, // Animate all divs translateX property to 250px
	scale: 2, // Animate all divs scale to 2
	rotate: "3turn" // Animate all divs rotation to 1 turn
});

var updateLogEl = document.querySelector("#update .current-time-log");
var progressLogEl = document.querySelector("#update .progress-log");

var update = anime({
	targets: "#callbacks .el",
	translateX: 250,
	delay: 2000,
	update: function(anim) {
		updateLogEl.value =
			"current time : " + Math.round(anim.currentTime) + "ms";
		progressLogEl.value = "progress : " + Math.round(anim.progress) + "%";
		if (Math.round(anim.progress) === 100) {
			console.log("yoo ooo");
		}
	}
});

var animateProgress = anime({
	targets: "progress",
	value: 100,
	duration: 35000,
	easing: "linear",
	autoplay: true,
	opacity: 0.2,
	loop: true
});

var promise = animateProgress.finished.then(logFinished);

function logFinished() {
	console.log("gotvo");
}

//https://github.com/terwanerik/ScrollTrigger

document.addEventListener("DOMContentLoaded", function() {
	var trigger = new ScrollTrigger({
		addHeight: true
	});
});



var finishedPromise = anime({
  targets: '#Capa_1 .krumpirici',
  translateY: [
  {value:-100, duration: 500},
  {value:0, duration: 500},
  ],
  opacity: [
  {value:0, duration: 500},
  {value:1, duration: 500},
  ],
 
  delay: function(el, i, l) {
    return i * 2000;
  }
});

var promise = finishedPromise.finished.then(logFinished);

function logFinished() {
	console.log("gotvo");
}

jQuery(document).ready(function($) {
	$(".single-item").slick({
		dots: true,
		autoplay: true,
		infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  centerPadding: '50px',

  

	});
});

/*document.querySelector("body").onmouseover = playPause.play;
document.querySelector("body").onclick = playPause.reverse;*/

// Setup isScrolling variable
/*var isScrolling;

// Listen for scroll events
window.addEventListener(
  "scroll",
  function(event) {
    // Clear our timeout throughout the scroll
    window.clearTimeout(isScrolling);
    playPause.play();
    // Set a timeout to run after scrolling ends
    isScrolling = setTimeout(function() {
      // Run the callback
      console.log("Scrolling has stopped.");
      playPause.reverse();
    }, 66);
  },
  false,
);*/

/*
window.onscroll = function() {
	myFunction();
	console.log("cesnjovke");
};

function myFunction() {
	if (window.pageYOffset > 150) {
		

		playPause.play();
	} else if (window.pageYOffset < 500) {
		playPause.reverse();
	}
}*/

//1

//2
/*jQuery(document).ready(function($) {
	// You can use the locally-scoped $ in here as an alias to jQuery.
	//Cache reference to window and animation items
	var $animation_elements = $(".animation-element");
	var $window = $(window);

	$window.on("scroll", check_if_in_view);

	function check_if_in_view() {
		var window_height = $window.height();
		var window_top_position = $window.scrollTop();
		var window_bottom_position = window_top_position + window_height;

		$.each($animation_elements, function() {
			var $element = $(this);
			var element_height = $element.outerHeight();
			var element_top_position = $element.offset().top;
			var element_bottom_position = element_top_position + element_height;

			//check to see if this current container is within viewport
			if (
				element_bottom_position >= window_top_position &&
				element_top_position <= window_bottom_position
			) {
				$element.addClass("in-view");
			} else {
				$element.removeClass("in-view");
			}
		});
	}
});*/
