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
                    <!--begin::Content-->
					<div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">

                    <!--begin::Head-->
                    <div class="kt-login__head">

                        @if (Route::has('register'))
                        <a href="{{ route('login') }}" class="kt-link kt-login__signup-link">Sign in!</a>
                        @endif
                    </div>

                    <!--end::Head-->

                    <!--begin::Body-->
                    <div class="kt-login__body">

                        <!--begin::Signin-->
                        <div class="kt-login__form">
                            <div class="kt-login__title">
                                <h3>Sign up</h3>
                            </div>
                            <!--begin::Form-->


                            <form class="kt-form" novalidate="novalidate" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autofocus placeholder="username">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required  placeholder="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  placeholder="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required  placeholder="confirm password" >
                                </div>

                                <div class="kt-login__actions">
                                    <div class="form-check">

                                    </div>
                                    <button type="submit" class="btn btn-primary btn-elevate kt-login__btn-primary">Sign In</button>
                                    <!-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('assets.js')

		<!--begin::Page Scripts(used by this page) -->
		<script src="./assets/js/demo1/pages/login/login-1.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
