<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<script language="JavaScript">
<!--
function addNewRow(tableID)
{
        var tbl = document.getElementById(tableID);
        var cnt = tbl.rows.length;
        var oRow = tbl.insertRow(cnt-1);
        var oCell = oRow.insertCell(0);
        var sHTML=tbl.rows[cnt-2].cells[0].innerHTML;
        var p = 0;
        while(true)
        {
                var s = sHTML.indexOf('[n',p);
                if(s<0)break;
                var e = sHTML.indexOf(']',s);
                if(e<0)break;
                var n = parseInt(sHTML.substr(s+2,e-s));
                sHTML = sHTML.substr(0, s)+'[n'+(++n)+']'+sHTML.substr(e+1);
                p=s+1;
        }
        var p = 0;
        while(true)
        {
                var s = sHTML.indexOf('__n',p);
                if(s<0)break;
                var e = sHTML.indexOf('__',s+2);
                if(e<0)break;
                var n = parseInt(sHTML.substr(s+3,e-s));
                sHTML = sHTML.substr(0, s)+'__n'+(++n)+'__'+sHTML.substr(e+2);
                p=e+2;
        }
        oCell.innerHTML = sHTML;
}
//-->
</script>
<form method="POST" action="<?=htmlspecialchars("/bitrix/admin/iblock_element_edit.php?type=".urlencode($type)."&lang=".LANG."&IBLOCK_ID=".$IBLOCK_ID."&find_section_section=".intval($find_section_section));?>" ENCTYPE="multipart/form-data" name="form_element">
<?=bitrix_sessid_post()?>
<?echo GetFilterHiddens("find_");?>
<input type="hidden" name="Update" value="Y">
<input type="hidden" name="from" value="<?echo htmlspecialchars($from)?>">
<input type="hidden" name="WF" value="<?echo htmlspecialchars($WF)?>">
<input type="hidden" name="return_url" value="<?echo $return_url?>">
<input type="hidden" name="ID" value="<?echo $ID?>">
<input type="hidden" name="IBLOCK_SECTION_ID" value="<?echo IntVal($IBLOCK_SECTION_ID)?>">

<?
$bTab2 = ($arIBTYPE["SECTIONS"]=="Y");
$bTab4 = $bWorkflow;

$aTabs = array();
$aTabs[] = array("DIV" => "edit1", "TAB" => "Внедрение", "ICON"=>"iblock_element", "TITLE"=>"Внедрение");
//$aTabs[] = array("DIV" => "edit5", "TAB" => "Отзыв клиента", "ICON"=>"iblock_element", "TITLE"=>"Отзыв клиента");
//$aTabs[] = array("DIV" => "edit6", "TAB" => "Где и когда внедрено", "ICON"=>"iblock_element", "TITLE"=>"Где и когда внедрено");
if($bTab2) $aTabs[] = array("DIV" => "edit2", "TAB" => "Отрасль", "ICON"=>"iblock_element_section", "TITLE"=>"Отрасль");
//$aTabs[] = array("DIV" => "edit3", "TAB" => GetMessage("IBLOCK_EL_TAB_MO"), "ICON"=>"iblock_element_params", "TITLE"=>GetMessage("IBLOCK_EL_TAB_MO_TITLE"));
if($bTab4) $aTabs[] = array("DIV" => "edit4", "TAB" => GetMessage("IBLOCK_EL_TAB_WF"), "ICON"=>"iblock_element_wf", "TITLE"=>GetMessage("IBLOCK_EL_TAB_WF_TITLE"));

$tabControl = new CAdminTabControl("tabControl", $aTabs);
$customTabber->SetErrorState($bVarsFromForm);
$tabControl->AddTabs($customTabber);
$tabControl->Begin();

$tabControl->BeginNextTab();
?>
        <?
        if($ID>0):
                $p = CIblockElement::GetByID($ID);
                $pr = $p->ExtractFields("prn_");
        endif;
        ?>
        <tr>
                <td><span class="required">*</span>Наименование решения</td>
                <td>
                        <input type="text" name="NAME" size="50" maxlength="255" value="<?echo $str_NAME?>">
                </td>
        </tr>
        
    <tr>
                <td valign="top" width="40%"><?echo GetMessage("IBLOCK_PICTURE")?></td>
                <td width="60%">
                        <?echo CFile::InputFile("DETAIL_PICTURE", 20, $str_DETAIL_PICTURE, false, 0, "IMAGE", "", 40);?><br>
                        <?echo CFile::ShowImage($str_DETAIL_PICTURE, 200, 200, "border=0", "", true)?>
                </td>
        </tr>
        
        <?if(count($PROP)>0):?>
                <?
                foreach($PROP as $prop_code=>$prop_fields):
                        $prop_values = $prop_fields["VALUE"];
                ?>
                <tr>
                        <td valign="top"><?if ($prop_code!="COMPAT") echo "<span class='required'>*</span>"?><?echo htmlspecialcharsex($prop_fields["NAME"]);?>:</td>
                        <td><?_ShowPropertyField('PROP['.$prop_fields["ID"].']', $prop_fields, $prop_fields["VALUE"], ((!$bVarsFromForm) && ($ID<=0)), $bVarsFromForm);?></td>
                        <input type="hidden" name="prop_codes[<?=$prop_fields["CODE"]?>]" value="<?=$prop_fields["ID"]?>">
                </tr>

<?
/*
                        if ($prop_code=='COUNT')
                                {
                        $tabControl->EndTab();
                        $tabControl->BeginNextTab();
                            }
*/
?>

        
                
                <?endforeach;?>
        <?endif?>

        <tr>
                <td width="40%"><?echo GetMessage("IBLOCK_SORT")?></td>
                <td width="60%">
                        <input type="text" name="SORT" size="7" maxlength="10" value="<?echo $str_SORT?>">
                </td>
        </tr>
        <tr>
                <td width="40%"><?echo GetMessage("IBLOCK_ACTIVE")?></td>
                <td width="60%"><input type="checkbox" name="ACTIVE" value="Y"<?if($str_ACTIVE=="Y")echo " checked"?>></td>
        </tr>


        <?
        if ($view!="Y" && CModule::IncludeModule("catalog") && CCatalog::GetByID($IBLOCK_ID))
        {
                include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/catalog/admin/templates/product_edit.php");
        }
        $rsLinkedProps = CIBlockProperty::GetList(array(), array(
                "PROPERTY_TYPE" => "E",
                "LINK_IBLOCK_ID" => $IBLOCK_ID,
                "ACTIVE" => "Y",
                "FILTRABLE" => "Y",
        ));
        $arLinkedProp = $rsLinkedProps->GetNext();
        if($arLinkedProp)
        {
                ?>
                <tr class="heading">
                        <td colspan="2"><?echo GetMessage("IBLOCK_ELEMENT_EDIT_LINKED");?></td>
                </tr>
                <?
                do {
                        $elements_name = CIBlock::GetArrayByID($arLinkedProp["IBLOCK_ID"], "ELEMENTS_NAME");
                        if(strlen($elements_name) <= 0)
                                $elements_name = GetMessage("IBLOCK_ELEMENT_EDIT_ELEMENTS");
                ?>
                <tr>
                        <td colspan="2"><a href="<?echo $urlElementAdminPage?>?type=<?echo CIBlock::GetArrayByID($arLinkedProp["IBLOCK_ID"], "IBLOCK_TYPE_ID")?>&amp;IBLOCK_ID=<?echo urlencode($arLinkedProp["IBLOCK_ID"])?>&amp;lang=<?echo LANG?>&amp;set_filter=Y&amp;find_el_property_<?echo $arLinkedProp["ID"]?>=<?echo $ID?>"><?echo CIBlock::GetArrayByID($arLinkedProp["IBLOCK_ID"], "NAME").": ".$elements_name?></a></td>
                </tr>
                <?
                } while ($arLinkedProp = $rsLinkedProps->GetNext());
        }
        ?>

                
<?$tabControl->EndTab();?>
<?if($bTab2):
        $tabControl->BeginNextTab();
        ?>
        <tr>
                <td valign="top" width="40%">Отрасли:</td>
                <td width="60%">
                <?$l = CIBlockSection::GetTreeList(Array("IBLOCK_ID"=>$IBLOCK_ID));?>
                <select name="IBLOCK_SECTION[]" size="14" multiple>
                        <option value="0"<?if(is_array($str_IBLOCK_ELEMENT_SECTION) && in_array(0, $str_IBLOCK_ELEMENT_SECTION))echo " selected"?>><?echo GetMessage("IBLOCK_CONTENT")?></option>
                <?
                        while($l->ExtractFields("l_")):
                                ?><option value="<?echo $l_ID?>"<?if(is_array($str_IBLOCK_ELEMENT_SECTION) && in_array($l_ID, $str_IBLOCK_ELEMENT_SECTION))echo " selected"?>><?echo str_repeat(" . ", $l_DEPTH_LEVEL)?><?echo $l_NAME?></option><?
                        endwhile;
                ?>
                </select>
                </td>
        </tr>
        <?
        $tabControl->EndTab();
endif;
/*
$tabControl->BeginNextTab();
?>
        <?if(COption::GetOptionString("iblock", "show_xml_id", "N")=="Y"):?>
        <tr>
                <td><?echo GetMessage("IBLOCK_EXTERNAL_CODE")?></td>
                <td>
                        <input type="text" size="20" name="XML_ID" maxlength="255" value="<?echo $str_XML_ID?>">
                </td>
        </tr>
        <?endif?>
        <tr>
                <td><?echo GetMessage("IBLOCK_CODE")?></td>
                <td>
                        <input type="text" size="20" name="CODE" maxlength="255" value="<?echo $str_CODE?>">
                </td>
        </tr>
        <tr>
                <td><?echo GetMessage("IBLOCK_TAGS")?><br><?echo GetMessage("IBLOCK_ELEMENT_EDIT_TAGS_TIP")?></td>
                <td>
                        <?if(CModule::IncludeModule('search')):
                                $arLID = array();
                                $rsSites = CIBlock::GetSite($IBLOCK_ID);
                                while($arSite = $rsSites->Fetch())
                                        $arLID[] = $arSite["LID"];
                                echo InputTags("TAGS", $str_TAGS, $arLID, 'size="55"');
                        else:?>
                                <input type="text" size="20" name="TAGS" maxlength="255" value="<?echo $str_TAGS?>">
                        <?endif?>
                </td>
        </tr>
<?
$tabControl->EndTab();*/
?>

<?if($bTab4):?>
<?
        $tabControl->BeginNextTab();
        if(strlen($pr["DATE_CREATE"])>0):
        ?>
                <tr>
                        <td width="40%"><?echo GetMessage("IBLOCK_CREATED")?></td>
                        <td width="60%"><?echo $pr["DATE_CREATE"]?><?
                        if (intval($pr["CREATED_BY"])>0):
                        ?>&nbsp;&nbsp;&nbsp;[<a href="user_edit.php?lang=<?=LANG?>&amp;ID=<?=$pr["CREATED_BY"]?>"><?echo $pr["CREATED_BY"]?></a>]&nbsp;<?=htmlspecialcharsex($pr["CREATED_USER_NAME"])?><?
                        endif;
                        ?></td>
                </tr>
        <?endif;?>
        <?if(strlen($str_TIMESTAMP_X)>0):?>
        <tr>
                <td><?echo GetMessage("IBLOCK_LAST_UPDATE")?></td>
                <td><?echo $str_TIMESTAMP_X?><?
                if (intval($str_MODIFIED_BY)>0):
                ?>&nbsp;&nbsp;&nbsp;[<a href="user_edit.php?lang=<?=LANG?>&amp;ID=<?=$str_MODIFIED_BY?>"><?echo $str_MODIFIED_BY?></a>]&nbsp;<?=$str_USER_NAME?><?
                endif;
                ?></td>
        </tr>
        <?endif?>
        <?if($WF=="Y" && strlen($prn_WF_DATE_LOCK)>0):?>
        <tr>
                <td nowrap><?echo GetMessage("IBLOCK_DATE_LOCK")?></td>
                <td nowrap><?echo $prn_WF_DATE_LOCK?><?
                if (intval($prn_WF_LOCKED_BY)>0):
                ?>&nbsp;&nbsp;&nbsp;[<a href="user_edit.php?lang=<?=LANG?>&ID=<?=$prn_WF_LOCKED_BY?>"><?echo $prn_WF_LOCKED_BY?></a>]&nbsp;<?=$prn_LOCKED_USER_NAME?><?
                endif;
                ?></td>
        </tr>
        <?endif;?>
        <?if ($WF=="Y" || $view=="Y"):?>
        <tr>
                <td><?=GetMessage("IBLOCK_WF_STATUS")?></td>
                <td nowrap>
                <?echo SelectBox("WF_STATUS_ID", CWorkflowStatus::GetDropDownList("N", "desc"), "", $str_WF_STATUS_ID);?></td>
        </tr>
        <?endif;?>
        <tr class="heading">
                <td colspan="2"><b><?=GetMessage("IBLOCK_COMMENTS")?></b></td>
        </tr>
        <tr>
                <td colspan="2">
                        <textarea name="WF_COMMENTS" style="width:100%" rows="10"><?echo $str_WF_COMMENTS?></textarea>
                </td>
        </tr>
<?$tabControl->EndTab();?>
<?endif?>
<?
$tabControl->Buttons();
?>
<input <?if ($view=="Y" || $prn_LOCK_STATUS=="red") echo "disabled";?> type="submit" class="button" name="save" value="<?echo GetMessage("IBLOCK_EL_SAVE")?>">
<input <?if ($view=="Y" || $prn_LOCK_STATUS=="red") echo "disabled";?> class="button" type="submit" name="apply" value="<?echo GetMessage('IBLOCK_APPLY')?>">
<input <?if ($view=="Y" || $prn_LOCK_STATUS=="red") echo "disabled";?> type="submit" class="button" name="dontsave" value="<?echo GetMessage("IBLOCK_EL_CANC")?>">
<?
$tabControl->End();
?>

</form>
