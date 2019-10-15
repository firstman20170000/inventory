<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<!-- begin::Head -->
	<head>

		<!--begin::Base Path (base relative path for assets of this page) -->
		<base href="../../../../">

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
		<meta name="description" content="Login page example">

		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="{{ asset('js/app.js') }}" defer></script>

		<!--begin::Page Custom Styles(used by this page) -->
		<link href="./assets/css/demo1/pages/login/login-1.css" rel="stylesheet" type="text/css" />

		<!--end::Page Custom Styles -->

		@include('assets.css')
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

					<!--begin::Aside-->
					<div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: url(./assets/media//bg/bg-4.jpg);">
						<div class="kt-grid__item">
							<a href="javasript:;" class="kt-login__logo">
								<img src="./assets/media/logos/logo-4.png">
							</a>
						</div>
						<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
							<div class="kt-grid__item kt-grid__item--middle">
								<h3 class="kt-login__title">Welcome!</h3>
								<h4 class="kt-login__subtitle">INVENTORY MANAGEMENT SYSTEM</h4>
							</div>
						</div>
						<div class="kt-grid__item">
							<div class="kt-login__info">
								<div class="kt-login__copyright">
									&copy 2019
								</div>
								<!-- <div class="kt-login__menu">
									<a href="" class="kt-link">Privacy</a>
									<a href="" class="kt-link">Legal</a>
									<a href="javas" class="kt-link">Contact</a>
								</div> -->
							</div>
						</div>
					</div>

					<!--begin::Aside-->

					<!--begin::Content-->
					<div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">

						<!--begin::Head-->
						<div class="kt-login__head">
						
                         
						</div>

						<!--end::Head-->

						<!--begin::Body-->
						<div class="kt-login__body">

							<!--begin::Signin-->
							<div class="kt-login__form">
								<div class="kt-login__title">
									<h3>Sign In</h3>
								</div>

								<!--begin::Form-->
								<form class="kt-form" novalidate="novalidate" method="POST" action="{{ route('login') }}">
									@csrf
									<div class="form-group">
										<input class="form-control form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" required  autofocus placeholder="email">
										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group">
										<input class="form-control form-control @error('password') is-invalid @enderror" id="password" type="password" type="password" name="password" required placeholder="password">
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>

									<!--begin::Action-->
									<div class="kt-login__actions">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

											<label class="form-check-label" for="remember">
												{{ __('Remember Me') }}
											</label>
										</div>
										<button type="submit" class="btn btn-primary btn-elevate kt-login__btn-primary">Sign In</button>
										<!-- @if (Route::has('password.request'))
											<a class="btn btn-link" href="{{ route('password.request') }}">
												{{ __('Forgot Your Password?') }}
											</a>
										@endif -->
									</div>

									<!--end::Action-->
								</form>

								<!--end::Form-->

								<!--begin::Divider-->
								<!-- <div class="kt-login__divider">
									<div class="kt-divider">
										<span></span>
										<span>OR</span>
										<span></span>
									</div>
								</div> -->

								<!--end::Divider-->

								<!--begin::Options-->
								<!-- <div class="kt-login__options">
									<a href="#" class="btn btn-primary kt-btn">
										<i class="fab fa-facebook-f"></i>
										Facebook
									</a>
									<a href="#" class="btn btn-info kt-btn">
										<i class="fab fa-twitter"></i>
										Twitter
									</a>
									<a href="#" class="btn btn-danger kt-btn">
										<i class="fab fa-google"></i>
										Google
									</a>
								</div> -->

								<!--end::Options-->
							</div>

							<!--end::Signin-->
						</div>

						<!--end::Body-->
					</div>

					<!--end::Content-->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		@include('assets.js')

		<!--begin::Page Scripts(used by this page) -->
		<script src="./assets/js/demo1/pages/login/login-1.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
