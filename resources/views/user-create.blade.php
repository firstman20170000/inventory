<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--begin::Base Path (base relative path for assets of this page) -->
		<base href="../../../../">

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>Vendor Edit shipment</title>
		<meta name="description" content="Initialized with local json data">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Page Custom Styles(used by this page) -->
		<link href="./assets/css/demo1/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
		@include('assets.css')
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="javasript:;">
					<img alt="Logo" src="./assets/media/logos/logo-light.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				@include('layouts.sidebar')

				<!-- end:: Aside -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

						<!-- begin:: Header Menu -->
						<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
							<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
    
							</div>
						</div>

						<!-- end:: Header Menu -->

						<!-- begin:: Header Topbar -->
						<div class="kt-header__topbar">


                            <!--begin: User Bar -->
                            @include('layouts.userbar')
                            <!--end: User Bar -->
                        </div>

						<!-- end:: Header Topbar -->
					</div>

					<!-- end:: Header -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										New User
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											Enter User details and submit </span>
                                    </div>
                                    
                                </div>
                                <div class="kt-subheader__toolbar">

                            </div>

							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-portlet">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white" id="kt_apps_contacts_add" data-ktwizard-state="step-first">
										<div class="kt-grid__item">

										<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">
											<!--begin: Form Wizard Form-->
											<form class="kt-form" method="post"  action="/create/new/user" enctype="multipart/form-data">
                                                @csrf
                                                    <div class="kt-section kt-section--first">
														<div class="kt-wizard-v1__form">
															<div class="row">
																<div class="col-xl-12">
																	<div class="kt-section__body">
																		<div class="form-group row">
																			<div class="col-lg-9 col-xl-6">
																				<h3 class="kt-section__title kt-section__title-md">User's Prfofile Details</h3>
																			</div>
																		</div>
																		
                                                                <div class="row">
                                                                    <div class="col-xl-2 ">
                                                                                <label for="Fname" >First Name</label>
                                                                    </div>
                                                                    <div class="col-xl-10">
                                                                                <input type="text" class="form-control" name="fname"  id="Fname" required placeholder="Anna">
                                                                                @error('fname')
                                                                                   <div class="alert alert-danger">{{$message}}</div>
                                                                                @enderror
                                                                    </div>

                                                                </div>
                                                                <div class="row mt-3" >
                                                                    <div class="col-xl-2">
                                                                                <label for="Fname" >Last Name</label>
                                                                                
                                                                    </div>
                                                                    <div class="col-xl-10">
                                                                                <input type="text" class="form-control" name="lname"  id="lname" required placeholder="Korax">
                                                                                @error('lname')
                                                                                   <div class="alert alert-danger">{{$message}}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3" >
                                                                    <div class="col-xl-2">
                                                                                <label for="Fname" >User Name</label>
                                                                    </div>
                                                                    <div class="col-xl-10">
                                                                                <input type="text" class="form-control" name="name" value="" id="name" placeholder="blackpanda" required>
                                                                                @error('name')
                                                                                   <div class="alert alert-danger">{{$message}}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3" >
                                                                    <div class="col-xl-2">
                                                                                <label for="Fname" >Email Address</label>
                                                                    </div>
                                                                    <div class="col-xl-10">
                                                                                <input type="email" class="form-control" name="email" value="" id="email" placeholder="annakorax@loop.com" required>
                                                                                @error('email')
                                                                                   <div class="alert alert-danger">{{$message}}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3" >
                                                                    <div class="col-xl-2">
                                                                                <label for="Fname" >Password</label>
                                                                    </div>
                                                                    <div class="col-xl-10">
                                                                                <input type="password" class="form-control" name="password" value="" id="Fname" placeholder="password" required>
                                                                                @error('password')
                                                                                   <div class="alert alert-danger">{{$message}}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3" >
                                                                    <div class="col-xl-2">
                                                                                <label for="Fname" >Confirm Password</label>
                                                                    </div>
                                                                    <div class="col-xl-10">
                                                                                <input type="password" class="form-control" name="password_confirmation" value="" id="Fname" placeholder="password" required>
                                                                                @error('password_confirmation')
                                                                                   <div class="alert alert-danger">{{$message}}</div>
                                                                                @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3 mr-auto text-left">
                                                                        <button type="submit" class="btn btn-primary ml-auto">Add New User</button>
                                                                </div>  
                                                                   

                                                    
												<!--end: Form Actions -->
											</form>

											<!--end: Form Wizard Form-->
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- end:: Content -->
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->



		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->
        @include('assets.js')
		<!--begin::Page Scripts(used by this page) -->
        
        <script>
            <?php
            
                if(Session::get('msg2')==1)
                {
                
            ?>
              swal.fire({
                            "title": "",
                            "text": "A new user have been created successfully!",
                            "type": "success",
                            "confirmButtonClass": 'btn btn-secondary'
                        }).then(result => {
                               window.location.href = "/view/user-table";
                        })
            
            <?php
                
                }
            
            ?>
         

        </script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
