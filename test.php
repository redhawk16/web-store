<?php 
	include('./includes/connect.php');
	$connect = get_connect();
	include('./includes/functions.php');
	
	if(isset($_GET['cpu']) AND isset($_GET['gen'])){
		echo "all = " . print_r($_GET);
	} elseif(isset($_GET['cpu'])) {
		echo "cpu = " . print_r($_GET['cpu']);
	} elseif(isset($_GET['gen'])) {
		echo "gen = " . print_r($_GET['gen']);
	}

?>

<form action="test.php" id="form1" method="GET">
<input type="checkbox" name="cpu[]" value="i7">i7 <br>
<input type="checkbox" name="cpu[]" value="i5">i5 <br>
<input type="checkbox" name="gen[]" value="sky">sky <br>
<input type="checkbox" name="gen[]" value="tech">tech <br>
</form>

<input type="submit" form="form1">


<?php

$sort = implode(",", $_GET['cpu']);
echo strip_tags($sort);
?>