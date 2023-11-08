<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$str = $arResult['IBLOCK']['ELEMENT_NAME'] . ' - ' . $arResult['NAME'];
$APPLICATION->SetTitle($str . ' - ' . $arResult['COMPANY']['VALUE']);
$APPLICATION->SetPageProperty('title', $str);
?>