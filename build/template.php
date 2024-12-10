<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?$this->setFrameMode(true);?>

<div id="barba-wrapper" style="display: flex; justify-content: center; align-items: center; min-height: 100vh; text-align: center;">
    <div class="article-list" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <a class="article-item article-list__item" 
               href="<?=htmlspecialchars($arItem["DETAIL_PAGE_URL"])?>" 
               data-anim="anim-3" 
               style="display: block; text-decoration: none; max-width: 300px; background: #f9f9f9; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <div class="article-item__background" style="height: 200px; overflow: hidden;">
                    <?if (!empty($arItem["PREVIEW_PICTURE"])):?>
                        <img 
                            src="<?=htmlspecialchars($arItem["PREVIEW_PICTURE"]["SRC"])?>" 
                            alt="<?=htmlspecialchars($arItem["NAME"])?>" 
                            style="width: 100%; height: 100%; object-fit: cover;"
                            loading="lazy"
                        />
                    <?endif;?>
                </div>
                <div class="article-item__wrapper" style="padding: 15px;">
                    <div class="article-item__title" style="font-size: 18px; font-weight: bold; color: #333;">
                        <?=htmlspecialchars($arItem["NAME"])?>
                    </div>
                    <div class="article-item__content" style="font-size: 14px; color: #666; margin-top: 10px;">
                        <?=htmlspecialchars($arItem["PROPERTIES"]["DESCRIPTION"]["~VALUE"] ?? '')?>
                    </div>
                </div>
            </a>
        <?endforeach;?>
    </div>
</div>