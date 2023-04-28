<!DOCTYPE html>
<html lang="ru">

<?php
include 'main_script.php';
?>

<head>
	<title>PathFinder | Все проекты </title>
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
			<form action="GET" class="searchform order-lg-last">
				<div class="form-group d-flex">
					<input type="text" class="form-control pl-3" placeholder="Поиск">
					<button name="search" type="submit" placeholder="" class="form-control search"><span
							class="fa fa-search"></span></button>
				</div>
			</form>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav mr-auto topmenu">
					<li class="nav-item"><a href="index.php" class="nav-link">Главная</a></li>
					<li class="nav-item active"><a href="shop.php" class="nav-link">Все проекты </a></li>
					<li class="nav-item"><a href="cart.php" class="nav-link">Мои проекты</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Создать проект</a></li>
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
									class="ion-ios-arrow-forward"></i></a></span> <span>Все проекты </span></p>
					<h1 class="mb-0 bread">Все проекты </h1>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section" style="max-width: 98.5%;">
		<div class="row d-flex no-gutters">
			<div class="col-lg-5 ftco-animate ">
				<div class="containerr">

					<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
						<div class="sidebar-box">
							<form method="GET" class="search-form">
								<div class="form-group">
									<span class="icon icon-search"></span>
									<input type="text" name="search" placeholder="Быстрый поиск" class="form-control">
								</div>

								<?php



								?>



							</form>
						</div>
						<div class="sidebar-box ftco-animate">
							<form method="GET">
								<div class="categories">
									<h3>Категории</h3>
									<?php
									if (isset($_GET['category'])) {
										for ($i = 0; $i <= 10; $i++) {
											$result = mysqli_query($link, "SELECT `category_name` FROM `categories` WHERE `category_id` ='$i'");
											while ($data = $result->fetch_assoc()) {
												$category_name = $data['category_name'];
												if ($_GET['category'] == $i) {
													echo '<li class="active"><a href="?category=' . $i . '&page=1">' . $category_name . ' <span
															class="ion-ios-arrow-forward"></span></a>
															</li>';
												} else {
													echo '<li><a href="?category=' . $i . '&page=1">' . $category_name . '<span
															class="ion-ios-arrow-forward"></span></a>
															</li>';
												}
											}


										}



									} elseif (isset($_GET['search'])) {
										echo '
									
										
										
										
										
										
										
										
										

										<li><a href="?category=0&page=1">Аналитика <span
										class="ion-ios-arrow-forward"></span></a>
										</li>
										<li><a href="?category=2&page=1">Backen <span
											class="ion-ios-arrow-forward"></span></a></li>
										<li><a href="?category=3&page=1">Data Science <span
											class="ion-ios-arrow-forward"></span></a></li>
										<li><a href="?category=4&page=1">Разработка ПО<span
											class="ion-ios-arrow-forward"></span></a>
										</li>
										<li><a href="?category=5&page=1">SysAdm <span
											class="ion-ios-arrow-forward"></span></a></li>
										<li><a href="?category=6&page=1">Базы данных <span class="ion-ios-arrow-forward"></span></a>
										</li>
										<li><a href="?category=7&page=1">Безопасность <span
											class="ion-ios-arrow-forward"></span></a></li>
										<li><a href="?category=8&page=1">DevOps <span
											class="ion-ios-arrow-forward"></span></a>
										</li>
										<li><a href="?category=9&page=1">Mobile<span
											class="ion-ios-arrow-back"></span></a></li>
										<li><a href="?category=10&page=1">AI <span
											class="ion-ios-arrow-forward"></span></a></li>
										<li><a href="?category=1&page=1">Data Engineer <span
										class="ion-ios-arrow-forward"></span></a></li>';

									} else {
										echo '
											<li><a href="?category=0&page=1">Аналитика <span
											class="ion-ios-arrow-forward"></span></a>
											</li>
											
											<li><a href="?category=2&page=1">Backen <span
												class="ion-ios-arrow-forward"></span></a></li>
											<li><a href="?category=3&page=1">Data Science <span
												class="ion-ios-arrow-forward"></span></a></li>
											<li><a href="?category=4&page=1">Разработка ПО<span
												class="ion-ios-arrow-forward"></span></a>
											</li>
											<li><a href="?category=5&page=1">SysAdm <span
												class="ion-ios-arrow-forward"></span></a></li>
											<li><a href="?category=6&page=1">Базы данных<span class="ion-ios-arrow-forward"></span></a>
											</li>
											<li><a href="?category=7&page=1">Безопасность <span
												class="ion-ios-arrow-forward"></span></a></li>
											<li><a href="?category=8&page=1">DevOps <span
												class="ion-ios-arrow-forward"></span></a>
											</li>
											<li class="active"><a href="?category=9&page=1">Mobile<span
												class="ion-ios-arrow-back"></span></a></li>
											<li><a href="?category=10&page=1">AI <span
												class="ion-ios-arrow-forward"></span></a></li>
											<li><a href="?category=1&page=1">Data Engineer <span
											class="ion-ios-arrow-forward"></span></a></li>'
										;

									}


									?>


								</div>
							</form>
						</div>

						<div class="sidebar-box ftco-animate">
							<h3>Вам может понравится </h3>
							<div class="block-21 mb-4 d-flex">
								<a class="blog-img mr-4" style="background-image: url(images/P003.jpg);"></a>
								<div class="text">
									<h3 class="heading">Дозатор MIXTRON MX.150.P003</h3>
									<h3 class="heading"><a href="#">Перейти</a></h3>
								</div>
							</div>
							<div class="block-21 mb-4 d-flex">
								<a class="blog-img mr-4" style="background-image: url(images/P150.jpg);"></a>
								<div class="text">
									<h3 class="heading">Дозатор MIXTRON MX.150.P150</h3>
									<h3 class="heading"><a href="#">Перейти</a></h3>
								</div>
							</div>
							<div class="block-21 mb-4 d-flex">
								<a class="blog-img mr-4" style="background-image: url(images/P110.jpg);"></a>
								<div class="text">
									<h3 class="heading">Дозатор MIXTRON MX.150.P110</h3>
									<h3 class="heading"><a href="#">Перейти</a></h3>

								</div>
							</div>

						</div>

						<div class="sidebar-box ftco-animate">
							<h3>Теги</h3>
							<div class="tagcloud">
								<a href="#" class="tag-cloud-link">Трактора</a>
								<a href="#" class="tag-cloud-link">Стройка</a>
								<a href="#" class="tag-cloud-link">Водоснабжение</a>
								<a href="#" class="tag-cloud-link">Д30</a>
								<a href="#" class="tag-cloud-link">Решения для ИП</a>
							</div>
						</div>
					</div>

					<div class="row d-flex">

						<?php

						if (isset($_GET['page'])) {
							$page = $_GET['page'];
							$products_up = $page * 24;
							$products_down = $products_up - 24;
						} else {
							$_GET['page'] = 1;
							$products_up = 24;
							$products_down = 0;
						}

						if (isset($_GET['search'])) {
							$zapros = trim($_GET['search']);
							$result = mysqli_query($link, "SELECT `id` FROM `products` WHERE `product_name` LIKE '%$zapros%'");
							while ($roow = $result->fetch_assoc()) {
								$iddds = $roow['id'];

								$resulttt = mysqli_query($link, "SELECT `product_image` FROM `products` WHERE `id` LIKE '$iddds'");
								while ($dataaa = $resulttt->fetch_assoc()) {

									echo '<div class="col-md-5 d-flex ftco-animate">
										<div class="blog-entry align-self-stretch">
											<a name="id' . $iddds . '" class="block-20 rounded"
												style="background-image: url(' . $dataaa['product_image'] . ');">
												</a>
												<div class="text mt-3 text-center">';
									$resultt = mysqli_query($link, "SELECT `product_name` FROM `products` WHERE `id` LIKE '$iddds'");
									while ($dataa = $resultt->fetch_assoc()) {
										echo '<h3 class="heading">' . $dataa['product_name'] . '

										<form method="GET" >
										<button class="btn btn-primary text-center" name="id" value="' . $iddds . '" type="submit">Посмотреть</button>
										</form>
										</h3>
										<div class="meta mb-2">

										
										<div class="row no-gutters slider-text align-items-end style="
										style="margin-left: 0px; margin-right: 0px; margin-bottom: 0px; display:flex; center; justify-content: center;">

										</div>
												<div>';


										$resulttt = mysqli_query($link, "SELECT `product_price` FROM `products` WHERE `id` LIKE '$iddds'"); // цена
										while ($dataaa = $resulttt->fetch_assoc()) {
											echo $dataaa['product_price'];
										}
										echo '€
																</div>
															</div>
														</div>
													</div>
												</div>';
									}
								}
							}
						} else {
							if (isset($_GET['category'])) {
								$category = $_GET['category'];
							} else {
								$category = 9;
							}
							$id = mysqli_query($link, "SELECT `id` FROM `products` WHERE `product_class` = '$category' AND `id` <= '$products_up' AND `id` >= '$products_down'");
							while ($row = $id->fetch_assoc()) {
								$maxid = $row['id'];
								$result = mysqli_query($link, "SELECT `product_image` FROM `products` WHERE `id` LIKE '$maxid' AND `product_class` LIKE '$category'"); // картинка
								while ($row = $result->fetch_assoc()) {
									echo '
											<div class="col-md-5 d-flex ftco-animate">
												<div class="blog-entry align-self-stretch">
													<a name="id' . $maxid . '" class="block-20 rounded"
														style="background-image: url(' . $row['product_image'] . ');">
														</a>
														<div class="text mt-3 text-center">';
									$resulttt = mysqli_query($link, "SELECT `product_name` FROM `products` WHERE `id` LIKE '$maxid'AND `product_class` LIKE '$category'"); // имя
									while ($rowww = $resulttt->fetch_assoc()) {
										echo '<h3 class="heading">' . $rowww['product_name'] . '

											<form method="GET" >
											<button class="btn btn-primary text-center" name="id" value="' . $maxid . '" type="submit">Посмотреть</button>
											</form>
											</h3>
											<div class="meta mb-2">

											
										<div class="row no-gutters slider-text align-items-end style="
										style="margin-left: 0px; margin-right: 0px; margin-bottom: 0px; display:flex; center; justify-content: center;">

										</div>
												<div>';
									}
									$resultt = mysqli_query($link, "SELECT `product_price` FROM `products` WHERE `id` LIKE '$maxid'AND `product_class` LIKE '$category'"); // цена
									while ($roww = $resultt->fetch_assoc()) {
										echo $roww['product_price'];
									}
									echo '€
																</div>
															</div>
														</div>
													</div>
												</div>';
								}
							}

						}

						if (isset($_GET['id'])) {
							echo '<script> window.location.href = "productinfo.php?id=' . $_GET['id'] . '"; </script>';

						}
						?>

					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
					<ul>

						<?php
						if (isset($_GET['page'])) {
							$page = $_GET['page'];
							if ($page == 1) {
								echo '<li><a>&lt;</a></li>';
								echo '<li class="active"><a href="?page=';
								echo $page;
								echo '&category=';
								echo $category;
								echo '">';
								echo $page;
								echo '</a></li>';

								echo '<li><a href="?page=';
								echo $page + 1;
								echo '&category=';
								echo $category;
								echo '">';
								echo $page + 1;
								echo '</a></li>';

								echo '<li><a href="?page=';
								echo $page + 2;
								echo '&category=';
								echo $category;
								echo '">';
								echo $page + 2;
								echo '</a></li>';

								echo '<li><a href="?page=';
								echo $page + 3;
								echo '&category=';
								echo $category;
								echo '">';
								echo $page + 3;
								echo '</a></li>';


								echo '<li ><a href="?page=';
								echo $page + 4;
								echo '&category=';
								echo $category;
								echo '">';
								echo $page + 4;
								echo '</a></li>';

								echo '<li><a href="?page=';
								echo $page + 1;
								echo '&category=';
								echo $category;
								echo '">';
								echo '&gt;';
								echo '</a></li>';

							} else {

								if ($page == 2) {
									echo '<li ><a href="?page=';
									echo $page - 1;
									echo '&category=';
									echo $category;
									echo '">&lt;</a></li>';

									echo '<li ><a href="?page=';
									echo $page - 1;
									echo '&category=';
									echo $category;
									echo '">';
									echo $page - 1;
									echo '</a></li>';

									echo '<li class="active"><a href="?page=';
									echo $page;
									echo '&category=';
									echo $category;
									echo '">';
									echo $page;
									echo '</a></li>';

									echo '<li ><a href="?page=';
									echo $page + 1;
									echo '&category=';
									echo $category;
									echo '">';
									echo $page + 1;
									echo '</a></li>';


									echo '<li ><a href="?page=';
									echo $page + 2;
									echo '&category=';
									echo $category;
									echo '">';
									echo $page + 2;
									echo '</a></li>';

									echo '<li ><a href="?page=';
									echo $page + 3;
									echo '&category=';
									echo $category;
									echo '">';
									echo $page + 3;
									echo '</a></li>';

									echo '<li><a href="?page=';
									echo $page + 1;
									echo '&category=';
									echo $category;
									echo '">';
									echo '&gt;';
									echo '</a></li>';

								}
								if ($page > 2) {
									echo '<li ><a href="?page=';
									echo $page - 1;
									echo '&category=';
									echo $category;
									echo '">&lt;</a></li>';

									echo '<li ><a href="?page=';
									echo $page - 2;
									echo '&category=';
									echo $category;
									echo '">';
									echo $page - 2;
									echo '</a></li>';

									echo '<li ><a href="?page=';
									echo $page - 1;
									echo '&category=';
									echo $category;
									echo '">';
									echo $page - 1;
									echo '</a></li>';

									echo '<li class="active"><a href="?page=';
									echo $page;
									echo '&category=';
									echo $category;
									echo '">';
									echo $page;
									echo '</a></li>';


									echo '<li ><a href="?page=';
									echo $page + 1;
									echo '&category=';
									echo $category;
									echo '">';
									echo $page + 1;
									echo '</a></li>';

									echo '<li ><a href="?page=';
									echo $page + 2;
									echo '&category=';
									echo $category;
									echo '">';
									echo $page + 2;
									echo '</a></li>';

									echo '<li><a href="?page=';
									echo $page + 1;
									echo '&category=';
									echo $category;
									echo '">';
									echo '&gt;';
									echo '</a></li>';
								}

							}
						}
						?>
					</ul>
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

										<div class="col-md-4 mb-md-0 mb-4">
											<h2 class="footer-heading">Меню</h2>
											<ul class="list-unstyled">
												<li><a href="index.php" class="py-1 d-block">Главная</a></li>
												<li><a href="team.php" class="py-1 d-block">Мои 11</a></li>
												<li><a href="cart.php" class="py-1 d-block">Мои проекты</a></li>
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
								<script>
									document.write(new Date().getFullYear());
								</script> Все права зарезервированны |
								Торгово - промышленное Агентство.</a>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>