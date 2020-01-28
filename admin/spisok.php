<link rel="stylesheet" href="css/spisok.css">

<div class="content">
<form action="finded_users.php" method="POST" class="form-1">
            <label for="search">Поиск пользователя:</label> 
            <div class="line"><input type="search" name="search" placeholder="Введите логин пользователя" id="search"></div>
            <button type="submit" name="do_search">Поиск</button>
</form>
<?php
require "../recources/php_connection/db.php";
$countusers = R::count( 'users' );
echo "<b>Количество авторизованных пользователей на сайте: ".$countusers.'</b><br>';

$users  = R::findAll( 'users');
?>
<table>
    <tr>
        <td>id</td>
        <td>login</td>
        <td>name</td>
        <td>surname</td>
        <td>gender</td>
    </tr>
<?php
foreach ($users as $user){
    echo '<tr><td>'.$user['id'].'</td>';
    echo '<td>' . $user['username'].'</td>';
    echo '<td>' . $user['name'].'</td>';
    echo '<td>' . $user['surname'].'</td>';
    echo  '<td>'. $user["gender"].'</td></tr>';
}

?>
</table>
<a href="admin_index.php" class="btn-back">Назад</a>
</div>