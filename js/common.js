$(document).ready(function(){
	/*	NavBar fix	*/
	let navbar = document.getElementById("nav");
	let menu = navbar.getElementsByClassName("menu");
	let link = navbar.getElementsByClassName("menu__link");

	menu_link();

	function menu_link() {

		let path = window.location.pathname;
		//path = path.substring(path.length - (path.length - 1));

		//let path = window.location.href;
		for(let i = 0; i < link.length; i++) {
			if(link[i].getAttribute('href') == path.split("/").pop()) { menu[i].classList.toggle('menu__active'); }
		}
	}

	for (let i = 0; i < menu.length; i++) {
		menu[i].addEventListener("mouseenter", function() {
			let current = document.getElementsByClassName('menu__active');
			current[0].classList.toggle('menu__active');
		});

		menu[i].addEventListener("mouseleave", function(){
			menu_link();
		});
	}

});

function about_item() {
	$('#ModalAboutItem').modal({
	  keyboard: true
	})
}

ymaps.ready(init);
function init(){ 
    var myMap = new ymaps.Map("map", {
        center: [54.990215, 73.365535],
        controls: ['zoomControl'],
        zoom: 10 //Уровень масштабирования от 0 (весь мир) до 19.
    });
}