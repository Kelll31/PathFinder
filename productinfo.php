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
			<div class="text-center">
				<?php
				if (!isset($_GET['id'])) {
					echo '<script> window.location.href = "shop.php?category=0&page=1"; </script>';
				} else {
					$productid = $_GET['id'];
					$resulttt = mysqli_query($link, "SELECT `product_name` FROM `products` WHERE `id` LIKE'$productid'"); // имя
					while ($rowww = $resulttt->fetch_assoc()) {
						echo '
						<div class="form-group row no-gutters">
					<div class="col-md-7" style="height: 50px;">
					<h5 class="font-weight-bold">' . $rowww['product_name'] . '
					</div>

					<div class="class=" col-md-13 text-center heading-section heading-section-white ftco-animatefadeInUp ftco-animated>
';
						$prod_id = $_GET['id'];

						$prod_user_id = mysqli_query($link, "SELECT `user_id` FROM `products` WHERE `id` LIKE '$prod_id'");
						while ($prod_user_id1 = $prod_user_id->fetch_assoc()) {
							$prod_user_id2 = $prod_user_id1['user_id'];
						}
						if (mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` LIKE '$hashh'")->fetch_array() != 0) {
							if ($prod_user_id2 != $userid) {



								$result = mysqli_query($link, "SELECT `user_request` FROM `users` WHERE `user_hash` LIKE '$hashh'");
								while ($data = $result->fetch_assoc()) {
									$data['user_request'] = str_replace('[', ',', $data['user_request']);
									$data['user_request'] = str_replace(']', ',', $data['user_request']);
									$data['user_request'] = str_replace('0', ',', $data['user_request']);
									$data['user_request'] = str_replace('', ',,', $data['user_request']);
									$cart = explode(",", $data['user_request']);


									if (isset($_POST['buy' . $_GET['id']])) {
										array_push($cart, $_GET['id']);
										sort($cart);
										$cartt = implode(",", $cart);
										mysqli_query($link, "UPDATE `users` SET `user_request`='$cartt' WHERE `user_hash` LIKE '$hashh'");
										echo '<script> window.location.href = "cart.php"; </script>';
									}
									if (isset($_POST['buyy' . $_GET['id']])) {
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
									
										<input name="buy' . $_GET['id'] . '" class="btn btn-primary text-center " style="padding: 5px 16px;" type="submit"
											value="Хочу участвовать">
									</form>';
								}
							} else {
								echo '<input name="" class="btn btn-primary text-center " style="padding: 5px 16px;" type="submit"
								value="Вы владелец проекта">';
								
							}


							echo '
					</div>
				</div>
						
						
						
						
						';
						}
					}
				}
				?>

			</div>
			<div class="row">
				<div class="col-md-4" style="flex: 0 0 30%;max-width: 30%;">


					<?php
					$result = mysqli_query($link, "SELECT `cords` FROM `products` WHERE `id` LIKE '$productid'"); // картинка
					while ($cords1 = $result->fetch_assoc()) {
						$cords = explode(",", $cords1['cords']);

					}
					$result = mysqli_query($link, "SELECT `product_image` FROM `products` WHERE `id` LIKE '$productid'"); // картинка
					while ($row = $result->fetch_assoc()) {
						echo '<div class="img d-flex align-items-end ">
						<img src="' . $row['product_image'] . '" style="width: 100%;">
					
						<iframe src="https://yandex.ru/map-widget/v1/?ll=' . $cords[0] . '%2C' . $cords[1] . '&z=12" width="100%"
						height="300px" frameborder="1" allowfullscreen="true"></iframe>
					
						</div>';
					}

					?>


				</div>
				<div class="col-md-8 text-center" style="flex: 0 0 70%;max-width: 70%;">
					<?php
					$result = mysqli_query($link, "SELECT `product_widetext` FROM `products` WHERE `id` LIKE '$productid'"); // описание
					while ($row = $result->fetch_assoc()) {
						echo '<p> ' . $row['product_widetext'] . '</p>';
					}


					?>

				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group" style="margin-top: 10px;">



					<?php

					if (mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` LIKE '$hashh'")->fetch_array() != 0) {
						$product_id = $_GET['id'];
						$user_id = $userid;
						echo '<h5 class="font-weight-bold">Комментарии:</h5>';
						$result_set = mysqli_query($link, "SELECT * FROM `comments` WHERE `product_id`='$product_id'"); //Вытаскиваем все комментарии для данной страницы
						while ($row = $result_set->fetch_assoc()) {
							$coment_user_id = $row['user_id'];
							$coment_user = $row['comment'];
							$i = 0;


							$coment_id = $row['comment_id'];
							$date22 = mysqli_query($link, "SELECT `user_name` FROM `users` WHERE `user_id` LIKE '$coment_user_id'");
							while ($date11 = $date22->fetch_assoc()) {
								$user_name = $date11['user_name'];
								if ($userid == 1) {
									echo '
										<form method="POST">
											<div class=" row no-gutters">
												<div class="col-md-7" style="height: 50px;">
												' . $user_name . ': ';

									if (strlen($coment_user) > 100) {
										$com = str_split($coment_user, 100);
										$strip = count(str_split($coment_user, 100));
										while ($i != $strip) {
											echo $com[$i] . '</br>';
											$i = $i + 1;
										}
										echo '</div>';
									} else {
										echo $coment_user;
									}
									echo '
												</div>

												<div class="col-md-13 text-center heading-section heading-section-white ftco-animate fadeInUp ftco-animated">
													<input name="deletecoment' . $coment_id . '" class="btn btn-primary text-center "  type="submit"value="Удалить" style="padding: 5px 16px;">
												</div>
											</div>
										</form>';
									if (isset($_POST['deletecoment' . $coment_id])) {
										mysqli_query($link, "DELETE FROM `comments` WHERE `comment_id` = '$coment_id'");
										echo '<script> window.location.href = "productinfo.php?id=' . $product_id . '"; </script>';
									}
								} else {
									echo $user_name . ': ' . $coment_user;
									echo "<br />";
								}
							}



						}

						echo '
								<form method="POST">
									<div class=" row no-gutters" style="justify-content: space-between;">
										<div class="col-md-7" style="height: 50px;">
											<textarea name="text_comment" id="" cols="30" rows="3" class="form-control"
												placeholder="Написать комментарий"></textarea>
										</div>

										<div class="class="col-md-13 text-center heading-section heading-section-white ftco-animate fadeInUp ftco-animated">
											<input name="comment" class="btn btn-primary text-center "  type="submit"value="Отправить">
										</div>
									</div>
								</form>';


						if (isset($_POST['comment'])) {
							$text_comment = $_POST["text_comment"];
							mysqli_query($link, "INSERT INTO `comments`(`user_id`, `product_id`, `comment`) VALUES ('$user_id','$product_id','$text_comment')");
							echo '<script> window.location.href = "productinfo.php?id=' . $product_id . '"; </script>';
						}


					}

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
							<p>Мы онлайн-платформа для поиска талантливых единомышленников в сфере информационных
								технологий. Быстрая, удобная и эффективная платформа объединения людей в IT секторе.</p>
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