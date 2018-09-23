<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->SetPageProperty("keywords", "1С, бухгалтерия, автоматизация, внедрение, бухгалтерский учет, оперативный учет, курсы 1С, обновление 1С, управленческий учет, Франчайзи, купить 1С, скачать 1С, 1С бухгалтерия, 1С предприятие, 1С зарплата и кадры, 1С кадры, 1С предприятие, 1С расчет, 1С торговля");
$APPLICATION->SetPageProperty("description", "Продажа, установка, настройка программ 1C, обучение пользователей. Разработка и внедрение систем полной автоматизации предприятий.");

?> 
<p>opcei
  <br />
Moscow,&nbsp;Moscow</p>
<p>0000000
  <br />
admin@opcei.example
</p>

<p>Режим работы: 10:00 - 18:00 (по рабочим дням)</p>
<?if($_GET['print']!='Y'):?>
	<p><a  href="/request/">Свяжитесь с нами</a></p>
<?endif?>
	<p><?$APPLICATION->IncludeComponent("bitrix:map.google.view", "", array(
		"INIT_MAP_TYPE" => "ROADMAP",
		"MAP_DATA" => "a:4:{s:10:\"google_lat\";d:1;s:10:\"google_lon\";d:;s:12:\"google_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:4:\"TEXT\";s:5:\"opcei\";s:3:\"LON\";d:;s:3:\"LAT\";d:;}}}",
		"MAP_WIDTH" => "450",
		"MAP_HEIGHT" => "450",
		"CONTROLS" => array(
			0 => "SMALL_ZOOM_CONTROL",
			1 => "TYPECONTROL",
			2 => "SCALELINE",
		),
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
			3 => "ENABLE_KEYBOARD",
		),
		"MAP_ID" => "our_adress",	
		),
		false
	);?></p>
<?if($_GET['print']!='Y'):?>
	<p><noindex><a rel="nofollow" target="_blank" href ="<?=$APPLICATION->GetCurPageParam("print=Y"); ?>">Версия для печати</a></noindex></p>
<?endif?>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>