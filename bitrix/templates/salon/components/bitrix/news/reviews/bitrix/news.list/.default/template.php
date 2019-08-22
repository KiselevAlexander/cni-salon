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

<section class="reviews slider">
<?foreach($arResult["ITEMS"] as $arItem):?>
<div>
  <div class="review-div">
    <div class="m-img"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"></div>
    <div class="reviews-detail">
      <p class="m-name"><?=$arItem["NAME"]?></p>
      <p class="m-pr"><?=$arItem["PREVIEW_TEXT"]?></p>
    </div>
  </div>
</div>
<?endforeach;?>
</section>

  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".reviews").slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
  		autoplaySpeed: 8000,
  		fade: true,
  		cssEase: 'linear',
      nextArrow: '<button type="button" class="slick-prev2">Previous</button>',
      prevArrow: '<button type="button" class="slick-next2">Next</button>',
  		appendArrows: $(".arr2-in")
      });
    });
</script>