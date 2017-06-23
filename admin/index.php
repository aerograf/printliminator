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
$adminObject->addInfoBox(_AM_PRINTLIMINATOR_MODULES_DATA);
if (file_exists("../assets/js/printliminator.min.js")) 
{
  $adminObject->addInfoBoxLine('<label><img style="height:14px;" src="../assets/images/admin/on.gif">&nbsp;&mdash;&nbsp;<span class="green">' . _AM_PRINTLIMINATOR_BLOCK_DATA_ON . '</span></label><hr style="border: dotted 1px;" />','',''); // если есть файл
} else {
  $adminObject->addInfoBoxLine('<label><img style="height:14px;" src="../assets/images/admin/off.gif">&nbsp;&mdash;&nbsp;<span class="red">' . _AM_PRINTLIMINATOR_BLOCK_DATA_OFF . '</span></label><hr style="border: dotted 1px;" />','','');  // если нет файла
}
if (count(array_filter(glob('../include/data/*'), 'is_file')) == 231)
{
  $adminObject->addInfoBoxLine('<label><img style="height:14px;" src="../assets/images/admin/on.gif">&nbsp;&mdash;&nbsp;<span class="green">' . _AM_PRINTLIMINATOR_QRCODE_DATA_ON . '</span></label><hr style="border: dotted 1px;" />','',''); // если есть такая папка
} else {
  $adminObject->addInfoBoxLine('<label><img style="height:14px;" src="../assets/images/admin/off.gif">&nbsp;&mdash;&nbsp;<span class="red">' . _AM_PRINTLIMINATOR_QRCODE_DATA_OFF . '</span></label><hr style="border: dotted 1px;" />','','');  // если нет такой папки
}
$filename_1 = "../assets/js/share42d.js";
$filename_2 = "../assets/js/share42s.js";
if (md5_file($filename_1) == md5_file($filename_2))
{
  $adminObject->addInfoBoxLine('<label><img style="height:14px;" src="../assets/images/admin/off.gif">&nbsp;&mdash;&nbsp;<span class="red">' . _AM_PRINTLIMINATOR_SHARE42_DATA_OFF . '</span></label><hr style="border: dotted 1px;" />','','');
} else {
  $adminObject->addInfoBoxLine('<label><img style="height:14px;" src="../assets/images/admin/on.gif">&nbsp;&mdash;&nbsp;<span class="green">' . _AM_PRINTLIMINATOR_SHARE42_DATA_ON . '</span></label><hr style="border: dotted 1px;" />','','');
} 

$adminObject->displayNavigation(basename(__FILE__));
$adminObject->displayIndex();

include_once __DIR__ . '/footer.php';
