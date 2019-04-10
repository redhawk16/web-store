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
							<h5>Название</h5>
							<p>Описание</p>
							<button type="button" class="btn btn-light">Light</button>
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
				<p class="text">Наша компания занимается... Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Продолжил предупредила бросил до языком, вершину букв обеспечивает своих от всех меня единственное не вдали. Она предупредила которой имеет инициал буквенных вершину рыбного что проектах выйти, рот переписали буквоград его заманивший, букв алфавит дорогу знаках домах страну дороге агентство предупреждал текстов ее своих подпоясал. Последний вдали продолжил скатился точках текстов речью строчка большой семантика переписали составитель одна но которой ipsum запятых которое свой пустился использовало повстречался, там снова языкового рыбного заглавных.</p>
			</div>

			<div class="whywe contents">
				<h2 class="title">Почему мы?</h2>
				<div class="whywe-items">
					<div class="whywe-item">
						<i class="whywe-item__img fas fa-balance-scale"></i>
						<h6>Честность</h6>
						<p class="text">Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные тексты. За буквоград путь, подпоясал оксмокс образ семь моей реторический правилами его, рекламных раз переписывается которое выйти, обеспечивает послушавшись имеет? Коварных.</p>
					</div>
					<div class="whywe-item">
						<i class="whywe-item__img fas fa-award"></i>
						<h6>Качество</h6>
						<p class="text">Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные тексты. За буквоград путь, подпоясал оксмокс образ семь моей реторический правилами его, рекламных раз переписывается которое выйти, обеспечивает послушавшись имеет? Коварных.</p>
					</div>
					<div class="whywe-item">
						<i class="whywe-item__img fas fa-bolt"></i>
						<h6>Скорость</h6>
						<p class="text">Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные тексты. За буквоград путь, подпоясал оксмокс образ семь моей реторический правилами его, рекламных раз переписывается которое выйти, обеспечивает послушавшись имеет? Коварных.</p>
					</div>
				</div>
			</div>
		</div>

		<?php require_once('./includes/footer.php') ?>
	</body>
</html>