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
$img = SITE_TEMPLATE_PATH . '/img/rew/no_photo.jpg';

if (isset($arResult["DETAIL_PICTURE"]["SRC"]))
	$img = $arResult["DETAIL_PICTURE"]["SRC"];
?>
<h3>
	<?= GetMessage('REWS') ?> -<?= $arResult["NAME"] ?> - <?= $arResult['DISPLAY_PROPERTIES']['COMPANY']['VALUE'] ?>
</h3>
<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?= $arResult["DETAIL_TEXT"] ?>
		</div>
		<div class="review-autor">
			<?= $arResult["NAME"] ?>,
			<?= FormatDate(["" => 'j F Y'], MakeTimeStamp($arResult["DISPLAY_ACTIVE_FROM"])) ?><?= GetMessage('YEAR') ?>.,
			<?= $arResult['DISPLAY_PROPERTIES']['POSITION']['VALUE'] ?>
			<?= $arResult['DISPLAY_PROPERTIES']['COMPANY']['VALUE'] ?>.
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap">
		<img src="<?= $img ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>">
	</div>
</div>
<? if ($arResult['PROPERTIES']['FILE']['VALUE']) { ?>
	<div class="exam-review-doc">
		<p><?= GetMessage("DOCS") ?>:</p>
		<? foreach ($arResult['PROPERTIES']['FILE']['VALUE'] as $idFile) { ?>
			<?php
			$scrFile = CFile::GetPath($idFile);
			$odFile = CFile::GetByID($idFile);
			$arFile = $odFile->Fetch();
			?>
			<div class="exam-review-item-doc">
				<img class="rew-doc-ico" src="<? SITE_TEMPLATE_PATH; ?>/img/icons/pdf_ico_40.png">
				<a href="<?= $scrFile ?>"><?= $arFile['ORIGINAL_NAME'] ?></a>
			</div>
		<? } ?>
	</div>
<? } ?>