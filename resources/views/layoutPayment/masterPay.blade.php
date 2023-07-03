<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jual Sepatu</title>
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->

    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"> -->

    <script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<!-- //custom-theme -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('css/shop.css') }}" type="text/css" media="screen" property="" />
<link href="{{ asset('css/style7.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- Owl-carousel-CSS -->
<link href="{{ asset('css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />

<link rel="stylesheet" type="text/css" href="{{ asset('css/checkout.css') }}">
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
    rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">



</head>
<body>
	@extends('layoutPayment.navbar')
    @yield('content')
	@extends('layoutPayment.footer')

<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

<!-- ... -->
<!-- ... -->

<script src="{{ asset('js/minicart.js') }}"></script>

<!-- ... -->
<!-- ... -->

<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('js/classie.js') }}"></script>
<script src="{{ asset('js/demo1.js') }}"></script>

<!-- ... -->
<!-- ... -->

<script src="{{ asset('js/search.js') }}"></script>

<!-- ... -->
<!-- ... -->

<script src="{{ asset('js/easy-responsive-tabs.js') }}"></script>

<script>
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default',
			width: 'auto',
			fit: true,
			closed: 'accordion',
			activate: function (event) {
				var $tab = $(this);
				var $info = $('#tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
			}
		});
		$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
		});
	});
</script>

<!-- ... -->
<!-- ... -->

<script type="text/javascript" src="{{ asset('js/creditly.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/creditly.css') }}" type="text/css" media="all" />

<script type="text/javascript">
	$(function () {
		var creditly = Creditly.initialize(
			'.creditly-wrapper .expiration-month-and-year',
			'.creditly-wrapper .credit-card-number',
			'.creditly-wrapper .security-code',
			'.creditly-wrapper .card-type');

		$(".creditly-card-form .submit").click(function (e) {
			e.preventDefault();
			var output = creditly.validate();
			if (output) {
				// Your validated credit card output
				console.log(output);
			}
		});
	});
</script>

<!-- ... -->
<!-- ... -->

<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>

<script type="text/javascript" src="{{ asset('js/bootstrap-3.1.1.min.js') }}"></script>

</body>

</html>


	<!-- single -->
