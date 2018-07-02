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

<div class="dropdown-menu">
        <?
        foreach ($arResult['SECTIONS'] as $section):
            ?>
            <div class="dropdown">
                <a class="dropdown-item dropdown-toggle" href="manicure.html" data-toggle="dropdown-submenu" aria-expanded="false">
                    <?=$section['NAME']?>
                </a>
                <?

                $arSelect = Array(
                    "ID",
                    "NAME",
                    "CODE",
                    "DATE_ACTIVE_FROM",
                    "PROPERTY_PRICE"
                );

                $arFilter = Array(
                    "IBLOCK_ID" => $section['IBLOCK_ID'],
                    "SECTION_ID" => $section['ID'],
                    "ACTIVE_DATE" => "Y",
                    "ACTIVE" => "Y"
                );

                $arOrder = Array(
                    "PROPERTY_PRICE" => "asc",
                );

                $res = CIBlockElement::GetList($arOrder, $arFilter, false, Array("nPageSize"=>50), $arSelect);
                if ($res) {
                    ?>
                    <div class="dropdown-menu dropdown-submenu">
                        <?

                        while ($ob = $res->GetNextElement()) {
                            $element = $ob->GetFields();
                            ?>
                            <a class="dropdown-item"
                               href="/services/<?=$section['CODE']?>/<?= $element['CODE'] ?>/?new=1"
                            >
                                <?= $element['NAME'] ?>
                            </a>
                            <?
                        }
                        ?>
                    </div>
                    <?
                }
                ?>
            </div>
        <?endforeach;?>
</div>