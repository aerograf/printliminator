<?php
/**
 * Printliminator module
 *
 * @copyright	The XOOPS Project https://github.com/XoopsModules25x
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package	Printliminator
 * @since		0.1.0
 * @author 	aerograf <https://www.shmel.org>
 * @version	$Id: blocks_mytype.php 2017-06-06 
**/

include_once __DIR__ . '/header.php';
//System info
define(_HELP_XOOPS_1,XOOPS_URL);
define(_HELP_XOOPS_2,XOOPS_VERSION);
define(_HELP_XOOPS_3,$xoopsConfig['theme_set']);
define(_HELP_XOOPS_4,$xoopsConfig['template_set']);
define(_HELP_XOOPS_5,PHP_VERSION);
define(_HELP_XOOPS_6,mysqli_get_server_info($xoopsDB->conn));
define(_HELP_XOOPS_7,PHP_SAPI);
define(_HELP_XOOPS_8,$_SERVER['HTTP_USER_AGENT']);

xoops_loadLanguage("help", $xoopsModule->getVar("dirname", "e"));

$xoopsTpl->display("db:admin/" . $xoopsModule->getVar("dirname") . "_admin_help.tpl");

include_once __DIR__ . '/footer.php';