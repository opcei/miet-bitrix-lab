<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
$APPLICATION->SetPageProperty("keywords", "1С, бухгалтерия, автоматизация, внедрение, бухгалтерский учет, оперативный учет, курсы 1С, обновление 1С, управленческий учет, Франчайзи, купить 1С, скачать 1С, 1С бухгалтерия, 1С предприятие, 1С зарплата и кадры, 1С кадры, 1С предприятие, 1С расчет, 1С торговля");
$APPLICATION->SetPageProperty("description", "Продажа, установка, настройка программ 1C, обучение пользователей. Разработка и внедрение систем полной автоматизации предприятий.");

?><?$APPLICATION->IncludeComponent(
	"bitrix:search.page",
	"",
	Array(
		"AJAX_MODE" => "Y", 
		"RESTART" => "Y", 
		"CHECK_DATES" => "N", 
		"arrWHERE" => Array(), 
		"arrFILTER" => Array("main","iblock_solutions","iblock_news","iblock_works"), 
		"SHOW_WHERE" => "N", 
		"PAGE_RESULT_COUNT" => "10", 
		"CACHE_TYPE" => "A", 
		"CACHE_TIME" => "3600", 
		"PAGER_TITLE" => "Результаты поиска", 
		"PAGER_SHOW_ALWAYS" => "N", 
		"PAGER_TEMPLATE" => "", 
		"arrFILTER_main" => Array("",""), 
		"arrFILTER_iblock_solutions" => Array(), 
		"arrFILTER_iblock_news" => Array(), 
		"AJAX_OPTION_SHADOW" => "Y", 
		"AJAX_OPTION_JUMP" => "N", 
		"AJAX_OPTION_STYLE" => "Y", 
		"AJAX_OPTION_HISTORY" => "N" 
	)
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>