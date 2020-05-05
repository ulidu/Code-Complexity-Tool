<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>


<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Content Head -->
						<div class="kt-subheader  kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">Change Default Weights</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>


									<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
										<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
										<span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="flaticon2-search-1"></i></span>
										</span>
									</div>
								</div>
                                <div class="kt-subheader__toolbar">




                                    <a href="index.php" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
                                        Add New
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

    <div class="col-lg-7">



    <!--begin::Portlet-->
    <div class="kt-portlet kt-portlet--tabs">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-toolbar">
                <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-line-2x nav-tabs-line-right nav-tabs-bold" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kt_portlet_base_demo_3_3_tab_content" role="tab">
                            <i class="flaticon-arrows" aria-hidden="true"></i>Size
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_portlet_base_demo_3_4_tab_content" role="tab">
                            <i class="flaticon-interface-7" aria-hidden="true"></i>Variables
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_portlet_base_demo_3_5_tab_content" role="tab">
                            <i class="flaticon-map" aria-hidden="true"></i>Methods
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_portlet_base_demo_3_6_tab_content" role="tab">
                            <i class="flaticon-layers" aria-hidden="true"></i>Inheritance
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_portlet_base_demo_3_7_tab_content" role="tab">
                            <i class="flaticon-list-3" aria-hidden="true"></i>Coupling
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_portlet_base_demo_3_8_tab_content" role="tab">
                            <i class="flaticon-cogwheel-2" aria-hidden="true"></i>Control Structures
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="kt-portlet__body">
            <div class="tab-content">
                <div class="tab-pane active" id="kt_portlet_base_demo_3_3_tab_content" role="tabpanel">

                    <!-- Start of Size -->

                    <?php

                    $lastRow = "SELECT * FROM size ORDER BY SizeID DESC LIMIT 1";
                    $run_query_last = mysqli_query($con,$lastRow);

                    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                    $SizeID_last = $lastrow['SizeID'];
                    $Keyword_last = $lastrow['Keyword'];
                    $Identifier_last = $lastrow['Identifier'];
                    $Operator_last = $lastrow['Operator'];
                    $NumericalValue_last = $lastrow['NumericalValue'];
                    $StringLiteral_last = $lastrow['StringLiteral'];

                    ?>
                    <h5 class="kt-font-brand">Weights related to the Size factor</h5>
                    <hr>



                    <!--begin::Form-->
                        <div class="col-lg-12">
                    <form action="" method="post" class="kt-form">
                        <div class="kt-portlet__body">


                            <div class="form-group row">
                                <label class="col-4 col-form-label">Keyword</label>
                                <div class="col-5">
                                <input value="<?php echo $Keyword_last; ?>" style="text-align: center" id="Keyword" name="Keyword" type="number" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-4 col-form-label">Identifier</label>
                                <div class="col-5">
                                <input value="<?php echo $Identifier_last; ?>" style="text-align: center" id="Identifier" name="Identifier" type="number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Operator</label>
                                <div class="col-5">
                                <input value="<?php echo $Operator_last; ?>" style="text-align: center" id="Operator" name="Operator" type="number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Numerical Value</label>
                                <div class="col-5">
                                <input value="<?php echo $NumericalValue_last; ?>" style="text-align: center" id="NumericalValue" name="NumericalValue" type="number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">String Literal</label>
                                <div class="col-5">
                                <input value="<?php echo $StringLiteral_last; ?>" style="text-align: center" id="StringLiteral" name="StringLiteral" type="number" class="form-control">
                                </div>
                            </div>



                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <button type="submit" name="submitSize" id="submitSize" class="btn btn-brand">Save</button>
                                <button type="submit" name="resetSize" id="resetSize" class="btn btn-secondary">Reset to Defaults</button>
                            </div>
                        </div>
                    </form>
                        </div>
                    <!--end::Form-->

                </div>
                <?php } ?>
                <?php

                if(isset($_POST['resetSize'])){

                    $resetWeights= "DELETE FROM size WHERE SizeID NOT IN ( SELECT * FROM ( SELECT SizeID FROM size ORDER BY SizeID LIMIT 1) s)";
                    mysqli_query($con,$resetWeights);
                    echo '<meta http-equiv=Refresh content="0;url=change_weight.php?reload=1">';

                } ?>

                <?php

                if(isset($_POST['submitSize'])){


                    $Keyword=$_POST['Keyword'];
                    $Identifier=$_POST['Identifier'];
                    $Operator=$_POST['Operator'];
                    $NumericalValue=$_POST['NumericalValue'];
                    $StringLiteral=$_POST['StringLiteral'];

                    $query = "INSERT INTO size(Keyword,Identifier,Operator,NumericalValue,StringLiteral) VALUES('$Keyword','$Identifier','$Operator','$NumericalValue','$StringLiteral')";

                    $create_query = mysqli_query($con, $query);

                    if ( $create_query ) {
                        echo " <div class='alert alert-solid-success alert-bold' role='alert'>";
                        echo " <div class='alert-text'>Successfully Saved.</div>";
                        echo " </div>";
                        echo '<meta http-equiv=Refresh content="0;url=change_weight.php?reload=1">';

                    }else{
                        echo " <div class='alert alert-solid-danger alert-bold' role='alert'>";
                        echo " <div class='alert-text'>Something went wrong.</div>";
                        echo " </div>";
                    }



                }


                ?>
                <!-- End of Size -->






                <!-- Start of Variables -->

                <div class="tab-pane" id="kt_portlet_base_demo_3_4_tab_content" role="tabpanel">
                    <?php

                    $lastRow = "SELECT * FROM variables ORDER BY VariableID DESC LIMIT 1";
                    $run_query_last = mysqli_query($con,$lastRow);

                    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                    $VariableID_last = $lastrow['VariableID'];
                    $GlobalVariable_last = $lastrow['GlobalVariable'];
                    $LocalVariable_last = $lastrow['LocalVariable'];
                    $PrimitiveVariable_last = $lastrow['PrimitiveVariable'];
                    $CompositeVariable_last = $lastrow['CompositeVariable'];


                    ?>
                    <h5 class="kt-font-brand">Weights related to the Variable factor</h5>
                    <hr>

                    <!--begin::Form-->
                    <div class="col-lg-12">
                        <form action="" method="post" class="kt-form">
                            <div class="kt-portlet__body">


                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Global Variable</label>
                                    <div class="col-5">
                                        <input value="<?php echo $GlobalVariable_last; ?>" style="text-align: center" id="GlobalVariable" name="GlobalVariable" type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Local Variable</label>
                                    <div class="col-5">
                                        <input value="<?php echo $LocalVariable_last; ?>" style="text-align: center" id="LocalVariable" name="LocalVariable" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Primitive Variable</label>
                                    <div class="col-5">
                                        <input value="<?php echo $PrimitiveVariable_last; ?>" style="text-align: center" id="PrimitiveVariable" name="PrimitiveVariable" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Composite Variable</label>
                                    <div class="col-5">
                                        <input value="<?php echo $CompositeVariable_last; ?>" style="text-align: center" id="CompositeVariable" name="CompositeVariable" type="number" class="form-control">
                                    </div>
                                </div>



                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <button type="submit" name="submitVariable" id="submitVariable" class="btn btn-brand">Save</button>
                                    <button type="submit" name="resetVariable" id="resetVariable" class="btn btn-secondary">Reset to Defaults</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--end::Form-->

                </div>
            <?php } ?>
                <?php

                if(isset($_POST['resetVariable'])){

                    $resetWeights= "DELETE FROM variables WHERE VariableID NOT IN ( SELECT * FROM ( SELECT VariableID FROM variables ORDER BY VariableID LIMIT 1) s)";
                    mysqli_query($con,$resetWeights);
                    echo '<meta http-equiv=Refresh content="0;url=change_weight.php?reload=1">';

                } ?>

                <?php

                if(isset($_POST['submitVariable'])){


                    $GlobalVariable=$_POST['GlobalVariable'];
                    $LocalVariable=$_POST['LocalVariable'];
                    $PrimitiveVariable=$_POST['PrimitiveVariable'];
                    $CompositeVariable=$_POST['CompositeVariable'];

                    $query = "INSERT INTO variables(GlobalVariable,LocalVariable,PrimitiveVariable,CompositeVariable) VALUES('$GlobalVariable','$LocalVariable','$PrimitiveVariable','$CompositeVariable')";

                    $create_query = mysqli_query($con, $query);

                    if ( $create_query ) {
                        echo " <div class='alert alert-solid-success alert-bold' role='alert'>";
                        echo " <div class='alert-text'>Successfully Saved.</div>";
                        echo " </div>";
                        echo '<meta http-equiv=Refresh content="0;url=change_weight.php?reload=1">';

                    }else{
                        echo " <div class='alert alert-solid-danger alert-bold' role='alert'>";
                        echo " <div class='alert-text'>Something went wrong.</div>";
                        echo " </div>";
                    }



                }


                ?>
                <!-- End of Variables -->




                <!-- Start of Methods -->
                <div class="tab-pane" id="kt_portlet_base_demo_3_5_tab_content" role="tabpanel">


                    <?php

                    $lastRow = "SELECT * FROM size ORDER BY SizeID DESC LIMIT 1";
                    $run_query_last = mysqli_query($con,$lastRow);

                    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                    $SizeID_last = $lastrow['SizeID'];
                    $Keyword_last = $lastrow['Keyword'];
                    $Identifier_last = $lastrow['Identifier'];
                    $Operator_last = $lastrow['Operator'];
                    $NumericalValue_last = $lastrow['NumericalValue'];
                    $StringLiteral_last = $lastrow['StringLiteral'];

                    ?>
                    <h5 class="kt-font-brand">Weights related to the Methods factor</h5>
                    <hr>



                    <!--begin::Form-->
                    <div class="col-lg-12">
                        <form action="" method="post" class="kt-form">
                            <div class="kt-portlet__body">


                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Keyword</label>
                                    <div class="col-5">
                                        <input value="<?php echo $Keyword_last; ?>" style="text-align: center" id="Keyword" name="Keyword" type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Identifier</label>
                                    <div class="col-5">
                                        <input value="<?php echo $Identifier_last; ?>" style="text-align: center" id="Identifier" name="Identifier" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Operator</label>
                                    <div class="col-5">
                                        <input value="<?php echo $Operator_last; ?>" style="text-align: center" id="Operator" name="Operator" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Numerical Value</label>
                                    <div class="col-5">
                                        <input value="<?php echo $NumericalValue_last; ?>" style="text-align: center" id="NumericalValue" name="NumericalValue" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">String Literal</label>
                                    <div class="col-5">
                                        <input value="<?php echo $StringLiteral_last; ?>" style="text-align: center" id="StringLiteral" name="StringLiteral" type="number" class="form-control">
                                    </div>
                                </div>



                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <button type="submit" name="submitSize" id="submitSize" class="btn btn-brand">Save</button>
                                    <button type="submit" name="resetSize" id="resetSize" class="btn btn-secondary">Reset to Defaults</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--end::Form-->

                </div>
            <?php } ?>
                <?php

                if(isset($_POST['resetSize'])){

                    $resetWeights= "DELETE FROM size WHERE SizeID NOT IN ( SELECT * FROM ( SELECT SizeID FROM size ORDER BY SizeID LIMIT 1) s)";
                    mysqli_query($con,$resetWeights);
                    echo '<meta http-equiv=Refresh content="0;url=change_weight.php?reload=1">';

                } ?>

                <?php

                if(isset($_POST['submitSize'])){


                    $Keyword=$_POST['Keyword'];
                    $Identifier=$_POST['Identifier'];
                    $Operator=$_POST['Operator'];
                    $NumericalValue=$_POST['NumericalValue'];
                    $StringLiteral=$_POST['StringLiteral'];

                    $query = "INSERT INTO size(Keyword,Identifier,Operator,NumericalValue,StringLiteral) VALUES('$Keyword','$Identifier','$Operator','$NumericalValue','$StringLiteral')";

                    $create_query = mysqli_query($con, $query);

                    if ( $create_query ) {
                        echo " <div class='alert alert-solid-success alert-bold' role='alert'>";
                        echo " <div class='alert-text'>Successfully Saved.</div>";
                        echo " </div>";
                        echo '<meta http-equiv=Refresh content="0;url=change_weight.php?reload=1">';

                    }else{
                        echo " <div class='alert alert-solid-danger alert-bold' role='alert'>";
                        echo " <div class='alert-text'>Something went wrong.</div>";
                        echo " </div>";
                    }



                }


                ?>

                <!-- End of Methods -->





                <!-- Start of Inheritance -->
                <div class="tab-pane" id="kt_portlet_base_demo_3_6_tab_content" role="tabpanel">


                    <?php

                    $lastRow = "SELECT * FROM size ORDER BY SizeID DESC LIMIT 1";
                    $run_query_last = mysqli_query($con,$lastRow);

                    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                    $SizeID_last = $lastrow['SizeID'];
                    $Keyword_last = $lastrow['Keyword'];
                    $Identifier_last = $lastrow['Identifier'];
                    $Operator_last = $lastrow['Operator'];
                    $NumericalValue_last = $lastrow['NumericalValue'];
                    $StringLiteral_last = $lastrow['StringLiteral'];

                    ?>
                    <h5 class="kt-font-brand">Weights related to the Inheritance factor</h5>
                    <hr>



                    <!--begin::Form-->
                    <div class="col-lg-12">
                        <form action="" method="post" class="kt-form">
                            <div class="kt-portlet__body">


                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Keyword</label>
                                    <div class="col-5">
                                        <input value="<?php echo $Keyword_last; ?>" style="text-align: center" id="Keyword" name="Keyword" type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Identifier</label>
                                    <div class="col-5">
                                        <input value="<?php echo $Identifier_last; ?>" style="text-align: center" id="Identifier" name="Identifier" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Operator</label>
                                    <div class="col-5">
                                        <input value="<?php echo $Operator_last; ?>" style="text-align: center" id="Operator" name="Operator" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Numerical Value</label>
                                    <div class="col-5">
                                        <input value="<?php echo $NumericalValue_last; ?>" style="text-align: center" id="NumericalValue" name="NumericalValue" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">String Literal</label>
                                    <div class="col-5">
                                        <input value="<?php echo $StringLiteral_last; ?>" style="text-align: center" id="StringLiteral" name="StringLiteral" type="number" class="form-control">
                                    </div>
                                </div>



                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <button type="submit" name="submitSize" id="submitSize" class="btn btn-brand">Save</button>
                                    <button type="submit" name="resetSize" id="resetSize" class="btn btn-secondary">Reset to Defaults</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--end::Form-->

                </div>
            <?php } ?>
                <?php

                if(isset($_POST['resetSize'])){

                    $resetWeights= "DELETE FROM size WHERE SizeID NOT IN ( SELECT * FROM ( SELECT SizeID FROM size ORDER BY SizeID LIMIT 1) s)";
                    mysqli_query($con,$resetWeights);
                    echo '<meta http-equiv=Refresh content="0;url=change_weight.php?reload=1">';

                } ?>

                <?php

                if(isset($_POST['submitSize'])){


                    $Keyword=$_POST['Keyword'];
                    $Identifier=$_POST['Identifier'];
                    $Operator=$_POST['Operator'];
                    $NumericalValue=$_POST['NumericalValue'];
                    $StringLiteral=$_POST['StringLiteral'];

                    $query = "INSERT INTO size(Keyword,Identifier,Operator,NumericalValue,StringLiteral) VALUES('$Keyword','$Identifier','$Operator','$NumericalValue','$StringLiteral')";

                    $create_query = mysqli_query($con, $query);

                    if ( $create_query ) {
                        echo " <div class='alert alert-solid-success alert-bold' role='alert'>";
                        echo " <div class='alert-text'>Successfully Saved.</div>";
                        echo " </div>";
                        echo '<meta http-equiv=Refresh content="0;url=change_weight.php?reload=1">';

                    }else{
                        echo " <div class='alert alert-solid-danger alert-bold' role='alert'>";
                        echo " <div class='alert-text'>Something went wrong.</div>";
                        echo " </div>";
                    }



                }


                ?>


                <!-- End of Inheritance -->




                <!-- Start of Coupling -->

                <div class="tab-pane" id="kt_portlet_base_demo_3_7_tab_content" role="tabpanel">
                    <?php

                    $lastRow = "SELECT * FROM size ORDER BY SizeID DESC LIMIT 1";
                    $run_query_last = mysqli_query($con,$lastRow);

                    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                    $SizeID_last = $lastrow['SizeID'];
                    $Keyword_last = $lastrow['Keyword'];
                    $Identifier_last = $lastrow['Identifier'];
                    $Operator_last = $lastrow['Operator'];
                    $NumericalValue_last = $lastrow['NumericalValue'];
                    $StringLiteral_last = $lastrow['StringLiteral'];

                    ?>
                    <h5 class="kt-font-brand">Weights related to the Coupling factor</h5>
                    <hr>



                    <!--begin::Form-->
                    <div class="col-lg-12">
                        <form action="" method="post" class="kt-form">
                            <div class="kt-portlet__body">


                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Keyword</label>
                                    <div class="col-5">
                                        <input value="<?php echo $Keyword_last; ?>" style="text-align: center" id="Keyword" name="Keyword" type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Identifier</label>
                                    <div class="col-5">
                                        <input value="<?php echo $Identifier_last; ?>" style="text-align: center" id="Identifier" name="Identifier" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Operator</label>
                                    <div class="col-5">
                                        <input value="<?php echo $Operator_last; ?>" style="text-align: center" id="Operator" name="Operator" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Numerical Value</label>
                                    <div class="col-5">
                                        <input value="<?php echo $NumericalValue_last; ?>" style="text-align: center" id="NumericalValue" name="NumericalValue" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">String Literal</label>
                                    <div class="col-5">
                                        <input value="<?php echo $StringLiteral_last; ?>" style="text-align: center" id="StringLiteral" name="StringLiteral" type="number" class="form-control">
                                    </div>
                                </div>



                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <button type="submit" name="submitSize" id="submitSize" class="btn btn-brand">Save</button>
                                    <button type="submit" name="resetSize" id="resetSize" class="btn btn-secondary">Reset to Defaults</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--end::Form-->

                </div>
            <?php } ?>
                <?php

                if(isset($_POST['resetSize'])){

                    $resetWeights= "DELETE FROM size WHERE SizeID NOT IN ( SELECT * FROM ( SELECT SizeID FROM size ORDER BY SizeID LIMIT 1) s)";
                    mysqli_query($con,$resetWeights);
                    echo '<meta http-equiv=Refresh content="0;url=change_weight.php?reload=1">';

                } ?>

                <?php

                if(isset($_POST['submitSize'])){


                    $Keyword=$_POST['Keyword'];
                    $Identifier=$_POST['Identifier'];
                    $Operator=$_POST['Operator'];
                    $NumericalValue=$_POST['NumericalValue'];
                    $StringLiteral=$_POST['StringLiteral'];

                    $query = "INSERT INTO size(Keyword,Identifier,Operator,NumericalValue,StringLiteral) VALUES('$Keyword','$Identifier','$Operator','$NumericalValue','$StringLiteral')";

                    $create_query = mysqli_query($con, $query);

                    if ( $create_query ) {
                        echo " <div class='alert alert-solid-success alert-bold' role='alert'>";
                        echo " <div class='alert-text'>Successfully Saved.</div>";
                        echo " </div>";
                        echo '<meta http-equiv=Refresh content="0;url=change_weight.php?reload=1">';

                    }else{
                        echo " <div class='alert alert-solid-danger alert-bold' role='alert'>";
                        echo " <div class='alert-text'>Something went wrong.</div>";
                        echo " </div>";
                    }



                }


                ?>


                <!-- End of Coupling -->






                <!-- Start of Control Structures -->

                <div class="tab-pane" id="kt_portlet_base_demo_3_8_tab_content" role="tabpanel">
                    <?php

                    $lastRow = "SELECT * FROM size ORDER BY SizeID DESC LIMIT 1";
                    $run_query_last = mysqli_query($con,$lastRow);

                    while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                    $SizeID_last = $lastrow['SizeID'];
                    $Keyword_last = $lastrow['Keyword'];
                    $Identifier_last = $lastrow['Identifier'];
                    $Operator_last = $lastrow['Operator'];
                    $NumericalValue_last = $lastrow['NumericalValue'];
                    $StringLiteral_last = $lastrow['StringLiteral'];

                    ?>
                    <h5 class="kt-font-brand">Weights related to the Control Structures factor</h5>
                    <hr>



                    <!--begin::Form-->
                    <div class="col-lg-12">
                        <form action="" method="post" class="kt-form">
                            <div class="kt-portlet__body">


                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Keyword</label>
                                    <div class="col-5">
                                        <input value="<?php echo $Keyword_last; ?>" style="text-align: center" id="Keyword" name="Keyword" type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Identifier</label>
                                    <div class="col-5">
                                        <input value="<?php echo $Identifier_last; ?>" style="text-align: center" id="Identifier" name="Identifier" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Operator</label>
                                    <div class="col-5">
                                        <input value="<?php echo $Operator_last; ?>" style="text-align: center" id="Operator" name="Operator" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">Numerical Value</label>
                                    <div class="col-5">
                                        <input value="<?php echo $NumericalValue_last; ?>" style="text-align: center" id="NumericalValue" name="NumericalValue" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4 col-form-label">String Literal</label>
                                    <div class="col-5">
                                        <input value="<?php echo $StringLiteral_last; ?>" style="text-align: center" id="StringLiteral" name="StringLiteral" type="number" class="form-control">
                                    </div>
                                </div>



                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <button type="submit" name="submitSize" id="submitSize" class="btn btn-brand">Save</button>
                                    <button type="submit" name="resetSize" id="resetSize" class="btn btn-secondary">Reset to Defaults</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--end::Form-->

                </div>
            <?php } ?>
                <?php

                if(isset($_POST['resetSize'])){

                    $resetWeights= "DELETE FROM size WHERE SizeID NOT IN ( SELECT * FROM ( SELECT SizeID FROM size ORDER BY SizeID LIMIT 1) s)";
                    mysqli_query($con,$resetWeights);
                    echo '<meta http-equiv=Refresh content="0;url=change_weight.php?reload=1">';

                } ?>

                <?php

                if(isset($_POST['submitSize'])){


                    $Keyword=$_POST['Keyword'];
                    $Identifier=$_POST['Identifier'];
                    $Operator=$_POST['Operator'];
                    $NumericalValue=$_POST['NumericalValue'];
                    $StringLiteral=$_POST['StringLiteral'];

                    $query = "INSERT INTO size(Keyword,Identifier,Operator,NumericalValue,StringLiteral) VALUES('$Keyword','$Identifier','$Operator','$NumericalValue','$StringLiteral')";

                    $create_query = mysqli_query($con, $query);

                    if ( $create_query ) {
                        echo " <div class='alert alert-solid-success alert-bold' role='alert'>";
                        echo " <div class='alert-text'>Successfully Saved.</div>";
                        echo " </div>";
                        echo '<meta http-equiv=Refresh content="0;url=change_weight.php?reload=1">';

                    }else{
                        echo " <div class='alert alert-solid-danger alert-bold' role='alert'>";
                        echo " <div class='alert-text'>Something went wrong.</div>";
                        echo " </div>";
                    }



                }


                ?>


                <!-- End of Control Structures -->


            </div>
        </div>

    </div>
    </div>

    <!--end::Portlet-->

    <!--begin::Portlet-->
        <div class="col-lg-5">
    <div class="kt-portlet kt-portlet--skin-solid kt-portlet-- kt-bg-brand">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="flaticon2-information"></i>
												</span>
                <h3 class="kt-portlet__head-title">
                    Change the Default Weights
                </h3>
            </div>

        </div>
        <div class="kt-portlet__body">
            Tip : You can change the default weights allocated for the program components. <br><br>Customized weights are saved using 🍪 Cookies in your browser.
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
