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
										Edit Shipment
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											Enter Shipment details and submit </span>
                                    </div>
                                    
                                </div>
                                <div class="kt-subheader__toolbar">

                                <div class="dropdown dropdown-inline" style="float:right">
                                                        <a href="#" class="btn btn-brand btn-sm btn-upper dropdown-toggle" id="dpname" data-toggle="dropdown">
                                                            Status
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                                                            <!--begin::Nav-->
                                                            <ul class="kt-nav">
                                                                
                                                                <?php
                                                                      $status=\App\Status::get();
                                                                  ?>
                                                                  @foreach($status as $key => $row)
                                                                 
                                                                <li class="kt-nav__separator"></li>
                                                                <li class="kt-nav__item">
                                                                    <a data-stid="{{$row->id}}" class="kt-nav__link">
                                                                        <span class="kt-nav__link-text">{{$row->statusname}}</span>
                                                                    </a>
                                                                </li>
                                                                @endforeach
                                                               
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
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
											<form class="kt-form" id="kt_apps_contacts_add_form" novalidate="novalidate" enctype="multipart/form-data">
											
                                               <input type="hidden" id="po_status" value="{{$plan->status_id}}">
												<!--begin: Form Wizard Step 1-->
                                                
                                                <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                                <div class="kt-heading kt-heading--md">Packing details</div>
                                                <div class="kt-section kt-section--first">
                                                    <div class="kt-wizard-v1__form">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="kt-section__body">
                                                                    <div class="form-group row">

                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <div class="row">
                                                                                <div class="col-lg-8">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Master Carton</label>
                                                                                        <div class="col-xl-9 col-lg-6">
                                                                                            <select class="form-control" name="master_cartoon" id="master_cartoon">
                                                                                                @foreach($package as $key=>$row)
                                                                                                <option value="{{$row->id}}" data-id="{{$row->qty_in_mc}}">{{$row->qty_in_mc}} Units Per Cartoon</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-xl-2 col-lg-2 col-form-label">QTY</label>
                                                                                        <div class="col-xl-7 col-lg-7">
                                                                                            <input class="form-control" type="number" min=1 step=1 id="ship_QTY" name="ship_QTY" id="ship_QTY">
                                                                                            <input class="form-control" type="text" name="ship_qty_tot" id="ship_qty_tot" value="{{$plan->QTY}}" style="width:0px;height:0px;opacity:0">
                                                                                            <input class="form-control" type="hidden" name="bundle_tot" value="{{$plan->Bundle_QTY}}" id="bundle_tot">
                                                                                        </div>
                                                                                        <div class="col-xl-3 col-lg-3">
                                                                                            <?php if($plan->status_id<3){
                                                                                           ?>

                                                                                            <a class="btn btn-primary" id="qtyadd" style="color:white;cursor:pointer;">add</a>
                                                                                            <?php
                                                                                            }
                                                                                            ?>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12 text-center">
                                                                        <div class="kt-portlet__head kt-portlet__head--lg">
                                                                            <div class="kt-portlet__head-label" style="margin:auto;">

                                                                                <h3 class="kt-portlet__head-title text-center">
                                                                                Submit Packing Details for master Carton
                                                                                <!-- <small>Datatable initialized from HTML table</small> -->
                                                                            </h3>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row text-center">

                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <td class="text-center">QTY</td>
                                                                                        <td class="text-center">Bundles Per Carton</td>
                                                                                        <td class="text-center">Carton Weight</td>
                                                                                        <td class="text-center">Carton Height</td>
                                                                                        <td class="text-center">Carton Length</td>
                                                                                        <td class="text-center">Carton Width</td>
                                                                                        
                                                                                         <?php 
                                                                                            if($plan->status_id<3)
                                                                                            {
                                                                                         ?>    
                                                                                        <td class="text-center">remove</td>
                                                                                            <?php }
                                                                                            ?>       
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id="package">
                                                                                    @foreach($maspack as $key => $row)
                                                                                        <tr data-packid="{{$row->pack_id}}">
                                                                                            <td  class="cartqty">{{$row->qty}}</td>
                                                                                            <td class="bundle_pack_mc">{{$row->bundle_mc}}</td>
                                                                                            <td>{{$row->mc_weight}}gr</td>
                                                                                            <td>{{$row->mc_height}}cm</td>
                                                                                            <td>{{$row->mc_length}}cm</td>
                                                                                            <td>{{$row->mc_width}}cm</td>
                                                                                            <?php 
                                                                                                if($plan->status_id<3)
                                                                                                {
                                                                                            ?>
                                                                                            <td><a class="packdel" style="cursor:pointer"><i class="la la-remove"></i></a></td>
                                                                                            <?php 
                                                                                                }
                                                                                            ?>       
                                                                                        </tr>
                                                                                    @endforeach
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">

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
																				<h3 class="kt-section__title kt-section__title-md">FBA Shipping Plan Details</h3>
																			</div>
																		</div>
																		
																		<div class="row">
																			<div class="col-xl-6">
																				<div class="form-group">
																					<label for="Bundle_Model">FBA SHIPMENT ID</label>
																					<input type="text" value="{{$plan->FBA_PLAN_NUMBER}}"  class="form-control" name="FBA_Shipment_id" id="FBA_Shipment_id" required>
																					
																				</div>
                                                                            </div>
                                                                            <div class="col-xl-6">
																				<div class="form-group">
																					<label for="Bundle_Fee">ASIN</label>
                                                                                    <input type="text" value="{{$plan->ASIN}}" class="form-control"  name="FBA_asin" id="FBA_asin" required>
                                                                                   

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
															<div class="row">
																<div class="col-xl-12">
																	<div class="kt-section__body">
																		<div class="form-group row">
																			<div class="col-lg-9 col-xl-6">
																				<h3 class="kt-section__title kt-section__title-md">Shipping method</h3>
																			</div>
																		</div>
																		
																		<div class="row">
																			<div class="col-xl-6">
																				<div class="form-group">
																					<label for="Bundle_Model">Shipping Method</label>
																					<select    class="form-control"  required>
                                                                                        <?php
                                                                                            $ship_method_type=\App\Shippingtype::where('id',$plan->Shipping_method_type_id)->first()
                                                                                        
                                                                                        ?>
                                                                                        <option value="{{$ship_method_type->id}}" selected>{{$ship_method_type->Type_Name}}</option>
                                                                                    </select>
																				</div>
                                                                            </div>
                                                                            <div class="col-xl-6">
																				
																			</div>
                                                                        </div>
                                                                        <div class="row">
																			<div class="col-xl-6">
																				<div class="form-group">
                                                                                    <label for="Bundle_Model">Courier</label>
                                                                                    <?php
                                                                                        $shippingmethod=\App\Shippingmethod::where('type_id',$plan->Shipping_method_type_id)->get()
                                                                                    
                                                                                    ?>
																					<select type="text" value=""  class="form-control" name="ship_mod" id="ship_mod" required>
                                                                                       @foreach($shippingmethod as $key=> $row)
                                                                                          <option value="{{$row->id}}">{{$row->Courier_Name}}</option>
                                                                                       @endforeach 
                                                                                    </select>
																				</div>
                                                                            </div>
                                                                            <div class="col-xl-6">
																				
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
																				<h3 class="kt-section__title kt-section__title-md">Barcodes & Labels</h3>
																			</div>
																		</div>
																		
																		<div class="row">
																			<div class="col-xl-6">
																				<div class="form-group">
																					<label for="Bundle_Model">Barcode</label>
																					<input type="file" value=""  class="form-control" name="barcode" id="barcode" >
																					
																				</div>
                                                                            </div>
                                                                            <div class="col-xl-6">
																				
																			</div>
                                                                        </div>
                                                                        <div class="row">
																			<div class="col-xl-6">
																				<div class="form-group">
																					<label for="Bundle_Model">Labels</label>
																					<input type="file"   class="form-control" name="shiplabel" id="shiplabel" >
																					
																				</div>
                                                                            </div>
                                                                            <div class="col-xl-6">
																				
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
																				<h3 class="kt-section__title kt-section__title-md" style="color: #48465b;font-size: 1.4rem;">Shipment info</h3>
																			</div>
																		</div>
																<div class="row">
																	<div class="col-xl-6">
																		<div class="form-group">
																			<label for="Bundle_Width">Shipping cost</label>
                                                                            <input value="{{$plan->cost}}" type="number" step="0.01" min="1" value=""  class="form-control" name="shipping_cost" id="shipping_cost" required>
                                                                            

																		</div>
																	</div>
																	<div class="col-xl-6">
																	</div>
																</div>
																<div class="row">
																	<div class="col-xl-6">
																		<div class="form-group">
																			<label for="Bundle_Length">Tracking Number</label>
                                                                            <input value="{{$plan->Tracking_num}}" type="text"  class="form-control" name="Tracking_number" id="Tracking_number" >
                                                                            
																		</div>
																	</div>
																	<div class="col-xl-6">
																	</div>

																</div>
														</div>
													
												</div>

										
												<div class="kt-form__actions">
													

                                                    <button type="submit"  class="btn btn-primary  ml-auto" id="subbutton" >
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
        var formEl=$('#kt_apps_contacts_add_form');
        
        var initValidation = function () {
          
        validator = formEl.validate({
            // Validate only visible fields
            ignore: ":hidden",

            // Validation rules
            rules: {
                // Step 1
                
                master_cartoon: {
                    required: true
                },
                ship_qty_tot: {
                    required: true,
                  
                },
                FBA_Shipment_id: {
                    required: true,
                },
                FBA_asin: {
                    required: true,

                },
                ship_mod:{
                    required: true,
                },
                shipping_cost:{
                    required:true,
                }
              
            },

            // Display error
            invalidHandler: function (event, validator) {
                KTUtil.scrollTop();
                var shiptot=$('#ship_qty_tot').val();
                if(shiptot=="")
                {
                    swal.fire({
                        "title": "",
                        "text": "please add the master cartoon.",
                        "type": "error",
                        "buttonStyling": false,
                        "confirmButtonClass": "btn btn-brand btn-sm btn-bold"
                    });

                } else {
                    swal.fire({
                        "title": "",
                        "text": "There are some errors in your submission. Please correct them.",
                        "type": "error",
                        "buttonStyling": false,
                        "confirmButtonClass": "btn btn-brand btn-sm btn-bold"
                    });
                }
                return -1;
                
            },

            // Submit valid form
            submitHandler: function (form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var formdata = new FormData();
                formdata.append('bundle_tot', $("#bundle_tot").val());
                formdata.append('ship_qty_tot', $("#ship_qty_tot").val());
                formdata.append('Bundle_Id', {{$bundle->id}});
                formdata.append('FSO_ID', {{$plan->Sp_O_id}});
                formdata.append('FBA_Shipment_id', $('#FBA_Shipment_id').val());
                formdata.append('FBA_asin', $('#FBA_asin').val());
                formdata.append('ship_mod', $('#ship_mod').val());
                if($('#barcode')[0].files[0])
                {
                    formdata.append('barcode', $('#barcode')[0].files[0],$('#barcode')[0].files[0]['name']);
                }
                formdata.append('shipping_cost',$('#shipping_cost').val())
                formdata.append('Tracking_number',$('#Tracking_number').val())
                formdata.append('status_id',$('#po_status').val())
                
                if($('#shiplabel')[0].files[0]){
                    formdata.append('shiplabel', $('#shiplabel')[0].files[0], $('#shiplabel')[0].files[0]['name']);

                }
                $('#package').find("tr").each(function(){
                    var pack_id=$(this).attr("data-packid");
                    var cartqty=$(this).find(".cartqty").html();
                    var bundle_pack_mc=$(this).find(".bundle_pack_mc").html();
                    formdata.append('packid[]',pack_id);
                    formdata.append('cartqty[]',cartqty);
                    formdata.append('bundle_pack_mc[]',bundle_pack_mc);
                })
                $.ajax({
                    type: 'post',
                    enctype: 'multipart/form-data',
                    url: '/edit/FSOshipping',
                    processData: false,
                    contentType: false,
                    data: formdata,
                    success: function (data) {
                        if(data==5)
                        {
                             window.location.href = "/view/shipping-table";

                        } else if(data==6)
                        {
                        
                           swal.fire({
                            "title": "",
                            "text": "A new invoice have been successfully created!",
                            "type": "success",
                            "confirmButtonClass": 'btn btn-secondary'
                        }).then(result => {
                         
                                window.location.href = "/view/shipping-table";
                         
                        })
                        
                        } else if(data==4)
                        {
                            swal.fire({
                                    "title": "Sorry,can't change the status",
                                    "text": 'the status can\'t back before status',
                                    "type": "warning",
                                    "confirmButtonClass": 'btn btn-secondary'
                                })    
                        } else if(data==3)
                        {
                            swal.fire({
                                    "title": "Sorry,can't change the status",
                                    "text": 'the invoice did n\'t create yet and so we can\'t change the status and you need to change the status as approve',
                                    "type": "warning",
                                    "confirmButtonClass": 'btn btn-secondary'
                                })    
                        } else if(data==2)
                        {
                            swal.fire({
                                    "title": "Sorry can't change the status",
                                    "text": 'the invoice status have unpaid status and so we can\'t change the status',
                                    "type": "warning",
                                    "confirmButtonClass": 'btn btn-secondary'
                                })    

                        } else if(data==1)
                        {
                            swal.fire({
                                    "title": "Sorry,can't cancel the order",
                                    "text": 'the status yet approved',
                                    "type": "warning",
                                    "confirmButtonClass": 'btn btn-secondary'
                                })

                        }
                       
                        //KTApp.unblock(formEl);
                       
                    }
                });
            }
        });
    }
    initValidation();
             $(document).ready(function(){
                $("form").submit(function(e){
                  
                    e.preventDefault();
                    initValidation();
                     

                });
                
                $('.kt-nav__link').click(function()
                 {
                     var stid=$(this).attr("data-stid");
                     var stname=$(this).find(".kt-nav__link-text").html();
                     $('#dpname').html(stname);
                     $('#po_status').val(stid);
                 })
                 
                 $('#qtyadd').click(function() {
                var ship_QTY = $('#ship_QTY').val();
                if (ship_QTY == "" || parseInt(ship_QTY) < 1) {
                    swal.fire({
                        "title": "",
                        "text": "please input the quanity of the cartoon correctly!",
                        "type": "warning",
                        "confirmButtonClass": 'btn btn-secondary'
                    })
                    return 1;
                } else {
                    var qty = parseInt(ship_QTY);
                    var qty_in_mc_bundle = parseInt($('#master_cartoon option:selected').attr('data-id'));
                    var packid=$('#master_cartoon option:selected').val();
                    var seleid=$('#master_cartoon').val();
                    
                    var bundle_tot = $('#bundle_tot').val();
                    if (bundle_tot == "") {
                        bundle_tot = 0;
                    } else {
                        bundle_tot = parseInt(bundle_tot);
                    }
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    bundle_tot = bundle_tot + qty * qty_in_mc_bundle;
                   
                    var formdata = new FormData();
                    formdata.append('bundle_tot', bundle_tot);
                    formdata.append('FSO_id',{{$plan->Sp_O_id}});
                    formdata.append('bundle_id', {{$bundle->id}});
                    formdata.append('packageid',seleid);
                    $.ajax({
                        type: 'post',
                        enctype: 'multipart/form-data',
                        url: '/edit/check/validation',
                        processData: false,
                        contentType: false,
                        data: formdata,
                        success: function(data) {
                            var res = JSON.parse(data);
                            // output result 
                            console.log(res);
                            var returnres = res.result;
                            var pack=res.package;
                            if (returnres == 'error') {
                                var dispmessage="The {{$bundle->bundle_name}} have {{$bundle->bundles_in_stock}} but this order require"+(bundle_tot-parseInt({{$plan->Bundle_QTY}}))+" bundle units and please reduce the quantity of master cartoon";
                                swal.fire({
                                    "title": "",
                                    "text": dispmessage,
                                    "type": "warning",
                                    "confirmButtonClass": 'btn btn-secondary'
                                })    
                            } else if(returnres == 'success') {
                                var tr="<tr data-packid=\""+packid+"\">";
                                tr+="<input >"
                                tr+="<td class=\"cartqty\">"+qty+"</td>";
                                tr+="<td class=\"bundle_pack_mc\">"+pack.qty_in_mc+"</td>";
                                tr+="<td>"+pack.mc_weight+"gr</td>";
                                tr+="<td>"+pack.mc_height+"cm</td>";
                                tr+="<td>"+pack.mc_length+"cm</td>";
                                tr+="<td>"+pack.mc_width+"cm</td>";
                                tr+="<td><a class=\"packdel\" style=\"cursor:pointer\"><i class=\"la la-remove\"></i></a>";
                                tr+="</td>";
                                tr+="</tr>";
                                $('#package').append(tr);
                                $('#bundle_tot').val(bundle_tot);
                                var shipqty=$('#ship_qty_tot').val();
                                if(shipqty==""){
                                    shipqty=0
                                } else {
                                    shipqty=parseInt($('#ship_qty_tot').val());
                                }
                                 
                                var order_tot=shipqty+qty;
                                
                                $('#ship_qty_tot').val(order_tot);
                               

                            }
                        }
                    });

                }

            })
            $(document).on('click','.packdel',function(){
                var tr=$(this).parents("tr");
                var qty=tr.find(".cartqty").html();
                var bundle_qty_mc=tr.find(".bundle_pack_mc").html();
                var tot_bundle=parseInt(bundle_qty_mc)*parseInt(qty);
                
                var pre_tot_bundle= parseInt($('#bundle_tot').val());
                var pre_tot_bundle=pre_tot_bundle-tot_bundle;
                if(pre_tot_bundle==0)
                {
                    $('#bundle_tot').val("");
                } else {
                    $('#bundle_tot').val(pre_tot_bundle);   
                }
                
                var ship_qty_tot=parseInt($('#ship_qty_tot').val());
                ship_qty_tot=ship_qty_tot-qty;
                if(ship_qty_tot==0) {
                    $('#ship_qty_tot').val("");
                } else {
                    $('#ship_qty_tot').val(ship_qty_tot)
                }
                 tr.remove();
               
            });
            
             })



        </script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
