<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Продукты");
$APPLICATION->SetPageProperty("keywords", "1С, бухгалтерия, автоматизация, внедрение, бухгалтерский учет, оперативный учет, курсы 1С, обновление 1С, управленческий учет, Франчайзи, купить 1С, скачать 1С, 1С бухгалтерия, 1С предприятие, 1С зарплата и кадры, 1С кадры, 1С предприятие, 1С расчет, 1С торговля");
$APPLICATION->SetPageProperty("description", "Продажа, установка, настройка программ 1C, обучение пользователей. Разработка и внедрение систем полной автоматизации предприятий.");
?>
 <?$APPLICATION->IncludeComponent("bitrix:catalog", "products", Array(
	"IBLOCK_TYPE" => "catalog",	// Тип инфо-блока
	"IBLOCK_ID" => "11",	// Инфо-блок
	"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
	"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
	"SECTION_ID_VARIABLE" => "SECTION_CODE",	// Название переменной, в которой передается код группы
	"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
	"SEF_FOLDER" => "/catalog/",	// Каталог ЧПУ (относительно корня сайта)
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	"CACHE_FILTER" => "N",	// Кэшировать при установленном фильтре
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
	"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
	"USE_FILTER" => "N",	// Показывать фильтр
	"USE_REVIEW" => "N",	// Разрешить отзывы
	"USE_COMPARE" => "N",	// Использовать компонент сравнения
	"PRICE_CODE" => "",	// Тип цены
	"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
	"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
	"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
	"PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
	"SHOW_TOP_ELEMENTS" => "N",	// Выводить топ элементов
	"PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
	"LINE_ELEMENT_COUNT" => "1",	// Количество элементов, выводимых в одной строке таблицы
	"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем товары в разделе
	"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки товаров в разделе
	"LIST_PROPERTY_CODE" => array(	// Свойства
		0 => "MEMO",
		1 => "AUTHOR",
		2 => "PRICE",
		3 => "",
	),
	"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
	"LIST_META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства раздела
	"LIST_META_DESCRIPTION" => "-",	// Установить описание страницы из свойства раздела
	"LIST_BROWSER_TITLE" => "NAME",	// Установить заголовок окна браузера из свойства раздела
	"DETAIL_PROPERTY_CODE" => array(	// Свойства
		0 => "MEMO",
		1 => "AUTHOR",
		2 => "PRICE",
		3 => "",
	),
	"DETAIL_META_KEYWORDS" => "KEYWORDS",
	"DETAIL_META_DESCRIPTION" => "DESCRIPTION",
	"DETAIL_BROWSER_TITLE" => "NAME",	// Установить заголовок окна браузера из свойства
	"LINK_IBLOCK_TYPE" => "",	// Тип инфо-блока, элементы которого связаны с текущим элементом
	"LINK_IBLOCK_ID" => "",	// ID инфо-блока, элементы которого связаны с текущим элементом
	"LINK_PROPERTY_SID" => "",	// Свойство, в котором хранится связь
	"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL на страницу где будет показан список связанных элементов
	"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
	"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
	"PAGER_TITLE" => "Продукты",	// Название категорий
	"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
	"PAGER_TEMPLATE" => "",	// Название шаблона
	"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
	"PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
	"FORM_ANSWER_LINK" => "/request/",
	"FORM_ANSWER_ID" => "1",
	"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	"SEF_URL_TEMPLATES" => array(
		"sections" => "",
		"section" => "#SECTION_CODE#/",
		"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		"compare" => "compare.php?action=#ACTION_CODE#",
	),
	"VARIABLE_ALIASES" => array(
		"compare" => array(
			"ACTION_CODE" => "action",
		),
	)
	),
	false
);?>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>