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

if (!defined('XOOPS_ROOT_PATH')) { die('XOOPS root path not defined'); }
	global $xoopsModule, $xoopsConfig, $modversion;

function Template_GetModulesList() {
	global $mid, $theme, $status;

	$module_handler = xoops_gethandler('module');
	$criteria = new CriteriaCompo(new Criteria('hasmain', 1));
	$criteria->add(new Criteria('isactive', 1));
	$criteria->add(new Criteria('mid', 1), 'OR');
	$module_list = $module_handler->getList($criteria);
	$module_list[-1] = _AM_XI_MIME_ALL;
	ksort($module_list);

	$modules_select = new XoopsFormSelect(_AM_XI_MIME_MODULES, 'mid', $mid);
	$modules_select->setExtra('onchange="document.location=this.options[this.selectedIndex].value"');
	foreach ($module_list as $key => $value) {
		$modules_select->addOption('templates.php?fct=templates&mid='.$key . '&status=' . $status . '&theme=' . $theme , $value);
	}
	$modules_select->setValue('templates.php?fct=templates&mid=' . $mid . '&status=' . $status . '&theme=' . $theme);

	return $modules_select;
}

function XoopsInfo_getModuleInfo( $dirname= 'xoopsinfo') {
	$hModule = xoops_gethandler('module');
	$Module = $hModule->getByDirname( $dirname );
	return $Module;
}

function XoopsInfo_moduleoption($option, $repmodule='xoopsinfo') {
	global $xoopsModuleConfig, $xoopsModule;
	static $tbloptions= Array();
	if(is_array($tbloptions) && array_key_exists($option,$tbloptions)) {
		return $tbloptions[$option];
	}

	$retval=false;
	if (isset($xoopsModuleConfig) && (is_object($xoopsModule) && $xoopsModule->getVar('dirname') == $repmodule && $xoopsModule->getVar('isactive'))) {
		if(isset($xoopsModuleConfig[$option])) {
			$retval= $xoopsModuleConfig[$option];
		}
	} else {
		$module_handler = xoops_getHandler('module');
		$module = $module_handler->getByDirname($repmodule);
		$config_handler = xoops_getHandler('config');
		if ($module) {
			$moduleConfig = $config_handler->getConfigsByCat(0, $module->getVar('mid'));
			if(isset($moduleConfig[$option])) {
				$retval= $moduleConfig[$option];
			}
		}
	}
	$tbloptions[$option]=$retval;
	return $retval;
}

function check_override($dirname, $template, $theme = '', $block = false) {
	global $xoopsConfig;
	$themeset = ($theme == '') ? $xoopsConfig['theme_set'] : $theme;

	if ($block) {
		if ( file_exists( XOOPS_ROOT_PATH . '/themes/' . $themeset . '/modules/' . $dirname . '/blocks/' . $template ) ) {
			return true;
		}
	} else {
		if ( file_exists( XOOPS_ROOT_PATH . '/themes/' . $themeset . '/modules/' . $dirname . '/' . $template ) ) {
			return true;
		}
	}
	return 0;
}

function filemtime_override($dirname, $template, $theme = '', $block = false) {
	global $xoopsConfig;
	$themeset = ($theme == '') ? $xoopsConfig['theme_set'] : $theme;

	if ($block) {
		if ( file_exists( XOOPS_ROOT_PATH . '/themes/' . $themeset . '/modules/' . $dirname . '/blocks/' . $template ) ) {
			$filename = XOOPS_ROOT_PATH . '/themes/' . $themeset . '/modules/' . $dirname . '/blocks/' . $template;
		} else {
			$filename = XOOPS_ROOT_PATH . '/modules/' . $dirname . '/templates/blocks/' . $template;
		}
	} else {
		if ( file_exists( XOOPS_ROOT_PATH . '/themes/' . $themeset . '/modules/' . $dirname . '/' . $template ) ) {
			$filename = XOOPS_ROOT_PATH . '/themes/' . $themeset . '/modules/' . $dirname . '/' . $template;
		} else {
			$filename = XOOPS_ROOT_PATH . '/modules/' . $dirname . '/templates/' . $template;
		}
	}
	return date( _DATESTRING, filemtime($filename) );
}

function XoopsInfo_GetLastVersion() {
	global $modversion;
	$version = @file_get_contents($modversion['status_fileinfo']);
	if ($version) {
		include_once('../xoops_version.php');
		if ($version > ($GLOBALS['xoopsModule']->getVar('version')/100) ) {
			echo '<div class="bg1" style="margin:20px 100px; padding:5px; border:2px solid #FF0000; text-align:center; font-weight:bold;">';
			echo _AM_XI_MAKE_UPGRADE . '<a href="' ;
			if ( array_key_exists( 'download_website', $modversion ) && $modversion['download_website']!= '' ) {
				echo $modversion['download_website'] . '" target="_blank"><br /><br /><font color="#0000CC">' . $modversion['developer_website_name'];
			} else {
				echo $modversion['developer_website_url'] . '" target="_blank"><br /><br /><font color="#0000CC">' . $modversion['developer_website_name'];
			}
			echo '</font></a>';
			echo '</div>';
		} else {
			echo '<div class="bg1" style="margin:20px 100px; padding:5px; border:2px solid #FF0000; text-align:center; font-weight:bold;">';
			echo _AM_XI_NO_UPGRADE;
			echo '</div>';
		}
	}
}

function XoopsInfo_UpdatedModule() {
	global $modversion;
	if ( $modversion['version'] != ($GLOBALS['xoopsModule']->getVar('version')/100) ) {
		$redirect = XOOPS_URL . '/modules/system/admin.php?fct=modulesadmin&op=update&module=' . $GLOBALS['xoopsModule']->getVar('dirname');
		redirect_header( $redirect , 3, _AM_XI_MAKE_UPDATE ) ;
	}
}
