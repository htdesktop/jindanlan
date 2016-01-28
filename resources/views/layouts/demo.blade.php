<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title')</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" id="viewPort" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
	  <meta content="yes"name="apple-mobile-web-app-capable"/>
	  <meta content="black"name="apple-mobile-web-app-status-bar-style"/>
	  <meta content="telephone=no"name="format-detection"/>
	  <meta content="email=no"name="format-detection"/>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
	  <link rel="stylesheet" href="{{ asset('assets/css/customer_style.css') }}">
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
	</head>
	<body>
		<div data-role="page">
			@yield('header')
			@yield('content')
			@yield('footer')
		</div>
	</body>
</html>