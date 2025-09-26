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

<section class="who-area-are pad-90" id="about_us">
	<div class="container">
		<h2 class="title-1"><?= !empty($arResult['PROPERTIES']['DETAIL_TITLE']['VALUE']) ? $arResult['PROPERTIES']['DETAIL_TITLE']['VALUE'] : '' ?></h2>
		<div class="row">
			<div class="col-md-7">
				<div class="who-we">
					<?= !empty($arResult['PROPERTIES']['DESCRIPTION']['~VALUE']['TEXT']) ? $arResult['PROPERTIES']['DESCRIPTION']['~VALUE']['TEXT'] : '' ?>
				</div>
			</div>
			<div class="col-md-5">
				<div class="about-bg">
					<img src="<?= !empty($arResult['DETAIL_PICTURE']['SRC']) ? $arResult['DETAIL_PICTURE']['SRC'] : '' ?>"
						alt="<?= !empty($arResult['DETAIL_PICTURE']['ALT']) ? $arResult['DETAIL_PICTURE']['ALT'] : '' ?>" />
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Доп. контент об услуге -->
<div class="pb-60">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3 class="mb-30">Вопросы и ответы</h3>
				<div class="brand-accordion">
					<div class="panel-group icon angle-icon" id="accordion" role="tablist" aria-multiselectable="true">
						<?php if (!empty($arResult['PROPERTIES']['QUASTIONS']['DESCRIPTION'])): ?>
							<?php foreach ($arResult['PROPERTIES']['QUASTIONS']['DESCRIPTION'] as $index => $value): ?>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading<?= $index ?>">
										<h4 class="panel-title">
											<a class="<?= $index === 0 ? '' : 'collapsed' ?>"
												role="button"
												data-toggle="collapse"
												data-parent="#accordion"
												href="#collapse<?= $index ?>"
												aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
												aria-controls="collapse<?= $index ?>">
												<?= !empty($value) ? $value : '' ?>
											</a>
										</h4>
									</div>
									<div id="collapse<?= $index ?>"
										class="panel-collapse collapse <?= $index === 0 ? 'in' : '' ?>"
										role="tabpanel"
										aria-labelledby="heading<?= $index ?>"
										aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>">
										<div class="panel-body">
											<?= !empty($arResult['PROPERTIES']['QUASTIONS']['VALUE'][$index]['TEXT']) ? $arResult['PROPERTIES']['QUASTIONS']['VALUE'][$index]['TEXT'] : '' ?>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6">
				<h3 class="mb-30">Этапы разработки</h3>
				<div class="my-tab">
					<!-- Nav tabs -->
					<ul class="custom-tab mb-15" role="tablist">
						<?php if (!empty($arResult['PROPERTIES']['TABS_CONTENT']['DESCRIPTION'])): ?>
							<?php foreach ($arResult['PROPERTIES']['TABS_CONTENT']['DESCRIPTION'] as $index => $value): ?>
								<li role="presentation" class="<?= $index === 0 ? 'active' : '' ?>">
									<a href="#<?= !empty($arResult['PROPERTIES']['TABS_CODE']['VALUE'][$index]) ? $arResult['PROPERTIES']['TABS_CODE']['VALUE'][$index] : '' ?>"
										aria-controls="<?= !empty($arResult['PROPERTIES']['TABS_CODE']['VALUE'][$index]) ? $arResult['PROPERTIES']['TABS_CODE']['VALUE'][$index] : '' ?>"
										role="tab"
										data-toggle="tab">
										<?= !empty($value) ? $value : '' ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<?php if (!empty($arResult['PROPERTIES']['TABS_CONTENT']['VALUE'])): ?>
							<?php foreach ($arResult['PROPERTIES']['TABS_CONTENT']['VALUE'] as $index => $value): ?>
								<div role="tabpanel"
									class="tab-pane fade <?= $index === 0 ? 'in active' : '' ?>"
									id="<?= !empty($arResult['PROPERTIES']['TABS_CODE']['VALUE'][$index]) ? $arResult['PROPERTIES']['TABS_CODE']['VALUE'][$index] : '' ?>">
									<?= !empty($value['TEXT']) ? $value['TEXT'] : '' ?>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>