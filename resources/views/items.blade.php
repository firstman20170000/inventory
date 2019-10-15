<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->

<head>
    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href="../../../">
    <!--end::Base Path -->
    <meta charset="utf-8" />
    <title>Items</title>
    <meta name="description" content="Initialized with local json data">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('assets.css')

</head>
<!-- end::Head -->
<!-- begin::Body -->

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="demo1/index.html">
                <img alt="Logo" src="./assets/media/logos/logo-light.png" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
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


                <!-- Dont touch in this -->

                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!-- begin:: Subheader -->

                    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                        <div class="kt-container  kt-container--fluid ">
                            <div class="kt-subheader__main">
                                <h3 class="kt-subheader__title">
                                    INVENTORY
                                </h3>
                                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                                <div class="kt-subheader__group" id="kt_subheader_search">
                                    <span class="kt-subheader__desc" id="kt_subheader_total">
                                    </span>
                                </div>
                            </div>
                            <div class="kt-subheader__toolbar">

                                <div class="btn-group">
                                    <button type="button" class="btn btn-brand btn-bold" onclick="insert()">
                                        ADD ITEM
                                    </button>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- end:: Subheader -->
                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                        All Items
                                    </h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-wrapper">

                                        <!--begin: Search Form -->
                                        <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">


                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                                <div class="input-group-append">
                                                    <button class="btn btn-secondary" type="button">Go!</button>
                                                </div>
                                            </div>


                                        </div>
                                        <!--end: Search Form -->
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__body">

                            </div>
                            <div class="kt-portlet__body kt-portlet__body--fit">
                                <!--begin: Datatable -->
                                <div class="kt-datatable" id="kt_apps_user_list_datatable">

                                </div>
                                <!--end: Datatable -->
                            </div>
                        </div>
                    </div>
                    <!-- end:: Content -->
                </div>
                <!-- begin:: Footer -->

                <!-- end:: Footer -->
            </div>
        </div>
    </div>
    <!-- end 3 DIV -->
    <!-- end:: Page -->

    <!-- begin::Scrolltop -->
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>
    <!-- end::Scrolltop -->
    <!-- begin::Sticky Toolbar -->

    <!-- end::Sticky Toolbar -->
    <!-- begin::Demo Panel -->

    <!-- end::Demo Panel -->

    @include('assets.js')

    <script src="./assets/js/demo1/pages/crud/metronic-datatable/base/data-vendor-items.js" type="text/javascript"></script>
    <!--end::Page Scripts -->
</body>
<!-- end::Body -->

</html>
