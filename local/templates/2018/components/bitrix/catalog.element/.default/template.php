<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */



$this->setFrameMode(true);

?>


<section class="mbr-section mbr-section__container article mbr-after-navbar" id="header3-31" data-rv-view="294" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-xs-center">
                <h1 class="mbr-section-title display-2">
                    <?=$arResult["NAME"]?>
                </h1>
                <small class="mbr-section-subtitle">
                    Студия красоты "CNI-салон Краснодар"
                </small>
            </div>
        </div>
    </div>
</section>

<?if(is_array($arResult["DISPLAY_PROPERTIES"]["GALLERY"])):
    $gallery = $arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"];
    ?>


    <section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" data-filter="false" id="gallery3-38" data-rv-view="341" style="background-color: rgb(0, 0, 0); padding-top: 1.5rem; padding-bottom: 1.5rem;">
        <!-- Filter -->


        <!-- Gallery -->
        <div class="mbr-gallery-row container">
            <div class=" mbr-gallery-layout-default">
                <div>
                    <div>
                        <?foreach($gallery as $key=>$pic):
                            $file = CFile::ResizeImageGet(
                                $pic,
                                ['width'=>300, 'height'=>300],
                                BX_RESIZE_IMAGE_PROPORTIONAL,
                                true
                            );
                            ?>
                            <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1" data-video-url="false" data-tags="Awesome">
                                <div href="#lb-gallery3-38" data-slide-to="<?=$key?>" data-toggle="modal">
                                    <img src="<?=$file['src']?>" alt="" title="">
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
        <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-38">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <ol class="carousel-indicators">
                            <?foreach($gallery as $key=>$pic):
                                $isActive = $key == 0 ? 'class="active"' : '';
                                ?>
                                <li data-app-prevent-settings=""
                                    data-target="#lb-gallery3-38"
                                    data-slide-to="<?=$key?>"
                                    <?=$isActive?>
                                ></li>
                            <?endforeach;?>
                        </ol>
                        <div class="carousel-inner">

                            <?foreach($gallery as $key=>$pic):
                                $isActive = $key == 0 ? ' active' : '';
                                ?>
                                <div class="carousel-item<?=$isActive?>">
                                    <img src="<?=$pic['SRC']?>" alt="" title="">
                                </div>
                            <?endforeach;?>

                        </div>
                        <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery3-38">
                            <span class="icon-prev" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery3-38">
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

<?endif;?>

<section class="mbr-section article mbr-section__container" id="content1-35" data-rv-view="327" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead">
                <?if ($arResult["DISPLAY_PROPERTIES"]["MATERIAL"]["DISPLAY_VALUE"]):?>
                    <p class="mb-30"><strong><?=$arResult["DISPLAY_PROPERTIES"]["MATERIAL"]["DISPLAY_VALUE"]?></strong></p>
                <?endif;?>


                <?if ($arResult["DISPLAY_PROPERTIES"]["TIME"]["DISPLAY_VALUE"]):?>
                    <p><strong>Время процедуры:</strong> <?=$arResult["DISPLAY_PROPERTIES"]["TIME"]["DISPLAY_VALUE"]?> мин.</p>
                <?endif;?>
                <?if ($arResult["DISPLAY_PROPERTIES"]["TYPE"]["DISPLAY_VALUE"]):?>
                    <p><strong>Тип ногтей: </strong> <?=$arResult["DISPLAY_PROPERTIES"]["TYPE"]["DISPLAY_VALUE"]?></p>
                <?endif;?>
                <?if ($arResult["DISPLAY_PROPERTIES"]["ELONGATION"]["DISPLAY_VALUE"]):?>
                    <p><strong>Удлинение: </strong> <?=$arResult["DISPLAY_PROPERTIES"]["ELONGATION"]["DISPLAY_VALUE"]?></p>
                <?endif;?>
                <?if ($arResult["DISPLAY_PROPERTIES"]["PERIOD"]["DISPLAY_VALUE"]):?>
                    <p><strong>Срок носки маникюра: </strong> <?=$arResult["DISPLAY_PROPERTIES"]["PERIOD"]["DISPLAY_VALUE"]?></p>
                <?endif;?>
                <?if ($arResult["DISPLAY_PROPERTIES"]["WARRANTY"]["DISPLAY_VALUE"]):?>
                    <p><strong>Гарантийный ремонт:</strong> <?=$arResult["DISPLAY_PROPERTIES"]["WARRANTY"]["DISPLAY_VALUE"]?></p>
                <?endif;?>
                <?if ($arResult["DISPLAY_PROPERTIES"]["REMOVAL"]["DISPLAY_VALUE"]):?>
                    <p><strong>Снятие гель-лака/геля: </strong> <?=$arResult["DISPLAY_PROPERTIES"]["REMOVAL"]["DISPLAY_VALUE"]?></p>
                <?endif;?>
                <?if ($arResult["DISPLAY_PROPERTIES"]["PRICE"]["DISPLAY_VALUE"]):?>
                    <p><strong>Цена: </strong> <?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["DISPLAY_VALUE"]?> р.</p>
                <?endif;?>

                <p class="mt-30"><?=$arResult["DETAIL_TEXT"];?></p>
            </div>
        </div>
    </div>

</section>


<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    ".default",
    Array(
        "AREA_FILE_SHOW" => "file",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/local/templates/2018/includes/service-order-form.php",
        "SERVICE" => $arResult["NAME"]
    )
);?>
