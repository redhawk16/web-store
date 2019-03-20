document.body.onload = function() {
	setTimeout(function() {
		var preloader = document.getElementById('preloader');
		if(!preloader.classList.contains('preloader-done')){
			preloader.classList.add('preloader-done');
		}
	}, 1000); 
}

$(document).ready(function(){
	/*	NavBar fix	*/
	let navbar = document.getElementById("nav");
	let menu = navbar.getElementsByClassName("menu");
	let link = navbar.getElementsByClassName("menu__link");

	menu_link();

	function menu_link() {
		let path = window.location.pathname;
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

	//TODO: After checked on filter items add class .checkbox-label-active

	//Get params of the filter
	$('#btn-confirm').on('click', function() {
		//$('.items').empty();
		var checked = [];
		$('.checkbox:checked').each(function() {
				checked.push($(this).val());
		});
		if(checked != ''){
			var sort = checked.join('%');
			var noreload = 'yes';
			console.log(sort);
			//$("#fon").css({'display':'block'}); //отключение
			//$("#load").fadeIn(1000,function () { //anim load
				$.ajax({
				url: window.location,
				data: 'sort_by='+sort+'&noreload='+noreload,
				type: 'GET',
				success: function (html) {
					$(".content").html(html).hide().fadeIn(1000);
					//$("#fon").css({'display':'none'});
					//$("#load").fadeOut(1000);
				} 
				
				//});
			});
		}
		//console.log(checked);
	});

	//Reset params of the filter
	$('#btn-reset').on('click', function() {
		$('.checkbox:checked').each(function() {
			this.checked = false;
		});
	});

});

function about_item() {
	$('#ModalAboutItem').modal({
	  keyboard: true
	})
}

ymaps.ready(function (){ 
    var myMap = new ymaps.Map("map", {
        center: [54.990215, 73.365535],
        controls: ['zoomControl'],
        zoom: 10 //Уровень масштабирования от 0 (весь мир) до 19.
    });
});