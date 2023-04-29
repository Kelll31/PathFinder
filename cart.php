<!DOCTYPE html>
<html lang="ru">

<?php
include 'main_script.php';
?>

<head>
  <title>PathFinder | Мои проекты</title>
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
            echo '
						<li class="nav-item active"><a href="cart.php" class="nav-link">Мои проекты</a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link">Создать проект</a></li>';
          } else {
          }
          ?>
          <li class="nav-item"><a href="user.php" class="nav-link">Профиль</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/logo2.png');"
    data-stellar-background-ratio="0.75">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Главная <i
                  class="ion-ios-arrow-forward"></i></a></span> <span>Мои проекты <i
                class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-0 bread">Мои проекты</h1>
        </div>
      </div>
    </div>

  </section>



  <section class="ftco-section">
    <div class="container">
      <div class="text mt-3 text-center">
        <h1 class="mb-0 bread">Мои запросы в проекты</h1>
        <?php
        if (mysqli_query($link, "SELECT `user_request` FROM `users` WHERE `user_hash` LIKE '$hashh'")->fetch_array() == 0) {
          echo "Нет активных запросов";
        } else {
          $result = mysqli_query($link, "SELECT `user_request` FROM `users` WHERE `user_hash` LIKE '$hashh'");
          while ($data = $result->fetch_assoc()) {
            $data['user_request'] = str_replace('[', ',', $data['user_request']);
            $data['user_request'] = str_replace(']', ',', $data['user_request']);
            $data['user_request'] = str_replace('0', ',', $data['user_request']);
            $data['user_request'] = str_replace('', ',,', $data['user_request']);

            $cart = explode(",", $data['user_request']);
            $i = count($cart, true) - 1;
            $ii = 1;



            while (-1 < $i) {
              $result = mysqli_query($link, "SELECT `product_name` FROM `products` WHERE `id` LIKE '$cart[$i]'");
              while ($row = $result->fetch_assoc()) {
                echo '<div class="text mt-3 text-center">
                <h4 class="heading"><a href=productinfo.php?id=' . $cart[$i] . '>Проект : ' . $row['product_name'] . '</a></h6>';
                echo '
                <form method="POST" >
                    <input name="delete' . $i . '" class="btn btn-primary text-center" type="submit"
                    value="Отказаться">
                </form>
                ';
                if (!isset($_POST['delete' . $i . ''])) {
                } else {
                  $cart[$i] = "";
                  $cartt = implode(",", $cart);
                  mysqli_query($link, "UPDATE `users` SET `user_request`='$cartt' WHERE `user_hash` LIKE '$hashh'");
                  echo '<script> window.location.href = "cart.php"; </script>';
                }
              }

              $i = $i - 1;
            }
          }
        }


        ?>
        <h1 class="mb-0 bread">Личные проекты</h1>
        <?php
        $result = mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` LIKE '$hashh'");
        while ($data = $result->fetch_assoc()) {
          $userid = $data['user_id'];
          if ($userid == 1) {
            echo '<a href="orderinfo.php" class="py-1 d-block subheading ">>Посмотреть все Проекты<</a>
                    <span class="subheading">Последние 20 Проектов:</span>
                    <div class="text mt-3 text-center">';

            $resul = mysqli_query($link, "SELECT MAX(`order_id`) FROM `orders` WHERE 1");
            while ($dataa = $resul->fetch_assoc()) {
              $id = $dataa['MAX(`order_id`)'];
              for ($i = 1; $i <= 20; $i++) {
                $result = mysqli_query($link, "SELECT `order_id` FROM `orders` WHERE `order_id` = '$id'");
                while ($data = $result->fetch_assoc()) {
                  $data['order_id'];

                  $resultt = mysqli_query($link, "SELECT `date` FROM `orders` WHERE `order_id` = '$id'");
                  while ($dataaa = $resultt->fetch_assoc()) {
                    $date = $dataaa['date'];
                  }
                  echo '<h4 class="heading"><a href=orderinfo.php?order_id=' . $data['order_id'] . '>Проект от ' . $date . '</a></h6>';
                }
                $id = $id - 1;
              }
            }


          } else {

            echo '<div class="text mt-3 text-center">';
            $user_idd = mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` LIKE '$hashh'");
            while ($dataa = $user_idd->fetch_assoc()) {
              $userr_id = $dataa['user_id'];
              $product_id = mysqli_query($link, "SELECT `id` FROM `products` WHERE `user_id` = '$userr_id'");
              while ($product_id1 = $product_id->fetch_assoc()) {
                $product_id2 = $product_id1['id'];

                $result = mysqli_query($link, "SELECT `user_answer` FROM `products` WHERE `id` LIKE '$product_id2'");
                while ($data = $result->fetch_assoc()) {
                  $data['user_answer'] = str_replace('[', ',', $data['user_answer']);
                  $data['user_answer'] = str_replace(']', ',', $data['user_answer']);
                  $data['user_answer'] = str_replace('0', ',', $data['user_answer']);
                  $data['user_answer'] = str_replace('', ',,', $data['user_answer']);
                  $cart = explode(",", $data['user_answer']);
                  $cart_count = count($cart) - 2;
                  if ($cart_count <= 0) {
                    $cart_count = 'Нет';
                  }

                }
                $date2 = mysqli_query($link, "SELECT `product_name` FROM `products` WHERE `id` LIKE '$product_id2'");
                while ($date1 = $date2->fetch_assoc()) {
                  $date = $date1['product_name'];
                }
                if ($cart_count == 1) {
                  echo '<h4 class="heading"><a href=productinfo.php?id=' . $product_id2 . '>Проект : ' . $date . '</a>
                  ' . $cart_count . ' запрос
                </h6>';
                }
                if ($cart_count > 1 && $cart_count < 5) {
                  echo '<h4 class="heading"><a href=productinfo.php?id=' . $product_id2 . '>Проект : ' . $date . '</a>
                  ' . $cart_count . ' запроса
                </h6>';
                }
                if ($cart_count > 5) {
                  echo '<h4 class="heading"><a href=productinfo.php?id=' . $product_id2 . '>Проект : ' . $date . '</a>
                  ' . $cart_count . ' запросов
                </h6>';
                }

              }
            }
          }
        }





        ?>



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
                        <li><a href="index.html" class="py-1 d-block">Главная</a></li>
                        <li><a href="cart.html" class="py-1 d-block">Мои проекты</a></li>
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