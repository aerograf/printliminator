<?php

//Menu XOOPS info

include '../../../include/cp_header.php';

if (!defined('XOOPS_ROOT_PATH')) { die('XOOPS root path not defined'); }

define('XOOPSINFO_URL',XOOPS_URL . '/modules/printliminator/');
define('XOOPSINFO_URL_IMAGE',XOOPS_URL . '/modules/printliminator/assets/images/icons');
define('XOOPSINFO_ADMIN_URL',XOOPS_URL . '/modules/printliminator/admin/xoopsinfo.php');
define('XOOPSINFO_PATH',XOOPS_ROOT_PATH . '/modules/printliminator/');

include_once __DIR__ . '/header.php';
include_once '../include/admmenuinfo.php';

$adminObject  = \Xmf\Module\Admin::getInstance();
$adminObject->displayNavigation(basename(__FILE__));

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

echo '<form><div style="float:left"><input onclick="showContent(\'xoops_i.php\')" type="button" value="'
      . _MI_XOOPSINFO_MAIN
      . '"></div><div style="float:left"><input onclick="showContent(\'php.php\')" type="button" value="'
      . _MI_XOOPSINFO_SERVER_MAIN
      . '"></div><div style="float:left"><input onclick="showContent(\'mysqlinfo.php\')" type="button" value="'
      . _MI_XOOPSINFO_MYSQL_MAIN
      . '"></div><div style="float:left"><input onclick="showContent(\'modules.php\')" type="button" value="'
      . _MI_XOOPSINFO_MODULES_MAIN
      . '"></div><div style="float:left"><input onclick="showContent(\'editors.php\')" type="button" value="'
      . _MI_XOOPSINFO_EDITORS_MAIN
      . '"></div></form><br><br><hr style="clear:both;"><br>';

echo '<div id="contentBody"></div>';
echo '<div id="loading" style="display: none">Loading...</div>';
echo "<script>showContent('xoops_i.php')</script>";	

include_once __DIR__ . '/footer.php';
