<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

if(!defined('SITE_TEMPLATE_PATH')) {
    define('SITE_TEMPLATE_PATH', '');
}

CJSCore::Init(["jquery2"]);
?>

<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title><? $APPLICATION->ShowTitle() ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.png">
	<!-- <script src="https://api-maps.yandex.ru/v3/?apikey=7648c946-9105-49a5-af58-d2bda057d210&lang=ru_RU"></script> -->

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
	$asset->addCss(SITE_TEMPLATE_PATH . '/styles.css');
	$asset->addCss(SITE_TEMPLATE_PATH . '/css/responsive.css');

	// JS
	$asset->addJs("https://api-maps.yandex.ru/v3/?apikey=7648c946-9105-49a5-af58-d2bda057d210&lang=ru_RU");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/map.js");

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

	$asset->addString('<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">');

	$APPLICATION->ShowHead();
	?>
</head>

<body>
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>

	<!-- Линия с контактами -->
	<? if (!($APPLICATION->GetCurDir() === '/')): ?>

		<div class="header-top-area bg-color ptb-10 hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="welcome">
							<span>
								<? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_TEMPLATE_PATH . "/includes/header_email.php"
									)
								); ?>
							</span>
							<span>
								<? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_TEMPLATE_PATH . "/includes/header_phone.php"
									)
								); ?>
							</span>
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

	<? endif ?>
	<!-- Шапка сайта (меню) -->
	<header id="sticky-header" class="header-area header-wrapper <?= ($APPLICATION->GetCurDir() === '/') ? 'transparent-header' : 'white-bg' ?>">
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

							<? $APPLICATION->IncludeComponent(
								"bitrix:menu",
								"top_menu",
								array(
									"ALLOW_MULTI_SELECT" => "N",
									"CHILD_MENU_TYPE" => "subtop",
									"DELAY" => "N",
									"MAX_LEVEL" => "2",
									"MENU_CACHE_GET_VARS" => array(),
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_TYPE" => "N",
									"MENU_CACHE_USE_GROUPS" => "N",
									"ROOT_MENU_TYPE" => "top",
									"USE_EXT" => "Y",
									"COMPONENT_TEMPLATE" => "top_menu"
								),
								false
							); ?>

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

	<? if (!($APPLICATION->GetCurDir() === '/')): ?>
		<!-- Хлебные крошки (навигация) -->
		<div class="breadcrumb-area brand-bg ptb-100">
			<div class="container width-100">
				<div class="row z-index">
					<div class="col-md-7 col-sm-6">
						<div class="breadcrumb-title">
							<h2 class="white-text"><? $APPLICATION->ShowTitle(false) ?></h2>
						</div>
					</div>
					<? $APPLICATION->IncludeComponent(
						"bitrix:breadcrumb",
						"breadCrumbWeCoders",
						array(
							"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
							"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
							"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
						),
						false
					);?>
				</div>
			</div>
		</div>
	<? endif ?>