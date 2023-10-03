<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="owl-carousel owl-theme">
    <?foreach($arResult["ITEMS"] as $arItem):?>
     <?
     $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
     $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" =>GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
        <a href="<?=$arItem["PROPERTIES"]["URL"]["VALUE"]?>" class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>')">
            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
            <h3 class="preview-text"><?echo $arItem["PREVIEW_TEXT"];?></h3>
            <?endif;?>
        </a>
    <?endforeach;?>
</div>
<style>
	.item{
		width: 100%;
		height: 300px;
		background-size: contain;
    	background-repeat: no-repeat;
		display: flex;
		justify-content: center;
		align-items: flex-end;
	}
	.preview-text{
		color: #fff;
		font-family: sans-serif;
	}
	a{
		text-decoration: none;
	}
</style> 
<script>
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 1,
		loop:true,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
		nav:true,
		mouseDrag:false,
    })
});
</script>