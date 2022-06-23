<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="expires" content="-1" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />

<title>Color Meter Nutricell</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ url('styles/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('styles/framework.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('fonts/css/fontawesome-all.min.css') }}">  

@yield('css')
</head>

<body class="theme-light" data-background="none" data-highlight="red2" onunload="deleteAllCookies()">>
        
<div id="page">

    <div id="page-preloader">
        <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
    </div>


    <div class="header header-fixed header-logo-center">
        
        <a href="{{ url('dashboard') }}" class="header-title">
          <img  style="width: 170px; margin-top: 10px" class="button button-xxs button-round-huge bg-white" src="{{ url('images/logo-header.png') }}" />
        </a>
        <a href="#" class="back-button header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme-switch class="header-icon header-icon-4"><i class="fas fa-question"></i></a>
    </div>

    <div id="footer-menu" class="footer-menu-5-icons footer-menu-style-1">
        <a href="javascript:window.location='{{ url('dashboard')}}'" class="<?php echo Route::currentRouteName() == 'dashboard' ? 'active-nav' : '' ?>"><i class="fa fa-search"></i><span>Scan Color</span></a>
        <a href="javascript:window.location='{{ url('colorGrade')}}'" class="<?php echo Route::currentRouteName() == 'colorGrade' ? 'active-nav' : '' ?>"><i class="fa fa-layer-group"></i><span>Grade Color</span></a>

        <a href="javascript:window.location='{{ url('colorList')}}'" class="<?php echo Route::currentRouteName() == 'colorList' ? 'active-nav' : '' ?>"><i class="fa fa-list"></i><span>List Color</span></a>
        <a href="javascript:window.location='{{ url('colorPattern')}}'" class="<?php echo Route::currentRouteName() == 'colorPattern' ? 'active-nav' : '' ?>"><i class="fa fa-palette"></i><span>Color Set</span></a>
        <a href="javascript:window.location='{{ url('config')}}'" class="<?php echo Route::currentRouteName() == 'config' ? 'active-nav' : '' ?>"><i class="fa fa-wrench"></i><span>Tolerance</span></a>
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
    function deleteAllCookies() {
        var cookies = document.cookie.split(";");

        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            var eqPos = cookie.indexOf("=");
            var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        }
    }

    function cleareCache() {
    }

    cleareCache()
</script>

@yield('js')

</body>
</html>
