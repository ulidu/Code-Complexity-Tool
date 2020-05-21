<?php

if (!isset($_GET['reload'])) {
    echo '<meta http-equiv=Refresh content="0;url=coupling.php?reload=1">';
}

?>

<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>

<?php $split = $_SESSION['split_code']; ?>

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Content Head -->
    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Coupling Complexity of the Program</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>


                <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                    <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                    <span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="flaticon2-search-1"></i></span>
										</span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">


                <a href="total_weight.php" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
                    Total Complexity of the Program
                </a>


            </div>
        </div>
    </div>

    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!--Begin::Dashboard 3-->
        <!--Begin::Row-->
        <div class="row">


            <div class="col-lg-12">

                <!--begin::Portlet-->
                <div style="background-color: #F4F7FF;" class="kt-portlet kt-portlet--skin-solid kt-portlet--">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon kt-font-brand">
													<i class="flaticon-time-1"></i>
												</span>
                            <h3 class="kt-portlet__head-title kt-font-brand">
                                Complexity of the Program due to Coupling
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body kt-font-brand">


                        <div class="row">
                            <?php

                            $lastRow = "SELECT * FROM  coupling ORDER BY CouplingID DESC LIMIT 1";
                            $run_query_last = mysqli_query($con, $lastRow);

                            while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                            $CouplingID_last = $lastrow['CouplingID'];
                            $RecursiveCall_last = $lastrow['RecursiveCall'];
                            $Reg_Reg_Same_last = $lastrow['Column2'];
                            $Reg_Reg_Diff_last = $lastrow['Column3'];
                            $Reg_Rec_Same_last = $lastrow['Column4'];
                            $Reg_Rec_Diff_last = $lastrow['Column5'];
                            $Rec_Rec_Same_last = $lastrow['Column6'];
                            $Rec_Rec_Diff_last = $lastrow['Column7'];
                            $Rec_Reg_Same_last = $lastrow['Column8'];
                            $Rec_Reg_Diff_last = $lastrow['Column9'];
                            $Reg_Global_Same_last = $lastrow['Column10'];
                            $Reg_Global_Diff_last = $lastrow['Column11'];
                            $Rec_Global_Same_last = $lastrow['Column12'];
                            $Rec_Global_Diff_last = $lastrow['Column13'];


                            $lines = array();
                            $keyword = array('public', 'protected', 'private', 'static');

                            $dir = "uploads";

                            // Sort in ascending order - this is default
                            $fileArray = scandir($dir);

                            foreach ($fileArray as $file) {
                                $tempLines = array();
                                if ($file === '.' or $file === '..') continue;
                                $handle = fopen("uploads/" . $file, "r");
                                if ($handle) {
                                    while (($line = fgets($handle)) !== false) {
                                        // process the line read.
                                        array_push($tempLines, $line);
                                    }

                                    fclose($handle);
                                } else {
                                    // error opening the file.
                                }

                                array_push($lines, $tempLines);

                            }

                            //Initialize variable related to handle multiple file
                            $global_var = array();
                            $regularMethods = array();
                            $recursiveMethods = array();

                            foreach ($lines as $file) {

                                //Initialize variable related to handle single file
                                $method_file = array();
                                $global_var_file = array();
                                $recursive_file = array();
                                $regular_file = array();

                                foreach ($file as $line) {

                                    foreach ($method_file as $method) {

                                        if (strpos($line, $method)) {

                                            if ($method_file[0] == $method) {

                                                array_shift($regular_file);
                                                array_push($recursive_file, $method);
                                                $recursive_file = array_reverse($recursive_file);

                                            }
                                        }
                                    }


                                    preg_match('/"[^"]*"|((?=_[a-z_0-9]|[a-z])[a-z_0-9]+(?=\s*=))/', $line, $var);

                                    if (isset($var[0]) && empty($method_file)) {

                                        array_push($global_var_file, $var[0]);
                                    }

                                    preg_match('/(public|protected|private|static|\s) +[\w\<\>\[\]]+\s+(\w+) *\([^\)]*\) *(\{?|[^;])/', $line, $match);

                                    if (isset($match[1])) {
                                        if (in_array($match[1], $keyword)) {


                                            array_push($method_file, $match[2]);
                                            array_push($regular_file, $match[2]);
                                            array_push($regular_file);
                                            $method_file = array_reverse($method_file);

                                        }
                                    }
                                }

                                array_push($regularMethods, $regular_file);
                                array_push($recursiveMethods, $recursive_file);
                                array_push($global_var, $global_var_file);
                            }

                            for ($i = 0;
                            $i < count($lines);
                            $i++) {
                            # code...
                            $ccp = 0;
                            $regular_methods = array();
                            $recursive_methods = array();
                            $methods = array();
                            $globalVar = array();


                            ?>
                            <div class="col-lg-12">
                                <div class="kt-portlet kt-iconbox kt-iconbox--brand kt-iconbox--animate-slower">
                                    <div class="kt-portlet__body">
                                        <div class="kt-iconbox__body">
                                            <div class="kt-iconbox__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1"
                                                     class="kt-svg-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
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


                                                    <center><h1 style="font-family: 'Fira Code'">Ccp
                                                            : <?php echo $ccp = $_SESSION['ccp_coupling']; ?></h1>
                                                    </center>


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
                                                        Complexity of the Program due to the Coupling by Statement
                                                        : </h3>&nbsp;
                                                    <h3 class="kt-portlet__head-title kt-font-dark"><?php echo($fileArray[$i + 2]); ?>
                                                    </h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="kt-portlet__head-wrapper">
                                                        <div class="kt-portlet__head-actions">
                                                            <div class="dropdown dropdown-inline">
                                                                <button type="button"
                                                                        class="btn btn-default btn-icon-sm dropdown-toggle"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <i class="la la-download"></i> Export
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="kt-nav">
                                                                        <li class="kt-nav__section kt-nav__section--first">
                                                                            <span class="kt-nav__section-text">Choose an option</span>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a onclick="window.print()"
                                                                               class="kt-nav__link">
                                                                                <i class="kt-nav__link-icon la la-print"></i>
                                                                                <span class="kt-nav__link-text">Print</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="kt-nav__item">
                                                                            <a onclick="generate()"
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
                                                       class="table table-striped- table-bordered table-hover table-responsive"
                                                       id="kt_table_1">
                                                    <thead>
                                                    <tr class="kt-label-bg-color-1"
                                                        style="font-family: 'Fira Code Medium'">
                                                        <th>Line No.</th>
                                                        <th>Program Statements</th>
                                                        <th>Nr</th>
                                                        <th>Nmcms</th>
                                                        <th>Nmcmd</th>
                                                        <th>Nmcrms</th>
                                                        <th>Nmcrmd</th>
                                                        <th>Nrmcrms</th>
                                                        <th>Nrmcrmd</th>
                                                        <th>Nrmcms</th>
                                                        <th>Nrmcmd</th>
                                                        <th>Nmrgvs</th>
                                                        <th>Nmrgvd</th>
                                                        <th>Nrmrgvs</th>
                                                        <th>Nrmrgvd</th>
                                                        <th style="color: white" class="kt-label-bg-color-2">Ccp</th>
                                                    </tr>
                                                    </thead>
                                                    <?php

                                                    $nr = 0;
                                                    $nmcms = 0;
                                                    $nmcrms = 0;
                                                    $nrmcrms = 0;
                                                    $nrmcms = 0;
                                                    $nmrgvs = 0;
                                                    $nrmrgvs = 0;
                                                    $nmcmd = 0;
                                                    $nrmcmd = 0;
                                                    $nmcrmd = 0;
                                                    $nrmcrmd = 0;
                                                    $nmrgvd = 0;
                                                    $nrmrgvd = 0;

                                                    $method_found = true;

                                                    foreach ($lines[$i] as $line) {


                                                        $nr_line = 0;
                                                        $nmcms_line = 0;
                                                        $nmcrms_line = 0;
                                                        $nrmcrms_line = 0;
                                                        $nrmcms_line = 0;
                                                        $nmrgvs_line = 0;
                                                        $nrmrgvs_line = 0;
                                                        $nmcmd_line = 0;
                                                        $nrmcmd_line = 0;
                                                        $nmcrmd_line = 0;
                                                        $nrmcrmd_line = 0;
                                                        $nmrgvd_line = 0;
                                                        $nrmrgvd_line = 0;

                                                        foreach ($methods as $method) {

                                                            if (strpos($line, $method)) {

                                                                if ($methods[0] == $method) {

                                                                    array_push($recursive_methods, $method);
                                                                    $currentMethodType = 'recursive';
                                                                    $nr = $nr + 1;
                                                                    $nr_line = $nr_line + 1;

                                                                } elseif (in_array($method, $recursive_methods) && $currentMethodType == 'regular') {
                                                                    # code...
                                                                    $nmcrms = $nmcrms + 1;
                                                                    $nmcrms_line = $nmcrms_line + 1;

                                                                } elseif (in_array($method, $recursive_methods) && $currentMethodType == 'recursive') {
                                                                    # code...
                                                                    $nrmcrms_line = $nrmcrms_line + 1;
                                                                    $nrmcrms = $nrmcrms + 1;

                                                                } elseif ($currentMethodType == 'recursive') {
                                                                    # code...
                                                                    $nrmcms = $nrmcms + 1;
                                                                    $nrmcms_line = $nrmcms_line + 1;

                                                                } elseif ($currentMethodType == 'recursive') {
                                                                    # code...
                                                                    $nmcms = $nmcms + 1;
                                                                    $nmcms_line = $nmcms_line + 1;

                                                                }
                                                            } else {
                                                                $method_found = false;
                                                            }
                                                        }

                                                        if (!$method_found) {
                                                            # code...
                                                            preg_match('/([a-zA-Z][a-zA-Z0-9_$]+)\s*\(\s*([a-zA-Z0-9_$]+(?:\s*,\s*[a-zA-Z0-9_$]+)*)\s*\)/', $line, $method_match);
                                                            if (isset($method_match[1])) {
                                                                # code...
                                                                $nmcms = $nmcms + 1;
                                                                $nmcms_line = $nmcms_line + 1;
                                                            }
                                                        }

                                                        for ($j = 0; $j < count($regularMethods); $j++) {
                                                            # code...
                                                            if ($i == $j) continue;
                                                            foreach ($regularMethods[$j] as $method) {
                                                                if (strpos($line, $method)) {
                                                                    if ($currentMethodType == 'regular') {

                                                                        $nmcmd_line = $nmcmd_line + 1;
                                                                        $nmcmd = $nmcmd + 1;
                                                                    } else {

                                                                        $nrmcmd = $nrmcmd + 1;
                                                                        $nrmcmd_line = $nrmcmd_line + 1;
                                                                    }
                                                                }
                                                            }
                                                        }

                                                        for ($j = 0; $j < count($recursiveMethods); $j++) {
                                                            # code...
                                                            if ($i == $j) continue;
                                                            foreach ($recursiveMethods[$j] as $method) {
                                                                if (strpos($line, $method)) {
                                                                    if ($currentMethodType == 'regular') {

                                                                        $nmcrmd = $nmcrmd + 1;
                                                                        $nmcrmd_line = $nmcrmd_line + 1;
                                                                    } else {

                                                                        $nrmcrmd = $nrmcrmd + 1;
                                                                        $nrmcrmd_line = $nrmcrmd_line + 1;
                                                                    }
                                                                }
                                                            }
                                                        }

                                                        $space_split_array = explode(" ", $line);
                                                        $character_split_array = preg_split('/[^[:alnum:]]/', $line);

                                                        for ($j = 0; $j < count($global_var); $j++) {
                                                            # code...
                                                            if ($i == $j) continue;

                                                            foreach ($global_var[$j] as $var) {
                                                                if (in_array($var, $space_split_array) || in_array($var, $character_split_array)) {
                                                                    # code...
                                                                    if ($currentMethodType == 'regular') {
                                                                        # code...
                                                                        $nmrgvd = $nmrgvd + 1;
                                                                        $nmrgvd_line = $nmrgvd_line + 1;

                                                                    } else {
                                                                        # code...
                                                                        $nrmrgvd_line = $nrmrgvd_line + 1;
                                                                        $nrmrgvd = $nrmrgvd + 1;

                                                                    }
                                                                }
                                                            }
                                                        }

                                                        if (!empty($methods)) {
                                                            # code...
                                                            $space_split_array = explode(" ", $line);
                                                            $character_split_array = preg_split('/[^[:alnum:]]/', $line);

                                                            foreach ($globalVar as $var) {

                                                                if (in_array($var, $space_split_array) || in_array($var, $character_split_array)) {
                                                                    # code...
                                                                    if ($currentMethodType == 'regular') {
                                                                        # code...
                                                                        $nmrgvs = $nmrgvs + 1;
                                                                        $nmrgvs_line = $nmrgvs_line + 1;

                                                                    } else {
                                                                        # code...
                                                                        $nmrgvs_line = $nmrgvs_line + 1;
                                                                        $nmrgvs = $nmrgvs + 1;

                                                                    }
                                                                }
                                                            }


                                                        }

                                                        preg_match('/"[^"]*"|((?=_[a-z_0-9]|[a-z])[a-z_0-9]+(?=\s*=))/', $line, $var);

                                                        if (isset($var[0])) {

                                                            array_push($globalVar, $var[0]);

                                                        }


                                                        preg_match('/(public|protected|private|static|\s) +[\w\<\>\[\]]+\s+(\w+) *\([^\)]*\) *(\{?|[^;])/', $line, $match);

                                                        if (isset($match[1])) {
                                                            if (in_array($match[1], $keyword)) {

                                                                $currentMethodType = 'regular';
                                                                array_push($methods, $match[2]);
                                                                $methods = array_reverse($methods);

                                                            }

                                                        }

                                                        //  Removes single line '//' comments, treats blank characters
                                                        $lineaftercomment = preg_replace('![ \t]*//.*[ \t]*[\r\n]!', '', $line);
                                                        $multiplecoupl = preg_replace('#/\*[^*]*\*+([^/][^*]*\*+)*/#', '', $lineaftercomment);
                                                        $excesscoupling = preg_replace('/\s+/', ' ', $multiplecoupl);
                                                        $trimcoupling = trim($excesscoupling, " ");


                                                        $ccp = $nr * 2 + $nmcms * 2 + $nmcrms * 3 + $nrmcrms * 4 + $nrmcms * 3 + $nmrgvs * 1 + $nrmrgvs * 2 + $nmcmd * 3 + $nrmcmd * 4 + $nmcrmd * 4 + $nrmcrmd * 5 + $nmrgvd * 2 + $nrmrgvd * 2;
                                                        $ccp_coup_line = $nrmrgvd_line + $nrmrgvd_line + $nrmrgvs_line + $nmrgvd_line + $nmrgvs_line + $nrmcmd_line + $nrmcms_line + $nrmcrmd_line + $nmcms_line + $nmcmd_line + $nmcrms_line + $nmcrmd_line + $nrmcrms_line;

                                                        ?>
                                                        <tbody>
                                                        <tr>
                                                            <td><?php echo $count = $count + 1; ?></td>
                                                            <td style="text-align: left"><?php echo($trimcoupling) ?></td>
                                                            <td <?php if ($nr_line > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo($nr_line) ?></td>
                                                            <td <?php if ($nmcms_line > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo($nmcms_line) ?></td>
                                                            <td <?php if ($nmcmd_line > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo($nmcmd_line) ?></td>
                                                            <td <?php if ($nmcrms_line > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo($nmcrms_line) ?></td>
                                                            <td <?php if ($nmcrmd_line > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo($nmcrmd_line) ?></td>
                                                            <td <?php if ($nrmcrms_line > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo($nrmcrms_line) ?></td>
                                                            <td <?php if ($nrmcrmd_line > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo($nrmcrmd_line) ?></td>
                                                            <td <?php if ($nrmcms_line > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo($nrmcms_line) ?></td>
                                                            <td <?php if ($nrmcmd_line > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo($nrmcmd_line) ?></td>
                                                            <td <?php if ($nmrgvs_line > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo($nmrgvs_line) ?></td>
                                                            <td <?php if ($nmrgvd_line > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo($nmrgvd_line) ?></td>
                                                            <td <?php if ($nrmrgvs_line > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo($nrmrgvs_line) ?></td>
                                                            <td <?php if ($nrmrgvd_line > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo($nrmrgvd_line) ?></td>
                                                            <td <?php if ($ccp_coup_line > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo $ccp_coup_line; ?></td>

                                                        </tr>

                                                        </tbody>

                                                        <?php

                                                    }
                                                    $_SESSION['ccp_coupling'] = $ccp;
                                                    ?>
                                                </table>

                                                <!--end: Datatable -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end:: Content -->

                                <?php
                                }
                                }
                                ?>


                            </div>
                        </div>

                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">


                                    <div class="col-lg-12 ml-lg-auto">
                                        <center>

                                            <a href="total_weight.php">
                                                <button type="button" href="total_weight.php" class="btn btn-brand">
                                                    <span><i class="flaticon-home"></i></span> Total Complexity of the
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


        </div>


        <!--End::Row-->

        <!--End::Dashboard 3-->
    </div>
    <!-- end:: Content -->
</div>


<?php include 'include/footer.php'; ?>
