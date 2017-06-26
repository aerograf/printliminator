<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2006 <http://www.xoops.org/>
*
* Module: xoopsinfo 2.0
* Licence : GPL
* Authors :
*              - Jmorris
*              - Marco
*              - Christian
*              - DuGris (http://www.dugris.info)
*/
include '../../../include/cp_header.php';
global $xoopsDB, $xoopsConfig, $xoopsModule;
if ( file_exists( XOOPS_ROOT_PATH . '/modules/printliminator/language/' . $xoopsConfig['language'] . '/admin.php' ) ) {
	include_once(XOOPS_ROOT_PATH . '/modules/printliminator/language/' . $xoopsConfig['language'] . '/admin.php');
} else {
	include_once(XOOPS_ROOT_PATH . '/modules/printliminator/language/english/admin.php');
}
echo '<table width="100%">';
echo '<tr>';
echo "<td class='bold shadowlight alignmiddle' style='text-align:center;'><h2>" . _AM_XI_ADMENU2 . "</h2></td>";
echo '</tr>';
echo '<tr>';
echo '<td><iframe src="phpinfo.php" scrolling="auto" frameborder="1" width="100%" height="1024"></iframe></td>';
echo '</tr>';
echo '</table>';
