<?php include('./includes/connect.php'); ?>

<!DOCTYPE HTML>
<html>
	<?php include_once('./includes/header.php'); ?>

		<div class="box">
			<aside id="sidebar" class="sidebar">
				<div class="aheader">
					<p class="filter">Фильтр</p>
				</div>
				<!-- /.aheader -->
				<div class="acpu">
					<p class="article">Процессоры</p>
					<?php
						$cpus = $connect->query('SELECT * FROM store GROUP BY name DESC');
						if($cpus) { foreach ($cpus as $cpu) { ?>
						<label class="checkbox-label">
							<input type="checkbox" class="checkbox" name="i9" value="<?="{$cpu['name']}"?>">
							<span class="checkmark"></span>
							<?="{$cpu['name']}"?>
						</label>
						<?php } } ?>
				</div>
				<!-- /.aproc -->	
				<div class="agen">
					<p class="article">Поколение</p>
					<?php
						$gens = $connect->query('SELECT * FROM store GROUP BY model');
						if($gens) { foreach ($gens as $gen) { ?>
						<label class="checkbox-label">
							<input type="checkbox" class="checkbox" name="<?="{$gen['model']}"?>" value="<?="{$gen['model']}"?>">
							<span class="checkmark"></span>
							<?="{$gen['model']}"?>
						</label>
					<?php } } ?>
				</div>
				<!-- /.agen -->
				<div class="afooter">
					<button type="button" id="btn-reset" class="btn btn-dark btn-reset">Сбросить</button>
					<button type="button" id="btn-confirm" class="btn btn-confirm">Применить</button>
				</div>
				<!-- /.afooter -->	
			</aside>
			<!-- /.sidebar -->

			<div class="content">
				<div class="items">
					<?php
						$items = $connect->query('SELECT * FROM store');
						if($items) { foreach ($items as $item) { ?>
						<div class="item-info">
							<div class="item-card">
								<div class="ic-front">
									<div class="inner">
										<p><?="{$item['name']}" ?></p>
												<span><?="{$item['model']}" ?></span>
									</div>
								</div>
								<div class="ic-back">
									<div class="inner">
										<p><?="{$item['description']}" ?></p>
									</div>
								</div>
							</div>
							<div class=item-price>
								<div class="price-div">
									<i class="fas fa-shopping-cart"></i>
									<p class="price-p"><?="{$item['price']}" ?> руб.</p>
									<i onclick="about_item()" class="fas fa-question"></i>
								</div>
								<button type="button" class="btn btn-dark btn-cust" data-toggle="modal" data-target="#ModalBuyItem">Оформить</button>
							</div>	
						</div>
					<?php } } ?>
				</div>
				<!-- /.items -->	

				<div class="pagination">
					<a href="" class="pagination__number pagination__number-active">1</a>
					<a href="" class="pagination__number">2</a>
				</div>
				<!-- /.pagination -->	
			</div>
			<!-- /.content -->
		</div>

		<?php include_once('./includes/footer.php'); ?>
	</body>

	<?php include('./includes/modal_buy.php'); ?>
	<?php include('./includes/modal_about.php'); ?>
</html>