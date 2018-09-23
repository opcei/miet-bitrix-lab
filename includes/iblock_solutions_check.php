<?
if ($_REQUEST['PROP'])
{


$error_OTRASL=true;
$p_id=$_REQUEST["prop_codes"]["OTRASL"];
foreach($_REQUEST['PROP'][$p_id] as $key=>$val)
      if(strlen($val["VALUE"])>0){
         $error_OTRASL=false;
         } 

$p_id=$_REQUEST["prop_codes"]["PLATFORM"];
foreach($_REQUEST['PROP'][$p_id] as $key=>$val)
      if(strlen($val)==0){
         $error_PLATFORM=true;
         } 


$p_id=$_REQUEST["prop_codes"]["PARAMS"];
foreach($_REQUEST['PROP'][$p_id] as $key=>$val)
      if(strlen($_REQUEST["PROP_{$p_id}__{$key}__VALUE__TEXT_"])==0){
         $error_PARAMS=true;
         } 


}

if($REQUEST_METHOD=="POST" && strlen($Update)>0 && $view!="Y" && (!$error) && empty($dontsave) && $error_OTRASL)
{
    $error = new _CIBlockError(2, "OTRASL_REQUIRED", "Не заполнено обязательное поле \"Отрасли\"");
    $bVarsFromForm = true;
}

if($REQUEST_METHOD=="POST" && strlen($Update)>0 && $view!="Y" && (!$error) && empty($dontsave) && $error_PLATFORM)
{
    $error = new _CIBlockError(2, "PLATFORM_REQUIRED", "Не заполнено обязательное поле \"Платформа, используемые компоненты/типовые конфигурации\"");
    $bVarsFromForm = true;
}

if($REQUEST_METHOD=="POST" && strlen($Update)>0 && $view!="Y" && (!$error) && empty($dontsave) && $error_PARAMS)
{
    $error = new _CIBlockError(2, "PARAMS_REQUIRED", "Не заполнено обязательное поле \"Параметры\"");
    $bVarsFromForm = true;
}


//--

/*
if($REQUEST_METHOD=="POST" && strlen($Update)>0 && $view!="Y" && (!$error) && empty($dontsave) && strlen($_POST['DETAIL_TEXT'])<=0)
{
    $error = new _CIBlockError(2, "DESCRIPTION_REQUIRED", "Не заполнено обязательное поле \"Описание функционала\"");
    $bVarsFromForm = true;
}

if($REQUEST_METHOD=="POST" && strlen($Update)>0 && $view!="Y" && (!$error) && empty($dontsave) && strlen($_POST['PREVIEW_TEXT'])<=0)
{
    $error = new _CIBlockError(2, "PREVIEW_REQUIRED", "Не заполнено обязательное поле \"Для чего в целом предназначена программа\"");
    $bVarsFromForm = true;
}

*/


?>