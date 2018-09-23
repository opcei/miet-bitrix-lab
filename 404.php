<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

$sapi_type = php_sapi_name();
if ($sapi_type=="cgi") 
	header("Status: 404");
else 
	header("HTTP/1.1 404 Not Found");

@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена. Ошибка 404.");

?>Страницы, на которую Вы хотели попасть, не существует, либо Вы неправильно ввели нужный адрес.<br>
Вы можете найти нужную страницу, воспользовавшись <a href="/search/">поиском</a>, <a href="/sitemap/">картой сайта</a> или вернувшись на <a href="/">главную страницу</a>.<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>