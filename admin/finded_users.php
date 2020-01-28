<?php
session_start();
?>
<link rel="stylesheet" href="css/finded_users.css">
<?php
require_once('../recources/php_connection/db.php');

if (!isset($_POST['do_search'])) {
    exit("Internal server error."); // Если не нажата кнопка поиска, то принудительно останавливаем выполнение скрипта
}

if(!$keywords = $_POST['search'] ?: null) {
    exit("Keyword is empty."); // Если поле пустое, то останавливаем скрипт
}

$sql = "username LIKE ?"; // Инициализируем sql запрос согласно правилам RedBean
$bind = [$keywords]; // Биндим параметр $keywords - поисковые слова

$user = R::findOne('users', $sql, $bind); // Достаем всех юзеров по условию
	
if($user){echo '<table>
			<tr>
				<td>id</td>
				<td>login</td>
				<td>name</td>
				<td>surname</td>
				<td>gender</td>
				<td>&times</td>
			</tr>';
// foreach ($users as $user){
	$_SESSION['id'] = $user['id'];
	$_SESSION['username'] = $user['username'];
	echo '<td>'.$user['id'].'</td>';
	echo '<td>'. $user['username'].'</td>';
	echo '<td>'. $user['name'].'</td>';
	echo '<td>'. $user['surname'].'</td>';
	echo  '<td>'. $user["gender"].'</td>';
	echo '<td><a href="yes_or_no.php"> Удалить</a></td></tr>';
	echo '<tr><td colspan="6"><a href="spisok.php" class="btn-back">Назад</a></td></tr></table>';}
	else{
	echo "Пользователь не найден!";}
 
 ?>