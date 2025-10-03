<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);

// Фильтр новостей
global $arrFilter;
$arrFilter = [];

// Получаем поисковый запрос
$searchQuery = trim($_GET['q'] ?? '');
$sectionId = (int)($_GET['section'] ?? 0);

if ($searchQuery !== '') {
	$arrFilter = [
		[
			"LOGIC" => "OR",
			"%NAME" => $searchQuery,
			"%PREVIEW_TEXT" => $searchQuery,
		]
	];
}

if ($sectionId > 0) {
    $arrFilter['SECTION_ID'] = $sectionId;
    $arrFilter['INCLUDE_SUBSECTIONS'] = 'Y';
}
?>

<div class="blog-area ptb-90">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12 col-xs-12">

				<div class="news-list-container">
					<?
					$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"blog_elem_list",
						[
							"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
							"IBLOCK_ID" => $arParams["IBLOCK_ID"],
							"NEWS_COUNT" => $arParams["NEWS_COUNT"],
							"SORT_BY1" => $arParams["SORT_BY1"],
							"SORT_ORDER1" => $arParams["SORT_ORDER1"],
							"SORT_BY2" => $arParams["SORT_BY2"],
							"SORT_ORDER2" => $arParams["SORT_ORDER2"],
							"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
							"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
							"DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
							"SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
							"IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
							"SET_TITLE" => $arParams["SET_TITLE"],
							"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
							"MESSAGE_404" => $arParams["MESSAGE_404"],
							"SET_STATUS_404" => $arParams["SET_STATUS_404"],
							"SHOW_404" => $arParams["SHOW_404"],
							"FILE_404" => $arParams["FILE_404"],
							"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
							"CACHE_TYPE" => $arParams["CACHE_TYPE"],
							"CACHE_TIME" => $arParams["CACHE_TIME"],
							"CACHE_FILTER" => $arParams["CACHE_FILTER"],
							"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
							"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
							"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
							"PAGER_TITLE" => $arParams["PAGER_TITLE"],
							"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
							"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
							"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
							"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
							"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
							"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
							"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
							"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
							"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
							"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
							"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
							"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
							"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
							"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
							"FILTER_NAME" => $arParams["FILTER_NAME"],
							"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
							"FILTER_NAME" => "arrFilter",
							"CHECK_DATES" => $arParams["CHECK_DATES"],
						],
						$component
					); ?>
				</div>
				<!-- Правая колонка -->
				<div class="col-md-4 col-sm-12 col-xs-12 mt-sm-40 mt-xs-40">

					<!-- Поиск -->
					<div class="widget mb-60">
						<form class="search-form" id="search-form" method="get" action="">
							<input type="text" name="q" placeholder="Поиск" value="<?= htmlspecialchars($searchQuery) ?>" />
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>

					<? $APPLICATION->IncludeComponent(
						"bitrix:catalog.section.list",
						"blog_section_list",
						array(
							"COMPONENT_TEMPLATE" => ".default",
							"IBLOCK_TYPE" => "content",	// Тип инфоблока
							"IBLOCK_ID" => "8",	// Инфоблок
							"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
							"SECTION_CODE" => "",	// Код раздела
							"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
							"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
							"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",	// Дополнительный фильтр для подсчета количества элементов в разделе
							"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",	// Скрывать разделы с нулевым количеством элементов
							"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
							"SECTION_FIELDS" => array(	// Поля разделов
								0 => "ID",
								1 => "CODE",
								2 => "NAME",
								3 => "",
							),
							"SECTION_USER_FIELDS" => array(	// Свойства разделов
								0 => "",
								1 => "",
							),
							"FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
							"VIEW_MODE" => "LINE",	// Вид списка подразделов
							"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
							"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
							"CACHE_TYPE" => "A",	// Тип кеширования
							"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
							"CACHE_GROUPS" => "N",	// Учитывать права доступа
							"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
							"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
						),
						false
					); ?>

				</div>
			</div>
		</div>
	</div>
</div>

