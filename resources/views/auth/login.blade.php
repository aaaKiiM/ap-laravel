<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}">
	<!-- Favicon -->
	{{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('login-template/img/favicon.png') }}"> --}}
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('login-template/css/bootstrap.min.css') }}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('login-template/css/fontawesome-all.min.css') }}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('login-template/font/flaticon.css') }}">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('login-template/style.css') }}">
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
	<section class="fxt-template-animation fxt-template-layout7" data-bg-image="{{ asset('img/1.jpg') }}">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-6 col-lg-7 col-sm-12 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
							<a href="/" class="fxt-logo"><img src="{{ asset('img/logo2.png') }}" alt="Logo"></a>
						</div>
						<div class="fxt-form">
							<form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <label>Username</label>
                                        <input id="username" type="text" placeholder="Username Kamu" class="form-control @error('username') @enderror" name="username" value="{{ old('username') }}" required autofocus>
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
                                        <label>Password</label>
                                        <input id="password" type="password" placeholder="Password Kamu" class="form-control @error('password') @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
										<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<div class="fxt-checkbox-area">
											<div class="checkbox">
                                                <input class="custom-control-input" type="checkbox" name="remember" id="cb1" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="cb1">Ingat Saya</label>
											</div>
                                            @if (Route::has('password.request'))
                                            <a class="switcher-text" href="{{ route('password.request') }}">Lupa Password?</a>
                                            @endif
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-4">
                                        <button type="submit" class="fxt-btn-fill">Login</button>
									</div>
								</div>
							</form>
						</div>
						<div class="fxt-footer">
							<div class="fxt-transformY-50 fxt-transition-delay-5">
								<p>Belum Punya Akun?<a href="/register" class="switcher-text2 inline-text">Daftar Disini</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- jquery-->
	<script src="{{ asset('login-template/js/jquery-3.5.0.min.js') }}"></script>
	<!-- Bootstrap js -->
	<script src="{{ asset('login-template/js/bootstrap.min.js') }}"></script>
	<!-- Imagesloaded js -->
	<script src="{{ asset('login-template/js/imagesloaded.pkgd.min.js') }}"></script>
	<!-- Validator js -->
	<script src="{{ asset('login-template/js/validator.min.js') }}"></script>
	<!-- Custom Js -->
	<script src="{{ asset('login-template/js/main.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
