<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
<meta HTTP-EQUIV="Expires" CONTENT="-1">

<title>Color Meter Integria</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ url('styles/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('styles/framework.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('fonts/css/fontawesome-all.min.css') }}">  

@yield('css')
</head>

<body class="theme-dark" data-background="none" data-highlight="red2">
        
<div id="page">
        
    <div id="page-preloader">
        <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
    </div>


    <div class="header header-fixed header-logo-center">
        <a href="{{ url('dashboard') }}" class="header-title">Color Meter Integria</a>
        <a href="#" class="back-button header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme-switch class="header-icon header-icon-4"><i class="fas fa-question"></i></a>
    </div>

    <div id="footer-menu" class="footer-menu-5-icons footer-menu-style-1">
        <a href="{{ url('dashboard')}}" class="<?php echo Route::currentRouteName() == 'dashboard' ? 'active-nav' : '' ?>"><i class="fa fa-search"></i><span>Scan Color</span></a>
        <a href="{{ url('colorGrade')}}" class="<?php echo Route::currentRouteName() == 'colorGrade' ? 'active-nav' : '' ?>"><i class="fa fa-layer-group"></i><span>Grade Color</span></a>

        <a href="{{ url('colorList')}}" class="<?php echo Route::currentRouteName() == 'colorList' ? 'active-nav' : '' ?>"><i class="fa fa-list"></i><span>List Color</span></a>
        <a href="{{ url('colorPattern')}}" class="<?php echo Route::currentRouteName() == 'colorPattern' ? 'active-nav' : '' ?>"><i class="fa fa-palette"></i><span>Pattern Color</span></a>
        <a href="{{ url('config')}}" class="<?php echo Route::currentRouteName() == 'config' ? 'active-nav' : '' ?>"><i class="fa fa-wrench"></i><span>Tolerance</span></a>
        <div class="clear"></div>
    </div>

    <div class="page-content header-clear-medium">
        @yield('content')
    </div>    
</div>

<script type="text/javascript" src="{{ url('scripts/jquery.js') }}"></script>
<script type="text/javascript" src="{{ url('scripts/plugins.js') }}"></script>
<script type="text/javascript" src="{{ url('scripts/custom.js') }}"></script>
<script type="text/javascript">
/*
console.log('Initially ' + (window.navigator.onLine ? 'on' : 'off') + 'line');
window.addEventListener('online', () => console.log('Became online'));
window.addEventListener('offline', () => console.log('Became offline'));
document.getElementById('statusCheck').addEventListener('click', () => console.log('window.navigator.onLine is ' + window.navigator.onLine));
*/
</script>

@yield('js')

</body>
</html>
