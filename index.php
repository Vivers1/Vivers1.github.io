<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>NekoFamily</title>
	<link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911|Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style-bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="assets\css\fontawesome\css\all.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/index.css">
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


<!-- Center Logo -->

    <section class="center-logo">
        <p class="h1 text-uppercase">NEKO FAMILY</p>
        <div class="but-1">

          <div class="box">
            <a href="#" class="btn-logo btn-white btn-animation-1">DISCORD SERVER</a> 
          </div>
    </section>


    <!-- Top Donate -->

    <section class="top-donate">
        <p class="text-center">ТОП 3 ДОНАТЕРОВ СЕРВЕРА</h1>
        <div class="card-group">
            <div class="card">
              <img class="card-img-top" src="https://imgur.com/KZC1iyC.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Vivers</h5>
                <p class="card-text p-sm">100 руб.</p>
                <p class="card-text">Желаю здоровья и денди!</p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="https://imgur.com/oRqVfsF.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Vivers</h5>
                <p class="card-text p-sm" style="font-size: 30px;">100 руб.</p>
                <p class="card-text">Желаю здоровья и денди!</p>
              </div>
            </div>
            <div class="card" style=" border: #21232b; margin-right: 5%;">
              <img class="card-img-top" src="https://imgur.com/KZC1iyC.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Vivers</h5>
                <p class="card-text p-sm">100 руб.</p>
                <p class="card-text">Желаю здоровья и денди</p>
              </div>
            </div>
          </div>
    </section>

<!-- Staff -->
<section class="staff">
<p class="text-center">АДМИНИСТРАЦИЯ</h1>
  <div class="staff-div container">
    <div class="row">
 <div class="owner col">
  <img src="https://imgur.com/mONo5rf.gif" alt="Боку на Паша" class="rounded-circle">
   <p class="font-weight-normal staff-nick">Боку Но Паша</p>
   <p class="font-weight-normal staff-stat">Создатель</p>
 </div>
   <div class="mod-1 col">
     <img src="https://imgur.com/N9Z3qpM.png" alt="Wis" class="rounded-circle">
     <p class="font-weight-normal staff-nick wis">Wisଲ</p>
    <p class="font-weight-normal staff-stat">Администратор</p>
   </div>
   <div class="mod-2 col">
    <img src="https://imgur.com/hIsEyej.png" alt="Wis" class="rounded-circle">
    <p class="font-weight-normal  staff-nick zakuro">3akypo</p>
    <p class="font-weight-normal staff-stat">Модератор</p>
  </div>
</div>
<div class="row tab-2">
  <div class="mod-3 col">
    <img src="https://imgur.com/v0StJkT.png" alt="Wis" class="rounded-circle">
    <p class="font-weight-normal staff-nick luz">ひかり。</p>
    <p class="font-weight-normal staff-stat">Модератор</p>
  </div>
  <div class="mod-4 col">
    <img src="https://imgur.com/5BitRw8.png" alt="Wis" class="rounded-circle">
    <p class="font-weight-normal staff-nick">🔥SoLoHaRd🔥</p>
    <p class="font-weight-normal staff-stat">Модератор</p>
  </div>
  <div class="mod-5 col">
    <img src="https://imgur.com/tR3tu23.png" alt="Wis" class="rounded-circle">
    <p class="font-weight-normal staff-nick morakul">Morakyl</p>
    <p class="font-weight-normal staff-stat">Модератор</p>
  </div>
 </div>
</div>
</div>
</section>


<!-- Footer -->

  <footer class="page-footer font-small blue" style="background-color: #634987;">
    <div class="footer-copyright text-center py-3" style="font-size: 25px;">© 2019 Copyright:
  <a href="#"><i class="fab fa-twitter" style="font-size: 30px;"></i></a>
  <a href="#"><i class="fab fa-discord" style="font-size: 30px;"></i></a>
</div>
</footer>
<!-- Scripts -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>