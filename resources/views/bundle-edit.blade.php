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
                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="/items" class="kt-menu__link"><span class="kt-menu__link-text">ITEMS</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>

                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="/bundles" class="kt-menu__link "><span class="kt-menu__link-text">BUNDLES</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>

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
										Edit Bundle
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											Enter Bundle details and submit </span>
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
											<form class="kt-form" action="/update/bundle" method="post" enctype="multipart/form-data">
											
                                                @csrf
												<!--begin: Form Wizard Step 1-->
                                                
												<div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
													<div class="kt-heading kt-heading--md">Bundle Information</div>
													<div class="kt-section kt-section--first">
														<div class="kt-wizard-v1__form">
															<div class="row">
																<div class="col-xl-12">
																	<div class="kt-section__body">
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label">BUNDLE IMAGE</label>
																			<div class="col-lg-9 col-xl-6">
																				<div class="kt-avatar kt-avatar--outline kt-avatar--circle--" id="kt_apps_user_add_avatar">
																					<div>
                                                                                        <img class="kt-avatar__holder" id="blah" src="./img/default.png" />
                                                                                    </div>
																					<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change Item">
																						<i class="fa fa-pen"></i>
                                                                                        <input type="hidden" name="bundleid" value="{{$bundle->id}}">
																						<input type="file" name="image" id="image" onchange="readURL(this);" />
																					</label>
																					<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
																						<i class="fa fa-times"></i>
																					</span>
																				</div>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label" for="Bundle_Name">BUNDLE NAME</label>
																			<div class="col-lg-9 col-xl-9">
																				<input class="form-control" type="text" value="{{$bundle->bundle_name}}" id="Bundle_Name" name="Bundle_Name" required>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label" for="Bundle_description">BUNDLE DESCRIPTION</label>
																			<div class="col-lg-9 col-xl-9">
																					<textarea class="form-control" id="Bundle_description" rows="3" name="Bundle_description" placeholder="" required>{{$bundle->bundle_description}}</textarea>
																			</div>
																		</div>

																	</div>
																</div>
															</div>
														</div>
													</div>
                                                    <div class="kt-section kt-section--first">
														<div class="kt-wizard-v1__form">
															<div class="row">
																<div class="col-xl-12">
																	<div class="kt-section__body">
																		<div class="form-group row">
																			<div class="col-lg-9 col-xl-6">
																				<h3 class="kt-section__title kt-section__title-md">Bundling details</h3>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-xl-6">
																				<div class="form-group">
																					<label for="Bundle_turn_time">BUNDLING TURNAROUND TIME </label>
																					<input type="number" value="{{$bundle->turnaround}}"  class="form-control" name="Bundle_turn_time" id="Bundle_turn_time" required>
																				
																				</div>
																			</div>
																		
																		</div>
																		<div class="row">
																			<div class="col-xl-6">
																				<div class="form-group">
																					<label for="Bundle_Model">MODEL#</label>
																					<input type="text" value="{{$bundle->bundle_model}}"  class="form-control" name="Bundle_Model" id="Bundle_Model" required>
																					
																				</div>
                                                                            </div>
                                                                            <div class="col-xl-6">
																				<div class="form-group">
																					<label for="Bundle_Fee">BUNDLING FEE</label>
                                                                                    <input type="number" value="{{$bundle->bundling_fee}}" class="form-control" step="0.1" name="Bundle_Fee" id="Bundle_Fee" required>
                                                                                    <span class="form-text text-muted">$</span>

																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
                                                    
													<div class="kt-section kt-section--first">
														<div class="kt-wizard-v1__form">
                                                                     <div class="form-group row">
																			<div class="col-lg-9 col-xl-6">
																				<h3 class="kt-section__title kt-section__title-md" style="color: #48465b;font-size: 1.4rem;">Bundling Specification</h3>
																			</div>
																		</div>
																<div class="row">
																	<div class="col-xl-6">
																		<div class="form-group">
																			<label for="Bundle_Width">Width</label>
                                                                            <input type="number" value="{{$bundle->bundle_width}}" step="0.1" class="form-control" name="Bundle_Width" id="Bundle_Width" required>
                                                                            <span class="form-text text-muted">Cm</span>

																		</div>
																	</div>
																	<div class="col-xl-6">
																		<div class="form-group">
																			<label for="Bundle_Height">Height</label>
                                                                            <input value="{{$bundle->bundle_height}}" type="number" step="0.1" class="form-control" name="Bundle_Height" id="Bundle_Height" required>
                                                                            <span class="form-text text-muted">Cm</span>

																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-xl-6">
																		<div class="form-group">
																			<label for="Bundle_Length">Length</label>
                                                                            <input value="{{$bundle->bundle_length}}" type="number" step="0.1" class="form-control" name="Bundle_Length" id="Bundle_Length" required>
                                                                            <span class="form-text text-muted">Cm</span>

																		</div>
																	</div>
																	<div class="col-xl-6">
																		<div class="form-group">
																			<label for="Bundle_Weight">Weight</label>
                                                                            <input value="{{$bundle->bundle_weight}}" type="number" step="1" class="form-control" name="Bundle_Weight" id="Bundle_Weight" required>
                                                                            <span class="form-text text-muted">gr</span>

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
                                                                           
                                                                        </div>
														</div>
												    <div class="row">
												      <div class="table-responsive">
												          <table class="table">
												             <thead>
												             <tr>
												                <td>id</td>
												                <td>filename</td>
												                <td>remove</td>
												             </tr>
												             
												             </thead>
												             <tbody>
												               @foreach($filelist as $key => $row)
												                <tr>
												                  <td>{{$row->id}}</td>
												                  <td>{{$row->filename}}</td>
												                  <td><a onclick="delefileitem('{{$row->id}}',event)" style="cursor:pointer;"><i class="la la-remove"></i></a></td>
												                </tr>
												               
												               @endforeach
												             </tbody>
												          </table>
												      
												      </div>
												    
												    </div>

										
												<div class="kt-form__actions">
													
													   <a href="/bundles" class="btn btn-brand btn-md btn-tall btn-wide ml-auto mr-3" id="subbutton">
                                                          back
                                </a>

                                                    <button type="submit" class="btn btn-brand btn-md btn-tall btn-wide  " id="subbutton" >
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
        <script src="./assets/js/demo1/pages/custom/contacts/add-editbundle.js" type="text/javascript"></script>

        <script>
            function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
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
                                              url: '/delete/bundle/file',
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

            function handleFileSelect(e) {

                if(!e.target.files) return;

                selDiv.innerHTML = "";

                var files = e.target.files;
                for(var i=0; i<files.length; i++) {
                    var f = files[i];

                    selDiv.innerHTML += f.name + "<br/><br/>";

                }

            }

          <?php
          
             if(Session::get('msg')) {
             
          ?>
                   swal.fire({
                                "title": "",
                                "text": "The bundle has been successfully updated!",
                                "type": "success",
                                "confirmButtonClass": 'btn btn-secondary'
                            }).then(result => {
                                if (result.value) {
                                    
                                } else {
                                    //
                                }
                            })
          <?php
             }
          
          ?>

        

        </script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
