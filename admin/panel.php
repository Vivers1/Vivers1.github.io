<html>
<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911|Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style-bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/index.css">
  <link rel="stylesheet" href="../assets/css/admin-panel.css">
  <link href="../assets/css/fontawesome/css/all.css" rel="stylesheet">
</head>
<body class="grey lighten-3">
        <header>
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
          <span class="navbar-text">
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                  <a class="btn btn-info" href="auth/logout">Выход</a>
                </li>
                    </ul>
              </span>
        </nav>
        
        <div class="sidebar-fixed position-fixed">
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item waves-effect"><i class="mr-3 fab fa-facebook"></i>Информация</a>
            <?php if(isset($_COOKIE['user']) == ''): ?>
            <a href="#" class="list-group-item waves-effect"><i class="mr-3 fa fa-pie-chart">Написать Пост</i></a>
<?php else: ?>
<?php endif; ?>
        </div>
    </div>
    </header>

    <main class="pt-5 max-lg-5">
        <div class="container-fluid mt-5">
            <div class="card mb-4 wow fadeIn">
                <div class="card-body d-sm-flex justify-content-between">

                    <table border="1">
                        <tr>
                            <th>Дата</th>
                            <th>Заголовок</th>
                            <th></th>
                            <th></th>
</tr>       
                </table>
                
                </div>
            </div>
        </div>    
</main>
    <!-- Scripts -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>