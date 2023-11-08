<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$cp = $this->__component;

if (is_object($cp)) {
    $cp->arResult['COMPANY'] = $arResult["PROPERTIES"]['COMPANY'];
    $cp->SetResultCacheKeys(array('COMPANY'));
}