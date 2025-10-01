<?
global $APPLICATION;

$section = $APPLICATION->IncludeComponent(
	"bitrix:menu.sections",
	"",
	Array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DEPTH_LEVEL" => "1",
		"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "content",
		"ID" => $_REQUEST["ID"],
		"IS_SEF" => "Y",
		"SECTION_PAGE_URL" => "#SECTION_CODE#/",
		"SECTION_URL" => "",
		"SEF_BASE_URL" => "/services/"
	)
);

$aMenuLinks = array_merge($aMenuLinks, $section);

// // echo '<pre>';
// // print_r($aMenuLinks);
// // echo '</pre>';

?>