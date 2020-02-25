<?php

    $folder_name = 'uploads/';

    if(!empty($_FILES))
    {
        $temp_file = $_FILES['file']['tmp_name'];
        $location = $folder_name . $_FILES['file']['name'];
        move_uploaded_file($temp_file, $location);

    }

    if(isset($_POST["name"]))
    {
        $filename = $folder_name.$_POST["name"];
        unlink($filename);

    }

    $result = array();

    $files = scandir('uploads');

?>
