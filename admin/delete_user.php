<?php
session_start();
require "../recources/php_connection/db.php";

if(isset($_POST['yes'])){
	// echo $_SESSION['id'];
	$user_id = $_SESSION['id'];
	$conn = new mysqli('localhost', 'root', '', 'db_users');
	$sql = "DELETE FROM users WHERE id = $user_id";
	if ($conn->query($sql) === TRUE) {
    header('Location: spisok.php');
	} else {
    echo "Error deleting record: " . $conn->error;
	}

	$conn->close();
	// $user = R::findOne('users', 'username LIKE ?', $_SESSION['username']);
	// R::trash($user);
	// header("Location: spisok.php");
}if(isset($_POST['no'])){
	header('Location: spisok.php');
}
?>