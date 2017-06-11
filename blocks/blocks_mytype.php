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

$xoTheme->addStylesheet( XOOPS_URL . '/modules/printliminator/assets/css/style_block.css' );
$xoTheme->addStylesheet( XOOPS_URL . '/modules/printliminator/assets/css/style_mod.css' );
$xoTheme->addStylesheet( XOOPS_URL . '/modules/printliminator/assets/css/style_help.css' );
//$xoTheme->addScript( XOOPS_URL . '/modules/instruction/assets/js/tree.js' );

if (isset($GLOBALS['xoopsConfig']['language']) && file_exists(XOOPS_ROOT_PATH.'/language/'.$GLOBALS['xoopsConfig']['language'].'/blocks.php')) {
     include_once XOOPS_ROOT_PATH.'/language/'.$GLOBALS['xoopsConfig']['language'].'/blocks.php';
} else {
     include_once XOOPS_ROOT_PATH.'/language/english/blocks.php';
}

function b_printliminator_myfunction_show($options)
{
    $block = array();
    $block["text"] = _MB_PRINTLIMINATOR_PRINT;
    return $block;
}
