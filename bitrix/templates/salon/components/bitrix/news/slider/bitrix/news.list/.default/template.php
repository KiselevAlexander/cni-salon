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
<div class="arrows"></div>
<section class="regular slider">
<?foreach($arResult["ITEMS"] as $arItem):?>
<div>
  <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
</div>
<?endforeach;?>

</section>
<script src="<?=SITE_TEMPLATE_PATH?>/js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
  		autoplaySpeed: 8000,
  		fade: true,
  		cssEase: 'linear',
  		appendArrows: $(".arrows")
      });
    });
</script>