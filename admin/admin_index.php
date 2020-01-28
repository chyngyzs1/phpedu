<?php session_start(); 
require "../recources/php_connection/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/admin_index.css">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<?php if(isset($_SESSION['admin_name'])){
			echo '<h1>Hello '.$_SESSION["admin_name"].'! </h1>';
				echo '	<form action="spisok.php" method="post" class="form">
				<label for="list"><i class="fas fa-address-book"></i></label>
				<input type="submit" value="Список пользователей" class="input" id="list">
				</form>';
				echo '	<form action="admin_update.php" method="post" class="form">
				<label for="update"><i class="fas fa-user-cog"></i></label>
				<input type="submit" value="Редактировать профиль" name="admin_update" class="input" id="update">
				</form>'; //измененить имя и пароль админа
			
				echo '	<form action="a_logout.php" class="form">
				<label for="out"><i class="fas fa-outdent"></i></label>
				<input type="submit" value="Выход" class="input" id="out">
				</form>';

			
		}else{
			echo '<form action="admin_login.php" method="post">
				<input type="submit" value="Войти">
				</form>';
		} ?>
	</div>
	<script src="../js/font_awesome.js"></script>
</body>
</html>