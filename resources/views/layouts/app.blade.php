<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165642407-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-165642407-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Kheys Koders">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ Cdn::asset(mix('/assets/css/app.css')) }}">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ Cdn::asset('/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ Cdn::asset('/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ Cdn::asset('/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ Cdn::asset('/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ Cdn::asset('/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ Cdn::asset('/favicon/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="{{ Cdn::asset('/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:image" content="{{ Cdn::asset('/assets/img/og_image.jpg') }}">
</head>

<body id="page-top" class="{{ isset($body['class']) ? $body['class'] : 'no' }}" {{ isset($body['style']) ? 'style='.$body['style'].'' : '' }}>

@if(!isset($nav) || (isset($nav) && $nav))
    @include('layouts.navbar')
@endif

@if(!isset($header) || (isset($header) && $header))
    @include('layouts.header')
@endif

@yield('content')

@if(!isset($footer) || (isset($footer) && $footer))
    @include('layouts.footer')
@endif

<script src="{{ Cdn::asset(mix('assets/js/app.js')) }}"></script>
@yield('scripts')
</body>

</html>

