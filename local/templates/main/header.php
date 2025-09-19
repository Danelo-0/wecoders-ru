<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Digital-агентство WeCoders</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- google fonts (шрифты) -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

	<?
	use Bitrix\Main\Page\Asset;

	$asset = Asset::getInstance();

	// CSS
	$asset->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
	$asset->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.css');
	$asset->addCss(SITE_TEMPLATE_PATH . '/css/animate-text.css');
	$asset->addCss(SITE_TEMPLATE_PATH . '/css/magnific-popup.css');
	$asset->addCss(SITE_TEMPLATE_PATH . '/css/et-line.css');
	$asset->addCss(SITE_TEMPLATE_PATH . '/css/pe-icon-7-stroke.css');
	$asset->addCss(SITE_TEMPLATE_PATH . '/css/shortcode/shortcodes.css');
	$asset->addCss(SITE_TEMPLATE_PATH . '/css/meanmenu.min.css');
	$asset->addCss(SITE_TEMPLATE_PATH . '/css/font-awesome.min.css');
	$asset->addCss(SITE_TEMPLATE_PATH . '/style.css');
	$asset->addCss(SITE_TEMPLATE_PATH . '/css/responsive.css');

	// JS
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/vendor/modernizr-2.8.3.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/vendor/jquery-1.12.0.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.counterup.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/waypoints.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.mixitup.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.meanmenu.js");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.nav.js");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/jquery.parallax-1.1.3.js");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/animate-text.js");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/plugins.js");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/main.js");

	$APPLICATION->ShowHead();
	?>
</head>

<body>
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>

	<!-- Линия с контактами -->
	<div class="header-top-area bg-color ptb-10 hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="welcome">
						<span><i class="fa fa-envelope"></i> admin@domain.com</span>
						<span><i class="fa fa-phone"></i> +012 345 6789</span>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="social-icon-header text-right">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Шапка сайта (меню) -->
	<header id="sticky-header" class="header-area header-wrapper white-bg">
		<!-- Меню (для десктопа) -->
		<div class="header-middle-area full-width">
			<div class="container">
				<div class="full-width-mega-dropdown">
					<div class="row">
						<!-- Логотип -->
						<div class="col-md-2 col-sm-3 col-xs-8">
							<div class="logo ptb-22">
								<a href="index.html">
									<img src="<?= SITE_TEMPLATE_PATH ?>/img/logo/logo.png" alt="main logo">
								</a>
							</div>
						</div>

						<!-- Меню (основное) -->
						<div class="col-md-10 col-sm-9 col-xs-4 text-right dark-menu">
							<div class="header-main-menu hidden-xs">
								<nav id="primary-menu">
									<ul class="main-menu text-right">
										<li>
											<a href="index.html">Главная</a>
										</li>
										<li>
											<a href="about_us.html">О нас</a>
										</li>
										<li>
											<a href="services.html"> Услуги
												<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
											<ul class="dropdown">
												<li>
													<a href="services_landing.html">Лендинг</a>
												</li>
												<li>
													<a href="services_online_shop.html">Интернет-магазин</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="portfolio.html"> Портфолио</a>
										</li>
										<li>
											<a href="blog.html">Блог</a>
										</li>
										<li>
											<a href="contacts.html">Контакты</a>
										</li>
									</ul>
								</nav>
							</div>

							<!-- Поиск -->
							<div class="header-right">
								<div class="header-search">
									<div class="search-wrapper">
										<a href="javascript:void(0);" class="search-open">
											<i class="pe-7s-search"></i>
										</a>
										<div class="search-inside animated bounceInUp">
											<i class="icon-close search-close fa fa-times"></i>
											<div class="search-overlay"></div>
											<div class="position-center-center">
												<div class="search">
													<form>
														<input type="search" placeholder="Поиск по сайту">
														<button type="submit"><i class="fa fa-search"></i></button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Меню (для мобилки) -->
		<div class="mobile-menu-area visible-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mobile-menu">
							<nav id="dropdown">
								<ul>
									<li>
										<a href="index.html">Главная</a>
									</li>
									<li>
										<a href="about_us.html">О нас</a>
									</li>
									<li>
										<a href="services.html">Услуги</a>
										<ul>
											<li>
												<a href="services_landing.html">Лендинг</a>
											</li>
											<li>
												<a href="services_online_shop.html">Интернет-магазин</a>
											</li>
										</ul>
									</li>
									<li><a href="portfolio.html">Портфолио</a></li>

									<li>
										<a href="blog.html">Блог</a>
									</li>
									<li>
										<a href="contacts.html">Контакты</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Хлебные крошки (навигация) -->
	<div class="breadcrumb-area brand-bg ptb-100">
		<div class="container width-100">
			<div class="row z-index">
				<div class="col-md-7 col-sm-6">
					<div class="breadcrumb-title">
						<h2 class="white-text">О студии</h2>
					</div>
				</div>
				<div class="col-md-5 col-sm-6">
					<div class="breadcrumb-menu">
						<ol class="breadcrumb text-right">
							<li>
								<a href="index.html">Главная</a>
							</li>
							<li>
								<a href="#">О нас</a>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>