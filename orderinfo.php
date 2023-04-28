<!DOCTYPE html>
<html lang="ru">
<?php
include 'main_script.php';

if (mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` LIKE '$hashh'")->fetch_array() != 0) {

} else {
  header('Location: http://localhost/PathFinder/user.php');
}

?>

<head>
  <title>PathFinder | Профиль
  </title>
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
          <li class="nav-item"><a href="cart.php" class="nav-link">Мои проекты</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Создать проект</a></li>
          
          <li class="nav-item active"><a href="user.php" class="nav-link">Профиль</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/logo.jpg');"
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

  </div>
  <?php
  $resulttt = mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` LIKE '$hashh'");
  while ($dataaa = $resulttt->fetch_assoc()) {
    $userid = $dataaa['user_id'];
    if ($userid == 1) {
      echo '
          <section class="ftco-section text-center heading-section heading-section-white ftco-animate">
            <div class="container">
            <div class="categories">
                          <h3>Все Проекты (Доступ администратора)</h3>
                          <div class="col-md-12">
                            <div class="form-group">
                              <form method="GET">
                                <input type="text" name="search" placeholder="Поиск по номеру проекта" class="col-md-12 form-control"style="margin-bottom: 15px;">
                              </form>
                              <form method="POST">                                
                                <input name="exit" class="col-md-12 btn btn-primary" type="submit" value="Обратно в кабинет">
                              </form>                              
                            </div>
                          </div>';

      if (isset($_GET['order_id']) or isset($_GET['search'])) {

        if (isset($_GET['order_id'])) {
          $ordeeer = $_GET['order_id'];

          $result = mysqli_query($link, "SELECT `order_id` FROM `orders` WHERE `order_id` LIKE $ordeeer");
          while ($data = $result->fetch_assoc()) {
            $order_id = $data['order_id'];

            $date2 = mysqli_query($link, "SELECT `date` FROM `orders` WHERE `order_id` LIKE '$order_id'");
            while ($date1 = $date2->fetch_assoc()) {
              $date = $date1['date'];
            }

            $stat2 = mysqli_query($link, "SELECT `stat` FROM `orders` WHERE `order_id` LIKE '$order_id'");
            while ($stat1 = $stat2->fetch_assoc()) {
              $stat = $stat1['stat'];
            }

            $user_id_order2 = mysqli_query($link, "SELECT `users_id` FROM `orders` WHERE `order_id` LIKE '$order_id'");
            while ($user_id_order1 = $user_id_order2->fetch_assoc()) {
              $user_id_order = $user_id_order1['users_id'];
              $user_name2 = mysqli_query($link, "SELECT `user_name` FROM `users` WHERE `user_id` LIKE '$user_id_order'");
              while ($user_name1 = $user_name2->fetch_assoc()) {
                $user_name = $user_name1['user_name'];
              }
              $user_mail2 = mysqli_query($link, "SELECT `user_mail` FROM `users` WHERE `user_id` LIKE '$user_id_order'");
              while ($user_mail1 = $user_mail2->fetch_assoc()) {
                $user_mail = $user_mail1['user_mail'];
              }
              $user_phone2 = mysqli_query($link, "SELECT `user_phone` FROM `users` WHERE `user_id` LIKE '$user_id_order'");
              while ($user_phone1 = $user_phone2->fetch_assoc()) {
                $user_phone = $user_phone1['user_phone'];
              }
            }
            echo '<li><h2>Заказ № ' . $ordeeer . '  от ' . $date .
              '</h2>';
            echo '
                  <form method="POST"">
                  <a href="?order_id=' . $order_id . '"></a></br> Имя:  ' . $user_name .
              '</br> Email: ' . $user_mail .
              '</br> Телефон:  ' . $user_phone .
              '</br> Статус:  <input name="stat' . $order_id . '" type="pass2"  placeholder="' . $stat . '">
                  </form>';
            for ($i = 1; $i <= $order_id; $i++) {
              if (isset($_POST['stat' . $order_id])) {
                $staat = $_POST['stat' . $order_id];
                mysqli_query($link, "UPDATE `orders` SET `stat`='$staat' WHERE `order_id` LIKE $order_id");
                echo '<script> window.location.href = "orderinfo.php"; </script>';
              }
            }
          }
        }
        if (isset($_GET['search'])) {
          $ordeeer = trim($_GET['search']);

          $result = mysqli_query($link, "SELECT `order_id` FROM `orders` WHERE `order_id` LIKE $ordeeer");
          while ($data = $result->fetch_assoc()) {
            $order_id = $data['order_id'];

            $date2 = mysqli_query($link, "SELECT `date` FROM `orders` WHERE `order_id` LIKE '$order_id'");
            while ($date1 = $date2->fetch_assoc()) {
              $date = $date1['date'];
            }

            $stat2 = mysqli_query($link, "SELECT `stat` FROM `orders` WHERE `order_id` LIKE '$order_id'");
            while ($stat1 = $stat2->fetch_assoc()) {
              $stat = $stat1['stat'];
            }

            $user_id_order2 = mysqli_query($link, "SELECT `users_id` FROM `orders` WHERE `order_id` LIKE '$order_id'");
            while ($user_id_order1 = $user_id_order2->fetch_assoc()) {
              $user_id_order = $user_id_order1['users_id'];
              $user_name2 = mysqli_query($link, "SELECT `user_name` FROM `users` WHERE `user_id` LIKE '$user_id_order'");
              while ($user_name1 = $user_name2->fetch_assoc()) {
                $user_name = $user_name1['user_name'];
              }
              $user_mail2 = mysqli_query($link, "SELECT `user_mail` FROM `users` WHERE `user_id` LIKE '$user_id_order'");
              while ($user_mail1 = $user_mail2->fetch_assoc()) {
                $user_mail = $user_mail1['user_mail'];
              }
              $user_phone2 = mysqli_query($link, "SELECT `user_phone` FROM `users` WHERE `user_id` LIKE '$user_id_order'");
              while ($user_phone1 = $user_phone2->fetch_assoc()) {
                $user_phone = $user_phone1['user_phone'];
              }
            }
            echo '<li><h2>Заказ № ' . $ordeeer . '  от ' . $date .
              '</h2>';
            echo '
                  <form method="POST"">
                  <a href="?order_id=' . $order_id . '"></a></br> Имя:  ' . $user_name .
              '</br> Email: ' . $user_mail .
              '</br> Телефон:  ' . $user_phone .
              '</br> Статус:  <input name="stat' . $order_id . '" type="pass2"  placeholder="' . $stat . '">
                  </form>';
            
          }
        }
        $ordeeeeer = $ordeeer;

        $result = mysqli_query($link, "SELECT `product_ids`FROM `orders` WHERE `order_id` LIKE '$ordeeeeer'");
        while ($data = $result->fetch_assoc()) {
          $data['product_ids'] = str_replace('[', ',', $data['product_ids']);
          $data['product_ids'] = str_replace(']', ',', $data['product_ids']);
          $data['product_ids'] = str_replace('0', ',', $data['product_ids']);
          $data['product_ids'] = str_replace('', ',,', $data['product_ids']);

          $cart = explode(",", $data['product_ids']);
          $i = count($cart, true) - 1;
          $ii = 1;



          while (-1 < $i) {
            $result = mysqli_query($link, "SELECT `product_name` FROM `products` WHERE `id` LIKE '$cart[$i]'");
            while ($row = $result->fetch_assoc()) {
              echo '
                  <div class="text mt-3 text-center">
                    <h6 class="heading">' . $row['product_name'] . '   ';
              $resultt = mysqli_query($link, "SELECT `product_price` FROM `products` WHERE `id` LIKE '$cart[$i]'");

              while ($roww = $resultt->fetch_assoc()) {
                echo $roww['product_price'];

              }
              echo '€ 
    
                    </a></h6></div>
                    ';

            }
            $i = $i - 1;
          }
        }
        echo '</li>';
      }



      $result = mysqli_query($link, "SELECT `order_id` FROM `orders` WHERE 1");
      while ($data = $result->fetch_assoc()) {
        $order_id = $data['order_id'];

        $date2 = mysqli_query($link, "SELECT `date` FROM `orders` WHERE `order_id` LIKE '$order_id'");
        while ($date1 = $date2->fetch_assoc()) {
          $date = $date1['date'];
        }

        $stat2 = mysqli_query($link, "SELECT `stat` FROM `orders` WHERE `order_id` LIKE '$order_id'");
        while ($stat1 = $stat2->fetch_assoc()) {
          $stat = $stat1['stat'];
        }

        $user_id_order2 = mysqli_query($link, "SELECT `users_id` FROM `orders` WHERE `order_id` LIKE '$order_id'");
        while ($user_id_order1 = $user_id_order2->fetch_assoc()) {
          $user_id_order = $user_id_order1['users_id'];
          $user_name2 = mysqli_query($link, "SELECT `user_name` FROM `users` WHERE `user_id` LIKE '$user_id_order'");
          while ($user_name1 = $user_name2->fetch_assoc()) {
            $user_name = $user_name1['user_name'];
          }
          $user_mail2 = mysqli_query($link, "SELECT `user_mail` FROM `users` WHERE `user_id` LIKE '$user_id_order'");
          while ($user_mail1 = $user_mail2->fetch_assoc()) {
            $user_mail = $user_mail1['user_mail'];
          }
          $user_phone2 = mysqli_query($link, "SELECT `user_phone` FROM `users` WHERE `user_id` LIKE '$user_id_order'");
          while ($user_phone1 = $user_phone2->fetch_assoc()) {
            $user_phone = $user_phone1['user_phone'];
          }
        }

        echo '
        
        <li>
        <form method="POST"">
        <a href="?order_id=' . $order_id . '">Заказ №'. $order_id .' от ' . $date .
          '</a></br> Имя:  ' . $user_name .
          '</br> Email: ' . $user_mail .
          '</br> Телефон:  ' . $user_phone .
          '</br> Статус:  <input name="stat' . $order_id . '" type="pass2"  placeholder="' . $stat . '">
        </form>
        </li>
        ';
        for ($i = 1; $i <= $order_id; $i++) {
          if (isset($_POST['stat' . $order_id])) {
            $staat = $_POST['stat' . $order_id];
            mysqli_query($link, "UPDATE `orders` SET `stat`='$staat' WHERE `order_id` LIKE $order_id");
            echo '<script> window.location.href = "orderinfo.php"; </script>';
          }
        }
      }


    } else { //если обычный юзер
      if (!isset($_GET['order_id'])) {
        echo '<script> window.location.href = "lk.php"; </script>';
      } else {
        echo '<h2 class="mb-4 text mt-3 text-center">Заказ № ' . $_GET['order_id'] . '</h2>';
        $ordeeeeer = $_GET['order_id'];

        $result = mysqli_query($link, "SELECT `product_ids`FROM `orders` WHERE `order_id` LIKE '$ordeeeeer'");
        while ($data = $result->fetch_assoc()) {
          $data['product_ids'] = str_replace('[', ',', $data['product_ids']);
          $data['product_ids'] = str_replace(']', ',', $data['product_ids']);
          $data['product_ids'] = str_replace('0', ',', $data['product_ids']);
          $data['product_ids'] = str_replace('', ',,', $data['product_ids']);

          $cart = explode(",", $data['product_ids']);
          $i = count($cart, true) - 1;
          $ii = 1;



          while (-1 < $i) {
            $result = mysqli_query($link, "SELECT `product_name` FROM `products` WHERE `id` LIKE '$cart[$i]'");
            while ($row = $result->fetch_assoc()) {
              echo '
              <div class="text mt-3 text-center">
                    <h6 class="heading">' . $row['product_name'] . '   ';
              $resultt = mysqli_query($link, "SELECT `product_price` FROM `products` WHERE `id` LIKE '$cart[$i]'");

              while ($roww = $resultt->fetch_assoc()) {
                echo $roww['product_price'];

              }
              // /print_r($values[$i]. '<br>');
              echo '€ 
    
                    </a></h6></div>
                    ';

            }
            $i = $i - 1;
          }
        }
      }
    }
  }


  ?>

  <div class="col-md-12">
    <div class="form-group">
      <form method="POST">
        <input name="exit" class="col-md-12 btn btn-primary " type="submit" value="Обратно в кабинет">
      </form>
    </div>
  </div>
  </div>


  <?php
  if (isset($_POST['exit'])) {
    echo '<script> window.location.href = "lk.php"; </script>';
  }
  ?>

  </div>
  </section>




  <footer class="footer">
    <div class="container-fluid px-lg-5">
      <div class="row">
        <div class="col-md-9 py-5">
          <div class="row">
            <div class="col-md-4 mb-md-0 mb-4">
              <h2 class="footer-heading">Еще о нас</h2>
              <p>Средний текст</p>
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
                <script>document.write(new Date().getFullYear());</script> Все права зарезервированны | PathFinder.</a>
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