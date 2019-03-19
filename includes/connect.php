<?php
	function get_connect() {
		$host = 'localhost';
		$user = 'root'; // $user = 'u999451g_bd';
		$pass = ''; // $pass = '1aGSa6De';
		$db_name = 'u999451g_bd';
		$connect = mysqli_connect($host, $user, $pass, $db_name);
	
		if (!$connect) {
			echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
			exit;
		}

		return $connect;
	}
?>