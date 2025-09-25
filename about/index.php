<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "О нас | We Coders");
$APPLICATION->SetPageProperty("keywords", "О нас, о компании, we coders, сайты");
$APPLICATION->SetPageProperty("description", "О нашей компании");
$APPLICATION->SetTitle("О нас");
?>

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
               </p>
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

<?$APPLICATION->IncludeComponent("bitrix:news.list", "team", Array(
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
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => getIblockIdByCodeD7("team"),	// Код информационного блока
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
	),
	false
);?>

<? $APPLICATION->IncludeComponent(
   "bitrix:news.list",
   "reviews",
   array(
      "ACTIVE_DATE_FORMAT" => "d.m.Y",
      "ADD_SECTIONS_CHAIN" => "N",
      "AJAX_MODE" => "N",
      "AJAX_OPTION_ADDITIONAL" => "",
      "AJAX_OPTION_HISTORY" => "N",
      "AJAX_OPTION_JUMP" => "N",
      "AJAX_OPTION_STYLE" => "Y",
      "CACHE_FILTER" => "N",
      "CACHE_GROUPS" => "Y",
      "CACHE_TIME" => "36000000",
      "CACHE_TYPE" => "A",
      "CHECK_DATES" => "Y",
      "DETAIL_URL" => "",
      "DISPLAY_BOTTOM_PAGER" => "Y",
      "DISPLAY_DATE" => "N",
      "DISPLAY_NAME" => "N",
      "DISPLAY_PICTURE" => "Y",
      "DISPLAY_PREVIEW_TEXT" => "N",
      "DISPLAY_TOP_PAGER" => "N",
      "FIELD_CODE" => array(
         0 => "ID",
         1 => "NAME",
         2 => "PREVIEW_TEXT",
         3 => "DETAIL_TEXT",
         4 => "",
      ),
      "FILTER_NAME" => "",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "IBLOCK_ID" => getIblockIdByCodeD7("reviews"),
      "IBLOCK_TYPE" => "content",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "INCLUDE_SUBSECTIONS" => "N",
      "MESSAGE_404" => "",
      "NEWS_COUNT" => "4",
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
      "SORT_BY1" => "SORT",
      "SORT_BY2" => "",
      "SORT_ORDER1" => "ASC",
      "SORT_ORDER2" => "",
      "STRICT_SECTION_CHECK" => "N",
      "COMPONENT_TEMPLATE" => "reviews"
   ),
   false
); ?>
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>