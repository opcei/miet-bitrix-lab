<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Карта сайта");
$APPLICATION->SetPageProperty("keywords", "1С, бухгалтерия, автоматизация, внедрение, бухгалтерский учет, оперативный учет, курсы 1С, обновление 1С, управленческий учет, Франчайзи, купить 1С, скачать 1С, 1С бухгалтерия, 1С предприятие, 1С зарплата и кадры, 1С кадры, 1С предприятие, 1С расчет, 1С торговля");
$APPLICATION->SetPageProperty("description", "Продажа, установка, настройка программ 1C, обучение пользователей. Разработка и внедрение систем полной автоматизации предприятий.");

?><?$APPLICATION->IncludeComponent(
	"bitrix:main.map",
	"",
	Array(
		"LEVEL" => "3", 
		"COL_NUM" => "1", 
		"SHOW_DESCRIPTION" => "N", 
		"SET_TITLE" => "Y", 
		"CACHE_TYPE" => "A", 
		"CACHE_TIME" => "3600",
		"PRODUCTS_IBLOCK_ID" => "11"
	)
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>