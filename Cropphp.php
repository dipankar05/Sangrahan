<?php
if(isset($_POST['field1']) && isset($_POST['field2']) && isset($_POST['field3']) && isset($_POST['field4']) && isset($_POST['field5']) && isset($_POST['field6']) && isset($_POST['field7']) && isset($_POST['field8']) && isset($_POST['field9']) && isset($_POST['field10']) && isset($_POST['field11']) && isset($_POST['field12']) && isset($_POST['field13']) && isset($_POST['field14']) && isset($_POST['field15']) && isset($_POST['field16']) && isset($_POST['field17']) && isset($_POST['field18']) && isset($_POST['field19']) && isset($_POST['field20']) && isset($_POST['field21']) && isset($_POST['field22']) && isset($_POST['field23']) && isset($_POST['field24']) && isset($_POST['field25']) && isset($_POST['field26'])) {
    $data = $_POST['field1'] . ',' . $_POST['field2'] . ',' . $_POST['field3'] . ',' . $_POST['field4'] . ',' . $_POST['field5'] . ',' . $_POST['field6'] . ',' . $_POST['field7'] . ',' . $_POST['field8'] . ',' . $_POST['field9'] . ',' . $_POST['field10'] . ',' . $_POST['field11'] . ',' . $_POST['field12'] . ',' . $_POST['field13'] . ',' . $_POST['field14'] . ',' . $_POST['field15'] . ',' . $_POST['field16'] . ',' . $_POST['field17'] . ',' . $_POST['field18'] . ',' . $_POST['field19'] . ',' . $_POST['field20'] . ',' . $_POST['field21'] . ',' . $_POST['field22'] . ',' . $_POST['field23'] . ',' . $_POST['field24'] . ',' . $_POST['field25'] . ',' . $_POST['field26'] .  "\n";
    $ret = file_put_contents('Cropdata.txt', $data, FILE_APPEND | LOCK_EX);
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