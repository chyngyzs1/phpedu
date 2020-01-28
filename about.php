<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- CSS файлы -->
	<link rel="stylesheet" type="text/css" href="css/style_for_header.css">
	<link rel="stylesheet" href="css/style_for_main.css">
	<!-- Шрифты -->
	<!-- Kaushan Script -->
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
	<!-- JS -->
	<script src="js/js_for_index.js" defer></script>
	<script src="js/font_awesome.js" defer></script>
</head>
<body>
<?php require_once "block/header.php"?>
<div class="container" >
<h3>Контакная форма</h3>
<form action="check.php" method="post">
  <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
  <input type="textarea" name="message" class="form-control" placeholder="Введите ваше сообщение"><br>
  <button type="submit" name="send" class="btn-success">Отправить</button>
</form>
</div>

<?php require "block/footer.php" ?>

</body>
</html>
