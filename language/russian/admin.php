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

define("_AM_PRINTLIMINATOR_MANAGER_INDEX",                  "Главная");
define("_AM_PRINTLIMINATOR_MANAGER_ABOUT",                  "About");
define("_AM_PRINTLIMINATOR_MANAGER_ABOUT1",                  "Разработка");
define("_AM_PRINTLIMINATOR_MANAGER_HELP",                  "Помощь");
define("_AM_PRINTLIMINATOR_MANAGER_EXAMPLE",                 "Printliminator & QRCode Пример");
define("_AM_PRINTLIMINATOR_MANAGER_PREFERENCES",            "Настройки");
define("_AM_PRINTLIMINATOR_MANAGER_UPDATE",                 "Обновить");

// About.php
define("_AM_PRINTLIMINATOR_ABOUT_RELEASEDATE",        "Дата выпуска");
define("_AM_PRINTLIMINATOR_ABOUT_AUTHOR",                   "Автор");
define("_AM_PRINTLIMINATOR_ABOUT_CREDITS",                  "Credits");
define("_AM_PRINTLIMINATOR_ABOUT_LICENSE",                  "License");
define("_AM_PRINTLIMINATOR_ABOUT_MODULE_STATUS",            "Статус");
define("_AM_PRINTLIMINATOR_ABOUT_WEBSITE",                  "Website");
define("_AM_PRINTLIMINATOR_ABOUT_AUTHOR_NAME",              "Имя автора");
define("_AM_PRINTLIMINATOR_ABOUT_CHANGELOG",                "Планы на работу");
define("_AM_PRINTLIMINATOR_ABOUT_MODULE_INFO",              "Информация о модуле");
define("_AM_PRINTLIMINATOR_ABOUT_AUTHOR_INFO",              "Информация о авторе");
define("_AM_PRINTLIMINATOR_ABOUT_LASTUPDATE",        "Последнее обновление");

//Admin module menu
define("_AM_PRINTLIMINATOR_MODULES_DATA",        "Состояние компонентов модуля");
define("_AM_PRINTLIMINATOR_MODULES_DATA_DESC",        "После совершения каких либо действий необходимо обновить страницу.");
define("_AM_PRINTLIMINATOR_QRCODE_DATA_ON",        "Блок 'QR Code' готов. Для настройки и активации перейдите в настройки блоков. Дополнительная информация по настройке в разделе Помощь. <a href='../include/dell_data.php'>Удалить.</a>");
define("_AM_PRINTLIMINATOR_QRCODE_DATA_OFF",        "Блок 'QR Code' не готов. <a href='../include/extract_archive.php'>Установить.</a>");
define("_AM_PRINTLIMINATOR_BLOCK_DATA_ON",        "Блок 'The Printliminator' готов.");
define("_AM_PRINTLIMINATOR_BLOCK_DATA_OFF",        "Блок 'The Printliminator' не готов. Проверьте файл /assets/js/printliminator.min.js. Если его нет, скачайте архив модуля заново.");
define("_AM_PRINTLIMINATOR_SHARE42_DATA_ON",        "Блоки 'Share42' готовы.");
define("_AM_PRINTLIMINATOR_SHARE42_DATA_OFF",        "Блоки 'Share42' не готовы. Проверьте файл /assets/js/share42d.js и share42s.js. Если его нет, скачайте архив модуля заново.");
define("_AM_PRINTLIMINATOR_STARTUP_DATA_ON",        "Модуль 'Startup' включен. Перейдите на вкладку и настройте модуль согласно инструкциям.");
define("_AM_PRINTLIMINATOR_STARTUP_DATA_OFF",        "Модуль 'Startup' не включен. Для включения перейдите на вкладку модуля.");
define("_AM_PRINTLIMINATOR_CACHE_1",        "Очистка кеша");
define("_AM_PRINTLIMINATOR_CACHE_2",        "Опции");
define("_AM_PRINTLIMINATOR_CACHE_3",        "Очистить кеш Xoops");
define("_AM_PRINTLIMINATOR_CACHE_4",        "Очистить кеш Smarty");
define("_AM_PRINTLIMINATOR_CACHE_5",        "Очистить компилятор Smarty");
define("_AM_PRINTLIMINATOR_CACHE_6",        "Очищается выбранный кеш");
define("_AM_PRINTLIMINATOR_CACHE_7",        "Выбранный кеш очищен");

// FileManager
define("_FM_AM_LASTVERSION","Последняя версия");
define("_FM_AM_FILENAME","Имя файла");
define("_FM_AM_FILESIZE","Размер");
define("_FM_AM_FILETYPE","Тип");
define("_FM_AM_MODIFIED","Изменен");
define("_FM_AM_ACTIONS","Действия");
define("_FM_AM_RENAME","Переименовывать");
define("_FM_AM_DELETE","Удалить");
define("_FM_AM_PARENTDIR","Родительский каталог");
define("_FM_AM_UPLOAD_IN_DIR","Загрузить файл в каталог : ");
define("_FM_AM_NEWDIR","Создать новый каталог в : ");
define("_FM_AM_UPLOAD","Загрузить");
define("_FM_AM_CREATENEW","Создать новый файл в : ");
define("_FM_AM_CREATE","Создать");
define("_FM_AM_MUST_SELECT","Вы должны выбрать файл");
define("_FM_AM_GOBACK","Вернуться");
define("_FM_AM_ERROR_UP","Ошибка при загрузке файла !");
define("_FM_AM_THE_FILE","Файл");
define("_FM_AM_SUCCESS","был успешно создан в каталоге");
define("_FM_AM_MUST_VALID_NAME","Вы должны написать правильное имя");
define("_FM_AM_THE_DIRECTORY","Каталог");
define("_FM_AM_CREATED_IN","было создано в");
define("_FM_AM_DIRECTORY_EXISTS","Этот каталог уже существует");
define("_FM_AM_RENAMED_TO","была переименована в");
define("_FM_AM_TO","к");
define("_FM_AM_ALREADY_EXISTS","уже существует");
define("_FM_AM_DELETED","был удален");
define("_FM_AM_PATH_REALLY_DELETE","Вы действительно хотите удалить");
define("_FM_AM_EDIT","Редактировать");
define("_FM_AM_EDITING_FILE","Редактирование файлов");
define("_FM_AM_SAVE","Сохранить");
define("_FM_AM_CANCEL","Отменить");
define("_FM_AM_HAS_BEEN_MODIFIED","был изменен");
define("_FM_AM_ROOT_DIR","Корневая директория");
define("_FM_AM_LOGOUT","Выйти");
define("_FM_AM_COPY","Копировать");
define("_FM_AM_SELECTED_FILE","Выбранный файл");
define("_FM_AM_PASTE_IN","Вставить в");
define("_FM_AM_SELECT_ANOTHER","Или выбрать любой другой каталог");
define("_FM_AM_MOVE","Переместить");
define("_FM_AM_FILE_EXISTS","Этот файл уже существует");
define("_FM_AM_PATH_NOT_CORRECT","Корневой путь не является правильным. Проверьте это в PRIVE/USERS.TXT файле");
define("_FM_AM_REMOVED","Этот файл был удален");
define("_FM_AM_SEND","Отправить");
define("_FM_AM_PASS","Пройти");
define("_FM_AM_HELP","Помощь");
define("_FM_AM_REFRESHPAGE","Обновить");
define("_FM_AM_CLOSE","Закрыть");
define("_FM_AM_SEARCH","Поиск");
define("_FM_AM_DOWNLOAD","Скачать");
define("_FM_AM_UNABLE_TO_OPEN","Невозможно открыть файл");
define("_FM_AM_PRINT","Печать");
define("_FM_AM_LOGIN","Авторизоваться");
define("_FM_AM_YES","Да");
define("_FM_AM_NO","Нет");
define("_FM_AM_DIRECTORY","Каталог");
define("_FM_AM_FILE","Файл");
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
define("_FM_AM_FILE_XML","XML file");
define("_FM_AM_FILE_ICO","ICON file");
define("_FM_AM_FILE_HTACCESS","SECURITY file");
define("_FM_AM_READ_ONLY","Только для чтения");
define("_FM_AM_PERMISSION","Права доступа");

// IndexScan
define("_AM_INDEXSCAN_NOW","Сканирование index файлов");
define("_AM_INDEXSCAN_CREATE","Создание index файлов");
define("_AM_INDEXSCAN_HELP","Помощь");
define("_AM_INDEXSCAN_CONFIG","Конфиг");
define("_AM_INDEXSCAN_HEADER","Папки в которых отсутствуют индексные файлы");
define("_AM_INDEXSCAN_NOTFOUND","Index файлы <b>не</b> найдены<br>\n");
define("_AM_INDEXSCAN_FOUNDMISSING","<b>отсутствуют</b> index файлы\n");
define("_AM_INDEXSCAN_MAKINGHEADER","Создание отсутствующих файлов index.html");
define("_AM_INDEXSCAN_CREATED","index.html создан");
define("_AM_INDEXSCAN_CREATEDINDEXFILES","создано index файлов");
define("_AM_INDEXSCAN_CHECKFORFILES","<tr class='header'><center><h2>Проверка файлов на присутствие IFRAM</h2></tr></center><center><small>Не все файлы имеющие Iframe были инфецированы.<br>Проверьте код в файлах, до удаления.<br></small></center>");
define("_AM_INDEXSCAN_UNABLETOREADFILE","Невозможно открыть файл ");
define("_AM_INDEXSCAN_INFECTED"," найденно!!");
define("_AM_INDEXSCAN_CLEAN","OK");
define("_AM_INDEXSCAN_INJECTIONSCAN","Сканирование на присутствие IFrame в файлах");
define("_AM_INDEXSCAN_SCANNING4MISS","<br>Поиск отсутствующих index файлов.<br>Пожалуйста, подождите.");
define("_AM_INDEXSCAN_CREATINGMISS","<br>Создание отсутствующих index файлов.<br>Пожалуйста, подождите.");
define("_AM_INDEXSCAN_SCANNING4IFRAME","<br>Поиск iframes и кода javascript.<br>Пожалуйста, подождите.");
define("_AM_INDEXSCAN_FINISDINJECTIONS"," файлы содержат слово *iframe* или *fromCharCode* указывающий на ifram или код javascript <br>Прежде чем предпринимать какие-либо действия. Убедитесь, что это так, щелкнув красную полосу, чтобы увидеть исходный код.<br><br> Общее количество сканируемых файлов:");
define("_AM_INDEXSCAN_NOTVERIFY"," : Контрольная сумма этого файла отличается от оригинала!</h3>");
define("_AM_INDEXSCAN_VERIFIED"," Контрольная сумма для admin/indexscan.php проверяется.");
define("_AM_INDEXSCAN_CHECKILLEGALFILES","Проверить файлы");
define("_AM_INDEXSCAN_SCANNING4ILLEGALFILES","Сканирование веб-файлов");
define("_AM_INDEXSCAN_MAYBEOK","Кажется, все в порядке");
define("_AM_INDEXSCAN_NOTINXOOPSINSTALL","Не файл Xoops");
define("_AM_INDEXSCAN_FINISDILLEGAL"," файлы, которые не являются файлами Xoops. Всего сканированных файлов: ");
define("_AM_INDEXSCAN_ILLEGAL_DESC","Найденные файлы не являются файлами Xoops, проверяется из checkfile.txt в папке администратора и в файлах конфигурации, определенных как разрешенные типы файлов.<br/>Эти файлы нежелательны tmp, thumbs.db, или info файлы.<br/>Если вам не нужны эти файлы, добавьте их для автоматического удаления в config, и они будут удалены при запуске этого сканирования в следующий раз.");
define("_AM_INDEXSCAN_REALLYDELETE","Вы уверены ?, удалить файл.: ");
define("_AM_INDEXSCAN_CREATEZIP","Создать zip-файл для загрузки");
define("_AM_INDEXSCAN_CREATINGZIP","Создание резервной копии с пустыми папками<br/>плюс индексные файлы<br/>");
define("_AM_INDEXSCAN_BACKEDUPDELETEDFROMBACKUP","Удаление файлов в папке из резервной копии, за исключением файлов index.html");
define("_AM_INDEXSCAN_BACKEDUP2","Резервная копия папки.: ");
define("_AM_INDEXSCAN_DOWNLOADZIP","Скачать индексные файлы zip");
define("_AM_INDEXSCAN_CREATINGZIPFORDOWNLOAD","Создание zip-файла для загрузки");
define("_AM_INDEXSCAN_CREATEDINDEXINBACKUP","Созданный индексный файл в папке резервного копирования");
define("_AM_INDEXSCAN_CLEANUPDONE","Очистка ... Готово!");
define("_AM_INDEXSCAN_FILESARECOPIED"," Файлы были скопированы в резервную папку");
define("_AM_INDEXSCAN_FILESDELETED"," Файлы были удалены из папки резервного копирования");
define("_AM_INDEXSCAN_FILESCREATED"," Файлы index.html были созданы в резервной папке");

//Startup
define("_AM_STARTUP_ENABLE_ON","Включить");
define("_AM_STARTUP_ENABLE_OFF","Отключить");
define("_AM_STARTUP_ENABLE","Обновите страницу.");
define('_AM_STARTUP_DELETE', 'Удалить');
define('_AM_STARTUP_ADD', 'Добавить');
define('_AM_STARTUP_FORM_DESCRIPTION_1', 'После установки/включения модуля необходимо установить в <a href="../admin/xoopsinfo.php">настройках XOOPS модуль "Printliminator"</a> как модуль стартовой страницы по умолчанию.<br />Затем необходимо перейти в настройки/установку модуля и скрыть модуль в меню.');
define('_AM_STARTUP_FORM_DESCRIPTION_2', 'Здесь Вы можете определить модуль запуска для каждой группы, установить порядок, чтобы определить, какой модуль имеет приоритет если пользователь находится в нескольких группах.');
define('_AM_STARTUP_FORM_GROUP_SELECT', 'Веберете группу или несколько групп');
define('_AM_STARTUP_FORM_MODULE_SELECT', 'Выберите стартовый модуль для групп');
define('_AM_STARTUP_FORM_GROUP_NAME', 'Имя группы');
define('_AM_STARTUP_FORM_MODULE_NAME', 'Имя модуля');
define('_AM_STARTUP_FORM_ORDER', 'Установите приоритет для групп');
define('_AM_STARTUP_FORM_ACTION', 'Действие');
define('_AM_STARTUP_ORDER_UPDATE', 'Обновить приоритет');
define('_AM_STARTUP_SUCCESS_SAVE', 'Операция сохранена');
define('_AM_STARTUP_ERROR_FAILURE_SAVE', 'Ошибка при сохранении. Операция отменена.');
define('_AM_STARTUP_ERROR_FAILURE_DELETE', 'Ошибка при удалении. Операция отменена.');

//Module Info
define("_AM_XI_ADMENU1","Xoops information");
define("_AM_XI_DOWN_OFF", "OFF");
define("_AM_XI_DOWN_ON", "ON");
define("_AM_XI_XOOPS_VERSION", "Версия Xoops");
define("_AM_XI_XOOPS_URL","URL сайта");
define("_AM_XI_XOOPS_ROOT_PATH","Физический путь XOOPS");
define("_AM_XI_XOOPS_THEME", "Тема по умолчанию");
define("_AM_XI_XOOPS_TEMPLATE","Тема по умолчанию админпанели");
define("_AM_XI_XOOPS_DEBUG","Режим отладки");
define("_AM_XI_PROTECTOR_MODULE","Защитный модуль");
define("_AM_XI_PROTECTOR_PRECHECK","Предпроверка ");
define("_AM_XI_PROTECTOR_POSTCHECK", "Проверка почты");
define("_AM_XI_XOOPS_STARTPAGE","Модуль Вашей стартовой страницы");
define("_AM_XI_XOOPS_THEME_FROMFILE","Разрешить изменение шаблонов?");
define("_AM_XI_PROTECTOR","<font color='#CC0000'>Безопасность : </font>временно отключить");
define("_AM_XI_SAVE","Сохранить");
define("_AM_XI_SERVER_SOFTWARE","Сервер");
define("_AM_XI_SERVER_PHP","Версия PHP");
define("_AM_XI_SERVER_MYSQL","Версия MySQL");
define("_AM_XI_DOWN_SAFEMODESTATUS", "Безопасный режим");
define("_AM_XI_DOWN_REGISTERGLOBALS", "Глобальная регистрация");
define("_AM_XI_DOWN_ALLOW_URL_FOPEN","allow_url_fopen");
define("_AM_XI_DOWN_USE_TRANS_SID","session.use_trans_sid");
define("_AM_XI_DOWN_SERVERUPLOADSTATUS","Загрузка на сервер");
define("_AM_XI_DOWN_MAXUPLOADSIZE", "Максимальный размер");
define("_AM_XI_DOWN_GDLIBSTATUS", "Поддержка GD библиотеки");
define("_AM_XI_BROWSER","Браузер");
define("_AM_XI_DOWN_SAFEMODEPROBLEMS", " Это может вызвать проблемы");
define("_AM_XI_DOWN_GDLIBVERSION", "Версия GD Библиотеки");
define("_AM_XI_DOWN_GDON", " доступен");
define("_AM_XI_DOWN_GDOFF", " отключен");
define("_AM_XI_PROTECTOR_MODULE_NOT","Не установлен");
define("_AM_XI_PROTECTOR_MODULE_OK","Установлен");
define('_MD_AM_DBUPDATED', 'База данных обновлена');
define("_AM_XI_ADMENU2","Информация о сервере");
define("_AM_XI_ADMENU3","Информация о MySql");
define("_MI_XI_MYSQL_TABLE","Таблица");
define("_MI_XI_MYSQL_TABLE_TXT"," Таблиц(ы)");
define("_MI_XI_MYSQL_TYPE","Тип");
define("_MI_XI_MYSQL_COLLATION","Кодировка");
define("_MI_XI_MYSQL_RECORDS","Записей");
define("_MI_XI_MYSQL_SIZE","Размер");
define("_MI_XI_MYSQL_OVERHEAD","Загрузка");
define("_MI_XI_MYSQL_SUM","Сумма");
define("_AM_XI_MYSQL_KOCTETS","Ko");
define("_AM_XI_MYSQL_ID","Id");
define("_AM_XI_MYSQL_DB","База данных");
define("_AM_XI_MYSQL_INFO","Информация");
define("_AM_XI_MYSQL_TIME","Время");
define("_AM_XI_MYSQL_STATUS","Статус");
define("_AM_XI_MYSQL_OPTIMIZE", "Оптимизировать таблицы");
define("_AM_XI_MYSQL_REPAIR", "Ремонт таблиц");
define("_AM_XI_MYSQL_CHECK", "Проверить таблицы");
define("_AM_XI_MYSQL_ANALYZE", "Анализ таблиц");
define("_AM_XI_MYSQL_ACTION", "Действие : ");
define("_AM_XI_ADMENU4","Информация о модулях");
define("_AM_XI_MODULE_NAME","Модули");
define("_AM_XI_MODULE_STATUS","Статус");
define("_AM_XI_MODULE_ACTION","Действие");
define("_AM_XI_MODULE_VERSION","Версия");
define("_AM_XI_MODULE_XOOPS","xoops_version");
define("_AM_XI_MODULE_TABLE","Таблица модулей");
define("_AM_XI_MODULE_NEW","Последний");
define("_AM_XI_MODULE_UPDATE","Обновить модуль");
define("_AM_XI_MODULE_DOWNLOAD","Загрузить новую версию");
define("_AM_XI_MODULE_SUPPORT","Поддержка");
define("_AM_XI_MODULE_FORUM","Форум");
define("_AM_XI_MODULE_BUG","Отчет об ошибке");
define("_AM_XI_MODULE_FEATURE","Особенность");
define("_AM_XI_MODULE_LEGEND_UPDATE", "Обновление модуля не было выполнено !!!");
define("_AM_XI_MODULE_LEGEND_DOWNLOAD","Новая версия модуля доступна для загрузки");
define("_AM_XI_CONFIRM","Выполнить");
define("_AM_XI_MYSQL_RETURN","Вернуться в : " . _AM_XI_ADMENU3);
define("_AM_XI_ADMENU5","Информация о редакторах");
define("_AM_XI_EDITOR_CHECK","Статус");
define("_AM_XI_EDITOR_NAME", "Имя редактора");
define("_AM_XI_EDITOR_NONE","");
define("_AM_XI_EDITOR_INSTALL_OK","Установлен");
define("_AM_XI_EDITOR_NO_INSTALL","Не установлен");
define("_AM_XI_EDITOR_OK","Подключен");
define("_AM_XI_EDITOR_ERROR","Нет файлов : class/... ");
define("_AM_XI_EDITOR_MODULE","Не установлен - файлы находятся : class/... ");
define("_AM_XI_EDITOR_CLASS","Установлен - файлов не найдено : class/... ");

define("_AM_PRINTLIMINATOR_TOP","Вверх");