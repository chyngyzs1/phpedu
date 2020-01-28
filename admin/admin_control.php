<?php 
session_start();
require "../recources/php_connection/db.php";
$data = $_POST;
if(isset($data['admin_btn'])){
  $vuser = R::findOne('admin', 'name = ?', array($data['admin_name']));
  if($vuser){
    if($data['admin_password'] == $vuser->password){
      $_SESSION['admin_name']=$_POST['admin_name'];
      $_SESSION['admin_id'] = $vuser->id;
      header('Location: admin_index.php');
      
    }
  
  else{
    echo '<div style="color: red;">Неверный пароль!</div><hr>';
    echo '<div style="color: red;"><a href="admin_login.php">Еще раз</a></div><hr>';
      }}
  else
  {
    echo '<div style="color: red;">Пользователь с таким логином не найден!</div><hr>';
    echo '<div style="color: red;"><a href="admin_login.php">Еще раз</a></div><hr>';
  }
}
?>