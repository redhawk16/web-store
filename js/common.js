$(document).ready(function(){
/*	NavBar fix	*/
var navbar = document.getElementById("nav");
var nav = navbar.getElementsByClassName("menu");

/* Add class .active to current web-page */
/*Получаем адрес текущей страницы и отрезаем все лишнее
По циклу пробегаем все меню до совпадения адреса
Присваимаем найденому элементу меню клас .active*/

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