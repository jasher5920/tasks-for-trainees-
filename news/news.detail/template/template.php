<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<div class="article-card">
    <div class="article-card__title"><?=$arResult["NAME"]?></div>
    <div class="article-card__date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></div>
    <div class="article-card__content">
        <?php if (is_array($arResult["DETAIL_PICTURE"])): ?>
            <div class="article-card__image sticky">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="" data-object-fit="cover"/>
            </div>
        <?php endif; ?>
        <div class="article-card__text">
            <?php if ($arResult["DETAIL_TEXT"]): ?>
                <div class="block-content" data-anim="anim-3"><?=$arResult["DETAIL_TEXT"]?></div>
            <?php endif; ?>
            <a class="article-card__button" href="<?=$arResult["LIST_PAGE_URL"]?>"><?=GetMessage("NEWS_BACK_BTN")?></a>
        </div>
    </div>
    <!-- /.article-card__content -->
</div>
<!-- /.article-card -->