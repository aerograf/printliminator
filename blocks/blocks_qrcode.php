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
$myts = MyTextSanitizer::getInstance();

if (isset($GLOBALS['xoopsConfig']['language']) && file_exists(XOOPS_ROOT_PATH.'/modules/printliminator/language/'.$GLOBALS['xoopsConfig']['language'].'/blocks.php')) {
     include_once XOOPS_ROOT_PATH.'/modules/printliminator/language/'.$GLOBALS['xoopsConfig']['language'].'/blocks.php';
} else {
     include_once XOOPS_ROOT_PATH.'/modules/printliminator/language/english/blocks.php';
}

function b_printliminator_qrcode_show($options) {   
    global $xoTheme;
    $xoTheme->addStylesheet( XOOPS_URL . '/modules/printliminator/assets/css/style_block.css' );
    $xoTheme->addStylesheet( XOOPS_URL . '/modules/printliminator/assets/css/style_help.css' );
    $title = _MB_PRINTLIMINATOR_QRCODE;
    $block = array();
    $block['qrcode_title'] = $title;
    $block['qrcode_size'] = $options[0];  // 1-4
    $block['qrcode_error'] = $options[1]; //Error correct level You can set 'L','M','Q' or 'H'.
    return $block;
}

function b_printliminator_qrcode_edit($options) {
    $form = "<hr /><br /><div style='float:left;width:20%;'>" . _MB_PRINTLIMINATOR_SIZE_QR . ":</div><div style='float:left;width:20%;'><input type='number' name='options[0]' value='{$options[0]}' min='1' max='4' /></div><div style='float:left;width:60%;'>" . _MB_PRINTLIMINATOR_SIZE_DESC_QR . "</div><br /><br /><hr /><br />\n";
    $form .= "<div style='float:left;width:20%;'>" . _MB_PRINTLIMINATOR_ERROR_QR . ":</div><div style='float:left;width:20%;'>
    <select size = '1' name='options[1]' value='{$options[1]}'>
        <option value='L'>L</option>
        <option selected value='M'>M</option>
        <option value='Q'>Q</option>
        <option value='H'>H</option>
    </select></div><div style='float:left;width:60%;'>" . _MB_PRINTLIMINATOR_ERROR_DESC_QR . "</div><br /><br /><hr /><br />\n";
    return $form;
}

function b_printliminator_qrcode_div_show($options) {
    global $xoTheme;
    //$xoTheme->addStylesheet( XOOPS_URL . '/modules/printliminator/assets/css/reset.css' );
    //$xoTheme->addStylesheet( XOOPS_URL . '/modules/printliminator/assets/css/style_div_block.css' );
    $xoTheme->addStylesheet( XOOPS_URL . '/modules/printliminator/assets/css/style_block.css' );
    $xoTheme->addStylesheet( XOOPS_URL . '/modules/printliminator/assets/css/style_help.css' );
    $title = _MB_PRINTLIMINATOR_QRCODE_DIV;
    $block = array();
    $block['qrcode_div_title'] = $title;
    $block['qrcode_div_size'] = $options[0];  // 1-4
    $block['qrcode_div_error'] = $options[1]; //Error correct level You can set 'L','M','Q' or 'H'.
    $block['qrcode_div_left'] = $options[2];  // px or %
    $block['qrcode_div_top'] = $options[3];   // px or %
    return $block;
}

function b_printliminator_qrcode_div_edit($options) {
    $form = "<hr /><br /><div style='float:left;width:20%;'>" . _MB_PRINTLIMINATOR_SIZE_QR . ":</div><div style='float:left;width:20%;'><input type='number' name='options[0]' value='{$options[0]}' min='1' max='4' /></div><div style='float:left;width:60%;'>" . _MB_PRINTLIMINATOR_SIZE_DESC_QR . "</div><br /><br /><hr /><br />\n";
    $form .= "<div style='float:left;width:20%;'>" . _MB_PRINTLIMINATOR_ERROR_QR . ":</div><div style='float:left;width:20%;'>
    <select size = '1' name='options[1]' value='{$options[1]}'>
        <option value='L'>L</option>
        <option selected value='M'>M</option>
        <option value='Q'>Q</option>
        <option value='H'>H</option>
    </select></div><div style='float:left;width:60%;'>" . _MB_PRINTLIMINATOR_ERROR_DESC_QR . "</div><br /><br /><hr /><br />\n";
    $form .= "<div style='float:left;width:20%;'>" . _MB_PRINTLIMINATOR_DIV_LEFT_QR . ":</div><div style='float:left;width:20%;'><input type='text' name='options[2]' value='{$options[2]}' /></div><div style='float:left;width:60%;'>" . _MB_PRINTLIMINATOR_DIV_LEFT_DESC_QR . "</div><br /><br /><hr /><br />\n";
    $form .= "<div style='float:left;width:20%;'>" . _MB_PRINTLIMINATOR_DIV_TOP_QR . ":</div><div style='float:left;width:20%;'><input type='text' name='options[3]' value='{$options[3]}' /></div><div style='float:left;width:60%;'>" . _MB_PRINTLIMINATOR_DIV_TOP_DESC_QR . "</div><br /><br /><hr />\n";
    return $form;
}