<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="title/Fasticon-Animal-Toys-Elephant.ico" type="imaces/x-icon">
	<title>phpedu.kg</title>
	<!-- CSS файлы -->
	<link rel="stylesheet" href="css/style_for_main.css">
	<link rel="stylesheet" href="../css/style_for_header.css">
	<!-- Шрифты -->
	<!-- Kaushan Script -->
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
	<!-- Roboto Regular -->
  <link rel="stylesheet" href="fonts/RobotoRegular/RobotoRegular.css" />

	<!-- JS -->
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous" defer></script>
	<script src="js/font_awesome.js" defer></script>
</head>
<body>
<!-- Header block  -->
<?php require_once "block/header.php" ?>
<!-- main block  -->
<main>
	<div class="main_content">
		<div class="php_course_home_page">
			<div class="block_describe">
				<div class="icon_language"></div>
				<h3>Учебник по PHP</h3>
				<div class="describe_language">
					<p>PHP позволяет создавать динамические веб-страницы, разрабатывать веб-сайты и генерировать динамический контент. Изучите наиболее широко используемый язык веб программирования!</p>
					<?php if(isset($_SESSION["username"])){
						echo '<a href="/user_task/index_usertask.php" class="btn_start_course">Начать</a>';
					}else{
						echo '<a href="/recources/Registration&Authorization_sheet.php" class="btn_start_course">Начать</a>';
					}
					?>
				</div>
			</div>
			<hr>
			<div class="top">
				<p>learners:</p>
				<p>lessons:</p>
			</div>
		</div>
	</div>
	<div class="block">

	</div>
</main>
 <!-- Footer  -->
<?php require "block/footer.php" ?>



</body>
</html> 