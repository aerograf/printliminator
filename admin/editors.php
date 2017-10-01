<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2017 <https://www.xoops.org/>
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
define('XOOPSINFO_URL',XOOPS_URL . '/modules/printliminator/');
define('XOOPSINFO_URL_IMAGE',XOOPS_URL . '/modules/printliminator/assets/images/icons');
define('XOOPSINFO_ADMIN_URL',XOOPS_URL . '/modules/printliminator/admin');
define('XOOPSINFO_PATH',XOOPS_ROOT_PATH . '/modules/printliminator/');

global $xoopsDB, $xoopsConfig, $xoopsModule;  

include_once( XOOPS_ROOT_PATH.'/class/xoopsformloader.php' );
include_once( XOOPS_ROOT_PATH . '/modules/printliminator/include/functions_xi.php');
@include_once( XOOPS_ROOT_PATH.'/modules/printliminator/xoops_version.php' );

if ( file_exists( XOOPS_ROOT_PATH . '/modules/printliminator/language/' . $xoopsConfig['language'] . '/modinfo.php' ) ) {
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

$path = XOOPSINFO_PATH . 'plugins/editors/' ;
$d = dir( $path );
while (false !== ($entry = $d->read())) {
	$file = $path . $entry;
	if( $entry != '.' && $entry != '..' && basename($file) != 'index.html' ) {
		include_once( $file );
		$editors[] = $editor;
		unset($editor);
	}
}
$d->close();

echo '<table width="100%"><tr>';
echo "<td colspan='6' class='bold shadowlight alignmiddle' style='text-align:center;'><h2>"
      . _AM_XI_ADMENU5
      . "</h2></td>";
echo '</tr><tr>';
echo '<th align="center">'
      . _AM_XI_EDITOR_CHECK
      . '</th>';
echo '<th align="center">'
      . _AM_XI_EDITOR_NAME
      . '</th></tr>';

foreach ($editors as $key => $editor) {
	$isModule = false;
	if ( $editor['dirname'] ) {
		$isModule = XoopsInfo_getModuleInfo( $editor['dirname'] );
	}
	echo '<tr>';

	// Check editor class file
	echo '<td class="even" align="center">';
	if ( $editor['class'] && is_readable( XOOPS_ROOT_PATH . $editor['class'] ) && $isModule) {
		echo '<img src="'
          . XOOPSINFO_URL_IMAGE
          . '/on.gif" alt="'
          . _AM_XI_EDITOR_OK
          . '"align="absmiddle" />';
	} elseif ( $editor['class'] && is_readable( XOOPS_ROOT_PATH . $editor['class'] ) && $editor['dirname'] && !$isModule ) {
		echo '<img src="'
          . XOOPSINFO_URL_IMAGE
          . '/notinstalled.gif" alt="'
          . _AM_XI_EDITOR_MODULE
          . '"align="absmiddle" />';
	} elseif ( $editor['class'] && !is_readable( XOOPS_ROOT_PATH . $editor['class'] ) && $isModule ) {
		echo '<img src="'
          . XOOPSINFO_URL_IMAGE
          . '/noclass.gif" alt="'
          . _AM_XI_EDITOR_CLASS
          . '"align="absmiddle" />';
	} elseif ( $editor['class'] && !is_readable( XOOPS_ROOT_PATH . $editor['class'] ) && !$isModule ) {
		echo '<img src="'
          . XOOPSINFO_URL_IMAGE
          . '/off.gif" alt="'
          . _AM_XI_EDITOR_ERROR
          . '"align="absmiddle" />';
	} else {
		echo '<img src="'
          . XOOPSINFO_URL_IMAGE
          . '/on.gif" alt="'
          . _AM_XI_EDITOR_OK
          . '"align="absmiddle" />';
	}
	echo '</td>';


	// Editor's name
	echo '<td class="odd">';
	if ( $editor['project'] ) {
		echo '<a target="_blank" href="'
          . $editor['project']
          . '">';
	}
	echo $editor['name'];
	if ( $editor['project'] ) {
		echo '</a>';
	}
	echo '<br>'
        . $editor['class']
        . '</td></tr>';
}
echo '</table><br>';
echo '<table width="80%" align="center" border="0" cellpadding="5" cellspacing="0">';
echo '<tr><td width="50%"><img src="'
      . XOOPSINFO_URL_IMAGE
      . '/on.gif" alt=""align="absmiddle" />&nbsp;'
      . _AM_XI_EDITOR_OK
      . '</th><td width="50%"><img src="'
      . XOOPSINFO_URL_IMAGE
      . '/off.gif" alt=""align="absmiddle" />&nbsp;'
      . _AM_XI_EDITOR_ERROR . '</th></tr>';
echo '<tr><td width="50%"><img src="'
      . XOOPSINFO_URL_IMAGE
      . '/notinstalled.gif" alt=""align="absmiddle" />&nbsp;'
      . _AM_XI_EDITOR_MODULE
      . '</th><td width="50%"><img src="'
      . XOOPSINFO_URL_IMAGE
      . '/noclass.gif" alt=""align="absmiddle" />&nbsp;'
      . _AM_XI_EDITOR_CLASS . '</th></tr>';
echo '</table><br><br>';
