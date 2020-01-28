<?php
session_start();
?>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
<header>
	<div class="container_header_task">
	<div class="logo">
    <a href="../../index.php" class="link_home_page"></a>
    <span class="for_php"><i class="fab fa-php"></i></span>
    <span class="for_edu">edu</span>
	</div>
    <div class="XP">
    	<h3><?php
				echo $_SESSION["username"];
			?>   
			</h3>
			<h2>XP</h2> <span><?php echo $_SESSION["xp"];?></span>
    </div>
	</div>
	<script src="../js/font_awesome.js" defer></script>
</header>