<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-
	scale = 1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div align="center" class = "container mt-4">
		<h1>Регистрация аккаунта</h1><br>
		<form action="check.php" method="post">
			<input type= "text" class= "form-control" name = "login"
			id = "login" placeholder="Введите логин:"><br>

			<input type= "text" class= "form-control" name = "name"
			id = "name" placeholder="Введите ваше имя:"><br>

			<input type= "password" class= "form-control" name = "pass"
			id = "pass" placeholder="Введите пароль:"><br>

			<input type= "text" class= "form-control" name = "email"
			id = "email" placeholder="Введите вашу почту:"><br>

			<button class="btn btn-success"
			type = "sumbit">регистрация</button>
		</form>
	</div>
	<div class = "col" align="center">
	<h1>Войти в сервис</h1><br>
		<form action="auth.php" method="post">

			<input type= "text" class= "form-control" name = "login"
			id = "login" placeholder="Введите логин:"><br>

			<input type= "password" class= "form-control" name = "pass"
			id = "pass" placeholder="Введите пароль:"><br>

			<button class="btn btn-success"
			type = "sumbit">Войти</button>
		</form>
	</div>
</body>
</html>
