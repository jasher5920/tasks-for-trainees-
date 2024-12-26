<?$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "template",
    Array(
        "IBLOCK_TYPE" => "news",
        "IBLOCK_ID" => "1",
        "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
        "CHECK_DATES" => "Y",
        "FIELD_CODE" => array("DETAIL_PICTURE", "DETAIL_TEXT"),
        "PROPERTY_CODE" => array(),
        "IBLOCK_URL" => "/news/",
        "DETAIL_URL" => "/news/#ELEMENT_ID#/",
        "SET_TITLE" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600"
    )
);?>