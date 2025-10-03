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
?>

<? if (!empty($arResult["ITEMS"])): ?>

	<? foreach ($arResult["ITEMS"] as $arItem): ?>

		<article class="post-wrapper mb-60">
			<? if (empty($arItem["PROPERTIES"]["VIDEO"]["VALUE"])): ?>
				<div class="post-img hover-bg-opacity">
					<a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>">
						<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" />
					</a>
				</div>
			<? else: ?>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe src="<?= $arItem["PROPERTIES"]["VIDEO"]["VALUE"] ?>"></iframe>
				</div>
			<? endif ?>

			<div class="post-content">

				<h3>
					<a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>"><?= $arItem["NAME"] ?></a>
				</h3>
				<div class="post-meta">
					<span><a href="#"><i class="fa fa-clock-o"></i> <?= $arItem["DATE_CREATE_FORMATED"] ?> </a></span> -
					<span><a href="#"><i class="fa fa-user"></i> <?= $arItem["PROPERTIES"]["AUTHOR"]["VALUE"] ?></a></span> -
					<span><a href="#"><?= $arItem["IBLOCK_SECTION_NAME"] ?></a></span>
					<!-- <span><a href="#"><i class="fa fa-comments"></i> 1 Комментарий</a></span> -->
				</div>
				<p><?= $arItem["PREVIEW_TEXT"] ?></p>
				<a class="read-more btn btn-small" href="<?= $arItem["DETAIL_PAGE_URL"]; ?>">Читать
					<i class="fa fa-arrow-right"></i></a>
			</div>
		</article>

	<? endforeach; ?>

	<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
		<br /><?= $arResult["NAV_STRING"] ?>
	<? endif; ?>


</div>

<? else: ?>

	 <article class="post-wrapper mb-60">
		<div class="post-content">
			<p>По вашему запросу ничего не найдено.</p>
		</div>
	</article>
</div>
<? endif ?>