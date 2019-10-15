<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->

<head>

    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href="../../../../">

    <!--end::Base Path -->
    <meta charset="utf-8" />
    <title>Vendor Create Dropshipping</title>
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
										New Dropship Order
									</h3>
                                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                                <div class="kt-subheader__group" id="kt_subheader_search">
                                    <span class="kt-subheader__desc" id="kt_subheader_total">
											Enter Order details and submit </span>
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
                                                <a class="kt-wizard-v1__nav-item" href="/create/dropship" data-ktwizard-type="step" data-ktwizard-state="current">
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
                                                            1. Dropship Order products
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="kt-wizard-v1__nav-item" href="/create/dropship" data-ktwizard-type="step">
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
                                                            2. shipping address
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="kt-wizard-v1__nav-item" href="/create/dropship" data-ktwizard-type="step">
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
                                              

                                                <a class="kt-wizard-v1__nav-item" href="/create/dropship" data-ktwizard-type="step">
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
                                                            4. Review and Submit
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
                                                <div class="kt-heading kt-heading--md">Dropship Products</div>
                                                <div class="kt-section kt-section--first">
                                                    <div class="kt-wizard-v1__form">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="kt-section__body">
                                                                    <div class="form-group row">

                                                                        <div class="col-lg-11 col-xl-8">
                                                                            <div class="row">
                                                                                <div class="col-lg-8">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Bundle Name</label>
                                                                                        <div class="col-xl-9 col-lg-6">
                                                                                            <select class="form-control" name="bundle" id="bundle">
                                                                                                @foreach($bundle as $key=>$row)
                                                                                                <option value="{{$row->id}}" data-id="{{$row->bundle_name}}">{{$row->bundle_name}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-xl-2 col-lg-2 col-form-label">Qty</label>
                                                                                        <div class="col-xl-7 col-lg-7">
                                                                                            <input class="form-control" type="number" min=1 step=1 id="ship_QTY" name="ship_QTY" id="ship_QTY">
                                                                                            <input class="form-control" type="text" name="ship_qty_tot" id="ship_qty_tot"  style="width:0px;height:0px;opacity:0">
                                                                                            
                                                                                        </div>
                                                                                        <div class="col-xl-3 col-lg-3">
                                                                                            <a class="btn btn-primary" id="qtyadd" style="color:white;cursor:pointer;">add</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                   

                                                                    <div class="form-group row text-center">

                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                                <thead>
                                                                                    <tr data-bundle-id=""> 
                                                                                        <td ></td>
                                                                                        <td class="text-center">Name</td>
                                                                                        <td class="text-center">Bundle#</td>
                                                                                        <td class="text-center">Qty</td>
                                                                                        <td class="text-center">remove</td>

                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id="dropship">

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
                                                                            <h3 class="kt-section__title kt-section__title-md">Shipping Address</h3>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group">
                                                                                <label for="Fname">First Name</label>
                                                                                <input type="text" class="form-control" name="Fname" id="Fname" placeholder="william">
                                                                                <span style="color:grey">please input your first name </span>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group">
                                                                                <label for="Lname">Last Name</label>
                                                                                <input type="text" class="form-control" value="" name="Lname" id="Lname" placeholder="merci">
                                                                                <span style="color:grey">please input your Address</span>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-xl-12">
                                                                            <div class="form-group">
                                                                                <label for="FBA_Shipment_id">Address Line1</label>
                                                                                <input type="text" class="form-control" name="address1" id="address1" placeholder="Address Line1">
                                                                                <span style="color:grey">please input your Address </span>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-xl-12">
                                                                            <div class="form-group">
                                                                                <label for="FBA_Shipment_id">Address Line2</label>
                                                                                <input type="text" class="form-control" name="address2" id="address2" placeholder="Address Line2">
                                                                                <span style="color:grey">please input your Address </span>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group">
                                                                                <label for="postcode">Post Code</label>
                                                                                <input type="text" class="form-control" name="postcode" id="postcode" placeholder="2000">
                                                                                <span style="color:grey">please enter your Postcode </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group">
                                                                                <label for="city">City</label>
                                                                                <input type="text" class="form-control" name="city" id="city" placeholder="London">
                                                                                <span style="color:grey">please enter your city </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group">
                                                                                <label for="state">State</label>
                                                                                <select name="state" id="state1" class="form-control">
                                                                                </select>
                                                                                <select name="state" id="state" class="form-control" style="display:none;">
  <option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
  <option value="CT">Connecticut</option>
  <option value="DE">Delaware</option>
  <option value="FL">Florida</option>
  <option value="GA">Georgia</option>
  <option value="HI">Hawaii</option>
  <option value="ID">Idaho</option>
  <option value="IL">Illinois</option>
  <option value="IN">Indiana</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="ME">Maine</option>
  <option value="MD">Maryland</option>
  <option value="MA">Massachusetts</option>
  <option value="MI">Michigan</option>
  <option value="MN">Minnesota</option>
  <option value="MS">Mississippi</option>
  <option value="MO">Missouri</option>
  <option value="MT">Montana</option>
  <option value="NE">Nebraska</option>
  <option value="NV">Nevada</option>
  <option value="NH">New Hampshire</option>
  <option value="NJ">New Jersey</option>
  <option value="NM">New Mexico</option>
  <option value="NY">New York</option>
  <option value="NC">North Carolina</option>
  <option value="ND">North Dakota</option>
  <option value="OH">Ohio</option>
  <option value="OK">Oklahoma</option>
  <option value="OR">Oregon</option>
  <option value="PA">Pennsylvania</option>
  <option value="RI">Rhode Island</option>
  <option value="SC">South Carolina</option>
  <option value="SD">South Dakota</option>
  <option value="TN">Tennessee</option>
  <option value="TX">Texas</option>
  <option value="UT">Utah</option>
  <option value="VT">Vermont</option>
  <option value="VA">Virginia</option>
  <option value="WA">Washington</option>
  <option value="WV">West Virginia</option>
  <option value="WI">Wisconsin</option>
  <option value="WY">Wyoming</option>
</select>
<span style="color:grey">please select state</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group">
                                                                                <label for="FBA_asin">Country</label>
                                                                                <select id="country" name="country" class="form-control">
                <option value="">please select country</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
            <span style="color:grey">please select your country </span>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group">
                                                                                <label for="telephone">telephone</label>
                                                                                <input type="text" class="form-control" name="telephone" id="telephone" placeholder="(+86)-(9834349)">
                                                                                <span style="color:grey">please input your telephone </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                          
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                      <div class="col-xl-12">
                                                                           <div class="form-group">
                                                                                <label for="ref">reference</label>
                                                                                <input type="text" class="form-control" name="ref" id="ref" placeholder="reference">
                                                                                <span style="color:grey">please input your reference </span>
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
                                                                            $ship_type=[];
                                                                            $index=0;
                                                                            foreach($status as $key => $row)
                                                                            {
                                                                                $type=\App\Shippingmethod::where('type_id',$row->id)->get();
                                                                                if(count($type)>0){
                                                                                    $ship_type[$index]=$row;
                                                                                    $index++;
                                                                                }
                                                                            }

                                                                    ?>
                                                                        @foreach($ship_type as $key => $row)
                                                                            <option value="{{$row->id}}">{{$row->Type_Name}}</option>
                                                                        @endforeach

                                                                </select>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--begin: Form Wizard Step 4-->

                                          
                                            <!--end: Form Wizard Step 4-->

                                            <!--begin: Form Wizard Step 5-->
                                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                                <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
                                                <div class="kt-form__section kt-form__section--first">
                                                    <div class="kt-wizard-v1__review">
                                                        <div class="kt-wizard-v1__review-item">
                                                            <div class="kt-wizard-v1__review-title">
                                                                Dropship Products
                                                            </div>
                                                            
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        Total bundle QTY:
                                                                    </div>
                                                                    <div class="col-md-10">

                                                                        <p style="word-break: break-all;" id="qty"></p>

                                                                    </div>

                                                                </div>
                                                               
                                                                
                                                        </div>
                                                        <div class="kt-wizard-v1__review-item">
                                                            <div class="kt-wizard-v1__review-title">
                                                                Shipping address
                                                            </div>
                                                            <div class="kt-wizard-v1__review-content">
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        First Name
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p id="shi_fname"></p>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        Last Name:
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p id="shi_lname"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        Address Line1:
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p id="addr_line1"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        Address Line2:
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p id="addr_line2"></p>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        Post Code:
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p id="Post_code_lb"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        City:
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p id="city_lb"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        state:
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p id="state_lb"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        country:
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p id="country_lb"></p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        telephone:
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p id="telephone_lb"></p>
                                                                    </div>
                                                                </div>
                                                                 <div class="row">
                                                                    <div class="col-md-2">
                                                                        reference:
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p id="ref_lb"></p>
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
    <script src="./assets/js/demo1/pages/custom/contacts/add-dropship.js" type="text/javascript"></script>

    <script>
        $(document).ready(function() {
            $('#qtyadd').click(function() {
                var ship_QTY = $('#ship_QTY').val();
                var bundle_id=$('#bundle').val();
                if (ship_QTY == "" || parseInt(ship_QTY) < 1) {
                    swal.fire({
                        "title": "",
                        "text": "please input the quanity of the cartoon correctly!",
                        "type": "warning",
                        "confirmButtonClass": 'btn btn-secondary'
                    })
                    return 1;
                } else {
                    var prevamount=0;
                    $('#dropship').find("tr").each(function()
                    {
                           var bundleid=$(this).attr("data-bundle-id"); 
                           if(bundle_id==bundleid) {
                               prevamount=prevamount+parseInt($(this).find(".bundleqty").html())
                           }
                    })
                    var tot=prevamount+parseInt(ship_QTY);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var formdata = new FormData();
                    formdata.append('bundle_id',bundle_id);
                    formdata.append('tot',tot);
                    $.ajax({
                        type: 'post',
                        enctype: 'multipart/form-data',
                        url: '/check/dropship/validation',
                        processData: false,
                        contentType: false,
                        data: formdata,
                        success: function(data) {
                            var res = JSON.parse(data);
                            // output result 
                            console.log(res);
                            var returnres = res.result;
                            var bundle=res.data;
                            if (returnres == 'error') {
                                var dispmessage="This order require "+tot+" "+bundle.bundle_name+" bundle but the bundle have "+bundle.bundles_in_stock+" bundle in the stock";
                                swal.fire({
                                    "title": "",
                                    "text": dispmessage,
                                    "type": "warning",
                                    "confirmButtonClass": 'btn btn-secondary'
                                })    
                            } else if(returnres == 'success') {
                                var tr="<tr data-bundle-id=\""+bundle.id+"\">";
                                tr+="<td><span style='width:130px'><div class='kt-user-card-v2 kt-user-card-v2--uncircle'><div class='kt-user-card-v2__pic'><img src=\""+bundle.image_url+"\"></div></div></span></td>"
                                tr+="<td class=\"bundlename\">"+bundle.bundle_name+"</td>"
                                tr+="<td class=\"bundleid\">BDL-"+bundle.bundle_id+"-"+bundle.id+"-BP</td>";
                                tr+="<td class=\"bundleqty\">"+parseInt(ship_QTY)+"</td>";
                                
                                tr+="<td><a class=\"packdel\" style=\"cursor:pointer\"><i class=\"la la-remove\"></i></a>";
                                tr+="</td>";
                                tr+="</tr>";
                                $('#dropship').append(tr);
                             
                                var shipqty=$('#ship_qty_tot').val();
                                if(shipqty==""){
                                    shipqty=0
                                } else {
                                    shipqty=parseInt($('#ship_qty_tot').val());
                                }
                                var order_tot=shipqty+parseInt(ship_QTY);
                                $('#ship_qty_tot').val(order_tot);

                            }
                        }
                    });

                }

            })
            $(document).on('change','#country',function(){
            
                var countryname=$(this).val();
                if(countryname=='United States')
                {
                   $('#state1').css('display','none');
                   $('#state').css('display','block');
                } else {
                      $('#state1').css('display','block');
                      $('#state').css('display','none');
                }
            });
            $(document).on('click','.packdel',function(){
                var tr=$(this).parents("tr");
                var qty=tr.find(".bundleqty").html();
                
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