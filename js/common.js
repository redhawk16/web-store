/*	NavBar fix	*/
var navbar = document.getElementById("nav");
var nav = navbar.getElementsByClassName("menu");

for (var i = 0; i < nav.length; i++) {
	nav[i].addEventListener("mouseover", function() {
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", " noactive");
	});
}

for (var i = 0; i < nav.length; i++) {
	nav[i].addEventListener("mouseout", function() {
		var current = document.getElementsByClassName("noactive");
		current[0].className = current[0].className.replace(" noactive", " active");
	});
}

/*	Owl-carousel initialize
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
	margin: 20,
	dots: false,
	nav: true,
	autoWidth: false,
	responsiveClass:true,
	responsive : {
	    0 : { items: 1 },
	    640 : { items: 2 },
	    768 : { items: 2 },
	    1000 : { items: 3 },
	    1280 : { items: 4 }
	},
	navText : [
		'<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>']
  });
});*/

/* Item select */
function selected_item() {
	alert("Аня крокусяга!");
}