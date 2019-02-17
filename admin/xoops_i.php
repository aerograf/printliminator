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

if (!defined('XOOPS_ROOT_PATH')) { die('XOOPS root path not defined'); }
/*
define('XOOPSINFO_URL', XOOPS_URL . '/modules/printliminator/');
define('XOOPSINFO_URL_IMAGE', XOOPS_URL . '/modules/printliminator/assets/images/icons');
define('XOOPSINFO_ADMIN_URL', XOOPS_URL . '/modules/printliminator/admin/xoopsinfo.php');
define('XOOPSINFO_PATH', XOOPS_ROOT_PATH . '/modules/printliminator/');
*/
include_once __DIR__ . '/header.php';

global $xoopsDB, $xoopsConfig, $xoopsModule;

include_once( XOOPS_ROOT_PATH .'/class/xoopsformloader.php');
include_once( XOOPS_ROOT_PATH . '/modules/printliminator/include/functions_xi.php');
@include_once( XOOPS_ROOT_PATH .'/modules/printliminator/xoops_version.php');

if ( file_exists( XOOPS_ROOT_PATH . '/modules/printliminator/language/' . $xoopsConfig['language'] . '/modinfo.php') ) {
	include_once(XOOPS_ROOT_PATH . '/modules/printliminator/language/' . $xoopsConfig['language'] . '/modinfo.php');
} else {
	include_once(XOOPS_ROOT_PATH . '/modules/printliminator/language/english/modinfo.php');
}

if ( file_exists( XOOPS_ROOT_PATH . '/language/' . $xoopsConfig['language'] . '/global.php' ) ) {
	@include_once( XOOPS_ROOT_PATH . '/language/' . $xoopsConfig['language'] . '/global.php');
} else {
	@include_once( XOOPS_ROOT_PATH . '/language/english/admin/global.php');
}

if ( file_exists( XOOPS_ROOT_PATH . '/language/' . $xoopsConfig['language'] . '/global.php' ) ) {
	@include_once( XOOPS_ROOT_PATH . '/language/' . $xoopsConfig['language'] . '/global.php');
} else {
	@include_once( XOOPS_ROOT_PATH . '/language/english/admin/global.php');
}

if ( file_exists( XOOPS_ROOT_PATH . '/modules/system/language/' . $xoopsConfig['language'] . '/admin.php' ) ) {
	@include_once( XOOPS_ROOT_PATH . '/modules/system/language/' . $xoopsConfig['language'] . '/admin.php');
} else {
	@include_once( XOOPS_ROOT_PATH . '/modules/system/language/english/admin/admin.php');
}

if ( file_exists( XOOPS_ROOT_PATH . '/modules/system/language/' . $xoopsConfig['language'] . '/admin/preferences.php' ) ) {
	@include_once( XOOPS_ROOT_PATH . '/modules/system/language/' . $xoopsConfig['language'] . '/admin/preferences.php');
} else {
	@include_once( XOOPS_ROOT_PATH . '/modules/system/language/english/admin/preferences.php');
}

$myts = MyTextSanitizer::getInstance();

// Safe mode
if ( ini_get('safe_mode') ) {
	$safemode = '<img src="'
              . XOOPSINFO_URL_IMAGE
              . '/off.gif" align="absmiddle" alt="'
              . _AM_XI_DOWN_OFF
              . '" /><b> '
              . _AM_XI_DOWN_SAFEMODEPROBLEMS
              . '</b>';
} else {
	$safemode = '<img src="'
              . XOOPSINFO_URL_IMAGE
              . '/on.gif" align="absmiddle" alt="'
              . _AM_XI_DOWN_ON
              . '" />'; 
}

// Register globals
if ( ini_get('register_globals') ) {
	$registerglobals = '<img src="'
                      . XOOPSINFO_URL_IMAGE
                      . '/off.gif" align="absmiddle" alt="'
                      . _AM_XI_DOWN_OFF
                      . '" />'
                      . _AM_XI_DOWN_SAFEMODEPROBLEMS;
} else {
	$registerglobals = '<img src="'
                      . XOOPSINFO_URL_IMAGE
                      . '/on.gif" align="absmiddle" alt="'
                      . _AM_XI_DOWN_ON
                      . '" />';
}

// allow_url_fopen		
if ( ini_get('allow_url_fopen') ) {
	$allow_url_fopen = '<img src="'
                      . XOOPSINFO_URL_IMAGE
                      . '/off.gif" align="absmiddle" alt="'
                      . _AM_XI_DOWN_OFF
                      . '" />'
                      . _AM_XI_DOWN_SAFEMODEPROBLEMS;
} else {
	$allow_url_fopen = '<img src="'
                      . XOOPSINFO_URL_IMAGE
                      . '/on.gif" align="absmiddle" alt="'
                      . _AM_XI_DOWN_ON
                      . '" />';
}

// session.use_trans_sid
if ( ini_get('session.use_trans_sid') ) {
	$use_trans_sid = '<img src="'
                    . XOOPSINFO_URL_IMAGE
                    . '/off.gif" align="absmiddle" alt="'
                    . _AM_XI_DOWN_OFF
                    . '" />'
                    . _AM_XI_DOWN_SAFEMODEPROBLEMS;
} else {
	$use_trans_sid = '<img src="'
                    . XOOPSINFO_URL_IMAGE
                    . '/on.gif" align="absmiddle" alt="'
                    . _AM_XI_DOWN_ON
                    . '" />';
}

// Support librairie GD
$gdversion = '';
if (function_exists('gd_info')) {
	if (true == $gdlib = gd_info()) {
		$gdversion = $gdlib['GD Version'];
	}
	$gdlib = '<img src="'
            . XOOPSINFO_URL_IMAGE
            . '/on.gif" align="absmiddle" alt="'
            . _AM_XI_DOWN_GDON
            . '"/><b> '
            . $gdversion
            . '</b>'
            . _AM_XI_DOWN_GDON ;
} else {
	$gdlib = '<img src="'
            . XOOPSINFO_URL_IMAGE
            . '/off.gif" align="absmiddle" alt="'
            . _AM_XI_DOWN_GDOFF
            . '" /><b> '
            . $gdversion
            . '</n>'
            . _AM_XI_DOWN_GDOFF ;
}

// downloads status	
if ( ini_get('file_uploads') ) {
	$downloads = '<img src="'
                . XOOPSINFO_URL_IMAGE
                . '/on.gif" align="absmiddle" alt="'
                . _AM_XI_DOWN_ON
                . '" />';
} else {
	$downloads = '<img src="'
                . XOOPSINFO_URL_IMAGE
                . '/off.gif" align="absmiddle" alt="'
                . _AM_XI_DOWN_OFF
                . '" />';
}

// protector status
if ( XoopsInfo_getModuleInfo( 'protector' ) ) {
	$protector = '<img src="'
                . XOOPSINFO_URL_IMAGE
                . '/on.gif" align="absmiddle" alt="'
                . _AM_XI_PROTECTOR_MODULE_OK
                . '"/>';
} else {
	$protector = '<img src="'
                . XOOPSINFO_URL_IMAGE
                . '/off.gif" align="absmiddle" alt="'
                . _AM_XI_PROTECTOR_MODULE_NOT
                . '" />';
}
if( defined( 'PROTECTOR_PRECHECK_INCLUDED' ) ) {
	$precheck = '<img src="'
                . XOOPSINFO_URL_IMAGE
                . '/on.gif" align="absmiddle" alt=""/>';
} else {
	$precheck = '<img src="'
                . XOOPSINFO_URL_IMAGE
                . '/off.gif" align="absmiddle" alt="'
                . _AM_XI_PROTECTOR_PRECHECK_MSG
                . '" />'
                . _AM_XI_PROTECTOR_CHECK_ERR;
}
if( defined( 'PROTECTOR_POSTCHECK_INCLUDED' ) ) {
	$postcheck = '<img src="'
                . XOOPSINFO_URL_IMAGE
                . '/on.gif" align="absmiddle" alt=""/>';
} else {
	$postcheck = '<img src="'
                . XOOPSINFO_URL_IMAGE
                . '/off.gif" align="absmiddle" alt="'
                . _AM_XI_PROTECTOR_POSTCHECK_MSG
                . '" />'
                . _AM_XI_PROTECTOR_CHECK_ERR;
}

// Form startpage mode
$sql = 'SELECT conf_id FROM '
        . $xoopsDB->prefix('config')
        . ' WHERE conf_name = "startpage"';
$res = $xoopsDB->query( $sql );
list( $conf_id ) = $xoopsDB->fetchRow( $res );
$config_handler = xoops_gethandler('config');
$config_startpage = $config_handler->getConfig($conf_id, true);
$title = (!defined($config_startpage->getVar('conf_desc')) || constant($config_startpage->getVar('conf_desc')) == '') ? constant($config_startpage->getVar('conf_title')) : constant($config_startpage->getVar('conf_title')) . '<br><br><span style="font-weight:normal;">' . constant($config_startpage->getVar('conf_desc')) . '</span>';
$startpage_ele = new XoopsFormSelect($title, $config_startpage->getVar('conf_name'), $config_startpage->getConfValueForOutput());
$module_handler = xoops_gethandler('module');
$criteria = new CriteriaCompo(new Criteria('hasmain', 1));
$criteria->add(new Criteria('isactive', 1));
$moduleslist = $module_handler->getList($criteria, true);
$moduleslist['--'] = _MD_AM_NONE;
$startpage_ele->addOptionArray($moduleslist);
$startpage_hidden = new XoopsFormHidden('conf_ids[]', $config_startpage->getVar('conf_id'));

// Form theme mode
$sql = 'SELECT conf_id FROM '
        . $xoopsDB->prefix('config')
        . ' WHERE conf_name = "theme_set"';
$res = $xoopsDB->query( $sql );
list( $conf_id ) = $xoopsDB->fetchRow( $res );
$config_handler = xoops_gethandler('config');
$config_theme = $config_handler->getConfig($conf_id, true);
$title = (!defined($config_theme->getVar('conf_desc')) || constant($config_theme->getVar('conf_desc')) == '') ? constant($config_theme->getVar('conf_title')) : constant($config_theme->getVar('conf_title')) . '<br><br><span style="font-weight:normal;">' . constant($config_theme->getVar('conf_desc')) . '</span>';
$theme_ele = ($config_theme->getVar('conf_formtype') != 'theme_multi') ? new XoopsFormSelect($title, $config_theme->getVar('conf_name'), $config_theme->getConfValueForOutput()) : new XoopsFormSelect($title, $config_theme->getVar('conf_name'), $config_theme->getConfValueForOutput(), 5, true);
require_once( XOOPS_ROOT_PATH . '/class/xoopslists.php' );
$dirlist = XoopsLists::getThemesList();
if (!empty($dirlist)) {
	asort($dirlist);
	$theme_ele->addOptionArray($dirlist);
}
$theme_hidden = new XoopsFormHidden('conf_ids[]', $config_theme->getVar('conf_id'));

// Form theme_fromfile mode
$sql = 'SELECT conf_id FROM '
        . $xoopsDB->prefix('config')
        . ' WHERE conf_name = "theme_fromfile"';
$res = $xoopsDB->query( $sql );
list( $conf_id ) = $xoopsDB->fetchRow( $res );
$config_handler = xoops_gethandler('config');
$config_theme_fromfile = $config_handler->getConfig($conf_id, true);
$theme_fromfile_ele = new XoopsFormRadioYN($title, $config_theme_fromfile->getVar('conf_name'), $config_theme_fromfile->getConfValueForOutput(), _YES, _NO);
$theme_fromfile_hidden = new XoopsFormHidden('conf_ids[]', $config_theme_fromfile->getVar('conf_id'));

// Form template mode
$sql = 'SELECT conf_id FROM '
        . $xoopsDB->prefix('config')
        . ' WHERE conf_name = "template_set"';
$res = $xoopsDB->query( $sql );
list( $conf_id ) = $xoopsDB->fetchRow( $res );
$config_handler = xoops_gethandler('config');
$config_tplset = $config_handler->getConfig($conf_id, true);
$title = (!defined($config_tplset->getVar('conf_desc')) || constant($config_tplset->getVar('conf_desc')) == '') ? constant($config_tplset->getVar('conf_title')) : constant($config_tplset->getVar('conf_title')) . '<br><br><span style="font-weight:normal;">' . constant($config_tplset->getVar('conf_desc')) . '</span>';
$tplset_ele = new XoopsFormSelect($title, $config_tplset->getVar('conf_name'), $config_tplset->getConfValueForOutput());
$tplset_handler = xoops_gethandler('tplset');
$tplsetlist = $tplset_handler->getList();
asort($tplsetlist);
foreach ($tplsetlist as $key => $name) {
	$tplset_ele->addOption($key, $name);
}
$tplset_hidden = new XoopsFormHidden('conf_ids[]', $config_tplset->getVar('conf_id'));

// Form Debug mode			 //
$sql = 'SELECT conf_id FROM '
        . $xoopsDB->prefix('config')
        . ' WHERE conf_name = "debug_mode"';
$res = $xoopsDB->query( $sql );
list( $conf_id ) = $xoopsDB->fetchRow( $res );
$config_handler = xoops_getHandler('config');
$config_debug = $config_handler->getConfig($conf_id, true);
$title = (!defined($config_debug->getVar('conf_desc')) || constant($config_debug->getVar('conf_desc')) == '') ? constant($config_debug->getVar('conf_title')) : constant($config_debug->getVar('conf_title')) . '<br><br><span style="font-weight:normal;">' . constant($config_debug->getVar('conf_desc')) . '</span>';
if ( substr( XOOPS_VERSION , 6 , 3) == '2.2') {
	$debug_ele = new XoopsFormSelect($title, $config_debug->getVar('conf_name'), $config_debug->getConfValueForOutput(), 5, true);
} else {
	$debug_ele = new XoopsFormSelect($title, $config_debug->getVar('conf_name'), $config_debug->getConfValueForOutput());
}
$options = $config_handler->getConfigOptions(new Criteria('conf_id', $config_debug->getVar('conf_id')));
$opcount = count($options);
for ($j = 0; $j < $opcount; $j++) {
	$optval = defined($options[$j]->getVar('confop_value')) ? constant($options[$j]->getVar('confop_value')) : $options[$j]->getVar('confop_value');
	$optkey = defined($options[$j]->getVar('confop_name')) ? constant($options[$j]->getVar('confop_name')) : $options[$j]->getVar('confop_name');
	$debug_ele->addOption($optval, $optkey);
}
$debug_hidden = new XoopsFormHidden('conf_ids[]', $config_debug->getVar('conf_id'));

// Form Protector
$isProtector = XoopsInfo_getModuleInfo( 'protector' );
if ($isProtector) {
	$sql = 'SELECT conf_id FROM ' . $xoopsDB->prefix('config') . ' WHERE conf_name = "global_disabled" AND conf_modid=' . $isProtector->getVar('mid');
	$res = $xoopsDB->query( $sql );
	list( $conf_id ) = $xoopsDB->fetchRow( $res );

	$config_handler   = xoops_gethandler('config');
	$config_protector = $config_handler->getConfig($conf_id, true);

	$protector_ele    = new XoopsFormRadioYN($title, $config_protector->getVar('conf_name'), $config_protector->getConfValueForOutput(), _YES, _NO);
	$protector_hidden = new XoopsFormHidden('conf_ids[]', $config_protector->getVar('conf_id'));
}

// Form Save
$button_save = new XoopsFormButton('', 'submit', _AM_XI_SAVE, 'submit');
$button_go   = new XoopsFormButton('', 'submit', _GO, 'submit');
$tray_save_cancel = new XoopsFormElementTray('', '');
$tray_save_cancel->addElement($button_save);
$hidden = new XoopsFormHidden('op', 'save');

echo '<form action="'
      . XOOPSINFO_ADMIN_URL
      . '" method="post"><table width="100%"><tr><td colspan="2" class="bold shadowlight alignmiddle" style="text-align:center;"><h2>'
      . _AM_XI_ADMENU1
      . '</h2></td></tr><tr><td class="even"><strong>'
      . _AM_XI_XOOPS_VERSION
      . '</strong></td><td class="odd">'
      . XOOPS_VERSION
      . '</td></tr><tr><td class="even" width="30%"><strong>'
      . _AM_XI_XOOPS_URL
      . '</strong></td><td class="odd">'
      . XOOPS_URL
      . '</td></tr><tr><td class="even" width="30%"><strong>'
      . _AM_XI_XOOPS_ROOT_PATH
      . '</strong></td><td class="odd">'
      . XOOPS_ROOT_PATH
      . '</td></tr><tr><td class="even"><strong>'
      . _AM_XI_PROTECTOR_MODULE
      . '</strong></td><td class="odd">'
      . $protector
      . '</td></tr>';

if ($isProtector) {
	echo '<tr><td class="even"><strong>'
        . _AM_XI_PROTECTOR_PRECHECK
        . '</strong></td><td class="odd">'
        . $precheck
        . '</td></tr><tr><td class="even"><strong>'
        . _AM_XI_PROTECTOR_POSTCHECK
        . '</strong></td><td class="odd">'
        . $postcheck
        . '</td></tr>';
}

echo '<tr><td class="even"><strong>'
      . _AM_XI_XOOPS_STARTPAGE
      . '</strong></td><td class="odd">'
      . $startpage_ele->render()
      . $startpage_hidden->render()
      . '</td></tr><tr><td class="even"><strong>'
      . _AM_XI_XOOPS_THEME
      . '</strong></td><td class="odd">'
      . $theme_ele->render()
      . $theme_hidden->render()
      . '</td></tr><tr><td class="even"><strong>'
      . _AM_XI_XOOPS_THEME_FROMFILE
      . '</strong></td><td class="odd">'
      . $theme_fromfile_ele->render()
      . $theme_fromfile_hidden->render()
      . '</td></tr>';
echo '<tr><td class="even"><strong>'
      . _AM_XI_XOOPS_TEMPLATE
      . '</strong></td><td class="odd">'
      . $tplset_ele->render()
      . $tplset_hidden->render()
      . '</td></tr><tr><td class="even"><strong>'
      . _AM_XI_XOOPS_DEBUG
      . '</strong></td><td class="odd">'
      . $debug_ele->render()
      . $debug_hidden->render()
      . '</td></tr>';

if ($isProtector) {
	echo '<tr><td class="even"><strong>'
        . _AM_XI_PROTECTOR
        . '</strong></td><td class="odd">'
        . $protector_ele->render()
        . $protector_hidden->render()
        . '</td></tr>';
}

echo '<tr><td colspan="2" class="bold shadowlight alignmiddle" align="center">'
      . $tray_save_cancel->render()
      . $hidden->render()
      . '</td></tr><tr><td colspan="2" align="center"><hr></td></tr><tr>';
echo '<td class="even"><strong>'
      . _AM_XI_SERVER_SOFTWARE
      . '</strong></td><td class="odd">'
      . PHP_SAPI
      . '</td></tr><tr><td class="even"><strong>'
      . _AM_XI_SERVER_PHP
      . '</strong></td><td class="odd">'
      . PHP_VERSION
      . '</td></tr><tr><td class="even"><strong>'
      . _AM_XI_SERVER_MYSQL
      . '</strong></td><td class="odd">'
      . mysqli_get_server_info($xoopsDB->conn)
      . '</td></tr><tr><td class="even"><strong>'
      . _AM_XI_DOWN_SAFEMODESTATUS
      . '</strong></td><td class="odd">'
      . $safemode
      . '</td></tr><tr><td class="even"><strong>'
      . _AM_XI_DOWN_REGISTERGLOBALS
      . '</strong></td><td class="odd">'
      . $registerglobals
      . '</td></tr><tr><td class="even"><strong>'
      . _AM_XI_DOWN_ALLOW_URL_FOPEN
      . '</strong></td><td class="odd">'
      . $allow_url_fopen
      . '</td></tr><tr><td class="even"><strong>'
      . _AM_XI_DOWN_USE_TRANS_SID
      . '</strong></td><td class="odd">'
      . $use_trans_sid
      . '</td></tr><tr><td class="even"><strong>'
      . _AM_XI_DOWN_GDLIBSTATUS
      . '</strong></td><td class="odd">'
      . $gdlib
      . '</td></tr><tr><td class="even"><strong>'
      . _AM_XI_DOWN_SERVERUPLOADSTATUS
      . '</strong></td><td class="odd">'
      . $downloads
      . '</td></tr><tr><td class="even"><strong>'
      . _AM_XI_DOWN_MAXUPLOADSIZE
      . '</strong></td><td class="odd"><span style="color:blue;font-weight:bold;">'
      . ini_get('upload_max_filesize')
      . '</span></td></tr><tr><td colspan="2" style="text-align:center;"><hr></td></tr><tr><td class="even"><strong>'
      . _AM_XI_BROWSER
      . '</strong></td><td class="odd"><span style="white-space:normal;">'
      . $_SERVER['HTTP_USER_AGENT']
      . '</span></td></tr></table></form><br><br>';
include_once __DIR__ . '/footer.php';