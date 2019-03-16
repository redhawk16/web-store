<?php
	$host = 'localhost';  // Хост, у нас все локально
	// $user = 'u999451g_bd';    // Имя созданного вами пользователя
	$user = 'root';
	$pass = ''; // Установленный вами пароль пользователю
	$db_name = 'u999451g_bd';   // Имя базы данных
	$connect = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

	// Ругаемся, если соединение установить не удалось
	if (!$connect) {
		echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
		exit;
	}
?>