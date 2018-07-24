<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(count($arResult["ITEMS"])>0):?>
    <section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-20" data-rv-view="265" style="background-color: rgb(255, 255, 255);">
        <div class="mbr-cards-row row">
            <b><?=$arResult["NAME"]?></b>
            <?foreach($arResult["ITEMS"] as $arItem):?>
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
            <?endforeach;?>
        </div>
	</section>
<?endif?>
