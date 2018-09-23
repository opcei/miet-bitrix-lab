<?
if ($_REQUEST['PROP'])
{


$error_OTRASL=true;
$p_id=$_REQUEST["prop_codes"]["OTRASL"];
foreach($_REQUEST['PROP'][$p_id] as $key=>$val)
      if(strlen($val["VALUE"])>0){
         $error_OTRASL=false;
         } 

$p_id=$_REQUEST["prop_codes"]["VERSION"];
foreach($_REQUEST['PROP'][$p_id] as $key=>$val)
      if(strlen($val)==0){
         $error_VERSION=true;
         } 

$p_id=$_REQUEST["prop_codes"]["VERSION_2"];
foreach($_REQUEST['PROP'][$p_id] as $key=>$val)
      if(strlen($val)==0){
         $error_VERSION_2=true;
         } 

$p_id=$_REQUEST["prop_codes"]["PRODUCT"];
foreach($_REQUEST['PROP'][$p_id] as $key=>$val)
      if(strlen($val)==0){
         $error_PRODUCT=true;
         } 

$p_id=$_REQUEST["prop_codes"]["DESCR"];
foreach($_REQUEST['PROP'][$p_id] as $key=>$val)
      if(strlen($_REQUEST["PROP_{$p_id}__{$key}__VALUE__TEXT_"])==0){
         $error_DESCR=true;
         } 

$p_id=$_REQUEST["prop_codes"]["COUNT"];
foreach($_REQUEST['PROP'][$p_id] as $key=>$val)
      if(strlen($val)==0){
         $error_COUNT=true;
         } 


$p_id=$_REQUEST["prop_codes"]["CLIENT"];
foreach($_REQUEST['PROP'][$p_id] as $key=>$val)
      if(strlen($val)==0){
         $error_CLIENT=true;
         } 

$p_id=$_REQUEST["prop_codes"]["PLACE"];
foreach($_REQUEST['PROP'][$p_id] as $key=>$val)
      if(strlen($val)==0){
         $error_PLACE=true;
         } 

$p_id=$_REQUEST["prop_codes"]["DATE"];
foreach($_REQUEST['PROP'][$p_id] as $key=>$val)
      if(strlen($val)==0){
         $error_DATE=true;
         } 

}

if($REQUEST_METHOD=="POST" && strlen($Update)>0 && $view!="Y" && (!$error) && empty($dontsave) && $error_OTRASL)
{
    $error = new _CIBlockError(2, "OTRASL_REQUIRED", "Не заполнено обязательное поле \"Отрасли\"");
    $bVarsFromForm = true;
}

if($REQUEST_METHOD=="POST" && strlen($Update)>0 && $view!="Y" && (!$error) && empty($dontsave) && $error_VERSION)
{
    $error = new _CIBlockError(2, "VERSION_REQUIRED", "Не заполнено обязательное поле \"Версия Предприятия\"");
    $bVarsFromForm = true;
}

if($REQUEST_METHOD=="POST" && strlen($Update)>0 && $view!="Y" && (!$error) && empty($dontsave) && $error_VERSION_2)
{
    $error = new _CIBlockError(2, "VERSION_2_REQUIRED", "Не заполнено обязательное поле \"Версия (количество пользователей)\"");
    $bVarsFromForm = true;
}


if($REQUEST_METHOD=="POST" && strlen($Update)>0 && $view!="Y" && (!$error) && empty($dontsave) && $error_PRODUCT)
{
    $error = new _CIBlockError(2, "PRODUCT_REQUIRED", "Не заполнено обязательное поле \"Наименование внедренного программного продукта\"");
    $bVarsFromForm = true;
}


if($REQUEST_METHOD=="POST" && strlen($Update)>0 && $view!="Y" && (!$error) && empty($dontsave) && $error_DESCR)
{
    $error = new _CIBlockError(2, "DESCR_REQUIRED", "Не заполнено обязательное поле \"Описание работ по внедрению\"");
    $bVarsFromForm = true;
}


if($REQUEST_METHOD=="POST" && strlen($Update)>0 && $view!="Y" && (!$error) && empty($dontsave) && $error_COUNT)
{
    $error = new _CIBlockError(2, "COUNT_REQUIRED", "Не заполнено обязательное поле \"Общее число автоматизированных рабочих мест\"");
    $bVarsFromForm = true;
}


if($REQUEST_METHOD=="POST" && strlen($Update)>0 && $view!="Y" && (!$error) && empty($dontsave) && $error_CLIENT)
{
    $error = new _CIBlockError(2, "CLIENT_REQUIRED", "Не заполнено обязательное поле \"Организация\"");
    $bVarsFromForm = true;
}


if($REQUEST_METHOD=="POST" && strlen($Update)>0 && $view!="Y" && (!$error) && empty($dontsave) && $error_PLACE)
{
    $error = new _CIBlockError(2, "PLACE_REQUIRED", "Не заполнено обязательное поле \"Населенный пункт\"");
    $bVarsFromForm = true;
}


if($REQUEST_METHOD=="POST" && strlen($Update)>0 && $view!="Y" && (!$error) && empty($dontsave) && $error_DATE)
{
    $error = new _CIBlockError(2, "DATE_REQUIRED", "Не заполнено обязательное поле \"Дата внедрения\"");
    $bVarsFromForm = true;
}




?>