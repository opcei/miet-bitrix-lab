<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?$APPLICATION->IncludeComponent("bitrix:news.line", "bannerList", Array(
	"IBLOCK_TYPE" => "reference",	// Тип информационного блока
	"IBLOCKS" => array(	// Код информационного блока
		0 => "2",
	),
	"NEWS_COUNT" => "9",	// Количество новостей на странице
	"FIELD_CODE" => "",	// Поля
	"SORT_BY1" => "NAME",	// Поле для первой сортировки новостей
	"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
	"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
	"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
	"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "300",	// Время кеширования (сек.)
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"LINK_ALL_NAME" => "Все отрасли",
	"LINK_ALL" => $arParams['LINK_ALL'] ,
	),
	false
);?>