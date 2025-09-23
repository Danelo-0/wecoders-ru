<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?
// echo '<pre>';
// print_r($arResult);
// echo '</pre>';
?>

<? if (!empty($arResult)): ?>

	<div class="col-lg-7 col-md-7 col-sm-12">
		<div class="footer-nav white-text">
			<nav>
				<ul>

					<? foreach ($arResult as $arItem): ?>
						<? if ($arItem["SELECTED"]): ?>
						<li class="mega-parent">
							<a href="<?= $arItem["LINK"] ?>" style="color:#81ddff"><?= $arItem["TEXT"] ?></a>
						</li>
						<? else: ?>

							<li class="mega-parent">
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
	</div>

<? endif ?>


