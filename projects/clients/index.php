<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Наши клиенты");
$APPLICATION->SetPageProperty("keywords", "1С, бухгалтерия, автоматизация, внедрение, бухгалтерский учет, оперативный учет, курсы 1С, обновление 1С, управленческий учет, Франчайзи, купить 1С, скачать 1С, 1С бухгалтерия, 1С предприятие, 1С зарплата и кадры, 1С кадры, 1С предприятие, 1С расчет, 1С торговля");
$APPLICATION->SetPageProperty("description", "Продажа, установка, настройка программ 1C, обучение пользователей. Разработка и внедрение систем полной автоматизации предприятий.");
?><?$APPLICATION->IncludeComponent("bitrix:news.line", "clients", array(
	"IBLOCK_TYPE" => "works",
	"IBLOCKS" => array(
		0 => "12",
	),
	"NEWS_COUNT" => "20000",
	"FIELD_CODE" => array(
		0 => "CODE",
		1 => "PREVIEW_TEXT",
		2 => "DETAIL_PICTURE",
		3 => "",
	),
	"SORT_BY1" => "SORT",
	"SORT_ORDER1" => "ASC",
	"SORT_BY2" => "ACTIVE_FROM",
	"SORT_ORDER2" => "DESC",
	"DETAIL_URL" => "",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000",
	"CACHE_GROUPS" => "Y",
	"ACTIVE_DATE_FORMAT" => "d.m.Y"
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>