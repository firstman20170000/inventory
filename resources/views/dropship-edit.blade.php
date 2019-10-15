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
										Edit Dropship Order
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											Enter Order details and submit </span>
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
											
                                               <input type="hidden" id="po_status" value="{{$order->status_id}}">
												<!--begin: Form Wizard Step 1-->
                                                
                                                <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                                <div class="kt-heading kt-heading--md">Order Products</div>
                                                <div class="kt-section kt-section--first">
                                                    <div class="kt-wizard-v1__form">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="kt-section__body">
                                                                    <div class="form-group row">

                                                                        <div class="col-lg-9 col-xl-8">
                                                                            <div class="row">
                                                                                <div class="col-lg-8">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Bundle</label>
                                                                                        <div class="col-xl-9 col-lg-6">
                                                                                            <select class="form-control" name="bundle" id="bundle">
                                                                                                 <?php
                                                                                                     $bundle=\App\Bundle::all();
                                                                                                     foreach($bundle as $key => $row)
                                                                                                     {
                                                                                                ?>
                                                                                                     <option value="{{$row->id}}">{{$row->bundle_name}}</option>
                                                                                                <?php
                                                                                                     }
                                                                                                 ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-xl-2 col-lg-2 col-form-label">QTY</label>
                                                                                        <div class="col-xl-7 col-lg-7">
                                                                                             <?php
                                                                                                $tot_item=0;
                                                                                                foreach($items as $key=> $row)
                                                                                                {
                                                                                                       $tot_item=$tot_item+$row->dropship_qty; 
                                                                                                }
                                                                                             ?>
                                                                                            <input class="form-control" type="number" min=1 step=1 id="ship_QTY" name="ship_QTY" id="ship_QTY">
                                                                                            <input class="form-control" type="text" name="ship_qty_tot" id="ship_qty_tot" value="{{$tot_item}}" style="width:0px;height:0px;opacity:0">
                                                                                            <input class="form-control" type="hidden" name="bundle_tot" value="" id="bundle_tot">
                                                                                        </div>
                                                                                        <div class="col-xl-3 col-lg-3">
                                                                                            <?php if($order->status_id<3)
                                                                                            {

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
                                                                  

                                                                    <div class="form-group row text-center">

                                                                        <div class="table-responsive">
                                                                        <table class="table">
                                                                                <thead>
                                                                                    <tr data-bundle-id=""> 
                                                                                        <td ></td>
                                                                                        <td class="text-center">Name</td>
                                                                                        <td class="text-center">Bundle#</td>
                                                                                        <td class="text-center">Qty</td>
                                                                                        <?php if($order->status_id<3)
                                                                                            {

                                                                                        ?>
                                                                                        <td class="text-center">remove</td>
                                                                                         <?php
                                                                                            }
                                                                                         ?>       
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id="dropship">
                                                                                    @foreach($items as $key=> $row)
                                                                                       <tr data-bundle-id="{{$row->bundle->id}}">
                                                                                           <td><span style="width:130px"><div class="kt-user-card-v2 kt-user-card-v2--uncircle"><div class="kt-user-card-v2__pic"><img src="{{$row->bundle->image_url}}"></div></div></span></td> 
                                                                                           <td>{{$row->bundle->bundle_name}}</td>
                                                                                           <td>BDL-{{$row->bundle->bundle_id}}-{{$row->bundle->id}}-BP</td>
                                                                                           <td class="bundleqty">{{$row->dropship_qty}}</td>
                                                                                           <?php if($order->status_id<3)
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
																				<h3 class="kt-section__title kt-section__title-md">Setup your address</h3>
																			</div>
																		</div>
																		
                                                                        <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group">
                                                                                <label for="Fname">First Name</label>
                                                                                <input type="text" class="form-control" name="Fname" value="{{$order->address_name}}" id="Fname" placeholder="william">
                                                                                <span style="color:grey">please input your first name </span>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group">
                                                                                <label for="Lname">Last Name</label>
                                                                                <input type="text" class="form-control" value="{{$order->address_last_name}}" name="Lname" id="Lname" placeholder="merci">
                                                                                <span style="color:grey">please input your Address</span>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-xl-12">
                                                                            <div class="form-group">
                                                                                <label for="FBA_Shipment_id">Address Line1</label>
                                                                                <input type="text" class="form-control" value="{{$order->address_1}}" name="address1" id="address1" placeholder="Address Line1">
                                                                                <span style="color:grey">please input your Address </span>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-xl-12">
                                                                            <div class="form-group">
                                                                                <label for="FBA_Shipment_id">Address Line2</label>
                                                                                <input type="text" class="form-control" value="{{$order->address_2}}"  name="address2" id="address2" placeholder="Address Line2">
                                                                                <span style="color:grey">please input your Address </span>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group">
                                                                                <label for="postcode">Post Code</label>
                                                                                <input type="text" class="form-control" name="postcode" value="{{$order->address_postcode}}" id="postcode" placeholder="2000">
                                                                                <span style="color:grey">please enter your Postcode </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group">
                                                                                <label for="city">City</label>
                                                                                <input type="text" class="form-control" name="city" id="city" value="{{$order->address_city}}" placeholder="London">
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
                                                                                <select name="state" id="state" class="form-control" value="{{$order->address_state}}" style="display:none">
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
                                                                                <select id="country" name="country" class="form-control" value="">
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
                                                                                <input type="text" value="{{$order->address_telephone}}" class="form-control" name="telephone" id="telephone" placeholder="(+86)-(9834349)">
                                                                                <span style="color:grey">please input your telephone </span>
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
                                                                                <?php
                                                                                
                                                                                    $shipping_type=\App\Shippingtype::where('id',$order->shipping_method_type)->first();
                                                                                
                                                                                ?>
																				<h3 class="kt-section__title kt-section__title-md">Shipping method</h3>
																			</div>
																		</div>
																		
																		<div class="row">
																			<div class="col-xl-6">
																				<div class="form-group">
																					<label for="Bundle_Model">Shipping Method</label>
																					<select    class="form-control"  required>
                                                                                       
                                                                                        <option value="{{$shipping_type->id}}" selected>{{$shipping_type->Type_Name}}</option>
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
                                                                                        $courier=\App\Shippingmethod::where('type_id',$order->shipping_method_type)->get(); 
                                                                                     
                                                                                    ?>
																					<select type="text" value=""  class="form-control" name="ship_mod" id="ship_mod" required>
                                                                                       @foreach($courier as $key => $row)
                                                                                          <option value="{{$row->id}}">{{$row->Courier_Name}}</option>
                                                                                       @endforeach
                                                                                    </select>
																				</div>
                                                                            </div>
                                                                            <div class="col-xl-6">
																				
																			</div>
                                                                        </div>
                                                                        <div class="row">
																			<div class="col-xl-12">
																				<div class="form-group">
                                                                                    <label for="Bundle_Model">Reference</label>
                                                                                    <?php
                                                                                      
                                                                                    
                                                                                    ?>
																					<input type="text" class="form-control" value="{{$order->dropship_reference}}" id="reference" name="reference">
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
                                                                     <div class="form-group row">
																			<div class="col-lg-9 col-xl-6">
																				<h3 class="kt-section__title kt-section__title-md" style="color: #48465b;font-size: 1.4rem;">Shipment info</h3>
																			</div>
																		</div>
																<div class="row">
																	<div class="col-xl-6">
																		<div class="form-group">
																			<label for="Bundle_Width">Shipping cost</label>
                                                                            <input  type="number" value="{{$order->drop_shipping_cost}}" step="0.01" min="1"   class="form-control" name="shipping_cost" id="shipping_cost" required>
                                                                            

																		</div>
																	</div>
																	<div class="col-xl-6">
																	</div>
																</div>
																<div class="row">
																	<div class="col-xl-6">
																		<div class="form-group">
																			<label for="Bundle_Length">Tracking Number</label>
                                                                            <input  type="text" value="{{$order->tracking_number}}"  class="form-control" name="Tracking_number" id="Tracking_number" >
                                                                            
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
        $('#country').val("{{$order->address_country}}");
        var initValidation = function () {
          
        validator = formEl.validate({
            // Validate only visible fields
            ignore: ":hidden",

            // Validation rules
            rules: {
                // Step 1
                
                ship_qty_tot:{
                    required:true,
                },
                reference:{
                    required:true,
                },
                Fname: {
                    required: true,
                  
                },
                Lname: {
                    required: true,
                },
                address1: {
                    required: true,

                },
               
                city:{
                    required: true,
                    
                },
                postcode:{
                    required:true,
                    
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
                        "text": "please add the bundle.",
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
             
                var formdata = new FormData();
                //console.log( $('#files')[0].files[0]);

                // var files =$('#files')[0].files;
                // console.log(files.length);
                

                var d = new Date();
                var n = d.getTime();
                var j = 0;
                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                formdata.append('fname', $("#Fname").val());
                formdata.append('lname', $("#Lname").val());
                formdata.append('address1', $('#address1').val());
                formdata.append('address2', $('#address2').val());
                formdata.append('postcode', $('#postcode').val());
                formdata.append('order_id',{{$order->dropship_number}});
                formdata.append('city', $('#city').val());
                formdata.append('status_id',$('#po_status').val());
                if($('#country').val()=='United States')
                {
                  formdata.append('state', $('#state').val());
                } else {
                   formdata.append('state', $('#state1').val());
                }
                
                formdata.append('telephone', $('#telephone').val());
                formdata.append('ship_mod', $('#ship_mod').val());
                bundle_id=[];
                bundle_qty=[];
                $('#dropship').find("tr").each(function(){
                    var bundle_id_item=$(this).attr("data-bundle-id");
                    var bundleqty_item=$(this).find(".bundleqty").html();
                    if(bundle_id.indexOf(bundle_id_item)>=0)
                    {
                        var index=bundle_id.indexOf(bundle_id_item);
                        bundle_id[index]=bundle_id_item;
                        bundle_qty[index]=parseInt(bundle_qty[index])+parseInt(bundleqty_item);
                        
                    } else {
                        bundle_id.push(bundle_id_item);
                        bundle_qty.push(bundleqty_item);
                    }    
                })
                for(var i=0;i<bundle_id.length;i++)
                {
                    formdata.append('bundleid[]',bundle_id[i]);
                    formdata.append('qty[]',bundle_qty[i]);
                }
                
                formdata.append('country',$('#country').val());
                formdata.append('reference',$('#reference').val());
                formdata.append('shipping_cost',$('#shipping_cost').val());
                formdata.append('Tracking_number',$('#Tracking_number').val());
                
                // formdata.append('image', $("#image")[0].files[0]);
                // // formdata.append('files', $("#files")[0].files[0]);
                // formdata.append('image_url', $("#image_url").val());
                // formdata.append('Bundle_Fee', $("#Bundle_Fee").val());
                // formdata.append('file_url', $("#file_url").val());
              
                // See: http://malsup.com/jquery/form/#ajaxSubmit
                $.ajax({
                    type: 'post',
                    enctype: 'multipart/form-data',
                    url: '/update/DSOshipping',
                    processData: false,
                    contentType: false,
                    data: formdata,
                    success: function (data) {

                        if(data==5)
                        {
                               window.location.href="/view/dropship-table";
                               
                        } else if(data==6)
                        {
                              swal.fire({
                                  "title": "",
                                  "text": "A new invoice have been successfully created!",
                                  "type": "success",
                                  "confirmButtonClass": 'btn btn-secondary'
                                }).then(result => {
                                    window.location.href = "/view/dropship-table";
                                })
                        
                        }
                        else if(data==4)
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
                    formdata.append('order_id',{{$order->dropship_number}})
                    $.ajax({
                        type: 'post',
                        enctype: 'multipart/form-data',
                        url: '/check/edit/dropship/validation',
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
