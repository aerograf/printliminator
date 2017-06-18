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

define("_AM_PRINTLIMINATOR_HELP1" , "");
define("_AM_PRINTLIMINATOR_HELP2" , "<a target='_blank' href='https://css-tricks.github.io/The-Printliminator/'><img src='../assets/images/web-store-tile.png'></a>");
define("_AM_PRINTLIMINATOR_HELP3" , "<img src='../assets/images/screenshot.png'>");
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
define("_AM_PRINTLIMINATOR_HELP8" , 'To place the QR code in the template, you must copy the code <{includeq file="db:printliminator_qrcode_div_in.tpl"}> and paste it into the required place in the template. The size of the QR code image can be changed in the template /modules/printliminator/templates/printliminator_qrcode_div_in.tpl by changing the parameter s=2 in the range from 1 to 4.<br /><hr /><br />');
define("_AM_PRINTLIMINATOR_HELP9" , "<h3>Additionally</h3>");

//FileManager
define("_AM_PRINTLIMINATOR_HELP_FM_1" , "Help to FileManager");
define("_AM_PRINTLIMINATOR_HELP_FM_2" , "<h2>Interface</h2>");
define("_AM_PRINTLIMINATOR_HELP_FM_3" , "<p>To the upper left corner, the current path is written.<br />For example, you can see: 
<img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/folder.png' style='vertical-align:middle; height:20px width:20px' />toto/aaaa/dfg.<br />This inform you where you are.<br />In that example, the current directory listed is 'dfg'.<br />To go back to a parent directory, click on its name. </p><img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/refresh.png' style='vertical-align:middle; height:20px width:20px' /> To reload and refresh the page, click on that icon. <br /><p><img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/help.png' style='vertical-align:middle; height:20px width:20px' /> This pictures is a link to this help document. </p><img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/disconnect.png' style='vertical-align:middle; height:20px width:20px' /> If you want to log out, click on this. Your session will be droped and you will be redirected to the default page.");
define("_AM_PRINTLIMINATOR_HELP_FM_4" , "<h2>Files list</h2>");
define("_AM_PRINTLIMINATOR_HELP_FM_5" , "<h3>Sorting</h3><p>In the first table line, you can see 'Filename, Size...' By clicking on those, you order the listing. Click again and you will reverse the order. </p><p>Into the 'Filename' column, files and directories are listed. To go into the parent directory, click on this icon <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/parent.png' style='vertical-align:middle; height:20px width:20px' />. By clicking on a directory, <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/folder.png' style='vertical-align:middle; height:20px width:20px' /> you will display his files. By clicking on a file, you will display it or you will download it. That depends of the file extension. When a file is displayed in your browser, click on the 'Previous' button to go back. </p><h3>Copy <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/copy.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>This icon allows you to copy a file into another directory. To copy it, you will have to select the destination directory and click on 'OK'. You can cancel anywhere. <br></p><h3>Move <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/move.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>This icon allows you to move a file into another directory. The method is the same as the copy function but the original file will be deleted after the copy. <br></p><h3>Rename <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/rename.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>This icon allows you to rename a file or a directory. You just have to type the full name into the text zone and to click on 'Rename'. To return to the listing, click on 'Go back'. <br></p><h3>Delete <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/delete.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>To delete a file, click on this icon. A confirmation message will be asked before deleting. <br></p><h3>Edit <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/edit.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>To modify a text file (HTML, TXT...) click on this icon. The file will be editable into a text area. To save the file, click on the button 'Save'. To return to the listing, click on 'Cancel'.");
define("_AM_PRINTLIMINATOR_HELP_FM_6" , "<h2>Operations</h2>");
define("_AM_PRINTLIMINATOR_HELP_FM_7" , "<h3>Upload <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/upload.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Upload a file To upload a file from your computer, click on the 'Browse...' button and select a file. Then click on 'Upload'... and 'please wait...'. Big files are not welcome. Carriage returns at the end of ASCII files will be replaced by \n. <br></p><h3>Create a directory <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/folder.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Into the texte zone, write a directory name. It must'nt contain special chars such as spaces, accents or other. In that cas, those will be removed. Click on 'Create' to create the directory. <br></p><h3>Create a new file <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/defaut.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>You can create new files such as CGI, TXT, HTM, HTML... (and you will be able to edit them after creating). Write a correct file name and click on 'Create' and it will be created into the current path. If the extension is HTM or HTML, a template will be created.");
