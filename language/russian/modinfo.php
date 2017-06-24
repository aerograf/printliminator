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

// Categories
define('_MI_PRINTLIMINATOR_CAT1','<font color="#0040FF" size="6"><b>--- FileManager ---</b></font> ');
define('_MI_PRINTLIMINATOR_CAT2','<font color="#0040FF" size="6"><b>--- IndexScan ---</b></font> ');

// The name of this module 
define("_MI_PRINTLIMINATOR_NAME" , "Printliminator");

// A brief description of this module
define("_MI_PRINTLIMINATOR_DESC" , "Printliminator модуль XOOPS");

// Admin menu links
define("_MI_PRINTLIMINATOR_MANAGER_INDEX" , "Главная");
define("_MI_PRINTLIMINATOR_MANAGER_INDEX_DESC" , "Модуль главной страницы");
define("_MI_PRINTLIMINATOR_MANAGER_ABOUT" , "About");
define("_MI_PRINTLIMINATOR_MANAGER_ABOUT_DESC" , "Об этом модуле");
define("_MI_PRINTLIMINATOR_MANAGER_HELP" , "Помощь");
define("_MI_PRINTLIMINATOR_MANAGER_HELP_DESC" , "Помощь в использовании модуля");
define("_MI_PRINTLIMINATOR_MANAGER_QRCODE_DIV_DESC" , "Поделиться");
//define("_MI_PRINTLIMINATOR_MANAGER_QRCODE_DIV_DESC" , "QR Code DIV");
define("_MI_PRINTLIMINATOR_SHARE42_DIV_DESC" , "Поделиться DIV");

// Blocks
define("_MI_PRINTLIMINATOR_BLOCK_PRINT" , "Printliminator");
define("_MI_PRINTLIMINATOR_BLOCK_PRINT_DESC" , "Printliminator");
define("_MI_PRINTLIMINATOR_BLOCK_QRCODE" , "QR Code");
define("_MI_PRINTLIMINATOR_BLOCK_QRCODE_DESC" , "QR Code");
define("_MI_PRINTLIMINATOR_BLOCK_QRCODE_DIV" , "Поделиться");
//define("_MI_PRINTLIMINATOR_BLOCK_QRCODE_DIV" , "QR Code DIV");
define("_MI_PRINTLIMINATOR_BLOCK_QRCODE_DESC_DIV" , "Блок 'QR Code' с возможностью свободного размещения");

//FileManager
define("_MI_PRINTLIMINATOR_FILE_MANAGER" , "FileManager");
define("_MI_PRINTLIMINATOR_FILE_MANAGER_DESC" , "FileManager for Xoops");
define("_MI_PRINTLIMINATOR_FILE_MANAGER_HELP" , "FileManager Помощь");
define("_MI_PRINTLIMINATOR_FILE_MANAGER_DESC_HELP" , "Помощь по FileManager for Xoops");
define("_MI_PRINTLIMINATOR_FILE_MANAGER_EDITOR","Редактор кода");
define("_MI_PRINTLIMINATOR_FILE_MANAGER_FORM_EDITORDSC","Выберите редактор");

// IndexScan
define("_MI_PRINTLIMINATOR_INDEXSCAN_HELP" , "IndexScan Помощь");
define("_MI_PRINTLIMINATOR_INDEXSCAN_DESC_HELP" , "IndexScan Помощь");
define("_MI_PRINTLIMINATOR_INDEXSCAN_DESC" , "IndexScan");
define("_MI_INDEXSCAN_MAIN","IndexScan");
define("_MI_INDEXSCAN_SCANNOW","IndexScan now");
define("_MI_INDEXSCAN_CREATEINDEX","Создать index файл");
define("_MI_INDEXSCAN_HELP","Помощь");
define("_MI_INDEXSCAN_SETTINGS","Установки");
define("_MI_INDEXSCAN_MODULE_NAME","IndexScan");
define("_MI_INDEXSCAN_MODULE_DESC","Сканирует xoops на отсутствие<br> index файлов. Если они отсутствуют, Вы можете создать их.");
define("_MI_INDEXSCAN_EXEP1","Не сканировать папку 01");
define("_MI_INDEXSCAN_EXEP1_DESC","Если есть папки, которые Вы не хотите сканировать (например.) <b> uploads </b><br />Вы можете написать название здесь");
define("_MI_INDEXSCAN_EXEP2","Не сканировать папку 02");
define("_MI_INDEXSCAN_EXEP2_DESC","");
define("_MI_INDEXSCAN_EXEP3","Не сканировать папку 03");
define("_MI_INDEXSCAN_EXEP3_DESC","");
define("_MI_INDEXSCAN_EXEP4","Не сканировать папку 04");
define("_MI_INDEXSCAN_EXEP4_DESC","");
define("_MI_INDEXSCAN_ROOTORSUB","Установка корневой или подпапки");
define("_MI_INDEXSCAN_ROOTORSUB_DESC","Напишите здесь, откуда вы хотите начать сканирование<br/>'../../../' Если у Вас - 'www.myspace.com/mainfile,php'<br/>'../../../../' Если у Вас -  www.websted.dk/htdocs/mainfile.com");
define("_MI_INDEXSCAN_ILLEGALFILETYPES","Пропустить типы файлов.");
define("_MI_INDEXSCAN_ILLEGALFILETYPES_DESC","Добавьте файлы, которые вы хотите пропустить во время проверки файлов.<br/>Эти файлы будут считаться «безопасными»,<br/>если они также указаны в файле 'admin/filecheck.txt'.");
define("_MI_INDEXSCAN_FROMBACKUP","Создание файла zip");
define("_MI_INDEXSCAN_FROMBACKUP_DESC","Создает zip-архив с той же структурой папок, в folder2backup.<br/>Архив содержит только папки и<br/>index.html файлы, отсутствующие в<br/>Вашей загруженной папке.<br/><br/>Имя папки - это имя папки в папке folder2backup, например 'testing'.<br/>Вы можете удалить 'testing'.");

//Startup
define("_MI_PRINTLIMINATOR_STARTUP_MANAGER","Startup");
define('_MI_STARTUP_CAT_STARTUP_NAME', '<h3>Установка стартовой страницы</h3>');
