<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Фотогалерея");
?><?
// создаем объект
$obCache = new CPHPCache; 

// время кеширования - 30 минут
$life_time = 30*60; 

// формируем идентификатор кеша в зависимости от всех параметров 
// которые могут повлиять на результирующий HTML
$cache_id = "photo_id"; 

// если кеш есть и он ещё не истек, то
if($obCache->InitCache($life_time, $cache_id, "/")):

    // получаем закешированные переменные
    $vars = $obCache->GetVars();
    $IBLOCK_ID = $vars["IBLOCK_ID"];
else :


    // иначе обращаемся к базе
// начинаем буферизирование вывода
if($obCache->StartDataCache()):

    if (CModule::IncludeModule("iblock")):
    $res = CIBlock::GetList(
        Array(), 
        Array(
                'TYPE'=>'photo', 
                'ACTIVE'=>'Y', 
                "CODE"=>'photo'
        ), true
    );
    while($ar_res = $res->Fetch())
    {
        $IBLOCK_ID=$ar_res['ID'];
    }
    endif;
    // записываем предварительно буферизированный вывод в файл кеша
    // вместе с дополнительной переменной
    $obCache->EndDataCache(array(
        "IBLOCK_ID"    => $IBLOCK_ID
        )); 
endif;

endif;

?> <?$APPLICATION->IncludeComponent(
        "bitrix:photogallery",
        "",
        Array(
                "SHOW_LINK_ON_MAIN_PAGE" => Array(), 
                "SHOW_ON_MAIN_PAGE" => "none", 
                "SHOW_ON_MAIN_PAGE_POSITION" => "left", 
                "SHOW_ON_MAIN_PAGE_TYPE" => "none", 
                "SHOW_ON_MAIN_PAGE_COUNT" => "", 
                "SHOW_PHOTO_ON_DETAIL_LIST" => "none", 
                "SHOW_PHOTO_ON_DETAIL_LIST_COUNT" => "500", 
                "PAGE_NAVIGATION_TEMPLATE" => "", 
                "WATERMARK_COLORS" => Array("FF0000","FFFF00","FFFFFF","000000","",""), 
                "TEMPLATE_LIST" => ".default", 
                "CELL_COUNT" => "0", 
                "USE_LIGHT_VIEW" => "Y", 
                "SEF_MODE" => "Y", 
                "IBLOCK_TYPE" => "photo", 
                "IBLOCK_ID" => $IBLOCK_ID, 
                "CACHE_TYPE" => "A", 
                "CACHE_TIME" => "3600", 
                "USE_RATING" => "N", 
                "SHOW_TAGS" => "N", 
                "USE_COMMENTS" => "N", 
                "SEF_FOLDER" => "/about/foto/", 
                "SEF_URL_TEMPLATES" => Array(
                        "sections_top" => "index.php",
                        "section" => "#SECTION_ID#/",
                        "section_edit" => "#SECTION_ID#/action/#ACTION#/",
                        "section_edit_icon" => "#SECTION_ID#/icon/action/#ACTION#/",
                        "upload" => "#SECTION_ID#/action/upload/",
                        "detail" => "#SECTION_ID#/#ELEMENT_ID#/",
                        "detail_slide_show" => "#SECTION_ID#/#ELEMENT_ID#/slide_show/",
                        "detail_list" => "#SECTION_ID#/#ELEMENT_ID#/list/",
                        "detail_edit" => "#SECTION_ID#/#ELEMENT_ID#/action/#ACTION#/"
                ),
                "VARIABLE_ALIASES" => Array(
                        "sections_top" => Array(),
                        "section" => Array(),
                        "section_edit" => Array(),
                        "section_edit_icon" => Array(),
                        "upload" => Array(),
                        "detail" => Array(),
                        "detail_slide_show" => Array(),
                        "detail_list" => Array(),
                        "detail_edit" => Array(),
                )
        )
);?> 
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>