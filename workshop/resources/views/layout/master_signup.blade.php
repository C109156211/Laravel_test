<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&family=Poppins:wght@300;400;500;600;700&family=PT+Serif:ital,wght@1,400&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	<!-- Font Icons -->
	<link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>Coming Soon - Forms | Canvas</title>

	<style>

		.form-section.active,
		.result-section.active {
			visibility: visible;
    		-webkit-animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
	        animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
		    height: auto;
		}
		.form-section.inactive,
		.result-section.inactive {
			opacity: 0;
		    visibility: hidden;
			height: 0;
		}

		@-webkit-keyframes scale-up-center {
		  0% {
		  	opacity: 0;
		    -webkit-transform: scale(0.9);
		            transform: scale(0.9);
		  }
		  100% {
		  	opacity: 1;
		    -webkit-transform: scale(1);
		            transform: scale(1);
		  }
		}
		@keyframes scale-up-center {
		  0% {
		  	opacity: 0;
		    -webkit-transform: scale(0.9);
		            transform: scale(0.9);
		  }
		  100% {
		  	opacity: 1;
		    -webkit-transform: scale(1);
		            transform: scale(1);
		  }
		}

	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Header
		============================================= -->
		<header id="header">
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element min-vh-100 include-header" style="background: linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.6)), url('images/blocks/preview/schedule.jpg') no-repeat center center/ cover;">
			<div class="slider-inner">


				<div class="row justify-content-center align-items-center h-100">

					<div class="col-lg-5 col-sm-7 col-10">

						<div class="text-center mb-5 dark">
							<h5 class="fw-bold display-4">註冊頁面</h5>
						</div>

						<div>
							<div class="form-result">
								@if( $errors and count($errors))
									<ul class="iconlist" data-username="envato" data-count="2">
									@foreach( $errors->all() as $err )
										<div class="alert text-center alert-danger"> {{$err}} </div>
									@endforeach
									</ul>
								@endif 
							</div>


							<form action="/user/auth/signup" method="post" >
								@csrf
								<div class="form-process"></div>
								<div class="row form-section px-4 py-5 bg-white rounded shadow-lg">
									<div class="col-12 form-group">
										<label>姓名:</label>
										<input type="text" name="name" id="name" class="form-control form-control-lg required" value="{{old('name')}}" placeholder="John Doe">
									</div>
									<div class="col-12 form-group">
										<label>帳號:</label>
										<input type="text" name="email" id="email" class="form-control form-control-lg required" value="{{old('email')}}" placeholder="user@company.com">
									</div>
									<div class="col-12 form-group">
										<label>密碼:</label>
										<input type="password" name="password" id="password" class="form-control form-control-lg required" value="{{old('password')}}" placeholder="輸入密碼" maxlength="50">
									</div>
									<div class="col-12 form-group">
										<div>
											<label>帳號類型:</label><br>
											@if ( old('type') == 'u' )
											<input type="radio" name="type" id="type" value="u" checked>
											@else									
											<input type="radio" name="type" id="type" value="u">
											@endif
											<label for="type">一般使用者</label>
										</div>
										<div>
											@if ( old('type') == 'm' )
											<input type="radio" name="type" id="type" value="m" checked>
											@else										
											<input type="radio" name="type" id="type" value="m">
											@endif
											<label for="type">管理者</label>
										</div>

									</div>

									<!-- <div class="col-12 d-none">
										<input type="text" id="landing-enquiry-botcheck" name="landing-enquiry-botcheck" value="">
									</div> -->
									<div class="col-12">
										<button type="submit" name="landing-enquiry-submit" class="btn w-100 text-white bg-color rounded-3 py-3 fw-semibold text-uppercase mt-2">註冊</button>
									</div>

									<input type="hidden" name="prefix" value="landing-enquiry-">
								</div>
								<div class="result-section text-center">
									<div class="form-result"></div>
									<!-- <a class="btn w-100 text-white btn-danger rounded-3 py-3 fw-semibold text-uppercase mt-3 button-back">Thank You.</a> -->
								</div>
							</form>
						</div>

						<div class="d-flex justify-content-center mt-4">
							<a href="#" class="social-icon text-white bg-transparent h-bg-facebook" title="Facebook">
								<i class="fa-brands fa-facebook-f"></i>
								<i class="fa-brands fa-facebook-f"></i>
							</a>

							<a href="#" class="social-icon text-white bg-transparent h-bg-delicious" title="Delicious">
								<i class="fa-brands fa-delicious"></i>
								<i class="fa-brands fa-delicious"></i>
							</a>

							<a href="#" class="social-icon text-white bg-transparent h-bg-paypal" title="PayPal">
								<i class="fa-brands fa-paypal"></i>
								<i class="fa-brands fa-paypal"></i>
							</a>

							<a href="#" class="social-icon text-white bg-transparent h-bg-waze" title="Flattr">
								<i class="fa-brands fa-waze"></i>
								<i class="fa-brands fa-waze"></i>
							</a>

							<a href="#" class="social-icon text-white bg-transparent h-bg-android" title="Android">
								<i class="fa-brands fa-android"></i>
								<i class="fa-brands fa-android"></i>
							</a>

							<a href="#" class="social-icon text-white bg-transparent h-bg-google" title="Google+">
								<i class="fa-brands fa-google"></i>
								<i class="fa-brands fa-google"></i>
							</a>
						</div>

					</div>
				</div>

			</div>
		</section>

        <!-- Content
        ============================================= -->
        @yield('content') 


	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/functions.js"></script>

	<script>
		jQuery(document).ready( function(){
			jQuery('.result-section').addClass('inactive');
			jQuery('#coming-soon-registration').on( 'formSubmitSuccess formSubmitError', function(){
				jQuery('.result-section').addClass('active').removeClass('inactive');
				jQuery('.form-section').addClass('inactive').removeClass('active');

				jQuery('.button-back').on('click', function() {
				    jQuery('.result-section').addClass('inactive').removeClass('active');
					jQuery('.form-section').addClass('active').removeClass('inactive');
					e.preventDefault();
				  }
				);
			});
		});
	</script>

</body>
</html>