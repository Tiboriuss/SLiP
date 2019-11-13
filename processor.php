<?php
if(isset($_POST['fname'])) {
    $data = $_POST['fname'] . "\r\n";
    $ret = file_put_contents('mydata.txt', $data, FILE_WRITE | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo '<script>window.close();</script>';
    }
}
else {
   die('no post data to process');
}