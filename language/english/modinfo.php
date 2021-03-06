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
define('_MI_PRINTLIMINATOR_CAT3','<font color="#0040FF" size="6"><b>--- Xoops Info ---</b></font> ');

// The name of this module
define("_MI_PRINTLIMINATOR_NAME" , "Printliminator");

// A brief description of this module
define("_MI_PRINTLIMINATOR_DESC" , "Printliminator XOOPS Service Module");

// Admin menu links
define("_MI_PRINTLIMINATOR_MANAGER_INDEX" , "Index");
define("_MI_PRINTLIMINATOR_MANAGER_INDEX_DESC" , "Module Administration index page");
define("_MI_PRINTLIMINATOR_MANAGER_ABOUT" , "About");
define("_MI_PRINTLIMINATOR_MANAGER_ABOUT_DESC" , "About this module");
define("_MI_PRINTLIMINATOR_MANAGER_HELP" , "Help");
define("_MI_PRINTLIMINATOR_MANAGER_HELP_DESC" , "Help pour module usage");
define("_MI_PRINTLIMINATOR_MANAGER_QRCODE_DIV_DESC" , "Share this page");
//define("_MI_PRINTLIMINATOR_MANAGER_QRCODE_DIV_DESC" , "QR Code DIV");
define("_MI_PRINTLIMINATOR_SHARE42_DIV_DESC" , "Share this page DIV");

// Blocks
define("_MI_PRINTLIMINATOR_BLOCK_PRINT" , "Printliminator");
define("_MI_PRINTLIMINATOR_BLOCK_PRINT_DESC" , "Printliminator");
define("_MI_PRINTLIMINATOR_BLOCK_QRCODE" , "QR Code");
define("_MI_PRINTLIMINATOR_BLOCK_QRCODE_DESC" , "QR Code");
define("_MI_PRINTLIMINATOR_BLOCK_QRCODE_DIV" , "Share this page");
//define("_MI_PRINTLIMINATOR_BLOCK_QRCODE_DIV" , "QR Code DIV");
define("_MI_PRINTLIMINATOR_BLOCK_QRCODE_DESC_DIV" , "The 'QR Code' block with the possibility of free placement");

//FileManager
define("_MI_PRINTLIMINATOR_FILE_MANAGER" , "FileManager");
define("_MI_PRINTLIMINATOR_FILE_MANAGER_DESC" , "FileManager for Xoops");
define("_MI_PRINTLIMINATOR_FILE_MANAGER_HELP" , "Filemanager Help");
define("_MI_PRINTLIMINATOR_FILE_MANAGER_DESC_HELP" , "Help to FileManager for Xoops");
define("_MI_PRINTLIMINATOR_FILE_MANAGER_EDITOR","Code Editor");
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
define("_MI_INDEXSCAN_FROMBACKUP","Create file zip");
define("_MI_INDEXSCAN_FROMBACKUP_DESC","Creates a zip archieve with same folder structure from the folder you ftp to folder2backup.<br/>The zip contains nothing but the folders and,<br/>index.html files where missing from<br/>your uploaded folder.<br/><br/>The folder name is the name of the folder in your folder2backup folder, for instance 'testing'.<br/>You can delete 'testing' this folder is only for example.");

//Startup
define("_MI_PRINTLIMINATOR_STARTUP_MANAGER","Startup");
define('_MI_STARTUP_CAT_STARTUP_NAME', '<h3>Set the start page</h3>');

//XoopsInfo
define("_MI_XOOPSINFO_MAIN","XoopsInfo");
define("_MI_XI_CHECK_TABLE","Tables to be controlled");
define("_MI_XI_CHECK_TABLE_DSC","Separate the tables name by <font color='#CC0000'><b>|</b></font>");
define("_MI_XI_REFERER", "Referers authorized for <font color='#CC0000'>xoopsinfo.php</font>");
define("_MI_XI_REFERER_DSC", "separated by <font color='#CC0000'><b>|</b></font>");
define("_MI_XOOPSINFO_SERVER_MAIN","Server");
define("_MI_XOOPSINFO_MYSQL_MAIN","MySQL");
define("_MI_XOOPSINFO_MODULES_MAIN","Modules");
define("_MI_XOOPSINFO_EDITORS_MAIN","Editors");


//Help
define('_MI_PRINTLIMINATOR_DIRNAME', basename(dirname(dirname(__DIR__))));
define('_MI_PRINTLIMINATOR_HELP_HEADER', __DIR__.'/help/helpheader.tpl');
define('_MI_PRINTLIMINATOR_BACK_2_ADMIN', 'Back to Administration of ');
define('_MI_PRINTLIMINATOR_OVERVIEW', 'Overview');

//define('_MI_PRINTLIMINATOR_HELP_DIR', __DIR__);

//help multi-page
define('_MI_PRINTLIMINATOR_DISCLAIMER', 'Disclaimer');
define('_MI_PRINTLIMINATOR_LICENSE', 'License');
define('_MI_PRINTLIMINATOR_SUPPORT', 'Support');

define('_MI_PRINTLIMINATOR_PRINTLIMINATOR', 'PrintLiminator');
define('_MI_PRINTLIMINATOR_QRCODE', 'QRCode');
define('_MI_PRINTLIMINATOR_SHARE42', 'Share42');
define('_MI_PRINTLIMINATOR_XOOPSINFO', 'XoopsInfo');

//===========================================
define("_AM_PRINTLIMINATOR_HELP1" , "--<a href='#printer'>The Printliminator</a>-- & --<a href='#qrcode'>QR Code</a>-- & --<a href='#filemanager'>File Manager</a>-- & --<a href='#indexscan'>Index Scan</a>-- & --<a href='#share42'>Share42</a>-- & --<a href='#xoopsinfo'>XoopsInfo</a>--");
define("_AM_PRINTLIMINATOR_HELP2" , "<div id='printer'></div><a target='_blank' href='https://css-tricks.github.io/The-Printliminator/'><img src='" . XOOPS_URL . "/modules/printliminator/assets/images/web-store-tile.png'></a>");
define("_AM_PRINTLIMINATOR_HELP3" , "<img src='" . XOOPS_URL . "/modules/printliminator/assets/images/screenshot.png'>");
define("_AM_PRINTLIMINATOR_HELP4" , "<h4>Others documentations</h4>");
define("_AM_PRINTLIMINATOR_HELP5" , "
<h3>XOOPS Projet Documentation</h3>
<ul>
	<li><a class='tooltip' rel='external' href='http://xoops.org/modules/mediawiki/index.php/Module_Development_Guide' title='XOOPS Module Development Guide'>XOOP Wiki</a></li>
	<li><a class='tooltip' rel='external' href='http://dev.xoops.org/' title='XOOPS Module Dev Forge'>XOOPS Module Dev Forge</a></li>
	<li><a class='tooltip' rel='external' href='http://sourceforge.net/projects/xoops/files/XOOPS%20Documentation_Development/XOOPS_ModuleDevelopmentGuide/' title='XOOPS Doc Repository on SourceForge'>XOOPS Docs on SourceForge</a></li>
	<li><a class='tooltip' rel='external' href='http://xoops.svn.sourceforge.net/viewvc/xoops/XOOPS_Coding_Standards.html?revision=2554' title='XOOPS Coding Standards'>XOOPS XOOPS Coding Standards</a></li>
</ul>
");
define("_AM_PRINTLIMINATOR_HELP6" , "");
define("_AM_PRINTLIMINATOR_HELP7" , "
<h3>Development Documentation</h3>
<ul>
	<li><a class='tooltip' rel='external' href='http://php.net/docs.php' title='PHP Manual'>PHP</a></li>
	<li><a class='tooltip' rel='external' href='http://dev.mysql.com/doc/refman/5.0/fr/index.html' title='MySQL Manual'>MySQL</a></li>
	<li><a class='tooltip' rel='external' href='http://www.smarty.net/documentation' title='Smarty Documentation'>Smarty</a></li>
	<li><a class='tooltip' rel='external' href='http://www.w3.org/TR/html4/' title='Html W3C Standards'>Html</a></li>
	<li><a class='tooltip' rel='external' href='http://www.w3.org/Style/CSS/' title='Css W3C Standards'>Css</a></li>
	<li><a class='tooltip' rel='external' href='http://docs.jquery.com/Main_Page' title='jQuery Documentation'>jQuery</a></li>
</ul>
");
define("_AM_PRINTLIMINATOR_HELP8" , '<div id="qrcode"></div><h2>OR Code</h2>To place the QR code in the template, you must copy the code <{includeq file="db:printliminator_qrcode_div_in.tpl"}> and paste it into the required place in the template. The size of the QR code image can be changed in the template /modules/printliminator/templates/printliminator_qrcode_div_in.tpl by changing the parameter s=2 in the range from 1 to 4.');
define("_AM_PRINTLIMINATOR_HELP9" , "<h3>Additionally</h3>");
define("_AM_PRINTLIMINATOR_HELP10" , "<h3><br /><hr /><br />Scripts used:</h3>");
define("_AM_PRINTLIMINATOR_HELP11" , "
<ul>
<li><a target='_blank' href='https://css-tricks.github.io/The-Printliminator/'>The Printliminator</a></li>
<li><a target='_blank' href='http://www.swetake.com/'>QR Code</a></li>
<li><a target='_blank' href='http://luciorota.altervista.org/xoops/'>File Manager</a></li>
<li><a target='_blank' href='http://www.culex.dk/'>IndexScan</a></li>
<li><a target='_blank' href='http://share42.com/'>Share42</a></li>
<li><a target='_blank' href='http://xoops.org/modules/repository/singlefile.php?cid=101&lid=1906'>TS-My Startup Page</a></li>
<li><a target='_blank' href='http://xoops.org/modules/news/article.php?storyid=6770'>XoopsInfo</a></li>
</ul>
");
define("_AM_PRINTLIMINATOR_HELP12" , '<h2>Share this page</h2>To place the "Share this page" icons in the floating block, you must place the themes in the template <{includeq file="db:printliminator_share42_div_in.tpl"}>. Placement of icons can be set in the template /modules/printliminator/templates/printliminator_share42_div_in.tpl changing the parameters data-top1="150" data-top2="20" data-margin="0".<br /><b>Note!</b> For operation, it is necessary to disable the unit in block administration (if enabled).');

//FileManager
define("_AM_PRINTLIMINATOR_HELP_FM_1" , "<div id='filemanager'></div>Help to FileManager");
define("_AM_PRINTLIMINATOR_HELP_FM_2" , "<h2>Interface</h2>");
define("_AM_PRINTLIMINATOR_HELP_FM_3" , "<p>To the upper left corner, the current path is written.<br />For example, you can see: 
<img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/folder.png' style='vertical-align:middle; height:20px width:20px' />toto/aaaa/dfg.<br />This inform you where you are.<br />In that example, the current directory listed is 'dfg'.<br />To go back to a parent directory, click on its name. </p><img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/refresh.png' style='vertical-align:middle; height:20px width:20px' /> To reload and refresh the page, click on that icon. <br /><p><img src='" . XOOPS_URL . "/modules/printliminator/assets/images/admin/actions/help.png' style='vertical-align:middle; height:20px width:20px' /> This pictures is a link to this help document. </p><img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/disconnect.png' style='vertical-align:middle; height:20px width:20px' /> If you want to log out, click on this. Your session will be droped and you will be redirected to the default page.");
define("_AM_PRINTLIMINATOR_HELP_FM_4" , "<h2>Files list</h2>");
define("_AM_PRINTLIMINATOR_HELP_FM_5" , "<h3>Sorting</h3><p>In the first table line, you can see 'Filename, Size...' By clicking on those, you order the listing. Click again and you will reverse the order. </p><p>Into the 'Filename' column, files and directories are listed. To go into the parent directory, click on this icon <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/parent.png' style='vertical-align:middle; height:20px width:20px' />. By clicking on a directory, <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/folder.png' style='vertical-align:middle; height:20px width:20px' /> you will display his files. By clicking on a file, you will display it or you will download it. That depends of the file extension. When a file is displayed in your browser, click on the 'Previous' button to go back. </p><h3>Copy <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/copy.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>This icon allows you to copy a file into another directory. To copy it, you will have to select the destination directory and click on 'OK'. You can cancel anywhere. <br></p><h3>Move <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/move.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>This icon allows you to move a file into another directory. The method is the same as the copy function but the original file will be deleted after the copy. <br></p><h3>Rename <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/rename.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>This icon allows you to rename a file or a directory. You just have to type the full name into the text zone and to click on 'Rename'. To return to the listing, click on 'Go back'. <br></p><h3>Delete <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/delete.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>To delete a file, click on this icon. A confirmation message will be asked before deleting. <br></p><h3>Edit <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/edit.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>To modify a text file (HTML, TXT...) click on this icon. The file will be editable into a text area. To save the file, click on the button 'Save'. To return to the listing, click on 'Cancel'.");
define("_AM_PRINTLIMINATOR_HELP_FM_6" , "<h2>Operations</h2>");
define("_AM_PRINTLIMINATOR_HELP_FM_7" , "<h3>Upload <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/upload.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Upload a file To upload a file from your computer, click on the 'Browse...' button and select a file. Then click on 'Upload'... and 'please wait...'. Big files are not welcome. Carriage returns at the end of ASCII files will be replaced by \n. <br></p><h3>Create a directory <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/folder.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Into the texte zone, write a directory name. It must'nt contain special chars such as spaces, accents or other. In that cas, those will be removed. Click on 'Create' to create the directory. <br></p><h3>Create a new file <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/defaut.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>You can create new files such as CGI, TXT, HTM, HTML... (and you will be able to edit them after creating). Write a correct file name and click on 'Create' and it will be created into the current path. If the extension is HTM or HTML, a template will be created.");

//IndexScan
define("_AM_PRINTLIMINATOR_HELP_IS_1" , "<div id='indexscan'></div>Help to IndexScan <span style='color:red;'>Big load on the server when scanning!!!</span>");
define("_AM_PRINTLIMINATOR_HELP_IS_2" , "<h3>Why use index.html files ?</h3><br />Unless the webmaster disallows casual folder browsing on the web server, most of the contents of each folder can be listed in a browser pointing to that Internet address. This concept is easily demonstrable by typing most any website address into the address bar of an Internet browser and simply adding a forward-slash and this folder name to the address:<br />images<br />If the images folder of the website navigated to is not protected, a listing of all the files in the folder will be displayed. Any of the files in the resulting display may be right-clicked on and the 'save as' option taken in order to save that file to a hard drive. In most cases websites will have an images folder, and this folder will not ususually be protected from casual browsing. If so, the entire contents of the images folder will be accessible to the public at large.<br />Depending upon file types, the files in an unprotected web folder may or may not be accessible; .php, .asp, and .aspx files are not accessible although .gif, .jpg, .bmp, .png, and other image files are fully accessible. Additionally, without folder protection in place, a hacker can make use of configuration files as well, such as config.inc and that could be where the websites database connection strings are held! Therefore, the database itself could become compromised.<br /><br /><b>Source:Easy Website Security</b>");
define("_AM_PRINTLIMINATOR_HELP_IS_3" , "This is a small module to scan your server folders for missing index.html files. If missing you can create.<br />The module obviously does not have a place in the frontpage main menu, but can only be accessed through administration as admin.<br />The module is testet with FF, Opera, and IE8 and checks out fine with all.<br />Should you discover any errors or is it not operating as intented please send email to <a mailto='culex@culex.dk'>culex@culex.dk</a>.");
define("_AM_PRINTLIMINATOR_HELP_IS_4" , "The modules scans your webfolders for missing index.html files. It skips folders where there are already indexfiles (index.php, index.html, index.html). If you find folders without you can automaticly create these by pressing 'create index files'.<br /><br />The module looks through the txt in your index.php, index.html, index.htm, mainfile.php, headers and footers for the words iframe or fromCharCode wich is commonly used in coded javascript inserts.<br /><br />Should it find some occurencies of these words you can yourself check the source code by clicking the red bar emmerging at the line for the file. Do not check the files just because the module finds these words in your pages. Not all uses of iframe and javascript is equal to damaging code and therefor better to check and if in doubt ask for help about what to do with these files.<br /><br />The module can scan your webfolders to show in a list. Any file not proving according to a filecheck and filter set in config is show as 'Not Xoops File' and can be deleted on the fly using ajax + jquery.<br /><br />It creates a backup from your files using only the folder structure and existing index files. Where missing index files it will create new and offer this folder as zipped download.<br /><br /><b>/culex</b>");
define("_AM_PRINTLIMINATOR_HELP_IS_5" , "<a target='_blank' href='https://defuse.ca/checksums.htm'>CheckSum</a>");
define("_AM_PRINTLIMINATOR_HELP_IS_6" , "To create filecheck.txt, take the file <a href='../docs/md5.rar'>docs/md5.rar</a>, extract it to the root of the site and run it. The file filecheck.txt will be created at the root. Check it and if necessary remove './' at the beginning of the line. Then copy it to /modules/printliminator/admin with the old file replaced.<br><strong style='color:red;'>Attention:</strong> After using the script, do not forget to delete the script md5.php and file filecheck.txt from the root directory of your site!");

//Share42
define("_AM_PRINTLIMINATOR_HELP_SHARE42_1" , "<div id='share42'></div>Share42");
define("_AM_PRINTLIMINATOR_HELP_SHARE42_2" , "Parameters change in the template /modules/printliminator/templates/printliminator_share42_div_in.tpl end /modules/printliminator/templates/blocks/printliminator_qrcode_div.tpl");
define("_AM_PRINTLIMINATOR_HELP_SHARE42_3" , "<h2>The parameters you can specify</h2>");
define("_AM_PRINTLIMINATOR_HELP_SHARE42_4" , "
<div style='width:20%;float:left;background-color:#cccccc;'>Parameter</div><div style='width:30%;float:left;background-color:#cccccc;'>Description</div><div style='width:50%;float:left;background-color:#cccccc;'>Example of usage</div><br />
<div style='width:20%;float:left;'>data-url</div><div style='width:30%;float:left;'>link to a page</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-url='http://site.name/page-title/'&gt;</div><br />
<div style='width:20%;float:left;'>data-title</div><div style='width:30%;float:left;'>title of a page</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-title='Page Title'&gt;</div><br />
<div style='width:20%;float:left;'>data-image</div><div style='width:30%;float:left;'>link to an image<br /><i>data-image parameter does not work for Facebook. Wherefore add the following tag inside the &lt;head&gt; tag on your website:<br />&lt;meta property='og:image' content='http://site.name/image.jpg' /&gt;</i></div><div style='width:50%;float:left;'>&lt;div class='share42init' data-image='http://site.name/image.jpg'&gt;</div><br />
<div style='width:20%;float:left;'>data-description</div><div style='width:30%;float:left;'>description of a page</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-description='Page description'&gt;</div><br />
<div style='width:20%;float:left;'>data-path</div><div style='width:30%;float:left;'>path to a folder containing icons.png file</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-path='http://site.name/share42/'&gt;</div><br />
<div style='width:20%;float:left;'>data-icons-file</div><div style='width:30%;float:left;'>name of the file with icons</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-icons-file='my-icons.png'&gt;</div><br />
<div style='width:20%;float:left;'>data-zero-counter</div><div style='width:30%;float:left;'>1 - show the zero counter, 0 - don't show the zero counter</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-zero-counter='1'&gt;</div><br />
");
define("_AM_PRINTLIMINATOR_HELP_SHARE42_5" , "<h2>The parameters for the vertical panel</h2>");
define("_AM_PRINTLIMINATOR_HELP_SHARE42_6" , "
<div style='width:20%;float:left;background-color:#cccccc;'>Parameter</div><div style='width:30%;float:left;background-color:#cccccc;'>Description</div><div style='width:50%;float:left;background-color:#cccccc;'>Example of usage</div><br />
<div style='width:20%;float:left;'>data-top1</div><div style='width:30%;float:left;'>distance from the top of the page to the panel, in pixels</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-top1='150'&gt;</div><br />
<div style='width:20%;float:left;'>data-top2</div><div style='width:30%;float:left;'>distance from the top of the visible area of ​​the page to the panel, in pixels</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-top2='20'&gt;</div><br />
<div style='width:20%;float:left;'>data-margin</div><div style='width:30%;float:left;'>horizontal displacement of the panel, in pixels (negative value - to the left, positive value - to the right)</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-margin='-70'&gt;</div><br />
");

//XoopsInfo
define("_AM_PRINTLIMINATOR_HELP_XOOPSINFO_1" , "<div id='xoopsinfo'></div>XoopsInfo");
define("_AM_PRINTLIMINATOR_HELP_XOOPSINFO_2" , "<h2>Please read before posting a support request at <a href='http://xoops.org/' target='_blank'>xoops.org</a></h2><p>Before posting please do a search on Xoops.org using the site's <a href='http://xoops.org/search.php' target='_blank'>Search feature</a> with appropriate 'keywords' and find out if the subject has been dealt with before. Also look through the <a href='http://xoops.org/modules/smartfaq/'' target='_blank'>FAQ’s</a>, especially if you're unsure what search words to use.</p><p><b>Q:</b> I couldn’t find any related issues by searching what next?<br /><br /><b>A:</b> Please use an effective title for the post; this assists other users to answer you who have had a similar problem. Many users will not be attracted to a 'please help me I have a problem' title. A relevant title also helps other users find solutions to their problems.<br /><br />Posts like 'I have a blank page' will generally be ignored. Not because we don’t want to help, but because we can’t with such a small amount of information.<br /><br />The best way to start your request for support is to use a clear, descriptive title and to explain the problems you are having in as much detail as possible. If you are having problems with a module and/or theme, be sure to list the name and version of the module and/or theme.</p>");
define("_AM_PRINTLIMINATOR_HELP_XOOPSINFO_3" , "<br /><p><b><i>The following information will be useful for people who are trying to assist you. Please make sure to include it in your post.</i></b></p><br />");
define("_AM_PRINTLIMINATOR_HELP_XOOPSINFO_4" , "<br /><p><b>Turn on debug:</b><br />To switch on debug, go to system admin-->preferences and then general settings. You will see a 'Debug mode' field. Choose 'PHP Debug'. Then go to the page that has problems and copy and paste any error messages under php-debug messages in the template below. Do this for each debug type (PHP, MySQL, Smarty).<br /><br />PHP Debug Messages:<br />MySQL Debug Messages:<br />Smarty Debug Messages:<br /></p><br /><p><b><i>The following template should serve as a solid guideline for how to request support.</i></b></p><br />");
define("_AM_PRINTLIMINATOR_HELP_XOOPSINFO_5" , "<p>Title: Clear and descriptive title <br /><br />Description: A detailed description of the problem you are having. Please include as much information as possible regarding what you were doing right before the problem happened and any steps you have taken to resolve the problem. <br /><br />Make sure you include as much of the following technical information as possible in your post. Without this information it will be very difficult to provide support for you. <br /><br />Website URL:<br />XOOPS Version:<br />Theme you are using:<br />Template Set you are using:<br />Module Name and Version:<br />PHP Version:<br />MySQL Version:<br />Server Software:<br />Operating System:<br />Browser Information<br />PHP Debug Messages:<br />MySQL Debug Messages:<br />Smarty Debug Messages:<br /></p>");
define("_AM_PRINTLIMINATOR_HELP_XOOPSINFO_6" , "<br /><p><b><i>XOOPS Info File version 1.21</i></b><br />Last Updated: 26.06.2017<br />By: XOOPS Support Team</p>");
