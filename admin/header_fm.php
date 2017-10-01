<?php
// Header file manager
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
defined('NWLINE')or define('NWLINE', "\n");

include "../../../include/cp_header.php";
global $xoopsModule;
$xoopsModule = XoopsModule::getByDirname('printliminator');
if ( !xoops_isActiveModule('printliminator') ) redirect_header( XOOPS_URL, 2, _NIM_AM_ERRORMODNOTACTIVE );

$isadmin = false;
if ( !is_object($xoopsUser) || !is_object($xoopsModule) || !$xoopsUser->isAdmin($xoopsModule->mid()) ) {
    redirect_header( XOOPS_URL . DS, 3, _NOPERM );
    exit();
}
else {
    $isadmin = true;
}

include_once "../include/functions.php";

$myts = MyTextSanitizer::getInstance();

$op = 'default';
if(isset($_POST['op'])) {
 $op=$_POST['op'];
} elseif(isset($_GET['op'])) {
    $op=$_GET['op'];
}
$nom_rep = '';
$op = system_CleanVars ( $_REQUEST, 'op', 'list', 'string' );
if (isset($_POST)) {foreach ( $_POST as $k => $v ) {${$k} = $v;}}

if (isset($_GET['file'])) {$file = trim($_GET['file']);} else {$file = '';}
if (isset($_GET['fic'])) {$fic = trim($_GET['fic']);} else {$fic = '';}
if (isset($_GET['rep'])) {$rep = trim($_GET['rep']);} else {$rep = '';}
if (isset($_GET['id'])) {$id = intval($_GET['id']);}
if (isset($_GET['dest'])) {$dest = trim($_GET['dest']);} else {$dest = '';}

if (isset($_GET['order_by'])) {$order_by = trim($_GET['order_by']);} else {$order_by = '';}
if (isset($_GET['sens'])) {$sens = intval($_GET['sens']);} else {$sens = 0;}
