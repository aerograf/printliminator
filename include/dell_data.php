<?php
if ($objs = glob($dir."data/*")) {
    echo $objs;
    foreach($objs as $obj) {
        if(is_dir($obj)){

        }else{
            unlink($obj);
        }
    }
}
rmdir($dir);
echo '<script>history.go(-1);</script>';