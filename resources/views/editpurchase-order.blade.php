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
                           Edit po | PO-{{$data->po_number}}-{{$data->id}}-BP
                        </h3>
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
			   <form action="{{Route('user.changepo')}}" method="post">
			   @csrf
               <input type="hidden" name="po_id" value="{{$data->id}}">
               <input type="hidden" name="po_status" value="{{$data->status_id}}" id="po_status">
               <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                  <div class="row">
                    <div class="col-md-6"><?php
                        $date=substr($data->created_at,0,10);
                        $crttime=date($date);
                   

                    ?><h3 class="kt-subheader__title" style="color:#434349;font-size:12pt;">DATE CREATED:{{$crttime}}</h3></div>
                    <div class="col-md-6" >
                 
                    </div>
                  </div>
                  <div class="kt-portlet">
                     <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white" id="kt_apps_contacts_add" data-ktwizard-state="step-first">
                           <div class="kt-grid__item">
                              <!--begin: Form Wizard Nav -->
                              <div class="kt-wizard-v1__nav">
                                 <div class="kt-wizard-v1__nav-items">
                                 <div class="col-md-12 col-sm-12">
                                  <div class="kt-portlet">
                           <div class="kt-portlet__body">
                              <!--begin::Section-->
                              <div class="kt-section">
                                 <div class="kt-section__content">
                                 <div class="table-responsive">
				   <table class="table">
					<thead >
            <tr >
					    <th class="text-center "  style="font-size:12pt">Item name</th>
					    <th class="text-center"  style="font-size:12pt">Item#</th>
					    <th class="text-center "  style="font-size:12pt">Quantity</th>
					    <th class="text-center "  style="font-size:12pt">cost</th>
					 </tr>
					</thead>
                                       <tbody>
					  <tr >
					     <td class="text-center" >
					     	 <h3 class="kt-subheader__title text-center" style="padding:1em;color:#434349;font-size:12pt">{{$data1->Item_Name}}</h3>
                                                 <input type="hidden" name="itemname" value="{{$data1->Item_Name}}">

					     </td>
					     <td class="text-center" >
					    	<h3 class="kt-subheader__title text-center" style="padding:1em;color:#434349;font-size:12pt">ITM-{{$data->item_id}}-{{$data1->id}}-BP</h3>
                                       		<input type="hidden" name="itemid" value="{{$data->item_id}}" >
                       </td>
                       <?php if($data->status_id==1||$data->status_id==2) {?>
					     <td class="text-center" ><div class="col-md-6 col-sm-12" style="margin:auto;padding:1em;"><input class="form-control" type="number" id="Item_Qty" name="Item_Qty" value="{{$data->po_qty}}" required></div></td>
					     <td class="text-center" > <div class="col-md-6 col-sm-12" style="margin:auto;padding:1em;"><input class="form-control" type="number" id="Item_Cost" name="Item_Cost" value="{{$data->po_item_cost}}"  step="0.01" min="0" max="1000000" required></div></td>
                       <?php }
                        else if($data->status_id==3||$data->status_id==4)
                        {
                        ?>
                           <td class="text-center" ><div class="col-md-6 col-sm-12" style="margin:auto;padding:1em;"><span class="text-center">{{$data->po_qty}}</span><input class="form-control" type="hidden" id="Item_Qty" name="Item_Qty" value="{{$data->po_qty}}" required></div></td>
					     <td class="text-center" > <div class="col-md-6 col-sm-12" style="margin:auto;padding:1em;"><span class="text-center">{{$data->po_item_cost}}</span><input class="form-control" type="hidden" id="Item_Cost" name="Item_Cost" value="{{$data->po_item_cost}}"  step="0.01" min="0" max="1000000" required></div></td>
                        <?php
                        }
                       
                       ?>
                  </tr>
				       </tbody>
				   </table>
				   </div>
				   </div></div></div></div>
            </div>                       </div>
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
                                             <td>{{$data1->LEAD_TIME}}/Days</td>
                                             
                                          </tr>
                                          <tr>
                                             <td>Units in Stock</td>
                                             <td>{{$data1->Units_in_Stock}}</td>
                                          </tr>
					   <tr>
					     <td>Current Order Status</td>
					     <td>
					    	<?php
						     $status_id=$data->status_id;
						     $status_name=\App\Status::where('id',$status_id)->first()->statusname;
						     
						?>
						{{$status_name}}
   					    </td>
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
                                             <td id="subtotal">${{$data->po_qty*$data->po_item_cost}}</td>
                                          </tr>
                                          <tr>
                                             <td>Purchase fee</td>
                                             <td>{{$data->po_fee}}%</td>
											 <input type="hidden" name="Purchase_fee" value="{{$data->po_fee}}">
                                          </tr>
                                          <tr>
                                             <td>Grand total</td>
                                             <td id="grandtotal">${{$data->po_qty*$data->po_item_cost*(100+$data->po_fee)/100}}</td>
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
                                    <a href="{{Route('viewpo')}}" class="btn btn-secondary  btn-bold">
                                    cancel
                                    </a>
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
					 var grandtotal=subtotal*(100+{{$data->po_fee}})/100;
					 $('#subtotal').html(subtotal);
                     $('#grandtotal').html(grandtotal);
                     
				 })
				 $('#Item_Cost').change(function()
				 {
					 var itemcost=$(this).val();
					 var itemqty=$('#Item_Qty').val();
					 var subtotal=itemqty*itemcost;
					 var grandtotal=subtotal*(100+{{$data->po_fee}})/100;
					 $('#subtotal').html(subtotal);
					 $('#grandtotal').html(grandtotal);
                 })
                 $('.kt-nav__link').click(function()
                 {
                     var stid=$(this).attr("data-stid");
                     var stname=$(this).find(".kt-nav__link-text").html();
                     $('#dpname').html(stname);
                     $('#po_status').val(stid);
                 })

             })
         })
         <?php
            if(Session::get('msg')==2)
            {
         ?>
             swal.fire({
                                    "title": "Sorry can't change the status",
                                    "text": 'the invoice status have unpaid status and so we can\'t change the status',
                                    "type": "warning",
                                    "confirmButtonClass": 'btn btn-secondary'
                                })    
         <?php
            }
         
         ?>
          <?php
            if(Session::get('msg')==3)
            {
         ?>
           swal.fire({
                                    "title": "Sorry,can't change the status",
                                    "text": 'the invoice did n\'t create yet and so we can\'t change the status and you need to change the status as approve',
                                    "type": "warning",
                                    "confirmButtonClass": 'btn btn-secondary'
                                })    
         <?php
            }
         
         ?>
           <?php
            if(Session::get('msg')==4)
            {
         ?>
           swal.fire({
                                    "title": "Sorry,can't change the status",
                                    "text": 'the status can\'t back before status',
                                    "type": "warning",
                                    "confirmButtonClass": 'btn btn-secondary'
                                })    
         <?php
            }
         
         ?>
         <?php
            if(Session::get('msg')==6)
            {
         ?>
           swal.fire({
                                    "title": "Sorry,can't cancel this order",
                                    "text": 'the status yet approved',
                                    "type": "warning",
                                    "confirmButtonClass": 'btn btn-secondary'
                                })    
         <?php
            }
         
         ?>
         <?php
         
             if(Session::get('msg2')==1)
             {
        ?>
         swal.fire({
                            "title": "",
                            "text": "A new invoice have been successfully created!",
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