<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<hr>
<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?if($arResult["DETAIL_TEXT"] <> ''):?>
				<?echo $arResult["DETAIL_TEXT"];?>
			<?else:?>
				<?echo $arResult["PREVIEW_TEXT"];?>
			<?endif?>
			</div>
			<div class="review-autor">
			<?if($arResult["NAME"]):?>
				<?=$arResult["NAME"]. ', '?>
			<?endif;?>
			<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
				<?=$arResult["DISPLAY_ACTIVE_FROM"] . ','?>
			<?endif;?>
			<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
				<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
					<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
				<?else:?>
					<?=$arProperty["DISPLAY_VALUE"];?>
				<?endif?>
			<?endforeach;?>
			</div>
		</div>
		<div style="clear: both;" class="review-img-wrap">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
			<img
				class="detail_picture"
				border="0"
				src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
				width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
				height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
				alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
				title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
				/>
			<?else:?>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/no_photo.jpg" alt="img">
		<?endif?>
		</div>
		<?if($arResult["PROPERTIES"]["DOCUMENTS"]["VALUE"]):?>
		<div class="exam-review-doc">
			<p><?=$arResult["PROPERTIES"]["DOCUMENTS"]["NAME"]?>:</p>
			<?foreach ($arResult["PROPERTIES"]['DOCUMENTS']['VALUE'] as $pid => $arProperty):?>
				<?$arFile = CFile::GetFileArray($arProperty);?>
			<div  class="exam-review-item-doc">
				<img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png"><a target="blank" href="<?=$arFile["SRC"]?>"><?=$arFile["ORIGINAL_NAME"]?></a>
			</div>
			<?endforeach?>
		</div>
		<?endif?>
		<hr>
</div>



