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


<section class="mbr-section mbr-section__container article" id="header3-8" data-rv-view="4" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">Цены на услуги салона</h3>
                <small class="mbr-section-subtitle"></small>
            </div>
        </div>
    </div>
</section>


<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" data-filter="true" id="gallery3-9" data-rv-view="6" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 1.5rem;">
    <!-- Filter -->
    <div class="mbr-gallery-filter container gallery-filter-active gallery-filter__bg">
        <ul>
            <?foreach ($arResult['SECTIONS'] as $section):?>
                <li class="mbr-gallery-filter-all active"><?=$section['NAME']?></li>
            <?endforeach;?>
        </ul>
    </div>

    <!-- Gallery -->
    <div class="mbr-gallery-row container">
        <div class=" mbr-gallery-layout-default">

            <?
            foreach ($arResult['SECTIONS'] as $section):
                $arSelect = Array(
                    "ID",
                    "NAME",
                    "CODE",
                    "DATE_ACTIVE_FROM",
                    "PROPERTY_PRICE",
                    "PREVIEW_PICTURE",
                    "DETAIL_PICTURE"
                );

                $arFilter = Array(
                    "IBLOCK_ID" => $section['IBLOCK_ID'],
                    "SECTION_ID" => $section['ID'],
                    "ACTIVE_DATE" => "Y",
                    "ACTIVE" => "Y"
                );

                $arOrder = Array(
                    "PROPERTY_PRICE" => "asc"
                );

                $res = CIBlockElement::GetList($arOrder, $arFilter, false, Array("nPageSize"=>50), $arSelect);

                if ($res):

                    while ($ob = $res->GetNextElement()) {
                        $element = $ob->GetFields();
                        $previewPicture = CFile::getFileArray($element['PREVIEW_PICTURE']);

                        ?>
                        <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-video-url="false" data-tags="Гель-лак">
                            <div href="#lb-gallery3-9" data-slide-to="0" data-toggle="modal">

                                <?if ($previewPicture && $previewPicture['SRC']):?>
                                    <img src="<?=$previewPicture['SRC']?>">
                                <?else:?>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/dd6c2c8080347c14b417f15348e98e48b721e1dfad5a1c7d19pimgpsh-fullsize-distr-2000x2000-800x800.jpg">
                                <?endif;?>

                                <span class="icon-focus"></span>
                                <span class="mbr-gallery-title">
                                    <?=$element['NAME']?><br>
                                    <?=($element['PROPERTY_PRICE_VALUE']) ? $element['PROPERTY_PRICE_VALUE'] : ' - '?> р.
                                </span>

                            </div>
                        </div>
                        <?
                    }
                    ?>
                <?
                endif;
            endforeach;
            ?>


            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-9">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery3-9" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-9" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-9" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-9" data-slide-to="3"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-9" data-slide-to="4"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-9" data-slide-to="5"></li><li data-app-prevent-settings="" data-target="#lb-gallery3-9" data-slide-to="6"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/dd6c2c8080347c14b417f15348e98e48b721e1dfad5a1c7d19pimgpsh-fullsize-distr-2000x2000.jpg">
                        </div>
                        <div class="carousel-item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/cni-official-cni-corporation-instagram-google-chrome-2000x2003.jpg">
                        </div>
                        <div class="carousel-item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/cniart-instagram-google-chrome-2000x2006.jpg">
                        </div>
                        <div class="carousel-item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/-cni2-2000x2000.jpg">
                        </div>
                        <div class="carousel-item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/-2000x2000.jpg">
                        </div>
                        <div class="carousel-item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/-2000x200091.jpg">
                        </div>
                        <div class="carousel-item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/-2000x200091.jpg">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery3-9">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery3-9">
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

<!--
<div class="dropdown-menu">
        <?/*
        foreach ($arResult['SECTIONS'] as $section):
            */?>
            <div class="dropdown">
                <a class="dropdown-item dropdown-toggle" href="manicure.html" data-toggle="dropdown-submenu" aria-expanded="false">
                    <?/*=$section['NAME']*/?>
                </a>
                <?/*

                $arSelect = Array(
                    "ID",
                    "NAME",
                    "CODE",
                    "DATE_ACTIVE_FROM",
                    "PROPERTY_PRICE"
                );

                $arFilter = Array(
                    "IBLOCK_ID" => $section['IBLOCK_ID'],
                    "SECTION_ID" => $section['ID'],
                    "ACTIVE_DATE" => "Y",
                    "ACTIVE" => "Y"
                );

                $arOrder = Array(
                    "PROPERTY_PRICE" => "asc",
                );

                $res = CIBlockElement::GetList($arOrder, $arFilter, false, Array("nPageSize"=>50), $arSelect);
                if ($res) {
                    */?>
                    <div class="dropdown-menu dropdown-submenu">
                        <?/*

                        while ($ob = $res->GetNextElement()) {
                            $element = $ob->GetFields();
                            */?>
                            <a class="dropdown-item"
                               href="/services/<?/*=$section['CODE']*/?>/<?/*= $element['CODE'] */?>/?new=1"
                            >
                                <?/*= $element['NAME'] */?>
                            </a>
                            <?/*
                        }
                        */?>
                    </div>
                    <?/*
                }
                */?>
            </div>
        <?/*endforeach;*/?>
</div>-->