<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--begin::Base Path (base relative path for assets of this page) -->
		<base href="../../../../">

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>Vendor Create Item</title>
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
                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="/items" class="kt-menu__link"><span class="kt-menu__link-text">ITEMS</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>

                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="/bundles" class="kt-menu__link"><span class="kt-menu__link-text">BUNDLES</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>

                                    </li>

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
										Edit Item
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											Enter item details and submit </span>
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

											<!--begin: Form Wizard Nav -->
											<div class="kt-wizard-v1__nav">
												<div class="kt-wizard-v1__nav-items">

													<a class="kt-wizard-v1__nav-item" href="javasript:;" data-ktwizard-type="step">
														<div class="kt-wizard-v1__nav-body">
															<div class="kt-wizard-v1__nav-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect id="bound" x="0" y="0" width="24" height="24" />
																		<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" id="Combined-Shape" fill="#000000" />
																		<circle id="Oval" fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
																	</g>
																</svg> </div>
															<div class="kt-wizard-v1__nav-label">
																Edit Page
															</div>
														</div>
													</a>
												</div>
											</div>

											<!--end: Form Wizard Nav -->
										</div>
										<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">
											<!--begin: Form Wizard Form-->
											<form class="kt-form" id="kt_apps_contacts_add_form" novalidate="novalidate" enctype="multipart/form-data">
											@csrf

												<!--begin: Form Wizard Step 1-->
												<div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
													<div class="kt-heading kt-heading--md">Item Information</div>
													<div class="kt-section kt-section--first">
														<div class="kt-wizard-v1__form">
															<div class="row">
																<div class="col-xl-12">
																	<div class="kt-section__body">
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">ITEM</label>
																			<div class="kt-avatar kt-avatar--outline kt-avatar--circle--" id="kt_apps_user_add_avatar">
																					<div>
                                                                                        <img class="kt-avatar__holder" id="blah" src="{{asset($data->Image_Url)}}" />
                                                                                    </div>
																					<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change Item">
																						<i class="fa fa-pen"></i>
																						<input type="file" name="image" id="image" onchange="readURL(this);"/>
																					</label>
																					<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
																						<i class="fa fa-times"></i>
																					</span>
																				</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">ITEM NAME</label>
																			<div class="col-lg-9 col-xl-9">
																				<input class="form-control" type="text" id="Item_Name"  name="Item_Name" value="{{$data->Item_Name}}">
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">ITEM DESCRIPTION</label>
																			<div class="col-lg-9 col-xl-9">
																					<textarea class="form-control" id="Item_description" rows="3" name="Item_description">{{$data->Item_description}}</textarea>
																			</div>
																		</div>
																		<hr>
																		<div class="form-group row">
																			<div class="col-lg-9 col-xl-6">
																				<h3 class="kt-section__title kt-section__title-md">Product Information</h3>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-xl-6">
																				<div class="form-group">
																					<label for="EST_COST">ITEM EST.COST</label>
																					<input type="number" step="0.1" class="form-control" name="EST_COST" id="EST_COST"  value="{{$data->EST_COST}}">
																					<span class="form-text text-muted">$</span>
																				</div>
																			</div>
																			<div class="col-xl-6">
																				<div class="form-group">
																					<label for="MOQ">MOQ</label>
																					<input type="number" step="1" class="form-control" name="MOQ" id="MOQ"  value="{{$data->MOQ}}">
																					<span class="form-text text-muted">UNITS</span>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-xl-6">
																				<div class="form-group">
																					<label for="LEAD_TIME">LEADTIME</label>
																					<input type="number" step="1" class="form-control" name="LEAD_TIME" id="LEAD_TIME"  value="{{$data->LEAD_TIME}}">
																					<span class="form-text text-muted">DAYS</span>
																				</div>
                                                                            </div>
                                                                            <div class="col-xl-6">
																				<div class="form-group">
																					<label for="Purchase_Fee">PURCHASE FEE</label>
                                                                                    <input type="number" step="0.1" class="form-control" name="Purchase_Fee" id="Purchase_Fee" placeholder="1.3" value="{{$data->Purchase_Fee}}">
                                                                                    <span class="form-text text-muted">%</span>

																				</div>
																			</div>
																		</div>
																		<hr>
																		<div class="kt-heading kt-heading--md">Item Specificiations</div>
																		<div class="row">
																			<div class="col-xl-6">
																				<div class="form-group">
																					<label for="Item_Width">Width</label>
                                                                                    <input type="number" step="0.1" class="form-control" name="Item_Width" id="Item_Width"  value="{{$data->Item_Width}}">
                                                                                    <span class="form-text text-muted">Cm</span>

																				</div>
																			</div>
																			<div class="col-xl-6">
																				<div class="form-group">
																					<label for="Item_Height">Height</label>
                                                                                    <input type="number" step="0.1" class="form-control" name="Item_Height" id="Item_Height"  value="{{$data->Item_Height}}">
                                                                                    <span class="form-text text-muted">Cm</span>

																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-xl-6">
																				<div class="form-group">
																					<label for="Item_Length">Length</label>
                                                                                    <input type="number" step="0.1" class="form-control" name="Item_Length" id="Item_Length"  value="{{$data->Item_Length}}">
                                                                                    <span class="form-text text-muted">Cm</span>

																				</div>
																			</div>
																			<div class="col-xl-6">
																				<div class="form-group">
																					<label for="Item_Weight">Weight</label>
                                                                                    <input type="number" step="1" class="form-control" name="Item_Weight" id="Item_Weight"  value="{{$data->Item_Weight}}">
                                                                                    <span class="form-text text-muted">gr</span>
																					<input type="hidden" id="id" value="{{$data->id}}"/>

																				</div>
																			</div>

                                                                        </div>

                                                                        <div class="col-xl-12">
                                                                           <div class="form-group">
                                                                                <label class="col-form-label">File</label>
                                                                        
                                                                                <input type="file" id="files"  class="form-control form-control-warning m-input" name="files[]" enctype="multipart/form-data" multiple><br/>
                                                                                <input type="hidden" class="form-control" id="file_url" placeholder="" name="file_url">
                                                                                <br/>
                                                                              
                                                                                <div id="selectedFiles"></div>
                                                                            </div>
                                                                            <input type="hidden" id="time" value="{{$data->Item_ID}}"/>
                                                                            <input type="hidden" id="id" value="{{$data->id}}"/>
                                                                        </div>
																	</div>
																			<div class="row">
                              <div class="table-responsive">
                                  <table class="table">
                                    <thead>
                                     <tr>
                                        <th>id</th>
                                        <th>filename</th>
                                        <th>action</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                       @foreach($filedata as $key => $row)
                                          <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->filename}}</td>
                                            <td><a onclick="delefileitem('{{$row->id}}',event)" style="cursor:pointer"><i class="la la-remove"></i></a></td>
                                          </tr>
                                       @endforeach
                                     </tbody>
                                    </thead>
                                  </table>
                                </div>
													
												</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 1-->





												<!--begin: Form Actions -->
												<div class="kt-form__actions">
                                                    <a href="/items" class="btn btn-clean btn-bold">Cancel</a>
                                                    <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
														Save
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
		<script>
		
		var dropobj;
		</script>
        @include('assets.js')
		<!--begin::Page Scripts(used by this page) -->
        <script src="./assets/js/demo1/pages/custom/contacts/add-contacts1.js" type="text/javascript"></script>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah').attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            var selDiv = "";

            document.addEventListener("DOMContentLoaded", init, false);

            function init() {
                document.querySelector('#files').addEventListener('change', handleFileSelect, false);
                selDiv = document.querySelector("#selectedFiles");
            }

            function handleFileSelect(e) {

                if(!e.target.files) return;

                selDiv.innerHTML = "";

                var files = e.target.files;
                for(var i=0; i<files.length; i++) {
                    var f = files[i];

                    selDiv.innerHTML += f.name + "<br/><br/>";

                }

            }
            function delefileitem(id,ev)
            {
                 console.log(ev);
                     
                 var ob=ev.target;
               
                  swal.fire({
                                "title": "",
                                "text": "do you want to delete this file!",
                                "type": "warning",
                                "confirmButtonClass": 'btn btn-secondary'
                            }).then(result => {
                                if (result.value) {
                                      $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                        });
                                        var formdata = new FormData();
                                        formdata.append('id',id);
                                        $.ajax({
                                              type: 'post',
                                              enctype: 'multipart/form-data',
                                              url: '/delete/file',
                                              processData: false,
                                              contentType: false,
                                              data: formdata,
                                              success: function (data) {
                                                //KTApp.unblock(formEl);
                                                 console.log(data)
                                              if( data == 1 )  {
                                                console.log("22222");
                                               $(ob).parent().parent().parent().remove();
                    
                                              }
                                        }
                                        
                                        
                                        })
                                } else {
                                    //
                                }
                            })
                 
            
            }




        </script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
