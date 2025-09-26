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

use Bitrix\Highloadblock\HighloadBlockTable as HL;
use Bitrix\Main\Entity;

// Подгружаем HL-блок
$hlblock = HL::getList([
    'filter' => ['=TABLE_NAME' => 'Colors']
])->fetch();

$colorMap = [];

if ($hlblock) {
    $entity = HL::compileEntity($hlblock);
    $entityDataClass = $entity->getDataClass();

    // Загружаем все цвета HL-блока
    $res = $entityDataClass::getList([
        'select' => ['UF_XML_ID', 'UF_CLASS_COLOR']
    ]);
    while ($row = $res->fetch()) {
        $colorMap[$row['UF_XML_ID']] = $row['UF_CLASS_COLOR'];
    }
}
?>

<?php if (!empty($arResult["ITEMS"])): ?>
	<section id="pricing" class="pricing-area bg-color pt-60 pb-60">
		<div class="container">
			<div class="row">
				<div class="section-heading text-center mb-70">
					<h2>Разработка сайта</h2>
					<p>Какой сайт вам нужен? Выбирайте, оставляйте заявку в форме ниже и мы свяжемся с вами!</p>
				</div>
			</div>
			<div class="row">
				<?php foreach ($arResult["ITEMS"] as $item): ?>
					<?php
					$colorXmlId = $item['PROPERTIES']['COLORS']['VALUE'] ?? '';
					$colorClass = $colorMap[$colorXmlId] ?? '';
					?>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="single-pricing text-center mb-30">
							<div class="pricing-head">
								<h2 class="pricing-title text-uppercase"><?= htmlspecialchars($item['NAME']) ?></h2>
								<span><?= $item["PREVIEW_TEXT"] ?? '' ?></span>
							</div>
							<div class="pricing-plan-price <?= htmlspecialchars($colorClass) ?>">
								<span><?= $item["PROPERTIES"]["PRICE"]["~VALUE"]["TEXT"] ?? '' ?></span>
							</div>
							<div class="pricing-plan-list">
								<ul>
									<?php
									if (!empty($item["PROPERTIES"]["SERVICE_CONTENT"]["VALUE"])) {
										foreach ($item["PROPERTIES"]["SERVICE_CONTENT"]["VALUE"] as $content): ?>
											<li><?= htmlspecialchars($content) ?></li>
									<?php endforeach;
									} ?>
								</ul>
							</div>
							<div class="get-started">
								<a href="<?= $item["DETAIL_PAGE_URL"] ?>" class="btn">Узнать больше</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php else: ?>
	<p>Данных пока нет</p>
<?php endif; ?>