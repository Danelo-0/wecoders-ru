<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?
// echo '<pre>';
// print_r($arResult);
// echo '</pre>';
?>

<? if (!empty($arResult)): ?>

	<div class="header-main-menu hidden-xs">
		<nav id="primary-menu">
			<ul class="main-menu text-right">

				<? foreach ($arResult as $arItem): ?>
					<? if ($arItem["SELECTED"]): ?>

						<li>
							<a href="<?= $arItem["LINK"] ?>" style="color:#03A9F4"><?= $arItem["TEXT"] ?></a>
						</li>

					<? else: ?>

						<li>
							<a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
						</li>

					<? endif ?>
				<? endforeach ?>

				<!-- <li>
				<a href="services.html"> Услуги
					<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
				<ul class="dropdown">
					<li>
						<a href="services_landing.html">Лендинг</a>
					</li>
					<li>
						<a href="services_online_shop.html">Интернет-магазин</a>
					</li>
				</ul>
			</li> -->

			</ul>
		</nav>
	</div>

<? endif ?>