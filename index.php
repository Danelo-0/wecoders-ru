<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Главная | We Coders");
$APPLICATION->SetTitle('Главная');
?>

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main_slider",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "NAME",
			3 => "PREVIEW_TEXT",
			4 => "PREVIEW_PICTURE",
			5 => "DETAIL_TEXT",
			6 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => getIblockIdByCodeD7("main_slider"),
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main_slider"
	),
	false
); ?>

<!-- О нас -->
<section class="who-area-are pad-90" id="about_us">
	<div class="container">
		<h2 class="title-1">
			<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				array(
					"AREA_FILE_SHOW" => "page",
					"AREA_FILE_SUFFIX" => "about_title"
				)
			); ?>
		</h2>
		<div class="row">
			<div class="col-md-7">
				<div class="who-we">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						array(
							"AREA_FILE_SHOW" => "page",
							"AREA_FILE_SUFFIX" => "about_text"
						)
					); ?>
				</div>
			</div>
			<div class="col-md-5">
				<div class="about-bg">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						array(
							"AREA_FILE_SHOW" => "page",
							"AREA_FILE_SUFFIX" => "about_image"
						)
					); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main_activities",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "NAME",
			3 => "PREVIEW_TEXT",
			4 => "DETAIL_TEXT",
			5 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => getIblockIdByCodeD7("main_activities"),
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "glavnaya-stranitsa",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main_activities"
	),
	false
); ?>

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"infographics",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "NAME",
			2 => "PREVIEW_TEXT",
			3 => "DETAIL_TEXT",
			4 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => getIblockIdByCodeD7("infographics"),	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "4",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
); ?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>

<!-- Наши работы -->


<section class="work-area pt-90 pb-60" id="portfolio">
	<div class="container">
		<div class="row">
			<div class="section-heading text-center mb-70">
				<h2>Портфолио</h2>
				<p>Лучший способ найти хорошую команду - это посмотреть результаты её работы</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="portfolio-menu brand-filter text-center mb-70">
					<div class="filter" data-filter="all">Все</div>
					<div class="filter" data-filter=".landing">Лендинги</div>
					<div class="filter" data-filter=".internet_shop">Интренет магазины</div>
					<div class="filter" data-filter=".promo">Промо сайты</div>
					<div class="filter" data-filter=".corporative_site">Корпоративные порталы</div>
				</div>
			</div>
			<div id="Container">
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix landing promo">
					<div class="portfolio-wrapper portfolio-title">
						<div class="portfolio-img">
							<img src="img/portfolio/1.jpg" alt="" />
							<div class="work-text brand-bg">
								<div class="inner-text">
									<a class="view-portfolio image-link" href="img/portfolio/1.jpg">
										<span class="plus"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="portfolio-heading pd-15">
							<h4 class="mb-10">
								<a href="#">Green Planet</a>
							</h4>
							<h5 class="m-0">Дизайн</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix internet_shop corporative_site">
					<div class="portfolio-wrapper portfolio-title">
						<div class="portfolio-img">
							<img src="img/portfolio/2.jpg" alt="" />
							<div class="work-text brand-bg">
								<div class="inner-text">
									<a class="view-portfolio image-link" href="img/portfolio/2.jpg">
										<span class="plus"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="portfolio-heading pd-15">
							<h4 class="mb-10">
								<a href="#">Creative developer</a>
							</h4>
							<h5 class="m-0">Разработка лендинга</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix landing">
					<div class="portfolio-wrapper portfolio-title">
						<div class="portfolio-img">
							<img src="img/portfolio/3.jpg" alt="" />
							<div class="work-text brand-bg">
								<div class="inner-text">
									<a class="view-portfolio image-link" href="img/portfolio/3.jpg"><span
											class="plus"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="portfolio-heading pd-15">
							<h4 class="mb-10">
								<a href="portfolio_online_shop.html">Dress & Jeans</a>
							</h4>
							<h5 class="m-0">Разработка интернет-магазина</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix internet_shop">
					<div class="portfolio-wrapper portfolio-title">
						<div class="portfolio-img">
							<img src="img/portfolio/4.jpg" alt="" />
							<div class="work-text brand-bg">
								<div class="inner-text">
									<a class="view-portfolio image-link" href="img/portfolio/4.jpg"><span
											class="plus"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="portfolio-heading pd-15">
							<h4 class="mb-10">
								<a href="portfolio_landing.html">Mountain King</a>
							</h4>
							<h5 class="m-0">Разработка сайта визитки</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix corporative_site">
					<div class="portfolio-wrapper portfolio-title">
						<div class="portfolio-img">
							<img src="img/portfolio/5.jpg" alt="" />
							<div class="work-text brand-bg">
								<div class="inner-text">
									<a class="view-portfolio image-link" href="img/portfolio/5.jpg">
										<span class="plus"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="portfolio-heading pd-15">
							<h4 class="mb-10">
								<a href="#">Beauty SPA</a>
							</h4>
							<h5 class="m-0">Разработка сайта визитки</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix promo">
					<div class="portfolio-wrapper portfolio-title">
						<div class="portfolio-img">
							<img src="img/portfolio/6.jpg" alt="" />
							<div class="work-text brand-bg">
								<div class="inner-text">
									<a class="view-portfolio image-link" href="img/portfolio/6.jpg"><span
											class="plus"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="portfolio-heading pd-15">
							<h4 class="mb-10">
								<a href="#">Bent Application</a>
							</h4>
							<h5 class="m-0">Разработка лендинга</h5>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>


<!-- Отзывы клиентов -->
<section class="testimonial-area bg-color pad-90">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="testimonial-active dots-style">
					<div class="single-testimonial black-text text-center">
						<div class="testimonial-title">
							<span class="icon-quote"></span>
							<h3 class="black-text">Сроки не проблема!</h3>
						</div>
						<p><span>"</span>Спасут любой проект с самыми горящими сроками! Ребята действительно
							профессионалы своего дела.<span>"</span>
						</p>
						<div class="testimonial-author text-uppercase">
							<span>- Андрей Александров, Best Shop.</span>
						</div>
					</div>
					<div class="single-testimonial black-text text-center">
						<div class="testimonial-title">
							<span class="icon-quote"></span>
							<h3 class="black-text">Это взрыв!</h3>
						</div>
						<p><span>"</span>Я рад, что мы получили такой классный продукт на выходе!
							Думаю, что совместными усилиями мы реализуем ещё не один
							проект.<span>"</span></p>
						<div class="testimonial-author text-uppercase">
							<span>- Виталий Нохрин, NA'MAN Rec.</span>
						</div>
					</div>
					<div class="single-testimonial black-text text-center">
						<div class="testimonial-title">
							<span class="icon-quote"></span>
							<h3 class="black-text">Большая удача?</h3>
						</div>
						<p><span>"</span>Мы нашли WeCoders после десятка неудачных проектов с другими web студиями.
							И…
							Это большая удача, <span>"</span></p>
						<div class="testimonial-author text-uppercase">
							<span>- Ирина Граф, Cars & Cars company</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>