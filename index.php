<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

						<!-- begin: Header Menu -->
						<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
							<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
								<ul class="kt-menu__nav ">
                                    
									<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="index.php" class="kt-menu__link "><span style="font-size: 20px;font-family: 'Fira Code'" class="kt-menu__link-text">Code Complexity Measuring Tool</span></a></li>
									<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">C++ and Java</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    </li>
                                    
                                    </ul>
									
							
							</div>
						</div>

						<!-- end: Header Menu -->

						<!-- begin:: Header Topbar -->
						<div class="kt-header__topbar">

							

							

							
							<!--begin: User Bar -->
							<div class="kt-header__topbar-item kt-header__topbar-item--user">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
									<div class="kt-header__topbar-user">
										<span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
										<span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">Sean</span>
										<img class="kt-hidden" alt="Pic" src="assets/media/users/300_25.jpg" />

										<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
										<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">U</span>
									</div>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

									<!--begin: Head -->
									<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(assets/media/misc/bg-1.jpg)">
										<div class="kt-user-card__avatar">
											<img class="kt-hidden" alt="Pic" src="assets/media/users/300_25.jpg" />

											<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
											<span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">U</span>
										</div>
										<div class="kt-user-card__name">
											ULIDU THEERAKE
										</div>
										
									</div>

									<!--end: Head -->

									<!--begin: Navigation -->
									<div class="kt-notification">
										<a href="custom/apps/user/profile-1/personal-information.html" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-calendar-3 kt-font-success"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													My Profile
												</div>
												<div class="kt-notification__item-time">
													Account settings and more
												</div>
											</div>
										</a>
                                        <div class="kt-notification__custom kt-space-between">
                                            <a href="login.php" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>

                                        </div>
									</div>

									<!--end: Navigation -->
								</div>
							</div>

							<!--end: User Bar -->
						</div>

						<!-- end:: Header Topbar -->
					</div>

					<!-- end:: Header -->
					


                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

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
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Upload a File From Your PC
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form action="total_weight.php" class="kt-form kt-form--label-right">
            <div class="kt-portlet__body">


                <div class="form-group row">

                    <div class="col-lg-12 col-md-9 col-sm-12">
                        <div class="dropzone dropzone-default dropzone-success" id="kt_dropzone_1">
                            <div class="dropzone-msg dz-message needsclick">
                                <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                                <span class="dropzone-msg-desc">Only C++ and Java files are allowed for upload</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-7 ml-lg-auto">
                            <button type="submit" class="btn btn-brand">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>

    <!--end::Portlet-->
                                
                                
                                
                                
                                
                                
                                
</div>

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
                                <form action="total_weight.php" class="kt-form kt-form--fit kt-form--label-right">
                                    <div class="kt-portlet__body">
                                        <div class="form-group row is-valid">


                                            <div class="col-lg-12 col-md-9 col-sm-12">
                                                <textarea name="content" class="form-control" data-provide="markdown" rows="20"></textarea>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="kt-portlet__foot">
                                        <div class="kt-form__actions">
                                            <div class="row">
                                                <div class="col-lg-7 ml-lg-auto">
                                                    <button type="submit" class="btn btn-brand">Submit</button>
                                                    <button type="reset" class="btn btn-secondary">Cancel</button>
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
