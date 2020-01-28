<?php
session_start();
require "db.php";
$data = $_POST;
//Войти
if(isset($data['do_login'])){
  $vuser = R::findOne('users', 'username = ?', array($data['vusername']));
  if($vuser){
    if(password_verify($data['vpassword'], $vuser->password)){
      $_SESSION['id'] = $vuser['id'];
      $_SESSION['username']=$_POST['vusername']; 
      $_SESSION['xp']=$vuser['xp'];
      $_SESSION['name']=$vuser['name'];
      $_SESSION['surname']=$vuser['surname'];
      $_SESSION['gender']=$vuser['gender'];
      header('Location: ../../../../index.php');
      // echo $_SESSION["xp"];
      
    }
  
  else{
    echo '<div style="color: red;">Неверный пароль!</div><hr>';
    echo '<div style="color: red;"><a href="../Registration&Authorization_sheet.php">Еще раз</a></div><hr>';
      }}
  else
  {
    echo '<div style="color: red;">Пользователь с таким логином не найден!</div><hr>';
    echo '<div style="color: red;"><a href="../Registration&Authorization_sheet.php">Еще раз</a></div><hr>';
  }
}
// session_finish();
?>