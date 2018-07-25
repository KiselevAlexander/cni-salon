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


<section class="mbr-section mbr-section__container article" id="header3-c" data-rv-view="37" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">Портфолио</h3>

            </div>
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" data-filter="false" id="gallery3-b" data-rv-view="39" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 1.5rem;">
    <!-- Filter -->


    <!-- Gallery -->
    <div class="mbr-gallery-row container">
        <div class=" mbr-gallery-layout-default">
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
                            class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1"
                            data-video-url="false"
                            data-tags="Awesome"
                    >
                        <div
                                id="<?=$this->GetEditAreaId($arItem['ID']);?>"
                                href="#lb-gallery3-b"
                                data-slide-to="<?=$key?>"
                                data-toggle="modal"
                        >
                            <div
                                    class="square-image"
                                    style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"
                            ></div>
                            <span class="icon-focus"></span>
                        </div>
                    </div>
                    <?endforeach;?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-b">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <?foreach($arResult["ITEMS"] as $key=>$arItem):?>
                            <li
                                data-app-prevent-settings=""
                                data-target="#lb-gallery3-b"
                                data-slide-to="<?=$key?>"
                                <?=($key == 0) ? 'class="active"' : ''?>
                            ></li>
                        <?endforeach;?>
                    </ol>
                    <div class="carousel-inner">
                        <?foreach($arResult["ITEMS"] as $key=>$arItem):?>
                        <div class="carousel-item<?=($key == 0) ? ' active' : ''?>">
                            <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>">
                        </div>
                        <?endforeach;?>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery3-b">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery3-b">
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