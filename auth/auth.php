<?php 

$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['pass']));

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysql = new mysqli('localhost', 'client', '12345678', 'neko');
$result = $mysql->query("SELECT * FROM `users` WHERE `user` = '$login' AND `pass` = '$pass'");


// $kk = var_dump($result);
// echo $kk;

$user = $result->fetch_assoc();

if(count(array($user)) == 0) {
    echo "Пользователь не найден!";
    exit();
}

// print_r($user);
// exit();

 setcookie('user', $user['user'], time() + 3600, "/");

$mysql->close();

header('Location: ../index');

?>
