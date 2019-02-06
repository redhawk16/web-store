var navbar = document.getElementById("nav");
var nav = navbar.getElementsByClassName("menu");

for (var i = 0; i < nav.length; i++) {
	nav[i].addEventListener("mouseover", function() {
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
	});
}

for (var i = 0; i < nav.length; i++) {
	nav[i].addEventListener("mouseout", function() {
		nav[0].className = nav[0].className.replace(" active", "");
		nav[0].className += " active";
	});
}