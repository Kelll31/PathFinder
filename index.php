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
					<li class="nav-item active"><a href="index.php" class="nav-link">Главная</a></li>
					<li class="nav-item"><a href="shop.php?category=0&page=1" class="nav-link">Все проекты </a></li>
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
	<div class="hero-wrap">
		<div class="home-slider owl-carousel">
			<div class="slider-item" style="background-image:url(images/logo3.png);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 text-center">
								<h2>PathFinder</h2>
								<h1 class="mb-3">Ваша идеальная IT-команда</h1>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item" style="background-image:url(images/logo3.png);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 text-center">
								<h2>PathFinder</h2>
								<h1 class="mb-3">Находим лучших для вас</h1>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item" style="background-image:url(images/logo3.png);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 text-center">
								<h2>PathFinder</h2>
								<h1 class="mb-3">Точно в цель</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-section2">
		<div class="container">
			<div class="row ">
				<div class="col-md-3 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
					<div class="media block-6 d-block text-center pt-md-4">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-bee"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Быстрый и эффективный поиск команды в IT-сфере наша главная задача</h3>
							<p>Наш сервис профессионально подберет для вас наилучшую команду, основываясь на вашем
								профиле и параметрах проекта. Вместо того чтобы тратить время на поиск команды в
								IT-сфере.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
					<div class="media block-6 d-block text-center pt-md-4">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-skyline"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Наш сервис улучшает взаимодействие между заказчиком и командой в
								IT-сфере</h3>
							<p>. Наш сервис предлагает максимально быстро определиться с поиском необходимых
								разработчиков.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
					<div class="media block-6 d-block text-center pt-md-4">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-stairs"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Гарантии и поддержка наших пользовалтелей</h3>
							<p>Сервис поиска команды в IT-сфере обеспечивает постоянную поддержку клиентов и гарантирует
								качество работы команды на каждом этапе выполнения проекта. Мы ценим каждого клиента и
								устраиваем непрерывный мониторинг работ, чтобы обеспечить оптимальную эффективность
								работы и высокое качество результата.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch p-4 py-md-5 ftco-animate">
					<div class="media block-6 d-block text-center pt-md-4">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-home"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Вместо того чтобы тратить время на поиск команды в IT-сфере, доверьте
								это нашему сервису</h3>
							<p>Мы предоставляем широкий выбор профессиональных команд, готовых взяться за ваш проект в
								кратчайшие сроки..</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row no-gutters" style="justify-content: space-between;">
				<div class="col-md-12 col-lg-4 services-2 p-4 py-5 d-flex ftco-animate">
					<div class="py-3 d-flex">
						<div class="icon">
							<span class="flaticon-engineer"></span>
						</div>
						<div class="text">
							<h3>Эксперты &amp; профи</h3>
							<p class="mb-0">Мы гарантируем высококвалифицированных специалистов в разных областях
								IT-сферы: разработка, дизайн, тестирование и т.д. </p>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 services-2 p-4 py-5 d-flex ftco-animate">
					<div class="py-3 d-flex">
						<div class="icon">
							<span class="flaticon-engineer-1"></span>
						</div>
						<div class="text">
							<h3>Современные технологии</h3>
							<p class="mb-0">Мы понимаем, что каждый проект имеет свои особенности и требует
								индивидуального подхода. Поэтому мы придерживаемся специфических методов работы и
								используем новейшие технологии, чтобы наши команды могли реализовать проект в
								соответствии с вашими требованиями.</p>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 services-2 p-4 py-5 d-flex ftco-animate">
					<div class="py-3 d-flex">
						<div class="icon">
							<span class="flaticon-engineer-2"></span>
						</div>
						<div class="text">
							<h3>Поддержка 24/7</h3>
							<p class="mb-0">Одним из наших лучших качеств является высококлассная поддержка клиентов.
								Наша команда всегда готова предоставить помощь и ответить на любые вопросы клиента в
								любое время дня и ночи. Мы стремимся идти на встречу клиентам и решать их проблемы в
								кратчайшие сроки.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="ftco-counter ftco-animate" id="section-counter">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="text d-flex align-items-center">
							<strong class="number" data-number="2">0</strong>
						</div>
						<div class="text-2">
							<span>Лет<br>Опыта</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="text d-flex align-items-center">
							<strong class="number" data-number="19">0</strong>
						</div>
						<div class="text-2">
							<span> Проверенных <br>амбасодоров </span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="text d-flex align-items-center">
							<strong class="number" data-number="3">0</strong>
						</div>
						<div class="text-2">
							<span>Наша <br>команда</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="text d-flex align-items-center">
							<strong class="number" data-number="927">+0</strong>
						</div>
						<div class="text-2">
							<span>Более <br>клиентов</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>





	<section class="ftco-section testimony-section bg-primary">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Наши</span>
					<h2 class="mb-4">Отзывы</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></span></div>
								<div class="text">
									<p class="mb-4">"Я использую эту платформу для поиска команды в IT-сфере уже
										несколько месяцев и могу с уверенностью сказать, что она - лучшая на рынке. Мне
										очень нравится, как система подбирает команды на основе моих требований и
										критериев, это очень удобно и экономит мое время."</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="pl-3">
											<p class="name">Вася Пупкин</p>
											<span class="position">Ген. Деректор</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></span></div>
								<div class="text">
									<p class="mb-4">"Спасибо этой платформе! Благодаря ей мы смогли быстро найти команду
										для нашего проекта в IT-сфере. Команда была очень квалифицированной и весь
										проект был выполнен в срок!"</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
										<div class="pl-3">
											<p class="name">Вася Пупкин</p>
											<span class="position">Ген. Деректор</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></span></div>
								<div class="text">
									<p class="mb-4">"Отличный сервис поиска команды в IT-сфере со своей уникальной
										системой. Это действительно очень быстрый и легкий способ найти команду, которая
										точно подойдет для вашего проекта. Рекомендую всем, кто ищет качественные услуги
										в IT-сфере."</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
										<div class="pl-3">
											<p class="name">Вася Пупкин</p>
											<span class="position">Ген. Деректор</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></span></div>
								<div class="text">
									<p class="mb-4">"Я не представляю свою работу без этой платформы. Наша компания
										использует его на протяжении нескольких лет, и мы очень довольны результатами.
										Команды, которые мы нашли через эту платформу, были выдающимися, они
										профессионально выполнили все наши проекты!"</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="pl-3">
											<p class="name">Вася Пупкин</p>
											<span class="position">Ген. Деректор</span>
										</div>
									</div>
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
							<p>Мы онлайн-платформа для поиска талантливых единомышленников в сфере информационных технологий. Быстрая, удобная и эффективная платформа объединения людей в IT секторе.</p>
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