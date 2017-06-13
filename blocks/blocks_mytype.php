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

if (isset($GLOBALS['xoopsConfig']['language']) && file_exists(XOOPS_ROOT_PATH.'/language/'.$GLOBALS['xoopsConfig']['language'].'/blocks.php')) {
     include_once XOOPS_ROOT_PATH.'/language/'.$GLOBALS['xoopsConfig']['language'].'/blocks.php';
} else {
     include_once XOOPS_ROOT_PATH.'/language/english/blocks.php';
}

function b_printliminator_print_show($options)
{   
    global $xoTheme;
    $xoTheme->addStylesheet( XOOPS_URL . '/modules/printliminator/assets/css/style_block.css' );
    $xoTheme->addStylesheet( XOOPS_URL . '/modules/printliminator/assets/css/style_mod.css' );
    $xoTheme->addStylesheet( XOOPS_URL . '/modules/printliminator/assets/css/style_help.css' );
    $title = _MB_PRINTLIMINATOR_PRINT;
    $block = array();
    $block["text"] = _MB_PRINTLIMINATOR_PRINT;
    // Lang code form start
    $block["print_close"] = _MB_PRINTLIMINATOR_CLOSE;
    $block["print_drag"] = _MB_PRINTLIMINATOR_DRAG;
    $block["print_click_1"] = _MB_PRINTLIMINATOR_CLICK_1;
    $block["print_click_2"] = _MB_PRINTLIMINATOR_CLICK_2;
    $block["print_superpowers"] = _MB_PRINTLIMINATOR_SUPERPOWERS;
    $block["print_undo_last"] = _MB_PRINTLIMINATOR_UNDO_LAST;
    $block["print_print_style"] = _MB_PRINTLIMINATOR_PRINT_STYLE;
    $block["print_remove"] = _MB_PRINTLIMINATOR_REMOVE;
    $block["print_send_to"] = _MB_PRINTLIMINATOR_SEND_TO;
    $block["print_view_key"] = _MB_PRINTLIMINATOR_VIEW_KEY;
    $block["print_hide_key"] = _MB_PRINTLIMINATOR_HIDE_KEY;
    $block["print_key"] = _MB_PRINTLIMINATOR_KEY;
    $block["print_key_desc"] = _MB_PRINTLIMINATOR_KEY_DESC;
    $block["print_pageup"] = _MB_PRINTLIMINATOR_PAGEUP;
    $block["print_pagedown"] = _MB_PRINTLIMINATOR_PAGEDOWN;
    $block["print_right"] = _MB_PRINTLIMINATOR_RIGHT;
    $block["print_left"] = _MB_PRINTLIMINATOR_LEFT;
    $block["print_enter"] = _MB_PRINTLIMINATOR_ENTER;
    $block["print_backspace"] = _MB_PRINTLIMINATOR_BACKSPACE;
    $block["print_numpad_plus"] = _MB_PRINTLIMINATOR_NUMPAD_PLUS;
    $block["print_numpad_minus"] = _MB_PRINTLIMINATOR_NUMPAD_MINUS;
    $block["print_reset_font"] = _MB_PRINTLIMINATOR_RESET_FONT;
    $block["print_alt"] = _MB_PRINTLIMINATOR_ALT;
    $block["print_shift"] = _MB_PRINTLIMINATOR_SHIFT;
    // end
    return $block;
}
