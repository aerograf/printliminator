<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - MyStartup	 	                    				 //
//                       <http://www.TyphonSolutions.ca/>                    //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// Author: Benoit Duchaine                                          		 //
// URL: http://www.TyphonSolutions.ca										 //
// Project: TS-MyStartup	                                                 //
// ------------------------------------------------------------------------- //


include '../../../include/cp_header.php';
include XOOPS_ROOT_PATH."/class/xoopsformloader.php";

include_once(XOOPS_ROOT_PATH."/header.php");

// Handlers 
$startup_handler = xoops_getModuleHandler('printliminator');
$group_handler = xoops_getHandler('group');
$module_handler = xoops_getHandler('module');

xoops_cp_header();
$adminObject  = \Xmf\Module\Admin::getInstance();
$adminObject->displayNavigation(basename(__FILE__));
	  echo "<div class='bold shadowlight alignmiddle' style='clear:both;width:100%;vertical-align:middle;text-align:center;'><h3>" . _AM_STARTUP_FORM_DESCRIPTION_2 . "</h3></div><hr style='border: dotted 1px;' />";
    //Enable module
    if (strpos(file_get_contents("../../../include/checklogin.php"), '$url = XOOPS_URL."/index.php"'))
    echo "<div style='float:left;width:25px;vertical-align:middle;text-align:center;'><img style='height:14px;'' src='../assets/images/admin/on.gif'></div>";  
    else echo "<div style='float:left;width:25px;vertical-align:middle;text-align:center;'><img style='height:14px;'' src='../assets/images/admin/off.gif'></div>";
    
    if (strpos(file_get_contents("../../../include/checklogin.php"), '$url = XOOPS_URL."/index.php"; // Printliminator STARTUP HACK')){
        echo '<div style="float:left;width:10%;"><form action="" method="POST"><input type="submit" name="submit_del" value="' . _AM_STARTUP_ENABLE_OFF . '"></form>' . _AM_STARTUP_ENABLE . '</div>';
    }else{
        echo '<div style="float:left;width:10%;"><form action="" method="POST"><input type="submit" name="submit_save" value="' . _AM_STARTUP_ENABLE_ON . '"></form>' . _AM_STARTUP_ENABLE . '</div>';
     }
     if (isset($_POST['submit_save'])){
        copy ("../docs/checklogin.php", "../../../include/checklogin.php") or die ("Error copy");
     }     
     if (isset($_POST['submit_del'])){
        $file = "../../../include/checklogin.php";
        $text=file_get_contents($file);
        $new_text = str_replace( '$url = XOOPS_URL."/index.php"; // Printliminator STARTUP HACK', '', $text);
        file_put_contents($file,$new_text);
     }

	// Handle the posts
	if (isset($_POST['btnAdd'])) {
		// Adding a new startup page for a group
		$module_id = intval($_POST['module_selected']);
		$group_sel = $_POST['group_selected'];
		$order = intval($_POST['order']);
		if (!is_numeric($order) || $order < 0) $order = 0;
		$msg = _AM_STARTUP_SUCCESS_SAVE;
		
		// Validate
		if ($module_handler->get($module_id)) {
			foreach ($group_sel as $grp) {
				if ($group_handler->get(intval($grp))) {
					$newitem = $startup_handler->create();
					$newitem->setVar('group_id', $grp);
					$newitem->setVar('module_id', $module_id);
					$newitem->setVar('start_order', $order);
					if (!$startup_handler->insert($newitem, true)) {
						$msg = _AM_STARTUP_ERROR_FAILURE_SAVE;
					}
				}
			}
		}
		redirect_header("startup.php",1,$msg);
	}   
	
	if (isset($_REQUEST['op'])) {
		// Delete a startup page for a group
		$msg = _AM_STARTUP_SUCCESS_SAVE;
		if ($_REQUEST['op'] == 'delete') {
			$criteria = new CriteriaCompo();
			$criteria->add( new Criteria('group_id', intval($_REQUEST['gid'] )));
			$criteria->add( new Criteria('module_id', intval($_REQUEST['mid'] )));
			if (!$moduleList = $startup_handler->DeleteAll($criteria)) {
				$msg = _AM_STARTUP_ERROR_FAILURE_DELETE;
			}
		}            
		redirect_header("startup.php",1,$msg);
	}

	if (isset($_POST['btnUpdate'])) {
		$count=1;
		while($count<1000){
			$gidname="gid".$count;
			$midname="mid".$count;
			$ordername="order".$count;
			if (isset($_POST[$gidname])){
				$db=Database::getInstance();
				$sql="UPDATE ".$db->prefix("printliminator_startup_page")." SET start_order='".intval($_REQUEST[$ordername])."' WHERE group_id=".intval($_POST[$gidname])." AND module_id=".intval($_POST[$midname]);
				$db->query($sql);
				$msg = _AM_STARTUP_SUCCESS_SAVE;
			} else {
				break;
			}
			$count++;
		}
		redirect_header("startup.php",1,$msg);
	} 
	// Show the add form
	echo "<div style='float:left;width:70%;vertical-align:middle;text-align:center;'>" . _AM_STARTUP_FORM_DESCRIPTION_1 . "</div><br />";
	$myForm = new XoopsThemeForm(_MI_STARTUP_CAT_STARTUP_NAME, 'frmStartupPage', '');
	$myForm->addElement(new XoopsFormSelectGroup(_AM_STARTUP_FORM_GROUP_SELECT, 'group_selected', true, null, 5,true));
	
	$moduleSelect = new XoopsFormSelect(_AM_STARTUP_FORM_MODULE_SELECT, 'module_selected', false);
	$moduleList = $module_handler->getList(new Criteria('hasmain', 1));
	$moduleSelect->addOptionArray($moduleList);
	$myForm->addElement($moduleSelect);
	$myForm->addElement(new XoopsFormText(_AM_STARTUP_FORM_ORDER, 'order', 4, 4, '0'));
	$myForm->addElement(new XoopsFormButton('', 'btnAdd', _AM_STARTUP_ADD, 'submit'));
	
	$myForm->display();


echo '<table cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>'._AM_STARTUP_FORM_GROUP_NAME.'</th>
			<th>'._AM_STARTUP_FORM_MODULE_NAME.'</th>
			<th>'._AM_STARTUP_FORM_ORDER.'</th>
			<th>'._AM_STARTUP_FORM_ACTION.'</th>
		</tr>
	</thead>
	<tbody>';

	$criteria = new CriteriaCompo();
	$criteria->setSort('group_id, start_order, module_id');
	$pageList = $startup_handler->getObjects($criteria);
	$rowcount=1;

echo "<form action='startup.php' method='post' name='startorder' id='startorder'>";
	foreach ($pageList as $grouppage) {
	    if ($rowcount % 2 != 0) {
            $class = 'odd';
        } else {
            $class = 'even';
        }
		$grp = $group_handler->get($grouppage->getVar('group_id'));
		$mod = $module_handler->get($grouppage->getVar('module_id'));
		if ($mod && $grp) {
			$action = '<input type="button" name="btnDelete" value="'._AM_STARTUP_DELETE.'" onclick="location=\'?op=delete&gid='.intval($grouppage->getVar('group_id')).'&mid='.intval($grouppage->getVar('module_id')).'\'" />';
			echo "<input type=hidden name=gid".$rowcount." value=".intval($grouppage->getVar('group_id')).">";
			echo "<input type=hidden name=mid".$rowcount." value=".intval($grouppage->getVar('module_id')).">";


	echo 	'<tr align="center" class="'.$class.'">
			<td>'.$grp->getVar("name").'</td>
			<td>'.$mod->getVar("name").'</td>
			<td><input name="order'.$rowcount.'" type="text" value="'.$grouppage->getVar("start_order").'" maxlength="3" size="2"</td>
			<td>'.$action.'</td>
		</tr>';

		}
		else {
			// Module or group has been deleted... get rid of this mapping
			$criteria = new CriteriaCompo();
			$criteria->add( new Criteria('group_id', $grp));
			$criteria->add( new Criteria('module_id', $mod));
			if (!$moduleList = $startup_handler->DeleteAll($criteria)) {
				$msg = _STARTUP_ERROR_FAILURE_DELETE;
			}
		}
		$rowcount++;
	}

echo '	</tbody>
		<tr>
		<td colspan=4>&nbsp;</td>
		</tr>
			<tr>
			<td colspan=4 align="center"><input type="submit" name="btnUpdate" value="'._AM_STARTUP_ORDER_UPDATE.'"></td>
		</tr>
			</form>
</table><hr />';
include_once __DIR__ . '/footer.php';	
xoops_cp_footer();
