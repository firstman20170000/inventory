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
    <style>
     a {
         text-decoration: none;
     }
    </style>
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
                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><span class="kt-menu__link-text">Make to Stock Orders</span><i class="kt-menu__ver-arrow la la-angle-right"></i>

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
                                <h3 class="kt-subheader__title" style="font-size:10pt">
                                    VIEW MTSO# | MTS-{{$stock->MTSO_NUMBER}}-{{$stock->id}}-BP
                                </h3>
                                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
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
                                            <div ><img src="{{asset($bundle->image_url)}}" alt="image" class="img-responsive" style="width:25%;"><span style="letter-spacing: 2px;padding:1em;">{{$bundle->bundle_name}}</span></div>  
                                            
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
                                                    <a href="/view/stock-order/table" class="btn btn-label-brand btn-sm btn-upper">Back</a>
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
                                                                   @if($stock->Status_id==3||$stock->Status_id==4)
                                                                   
                                                                    <a  class="kt-nav__link" >
                                                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                                        <span class="kt-nav__link-text">edit Order</span>
                                                                    </a>
                                                                    @else
                                                                    <a  href="/edit/stock/{{$stock->id}}" class="kt-nav__link" >
                                                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                                        <span class="kt-nav__link-text">edit Order</span>
                                                                    </a>
                                                                    @endif 
                                                            
                                                              
                                                                </li>

                                                               
                                                               
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            <div class="kt-widget__info">
                                                <div class="kt-widget__desc" style="word-break: break-all;">
                                                
                                                    <input type="hidden" id="id" />
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
                                                        <tr>
                                                            <td>Bundle#</td>
                                                            <td>BDL-{{$bundle->bundle_id}}-{{$bundle->id}}-BP</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ORDER QUANTITY</td>
                                                            <td>{{number_format($stock->QTY)}} Units</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Est. TAT</td>
                                                            <td>{{$stock->ORDER_TAT}} Days</td>
                                                        </tr>
                                                        <tr>
                                                            <td>DATE CREATED</td>
                                                            <td><?php
                                                                    $origDate=substr($stock->created_at,0,10);
                                                                    $date = str_replace('-', '/', $origDate );
                                                            ?>{{$date}}</td>
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
                                                            <td>Bundling Fee Per Unit</td>
                                                            <td>${{number_format($bundle->bundling_fee,2)}}</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>GRAND TOTAL</td>
                                                            <td>${{number_format($bundle->bundling_fee*$stock->QTY,2)}}</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>INVOICE</td>
                                                            <td><?php
                                                               $invoice=\App\Invoice::where('order_id',$stock->MTSO_NUMBER)->where('type','mtso')->first();
                                                            ?>
                                                            <?php 
                                                              if($invoice)
                                                              {
                                                                  if($invoice->status_id==0)
                                                                  {
                                                                    ?>
                                                                      <a href='/view/inovice/{{$invoice->id}}'>UNPAID</a>
                                                                   <?php
                                                                  } else if($invoice->status_id==1)
                                                                  {
                                                                ?> <a href='/view/inovice/{{$invoice->id}}'>PAID</a>
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
                                                            ?></td>
                                                           
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
                                                    <a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_1" role="tab">
                                                        <i class="flaticon2-note"></i> Notes
                                                    </a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="tab-content kt-margin-t-20">

                                            <!--Begin:: Tab Content-->
                                            <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                                                <form action="{{Route('user.stock.note')}}" method="post">
                                                @csrf 
                                                <input type="hidden" name="stockid" value="{{$stock->id}}">
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
                                                    @foreach($stocknote as $key => $row)
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

                                            <!--Begin:: manual adjustment Content-->
                                            <div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
                                                <form class="kt-form kt-form--label-right" action="/items_modify" method="post" id="kt_form_1">
                                                    @csrf
                                                    <div class="kt-form__body">
                                                        <div class="kt-section kt-section--first">
                                                            <div class="kt-section__body">
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Quantity</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <input class="form-control" type="number" step="1" min="0" id="CHANCE_QTY"  onchange="qty()" name="CHANCE_QTY" required/>
                                                                        <div id="qty" style="color:red"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Comment</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <input class="form-control" type="text" id="REFERENCE" name="REFERENCE" onchange="ref()" required/>
                                                                        <div id="ref" style="color:red"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Type</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <select class="form-control" id="TYPE" name="TYPE" onchange="type()" required>
                                                                            <option value="">Select Type...</option>
                                                                            <option value="IN">ADD</option>
                                                                            <option value="OUT">SUBSTRACT</option>
                                                                        </select>
                                                                        <div id="type" style="color:red"></div>
                                                                        <input type="hidden" id="Item_id" name="Item_id" value="" />
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
                                                                <button type="button" id="button" class="btn btn-label-brand btn-bold">Change</button>
                                                                <a href="/bundles" class="btn btn-clean btn-bold">Cancel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <!--End:: Tab Content-->

                                            <!--Begin:: Tab Content-->
                                            <div class="tab-pane" id="kt_apps_contacts_view_tab_4" role="tabpanel">
                                                <form class="kt-form kt-form--label-right">
                                                    <div class="kt-form__body">
                                                        <div class="alert alert-solid-danger alert-bold fade show kt-margin-b-20" role="alert">
                                                            <div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
                                                            <div class="alert-text">Configure user passwords to expire periodically.
                                                                <br>Users will need warning that their passwords are going to expire, or they might inadvertently get locked out of the system!</div>
                                                            <div class="alert-close">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="kt-section">
                                                            <div class="kt-section__body">
                                                                <div class="row">
                                                                    <label class="col-xl-3"></label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <h3 class="kt-section__title kt-section__title-sm">Account:</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Username</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <div class="kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input">
                                                                            <input class="form-control" type="text" value="nick84">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                                            <input type="text" class="form-control" value="nick.watson@loop.com" placeholder="Email" aria-describedby="basic-addon1">
                                                                        </div>
                                                                        <span class="form-text text-muted">Email will not be publicly displayed. <a href="#" class="kt-link">Learn more</a>.</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Language</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <select class="form-control">
                                                                            <option>Select Language...</option>
                                                                            <option value="id">Bahasa Indonesia - Indonesian</option>
                                                                            <option value="msa">Bahasa Melayu - Malay</option>
                                                                            <option value="ca">CatalÃ  - Catalan</option>
                                                                            <option value="cs">ÄŒeÅ¡tina - Czech</option>
                                                                            <option value="da">Dansk - Danish</option>
                                                                            <option value="de">Deutsch - German</option>
                                                                            <option value="en" selected="">English</option>
                                                                            <option value="en-gb">English UK - British English</option>
                                                                            <option value="es">EspaÃ±ol - Spanish</option>
                                                                            <option value="eu">Euskara - Basque (beta)</option>
                                                                            <option value="fil">Filipino</option>
                                                                            <option value="fr">FranÃ§ais - French</option>
                                                                            <option value="ga">Gaeilge - Irish (beta)</option>
                                                                            <option value="gl">Galego - Galician (beta)</option>
                                                                            <option value="hr">Hrvatski - Croatian</option>
                                                                            <option value="it">Italiano - Italian</option>
                                                                            <option value="hu">Magyar - Hungarian</option>
                                                                            <option value="nl">Nederlands - Dutch</option>
                                                                            <option value="no">Norsk - Norwegian</option>
                                                                            <option value="pl">Polski - Polish</option>
                                                                            <option value="pt">PortuguÃªs - Portuguese</option>
                                                                            <option value="ro">RomÃ¢nÄƒ - Romanian</option>
                                                                            <option value="sk">SlovenÄina - Slovak</option>
                                                                            <option value="fi">Suomi - Finnish</option>
                                                                            <option value="sv">Svenska - Swedish</option>
                                                                            <option value="vi">Tiáº¿ng Viá»‡t - Vietnamese</option>
                                                                            <option value="tr">TÃ¼rkÃ§e - Turkish</option>
                                                                            <option value="el">Î•Î»Î»Î·Î½Î¹ÎºÎ¬ - Greek</option>
                                                                            <option value="bg">Ð‘ÑŠÐ»Ð³Ð°Ñ€ÑÐºÐ¸ ÐµÐ·Ð¸Ðº - Bulgarian</option>
                                                                            <option value="ru">Ð ÑƒÑÑÐºÐ¸Ð¹ - Russian</option>
                                                                            <option value="sr">Ð¡Ñ€Ð¿ÑÐºÐ¸ - Serbian</option>
                                                                            <option value="uk">Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ° Ð¼Ð¾Ð²Ð° - Ukrainian</option>
                                                                            <option value="he">×¢Ö´×‘Ö°×¨Ö´×™×ª - Hebrew</option>
                                                                            <option value="ur">Ø§Ø±Ø¯Ùˆ - Urdu (beta)</option>
                                                                            <option value="ar">Ø§Ù„Ø¹Ø±Ø¨ÙŠØ© - Arabic</option>
                                                                            <option value="fa">ÙØ§Ø±Ø³ÛŒ - Persian</option>
                                                                            <option value="mr">à¤®à¤°à¤¾à¤ à¥€ - Marathi</option>
                                                                            <option value="hi">à¤¹à¤¿à¤¨à¥à¤¦à¥€ - Hindi</option>
                                                                            <option value="bn">à¦¬à¦¾à¦‚à¦²à¦¾ - Bangla</option>
                                                                            <option value="gu">àª—à«àªœàª°àª¾àª¤à«€ - Gujarati</option>
                                                                            <option value="ta">à®¤à®®à®¿à®´à¯ - Tamil</option>
                                                                            <option value="kn">à²•à²¨à³à²¨à²¡ - Kannada</option>
                                                                            <option value="th">à¸ à¸²à¸©à¸²à¹„à¸—à¸¢ - Thai</option>
                                                                            <option value="ko">í•œêµ­ì–´ - Korean</option>
                                                                            <option value="ja">æ—¥æœ¬èªž - Japanese</option>
                                                                            <option value="zh-cn">ç®€ä½“ä¸­æ–‡ - Simplified Chinese</option>
                                                                            <option value="zh-tw">ç¹é«”ä¸­æ–‡ - Traditional Chinese</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Time Zone</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <select class="form-control">
                                                                            <option data-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
                                                                            <option data-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
                                                                            <option data-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
                                                                            <option data-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
                                                                            <option data-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
                                                                            <option data-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
                                                                            <option data-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
                                                                            <option data-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
                                                                            <option data-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
                                                                            <option data-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
                                                                            <option data-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
                                                                            <option data-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                                                            <option data-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
                                                                            <option data-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
                                                                            <option data-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
                                                                            <option data-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
                                                                            <option data-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
                                                                            <option data-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
                                                                            <option data-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
                                                                            <option data-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
                                                                            <option data-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
                                                                            <option data-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
                                                                            <option data-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
                                                                            <option data-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
                                                                            <option data-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
                                                                            <option data-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
                                                                            <option data-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
                                                                            <option data-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
                                                                            <option data-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
                                                                            <option data-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
                                                                            <option data-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
                                                                            <option data-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
                                                                            <option data-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
                                                                            <option data-offset="0" value="Azores">(GMT) Azores</option>
                                                                            <option data-offset="0" value="Monrovia">(GMT) Monrovia</option>
                                                                            <option data-offset="0" value="UTC">(GMT) UTC</option>
                                                                            <option data-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
                                                                            <option data-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
                                                                            <option data-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
                                                                            <option data-offset="3600" value="London">(GMT+01:00) London</option>
                                                                            <option data-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
                                                                            <option data-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
                                                                            <option data-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
                                                                            <option data-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
                                                                            <option data-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
                                                                            <option data-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
                                                                            <option data-offset="7200" value="Prague">(GMT+02:00) Prague</option>
                                                                            <option data-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
                                                                            <option data-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
                                                                            <option data-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
                                                                            <option data-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
                                                                            <option data-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
                                                                            <option data-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
                                                                            <option data-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
                                                                            <option data-offset="7200" value="Paris">(GMT+02:00) Paris</option>
                                                                            <option data-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
                                                                            <option data-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
                                                                            <option data-offset="7200" value="Bern">(GMT+02:00) Bern</option>
                                                                            <option data-offset="7200" value="Rome">(GMT+02:00) Rome</option>
                                                                            <option data-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
                                                                            <option data-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
                                                                            <option data-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
                                                                            <option data-offset="7200" value="Harare">(GMT+02:00) Harare</option>
                                                                            <option data-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
                                                                            <option data-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
                                                                            <option data-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
                                                                            <option data-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
                                                                            <option data-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
                                                                            <option data-offset="10800" value="Riga">(GMT+03:00) Riga</option>
                                                                            <option data-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
                                                                            <option data-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
                                                                            <option data-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
                                                                            <option data-offset="10800" value="Athens">(GMT+03:00) Athens</option>
                                                                            <option data-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
                                                                            <option data-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
                                                                            <option data-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
                                                                            <option data-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
                                                                            <option data-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
                                                                            <option data-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
                                                                            <option data-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
                                                                            <option data-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
                                                                            <option data-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
                                                                            <option data-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
                                                                            <option data-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
                                                                            <option data-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
                                                                            <option data-offset="14400" value="Baku">(GMT+04:00) Baku</option>
                                                                            <option data-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
                                                                            <option data-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
                                                                            <option data-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
                                                                            <option data-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
                                                                            <option data-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                                                            <option data-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
                                                                            <option data-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
                                                                            <option data-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
                                                                            <option data-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
                                                                            <option data-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
                                                                            <option data-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
                                                                            <option data-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
                                                                            <option data-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
                                                                            <option data-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
                                                                            <option data-offset="21600" value="Astana">(GMT+06:00) Astana</option>
                                                                            <option data-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
                                                                            <option data-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
                                                                            <option data-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
                                                                            <option data-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
                                                                            <option data-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
                                                                            <option data-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
                                                                            <option data-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
                                                                            <option data-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
                                                                            <option data-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                                            <option data-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
                                                                            <option data-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
                                                                            <option data-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
                                                                            <option data-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                                                            <option data-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
                                                                            <option data-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
                                                                            <option data-offset="28800" value="Perth">(GMT+08:00) Perth</option>
                                                                            <option data-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
                                                                            <option data-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
                                                                            <option data-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
                                                                            <option data-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
                                                                            <option data-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
                                                                            <option data-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
                                                                            <option data-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
                                                                            <option data-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
                                                                            <option data-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
                                                                            <option data-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
                                                                            <option data-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
                                                                            <option data-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
                                                                            <option data-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
                                                                            <option data-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
                                                                            <option data-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
                                                                            <option data-offset="36000" value="Guam">(GMT+10:00) Guam</option>
                                                                            <option data-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
                                                                            <option data-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
                                                                            <option data-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
                                                                            <option data-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
                                                                            <option data-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
                                                                            <option data-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
                                                                            <option data-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
                                                                            <option data-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
                                                                            <option data-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
                                                                            <option data-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-group-last row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Communication</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <div class="kt-checkbox-inline">
                                                                            <label class="kt-checkbox">
                                                                                <input type="checkbox" checked=""> Email
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="kt-checkbox">
                                                                                <input type="checkbox" checked=""> SMS
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="kt-checkbox">
                                                                                <input type="checkbox"> Phone
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                                        <div class="kt-section kt-section--first">
                                                            <div class="kt-section__body">
                                                                <div class="row">
                                                                    <label class="col-xl-3"></label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <h3 class="kt-section__title kt-section__title-sm">Security:</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Login verification</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <button type="button" class="btn btn-label-brand btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Setup login verification</button>
                                                                        <span class="form-text text-muted">
                                                                            After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
                                                                            <a href="#" class="kt-link">Learn more</a>.
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Password reset verification</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <div class="kt-checkbox-single">
                                                                            <label class="kt-checkbox">
                                                                                <input type="checkbox"> Require personal information to reset your password.
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                        <span class="form-text text-muted">
                                                                            For extra security, this requires you to confirm your email or phone number when you reset your password.
                                                                            <a href="#" class="kt-link">Learn more</a>.
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row kt-margin-t-10 kt-margin-b-10">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <button type="button" class="btn btn-label-danger btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Deactivate your account ?</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
                                                    <div class="kt-form__actions">
                                                        <div class="row">
                                                            <div class="col-xl-3"></div>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <a href="#" class="btn btn-label-brand btn-bold">Save changes</a>
                                                                <a href="#" class="btn btn-clean btn-bold">Cancel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <!--End:: Tab Content-->

                                            <!--Begin:: Tab Content-->
                                            <div class="tab-pane" id="kt_apps_contacts_view_tab_5" role="tabpanel">
                                                <form class="kt-form kt-form--label-right">
                                                    <div class="kt-form__body">
                                                        <div class="kt-section kt-section--first">
                                                            <div class="kt-section__body">
                                                                <div class="row">
                                                                    <label class="col-xl-3"></label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <h3 class="kt-section__title kt-section__title-sm">Setup Email Notification:</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-group-sm row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Email Notification</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <span class="kt-switch">
                                                                            <label>
                                                                                <input type="checkbox" checked="checked" name="email_notification_1">
                                                                                <span></span>
                                                                            </label>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-group-last row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Send Copy To Personal Email</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <span class="kt-switch">
                                                                            <label>
                                                                                <input type="checkbox" name="email_notification_2">
                                                                                <span></span>
                                                                            </label>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                                        <div class="kt-section kt-section--first">
                                                            <div class="kt-section__body">
                                                                <div class="row">
                                                                    <label class="col-xl-3"></label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <h3 class="kt-section__title kt-section__title-sm">Activity Related Emails:</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">When To Email</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <div class="kt-checkbox-list">
                                                                            <label class="kt-checkbox">
                                                                                <input type="checkbox"> You have new notifications.
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="kt-checkbox">
                                                                                <input type="checkbox"> You're sent a direct message
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="kt-checkbox">
                                                                                <input type="checkbox" checked="checked"> Someone adds you as a connection
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-group-last row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">When To Escalate Emails</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <div class="kt-checkbox-list">
                                                                            <label class="kt-checkbox kt-checkbox--brand">
                                                                                <input type="checkbox"> Upon new order.
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="kt-checkbox kt-checkbox--brand">
                                                                                <input type="checkbox"> New membership approval
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="kt-checkbox kt-checkbox--brand">
                                                                                <input type="checkbox" checked="checked"> Member registration
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                                        <div class="kt-section kt-section--first">
                                                            <div class="kt-section__body">
                                                                <div class="row">
                                                                    <label class="col-xl-3"></label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <h3 class="kt-section__title kt-section__title-sm">Updates From Keenthemes:</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-xl-3 col-lg-3 col-form-label">Email You With</label>
                                                                    <div class="col-lg-9 col-xl-6">
                                                                        <div class="kt-checkbox-list">
                                                                            <label class="kt-checkbox">
                                                                                <input type="checkbox"> News about Metronic product and feature updates
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="kt-checkbox">
                                                                                <input type="checkbox"> Tips on getting more out of Keen
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="kt-checkbox">
                                                                                <input type="checkbox" checked="checked"> Things you missed since you last logged into Keen
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="kt-checkbox">
                                                                                <input type="checkbox" checked="checked"> News about Metronic on partner products and other services
                                                                                <span></span>
                                                                            </label>
                                                                            <label class="kt-checkbox">
                                                                                <input type="checkbox" checked="checked"> Tips on Metronic business products
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
                                                    <div class="kt-form__actions">
                                                        <div class="row">
                                                            <div class="col-xl-3"></div>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <a href="#" class="btn btn-label-brand btn-bold">Save changes</a>
                                                                <a href="#" class="btn btn-clean btn-bold">Cancel</a>
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

            return {
                // public functions
                init: function() {
                    demo1();

                }
            };
        }();





        function qty(){
            $('#qty').hide();

        }
        function ref(){
            $('#ref').hide();

        }
        function type(){
            $('#type').hide();

        }

        $(document).ready(function(){

            KTFormControls.init();


            $("#button").click(function(e){

                 e.preventDefault();
                var CHANCE_QTY = $("#CHANCE_QTY").val();
                var REFERENCE = $("#REFERENCE").val();
                var TYPE = $("#TYPE").val();

                if(CHANCE_QTY == ''){
                    $('#qty').html('The quantity is required');
                    return false;
                }
                if(parseInt(CHANCE_QTY) < "0"){
                    $('#qty').html('The quantity is required');

                }
                if(REFERENCE == ''){
                    $('#ref').html('The reference is required');
                    return false;
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
                formdata.append('REFERENCE', $("#REFERENCE").val());
                formdata.append('TYPE', $("#TYPE").val());
                formdata.append('TRANSACTION_TYPE', $("#TRANSACTION_TYPE").val());
                formdata.append('Item_id', $("#Item_id").val());

                $.ajax({
                        type: 'post',
                        enctype: 'multipart/form-data',
                        url: '/items_modify',
                        processData: false,
                        contentType: false,
                        data: formdata,
                        success: function (data) {

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

            });
        });

    </script>
</body>

<!-- end::Body -->

</html>
