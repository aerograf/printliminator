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

//XoopsInfo
define("_MI_XOOPSINFO_MAIN","XoopsInfo");
define("_MI_XI_CHECK_TABLE","Таблицы, подлежащие контролю");
define("_MI_XI_CHECK_TABLE_DSC","Разделите имена таблиц <font color='#CC0000'><b>|</b></font>");
define("_MI_XI_REFERER", "Референции, уполномоченные на <font color='#CC0000'>xoopsinfo.php</font>");
define("_MI_XI_REFERER_DSC", "Разделите имена <font color='#CC0000'><b>|</b></font>");
define("_MI_XOOPSINFO_SERVER_MAIN","Сервер");
define("_MI_XOOPSINFO_MYSQL_MAIN","MySQL");
define("_MI_XOOPSINFO_MODULES_MAIN","Модули");
define("_MI_XOOPSINFO_EDITORS_MAIN","Редакторы");

//Help
define('_MI_PRINTLIMINATOR_DIRNAME', basename(dirname(dirname(__DIR__))));
define('_MI_PRINTLIMINATOR_HELP_HEADER', __DIR__.'/help/helpheader.html');
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

define("_AM_PRINTLIMINATOR_HELP1" , "--<a href='#printer'>The Printliminator</a>-- & --<a href='#qrcode'>QR Code</a>-- & --<a href='#filemanager'>File Manager</a>-- & --<a href='#indexscan'>Index Scan</a>-- & --<a href='#share42'>Share42</a>-- & --<a href='#xoopsinfo'>XoopsInfo</a>--");
define("_AM_PRINTLIMINATOR_HELP2" , "<div id='printer'></div><a target='_blank' href='https://css-tricks.github.io/The-Printliminator/'><img src='" . XOOPS_URL . "/modules/printliminator/assets/images/web-store-tile.png'></a>");                               
define("_AM_PRINTLIMINATOR_HELP3" , "<img src='" . XOOPS_URL . "/modules/printliminator/assets/images/screenshot.png'>");
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
define("_AM_PRINTLIMINATOR_HELP8" , '<div id="qrcode"></div><h2>OR Code</h2>Для размещения QR кода в шаблоне необходимо скопировать код <{includeq file="db:printliminator_qrcode_div_in.tpl"}> и вставить его в необходимое место в шаблоне. Размер картинки QR кода можно в шаблоне /modules/printliminator/templates/printliminator_qrcode_div_in.tpl изменить параметр s=2 в диапазоне от 1 до 4.');
define("_AM_PRINTLIMINATOR_HELP9" , "<h3>Дополнительно</h3>");
define("_AM_PRINTLIMINATOR_HELP10" , "<h3><br /><hr /><br />Использованы скрипты:</h3>");
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
define("_AM_PRINTLIMINATOR_HELP12" , '<h2>Поделиться страницей</h2>Для размещения иконок "Поделиться" в плавающем блоке необходимо разместить в шаблоне темы <{includeq file="db:printliminator_share42_div_in.tpl"}>. Размещение иконок можно установить в шаблоне /modules/printliminator/templates/printliminator_share42_div_in.tpl изменяя параметры data-top1="150" data-top2="20" data-margin="0".<br /><b>Обратите внимание!</b> Для работы необходимо отключить блок в администрировании блоков (если включен).'); 

//FileManager
define("_AM_PRINTLIMINATOR_HELP_FM_1" , "<div id='filemanager'></div>Помощь по FileManager");
define("_AM_PRINTLIMINATOR_HELP_FM_2" , "<h2>Интерфейс</h2>");
define("_AM_PRINTLIMINATOR_HELP_FM_3" , "<p>В верхнем левом углу показан текущий путь.<br />Например, Вы можете видеть: <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/folder.png' style='vertical-align:middle; height:20px width:20px' />toto/aaaa/dfg.<br />Это сообщит Вам, где вы находитесь.<br />В этом примере указана текущая директория 'dfg'.<br />Чтобы вернуться в родительский каталог, щелкните его имя.</p><img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/refresh.png' style='vertical-align:middle; height:20px width:20px' /> Чтобы перезагрузить и обновить страницу, нажмите на эту иконку.<br /><p><img src='" . XOOPS_URL . "/modules/printliminator/assets/images/admin/actions/help.png' style='vertical-align:middle; height:20px width:20px' /> Эта иконка является ссылкой на этот документ.</p><img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/disconnect.png' style='vertical-align:middle; height:20px width:20px' /> Если вы хотите выйти из системы, нажмите на нее. Ваш сеанс будет удален, и вы будете перенаправлены на страницу по умолчанию.");
define("_AM_PRINTLIMINATOR_HELP_FM_4" , "<h2>Список файлов</h2>");
define("_AM_PRINTLIMINATOR_HELP_FM_5" , "<h3>Сортировка</h3><p>В первой строке таблицы вы можете увидеть 'Имя файла, Размер ...'. Нажимая на них, Вы увидите список. Нажмите еще раз, и Вы измените порядок. </p><p>В столбце 'Имя файла' перечислены файлы и каталоги. Чтобы перейти в родительский каталог, нажмите на этот значок <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/parent.png' style='vertical-align:middle; height:20px width:20px' />.<br />Нажимая на каталог, <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/folder.png' style='vertical-align:middle; height:20px width:20px' /> Вы увидите его файлы. Нажав на файл, Вы откроете его или Вы его загрузите. Это зависит от расширения файла. Когда просматриваете файл в Вашем браузере, нажмите кнопку 'Предыдущий', чтобы вернуться.</p><h3>Копия <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/copy.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Этот значок позволяет скопировать файл в другой каталог. Чтобы скопировать его, Вам нужно будет выбрать целевой каталог и нажать 'Ok'. Вы можете отменить в любом месте.<br></p><h3>Переместить <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/move.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Этот значок позволяет переместить файл в другой каталог. Метод такой же, как и функция копирования, но исходный файл будет удален после копирования.<br></p><h3>Переименовывать <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/rename.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Этот значок позволяет Вам переименовать файл или каталог. Вам просто нужно ввести полное имя в текстовую зону и нажать 'Переименовать'. Чтобы вернуться к списку, нажмите 'Вернуться назад'.<br></p><h3>Удалить <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/delete.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Чтобы удалить файл, нажмите на этот значок. Перед удалением будет запрошено подтверждение.<br></p><h3>Редактировать <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/edit.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Чтобы изменить текстовый файл (HTML, TXT...) нажмите на этот значок. Файл будет редактироваться в текстовой области. Чтобы сохранить файл, нажмите кнопку 'Сохранить'. Чтобы вернуться к списку, нажмите 'Отмена'.");
define("_AM_PRINTLIMINATOR_HELP_FM_6" , "<h2>Операции</h2>");
define("_AM_PRINTLIMINATOR_HELP_FM_7" , "<h3>Загрузить <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/upload.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Загрузка файла. Чтобы загрузить файл со своего компьютера, нажмите кнопку 'Обзор ...' и выберите файл. Затем нажмите 'Загрузить' ... и 'пожалуйста, подождите ...'. Большие файлы не приветствуются. Возврат каретки в конце файлов ASCII будет заменен на \п. <br></p><h3>Создать каталог <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/folder.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>В текстоваое поле напишите имя каталога. Он не должен содержать специальные символы, такие как пробелы, акценты или другое. В другом случае они будут удалены. Нажмите 'Создать', чтобы создать каталог.<br></p><h3>Создать новый файл <img src='" . XOOPS_URL . "/modules/printliminator/assets/images/icons/defaut.png' style='vertical-align:middle; height:20px width:20px' /></h3><p>Вы можете создавать новые файлы, такие как CGI, TXT, HTM, HTML... (и Вы сможете редактировать их после создания). Напишите правильное имя файла и нажмите 'Создать', и он будет создан в текущем пути. Если расширение HTM или HTML, будет создан шаблон.");

//IndexScan
define("_AM_PRINTLIMINATOR_HELP_IS_1" , "<div id='indexscan'></div>Помощь по IndexScan <span style='color:red;'>Большая нагрузка на сервер при сканировании!!!</span>");
define("_AM_PRINTLIMINATOR_HELP_IS_2" , "<h3>Зачем использовать файлы index.html?</h3><br />Если веб-мастер не запрещает просмотр случайных папок на веб-сервере, большая часть содержимого папок может быть доступна через браузер, указыв адрес в Интернете. Эта легко продемонстрировать, набрав адрес любого веб-сайта в адресной строке интернет-браузера и просто добавив косую черту и имя этой папки:<br />images<br />Если папка с изображениями веб-сайта, к которому осуществляется переход, не защищена, будет отображаться список всех файлов в папке. Любой из файлов может быть загружен на жесткий диск. В большинстве случаев веб-сайты имеют папку с изображениями, и эта папка обычно не будет защищена от случайного просмотра. Если это так, все содержимое папки с изображениями будет доступно широкой публике.<br />В зависимости от типов файлов файлы в незащищенной веб-папке могут быть доступны или недоступны; .php, .asp, and .aspx файлы недоступны, хотя .gif, .jpg, .bmp, .png, и другие файлы изображений полностью доступны.И другие файлы изображений полностью доступны. Кроме того, без защиты папок, хакер может также использовать файлы конфигурации, такие как config.inc, где хранятся данные подключения к базам данных веб-сайтов! Следовательно, можно получить доступ к базе данных.<br /><br /><b>Источник: Easy Website Security</b>");
define("_AM_PRINTLIMINATOR_HELP_IS_3" , "Это небольшой модуль для сканирования папок сервера на отсутствие файлов index.html. Если они отсутствуют, Вы можете создать их.<br />Модуль, очевидно, не имеет доступа с главной страницы, но доступен через администрацию в качестве администратора.<br />Модуль тестировался с FF, Opera и IE8 и отлично работает.<br />Если Вы обнаружите какие-либо ошибки, отправьте письмо по электронной почте <a href='mailto:culex@culex.dk'>culex@culex.dk</a>.");
define("_AM_PRINTLIMINATOR_HELP_IS_4" , "Модули сканируют ваши веб-папки на отсутствие файлов index.html Он пропускает папки, в которых уже есть индексные файлы (index.php, index.htm, index.html). Если Вы найдете папки без них, Вы можете автоматически создать их, нажав 'создать index файл'.<br /><br />Модуль просматривает текст в вашем index.php, index.html, index.htm, mainfile.php, верхние и нижние колонтитулы для слов iframe или fromCharCode, которые обычно используются в кодированных вставках javascript.<br /><br />Если он найдет некоторые из этих слов, Вы можете сами проверить исходный код, нажав красную кнопку, перемещающуюся по строке для файла. Не проверяйте файлы только потому, что модуль находит эти слова на ваших страницах. Не всегда использование iframe и javascript равны повреждающему коду, и поэтому лучше проверить и, если сомневаетесь, спросить о том, что делать с этими файлами.<br /><br />Модуль может сканировать ваши веб-папки для отображения в списке. Любой файл, не проверяемый в соответствии с файлом и фильтром, установленным в config, отображается как «Not Xoops File» и может быть удален на лету с помощью ajax + jquery.<br /><br />Он создает резервную копию из ваших файлов, используя только структуру папок и существующие файлы индексов. В тех случаях, когда отсутствует индексный файл, он будет создавать новые и предлагать эту папку в виде zip-файла.<br /><br /><b>/culex</b>");
define("_AM_PRINTLIMINATOR_HELP_IS_5" , "<a target='_blank' href='https://defuse.ca/checksums.htm'>Генерация CheckSum</a>");
define("_AM_PRINTLIMINATOR_HELP_IS_6" , "Для создания файла filecheck.txt возьмите файл <a href='../docs/md5.rar'>docs/md5.rar</a>, распакуйте его в корень сайта и запустите. В корне будет создан файл filecheck.txt. Проверьте его и если необходимо удалите './' в начале строки. Затем скопируйте в /modules/printliminator/admin с заменой старого файла.<br /><strong style='color:red;'>Внимание:</strong> после использования скрипта не забудьте удалить скрипт md5.php и файл filecheck.txt с корневой дирректории Вашего сайта!");

//Share42
define("_AM_PRINTLIMINATOR_HELP_SHARE42_1" , "<div id='share42'></div>Share42");
define("_AM_PRINTLIMINATOR_HELP_SHARE42_2" , "Параметры изменяются в шаблоне /modules/printliminator/templates/printliminator_share42_div_in.tpl и /modules/printliminator/templates/blocks/printliminator_qrcode_div.tpl");
define("_AM_PRINTLIMINATOR_HELP_SHARE42_3" , "<h2>Параметры, которые вы можете указать</h2>");
define("_AM_PRINTLIMINATOR_HELP_SHARE42_4" , "
<div style='width:20%;float:left;background-color:#cccccc;'>Параметр</div><div style='width:30%;float:left;background-color:#cccccc;'>Описание</div><div style='width:50%;float:left;background-color:#cccccc;'>Пример использования</div><br />
<div style='width:20%;float:left;'>data-url</div><div style='width:30%;float:left;'>ссылка на страницу</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-url='http://site.name/page-title/'&gt;</div><br />
<div style='width:20%;float:left;'>data-title</div><div style='width:30%;float:left;'>заголовок страницы</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-title='Заголовок страницы'&gt;</div><br />
<div style='width:20%;float:left;'>data-image</div><div style='width:30%;float:left;'>ссылка на изображение<br /><i>Параметр data-image не работает для Фейсбука. Поэтому добавьте следующий тег внутрь тега &lt;head&gt; вашего сайта:<br />&lt;meta property='og:image' content='http://site.name/image.jpg' /&gt;</i></div><div style='width:50%;float:left;'>&lt;div class='share42init' data-image='http://site.name/image.jpg'&gt;</div><br />
<div style='width:20%;float:left;'>data-description</div><div style='width:30%;float:left;'>описание к странице</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-description='Описание страницы'&gt;</div><br />
<div style='width:20%;float:left;'>data-path</div><div style='width:30%;float:left;'>путь к папке с файлом иконок icons.png</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-path='http://site.name/share42/'&gt;</div><br />
<div style='width:20%;float:left;'>data-icons-file</div><div style='width:30%;float:left;'>имя файла с иконками</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-icons-file='my-icons.png'&gt;</div><br />
<div style='width:20%;float:left;'>data-zero-counter</div><div style='width:30%;float:left;'>1 - показывать нулевой счетчик, 0 - не показывать нулевой счетчик</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-zero-counter='1'&gt;</div><br />
");
define("_AM_PRINTLIMINATOR_HELP_SHARE42_5" , "<h2>Параметры для вертикальной панели</h2>");
define("_AM_PRINTLIMINATOR_HELP_SHARE42_6" , "
<div style='width:20%;float:left;background-color:#cccccc;'>Параметр</div><div style='width:30%;float:left;background-color:#cccccc;'>Описание</div><div style='width:50%;float:left;background-color:#cccccc;'>Пример использования</div><br />
<div style='width:20%;float:left;'>data-top1</div><div style='width:30%;float:left;'>расстояние от начала страницы до панели, в пикселях</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-top1='150'&gt;</div><br />
<div style='width:20%;float:left;'>data-top2</div><div style='width:30%;float:left;'>расстояние от верха видимой области страницы до панели, в пикселях</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-top2='20'&gt;</div><br />
<div style='width:20%;float:left;'>data-margin</div><div style='width:30%;float:left;'>смещение панели по горизонтали, в пикселях (отрицательно значение - влево, положительное значение - вправо)</div><div style='width:50%;float:left;'>&lt;div class='share42init' data-margin='-70'&gt;</div><br />
");

//XoopsInfo
define("_AM_PRINTLIMINATOR_HELP_XOOPSINFO_1" , "<div id='xoopsinfo'></div>XoopsInfo");
define("_AM_PRINTLIMINATOR_HELP_XOOPSINFO_2" , "<h2>Пожалуйста, прочитайте перед отправкой запроса поддержке на <a href='http://xoops.org/' target='_blank'>xoops.org</a> </h2><p>Перед публикацией выполните поиск на Xoops.org, используя <a href='http://xoops.org/search.php' target='_blank'>функцию поиска</a> с соответствующими «ключевыми словами» и узнайте, был ли вопрос рассмотрен ранее. Также просмотрите <a href='http://xoops.org/modules/smartfaq/' target='_blank'>FAQ</a>, особенно если Вы не знаете, какие слова использовать для поиска.</p><p><b>Q:</b> Я не смог найти какие-либо ответы на проблемы используя поиск, что дальше?<br /><br /><b>A:</b> Пожалуйста, используйте более полное описание проблемы; Это поможет другим пользователям ответить Вам, у кого была аналогичная проблема. Многие пользователи не будут отвечать на «Пожалуйста, помогите мне, у меня проблема». Соответствующий заголовок также помогает другим пользователям находить решения своих проблем.<br /><br />Такие сообщения, как «У меня пустая страница», обычно игнорируются. Не потому, что мы не хотим помогать, а потому, что мы не можем понять в чем проблема, с таким количеством информации.<br /><br />Лучший способ начать свой запрос в поддержку - использовать четкое, описательное название и объяснить проблемы, которые у Вас возникают, насколько это возможно. Если у Вас возникли проблемы с модулем и/или темой, обязательно укажите имя и версию модуля и/или темы.</p>");
define("_AM_PRINTLIMINATOR_HELP_XOOPSINFO_3" , "<br /><p><b><i>Следующая информация будет полезна для людей, которые пытаются помочь Вам. Обязательно включите его в свой пост.</i></b></p><br />");
define("_AM_PRINTLIMINATOR_HELP_XOOPSINFO_4" , "<br /><p><b>Включить отладку:</b><br />Чтобы включить отладку, перейдите в систему admin-->preferences а затем общие настройки. Вы увидите поле 'Режим отладки'. Выберите 'Включить отладку (рядный режим)'. Затем перейдите на страницу с проблемами, скопируйте и вставьте любые сообщения об ошибках в сообщениях php-debug в приведенном ниже шаблоне. Сделайте это для каждого типа отладки (PHP, MySQL, Smarty).<br /><br />Отладочные сообщения PHP:<br />Отладочные сообщения MySQL:<br />Отладочные сообщения Smarty:<br /></p><br /><p><b><i>Следующий шаблон должен служить надежным руководством в запросе к поддержке.</i></b></p><br />");
define("_AM_PRINTLIMINATOR_HELP_XOOPSINFO_5" , "<p>Заглавие: Четкое и описательное название <br /><br />Описание: Подробное описание проблемы, которую Вы имеете. Пожалуйста, укажите как можно больше информации о том, что Вы делали прямо перед тем, как возникла проблема, и о любых шагах, которые Вы предприняли для решения проблемы.<br /><br />Убедитесь, что Вы включили в свой пост как можно больше технической информации. Без этой информации Вам будет очень сложно оказать поддержку.<br /><br />Website URL:<br />XOOPS Version:<br />Theme you are using:<br />Template Set you are using:<br />Module Name and Version:<br />PHP Version:<br />MySQL Version:<br />Server Software:<br />Operating System:<br />Browser Information<br />PHP Debug Messages:<br />MySQL Debug Messages:<br />Smarty Debug Messages:<br /></p>");
define("_AM_PRINTLIMINATOR_HELP_XOOPSINFO_6" , "<br /><p><b><i>XOOPS Info File version 1.21</i></b><br />Last Updated: 26.06.2017<br />By: XOOPS Support Team</p>");
