<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Ногтевой салон CNI предлагает профессиональные услуги маникюра, педикюра, ногтевого моделирования, дизайна ногтей. В своей работе мы используем инновационные технологии и материалы CNI, подтвержденные европейскими сертификатами качества.");
$APPLICATION->SetPageProperty("title", "CNI Salon - услуги маникюра, педикюра, ногтевого моделирования и дизайна ногтей в Краснодаре");
$APPLICATION->SetTitle("CNI Salon - Блог");

/**
 * User: Alexander Kiselev
 * Date: 28.05.18
 * Time: 8:07
 */


$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"blog", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "blog",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "TIME",
			1 => "VARNISH",
			2 => "PRICE",
			3 => "GALLERY",
			4 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "Service",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
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
		"SEF_FOLDER" => "/blog/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
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
		"STRICT_SECTION_CHECK" => "N",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE#/?new=1",
			"detail" => "#SECTION_CODE#/#ELEMENT_CODE#/?new=1",
		)
	),
	false
);

?>



    <section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-20" data-rv-view="265" style="display: none;background-color: rgb(255, 255, 255);">



        <div class="mbr-cards-row row">
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="container">
                    <div class="card cart-block">
                        <div class="card-img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/-600x400.jpg" class="card-img-top"></div>
                        <div class="card-block">
                            <h4 class="card-title">Классический маникюр или аппаратный</h4>
                            <h5 class="card-subtitle">развеиваем мифы у корней ногтей</h5>
                            <p class="card-text">Во многих салонах Краснодара стоимость аппаратного маникюра выше обрезного, что заставляет клиента сомневаться, стоит ли продолжать делать классику? На самом деле...</p>
                            <div class="card-btn"><a href="#" class="btn btn-primary">читать</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="container">
                    <div class="card cart-block">
                        <div class="card-img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/desktop.jpg" class="card-img-top"></div>
                        <div class="card-block">
                            <h4 class="card-title">Тренды летнего маникюра:<br>цвет, дизайн, сочетания</h4>
                            <h5 class="card-subtitle">мода / стиль</h5>
                            <p class="card-text">Цвета летнего сезона - &nbsp;лиловый, красный и горчишный. Лето по-традиции приносит яркость в вещи, макияж и нейл-арт. Но не обшлось без сюрпризов...</p>
                            <div class="card-btn"><a href="#" class="btn btn-primary">читать</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="container">
                    <div class="card cart-block">
                        <div class="card-img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/coworkers.jpg" class="card-img-top"></div>
                        <div class="card-block">
                            <h4 class="card-title">Почему происходит отслойка ногтей</h4>
                            <h5 class="card-subtitle">Здоровье / Маникюр</h5>
                            <p class="card-text">Каждая третяя женщина знает, что такое отслойка на гель-лаке или гелевых ногтях. 1 из 2 случаев - это вина мастера. Другая половина отслоек - следствие ...</p>
                            <div class="card-btn"><a href="#" class="btn btn-primary">читать</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="container">
                    <div class="card cart-block">
                        <div class="card-img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/code-man.jpg" class="card-img-top"></div>
                        <div class="card-block">
                            <h4 class="card-title">Мусульманский маникюр. <br>Все дело в воде.</h4>
                            <h5 class="card-subtitle">Традиции / Маникюр</h5>
                            <p class="card-text">В мусульманских странах маникюр совсем другой. Те, кто бывал в ОАЭ или Турции уверенно скажут: ногти как ногти. Но есть различия, о которых непосвященные не догадываются...</p>
                            <div class="card-btn"><a href="#" class="btn btn-primary">читать</a></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-23" data-rv-view="268" style="display: none;background-color: rgb(255, 255, 255);">



        <div class="mbr-cards-row row">
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="container">
                    <div class="card cart-block">
                        <div class="card-img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/-600x400.jpg" class="card-img-top"></div>
                        <div class="card-block">
                            <h4 class="card-title">Маникюр при аллергии</h4>
                            <h5 class="card-subtitle">развеиваем мифы у корней ногтей</h5>
                            <p class="card-text">Во многих салонах Краснодара стоимость аппаратного маникюра выше обрезного, что заставляет клиента сомневаться, стоит ли продолжать делать классику? На самом деле...</p>
                            <div class="card-btn"><a href="#" class="btn btn-primary">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="container">
                    <div class="card cart-block">
                        <div class="card-img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/desktop.jpg" class="card-img-top"></div>
                        <div class="card-block">
                            <h4 class="card-title">Гелевое наращивание при беременности</h4>
                            <h5 class="card-subtitle">мода / стиль</h5>
                            <p class="card-text">Цвета летнего сезона - &nbsp;лиловый, красный и горчишный. Лето по-традиции приносит яркость в вещи, макияж и нейл-арт. Но не обшлось без сюрпризов...</p>
                            <div class="card-btn"><a href="#" class="btn btn-primary">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="container">
                    <div class="card cart-block">
                        <div class="card-img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/coworkers.jpg" class="card-img-top"></div>
                        <div class="card-block">
                            <h4 class="card-title">Главное не кто, а чем. Что зависит от мастера, а что от гель-лака</h4>
                            <h5 class="card-subtitle">Здоровье / Маникюр</h5>
                            <p class="card-text">Каждая третяя женщина знает, что такое отслойка на гель-лаке или гелевых ногтях. 1 из 2 случаев - это вина мастера. Другая половина отслоек - следствие ...</p>
                            <div class="card-btn"><a href="#" class="btn btn-primary">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="container">
                    <div class="card cart-block">
                        <div class="card-img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/code-man.jpg" class="card-img-top"></div>
                        <div class="card-block">
                            <h4 class="card-title">Шугаринг. Моя сладкая боль</h4>
                            <h5 class="card-subtitle">Традиции / Маникюр</h5>
                            <p class="card-text">В мусульманских странах маникюр совсем другой. Те, кто бывал в ОАЭ или Турции уверенно скажут: ногти как ногти. Но есть различия, о которых непосвященные не догадываются...</p>
                            <div class="card-btn"><a href="#" class="btn btn-primary">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="mbr-section mbr-section-md-padding" id="social-buttons3-27" data-rv-view="271" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-xs-center">
                    <h3 class="mbr-section-title display-2">ПРИСОЕДИНЯЙТЕСЬ К НАМ В СОЦ.СЕТЯХ</h3>
                    <div>

                        <div class="mbr-social-likes" data-counters="false">
                            <span class="btn btn-social facebook" title="Share link on Facebook">
                                <i class="socicon socicon-facebook"></i>
                            </span>
                            <span class="btn btn-social twitter" title="Share link on Twitter">
                                <i class="socicon socicon-twitter"></i>
                            </span>
                            <span class="btn btn-social plusone" title="Share link on Google+">
                                <i class="socicon socicon-googleplus"></i>
                            </span>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>