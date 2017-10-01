<?PHP
require_once('pclzip.lib.php');
$archive = new PclZip('data.zip');
if ($archive->extract() == 0) {
die("Error : " . $archive->errorInfo(true));
}else{
echo '<script>history.go(-1);</script>';
}
