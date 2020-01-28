<?php session_start();
require "../../recources/php_connection/db.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- css -->
	<link rel="stylesheet" href="../css/header_task_style.css">
	<link rel="stylesheet" href="../css/task2.css">

	
	<meta charset="UTF-8">
<link rel="shortcut icon" href="../../title/Fasticon-Animal-Toys-Elephant.ico" type="imaces/x-icon">
	<title>Document</title>
</head>
<body>
			<?php require "../block/header_task.php"?>
	<main>
		<div class="container_task1">
			<div class="theme">
			<h2>Синтаксис PHP</h2>
				<pre>PHP-скрипт начинается с < ?Php и заканчивается ?> :
				</pre>
			</div>
			<div class="important">
				< ?Php
   					//
			</div>
			<div class="important">
				идет PHP-код 
			</div>
			<div class="important">
				?>
			</div>
			<p>Вот пример простого PHP-файла. PHP-скрипт использует встроенную функцию « echo » для вывода текста «Hello World!» на веб-страницу.</p>
			<div class="important">
				< html> <br>
				  < head> <br>
				    < title> Моя первая страница PHP < /title> <br>
				  </ head> <br>
				  < body> <br>
				  < ? php    <br>
				    echo "Hello World!"; <br>
				  ?><br>
				   < /body> <br>
				< /html><br>
			</div>

		<form action="" class="task1" method="post">
			<h2>Введите правильный символ.</h2>
			
				<<input type="text" class="symbol" name="symbol" maxlength="1" autosave="none">php<br>
					echo "Hello World!";<br>
					?><br>
				
				<button class="btn_check" name="btn_check">test</button>

		</form>
			

		<?php
			if(isset($_POST['btn_check'])){
					
						
				if ($_POST['symbol']=="?") {
					if ($_SESSION['xp']>2) {
						echo '<form action="../index_usertask.php" method="post"	class="position_btn">
				<button href="../index_usertask.php" name="click_next" class="btn_task_next">Well Done!</button>
				</form>';
					}else{
					echo '<form action="../../recources/php_connection/xp_up.php" method="post"	class="position_btn">
				<button href="../index_usertask.php" name="click_next" class="btn_task_next">next</button>
				</form>';}	
			}else{
				
					echo '<form action="#" method="post"	class="position_btn">
				<button name="click_next" class="btn_task_next_error">error</button>
				</form>';
					
				}
				}
			
		?>
		</div>
	</main>
</body>
</html>