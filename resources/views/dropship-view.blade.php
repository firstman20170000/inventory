<?php
$time = time();
?>
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
    <!--begin::Fonts -->
    @include('assets.css')
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="demo1/index.html">
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
                                    View Dropship Order  
                                </h3>
                                <span style="font-size:10pt;color:black;">DSO-{{$order->dropship_number}}-{{$order->id}}-BP</span>
                                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                                <div class="kt-subheader__group" id="kt_subheader_search">
                                    <span class="kt-subheader__desc" id="kt_subheader_total">
                                     <a href="javascript:;"></i></a>
                                    </span>
                                </div>
                            </div>
                            <div class="kt-subheader__toolbar">
							                    <div class="kt-widget__action">
                                                    <a href="/view/dropship-table" class="btn btn-label-brand btn-sm btn-upper">Back</a>
                                                    <div class="dropdown dropdown-inline">
                                                        <a href="#" class="btn btn-brand btn-sm btn-upper dropdown-toggle" data-toggle="dropdown">
                                                            ACTION
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                                                            <!--begin::Nav-->
                                                            <ul class="kt-nav">
                                                                <li class="kt-nav__head">
                                                                    Details Options

                                                                </li>
                                                                <li class="kt-nav__separator"></li>
                                                                @if($order->status_id==5||$order->status_id==6)
                                                                    <li class="kt-nav__item">
                                                                        <a class="kt-nav__link" >
                                                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                                            <span class="kt-nav__link-text">Edit Dropship</span>
                                                                        </a>
                                                                    </li>
                                                               
                                                               
                                                               
                                                                @else
                                                                  <li class="kt-nav__item">
                                                                    <a class="kt-nav__link" href="/edit/dropship/{{$order->id}}">
                                                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                                        <span class="kt-nav__link-text">Edit Dropship</span>
                                                                    </a>
                                                                  </li>
                                                                @endif
                                                              
                                                              
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                </div>
								            </div>
                        </div>
                    </div>

                    <!-- end:: Content Head -->

                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

                        <!--Begin:: Portlet-->
                     

                        <!--End:: Portlet-->
                        <div class="row">

                            <div class="col-xl-4">
                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Order Details
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        <!--begin::Section-->
                                        <div class="kt-section">
                                            <div class="kt-section__content">
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Value</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <td>
                                                                <?php
                                                                   $num=$order->shipping_method;
                                                                   $type_id=$order->shipping_method_type;
                                                                   $type_name=\App\Shippingtype::where('id',$type_id)->first()->Type_Name;
                                                                   $num_type=$order->shipping_method;
                                                                   $time="";
                                                                   $courier="";
                                                                   if($num!="")
                                                                   {
                                                                       $time=\App\Shippingmethod::where('id',$num)->first()->shipping_time;
                                                                       $courier=\App\Shippingmethod::where('id',$num)->first()->Courier_Name; 
                                                                   }
                                                                ?>
                                                          <tr>
                                                            <td>Shipping method</td>
                                                            <td>{{$type_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Courier</td>
                                                            <td>{{$courier}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shipping time</td>
                                                             <td>Up To {{$time}} Days
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tracking Number</td>
                                                            <td>{{$order->tracking_number}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>DATE CREATED</td>
                                                            <td>
                                                                <?php
                                                                     $t=$order->created_at;
                                                                     $crtime=substr($t,0,10);
                                                                     $date=date_create($crtime);
                                                                     echo date_format($date,"Y/m/d");
                                                                ?>
                                                            </td>
                                                            
                                                        </tr>
						    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Order Summary
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        <!--begin::Section-->
                                        <div class="kt-section">
                                            <div class="kt-section__content">
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Value</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Total Weight</td>
                                                            <td>{{number_format($order->Total_weight,2)}}gr</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>Shipping Cost</td>
                                                            <td>
                                                                ${{number_format($order->drop_shipping_cost,2)}}
                                                        </td>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <td>INVOICE</td>
                                                            <td>
                                                            <?php
                                                               $invoice=\App\Invoice::where('order_id',$order->dropship_number)->where('type','DSO')->first();
                                                            ?>
                                                            <?php 
                                                              if($invoice)
                                                              {
                                                                  if($invoice->status_id==0)
                                                                  {
                                                                    ?>
                                                                       <a href='/view/inovice/{{$invoice->id}}'> UNPAID </a>
                                                                   <?php
                                                                  } else if($invoice->status_id==1)
                                                                  {
                                                                ?>  <a href='/view/inovice/{{$invoice->id}}'> PAID </a>
                                                                <?php  
                                                                  } else {
                                                                 ?>
                                                                   <a href='/view/inovice/{{$invoice->id}}'> CANCELED </a>
                                                                 <?php     
                                                                  }
                                                              } else 
                                                              {
                                                           ?>
                                                                 NOT CREATED
                                                           <?php
                                                              }
                                                            ?>
                                                               
                                                            </td>
                                                            
                                                        </tr>
                                                      
                                                     
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!--Begin:: Portlet-->
                                

                                <!--End:: Portlet-->
                            </div>
                            <div class="col-xl-8">

                                <!--Begin:: Portlet-->
                                <div class="kt-portlet kt-portlet--tabs">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-toolbar">
                                            <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
                                                    <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_2" role="tab">
                                                        <i class="flaticon2-note"></i> Notes
                                                    </a>
                                                </li>
                                                    
                                                     <li class="nav-item">
                                                    <a class="nav-link "  data-toggle="tab" href="#kt_apps_contacts_view_tab_1" role="tab">
                                                        <i class="flaticon2-time"></i>Dropship Products
                                                    </a>
                                                </li>
                                              
                                                
                                                <li class="nav-item">
                                                    <a class="nav-link " data-toggle="tab" href="#kt_apps_contacts_view_tab_3" role="tab">
                                                        <i class="flaticon2-note"></i>Shipping address
                                                    </a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="tab-content kt-margin-t-20">

                                            <!--Begin:: Tab Content-->
                                            <div class="tab-pane " id="kt_apps_contacts_view_tab_1" role="tabpanel">
                                               <div class="kt-notification">
                                                    <div class="kt-portlet kt-portlet--mobile">
                                                        <div class="kt-portlet__head kt-portlet__head--lg">
                                                            <div class="kt-portlet__head-label">
                                                               
                                                                
                                                            </div>

                                                        </div>
                                                        <div class="kt-portlet__body">

                                                            <!--begin: Search Form -->
                                                       

                                                            <!--end: Search Form -->
                                                        </div>
                                                        <div class="table-responsive">

                                                            <!--begin: Datatable -->
                                                            <table class="table" id="html_table" >

                                                                <thead>
                                                                    <tr>
                                                                        <th title="Field #4" class="text-center"></th>

                                                                        <th title="Field #2" class="text-center">Name</th>
                                                                        <th title="Field #3" class="text-center">Bundle#</th>
                                                                        <th title="Field #3" class="text-center">Qty</th>
                                                                 


                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($product as $key => $row)
                                                                    <tr>
                                                                    <td class="text-center" style="margin:auto"><span style="width:130px"><div class="kt-user-card-v2 kt-user-card-v2--uncircle"><div class="kt-user-card-v2__pic" style="margin:auto;"><img src="{{$row->bundle->image_url}}"></div></div></span></td> 
                                                                    <td class="text-center">{{$row->bundle->bundle_name}}</td>
                                                                    <td class="text-center">BDL-{{$row->bundle->bundle_id}}-{{$row->bundle->id}}-BP</td>
                                                                    <td class="text-center">{{number_format($row->dropship_qty)}}</td>
                                                                    </tr>

                                                                    @endforeach

                                                                </tbody>
                                                            </table>

                                                            <!-- end: Datatable -->
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                                
                                            </div>
                                            <div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                                                <form action="/post/dropship/note" method="post">
                                                @csrf
                                                
                                                   <input type="hidden" name="order_id" value="{{$order->id}}">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="comment" id="exampleTextarea" rows="3" placeholder="Type notes"></textarea>
                                                    </div>
                                                    <input type="hidden" name="shipid" value="">
                                                    <div class="row">
                                                        <div class="col">
                                                            <button type="submit" class="btn btn-label-brand btn-bold">Add notes</button>
                                                         
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="kt-separator kt-separator--space-lg kt-separator--border-dashed"></div>
                                                <div class="kt-notes kt-scroll kt-scroll--pull" data-scroll="true" style="height: 700px;">
                                               
                                               
                                                @foreach($note as $key => $row)
                                                    <div class="kt-notes__items">
                                                        <div class="kt-notes__item">
                                                            <div class="kt-notes__media">
                                                                <img class="kt-hidden-" src="./assets/media/users/100_3.jpg" alt="image">
                                                                <span class="kt-notes__icon kt-font-boldest kt-hidden">
                                                                    <i class="flaticon2-cup"></i>
                                                                </span>
                                                                <h3 class="kt-notes__user kt-font-boldest kt-hidden">
                                                                    N S
                                                                </h3>
                                                            </div>
                                                            <div class="kt-notes__content">
                                                                <div class="kt-notes__section">
                                                                    <div class="kt-notes__info">
                                                                        <a class="kt-notes__title">
                                                                            {{auth()->user()->name}}
                                                                        </a>
                                                                        <span class="kt-notes__desc">
                                                                          <?php
                                                                              $t=$row->created_at;
                                                                              $crtime=substr($t,0,10);
                                                                              $date=date_create($crtime);
                                                                              echo date_format($date,"Y/m/d");
                                                                          ?>
                                                                        </span>
                                                                        <span class="kt-badge kt-badge--success kt-badge--inline">new</span>
                                                                    </div>
                                                                   
                                                                </div>
                                                                <span class="kt-notes__body">
                                                                    {{$row->comment}}
                                                                </span>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                   
                                                   
                                                      
                                                   
                                                </div>
                                            </div>
                                                                        
                                            <!--End:: Tab Content-->

                                            <!--Begin:: Tab Content-->
                                          
                                            <div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
                                               <div class="kt-notification">
                                                    <div class="kt-portlet kt-portlet--mobile">
                                                        <div class="kt-portlet__head kt-portlet__head--lg">
                                                            <div class="kt-portlet__head-label">
                                                               
                                                                
                                                            </div>

                                                        </div>
                                                        <div class="kt-portlet__body">

                                                            <!--begin: Search Form -->
                                                       

                                                            <!--end: Search Form -->
                                                        </div>
                                                        <div class="table-responsive">

                                                            <!--begin: Datatable -->
                                                            <table class="table" id="html_table" >

                                                                <thead>
                                                                   
                                                                </thead>
                                                                <tbody>
                                                                   <tr>
                                                                      <td class="text-center">first name</td>
                                                                      <td class="text-center">{{$order->address_name}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td class="text-center">last name</td>
                                                                      <td class="text-center">{{$order->address_last_name}}</td>
                                                                    </tr>
                                                                   <tr>
                                                                      <td class="text-center">address1</td>
                                                                      <td class="text-center">{{$order->address_1}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td class="text-center">address2</td>
                                                                      <td class="text-center">{{$order->address_2}}</td>
                                                                    </tr>
                                                                     <tr>
                                                                      <td class="text-center">postcode</td>
                                                                      <td class="text-center">{{$order->address_postcode}}</td>
                                                                    </tr>
                                                                     <tr>
                                                                      <td class="text-center">city</td>
                                                                      <td class="text-center">{{$order->address_city}}</td>
                                                                    </tr>
                                                                     <tr>
                                                                      <td class="text-center">state</td>
                                                                      <td class="text-center"><?php if($order->address_state!="null") {
                                                                      ?>
                                                                      {{$order->address_state}}
                                                                      <?php
                                                                      }
                                                                      ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td class="text-center">country</td>
                                                                      <td class="text-center">{{$order->address_country}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">phone</td>
                                                                        <td class="text-center">
                                                                          <?php
                                                                              if($order->address_telephone!="null")
                                                                              {
                                                                          ?>
                                                                              {{$order->address_telephone}}
                                                                          <?php
                                                                              
                                                                              }
                                                                          
                                                                          ?>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <!-- end: Datatable -->
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                                
                                            </div>                             
                                            <!--End:: Tab Content-->

                                            <!--Begin:: manual adjustment Content-->
                                            

                                            <!--End:: Tab Content-->
                                                                   
                                            <!--Begin:: Tab Content-->
                                            <div class="tab-pane" id="kt_apps_contacts_view_tab_4" role="tabpanel">
                                               <div class="kt-notification">
                                                    <div class="kt-portlet kt-portlet--mobile">
                                                        <div class="kt-portlet__head kt-portlet__head--lg">
                                                            <div class="kt-portlet__head-label">
                                                                <span class="kt-portlet__head-icon">
                                                                    <i class="kt-font-brand flaticon2-line-chart"></i>
                                                                </span>
                                                                <h3 class="kt-portlet__head-title">
                                                                    TOTAL ORDERS
                                                                    <!-- <small>Datatable initialized from HTML table</small> -->
                                                                </h3>
                                                            </div>

                                                        </div>
                                                        <div class="kt-portlet__body">

                                                            <!--begin: Search Form -->
                                                            <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                                                                <div class="row align-items-center">
                                                                    <div class="col-xl-8 order-2 order-xl-1">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                                                                <div class="kt-input-icon kt-input-icon--left">
                                                                                    <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                                                                    <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                                                                        <span><i class="la la-search"></i></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                     
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                                                                        <a href="#" class="btn btn-default kt-hidden">
                                                                            <i class="la la-cart-plus"></i> New Order
                                                                        </a>
                                                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--end: Search Form -->
                                                        </div>
                                                        <div class="kt-portlet__body kt-portlet__body--fit">

                                                            <!--begin: Datatable -->
                                                            <table class="kt-datatable" id="html_table" width="100%">

                                                                <thead>
                                                                    <tr>
                                                                        <th title="Field #4">Date</th>

                                                                        <th title="Field #2">TRANSACTION TYPE</th>
                                                                        <th title="Field #3">REFRENCE</th>
                                                                        <th title="Field #3">STOCK_RECORD</th>
                                                                        <th title="Field #3">UNITS CHANGE</th>


                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                        


                                                                </tbody>
                                                            </table>

                                                            <!-- end: Datatable -->
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                                
                                            </div>

                                            <!--End:: Tab Content-->

                                            <!--Begin:: Tab Content-->
                                            <div class="tab-pane" id="kt_apps_contacts_view_tab_5" role="tabpanel">
                                                <form class="kt-form kt-form--label-right" action="/bundle_modify" method="post" id="kt_form_3">
                                                    @csrf
                                                    <div class="kt-form__body">
                                                        <div class="kt-section kt-section--first">
                                                            <div class="kt-section__body">
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Quantity</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <input class="form-control" type="number" step="1" min="0" id="Manu_QTY"  onchange="manu_qty()" name="Manu_QTY" required/>
                                                                        <div id="manu_qty" style="color:red"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Comment</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <input class="form-control" type="text" id="Manu_REFERENCE" name="Manu_REFERENCE" onchange="manu_ref()" required/>
                                                                        <div id="manu_ref" style="color:red"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Type</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <select class="form-control" id="Manu_TYPE" name="Manu_TYPE" onchange="manu_type()" required>
                                                                            <option value="">Select Type...</option>
                                                                            <option value="IN">ADD</option>
                                                                            <option value="OUT">SUBSTRACT</option>
                                                                        </select>
                                                                        <div id="manu_type" style="color:red"></div>
                                                                        <input type="hidden" id="Bundle_id" name="Bundle_id" value="" />
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" id="TRANSACTION_TYPE" name="TRANSACTION_TYPE" value="Manual Adjustment"/>
                                                                <input type="hidden" id="Stock_Record" value=""/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
                                                    <div class="kt-form__actions">
                                                        <div class="row">
                                                            <div class="col-xl-3"></div>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <button type="button" id="manu_button" class="btn btn-label-brand btn-bold">Change</button>
                                                                <a href="/bundles" class="btn btn-clean btn-bold">Cancel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <!--End:: Tab Content-->
                                        </div>
                                    </div>
                                </div>

                                <!--End:: Portlet-->
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
    <script src="./assets/js/demo1/pages/crud/metronic-datatable/base/html-table.js" type="text/javascript"></script>
    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTFormControls = function () {
    // Private functions

            var demo1 = function () {
               var FormValidate = $( "#kt_form_1" ).validate({
                    // define validation rules
                    rules: {
                        CHANCE_QTY: {
                            required: true
                        },
                        REFERENCE:{
                            required: true
                        },
                        TYPE:{
                            required: true
                        }
                    },

                    //display error alert on form submit
                    invalidHandler: function(event, validator) {
                        var alert = $('#kt_form_1_msg');
                        alert.removeClass('kt--hide').show();
                        KTUtil.scrollTop();
                    },


                });
               

            }
            var demo3= function() {
              var FormValidate1 = $( "#kt_form_3" ).validate({
                    // define validation rules
                    rules: {
                        Manu_QTY: {
                            required: true
                        },
                        Manu_REFERENCE:{
                            required: true
                        },
                        Manu_TYPE:{
                            required: true
                        }
                    },

                    //display error alert on form submit
                    invalidHandler: function(event, validator) {
                        var alert = $('#kt_form_3_msg');
                        alert.removeClass('kt--hide').show();
                        KTUtil.scrollTop();
                    },


                });
            
            }
            var demo2=function() {
                var FormValidate2 = $("#kt_form_2").validate({
                    // define validation rules
                    rules: {
                        Qty_num: {
                            required: true
                        },
                        Weight_num:{
                            required: true
                        },
                        Height_num:{
                            required: true
                        },
                        Length_num:{
                            required: true
                        },
                        Width_num:{
                            required: true
                        }
                    },

                    //display error alert on form submit
                    invalidHandler: function(event, validator) {
                        var alert = $('#kt_form_2_msg');
                        alert.removeClass('kt--hide').show();
                        KTUtil.scrollTop();
                    },


                });
            }

            return {
                // public functions
                init: function() {
                    demo1();
                    demo2();
                    demo3();

                }
            };
        }();
        function delpackitem(packid)
        {
           swal.fire({
                        "title": "",
                        "text": "Are you sure you want to remove these packing details?",
                        "type": 'warning',
                        "showCancelButton": "true",
                        "confirmButtonClass": 'btn btn-secondary',
                        "cancelButtonClass":'btn btn-primary',
                        }).then(result => {
                            if (result.value) {
                                $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                              });
                                var formdata = new FormData();
                                formdata.append('packid',packid);
                                $.ajax({
                                        type: 'post',
                                        enctype: 'multipart/form-data',
                                        url: '/delete/pack-items',
                                        processData: false,
                                        contentType: false,
                                        data: formdata,
                                        success: function (data) {
                                           
                                        }
                                });
                                location.reload();
                              }  else {
                                //
                           }
                      })
           
        }
      
        
        @if(Session::get('msg'))
            swal.fire({
                                    "title": "",
                                    "text": 'Please add Packing Details to Bundle before creating a Shipment!',
                                    "type": 'warning',
                                    "confirmButtonClass": 'btn btn-secondary',
                                    
                                })
        @endif
    </script>
</body>

<!-- end::Body -->

</html>
