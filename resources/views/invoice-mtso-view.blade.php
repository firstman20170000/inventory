<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="../../../../"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>Invoice</title>
        <meta name="description" content="Invoice example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->

        
                    <!--begin::Page Custom Styles(used by this page) -->
                             <link href="./assets/css/demo1/pages/invoices/invoice-1.css" rel="stylesheet" type="text/css" />
                        <!--end::Page Custom Styles -->
        
        <!--begin:: Global Mandatory Vendors -->
<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->
@include('assets.css')
<!--begin:: Global Optional Vendors -->

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Styles(used by all pages) -->
                    
                    <link href="./assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        
<link href="./assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
<link href="./assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
<link href="./assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
<link href="./assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />        <!--end::Layout Skins -->

        <link rel="shortcut icon" href="./assets/media/logos/favicon.ico" />
   <style>
     @media print { 
               
               .dropdown-inline{
                  visibility: hidden; 
               }
            }
        .kt-invoice__desc
        {
           color:black!important;
        }
        .kt-invoice__title
        {
            color:black!important;
        }
        .kt-invoice__text
        {
           color:black!important;      
        }
        .kt-invoice__subtitle
        {
          color:black!important;      
        }
   </style>
    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >

       
    	<!-- begin:: Page -->
	<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
	<div class="kt-header-mobile__logo">
		<a href="demo1/index.html">
			<img alt="Logo" src="./assets/media/logos/logo-light.png"/>
		</a>
	</div>
	<div class="kt-header-mobile__toolbar">
					<button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
		
					<button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
				
		<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
	</div>
</div>
<!-- end:: Header Mobile -->	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
							<!-- begin:: Aside -->

<!-- Uncomment this to display the close button of the panel
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
-->

@include('layouts.sidebar')
			
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
				<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " >
			
<!-- begin:: Header Menu -->
<!-- Uncomment this to display the close button of the panel
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
-->

<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
	

</div>
<!-- end:: Header Menu -->
		<!-- begin:: Header Topbar -->
<div class="kt-header__topbar">
     @include('layouts.userbar')
<!--end: User Bar -->	
</div>
<!-- end:: Header Topbar --></div>
<!-- end:: Header -->
				<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
											
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
				
                Invoice |</h3>

                            <span class="kt-subheader__separator kt-hidden"></span>
              <span class="kt-invoice__text">INV-{{$invoice->invoice_number}}-{{$invoice->id}}-BP</span>
                    </div>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
            <div class="dropdown dropdown-inline" style="float:right">
                                                        <a href="#" class="btn btn-brand btn-sm btn-upper dropdown-toggle" id="dpname" data-toggle="dropdown">
                                                            Status
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                                                            <!--begin::Nav-->
                                                            <ul class="kt-nav" id="noprint">
                                                                
                                                             
                                                                <li class="kt-nav__separator"></li>
                                                                <li class="kt-nav__item">
                                                                    <a data-stid="0" class="kt-nav__link">
                                                                        <span class="kt-nav__link-text">UNPAID</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__separator"></li>
                                                                <li class="kt-nav__item">
                                                                    <a data-stid="1" class="kt-nav__link">
                                                                        <span class="kt-nav__link-text">PAID</span>
                                                                    </a>
                                                                </li>
                                                               
                                                            </ul>

                                                            <!--end::Nav-->
                                                        </div>
                                                    </div>             
                
               
            </div>
        </div>
    </div>
</div>
<!-- end:: Subheader -->
					
					<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="kt-invoice-1">
            <div class="kt-invoice__head" >
                <div class="kt-invoice__container">
                    <div class="kt-invoice__brand">
						<h1 class="kt-invoice__title">INVOICE</h1>
						
                        <div href="#" class="kt-invoice__logo">
							<a href="#"><img src="./assets/media/company-logos/logo_client_white.png"></a>

							<span class="kt-invoice__desc">
								<span class="ml-auto" style="width:40%;">{{$vendor_detail['vendor_details']}}</span>
								
							</span>
						</div>
					</div>
					
                    <div class="kt-invoice__items">
                        <div class="kt-invoice__item">
                            <span class="kt-invoice__subtitle">DATE</span>
                            <span class="kt-invoice__text">  <?php
                                                                     $t=$invoice->created_at;
                                                                     $crtime=substr($t,0,10);
                                                                     $date=date_create($crtime);
                                                                     echo date_format($date,"Y/m/d");
                                                                ?></span>
                        </div>
                        <div class="kt-invoice__item">
                            <span class="kt-invoice__subtitle">INVOICE #.</span>
                            <span class="kt-invoice__text">INV-{{$invoice->invoice_number}}-{{$invoice->id}}-BP</span>
                        </div>
                        <div class="kt-invoice__item">
                            <span class="kt-invoice__subtitle">INVOICE TO.</span>
                            <span class="kt-invoice__text">{{$client_detail['Client_Details']}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-invoice__body">
                <div class="kt-invoice__container">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>order#</th>
                                    <th>Invoice Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        MTS-{{$stock->MTSO_NUMBER}}-{{$stock->id}}-BP
                                    </td>
                                    <td  style="color:black"><?php
                                       if($invoice->status_id==0)
                                       {
                                    ?>
                                        UNPAID
                                    <?php
                                       } else if($invoice->status_id==1)
                                       {
                                  ?>
                                     PAID
                                  <?php
                                       } else if($invoice->status_id==2)
                                       {
                                   ?>
                                    CANCELLED
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
            <div class="kt-invoice__body">
                <div class="kt-invoice__container">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Qty</th>
                                    
                                    <th>Rate</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                 <td>Bundling Fee</td>
                               
                                 <td>{{number_format($stock->QTY)}}</td>
                                 <td>${{number_format($stock->Bundling_fee,2)}}</td>
                                 <td  style="color:black">${{number_format($stock->QTY*$stock->Bundling_fee, 2, '.', '')}}</td>
                            
                              </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="kt-invoice__footer">
                <div class="kt-invoice__container">
                    <div class="kt-invoice__bank">
                        <div class="kt-invoice__title">Payment Detail</div>
						
						<div class="kt-invoice__item">
							<span class="kt-invoice__price mr-auto" style="width:40%"> {{$payment_detail['payment_details']}}</span>
						</div>

						
                    </div>
                    <div class="kt-invoice__total">
                        <span class="kt-invoice__title">TOTAL AMOUNT</span>
                        <span class="kt-invoice__price"  style="color:black">${{number_format($invoice->Invoice_total,2)}}</span>
                     
                    </div>
                </div>
            </div>
            <form action="/update/invoice/status" method="post">
            <div class="kt-invoice__actions">
            @csrf   
            <div class="kt-invoice__container">
                    
                    <button type="button" class="btn btn-label-brand btn-bold" onclick="window.print();">Download Invoice</button>
                    <input type="hidden" name="invoiceid" value="{{$invoice->id}}">
                    <input type="hidden" name="paystatus" value="{{$invoice->status_id}}"  id="po_status">
                    <?php
                        if($invoice->status_id==0)
                        {
                    ?>
                        <button type="submit" class="btn btn-brand btn-bold " >update invoice</button>
                    <?php                            
                        }
                    ?>
                    
                </div>
            </div>
            </form>
        </div>
    </div>
</div>	</div>
<!-- end:: Content -->				</div>				
				
					</div>
		</div>
	</div>
	
<!-- end:: Page -->

	
	
	
		
	
            <!-- begin::Quick Panel -->

<!-- end::Quick Panel -->
		

    <!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->
    <!-- begin::Sticky Toolbar -->

<!-- end::Sticky Toolbar -->
	<!-- begin::Demo Panel -->

<div id="kt_demo_panel" class="kt-demo-panel">
	<div class="kt-demo-panel__head">
		<h3 class="kt-demo-panel__title">
			Select A Demo
			<!--<small>5</small>-->
		</h3>
		<a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
	</div>
	<div class="kt-demo-panel__body">
        
		
	</div>
</div>
<!-- end::Demo Panel -->	
	

<!--Begin:: Chat-->
<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="kt-chat">
                <div class="kt-portlet kt-portlet--last">
                    <div class="kt-portlet__head">
                        <div class="kt-chat__head ">
                            <div class="kt-chat__left">
                                <div class="kt-chat__label">
                                    <a href="#" class="kt-chat__title">Jason Muller</a>
                                    <span class="kt-chat__status">
                                        <span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
                                    </span>
                                </div>
                            </div>
                            <div class="kt-chat__right">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon-more-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">
                                        <!--begin::Nav-->
                                        <ul class="kt-nav">
                                            <li class="kt-nav__head">
                                                Messaging
                                                <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                           
                                         
                                           
                                         
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__foot">
                                                <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                                <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                </div>

                                <button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
                                    <i class="flaticon2-cross"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="300">
                            <div class="kt-chat__messages kt-chat__messages--solid">
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="./assets/media/users/100_12.jpg" alt="image">
                                        </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">2 Hours</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        How likely are you to recommend our company<br> to your friends and family?
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="./assets/media/users/300_21.jpg" alt="image">
                                        </span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="./assets/media/users/100_12.jpg" alt="image">
                                        </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Ok, Understood!
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">Just Now</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="./assets/media/users/300_21.jpg" alt="image">
                                        </span>
                                    </div>
                                    <div class="kt-chat__text">
                                        You’ll receive notifications for all issues, pull requests!
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="./assets/media/users/100_12.jpg" alt="image">
                                        </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">2 Hours</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        You were automatically <b class="kt-font-brand">subscribed</b> <br>because you’ve been given access to the repository
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="./assets/media/users/300_21.jpg" alt="image">
                                        </span>
                                    </div>

                                    <div class="kt-chat__text">
                                        You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link"></a>
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="./assets/media/users/100_12.jpg" alt="image">
                                        </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Discover what students who viewed Learn <br>Figma - UI/UX Design Essential Training also viewed
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">Just Now</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="./assets/media/users/300_21.jpg" alt="image">
                                        </span>
                                    </div>
                                    <div class="kt-chat__text">
                                        Most purchased Business courses during this sale!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-chat__input">
                            <div class="kt-chat__editor">
                                <textarea placeholder="Type here..." style="height: 50px"></textarea>
                            </div>
                            <div class="kt-chat__toolbar">
                                <div class="kt_chat__tools">
                                    <a href="#"><i class="flaticon2-link"></i></a>
                                    <a href="#"><i class="flaticon2-photograph"></i></a>
                                    <a href="#"><i class="flaticon2-photo-camera"></i></a>
                                </div>
                                <div class="kt_chat__actions">
                                    <button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--ENd:: Chat-->

        <!-- begin::Global Config(global config for global JS sciprts) -->
       
        <!-- end::Global Config -->

    	<!--begin:: Global Mandatory Vendors -->

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
    	    	   
    @include('assets.js')
				<!--end::Global Theme Bundle -->

        
            </body>
    <!-- end::Body -->
    <script>
        $(document).ready(function()
        {
            $('.kt-nav__link').click(function()
                 {
                     var stid=$(this).attr("data-stid");
                     var stname=$(this).find(".kt-nav__link-text").html();
                     $('#dpname').html(stname);
                     $('#po_status').val(stid);
                 })
        })
    </script>
</html>
