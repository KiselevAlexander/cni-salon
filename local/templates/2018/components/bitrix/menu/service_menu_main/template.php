<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):
    $current_level=0;
    ?>
    <div class="service-title">
        <div class="h2">Услуги<br>
            нашего салона</div>
    </div>
    <div class="services">
        <div class="topslider">
            <?$APPLICATION->IncludeComponent(
                "bitrix:news",
                "slider",
                Array(
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BROWSER_TITLE" => "CNI Salon специализированный крупнейший ногтевой салон в Краснодаре",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                    "DETAIL_DISPLAY_TOP_PAGER" => "N",
                    "DETAIL_FIELD_CODE" => array(0=>"",1=>"",),
                    "DETAIL_PAGER_SHOW_ALL" => "Y",
                    "DETAIL_PAGER_TEMPLATE" => "",
                    "DETAIL_PAGER_TITLE" => "Страница",
                    "DETAIL_PROPERTY_CODE" => array(0=>"",1=>"",),
                    "DETAIL_SET_CANONICAL_URL" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "5",
                    "IBLOCK_TYPE" => "Slider",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "LIST_FIELD_CODE" => array(0=>"",1=>"",),
                    "LIST_PROPERTY_CODE" => array(0=>"",1=>"",),
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "SEF_MODE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "USE_CATEGORIES" => "N",
                    "USE_FILTER" => "N",
                    "USE_PERMISSIONS" => "N",
                    "USE_RATING" => "N",
                    "USE_RSS" => "N",
                    "USE_SEARCH" => "N",
                    "USE_SHARE" => "N",
                    "VARIABLE_ALIASES" => array("ELEMENT_ID"=>"ELEMENT_ID","SECTION_ID"=>"SECTION_ID",)
                )
            );?>
            <div class="services-list">
                <?foreach($arResult as $arItem):?>
                <?if($arItem['TEXT']=='Маникюр'){
                    $mans='<li><a href="/mens">Мужской маникюр</a></li>';
                }?>
                <?if ($arItem["DEPTH_LEVEL"]==1):?>

                <? if($current_level!=0):?>
                <?echo $mans;
                $mans='';
                ?>
                </ul>
            </div>
        </div>
        <?endif;?>
        <div class="services-item left">
            <div class="item-body">
                <div class="service-image">
                    <img src="<?=$arItem['PARAMS']['PICTURE']?>" alt="">

                </div>
                <div class="service-name">
                    <?=$arItem['TEXT']?>
                </div>
                <ul class="s-list">
                    <?$current_level=1;?>

                    <?endif;?>
                    <?if($arItem["DEPTH_LEVEL"]==2):?>
                        <li><a href="/services<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></li>
                    <?endif;?>

                    <?endforeach;?>
                </ul>
            </div>
        </div>
    </div>

    <div class="price-list__link">
        <a href="/prices/" class="submit_upload2">Прайс лист</a>
    </div>

    <div class="service-border">
    </div>
<?endif;?>