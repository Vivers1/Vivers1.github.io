<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


$mysql = new mysqli('localhost', 'root', '', 'neko');
$result = $mysql->query("SELECT * FROM users WHERE `login` = '$login' AND `pass` = '$pass'");


if(count((array($result->fetch_assoc())) == 0) {
 echo ("Пользователь не найден");
 exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location: index.html')
?>