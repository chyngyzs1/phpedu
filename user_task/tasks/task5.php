<?php session_start();
require "../../recources/php_connection/db.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- css -->
	<link rel="stylesheet" href="../css/header_task_style.css">
	<link rel="stylesheet" href="../css/task1.css">

	
	<meta charset="UTF-8">
<link rel="shortcut icon" href="../../title/Fasticon-Animal-Toys-Elephant.ico" type="imaces/x-icon">
	<title>Document</title>
</head>
<body>
			<?php require "../block/header_task.php"?>
	<main>
		<div class="container_task1">
			<div class="theme">
			<h2>Добро пожаловать в PHP</h2>

				<p>PHP: Hypertext Preprocessor ( PHP ) - это бесплатный, очень популярный язык сценариев с открытым исходным кодом. PHP-скрипты выполняются на сервере .
				</p>
<ul class="list">
Просто краткий список того, на что способен PHP:
<li>- Создание, открытие, чтение, запись, удаление и закрытие файлов на сервере</li>
<li>- Сбор данных формы</li>
<li>- Добавление, удаление и изменение информации, хранящейся в вашей базе данных</li>
<li>- контроль доступа пользователей</li>
<li>- шифрование данных</li>
<li>- и многое другое!</li>
Прежде чем начать этот урок, вы должны иметь общее представление о HTML .
</ul>
			</div>
			<div class="important">
				PHP обладает достаточной мощностью для работы с ядром WordPress., самая загруженная система блогов в сети. Он также имеет степень глубины, необходимую для запуска Facebook , крупнейшей социальной сети в Интернете!
			</div>
		<form action="" class="task1" method="post">
			<h2>PHP это ...?</h2>
<!-- 			<?php 
			$values[] = array("Язык программирования на стороне сервера","Веб-сайт","Язык разметки","Главная страница");
				$numbers = range(0, 3);
						shuffle($numbers);
						foreach ($numbers as $number) {
						    foreach ($values as $val) {
						   echo '<div class="inputradio">
				<input type="radio" name="test" value="$numbers" id="$number">
				<label for="$number">'.$val["$number"].'</label>
			</div>';
						}}?> -->
	<div class="inputradio">
		<input type="radio" name="test" value="1" id="1">
		<label for="1">Язык программирования на стороне сервера</label>
	</div>
	<div class="inputradio">
		<input type="radio" name="test" value="2" id="2">	
		<label for="2">Веб-сайт</label>
	</div>
	<div class="inputradio">
		<input type="radio" name="test" value="3" id="3">	
		<label for="3">Язык разметки</label>
	</div>
	<div class="inputradio">
		<input type="radio" name="test" value="4" id="4">	
		<label for="4">Главная страница</label>
			</div>
				<button class="btn_check" name="btn_check">test</button>

		</form>
			

		<?php
			if(isset($_POST['btn_check'])){
					
						
				if ($_POST['test']==1) {
					if ($_SESSION['xp']>8) {
						echo '<form action="../index_usertask.php" method="post"	class="position_btn">
				<button href="../index_usertask.php" name="click_next" class="btn_task_next">Well Done!</button>
				</form>';
					}else{
					echo '<form action="../../recources/php_connection/xp_up.php" method="post"	class="position_btn">
				<button href="../index_usertask.php" name="click_next" class="btn_task_next">next</button>
				</form>';}	
				// if(isset($_POST['click_next'])){
				// 	if($_SESSION['xp'] == 0){
				// 	$xp=R::load('users', $_SESSION['id']);
				// 	$xpupdate = $xp->xp +=1;
				// 	$_SESSION['xp'] = $xpupdate;
				// 	R::store($xp);}
				// }}
			}
				else{
				
					echo '<form action="#" method="post"	class="position_btn">
				<button href="../index_usertask.php" name="click_next" class="btn_task_next_error">error</button>
				</form>';
					
				}
				}
				
			
		?>
			<!-- 	<form action="../../recources/php_connection/xp_up.php" method="post"	class="position_btn">
				<button href="../index_usertask.php" name="click_next" class="btn_task_next">next</button>
				</form> -->
		</div>
	</main>
</body>
</html>