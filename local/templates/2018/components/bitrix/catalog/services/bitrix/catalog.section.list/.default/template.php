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

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));



if ('Y' == $arParams['SHOW_PARENT_NAME'] && 0 < $arResult['SECTION']['ID'])
{
	$this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
	$this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

	?><h1
		class="<? echo $arCurView['TITLE']; ?>"
		id="<? echo $this->GetEditAreaId($arResult['SECTION']['ID']); ?>"
	><a href="<? echo $arResult['SECTION']['SECTION_PAGE_URL']; ?>?new=1"><?
		echo (
			isset($arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]) && $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"] != ""
			? $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]
			: $arResult['SECTION']['NAME']
		);
	?></a></h1><?
}

if (0 < $arResult["SECTIONS_COUNT"])
{
?>
<ul class="<? echo $arCurView['LIST']; ?>">
<?
foreach ($arResult['SECTIONS'] as &$arSection)
{
    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

    if (false === $arSection['PICTURE'])
        $arSection['PICTURE'] = array(
            'SRC' => $arCurView['EMPTY_IMG'],
            'ALT' => (
            '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                : $arSection["NAME"]
            ),
            'TITLE' => (
            '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                : $arSection["NAME"]
            )
        );
    ?><li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
    <a
            href="<? echo $arSection['SECTION_PAGE_URL']; ?>?new=1"
            class="bx_catalog_line_img"
            style="background-image: url('<? echo $arSection['PICTURE']['SRC']; ?>');"
            title="<? echo $arSection['PICTURE']['TITLE']; ?>"
    ></a>
    <h2 class="bx_catalog_line_title">
        <a href="<? echo $arSection['SECTION_PAGE_URL']; ?>?new=1"><? echo $arSection['NAME']; ?></a><?
        if ($arParams["COUNT_ELEMENTS"])
        {
            ?> <span>(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
        }
        ?></h2><?
    if ('' != $arSection['DESCRIPTION'])
    {
        ?><p class="bx_catalog_line_description"><? echo $arSection['DESCRIPTION']; ?></p><?
    }
    ?><div style="clear: both;"></div>
    </li><?
}
?>
</ul>
<?
	echo ('LINE' != $arParams['VIEW_MODE'] ? '<div style="clear: both;"></div>' : '');
}
?></div>