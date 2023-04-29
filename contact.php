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
					<li class="nav-item"><a href="shop.php?category=0&page=1" class="nav-link">Все проекты </a></li>
					<?php
					if ($userid == 1) {
						echo '
						<li class="nav-item"><a href="orderinfo.php" class="nav-link">Админка</a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link">Создать проект</a></li>';

					} elseif (mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` LIKE '$hashh'")->fetch_array() != 0) {
						echo '
						<li class="nav-item"><a href="cart.php" class="nav-link">Мои проекты</a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link">Создать проект</a></li>';
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
									class="ion-ios-arrow-forward"></i></a></span> <span>Создать проект <i
								class="ion-ios-arrow-forward"></i></span></p>
					<h1 class="mb-0 bread">Создать проект</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4 text-center">Создать проект</h3>
									<div id="form-message-warning" class="mb-4"></div>





									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group text-center">
													<label class="label" for="nameee">Название</label>
													<input type="text" class="form-control" name="nameee"
														placeholder="Название">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group text-center">
													<label class="label" for="email">Ссылка на изображение</label>
													<input type="text" class="form-control" name="image"
														placeholder="Ссылка на изображение">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group text-center">
													<label class="label" for="subject">Категория проекта</label>
													<div class="tagcloud categories">
														<?php
														if (isset($_GET['category'])) {
															$category = $_GET['category'];
															for ($i = 0; $i <= 10; $i++) {
																$result = mysqli_query($link, "SELECT `category_name` FROM `categories` WHERE `category_id` ='$i'");
																while ($data = $result->fetch_assoc()) {
																	$category_name = $data['category_name'];
																	if ($_GET['category'] == $i) {
																		echo '<li class="active"><a href="?category=' . $i . '"class="tag-cloud-link">' . $category_name . '</a></li>';
																	} else {
																		echo '<li><a href="?category=' . $i . '"class="tag-cloud-link">' . $category_name . '</a></li>';
																	}
																}


															}
														} else {
															echo '<script> window.location.href = "contact.php?category=0"; </script>';
														}
														?>
													</div>

												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group text-center">
													<label class="label" for="#">Описание проекта</label>
													<textarea name="product_widetext" class="form-control" cols="30"
														rows="4" placeholder="Описание проекта"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group text-center">
													<input type="submit" value="Создать проект!" class="btn btn-primary"
														name="submitt">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
									<?php

									$result = mysqli_query($link, "SELECT `user_id` FROM `users` WHERE `user_hash` = '$hashh'");
									while ($row = $result->fetch_assoc()) {
										$userid = $row['user_id'];
									}
									if (isset($_POST['submitt'])) {
										if (empty($_POST['nameee']) == false) {
											$name = $_POST['nameee'];
											if (empty($_POST['image']) == false) {
												$image = $_POST['image'];
												if (empty($_GET['category']) == false) {
													$category = $_GET['category'];
													if (empty($_POST['product_widetext']) == false) {
														$product_widetext = $_POST['product_widetext'];
														mysqli_query($link, "INSERT INTO `products`( `product_class`, `product_name`, `product_widetext`, `product_image`,`user_id`) VALUES ('$category','$name','$product_widetext','$image','$userid')");
														unset($_POST['submitt']);

														$result = mysqli_query($link, "SELECT MAX(`id`) FROM `products` WHERE 1");
														while ($row = $result->fetch_assoc()) {
															$maxid = $row['MAX(`id`)'];
														}
														echo '<script> window.location.href = "productinfo.php?id=' . $maxid . '"; </script>';

													} else {
														$product_widetext = 97655312376244;
													}
												} else {
													$category = 97655312376244;
												}

											} else {
												$image = 97655312376244;
											}
										} else {
											$name = 81237621378123;
										}



									}
									?>




								</div>
							</div>
							<div class="col-md-13 d-flex align-items-stretch">
								<div id="map"><iframe
										src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2565.6747813500656!2d37.58538021952121!3d54.16576924170488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41343ffa67ecd867%3A0x620c982482247d64!2z0KLRg9C70YzRgdC60LjQuSDQs9C-0YHRg9C00LDRgNGB0YLQstC10L3QvdGL0Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgg!5e0!3m2!1sru!2sru!4v1682725718044!5m2!1sru!2sru"
										width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
										referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
							</div>
						</div>

					</div>
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
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>