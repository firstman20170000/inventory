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
                                    View Bundle 
                                </h3>
                              
                                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                                <span style="font-size:10pt;color:black;">BDL-{{$bundle->bundle_id}}-{{$bundle->id}}-BP</span>
                                <div class="kt-subheader__group" id="kt_subheader_search">
                                    <span class="kt-subheader__desc" id="kt_subheader_total">
                                     <a href="javascript:;"></i></a>
                                    </span>
                                </div>
                            </div>
                            <!-- <div class="kt-subheader__toolbar">
									<a href="#" class="btn btn-default btn-bold">
										Back </a>
								</div> -->
                        </div>
                    </div>

                    <!-- end:: Content Head -->

                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

                        <!--Begin:: Portlet-->
                        <div class="kt-portlet">
                            <div class="kt-portlet__body">
                                <div class="kt-widget kt-widget--user-profile-3">
                                    <div class="kt-widget__top">
                                        <div class="kt-widget__media">
                                            <img src="{{asset($bundle->image_url)}}" alt="image">
                                        </div>
                                        <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-bolder kt-font-light kt-hidden">
                                            JM
                                        </div>
                                        <div class="kt-widget__content">
                                            <div class="kt-widget__head">
                                                <div class="kt-widget__user">
                                                    <a href="javasript:;" class="kt-widget__username">
                                                       
                                                    </a>
                                                </div>
                                                <div class="kt-widget__action">
                                                    <a href="/bundles" class="btn btn-label-brand btn-sm btn-upper">Back</a>
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
                                                                  <li class="kt-nav__item">
                                                                    <a class="kt-nav__link" href="/edit/bundle/{{$bundle->id}}">
                                                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                                        <span class="kt-nav__link-text">Edit Bundle</span>
                                                                    </a>
                                                                </li>
                                                                
                                                                <li class="kt-nav__item">
                                                                    <a class="kt-nav__link" href="/create/stock-order/{{$bundle->id}}">
                                                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                                        <span class="kt-nav__link-text">Make to Stock Order</span>
                                                                    </a>
                                                                </li>
                                                                
                                                                <li class="kt-nav__item">
                                                                    <a href="/create/shipping/{{$bundle->id}}"  class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                                                        <span class="kt-nav__link-text">Create FBA Shipment</span>
                                                                    </a>
                                                                </li>
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-widget__subhead">
                                                <h3 class="kt-subheader__title" style="font-size:12pt;">
                                                    {{$bundle->bundle_name}}
                                                </h3>
                                                <a href="javascript:;"></i><b>Estimated Cost : ${{number_format($bundle->est_cost,2)}}</b></a>
                                                <a href="javascript:;"></i><b>Bundle Fee :${{number_format($bundle->bundling_fee,2)}}</b></a>                                            </div>
                                            <div class="kt-widget__info">
                                                <div class="kt-widget__desc" style="word-break: break-all;">
                                                     {{$bundle->bundle_description}} 
                                                   
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--End:: Portlet-->
                        <div class="row">

                            <div class="col-xl-4">
                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Bundling Details
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
                                                            <td>Bundling TAT</td>
                                                            <td>{{number_format($bundle->turnaround)}}/Units Per Day</td>
                                                        </tr>
                                                        <tr>
                                                            <td>MODEL#</td>
                                                            <td>{{$bundle->bundle_model}}</td>
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
                                                Bundle Specifications
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
                                                            <th>Dimension</th>
                                                            <th>Cm</th>
                                                            <th>In</th>
                                                            <th>gr</th>
							                                              <th>lbs</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>WIDTH</td>
                                                            <td>{{number_format($bundle->bundle_width,2)}}</td>
                                                            <td>{{number_format(((float)$bundle->bundle_width)/2.54, 2)}}</td>
                                                            <td></td>
                                                            <td></td>
						                                    </td>
                                                        </tr>
                                                        <tr>
                                                            <td>LENGTH</td>
                                                            <td>{{number_format($bundle->bundle_length,2)}}</td>
                                                            <td>{{number_format(((float)$bundle->bundle_length)/2.54, 2)}}</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>HEIGHT</td>
                                                            <td>{{number_format($bundle->bundle_height,2)}}</td>
                                                            <td>{{number_format(((float)$bundle->bundle_height)/2.54, 2)}}</td>
                                                            <td></td>
							                                              <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>WEIGHT</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>{{number_format($bundle->bundle_weight,2)}}</td>
                                                            <td>{{number_format(((float)$bundle->bundle_weight)/454,6)}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!--Begin:: Portlet-->
                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                File Library
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="kt-form kt-form--label-right">
                                        <div class="kt-portlet__body">
                                            <div class="form-group form-group-xs row">
                                                @foreach ($file as $key => $row)
                                                <div class="col-md-12">
                                                 
                                                        <a href="{{asset($row->filename)}}">{{$row->filename}}</a>        
                                                       <hr>
                                                </div>
                                             
                                                @endforeach
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <!--End:: Portlet-->
                            </div>
                            <div class="col-xl-8">

                                <!--Begin:: Portlet-->
                                <div class="kt-portlet kt-portlet--tabs">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-toolbar">
                                            <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_1" role="tab">
                                                        <i class="flaticon2-note"></i> Notes
                                                    </a>
                                                </li>
                                                 <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_4" role="tab">
                                                        <i class="flaticon2-time"></i>Inventory Report
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_5" role="tab">
                                                        <i class="flaticon2-note"></i> Manual Adjustment
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_2" role="tab">
                                                        <i class="flaticon2-time"></i>Packing Details
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_3" role="tab">
                                                        <i class="flaticon2-note"></i>Bundle Items
                                                    </a>
                                                </li>
                                               
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="tab-content kt-margin-t-20">

                                            <!--Begin:: Tab Content-->
                                            <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                                                <form action="/post/bundle/note" method="post">
                                                @csrf
                                                   <input type="hidden" name="bundle_id" value="{{$bundle->id}}">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="comment" id="exampleTextarea" rows="3" placeholder="Type notes"></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <button type="submit" class="btn btn-label-brand btn-bold">Add notes</button>
                                                            
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="kt-separator kt-separator--space-lg kt-separator--border-dashed"></div>
                                                <div class="kt-notes kt-scroll kt-scroll--pull" data-scroll="true" style="height: 700px;">
                                                @foreach($bundlenote as $key => $row)
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
                                            <div class="tab-pane" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                                                <div class="kt-notification">
                                                    <div class="kt-portlet kt-portlet--mobile">
                                                        <div class="kt-portlet__head kt-portlet__head--lg">
                                                            <div class="kt-portlet__head-label" style="margin:auto;">
                                                            
                                                                <h3 class="kt-portlet__head-title text-center">
                                                                    Submit Packing Details for master Carton
                                                                    <!-- <small>Datatable initialized from HTML table</small> -->
                                                                </h3>
                                                            </div>
                                                           

                                                        </div>
                                                        <form class="kt-form kt-form--label-right" action="/package/bundle" method="post" id="kt_form_2">
                                                        
                                                        <div class="row">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th class="text-center">Qty</th>
                                                                            <th class="text-center">weight</th>
                                                                            <th class="text-center">Height</th>
                                                                            <th class="text-center">Length</th>
                                                                            <th class="text-center">Width</th>
                                                                            
                                                                        </tr>
                                                                        </thead>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td>
                                                                            <input class="form-control" type="number" step=1 id="Qty_num" min=1 name="Qty_num" onchange="onqty()" required/>
                                                                            <div id="qty1" style="color:red"></div>    
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <input class="form-control" type="number" step=0.01 id="Weight_num" min=0.1 name="Weight_num"  onchange="onweight()"  required/>
                                                                            <div id="weight" style="color:red"></div>
                                                                            <label class="text-center">gr<label>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <input class="form-control" type="number" step=0.01 id="Height_num" min=0.1 name="Height_num" onchange="onheight()"  required/>
                                                                            <div id="height" style="color:red"></div>
                                                                            <label class="text-center">cm<label>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <input class="form-control" min=0.1 type="number" step=0.01 id="Length_num" name="Length_num" onchange="onlength()"  required/>
                                                                            <div id="length" style="color:red"></div>
                                                                            <label class="text-center">cm<label>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <input class="form-control" min=0.1 type="number" step=0.01 id="Width_num" name="Width_num" onchange="onwidth()"  required/>
                                                                            <div id="width" style="color:red"></div>
                                                                            <label class="text-center">cm<label>
                                                                        </td>
                                                                      </tr>
                                                                    </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="row ml-auto" >
                                                                 <button id="packsubut" class="btn btn-label-brand btn-bold ml-auto" style="display:block;">ADD</button>
                                                            </div>
                                                        </form>
                                                     
                                                        <div class="kt-portlet__body kt-portlet__body--fit">
                                                            <div class="kt-portlet__head kt-portlet__head--lg">
                                                                <div class="kt-portlet__head-label" style="margin:auto;">
                                                                
                                                                    <h3 class="kt-portlet__head-title text-center">
                                                                        Packing details
                                                                        <!-- <small>Datatable initialized from HTML table</small> -->
                                                                    </h3>
                                                                </div>
                                                            

                                                            </div>
                                                                <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                    <tr>
                                                                        <td class="text-center">Bundles Per Carton</td>
                                                                        <td class="text-center">Carton Weight</td>
                                                                        <td class="text-center">Carton Height</td>
                                                                        <td class="text-center" >Carton Length</td>
                                                                        <td class="text-center">Carton Width</td>
                                                                        <td class="text-center">Remove</td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach($bundlepack as $key => $row)
                                                                        <tr>
                                                                            <td class="text-center">{{number_format($row->qty_in_mc)}}</td>
                                                                            <td class="text-center">{{number_format($row->mc_weight)}}gr</td>
                                                                            <td class="text-center">{{number_format($row->mc_length)}}cm</td>
                                                                            <td  class="text-center">{{number_format($row->mc_height)}}cm</td>
                                                                            <td class="text-center">{{number_format($row->mc_width)}}cm</td>
                                                                            <td class="text-center"><a href="javascript:delpackitem('{{$row->id}}');"><i class="la la-remove"></i></a></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td class="text-center"></td>
                                                                           <td class="text-center">{{number_format(((float)$row->mc_weight)/454,6)}}lbs</td>
                                                                           <td class="text-center">{{number_format(((float)$row->mc_length)/2.54, 2)}}In</td>
                                                                           <td class="text-center">{{number_format(((float)$row->mc_height)/2.54, 2)}}In</td>
                                                                           <td class="text-center">{{number_format(((float)$row->mc_width)/2.54, 2)}}In</td>
                                                                           <td class="text-center"></td>
                                                                        </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                           
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <!--End:: Tab Content-->

                                            <!--Begin:: manual adjustment Content-->
                                            <div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
                                                <form class="kt-form kt-form--label-right" action="/items_modify" method="post" id="kt_form_1">
                                                    @csrf
                                                    <div class="kt-form__body">
                                                        <div class="kt-section kt-section--first">
                                                            <div class="kt-section__body">
                                                              @if (count($items)>0)
                                                              <div class="row">
                                                               <div class="col-xl-4 col-md-4 col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Item</label>
                                                                    <div class="col-lg-9 col-xl-9">
                                                                        <select class="form-control" id="TYPE" name="TYPE" onchange="type()" required>
                                                                               @foreach($items as $key =>$row)
                                                                                   <option value="{{$row->id}}">{{$row->Item_Name}}</option>
                                                                               @endforeach()    
                                                                        </select>

                                                                        <div id="type" style="color:red"></div>
                                                                    </div>
                                                                </div>
                                                               </div>
                                                               <div class="col-md-2 col-xl-2 col-sm-6">
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Qty</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                             
                                                                            <input class="form-control" type="number" step="1" min="1" id="CHANCE_QTY"  onchange="qty()" name="CHANCE_QTY" required/>
                                                                            <div id="qty" style="color:red"></div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-md-3 col-xl-3 col-sm-6">
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-9 col-xl-6">
                                                                        <button type="button" id="button" class="btn btn-label-brand btn-bold">add</button>
                                                                           
                                                                          
                                                                        </div>
                                                                    </div>
                                                                  
                                                                </div>
                                                                </div>
                                                                @endif
                                                                <div class="row">
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th width=10></th>
                                                                                    <th width=20>Name</th>
                                                                                    <th width=20>Item#</th>
                                                                                    <th width=20>Qty</th>
                                                                                    <th width=10>Remove</th>
                                                                                </tr>
                                                                            
                                                                            </thead>
                                                                            <tbody id="bundlitem">
                                                                                @foreach($bundle_item as $key=> $row)
                                                                                   <tr>
                                                                                        <td> <div class="kt-user-card-v2 kt-user-card-v2--uncircle">
                                                                                            <div class="kt-user-card-v2__pic kt-img-centered" style="margin:auto">
                                                                                                        <center><img class="kt-img-centered" src="{{asset($row->Image_Url)}}" style="border-radius:50%;"></center>
                                                                                            </div></div>
                                                                                        </td>
                                                                                        <td>{{$row->Item_Name}}</td>
                                                                                        <td>ITM-{{$row->Item_ID}}-{{$row->id}}-BP</td>
                                                                                        <td>{{number_format($row->qty)}}</td>
                                                                                        <td><a href="javascript:delbundlitem('{{$row->bundleitem_id}}','{{$row->Item_Name}}');"><i class="la la-remove"></i></a></td>
                                                                                   </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
                                                    <div class="kt-form__actions">
                                                     
                                                    </div>
                                                </form>
                                            </div>

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
                                                                        
                                                                        <th title="Field #3">UNITS CHANGE</th>
                                                                        <th title="Field #3">STOCK_RECORD</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($data_record as $row)
                                                                    <tr>

                                                                        <td>{{$row->updated_at}}</td>
                                                                        <td>{{$row->TRANSACTION_TYPE}}</td>
                                                                        <td>{{$row->REFERENCE}}</td>
                                                                       
                                                                        @if($row->TYPE == "OUT")
                                                                        <td><font color="red">-{{number_format($row->CHANCE_QTY)}}</font></td>
                                                                        @else
                                                                        <td><font color="0abb87">+{{number_format($row->CHANCE_QTY)}}</font></td>
                                                                        @endif
                                                                        <td>{{number_format($row->Stock_Record)}}</td>
                                                                    </tr>
                                                                    @endforeach


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
                                                                        <input type="hidden" id="Bundle_id" name="Bundle_id" value="{{$bundle->id}}" />
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" id="TRANSACTION_TYPE" name="TRANSACTION_TYPE" value="Manual Adjustment"/>
                                                                <input type="hidden" id="Stock_Record" value="{{$bundle->bundles_in_stock}}"/>
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
        function delbundlitem(bundleid,itemname)
        {
               var disp="Are you sure you want to remove "+itemname+" from this bundle?";
                  swal.fire({
                                "title": "",
                                "text": disp,
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
                                  formdata.append('deleid',bundleid);
                                  $.ajax({
                                          type: 'post',
                                          enctype: 'multipart/form-data',
                                          url: '/delete/bundle-items',
                                          processData: false,
                                          contentType: false,
                                          data: formdata,
                                          success: function (data) {
                                               location.reload(); 
                                          }
                                      });
                                   
                                } else {
                                    //
                                }
                            })
              
        }

        function manu_qty()
        {
           $('#manu_qty').hide();
        }
        function manu_ref()
        {
           $('#manu_ref').hide();
        }
        function manu_type()
        {
            $('#manu_type').hide();
        }
        function onqty()
        {
            $('#qty1').hide();
        }
        function onweight()
        {
            $('#weight').hide();
        }
        function onheight()
        {
            $('#height').hide();
        }
        function onlength()
        {
            $('#length').hide();
        }
        function onwidth()
        {
            $('#width').hide();
        }

        function qty(){
            $('#qty').hide();

        }
     
        function type(){
            $('#type').hide();

        }

        $(document).ready(function(){

            KTFormControls.init();
            $('#manu_button').click(function(e){
                 e.preventDefault();
                 var Manu_QTY=$('#Manu_QTY').val();
                 var Manu_REFERENCE=$('#Manu_REFERENCE').val();
                 var Manu_TYPE=$('#Manu_TYPE').val();
                 var Bundle_id=$('#Bundle_id').val();
                 var TRANSACTION_TYPE=$('#TRANSACTION_TYPE').val();
                 var Stock=$('#Stock_Record').val();
                 if(parseInt(Manu_QTY)<=0||Manu_QTY=="")
                 {
                    $('#manu_qty').html('The quantity is required');
                    $('#manu_qty').css('display','block');
                    
                    return false;
                 }
                 if(Manu_REFERENCE=="")
                 {
                    $('#manu_ref').html('The reference is required');
                    $('#manu_ref').css('display','block');
                    return false;
                 }
                 if(Manu_TYPE==""){
                    $('#manu_type').html('The type is required');
                    $('#manu_type').css('display','block');
                    return false;
                 }
                   $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                var formdata = new FormData();
                formdata.append('Manu_QTY', Manu_QTY);
                formdata.append('Manu_REFERENCE', Manu_REFERENCE);
                formdata.append('Manu_TYPE', Manu_TYPE);
                formdata.append('Bundle_id', Bundle_id);
                formdata.append('TRANSACTION_TYPE', TRANSACTION_TYPE);
                formdata.append('Stock',Stock);
                 $.ajax({
                        type: 'post',
                        enctype: 'multipart/form-data',
                        url: '/manu/bundle',
                        processData: false,
                        contentType: false,
                        data: formdata,
                        success: function (data) {
                            //KTApp.unblock(formEl);
                             console.log(data)
                          if( data == "1" )  {

                            Swal.fire(" Please input again ");

                          }
                          if( data == "3" )  {

                            Swal.fire(" Please input position number ");

                            }
                          if( data =="2" )
                            //KTApp.unblock(formEl);
                            swal.fire({
                                "title": "",
                                "text": "The application has been successfully submitted!",
                                "type": "success",
                                "confirmButtonClass": 'btn btn-secondary'
                            }).then(result => {
                                if (result.value) {
                                    location.reload();
                                } else {
                                    //
                                }
                            })
                        }
                    });
                 
            })
            $('#packsubut').click(function(e)
            {
                
                e.preventDefault();
                // value empty check
               
                var pack_qty = $("#Qty_num").val();
                var pack_height = $("#Height_num").val();
                var pack_weight = $("#Weight_num").val();
                var pack_length = $("#Length_num").val();
                var pack_width = $("#Width_num").val();
                 
                if(parseInt(pack_qty)<=0||pack_qty=="") {
                    
                    $('#qty1').html('The quantity is required');
                    $('#qty1').css('display','block');
                    
                    return false;
                }
                if(parseInt(pack_weight)<=0 || pack_weight=="") {
                    $('#weight').html('The quantity is required');
                    $('#weight').css('display','block');
                    return false;
                }
                if(parseInt(pack_height)<=0 || pack_height=="") {
                    $('#height').html('The quantity is required');
                    $('#height').css('display','block');
                    return false;
                }
              
                if(parseInt(pack_length)<=0 || pack_length=="") {
                    $('#length').html('The quantity is required');
                    $('#length').css('display','block');
                    return false;        
                }
                if(parseInt(pack_width)<=0 || pack_width=="") {
                    $('#width').css('display','block')
                    $('#width').html('The quantity is required');
                    return false;
                }
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                var formdata = new FormData();
                formdata.append('pack_qty', pack_qty);
                formdata.append('pack_height', pack_height);
                formdata.append('pack_weight', pack_weight);
                formdata.append('pack_length', pack_length);
                formdata.append('pack_width', pack_width);
                formdata.append('bundleid','{{$bundle->id}}');

                $.ajax({
                        type: 'post',
                        enctype: 'multipart/form-data',
                        url: '/package/bundle',
                        processData: false,
                        contentType: false,
                        data: formdata,
                        success: function (data) {
                            //KTApp.unblock(formEl);
                            swal.fire({
                                "title": "",
                                "text": "the bundle package info successfully setted!",
                                "type": "success",
                                "confirmButtonClass": 'btn btn-secondary'
                            }).then(result => {
                                if (result.value) {
                                    location.reload();
                                } else {
                                    //
                                }
                            })
                        }
                    });
            })
            $("#button").click(function(e){

                 e.preventDefault();
                var CHANCE_QTY = $("#CHANCE_QTY").val();
               
                var TYPE = $("#TYPE").val();

                if(CHANCE_QTY == ''){
                    $('#qty').html('The quantity is required');
                    
                    return false;
                }
                if(parseInt(CHANCE_QTY) < "0"){
                    $('#qty').html('The quantity is required');

                }
               
                if(TYPE == ''){
                    $('#type').html('The type is required');
                    return false;
                }


                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                var formdata = new FormData();
                formdata.append('CHANCE_QTY', $("#CHANCE_QTY").val());
                formdata.append('TYPE', $("#TYPE").val());
                formdata.append('bundleid','{{$bundle->id}}');

                $.ajax({
                        type: 'post',
                        enctype: 'multipart/form-data',
                        url: '/post/bundle-items',
                        processData: false,
                        contentType: false,
                        data: formdata,
                        success: function (data) {
                            //KTApp.unblock(formEl);
                            swal.fire({
                                "title": "",
                                "text": "The item has been to the this bundle successfully added!",
                                "type": "success",
                                "confirmButtonClass": 'btn btn-secondary'
                            }).then(result => {
                                if (result.value) {
                                    location.reload();
                                } else {
                                    //
                                }
                            })
                        }
                    });

            });
        });

    </script>
</body>

<!-- end::Body -->

</html>
