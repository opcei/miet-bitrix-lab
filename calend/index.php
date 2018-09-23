<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Календарь на ".date("Y")." год");
?> 
<?$APPLICATION->IncludeComponent("franchise:franchise.calendar", ".default", array(
	"IBLOCK_TYPE" => "reference",
	"IBLOCK_ID" => "5",
	"CALENDAR_TYPE" => "year",
	"SHOW_TITLE" => "Y",
	"SHOW_YEAR" => "Y",
	"NO_CNAGE_DAY" => "Y",
	"ADD_MONTH_CHANGE" => "N",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "N",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>