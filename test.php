<?php 
	include('./includes/connect.php');
	$connect = get_connect();
	include('./includes/functions.php');
	


	if(isset($sort)) echo $sort; else echo '$sort none ';
	$sort = 'model';
	if(isset($sort)) echo $sort; else echo '$sort none ';
	

	$items = $functions->get_items($connect, $sort);

	foreach($items as $item){
		echo "{$item['model']}";
	}
?>