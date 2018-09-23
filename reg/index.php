<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"",
	Array(
		"USER_PROPERTY_NAME" => "",
		"SEF_MODE" => "N",
		"SHOW_FIELDS" => array("NAME", "LAST_NAME"),
		"REQUIRED_FIELDS" => array("NAME", "LAST_NAME"),
		"AUTH" => "Y",
		"USE_BACKURL" => "Y",
		"SUCCESS_PAGE" => "/auth/",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array()
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>