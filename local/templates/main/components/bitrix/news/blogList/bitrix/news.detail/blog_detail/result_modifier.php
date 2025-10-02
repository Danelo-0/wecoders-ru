<?
    $arResult["DATE_CREATE_FORMATED"] = FormatDate("j F", MakeTimeStamp($arResult["TIMESTAMP_X"]));

    $sectionId = $arResult['IBLOCK_SECTION_ID'];

    if ($sectionId) {
        $rsSection = CIBlockSection::GetByID($sectionId);
        if ($arSection = $rsSection->GetNext()) {
            $arResult["IBLOCK_SECTION_NAME"] = $arSection['NAME'];
        }
    }
?>