<?php include('./includes/connect.php'); ?>

<!DOCTYPE HTML>
<html>
	<?php include_once('./includes/header.php'); ?>

			<!-- Carousel -->
			<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
					<li data-target="#slider" data-slide-to="1"></li>
					<li data-target="#slider" data-slide-to="2"></li>				
					<li data-target="#slider" data-slide-to="3"></li>
					<li data-target="#slider" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="assets/img/slider/1.png" class="d-block" alt="">
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

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2>Добро пожаловать!</h2>
					<p>Рада приветствовать вас на своем сайте.</p>
					<i class="fab fa-github-square"></i>
					
				</div>
			</div>
		</div>

		<?php include_once('./includes/footer.php') ?>
	</body>
</html>