<?php 
	include_once('./includes/connect.php'); 
	include_once('./includes/functions.php');

	$connect = get_connect();
	if($_GET['page'] == 0) { header("Location:catalog.php?page=1"); }
?>

<!DOCTYPE HTML>
<html>
	<?php include_once('./includes/header.php'); ?>
	</header>

		<div class="box">
			<aside id="sidebar" class="sidebar">
				<div class="aheader">
					<p class="filter">Фильтр</p>
				</div>
				<!-- /.aheader -->

				<form action="" id="filter" method="GET">
					<input type="hidden" name="page" value="1">
					<div class="acpu">
						<p class="article">Процессоры</p>
						<?php
							$cpus = $connect->query('SELECT `model`, `name` FROM `store` GROUP BY `model` DESC');
							if($cpus) { foreach ($cpus as $cpu) { ?>
							<label class="checkbox-label <?="{$cpu['model']}"?>">
							<?php if(isset($_GET['cpu'])) {		
								if(array_search($cpu['model'], $_GET['cpu']) === false) { ?>
									<input type="checkbox" class="checkbox" name="cpu[]" value="<?="{$cpu['model']}"?>">
								<?php } else { ?><input type="checkbox" class="checkbox" checked="checked" name="cpu[]" value="<?="{$cpu['model']}"?>"><?php } 
							} else { ?>
								<input type="checkbox" class="checkbox" name="cpu[]" value="<?="{$cpu['model']}"?>">
							<?php } ?>

								<span class="checkmark"></span>
								<?="{$cpu['name']} {$cpu['model']}"?>
							</label>
							<?php } } ?>
					</div>
					<!-- /.aproc -->	
					<div class="agen">
						<p class="article">Поколение</p>
						<?php
							$gens = $connect->query('SELECT `generation` FROM `store` GROUP BY `generation`');
							if($gens) { foreach ($gens as $gen) { ?>
							<label class="checkbox-label <?="{$gen['generation']}"?>">
							<?php if(isset($_GET['gen'])) {			
								if(array_search($gen['generation'], $_GET['gen']) === false) { ?>
									<input type="checkbox" class="checkbox" name="gen[]" value="<?="{$gen['generation']}"?>">
								<?php } else { ?><input type="checkbox" class="checkbox" checked="checked" name="gen[]" value="<?="{$gen['generation']}"?>"><?php }
							} else { ?>
								<input type="checkbox" class="checkbox" name="gen[]" value="<?="{$gen['generation']}"?>">
							<?php }?>
								<span class="checkmark"></span>
								<?="{$gen['generation']}"?>
							</label>
						<?php } } ?>
					</div>
					<!-- /.agen -->
				</form>
				<div class="afooter">
					<button type="button" id="btn-reset" class="btn btn-dark btn-reset">Сбросить</button>
					<button type="submit" id="btn-confirm" class="btn btn-confirm">Применить</button>
				</div>
				<!-- /.afooter -->
			</aside>
			<!-- /.sidebar -->

			<div class="content">
				<?php include_once('./includes/items.php'); ?>
			</div>
			<!-- /.content -->
		</div>

		<?php include_once('./includes/footer.php'); ?>
	</body>

	<?php include_once('./includes/modal_buy.php'); ?>
	<?php include_once('./includes/modal_about.php'); ?>
</html>