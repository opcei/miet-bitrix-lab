<?
if(COption::GetOptionString("main", "wizard_template_id","")=="modern" || COption::GetOptionString("main", "wizard_template_id","")=="bright")
{
	require($_SERVER["DOCUMENT_ROOT"].SITE_DIR.".main2.menu.php");	
}
?>