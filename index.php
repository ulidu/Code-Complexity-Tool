<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>

<?php

unset ($_SESSION["split_code"]);
unset ($_SESSION["trimmed"]);
unset ($_SESSION["filename"]);
unset ($_SESSION["row_count"]);
unset ($_SESSION["entireCode"]);

//unset($_SESSION['split_code']);
//The name of the folder.
$folder = 'uploads';

//Get a list of all of the file names in the folder.
$files = glob($folder . '/*');

//Loop through the file list.
foreach($files as $file){
    //Make sure that this is a file and not a directory.
    if(is_file($file)){
        //Use the unlink function to delete the file.
        unlink($file);
    }
}

if (!isset($_COOKIE[$cookie_name])) {

    $resetWeights= "DELETE FROM size WHERE SizeID NOT IN ( SELECT * FROM ( SELECT SizeID FROM size ORDER BY SizeID LIMIT 1) s)";
    mysqli_query($con,$resetWeights);

}

$resetCs= "DELETE FROM cs WHERE CsID NOT IN ( SELECT * FROM ( SELECT CsID FROM cs ORDER BY CsID LIMIT 1) s)";
mysqli_query($con,$resetCs);

?>


<div  class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Content Head -->
						<div class="kt-subheader  kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">Dashboard</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>


									<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
										<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
										<span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="flaticon2-search-1"></i></span>
										</span>
									</div>
								</div>
								<div class="kt-subheader__toolbar">




                                    <a href="change_weight.php" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
                                        Change Default Weights
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
    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Upload a File From Your PC
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form action="total_weight.php" method="post" enctype="multipart/form-data" class="kt-form kt-form--label-right">
            <div class="kt-portlet__body">

                <!--begin::Form-->
                <div class="form-group row">

                    <div class="col-lg-12 col-md-9 col-sm-12">
                        <div class="dropzone dropzone-default dropzone-success" id="kt_dropzone_3">
                            <div class="dropzone-msg dz-message needsclick">
                                <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                                <span class="dropzone-msg-desc">Only C++, Java files or Zip files with C++, Java programs are allowed for uploading</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-7 ml-lg-auto">

                            <button type="submit" name="upload" id="upload" class="btn btn-brand">Upload</button>
                            <button onclick="location.href='index.php'" type="reset" id="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>

    <!--end::Portlet--></div>
                            <!--End::Row-->
                            <div class="row">


                            <div class="col-lg-12">
                                <div class="kt-portlet kt-iconbox kt-iconbox--animate">
                                    <div class="kt-portlet__body">
                                        <div class="kt-iconbox__body">
                                            <div class="kt-iconbox__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg> </div>
                                            <div class="kt-iconbox__desc">
                                                <h3 class="kt-iconbox__title">
                                                    <a class="kt-link" href="">OR</a>
                                                </h3>
                                                <div class="kt-iconbox__content">
                                                    Use the Code Editor Below
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




</div>
                            </div>

                            <!--Begin::Row-->
                            <div class="row">
                            <!--begin::Portlet-->
                            <div class="kt-portlet">
                                <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">
                                            Paste Your Code Below
                                        </h3>
                                    </div>
                                </div>

                                <!--begin::Form-->
                                <form action="paste_content.php" method="post" class="kt-form kt-form--fit kt-form--label-right">
                                    <div class="kt-portlet__body">
                                        <div class="form-group row is-valid">


                                            <div class="col-lg-12 col-md-9 col-sm-12">
                                                <textarea name="paste_contents" id="paste_contents" class="form-control" data-provide="markdown" rows="20"></textarea>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="kt-portlet__foot">
                                        <div class="kt-form__actions">
                                            <div class="row">
                                                <div class="col-lg-7 ml-lg-auto">
                                                    <input type="submit" name="submit_content" id="submit_content" class="btn btn-brand">
                                                    <input type="hidden" name="submit_content" value="1">
                                                    <button onclick="location.href='index.php'" type="reset" class="btn btn-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!--end::Form-->
                            </div>

                            </div>        <!--end::Portlet-->


							<!--End::Dashboard 3-->
						</div>
						<!-- end:: Content -->
					</div>

<?php include 'include/footer.php'; ?>
