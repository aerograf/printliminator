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
include_once "../../mainfile.php";

// Handler
$myhandler = xoops_getModuleHandler('printliminator');
$module_handler = xoops_getHandler('module');
$gperm_handler = xoops_getHandler('groupperm');

	// Init
	$page_url = '';
	
	if (is_object($xoopsUser)) {
		// Get all the groups for this user
		$member_handler = xoops_getHandler('member');
		$grpList = $member_handler->getGroupsByUser($xoopsUser->uid());
		foreach ($grpList as $grp) {
			$criteria = new CriteriaCompo();
			$criteria->add(new Criteria('group_id', $grp));
			$criteria->setSort('start_order');
			//echo "<br>crit=" . $criteria->render();
			$pageList = $myhandler->getObjects($criteria);
			foreach ($pageList as $curpage) {
				$mod = $module_handler->get($curpage->getVar('module_id'));
				if ($mod && $gperm_handler->checkRight('module_read', $mod->mid(), $xoopsUser->getGroups())) {
					// Found the first matching group in the list. Take this one...
					$page_url = XOOPS_URL . '/modules/'.$mod->getVar('dirname');
					break 2;
				}
			}
		}
	}
	else {
		// Anonymous
		$criteria = new CriteriaCompo();
		$criteria->add(new Criteria('group_id', XOOPS_GROUP_ANONYMOUS));
		$criteria->setSort('start_order');
		//echo "<br>crit=" . $criteria->render();
		$pageList = $myhandler->getObjects($criteria);
		foreach ($pageList as $curpage) {
			$mod = $module_handler->get($curpage->getVar('module_id'));
			if ($mod && $gperm_handler->checkRight('module_read', $mod->mid(), XOOPS_GROUP_ANONYMOUS)) {
				$page_url = XOOPS_URL . '/modules/'.$mod->getVar('dirname');
				break;
			}
		}
	}

	// Default - FAIL SAFE!!!
	if (empty($page_url)) {
		// Try to find the first available module for this user
		$moduleList = $module_handler->getObjects(new Criteria('mid', 1, '<>'));
		foreach ($moduleList as $mod) {
			if ($mod->name() != $modversion['name']) {
				if ($gperm_handler->checkRight('module_read', $mod->mid(), XOOPS_GROUP_ANONYMOUS)) {
					$page_url = XOOPS_URL . '/modules/'.$mod->dirname();
				}
			}
		}
	}

	if (empty($page_url)) {
		// No startup module defined and public
		include_once(XOOPS_ROOT_PATH . "/header.php");
		echo '<script>history.go(-1);</script>';
		include_once(XOOPS_ROOT_PATH . "/footer.php");
	}
	else {
		// Use header redirection, way faster than redirect_header()
		header("location: $page_url");
	}
