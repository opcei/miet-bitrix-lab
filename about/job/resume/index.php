<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отправить резюме");
$APPLICATION->SetPageProperty("keywords", "1С, бухгалтерия, автоматизация, внедрение, бухгалтерский учет, оперативный учет, курсы 1С, обновление 1С, управленческий учет, Франчайзи, купить 1С, скачать 1С, 1С бухгалтерия, 1С предприятие, 1С зарплата и кадры, 1С кадры, 1С предприятие, 1С расчет, 1С торговля");
$APPLICATION->SetPageProperty("description", "Продажа, установка, настройка программ 1C, обучение пользователей. Разработка и внедрение систем полной автоматизации предприятий.");

?>

<?if ($_REQUEST['formresult']==''):?>                
<p>Если вы хотите работать в нашей компании, заполните форму, приведенную ниже. В ней вы также сможете приложить файл с резюме.</p>
<?endif;?>

<?$APPLICATION->IncludeComponent(
        "bitrix:form",
        "resume",
        Array(
                "AJAX_MODE" => "N", 
                "SEF_MODE" => "N", 
                "WEB_FORM_ID" => "resume", 
                "RESULT_ID" => $_REQUEST["RESULT_ID"], 
                "START_PAGE" => "new", 
                "SHOW_LIST_PAGE" => "N", 
                "SHOW_EDIT_PAGE" => "N", 
                "SHOW_VIEW_PAGE" => "N", 
                "SUCCESS_URL" => "", 
                "SHOW_ANSWER_VALUE" => "N", 
                "SHOW_ADDITIONAL" => "N", 
                "SHOW_STATUS" => "N", 
                "EDIT_ADDITIONAL" => "N", 
                "EDIT_STATUS" => "N", 
                "NOT_SHOW_FILTER" => Array(""), 
                "NOT_SHOW_TABLE" => Array(""), 
                "CHAIN_ITEM_TEXT" => "", 
                "CHAIN_ITEM_LINK" => "", 
                "IGNORE_CUSTOM_TEMPLATE" => "N", 
                "USE_EXTENDED_ERRORS" => "N", 
                "CACHE_TYPE" => "A", 
                "CACHE_TIME" => "3600", 
                "AJAX_OPTION_SHADOW" => "Y", 
                "AJAX_OPTION_JUMP" => "N", 
                "AJAX_OPTION_STYLE" => "Y", 
                "AJAX_OPTION_HISTORY" => "N", 
                "VACANCY_IBLOCK_ID" => "8",
                "VARIABLE_ALIASES" => Array(
                        "action" => "action"
                )
        )
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>