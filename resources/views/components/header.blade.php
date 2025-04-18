@props(['title'])
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Blueberry - Multi Purpose eCommerce Template.">
    <meta name="keywords" content="eCommerce, mart, apparel, catalog, fashion, Tailwind, multipurpose, online store, shop, store, template">
    <title>Blueberry - eCommerce Tailwind CSS template</title>

    <!-- Site Favicon -->
    <link rel="icon" href="/assets/img/favicon/favicon.png" type="image/x-icon">

    <!-- Css All Plugins Files -->
    <link rel="stylesheet" href="/assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="/assets/css/vendor/aos.css">
    <link rel="stylesheet" href="/assets/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/animate.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/jquery-range-ui.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- tailwindcss -->
    <script src="/assets/js/vendor/tailwindcss3.4.5.js"></script>

    <!-- Main Style -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        .bb-pro-actions .ri-heart-line.active {
            color: red !important;
        }
        .bb-pro-actions .ri-shopping-bag-4-line.active {
            color: green !important;
        }
    </style>

</head>

<body>
