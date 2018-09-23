<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetPageProperty("keywords", "1С, бухгалтерия, автоматизация, внедрение, бухгалтерский учет, оперативный учет, курсы 1С, обновление 1С, управленческий учет, Франчайзи, купить 1С, скачать 1С, 1С бухгалтерия, 1С предприятие, 1С зарплата и кадры, 1С кадры, 1С предприятие, 1С расчет, 1С торговля");
$APPLICATION->SetPageProperty("description", "Продажа, установка, настройка программ 1C, обучение пользователей. Разработка и внедрение систем полной автоматизации предприятий.");
$APPLICATION->SetTitle("1C Франчайзи");
?><?$APPLICATION->IncludeComponent("bitrix:desktop", ".default", array(
	"ID" => "holder1",
	"CAN_EDIT" => "Y",
	"COLUMNS" => "3",
	"COLUMN_WIDTH_0" => "25%",
	"COLUMN_WIDTH_1" => "50%",
	"COLUMN_WIDTH_2" => "25%",
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>