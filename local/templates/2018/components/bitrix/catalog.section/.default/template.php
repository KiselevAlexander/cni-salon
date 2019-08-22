<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 */

$this->setFrameMode(true);
?>

<section class="mbr-section" id="pricing-table2-16" data-rv-view="491" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 0px;">

    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">ЦЕНЫ НА ПЕДИКЮР</h3>
                    <small class="mbr-section-subtitle">Стоимость услуг педикюра в CNI-салон Краснодар на ул. Северной, 225.</small>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-section mbr-section-nopadding mbr-price-table">
        <div class="row">
            <?
            if (!empty($arResult['ITEMS']) && !empty($arResult['ITEM_ROWS']))
            {
                $areaIds = array();

                foreach ($arResult['ITEMS'] as $item) {
                    $uniqueId = $item['ID'].'_'.md5($this->randString().$component->getAction());
                    $areaIds[$item['ID']] = $this->GetEditAreaId($uniqueId);
                    $this->AddEditAction($uniqueId, $item['EDIT_LINK'], $elementEdit);
                    $this->AddDeleteAction($uniqueId, $item['DELETE_LINK'], $elementDelete, $elementDeleteParams);


                    $isHot = $item['PROPERTIES']['HOT']['VALUE'];

                    ?>

                    <div class="col-xs-12 col-md-6 col-xl-4">
                        <div class="mbr-plan card text-xs-center">
                            <div class="mbr-plan-header card-block<?=$isHot ? ' bg-primary' : ''?>">

                                <?=$isHot ? '<div class="mbr-plan-label">HOT!</div>' : ''?>

                                <div class="card-title">
                                    <h3 class="mbr-plan-title">
                                        <?=$item['NAME']?>
                                    </h3>
                                    <small class="mbr-plan-subtitle">
                                        <?=substr($item['PREVIEW_TEXT'], 0, 53) .
                                        (strlen($item['PREVIEW_TEXT']) > 53 ? '...' : '')
                                        ?>
                                    </small>
                                </div>
                                <div class="card-text">
                                    <div class="mbr-price">
                                        <span class="mbr-price-value"></span>
                                        <span class="mbr-price-figure">
                                            <?=$item['PROPERTIES']['PRICE']['VALUE']?>
                                        </span><small class="mbr-price-term">р.</small>
                                    </div>
                                    <a class="mbr-plan-price-desc"
                                        href="<?=$item['DETAIL_PAGE_URL']?>?new=1"
                                    >
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                            <div class="mbr-plan-body card-block">
                                <div class="mbr-plan-list">
                                    <ul class="list-group list-group-flush">
                                        <?foreach ($item['PROPERTIES']['BENEFITS']['VALUE'] as $benefit):?>
                                            <li class="list-group-item">
                                                <?=$benefit?>
                                            </li>
                                        <?endforeach;?>
                                    </ul>
                                </div>
                                <div class="mbr-plan-btn">
                                    <a href="#!order" class="btn btn-black btn-black-outline">
                                        Записаться
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?
                }
            }
            else
            {
                // load css for bigData/deferred load
                $APPLICATION->IncludeComponent(
                    'bitrix:catalog.item',
                    '',
                    array(),
                    $component,
                    array('HIDE_ICONS' => 'Y')
                );
            }
            ?>
        </div>
    </div>

</section>

<?
$fSections = CIBlockSection::GetList(
    false,
    Array(
            "IBLOCK_ID" => $arResult['IBLOCK_ID'],
        "ID" => $arResult ['ID'],
        "ACTIVE"=>"Y",
        "GLOBAL_ACTIVE"=>"Y",
        "SECTION_ACTIVE" => "Y"
    ),
    false,
    Array("UF_CATEGORY_DESCRIPT", "PICTURE"),
    false
);

$category = $fSections->Fetch();

$category["DETAIL_PICTURE"] = CFile::GetFileArray($category["PICTURE"]);

?>

<? if ($arResult['DESCRIPTION']):?>
<section class="mbr-section mbr-section-hero mbr-section-full header2"
         id="header2-18"
         data-rv-view="497"
         style="background-image: url(<?=$category['DETAIL_PICTURE']['SRC']?>);">

    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);"></div>

    <div class="mbr-table mbr-table-full">
        <div class="mbr-table-cell">

            <div class="container">
                <div class="mbr-section row">
                    <div class="mbr-table-md-up">

                        <div class="mbr-table-cell mbr-right-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 50%;">
                            <div class="mbr-figure">
                                <?=$arResult['PROPERTIES']['VIDEO']?>
                            </div>
                        </div>
                        <div class="mbr-table-cell col-md-5 text-xs-center text-md-left content-size">

                            <h3 class="mbr-section-title display-2">
                                <?=$category['UF_CATEGORY_DESCRIPT']?>
                            </h3>

                            <div class="mbr-section-text">
                                <p>
                                    <?=$arResult['DESCRIPTION']?>
                                </p>
                            </div>

                            <div class="mbr-section-btn">
                                <a class="btn btn-primary" href="#!">Подробнее</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden="true"><a href="#next"><i class="mbr-arrow-icon"></i></a></div>

</section>
<?endif;?>