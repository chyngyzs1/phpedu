<?php 
session_start();
require "db.php";
if(isset($_POST['click_next'])){
	$xp=R::load('users', $_SESSION['id']);
	$xpupdate = $xp->xp +=2;
	$_SESSION['xp'] = $xpupdate;
	R::store($xp);


  // $vuser = R::findOne('users', 'username = ?', array($_SESSION['username']));
   // if($vuser){
   // 	// echo "qwerty";
	// $user = 
	// R::exec('UPDATE users SET xp="'$_SESSION['xp']'"');
	// $user->xp = $_SESSION['xp']+10;
 //  R::store($user);
}

		// $find = R::load('users', $_SESSION['id']);
		// $find['xp'] -> $find['xp']+10;
		// // $findXP['xp']=$findXP['xp']+10;
		// R::store($find);
		header("Location:../../../../user_task/index_usertask.php");
	   if(isset($_POST['xp_reset'])){
	$xp=R::load('users', $_SESSION['id']);
	$xpupdate = $xp->xp =0;
	$_SESSION['xp'] = $xpupdate;
	R::store($xp);
}
?>