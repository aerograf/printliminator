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
use Xmf\Request;
use Xmf\Module\Helper;
if( ! defined( 'XOOPS_ROOT_PATH' ) )  die("XOOPS_ROOT_PATH not defined!");

function system_CleanVars( &$global, $key, $default = '', $type = 'int' ) {
    switch ( $type ) {
        case 'string':
            $ret = (isset($global[$key])) ? $global[$key] : $default;
            break;
        case 'int': 
        default:
            $ret = (isset($global[$key])) ? intval($global[$key]) : intval($default);
            break;
    }
    if ( $ret === false ) {
        return $default;
    }
    return $ret;
}

function is_editable($file) {      
    return (preg_match("/\.txt$|\.sql$|\.php$|\.php3$|\.phtml$|\.htm$|\.html$|\.cgi$|\.pl$|\.js$|\.css$|\.inc$/i",$file));
    }

function is_image($file) {
    return (preg_match("/\.png$|\.bmp$|\.jpg$|\.jpeg$|\.gif$/i",$file));
    }
    
function withMultipleSize( $size ) {
    $size_unit ="B"; // byte
    if ($size >= 1073741824) {$size = round($size / 1073741824 * 100) / 100 . "G".$size_unit;}
    elseif ($size >= 1048576) {$size = round($size / 1048576 * 100) / 100 . "M".$size_unit;}
    elseif ($size >= 1024) {$size = round($size / 1024 * 100) / 100 . "k".$size_unit;}
    else {$size = $size . " bytes";}
    if($size==0) {$size ="-";}
    return $size;
    }

function getPermissions( $file, $full = TRUE, $octal = TRUE ) {
    $perms = fileperms( $file );
    
    if (!$full) {
        $read = (is_readable( $file )) ? 'R' : '!R';
        $write = (is_writable( $file )) ? 'W' : '!W';
        $cut = $octal ? 2 : 3;
        $info = substr(decoct($perms), $cut);
        $ret = $read . '.' . $write . '.' . $info; 
    } else {
        if (($perms & 0xC000) == 0xC000) {
            $info = 's'; // Socket
        } elseif (($perms & 0xA000) == 0xA000) {
            $info = 'l'; // Symbolic Link
        } elseif (($perms & 0x8000) == 0x8000) {
            $info = '-'; // Regular
        } elseif (($perms & 0x6000) == 0x6000) {
            $info = 'b'; // Block special
        } elseif (($perms & 0x4000) == 0x4000) {
            $info = 'd'; // Directory
        } elseif (($perms & 0x2000) == 0x2000) {
            $info = 'c'; // Character special
        } elseif (($perms & 0x1000) == 0x1000) {
            $info = 'p'; // FIFO pipe
        } else {
            $info = 'u'; // Unknown
        }
        
        // Owner
        $info .= (($perms & 0x0100) ? 'r' : '-');
        $info .= (($perms & 0x0080) ? 'w' : '-');
        $info .= (($perms & 0x0040) ?
                    (($perms & 0x0800) ? 's' : 'x' ) :
                    (($perms & 0x0800) ? 'S' : '-'));
        
        // Group
        $info .= (($perms & 0x0020) ? 'r' : '-');
        $info .= (($perms & 0x0010) ? 'w' : '-');
        $info .= (($perms & 0x0008) ?
                    (($perms & 0x0400) ? 's' : 'x' ) :
                    (($perms & 0x0400) ? 'S' : '-'));
        
        // World
        $info .= (($perms & 0x0004) ? 'r' : '-');
        $info .= (($perms & 0x0002) ? 'w' : '-');
        $info .= (($perms & 0x0001) ?
                    (($perms & 0x0200) ? 't' : 'x' ) :
                    (($perms & 0x0200) ? 'T' : '-'));
        $ret = $info;
    }
    return $ret;
}

function date_modif( $file ) {
    $tmp = filemtime($file);
    return date( "d/m/Y H:i", $tmp );
    }


function getMimetype( $file, $quoi ) {
    global $xoopsConfig, $HTTP_USER_AGENT;
    if(!preg_match("/MSIE/i",$HTTP_USER_AGENT))
        {$client="netscape.png";}
    else
        {$client="html.png";}

    if(is_dir($file))                {$image = "folder.png"; $file_type = _FM_AM_DIRECTORY."";}
    else if(preg_match("/\.mid$/i",$file))   {$image = "mid.png"; $file_type = _FM_AM_FILE_MIDI."";}
    else if(preg_match("/\.txt$/i",$file))   {$image = "txt.png"; $file_type = _FM_AM_FILE_TEXT."";}
    else if(preg_match("/\.sql$/i",$file))   {$image = "txt.png"; $file_type = _FM_AM_FILE_TEXT."";}
    else if(preg_match("/\.js$/i",$file))    {$image = "js.png"; $file_type = _FM_AM_FILE_JAVASCRIPT."";}
    else if(preg_match("/\.gif$/i",$file))   {$image = "gif.png"; $file_type = _FM_AM_FILE_GIFPICTURE."";}
    else if(preg_match("/\.jpg$/i",$file))   {$image = "jpg.png"; $file_type = _FM_AM_FILE_JPGPICTURE."";}
    else if(preg_match("/\.html$/i",$file))  {$image = $client; $file_type = _FM_AM_FILE_HTMLPAGE."";}
    else if(preg_match("/\.htm$/i",$file))   {$image = $client; $file_type = _FM_AM_FILE_HTMLPAGE."";}
    else if(preg_match("/\.rar$/i",$file))   {$image = "rar.png"; $file_type = RARFile."";}
    else if(preg_match("/\.gz$/i",$file))    {$image = "zip.png"; $file_type = _FM_AM_FILE_GZ."";}
    else if(preg_match("/\.tgz$/i",$file))   {$image = "zip.png"; $file_type = _FM_AM_FILE_GZ."";}
    else if(preg_match("/\.z$/i",$file))     {$image = "zip.png"; $file_type = _FM_AM_FILE_GZ."";}
    else if(preg_match("/\.ra$/i",$file))    {$image = "ram.png"; $file_type = _REALfile."";}
    else if(preg_match("/\.ram$/i",$file))   {$image = "ram.png"; $file_type = _REALfile."";}
    else if(preg_match("/\.rm$/i",$file))    {$image = "ram.png"; $file_type = _REALfile."";}
    else if(preg_match("/\.pl$/i",$file))    {$image = "pl.png"; $file_type = _FM_AM_FILE_PERLSCRIPT."";}
    else if(preg_match("/\.zip$/i",$file))   {$image = "zip.png"; $file_type = _FM_AM_FILE_ZIP."";}
    else if(preg_match("/\.wav$/i",$file))   {$image = "wav.png"; $file_type = _FM_AM_FILE_WAV."";}
    else if(preg_match("/\.php$/i",$file))   {$image = "php.png"; $file_type = _FM_AM_FILE_PHPSCRIPT."";}
    else if(preg_match("/\.php3$/i",$file))  {$image = "php.png"; $file_type = _FM_AM_FILE_PHPSCRIPT."";}
    else if(preg_match("/\.phtml$/i",$file)) {$image = "php.png"; $file_type = _FM_AM_FILE_PHPSCRIPT."";}
    else if(preg_match("/\.exe$/i",$file))   {$image = "exe.png"; $file_type = _FM_AM_FILE_EXE."";}
    else if(preg_match("/\.bmp$/i",$file))   {$image = "bmp.png"; $file_type = _FM_AM_FILE_BMPPICTURE."";}
    else if(preg_match("/\.png$/i",$file))   {$image = "gif.png"; $file_type = _FM_AM_FILE_PNGPICTURE."";}
    else if(preg_match("/\.css$/i",$file))   {$image = "css.png"; $file_type = _FM_AM_FILE_CSS."";}
    else if(preg_match("/\.mp3$/i",$file))   {$image = "mp3.png"; $file_type = _MP3File."";}
    else if(preg_match("/\.xls$/i",$file))   {$image = "xls.png"; $file_type = _FM_AM_FILE_XLS."";}
    else if(preg_match("/\.doc$/i",$file))   {$image = "doc.png"; $file_type = _FM_AM_FILE_WORD."";}
    else if(preg_match("/\.pdf$/i",$file))   {$image = "pdf.png"; $file_type = _FM_AM_FILE_PDF."";}
    else if(preg_match("/\.mov$/i",$file))   {$image = "mov.png"; $file_type = _FM_AM_FILE_MOV."";}
    else if(preg_match("/\.avi$/i",$file))   {$image = "avi.png"; $file_type = _FM_AM_FILE_AVI."";}
    else if(preg_match("/\.mpg$/i",$file))   {$image = "mpg.png"; $file_type = _FM_AM_FILE_MPG."";}
    else if(preg_match("/\.mpeg$/i",$file))  {$image = "mpeg.png"; $file_type = _FM_AM_FILE_MPEG."";}
    else if(preg_match("/\.swf$/i",$file))   {$image = "flash.png"; $file_type = _FM_AM_FILE_FLASH."";}
    else                             {$image = "defaut.png"; $file_type = _FM_AM_FILE."";}

    if ($quoi == "image")
        {return $image;}
    else
        {return $file_type;}
    }


function joinTables( $t1, $t2, $sens ) {
    if($sens==0)
        {$tab1 = $t1; $tab2 = $t2;}
    else
        {$tab1 = $t2; $tab2 = $t1;}
    if(is_array($tab1)) {while (list($key,$val) = each($tab1)) {$list[$key] = $val;}}
    if(is_array($tab2)) {while (list($key,$val) = each($tab2)) {$list[$key] = $val;}}
    return $list;
    }


function convertTxtToHtml( $string ) {
    $string = str_replace("&#8216;", "'", $string);
    $string = str_replace("&#339;", "oe", $string);
    $string = str_replace("&#8217;", "'", $string);
    $string = str_replace("&#8230;", "...", $string);
    $string = str_replace("&", "&amp;", $string);
    $string = str_replace("<", "&lt;", $string);
    $string = str_replace(">", "&gt;", $string);
    $string = str_replace("\"", "&quot;", $string);
    $string = str_replace("�", "&agrave;", $string);
    $string = str_replace("�", "&eacute;", $string);
    $string = str_replace("�", "&egrave;", $string);
    $string = str_replace("�", "&ugrave;", $string);
    $string = str_replace("�", "&acirc;", $string);
    $string = str_replace("�", "&ecirc;", $string);
    $string = str_replace("�", "&icirc;", $string);
    $string = str_replace("�", "&ocirc;", $string);
    $string = str_replace("�", "&ucirc;", $string);
    $string = str_replace("�", "&auml;", $string);
    $string = str_replace("�", "&euml;", $string);
    $string = str_replace("�", "&iuml;", $string);
    $string = str_replace("�", "&ouml;", $string);
    $string = str_replace("�", "&uuml;", $string);
    return $string;
    }


/**
 * Delete a not empty directory
 *
 */
function delDir($dir) {
    if (!file_exists($dir)) return true;
    if (!is_dir($dir)) return unlink($dir);
    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') continue;
        if (!delDir($dir . DIRECTORY_SEPARATOR . $item)) return false;
    }
    return rmdir($dir);
}


function enlever_controlM($file) {
    $fic = file($file);
    $fp = fopen($file,"w");
    while (list ($key,$val) = each($fic))
        {
        $val = str_replace(CHR(10),"",$val);
        $val = str_replace(CHR(13),"",$val);
        fputs($fp,"$val\n");
        }
    fclose( $fp );
    }


function validateFileName( $name, $max_caracteres = 30) {
    $name = stripslashes($name);
    $name = str_replace("'","",$name);
    $name = str_replace("\"","",$name);
    $name = str_replace("\"","",$name);
    $name = str_replace("&","",$name);
    $name = str_replace(",","",$name);
    $name = str_replace(";","",$name);
    $name = str_replace("/","",$name);
    $name = str_replace("\\","",$name);
    $name = str_replace("`","",$name);
    $name = str_replace("<","",$name);
    $name = str_replace(">","",$name);
    $name = str_replace(" ","_",$name);
    $name = str_replace(":","",$name);
    $name = str_replace("*","",$name);
    $name = str_replace("|","",$name);
    $name = str_replace("?","",$name);
    $name = str_replace("�","",$name);
    $name = str_replace("�","",$name);
    $name = str_replace("�","",$name);
    $name = str_replace("@","",$name);
    $name = str_replace("�","",$name);
    $name = str_replace("�","",$name);
    $name = str_replace("�","",$name);
    $name = str_replace("�","",$name);
    $name = str_replace("�","",$name);
    $name = str_replace("�","",$name);
    $name = str_replace("�","",$name);
    $name = str_replace("!","",$name);
    $name = str_replace("�","",$name);
    $name = str_replace("+","",$name);
    $name = str_replace("^","",$name);
    $name = str_replace("(","",$name);
    $name = str_replace(")","",$name);
    $name = str_replace("#","",$name);
    $name = str_replace("=","",$name);
    $name = str_replace("$","",$name);
    $name = str_replace("%","",$name);
    $name= substr ($name, 0, $max_caracteres);
    return $name;
    }
