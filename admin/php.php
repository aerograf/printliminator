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

include_once __DIR__ . '/header.php';

global $xoopsDB, $xoopsConfig, $xoopsModule;

if ( file_exists( XOOPS_ROOT_PATH . '/modules/printliminator/language/' . $xoopsConfig['language'] . '/admin.php' ) ) {
	include_once(XOOPS_ROOT_PATH . '/modules/printliminator/language/' . $xoopsConfig['language'] . '/admin.php');
} else {
	include_once(XOOPS_ROOT_PATH . '/modules/printliminator/language/english/admin.php');
}

$xoopsTpl->display("db:admin/" . $xoopsModule->getVar("dirname") . "_admin_xinfo.tpl");

echo '<table style="width:100%;"><tr><td class="bold shadowlight alignmiddle" style="text-align:center;"><h2>'
      . _AM_XI_ADMENU2
      . '</h2></td></tr><tr><td><iframe src="phpinfo.php" scrolling="auto" frameborder="1" width="100%" height="1024">';
echo '</iframe></td></tr></table>';

include_once __DIR__ . '/footer.php';
