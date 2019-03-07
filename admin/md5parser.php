<?php
define('_CHECK_SUM', '9f830dc5ac147aba24306869de07e57a');   // php checksum Linux
define('_CHECK_SUM_NT', '538d3f8d1a9279360a92ac1e4b8e410a');// php checksum Winnt
    $dir  = '';
    $file = 'indexscan.php';
    $verifyMessage = '';
	$checksum = _CHECK_SUM; 
	$checksumNT = _CHECK_SUM_NT; 
	$indexscanfile =  $dir . $file;

		if (md5_file($indexscanfile) != $checksum && md5_file($indexscanfile) != $checksumNT) {
		  $verifyMessage .= '<h3 style="color:red">'
          . $file
          . _AM_INDEXSCAN_NOTVERIFY
          . '<img src="images/alert.png"></img>'
          . '<br><br><a href="help.php#indexscan" title="'
          . _FM_AM_HELP
          . '"><img src="images/actions/help.png" alt="'
          . _FM_AM_HELP
          . '" style="border:none;"></a>&nbsp;&nbsp;';
	}

	elseif ( md5_file($indexscanfile) == $checksum ) {
    }
