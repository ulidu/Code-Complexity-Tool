<?php

if (!isset($_GET['reload'])) {
    echo '<meta http-equiv=Refresh content="0;url=control_structures.php?reload=1">';
}

?>

<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>

<?php
function getContentsBetween($str, $startDelimiter, $endDelimiter)
{
    $contents = array();
    $startDelimiterLength = strlen($startDelimiter);
    $endDelimiterLength = strlen($endDelimiter);
    $startFrom = $contentStart = $contentEnd = 0;
    while (false !== ($contentStart = strpos($str, $startDelimiter, $startFrom))) {
        $contentStart += $startDelimiterLength;
        $contentEnd = strpos($str, $endDelimiter, $contentStart);
        if (false === $contentEnd) {
            break;
        }
        $contents[] = substr($str, $contentStart, $contentEnd - $contentStart);
        $startFrom = $contentEnd + $endDelimiterLength;
    }

    return $contents;

}

?>

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
    $firstNoOfArrays = 1000000000;
    $icount = 0;
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

                $count_rows = count($split);


                ?>


                <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                <!-- begin:: Content Head -->
                <div class="kt-subheader  kt-grid__item" id="kt_subheader">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">Control Structures Complexity of the Program</h3>
                            <span class="kt-subheader__separator kt-subheader__separator--v"></span>


                            <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                                <input type="text" class="form-control" placeholder="Search order..."
                                       id="generalSearch">
                                <span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="flaticon2-search-1"></i></span>
										</span>
                            </div>
                        </div>
                        <div class="kt-subheader__toolbar">
                            <a href="total_weight.php"
                               class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
                                Total Weight of the Program
                            </a>

                        </div>
                    </div>
                </div>

                <!-- end:: Content Head -->
                <?php


                $entry_arr_af = preg_split("/\.java/", $entry);
                $entry_arr = array_filter($entry_arr_af);

                foreach ($entry_arr as $files_arr) {

                    $fi = new FilesystemIterator($storeFolder, FilesystemIterator::SKIP_DOTS);
                    $limit = (iterator_count($fi));

                    $lastRow = "SELECT * FROM ( SELECT * FROM ccs ORDER BY CcsID DESC LIMIT $limit) result ORDER BY CcsID ASC";
                    $run_query_last = mysqli_query($con, $lastRow);

                    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                        $CcsID_last = $lastrow['CcsID'];
                        $CcsValue_last = $lastrow['CcsValue'];

                        ?>
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                            <!--Begin::Dashboard 3-->
                            <!--Begin::Row-->
                            <div class="row">


                                <div class="col-lg-12">


                                    <!--begin::Portlet-->
                                    <div style="background-color: #F4F7FF;"
                                         class="kt-portlet kt-portlet--skin-solid kt-portlet--">
                                        <div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon kt-font-brand">
													<i class="flaticon-time-1"></i>
												</span>
                                                <h3 class="kt-portlet__head-title kt-font-brand">
                                                    Complexity of the Program due to Control Structures
                                                </h3>
                                            </div>

                                        </div>
                                        <div class="kt-portlet__body kt-font-brand">


                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="kt-portlet kt-iconbox kt-iconbox--brand kt-iconbox--animate-slower">
                                                        <div class="kt-portlet__body">
                                                            <div class="kt-iconbox__body">
                                                                <div class="kt-iconbox__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px"
                                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                                         class="kt-svg-icon">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                            <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                                                  fill="#000000" opacity="0.3"/>
                                                                            <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                                                  fill="#000000"/>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="kt-iconbox__desc kt-font-brand">

                                                                        <center><h1 style="font-family: 'Fira Code'">Ccs
                                                                                : <?php echo $CcsValue_last ?>


                                                                            </h1></center>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="kt-portlet__foot">
                                                <div class="kt-form__actions">
                                                    <div class="row">


                                                        <!-- begin:: Content -->
                                                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

                                                            <div class="kt-portlet kt-portlet--mobile">
                                                                <div class="kt-portlet__head kt-portlet__head--lg">
                                                                    <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                                                                        <h3 class="kt-portlet__head-title kt-font-brand">
                                                                            Complexity of the Program due to the Control
                                                                            Structures by Statement
                                                                            : </h3>&nbsp;
                                                                        <h3 class="kt-portlet__head-title kt-font-dark"><?php echo $entry; ?>
                                                                        </h3>
                                                                    </div>
                                                                    <div class="kt-portlet__head-toolbar">
                                                                        <div class="kt-portlet__head-wrapper">
                                                                            <div class="kt-portlet__head-actions">
                                                                                <div class="dropdown dropdown-inline">
                                                                                    <button type="button"
                                                                                            class="btn btn-default btn-icon-sm dropdown-toggle"
                                                                                            data-toggle="dropdown"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false">
                                                                                        <i class="la la-download"></i>
                                                                                        Export
                                                                                    </button>
                                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                                        <ul class="kt-nav">
                                                                                            <li class="kt-nav__section kt-nav__section--first">
                                                                                                <span class="kt-nav__section-text">Choose an option</span>
                                                                                            </li>
                                                                                            <li class="kt-nav__item">
                                                                                                <a href="#"
                                                                                                   class="kt-nav__link">
                                                                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                                                                    <span class="kt-nav__link-text">Print</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li class="kt-nav__item">
                                                                                                <a href="#"
                                                                                                   class="kt-nav__link">
                                                                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                                                                    <span class="kt-nav__link-text">Copy</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li class="kt-nav__item">
                                                                                                <a href="#"
                                                                                                   class="kt-nav__link">
                                                                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                                                                    <span class="kt-nav__link-text">Excel</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li class="kt-nav__item">
                                                                                                <a href="#"
                                                                                                   class="kt-nav__link">
                                                                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                                                                    <span class="kt-nav__link-text">CSV</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li class="kt-nav__item">
                                                                                                <a href="#"
                                                                                                   class="kt-nav__link">
                                                                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                                                                    <span class="kt-nav__link-text">PDF</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="kt-portlet__body kt-font-dark">
                                                                    <!--begin: Datatable -->
                                                                    <table style="font-family: 'Fira Code'; text-align: center"
                                                                           class="table table-striped- table-bordered table-hover"
                                                                           id="kt_table_1">
                                                                        <thead>
                                                                        <tr class="kt-label-bg-color-1"
                                                                            style="font-family: 'Fira Code Medium'">
                                                                            <th>Line No</th>
                                                                            <th>Program Statements</th>
                                                                            <th>Wtcs</th>
                                                                            <th>NC</th>
                                                                            <th>Ccspps</th>
                                                                            <th style="color: white"
                                                                                class="kt-label-bg-color-2">Ccs
                                                                            </th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                        <?php


                                                                        $lastRow = "SELECT * FROM controlstructures ORDER BY ControlStructureID DESC LIMIT 1";
                                                                        $run_query_last = mysqli_query($con, $lastRow);

                                                                        while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                                                                        $ControlStructureID_last = $lastrow['ControlStructureID'];
                                                                        $CSif_last = $lastrow['CSif'];
                                                                        $CSiterative_last = $lastrow['CSfor'];
                                                                        $CSswitch_last = $lastrow['CSswitch'];
                                                                        $CScase_last = $lastrow['CScase'];


                                                                        $i = 0; //increment to each loop
                                                                        $count = 0;

                                                                        $total_ccs = 0;

                                                                        $Wtcs = 0;
                                                                        $NC = 0;
                                                                        $Ccspps = 0;
                                                                        $Ccs = 0;

                                                                        //Default Weights
                                                                        $weight_if_elseif = $CSif_last;
                                                                        $weight_for_while_dowhile = $CSiterative_last;
                                                                        $weight_switch = $CSswitch_last;
                                                                        $weight_case = $CScase_last;


                                                                        $ifValue = 0;

                                                                        $entireCode = str_replace(';', ';', $trim);


                                                                        $splitAfterSemicolon = str_replace(';', ';', $split);

                                                                        //For Printing of the code lines for the table
                                                                        if (!$splitAfterSemicolon == "") {

                                                                        foreach ($splitAfterSemicolon

                                                                        as $valAfterSemicolonReplace) { // Traverse the array with FOREACH

                                                                        $val = str_replace(';', ';', $valAfterSemicolonReplace);


                                                                        $conditional_words = array('if', 'for', 'while', 'switch', 'case');

                                                                        foreach ($conditional_words as $word) {


                                                                            $numberOfParams = 0;

                                                                            if (preg_match('/if |if+\((.*?)\)+(.*?){|if+\((.*?)\)+(.*?) {/', $val) !== false) {

                                                                                $if_count = preg_match_all('/if |if+\((.*?)\)+(.*?){|if+\((.*?)\)+(.*?) {/', $val, $counter);
                                                                                $if_weight = $if_count * $weight_if_elseif;


                                                                                $insideBrackets = preg_match_all('/if \((?<=\().+(?=\))\)/', $val, $counter);
                                                                                $contentInsideBrackets = $counter;
                                                                                if (!$contentInsideBrackets == "") {
                                                                                    foreach ($contentInsideBrackets as $contentInside) {
                                                                                        if (!$contentInside == "") {
                                                                                            foreach ($contentInside as $content) {

                                                                                                //echo $content;
                                                                                                //echo "<br>";

                                                                                                $countInsideBrackets = preg_match_all('/&&|\|\|/', $content, $counter);


                                                                                                if ($countInsideBrackets > 0) {

                                                                                                    $numberOfParams = $countInsideBrackets + 1;

                                                                                                } else {

                                                                                                    $numberOfParams = 1;

                                                                                                }


                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }


                                                                            }


                                                                            if (preg_match('/for |for+\((.*?)\)+(.*?){/', $val) !== false) {

                                                                                $for_count = preg_match_all('/for |for+\((.*?)\)+(.*?){/', $val, $counter);
                                                                                $for_weight = $for_count * $weight_for_while_dowhile;

                                                                            }

                                                                            if (preg_match('/while |while+\((.*?)\)+(.*?){/', $val) !== false) {

                                                                                $while_count = preg_match_all('/while |while+\((.*?)\)+(.*?){/', $val, $counter);
                                                                                $while_weight = $while_count * $weight_for_while_dowhile;


                                                                                $insideWhileBrackets = preg_match_all('/while |while+\((.*?)\)+(.*?){/', $val, $counter);
                                                                                $contentInsideWhileBrackets = $counter;
                                                                                if (!$contentInsideWhileBrackets == "") {
                                                                                    foreach ($contentInsideWhileBrackets as $contentInside) {
                                                                                        if (!$contentInside == "") {
                                                                                            foreach ($contentInside as $content) {

                                                                                                //echo $content;
                                                                                                //echo "<br>";

                                                                                                $countInsideWhileBrackets = preg_match_all('/&&|\|\|/', $content, $counter);


                                                                                                if ($countInsideWhileBrackets > 0) {

                                                                                                    $numberOfWhileParams = $countInsideWhileBrackets + 1;

                                                                                                } else {

                                                                                                    $numberOfWhileParams = 1;

                                                                                                }


                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }


                                                                            }


                                                                            if (preg_match('/while |while+\((.*?)\)+(.*?);/', $val) !== false) {

                                                                                $do_while_count = preg_match_all('/while |while+\((.*?)\)+(.*?);/', $val, $counter);
                                                                                $do_while_weight = $do_while_count * $weight_for_while_dowhile;

                                                                            }

                                                                            if (preg_match('/switch |switch+\((.*?)\)+(.*?){/', $val) !== false) {

                                                                                $switch_count = preg_match_all('/switch |switch+\((.*?)\)+(.*?){/', $val, $counter);
                                                                                $switch_weight = $switch_count * $weight_switch;

                                                                            }

                                                                            if (preg_match('/case (.*?)+\:/', $val) !== false) {

                                                                                $case_count = preg_match_all('/case (.*?)+\:/', $val, $counter);
                                                                                $case_weight = $case_count * $weight_case;

                                                                            }


                                                                        }

                                                                        $Wtcs = $for_weight + $if_weight + $while_weight + $switch_weight + $case_weight + $do_while_weight;

                                                                        $NC = $numberOfParams + $for_count + $numberOfWhileParams + $switch_count + $case_count + $do_while_count;


                                                                        if ($NC == 0) {

                                                                            $Ccspps = 0;

                                                                        } else {

                                                                            $Ccspps = $Ccs;

                                                                        }

                                                                        if ($Wtcs == 0) {

                                                                            $NC = null;
                                                                            $Wtcs = null;
                                                                            $Ccspps = null;

                                                                        }

                                                                        $Ccs = ($Wtcs * $NC) + $Ccspps;
                                                                        $total_ccs += $Ccs;


                                                                        if (preg_match_all('/if \(/', $val, $counter)) {

                                                                            $ifValueNew = $Ccs;




                                                                        }
                                                                        if (preg_match_all('/if \(/', $val, $counter)) {

                                                                            //$Ccspps = $ifValueNew;

                                                                        }

                                                                        if (preg_match_all('/switch \(/', $val, $counter)) {
                                                                            //$Ccspps = $ifValueNew;
                                                                            //$Ccs += $Ccspps;

                                                                        }



                                                                        ?>

                                                                        <tr>
                                                                            <td><?php echo $count = $count + 1; ?></td>
                                                                            <td style="text-align: left"><?php echo $val; ?></td>
                                                                            <td <?php if ($Wtcs > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo $Wtcs; ?></td>
                                                                            <td <?php if ($NC > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo $NC; ?></td>
                                                                            <td <?php if ($Ccspps > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo $Ccspps; ?></td>
                                                                            <td <?php if ($Ccs > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo $Ccs; ?></td>

                                                                            <?php

                                                                            $i++;

                                                                            }

                                                                            }

                                                                            }

                                                                            $_SESSION['total_ccs'] = $total_ccs;

                                                                            ?>
                                                                        </tr>


                                                                        </tbody>

                                                                    </table>

                                                                    <!--end: Datatable -->
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!-- end:: Content -->
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="kt-portlet__foot">
                                                <div class="kt-form__actions">
                                                    <div class="row">


                                                        <div class="col-lg-12 ml-lg-auto">
                                                            <center>

                                                                <a href="total_weight.php">
                                                                    <button type="button" href="total_weight.php"
                                                                            class="btn btn-brand">
                                                                        <span><i class="flaticon-home"></i></span> Total
                                                                        Complexity of the
                                                                        Program
                                                                    </button>
                                                                </a>
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!--end::Portlet-->


                                </div>


                                <!--End::Row-->
                            </div>
                            <!--End::Dashboard 3-->
                        </div>
                        <!-- end:: Content -->
                        </div>
                        <?php
                    }


                }
            }

        }
    }
    closedir($handle);
}


?>

<?php include 'include/footer.php'; ?>
