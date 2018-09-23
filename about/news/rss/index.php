<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("RSS");
?><?$APPLICATION->IncludeComponent(
	"bitrix:rss.out",
	"",
	Array(
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "7",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"NUM_NEWS" => "20",
		"NUM_DAYS" => "30",
		"RSS_TTL" => "60",
		"YANDEX" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y"
	),
false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>