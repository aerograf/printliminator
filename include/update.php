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

include_once XOOPS_ROOT_PATH . "/modules/printliminator/include/install.php";

function xoops_module_update_printliminator() {
    if ( !call_user_func("xoops_module_pre_install_printliminator") ) {
        return false;
    }
    return true;
}
