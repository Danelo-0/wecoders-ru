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

// echo '<pre>';
// print_r($arResult);
// echo '</pre>';

?>

<? if (!empty($arResult)): ?>
	<!-- Контент для детальной страниыцы портфолио -->
	<div class="single-portfolio-area pt-90 pb-60">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="portfolio-details">
						<h3><?= !empty($arResult['PROPERTY_3']) ? $arResult['PROPERTY_3'] : '' ?></h3>

						<? if (!empty($arResult['PROPERTIES']['DESCRIPTION']['VALUE'])): ?>
							<? foreach ($arResult['PROPERTIES']['DESCRIPTION']['VALUE'] as $index => $value): ?>
								<span class="text-colort-blue">
									<?= !empty($arResult['PROPERTIES']['DESCRIPTION']['DESCRIPTION'][$index]) ? $arResult['PROPERTIES']['DESCRIPTION']['DESCRIPTION'][$index] : '' ?>
								</span>
								<p><?= !empty($value['TEXT']) ? $value['TEXT'] : '' ?></p>
							<? endforeach; ?>
						<? endif; ?>
					</div>
				</div>

				<div class="col-md-5">
					<div class="portfolio-meta">
						<ul>
							<? if (!empty($arResult['PROPERTIES']['ADD_INFO']['VALUE'])): ?>
								<? foreach ($arResult['PROPERTIES']['ADD_INFO']['VALUE'] as $index => $value): ?>
									<li>
										<span><b><?= !empty($value) ? $value : '' ?></b></span>
										<?= !empty($arResult['PROPERTIES']['ADD_INFO']['DESCRIPTION'][$index]) ? $arResult['PROPERTIES']['ADD_INFO']['DESCRIPTION'][$index] : '' ?>
									</li>
								<? endforeach ?>
							<? endif; ?>
						</ul>

						<a href="<?= !empty($arResult['PROPERTIES']['LINK']['DESCRIPTION']) ? $arResult['PROPERTIES']['LINK']['DESCRIPTION'] : '' ?>" class="btn mt-30">
							<?= !empty($arResult['PROPERTIES']['LINK']['VALUE']) ? $arResult['PROPERTIES']['LINK']['VALUE'] : '' ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Фотогалерея -->
	<div class="img-gallery-area pt-30 pb-60">
		<div class="container">
			<div class="row">
				<? if (!empty($arResult['DISPLAY_PROPERTIES']['GALLERY']['VALUE']) && count($arResult['DISPLAY_PROPERTIES']['GALLERY']['VALUE']) > 1): ?>
					<? foreach ($arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE'] as $elem): ?>
						<div class="col-md-6 col-sm-4">
							<div class="img-gallery hover-bg-opacity mb-30">
								<a class="image-link" href="<?= !empty($elem['SRC']) ? $elem['SRC'] : '' ?>">
									<img src="<?= !empty($elem['SRC']) ? $elem['SRC'] : '' ?>" alt="" />
								</a>
							</div>
						</div>
					<? endforeach; ?>
				<? elseif (!empty($arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE']['SRC'])): ?>
					<div class="col-md-6 col-sm-4">
						<div class="img-gallery hover-bg-opacity mb-30">
							<a class="image-link" href="<?= $arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE']['SRC'] ?>">
								<img src="<?= $arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE']['SRC'] ?>" alt="" />
							</a>
						</div>
					</div>
				<? endif; ?>
			</div>
		</div>
	</div>

<? endif ?>
