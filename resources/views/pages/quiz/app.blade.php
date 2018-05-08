<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/quiz/img/favicon.ico') }}">

	<title>Kuesioner - Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/quiz/img/apple-icon.png') }}" />
	<link rel="icon" type="image/png" href="{{ asset('assets/quiz/img/favicon.png') }}" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css') }}" />

	<!-- CSS Files -->
	<link href="{{ asset('assets/quiz/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/quiz/css/material-bootstrap-wizard.css') }}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{ asset('assets/quiz/css/demo.css') }}" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url({{ asset('assets/quiz/img/wizard-profile.jpg') }})">

	    @yield('content')

	    <div class="footer">
	        <div class="container text-center">
	             
	        </div>
	    </div>
	</div>

</body>
	<!--   Core JS Files   -->
    <script src="{{ asset('assets/quiz/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/quiz/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/quiz/js/jquery.bootstrap.js') }}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{ asset('assets/quiz/js/material-bootstrap-wizard.js') }}"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="{{ asset('assets/quiz/js/jquery.validate.min.js') }}"></script>

</html>
