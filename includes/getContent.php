<?php 
	include('connect.php');
	$connect = get_connect();

	$id = $_POST['id'];
	$sql = "SELECT * FROM `store` WHERE `id` = $id";
	$items = $connect->query($sql);
	foreach($items as $item):
?>

<div class="modal-header">
	<h5 class="modal-title"><?= "{$item['name']} {$item['model']}" ?></h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<div class="modal-body">
	<p><?= "Модель: {$item['name']} {$item['model']}" ?></p>
	<p><?= "Поколение: {$item['generation']}" ?></p>
	<p><?= "Описание: {$item['description']}" ?></p>
	<p><?= "Цена: {$item['price']} руб." ?></p>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-confirm" data-dismiss="modal">Закрыть</button>
</div>

<?php endforeach ?>