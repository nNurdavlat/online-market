@props(['title'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blueberry - Multi Purpose eCommerce Template.">
    <meta name="keywords" content="eCommerce, mart, apparel, catalog, fashion, Tailwind, multipurpose, online store, shop, store, template">
    <title>{{ $title ?? 'Online Market' }}</title>

    <!-- Site Favicon -->
    <link rel="icon" href="assets/img/favicon/favicon.png" type="image/x-icon">

    <!-- Css All Plugins Files -->
    <x-asset-link src="assets/css/vendor/remixicon.css" type="css"></x-asset-link>
    <x-asset-link src="assets/css/vendor/aos.css" type="css"></x-asset-link>
    <x-asset-link src="assets/css/vendor/swiper-bundle.min.css" type="css"></x-asset-link>
    <x-asset-link src="assets/css/vendor/owl.carousel.min.css" type="css"></x-asset-link>
    <x-asset-link src="assets/css/vendor/slick.min.css" type="css"></x-asset-link>
    <x-asset-link src="assets/css/vendor/animate.min.css" type="css"></x-asset-link>
    <x-asset-link src="assets/css/vendor/jquery-range-ui.css" type="css"></x-asset-link>

    <!-- tailwindcss -->
    <x-asset-link src="assets/js/vendor/tailwindcss3.4.5.js" type="js"></x-asset-link>

    <!-- Main Style -->
    <x-asset-link src="assets/css/style.css" type="css"></x-asset-link>
</head>
<body>
