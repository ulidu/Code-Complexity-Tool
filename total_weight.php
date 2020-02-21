<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>

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
									
										
										<!--begin: Search -->
							<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-top-unround dropdown-menu-anim dropdown-menu-lg">
									<div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact" id="kt_quick_search_dropdown">
										<form method="get" class="kt-quick-search__form">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
												<input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
												<div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
											</div>
										</form>
										<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325" data-mobile-height="200">
										</div>
									</div>
								</div>
							</div>

							<!--end: Search -->
										
								
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
    <div class="kt-portlet kt-portlet--skin-solid kt-portlet-- kt-bg-brand">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="flaticon-time-1"></i>
												</span>
                <h3 class="kt-portlet__head-title">
                    Total Complexity of the Program
                </h3>
            </div>

        </div>
        <div class="kt-portlet__body">

            <center><h1>8</h1></center>

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
                                        Total Complexity of the Program due to All the Factors
                                    </h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-wrapper">
                                        <div class="kt-portlet__head-actions">
                                            <div class="dropdown dropdown-inline">
                                                <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                            <div class="kt-portlet__body">
                                <!--begin: Datatable -->
                                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                                    <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Ship Country</th>
                                        <th>Ship City</th>
                                        <th>Ship Address</th>
                                        <th>Company Agent</th>
                                        <th>Company Name</th>
                                        <th>Total Payment</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>61715-075</td>
                                        <td>CN</td>
                                        <td>Tieba</td>
                                        <td>746 Pine View Junction</td>
                                        <td>Nixie Sailor</td>
                                        <td>Gleichner, Ziemann and Gutkowski</td>
                                        <td>$246154.65</td>
                                    </tr>
                                    <tr>
                                        <td>63629-4697</td>
                                        <td>ID</td>
                                        <td>Cihaur</td>
                                        <td>01652 Fulton Trail</td>
                                        <td>Emelita Giraldez</td>
                                        <td>Rosenbaum-Reichel</td>
                                        <td>$795849.41</td>
                                    </tr>
                                    <tr>
                                        <td>68084-123</td>
                                        <td>AR</td>
                                        <td>Puerto Iguazú</td>
                                        <td>2 Pine View Park</td>
                                        <td>Ula Luckin</td>
                                        <td>Kulas, Cassin and Batz</td>
                                        <td>$830764.07</td>
                                    </tr>
                                    <tr>
                                        <td>67457-428</td>
                                        <td>ID</td>
                                        <td>Talok</td>
                                        <td>3050 Buell Terrace</td>
                                        <td>Evangeline Cure</td>
                                        <td>Pfannerstill-Treutel</td>
                                        <td>$777892.92</td>
                                    </tr>
                                    <tr>
                                        <td>31722-529</td>
                                        <td>AT</td>
                                        <td>Sankt Andrä-Höch</td>
                                        <td>3038 Trailsway Junction</td>
                                        <td>Tierney St. Louis</td>
                                        <td>Dicki-Kling</td>
                                        <td>$516467.41</td>
                                    </tr>
                                    <tr>
                                        <td>64117-168</td>
                                        <td>CN</td>
                                        <td>Rongkou</td>
                                        <td>023 South Way</td>
                                        <td>Gerhard Reinhard</td>
                                        <td>Gleason, Kub and Marquardt</td>
                                        <td>$410062.16</td>
                                    </tr>
                                    <tr>
                                        <td>43857-0331</td>
                                        <td>CN</td>
                                        <td>Baiguo</td>
                                        <td>56482 Fairfield Terrace</td>
                                        <td>Englebert Shelley</td>
                                        <td>Jenkins Inc</td>
                                        <td>$210902.65</td>
                                    </tr>
                                    <tr>
                                        <td>64980-196</td>
                                        <td>HR</td>
                                        <td>Vinica</td>
                                        <td>0 Elka Street</td>
                                        <td>Hazlett Kite</td>
                                        <td>Streich LLC</td>
                                        <td>$1162836.25</td>
                                    </tr>
                                    <tr>
                                        <td>0404-0360</td>
                                        <td>CO</td>
                                        <td>San Carlos</td>
                                        <td>38099 Ilene Hill</td>
                                        <td>Freida Morby</td>
                                        <td>Haley, Schamberger and Durgan</td>
                                        <td>$124768.15</td>
                                    </tr>
                                    <tr>
                                        <td>52125-267</td>
                                        <td>TH</td>
                                        <td>Maha Sarakham</td>
                                        <td>8696 Barby Pass</td>
                                        <td>Obed Helian</td>
                                        <td>Labadie, Predovic and Hammes</td>
                                        <td>$531999.26</td>
                                    </tr>
                                    <tr>
                                        <td>54092-515</td>
                                        <td>BR</td>
                                        <td>Canguaretama</td>
                                        <td>32461 Ridgeway Alley</td>
                                        <td>Sibyl Amy</td>
                                        <td>Treutel-Ratke</td>
                                        <td>$942781.29</td>
                                    </tr>
                                    <tr>
                                        <td>0185-0130</td>
                                        <td>CN</td>
                                        <td>Jiamachi</td>
                                        <td>23 Walton Pass</td>
                                        <td>Norri Foldes</td>
                                        <td>Strosin, Nitzsche and Wisozk</td>
                                        <td>$1143125.96</td>
                                    </tr>
                                    <tr>
                                        <td>21130-678</td>
                                        <td>CN</td>
                                        <td>Qiaole</td>
                                        <td>328 Glendale Hill</td>
                                        <td>Myrna Orhtmann</td>
                                        <td>Miller-Schiller</td>
                                        <td>$159355.37</td>
                                    </tr>
                                    <tr>
                                        <td>40076-953</td>
                                        <td>PT</td>
                                        <td>Burgau</td>
                                        <td>52550 Crownhardt Court</td>
                                        <td>Sioux Kneath</td>
                                        <td>Rice, Cole and Spinka</td>
                                        <td>$381148.49</td>
                                    </tr>
                                    <tr>
                                        <td>36987-3005</td>
                                        <td>PT</td>
                                        <td>Bacelo</td>
                                        <td>548 Morrow Terrace</td>
                                        <td>Christa Jacmar</td>
                                        <td>Brakus-Hansen</td>
                                        <td>$839071.50</td>
                                    </tr>
                                    <tr>
                                        <td>67510-0062</td>
                                        <td>ZA</td>
                                        <td>Pongola</td>
                                        <td>02534 Hauk Trail</td>
                                        <td>Shandee Goracci</td>
                                        <td>Bergnaum, Thiel and Schuppe</td>
                                        <td>$924771.59</td>
                                    </tr>
                                    <tr>
                                        <td>36987-2542</td>
                                        <td>RU</td>
                                        <td>Novokizhinginsk</td>
                                        <td>19427 Sloan Road</td>
                                        <td>Jerrome Colvie</td>
                                        <td>Kreiger, Glover and Connelly</td>
                                        <td>$708846.15</td>
                                    </tr>
                                    <tr>
                                        <td>11673-479</td>
                                        <td>BR</td>
                                        <td>Conceição das Alagoas</td>
                                        <td>191 Stone Corner Road</td>
                                        <td>Michaelina Plenderleith</td>
                                        <td>Legros-Gleichner</td>
                                        <td>$1096683.96</td>
                                    </tr>
                                    <tr>
                                        <td>47781-264</td>
                                        <td>UA</td>
                                        <td>Yasinya</td>
                                        <td>1481 Sauthoff Place</td>
                                        <td>Lombard Luthwood</td>
                                        <td>Haag LLC</td>
                                        <td>$810285.52</td>
                                    </tr>
                                    <tr>
                                        <td>42291-712</td>
                                        <td>ID</td>
                                        <td>Kembang</td>
                                        <td>9029 Blackbird Point</td>
                                        <td>Leonora Chevin</td>
                                        <td>Mann LLC</td>
                                        <td>$868444.96</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Ship Country</th>
                                        <th>Ship City</th>
                                        <th>Ship Address</th>
                                        <th>Company Agent</th>
                                        <th>Company Name</th>
                                        <th>Total Payment</th>
                                    </tr>
                                    </tfoot>
                                </table>

                                <!--end: Datatable -->
                            </div>
                        </div>
                    </div>

                    <!-- end:: Content -->








                </div></div></div>

                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">



                    <div class="col-lg-12 ml-lg-auto">
                        <center>
                        <button type="submit" class="btn btn-success">Measure Weight from Size</button>
                        <button type="button" onclick="location.href='index.php'" class="btn btn-dark">Cancel</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    <!--end::Portlet-->








                            <!--End::Row-->

							<!--End::Dashboard 3-->
						</div>
						<!-- end:: Content -->
					</div>

					
<?php include 'include/footer.php'; ?>
