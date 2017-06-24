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

define("_AM_PRINTLIMINATOR_MANAGER_INDEX",                  "Index");
define("_AM_PRINTLIMINATOR_MANAGER_ABOUT",                  "About");
define("_AM_PRINTLIMINATOR_MANAGER_ABOUT1",                  "Development");
define("_AM_PRINTLIMINATOR_MANAGER_HELP",                  "Printliminator & QRCode Help");
define("_AM_PRINTLIMINATOR_MANAGER_EXAMPLE",                 "Example");
define("_AM_PRINTLIMINATOR_MANAGER_PREFERENCES",            "Settings");
define("_AM_PRINTLIMINATOR_MANAGER_UPDATE",                 "Update");

// About.php
define("_AM_PRINTLIMINATOR_ABOUT_RELEASEDATE",        "Release date");
define("_AM_PRINTLIMINATOR_ABOUT_AUTHOR",                   "Author");
define("_AM_PRINTLIMINATOR_ABOUT_CREDITS",                  "Credits");
define("_AM_PRINTLIMINATOR_ABOUT_LICENSE",                  "License");
define("_AM_PRINTLIMINATOR_ABOUT_MODULE_STATUS",            "Status");
define("_AM_PRINTLIMINATOR_ABOUT_WEBSITE",                  "Website");
define("_AM_PRINTLIMINATOR_ABOUT_AUTHOR_NAME",              "Author name");
define("_AM_PRINTLIMINATOR_ABOUT_CHANGELOG",                "Change Log");
define("_AM_PRINTLIMINATOR_ABOUT_MODULE_INFO",              "Module Infos");
define("_AM_PRINTLIMINATOR_ABOUT_AUTHOR_INFO",              "Author Infos");
define("_AM_PRINTLIMINATOR_ABOUT_LASTUPDATE",        "Last update");

//Admin module menu
define("_AM_PRINTLIMINATOR_MODULES_DATA",        "Status of module components");
define("_AM_PRINTLIMINATOR_MODULES_DATA_DESC",        "After performing any action, you must refresh the page.");
define("_AM_PRINTLIMINATOR_QRCODE_DATA_ON",        "The 'QR Code' block is ready. To configure and activate, go to the settings of the blocks. More information on setting up in the help section. <a href='../include/dell_data.php'>Uninstall.</a>");
define("_AM_PRINTLIMINATOR_QRCODE_DATA_OFF",        "The 'QR Code' block is not ready. <a href='../include/extract_archive.php'>Install.</a>");
define("_AM_PRINTLIMINATOR_BLOCK_DATA_ON",        "The 'The Printliminator' block is ready.");
define("_AM_PRINTLIMINATOR_BLOCK_DATA_OFF",        "The 'The Printliminator' block is not ready. Check the file /assets/js/printliminator.min.js. If not, download the module archive again.");
define("_AM_PRINTLIMINATOR_SHARE42_DATA_ON",        "The 'Share42' blocks are ready.");
define("_AM_PRINTLIMINATOR_SHARE42_DATA_OFF",        "'Share42' blocks are not ready. Check the file /assets/js/share42d.js and share42s.js. If not, download the module archive again.");
define("_AM_PRINTLIMINATOR_STARTUP_DATA_ON",        "The 'Startup' module is enabled. Go to the tab and configure the module according to the instructions.");
define("_AM_PRINTLIMINATOR_STARTUP_DATA_OFF",        "The 'Startup' module is not enabled. To enable, go to the module tab.");

// FileManager
define("_FM_AM_LASTVERSION","Last version");
define("_FM_AM_FILENAME","Filename");
define("_FM_AM_FILESIZE","Size");
define("_FM_AM_FILETYPE","Type");
define("_FM_AM_MODIFIED","Modified");
define("_FM_AM_ACTIONS","Actions");
define("_FM_AM_RENAME","Rename");
define("_FM_AM_DELETE","Delete");
define("_FM_AM_PARENTDIR","Parent directory");
define("_FM_AM_UPLOAD_IN_DIR","Upload a file in the directory : ");
define("_FM_AM_NEWDIR","Create a new directory in : ");
define("_FM_AM_UPLOAD","Upload");
define("_FM_AM_CREATENEW","Create a new file in : ");
define("_FM_AM_CREATE","Create");
define("_FM_AM_MUST_SELECT","You must select a file");
define("_FM_AM_GOBACK","Go back");
define("_FM_AM_ERROR_UP","Error uploading file !");
define("_FM_AM_THE_FILE","The file");
define("_FM_AM_SUCCESS","has been successfully created in the directory");
define("_FM_AM_MUST_VALID_NAME","You must write a valid name");
define("_FM_AM_THE_DIRECTORY","The directory");
define("_FM_AM_CREATED_IN","has been create in");
define("_FM_AM_DIRECTORY_EXISTS","This directory already exists");
define("_FM_AM_RENAMED_TO","has been renamed to");
define("_FM_AM_TO","to");
define("_FM_AM_ALREADY_EXISTS","already exists");
define("_FM_AM_DELETED","has been deleted");
define("_FM_AM_PATH_REALLY_DELETE","Do you really want to delete the");
define("_FM_AM_EDIT","Edit");
define("_FM_AM_EDITING_FILE","Editing file");
define("_FM_AM_SAVE","Save");
define("_FM_AM_CANCEL","Cancel");
define("_FM_AM_HAS_BEEN_MODIFIED","has been modified");
define("_FM_AM_ROOT_DIR","Root directory");
define("_FM_AM_LOGOUT","Log out");
define("_FM_AM_COPY","Copy");
define("_FM_AM_SELECTED_FILE","Selected file");
define("_FM_AM_PASTE_IN","Paste in");
define("_FM_AM_SELECT_ANOTHER","Or select another directory");
define("_FM_AM_MOVE","Move");
define("_FM_AM_FILE_EXISTS","This file already exists");
define("_FM_AM_PATH_NOT_CORRECT","The root path is not correct. Check it in the PRIVE/USERS.TXT file");
define("_FM_AM_REMOVED","This file has been removed");
define("_FM_AM_SEND","Send");
define("_FM_AM_PASS","Pass");
define("_FM_AM_HELP","Help");
define("_FM_AM_REFRESHPAGE","Refresh");
define("_FM_AM_CLOSE","Close");
define("_FM_AM_SEARCH","Search");
define("_FM_AM_DOWNLOAD","Download");
define("_FM_AM_UNABLE_TO_OPEN","Unable to open file");
define("_FM_AM_PRINT","Print");
define("_FM_AM_LOGIN","Login");
define("_FM_AM_YES","YES");
define("_FM_AM_NO","NO");
define("_FM_AM_DIRECTORY","Directory");
define("_FM_AM_FILE","File");
define("_FM_AM_FILE_MIDI","Midi File");
define("_FM_AM_FILE_TEXT","Text file");
define("_FM_AM_FILE_JAVASCRIPT","Javascript");
define("_FM_AM_FILE_GIFPICTURE","GIF picture");
define("_FM_AM_FILE_JPGPICTURE","JPG picture");
define("_FM_AM_FILE_HTMLPAGE","HTML page");
define("_FM_AM_FILE_REAL","REALfile");
define("_FM_AM_FILE_PERLSCRIPT","PERL script");
define("_FM_AM_FILE_ZIP","ZIP file");
define("_FM_AM_FILE_WAV","WAV file");
define("_FM_AM_FILE_PHPSCRIPT","PHP script");
define("_FM_AM_FILE_BMPPICTURE","BMP picture");
define("_FM_AM_FILE_PNGPICTURE","PNG picture");
define("_FM_AM_FILE_CSS","CSS File");
define("_FM_AM_FILE_MP3","MP3File");
define("_FM_AM_FILE_RAR","RAR File");
define("_FM_AM_FILE_GZ","GZ File");
define("_FM_AM_FILE_PDF","PDF File");
define("_FM_AM_FILE_MOV","MOV File");
define("_FM_AM_FILE_AVI","AVI File");
define("_FM_AM_FILE_MPG","MPG File");
define("_FM_AM_FILE_MPEG","MPEG File");
define("_FM_AM_FILE_XLS","XLS File");
define("_FM_AM_FILE_WORD","Word File");
define("_FM_AM_FILE_FLASH","FLASH File");
define("_FM_AM_FILE_EXE","Exe file");
define("_FM_AM_READ_ONLY","Read only");
define("_FM_AM_PERMISSION","Permission");

// IndexScan
define("_AM_INDEXSCAN_NOW","Scan for missing index files");
define("_AM_INDEXSCAN_CREATE","Create index files where missing");
define("_AM_INDEXSCAN_HELP","Help");
define("_AM_INDEXSCAN_CONFIG","Config");
define("_AM_INDEXSCAN_HEADER","These folders are missing index files");
define("_AM_INDEXSCAN_NOTFOUND","Index files <b>not</b> found<br>\n");
define("_AM_INDEXSCAN_FOUNDMISSING","<b>missing</b> index files found\n");
define("_AM_INDEXSCAN_MAKINGHEADER","Creating missing index.html files");
define("_AM_INDEXSCAN_CREATED","index.html created");
define("_AM_INDEXSCAN_CREATEDINDEXFILES","indexfiler created");
define("_AM_INDEXSCAN_CHECKFORFILES","<tr class='header'><center><h2>Checking files for IFRAME Infection</h2></tr></center><center><small>Not that not all uses of Ifram is injections.<br>Check the code in the files found before you delete.<br><hr></small></center>");
define("_AM_INDEXSCAN_UNABLETOREADFILE","Unable to open file ");
define("_AM_INDEXSCAN_INFECTED"," found!!");
define("_AM_INDEXSCAN_CLEAN","OK");
define("_AM_INDEXSCAN_INJECTIONSCAN","Scan for ifram injections");
define("_AM_INDEXSCAN_SCANNING4MISS","<br>Looking for missin index files.<br>Please wait.");
define("_AM_INDEXSCAN_CREATINGMISS","<br>Creating missing index files.<br>Please wait.");
define("_AM_INDEXSCAN_SCANNING4IFRAME","<br>Looking for iframes and encoded javascript.<br>Please wait.");
define("_AM_INDEXSCAN_FINISDINJECTIONS"," files contain the word *iframe* or *fromCharCode* indicating ifram insert or encoded javascript <br> Check to see if this is the case by clicking the red bar to see source code. Before taking any action.<br><br> Total number of files scanned:");
define("_AM_INDEXSCAN_NOTVERIFY"," : The Checksum of this file is different from original!");
define("_AM_INDEXSCAN_VERIFIED"," Checksum for admin/index.php is verified.");
define("_AM_INDEXSCAN_CHECKILLEGALFILES","Check files");
define("_AM_INDEXSCAN_SCANNING4ILLEGALFILES","Scanning web files");
define("_AM_INDEXSCAN_MAYBEOK","Looks to be ok");
define("_AM_INDEXSCAN_NOTINXOOPSINSTALL","Not Xoops file");
define("_AM_INDEXSCAN_FINISDILLEGAL"," files found that are not Xoops files. Total files scanned: ");
define("_AM_INDEXSCAN_ILLEGAL_DESC","The file found Not to be Xoops files, are checked against checkfile.txt in admin folder, and agains files in config defined as allowed file types.<br/>These files could be unwanted tmp, thumbs.db, or info files.<br/>If you you dont need these files add them to automaticly delete in config and they will be deleted when you run this scan next time.");
define("_AM_INDEXSCAN_REALLYDELETE","Are you sure ?, delete file.: ");
define("_AM_INDEXSCAN_CREATEZIP","Create zip file for download");
define("_AM_INDEXSCAN_CREATINGZIP","Creating backup with empty folders<br/>plus index files.<br/>");
define("_AM_INDEXSCAN_BACKEDUPDELETEDFROMBACKUP","Deleted files in folder from backup except index.html files");
define("_AM_INDEXSCAN_BACKEDUP2","Backed up folder.: ");
define("_AM_INDEXSCAN_DOWNLOADZIP","Download index files zip");
define("_AM_INDEXSCAN_CREATINGZIPFORDOWNLOAD","Creating zip file for download");
define("_AM_INDEXSCAN_CREATEDINDEXINBACKUP","Created index file in backup folder");
define("_AM_INDEXSCAN_CLEANUPDONE","Cleaning up...Done!");
define("_AM_INDEXSCAN_FILESARECOPIED"," Files were copied to backup folder");
define("_AM_INDEXSCAN_FILESDELETED"," Files were deleted from backup folder again");
define("_AM_INDEXSCAN_FILESCREATED"," Index.html files were created in backupfolder");

//Startup
define("_AM_STARTUP_ENABLE_ON","Enable");
define("_AM_STARTUP_ENABLE_OFF","Disable");
define("_AM_STARTUP_ENABLE","Please refresh the page.");
define('_AM_STARTUP_DELETE', 'Uninstall');
define('_AM_STARTUP_ADD', 'Add');
define('_AM_STARTUP_FORM_DESCRIPTION_1', 'After installing, enabling the module, you must set the "Printliminator" module in the XOOPS settings as the default start page module.<br />Then you need to go to the module settings/installation and hide the module in the menu.');
define('_AM_STARTUP_FORM_DESCRIPTION_2', 'Here you can define the startup module for each group, set the order to determine which module has priority if the user is in more than one group.');
define('_AM_STARTUP_FORM_GROUP_SELECT', 'Select a group or several groups');
define('_AM_STARTUP_FORM_MODULE_SELECT', 'Select a startup module for group');
define('_AM_STARTUP_FORM_GROUP_NAME', 'Group name');
define('_AM_STARTUP_FORM_MODULE_NAME', 'Module name');
define('_AM_STARTUP_FORM_ORDER', 'Set the priority for groups');
define('_AM_STARTUP_FORM_ACTION', 'Action');
define('_AM_STARTUP_ORDER_UPDATE', 'Update priority');
define('_AM_STARTUP_SUCCESS_SAVE', 'Operation saved');
define('_AM_STARTUP_ERROR_FAILURE_SAVE', 'Error while saving. Operation canceled.');
define('_AM_STARTUP_ERROR_FAILURE_DELETE', 'Error while deleting. Operation canceled.');