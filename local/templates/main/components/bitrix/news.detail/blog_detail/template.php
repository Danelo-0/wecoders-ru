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

<? if (!empty($arResult)): ?>
	<!-- Блог -->
	<div class="blog-area ptb-90">
		<div class="container">
			<div class="row">
				<!-- Контент материала -->
				<div class="col-md-12 col-sm-12 col-xs-12">
					<article class="post-wrapper mb-60">
						<h3 class="text-blue"><?= $arResult["NAME"] ?></h3>

						<? if (!empty($arResult["DETAIL_PICTURE"])): ?>
							<div class="post-img hover-bg-opacity">
								<img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>" />
							</div>
						<? else: ?>
							<div class="embed-responsive embed-responsive-16by9">
								<iframe src="<?= $arResult["PROPERTIES"]["VIDEO"]["VALUE"] ?>"></iframe>
							</div>
						<? endif ?>


						<div class="post-content">

							<div class="post-meta">
								<span><a href="#"><i class="fa fa-clock-o"></i> <?= $arResult["DATE_CREATE_FORMATED"] ?> </a></span> -
								<span><a href="#"><i class="fa fa-user"></i> <?= $arResult["PROPERTIES"]["AUTHOR"]["VALUE"] ?> </a></span> -
								<span><a href="#"><?= $arResult["IBLOCK_SECTION_NAME"] ?></a></span>
							</div>

							<p><?= $arResult["DETAIL_TEXT"] ?></p>

						</div>
					</article>

					<!-- Комментарии -->
					<h3 class="total-comments mb-30 pb-15">4 комментария</h3>
					<ul class="media-list comment-list mt-30">
						<!-- Коммент 1 -->
						<li class="media">
							<div class="media-body">
								<div class="comment-info">
									<h4 class="author-name">Алексей Потапов</h4>
									<div class="comment-meta">
										<a href="#" class="comment-report-link">Ответить</a>
									</div>
								</div>
								<p>Система управления содержимым веб-сайтов Битрикс (с 2007 года используется название "1С-Битрикс") выпущена как отчуждаемый от разработчиков продукт в 2002 году.
									30 мая 2018 года выпущена последняя на данный момент версия ядра под номером 18.0.0.</p>
							</div>
						</li>

						<!-- Коммент 2 -->
						<li class="media">
							<div class="media-body">
								<div class="comment-info">
									<h4 class="author-name">Александр М.</h4>
								</div>
								<p>Отличное уточнение!</p>
							</div>
						</li>
					</ul>

					<!-- Форма для ввода комментария -->
					<div class="comments-form mt-40">
						<div class="row">
							<form action="#">
								<div class="col-md-6 mb-30">
									<input type="text" placeholder="Ваше имя" />
								</div>
								<div class="col-md-6 mb-30">
									<input type="email" placeholder="Email" />
								</div>
								<div class="col-md-12">
									<textarea name="message" cols="30" rows="3" placeholder="Комментарий"></textarea>
									<button class="btn btn-lg mt-30">Отправить</button>
								</div>
							</form>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

<? endif; ?>
