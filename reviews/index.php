<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Ногтевой салон CNI предлагает профессиональные услуги маникюра, педикюра, ногтевого моделирования, дизайна ногтей. В своей работе мы используем инновационные технологии и материалы CNI, подтвержденные европейскими сертификатами качества.");
$APPLICATION->SetPageProperty("title", "CNI Salon - услуги маникюра, педикюра, ногтевого моделирования и дизайна ногтей в Краснодаре");
$APPLICATION->SetTitle("CNI Salon - Отзывы");

/**
 * User: Alexander Kiselev
 * Date: 28.05.18
 * Time: 8:07
 */

?>
    <div class="container">

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "reviews",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("DETAIL_PICTURE", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "7",
                "IBLOCK_TYPE" => "Mastera",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("", ""),
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        );?>

    <section class="mbr-section form1" id="form1-1w" data-rv-view="344" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">

        <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2">Составьте свое мнение об услугах CNI-salon</h3>
                        <small class="mbr-section-subtitle">Оставьте заявку на посещение салона и менеджер перезвонит вам в течение 2 часов.</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-section mbr-section-nopadding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">


                        <div data-form-alert="true">
                            <div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Благодарим за заявку. Менеджер позвонит вам, чтобы записать на процедуру.</div>
                        </div>


                        <form action="#" method="post" data-form-title="Составьте свое мнение об услугах CNI-salon">

                            <input type="hidden" value="QVNJld2DyANuw6kuOLRp6lTLLOssueFjUo640I73efsvoysmfpcUe+rcjdZ+MKRdAl7dotMQDPlHYJKnPJceHiOUYc6MAOkbJL3LxRkoYToGp4B9uR4o/dKfbiR6uhwT" data-form-email="true">

                            <div class="row row-sm-offset">

                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="form1-1w-name">Имя<span class="form-asterisk">*</span></label>
                                        <input type="text" class="form-control" name="name" required="" data-form-field="Name" id="form1-1w-name">
                                    </div>
                                </div>



                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="form1-1w-phone">Телефон<span class="form-asterisk">*</span></label>
                                        <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="form1-1w-phone">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="form1-1w-message">Message</label>
                                <textarea class="form-control" name="message" rows="7" data-form-field="Message" id="form1-1w-message"></textarea>
                            </div>

                            <div><button type="submit" class="btn btn-primary">CONTACT US</button></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "masters",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("DETAIL_PICTURE", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "6",
                "IBLOCK_TYPE" => "Mastera",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("", ""),
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        );?>


    <section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-2a" data-rv-view="459" style="background-color: rgb(255, 255, 255);">



        <div class="mbr-cards-row row">
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="container">
                    <div class="card cart-block">
                        <div class="card-img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/-600x400.jpg" class="card-img-top"></div>
                        <div class="card-block">
                            <h4 class="card-title">Классический маникюр или аппаратный</h4>
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
                        <div class="card-img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/desktop101.jpg" class="card-img-top"></div>
                        <div class="card-block">
                            <h4 class="card-title">Тренды летнего маникюра:<br>цвет, дизайн, сочетания</h4>
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
                        <div class="card-img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/coworkers102.jpg" class="card-img-top"></div>
                        <div class="card-block">
                            <h4 class="card-title">Почему происходит отслойка ногтей</h4>
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
                        <div class="card-img"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/code-man103.jpg" class="card-img-top"></div>
                        <div class="card-block">
                            <h4 class="card-title">Мусульманский маникюр. <br>Все дело в воде.</h4>
                            <h5 class="card-subtitle">Традиции / Маникюр</h5>
                            <p class="card-text">В мусульманских странах маникюр совсем другой. Те, кто бывал в ОАЭ или Турции уверенно скажут: ногти как ногти. Но есть различия, о которых непосвященные не догадываются...</p>
                            <div class="card-btn"><a href="#" class="btn btn-primary">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="mbr-section mbr-section-md-padding" id="social-buttons3-29" data-rv-view="457" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">

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

    <section class="mbr-section" id="msg-box5-1k" data-rv-view="454" style="background-color: rgb(255, 255, 255); padding-top: 80px; padding-bottom: 0px;">


        <div class="container">
            <div class="row">
                <div class="mbr-table-md-up">



                    <div class="mbr-table-cell col-md-5 text-xs-center text-md-right content-size">
                        <h3 class="mbr-section-title display-2">ЭТАПЫ СТЕРИЛИЗАЦИИ</h3>
                        <div class="lead">

                            <p><br>✅Перед началом стерилизации каждое изделие запечатывается в индивидуальный крафт пакет, после чего он отправляется в сухожаровой шкаф. <br>✅Под воздействием раскаленной температуры происходит 100% гибель всех клеток бактерий, грибков и вирусов при средней температуре 180 градусов на протяжении 2 часов.
                                <br>✅На 2м этапе металлические предметы отправляются в микроцидный стерилизатор. За 3 минуты обработки под действием ультрафиолетового облучения вирусы гепатита, гриппа, кори, краснухи, полиомиелита, туберкулеза, стафилококки, кишечная палочка, СПИДа, &nbsp;а также их споровые формы и грибковая флора полностью инактивируются.
                                <br>
                                ✅В крафт-пакете инструмент многоразового использования попадает на стол мастера и вскрывается в присутствии клиента перед началом процедуры.<br>Мы думаем и заботимся о Вашей безопасности.💯 <br>Выбирая нас, Вы выбираете здоровье.🙏.</p>

                        </div>

                        <div><a class="btn btn-primary" href="/sterilization/?new=1">Подробнее</a></div>
                    </div>





                    <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 50%;">
                        <div class="mbr-figure"><img src="<?=SITE_TEMPLATE_PATH?>/assets/images/-2-591x333.jpg" alt="Инструмент в крафт-пакетах на столе мастера" title="Инструмент в крафт-пакетах на столе мастера"></div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>