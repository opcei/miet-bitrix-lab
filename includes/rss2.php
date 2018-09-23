				<?$APPLICATION->IncludeComponent("bitrix:rss.show", "template2", Array(
				"SITE"	=>	"www.buh.ru",
				"PORT"	=>	"80",
				"PATH"	=>	"/rss/rss-2.0.jsp",
				"QUERY_STR"	=>	"LANG=ru&LIMIT=3",
				"OUT_CHANNEL"	=>	"N",
				"NUM_NEWS"	=>	"2",
				"CACHE_TYPE"	=>	"A",
				"CACHE_TIME"	=>	"3600",
				"TITLE"=>"Новости учета и налогообложения"
				)
			);?>

