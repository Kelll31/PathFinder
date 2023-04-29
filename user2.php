<!DOCTYPE html>
<html lang="ru">

<?php

include 'main_script.php';
$resulttt = mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` LIKE '$hashh'");
while ($dataaa = $resulttt->fetch_assoc()) {
  $userid = $dataaa['user_id'];
}


$link = mysqli_connect("localhost", "root", "", "pathfinder");
$hashh = $_COOKIE["hash"];
if (mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` LIKE '$hashh'")->fetch_array() != 0) {
  header('Location: http://localhost/PathFinder/lk.php');
  header('refresh: 0');
} else {
}

?>

<head>
  <title>PathFinder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="container pt-5">
    <div class="row justify-content-between">
      <div class="col">
        <a class="navbar-brand" href="index.php"><span> PathFinder</span></a>
      </div>
      <div class="col d-flex justify-content-end">
        <div class="social-media">
          <p class="mb-0 d-flex">
            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i
                  class="sr-only">Facebook</i></span></a>
            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i
                  class="sr-only">Twitter</i></span></a>
            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i
                  class="sr-only">Instagram</i></span></a>
            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i
                  class="sr-only">Dribbble</i></span></a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Меню
      </button>
      <form action="#" class="searchform order-lg-last">
        <div class="form-group d-flex">
          <input type="text" class="form-control pl-3" placeholder="Поиск">
          <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
        </div>
      </form>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto topmenu">
          <li class="nav-item"><a href="index.php" class="nav-link">Главная</a></li>
          <li class="nav-item"><a href="shop.php" class="nav-link">Все проекты </a></li>
          <?php
          if (mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` LIKE '$hashh'")->fetch_array() != 0) {
            if ($userid == 1) {
              echo '
						<li class="nav-item"><a href="orderinfo.php" class="nav-link">Админка</a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link">Создать проект</a></li>';

            } elseif ($userid != 1) {
              echo '
						<li class="nav-item"><a href="cart.php" class="nav-link">Мои проекты</a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link">Создать проект</a></li>';
            }
          }
          ?>

          <li class="nav-item active"><a href="user.php" class="nav-link">Профиль</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/logo3.png');"
    data-stellar-background-ratio="0.75">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Главная <i
                  class="ion-ios-arrow-forward"></i></a></span> <span>Профиль <i
                class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-0 bread">Профиль</h1>
        </div>
      </div>
    </div>

  </section>



  <section class="ftco-section">
    <div class="container">
      <div class="text-center heading-section heading-section-white ftco-animate">

        <div class=" py-5 py-md-5 py-4 pl-lg-5 ">
          <h2 class="footer-heading"><a href="user.php">Войти</a> / Зарегистрироваться</h2>

          <?php

          if (isset($_POST['submitt'])) {
            $pass1 = trim($_POST['pass1']);
            $pass2 = trim($_POST['pass2']);
            $username = trim($_POST['username']);
            $userlogin = trim($_POST['userlogin']);
            $useremail = trim($_POST['useremail']);
            $userphone = trim($_POST['userphone']);
            $about = ($_POST['about']);
            $hashh = $_COOKIE["hash"];


            $resulttt = mysqli_query($link, "SELECT COUNT(*) FROM `users` WHERE `user_login` = '$userlogin'");
            while ($dataaa = $resulttt->fetch_assoc()) {
              $yesuser = $dataaa['COUNT(*)'];
            }
            if ($yesuser > 0) {
              echo "  Логин занят";
            } else {
              if (filter_var($useremail, FILTER_VALIDATE_EMAIL)) {
                if ($pass1 == $pass2) {
                  mysqli_query($link, "INSERT INTO `users`(`user_login`, `user_password`, `user_name`, `user_hash`, `user_mail`,`user_phone`,`user_about`) VALUES ('$userlogin','$pass1','$username', '$hashh','$useremail','$userphone','$about')");
                } else {
                  echo "  Пароли не совпадают.";
                }
                echo "  Почта указана корректно.";
              } else {
                echo "  Почта указана не правильно.";
              }
              echo "  Логин свободен";
            }




            echo '<script> window.location.href = "user2.php"; </script>';
          }


          //}
          





          ?>

          <form method="POST" class="contact-form">
            <div class="form-group">
              <input name="username" type="loginn" class="form-control" placeholder="Ваше имя" required>
            </div>
            <div class="form-group">
              <input name="userlogin" type="loginn" class="form-control" placeholder="Придумайте ваш логин" required>
            </div>
            <div class="form-group">
              <input name="useremail" type="loginn" class="form-control" placeholder="Ваша почта" required>
            </div>

            <div class="form-group">
              <input name="userphone" type="loginn" class="form-control" placeholder="Ваш номер телефона" required>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input name="pass1" type="pass1" class="form-control" placeholder="Придумайте пароль" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input name="pass2" type="pass2" class="form-control" placeholder="Подтвердите пароль" required>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <textarea name="about" id="" cols="30" rows="3" class="form-control" placeholder="Расскажите о себе"
                required></textarea>
            </div>
        </div>

        <div class="form-group">
          <input name="submitt" class=" col-md-12 btn btn-primary form-control submit px-3 nav-item" type="submit"
            value="Зарегестрироваться">
        </div>
        </form>
      </div>
    </div>

    </div>

  </section>




  <footer class="footer">
    <div class="container-fluid px-lg-5">
      <div class="row">
        <div class="col-md-9 py-5">
          <div class="row">
            <div class="col-md-4 mb-md-0 mb-4">
              <h2 class="footer-heading">Еще о нас</h2>
              <p>Мы онлайн-платформа для поиска талантливых единомышленников в сфере информационных технологий. Быстрая,
                удобная и эффективная платформа объединения людей в IT секторе.</p>
              <ul class="ftco-footer-social p-0">
                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span
                      class="ion-logo-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span
                      class="ion-logo-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span
                      class="ion-logo-instagram"></span></a></li>
              </ul>
            </div>
            <div class="col-md-8">
              <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                  <div class="row">

                    <div class="col-md-4 mb-md-0 mb-4">
                      <h2 class="footer-heading">Меню</h2>
                      <ul class="list-unstyled">
                        <li><a href="index.php" class="py-1 d-block">Главная</a></li>
                        <li><a href="team.php" class="py-1 d-block">Мои 11</a></li>
                        <li><a href="cart.php" class="py-1 d-block">Профиль</a></li>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-md-5">
            <div class="col-md-12">
              <p class="copyright">
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> Все права зарезервированны |
                AdrenalineCodes</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
          <h2 class="footer-heading">Задать вопрос</h2>
          <form action="#" class="contact-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Имя">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Категория">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Сообщение"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="form-control submit px-3">Отправить</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>