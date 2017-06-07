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

if (!isset($moduleDirName)) {
    $moduleDirName = basename(dirname(__DIR__));
}

if (false !== ($moduleHelper = Xmf\Module\Helper::getHelper($moduleDirName))) {
} else {
    $moduleHelper = Xmf\Module\Helper::getHelper('system');
}
$adminObject = \Xmf\Module\Admin::getInstance();

$pathIcon32    = \Xmf\Module\Admin::menuIconPath('');
$pathModIcon32 = $moduleHelper->getModule()->getInfo('modicons32');

$moduleHelper->loadLanguage('modinfo');
$moduleHelper->loadLanguage('admin');

$adminmenu = array(
    array(
          'title'   =>    _MI_PRINTLIMINATOR_MANAGER_INDEX,
          'link'    =>    'admin/index.php',
          'desc'    =>    _MI_PRINTLIMINATOR_MANAGER_INDEX_DESC,
          'icon'    =>    'assets/images/icons/index.png'
          ),
    array(
          'title'   =>    _MI_PRINTLIMINATOR_MANAGER_ABOUT,
          'link'    =>    'admin/about.php',
          'desc'    =>    _MI_PRINTLIMINATOR_MANAGER_ABOUT_DESC,
          'icon'    =>    'assets/images/icons/about.png'
          ),
    array(
          'title'   =>    _MI_PRINTLIMINATOR_MANAGER_HELP,
          'link'    =>    'admin/help.php',
          'desc'    =>    _MI_PRINTLIMINATOR_MANAGER_HELP_DESC,
          'icon'    =>    'assets/images/icons/help.png'
          )
);