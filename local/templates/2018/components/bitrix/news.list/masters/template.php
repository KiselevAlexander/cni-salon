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

<section
        class="mbr-section mbr-section__container article"
        id="header3-1r"
        data-rv-view="353"
        style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;"
>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">Мастера CNI-salon</h3>
                <small class="mbr-section-subtitle">
                    Мастера маникюра, педикюра, бровисты, мастера наращивания ресниц и шугаринга.
                </small>
            </div>
        </div>
    </div>
</section>


<section
        class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel masters"
        data-filter="false"
        id="masters-gallery"
        data-rv-view="355"
        style="padding-top:0;padding-bottom:0;"
>
    <div class="mbr-gallery-row container">
        <div class="mbr-gallery-layout-default">
            <div>
                <div class="row">
                    <?foreach($arResult["ITEMS"] as $key=>$arItem):?>
                        <?
                        $this->AddEditAction(
                                $arItem['ID'], $arItem['EDIT_LINK'],
                                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT")
                        );
                        $this->AddDeleteAction(
                                $arItem['ID'],
                                $arItem['DELETE_LINK'],
                                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
                        );
                        ?>
                        <div id="<?=$this->GetEditAreaId($arItem['ID']);?>"
                             class="col-xs-12 col-sm-6 col-md-4 col-lg-3 masters-item"
                        >
                            <div class="masters-description">
                                <div class="square-image"
                                     style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"
                                     title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                                >
                                </div>
                                <span class="icon-focus"></span>
                                <div class="mbr-gallery-title">
                                    <b><?=$arItem["NAME"]?></b><br>
                                    <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                                        <div class="masters-description-text">
                                            <?echo $arItem["PREVIEW_TEXT"];?>
                                        </div>
                                    <?endif;?>
                                </div>
                            </div>
                        </div>

                    <?endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>
