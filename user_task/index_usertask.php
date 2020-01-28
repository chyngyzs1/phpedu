<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- css -->
	<link rel="stylesheet" href="css/style_user_task.css">
	<link rel="stylesheet" href="css/header_task_style.css">
	
	<!-- шрифт -->
	
	<!-- скрипт -->
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous" defer></script>


<link rel="shortcut icon" href="../title/Fasticon-Animal-Toys-Elephant.ico" type="imaces/x-icon">
	<title>Задания</title>
</head>
<body>
	<?php
		require_once "block/header_task.php";
	?>
		<main>
			<div class="container_tasks">
				<?php
					if ($_SESSION['xp']>0) {
					 		echo '<div class="question question_finish">
					<a href="tasks/task1.php"></a>
					<p>lesson 1</p>
					<div class="color"></div>
					
				</div>';
					 } 
					 else if($_SESSION['xp']==0)
					 {
					 	echo '<div class="question question_work">
					<a href="tasks/task1.php"></a>
					<p>lesson 1</p>
					<div class="color" ></div>
					
				</div>';
					 }
				?>

				<?php

					/*количество заданий*/
					$k=100;
				for($i = 2, $j = 2; $j < $k; $i++, $j+=2)
					{if ($_SESSION['xp']>$j) {
					 		echo '<div class="question question_finish">
					<a href="tasks/task'.$i.'.php"></a>
					<p>lesson '.$i.'</p>
					<div class="color"></div>
					
				</div>';
					 } 
					 else if ($_SESSION['xp']==$j)
					 {
					 	echo '<div class="question question_work">
					<a href="tasks/task'.$i.'.php"></a>
					<p>lesson '.$i.'</p>
					<div class="color" ></div>
					
				</div>';
					 }
					 else if ($_SESSION['xp']<$j)
					 {
					 	echo '<div class="question question_block">
					<a href="tasks/task'.$i.'.php"></a>
					<p>lesson '.$i.'</p>
					<div class="color" ></div>
					
				</div>';
					 }}
				?>
	
				
				<form action="../recources/php_connection/xp_up.php" method="post">
		<button class="btn_reset" name="xp_reset">RESET</button>
		</form>
			</div>

		</main>
		
</body>
</html>