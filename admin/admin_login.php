<?php
session_start();
require "../recources/php_connection/db.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Админка</title>
<link rel="stylesheet" href="css/admin_update.css">
</head>
<body>
	<div class="container">
		<form action="admin_control.php" method="post" class="update_form">
			<input type="text" name="admin_name" placeholder="Введите логин" required><br>
			<input type="password" name="admin_password" placeholder="Введите пароль" required><br>
			<input type="submit" name="admin_btn" value="Войти">
		</form>
	</div>
</body>
</html>