<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>NekoFamily</title>
	<link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911|Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style-bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="assets\css\fontawesome\css\all.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>

<!-- Menu -->

<nav class="navbar navbar-expand-md navbar-dark nav-menu">


  <a class="navbar-brand" href="#"><img src="https://imgur.com/ZVHI4rQ.png">
	<p class="navbar-text nav-span">NekoFamily</p></a>


<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
	<span class="navbar-toggler-icon"></span>
</button>

	

<div class="collapse navbar-collapse collapse-nav" id="collapse_target">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link "href="events.html">Мероприятия</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="donate.html">Донат</a>
		</li>
	</ul>
</div>
<?php if(isset($_COOKIE['user']) == ''): ?>
<span class="navbar-text">
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
          <a class="btn btn-info login-btn" href="login">Login</a>
        </li>
            </ul>
      </span>
<?php else: ?>
<span class="navbar-text">
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
          <a class="btn" href="#">Панель управления</a>
          <a class="btn" href="auth/logout">Выход</a>
        </li>
            </ul>
      </span>
<?php endif; ?>
</nav>