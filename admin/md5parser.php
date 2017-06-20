<?php
$dir = "";
$file="indexscan.php";
$verifyMessage="";
	//
			$checksum ="90264303a5fc2a88c82c2d8660f16adc"; // php checksum Linux
			$checksumNT = "948b84bdf0a8bf5ff36fe3146e46c2df"; // php checksum Winnt
			$indexscanfile =  $dir.$file; 
			//echo "<br><br>".$dir.$file." : ".md5_file("$indexscanfile")." = ".$checksum;
				if ( md5_file($indexscanfile) != $checksum && md5_file($indexscanfile) != $checksumNT) {
					//echo "$file content invalid\n";
					$verifyMessage .= $file._AM_INDEXSCAN_NOTVERIFY."<img src='images/alert.png'></img>"."<br>";
				}
		elseif ( md5_file($indexscanfile) == $checksum ) {
				//$verifyMessage .= $file._AM_INDEXSCAN_VERIFIED."<img src='verified.png'></img>"."<br>";
}

?> 