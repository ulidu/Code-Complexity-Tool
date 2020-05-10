<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Content Head -->
    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Total Weight of the Program</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>


                <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                    <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                    <span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="flaticon2-search-1"></i></span>
										</span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">

                <div id="myNav" class="overlay">

                    <div class="overlay-content">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i
                                    class="flaticon-cancel"></i></a>
                        <a class="text-warning">Important !</a>
                        <a class="text-white-50">Open curly brace of a <b>method name</b> should be followed by a <b>whitespace</b>
                            after the parentheses</a>
                        <a class="text-white-50" style="font-size: 20px">Eg : <img style="width:20%;border-radius: 2px"
                                                                                   src="assets/media/bg/method.png"></a>

                        <br>
                        <a class="text-white-50">Open curly brace of a <b>class</b> should be followed by a <b>whitespace</b>
                            after the name of the class</a>
                        <a class="text-white-50" style="font-size: 20px">Eg : <img style="width:20%;border-radius: 2px"
                                                                                   src="assets/media/bg/class.png"></a>

                    </div>
                </div>

                <button type="button" class="btn btn-warning" onclick="openNav()">This tool will work only under
                    following Coding Conventions
                </button>

            </div>
        </div>
    </div>

    <!-- end:: Content Head -->
    <?php

    $total_CsValue = 0;

    $entry_arr_af = preg_split("/\.java/", $entry);
    $entry_arr = array_filter($entry_arr_af);

    foreach ($entry_arr

    as $files_arr) {


    $fi = new FilesystemIterator($storeFolder, FilesystemIterator::SKIP_DOTS);
    $limit = (iterator_count($fi));

    $lastRow = "SELECT * FROM ( SELECT * FROM ci ORDER BY CiID DESC LIMIT $limit) result ORDER BY CiID ASC";
    $run_query_last = mysqli_query($con, $lastRow);


    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
    $CiID_last = $lastrow['CiID'];
    $CiValue_last = $lastrow['CiValue'];


    $fi = new FilesystemIterator($storeFolder, FilesystemIterator::SKIP_DOTS);
    $limit = (iterator_count($fi));

    $lastRow = "SELECT * FROM ( SELECT * FROM cs ORDER BY CsID DESC LIMIT $limit) result ORDER BY CsID ASC";
    $run_query_last = mysqli_query($con, $lastRow);

    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
    $CsID_last = $lastrow['CsID'];
    $CsValue_last = $lastrow['CsValue'];


    ?>



    <?php

    $fi = new FilesystemIterator($storeFolder, FilesystemIterator::SKIP_DOTS);
    $limit = (iterator_count($fi));

    $lastRow = "SELECT * FROM ( SELECT * FROM cv ORDER BY CvID DESC LIMIT $limit) result ORDER BY CvID ASC";
    $run_query_last = mysqli_query($con, $lastRow);

    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
    $CvID_last = $lastrow['CvID'];
    $CvValue_last = $lastrow['CvValue'];

    ?>

    <?php

    $fi = new FilesystemIterator($storeFolder, FilesystemIterator::SKIP_DOTS);
    $limit = (iterator_count($fi));

    $lastRow = "SELECT * FROM ( SELECT * FROM cm ORDER BY CmID DESC LIMIT $limit) result ORDER BY CmID ASC";
    $run_query_last = mysqli_query($con, $lastRow);

    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
    $CmID_last = $lastrow['CmID'];
    $CmValue_last = $lastrow['CmValue'];

    ?>

    <?php

    $fi = new FilesystemIterator($storeFolder, FilesystemIterator::SKIP_DOTS);
    $limit = (iterator_count($fi));

    $lastRow = "SELECT * FROM ( SELECT * FROM ccs ORDER BY CcsID DESC LIMIT $limit) result ORDER BY CcsID ASC";
    $run_query_last = mysqli_query($con, $lastRow);

    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
    $CcsID_last = $lastrow['CcsID'];
    $CcsValue_last = $lastrow['CcsValue'];

    ?>



    <?php
    $lastRow = "SELECT * FROM ( SELECT * FROM totalcomplexity ORDER BY totalcomplexityID DESC LIMIT $limit) result ORDER BY totalcomplexityID ASC";
    $run_query_last = mysqli_query($con, $lastRow);

    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
    $totalcomplexityID_last = $lastrow['totalcomplexityID'];
    $totalcomplexityValue_last = $lastrow['totalcomplexityValue'];

    $final_total += $totalcomplexityValue_last;
    ?>
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!--Begin::Dashboard 3-->

        <div class="col-lg-12 removeduplicateelement">
            <div class="kt-portlet kt-iconbox kt-iconbox--success kt-iconbox--animate-slow">
                <div class="kt-portlet__body">
                    <div class="kt-iconbox__body">
                        <div class="kt-iconbox__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                          fill="#000000" opacity="0.3"/>
                                    <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                          fill="#000000"/>
                                    <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                          fill="#000000"/>
                                </g>
                            </svg>
                        </div>
                        <div class="col-lg-12">
                            <div class="kt-iconbox__desc kt-font-success">
                                <?php $lastRow_final = "SELECT * FROM ( SELECT * FROM finaltotal ORDER BY FinalTotalID DESC LIMIT 1) result ORDER BY FinalTotalID ASC";
                                $run_query_last_final = mysqli_query($con, $lastRow_final);

                                while ($lastrow_final_t = mysqli_fetch_assoc($run_query_last_final)) {
                                    $finaltotalID = $lastrow_final_t['finaltotal'];
                                    $FinalTotalValue_last = $lastrow_final_t['FinalTotalValue']; ?>

                                    <center><h1 style="font-family: 'Fira Code'">Total Complexity
                                            : <?php echo $FinalTotalValue_last; ?></h1></center>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Begin::Row-->
        <div class="row">


            <!--begin::Portlet-->
            <div style="background-color: #F4F7FF;" class="kt-portlet kt-portlet--skin-solid kt-portlet--">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon kt-font-brand">
													<i class="flaticon-time-1"></i>
												</span>
                        <h3 class="kt-portlet__head-title kt-font-brand">
                            Total Complexity of the Program due to All the Factors
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
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
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


                                                <center><h1 style="font-family: 'Fira Code'">Cpr
                                                        : <?php echo $totalcomplexityValue_last ?></h1></center>


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
                                                    Total Complexity of the Program by Statement : </h3>&nbsp;
                                                <h3 class="kt-portlet__head-title kt-font-dark"><?php $file = $_SESSION['filename'];
                                                    echo $file; ?>
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
                                                                        <a href="#" class="kt-nav__link">
                                                                            <i class="kt-nav__link-icon la la-print"></i>
                                                                            <span class="kt-nav__link-text">Print</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="kt-nav__item">
                                                                        <a href="#" class="kt-nav__link">
                                                                            <i class="kt-nav__link-icon la la-copy"></i>
                                                                            <span class="kt-nav__link-text">Copy</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="kt-nav__item">
                                                                        <a href="#" class="kt-nav__link">
                                                                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                                            <span class="kt-nav__link-text">Excel</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="kt-nav__item">
                                                                        <a href="#" class="kt-nav__link">
                                                                            <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                                            <span class="kt-nav__link-text">CSV</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="kt-nav__item">
                                                                        <a href="#" class="kt-nav__link">
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
                                                   class="table table-striped- table-bordered table-hover table-checkable"
                                                   id="kt_table_1">
                                                <thead>
                                                <tr class="kt-label-bg-color-1" style="font-family: 'Fira Code Medium'">
                                                    <th>Line No</th>
                                                    <th>Program Statements</th>
                                                    <th>Cs</th>
                                                    <th>Cv</th>
                                                    <th>Cm</th>
                                                    <th>Ci</th>
                                                    <th>Ccp</th>
                                                    <th>Ccs</th>
                                                    <th style="color: white" class="kt-label-bg-color-2">TCps</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php

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
                                                    $parsed2 = null;
                                                    $pos = null;
                                                    $pos1 = null;
                                                    $indirect = 0;
                                                    $tot_inheritance = 0;


                                                    foreach ($split as $val) { // Traverse the array with FOREACH

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
                                                                    $inClasses = true; //inClasses is the array where the class objects are stored
                                                                }
                                                            }

                                                            if (!$inClasses) {

                                                                $classObj = new inheritance;
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

                                                        }
                                                    }

                                                    $i = 0;
                                                    $cnt = 0;

                                                    //Call NIDI function recursively and set No Of Indirect Inheritances of the class object
                                                    foreach ($classes as $key) {
                                                        $firstName = $key->get_name();
                                                        $name = $key->get_extends();
                                                        if (!empty($name)) {
                                                            $cnt++;
                                                            findNidi($name);
                                                            $key->set_indirect($cnt - 1);
                                                        }

                                                    }

                                                    foreach ($classes as $key) {
                                                        $tot_inheritance = $key->get_direct() + $key->get_indirect(); //Total inheritances = NoOfDirect + NoOfIndirect
                                                        $i++;


                                                        //If Ti value is less than or equal to three, then Ci = Ti.
                                                        if ($tot_inheritance <= 3) {
                                                            $ci = $tot_inheritance;
                                                        } else { //If the Ti value is greater than three, then Ci = 4
                                                            $ci = 4;
                                                        }
                                                        $total_ci += $ci;

                                                        $printinval = $key->get_name();

                                                        $queryinherit = "INSERT INTO inheritancetotal(inheritanceWord, Ci_tot) VALUES('$printinval','$ci')";
                                                        $create_queryinherit = mysqli_query($con, $queryinherit);



                                                    }
                                                    $queryinherit = "INSERT INTO inheritancefinaltotal(cifinaltotal) VALUES('$total_ci')";
                                                    $create_queryinherit = mysqli_query($con, $queryinherit);


                                                }


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
                                                $total_TCps = 0;


                                                $if_val = "if";
                                                $switch_val = "switch";
                                                $case_val = "case";
                                                $while_val = "while";
                                                $for_val = "for";
                                                $else_val = "else";
                                                $end_curlyBrace = "}";


                                                $arrCCS = [];
                                                $arr2 = [];
                                                $elseArr = [];
                                                $inElse = false;
                                                $elseCount = 0;


                                                //Default Weights
                                                $weight_if_elseif = $CSif_last;
                                                $weight_for_while_dowhile = $CSiterative_last;
                                                $weight_switch = $CSswitch_last;
                                                $weight_case = $CScase_last;

                                                $ifValue = 0;


                                                $lastRow = "SELECT * FROM variables ORDER BY VariableID DESC LIMIT 1";
                                                $run_query_last = mysqli_query($con, $lastRow);

                                                while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                                                $VariableID_last = $lastrow['VariableID'];
                                                $GlobalVariable_last = $lastrow['GlobalVariable'];
                                                $LocalVariable_last = $lastrow['LocalVariable'];
                                                $PrimitiveVariable_last = $lastrow['PrimitiveVariable'];
                                                $CompositeVariable_last = $lastrow['CompositeVariable'];

                                                $i = 0; //increment to each loop
                                                $count = 0;
                                                $total_Cv = 0;

                                                $Wvs = 0;
                                                $Npdtv = 0;
                                                $Ncdtv = 0;
                                                $Cv = 0;
                                                $beforeCv = 0;

                                                //Default Weights
                                                $weight_primitive_datatype_variable = $PrimitiveVariable_last;
                                                $weight_composite_datatype_variable = $CompositeVariable_last;
                                                $weight_global_variable = $GlobalVariable_last;
                                                $weight_local_variable = $LocalVariable_last;


                                                $lastRow = "SELECT * FROM methods ORDER BY 	MethodID DESC LIMIT 1";
                                                $run_query_last = mysqli_query($con, $lastRow);

                                                while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                                                $MethodID_last = $lastrow['MethodID'];
                                                $PrimitiveReturnType_last = $lastrow['PrimitiveReturnType'];
                                                $CompositeReturnType_last = $lastrow['CompositeReturnType'];
                                                $VoidReturnType_last = $lastrow['VoidReturnType'];
                                                $PrimitiveParameter_last = $lastrow['PrimitiveParameter'];
                                                $CompositeParameter_last = $lastrow['CompositeParameter'];

                                                $i = 0; //increment to each loop
                                                $count = 0;
                                                $total_Cm = 0;

                                                //Default Weights
                                                $weight_primitive_retuntype = $PrimitiveReturnType_last;
                                                $weight_composite_returntype = $CompositeReturnType_last;
                                                $weight_void_returntype = $VoidReturnType_last;
                                                $weight_primitive_datatype_parameter = $PrimitiveParameter_last;
                                                $weight_composite_datatype_parameter = $CompositeParameter_last;


                                                $i = 0; //increment to each loop
                                                $count = 0;
                                                $total_cs = 0;

                                                $Nkw = 0;
                                                $Nid = 0;
                                                $Nop = 0;
                                                $Nnv = 0;
                                                $Nsl = 0;
                                                $Cs = 0;

                                                $TCps = 0;

                                                $lastRow = "SELECT * FROM size ORDER BY SizeID DESC LIMIT 1";
                                                $run_query_last = mysqli_query($con, $lastRow);

                                                while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                                                $SizeID_last = $lastrow['SizeID'];
                                                $Keyword_last = $lastrow['Keyword'];
                                                $Identifier_last = $lastrow['Identifier'];
                                                $Operator_last = $lastrow['Operator'];
                                                $NumericalValue_last = $lastrow['NumericalValue'];
                                                $StringLiteral_last = $lastrow['StringLiteral'];


                                                //Default Weights
                                                $weight_keyword = $Keyword_last;
                                                $weight_identifier = $Identifier_last;
                                                $weight_operator = $Operator_last;
                                                $weight_numerical = $NumericalValue_last;
                                                $weight_string = $StringLiteral_last;

                                                $entireCode = str_replace(';', ';', $trim);

                                                //Matching Methods - Entire Code
                                                $methods = (getContentsBetween($entireCode, ') {', '}'));

                                                //Matching Outside from Methods
                                                $codeOutsideMethods = str_replace($methods, '', $entireCode);

                                                $splitAfterSemicolon = str_replace(';', ';', $split);


                                                if (!$split == ''){

                                                foreach ($split

                                                as $val) { // Traverse the array with FOREACH

                                                $val;


                                                $Wmrt = null;
                                                $Npdtp = null;
                                                $Ncdtp = null;
                                                $NpdtpBefore = null;
                                                $NcdtpBefore = null;
                                                $Cm = null;

                                                for ($x = 0; $x <= $row_count; $x++) {


                                                    if (preg_match('/protected \w+ \w+\(.*?\) \{|private \w+ \w+\(.*?\) \{| public \w+ \w+\(.*?\) \{|public static void main\(String.*?\) {/', $val)) {


                                                        if (preg_match('/protected void \w+\(.*?\) \{|private void \w+\(.*?\) \{| public void \w+\(.*?\) \{|public static void main\(String.*?\) {/', $val)) {

                                                            $Wmrt = $weight_void_returntype;

                                                        }

                                                        if (preg_match('/public (byte|short|int|long|float|double|char|String|boolean) \w+\(.*?\) \{|private (byte|short|int|long|float|double|char|String|boolean) \w+\(.*?\) \{|protected (byte|short|int|long|float|double|char|String|boolean) \w+\(.*?\) \{/', $val)) {

                                                            $Wmrt = $weight_primitive_retuntype;

                                                        }


                                                        if (preg_match_all('/byte |short |int |long |float |double |char |String |boolean |void/', $val, $counter) == 0) {

                                                            $Wmrt = $weight_composite_returntype;

                                                        }


                                                        $methodsCount = preg_match_all('/protected \w+ \w+\(.*?\) \{|private \w+ \w+\(.*?\) \{| public \w+ \w+\(.*?\) \{|public static void main\(String.*?\) {/', $val, $counter);
                                                        $methods_methods = $counter;

                                                        if (!$methods_methods == "") {
                                                            foreach ($methods_methods as $method_method) {
                                                                if (!$method_method == "") {
                                                                    foreach ($method_method as $methodAfter) {

                                                                        $methodAfter;


                                                                        if (preg_match_all('/\(.*?\)/', $methodAfter, $counter)) {

                                                                            if (preg_match_all('/byte |short |int |long |float |double |char |String |boolean /', $methodAfter, $counter)) {

                                                                                $NpdtpBefore = preg_match_all('/byte |short |int |long |float |double |char |String |boolean /', $methodAfter, $counter);

                                                                            }

                                                                            if (preg_match_all('/byte |short |int |long |float |double |char |String |boolean /', $methodAfter, $counter) == 0) {

                                                                                $NcdtpBefore = 1;

                                                                            }

                                                                            if (preg_match_all('/\(\)/', $methodAfter, $counter)) {

                                                                                $NpdtpBefore = 0;
                                                                                $NcdtpBefore = 0;

                                                                            }

                                                                        }


                                                                    }
                                                                }
                                                            }
                                                        }


                                                    }


                                                    if ($Wmrt >= 0 && $NpdtpBefore > 0) {

                                                        $NcdtpBefore = 0;

                                                    }

                                                    if ($Wmrt >= 0 && $NcdtpBefore > 0) {

                                                        $NpdtpBefore = 0;

                                                    }


                                                }

                                                // -------- Weight due to return type - End --------

                                                $Cm = $Wmrt + ($NpdtpBefore * $weight_primitive_datatype_parameter) + ($Ncdtp * $weight_composite_datatype_parameter);


                                                $total_Cm += $Cm;
                                                if ($NcdtpBefore == 1) {

                                                    $Cm = $NcdtpBefore * $weight_composite_datatype_parameter;
                                                    $total_Cm += $Cm;
                                                }

                                                if (preg_match_all('/protected \w+ \w+\(.*?\) \{|private \w+ \w+\(.*?\) \{| public \w+ \w+\(.*?\) \{|public static void main\(String.*?\) {/', $val, $counter) == 0) {

                                                    $Cm = 0;

                                                }


                                                $global_variable_count_total = 0;
                                                $local_variable_count_total = 0;
                                                $primitive_datatype_variable_count_total = 0;
                                                $composite_datatype_variable_count_total = 0;


                                                foreach ($methods as $method) {

                                                    $method;

                                                    //Matching variables inside methods (Local Variables)
                                                    $local_variable_count = preg_match_all('/byte \w+\;|short \w+\;|int \w+\;|long \w+\;|float \w+\;|double \w+\;|char \w+\;|String \w+\;|boolean \w+\;|\w+ \w+ \= \w+|\w+ \w+\, \w+\;|private \w+ \w+\;/', $method, $counter);
                                                    $local_variables = $counter;

                                                    //Converting local variable array into normal lines
                                                    foreach ($local_variables as $local) {

                                                        if (!$local == "") {

                                                            foreach ($local as $local_variable) {

                                                                //Iterate through all rows of code in the table
                                                                for ($x = 0; $x <= $row_count; $x++) {

                                                                    $local_variables; // The array of local variables
                                                                    $splitAfterSemicolon; // The array of code lines

                                                                    //echo $local_variable;// Single lines of local variables
                                                                    //echo $val;// Single lines of code
                                                                    //echo "<br>";


                                                                    //Checking the code lines if there are matching local variables
                                                                    if (strpos($val, $local_variable) !== false) {

                                                                        $local_variable_count_total = substr_count($val, $local_variable);


                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }

                                                    //Matching variables outside methods (Global Variables)
                                                    $global_variable_count = preg_match_all('/byte \w+\;|short \w+\;|int \w+\;|long \w+\;|float \w+\;|double \w+\;|char \w+\;|String \w+\;|boolean \w+\;|\w+ \w+ \= \w+|\w+ \w+\, \w+\;|private \w+ \w+\;/', $codeOutsideMethods, $counter);
                                                    $global_variables = $counter;

                                                    //Converting global variable array into normal lines
                                                    foreach ($global_variables as $global) {
                                                        $result = array_filter($global);
                                                        if (!$result == "") {
                                                            foreach ($result as $global_variable) {

                                                                //Iterate through all rows of code in the table
                                                                for ($x = 0; $x <= $row_count; $x++) {

                                                                    //print_r($global_variables);

                                                                    $global_variables; // The array of global variables
                                                                    $splitAfterSemicolon; // The array of code lines

                                                                    //echo $global_variable;// Single lines of global variables
                                                                    //echo $val;// Single lines of code
                                                                    //echo "<br>";

                                                                    //Checking the code lines if there are matching global variables

                                                                    if (strpos($val, $global_variable) !== false) {

                                                                        $global_variable_count_total = substr_count($val, $global_variable);

                                                                    }

                                                                }

                                                            }

                                                        }

                                                    }

                                                    //Matching primitive variables
                                                    $total_variable_count = preg_match_all('/byte.*?\;|short .*?\;|int .*?\;|long .*?\;|float .*?\;|double .*?\;|char .*?\;|String .*?\;|boolean .*?\;/', $entireCode, $counter);
                                                    $all_prem_variables = $counter;

                                                    //Converting all variables array into normal lines
                                                    foreach ($all_prem_variables as $vars) {
                                                        $result = array_filter($vars);
                                                        if (!$result == "") {
                                                            foreach ($result as $all_variable) {

                                                                //Iterate through all rows of code in the table
                                                                for ($x = 0; $x <= $row_count; $x++) {


                                                                    //print_r($all_variables);

                                                                    $all_prem_variables; // The array of all variables
                                                                    $splitAfterSemicolon; // The array of code lines

                                                                    //echo $all_variable;// Single lines of all variables
                                                                    //echo $val;// Single lines of code
                                                                    //echo "<br>";

                                                                    //Checking the code lines if there are matching local variables


                                                                    if (strpos($val, $all_variable) !== false) {

                                                                        $primitive_datatype_variable_count_total = substr_count($val, $all_variable);

                                                                    }

                                                                    if (preg_match('/private byte \w+, \w+\;|private short \w+, \w+\;|private int \w+, \w+\;|private long \w+, \w+\;|private float \w+, \w+\;|private double \w+, \w+\;|private char \w+, \w+\;|private String \w+, \w+\;|private boolean \w+, \w+\;/', $val)) {

                                                                        $primitive_datatype_variable_count_total = 2;

                                                                    }

                                                                    if ($Wvs > 0 && $Ncdtv > 0 && preg_match_all('/byte |short |int |long |float |double |char |String |boolean /', $val, $counter)) {

                                                                        $primitive_datatype_variable_count_total = 1;

                                                                    }

                                                                }

                                                            }

                                                        }

                                                    }

                                                    //Matching composite variables
                                                    for ($x = 0; $x <= $row_count; $x++) {


                                                        if ($Wvs > 0 && $Npdtv < 1) {

                                                            $composite_datatype_variable_count_total = 1;

                                                        } else {

                                                            $composite_datatype_variable_count_total = 0;

                                                        }

                                                        if ($Wvs > 0 && $Npdtv < 1 && preg_match_all('/\w+ \w+ \w+\, \w+\;/', $val, $counter)) {

                                                            $composite_datatype_variable_count_total = 2;

                                                        }

                                                    }


                                                    $Wvs = ($global_variable_count_total * $weight_global_variable) + ($local_variable_count_total * $weight_local_variable);

                                                    $Npdtv = $primitive_datatype_variable_count_total;

                                                    $Ncdtv = $composite_datatype_variable_count_total;

                                                }


                                                if ($Wvs == 0) {
                                                    $Wvs = null;
                                                    $Npdtv = null;
                                                    $Ncdtv = null;
                                                }

                                                if ($Ncdtv == 0) {
                                                    $Ncdtv = null;
                                                }
                                                if ($Npdtv == 0) {
                                                    $Npdtv = null;
                                                }

                                                $beforeCv = ($weight_primitive_datatype_variable * $Npdtv) + ($weight_composite_datatype_variable * $Ncdtv);

                                                $Cv = $Wvs * $beforeCv;

                                                $total_Cv += $Cv;


                                                // -------- Weight due to Keywords - Begin --------

                                                $keywords = ['abstract', 'assert', 'break', 'catch', 'class', 'const', 'continue', 'default', 'do', 'else', 'enum', 'extends', 'final', 'finally', 'goto', 'implements', 'instanceof', 'interface', 'native', 'new', 'package', 'private', 'protected', 'public', 'return', 'static', 'strictfp', 'super', 'synchronized', 'this', 'throw', 'throws', 'transient', 'try', 'void', 'volatile'];

                                                $tokenkw = "";
                                                $tokenOp = "";
                                                $tokenClass = "";
                                                $tokenNumber = "";
                                                $tokenString = "";

                                                $count_methods_2 = 0;
                                                $count_methods_3 = 0;
                                                $count_methods_4 = 0;
                                                $count_methods_5 = 0;


                                                foreach ($keywords as $word) {


                                                    if (preg_match('/\babstract\b/', $val) !== false) {

                                                        $abstract_count = preg_match_all('/\babstract\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bassert\b/', $val) !== false) {

                                                        $assert_count = preg_match_all('/\bassert\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bbreak\b/', $val) !== false) {

                                                        $break_count = preg_match_all('/\bbreak\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bcatch\b/', $val) !== false) {

                                                        $catch_count = preg_match_all('/\bcatch\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bclass\b/', $val) !== false) {

                                                        $class_count = preg_match_all('/\bclass\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bconst\b/', $val) !== false) {

                                                        $const_count = preg_match_all('/\bconst\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bcontinue\b/', $val) !== false) {

                                                        $continue_count = preg_match_all('/\bcontinue\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bdefault\b/', $val) !== false) {

                                                        $default_count = preg_match_all('/\bdefault\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bdo\b/', $val) !== false) {

                                                        $do_count = preg_match_all('/\bdo\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\belse\b/', $val) !== false) {

                                                        $else_count = preg_match_all('/\belse\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\benum\b/', $val) !== false) {

                                                        $enum_count = preg_match_all('/\benum\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bextends\b/', $val) !== false) {

                                                        $extends_count = preg_match_all('/\bextends\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bfinal\b/', $val) !== false) {

                                                        $final_count = preg_match_all('/\bfinal\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bfinally\b/', $val) !== false) {

                                                        $finally_count = preg_match_all('/\bfinally\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bgoto\b/', $val) !== false) {

                                                        $goto_count = preg_match_all('/\bgoto\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bimplements\b/', $val) !== false) {

                                                        $implements_count = preg_match_all('/\bimplements\b/', $val, $counter);

                                                    }


                                                    if (preg_match('/\binstanceof\b/', $val) !== false) {

                                                        $instanceof_count = preg_match_all('/\binstanceof\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\binterface\b/', $val) !== false) {

                                                        $interface_count = preg_match_all('/\binterface\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bnative\b/', $val) !== false) {

                                                        $native_count = preg_match_all('/\bnative\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bnew\b/', $val) !== false) {

                                                        $new_count = preg_match_all('/\bnew\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bpackage\b/', $val) !== false) {

                                                        $package_count = preg_match_all('/\bpackage\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bprivate\b/', $val) !== false) {

                                                        $private_count = preg_match_all('/\bprivate\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bprotected\b/', $val) !== false) {

                                                        $protected_count = preg_match_all('/\bprotected\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bpublic\b/', $val) !== false) {

                                                        $public_count = preg_match_all('/\bpublic\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\breturn\b/', $val) !== false) {

                                                        $return_count = preg_match_all('/\breturn\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bstatic\b/', $val) !== false) {

                                                        $static_count = preg_match_all('/\bstatic\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bstrictfp\b/', $val) !== false) {

                                                        $strictfp_count = preg_match_all('/\bstrictfp\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bsuper\b/', $val) !== false) {

                                                        $super_count = preg_match_all('/\bsuper\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bsynchronized\b/', $val) !== false) {

                                                        $synchronized_count = preg_match_all('/\bsynchronized\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bthis\b/', $val) !== false) {

                                                        $this_count = preg_match_all('/\bthis\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bthrow\b/', $val) !== false) {

                                                        $throw_count = preg_match_all('/\bthrow\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bthrows\b/', $val) !== false) {

                                                        $throws_count = preg_match_all('/\bthrows\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\btransient\b/', $val) !== false) {

                                                        $transient_count = preg_match_all('/\btransient\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\btry\b/', $val) !== false) {

                                                        $try_count = preg_match_all('/\btry\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bvoid\b/', $val) !== false) {

                                                        $void_count = preg_match_all('/\bvoid\b/', $val, $counter);

                                                    }

                                                    if (preg_match('/\bvolatile\b/', $val) !== false) {

                                                        $volatile_count = preg_match_all('/\bvolatile\b/', $val, $counter);

                                                    }

                                                }

                                                $Nkw = ($abstract_count + $assert_count + $break_count + $catch_count + $class_count + $const_count + $continue_count + $default_count + $do_count + $else_count + $enum_count + $extends_count + $final_count + $finally_count + $goto_count + $implements_count + $instanceof_count + $interface_count + $native_count + $new_count + $package_count + $private_count + $protected_count + $public_count + $return_count + $static_count + $strictfp_count + $super_count + $synchronized_count + $this_count + $throw_count + $throws_count + $transient_count + $try_count + $void_count + $volatile_count) * $weight_keyword;

                                                // -------- Weight due to Keywords - End --------


                                                // -------- Weight due to Identifiers - Begin --------

                                                $identifiers_count_total = 0;

                                                for ($x = 0; $x <= $row_count; $x++) {


                                                    //Matching Classes
                                                    $method_names_2 = (getContentsBetween($val, 'void', ') {'));
                                                    foreach ($method_names_2 as $methods_2) {
                                                        if (strpos($val, $methods_2)) {


                                                            $count_methods_2 = substr_count($val, $methods_2);


                                                        }

                                                    }
                                                    $method_names_3 = (getContentsBetween($val, 'int', ') {'));
                                                    foreach ($method_names_3 as $methods_3) {
                                                        if (strpos($val, $methods_3)) {


                                                            $count_methods_3 = substr_count($val, $methods_3);


                                                        }

                                                    }

                                                    $method_names_4 = (getContentsBetween($val, 'String', ') {'));
                                                    foreach ($method_names_4 as $methods_4) {
                                                        if (strpos($val, $methods_4)) {


                                                            $count_methods_4 = substr_count($val, $methods_4);


                                                        }

                                                    }

                                                    $method_names_5 = (getContentsBetween($val, 'double', ') {'));
                                                    foreach ($method_names_5 as $methods_5) {
                                                        if (strpos($val, $methods_5)) {


                                                            $count_methods_5 = substr_count($val, $methods_5);


                                                        }

                                                    }


                                                    if (preg_match('/class\s*(\w+)/', $val) !== false) {

                                                        $count_class = preg_match_all('/class\s*(\w+)/', $val, $counter);

                                                    }

                                                    if (preg_match('/(?:(?:public|private|protected|static|final|native|synchronized|abstract|transient)+\s+)+[$_\w<>\[\]\s]*\s+[\$_\w]+\([^\)]*\)?\s*\{?[^\}]*\}?/', $val) !== false) {

                                                        $count_methods = preg_match_all('/(?:(?:public|private|protected|static|final|native|synchronized|abstract|transient)+\s+)+[$_\w<>\[\]\s]*\s+[\$_\w]+\([^\)]*\)?\s*\{?[^\}]*\}?/', $val, $counter);

                                                    }

                                                    if (preg_match('/= new (.*?)\((.*?)\);|=new (.*?)\((.*?)\);/', $val) !== false) {

                                                        $count_objects = preg_match_all('/= new (.*?)\((.*?)\);|=new (.*?)\((.*?)\);/', $val, $counter);

                                                    }

                                                    if (preg_match('/= new|=new/', $val) !== false) {

                                                        $count_variables = preg_match_all('/= new|=new/', $val, $counter);

                                                    }

                                                    if (preg_match('/= new|=new/', $val) !== false) {

                                                        $count_arguments = preg_match_all('/= new|=new/', $val, $counter);

                                                    }

                                                    if (preg_match('/= new|=new/', $val) !== false) {

                                                        $count_data_structures = preg_match_all('/= new|=new/', $val, $counter);

                                                    }


                                                    $identifiers_count_total = $count_class + $count_objects + $count_methods + $count_methods_2 + $count_methods_3 + $count_methods_4 + $count_methods_5;

                                                    $Nid = $identifiers_count_total * $weight_identifier;

                                                }

                                                // -------- Weight due to Identifiers - End --------

                                                // -------- Weight due to Operators - Begin --------

                                                //$operators = array('+', '-', '*', '/', '%', '++', '--', '==', '!=', '>', '<', '>=', '<=', '&&', '||', '!', '|', '^', '~', '<<', '>>', '>>>', '<<<', ',', '->', '.', '::', '+=', '-=', '*=', '/=', '=', '>>>=', '|=', '&=', '%=', '<<=', '>>=', '^=');

                                                $operators = array('+', '-', '*', '/', '%', '=', '>', '<', '&&', '!', '|', '^', '~', ',', '.', '::');

                                                foreach ($operators as $word) {

                                                    if (preg_match('/(\<\=)+|(\=\>)+|(\=\<)+|(\>\=)+|(\+)+|(\-)+|(\=)+|(\*)+|(\/)+|(\%)+|(\>)+|(\>)+|(\<)+|(\&\&)+|(\!)+|(\|)+|(\^)+|(\~)+|(\,)+|(\.)+|(\:\:)+/', $val) !== false) {

                                                        $op_count = preg_match_all('/(\<\=)+|(\=\>)+|(\=\<)+|(\>\=)+|(\+)+|(\-)+|(\=)+|(\*)+|(\/)+|(\%)+|(\>)+|(\>)+|(\<)+|(\&\&)+|(\!)+|(\|)+|(\^)+|(\~)+|(\,)+|(\.)+|(\:\:)+/', $val, $counter);


                                                    }

                                                    $Nop = $op_count * $weight_operator;

                                                }

                                                // -------- Weight due to Operators - End --------


                                                // -------- Weight due to Numerical Values - Begin --------

                                                $numbers = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
                                                $numbers_count_total = 0;

                                                foreach ($numbers as $word) {

                                                    if (preg_match('/(\d)+/', $val) !== false) {

                                                        $numbers_count_total = preg_match_all('/(\d)+/', $val, $counter);

                                                    }

                                                    $Nnv = $numbers_count_total * $weight_numerical;

                                                }

                                                // -------- Weight due to Numerical Values - End --------


                                                // -------- Weight due to String Literals - Begin --------

                                                $strings_count_total = 0;

                                                for ($x = 0; $x <= $row_count; $x++) {

                                                    if (preg_match('/"(.*?)"/', $val) !== false) {

                                                        $strings_count_total = preg_match_all('/"(.*?)"/', $val, $counter);

                                                    }

                                                    $Nsl = $strings_count_total * $weight_string;

                                                }

                                                // -------- Weight due to String Literals - End --------


                                                foreach ($keywords as $word) {
                                                    if ($Nkw > 0 && strpos($val, $word)) {
                                                        $tokenkw = $word;
                                                    }
                                                }

                                                foreach ($operators as $op) {
                                                    if (strpos($val, $op)) {
                                                        $tokenOp = $op;
                                                    }
                                                }

                                                foreach ($numbers as $number) {
                                                    if (strpos($val, $number)) {
                                                        $tokenNumber = $number;
                                                    }
                                                }


                                                if ($Nkw == 0 && preg_match_all('/import /', $val, $counter)) {
                                                    $Nkw = null;
                                                    $Nid = null;
                                                    $Nop = null;
                                                    $Nnv = null;
                                                    $Nsl = null;
                                                }


                                                for ($x = 0; $x <= $row_count; $x++) {
                                                    //Matching Classes
                                                    $classes = (getContentsBetween($val, 'class ', '{'));
                                                    foreach ($classes as $class) {
                                                        if (strpos($val, $class)) {
                                                            $tokenClass = $class;

                                                        }
                                                    }

                                                }

                                                for ($x = 0; $x <= $row_count; $x++) {
                                                    //Matching Strings
                                                    $strings_count = preg_match_all('/"(.*?)"/', $val, $counter);

                                                    foreach ($counter as $string) {
                                                        foreach ($string as $str) {
                                                            if (strpos($val, $str)) {
                                                                $tokenString = $str;

                                                            }

                                                        }

                                                    }

                                                }


                                                $previousCCS = 0;
                                                $currentCCS = 0;


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


                                                $Ccs = ($Wtcs * $NC);


                                                if ($NC == 0) {

                                                    $Ccspps = 0;

                                                } else {

                                                    $Ccspps = $Ccs;

                                                }

                                                if ($Wtcs == 0) {

                                                    $NC = null;
                                                    $Wtcs = null;
                                                    $previousCCS = null;
                                                    $currentCCS = 0;

                                                }


                                                if (stripos($val, $if_val) !== false || stripos($val, $switch_val) !== false || stripos($val, $for_val) !== false || stripos($val, $while_val) !== false) {

                                                    if (sizeof($arrCCS) >= 1) {
                                                        $var = $Ccs + $arrCCS[sizeof($arrCCS) - 1];
                                                    } else {
                                                        $var = $Ccs;
                                                    }
                                                    array_push($arrCCS, $var);

                                                    if (!$inElse) {
                                                        array_push($arr2, $var);
                                                    }

                                                    $currentCCS = $arrCCS[sizeof($arrCCS) - 1];

                                                    if (sizeof($arrCCS) >= 2) {
                                                        $previousCCS = $arrCCS[sizeof($arrCCS) - 2];
                                                    }

                                                }

                                                if (sizeof($arrCCS) >= 2 && (stripos($val, $case_val) !== false)) {
                                                    $previousCCS = $arrCCS[sizeof($arrCCS) - 1];
                                                    $currentCCS = $Ccs + $arrCCS[sizeof($arrCCS) - 1];
                                                }

                                                if (stripos($val, $else_val) !== false) {
                                                    $inElse = true;

                                                }
                                                if ((stripos($val, $if_val) !== false || stripos($val, $switch_val) !== false || stripos($val, $for_val) !== false || stripos($val, $while_val) !== false) && $inElse) {
                                                    if (sizeof($elseArr) >= 1) {
                                                        $var = $Ccs + $elseArr[sizeof($elseArr) - 1];
                                                    } else {
                                                        $var = $Ccs + $arr2[sizeof($arr2) - 1];
                                                    }
                                                    array_push($elseArr, $var);
                                                }
                                                if (sizeof($elseArr) >= 1 && stripos($val, $case_val) !== false && $inElse) {

                                                    $previousCCS = $elseArr[sizeof($elseArr) - 1];
                                                    $currentCCS = $Ccs + $elseArr[sizeof($elseArr) - 1];
                                                }

                                                if ($inElse && stripos($val, $switch_val) !== false) {
                                                    $previousCCS = $arr2[sizeof($arr2) - 1];
                                                    $currentCCS = $Ccs + $previousCCS;

                                                    if (sizeof($arrCCS) >= 2 && (stripos($val, $case_val) !== false)) {
                                                        $previousCCS = $arrCCS[sizeof($arrCCS) - 1];
                                                        $currentCCS = $Ccs + $arrCCS[sizeof($arrCCS) - 1];
                                                    }
                                                }

                                                $Cs = $Nkw + $Nid + $Nop + $Nnv + $Nsl;

                                                $total_cs += $Cs;




                                                $Ci_last=0;

                                                $lastRowinherit = "SELECT * FROM inheritancetotal";
                                                $run_query_lastinherit = mysqli_query($con, $lastRowinherit);


                                                while ($lastrow = mysqli_fetch_assoc($run_query_lastinherit)) {
                                                    $inheri_tot_ID_last = $lastrow['inheri_tot_ID'];
                                                    $inheritanceWord_last = $lastrow['inheritanceWord'];
                                                    $Ci_tot_last = $lastrow['Ci_tot'];



                                                    if (strpos($val, $inheritanceWord_last)) {

                                                        $ci_final += $Ci_tot_last;

                                                        $Ci_last = '<i class="flaticon2-check-mark"></i>';

                                                    }

                                                }

                                                $TCps = $Cs + $Cv + $Cm + $currentCCS;

                                                $total_TCps += $TCps;

                                                $total_ccs += $currentCCS;


                                                ?>
                                                <tr>
                                                    <td><?php echo $count = $count + 1; ?></td>
                                                    <td style="text-align: left"><?php echo $val; ?></td>
                                                    <td <?php if ($Cs > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo $Cs; ?></td>
                                                    <td <?php if ($Cv > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo $Cv; ?></td>
                                                    <td <?php if ($Cm > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo $Cm; ?></td>
                                                    <td <?php if ($Ci_last === '<i class="flaticon2-check-mark"></i>'){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo $Ci_last; ?></td>
                                                    <td>0</td>
                                                    <td <?php if ($currentCCS > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo $currentCCS; ?></td>
                                                    <td style="color: #2A3746;font-weight: bold;"
                                                        class="kt-label-bg-color-1"><?php echo $TCps; ?></td>
                                                    <?php $i++;

                                                    if (stripos($val, $end_curlyBrace) !== false && $inElse && sizeof($elseArr) >= 1) {

                                                        array_pop($elseArr);

                                                        if (sizeof($elseArr) == 0) {

                                                            $inElse = false;

                                                        }

                                                    }

                                                    if (stripos($val, $end_curlyBrace) !== false) {

                                                        if (!is_null($arrCCS)) {

                                                            array_pop($arrCCS);

                                                        }

                                                    }

                                                    }
                                                    }
                                                    }
                                                    }
                                                    }
                                                    }
                                                    }
                                                    $_SESSION['row_count'] = $i;
                                                    ?>
                                                </tr>


                                                </tbody>
                                                <tfoot>
                                                <tr class="kt-label-bg-color-1" style="font-family: 'Fira Code Medium'">

                                                    <th colspan="2">Total</th>
                                                    <th><?php echo $total_cs; ?></th>
                                                    <th><?php echo $total_Cv; ?></th>
                                                    <th><?php echo $total_Cm; ?></th>

                                                    <?php

                                                    $lastRow_final_in = "SELECT * FROM inheritancefinaltotal ORDER BY inherifinal_total_ID DESC LIMIT 1";
                                                    $run_query_last_in = mysqli_query($con, $lastRow_final_in);

                                                    while ($lastrow = mysqli_fetch_assoc($run_query_last_in)) {
                                                    $inherifinal_total_ID_last = $lastrow['inherifinal_total_ID'];
                                                    $cifinaltotal_last = $lastrow['cifinaltotal'];

                                                    ?>
                                                    <th><?php echo $cifinaltotal_last; ?></th>

                                                    <th>0</th>
                                                    <th><?php echo $total_ccs; ?></th>
                                                    <th style="font-weight: bold; font-size: x-large;"
                                                        class="bg-dark kt-font-brand"><?php echo $total_TCps + $cifinaltotal_last; ?></th>
                                                </tr>       <?php } ?>
                                                </tfoot>
                                            </table>
                                            <?php

                                            $query_disp_total_comp = "INSERT INTO totalcomplexity(totalcomplexityValue) VALUES('$total_TCps')";
                                            mysqli_query($con, $query_disp_total_comp);

                                            ?>
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

                                        <button id="kt_sweetalert_demo_83" type="button" href="index.php"
                                                class="btn btn-dark">Back
                                        </button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!--end::Portlet-->


            <?php }
            }
            }
            }
            }
            }
            $query_disp_final_tot = "INSERT INTO finaltotal(FinalTotalValue) VALUES('$final_total')";
            mysqli_query($con, $query_disp_final_tot);

            ?>


        </div>


        <!--End::Row-->

        <!--End::Dashboard 3-->
    </div>
    <!-- end:: Content -->
</div>
