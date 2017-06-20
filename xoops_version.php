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
use Xmf\Request;
$moduleDirName = basename(__DIR__);
xoops_load('xoopseditorhandler');
$editorHandler = XoopsEditorHandler::getInstance();
$xoops_url     = parse_url(XOOPS_URL);

$modversion = array(
    'name' 	              =>  _MI_PRINTLIMINATOR_NAME,
    'version'        	    =>  1.01,
    'description'         =>  _MI_PRINTLIMINATOR_DESC,
    'author'              =>  'aerograf',
    'credits'             =>  'Xoops Community',
    'help'                =>  '',
    'dirname'             =>  $moduleDirName,
    'image'               =>  'assets/images/' . $moduleDirName . '_slogo.png',
    'license'             =>  'GNU General Public License',
    'license_url'         =>  'http://www.gnu.org/licenses/gpl.html',
    'official'            =>  0,
    'author_website_url'  =>  'https://www.shmel.org',
    'author_website_name' =>  'SHMEL.ORG',
    'dirmoduleadmin'      =>  'Frameworks/moduleclasses/moduleadmin',
    'sysicons16'          =>  'Frameworks/moduleclasses/icons/16',
    'sysicons32'          =>  'Frameworks/moduleclasses/icons/32',
    'modicons16'          =>  'assets/images/icons/16',
    'modicons32'          =>  'assets/images/icons/32',
    // About
    'module_release'      =>  '07/06/2017',
    'release_date'        =>  '2017/06/19',
    'module_status'       =>  'Release',
    'module_website_url'  =>  'https://www.shmel.org',
    'module_website_name' =>  'SHMEL.ORG',
    'module_website_url'  =>  'https://github.com/aerograf/printliminator',
    'module_website_name' =>  'GitHub',
    // Scripts to run upon install, uninstall or update
    'onInstall'           =>  'include/install.php',
    'onUninstall'         =>  'include/uninstall.php',
    'onUpdate'            =>  'include/update.php',
    'min_php'             =>  '5.5',
    'min_xoops'           =>  '2.5.8',
    // Admin Menu
    'system_menu'         =>  1,
    'hasAdmin'            =>  1,
    'adminindex'          =>  'admin/index.php',
    'adminmenu'           =>  'admin/menu.php',
    'use_smarty'          =>  1
);

// Templates
$modversion['templates'] = array(
    array(
          'file'          =>  'admin/' . $moduleDirName . '_admin_about.tpl',
          'description'   =>  _MI_PRINTLIMINATOR_MANAGER_ABOUT_DESC
    ),
    array(
          'file'          =>  'admin/' . $moduleDirName . '_admin_help.tpl',
          'description'   =>  _MI_PRINTLIMINATOR_MANAGER_HELP_DESC
    ),
/*    array(
          'file'          =>  'admin/' . $moduleDirName . '_admin_help_fm.tpl',
          'description'   =>  _MI_PRINTLIMINATOR_FILE_MANAGER_DESC
    ),
    array(
          'file'          =>  'admin/' . $moduleDirName . '_admin_help_is.tpl',
          'description'   =>  _MI_PRINTLIMINATOR_INDEXSCAN_DESC
    ), */   
    array(
          'file'          =>  $moduleDirName . '_qrcode_div_in.tpl',
          'description'   =>  _MI_PRINTLIMINATOR_MANAGER_QRCODE_DIV_DESC
    ),    
);

//Blocks    
$modversion['blocks'][] = array(
          'file'          =>  'blocks_mytype.php',
          'name'          =>  _MI_PRINTLIMINATOR_BLOCK_PRINT,
          'description'   =>  _MI_PRINTLIMINATOR_BLOCK_PRINT_DESC,
          'show_func'     =>  'b_' . $moduleDirName . '_print_show',
          'edit_func'     =>  'b_' . $moduleDirName . '_print_edit',
          'options'       =>  '',
          'template'      =>  $moduleDirName . '_block.tpl'
);
$modversion['blocks'][] = array(
          'file'          =>  'blocks_qrcode.php',
          'name'          =>  _MI_PRINTLIMINATOR_BLOCK_QRCODE,
          'description'   =>  _MI_PRINTLIMINATOR_BLOCK_QRCODE_DESC,
          'show_func'     =>  'b_' . $moduleDirName . '_qrcode_show',
          'edit_func'     =>  'b_' . $moduleDirName . '_qrcode_edit',
          'options'       =>  '2',                                                   
          'template'      =>  $moduleDirName . '_qrcode.tpl'
);
$modversion['blocks'][] = array(
          'file'          =>  'blocks_qrcode.php',
          'name'          =>  _MI_PRINTLIMINATOR_BLOCK_QRCODE_DIV,
          'description'   =>  _MI_PRINTLIMINATOR_BLOCK_QRCODE_DESC_DIV,
          'show_func'     =>  'b_' . $moduleDirName . '_qrcode_div_show',
          'edit_func'     =>  'b_' . $moduleDirName . '_qrcode_div_edit',
          'options'       =>  '1||0%|0px',
          'template'      =>  $moduleDirName . '_qrcode_div.tpl'
);

// Preferences
// FileManager
$i = 1;
$modversion['config'][$i]['name'] = 'logfile';
$modversion['config'][$i]['title'] = '_MI_PRINTLIMINATOR_CAT1';
$modversion['config'][$i]['description'] = '_MI_PRINTLIMINATOR_FILE_MANAGER_DESC';
$modversion['config'][$i]['formtype'] = 'line_break';
$modversion['config'][$i]['valuetype'] = 'textbox';
$modversion['config'][$i]['default'] = 'odd';

$i++;
include_once XOOPS_ROOT_PATH . "/class/xoopslists.php";
$modversion["config"][$i]["name"]           = "editor";
$modversion["config"][$i]["title"]          = "_MI_PRINTLIMINATOR_FILE_MANAGER_EDITOR";
$modversion["config"][$i]["description"]    = "_MI_PRINTLIMINATOR_FILE_MANAGER_FORM_EDITORDSC";
$modversion["config"][$i]["formtype"]       = "select";
$modversion["config"][$i]["valuetype"]      = "text";
$modversion["config"][$i]["default"]        = "textarea";
$modversion["config"][$i]["options"]        = XoopsLists::getDirListAsArray(XOOPS_ROOT_PATH . "/class/xoopseditor");
$modversion["config"][$i]["category"]       = "global";
// end FileManager
// IndexScan
$i++;
$modversion['config'][$i]['name'] = 'logfile';
$modversion['config'][$i]['title'] = '_MI_PRINTLIMINATOR_CAT2';
$modversion['config'][$i]['description'] = '_MI_PRINTLIMINATOR_INDEXSCAN_DESC';
$modversion['config'][$i]['formtype'] = 'line_break';
$modversion['config'][$i]['valuetype'] = 'textbox';
$modversion['config'][$i]['default'] = 'odd';

$i++;
$modversion['config'][$i]['name']      			= 'indexscan_frombackup';
$modversion['config'][$i]['title'] 		      = '_MI_INDEXSCAN_FROMBACKUP';
$modversion['config'][$i]['description'] 	  = '_MI_INDEXSCAN_FROMBACKUP_DESC';
$modversion['config'][$i]['formtype'] 		  = 'textbox';
$modversion['config'][$i]['valuetype'] 	    = 'text';
$modversion['config'][$i]['default'] 		    = 'testing';

$i++;
$modversion['config'][$i]['name'] 			    = 'indexscan_rootorsub';
$modversion['config'][$i]['title'] 		      = '_MI_INDEXSCAN_ROOTORSUB';
$modversion['config'][$i]['description'] 	  = '_MI_INDEXSCAN_ROOTORSUB_DESC';
$modversion['config'][$i]['formtype'] 		  = 'textbox';
$modversion['config'][$i]['valuetype'] 	    = 'text';
$modversion['config'][$i]['default'] 		    = '../../../';
	
$i++;
$modversion['config'][$i]['name'] 			    = 'indexscan_illegalfiles';
$modversion['config'][$i]['title'] 		      = '_MI_INDEXSCAN_ILLEGALFILETYPES';
$modversion['config'][$i]['description'] 	  = '_MI_INDEXSCAN_ILLEGALFILETYPES_DESC';
$modversion['config'][$i]['formtype'] 		  = 'textarea';
$modversion['config'][$i]['valuetype'] 	    = 'text';
$modversion['config'][$i]['default'] 		    = 'php|html|htm|jpg|png|gif|js|ico|txt|css|htaccess|eot|sql|swf|tpl|ttf';	

$i++;
$modversion['config'][$i]['name'] 			    = 'exep_01';
$modversion['config'][$i]['title'] 		      = '_MI_INDEXSCAN_EXEP1';
$modversion['config'][$i]['description'] 	  = '_MI_INDEXSCAN_EXEP1_DESC';
$modversion['config'][$i]['formtype'] 		  = 'textbox';
$modversion['config'][$i]['valuetype'] 	    = 'text';
$modversion['config'][$i]['default'] 		    = '';

$i++;
$modversion['config'][$i]['name'] 			    = 'exep_02';
$modversion['config'][$i]['title'] 		      = '_MI_INDEXSCAN_EXEP2';
$modversion['config'][$i]['description'] 	  = '_MI_INDEXSCAN_EXEP2_DESC';
$modversion['config'][$i]['formtype'] 		  = 'textbox';
$modversion['config'][$i]['valuetype'] 	    = 'text';
$modversion['config'][$i]['default'] 		    = '';

$i++;
$modversion['config'][$i]['name'] 			    = 'exep_03';
$modversion['config'][$i]['title'] 		      = '_MI_INDEXSCAN_EXEP3';
$modversion['config'][$i]['description'] 	  = '_MI_INDEXSCAN_EXEP3_DESC';
$modversion['config'][$i]['formtype'] 		  = 'textbox';
$modversion['config'][$i]['valuetype'] 	    = 'text';
$modversion['config'][$i]['default'] 		    = '';

$i++;
$modversion['config'][$i]['name'] 			    = 'exep_04';
$modversion['config'][$i]['title'] 		      = '_MI_INDEXSCAN_EXEP4';
$modversion['config'][$i]['description'] 	  = '_MI_INDEXSCAN_EXEP4_DESC';
$modversion['config'][$i]['formtype'] 		  = 'textbox';
$modversion['config'][$i]['valuetype'] 	    = 'text';
$modversion['config'][$i]['default'] 		    = '';
// end IndexScan  
// Notification
$modversion['hasNotification'] = 0;
