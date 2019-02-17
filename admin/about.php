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

$adminObject  = \Xmf\Module\Admin::getInstance();

$module_info = $module_handler->get( $xoopsModule->getVar("mid") );
\Xmf\Module\Admin::setPaypal('aerograf@shmel.org');
//$adminObject->displayAbout(false);

$xoopsTpl->assign("module_name",            $xoopsModule->getVar("name") );
$xoopsTpl->assign("module_dirname",         $xoopsModule->getVar("dirname") );
$xoopsTpl->assign("module_image",           $module_info->getInfo("image") );
$xoopsTpl->assign("module_version",         $module_info->getInfo("version") );
$xoopsTpl->assign("module_release",         $module_info->getInfo("module_release") );
$xoopsTpl->assign("module_author",          $module_info->getInfo("author") );
$xoopsTpl->assign("module_credits",         $module_info->getInfo("credits") );
$xoopsTpl->assign("module_license_url",     $module_info->getInfo("license_url") );
$xoopsTpl->assign("module_license",         $module_info->getInfo("license") );
$xoopsTpl->assign("module_status",          $module_info->getInfo("module_status") );
$xoopsTpl->assign("module_website_url",     $module_info->getInfo("module_website_url") );
$xoopsTpl->assign("module_website_name",    $module_info->getInfo("module_website_name") );
$xoopsTpl->assign("author_website_url",     $module_info->getInfo("author_website_url") );
$xoopsTpl->assign("author_website_name",    $module_info->getInfo("author_website_name") );

global $xoopsModule;
$xoopsTpl->assign("module_update_date",     formatTimestamp($xoopsModule->getVar("last_update"),"m") );
$xoopsTpl->assign('navigation',             $adminObject->displayNavigation(basename(__FILE__)));
$xoopsTpl->assign('module_about',           $adminObject->renderAbout('', false));
if ( is_readable( $changelog = XOOPS_ROOT_PATH . "/modules/" . $xoopsModule->getVar("dirname") . "/docs/changelog_dev.txt" ) ){
    $xoopsTpl->assign("changelog",          implode("<br>", file( $changelog ) ) );
}
$xoopsTpl->display("db:admin/" . $xoopsModule->getVar("dirname") . "_admin_about.tpl");

include_once __DIR__ . '/footer.php';
