document.body.onload = function() {
	setTimeout(function() {
		var preloader = document.getElementById('preloader');
		if(!preloader.classList.contains('preloader-done')){
			preloader.classList.add('preloader-done');
			$('#loader').fadeOut(1000, function() {
				$('#preloader').remove();
			});
		}
	}, 1000); 
}

$(document).ready(function(){
	//Navigation Bar Fix
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

	//TODO: GET запрос

	//Filter Submit Button
	$('#btn-confirm').on('click', function() {
		var data = $("#filter").serialize();
		$.ajax({
			url: './includes/items.php',
			data: data,
			type: 'GET',
			success: function (html) {
				window.history.replaceState({}, "filter", window.location.pathname + "?" + data);
				
				$(".content").fadeOut(500, function() {
					$(".content").empty().append( "<div id=\"loader\"></div>" ).fadeIn(500, function() {
							$("#loader").delay(200).fadeOut(800, function() { show(); });
					});
				});

				function show() {
					$(".content").html(html).hide().fadeIn(500); 
				}
			}
		});
	});

	//Filter Reset Button
	$('#btn-reset').on('click', function() {
		$('.checkbox:checked').each(function() {
			this.checked = false;
		});
	});

});

function about_item(e) {
	var id = ($(e).parent().parent().parent()).attr('id');

	$.post('./includes/getContent.php', { id: id }, 
	function(html){
		$('.modal-aboutitem-content').html(html);
		$('#ModalAboutItem').modal({
			keyboard: true
		});
	}).fail(function(){
			console.log("error");
	});
}

ymaps.ready(function (){ 
    var myMap = new ymaps.Map("map", {
        center: [54.990215, 73.365535],
        controls: ['zoomControl'],
        zoom: 10 //Уровень масштабирования от 0 (весь мир) до 19.
    });
});