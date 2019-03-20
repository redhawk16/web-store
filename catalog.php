<?php 
	include('./includes/connect.php'); 
	include('./includes/functions.php');

	$connect = get_connect();
	if($_GET['page'] == 0) { header("Location:catalog.php?page=1"); }

	if(isset($_GET['sort_by'])) {
		//echo $_GET['sort_by'];
		$str = strip_tags($_GET['sort_by']);
		$sort = explode('%', $str);

		if(isset($_GET['noreload'])) {
			include('./includes/items.php');
			exit();
		}

	} else $sort = [];  // In $sort send array of filtering items; 
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
				<div class="acpu">
					<p class="article">Процессоры</p>
					<?php
						$cpus = $connect->query('SELECT * FROM store GROUP BY model DESC');
						if($cpus) { foreach ($cpus as $cpu) { ?>
						<label class="checkbox-label <?="{$cpu['model']}"?>">
						<?php if(isset($_GET['sort_by'])) {
							$str = strip_tags($_GET['sort_by']);
							$search = explode('%', $str);			
							if(array_search($cpu['model'], $search) === false) { ?>
								<input type="checkbox" class="checkbox" name="<?="{$cpu['name']} {$cpu['model']}"?>" value="<?="{$cpu['model']}"?>">
							<?php } else { ?><input type="checkbox" class="checkbox" checked="checked" name="<?="{$cpu['name']} {$cpu['model']}"?>" value="<?="{$cpu['model']}"?>"><?php } 
						} else { ?>
							<input type="checkbox" class="checkbox" name="<?="{$cpu['name']} {$cpu['model']}"?>" value="<?="{$cpu['model']}"?>">
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
						$gens = $connect->query('SELECT * FROM store GROUP BY generation');
						if($gens) { foreach ($gens as $gen) { ?>
						<label class="checkbox-label <?="{$gen['generation']}"?>">
						<?php if(isset($_GET['sort_by'])) {
							$str = strip_tags($_GET['sort_by']);
							$search = explode('%', $str);				
							if(array_search($gen['generation'], $search) === false) { ?>
								<input type="checkbox" class="checkbox" name="<?="{$gen['generation']}"?>" value="<?="{$gen['generation']}"?>">
							<?php } else { ?><input type="checkbox" class="checkbox" checked="checked" name="<?="{$gen['generation']}"?>" value="<?="{$gen['generation']}"?>"><?php }
						} else { ?>
							<input type="checkbox" class="checkbox" name="<?="{$gen['generation']}"?>" value="<?="{$gen['generation']}"?>">
						<?php }?>
							<span class="checkmark"></span>
							<?="{$gen['generation']}"?>
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
				<?php include('./includes/items.php'); ?>
			</div>
			<!-- /.content -->
		</div>

		<?php include_once('./includes/footer.php'); ?>
	</body>

	<?php include('./includes/modal_buy.php'); ?>
	<?php include('./includes/modal_about.php'); ?>
</html>