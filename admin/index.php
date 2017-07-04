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
  $adminObject->addInfoBoxLine('<label><span class="bold shadowlight alignmiddle">' . _AM_PRINTLIMINATOR_MODULES_DATA_DESC . '</span></label><hr style="border: dotted 1px;" />','','');
if (file_exists("../assets/js/printliminator.min.js")) 
{
  $adminObject->addInfoBoxLine('<label><img style="height:14px;" src="../assets/images/admin/on.gif">&nbsp;&mdash;&nbsp;<span class="green">' . _AM_PRINTLIMINATOR_BLOCK_DATA_ON . '</span></label><hr style="border: dotted 1px;" />','','');
} else {
  $adminObject->addInfoBoxLine('<label><img style="height:14px;" src="../assets/images/admin/off.gif">&nbsp;&mdash;&nbsp;<span class="red">' . _AM_PRINTLIMINATOR_BLOCK_DATA_OFF . '</span></label><hr style="border: dotted 1px;" />','','');
}
if (count(array_filter(glob('../include/data/*'), 'is_file')) == 231)
{
  $adminObject->addInfoBoxLine('<label><img style="height:14px;" src="../assets/images/admin/on.gif">&nbsp;&mdash;&nbsp;<span class="green">' . _AM_PRINTLIMINATOR_QRCODE_DATA_ON . '</span></label><hr style="border: dotted 1px;" />','','');
} else {
  $adminObject->addInfoBoxLine('<label><img style="height:14px;" src="../assets/images/admin/off.gif">&nbsp;&mdash;&nbsp;<span class="red">' . _AM_PRINTLIMINATOR_QRCODE_DATA_OFF . '</span></label><hr style="border: dotted 1px;" />','','');
}
$filename_1 = "../assets/js/share42d.js";
$filename_2 = "../assets/js/share42s.js";
if (md5_file($filename_1) == md5_file($filename_2))
{
  $adminObject->addInfoBoxLine('<label><img style="height:14px;" src="../assets/images/admin/off.gif">&nbsp;&mdash;&nbsp;<span class="red">' . _AM_PRINTLIMINATOR_SHARE42_DATA_OFF . '</span></label><hr style="border: dotted 1px;" />','','');
} else {
  $adminObject->addInfoBoxLine('<label><img style="height:14px;" src="../assets/images/admin/on.gif">&nbsp;&mdash;&nbsp;<span class="green">' . _AM_PRINTLIMINATOR_SHARE42_DATA_ON . '</span></label><hr style="border: dotted 1px;" />','','');
}
if (strpos(file_get_contents("../../../include/checklogin.php"), '$url = XOOPS_URL."/index.php"'))
{
  $adminObject->addInfoBoxLine('<label><img style="height:14px;" src="../assets/images/admin/on.gif">&nbsp;&mdash;&nbsp;<span class="green">' . _AM_PRINTLIMINATOR_STARTUP_DATA_ON . '</span></label><hr style="border: dotted 1px;" />','','');
} else {
  $adminObject->addInfoBoxLine('<label><img style="height:14px;" src="../assets/images/admin/off.gif">&nbsp;&mdash;&nbsp;<span class="red">' . _AM_PRINTLIMINATOR_STARTUP_DATA_OFF . '</span></label><hr style="border: dotted 1px;" />','','');
}

$adminObject->displayNavigation(basename(__FILE__));
$adminObject->displayIndex();

$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : 'index';
switch ($op) {
    default:
    case 'index':
        require_once XOOPS_ROOT_PATH . '/class/xoopsformloader.php';
        $form = new XoopsThemeForm(_AM_PRINTLIMINATOR_CACHE_1, 'updatecache', 'index.php', 'post', true);
        $checkbox_options = array(
            'updatexoopscache'    => _AM_PRINTLIMINATOR_CACHE_3,
            'updatesmartycache'   => _AM_PRINTLIMINATOR_CACHE_4,
            'updatesmartycompile' => _AM_PRINTLIMINATOR_CACHE_5
        );
        $checkbox         = new XoopsFormCheckBox(_AM_PRINTLIMINATOR_CACHE_2, 'options', array_keys($checkbox_options));
        $checkbox->addOptionArray($checkbox_options);
        $form->addElement($checkbox);
        $form->addElement(new XoopsFormHidden('op', 'updatecache'));
        $form->addElement(new XoopsFormHidden('step', '1'));
        $form->addElement(new XoopsFormButton('', 'submit', _SUBMIT, 'submit'));
        $form->display();
        break;
    case 'updatecache':
        if ($_REQUEST['step'] == 1) {
            $options  = implode('_', $_REQUEST['options']);
            $url      = XOOPS_URL . "/modules/printliminator/admin/index.php?op=updatecache&step=2&options={$options}";
            $updating = _AM_PRINTLIMINATOR_CACHE_6;
            $msg      = <<<EOF
    <div class="loading" style="text-align:center;">
    <img src="../assets/images/loader.gif" />
    <p>{$updating}</P>
    </div>
    <script type="text/javascript" language="javascript">
    function redirect(url)
    {
    location.replace(url);
    }
    </script>
    <script type="text/JavaScript">setTimeout("redirect('{$url}');", 2000);</script>
EOF;

            echo $msg;
        } elseif ($_REQUEST['step'] == 2) {
            $options = explode('_', $_REQUEST['options']);
            foreach ($options as $k) {
                if ($k === 'updatexoopscache') {
                    $d = XOOPS_VAR_PATH . '/caches/xoops_cache';
                    updatecache($d, 'php');
                    updatecache($d, 'html');
                    updatecache($d, 'tmp');
                }
                if ($k === 'updatesmartycache') {
                    $d = XOOPS_VAR_PATH . '/caches/smarty_cache';
                    updatecache($d, 'html');
                    updatecache($d, 'tmp');
                }
                if ($k === 'updatesmartycompile') {
                    $d = XOOPS_VAR_PATH . '/caches/smarty_compile';
                    updatecache($d, 'php');
                }
            }

            redirect_header('index.php', 3, _AM_PRINTLIMINATOR_CACHE_7);
        }

        break;

}

/**
 * @param $cacheDir
 * @param $type
 */
function updatecache($cacheDir, $type)
{
    $d = dir($cacheDir);
    while (false !== ($entry = $d->read())) {
        if (preg_match("/.*\.{$type}$/", $entry)) {
            unlink($cacheDir . '/' . $entry);
        }
    }
    $d->close();
}

include_once __DIR__ . '/footer.php';
