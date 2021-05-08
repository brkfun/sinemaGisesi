<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <title>Central Cinema</title>
    <link rel="stylesheet" href="{{asset('mobil/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('mobil/fonts/css/fontawesome-all.min.css')}}">


</head>
<body class="theme-light" data-highlight="highlight-red">
<main id="page">
    <div class="page-content">
    @include('mobile.layouts.header')
    @yield('content')
    @include('mobile.layouts.footer')
    </div>
</main>
<script type="text/javascript" src="{{asset('mobil/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mobil/js/custom.js')}}"></script>
</body>

</html>
