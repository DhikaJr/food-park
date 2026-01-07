<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Title -->
	<title>Login | Food Park</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('admin/assets/images/favicon.png') }}">

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Canonical URL -->
	<link rel="canonical" href="https://w3crm.dexignzone.com/xhtml/index.html">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/toastr/css/toastr.min.css') }}">

	<!-- Start - Style CSS -->
	<link class="main-plugins" href="{{ asset('admin/assets/css/plugins.css') }}" rel="stylesheet">
	<link class="main-css" href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
	<!-- End - Style CSS -->

</head>
<body>

	<!-- Start - Authentication Wrapper -->
	<div class="auth-wrapper">
		<div class="row">
			<div class="col-xl-6 col-lg-6 order-lg-1">
				<div class="auth-info text-center">
					<div class="mb-5 mx-auto col-xxl-6">
						<h1>Food Park Dashboard</h1>
					</div>
					<div class="auth-media">
						<img class="w-100 img-fluid" src="assets/images/login.png" alt="">
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 mx-auto align-self-center">
				<div class="auth-form">
					<div class="text-center mb-4">
						<h3 class="mb-0">Sign In</h3>
					</div>
					<form action="{{ route('login') }}" method="POST">
                        @csrf
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="hello@example.com" value="{{ old('email') }}" required autofocus>
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<div class="position-relative">
								<input type="password" id="password" name="password" class="form-control form-control-lg dz-password" placeholder="Masukan Password" required>
								<span class="show-pass position-absolute top-50 end-0 me-2 translate-middle">
									<span class="show"><i class="fa fa-eye-slash"></i></span>
									<span class="hide"><i class="fa fa-eye"></i></span>
								</span>
							</div>
						</div>
						<div class="d-flex gap-2 flex-wrap justify-content-between mb-4 mb-lg-5">
							<div class="form-check custom-checkbox mb-0">
								<input type="checkbox" class="form-check-input" id="remember_me" name="remember">
								<label class="form-check-label" for="remember_me">Ingat Saya</label>
							</div>
							<a href="page-forgot-password.html" class="btn-link text-primary">Lupa Password?</a>
						</div>
						<div class="text-center mb-4">
							<button type="submit" class="btn btn-primary btn-lg w-100 mb-3">Sign In</button>
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>
	<!-- End - Authentication Wrapper -->

    <!-- Toastr Script -->
    <script>
        $(document).ready(function() {
            toastr.options.closeButton = true;
            toastr.options.progressBar = true;
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error('{{ $error }}');
                @endforeach
            @endif
        });
    </script>

	<!-- Start - Page Scripts -->
    <script src="{{ asset('admin/assets/vendor/toastr/js/toastr.min.js') }}"></script>
	<script src="{{ asset('admin/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

	<!-- Script For Custom JS -->
	<script src="{{ asset('admin/assets/js/deznav-init.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

</body>
</html>
