<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):
$current_level=0;
?>
<div class="service-title">
	<!--<h2>Услуги<br>
	 нашего салона</h2>-->
	<div class="h2">Услуги<br>
	 нашего салона</div>
</div>
<div class="services" style="margin-top:40px;">
	<div class="services-menu-bg">
		 <br><br>
	</div>
	<div class="services-list">
		<?foreach($arResult as $arItem):?>
		<?if($arItem['TEXT']=='Маникюр'){$mans='<li><a href="/mens">Мужской маникюр</a></li>';}?>	
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
	<div class="service-border">
	</div>
<?endif;?>