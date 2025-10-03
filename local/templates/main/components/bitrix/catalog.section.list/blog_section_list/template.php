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

<? if (0 < $arResult["SECTIONS_COUNT"]): ?>

	<div class="widget mb-60">
		<h4 class="sidebar-title text-uppercase mb-35 pb-10">Категории</h4>
		<ul class="widget-cat">
			<li>
				<a href="#" class="widget-cat-link" data-section="0">Все</a>
			</li>
			<? foreach ($arResult['SECTIONS'] as $arSection): ?>
				<li>
					<a href="?section=<?= $arSection['ID']; ?>"
						class="widget-cat-link <?= ($arSection['ID'] == $sectionId ? 'active' : '') ?>"
						data-section-id="<?= $arSection['ID']; ?>">
						<?= $arSection['NAME']; ?>
					</a>
				</li>
			<? endforeach; ?>
		</ul>
	</div>

<? endif ?>
