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

if (!defined("XOOPS_ROOT_PATH")) { die("XOOPS root path not defined"); }

function xoops_module_pre_install_printliminator(){
	$index_File = XOOPS_ROOT_PATH . "/modules/printliminator/include/index.html";
	$blank_File = XOOPS_ROOT_PATH . "/modules/printliminator/assets/images/blank.gif";
	// Create folder printliminator in uploads
	$upload_module = XOOPS_ROOT_PATH . "/uploads/printliminator" ;
	if (!is_dir( $upload_module )) {
		mkdir($upload_module, 0777);
		chmod($upload_module, 0777);
	}
	copy( $index_File, XOOPS_ROOT_PATH . "/uploads/printliminator/index.html");
	copy( $blank_File, XOOPS_ROOT_PATH . "/uploads/printliminator/blank.gif");
	return true;
}
