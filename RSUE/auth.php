<?php
 $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

     $pass = md5($pass."glhfalrd34");

$mysql = new mysqli('localhost','root','root','registerform');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

$user = $result->fetch_assoc();

if(count($user) == 0)
{
	echo "Такого пользователя не существует";
	exit();
}

print_r($user);
exit();

$mysql->close();

header('Location: /');
?>