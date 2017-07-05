<?php
$dir = "";
$file="indexscan.php";
$verifyMessage="";
			$checksum ="2e0608ee9e4e69478a79f626466c0599"; // php checksum Linux
			$checksumNT = "68d23ba66089cedbe83ae31f3fbe719c"; // php checksum Winnt
			$indexscanfile =  $dir.$file; 
				if ( md5_file($indexscanfile) != $checksum && md5_file($indexscanfile) != $checksumNT) {
					$verifyMessage .= '<h3 style="color:red">' .$file._AM_INDEXSCAN_NOTVERIFY."<img src='images/alert.png'></img>"."<br>";
				}
		elseif ( md5_file($indexscanfile) == $checksum ) {
}
