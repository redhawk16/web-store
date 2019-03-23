<?php 
	include_once('connect.php'); 
	include_once('functions.php');

	$connect = get_connect();
?>
<div class="items">
	<?php
		$items = $functions->get_items($connect);

		if($items) { foreach ($items as $item) {  ?>
		<div id="<?="{$item['id']}"?>" class="item-info">
			<div class="item-card">
				<div class="ic-front">
					<div class="inner">
						<p><?="{$item['name']} {$item['model']}" ?></p>
								<span><?="{$item['generation']}" ?></span>
					</div>
				</div>
				<div class="ic-back">
					<div class="inner">
						<p><?php echo mb_substr($item['description'], 0, 150) . ' ...'; ?></p>
					</div>
				</div>
			</div>
			<div class=item-price>
				<div class="price-div">
					<i class="fas fa-shopping-cart"></i>
					<p class="price-p"><?="{$item['price']}" ?> руб.</p>
					<i onclick="about_item(this)" class="fas fa-question"></i>
				</div>
				<button type="button" class="btn btn-dark btn-cust" data-toggle="modal" data-target="#ModalBuyItem">Оформить</button>
			</div>	
		</div>
	<?php } } ?>
</div>
<!-- /.items -->	

<div class="pagination">
	<?php $number_of_pages = $functions->number_of_pages; for($page = 1; $page <= $number_of_pages; $page++) {
		$link = 'page=' . $page;
		if(isset($_GET['cpu'])) { $link .= '&' . http_build_query(array('cpu' => $_GET['cpu'])); }
		if(isset($_GET['gen'])) { $link .= '&' . http_build_query(array('gen' => $_GET['gen'])); }

		if($page == $_GET['page']) { ?>
			<a href="catalog.php?<?=$link?>" class="pagination__number pagination__number-active"><?= $page ?></a> 
		<?php } else { ?> <a href="catalog.php?<?=$link?>" class="pagination__number"><?= $page ?></a> <?php  } ?>
	<?php } ?>
</div>
<!-- /.pagination -->