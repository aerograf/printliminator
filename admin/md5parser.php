<?php
$dir = "";
$file="indexscan.php";
$verifyMessage="";
			$checksum ="3de759e272b9e8b036b47b45368c9c5c"; // php checksum Linux
			$checksumNT = "21f26ddcac000cce7da7a8f72fb6ffc9"; // php checksum Winnt
			$indexscanfile =  $dir . $file; 
				if ( md5_file($indexscanfile) != $checksum && md5_file($indexscanfile) != $checksumNT) {
					$verifyMessage .= '<h3 style="color:red">'
          . $file
          . _AM_INDEXSCAN_NOTVERIFY
          . "<img src='images/alert.png'></img>"
          . "<br>";
				}
		elseif ( md5_file($indexscanfile) == $checksum ) {
}
