<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/Slyle_Registration_sheet.css" />
	<title>Регистрационный бланк</title>
</head>
<body>
	 <div class="container_blank_form">
      <input type="radio" name="radioButton" id="Authorization"  />
      <label for="Authorization">Авторизация</label>
      <input type="radio" name="radioButton" id="Registration" checked />
      <label for="Registration">Регистрация</label>

    <form action="php_connection/control_login.php" class="tab_form" id="form-1" method="post">
				<div class="inputBox">
					<input type="text" name="vusername" class="UserInput" placeholder="Введите ваш Логин:" required />
				</div>
				<div class="inputBox">
					<input type="password" name="vpassword" class="UserInput" placeholder="Введите ваш Пароль:" required/>
				</div>
        <button class="button" name="do_login">
					Войти
        </button>
        <div class="forget"><a href="#">Забыли пароль?</a></div>
        <div class="forget"><a href="../admin/admin_login.php">Войти как админ?</a></div>
      </form>
      <form action="php_connection/control_register.php" class="tab_form" id="form-2" method="post">
				<div class="inputBox">
					<input type="text" name="name" class="UserInput" placeholder="Введите ваше Имя:" required />
				</div>
				<div class="inputBox">
					<input type="text" name="surname" class="UserInput" placeholder="Введите вашу Фамилию:" required />
				</div>
				<div class="inputBox">
					<input type="email" name="email" class="UserInput" placeholder="Введите ваш E-mail:"required />
				</div>
				<div class="inputBox">
					<input type="text" name="login" class="UserInput" placeholder="Введите ваш Логин:" required >
				</div>
				<div class="inputBox">
					<input type="password" name="password" class="UserInput" placeholder="Введите ваш Пароль:" required/>
				</div>
					<div class="gender">
						  <select name="gender">
						  	<option id="man">Мужской</option>
						  	<option id="women">Женский</option>
						  </select>	
 					</div>
        <button class="button" name="do_signup">
          Регистрация
        </button>
      </form>
    </div>
</body>
</html>