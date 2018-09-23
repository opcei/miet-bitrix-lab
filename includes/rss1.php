				<?$APPLICATION->IncludeComponent("bitrix:rss.show", "template1", Array(
				"SITE"	=>	"www.1c.ru",
				"PORT"	=>	"80",
				"PATH"	=>	"/news/rss-2.0.jsp",
				"QUERY_STR"	=>	"ID=news_sm&LANG=ru&TYPE=news&LIMIT=3",
				"OUT_CHANNEL"	=>	"N",
				"NUM_NEWS"	=>	"2",
				"CACHE_TYPE"	=>	"A",
				"CACHE_TIME"	=>	"3600",
				"TITLE"=>"Новости 1С"
				)
			);?>
