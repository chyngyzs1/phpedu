<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- css -->
	<link rel="stylesheet" href="css/header_for_personal_area.css">
	<link rel="stylesheet" href="css/Personal_Area.css">


	<!-- шрифты -->
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
	
	<!-- Скрипты -->
	<script src="../../js/font_awesome.js" defer></script>
	<link rel="shortcut icon" href="../../title/Fasticon-Animal-Toys-Elephant.ico" type="imaces/x-icon">
	<title>Личный кабинет</title>
</head>
<body>
	<?php require_once "block/header_for_personal_area.php"?>
	<main>
		<div class="content_main">
			<div class="user_profile">
				<div class="photo_user">
					<?php
						if (strtolower($_SESSION['username'])=="eldiyar") {
							echo '<img src="img/lee.ico" alt="man">';}
						elseif ($_SESSION['gender']=="Женский") {
							echo '<img src="img/wooman.ico" alt="woman">';
						}
						elseif ($_SESSION['gender']=="Мужской") {
							echo '<img src="img/men.ico" alt="man">';}
						
								
					?>

				</div>
				<div class="about_user">
					<h2>
						<?php
							echo $_SESSION["name"]," ";
							echo $_SESSION["surname"];
						?>
					</h2>
					<p>
						xp: 
						<?php 	
							echo $_SESSION["xp"];
						?>
					</p>
					<p>
						level:
						<?php 
							echo intval($_SESSION["xp"]/10)+1;
						?>
					</p>
				</div>
			</div>
		</div>
	</main>
</body>
</html>