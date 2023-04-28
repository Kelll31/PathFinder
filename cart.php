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
          <li class="nav-item active"><a href="cart.php" class="nav-link">Мои проекты</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Связаться с нами</a></li>
          <li class="nav-item"><a href="team.php" class="nav-link">Мои 11</a></li>
          <li class="nav-item"><a href="user.php" class="nav-link">Профиль</a></li>
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
                  class="ion-ios-arrow-forward"></i></a></span> <span>Мои проекты <i
                class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-0 bread">Мои проекты</h1>
        </div>
      </div>
    </div>

  </section>



  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          <div class="carousel-3d wrap" data-gap="20" data-bfc id="s1">
            <figure>


              <?php
              $summ = 0;
              $scherchik = 0;
              $hashh = $_COOKIE["hash"];
              if (mysqli_query($link, "SELECT `user_cart` FROM `users` WHERE `user_hash` LIKE '$hashh'")->fetch_array() == 0) {
                echo "Вы еще ничего не добавляли";
              } else {
                $result = mysqli_query($link, "SELECT `user_cart` FROM `users` WHERE `user_hash` LIKE '$hashh'");
                while ($data = $result->fetch_assoc()) {
                  $data['user_cart'] = str_replace('[', ',', $data['user_cart']);
                  $data['user_cart'] = str_replace(']', ',', $data['user_cart']);
                  $data['user_cart'] = str_replace('0', ',', $data['user_cart']);
                  $data['user_cart'] = str_replace('', ',,', $data['user_cart']);
                  $cart = explode(",", $data['user_cart']);
                  $i = count($cart, true) - 1;
                  $ii = 1;

                  while (-1 < $i) {

                    $result = mysqli_query($link, "SELECT `product_image` FROM `products` WHERE `id` LIKE '$cart[$i]'"); // картинка
                    while ($row = $result->fetch_assoc()) {
                      echo '
                          <div>
                            <div class="d-flex ftco-animate">
                              <div class="blog-entry align-self-stretch">
                                <a href="blog-single.php" class="block-20 rounded"
                                  style="background-image: url(images/' . $row['product_image'] . ');">
                                </a>
                                <div class="text mt-3 text-center">';
                      $resulttt = mysqli_query($link, "SELECT `product_name` FROM `products` WHERE `id` LIKE '$cart[$i]'"); // имя
                      while ($rowww = $resulttt->fetch_assoc()) {
                        echo '<h3 class="heading"><a href="#"> ' . $rowww['product_name'] . '</a>
                                  </h3>
                                  <div class="meta mb-2">
                                    <div>';
                      }
                      $resultt = mysqli_query($link, "SELECT `product_price` FROM `products` WHERE `id` LIKE '$cart[$i]'"); // цена
                      while ($roww = $resultt->fetch_assoc()) {
                        echo $roww['product_price'];
                      }
                      echo '€
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>';
                    }
                    $i = $i - 1;
                  }
                }
              }

              ?>




            </figure>
            <nav>
              <button class="nav prev btn btn-dark mt-4 nav-item"><span class="ion-ios-arrow-back"></span> Назад
              </button>
              <button class="nav next btn btn-dark mt-4 nav-item">Вперед <span
                  class="ion-ios-arrow-forward"></span></button>
            </nav>
          </div>
        </div>
        <div class="text-center heading-section heading-section-white ftco-animate">
          <span class="subheading">Ваша Мои проекты:</span>
          <form method="POST">
            <input name="deleteall" data-fancybox="" data-src="#authorization" type="submit"
              class="btn btn-dark mt-4 w-100 cart-buy-btn" value="Удалить все">
          </form>

          <?php
          if (!isset($_POST['deleteall'])) {
          } else {
            mysqli_query($link, "UPDATE `users` SET `user_cart`='0' WHERE `user_hash` LIKE '$hashh'");
            echo '<script> window.location.href = "cart.php"; </script>';
          }

          for ($iii = 1; $iii <= count($cart, true) - 1; $iii++) {
            if (!isset($_POST['delete' . $iii . ''])) {
            } else {
              $cart[$iii] = "";
              $cartt = implode(",", $cart);
              mysqli_query($link, "UPDATE `users` SET `user_cart`='$cartt' WHERE `user_hash` LIKE '$hashh'");
              echo '<script> window.location.href = "cart.php"; </script>';
            }

            if (!isset($_POST['add' . $iii . ''])) {
            } else {

              array_push($cart, $cart[$iii]);
              sort($cart);
              $cartt = implode(",", $cart);
              mysqli_query($link, "UPDATE `users` SET `user_cart`='$cartt' WHERE `user_hash` LIKE '$hashh'");
              echo '<script> window.location.href = "cart.php"; </script>';
            }

          }


          if (mysqli_query($link, "SELECT `user_cart` FROM `users` WHERE `user_hash` LIKE '$hashh'")->fetch_array() == 0) {
            echo "Вы еще ничего не добавляли";
          } else {
            $result = mysqli_query($link, "SELECT `user_cart` FROM `users` WHERE `user_hash` LIKE '$hashh'");
            while ($data = $result->fetch_assoc()) {
              $data['user_cart'] = str_replace('[', ',', $data['user_cart']);
              $data['user_cart'] = str_replace(']', ',', $data['user_cart']);
              $data['user_cart'] = str_replace('0', ',', $data['user_cart']);
              $data['user_cart'] = str_replace('', ',,', $data['user_cart']);

              //$values = array_count_values($cart);
              //print_r($values);
              //print_r(count($values, true) - 1);
          
              $cart = explode(",", $data['user_cart']);
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
                    $scherchik = $scherchik + $roww['product_price'];

                  }
                  // /print_r($values[$i]. '<br>');
                  echo '€ 
                <form method="POST" >
                <input name="add' . $i . '" class="btn btn-primary text-center" type="submit"
                  value="Добавить">
                  <input name="delete' . $i . '" class="btn btn-primary text-center" type="submit"
                  value="Удалить">

              </form>

                </a></h6></div>
                ';

                }
                $i = $i - 1;
              }
              echo '
                  <script>
                  schetchik = 0;
                  totalprice =' . $scherchik . ';
                  </script>                
                  ';




            }
          }

          ?>


        </div>
      </div>

      <script>
        window.addEventListener("load", () => {
          var carousels = document.querySelectorAll(".carousel-3d");
          for (var i = 0; i < carousels.length; i++) {
            carousel(carousels[i]);
          }
        });
        function carousel(root) {
          var figure = root.querySelector("figure"),
            nav = root.querySelector("nav"),
            images = figure.children,
            n = images.length,
            gap = root.dataset.gap || 0,
            bfc = "bfc" in root.dataset,
            theta = 2 * Math.PI / n,
            currImage = 0;
          setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
          window.addEventListener("resize", () => {
            setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
          });
          setupNavigation();
          function setupCarousel(n, s) {
            var apothem = s / (2 * Math.tan(Math.PI / n));
            figure.style.transformOrigin = `50% 50% ${-apothem}px`;
            for (var i = 0; i < n; i++) images[i].style.padding = `0 ${gap}px`;
            for (i = 0; i < n; i++) {
              images[i].style.transformOrigin = `50% 50% ${-apothem}px`;
              images[i].style.transform = `rotateY(${i * theta}rad)`;
            }
            if (bfc)
              for (i = 0; i < n; i++) images[i].style.backfaceVisibility = "hidden";
            rotateCarousel(currImage);
          }
          function setupNavigation() {
            nav.addEventListener("click", onClick, true);
            function onClick(e) {
              e.stopPropagation();
              var t = e.target;
              if (t.tagName.toUpperCase() != "BUTTON") return;
              if (t.classList.contains("next")) {
                currImage++;
              } else {
                currImage--;
              }
              rotateCarousel(currImage);
            }
          }
          function rotateCarousel(imageIndex) {
            figure.style.transform = `rotateY(${imageIndex * -theta}rad)`;
          }
        }
      </script>
  </section>


  <section class="ftco-section testimony-section bg-primary">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <span class="subheading">Итого</span>
          <h2 class="mb-4">Сумма заказа</h2>
          <h2 class="mb-4">
            <script>
              document.write(totalprice, " €");
            </script>
          </h2>

          <form method="POST">
            <input name="confirmmm" class="btn btn-dark mt-4 w-100 cart-buy-btn" type="submit" value="Оформить заказ">
          </form>
          <?php

          if (!isset($_POST['confirmmm'])) {
          } else {


            $result = mysqli_query($link, "SELECT `user_cart` FROM `users` WHERE `user_hash` LIKE '$hashh'");
            while ($data = $result->fetch_assoc()) {
              $data['user_cart'] = str_replace('[', ',', $data['user_cart']);
              $data['user_cart'] = str_replace(']', ',', $data['user_cart']);
              $data['user_cart'] = str_replace('0', ',', $data['user_cart']);
              $data['user_cart'] = str_replace('', ',,', $data['user_cart']);
              $date = date('Y-m-d H:i:s');
              $ordeer = $data['user_cart'];

              $resul = mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` LIKE '$hashh'");
              while ($dataa = $resul->fetch_assoc()) {
                $userr_id = $dataa['user_id'];
                mysqli_query($link, "INSERT INTO `orders`(`product_ids`, `date`, `users_id`,`stat`) VALUES ('$ordeer','$date','$userr_id','Cоздан')");
                mysqli_query($link, "UPDATE `users` SET `user_cart`='0' WHERE `user_hash` LIKE '$hashh'");
                mysqli_query($link, "SELECT `user_cart` FROM `users` WHERE `user_hash` LIKE '$hashh'");
                echo 'Заказ оформлен <script> window.location.href = "lk.php"; </script>';
                echo "Заказ оформлен";
              }
            }
          }

          ?>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">

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
                        <li><a href="team.html" class="py-1 d-block">Мои 11</a></li>
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