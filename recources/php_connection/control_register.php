<?php
session_start();
require "db.php";
$data = $_POST;

//Регистрация
if(isset($data['do_signup']))
{ $errors = array();
  if(R::count('users', "email = ?", array($data['email'])) > 0){
  $errors = "Пользователь с таким email уже существует!";
  }
  if(R::count('users', "username = ?", array($data['name'])) > 0){
    $errors = "Пользователь с таким логином уже существует!";
  }

  if(empty($errors)){   
  $user = R::dispense('users');
  $user->username = $data['login'];
  $user->email = $data['email'];
  $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
  $user->xp = 0;
  $user->name = $data['name'];
  $user->surname = $data['surname'];
  $user->gender = $data['gender'];
      
  R::store($user);
  echo '<div style="color: green;">Регистрация успешно выполнено!</div><hr>';
  echo '<a href="../Registration&Authorization_sheet.php">Войти</a>';
}
else{
  // header('Location: Sheet.php');
  echo '<div style="color: red;">'.$errors.'</div><hr>';
  echo '<div style="color: red;"><a href="../Registration&Authorization_sheet.php">Еще раз</a></div><hr>';
}}
?>