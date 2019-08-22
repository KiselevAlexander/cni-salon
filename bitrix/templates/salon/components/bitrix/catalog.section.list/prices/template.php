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

<div class="price-list">
    <h1>Прайс лист</h1>
    <div class="price-list__container">
        <?
        foreach ($arResult['SECTIONS'] as $section):
            ?>
            <table>
                <tr class="price-list__category">
                    <td colspan="2"><?=$section['NAME']?></td>
                </tr>
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

                while($ob = $res->GetNextElement())
                {
                    $element = $ob->GetFields();
                    ?>

                    <tr>
                        <td>
                            <a href="/services/<?=$element['CODE']?>/" target="_blank" title="<?=$element['NAME']?>">
                                <?=$element['NAME']?>
                            </a>
                        </td>
                        <td><?=number_format($element['PROPERTY_PRICE_VALUE'], 0, '.', ' ');?> р.</td>
                    </tr>
                    <?
                }
                ?>
            </table>
        <?endforeach;?>
    </div>
</div>