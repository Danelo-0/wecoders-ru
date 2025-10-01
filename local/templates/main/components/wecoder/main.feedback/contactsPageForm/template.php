<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<div class="col-md-8">
	<div class="row">
		<? if (!empty($arResult["ERROR_MESSAGE"])) {
			foreach ($arResult["ERROR_MESSAGE"] as $v)
				ShowError($v);
		}
		if (!empty($arResult["OK_MESSAGE"])) {
		?><div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div><? } ?>
	</div>

	<div class="row">
		<form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
			<?= bitrix_sessid_post() ?>
			<div class="col-md-4 col-sm-6">
				<input type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>" placeholder="Имя" />
			</div>
			<div class="col-md-4 col-sm-6">
				<input type="text" name="user_email" value="<?= $arResult["AUTHOR_EMAIL"] ?>" placeholder="Email" />
			</div>
			<div class="col-md-4 col-sm-12">
				<input type="text" name="user_phone" value="<?= $arResult["AUTHOR_PHONE"] ?>" placeholder="Телефон" />
			</div>
			<div class="col-md-12 col-sm-12">
				<textarea name="MESSAGE" rows="10" cols="30" placeholder="Сообщение"><?= ($arResult["MESSAGE"] ?? '') ?></textarea>
				<input class="btn mt-30" type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
			</div>
		</form>
	</div>
</div>