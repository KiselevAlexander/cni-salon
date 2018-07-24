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
        class="mbr-section mbr-section__container article mbr-after-navbar"
        id="header3-1m"
        data-rv-view="304"
        style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 20px;"
>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">Отзывы о маникюре и педикюре CNI-salon</h3>
            </div>
        </div>
    </div>
</section>

<section class="mbr-cards mbr-section mbr-section-nopadding" id="features1-1o" data-rv-view="341" style="background-color: rgb(255, 255, 255);">
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

            if ($key % 4 === 0) {
                echo '</div><div class="row">';
            }

            ?>

            <div
                    id="<?=$this->GetEditAreaId($arItem['ID']);?>"
                    class="col-xs-12 col-lg-3"
                    style="padding-top: 0; padding-bottom: 80px;"
            >
                <div class="card cart-block">
                    <div class="card-img">
                        <img
                                class="card-img-top"
                                src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                        />
                    </div>
                    <div class="card-block">
                        <h4 class="card-title">Маникюр гель-лак</h4>
                        <h5 class="card-subtitle"><?=$arItem["NAME"]?></h5>
                        <p class="card-text">
                            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                                <?echo $arItem["PREVIEW_TEXT"];?>
                            <?endif;?>
                        </p>
                    </div>
                </div>
            </div>
        <?endforeach;?>
    </div>
</section>