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
define("_AM_PRINTLIMINATOR_HELP4" , "<h4>Другие документы</h4>");
define("_AM_PRINTLIMINATOR_HELP5" , "
<h3>XOOPS проектная документация</h3>
<ul>
	<li><a class='tooltip' rel='external' href='http://xoops.org/modules/mediawiki/index.php/Module_Development_Guide' title='XOOPS Module Development Guide'>XOOP Wiki</a></li>
	<li><a class='tooltip' rel='external' href='http://dev.xoops.org/' title='XOOPS Module Dev Forge'>XOOPS Module Dev Forge</a></li>
	<li><a class='tooltip' rel='external' href='http://sourceforge.net/projects/xoops/files/XOOPS%20Documentation_Development/XOOPS_ModuleDevelopmentGuide/' title='XOOPS Doc Repository on SourceForge'>XOOPS Docs on SourceForge</a></li>
	<li><a class='tooltip' rel='external' href='http://xoops.svn.sourceforge.net/viewvc/xoops/XOOPS_Coding_Standards.html?revision=2554' title='XOOPS Coding Standards'>XOOPS XOOPS Coding Standards</a></li>
</ul>
");
define("_AM_PRINTLIMINATOR_HELP6" , "");
define("_AM_PRINTLIMINATOR_HELP7" , "
<h3>Документация разработчика</h3>
<ul>
	<li><a class='tooltip' rel='external' href='http://php.net/docs.php' title='PHP Manual'>PHP</a></li>
	<li><a class='tooltip' rel='external' href='http://dev.mysql.com/doc/refman/5.0/fr/index.html' title='MySQL Manual'>MySQL</a></li>
	<li><a class='tooltip' rel='external' href='http://www.smarty.net/documentation' title='Smarty Documentation'>Smarty</a></li>
	<li><a class='tooltip' rel='external' href='http://www.w3.org/TR/html4/' title='Html W3C Standards'>Html</a></li>
	<li><a class='tooltip' rel='external' href='http://www.w3.org/Style/CSS/' title='Css W3C Standards'>Css</a></li>
	<li><a class='tooltip' rel='external' href='http://docs.jquery.com/Main_Page' title='jQuery Documentation'>jQuery</a></li>
</ul>
");
define("_AM_PRINTLIMINATOR_HELP8" , 'Для размещения QR кода в шаблоне необходимо скопировать код <{includeq file="db:printliminator_qrcode_div_in.tpl"}> и вставить его в необходимое место в шаблоне. Размер картинки QR кода можно в шаблоне /modules/printliminator/templates/printliminator_qrcode_div_in.tpl изменить параметр s=2 в диапазоне от 1 до 4.<br /><hr /><br />');
define("_AM_PRINTLIMINATOR_HELP9" , "<h3>Дополнительно</h3>"); 

//FileManager
define("_AM_PRINTLIMINATOR_HELP_FM_1" , "Помощь по FileManager");
define("_AM_PRINTLIMINATOR_HELP_FM_2" , "<h2>Интерфейс</h2>");
define("_AM_PRINTLIMINATOR_HELP_FM_3" , "<p>В верхнем левом углу показан текущий путь.<br />Например, Вы можете видеть: <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/folder.png' style='vertical-align:middle; height:20px width:20px' />toto/aaaa/dfg.<br />Это сообщит Вам, где вы находитесь.<br />В этом примере указана текущая директория 'dfg'.<br />Чтобы вернуться в родительский каталог, щелкните его имя.</p><img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/refresh.png' style='vertical-align:middle; height:20px width:20px' /> Чтобы перезагрузить и обновить страницу, нажмите на эту иконку.<br /><p><img src='" . XOOPS_URL . "/modules/printliminator/assets/images/admin/actions/help.png' style='vertical-align:middle; height:20px width:20px' /> Эта иконка является ссылкой на этот документ.</p><img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/disconnect.png' style='vertical-align:middle; height:20px width:20px' /> Если вы хотите выйти из системы, нажмите на нее. Ваш сеанс будет удален, и вы будете перенаправлены на страницу по умолчанию.");
define("_AM_PRINTLIMINATOR_HELP_FM_4" , "<h2>Список файлов</h2>");
define("_AM_PRINTLIMINATOR_HELP_FM_5" , "<h3>Сортировка</h3><p>В первой строке таблицы вы можете увидеть 'Имя файла, Размер ...'. Нажимая на них, Вы увидите список. Нажмите еще раз, и Вы измените порядок. </p><p>В столбце 'Имя файла' перечислены файлы и каталоги. Чтобы перейти в родительский каталог, нажмите на этот значок <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/parent.png' style='vertical-align:middle; height:20px width:20px' />.<br />Нажимая на каталог, <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/folder.png' style='vertical-align:middle; height:20px width:20px' /> Вы увидите его файлы. Нажав на файл, Вы откроете его или Вы его загрузите. Это зависит от расширения файла. Когда просматриваете файл в Вашем браузере, нажмите кнопку 'Предыдущий', чтобы вернуться.</p><h3>Копия <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/copy.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Этот значок позволяет скопировать файл в другой каталог. Чтобы скопировать его, Вам нужно будет выбрать целевой каталог и нажать 'Ok'. Вы можете отменить в любом месте.<br></p><h3>Переместить <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/move.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Этот значок позволяет переместить файл в другой каталог. Метод такой же, как и функция копирования, но исходный файл будет удален после копирования.<br></p><h3>Переименовывать <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/rename.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Этот значок позволяет Вам переименовать файл или каталог. Вам просто нужно ввести полное имя в текстовую зону и нажать 'Переименовать'. Чтобы вернуться к списку, нажмите 'Вернуться назад'.<br></p><h3>Удалить <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/delete.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Чтобы удалить файл, нажмите на этот значок. Перед удалением будет запрошено подтверждение.<br></p><h3>Редактировать <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/edit.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Чтобы изменить текстовый файл (HTML, TXT...) нажмите на этот значок. Файл будет редактироваться в текстовой области. Чтобы сохранить файл, нажмите кнопку 'Сохранить'. Чтобы вернуться к списку, нажмите 'Отмена'.");
define("_AM_PRINTLIMINATOR_HELP_FM_6" , "<h2>Операции</h2>");
define("_AM_PRINTLIMINATOR_HELP_FM_7" , "<h3>Загрузить <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/upload.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Загрузка файла. Чтобы загрузить файл со своего компьютера, нажмите кнопку 'Обзор ...' и выберите файл. Затем нажмите 'Загрузить' ... и 'пожалуйста, подождите ...'. Большие файлы не приветствуются. Возврат каретки в конце файлов ASCII будет заменен на \п. <br></p><h3>Создать каталог <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/folder.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>В текстоваое поле напишите имя каталога. Он не должен содержать специальные символы, такие как пробелы, акценты или другое. В другом случае они будут удалены. Нажмите 'Создать', чтобы создать каталог.<br></p><h3>Создать новый файл <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/defaut.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Вы можете создавать новые файлы, такие как CGI, TXT, HTM, HTML... (и Вы сможете редактировать их после создания). Напишите правильное имя файла и нажмите 'Создать', и он будет создан в текущем пути. Если расширение HTM или HTML, будет создан шаблон.");
