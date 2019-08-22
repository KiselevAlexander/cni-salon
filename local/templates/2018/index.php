<?

$day = $arParams['DAY'];


$caption = $day['EVENT_TYPE'] ? $day['EVENT_TYPE']['VALUE'] : 'День CNI';
$intensive = ($day['INTENSIVE'] && $day['INTENSIVE']['VALUE'] === 'Да');

?><!DOCTYPE html>
<html>
<head>
    <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Уникальная вечеринка-обучение для нейл-мастеров. Розыгрыши, щедрые подарки, море вдохновения и позитива. День, который нельзя пропустить!">

    <meta property="og:url" content="http://<?=$GLOBALS['sCurCity'];?>.cni-day.ru"/>
    <meta property="og:title" content="Nail-семинар в городе <?=$GLOBALS['sCurCityName']?>."/>
    <meta property="og:description"
          content="<?=dateRus($day["DATE"]["VALUE"])?> Уникальная вечеринка-обучение для нейл-мастеров. Розыгрыши, щедрые подарки, море вдохновения и позитива. День, который нельзя пропустить!"/>
    <meta name="description"
          content="<?=dateRus($day["DATE"]["VALUE"])?> Уникальная вечеринка-обучение для нейл-мастеров. Розыгрыши, щедрые подарки, море вдохновения и позитива. День, который нельзя пропустить!"/>
    <meta property="og:image" content="/static/img/social_preview.jpg"/>

    <link rel="shortcut icon" href="/local/templates/2018/assets/images/cni-.svg" type="image/x-icon">
    <title><?=$caption?> г. <?=$arParams['CITY_NAME']?> <?=dateRus($day["DATE"]["VALUE"])?> 2019. Мастер-классы по маникюру</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="/local/templates/2018/assets/bootstrap-material-design-font/css/material.css">
    <link rel="stylesheet" href="/local/templates/2018/assets/et-line-font-plugin/style.css">
    <link rel="stylesheet" href="/local/templates/2018/assets/tether/tether.min.css">
    <link rel="stylesheet" href="/local/templates/2018/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/local/templates/2018/assets/animate.css/animate.min.css">
    <link rel="stylesheet" href="/local/templates/2018/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="/local/templates/2018/assets/theme/css/style.css">
    <link rel="stylesheet" href="/local/templates/2018/assets/mobirise-gallery/style.css">
    <link rel="stylesheet" href="/local/templates/2018/assets/mobirise/css/mbr-additional.css" type="text/css">

    <link rel="stylesheet" href="/static/css/base.css">
    <link rel="stylesheet" href="/local/templates/2018/styles.css">



</head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter42617899 = new Ya.Metrika({
                    id:42617899,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42617899" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<section id="ext_menu-9">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="https://mobirise.com" class="navbar-logo"><img src="/local/templates/2018/assets/images/cni-.svg" alt="Mobirise"></a>
                        <a class="navbar-caption" href="/#features1-6">
                            <span style="text-transform: uppercase;"><?=$caption?> <?=$arParams['CITY_NAME']?></span><br>
                            <?=dateRus($day["DATE"]["VALUE"])?> <?=date('Y')?><br>
                        </a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item"><a class="nav-link link" href="/#msg-box5-2">ПРОГРАММА</a></li>
                        <li class="nav-item"><a class="nav-link link" href="/#features1-6">КУПИТЬ БИЛЕТ</a></li>
                        <li class="nav-item"><a class="nav-link link" href="/#gallery2-4">ГАЛЕРЕЯ ДИЗАЙНОВ</a></li>
                        <li class="nav-item"><a class="nav-link link" href="/#contacts2-7">КОНТАКТЫ</a></li>
                        <li class="nav-item nav-btn">
                            <a class="nav-link btn btn-white btn-white-outline"
                               href="tel:<?=$day['PHONE_CODE']['VALUE'].$day['PHONE_NUMBER']['VALUE']?>"
                               onclick="reachGoal('Mobile_call');"
                            >
                                <?=$day['PHONE_CODE']['VALUE'].' '.$day['PHONE_NUMBER']['VALUE']?>
                            </a>
                        </li>
                        <li class="nav-item nav-btn">
                            <a class="nav-link btn btn-primary"
                               href="/#order"
                               data-toggle="modal"
                               data-target="#order"
                               onclick="reachGoal('menu_order_open')"
                               data-submit-goal="menu_order_send"
                            >
                                ЗАПИСАТЬСЯ
                            </a>
                        </li>
                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="mbr-section mbr-section-hero mbr-section-full header2 mbr-after-navbar"
         id="header2-0"
         style="background-image: url('/local/templates/2018/assets/images/1-2-2000x1125.jpg');"
>

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(0, 0, 0);">
    </div>

    <div class="mbr-table mbr-table-full">
        <div class="mbr-table-cell">

            <div class="container">
                <div class="mbr-section row">
                    <div class="mbr-table-md-up">

                        <div class="mbr-table-cell col-md-5 content-size text-xs-center text-md-right">

                            <h3 class="mbr-section-title display-3">
                                <span class="text-uppercase"><?=$caption?></span><br>
                                <span class="text-uppercase"><?=$arParams['CITY_NAME']?></span>
                            </h3>

                            <div class="mbr-section-text">
                                <p>
                                    <?=$day["DESCRIPTION"]["VALUE"]?>
                                </p>
                            </div>

                            <div class="mbr-section-btn">
                                <a class="btn btn-primary"
                                   href="/#order"
                                   data-toggle="modal"
                                   data-target="#order"
                                   onclick="reachGoal('1scrn_open')"
                                   data-submit-goal="1scrn_send_"
                                >ЗАПИСАТЬСЯ</a>
                            </div>

                        </div>

                        <div class="mbr-table-cell mbr-valign-top mbr-left-padding-md-up col-md-7 image-size"
                             style="padding: 0;"
                        >
                            <?if ($day["YOUTUBE_VIDEO"]["VALUE"]):?>
                            <div class="mbr-figure">
                                <iframe class="mbr-embedded-video"
                                        src="<?=$day["YOUTUBE_VIDEO"]["VALUE"]?>?rel=0&amp;amp;showinfo=0&amp;autoplay=<?=($day['IS_DEV']) ? 0 : 1?>&amp;loop=0"
                                        width="1280"
                                        height="720"
                                        frameborder="0"
                                        allow="autoplay; encrypted-media"
                                        allowfullscreen
                                ></iframe>
                            </div>
                            <?endif;?>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden="true"><a href="#msg-box5-2"><i class="mbr-arrow-icon"></i></a></div>

</section>

<section class="mbr-section" style="background-color: rgb(239, 239, 239); padding-top: 0px; padding-bottom: 0px;">


    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">

                <div class="mbr-table-cell col-md-5 text-xs-center text-md-right content-size">
                    <h3 class="mbr-section-title display-2 text-uppercase">
                        <?=$arParams['CITY_NAME']?>, <?=dateRus($day["DATE"]["VALUE"])?><br>
                        <?=$caption?>
                    </h3>
                    <div class="lead">

                        <p>
                            <?=$day["DESCRIPTION_2"]["~VALUE"]["TEXT"]?>
                        </p>

                    </div>

                    <div>
                        <a class="btn btn-primary"
                           href="/#order"
                           data-toggle="modal"
                           data-target="#order"
                           onclick="reachGoal('2scrn_open_MIX')"
                           data-submit-goal="2scrn_send_MIX"
                        >ЗАПИСАТЬСЯ</a>
                    </div>
                </div>

                <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 50%;">
                    <div class="mbr-figure screen-2-image"
                        style="background-image: url('<?=CFile::getPath($day['SCREEN_2_IMAGE']['VALUE'])?>');"
                    >
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section__container article" id="header3-5" style="background-color: rgb(255, 255, 255); padding-top: 80px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">ЧЕМУ ВЫ НАУЧИТЕСЬ НА <?=($day['EVENT_TYPE_P']) ? $day['EVENT_TYPE_P']['VALUE'] : 'ДНЕ CNI' ?></h3>
                <small class="mbr-section-subtitle"></small>
            </div>
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery2-4" data-filter="false" style="padding-top: 3rem; padding-bottom: 6rem;">
    <!-- Filter -->


    <!-- Gallery -->
    <div class="mbr-gallery-row container">
        <div class=" mbr-gallery-layout-default">

                    <?
                    foreach ($day["SKILLS_GALLERY"]["VALUE"] as $k=>$v){
                        $text = explode("head",$day["SKILLS_GALLERY"]["DESCRIPTION"][$k]);
                        ?>
                        <div class="Card mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Animated" data-video-url="false">
                            <div href="#lb-gallery2-4"
                                 data-slide-to="0"
                                 data-toggle="modal"
                                 style="background-image: url(<?=CFile::getPath($v)?>)">

                                <span class="icon-focus"></span>

                                <span class="mbr-gallery-title"><?=$text[0]?><br><?=$text[1]?></span>
                            </div>
                        </div>
                    <?}?>

            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery2-4">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="carousel-inner">
                        <?
                        foreach ($day["SKILLS_GALLERY"]["VALUE"] as $k=>$v){
                            $text = explode("head",$day["SKILLS_GALLERY"]["DESCRIPTION"][$k]);
                            ?>
                            <div class="carousel-item<?=($k === 0) ? ' active': ''?>">
                                <img alt="<?=$text[0]?>" src="<?=CFile::getPath($v)?>">
                                <p class="carousel-item-text mbr-gallery-title">
                                    <?=$text[0]?><br>
                                    <?=$text[1]?>
                                </p>
                            </div>
                        <?}?>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery2-4">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery2-4">
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

<?include 'screens/seminars.php';?>
<?include 'screens/schedule.php';?>
<?include 'screens/speakers.php';?>

<section class="mbr-section mbr-section-md-padding mbr-footer footer2" id="contacts2-7" style="background-color: rgb(40, 50, 78); padding-top: 90px; padding-bottom: 90px;">

    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p>
                    <strong>АДРЕС</strong><br>
                    <?=$day['PLACE_ADDRESS']['VALUE']?><br><br>

                    <strong>Контакты</strong><br>

                    Email: <a href="mailto:<?=$day['MAIL']['VALUE']?>" style="color: #fff;"><?=$day['MAIL']['VALUE']?></a><br><br>

                    Тел.: <strong>
                        <a href="tel:<?=$day['PHONE_CODE']['VALUE'].' '.$day['PHONE_NUMBER']['VALUE']?>" style="color: #fff;" onclick="window.yaCounter42617899.reachGoal('Mobile_call');">
                            <?=$day['PHONE_CODE']['VALUE'].' '.$day['PHONE_NUMBER']['VALUE']?>
                        </a>
                    </strong>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p class="mbr-contacts__text"><strong>ССЫЛКИ</strong></p>
                <ul>
                    <li><a href="https://www.instagram.com/cni_event/" target="_blank">Instagram</a></li>
                    <li><a href="http://ru.cni-corporation.com/" target="_blank">Официальный сайт корпорации CNI</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="mbr-map">
                   <?=$day['GOOGLE_MAP']['~VALUE']?>
                </div>
            </div>
            <?
                if($GLOBALS['sCurCity'] === 'ekb' && false) {
                    ?>
                        <div class="mbr-footer-content col-xs-12 col-md-3">
                            <p class="mbr-contacts__text"><strong>Партнёры</strong></p>
                            <ul>
                                <li>
                                    <img src="/local/templates/2018/assets/images/crown-logo.png" alt="">
                                </li>
                            </ul>
                        </div>
                    <?
                }
            ?>
        </div>
    </div>
</section>

<?php include 'screens/order.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/local/templates/2018/assets/tether/tether.min.js"></script>
<script src="/local/templates/2018/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/local/templates/2018/assets/smooth-scroll/smooth-scroll.js"></script>
<script src="/local/templates/2018/assets/viewport-checker/jquery.viewportchecker.js"></script>
<script src="/local/templates/2018/assets/masonry/masonry.pkgd.min.js"></script>
<script src="/local/templates/2018/assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="/local/templates/2018/assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
<script src="/local/templates/2018/assets/dropdown/js/script.min.js"></script>
<script src="/local/templates/2018/assets/touch-swipe/jquery.touch-swipe.min.js"></script>
<script src="/local/templates/2018/assets/theme/js/script.js"></script>
<script src="/local/templates/2018/assets/mobirise-gallery/player.min.js"></script>
<script src="/local/templates/2018/assets/mobirise-gallery/script.js"></script>
<script src="/local/templates/2018/assets/sendform.min.js"></script>
<script src="/local/templates/2018/assets/metrics.min.js"></script>


<input name="animation" type="hidden">

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter42617899 = new Ya.Metrika({
                    id:42617899,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42617899" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
