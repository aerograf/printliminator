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
include( "header_fm.php" );
$current_file = basename(__FILE__);        

switch ($op) {
    case 'download' :
        $FileName = basename($file);
        $size = filesize(XOOPS_ROOT_PATH . DS . $file);
        header('Content-Type: application/force-download; name="' . $FileName . '"');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: ' . $size);
        header('Content-Disposition: attachment; filename="' . $FileName . '"');
        header('Expires: 0');
        header('Cache-Control: no-cache, must-revalidate');
        header('Pragma: no-cache');
        readfile(XOOPS_ROOT_PATH . DS . $file);
        exit();
        break;


    case 'edit' :
        $save = isset($save);
        $edited_code = (isset($edited_code) ? stripslashes($edited_code) : '');
        $filename = XOOPS_ROOT_PATH . DS . $fic;
        if ($save == TRUE) {
            $edited_code = str_replace("&lt;", "<", $edited_code);
            file_put_contents($filename, $edited_code);
        }
        xoops_cp_header();
        $adminObject  = \Xmf\Module\Admin::getInstance();
        $adminObject->displayNavigation(basename(__FILE__));
        tool_bar(FALSE);
        echo "<br /><hr /><br />\n";
        echo "<div>\n";
        echo "<p><img src='images/actions/edit.png'> " . _FM_AM_FILENAME . " : ";
        echo "<b>" . $fic . "</b></p>\n";
        echo _FM_AM_PERMISSION . " : <b>" . getPermissions($filename, TRUE, TRUE) . (!is_writable($filename) ? " " . _FM_AM_READ_ONLY : "") . "</b>";
        echo "</div>\n";
        echo "<br />";
        echo "<form op='" . $current_file . "' method='post'>\n";
        echo "<input type='hidden' name='id' value='" .$id. "'>\n";
        echo "<input type='hidden' name='fic' value='" . $fic . "'>\n";
        echo "<input type='hidden' name='rep' value='" . $rep . "'>\n";
        echo "<input type='hidden' name='save' value='" . TRUE . "'>\n";
        echo "<input type='hidden' name='op' value='edit'>\n";
        echo "<input type='hidden' name='order_by' value='" . $order_by . "'>\n";
        echo "<input type='hidden' name='sens' value='" . $sens . "'>\n";

        $edited_code = @file_get_contents($filename);
        $edited_code = str_replace("<", "&lt;", $edited_code);

        if(preg_match("/\.sql$/i",$fic))        {$syntax = "sql";}
        else if(preg_match("/\.js$/i",$fic))    {$syntax = "js";}
        else if(preg_match("/\.html$/i",$fic))  {$syntax = "html";}
        else if(preg_match("/\.htm$/i",$fic))   {$syntax = "html";}
        else if(preg_match("/\.pl$/i",$fic))    {$syntax = "perl";}
        else if(preg_match("/\.py$/i",$fic))    {$syntax = "python";}
        else if(preg_match("/\.php$/i",$fic))   {$syntax = "php";}
        else if(preg_match("/\.php3$/i",$fic))  {$syntax = "php";}
        else if(preg_match("/\.phtml$/i",$fic)) {$syntax = "php";}
        else if(preg_match("/\.xml$/i",$fic))   {$syntax = "xml";}
        else if(preg_match("/\.css$/i",$fic))   {$syntax = "css";}
        else                            {$syntax = "";}

        xoops_load('XoopsFormEditor');
        $options['editor'] = $xoopsModuleConfig['editor'];
        $options['name'] = 'edited_code';
        $options['value'] = $edited_code;
        // optional configs
        $options['rows'] = 25; // default value = 5
        $options['cols'] = 60; // default value = 50
        $options['width'] = '100%'; // default value = 100%
        $options['height'] = '400px'; // default value = 400px
        $options['syntax'] = $syntax; // for EditArea editor
        $editor = new XoopsFormEditor('edited_code', 'edited_code', $options, true, 'textarea');
        echo $editor->render();

        echo "<br \><br \>\n";
        echo "<input type='image' src='images/actions/save.png' alt='" . _FM_AM_SAVE . "' border='0'>\n";
        echo "<a href='" . $current_file . "?id=" . $id . "&rep=" . $rep . "&order_by=" . $order_by . "&sens=" . $sens . "'>";
        echo "<img src='images/actions/close.png' alt='" . _FM_AM_CLOSE . "' border='0'>";
        echo "</a>\n";
        echo "</form><br /><hr /><br />\n";
        include_once __DIR__ . '/footer.php';
        xoops_cp_footer();
        break;


    case "copy" :
        xoops_cp_header();
        $adminObject  = \Xmf\Module\Admin::getInstance();
        $adminObject->displayNavigation(basename(__FILE__));
        tool_bar(FALSE);
        echo "<br /><hr /><br />\n";
        echo "<div>\n";
        echo "<p><img src='images/actions/copy.png'> " . _FM_AM_SELECTED_FILE . " : ";
        echo "<b>$fic</b></p>\n";
        echo "<p><img src='images/actions/paste.png'> " . _FM_AM_PASTE_IN . " : ";
        echo "" . (($dest == "") ? "/" : $dest) . "</p>\n";
        echo "</div>\n";
        echo "<br />" . _FM_AM_SELECT_ANOTHER . " :<br />\n";
        echo "<table>";
        $handle = opendir(XOOPS_ROOT_PATH . DS . $dest);
        while ($file = readdir($handle))
            {
            if ($file == "..")
                {
                $up = dirname($dest);
                if($up==$dest || $up==".") {$up="";}
                if ($up != $dest)
                    {
                    echo "<td><img src=\"images/actions/parent.png\"></td><td><a href=\"$current_file?id=$id&op=copy&order_by=$order_by&sens=$sens&dest=$up&fic=$fic&rep=$rep\">" . _FM_AM_PARENTDIR . "</td>";
                    }
                }
            else if($file!=".." && $file!="." && is_dir(XOOPS_ROOT_PATH . DS . $dest . DS . $file))
                {$list_dir[]=$file;}
            }
        closedir($handle);
        if (is_array($list_dir))
            {
            asort($list_dir);
            while (list($cle,$val) = each($list_dir))
                {
                echo "<tr><td><img src=\"images/actions/folder.png\"></td><td><a href=\"$current_file?id=$id&op=copy&dest=";
                if ($dest != "")
                    {
                    echo "$dest/";
                    }
                echo "$val&rep=$rep&order_by=$order_by&sens=$sens&fic=$fic\">$val</a></tr>\n";
                }
            }
        echo "</table>";

        echo "<br />";

        echo "<form op='" . $current_file . "' method='post'>\n";
        echo "<input type='hidden' name='op' value='copy_ok'>\n";
        echo "<input type='hidden' name='fic' value='". $fic . "'>\n";
        echo "<input type='hidden' name='dest' value='". $dest . "'>\n";
        echo "<input type='hidden' name='rep' value='". $rep . "'>\n";
        echo "<input type='hidden' name='id' value='". $id . "'>\n";
        echo "<input type='hidden' name='order_by' value='". $order_by . "'>\n";
        echo "<input type='hidden' name='sens' value='". $sens . "'>\n";
        echo "<input type='image' src='images/actions/copy.png' alt='" . _FM_AM_COPY . "' style='border: none;'>\n";
        echo "<a href='" . $current_file . "?id=" . $id . "&rep=" . $rep . "&order_by=" . $order_by . "&sens=" . $sens . "'>";
        echo "<img src='images/actions/close.png' alt='" . _FM_AM_CLOSE . "' style='border: none;'>";
        echo "</a>\n";
        echo "</form><br /><hr /><br />\n";
        include_once __DIR__ . '/footer.php';
        xoops_cp_footer();
        break;


    case "copy_ok" :
        $destination = XOOPS_ROOT_PATH . DS;
        if ($dest != "")
            {
            $destination .= $dest . DS;
            }
        $destination .= basename($fic);
        if (file_exists(XOOPS_ROOT_PATH . DS .$fic) && (XOOPS_ROOT_PATH . DS . $fic != $destination))
            {
            copy(XOOPS_ROOT_PATH . DS . $fic, $destination);
            }
        header("Location:$current_file?rep=$rep&id=$id&order_by=$order_by&sens=$sens");
        exit;
        break;


    case "view" :
        $FileName = basename($file);
        echo "<html>\n";
        echo "<head><title>" . _FM_AM_FILE . " : " . $FileName . "</title></head>\n";
        echo "<center>" . _FM_AM_FILE . " : ";
        echo "<img src=\"images/mimetypes/" . getMimetype(XOOPS_ROOT_PATH . DS . $file, "image") . "\" align=\"ABSMIDDLE\">\n";
        echo "<b>" . $FileName . "</b><br><br><hr>\n";
        echo "<a href='javascript:window.print()'><img src='images/actions/print.png' alt='" . _FM_AM_PRINT . "' border='0'></a>\n";
        echo "<a href='javascript:window.close()'><img src='images/actions/close.png' alt='" . _FM_AM_CLOSE . "' border='0'></a>\n";
        echo "<br>\n";
        echo "<hr><br>";
        if (!is_image($file))
            {
            echo "</center>\n";
            $fp  =@fopen(XOOPS_ROOT_PATH . DS . $file, "r");
            if ($fp)
                {
                echo "\n";
                while (!feof($fp))
                    {
                    $buffer = fgets($fp,4096);
                    $buffer = convertTxtToHtml($buffer);
                    $buffer = str_replace("\t", "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", $buffer);
                     echo $buffer . "<br>";
                    }
                fclose($fp);
                echo "\n";
                }
            else
                {
                echo "" . _FM_AM_UNABLE_TO_OPEN . " : " . XOOPS_ROOT_PATH . DS . $file;
                }
            echo "<center>\n";
            }
        else
            {
            echo "<img src='" . XOOPS_URL . DS . $file . "'>\n";
            }
        echo "<hr>\n";
        echo "<a href='javascript:window.print()'><img src='images/actions/print.png' alt='" . _FM_AM_PRINT . "' border='0'></a>\n";
        echo "<a href='javascript:window.close()'><img src='images/actions/close.png' alt='" . _FM_AM_CLOSE . "' border='0'></a>\n";
        echo "<hr></center>\n";
        echo "</body>\n";
        echo "</html>\n";
        exit;
        break;


    case "move" :
        xoops_cp_header();
        $adminObject  = \Xmf\Module\Admin::getInstance();
        $adminObject->displayNavigation(basename(__FILE__));
        tool_bar(FALSE);
        echo "<br /><hr /><br />\n";
        echo "<div>\n";
        echo "<p><img src='images/actions/move.png'> " . _FM_AM_SELECTED_FILE . " : ";
        echo "<b>$fic</b></p>\n";
        echo "<p><img src='images/actions/paste.png'> " . _FM_AM_PASTE_IN . " : ";
        echo "" . (($dest == "") ? "/" : $dest) . "</p>\n";
        echo "</div>\n";
        echo "<br />" . _FM_AM_SELECT_ANOTHER . " :<br />\n";
        echo "<table>";
        $handle = opendir(XOOPS_ROOT_PATH . DS . $dest);
        while ($file = readdir($handle))
            {
            if ($file == "..")
                {
                $up = dirname($dest);
                if($up==$dest || $up==".") {$up="";}
                if ($up != $dest)
                    {
                    echo "<td><img src='images/actions/parent.png'></td><td><a href=\"$current_file?id=$id&order_by=$order_by&sens=$sens&op=move&dest=$up&fic=$fic&rep=$rep\">" . _FM_AM_PARENTDIR . "";
                    }
                }
            else if($file!=".." && $file!="." && is_dir(XOOPS_ROOT_PATH . DS . $dest . DS . $file)) {$list_dir[]=$file;}
            }
        closedir($handle);
        if (is_array($list_dir))
            {
            asort($list_dir);
            while (list($cle,$val) = each($list_dir))
                {
                echo "<tr><td><img src='images/actions/folder.png'></td><td><a href=\"$current_file?id=$id&op=move&dest=";
                if ($dest != "")
                    {
                    echo "$dest/";
                    }
                echo "$val&rep=$rep&order_by=$order_by&sens=$sens&fic=$fic\">$val</a></tr>\n";
                }
            }
        echo "</table>";

        echo "<br />";

        echo "<form op='" . $current_file . "' method='post'>\n";
        echo "<input type='hidden' name='op' value='move_ok'>\n";
        echo "<input type='hidden' name='fic' value='". $fic . "'>\n";
        echo "<input type='hidden' name='dest' value='". $dest . "'>\n";
        echo "<input type='hidden' name='rep' value='". $rep . "'>\n";
        echo "<input type='hidden' name='id' value='". $id . "'>\n";
        echo "<input type='hidden' name='order_by' value='". $order_by . "'>\n";
        echo "<input type='hidden' name='sens' value='". $sens . "'>\n";
        echo "<input type='image' src='images/actions/move.png' alt='" . _FM_AM_MOVE . "' style='border: none;'>\n";
        echo "<a href='" . $current_file . "?id=" . $id . "&rep=" . $rep . "&order_by=" . $order_by . "&sens=" . $sens . "'>";
        echo "<img src='images/actions/close.png' alt='" . _FM_AM_CLOSE . "' style='border: none;'>";
        echo "</a>\n";
        echo "</form><br /><hr /><br />\n";
        include_once __DIR__ . '/footer.php';
        xoops_cp_footer();
        break;


    case "move_ok" :
        $destination = XOOPS_ROOT_PATH . DS;
        if ($dest != "")
            {
            $destination .= $dest . DS;
            }
        $destination .= basename( $fic );
        if (file_exists(XOOPS_ROOT_PATH . DS . $fic) && (XOOPS_ROOT_PATH . DS . $fic) != $destination)
            {
            copy(XOOPS_ROOT_PATH . DS . $fic, $destination);
            }
        if ((XOOPS_ROOT_PATH . DS . $fic) != $destination)
            {
            if (file_exists(XOOPS_ROOT_PATH . DS . $fic))
                {
                unlink(XOOPS_ROOT_PATH . DS . $fic);
                }
            }
        header("Location:$current_file?rep=$rep&order_by=$order_by&sens=$sens&id=$id");
        exit;
        break;


    case "delete" :
        xoops_cp_header();
        $adminObject  = \Xmf\Module\Admin::getInstance();
        $adminObject->displayNavigation(basename(__FILE__));
        tool_bar(FALSE);
        echo "<br /><hr /><br />\n";
        echo "<div>\n";
        if(is_dir(XOOPS_ROOT_PATH . DS . $fic))
            {$mime = _FM_AM_DIRECTORY;}
        else
            {$mime= _FM_AM_FILE;}
        echo _FM_AM_PATH_REALLY_DELETE . " " . $mime . " <b>" . $fic . "</b> ?";
        echo "<br /><br />";
        echo "<a href=\"$current_file?op=delete_ok&rep=$rep&fic=$fic&id=$id&order_by=$order_by&sens=$sens\">"._FM_AM_YES."</a>&nbsp;&nbsp;&nbsp;\n";
        echo "<a href=\"$current_file?rep=$rep&id=$id&order_by=$order_by&sens=$sens\">"._FM_AM_NO."</a>\n";
        echo "<br />";
        echo "</div><br /><hr /><br />\n";
        include_once __DIR__ . '/footer.php';        
        xoops_cp_footer();
        break;


    case "delete_ok" :
        $messtmp = "";
        $a_effacer = XOOPS_ROOT_PATH . DS . $fic;
        if (file_exists($a_effacer))
            {
            if (is_dir($a_effacer))
                {
                delDir($a_effacer);
                $messtmp .= "'._FM_AM_THE_DIRECTORY.' <b>$fic</b> '._FM_AM_DELETED.'";
                }
            else
                {
                unlink( $a_effacer );
                $messtmp .= "'._FM_AM_THE_FILE.' <b>$fic</b> '._FM_AM_DELETED.'";
                }
            }
        else
            {
            $messtmp .= ""._FM_AM_REMOVED."";
            }
        $messtmp .= "<br><br><a href=\"$current_file?rep=$rep&id=$id&order_by=$order_by&sens=$sens\">" . _FM_AM_GOBACK . "</a>";
        $messtmp .= "";
        header("Location:$current_file?rep=$rep&id=$id&order_by=$order_by&sens=$sens");
        exit;
        break;


    case "rename" :
        xoops_cp_header();
        $adminObject  = \Xmf\Module\Admin::getInstance();
        $adminObject->displayNavigation(basename(__FILE__));
        $nom_fic = basename($fic);
        tool_bar(FALSE);
        echo "<br /><hr /><br />\n";
        echo "<div>\n";
        echo "<form op='" . $current_file . "' method='post'>\n";
        echo "<input type='hidden' name='op' value='move_ok'>\n";
        echo "<input type='hidden' name='fic' value='". $fic . "'>\n";
        echo "<input type='hidden' name='dest' value='". $dest . "'>\n";
        echo "<input type='hidden' name='rep' value='". $rep . "'>\n";
        echo "<input type='hidden' name='id' value='". $id . "'>\n";
        echo "<input type='hidden' name='order_by' value='". $order_by . "'>\n";
        echo "<input type='hidden' name='sens' value='". $sens . "'>\n";
        echo _FM_AM_RENAME . " <b>" . $nom_fic . "</b> " . _FM_AM_TO . " ";
        echo "<input type='text' name='fic_new' value='" . $nom_fic . "'>\n";

        echo "<br />";

        echo "<input type='image' src='images/actions/rename.png' alt='" . _FM_AM_RENAME . "' style='border: none;'>\n";
        echo "<a href='" . $current_file . "?id=" . $id . "&rep=" . $rep . "&order_by=" . $order_by . "&sens=" . $sens . "'>";
        echo "<img src='images/actions/close.png' alt='" . _FM_AM_CLOSE . "' style='border: none;'>";
        echo "</a>\n";
        echo "</form>\n";
        echo "</div><br /><hr /><br />\n";
        include_once __DIR__ . '/footer.php';
        xoops_cp_footer();
        break;


    case "rename_ok" :
        $err = '';
        $nom_fic = basename($fic);
        $messtmp = "";
        $fic_new = validateFileName($fic_new);
        $old = XOOPS_ROOT_PATH . DS . $fic;
        $new = dirname($old ). DS . $fic_new;
        if ($fic_new == "")
            {
            $messtmp.= _FM_AM_MUST_VALID_NAME; $err=1;
            }
        else if (file_exists($new))
            {
            $messtmp.= "<b>" . $fic_new . "</b> " . _FM_AM_ALREADY_EXISTS; $err=1;
            }
        else
            {
            if (file_exists($old))
                {
                rename($old,$new);
                }
            $messtmp .= "<b>" . $fic . "</b> " . _FM_AM_RENAMED_TO . " <b>" . $fic_new . "</b>";
            }
        $messtmp .= "<br><br><a href=\"$current_file?rep=$rep&id=$id&order_by=$order_by&sens=$sens\">" . _FM_AM_GOBACK . "</a>";
        $messtmp .= "";
        if ($err == "")
            {
            header("Location:$current_file?rep=$rep&order_by=$order_by&sens=$sens&id=$id");
            exit;
            }
        echo "<center>\n";
        echo $messtmp;
        echo "</center>\n";
        break;


    case "mkdir" :
        $err = "";
        $messtmp = "";
        $nomdir = validateFileName($nomdir);
         if ($nomdir == "")
        	{$messtmp.= _FM_AM_MUST_VALID_NAME; $err = 1;}
        else if (file_exists(XOOPS_ROOT_PATH . DS . $rep . DS . $nomdir))
        	{$messtmp.= _FM_AM_DIRECTORY_EXISTS; $err=1;}
        else
            {
            mkdir(XOOPS_ROOT_PATH . DS . $rep . DS . $nomdir,0775);
            $messtmp .= _FM_AM_THE_DIRECTORY . " <b>" . $nomdir . "</b> " . _FM_AM_CREATED_IN . " <b>";
            if ($rep == "")
                {$messtmp .= "/";}
            else
                {$messtmp .= "$rep";}
            $messtmp .= "</b>";
            }
        $messtmp .= "<br><br><a href=\"$current_file?rep=$rep&id=$id&order_by=$order_by&sens=$sens\">"._FM_AM_GOBACK."</a>";
        $messtmp .= "";
        if ( $err == "" )
            {
            header("Location:$current_file?rep=$rep&id=$id&order_by=$order_by&sens=$sens");
            exit;
            }
        echo "<center>\n";
        echo "$messtmp";
        echo "</center>\n";
        break;


    case "file_create" :
        $err = "";
        $messtmp = "";
        $nomfic = validateFileName($nomfic);
        if ($nomfic == "")
            {$messtmp.=""._FM_AM_MUST_VALID_NAME.""; $err=1;}
        else if (file_exists(XOOPS_ROOT_PATH . DS . $rep . DS . $nomfic))
        	{$messtmp.= _FM_AM_FILE_EXISTS; $err=1;}
        else
            {
            $fp = fopen(XOOPS_ROOT_PATH . DS . $rep . DS . $nomfic,"w");
            if (preg_match( "/\.html$/i", $nomfic) || preg_match("/\.htm$/i",$nomfic))
                {
                fputs( $fp, "<html>\n<head>\n<title>Document sans titre</title>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n</head>\n<body bgcolor=\"#FFFFFF\" text=\"#000000\">\n\n</body>\n</html>\n" );
                }
            fclose($fp);
            $messtmp .= "" . _FM_AM_THE_FILE . " <b>$nomfic</b> " . _FM_AM_CREATED_IN . " <b>";
            if ($rep == "")
                {$messtmp .= "/";}
            else
            	{$messtmp .= "$rep";}
            $messtmp .= "</b>";
            }
        $messtmp .= "<br><br><a href=\"$current_file?rep=$rep&id=$id&order_by=$order_by&sens=$sens\">" . _FM_AM_GOBACK . "</a>";
        $messtmp .= "";
        if ($err == "")
            {
            header( "Location:$current_file?rep=$rep&id=$id&order_by=$order_by&sens=$sens" );
            exit;
            }
        echo "<center>\n";
        echo "$messtmp";
        echo "</center>\n";
        break;


    case "upload" :
        $messtmp = "";
        if($rep!="") {$rep_source = "/$rep";} else {$rep_source = "";}
        $destination = "" . XOOPS_ROOT_PATH . "$rep_source";
        if ($userfile_size != 0) {$size_ko = $userfile_size/1024;} else {$size_ko = 0;}
        if ($userfile == "none") {$message = "" . _FM_AM_MUST_SELECT . "";}
        if ($userfile != "none" && $userfile_size != 0)
            {
            $userfile_name = validateFileName($userfile_name);
            if (!copy( $userfile,"$destination/$userfile_name"))
                {
                $message="<br>" . _FM_AM_ERROR_UP . "<br>$userfile_name";
                }
            else
                {
                if (is_editable($userfile_name))
                	{
                	enlever_controlM("$destination/$userfile_name");
                	}
                $message=""._FM_AM_THE_FILE." <b>$userfile_name</b> " . _FM_AM_SUCCESS . " <b>$rep</b>";
                }
            }
        $messtmp .= "$message<br>";
        $messtmp .= "<br><br><a href=\"$current_file?rep=$rep&id=$id&order_by=$order_by&sens=$sens\">"._FM_AM_ERROR_UP."</a>";
        $messtmp .= "";
        header("Location:$current_file?rep=$rep&order_by=$order_by&sens=$sens&id=$id");
        exit;
        break;


    case "disconnect" :
        if (file_exists("logs" . DS . $id . ".php"))
            {
            unlink("logs/$id.php");
            }
        $now = time();
        $eff = $now-(24*3600);
        $handle = opendir("logs");
        while ($file = readdir($handle))
            {
            if ( $file != "." && $file != ".." )
                {
                $tmp = filemtime("logs/$file");
                if ($tmp < $eff)
                    {
                    unlink("logs/$file" );
                    }
                }
            }
        closedir($handle);
        header("Location:$current_file");
        break;


    default :
        xoops_cp_header();
        $adminObject  = \Xmf\Module\Admin::getInstance();
        $adminObject->displayNavigation(basename(__FILE__));
        if(preg_match("/\.\./i",$rep)) {$rep="";}
        // init
        if( $rep == "" )
            {$nom_rep = XOOPS_ROOT_PATH;}
        if($sens=="" || $sens==0)
            {$sens=1;}
        elseif($sens==1)
            {$sens=0;}
        if( $rep != "" )
            {$nom_rep = XOOPS_ROOT_PATH . DS . $rep;}
        if ( !file_exists( XOOPS_ROOT_PATH ) )
            {
            echo _FM_AM_PATH_NOT_CORRECT . "<br /><br /><a href='" . $current_file . "'>" . _FM_AM_GOBACK . "</a>\n";
            exit;
            }
        if ( !is_dir( $nom_rep ) )
            {
            echo "" . _FM_AM_REMOVED . "<br /><br /><a href='javascript:window.history.back()'>" . _FM_AM_GOBACK . "</a>\n";
            exit;
            }

        if( $sens == 1 ){$sens=0;}else{$sens=1;}
        tool_bar(FALSE);
        if( $sens == 1 ){$sens=0;}else{$sens=1;}
        echo "<script language='javascript'>\n";
        echo "function popup(link) {\n";
        echo "var fen=window.open('$current_file?id=$id&op=view&file='+link,'filemanager','status=yes,scrollbars=yes,resizable=yes,width=500,height=400');\n";
        echo "}\n";
        echo "</script>\n";



        echo "<table style='width:100%; border:none;vertical-align:middle;border:1px dotted black;'>\n";
        echo "<tr><td>\n";
        echo "<tr style='font-size:medium;text-align:center;background-color:#cccccc;'>\n";
        if( $rep != "" )
            {$link = "&rep=" . $rep;}
        else
            {$link = "";}
        echo "<td><b><a href='" . $current_file . "?id=" .$id . "&order_by=nom&sens=" . $sens . $link . "'>" . _FM_AM_FILENAME . "</a>";
        if ( $order_by == "nom" || $order_by == "" ) {
            echo "&nbsp;&nbsp;<img src='images/arrow${sens}.png'>";
            }
        echo "</b></td>\n";
        echo"<td><b><a href='" . $current_file . "?id=" . $id . "&order_by=permission&sens=" . $sens . $link . "'>" . _FM_AM_PERMISSION . "</a>";
        if ( $order_by == "permission" ) {
            echo "&nbsp;&nbsp;<img src='images/arrow${sens}.png'>";
            }
        echo "</b></td>\n";
        echo"<td><b><a href=\"$current_file?id=$id&order_by=size&sens=$sens" . $link . "\">" . _FM_AM_FILESIZE . "</a>";
        if ( $order_by == "size" ) {
            echo "&nbsp;&nbsp;<img src='images/arrow${sens}.png'>";
            }
        echo "</b></td>\n";
        echo "<td><b><a href=\"$current_file?id=$id&order_by=type&sens=$sens" . $link . "\">" . _FM_AM_FILETYPE . "</a>";
        if ( $order_by == "type" ) {
            echo "&nbsp;&nbsp;<img src='images/arrow${sens}.png'>";
            }
        echo "</b></td>\n";
        echo "<td><b><a href=\"$current_file?id=$id&order_by=mod&sens=$sens" . $link . "\">" . _FM_AM_MODIFIED . "</a>\n";
        if ( $order_by == "mod" ) {
            echo "&nbsp;&nbsp;<img src='images/arrow${sens}.png'>";
            }
        echo "</b></td>\n";
        echo "<td align='center'><b>" . _FM_AM_ACTIONS . "</b></td>\n";
        echo "</tr>\n";
        if($sens==1){$sens  =0;}else{$sens=1;}
        if ( $rep != "" ) {
            $nom = dirname($rep);
            echo "<tr><td style='text-align:left;'>";
            echo "<a href='" . $current_file . "?id=" .$id . "&sens=" . $sens . "&order_by=" . $order_by;
            if ( $rep != $nom && $nom != "." ) {echo "&rep=" . $nom;}
            echo "' title='" . _FM_AM_PARENTDIR . "'>";
            echo "<img src='images/actions/folder.png' alt='" . _FM_AM_PARENTDIR . "' style='border:none'>" . " .." . "</a></td>";
            echo "<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>\n";
            }
        list($list,$TotalSize) = listing($nom_rep, $order_by, $sens);
        if ( is_array( $list ) )
            {
            while (list($file, $mime)  = each($list))
                {
                if (is_dir($nom_rep . DS . $file) ) {
                    $link = "$current_file?id=$id&sens=$sens&order_by=$order_by&rep=";
                    if ( $rep != "" ) {$link .= $rep . DS;}
                    $link .= $file;
                    $display_FM_AM_COPY = FALSE;
                    }
                else {
                    $link = "$current_file?id=$id&order_by=$order_by&sens=$sens&op=edit&rep=";  
                    if ( $rep != "" ) {$link .= $rep . DS;}
                    $link .= $file;
                    $link = 'javascript:popup("' . $file . '")';
                    $display_FM_AM_COPY = TRUE;
                    }
                echo "<tr>\n";

                echo "<td style='text-align:left;vertical-align:middle;border-bottom: 1px dotted black;padding:2px 0 2px 0;'>\n";
                if ( is_editable($file) || is_image($file) || is_dir($nom_rep . DS . $file) )
                    echo "<a href='$link'>";
                echo "<img src='images/mimetypes/" . getMimetype($nom_rep . DS . $file, "image" ) . "' style='border:none;'> ";
                echo "$file";
                if ( is_editable($file) || is_image($file) || is_dir($nom_rep . DS . $file) )
                    echo "</a>\n";
                echo "</td>\n";
                echo "<td style='width:11%;text-align:left;vertical-align:middle;border-bottom: 1px dotted black;'>" . getPermissions($nom_rep . DS . $file, true, true ) . "</td>\n";
                echo "<td style='width:11%;text-align:left;vertical-align:middle;border-bottom: 1px dotted black;'>" . withMultipleSize(filesize($nom_rep . DS . $file)) . "</td>\n";
                echo "<td style='width:15%;text-align:left;vertical-align:middle;border-bottom: 1px dotted black;'>" . getMimetype($nom_rep . DS . $file, "type" ) . "</td>\n";
                echo "<td style='width:17%;text-align:left;vertical-align:middle;border-bottom: 1px dotted black;'>" . date_modif($nom_rep . DS . $file) . "</td>\n";
                echo "<td style='width:21%;text-align:left;vertical-align:middle;border-bottom: 1px dotted black;'>";

                if ( $display_FM_AM_COPY == TRUE ) {
                    echo "<a href='" . $current_file . "?id=" . $id . "&op=copy&sens=" . $sens . "&order_by=" . $order_by . "&rep=";
                    echo (($rep != "") ? $rep . "&fic=" . $rep . DS : "&fic=");
                    echo $file . "' title='" . _FM_AM_COPY . "'><img src='images/actions/copy.png' alt='" . _FM_AM_COPY . "' style='border:none;'></a>\n";
                    }
                else {
                    echo "<img src='images/pixel.png' style='width:22px; height:22px; border:none;'>\n";
                    }

                if ( $display_FM_AM_COPY == TRUE ) {
                    echo "<a href='" . $current_file . "?id=" . $id . "&op=move&order_by=" . $order_by . "&sens=" . $sens . "&rep=";
                    echo (($rep != "") ? $rep . "&fic=" . $rep . DS : "&fic=");
                    echo $file . "' title='" . _FM_AM_MOVE . "'><img src='images/actions/move.png' alt='" . _FM_AM_MOVE . "' style='border:none;'></a>\n";
                    }
                else {
                    echo "<img src='images/pixel.png' style='width:22px; height:22px; border:none;'>\n";
                    }

                echo "<a href='" . $current_file . "?id=" . $id . "&order_by=" . $order_by . "&sens=" . $sens . "&op=rename&rep=";
                echo (($rep != "") ? $rep . "&fic=" . $rep . DS : "&fic=");
                echo $file . "' title='" . _FM_AM_RENAME . "'><img src='images/actions/rename.png' alt='" . _FM_AM_RENAME . "' style='border:none;'></a>\n";

                echo "<a href='" . $current_file . "?id=" . $id . "&op=delete&order_by=" . $order_by . "&sens=" . $sens. "&rep=";
                echo (($rep != "") ? $rep . "&fic=" . $rep . DS : "&fic=");
                echo $file . "' title='" . _FM_AM_DELETE . "'><img src='images/actions/delete.png' alt='" . _FM_AM_DELETE . "' style='border:none;'></a>\n";

                if (is_editable($file) && !is_dir(XOOPS_ROOT_PATH . DS . $file)) {
                    echo "<a href='" . $current_file . "?id=" . $id . "&order_by=" . $order_by . "&sens=" . $sens . "&op=edit&rep=";
                    echo (($rep != "") ? $rep . "&fic=" . $rep . DS : "&fic=");
                    echo $file . "' title='" . _FM_AM_EDIT . "'><img src='images/actions/edit.png' alt='" . _FM_AM_EDIT . "' style='border:none;'></a>\n";
                    }
                else {
                    echo "<img src='images/pixel.png' style='width:22px; height:22px; border:none;'>\n";
                    }

                if ( $display_FM_AM_COPY == TRUE ) {
                    echo "<a href='" . $current_file . "?id=" . $id . "&op=download&file=";
                    echo (($rep != "") ? $rep . DS : "");
                    echo $file . "' title='" . _FM_AM_DOWNLOAD . "'>";
                    echo "<img src='images/actions/download.png' alt='" . _FM_AM_DOWNLOAD . "' style='width:20px; height:20px; border:none;'></a>\n";
                    }
                echo "</td>\n";
                echo "</tr>\n";
                }
            }

        echo "<tr>\n";
        echo "<td>&nbsp;</td>\n";
        echo "<td width='11%'>&nbsp;</td>\n";
        echo "<td width='11%'>" . $TotalSize . "</td>\n";
        echo "<td width='15%'>&nbsp;</td>\n";
        echo "<td width='17%'>&nbsp;</td>\n";
        echo "<td width='21%'>&nbsp;</td>\n";
        echo "</tr>\n";
        echo "</table>\n";



        echo "<br /><hr /><br /><div style='float:left;width:30%;text-align:center;'>";
        echo "<img src='images/actions/upload.png' />" . _FM_AM_UPLOAD_IN_DIR;
        echo "<b>" . (( $rep == "" )? "/" : $rep) . "</b>\n";
        echo "<form enctype='multipart/form-data' op='" . $current_file . "' method='post'>\n";
        echo "&nbsp;&nbsp;\n";
        echo "<input type='file' name='userfile' size='30'>\n";
        echo "<input type='hidden' name='op' value='upload'>\n";
        echo "<input type='hidden' name='id' value='" . $id . "'>\n";
        echo "<input type='hidden' name='rep' value='" . $rep . "'>\n";
        echo "<input type='hidden' name='order_by' value='" . $order_by . "'>\n";
        echo "<input type='hidden' name='sens' value='" . $sens . "'>\n";
        echo "<input type='submit' name='Submit' value='" . _FM_AM_UPLOAD . "'>\n";
        echo "</form>\n";
        echo "</div>";

        //echo "<br />";

        echo "<div style='float:left;width:30%;text-align:center;'>";
        echo "<img src='images/actions/folder.png' />" . _FM_AM_NEWDIR;
        echo "<b>" . (( $rep == "" )? "/" : $rep) . "</b>\n";
        echo "<form method='post' op='" . $current_file . "'>\n";
        echo "&nbsp;&nbsp;\n";
        echo "<input type='text' name='nomdir' size='30'>\n";
        echo "<input type='hidden' name='rep' value='" . $rep . "'>\n";
        echo "<input type='hidden' name='op' value='mkdir'>\n";
        echo "<input type='hidden' name='id' value='" . $id . "'>\n";
        echo "<input type='hidden' name='order_by' value='" . $order_by . "'>\n";
        echo "<input type='hidden' name='sens' value='" . $sens . "'>\n";
        echo "<input type='submit' name='Submit' value='" . _FM_AM_CREATE . "'>\n";
        echo "</form>\n";
        echo "</div>";

        //echo "<br />";

        echo "<div style='float:left;width:30%;text-align:center;'>";
        echo "<img src='images/actions/defaut.png' />" . _FM_AM_CREATENEW;
        echo "<b>" . (( $rep == "" )? "/" : $rep) . "</b>\n";
        echo "<form method='post' op='" . $current_file . "'>\n";
        echo "&nbsp;&nbsp;\n";
        echo "<input type='text' name='nomfic' size='30'>\n";
        echo "<input type='hidden' name='rep' value='" . $rep . "'>\n";
        echo "<input type='hidden' name='op' value='file_create'>\n";
        echo "<input type='hidden' name='id' value='" . $id . "'>\n";
        echo "<input type='hidden' name='order_by' value='" . $order_by . "'>\n";
        echo "<input type='hidden' name='sens' value='" . $sens . "'>\n";
        echo "<input type='submit' name='Submit' value='" . _FM_AM_CREATE . "'>\n";
        echo "</form>";
        echo "</div><br /><br /><hr /><br />";
        include_once __DIR__ . '/footer.php';
        xoops_cp_footer();
        break;
    }


// +++++++++++++++++++++++++++++ FUNCTIONS +++++++++++++++++++++++++++++


function listing( $nom_rep, $order_by, $sens ) {
    global $current_file;
    $TotalSize = 0;
    $handle = opendir($nom_rep);
    while ($file = readdir($handle))
        {
        if ( $file != "." && $file != ".." )
            {
            $FileSize = filesize($nom_rep . DS . $file);
            $TotalSize += $FileSize;
            if ( is_dir($nom_rep . DS . $file) )
                {
                if( $order_by == "mod" )
                    {$list_rep[$file]=filemtime($nom_rep . DS . $file);}
                else
                    {$list_rep[$file]=$file;}
                }
            else
                {
                if( $order_by == "nom" )
                    {$list_fic[$file] = getMimetype($nom_rep . DS . $file,"image");}
                else if( $order_by == "size" )
                    {$list_fic[$file] = $FileSize;}
                else if( $order_by == "mod" )
                    {$list_fic[$file] = filemtime($nom_rep . DS . $file);}
                else if( $order_by == "type" )
                    {$list_fic[$file] = getMimetype($nom_rep . DS . $file,"type");}
                else
                    {$list_fic[$file] = getMimetype($nom_rep . DS . $file,"image");}
                }
            }
        }
    closedir( $handle );
    if ( is_array( $list_fic ) ) {
        if ( $order_by == "nom" )
            {if ( $sens == 0 ) {ksort( $list_fic );} else {krsort( $list_fic );}}
        else if ( $order_by == "mod" )
            {if ( $sens == 0 ) {arsort( $list_fic );} else {asort( $list_fic );}}
        else if ( $order_by == "size" || $order_by == "type" )
            {if ( $sens == 0 ) {asort( $list_fic );} else {arsort( $list_fic );}}
        else
            {if ( $sens == 0 ) {ksort( $list_fic );} else {krsort( $list_fic );}}
        }
    if ( is_array( $list_rep ) ) {
    if ( $order_by == "mod" )
        {if ( $sens == 0 ) {arsort( $list_rep );} else {asort( $list_rep );}}
    else
        {if ( $sens == 0 ) {ksort( $list_rep );} else {krsort( $list_rep );}}
    }
    $list = joinTables($list_rep, $list_fic, $sens);

    
    $TotalSize = withMultipleSize($TotalSize);
    return array( $list, $TotalSize );
    }


function tool_bar($go_back = FALSE) {
    global $current_file, $id, $order_by, $sens, $xoopsUser, $xoopsConfig, $rep;
    $user = '';
    $addchemin = '';
    echo "<table width='100%'><tr><td><b>\n";
    if ( $go_back == FALSE )
    echo "<a href='";
    echo $current_file . "?id=" . $id . "&order_by=" . $order_by . "&sens=" . $sens;
    if ( $go_back == TRUE )
        echo "&rep=" .$rep;
    echo "'><img src='images/actions/folder.png'>&nbsp;&nbsp;";
    if ( $go_back == TRUE ) {
        echo _FM_AM_GOBACK . "</a>";
        }
    else {
        echo "/" . "</a>";
        $array_chemin = explode("/", $rep);
        while (list($cle, $val) = each($array_chemin)) {
            if ( $val != "" ) {
                if($addchemin != "") {$addchemin= $addchemin . "/" . $val;} else {$addchemin = $val;}

            echo "<a href='" . $current_file . "?id=" . $id . "&order_by=" . $order_by . "&sens=" . $sens . "&rep=" . $addchemin . "'>" .$val . "</a>";
            echo "/";
                }
            }
        }
    echo "</b></td>";
    echo "<td align='right'>\n";
    echo "<a href='javascript:location.reload()' title='" . _FM_AM_REFRESHPAGE . "'><img src='images/actions/refresh.png' alt='" . _FM_AM_REFRESHPAGE . "' style='border:none;'></a>&nbsp;&nbsp;\n";
    echo "<a href='help.php' title='" . _FM_AM_HELP . "'><img src='images/actions/help.png' alt='" . _FM_AM_HELP . "' style='border:none;'></a>&nbsp;&nbsp;\n";
    if (($xoopsUser) && ($xoopsUser->isAdmin()))
        echo ""; 
    echo "</td></tr></table>\n";
    }


