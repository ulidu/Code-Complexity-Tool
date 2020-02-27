<?php

$ds = DIRECTORY_SEPARATOR;  // Store directory separator (DIRECTORY_SEPARATOR) to a simple variable. This is just a personal preference as we hate to type long variable name.
$storeFolder = 'uploads';   // Declare a variable for destination folder.

$tempFile = $_FILES['file']['tmp_name'];          // If file is sent to the page, store the file object to a temporary variable.
$targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  // Create the absolute path of the destination folder.

$newFileName = $_FILES['file']['name'];
$targetFile =  $targetPath.$newFileName;  // Create the absolute path of the uploaded file destination.
move_uploaded_file($tempFile,$targetFile); // Move uploaded file to destination.

?>
