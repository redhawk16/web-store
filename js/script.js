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

/*	Owl-carousel initialize	*/
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
	margin: 5,
	dots: false,
	nav: true,
	autoWidth:true,
	navText : [
		'<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>']
  });
});

/* Item select */
function select_item() {
	alert("Аня крокусяга!");
}