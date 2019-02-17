<?php

//Menu XOOPS info

include '../../../include/cp_header.php';

if (!defined('XOOPS_ROOT_PATH')) { die('XOOPS root path not defined'); }

define('XOOPSINFO_URL',XOOPS_URL . '/modules/printliminator/');
define('XOOPSINFO_URL_IMAGE',XOOPS_URL . '/modules/printliminator/assets/images/icons');
define('XOOPSINFO_ADMIN_URL',XOOPS_URL . '/modules/printliminator/admin/xoopsinfo.php');
define('XOOPSINFO_PATH',XOOPS_ROOT_PATH . '/modules/printliminator/');

include_once __DIR__ . '/header.php';

$adminObject  = \Xmf\Module\Admin::getInstance();

$op = isset($_REQUEST['op']) ? trim($_REQUEST['op']) : '';
$conf_ids = isset($_REQUEST['conf_ids']) ? $_REQUEST['conf_ids'] : '';
switch($op) {
	case 'save':
	if ( $_SERVER['REQUEST_METHOD'] === 'POST' ){
		$config_handler = xoops_getHandler('config');
		foreach($conf_ids as $key => $conf_id) {
			$config = $config_handler->getConfig($conf_id, true);
			$new_value = $_REQUEST[ $config->getVar('conf_name')];
			if (is_array($new_value) || $new_value != $config->getVar('conf_value')) {
				$config->setConfValueForInput($new_value);
				$config_handler->insertConfig($config);

				if ($config->getVar('conf_name') == 'theme_set') {
					$member_handler = xoops_getHandler('member');
					$member_handler->updateUsersByField('theme', $new_value );
					$_SESSION['xoopsUserTheme'] = $new_value;
				}
			}
		}
		redirect_header(XOOPSINFO_ADMIN_URL, 3, _MD_AM_DBUPDATED);
		exit();
	}
}

$xoopsTpl->display("db:admin/" . $xoopsModule->getVar("dirname") . "_admin_xinfo.tpl");
include_once 'xoops_i.php';

include_once __DIR__ . '/footer.php';
