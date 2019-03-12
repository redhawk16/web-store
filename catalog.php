<!DOCTYPE HTML>
<html>
	<? include_once 'header.php' ?>

		<div class="container">
			<div class="row">
				<div class="col-sm-12 items">
				<?php
				$host = 'localhost';  // Хост, у нас все локально
				$user = 'u999451g_bd';    // Имя созданного вами пользователя
				$pass = '1aGSa6De'; // Установленный вами пароль пользователю
				$db_name = 'u999451g_bd';   // Имя базы данных
				$link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

				// Ругаемся, если соединение установить не удалось
				if (!$link) {
					echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
					exit;
				}

				$query ="SELECT name, model, description, ammount, price FROM store";
				$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
				if($result) {
					while ($row = mysqli_fetch_row($result)) { echo
					"<div class=\"item-info\">
						<div class=\"item-card\">
							<div class=\"ic-front\">
								<div class=\"inner\">
									<p>$row[0]</p>
				      				<span>$row[1]</span>
								</div>
							</div>
							<div class=\"ic-back\">
								<div class=\"inner\">
								  <p>$row[2]</p>
								</div>
							</div>
						</div>
						<div class=\"item-price\">
							<div class=\"price-div\">
								<i class=\"fas fa-shopping-cart\"></i>
								<p class=\"price-p\">$row[4] руб.</p>
								<i onclick=\"about_item()\" class=\"fas fa-question\"></i>
							</div>
							<button type=\"button\" class=\"btn btn-dark btn-cust\" data-toggle=\"modal\" data-target=\"#ModalBuyItem\">Купить</button>
						</div>	
					</div>";
					} } ?>
				</div>
			</div>
		</div>

		<? include_once 'footer.php' ?>



		<!-- Modal About Item -->
		<div class="modal fade" id="ModalAboutItem" tabindex="-1" role="dialog" aria-labelledby="ModalAboutItem" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="ModalAboutItem">Название товара</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <p>Описание товара<br>Тех. характеристики<br>Цена</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Modal Buy Item -->
		<div class="modal fade" id="ModalBuyItem" tabindex="-1" role="dialog" aria-labelledby="ModalBuyItem" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="ModalBuyItem">Оформление заказа</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
			  <form action="">
			    	<div class="modal-body">
				        <div class="form-group row">
				            <label for="recipient-name" class="col-sm-4 col-form-label">Ваше Имя:</label>
				            <div class="col-sm-8"><input type="text" class="form-control" id="recipient-name"required></div>
			        	</div>
						<div class="form-group row">
				            <label for="recipient-surname" class="col-sm-4 col-form-label">Ваша Фамилия:</label>
				            <div class="col-sm-8"><input type="text" class="form-control" id="recipient-surnamename" required></div>
				        </div>
						<div class="form-group row">
			            <label for="email-text" class="col-sm-4 col-form-label">Ваш email:</label>
			            <div class="col-sm-8"><input type="text" class="form-control" id="email-text" required></input></div>
			            </div>
			        </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
			        <button type="submit" class="btn btn-primary">Оформить</button>
			      </div>
		      </form>
		    </div>
		  </div>
		</div>		
	</body>
</html>