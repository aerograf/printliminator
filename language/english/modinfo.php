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

// The name of this module
define("_MI_PRINTLIMINATOR_NAME" , "Printliminator");

// A brief description of this module
define("_MI_PRINTLIMINATOR_DESC" , "Printliminator module for XOOPS");

// Admin menu links
define("_MI_PRINTLIMINATOR_MANAGER_INDEX" , "Index");
define("_MI_PRINTLIMINATOR_MANAGER_INDEX_DESC" , "Module Administration index page");
define("_MI_PRINTLIMINATOR_MANAGER_ABOUT" , "About");
define("_MI_PRINTLIMINATOR_MANAGER_ABOUT_DESC" , "About this module");
define("_MI_PRINTLIMINATOR_MANAGER_HELP" , "Printliminator & QRCode Help");
define("_MI_PRINTLIMINATOR_MANAGER_HELP_DESC" , "Help pour module usage");
define("_MI_PRINTLIMINATOR_MANAGER_QRCODE_DIV_DESC" , "QR Code DIV");

// Blocks
define("_MI_PRINTLIMINATOR_BLOCK_NAME1" , "Printliminator");
define("_MI_PRINTLIMINATOR_BLOCK_NAME1_DESC" , "Printliminator");
define("_MI_PRINTLIMINATOR_BLOCK_QRCODE" , "QR Code");
define("_MI_PRINTLIMINATOR_BLOCK_QRCODE_DESC" , "QR Code");
define("_MI_PRINTLIMINATOR_BLOCK_QRCODE_DIV" , "QR Code DIV");
define("_MI_PRINTLIMINATOR_BLOCK_QRCODE_DESC_DIV" , "The 'QR Code' block with the possibility of free placement");

//FileManager
define("_MI_PRINTLIMINATOR_FILE_MANAGER" , "Filemanager");
define("_MI_PRINTLIMINATOR_FILE_MANAGER_DESC" , "FileManager for Xoops");
define("_MI_PRINTLIMINATOR_FILE_MANAGER_HELP" , "Filemanager Help");
define("_MI_PRINTLIMINATOR_FILE_MANAGER_DESC_HELP" , "Help to FileManager for Xoops");
define("_MI_PRINTLIMINATOR_FILE_MANAGER_EDITOR","FileManafer<br /><hr /><br />Code Editor");
define("_MI_PRINTLIMINATOR_FILE_MANAGER_FORM_EDITORDSC","Choose the editor for code areas");

// IndexScan
define("_MI_PRINTLIMINATOR_INDEXSCAN_HELP" , "Help to IndexScan");
define("_MI_PRINTLIMINATOR_INDEXSCAN_DESC_HELP" , "Help to IndexScan");
define("_MI_PRINTLIMINATOR_INDEXSCAN_DESC" , "IndexScan");
define("_MI_INDEXSCAN_MAIN","IndexScan");
define("_MI_INDEXSCAN_SCANNOW","IndexScan now");
define("_MI_INDEXSCAN_CREATEINDEX","Create index files");
define("_MI_INDEXSCAN_HELP","Help");
define("_MI_INDEXSCAN_SETTINGS","Settings");
define("_MI_INDEXSCAN_MODULE_NAME","Indexscan");
define("_MI_INDEXSCAN_MODULE_DESC","Scans your xoops installation for missing<br> index files. If some are missing you can create.");
define("_MI_INDEXSCAN_EXEP1","Folder to not scan 01");
define("_MI_INDEXSCAN_EXEP1_DESC","If there are folders you dont want scanned (for instance.) <b>uploads</b><br> you can write the name here");
define("_MI_INDEXSCAN_EXEP2","Folder to not scan 02");
define("_MI_INDEXSCAN_EXEP2_DESC","");
define("_MI_INDEXSCAN_EXEP3","Folder to not scan 03");
define("_MI_INDEXSCAN_EXEP3_DESC","");
define("_MI_INDEXSCAN_EXEP4","Folder to not scan 04");
define("_MI_INDEXSCAN_EXEP4_DESC","");
define("_MI_INDEXSCAN_ROOTORSUB","Root or sub folder installation");
define("_MI_INDEXSCAN_ROOTORSUB_DESC","Write here from where you want to start scanning<br/>'../../../' if your web is like 'www.myspace.com/mainfile,php'<br/>'../../../../' if it is like www.websted.dk/htdocs/mainfile.com");
define("_MI_INDEXSCAN_ILLEGALFILETYPES","Skip file types.");
define("_MI_INDEXSCAN_ILLEGALFILETYPES_DESC","Add files you wish to skip while 'checking files'.<br/>These files will be considered 'safe'<br/>if they also are listed in the file 'admin/filecheck.txt'.");
define("_MI_INDEXSCAN_FROMBACKUP","IndexScan<br /><hr /><br />Create file zip");
define("_MI_INDEXSCAN_FROMBACKUP_DESC","Creates a zip archieve with same folder structure from the folder you ftp to folder2backup.<br/>The zip contains nothing but the folders and,<br/>index.html files where missing from<br/>your uploaded folder.<br/><br/>The folder name is the name of the folder in your folder2backup folder, for instance 'testing'.<br/>You can delete 'testing' this folder is only for example.");