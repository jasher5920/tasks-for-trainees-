<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "template",
    Array(
        "IBLOCK_TYPE" => "news",
        "IBLOCK_ID" => "1",
        "NEWS_COUNT" => "5",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "DETAIL_URL" => "/news/#ELEMENT_ID#/",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "DISPLAY_PANEL" => "Y",
        "SET_TITLE" => "N"
    )
);?>
