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
        class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel"
        data-filter="false"
        id="masters-gallery"
        data-rv-view="355"
        style="padding-top:0;padding-bottom:0;"
>
    <div class="mbr-gallery-row container">
        <div class="mbr-gallery-layout-default">
            <div>
                <div>
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
                        <div
                                id="<?=$this->GetEditAreaId($arItem['ID']);?>"
                                class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0"
                                data-video-url="false"
                                data-tags="Awesome"
                                style="float: left;display: block;"
                        >
                            <div
                                    href="#lb-masters-gallery"
                                    data-slide-to="<?=$key?>"
                                    data-toggle="modal"
                            >
                                <img
                                        border="0"
                                        src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                        alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                        title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                                />

                                <span class="icon-focus"></span>
                                <span class="mbr-gallery-title">
                                    <b><?=$arItem["NAME"]?></b><br>
                                    <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                                        <?echo $arItem["PREVIEW_TEXT"];?>
                                    <?endif;?>
                                </span>
                            </div>
                        </div>

                    <?endforeach;?>
                </div>
            </div>
        </div>
    </div>
    <!-- Lightbox -->
    <div
            data-app-prevent-settings=""
            class="mbr-slider modal fade carousel slide"
            tabindex="-1"
            data-keyboard="true"
            data-interval="false"
            id="lb-masters-gallery"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <?foreach($arResult["ITEMS"] as $key=>$arItem):?>
                            <?
                            $class = ($key === 0) ? ' class="active"' : '';
                            ?>
                            <li<?=$class?> data-app-prevent-settings="" data-target="#lb-masters-gallery" data-slide-to="<?=$key?>"></li>
                        <?endforeach;?>
                    </ol>
                    <div class="carousel-inner">
                        <?foreach($arResult["ITEMS"] as $key=>$arItem):?>
                            <?
                            $class = ($key === 0) ? ' active' : '';
                            ?>

                            <div class="carousel-item<?=$class?>">
                                <img
                                        src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"
                                        alt="<?=$arItem["DETAIL_PICTURE"]["ALT"]?>"
                                        title="<?=$arItem["DETAIL_PICTURE"]["TITLE"]?>"
                                />
                            </div>
                        <?endforeach;?>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-masters-gallery">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-masters-gallery">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
