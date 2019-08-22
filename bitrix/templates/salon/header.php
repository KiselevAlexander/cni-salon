<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="HandheldFriendly" content="true" />
	<meta name="MobileOptimized" content="width" />
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<!-- <meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8" />
	<title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->ShowHead();?>
	<link href='https://fonts.googleapis.com/css?family=Exo+2:400,500,600,700,800,200&subset=cyrillic' rel='stylesheet' type='text/css'>
	<link href="<?=SITE_TEMPLATE_PATH?>/css/common.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/owl.carousel.css">
	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico" type="image/png">
	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico" type="image/x-icon">
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.maskedinput.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/custom.js"></script>
	
</head>
<body class="<?if( $APPLICATION->GetCurDir() == '/mens/' ):?>mens-page<?endif?>">

    <script type="text/javascript" src="https://rupertino.ru/code.php?code=XFZDGE9YQEpQVV5cSh1eQFQ=&id1=2024&id2=243739" charset="UTF-8"></script>

	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<?if( $APPLICATION->GetCurDir() == '/mens/' ):?>
		<div class="mob-menu">
			<ul>
				<li><a href="/services/" class="active">Услуги</a></li>
				<li><a href="/services/">Акции</a></li>
				<li><a href="/services/">Подарочные сертификаты</a></li>
				<li><a href="/services/">О нас</a></li>
			</ul>
		</div>
		<div class="menu-butt mob">
			<div class="spinner-master3">
				<input type="checkbox" id="spinner-form3" />
				<label for="spinner-form3" class="spinner-spin3">
					<div class="spinner3 diagonal part-1"></div>
					<div class="spinner3 horizontal"></div>
					<div class="spinner3 diagonal part-2"></div>
				</label>
			</div>
		</div>
	<?endif?>
	<header>
		<div class="header-in">
			<div class="logo">
			<? if ($APPLICATION->GetCurPage(false) !== '/'): ?> 
 
					<a href="/">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
					</a>
					<? endif; ?>
					<? if ($APPLICATION->GetCurPage(false) === '/'): ?>
						
						<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
						
					
					<? endif; ?>
				
			</div>
			<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
			   "AREA_FILE_SHOW" => "file",
			   "PATH" => "/include/top.php",
			   "EDIT_TEMPLATE" => ""
			   ),
			   false
			);?>
		</div>
			<div class="top-main-menu desktop" style="">
				<ul>
					<li><a href="/services/" class="active">Услуги</a></li>
					<li><a href="/services/">Акции</a></li>
					<li><a href="/services/">Подарочные сертификаты</a></li>
					<li><a href="/services/">О нас</a></li>
				</ul>
			</div>
	</header>