<?php require_once('./includes/connect.php'); ?>

<!DOCTYPE HTML>
<html>
	<?php require_once('./includes/header.php'); ?>
	</header>

		<div class="box-content contacts">
			<h2 class="title">Контакты</h2>

			<div class="contacts-left">
				<p style="text-indent: 1rem; margin-bottom: 2rem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, at! Accusantium obcaecati libero sequi molestiae. Quis adipisci accusamus a, officiis repellendus ad sapiente atque obcaecati. Exercitationem accusamus, dolorum nemo mollitia culpa laborum, officia consequuntur commodi saepe voluptatibus alias, nobis a.</p>
				<p style="font-weight: 600; margin-bottom: 2rem">Нужна помощь? Свяжитесь с нами!<br>
				<a class="email" href="mailto:pochekuev@me.com" style="font-weight: 400"><i class="fas fa-envelope"></i>pochekuev@me.com</a></p>
				<p style="font-weight: 600; margin-bottom: 2rem">Наш телефон для связи<br>
				<a class="phone" href="tel:89994574862" style="font-weight: 400"><i class="fas fa-mobile"></i>8 (999) 457 48-62</a><br></p>
				<p style="font-weight: 600; margin-bottom: 2rem">Мы в соц. сетях<br>
					<i class="fab fa-vk"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-facebook-f"></i></p>
				
			</div>
			
			<div class="contacts-right">
				<h4 style="font-weight: 600; margin-bottom: 1rem">Задайте свой вопрос!</h4>
				<form action="" class="contacts__form">
					<input type="text" placeholder="Имя">
					<input type="text" placeholder="Телефон">
					<input type="text" placeholder="yourmail@domain.com">
					<textarea cols="50" rows="5"></textarea>
					<button type="submit" class="btn btn-confirm contacts__btn">Отправить</button>
				</form>
			</div>

		</div>

		<?php require_once('./includes/footer.php') ?>
	</body>
</html>