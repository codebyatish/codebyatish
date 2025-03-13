<?php

$countfiles = count($_FILES['files']['name']);
$upload_location = "uploads/";
$files_array = array();
for($i = 0;$i < $countfiles; $i++){
$filename = $_FILES['files']['name'][$i];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$valid_ext = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg', 'gif');
if(in_array($ext, $valid_ext)){
$path = $upload_location.$filename;
if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$path)){
$files_array[] = $path;
}
}

}

echo json_encode($files_array);
die;


?>