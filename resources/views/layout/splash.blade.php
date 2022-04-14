<!DOCTYPE HTML>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<meta HTTP-EQUIV="Expires" CONTENT="-1">

	<title>Color Meter Nutricell</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ url('styles/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('styles/framework.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('fonts/css/fontawesome-all.min.css') }}">  

	@yield('css')
	</head>

	<body class="theme-dark" data-background="none" data-highlight="red2">
		@yield('content')

		<script type="text/javascript" src="{{ url('scripts/jquery.js') }}"></script>
		<script type="text/javascript" src="{{ url('scripts/plugins.js') }}"></script>
		<script type="text/javascript" src="{{ url('scripts/custom.js') }}"></script>
		@yield('js')
	</body>
</html>	