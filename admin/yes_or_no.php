<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/yes_or_no.css">
	<title>Delete user</title>
</head>
<body>
	<div class="container">
		<h3>Вы действительно хотите удалить пользователя <div class="underline"><?php echo $_SESSION["username"]; ?></div>?</h3>
		<form action="delete_user.php" method="post"> 
			<input type="submit" value="Да" name="yes">
			<input type="submit" value="Нет" name="no">
		</form>
	</div>
</body>
</html>
