<?php
 $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

     $pass = md5($pass."glhfalrd34");

$mysql = new mysqli('localhost','root','','pract');

$result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");

$user = $result->fetch_assoc();

if(count($user) == 0)
{
	echo "Такого пользователя не существует";
	exit();
}

setcookie('user',$user['login'], time()+14800,'/');
session_start();
header('Location: /index.php');
$mysql->close();
exit();
?>