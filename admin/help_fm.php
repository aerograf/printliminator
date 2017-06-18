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

xoops_loadLanguage("help", $xoopsModule->getVar("dirname", "e"));

$xoopsTpl->display("db:admin/" . $xoopsModule->getVar("dirname") . "_admin_help_fm.tpl");

include_once __DIR__ . '/footer.php';