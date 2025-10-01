<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

if (empty($arResult))
    return "";

$strReturn = '';

$strReturn .= '<div class="col-md-5 col-sm-6">
    <div class="breadcrumb-menu">
        <ol class="breadcrumb text-right">';

$lastItemKey = array_key_last($arResult);

foreach ($arResult as $index => $arItem) {
    $title = htmlspecialcharsex($arItem["TITLE"]);

    if (!empty($arItem["LINK"]) && $index !== $lastItemKey) {
        $strReturn .= '
            <li>
                <a href="' . $arItem["LINK"] . '">' . $title . '</a>
            </li>';
    } else {
        $strReturn .= '
            <li class="active">' . $title . '</li>';
    }
}

$strReturn .= '    </ol>
    </div>
</div>';

return $strReturn;

?>