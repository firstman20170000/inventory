<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--begin::Base Path (base relative path for assets of this page) -->
		<base href="../../../../">

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>Vendor Create Bundle</title>
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
								<ul class="kt-menu__nav ">
                                  
								</ul>
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
										Update Shipping Method Details
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											Enter Method details and submit </span>
									</div>
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
											<form class="kt-form" action="/update/shipmethod" method="post" enctype="multipart/form-data">
                                                 <input type="hidden" name="shipmethodid" value="{{$method->id}}">
                                                @csrf
												<!--begin: Form Wizard Step 1-->
                                                
												<div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
													<div class="kt-heading kt-heading--md">Shipping Method Details</div>
													<div class="kt-section kt-section--first">
														<div class="kt-wizard-v1__form">
															<div class="row">
																<div class="col-xl-12">
																	<div class="kt-section__body">
																		
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label" for="Cour_name">Courier_Name</label>
																			<div class="col-lg-9 col-xl-9">
																				<input class="form-control" value="{{$method->Courier_Name}}" type="text"  id="Cour_name" name="Cour_name" required>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label" for="shippingday">Shipping Time(Days)</label>
																			<div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="number" value="{{$method->shipping_time}}" min=1 step=1  id="shippingday" name="shippingday" required>
																			</div>
																		</div>
                                                                        <div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label" for="Method_type">Method type</label>
																			<div class="col-lg-9 col-xl-9">
                                                                                <select class="form-control"  name="Method_type" required>
                                                                                <?php
                                                                                    $status=\App\Shippingtype::all();

                                                                                ?>
                                                                                    @foreach($status as $key => $row)
                                                                                        <option value="{{$row->id}}" <?php if($row->id==$method->type_id) {echo "selected";}?>>{{$row->Type_Name}}</option>
                                                                                    @endforeach
                                                                                </select>
																			</div>
																		</div>

																	</div>
																</div>
															</div>
														</div>
													</div>
                                               

										
												<div class="kt-form__actions">
													

                                                    <button type="submit" class="btn btn-brand btn-md btn-tall btn-wide  ml-auto" id="subbutton" >
                                                          update
                                                    </button>
                                                   
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
			@if(Session::get('msg'))
						swal.fire({
                                "title": "",
                                "text": "The shipping method has been successfully updated!",
                                "type": "success",
                                "confirmButtonClass": 'btn btn-secondary'
                            }).then(result => {
                                if (result.value) {
                                    window.location.href="/view/ship-type";
                                } else {
                                    //
                                }
                            })
			@endif
     
	 	 </script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
