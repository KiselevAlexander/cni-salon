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

<div class="banner <?if(!is_array($arResult["DETAIL_PICTURE"])){ echo('servicesBanner');}?>"<?if(is_array($arResult["DETAIL_PICTURE"])) {echo 'style="
    background: url('.$arResult["DETAIL_PICTURE"]["SRC"].') no-repeat;
    background-size: cover;"';}?>>
	<div class="banner-in">
		<div class="offer">
			<p class="offer1">УСЛУГИ / <?=$arResult["SECTION"]["PATH"][0]["NAME"]?></p>
			<!--<p class="offer2"><span><?=$arResult["NAME"]?></span><br></p>-->
			<h1 class="offer2"><span><?=$arResult["NAME"]?></span><br></h1>
			<p class="offer3" style="color:#fff; font-size:18px;    padding: 10px 0;"><span><?echo $arResult["PREVIEW_TEXT"];?></span></p>
			<!-- <p class="offer-prices">1520р <span class="colors">1000<span class="ru">&#8381;</span></span></p> -->
			<a href="#openModal"><input class="mob submit_upload" type="submit" value="Записаться"></a>
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
<div class="service-title services-page-title" style="background:none;">
	<!--<h2 style="color:#7e7d9c;">Описание<br>
	 услуги</h2>-->
	<div class="h2" style="color:#7e7d9c;">Описание<br>
	 услуги</div>
</div>
<div class="services-body text-page page-body">
	<div class="text-container" style="">
		<div class="right-col" style="padding: 40px 0 0 0;">
			<?echo $arResult["DETAIL_TEXT"];?>
		</div>
		<div class="container-icon left-col">
			<!-- <div class="icon icon-item"> -->
				<!-- <div class="icon-img" style="background: url(/bitrix/templates/salon/img/services-icon1.png) no-repeat center center;"> -->
					 <!-- <img src="/bitrix/templates/salon/img/services-icon1.png"> -->
				<!-- </div> -->
				<!-- <div class="icon-name"> -->
					 <?//=$arResult["DISPLAY_PROPERTIES"]["VARNISH"]["DISPLAY_VALUE"]?>
				<!-- </div> -->
			<!-- </div> -->
			<div class="icon icon-item">
				<div class="icon-img" style="background: url(/bitrix/templates/salon/img/services-icon2.png) no-repeat center center;">
					 <!-- <img src="/bitrix/templates/salon/img/services-icon2.png"> -->
				</div>
				<div class="icon-name">
					 <?=$arResult["DISPLAY_PROPERTIES"]["TIME"]["DISPLAY_VALUE"]?> мин
				</div>
			</div>
			<div class="icon icon-item">
				<div class="icon-img" style="background: url(/bitrix/templates/salon/img/services-icon3.png) no-repeat center center;">
					 <!-- <img src="/bitrix/templates/salon/img/services-icon3.png"> -->
				</div>
				<div class="icon-name">
					 <?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["DISPLAY_VALUE"]?> руб
					<!--<div class="dop-text-icon">
						 (Стоимость без дизайна)
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<div class="form2">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/form2.php"
	)
);?>
	</div>
</div>
<?if(is_array($arResult["DISPLAY_PROPERTIES"]["GALLERY"])):?>
<div class="last-arb">
	<div class="last-items">
		<?foreach($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"] as $pic):?>
		<div class="last-item m-links">
			<div class="item-image ">
				<a href="<?=$pic["SRC"]?>" data-lightbox="gallery-last"><img src="<?=$pic["SRC"]?>"></a>
			</div>
		</div>
		<?endforeach;?>
		
	</div>
</div>
<?endif;?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"service_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "service",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => "",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_THEME" => "site",
		"ROOT_MENU_TYPE" => "service",
		"USE_EXT" => "Y"
	)
);?> 
<div class="form2">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/form2.php"
	)
);?>
</div>
</div>
 <a class="mod" href="#openModal"><input class="mob submit_upload m-second" type="submit" value="Записаться"></a>
<div>
	<br>
</div>
