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
<div class="rew-footer-carousel">
	<? foreach ($arResult["ITEMS"] as $arItem) { ?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

		$img =  SITE_TEMPLATE_PATH . "/img/rew/no_photo.jpg";
		// PREVIEW_PICTURE
		if (isset($arItem["PREVIEW_PICTURE"]["ID"])) {
			$arImg = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width' => 49, 'height' => 49), BX_RESIZE_IMAGE_PROPORTIONAL, true);
			$img = $arImg['src'];
		}
		?>
		<div class="item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

			<div class="side-block side-opin">
				<div class="inner-block">
					<div class="title">
						<div class="photo-block">
							<img src="<?= $img ?>" alt="">
						</div>
						<div class="name-block">
							<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
								<?= $arItem['NAME'] ?></a>
						</div>
						<div class="pos-block"><?= $arItem['DISPLAY_PROPERTIES']['POSITION']['VALUE'] ?>,
							<?= $arItem['DISPLAY_PROPERTIES']['COMPANY']['VALUE'] ?></div>
					</div>
					<div class="text-block"><?= $arItem['PREVIEW_TEXT'] ?></div>
				</div>
			</div>
		</div>

	<? } ?>
</div>