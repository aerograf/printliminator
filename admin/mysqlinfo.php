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
define('XOOPSINFO_URL', XOOPS_URL . '/modules/printliminator/');
define('XOOPSINFO_URL_IMAGE', XOOPS_URL . '/modules/printliminator/assets/images/icons');
define('XOOPSINFO_ADMIN_URL', XOOPS_URL . '/modules/printliminator/admin');
define('XOOPSINFO_PATH', XOOPS_ROOT_PATH . '/modules/printliminator/');

global $xoopsDB, $xoopsConfig, $xoopsModule;

include_once( XOOPS_ROOT_PATH . '/class/xoopsformloader.php');
include_once( XOOPS_ROOT_PATH  . '/modules/printliminator/include/functions_xi.php');
@include_once( XOOPS_ROOT_PATH . '/modules/printliminator/xoops_version.php');

if ( file_exists( XOOPS_ROOT_PATH . '/modules/printliminator/language/' . $xoopsConfig['language'] . '/modinfo.php') ) {
	include_once(XOOPS_ROOT_PATH . '/modules/printliminator/language/' . $xoopsConfig['language'] . '/modinfo.php');
} else {
	include_once(XOOPS_ROOT_PATH . '/modules/printliminator/language/english/modinfo.php');
}

if ( file_exists( XOOPS_ROOT_PATH . '/language/' . $xoopsConfig['language'] . '/global.php') ) {
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

$confirm = isset($_REQUEST['confirm'])? trim($_REQUEST['confirm']) : 0;
$action = isset($_REQUEST['optimize'])? 1 : 0;
$action = isset($_REQUEST['repair'])? 2 : $action;
$action = isset($_REQUEST['check'])? 3 : $action;
$action = isset($_REQUEST['analyze'])? 4 : $action;

if ($confirm == 0 && $action > 0) {
$adminObject  = \Xmf\Module\Admin::getInstance();
$adminObject->displayNavigation(basename(__FILE__));
echo '<div style="margin:auto;border:2px solid black;text-align:center;border-radius:8px;">';
	switch( $action ) {
		case 1:
		xoops_confirm(['optimize' => $_REQUEST['optimize'], 'confirm' => 1], 'mysqlinfo.php', _AM_XI_MYSQL_OPTIMIZE, _AM_XI_CONFIRM);
		break;

		case 2:
		xoops_confirm(['repair' => $_REQUEST['repair'], 'confirm' => 1], 'mysqlinfo.php', _AM_XI_MYSQL_REPAIR, _AM_XI_CONFIRM);
		break;

		case 3:
		xoops_confirm(['check' => $_REQUEST['check'], 'confirm' => 1], 'mysqlinfo.php', _AM_XI_MYSQL_CHECK, _AM_XI_CONFIRM);
		break;

		case 4:
		xoops_confirm(['analyze' => $_REQUEST['analyze'], 'confirm' => 1], 'mysqlinfo.php', _AM_XI_MYSQL_ANALYZE, _AM_XI_CONFIRM);
		break;
		}
echo '</div>';
exit();
}

$check_tables = explode('|', $xoopsModuleConfig['xi_check_table']);
$db_table = 0;
$db_table_c = 0;

$db_length = 0;
$db_length_c = 0;

$db_rows = 0;
$db_rows_c = 0;

$db_data_free = 0;
$db_data_free_c = 0;
$
$i = 0;

$sql = 'SHOW TABLE STATUS';
$res = $xoopsDB->queryF($sql);

while ($row = $xoopsDB->fetchArray($res) ) {
	$row_name = str_replace( $xoopsDB->prefix() . '_', '', $row['Name']);

	$db_table++;
	$db_length += $row['Data_length'] + $row['Index_length'];
	$db_rows += $row['Rows'];
	$db_data_free += $row['Data_free'];

	if (in_array ($row_name, $check_tables)) {
		$tables[$i]['Name'] = $row_name;
		$tables[$i]['Engine'] = isset($row['Engine']) ? $row['Engine'] : 'MyISAM';
		$tables[$i]['Collation'] = isset($row['Collation']) ? $row['Collation'] : 'None';
		$tables[$i]['Rows'] = $row['Rows'];
		$tables[$i]['Lenght'] = $row['Data_length'] + $row['Index_length'];
		$tables[$i]['Data_free'] = $row['Data_free'];

		$db_table_c++;
		$db_length_c += $row['Data_length'] + $row['Index_length'];
		$db_rows_c += $row['Rows'];
		$db_data_free_c += $row['Data_free'];
	}

	if ($confirm) {
		switch( $action ) {
			case 1:
			$sql = "OPTIMIZE TABLE " . $row['Name'];
			break;

			case 2:
			$sql = "REPAIR TABLE " . $row['Name'];
			break;

			case 3:
			$sql = "CHECK TABLE " . $row['Name'];
			break;

			case 4:
			$sql = "ANALYZE TABLE " . $row['Name'];
			break;
		}
		$result = $xoopsDB->queryF($sql);
		$action_row = $xoopsDB->fetchArray($result);
		$tables[$i]['Name'] = $row_name;
		$tables[$i]['Op'] = $action_row['Op'];
		$tables[$i]['Msg_type'] = $action_row['Msg_type'];
		$tables[$i]['Msg_text'] = $action_row['Msg_text'];
  }
  $i++;
}

if (!$confirm) {
	$queries[] = 'LIKE "version"';
	$queries[] = 'LIKE "version_compile_os"';
	$queries[] = 'LIKE "max_connections"';
	$queries[] = 'LIKE "connect_timeout"';
	$queries[] = 'LIKE "character_set_database"';
	$queries[] = 'LIKE "character_set_system"';
	$queries[] = 'LIKE "collation%"';
	$queries[] = 'LIKE "InnoDB"';
	$queries[] = 'LIKE "storage_engine"';

	echo '<table width="100%"><tr>';
	echo "<td colspan='2' class='bold shadowlight alignmiddle' style='text-align:center;'><h2>"
        . _AM_XI_ADMENU3
        . '</h2></td></tr>';

	foreach( $queries as $query ) {
		$sql = 'SHOW VARIABLES ' . $query;
		$res = $xoopsDB->queryF($sql);
		while ($row = $xoopsDB->fetchArray($res) ) {
			echo '<tr><td class="even">';
			echo $row['Variable_name'];
			echo '</td>';

			echo '<td class="odd">';
			echo $row['Value'];
			echo '</td></tr>';
		}
	}
	echo '</table>';
}

echo '<table width="100%" style="margin:auto;border:2px solid black;text-align:center;border-radius:8px;"><tr>';
if (!$confirm) {
	echo "<td colspan='6' class='bold shadowlight alignmiddle' style='text-align:center;'><h2>"
        . _MI_XI_CHECK_TABLE
        . "</h2></td>";
} else {
	echo "<td colspan='6' class='bold shadowlight alignmiddle' style='text-align:center;'><h2>"
        . _AM_XI_ADMENU3
        . '</h2></td></tr><tr>';
	echo '<th colspan="4" style="margin:auto;border-bottom:1px solid black;text-align:center;color:blue;">'
        . _AM_XI_MYSQL_ACTION;
	switch( $action ) {
		case 1:
		echo _AM_XI_MYSQL_OPTIMIZE . '</td>';
		break;

		case 2:
		echo _AM_XI_MYSQL_REPAIR . '</td>';
		break;

		case 3:
		echo _AM_XI_MYSQL_CHECK . '</td>';
		break;

		case 4:
		echo _AM_XI_MYSQL_ANALYZE . '</td>';
		break;
	}
}
echo '</tr><tr>';
echo '<th style="margin:auto;border-bottom:1px solid black;text-align:center;">'
      . _MI_XI_MYSQL_TABLE
      . '</th>';
if (!$confirm) {
	echo '<th style="margin:auto;border-bottom:1px solid black;text-align:center;">'
        . _MI_XI_MYSQL_TYPE
        . '</th><th style="margin:auto;border-bottom:1px solid black;text-align:center;">'
        . _MI_XI_MYSQL_COLLATION
        . '</th><th style="margin:auto;border-bottom:1px solid black;text-align:center;">'
        . _MI_XI_MYSQL_RECORDS
        . '</th><th style="margin:auto;border-bottom:1px solid black;text-align:center;">'
        . _MI_XI_MYSQL_SIZE
        . ' ('
        . _AM_XI_MYSQL_KOCTETS
        . ')</th><th style="margin:auto;border-bottom:1px solid black;text-align:center;">'
        . _MI_XI_MYSQL_OVERHEAD
        . ' ('
        . _AM_XI_MYSQL_KOCTETS
        . ')</th>';
} else {
	echo '<th style="margin:auto;border-bottom:1px solid black;text-align:center;">Op</th>';
	echo '<th style="margin:auto;border-bottom:1px solid black;text-align:center;">Msg_type</th>';
	echo '<th style="margin:auto;border-bottom:1px solid black;text-align:center;">Msg_text</th>';
}
echo '</tr>';

foreach( $tables as $key=>$table ) {
	echo '<tr><td class="even" style="margin:auto;border-bottom:1px solid black;text-align:center;">';
	echo $table['Name'];
	echo '</td>';

	if (!$confirm) {
		echo '<td class="odd" style="margin:auto;border-bottom:1px solid black;text-align:center;">';
		echo $table['Engine'];
		echo '</td>';

		echo '<td class="odd" style="margin:auto;border-bottom:1px solid black;text-align:center;">';
		echo $table['Collation'];
		echo '</td>';

		echo '<td class="odd"  style="margin:auto;border-bottom:1px solid black;text-align:right;">';
		echo $table['Rows'];
		echo '</td>';

		echo '<td class="odd" style="margin:auto;border-bottom:1px solid black;text-align:right;">';
		echo number_format( ($table['Lenght']/1000) , 2 , ',' , ' ');
		echo '</td>';

		echo '<td class="odd" style="margin:auto;border-bottom:1px solid black;text-align:right;">';
		echo number_format( ($table['Data_free']/1000) , 2 , ',' , ' ');
		echo '</td>';
		echo '</tr>';
	} else {
		echo '<td class="odd" style="margin:auto;border-bottom:1px solid black;text-align:center;">';
		echo $table['Op'];
		echo '</td>';

		echo '<td class="odd" style="margin:auto;border-bottom:1px solid black;text-align:center;">';
		echo $table['Msg_type'];
		echo '</td>';

		echo '<td class="odd" style="margin:auto;border-bottom:1px solid black;text-align:center;">';
		echo $table['Msg_text'];
		echo '</td>';
	}
}

if (!$confirm) {
	echo '<tr class="even"><td style="text-align:center;"><b><font color="#CC0000">'
        . $db_table_c
        . '</font> / '
        . $db_table
        . _MI_XI_MYSQL_TABLE_TXT
        . '</b></td><td style="text-align:center;" colspan="2"><b>'
        . _MI_XI_MYSQL_SUM
        . '</b></td><td style="text-align:right;"><b><font color="#CC0000">'
        . $db_rows_c
        . '</font> / '
        . $db_rows
        . '</b></td><td style="text-align:right;"><b><font color="#CC0000">'
        . number_format( ($db_length_c/1000) , 2 , ',' , ' ')
        . '</font> / '
        . number_format( ($db_length/1000) , 2 , ',' , ' ')
        . '</b></td><td style="text-align:right;"><b><font color="#CC0000">'
        . number_format( ($db_data_free_c/1000) , 2 , ',' , ' ')
        . '</font> / '
        . number_format( ($db_data_free/1000) , 2 , ',' , ' ')
        . '</b></td></tr>';
}
echo '</table>';

if (!$confirm) {
	echo '<table width="100%">';
	echo "<td colspan='5' class='bold shadowlight alignmiddle' style='text-align:center;'><h2>" . _AM_XI_ADMENU3 . "</h2></td>";
	echo '<tr><th style="text-align:center;">'
        . _AM_XI_MYSQL_ID
        . '</th><th style="text-align:center;">'
        . _AM_XI_MYSQL_DB
        . '</th><th style="text-align:center;">'
        . _AM_XI_MYSQL_INFO
        . '</th><th style="text-align:center;">'
        . _AM_XI_MYSQL_TIME
        . '</th><th style="text-align:center;">'
        . _AM_XI_MYSQL_STATUS
        . '</th></tr>';

	$sql = 'SHOW FULL PROCESSLIST';
	$res = $xoopsDB->queryF($sql);
	while ($row = $xoopsDB->fetchArray($res) ) {
		echo '<tr><td class="even" align="center">';
		echo $row['Id'];
		echo '</td>';

		echo '<td class="odd">';
		echo $row['db'];
		echo '</td>';

		echo '<td class="odd">';
		echo $row['Info'];
		echo '</td>';

		echo '<td class="odd" align="right">';
		echo $row['Time'];
		echo '</td>';

		echo '<td class="odd" align="center">';
		echo $row['State'];
		echo '</td></tr>';
	}
	echo '</table>';

	$tray_button = new XoopsFormElementTray('', '');
	$tray_button->addElement( new XoopsFormButton('', 'optimize', _AM_XI_MYSQL_OPTIMIZE, 'submit') );
	$tray_button->addElement( new XoopsFormButton('', 'repair', _AM_XI_MYSQL_REPAIR, 'submit'));
	$tray_button->addElement( new XoopsFormButton('', 'check', _AM_XI_MYSQL_CHECK, 'submit'));
	$tray_button->addElement( new XoopsFormButton('', 'analyze', _AM_XI_MYSQL_ANALYZE, 'submit')); 

	echo '<table style="width:100%;"><tr><td class="even" style="text-align:center;"><form action="'
        . XOOPSINFO_ADMIN_URL
        . '/mysqlinfo.php" method="post" style="margin:auto;">';
	echo $tray_button->render();
	echo '</form></td></tr></table>';
} else {
	$tray_button = new XoopsFormElementTray('', '');
	$tray_button->addElement( new XoopsFormButton('', 'op', _AM_XI_MYSQL_RETURN, 'submit') );

	echo '<table style="width:100%;" class="outer"><tr><td class="even" style="text-align:center;"><form action="'
        . XOOPSINFO_ADMIN_URL
        . '" method="post" style="margin:auto;">';
	echo $tray_button->render();
	echo '</form></td></tr></table>';
}
