<?
foreach ($arResult["ITEMS"] as &$item) {
    $item["DATE_CREATE_FORMATED"] = FormatDate("j F", MakeTimeStamp($item["DATE_CREATE"]));

    $sectionId = $item['IBLOCK_SECTION_ID'];

    if ($sectionId) {
        $rsSection = CIBlockSection::GetByID($sectionId);
        if ($arSection = $rsSection->GetNext()) {
            $item["IBLOCK_SECTION_NAME"] = $arSection['NAME'];
        }
    }
}

// echo "<pre>";
// print_r($arResult["ITEMS"]["IBLOCK_SECTION_NAME"]);
// echo "</pre>";

?>