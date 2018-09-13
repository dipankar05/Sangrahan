<?php
if(isset($_POST['field1']) && isset($_POST['field2']) && isset($_POST['field3']) && isset($_POST['field4']) && isset($_POST['field5']) && isset($_POST['field6'])) {
    $data = $_POST['field1'] . ',' . $_POST['field2'] . ',' . $_POST['field3'] . ',' . $_POST['field4'] . ',' . $_POST['field5'] . ',' . $_POST['field6'] . "\n";
    $ret = file_put_contents('Soildata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There is an error saving');
    }
    else {
        $homepage = file_get_contents('index.html');
        echo $homepage;
        echo "Data saved successfully";
    }
}
else {
   die('no post data to process');
}
?>