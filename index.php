<?php require_once('./includes/connect.php'); ?>

<!DOCTYPE HTML>
<html>
	<?php require_once('./includes/header.php'); ?>

			<!-- Carousel -->
			<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
					<li data-target="#slider" data-slide-to="1"></li>
					<li data-target="#slider" data-slide-to="2"></li>				
					<li data-target="#slider" data-slide-to="3"></li>
					<li data-target="#slider" data-slide-to="4"></li>
					<li data-target="#slider" data-slide-to="5"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="assets/img/slider/1.jpg" class="d-block" alt="">
						<div class="carousel-caption d-none d-md-block">
							<h5>Процессоры Intel</h5>
							<p>В нашем каталоге товаров, широко представлены процессоры Intel!</p>
							<button type="button" class="btn btn-light">Перейти в каталог</button>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/img/slider/2.jpg" class="d-block" alt="">
						<div class="carousel-caption d-none d-md-block">
							<h5>Название</h5>
							<p>Описание</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/img/slider/3.jpg" class="d-block" alt="">
						<div class="carousel-caption d-none d-md-block">
							<h5>Название</h5>
							<p>Описание</p>
						</div>
					</div>			
					<div class="carousel-item">
						<img src="assets/img/slider/4.jpg" class="d-block" alt="">
						<div class="carousel-caption d-none d-md-block">
							<h5>Название</h5>
							<p>Описание</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/img/slider/5.jpg" class="d-block" alt="">
						<div class="carousel-caption d-none d-md-block">
							<h5>Название</h5>
							<p>Описание</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="assets/img/slider/6.jpg" class="d-block" alt="">
						<div class="carousel-caption d-none d-md-block">
							<h5>Название</h5>
							<p>Описание</p>
						</div>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#slider" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</header>

		<div class="box-content">
			<div class="welcome contents">
				<h2 class="title">Добро пожаловать!</h2>
				<p class="text">Мы рады приветствовать Вас на нашем сайте. Надеемся, что знакомство с нашей Интернет-витриной будет для вас не только интересным, но и полезным.
				Мы слишком давно на рынке и не пользуемся услугами посредников. Это дает нам возможность не включать в стоимость товара затраты на их услуги. Только прямое сотрудничество с производителями, только адекватные цены!
				Все товары хранятся на собственном складе, что позволяет клиентам быть уверенным в их наличии, а нам – оперативно доставлять покупателям.
				По любым интересующим вопросам Вы можете обратиться к нашим менеджерам, которые с радостью Вам помогут!
				Сайт оборудован удобным фильтром, с легкостью сортируйте товары!
				Приглашаем за покупками! Выгодно и Удобно!</p>
			</div>

			<div class="whywe contents">
				<h2 class="title">Почему мы?</h2>
				<div class="whywe-items">
					<div class="whywe-item">
						<i class="whywe-item__img fas fa-balance-scale"></i>
						<h6>Честность</h6>
						<p class="text">Внимание и подход к каждому клиенту и предельная честность с партнерами. Все товары на 100% соответсвуют спецификации и поставляются клиентам ровно в оговренные сроки.</p>
					</div>
					<div class="whywe-item">
						<i class="whywe-item__img fas fa-award"></i>
						<h6>Качество</h6>
						<p class="text">Наши клиенты получают высокое качество обслуживания и помощь на всех этапах. Мы гарантируем качество наших товаров и предоставляем гарантию сроком на один год. Мы отвечаем за обязательства, в том числе по сервисному и гарантийному обслуживанияю</p>
					</div>
					<div class="whywe-item">
						<i class="whywe-item__img fas fa-bolt"></i>
						<h6>Скорость</h6>
						<p class="text">Наша компания гарантирует максимально быструю и удобную доставку купленного товара.</p>
					</div>
				</div>
			</div>
		</div>

		<?php require_once('./includes/footer.php') ?>
	</body>
</html>