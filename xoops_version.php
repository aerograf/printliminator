<?php
/**
 * Printliminator module
 *
 * @copyright           The XOOPS Project https://github.com/XoopsModules25x
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package             Printliminator
 * @since               0.1.0
 * @author              aerograf <https://www.shmel.org>
 * @version             $Id: blocks_mytype.php 2017-06-06
 **/

use Xmf\Request;

$moduleDirName = basename(__DIR__);
xoops_load('xoopseditorhandler');
$editorHandler = XoopsEditorHandler::getInstance();
$xoops_url     = parse_url(XOOPS_URL);

$modversion = [
    'name'                => _MI_PRINTLIMINATOR_NAME,
    'version'             => 1.22,
    'description'         => _MI_PRINTLIMINATOR_DESC,
    'author'              => 'aerograf',
    'credits'             => 'Xoops Community',
    'help'                => 'page=help',
    'dirname'             => $moduleDirName,
    'image'               => 'assets/images/' . $moduleDirName . '_slogo.png',
    'license'             => 'GNU General Public License',
    'license_url'         => 'http://www.gnu.org/licenses/gpl.html',
    'official'            => 0,
    'author_website_url'  => 'https://www.shmel.org',
    'author_website_name' => 'SHMEL.ORG',
    'dirmoduleadmin'      => 'Frameworks/moduleclasses/moduleadmin',
    'sysicons16'          => 'Frameworks/moduleclasses/icons/16',
    'sysicons32'          => 'Frameworks/moduleclasses/icons/32',
    'modicons16'          => 'assets/images/icons/16',
    'modicons32'          => 'assets/images/icons/32',
// ------------------- About ------------------- //
    'module_release'      => '07/06/2017',
    'release_date'        => '2017/07/05',
    'module_status'       => 'Beta1',
    'module_website_url'  => 'https://www.shmel.org',
    'module_website_name' => 'SHMEL.ORG',
    'module_website_url'  => 'https://github.com/aerograf/printliminator',
    'module_website_name' => 'GitHub',
// ------------------- Scripts to run upon install, uninstall or update ------------------- //
    'onInstall'           => 'include/install.php',
    'onUninstall'         => 'include/uninstall.php',
    'onUpdate'            => 'include/update.php',
    'min_php'             => '5.6',
    'min_xoops'           => '2.5.8+',
    'min_db'              => ['mysql' => '5.5'],
// ------------------- Файл базы данных ------------------- //
    'sqlfile'             => ['mysql' => 'sql/mysql.sql'],
// ------------------- Таблицы ------------------- //
    'tables'              => [
        'printliminator_startup_page'
    ],
// ------------------- Admin Menu ------------------- //
    'system_menu'         => 1,
    'hasAdmin'            => 1,
    'adminindex'          => 'admin/index.php',
    'adminmenu'           => 'admin/menu.php',
    'use_smarty'          => 1,
    'hasMain'             => 1,
    'hasProfile'          => 0
];

// ------------------- Help files ------------------- //
$modversion['helpsection'] = [
    ['name' => _MI_PRINTLIMINATOR_OVERVIEW, 'link' => 'page=help'],
    ['name' => _MI_PRINTLIMINATOR_PRINTLIMINATOR, 'link' => 'page=printliminator'],
    ['name' => _MI_PRINTLIMINATOR_QRCODE, 'link' => 'page=qrcode'],
    ['name' => _MI_PRINTLIMINATOR_FILE_MANAGER, 'link' => 'page=filemanager'],
    ['name' => _MI_PRINTLIMINATOR_INDEXSCAN_DESC, 'link' => 'page=indexscan'],
    ['name' => _MI_PRINTLIMINATOR_SHARE42, 'link' => 'page=share42'],
    ['name' => _MI_PRINTLIMINATOR_XOOPSINFO, 'link' => 'page=xoopsinfo'],
    ['name' => _MI_PRINTLIMINATOR_DISCLAIMER, 'link' => 'page=disclaimer'],
    ['name' => _MI_PRINTLIMINATOR_LICENSE, 'link' => 'page=license'],
    ['name' => _MI_PRINTLIMINATOR_SUPPORT, 'link' => 'page=support'],
];

// ------------------- System info ------------------- //
    global $xoopsDB;
    define('_HELP_XOOPS_1',XOOPS_URL);
    define('_HELP_XOOPS_2',XOOPS_VERSION);
    define('_HELP_XOOPS_3',$xoopsConfig['theme_set']);
    define('_HELP_XOOPS_4',$xoopsConfig['template_set']);
    define('_HELP_XOOPS_5',PHP_VERSION);
    define('_HELP_XOOPS_6',mysqli_get_server_info($xoopsDB->conn));
    define('_HELP_XOOPS_7',PHP_SAPI);
    define('_HELP_XOOPS_8',$_SERVER['HTTP_USER_AGENT']);

// ------------------- Templates ------------------- //
$modversion['templates'] = [
    [
        'file'        => 'admin/' . $moduleDirName . '_admin_about.tpl',
        'description' => _MI_PRINTLIMINATOR_MANAGER_ABOUT_DESC
    ],
    [
        'file'        => 'admin/' . $moduleDirName . '_admin_help.tpl',
        'description' => _MI_PRINTLIMINATOR_MANAGER_HELP_DESC
    ],
    [
        'file'        => $moduleDirName . '_qrcode_div_in.tpl',
        'description' => _MI_PRINTLIMINATOR_MANAGER_QRCODE_DIV_DESC
    ],
    [
        'file'        => $moduleDirName . '_share42_div_in.tpl',
        'description' => _MI_PRINTLIMINATOR_SHARE42_DIV_DESC
    ],
];

// ------------------- Blocks ------------------- //    
$modversion['blocks'][] = [
    'file'        => 'blocks_mytype.php',
    'name'        => _MI_PRINTLIMINATOR_BLOCK_PRINT,
    'description' => _MI_PRINTLIMINATOR_BLOCK_PRINT_DESC,
    'show_func'   => 'b_' . $moduleDirName . '_print_show',
    'edit_func'   => 'b_' . $moduleDirName . '_print_edit',
    'options'     => '',
    'template'    => $moduleDirName . '_block.tpl'
];
$modversion['blocks'][] = [
    'file'        => 'blocks_qrcode.php',
    'name'        => _MI_PRINTLIMINATOR_BLOCK_QRCODE,
    'description' => _MI_PRINTLIMINATOR_BLOCK_QRCODE_DESC,
    'show_func'   => 'b_' . $moduleDirName . '_qrcode_show',
    'edit_func'   => 'b_' . $moduleDirName . '_qrcode_edit',
    'options'     => '2',
    'template'    => $moduleDirName . '_qrcode.tpl'
];
$modversion['blocks'][] = [
    'file'        => 'blocks_qrcode.php',
    'name'        => _MI_PRINTLIMINATOR_BLOCK_QRCODE_DIV,
    'description' => _MI_PRINTLIMINATOR_BLOCK_QRCODE_DESC_DIV,
    'show_func'   => 'b_' . $moduleDirName . '_qrcode_div_show',
    'edit_func'   => 'b_' . $moduleDirName . '_qrcode_div_edit',
    'options'     => '1||0%|0px',
    'template'    => $moduleDirName . '_qrcode_div.tpl'
];

// ------------------- Preferences ------------------- //
// ------------------- FileManager ------------------- //
$modversion['config'][]          = [
                  'name'         => 'logfile',
                  'title'        => _MI_PRINTLIMINATOR_CAT1,
                  'description'  => _MI_PRINTLIMINATOR_FILE_MANAGER_DESC,
                  'formtype'     => 'line_break',
                  'valuetype'    => 'textbox',
                  'default'      => 'odd'
];
include_once XOOPS_ROOT_PATH . "/class/xoopslists.php";
$modversion['config'][]          = [
                  'name'         => 'editor',
                  'title'        => _MI_PRINTLIMINATOR_FILE_MANAGER_EDITOR,
                  'description'  => _MI_PRINTLIMINATOR_FILE_MANAGER_FORM_EDITORDSC,
                  'formtype'     => "select",
                  'valuetype'    => "text",
                  'default'      => "textarea",
                  'options'      => XoopsLists::getDirListAsArray(XOOPS_ROOT_PATH . "/class/xoopseditor"),
                  'category'     => "global"
];
// ------------------- end FileManager ------------------- //
// ------------------- IndexScan ------------------- //
$modversion['config'][]          = [
                  'name'         => 'logfile',
                  'title'        => _MI_PRINTLIMINATOR_CAT2,
                  'description'  => _MI_PRINTLIMINATOR_INDEXSCAN_DESC,
                  'formtype'     => 'line_break',
                  'valuetype'    => 'textbox',
                  'default'      => 'odd'
];
$modversion['config'][]          = [
                  'name'         => 'indexscan_frombackup',
                  'title'        => _MI_INDEXSCAN_FROMBACKUP,
                  'description'  => _MI_INDEXSCAN_FROMBACKUP_DESC,
                  'formtype'     => 'textbox',
                  'valuetype'    => 'text',
                  'default'      => 'testing'
];
$modversion['config'][]          = [
                  'name'         => 'indexscan_rootorsub',
                  'title'        => _MI_INDEXSCAN_ROOTORSUB,
                  'description'  => _MI_INDEXSCAN_ROOTORSUB_DESC,
                  'formtype'     => 'textbox',
                  'valuetype'    => 'text',
                  'default'      => '../../../'
];
$modversion['config'][]          = [
                  'name'         => 'indexscan_illegalfiles',
                  'title'        => _MI_INDEXSCAN_ILLEGALFILETYPES,
                  'description'  => _MI_INDEXSCAN_ILLEGALFILETYPES_DESC,
                  'formtype'     => 'textarea',
                  'valuetype'    => 'text',
                  'default'      => 'php|html|htm|jpg|png|gif|js|ico|txt|css|htaccess|eot|sql|swf|tpl|ttf'
];
$modversion['config'][]          = [
                  'name'         => 'exep_01',
                  'title'        => _MI_INDEXSCAN_EXEP1,
                  'description'  => _MI_INDEXSCAN_EXEP1_DESC,
                  'formtype'     => 'textbox',
                  'valuetype'    => 'text',
                  'default'      => ''
];
$modversion['config'][]          = [
                  'name'         => 'exep_02',
                  'title'        => _MI_INDEXSCAN_EXEP2,
                  'description'  => _MI_INDEXSCAN_EXEP2_DESC,
                  'formtype'     => 'textbox',
                  'valuetype'    => 'text',
                  'default'      => ''
];
$modversion['config'][]          = [
                  'name'         => 'exep_03',
                  'title'        => _MI_INDEXSCAN_EXEP3,
                  'description'  => _MI_INDEXSCAN_EXEP3_DESC,
                  'formtype'     => 'textbox',
                  'valuetype'    => 'text',
                  'default'      => ''
];
$modversion['config'][]          = [
                  'name'         => 'exep_04',
                  'title'        => _MI_INDEXSCAN_EXEP4,
                  'description'  => _MI_INDEXSCAN_EXEP4_DESC,
                  'formtype'     => 'textbox',
                  'valuetype'    => 'text',
                  'default'      => ''
];
// ------------------- end IndexScan ------------------- //  
// ------------------- XoopsInfo ------------------- //
$modversion['config'][]          = [
                  'name'         => 'logfile',
                  'title'        => _MI_PRINTLIMINATOR_CAT3,
                  'description'  => _MI_XOOPSINFO_MAIN,
                  'formtype'     => 'line_break',
                  'valuetype'    => 'textbox',
                  'default'      => 'odd'
];
$modversion['config'][]          = [
                  'name'         => 'xi_check_table',
                  'title'        => _MI_XI_CHECK_TABLE,
                  'description'  => _MI_XI_CHECK_TABLE_DSC,
                  'formtype'     => 'textarea',
                  'valuetype'    => 'text',
                  'default'      => 'session|online|priv_msgs|protector_access|protector_log'
];
// ------------------- end XoopsInfo ------------------- //
// ------------------- Notification ------------------- //
$modversion['hasNotification'] = 0;

if (!empty($_POST['fct']) && !empty($_POST['op']) && !empty($_POST['diranme']) && 'modulesadmin' === $_POST['fct']
    && 'update_ok' === $_POST['op']
    && $_POST['dirname'] === $modversion['dirname']) {
    include __DIR__ . '/include/update.php';
}