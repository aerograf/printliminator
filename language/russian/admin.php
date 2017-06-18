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
define("_AM_PRINTLIMINATOR_MANAGER_EXAMPLE",                 "Пример");
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

// FileManager
define("_FM_AM_LASTVERSION","Последняя версия");
define("_FM_AM_FILENAME","Имя файла");
define("_FM_AM_FILESIZE","Размер");
define("_FM_AM_FILETYPE","Тип");
define("_FM_AM_MODIFIED","Модифицированный");
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
define("_FM_AM_READ_ONLY","Только для чтения");
define("_FM_AM_PERMISSION","Права доступа");
