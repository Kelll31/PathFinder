<!DOCTYPE html>
<html lang="ru">

<?php
include 'main_script.php';
$resulttt = mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` LIKE '$hashh'");
while ($dataaa = $resulttt->fetch_assoc()) {
	$userid = $dataaa['user_id'];
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
						<a href="#" class="d-flex align-items-center justify-content-center"><span
								class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
						<a href="#" class="d-flex align-items-center justify-content-center"><span
								class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
						<a href="#" class="d-flex align-items-center justify-content-center"><span
								class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
						<a href="#" class="d-flex align-items-center justify-content-center"><span
								class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
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
			<form method="GET" class="searchform order-lg-last">
				<div class="form-group d-flex">
					<input type="text" name="search" class="form-control pl-3" placeholder="быстрый поиск">
					<button type="submit" placeholder="" class="form-control search"><span
							class="fa fa-search"></span></button>
				</div>
			</form>
			<?php
			if (isset($_GET['search'])) {
				echo '<script> window.location.href = "shop.php?search=' . $_GET['search'] . '"; </script>';
			}
			?>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav mr-auto topmenu">
					<li class="nav-item"><a href="index.php" class="nav-link">Главная</a></li>
					<li class="nav-item "><a href="shop.php?category=0&page=1" class="nav-link">Все проекты </a></li>
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

					<li class="nav-item"><a href="user.php" class="nav-link">Профиль</a></li>
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
									class="ion-ios-arrow-forward"></i></a></span> <span>Все проекты <i
								class="ion-ios-arrow-forward"></i></span></p>
					<h1 class="mb-0 bread">Все проекты </h1>
				</div>
			</div>
		</div>
	</section>



	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h5 class="font-weight-bold">
						<?php



						if (!isset($_GET['id'])) {
							echo '<script> window.location.href = "shop.php?category=0&page=1"; </script>';
						} else {
							$productid = $_GET['id'];
							$resulttt = mysqli_query($link, "SELECT `product_name` FROM `products` WHERE `id` LIKE
							'$productid'"); // имя
							while ($rowww = $resulttt->fetch_assoc()) {
								echo $rowww['product_name'];
							}
						}


						?>
					</h5>
					<?php

					$result = mysqli_query($link, "SELECT `product_image` FROM `products` WHERE `id` LIKE '$productid'"); // картинка
					while ($row = $result->fetch_assoc()) {
						echo '<div class="img d-flex align-items-end ">
						<img src="' . $row['product_image'] . '" style="
						max-width: 200px;
					">
		
						</div>';
					}

					?>


				</div>
				<div class="col-md-8 text-center">
					<?php
					$result = mysqli_query($link, "SELECT `product_widetext` FROM `products` WHERE `id` LIKE '$productid'"); // картинка
					while ($row = $result->fetch_assoc()) {
						echo '<p> ' . $row['product_widetext'] . '</p>';
					}
					?>

				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group" style="margin-top: 10px;">
					<?php
					$prod_id = $_GET['id'];

					$prod_user_id = mysqli_query($link, "SELECT `user_id` FROM `products` WHERE `id` LIKE '$prod_id'");
					while ($prod_user_id1 = $prod_user_id->fetch_assoc()) {
						$prod_user_id2 = $prod_user_id1['user_id'];
					}

					$result = mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` LIKE '$hashh'");
					while ($data = $result->fetch_assoc()) {
						$userid = $data['user_id'];
					}

					if (mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` LIKE '$hashh'")->fetch_array() != 0) {



						if ($prod_user_id2 == $userid) {
							echo '<input name="buy' . $_GET['id'] . '" class="btn btn-primary text-center form-control submit px-3"	value="Вы владелец проекта">';
							echo '<h4 class="heading text-center">Запросы на участие</h4>';

							$produuuuct = $_GET['id'];
							$result = mysqli_query($link, "SELECT `user_answer` FROM `products` WHERE `id` LIKE '$produuuuct'");
							while ($data = $result->fetch_assoc()) {
								$data['user_answer'] = str_replace('[', ',', $data['user_answer']);
								$data['user_answer'] = str_replace(']', ',', $data['user_answer']);
								$data['user_answer'] = str_replace('0', ',', $data['user_answer']);
								$data['user_answer'] = str_replace('', ',,', $data['user_answer']);
								$cart = explode(",", $data['user_answer']);
								$cart_count = count($cart);
								if ($cart_count <= 0) {
									$cart_count = 'Нет';
								}
								$i = 1;
								while ($i != $cart_count) {
									$user_id_ans = $cart[$i];

									$date2 = mysqli_query($link, "SELECT `user_name` FROM `users` WHERE `user_id` LIKE '$user_id_ans'");
									while ($date1 = $date2->fetch_assoc()) {
										$date = $date1['user_name'];
										echo '<h4 class="heading text-center">' . $i . '. <a href=lk.php?openid=' . $user_id_ans . '>' . $date . '</a></h6>';
									}
									$i = $i + 1;
								}

							}

						} else {



							$result = mysqli_query($link, "SELECT `user_request` FROM `users` WHERE `user_hash` LIKE '$hashh'");
							while ($data = $result->fetch_assoc()) {
								$data['user_request'] = str_replace('[', ',', $data['user_request']);
								$data['user_request'] = str_replace(']', ',', $data['user_request']);
								$data['user_request'] = str_replace('0', ',', $data['user_request']);
								$data['user_request'] = str_replace('', ',,', $data['user_request']);
								$cart = explode(",", $data['user_request']);


								if (!isset($_POST['buy' . $_GET['id'] . ''])) {
								} else {

									array_push($cart, $_GET['id']);
									sort($cart);
									$cartt = implode(",", $cart);
									mysqli_query($link, "UPDATE `users` SET `user_request`='$cartt' WHERE `user_hash` LIKE '$hashh'");
									echo '<script> window.location.href = "cart.php"; </script>';
								}
							}
							$resu = mysqli_query($link, "SELECT `user_hash` FROM `users` WHERE `user_hash` LIKE '$hashh'");
							while ($dat = $resu->fetch_assoc()) {
								echo '
									<form method="POST">
										<input name="buy' . $_GET['id'] . '" class="btn btn-primary text-center form-control submit px-3" type="submit"
											value="Хочу участвовать">
									</form>';
							}
						}
					}




					?>
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
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
										title="Twitter"><span class="ion-logo-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
										title="Facebook"><span class="ion-logo-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
										title="Instagram"><span class="ion-logo-instagram"></span></a></li>
							</ul>
						</div>
						<div class="col-md-8">
							<div class="row justify-content-center">
								<div class="col-md-12 col-lg-10">
									<div class="row">



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
								PathFinder.</a>
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
							<textarea name="" id="" cols="30" rows="3" class="form-control"
								placeholder="Сообщение"></textarea>
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