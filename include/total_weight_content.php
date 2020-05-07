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

            </div>
        </div>
    </div>

    <!-- end:: Content Head -->
    <?php

    $total_CsValue = 0;

    $entry_arr_af = preg_split("/\.java/", $entry);
    $entry_arr = array_filter($entry_arr_af);

    foreach ($entry_arr as $files_arr) {


    $fi = new FilesystemIterator($storeFolder, FilesystemIterator::SKIP_DOTS);
    $limit = (iterator_count($fi));

    $lastRow = "SELECT * FROM ( SELECT * FROM cs ORDER BY CsID DESC LIMIT $limit) result ORDER BY CsID ASC";
    $run_query_last = mysqli_query($con,$lastRow);

    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
    $CsID_last = $lastrow['CsID'];
    $CsValue_last = $lastrow['CsValue'];



    ?>
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!--Begin::Dashboard 3-->

        <div class="col-lg-12 removeduplicateelement">
            <div class="kt-portlet kt-iconbox kt-iconbox--success kt-iconbox--animate-slow">
                <div class="kt-portlet__body">
                    <div class="kt-iconbox__body">
                        <div class="kt-iconbox__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
                                    <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
                                    <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
                                </g>
                            </svg> </div>
                        <div class="col-lg-12">
                            <div class="kt-iconbox__desc kt-font-success">

                                <center><h1 style="font-family: 'Fira Code'">Total Complexity : <?php echo $total_CsValue; ?></h1></center>


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

                                                <?php
                                                $lastRow = "SELECT * FROM ( SELECT * FROM totalcomplexity ORDER BY totalcomplexityID DESC LIMIT $limit) result ORDER BY totalcomplexityID ASC";
                                                $run_query_last = mysqli_query($con,$lastRow);

                                                while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                                                $totalcomplexityID_last = $lastrow['totalcomplexityID'];
                                                $totalcomplexityValue_last = $lastrow['totalcomplexityValue'];
                                                ?>
                                                <center><h1 style="font-family: 'Fira Code'">Cpr : <?php echo $totalcomplexityValue_last ?></h1></center>


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



                                                if (!$split == ''){

                                                foreach ($split

                                                as $val) { // Traverse the array with FOREACH

                                                $val;

                                                // -------- Weight due to Keywords - Begin --------

                                                $keywords = ['abstract', 'assert', 'break', 'catch', 'class', 'const', 'continue', 'default', 'do', 'else', 'enum', 'extends', 'final', 'finally', 'goto', 'implements', 'instanceof', 'interface', 'native', 'new', 'package', 'private', 'protected', 'public', 'return', 'static', 'strictfp', 'super', 'synchronized', 'this', 'throw', 'throws', 'transient', 'try', 'void', 'volatile'];

                                                $tokenkw = "";
                                                $tokenOp = "";
                                                $tokenClass = "";
                                                $tokenNumber = "";
                                                $tokenString = "";


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


                                                    $identifiers_count_total = $count_class + $count_objects + $count_methods;

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


                                                $Cs = $Nkw + $Nid + $Nop + $Nnv + $Nsl;

                                                $total_cs += $Cs;

                                                $TCps = $Cs;

                                                $total_TCps += $TCps;

                                                $total_CsValue += $total_TCps;

                                                ?>
                                                <tr>
                                                    <td><?php echo $count = $count + 1; ?></td>
                                                    <td style="text-align: left"><?php echo $val; ?></td>
                                                    <td <?php if ($Cs > 0){ ?>style="color: #2c77f4; font-weight: bold; background-color: #e0e0e0"<?php } ?>><?php echo $Cs; ?></td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td style="color: #2A3746;font-weight: bold;" class="kt-label-bg-color-1"><?php echo $TCps; ?></td>
                                                    <?php $i++;
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
                                                    <th>1</th>
                                                    <th>2</th>
                                                    <th>0</th>
                                                    <th>0</th>
                                                    <th>9</th>
                                                    <th style="font-weight: bold; font-size: x-large;" class="bg-dark kt-font-brand"><?php echo $total_TCps; ?></th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <?php

                                            echo $total_CsValue;

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


            <?php }}}} ?>


        </div>


        <!--End::Row-->

        <!--End::Dashboard 3-->
    </div>
    <!-- end:: Content -->
</div>
