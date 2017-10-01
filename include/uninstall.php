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

function printliminator_killDir($chemin) {
	if ($chemin[strlen($chemin)-1] != '/') { $chemin .= '/'; } 
	if (is_dir($chemin)) {
		 $sq = opendir($chemin); 
		 while ($f = readdir($sq)) {
			if ($f != '.' && $f != '..'){
				$fichier = $chemin.$f; 
				if (is_dir($fichier)) {printliminator_killDir($fichier);} 
			else {unlink($fichier);}
		}
	}
	closedir($sq);
	rmdir($chemin); 
	}
	else {unlink($chemin); }
}

function xoops_module_uninstall_printliminator(&$module) {
	global $xoopsModuleConfig, $xoopsDB, $xoopsModule;
		printliminator_killDir(XOOPS_ROOT_PATH . "/uploads/printliminator" );
	return true;
}
