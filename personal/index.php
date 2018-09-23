<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Персональный раздел");
?><p>В личном кабинете Вы можете просмотреть или изменить личную информацию, а также подписаться на новости и другие информационные рассылки. </p>
							
<h2>Личная информация</h2>
<ul>
	<li><a href="profile/">Изменить регистрационные данные</a></li>
	<li><a href="profile/?change_password=yes">Изменить пароль</a></li>
	<li><a href="profile/?forgot_password=yes">Забыли пароль?</a></li>
</ul>

<h2>Подписка</h2>
<ul>
	<li><a href="subscribe/">Изменить подписку</a></li>
</ul>	
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>