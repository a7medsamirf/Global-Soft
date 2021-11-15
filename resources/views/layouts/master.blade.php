<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{Voyager::image(setting('site.site_icon_image'))}}">
    @include('layouts.head')
</head>
<body class="defult-home">

<div class="offwrap"></div>

<!--Preloader area start here-->

<div id="loader" class="loader">
    <img class='at-item' src="{{Voyager::image(setting('site.site_loader'))}}" alt="logo">
</div>
<!--Preloader area End here-->

<!-- Main content Start -->
<div class="main-content">

@include('layouts.main-header')

@yield('content')


</div>

@include('layouts.footer')

@include('layouts.footer-scripts')

</body>
</html>
