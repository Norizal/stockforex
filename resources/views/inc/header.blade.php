<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Overpips - All In Application For Forex Trader">
    <meta name="author" content="MZHH">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title -->
    <title>Overpips - All In Application For Forex Trader</title>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css?v=1.0.2') }}">
    <link rel="stylesheet" href="{{ asset('css/style_rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/theme-color07.css') }}" class="color-scheme">
    

    <!-- Modernizer Script for old Browsers -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    
    <!-- Whatsapp Widget -->
    <script async data-id="2946" src="https://cdn.widgetwhats.com/script.min.js"></script>
    
</head>

<body>

    
    
    <!--
        Start Header
        ==================================== -->

    <header id="home" class="home bg-image">

        @include('inc.navbar')
        