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
               <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
               <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                  <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
                  </div>
               </div>
               <div class="kt-header__topbar">
                  <!--begin: User Bar -->
                  @include('layouts.userbar')
                  <!--end: User Bar -->
               </div>
            </div>
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
               <!-- begin:: Content Head -->
               <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                  <div class="kt-container  kt-container--fluid ">
                     <div class="kt-subheader__main">
                        <h3 class="kt-subheader__title">
                           Create Purchase Order
                        </h3>
                     </div>
                  </div>
               </div>
			   <form action="{{Route('user.createpo')}}" method="post">
			   @csrf
               <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                  <div class="kt-portlet">
                     <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white" id="kt_apps_contacts_add" data-ktwizard-state="step-first">
                           <div class="kt-grid__item">
                              <!--begin: Form Wizard Nav -->
                              <div class="kt-wizard-v1__nav">
                                 <div class="kt-wizard-v1__nav-items">
                                 <div class="col-xl-12 col-md-12 col-sm-12">
                                     <div class="kt-portlet">
                           <div class="kt-portlet__body">
                              <!--begin::Section-->
                              <div class="kt-section">
                                 <div class="kt-section__content">
                                 <div class="table-responsive">
				   <table class="table">
					<thead>
					    <th class="text-center " style="font-size:12pt">Item name</th>
					    <th class="text-center" style="font-size:12pt">Item#</th>
					    <th class="text-center" style="font-size:12pt">Quantity</th>
					    <th class="text-center" style="font-size:12pt">cost</th>
					</thead>
                                       <tbody>
                                          <tr>
                                             <td class="text-center">  
						<h3 class="kt-subheader__title text-center" style="padding:1em;color:#434349;font-size:12pt">{{$data->Item_Name}}</h3>
                                       		<input type="hidden" name="itemname" value="{{$data->Item_Name}}">
   					     </td>
                                             <td class="text-center ">
						 <h3 class="kt-subheader__title text-center" style="padding:1em;color:#434349;font-size:12pt">ITM-{{$data->Item_ID}}-{{$data->id}}-BP</h3>
                                                 <input type="hidden" name="itemid" value="{{$data->Item_ID}}" >
					     </td>
					     <td class="text-center "><div class="col-md-6 col-sm-12" style="margin:auto;padding:1em;"><input class="form-control" type="number" id="Item_Qty" name="Item_Qty" value="{{$data->MOQ}}" required></div></td>
					     <td class="text-center "><div class="col-md-6 col-sm-12" style="margin:auto;padding:1em;"><input class="form-control" type="number" id="Item_Cost" name="Item_Cost" value="{{$data->EST_COST}}"  step="0.01" min="0" max="1000000" required></div></td>
                                          </tr>
                                        
                                       </tbody>
                                    </table></div>
                                    </div></div></div></div>
                                  </div>
                                   
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row" style="margin-top:2em;">
                     <div class="col-xs-6 col-md-6 col-sm-12">
                        <div class="kt-portlet">
                           <div class="kt-portlet__body">
                              <!--begin::Section-->
                              <div class="kt-section">
                                 <div class="kt-section__content">
                                    <table class="table">
                                       <tbody>
                                          <tr>
                                             <td>Estimated Lead Time</td>
                                             <td>{{$data->LEAD_TIME}}/Days</td>
                                             
                                          </tr>
                                          <tr>
                                             <td>Units in Stock</td>
                                             <td>{{$data->Units_in_Stock}}/Units</td>
                                          </tr>
					 
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-6 col-md-6 col-sm-12">
                        <div class="kt-portlet">
                           <div class="kt-portlet__body">
                              <!--begin::Section-->
                              <div class="kt-section">
                                 <div class="kt-section__content">
                                    <table class="table">
                                       <tbody>
                                          <tr>
                                             <td>Units Subtotal</td>
                                             <td id="subtotal">${{$data->MOQ*$data->EST_COST}}</td>
                                          </tr>
                                          <tr>
                                             <td>Purchase fee</td>
                                             <td>{{$data->Purchase_Fee}}%</td>
					     <input type="hidden" name="Purchase_fee" value="{{$data->Purchase_Fee}}">
                                          </tr>
                                          <tr>
                                             <td>Grand total</td>
                                             <td id="grandtotal">${{$data->MOQ*$data->EST_COST*(100+$data->Purchase_Fee)/100}}</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                     </div>
                     <div class="col-md-6">
                        <table class="table">
                           <tbody>
                              <tr>
                                 <td>
                                    <button type="button" class="btn btn-secondary  btn-bold">
                                    cancel
                                    </button>
                                 </td>
                                 <td>
                                    <div class="btn-group " style="float:right">
                                       <button type="submit" class="btn btn-brand btn-bold btn-right" >
                                       submit
                                       </button>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
			   </form>
            </div>
         </div>
      </div>
      @include('assets.js')
      <!--begin::Page Scripts(used by this page) -->
      <script src="./assets/js/demo1/pages/custom/contacts/add-contact.js" type="text/javascript"></script>
      <script>
         
         
       
         $(function(){
             $(document).ready(function()
             {
				//  when Qty  change processing
                 $('#Item_Qty').change(function()
				 {
					 var itemqty=$(this).val();
					 var itemcost=$('#Item_Cost').val();
					 var subtotal=itemqty*itemcost;
					 var grandtotal=subtotal*(100+{{$data->Purchase_Fee}})/100;
					 $('#subtotal').html(subtotal);
					 $('#grandtotal').html(grandtotal);
				 })
				 $('#Item_Cost').change(function()
				 {
					 var itemcost=$(this).val();
					 var itemqty=$('#Item_Qty').val();
					 var subtotal=itemqty*itemcost;
					 var grandtotal=subtotal*(100+{{$data->Purchase_Fee}})/100;
					 $('#subtotal').html(subtotal);
					 $('#grandtotal').html(grandtotal);
				 })

             })
         })
         
         <?php
         
            if(Session::get('msg2')==1)
            {
          ?>
             swal.fire({
                            "title": "",
                            "text": "A new purchase order have been submitted successfully!",
                            "type": "success",
                            "confirmButtonClass": 'btn btn-secondary'
                        }).then(result => {
                            if (result.value) {
                                window.location.href = "/purchase-order/view/table";
                            } else {
                                //
                            }
                        })
          
          <?php
            
            }
         
         ?>
         
         
         
      </script>
   </body>
</html>