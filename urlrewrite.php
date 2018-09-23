<?
$arUrlRewrite = array(
	array(
		"CONDITION"	=>	"#^/training/booking/(.+?)/(.+?)/#",
		"RULE"	=>	"SECTION_CODE=$1&ELEMENT_CODE=$2&",
		"ID"	=>	"",
		"PATH"	=>	"/training/booking/index.php",
	),
	array(
		"CONDITION"	=>	"#^/training/booking/(.+?)/#",
		"RULE"	=>	"SECTION_CODE=$1&",
		"ID"	=>	"",
		"PATH"	=>	"/training/booking/index.php",
	),
	array(
		"CONDITION"	=>	"#^/about/job/resume/(.+?)/#",
		"RULE"	=>	"ELEMENT_CODE=$1&",
		"ID"	=>	"",
		"PATH"	=>	"/about/job/resume/index.php",
	),
	array(
		"CONDITION"	=>	"#^/projects/implemented/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:news",
		"PATH"	=>	"/projects/implemented/index.php",
	),
	array(
		"CONDITION"	=>	"#^/personal/download/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:news",
		"PATH"	=>	"/personal/download/index.php",
	),
	array(
		"CONDITION"	=>	"#^/training/courses/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:catalog",
		"PATH"	=>	"/training/courses/index.php",
	),
	array(
		"CONDITION"	=>	"#^/about/discounts/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:news",
		"PATH"	=>	"/about/discounts/index.php",
	),
	array(
		"CONDITION"	=>	"#^/about/news/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:news",
		"PATH"	=>	"/about/news/index.php",
	),
	array(
		"CONDITION"	=>	"#^/about/foto/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:photogallery",
		"PATH"	=>	"/about/foto/index.php",
	),
	array(
		"CONDITION"	=>	"#^/about/job/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:news",
		"PATH"	=>	"/about/job/index.php",
	),
	array(
		"CONDITION"	=>	"#^/solutions/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:news",
		"PATH"	=>	"/solutions/index.php",
	),
	array(
		"CONDITION"	=>	"#^/projects/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:news",
		"PATH"	=>	"/projects/index.php",
	),
	array(
		"CONDITION"	=>	"#^/catalog/#",
		"RULE"	=>	"",
		"ID"	=>	"bitrix:catalog",
		"PATH"	=>	"/catalog/index.php",
	),
);

?>