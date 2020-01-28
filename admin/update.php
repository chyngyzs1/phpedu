<?php
session_start();
require "../recources/php_connection/db.php";
if(isset($_POST['upd_btn'])){
$update=R::load('admin', $_SESSION['admin_id']);
$uname = $update->name = $_POST['updated_name'];
$upassword = $update->password = $_POST['updated_password'];
$_SESSION['admin_name'] = $uname;
R::store($update);
header("Location: admin_index.php");
}
?>