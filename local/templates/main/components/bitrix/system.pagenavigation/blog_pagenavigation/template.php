<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

if (!$arResult["NavShowAlways"]) {
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>

<? if ($arResult["NavPageCount"] > 1): ?>
    <ul class="pagination mt-50">
        <? if ($arResult["NavPageNomer"] > 1): ?>
            <li>
                <a href="<?= $arResult["sUrlPath"] ?>?<?= $arResult["NavQueryString"] ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>" class="ajax-page">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        <? else: ?>
            <li class="disabled"><span><i class="fa fa-angle-left"></i></span></li>
        <? endif; ?>

        <? while ($arResult["nStartPage"] <= $arResult["nEndPage"]): ?>
            <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
                <li><span class="current"><?= $arResult["nStartPage"] ?></span></li>
            <? else: ?>
                <li>
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $arResult["NavQueryString"] ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>" class="ajax-page"><?= $arResult["nStartPage"] ?></a>
                </li>
            <? endif; ?>
            <? $arResult["nStartPage"]++; ?>
        <? endwhile; ?>

        <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
            <li>
                <a href="<?= $arResult["sUrlPath"] ?>?<?= $arResult["NavQueryString"] ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>" class="ajax-page">
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        <? else: ?>
            <li class="disabled"><span><i class="fa fa-angle-right"></i></span></li>
        <? endif; ?>
    </ul>
<? endif; ?>