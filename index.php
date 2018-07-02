<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Ногтевой салон CNI предлагает профессиональные услуги маникюра, педикюра, ногтевого моделирования, дизайна ногтей. В своей работе мы используем инновационные технологии и материалы CNI, подтвержденные европейскими сертификатами качества.");
$APPLICATION->SetPageProperty("title", "CNI Salon - услуги маникюра, педикюра, ногтевого моделирования и дизайна ногтей в Краснодаре");
$APPLICATION->SetTitle("CNI Salon");

if (@$_REQUEST['new'] == 1) {
    include $_SERVER['DOCUMENT_ROOT'] . '/local/templates/2018/index.php';
} else {
    ?>
    <?
    /*
    <div class="banner">
        <div class="banner-in">
            <div class="offer">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/banner.php"
                    )
                );?>
            </div>
            <div class="banner-form">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/form.php"
                    )
                );?>
            </div>
        </div>
    </div>
    */
    $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        [
            "AREA_FILE_SHOW" => "file",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/offer.09.02.2017.php"
        ]
    );
    ?>

    <div id="services-menu">
        <?
        $APPLICATION->IncludeComponent("bitrix:menu", "service_menu_main", [
            "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "service",    // Тип меню для остальных уровней
            "COMPONENT_TEMPLATE" => "horizontal_multilevel",
            "DELAY" => "N",    // Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "3",    // Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
            "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "N",    // Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
            "MENU_THEME" => "site",
            "ROOT_MENU_TYPE" => "service",    // Тип меню для первого уровня
            "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
        ],
            false
        ); ?>
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            [
                "AREA_FILE_SHOW" => "file",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/form2.php"
            ]
        ); ?>
    </div>
    </div>
    </div>
    <a class="mod" href="#openModal">
        <input class="mob submit_upload m-second" type="submit" value="Записаться">
    </a>
    <div>
        <br>
    </div>
    <div class="mastera-title">
        <div class="h2">Мастера<br>
            и их работы
        </div>
    </div>
    <div class="mastera">
        <div class="mastera-in">
            <?
            $APPLICATION->IncludeComponent(
                "bitrix:news",
                "masters",
                [
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "BROWSER_TITLE" => "-",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "masters",
                    "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                    "DETAIL_DISPLAY_TOP_PAGER" => "N",
                    "DETAIL_FIELD_CODE" => [0 => "", 1 => "",],
                    "DETAIL_PAGER_SHOW_ALL" => "Y",
                    "DETAIL_PAGER_TEMPLATE" => "",
                    "DETAIL_PAGER_TITLE" => "Страница",
                    "DETAIL_PROPERTY_CODE" => [0 => "PROF", 1 => "",],
                    "DETAIL_SET_CANONICAL_URL" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "6",
                    "IBLOCK_TYPE" => "Mastera",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "LIST_FIELD_CODE" => [0 => "", 1 => "",],
                    "LIST_PROPERTY_CODE" => [0 => "PROF", 1 => "",],
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "NEWS_COUNT" => "100",
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
                    "VARIABLE_ALIASES" => ["SECTION_ID" => "SECTION_ID", "ELEMENT_ID" => "ELEMENT_ID",]
                ]
            ); ?>
        </div>
    </div>
    <div class="arrows2">
        <div class="arr-in">
        </div>
    </div>
    <div style="background: #f0c39c;" class="special_m_but">

        <?
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            [
                "AREA_FILE_SHOW" => "file",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/form3.php"
            ]
        ); ?> <a class="mod" href="#openModal"><input class="mob submit_upload m-third" type="submit"
                                                      value="Записаться"></a>
        <style type="text/css">
            #THEFORM3 {
                margin: 0 auto;
            }
        </style>
    </div>
    <div class="plus">
        <div class="plus-in">
            <?
            $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                [
                    "AREA_FILE_SHOW" => "file",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/plus.php"
                ]
            ); ?>
        </div>
    </div>
    <div class="awards">
        <!-- <div class="award1 left" style="display:none;">
     <img src="/upload/awards/cert1.jpg" alt="">
            <p class="aw-title">
                 Диплом международного конкурса дизайна ногтей
            </p>
        </div>
        <div class="award2 left" style="display:none;">
     <img src="/upload/awards/cup.png" alt="">
            <p class="aw-title">
                 Диплом международного конкурса дизайна ногтей
            </p>
        </div>
        <div class="award3 left" style="display:none;">
     <img src="/upload/awards/cert2.jpg" alt="">
            <p class="aw-title">
                 Диплом международного конкурса дизайна ногтей
            </p>
        </div>
        <div class="award1 left">
     <img width="247" src="/upload/awards/1.jpg" height="214">
            <p class="aw-title">
     <br>
            </p>
        </div>
        <div class="award2 left">
     <img width="247" src="/upload/awards/3.jpg" height="329">
            <p class="aw-title">
     <br>
            </p>
        </div>
        <div class="award3 left">
     <img width="247" src="/upload/awards/4.jpg" height="329">
            <p class="aw-title">
     <br>
            </p>
        </div> -->
    </div>
    <div class="rew-title">
        <div class="h2">Отзывы<br>
            клиентов
        </div>
    </div>
    <div class="rew">
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:news",
            "reviews",
            [
                "ADD_ELEMENT_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "BROWSER_TITLE" => "-",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => "reviews",
                "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                "DETAIL_DISPLAY_TOP_PAGER" => "N",
                "DETAIL_FIELD_CODE" => [0 => "", 1 => "",],
                "DETAIL_PAGER_SHOW_ALL" => "Y",
                "DETAIL_PAGER_TEMPLATE" => "",
                "DETAIL_PAGER_TITLE" => "Страница",
                "DETAIL_PROPERTY_CODE" => [0 => "", 1 => "",],
                "DETAIL_SET_CANONICAL_URL" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "7",
                "IBLOCK_TYPE" => "Reviews",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "LIST_FIELD_CODE" => [0 => "", 1 => "",],
                "LIST_PROPERTY_CODE" => [0 => "", 1 => "",],
                "MESSAGE_404" => "",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "NEWS_COUNT" => "200",
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
                "VARIABLE_ALIASES" => ["SECTION_ID" => "SECTION_ID", "ELEMENT_ID" => "ELEMENT_ID",]
            ]
        ); ?>
    </div>
    <div class="arrows3">
        <div class="arr2-in">
        </div>
    </div>
    <div class="map" id="ex1">
        <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=YMakiRI_MLAhsL3h1Q-FtCBXBZE1AGLM&width=100%&height=480&lang=ru_RU&sourceType=constructor&scroll=false"></script>
    </div>
    <?php
}
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>