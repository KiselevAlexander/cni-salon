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

<section class="masters slider">
<?foreach($arResult["ITEMS"] as $arItem):?>
<div>
  <div class="master-div">
    <div class="m-img"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"></div>
    <div class="master-detail">
      <p class="m-name"><?=$arItem["NAME"]?></p>
      <p class="m-pr"><?=$arItem["PROPERTIES"]["PROF"]["VALUE"]?></p>
<?php 
$arr = $arItem["PROPERTIES"]["WORKS"]["VALUE"];

?>
<?php 
$File = CFile::GetFileArray($arr[0]);
?>
      <p class="m-links"><a href="<?=$File["SRC"];?>" data-lightbox="gallery<?=$arItem["ID"];?>">Смотреть работы</a></p>
<?php 
unset($arr[0]);
foreach ($arr as $value) {
  $File = CFile::GetFileArray($value);

  ?>
<a style="display:none;" href="<?=$File["SRC"];?>" data-lightbox="gallery<?=$arItem["ID"];?>"></a>
  <?php
}
?>
    </div>
  </div>
</div>
<?endforeach;?>
</section>

  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".masters").slick({
        dots: false,
        infinite: false,
        slidesToShow: 3,
        responsive: [
    {
      breakpoint: 769,
      settings: {
        centerMode: false,
        autoplay: true,
        slidesToShow: 1
      }
    }
  ],
        slidesToScroll: 1,
        autoplay: true,
  		autoplaySpeed: 8000,
      nextArrow: '<button type="button" class="slick-prev t1">Previous</button>',
		  prevArrow: '<button type="button" class="slick-next t2">Next</button>',
		  //appendArrows: $(".arr-in")
		appendArrows: $(".mastera-in")
      });
    });
</script>