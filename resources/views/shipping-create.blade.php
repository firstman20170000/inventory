<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->

<head>

    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href="../../../../">

    <!--end::Base Path -->
    <meta charset="utf-8" />
    <title>Vendor Create shipping</title>
    <meta name="description" content="Initialized with local json data">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="./assets/css/demo1/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" /> @include('assets.css')
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
                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="/" class="kt-menu__link"><span class="kt-menu__link-text">FBA SHIPMENTS</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>

                                </li>
                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="/" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">DROPSHIP</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>

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
										FBA Shipment
									</h3>
                                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                                <div class="kt-subheader__group" id="kt_subheader_search">
                                    <span class="kt-subheader__desc" id="kt_subheader_total">
											Enter FBA Shipment details and submit </span>
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
                                                <a class="kt-wizard-v1__nav-item" href="/create/shipping/{{$bundle->id}}" data-ktwizard-type="step" data-ktwizard-state="current">
                                                    <div class="kt-wizard-v1__nav-body">
                                                        <div class="kt-wizard-v1__nav-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon id="Shape" points="0 0 24 0 24 24 0 24" />
                                                                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="kt-wizard-v1__nav-label">
                                                            1. Packing details
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="kt-wizard-v1__nav-item" href="/create/shipping/{{$bundle->id}}" data-ktwizard-type="step">
                                                    <div class="kt-wizard-v1__nav-body">
                                                        <div class="kt-wizard-v1__nav-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect id="bound" x="0" y="0" width="24" height="24" />
                                                                    <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" id="check" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                    <path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" id="Combined-Shape" fill="#000000" />
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="kt-wizard-v1__nav-label">
                                                            2. Shippinng Plan Details
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="kt-wizard-v1__nav-item" href="/create/shipping/{{$bundle->id}}" data-ktwizard-type="step">
                                                    <div class="kt-wizard-v1__nav-body">
                                                        <div class="kt-wizard-v1__nav-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect id="bound" x="0" y="0" width="24" height="24" />

                                                                    <path d="M4,6 L20,6 C21.1045695,6 22,6.8954305 22,8 L22,20 C22,21.1045695 21.1045695,22 20,22 L4,22 C2.8954305,22 2,21.1045695 2,20 L2,8 C2,6.8954305 2.8954305,6 4,6 Z M18,16 C19.1045695,16 20,15.1045695 20,14 C20,12.8954305 19.1045695,12 18,12 C16.8954305,12 16,12.8954305 16,14 C16,15.1045695 16.8954305,16 18,16 Z" id="Combined-Shape" fill="#000000" />
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="kt-wizard-v1__nav-label">
                                                            3. Shipping Method
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="kt-wizard-v1__nav-item" href="/create/shipping/{{$bundle->id}}" data-ktwizard-type="step">
                                                    <div class="kt-wizard-v1__nav-body">
                                                        <div class="kt-wizard-v1__nav-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect id="bound" x="0" y="0" width="24" height="24" />
                                                                    <rect id="Rectangle-2" fill="#000000" opacity="0.3" x="2" y="2" width="10" height="12" rx="2" />
                                                                    <path d="M4,6 L20,6 C21.1045695,6 22,6.8954305 22,8 L22,20 C22,21.1045695 21.1045695,22 20,22 L4,22 C2.8954305,22 2,21.1045695 2,20 L2,8 C2,6.8954305 2.8954305,6 4,6 Z M18,16 C19.1045695,16 20,15.1045695 20,14 C20,12.8954305 19.1045695,12 18,12 C16.8954305,12 16,12.8954305 16,14 C16,15.1045695 16.8954305,16 18,16 Z" id="Combined-Shape" fill="#000000" />
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="kt-wizard-v1__nav-label">
                                                            4.Barcodes & Labels
                                                        </div>
                                                    </div>
                                                </a>

                                                <a class="kt-wizard-v1__nav-item" href="/create/shipping/{{$bundle->id}}" data-ktwizard-type="step">
                                                    <div class="kt-wizard-v1__nav-body">
                                                        <div class="kt-wizard-v1__nav-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--xl">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect id="bound" x="0" y="0" width="24" height="24" />
                                                                    <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" id="Combined-Shape" fill="#000000" />
                                                                    <circle id="Oval" fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="kt-wizard-v1__nav-label">
                                                            5. Review and Submit
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
                                            <input type="hidden" name="bundleid" id="bundleid" value="{{$bundle->id}}">
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
                                                                                                <option value="{{$row->id}}" data-id="{{$row->qty_in_mc}}">{{$row->qty_in_mc}}Units Per Cartoon</option>
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
                                                                                            <input class="form-control" type="text" name="ship_qty_tot" id="ship_qty_tot" value="" style="width:0px;height:0px;opacity:0">
                                                                                            <input class="form-control" type="hidden" name="bundle_tot" id="bundle_tot">
                                                                                        </div>
                                                                                        <div class="col-xl-3 col-lg-3">
                                                                                            <a class="btn btn-primary" id="qtyadd" style="color:white;cursor:pointer;">add</a>
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
                                                                                        <td class="text-center">remove</td>

                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id="package">

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

                                            <!--end: Form Wizard Step 1-->

                                            <!--begin: Form Wizard Step 2-->
                                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
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
                                                                                <label for="FBA_Shipment_id">FBA SHIPMENT ID</label>
                                                                                <input type="text" class="form-control" name="FBA_Shipment_id" id="FBA_Shipment_id">

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group">
                                                                                <label for="FBA_asin">ASIN</label>
                                                                                <input type="text" class="form-control" name="FBA_asin" id="FBA_asin">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--end: Form Wizard Step 2-->

                                            <!--begin: Form Wizard Step 3-->
                                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                                <div class="kt-heading kt-heading--md">Shipping Method</div>
                                                <div class="kt-form__section kt-form__section--first">
                                                    <div class="kt-wizard-v1__form">
                                                        <div class="row">
                                                            <div class="col-xl-12 row">

                                                                <label class="form-control-label col-xl-3 col-lg-3" for="Bundle_Width">Method</label>
                                                                <select class="form-control col-xl-9 col-lg-9" name="ship_type" id="ship_type">
                                                                    <?php
                                                                            $status=\App\Shippingtype::all();

                                                                    ?>
                                                                        @foreach($metype as $key => $row)
                                                                            <option value="{{$row->id}}">{{$row->Type_Name}}</option>
                                                                        @endforeach

                                                                </select>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--begin: Form Wizard Step 4-->

                                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                                <div class="kt-heading kt-heading--md">Upload Barcodes and Labels (PDF Only)</div>
                                                <div class="kt-form__section kt-form__section--first">
                                                    <div class="kt-wizard-v1__form">
                                                        <div class="form-group row">

                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="row">
                                                                    <!-- <input type="file" id="file" name="files[]"  multiple="">
                                                                        <input type="hidden" class="form-control" id="file_url" placeholder="" name="file_url"> -->
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <label class="col-form-label">Barcodes (FNSKU)</label>
                                                                    </div>
                                                                    <div class="col-md-8 col-lg-8">
                                                                        <input type="file" id="barcode" class="form-control form-control-warning m-input" name="barcode" enctype="multipart/form-data" multiple>
                                                                        <br/>
                                                                        <input type="hidden" class="form-control" id="file_url" placeholder="" name="file_url">
                                                                        <br/>

                                                                        <div id="selectedFiles"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <!-- <input type="file" id="file" name="files[]"  multiple="">
                                                                        <input type="hidden" class="form-control" id="file_url" placeholder="" name="file_url"> -->
                                                                    <div class="col-md-2 col-lg-2">
                                                                        <label class="col-form-label">Shipping Labels<span></span></label>
                                                                    </div>
                                                                    <div class="col-md-8 col-lg-8">
                                                                        <input type="file" id="shiplabel" class="form-control form-control-warning m-input" name="shiplabel" enctype="multipart/form-data" multiple>
                                                                        <br/>
                                                                        <input type="hidden" class="form-control" id="shiplabel" placeholder="" name="shiplabel">
                                                                        <br/>

                                                                        <div id="selectedFiles"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <!--end: Form Wizard Step 4-->

                                            <!--begin: Form Wizard Step 5-->
                                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                                <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
                                                <div class="kt-form__section kt-form__section--first">
                                                    <div class="kt-wizard-v1__review">
                                                        <div class="kt-wizard-v1__review-item">
                                                            <div class="kt-wizard-v1__review-title">
                                                                Packing Details
                                                            </div>
                                                            
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        Master Carton QTY:
                                                                    </div>
                                                                    <div class="col-md-10">

                                                                        <p style="word-break: break-all;" id="qty"></p>

                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        Shipment Quantity:
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p style="word-bk: break-all;" id="tot_bundle_co"></p>

                                                                    </div>

                                                                </div>
                                                                
                                                        </div>
                                                        <div class="kt-wizard-v1__review-item">
                                                            <div class="kt-wizard-v1__review-title">
                                                                FBA Shipping Plan Details
                                                            </div>
                                                            <div class="kt-wizard-v1__review-content">
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        FBA SHIPMENT ID
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p id="fba_shipment_id"></p>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        ASIN:
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p id="fba_asin"></p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="kt-wizard-v1__review-item">
                                                            <div class="kt-wizard-v1__review-title">
                                                                Shipping Method
                                                            </div>
                                                            <div class="kt-wizard-v1__review-content">
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        Method:
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p id="ship_method"></p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- <div class="kt-wizard-v1__review-item">
																<div class="kt-wizard-v1__review-title">
																	File
																</div>
																<div class="kt-wizard-v1__review-content">
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                           Files:
                                                                        </div>
                                                                        <div class="col-md-8">

                                                                           <p id="filenames"></p>
                                                                        </div>

                                                                    </div>

																</div>
															</div> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <!--end: Form Wizard Step 5-->

                                            <!--begin: Form Actions -->
                                            <div class="kt-form__actions">
                                                <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                                    Previous
                                                </div>

                                                <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                                                    Next Step
                                                </div>
                                                <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                                                    ADD
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
    <script src="./assets/js/demo1/pages/custom/contacts/add-shipping.js" type="text/javascript"></script>

    <script>
        $(document).ready(function() {
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
                    formdata.append('bundle_id', {{$bundle->id}});
                    formdata.append('packageid',seleid);
                    $.ajax({
                        type: 'post',
                        enctype: 'multipart/form-data',
                        url: '/check/validation',
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
                                var dispmessage="There are only {{$bundle->bundles_in_stock}}units in stock of this Bundle in stock. Please Adjust the quantity of this order.";
                              
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