<?php

$ds = DIRECTORY_SEPARATOR;  // Store directory separator (DIRECTORY_SEPARATOR) to a simple variable. This is just a personal preference as we hate to type long variable name.
$storeFolder = 'uploads';   // Declare a variable for destination folder.

$tempFile = $_FILES['file']['tmp_name'];        // If file is sent to the page, store the file object to a temporary variable.
$targetPath = __DIR__ . $ds . $storeFolder . $ds;  // Create the absolute path of the destination folder.

$newFileName = $_FILES['file']['name'];
$targetFile = $targetPath . $newFileName;  // Create the absolute path of the uploaded file destination.
move_uploaded_file($tempFile, $targetFile); // Move uploaded file to destination.

// Include and initialize Extractor class (Zip file extracting)
require 'Extractor.class.php';
$extractor = new Extractor;

// Path of archive file
$archivePath = $targetFile;

// Destination path
$destPath = $storeFolder;

// Extract archive file
$extract = $extractor->extract($archivePath, $storeFolder);

$dir_name = $storeFolder;
$ext = 'zip';

if ($extract) {
    echo $GLOBALS['status']['success'];
    unlink_recursive($dir_name, $ext);

} else {
    echo $GLOBALS['status']['error'];
}


if ($handle = opendir('uploads')) {

    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {

            $entry_arr_af = preg_split("/\.java/", $entry);
            $entry_arr = array_filter($entry_arr_af);

            foreach ($entry_arr

                     as $files) {

                $content = file_get_contents('uploads/' . $entry);

//  Removes single line '//' comments, treats blank characters
                $single = preg_replace('![ \t]*//.*[ \t]*[\r\n]!', '', $content);

                $multiple = preg_replace('#/\*[^*]*\*+([^/][^*]*\*+)*/#', '', $single);
                $excess = preg_replace('/\s+/', ' ', $multiple);
                $trim = trim($excess, " ");
//$for_semicolon = preg_replace('/;(?=((?!\().)*?\))/', ';', $trim);
                $for_semicolon = preg_replace_callback(/** @lang text */ '~\b(?:while|for)\s*(\((?:[^()]++|(?1))*\))~u', static function ($m) {
                    return str_replace(';', ';', $m[0]);
                },
                    $trim);
                $split = preg_split('/(?<=[;{}])/', $for_semicolon, 0, PREG_SPLIT_NO_EMPTY);

                $_SESSION['split_code'] = $split;
                $_SESSION['files'] = $entry;
                $_SESSION['trimmed'] = $trim;
                $_SESSION['entireCode'] = $trim;
                $_SESSION['filename'] = $entry;

                $entry_arr_af = preg_split("/\.java/", $entry);
                $entry_arr = array_filter($entry_arr_af);

                foreach ($entry_arr as $files_arr) {

                    $fi = new FilesystemIterator($storeFolder, FilesystemIterator::SKIP_DOTS);
                    $limit = (iterator_count($fi));

                    $lastRow = "SELECT * FROM ( SELECT * FROM ci ORDER BY CiID DESC LIMIT $limit) result ORDER BY CiID ASC";
                    $run_query_last = mysqli_query($con, $lastRow);


                    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                        $CiID_last = $lastrow['CiID'];
                        $CiValue_last = $lastrow['CiValue'];

                        $lastRow = "SELECT * FROM inheritance ORDER BY InheritanceID DESC LIMIT 1";
                        $run_query_last = mysqli_query($con, $lastRow);

                        while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                            $InheritanceID_last = $lastrow['InheritanceID'];
                            $NoInheritance_last = $lastrow['NoInheritance'];
                            $OneUserDefined_last = $lastrow['One'];
                            $TwoUserDefined_last = $lastrow['Two'];
                            $ThreeUserDefined_last = $lastrow['Three'];
                            $MoreUserDefined_last = $lastrow['MoreThree'];


                            $i = 0;  //increment to each loop
                            $line_count = 0;
                            $count = 0;
                            $count2 = 0;
                            $total_ci = 0;

//Default weights
                            global $weight_no_ud_class;
                            $weight_no_ud_class = $NoInheritance_last;
                            $weight_one_ud_class = $OneUserDefined_last;
                            $weight_two_ud_class = $TwoUserDefined_last;
                            $weight_three_ud_class = $ThreeUserDefined_last;
                            $weight_more_ud_class = $MoreUserDefined_last;


// sorting classes end
                            $count = 0;
                            $classes = [];  //array to store class objects
                            $inClasses = false;
                            $parsed1 = null;
                            $parsed1 = null;
                            $parsed2 = null;
                            $pos = null;
                            $pos1 = null;
                            $indirect = 0;
                            $tot_inheritance = 0;


                            foreach ($split

                                     as $val) { // Traverse the array with FOREACH

                                $direct = 0;
                                $indirect = 0;
                                $tot_inheritance = 0;
                                $ci = 0;

                                //Calling the two functions of getBetween to sort the class_names
                                $val;
                                $arr = $val;

                                // $parent_class = $parsed;
                                // $child_class = $parsed1;
                                // $found_parent = $parsed2;
                                $parsed = getBetween($arr, "class", "{");

                                $parsed1 = getBetween($arr, "class", "extends");

                                $parsed2 = getBetween($arr, "extends", "{");

                                //pos_extends = pos;
                                //pos_class = pos1;

                                $word_1 = 'extends';
                                $pos = strpos($arr, $word_1);

                                $word_2 = "class";
                                $pos1 = strpos($arr, $word_2);

                                $pos2 = strpos($arr, $parsed2);


                                // $pos1 = strpos($arr, $parsed);

                                /*Aruni--------
                            if ($pos == true && $parsed1 == true) {

                            $direct++;   //direct inheritance
                            $pr = $parsed1;


                            } elseif ($pos == true) {

                            $direct++;   //direct inheritance
                            $pr = $parsed1;


                            } else {

                            //echo  $parsed ;
                            $pr = $parsed;
                            }

                            ++$count2;
                            if ($count2 == '25') {
                            ++$indirect; //indirect inheritance
                            }


                            // Direct + Indirect;
                            $tot_inheritance = $direct + $indirect;  //total inheritance

                            $ci = $tot_inheritance;

                            $total_ci += $ci;
                            Aruni ends*/
                                // $direct = 0;
                                // $indirect = 0;
                                //To check the classes and push classes as objects into an array
                                if (is_integer($pos1)) {


                                    if (is_integer($pos) && is_string($parsed1)) {
                                        $p = $parsed1;

                                    } elseif (is_integer($pos) && is_string($parsed)) {
                                        $p = $parsed;
                                    } else if (is_integer($pos1) && is_string($parsed)) {
                                        $p = $parsed;

                                    }

                                    $className = $p;

                                    foreach ($classes as $key) {
                                        if ($key->get_name() == $className) {
                                            $inClasses = true;
                                        }
                                    }

                                    if (!$inClasses) {

                                        $classObj = new inheri;
                                        $classObj->set_name($className);

                                        array_push($classes, $classObj);
                                    }


                                    if ($pos == true && is_string($parsed1)) {
                                        foreach ($classes as $key) {
                                            if ($key->get_name() == $parsed1) {
                                                $key->set_extends($parsed2);
                                            }
                                        }
                                    }
                                    //pushing ends

                                    // $ci = $tot_inheritance;

                                }
                            }

                            $i = 0;
                            $cnt = 0;

//Call NIDI function recursively and set NIDI of the class object
                            foreach ($classes as $key) {
                                $firstName = $key->get_name();
                                $name = $key->get_extends();
                                if (!empty($name)) {
                                    $cnt++;
                                    findNidi($name);
                                    $key->set_indirect($cnt - 1);
                                }

                            }


                            ?>

                            <?php
                            foreach ($classes as $key) {
                                $tot_inheritance = $key->get_direct() * $weight_one_ud_class + $key->get_indirect();
                                $i++;

                                if ($tot_inheritance <= 3) {
                                    $ci = $tot_inheritance;

                                } else {
                                    $ci = 4;

                                }
                                $total_ci = $total_ci + $ci;

                                $query = "INSERT INTO methods(PrimitiveReturnType,CompositeReturnType,VoidReturnType,PrimitiveParameter,CompositeParameter) VALUES('$PrimitiveReturnType','$CompositeReturnType','$VoidReturnType','$PrimitiveParameter','$CompositeParameter')";

                                $create_query = mysqli_query($con, $query);

                            }



                        }



                    }

                }
            }

        }
    }
    closedir($handle);
}


?>
