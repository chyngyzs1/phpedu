<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/admin_update.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<form action="update.php" method="post" class="update_form">
			<input type="text" name="updated_name" placeholder="Напишите новый логин" required>
			<input type="password" name="updated_password" placeholder="Напишите новый пароль" required>
			<input type="submit" name="upd_btn" value="update">
		</form>
	</div>
</body>
</html>