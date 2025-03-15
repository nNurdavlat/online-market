<!--=========================================================
Item Name: Blueberry - eCommerce Tailwind CSS Template.
Author: Maraviya Infotech
Version: 1
Copyright 2024
============================================================-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blueberry - Multi Purpose eCommerce Template.">
    <meta name="keywords" content="eCommerce, mart, apparel, catalog, fashion, Tailwind, multipurpose, online store, shop, store, template">
    <title>Blueberry - eCommerce Tailwind CSS template</title>

    <!-- Site Favicon -->
    <link rel="icon" href="assets/img/favicon/favicon.png" type="image/x-icon">

    <!-- Css All Plugins Files -->
    <link rel="stylesheet" href="assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.css">
    <link rel="stylesheet" href="assets/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.min.css">
    <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-range-ui.css">

    <!-- tailwindcss -->
    <script src="assets/js/vendor/tailwindcss3.4.5.js"></script>

    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<!-- Loader -->
<div class="bb-loader min-w-full w-full h-screen fixed top-[0] left-[0] flex items-center justify-center bg-[#fff] z-[45]">
    <img src="assets/img/logo/loader.png" alt="loader" class="absolute">
    <span class="loader w-[60px] h-[60px] relative"></span>
</div>

<!-- Header -->
<header class="bb-header relative z-[5] border-b-[1px] border-solid border-[#eee]">
    <div class="top-header bg-[#3d4750] py-[6px] max-[991px]:hidden">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="inner-top-header flex justify-between">
                        <div class="col-left-bar">
                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins font-light text-[14px] text-[#fff] leading-[28px] tracking-[0.03rem]">Flat 50% Off On Grocery Shop.</a>
                        </div>
                        <div class="col-right-bar flex">
                            <div class="cols px-[12px]">
                                <a href="faq.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] font-light leading-[28px] tracking-[0.03rem]">Help?</a>
                            </div>
                            <div class="cols px-[12px]">
                                <a href="track-order.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] font-light leading-[28px] tracking-[0.03rem]">Track Order</a>
                            </div>
                            <div class="cols px-[12px]">
                                <div class="custom-dropdown relative z-[5]">
                                    <a class="bb-dropdown-toggle transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] relative pr-[15px] font-light leading-[28px] tracking-[0.03rem]" href="#">Language</a>
                                    <ul class="dropdown transition-all duration-[0.3s] ease-in-out min-w-[150px] py-[10px] px-[10px] mt-[25px] absolute z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] block border-[1px] border-solid border-[#eee] block rounded-[10px]">
                                        <li class="font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]"><a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]">English</a></li>
                                        <li class="font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]"><a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]">Hindi</a></li>
                                        <li class="font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]"><a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]">Gujarati</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cols px-[12px]">
                                <div class="custom-dropdown relative z-[5]">
                                    <a class="bb-dropdown-toggle transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] relative pr-[15px] font-light leading-[28px] tracking-[0.03rem]" href="#">Currency</a>
                                    <ul class="dropdown transition-all duration-[0.3s] ease-in-out min-w-[150px] py-[10px] px-[10px] mt-[25px] absolute z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] block border-[1px] border-solid border-[#eee] block rounded-[10px]">
                                        <li class="font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]"><a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]">USD $</a></li>
                                        <li class="font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]"><a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]">EUR €</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header py-[20px] max-[991px]:py-[15px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="inner-bottom-header flex justify-between max-[767px]:flex-col">
                        <div class="cols bb-logo-detail flex max-[767px]:justify-between">
                            <!-- Header Logo Start -->
                            <div class="header-logo flex items-center max-[575px]:justify-center">
                                <a href="index.html">
                                    <img src="assets/img/logo/logo.png" alt="logo" class="light w-[125px] max-[991px]:w-[115px] block">
                                    <img src="assets/img/logo/logo-dark.png" alt="logo" class="dark w-[125px] max-[991px]:w-[115px] hidden">
                                </a>
                            </div>
                            <!-- Header Logo End -->
                            <a href="javascript:void(0)" class="bb-sidebar-toggle bb-category-toggle hidden max-[991px]:flex max-[991px]:items-center max-[991px]:ml-[20px] max-[991px]:border-[1px] max-[991px]:border-solid max-[991px]:border-[#eee] max-[991px]:w-[40px] max-[991px]:h-[40px] max-[991px]:rounded-[15px] justify-center transition-all duration-[0.3s] ease-in-out font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">
                                <svg class="svg-icon h-[30px] w-[30px] max-[991px]:w-[22px] max-[991px]:h-[22px]" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-[#6c7fd8]" d="M384 928H192a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 608a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V640a32 32 0 0 0-32-32H192zM784 928H640a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v144a32 32 0 0 1-64 0V640a32 32 0 0 0-32-32H640a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h144a32 32 0 0 1 0 64zM384 480H192a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H192zM832 480H640a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM640 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H640z" />
                                </svg>
                            </a>
                        </div>
                        <div class="cols flex justify-center">
                            <div class="header-search w-[600px] max-[1399px]:w-[500px] max-[1199px]:w-[400px] max-[991px]:w-full max-[991px]:min-w-[300px] max-[767px]:py-[15px] max-[480px]:min-w-[auto]">
                                <form class="bb-btn-group-form flex relative max-[991px]:ml-[20px] max-[767px]:m-[0]" action="#">
                                    <div class="inner-select border-r-[1px] border-solid border-[#eee] h-full px-[20px] flex items-center absolute top-[0] left-[0] max-[991px]:hidden">
                                        <div class="custom-select w-[100px] capitalize text-[#777] flex items-center justify-between transition-all duration-[0.2s] ease-in text-[14px] relative">
                                            <select>
                                                <option value="option1">vegetables</option>
                                                <option value="option2">Cold Drinks</option>
                                                <option value="option3">Fruits</option>
                                                <option value="option4">Bakery</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input class="form-control bb-search-bar bg-[#fff] block w-full min-h-[45px] h-[48px] py-[10px] pr-[10px] pl-[160px] max-[991px]:min-h-[40px] max-[991px]:h-[40px] max-[991px]:p-[10px] text-[14px] font-normal leading-[1] text-[#777] rounded-[10px] border-[1px] border-solid border-[#eee] tracking-[0.5px]" placeholder="Search products..." type="text">
                                    <button class="submit absolute top-[0] left-[auto] right-[0] flex items-center justify-center w-[45px] h-full bg-transparent text-[#555] text-[16px] rounded-[0] outline-[0] border-[0] padding-[0]" type="submit">
                                        <i class="ri-search-line text-[18px] leading-[12px] text-[#555]"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="cols bb-icons flex justify-center">
                            <div class="bb-flex-justify max-[575px]:flex max-[575px]:justify-between">
                                <div class="bb-header-buttons h-full flex justify-end items-center">
                                    <div class="bb-acc-drop relative">
                                        <a href="javascript:void(0)" class="bb-header-btn bb-header-user dropdown-toggle bb-user-toggle transition-all duration-[0.3s] ease-in-out relative flex w-[auto] items-center whitespace-nowrap ml-[30px] max-[1199px]:ml-[20px] max-[767px]:ml-[0]" title="Account">
                                            <div class="header-icon relative flex">
                                                <svg class="svg-icon w-[30px] h-[30px] max-[1199px]:w-[25px] max-[1199px]:h-[25px] max-[991px]:w-[22px] max-[991px]:h-[22px]" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="fill-[#6c7fd8]" d="M512.476 648.247c-170.169 0-308.118-136.411-308.118-304.681 0-168.271 137.949-304.681 308.118-304.681 170.169 0 308.119 136.411 308.119 304.681C820.594 511.837 682.645 648.247 512.476 648.247L512.476 648.247zM512.476 100.186c-135.713 0-246.12 109.178-246.12 243.381 0 134.202 110.407 243.381 246.12 243.381 135.719 0 246.126-109.179 246.126-243.381C758.602 209.364 648.195 100.186 512.476 100.186L512.476 100.186zM935.867 985.115l-26.164 0c-9.648 0-17.779-6.941-19.384-16.35-2.646-15.426-6.277-30.52-11.142-44.95-24.769-87.686-81.337-164.13-159.104-214.266-63.232 35.203-134.235 53.64-207.597 53.64-73.555 0-144.73-18.537-208.084-53.922-78 50.131-134.75 126.68-159.564 214.549 0 0-4.893 18.172-11.795 46.4-2.136 8.723-10.035 14.9-19.112 14.9L88.133 985.116c-9.415 0-16.693-8.214-15.47-17.452C91.698 824.084 181.099 702.474 305.51 637.615c58.682 40.472 129.996 64.267 206.966 64.267 76.799 0 147.968-23.684 206.584-63.991 124.123 64.932 213.281 186.403 232.277 329.772C952.56 976.901 945.287 985.115 935.867 985.115L935.867 985.115z" />
                                                </svg>
                                            </div>
                                            <div class="bb-btn-desc flex flex-col ml-[10px] max-[1199px]:hidden">
                                                <span class="bb-btn-title font-Poppins transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#3d4750] mb-[4px] tracking-[0.6px] capitalize font-medium whitespace-nowrap">Account</span>
                                                <span class="bb-btn-stitle font-Poppins transition-all duration-[0.3s] ease-in-out text-[14px] leading-[16px] font-semibold text-[#3d4750]  tracking-[0.03rem] whitespace-nowrap">Login</span>
                                            </div>
                                        </a>
                                        <ul class="bb-dropdown-menu min-w-[150px] py-[10px] px-[5px] transition-all duration-[0.3s] ease-in-out mt-[25px] absolute z-[16] text-left opacity-[0] right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] block rounded-[10px]">
                                            <li class="py-[4px] px-[15px] m-[0] font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] hover:text-[#6c7fd8] leading-[22px] block w-full font-normal tracking-[0.03rem]" href="register.html">Register</a></li>
                                            <li class="py-[4px] px-[15px] m-[0] font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] hover:text-[#6c7fd8] leading-[22px] block w-full font-normal tracking-[0.03rem]" href="checkout.html">Checkout</a></li>
                                            <li class="py-[4px] px-[15px] m-[0] font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] hover:text-[#6c7fd8] leading-[22px] block w-full font-normal tracking-[0.03rem]" href="login.html">Login</a></li>
                                        </ul>
                                    </div>
                                    <a href="wishlist.html" class="bb-header-btn bb-wish-toggle transition-all duration-[0.3s] ease-in-out relative flex w-[auto] items-center ml-[30px] max-[1199px]:ml-[20px]" title="Wishlist">
                                        <div class="header-icon relative flex">
                                            <svg class="svg-icon w-[30px] h-[30px] max-[1199px]:w-[25px] max-[1199px]:h-[25px] max-[991px]:w-[22px] max-[991px]:h-[22px]" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <path class="fill-[#6c7fd8]" d="M512 128l121.571556 250.823111 276.366222 39.111111-199.281778 200.504889L756.622222 896 512 769.536 267.377778 896l45.852444-277.617778-199.111111-200.504889 276.366222-39.111111L512 128m0-56.888889a65.962667 65.962667 0 0 0-59.477333 36.807111l-102.940445 213.703111-236.828444 35.214223a65.422222 65.422222 0 0 0-52.366222 42.979555 62.577778 62.577778 0 0 0 15.274666 64.967111l173.511111 173.340445-40.248889 240.355555a63.374222 63.374222 0 0 0 26.993778 62.577778 67.242667 67.242667 0 0 0 69.632 3.726222L512 837.290667l206.478222 107.605333a67.356444 67.356444 0 0 0 69.688889-3.726222 63.374222 63.374222 0 0 0 26.908445-62.577778l-40.277334-240.355556 173.511111-173.340444a62.577778 62.577778 0 0 0 15.246223-64.967111 65.422222 65.422222 0 0 0-52.366223-42.979556l-236.8-35.214222-102.968889-213.703111A65.848889 65.848889 0 0 0 512 71.111111z" fill="#364C58" />
                                            </svg>
                                        </div>
                                        <div class="bb-btn-desc flex flex-col ml-[10px] max-[1199px]:hidden">
                                            <span class="bb-btn-title font-Poppins transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#3d4750] mb-[4px] tracking-[0.6px] capitalize font-medium whitespace-nowrap"><b class="bb-wishlist-count">3</b> items</span>
                                            <span class="bb-btn-stitle font-Poppins transition-all duration-[0.3s] ease-in-out text-[14px] leading-[16px] font-semibold text-[#3d4750]  tracking-[0.03rem] whitespace-nowrap">Wishlist</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="bb-header-btn bb-cart-toggle transition-all duration-[0.3s] ease-in-out relative flex w-[auto] items-center ml-[30px] max-[1199px]:ml-[20px]" title="Cart">
                                        <div class="header-icon relative flex">
                                            <svg class="svg-icon w-[30px] h-[30px] max-[1199px]:w-[25px] max-[1199px]:h-[25px] max-[991px]:w-[22px] max-[991px]:h-[22px]" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <path class="fill-[#6c7fd8]" d="M351.552 831.424c-35.328 0-63.968 28.64-63.968 63.968 0 35.328 28.64 63.968 63.968 63.968 35.328 0 63.968-28.64 63.968-63.968C415.52 860.064 386.88 831.424 351.552 831.424L351.552 831.424 351.552 831.424zM799.296 831.424c-35.328 0-63.968 28.64-63.968 63.968 0 35.328 28.64 63.968 63.968 63.968 35.328 0 63.968-28.64 63.968-63.968C863.264 860.064 834.624 831.424 799.296 831.424L799.296 831.424 799.296 831.424zM862.752 799.456 343.264 799.456c-46.08 0-86.592-36.448-92.224-83.008L196.8 334.592 165.92 156.128c-1.92-15.584-16.128-28.288-29.984-28.288L95.2 127.84c-17.664 0-32-14.336-32-31.968 0-17.664 14.336-32 32-32l40.736 0c46.656 0 87.616 36.448 93.28 83.008l30.784 177.792 54.464 383.488c1.792 14.848 15.232 27.36 28.768 27.36l519.488 0c17.696 0 32 14.304 32 31.968S880.416 799.456 862.752 799.456L862.752 799.456zM383.232 671.52c-16.608 0-30.624-12.8-31.872-29.632-1.312-17.632 11.936-32.928 29.504-34.208l433.856-31.968c15.936-0.096 29.344-12.608 31.104-26.816l50.368-288.224c1.28-10.752-1.696-22.528-8.128-29.792-4.128-4.672-9.312-7.04-15.36-7.04L319.04 223.84c-17.664 0-32-14.336-32-31.968 0-17.664 14.336-31.968 32-31.968l553.728 0c24.448 0 46.88 10.144 63.232 28.608 18.688 21.088 27.264 50.784 23.52 81.568l-50.4 288.256c-5.44 44.832-45.92 81.28-92 81.28L385.6 671.424C384.8 671.488 384 671.52 383.232 671.52L383.232 671.52zM383.232 671.52" />
                                            </svg>
                                            <span class="main-label-note-new"></span>
                                        </div>
                                        <div class="bb-btn-desc flex flex-col ml-[10px] max-[1199px]:hidden">
                                            <span class="bb-btn-title font-Poppins transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#3d4750] mb-[4px] tracking-[0.6px] capitalize font-medium whitespace-nowrap"><b class="bb-cart-count">4</b> items</span>
                                            <span class="bb-btn-stitle font-Poppins transition-all duration-[0.3s] ease-in-out text-[14px] leading-[16px] font-semibold text-[#3d4750]  tracking-[0.03rem] whitespace-nowrap">Cart</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="bb-toggle-menu hidden max-[991px]:flex max-[991px]:ml-[20px]">
                                        <div class="header-icon">
                                            <i class="ri-menu-3-fill text-[22px] text-[#6c7fd8]"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bb-main-menu-desk bg-[#fff] py-[5px] border-t-[1px] border-solid border-[#eee] max-[991px]:hidden">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bb-inner-menu-desk flex max-[1199px]:relative max-[991px]:justify-between">
                        <a href="javascript:void(0)" class="bb-header-btn bb-sidebar-toggle bb-category-toggle transition-all duration-[0.3s] ease-in-out h-[45px] w-[45px] mr-[30px] p-[8px] flex items-center justify-center bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px] relative max-[767px]:m-[0] max-[575px]:hidden">
                            <svg class="svg-icon w-[25px] h-[25px]" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-[#6c7fd8]" d="M384 928H192a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 608a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V640a32 32 0 0 0-32-32H192zM784 928H640a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v144a32 32 0 0 1-64 0V640a32 32 0 0 0-32-32H640a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h144a32 32 0 0 1 0 64zM384 480H192a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H192zM832 480H640a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM640 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H640z" />
                            </svg>
                        </a>
                        <button class="navbar-toggler shadow-none hidden" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ri-menu-2-line"></i>
                        </button>
                        <div class="bb-main-menu relative flex flex-[auto] justify-start max-[991px]:hidden" id="navbarSupportedContent">
                            <ul class="navbar-nav flex flex-wrap flex-row ">
                                <li class="nav-item flex items-center font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] mr-[35px]">
                                    <a class="nav-link p-[0] font-Poppins leading-[28px] text-[15px] font-medium text-[#3d4750] tracking-[0.03rem] block" href="index.html">Home</a>
                                </li>
                                <li class="nav-item bb-main-dropdown flex items-center mr-[45px]">
                                    <a class="nav-link bb-dropdown-item font-Poppins relative p-[0] leading-[28px] text-[15px] font-medium text-[#3d4750] block tracking-[0.03rem]" href="javascript:void(0)">Categories</a>
                                    <ul class="mega-menu min-w-full transition-all duration-[0.3s] ease-in-out mt-[25px] pl-[30px] absolute top-[40px] z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] flex flex-col rounded-[10px]">
                                        <li class="m-[0] flex items-center">
                                            <ul class="mega-block w-[calc(25%-30px)] mr-[30px] py-[15px]">
                                                <li class="menu_title border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] flex items-center leading-[28px]"><a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins h-[auto] text-[#6c7fd8] text-[15px] font-medium tracking-[0.03rem] block py-[10px] leading-[22px] capitalize">Classic</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">Left sidebar 3 column</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-left-sidebar-col-4.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">Left sidebar 4 column</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-right-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">Right sidebar 3 column</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-right-sidebar-col-4.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">Right sidebar 4 column</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-full-width.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">Full width 4 column</a></li>
                                            </ul>
                                            <ul class="mega-block w-[calc(25%-30px)] mr-[30px] py-[15px]">
                                                <li class="menu_title border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] flex items-center leading-[28px]"><a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins h-[auto] text-[#6c7fd8] text-[15px] font-medium tracking-[0.03rem] block py-[10px] leading-[22px] capitalize">Banner</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-banner-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">left sidebar 3 column</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-banner-left-sidebar-col-4.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">left sidebar 4 column</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-banner-right-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">right sidebar 3 column</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-banner-right-sidebar-col-4.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">right sidebar 4 column</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-banner-full-width.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">Full width 4 column</a></li>
                                            </ul>
                                            <ul class="mega-block w-[calc(25%-30px)] mr-[30px] py-[15px]">
                                                <li class="menu_title border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] flex items-center leading-[28px]"><a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins h-[auto] text-[#6c7fd8] text-[15px] font-medium tracking-[0.03rem] block py-[10px] leading-[22px] capitalize">Columns</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-full-width-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">3 Columns full width</a> </li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-full-width-col-4.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">4 Columns full width</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-full-width-col-5.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">5 Columns full width</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-full-width-col-6.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">6 Columns full width</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-banner-full-width-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">Banner 3 Columns</a></li>
                                            </ul>
                                            <ul class="mega-block w-[calc(25%-30px)] mr-[30px] py-[15px]">
                                                <li class="menu_title border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] flex items-center leading-[28px]"><a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins h-[auto] text-[#6c7fd8] text-[15px] font-medium tracking-[0.03rem] block py-[10px] leading-[22px] capitalize">List</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-list-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">Shop left sidebar</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-list-right-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">Shop right sidebar</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-list-banner-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">Banner left sidebar</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-list-banner-right-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">Banner right sidebar</a></li>
                                                <li class="flex items-center leading-[28px]"><a href="shop-list-full-col-2.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize">Full width 2 columns</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item bb-dropdown flex items-center relative mr-[45px]">
                                    <a class="nav-link bb-dropdown-item font-Poppins relative p-[0] leading-[28px] text-[15px] font-medium text-[#3d4750] block tracking-[0.03rem]" href="javascript:void(0)">Products</a>
                                    <ul class="bb-dropdown-menu min-w-[205px] p-[10px] transition-all duration-[0.3s] ease-in-out mt-[25px] absolute top-[40px] z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] flex flex-col rounded-[10px]">
                                        <li class="bb-mega-dropdown m-[0] py-[5px] px-[15px] relative flex items-center">
                                            <a class="bb-mega-item transition-all duration-[0.3s] ease-in-out font-Poppins py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize tracking-[0.03rem]" href="javascript:void(0)">Product page</a>
                                            <ul class="bb-mega-menu transition-all duration-[0.3s] ease-in-out min-w-[220px] p-[10px] mt-[25px] absolute top-[-20px] left-[193px] z-[16] text-left opacity-[0] invisible right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] flex flex-col rounded-[10px]">
                                                <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[6px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize" href="product-left-sidebar.html">Product left sidebar</a></li>
                                                <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[6px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize" href="product-right-sidebar.html">Product right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="bb-mega-dropdown m-[0] py-[5px] px-[15px] relative flex items-center">
                                            <a class="bb-mega-item transition-all duration-[0.3s] ease-in-out font-Poppins py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize tracking-[0.03rem]" href="javascript:void(0)">Product Accordion</a>
                                            <ul class="bb-mega-menu transition-all duration-[0.3s] ease-in-out min-w-[220px] p-[10px] mt-[25px] absolute top-[-20px] left-[193px] z-[16] text-left opacity-[0] invisible right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] flex flex-col rounded-[10px]">
                                                <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[6px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize" href="product-accordion-left-sidebar.html">left sidebar</a></li>
                                                <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[6px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize" href="product-accordion-right-sidebar.html">right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="m-[0] py-[5px] px-[15px] relative flex items-center">
                                            <a href="product-full-width.html" class="font-Poppins transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize tracking-[0.03rem]">Product full width</a>
                                        </li>
                                        <li class="m-[0] py-[5px] px-[15px] relative flex items-center">
                                            <a href="product-accordion-full-width.html" class="font-Poppins transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize tracking-[0.03rem]">accordion full width</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item bb-dropdown flex items-center relative mr-[45px]">
                                    <a class="nav-link bb-dropdown-item font-Poppins relative p-[0] leading-[28px] text-[15px] font-medium text-[#3d4750] block tracking-[0.03rem]" href="javascript:void(0)">Pages</a>
                                    <ul class="bb-dropdown-menu min-w-[205px] p-[10px] transition-all duration-[0.3s] ease-in-out mt-[25px] absolute top-[40px] z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] flex flex-col rounded-[10px]">
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap" href="about-us.html">About Us</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap" href="contact-us.html">Contact Us</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap" href="cart.html">Cart</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap" href="checkout.html">Checkout</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap" href="compare.html">Compare</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap" href="faq.html">Faq</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap" href="login.html">Login</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap" href="register.html">Register</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item bb-dropdown flex items-center relative mr-[45px]">
                                    <a class="nav-link bb-dropdown-item font-Poppins relative p-[0] leading-[28px] text-[15px] font-medium text-[#3d4750] block tracking-[0.03rem]" href="javascript:void(0)">Blog</a>
                                    <ul class="bb-dropdown-menu min-w-[205px] p-[10px] transition-all duration-[0.3s] ease-in-out mt-[25px] absolute top-[40px] z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] flex flex-col rounded-[10px]">
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap" href="blog-left-sidebar.html">Left Sidebar</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap" href="blog-right-sidebar.html">Right Sidebar</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap" href="blog-full-width.html">Full Width</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap" href="blog-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap" href="blog-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap" href="blog-detail-full-width.html">Detail Full Width</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item flex items-center">
                                    <a class="nav-link font-Poppins  p-[0] leading-[28px] text-[15px] font-medium tracking-[0.03rem] text-[#3d4750] flex" href="offer.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="w-[20px] h-[25px] mr-[5px] leading-[18px] align-middle">
                                                <g>
                                                    <path d="M10 16v22c0 .3.1.6.2.8.3.6 6.5 13.8 21 20h.2c.2 0 .3.1.5.1s.3 0 .5-.1h.2c14.5-6.2 20.8-19.4 21-20 .1-.3.2-.5.2-.8V16c0-.9-.6-1.7-1.5-1.9-7.6-1.9-19.3-9.6-19.4-9.7-.1-.1-.2-.1-.4-.2-.1 0-.1 0-.2-.1h-.9c-.1 0-.2.1-.3.1-.1.1-.2.1-.4.2s-11.8 7.8-19.4 9.7c-.7.2-1.3 1-1.3 1.9zm4 1.5c6.7-2.1 15-7.2 18-9.1 3 1.9 11.3 7 18 9.1v20c-1.1 2.1-6.7 12.1-18 17.3-11.3-5.2-16.9-15.2-18-17.3z" fill="#000000" opacity="1" data-original="#000000" class="fill-[#6c7fd8]"></path>
                                                    <path d="M28.6 38.4c.4.4.9.6 1.4.6s1-.2 1.4-.6l9.9-9.9c.8-.8.8-2 0-2.8s-2-.8-2.8 0L30 34.2l-4.5-4.5c-.8-.8-2-.8-2.8 0s-.8 2 0 2.8z" fill="#000000" opacity="1" data-original="#000000" class="fill-[#6c7fd8]"></path>
                                                </g>
                                            </svg>
                                        Offers
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="bb-dropdown-menu flex max-[991px]:hidden">
                            <div class="inner-select w-[180px] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px] flex items-center">
                                <svg class="svg-icon m-[10px] w-[25px] h-[25px] align-middle" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M511.614214 958.708971c-21.76163 0-41.744753-9.781784-54.865586-26.862811L222.50156 626.526383c-3.540639-4.044106-5.872754-7.978718-7.349385-10.461259-41.72838-58.515718-63.959707-127.685078-63.959707-199.699228 0.87288-193.650465 162.903184-351.075891 361.209691-351.075891 198.726064 0 360.40435 157.49194 360.40435 351.075891-0.839111 72.190159-23.070438 140.856052-64.345494 199.053522-1.962701 3.288906-4.312212 7.189749-7.735171 11.098779L566.479799 931.847184c-13.120832 17.080004-33.103956 26.861788-54.865585 26.861787zM273.525654 580.51956a33.707706 33.707706 0 0 1 2.63399 3.037173L511.278569 890.00931 747.068783 583.556733c0.435928-0.569982 0.889253-1.124614 1.358951-1.669013l2.51631-4.102434c0.285502-0.453325 0.587378-0.89744 0.889253-1.325182 33.507138-46.921659 51.577702-102.416578 52.248991-160.487158 0-155.294902-130.839931-281.95565-291.679105-281.95565-160.571069 0-291.780413 126.72931-292.484448 282.501073 0 57.450457 17.802458 112.811322 51.460022 159.933549l2.90312 4.580318c0.418532 0.73678-0.186242 0.032746-0.756223-0.512676z m476.059439 0.100284v0z m0.066515-0.058329c-0.016373 0.016373-0.033769 0.025583-0.033769 0.041956 0.001023-0.016373 0.017396-0.025583 0.033769-0.041956z m0.051166-0.041955a0.227174 0.227174 0 0 0-0.050142 0.041955c0.016373-0.016373 0.032746-0.033769 0.050142-0.041955z" fill="#444444" class="fill-[#6c7fd8]" />
                                    <path d="M512 577.206094c-90.000803 0-163.222455-73.221652-163.222455-163.222455s73.221652-163.222455 163.222455-163.222455S675.222455 323.982836 675.222455 413.983639s-73.222675 163.222455-163.222455 163.222455z m0-240.538355c-42.634006 0-77.3159 34.68087-77.3159 77.3159s34.68087 77.3159 77.3159 77.3159 77.3159-34.681894 77.3159-77.3159-34.681894-77.3159-77.3159-77.3159z" fill="#00D8A0" class="fill-[#6c7fd8]" />
                                </svg>
                                <div class="custom-select transition-all duration-[0.3s] ease-in-out w-full h-full pr-[15px] text-[#777] flex items-center justify-between text-[14px] relative">
                                    <select>
                                        <option value="option1">Surat</option>
                                        <option value="option2">Delhi</option>
                                        <option value="option3">Rajkot</option>
                                        <option value="option4">Udaipur</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bb-mobile-menu-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#000000cc] z-[16]"></div>
    <div id="bb-mobile-menu" class="bb-mobile-menu transition-all duration-[0.3s] ease-in-out w-[340px] h-full pt-[15px] px-[20px] pb-[20px] fixed top-[0] right-[auto] left-[0] bg-[#fff] translate-x-[-100%] flex flex-col z-[17] overflow-auto max-[480px]:w-[300px]">
        <div class="bb-menu-title w-full pb-[10px] flex flex-wrap justify-between">
            <span class="menu_title font-Poppins flex items-center text-[16px] text-[#3d4750] font-semibold leading-[26px] tracking-[0.02rem]">My Menu</span>
            <button type="button" class="bb-close-menu relative border-[0] text-[30px] leading-[1] text-[#ff0000] bg-transparent">×</button>
        </div>
        <div class="bb-menu-inner">
            <div class="bb-menu-content">
                <ul>
                    <li class="relative">
                        <a href="index.html" class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]">Home</a>
                    </li>
                    <li class="relative">
                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]">Categories</a>
                        <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                            <li class="relative">
                                <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]">Classic</a>
                                <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                                    <li class="relative"><a href="shop-left-sidebar-col-3.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Left sidebar 3 column</a></li>
                                    <li class="relative"><a href="shop-left-sidebar-col-4.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Left sidebar 4 column</a></li>
                                    <li class="relative"><a href="shop-right-sidebar-col-3.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Right sidebar 3 column</a></li>
                                    <li class="relative"><a href="shop-right-sidebar-col-4.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Right sidebar 4 column</a></li>
                                    <li class="relative"><a href="shop-full-width.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Full width 4 column</a></li>
                                </ul>
                            </li>
                            <li class="relative">
                                <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]">Banner</a>
                                <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                                    <li class="relative"><a href="shop-banner-left-sidebar-col-3.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Left sidebar 3 column</a></li>
                                    <li class="relative"><a href="shop-banner-left-sidebar-col-4.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Left sidebar 4 column</a></li>
                                    <li class="relative"><a href="shop-banner-right-sidebar-col-3.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Right sidebar 3 column</a></li>
                                    <li class="relative"><a href="shop-banner-right-sidebar-col-4.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Right sidebar 4 column</a></li>
                                    <li class="relative"><a href="shop-banner-full-width.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Full width 4 column</a></li>
                                </ul>
                            </li>
                            <li class="relative">
                                <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]">Columns</a>
                                <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                                    <li class="relative"><a href="shop-full-width-col-3.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">3 Columns full width</a></li>
                                    <li class="relative"><a href="shop-full-width-col-4.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">4 Columns full width</a></li>
                                    <li class="relative"><a href="shop-full-width-col-5.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">5 Columns full width</a></li>
                                    <li class="relative"><a href="shop-full-width-col-6.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">6 Columns full width</a></li>
                                    <li class="relative"><a href="shop-banner-full-width-col-3.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Banner 3 Columns</a></li>
                                </ul>
                            </li>
                            <li class="relative">
                                <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]">List</a>
                                <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                                    <li class="relative"><a href="shop-list-left-sidebar.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Shop left sidebar</a></li>
                                    <li class="relative"><a href="shop-list-right-sidebar.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Shop right sidebar</a></li>
                                    <li class="relative"><a href="shop-list-banner-left-sidebar.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Banner left sidebar</a></li>
                                    <li class="relative"><a href="shop-list-banner-right-sidebar.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Banner right sidebar</a></li>
                                    <li class="relative"><a href="shop-list-full-col-2.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Full width 2 columns</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]">Products</a>
                        <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                            <li class="relative">
                                <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]">Product page</a>
                                <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                                    <li class="relative"><a href="product-left-sidebar.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Product left sidebar</a></li>
                                    <li class="relative"><a href="product-right-sidebar.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Product right sidebar</a></li>
                                </ul>
                            </li>
                            <li class="relative">
                                <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]">Product Accordion</a>
                                <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                                    <li class="relative"><a href="product-accordion-left-sidebar.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">left sidebar</a></li>
                                    <li class="relative"><a href="product-accordion-right-sidebar.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">right sidebar</a></li>
                                </ul>
                            </li>
                            <li class="relative"><a href="product-full-width.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Product full width</a></li>
                            <li class="relative"><a href="product-accordion-full-width.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">accordion full width</a></li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]">Pages</a>
                        <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                            <li class="relative"><a href="about-us.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">About Us</a></li>
                            <li class="relative"><a href="contact-us.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Contact Us</a></li>
                            <li class="relative"><a href="cart.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Cart</a></li>
                            <li class="relative"><a href="checkout.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Checkout</a></li>
                            <li class="relative"><a href="compare.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Compare</a></li>
                            <li class="relative"><a href="faq.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Faq</a></li>
                            <li class="relative"><a href="login.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Login</a></li>
                            <li class="relative"><a href="register.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Register</a></li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]">Blog</a>
                        <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                            <li class="relative"><a href="blog-left-sidebar.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Left Sidebar</a></li>
                            <li class="relative"><a href="blog-right-sidebar.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Right Sidebar</a></li>
                            <li class="relative"><a href="blog-full-width.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Full Width</a></li>
                            <li class="relative"><a href="blog-detail-left-sidebar.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Detail Left Sidebar</a></li>
                            <li class="relative"><a href="blog-detail-right-sidebar.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Detail Right Sidebar</a></li>
                            <li class="relative"><a href="blog-detail-full-width.html" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Detail Full Width</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="header-res-lan-curr">
                <!-- Social Start -->
                <div class="header-res-social mt-[30px]">
                    <div class="header-top-social">
                        <ul class="flex flex-row justify-center mb-[0]">
                            <li class="list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]">
                                <a href="#" class="transition-all duration-[0.3s] ease-in-out"><i class="ri-facebook-fill text-[#fff] text-[15px]"></i></a>
                            </li>
                            <li class="list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]">
                                <a href="#" class="transition-all duration-[0.3s] ease-in-out"><i class="ri-twitter-fill text-[#fff] text-[15px]"></i></a>
                            </li>
                            <li class="list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]">
                                <a href="#" class="transition-all duration-[0.3s] ease-in-out"><i class="ri-instagram-line text-[#fff] text-[15px]"></i></a>
                            </li>
                            <li class="list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px]">
                                <a href="#" class="transition-all duration-[0.3s] ease-in-out"><i class="ri-linkedin-fill text-[#fff] text-[15px]"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Social End -->
            </div>
        </div>
    </div>
</header>

<!-- Hero -->
<section class="section-hero mb-[50px] max-[1199px]:mb-[35px] py-[50px] relative bg-[#f8f8fb] overflow-hidden">
    <div class="bb-social-follow absolute left-[20px] bottom-[30px] max-[1250px]:hidden">
        <ul class="inner-links">
            <li class="p-[6px] rotate-[270deg]">
                <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium text-[#777] hover:text-[#6c7fd8] leading-[28px] tracking-[0.03rem] uppercase">Fb</a>
            </li>
            <li class="p-[6px] rotate-[270deg]">
                <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium text-[#777] hover:text-[#6c7fd8] leading-[28px] tracking-[0.03rem] uppercase">Li</a>
            </li>
            <li class="p-[6px] rotate-[270deg]">
                <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium text-[#777] hover:text-[#6c7fd8] leading-[28px] tracking-[0.03rem] uppercase">Dr</a>
            </li>
            <li class="p-[6px] rotate-[270deg]">
                <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium text-[#777] hover:text-[#6c7fd8] leading-[28px] tracking-[0.03rem] uppercase">In</a>
            </li>
        </ul>
    </div>
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full">
                <div class="hero-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-1">
                            <div class="flex flex-wrap w-full mb-[-24px]">
                                <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-1 order-2 mb-[24px]">
                                    <div class="hero-contact h-full flex flex-col items-start justify-center max-[991px]:items-center">
                                        <p class="mb-[20px] font-Poppins text-[18px] text-[#777] font-light leading-[28px] tracking-[0.03rem] max-[1199px]:mb-[10px] max-[1199px]:text-[16px]">Flat 30% Off</p>
                                        <h1 class="mb-[20px] font-quicksand text-[50px] text-[#3d4750] font-bold tracking-[0.03rem] leading-[1.2] max-[1199px]:mb-[10px] max-[1199px]:text-[38px] max-[991px]:text-center max-[991px]:text-[45px] max-[767px]:text-[40px] max-[575px]:text-[35px] max-[420px]:text-[30px] max-[360px]:text-[28px]">Explore <span class="relative text-[#6c7fd8]">Healthy</span><br> & Fresh Fruits</h1>
                                        <a href="shop-left-sidebar-col-3.html" class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] max-[1199px]:py-[3px] max-[1199px]:px-[15px] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Shop Now</a>
                                    </div>
                                </div>
                                <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-2 order-1 mb-[24px]">
                                    <div class="hero-image pr-[50px] relative max-[991px]:px-[50px] max-[575px]:px-[30px] flex justify-center max-[420px]:p-[0]">
                                        <img src="assets/img/hero/hero-1.png" alt="hero" class="w-full pb-[50px] opacity-[1] max-[1199px]:pr-[30px] max-[991px]:pr-[0] max-[575px]:pb-[30px] max-[420px]:pb-[15px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="animate-shape w-[120%] absolute top-[-50px] right-[-50px] z-[-1] max-[1399px]:right-[-30px] max-[1199px]:w-[125%] max-[991px]:w-[100%] max-[991px]:top-[0] max-[575px]:right-[0] max-[420px]:w-[110%] max-[420px]:right-[-30px]">
                                            <linearGradient id="shape_1" x1="100%" x2="0%" y1="100%" y2="0%"></linearGradient>
                                            <path d="">
                                                <animate repeatCount="indefinite" attributeName="d" dur="15s" values="" />
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-2">
                            <div class="flex flex-wrap w-full mb-[-24px]">
                                <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-1 order-2 mb-[24px]">
                                    <div class="hero-contact h-full flex flex-col items-start justify-center max-[991px]:items-center">
                                        <p class="mb-[20px] font-Poppins text-[18px] text-[#777] font-light leading-[28px] tracking-[0.03rem] max-[1199px]:mb-[10px] max-[1199px]:text-[16px]">Flat 20% Off</p>
                                        <h2 class="mb-[20px] font-quicksand text-[50px] text-[#3d4750] font-bold tracking-[0.03rem] leading-[1.2] max-[1199px]:mb-[10px] max-[1199px]:text-[38px] max-[991px]:text-center max-[991px]:text-[45px] max-[767px]:text-[40px] max-[575px]:text-[35px] max-[420px]:text-[30px] max-[360px]:text-[28px]">Explore <span class="relative text-[#6c7fd8]">Warm</span><br> Fast Food & Snacks</h2>
                                        <a href="shop-left-sidebar-col-3.html" class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] max-[1199px]:py-[3px] max-[1199px]:px-[15px] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Shop Now</a>
                                    </div>
                                </div>
                                <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-2 order-1 mb-[24px]">
                                    <div class="hero-image pr-[50px] relative max-[991px]:px-[50px] max-[575px]:px-[30px] flex justify-center max-[420px]:p-[0]">
                                        <img src="assets/img/hero/hero-2.png" alt="hero" class="w-full pb-[50px] opacity-[1] max-[1199px]:pr-[30px] max-[991px]:pr-[0] max-[575px]:pb-[30px] max-[420px]:pb-[15px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="animate-shape w-[120%] absolute top-[-50px] right-[-50px] z-[-1] max-[1399px]:right-[-30px] max-[1199px]:w-[125%] max-[991px]:w-[100%] max-[991px]:top-[0] max-[575px]:right-[0] max-[420px]:w-[110%] max-[420px]:right-[-30px]">
                                            <linearGradient id="shape_2" x1="80%" x2="0%" y1="80%" y2="0%">
                                            </linearGradient>
                                            <path d="">
                                                <animate repeatCount="indefinite" attributeName="d" dur="15s"
                                                         values="" />
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-3">
                            <div class="flex flex-wrap w-full mb-[-24px]">
                                <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-1 order-2 mb-[24px]">
                                    <div class="hero-contact h-full flex flex-col items-start justify-center max-[991px]:items-center">
                                        <p class="mb-[20px] font-Poppins text-[18px] text-[#777] font-light leading-[28px] tracking-[0.03rem] max-[1199px]:mb-[10px] max-[1199px]:text-[16px]">Flat 30% Off</p>
                                        <h2 class="mb-[20px] font-quicksand text-[50px] text-[#3d4750] font-bold tracking-[0.03rem] leading-[1.2] max-[1199px]:mb-[10px] max-[1199px]:text-[38px] max-[991px]:text-center max-[991px]:text-[45px] max-[767px]:text-[40px] max-[575px]:text-[35px] max-[420px]:text-[30px] max-[360px]:text-[28px]">Explore <span class="relative text-[#6c7fd8]">Organic</span><br> & Fresh Vegetables</h2>
                                        <a href="shop-left-sidebar-col-3.html" class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] max-[1199px]:py-[3px] max-[1199px]:px-[15px] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Shop Now</a>
                                    </div>
                                </div>
                                <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-2 order-1 mb-[24px]">
                                    <div class="hero-image pr-[50px] relative max-[991px]:px-[50px] max-[575px]:px-[30px] flex justify-center max-[420px]:p-[0]">
                                        <img src="assets/img/hero/hero-3.png" alt="hero" class="w-full pb-[50px] opacity-[1] max-[1199px]:pr-[30px] max-[991px]:pr-[0] max-[575px]:pb-[30px] max-[420px]:pb-[15px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" class="animate-shape w-[120%] absolute top-[-50px] right-[-50px] z-[-1] max-[1399px]:right-[-30px] max-[1199px]:w-[125%] max-[991px]:w-[100%] max-[991px]:top-[0] max-[575px]:right-[0] max-[420px]:w-[110%] max-[420px]:right-[-30px]">
                                            <linearGradient id="shape_3" x1="80%" x2="0%" y1="80%" y2="0%">
                                            </linearGradient>
                                            <path d="">
                                                <animate repeatCount="indefinite" attributeName="d" dur="15s"
                                                         values="" />
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-white"></div>
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bb-scroll-Page absolute right-[-15px] bottom-[75px] rotate-[270deg] max-[575px]:hidden">
            <span class="scroll-bar transition-all duration-[0.3s] ease-in-out relative max-[1250px]:hidden">
                <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium leading-[28px] tracking-[0.03rem] text-[#686e7d]">Scroll Page</a>
            </span>
    </div>
</section>

<!-- Category -->
<section class="section-category overflow-hidden py-[50px] max-[1199px]:py-[35px]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="min-[992px]:w-[41.66%] w-full px-[12px] mb-[24px]">
                <div class="bb-category-img relative max-[991px]:hidden">
                    <img src="assets/img/category/category.jpg" alt="category" class="w-full rounded-[30px]">
                    <div class="bb-offers py-[5px] px-[15px] absolute top-[20px] right-[20px] bg-[#000] opacity-[0.8] rounded-[15px]">
                        <span class="text-[14px] font-normal text-[#fff]">50% Off</span>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[58.33%] w-full px-[12px] mb-[24px]">
                <div class="bb-category-contact max-[991px]:mt-[-24px]">
                    <div class="category-title mb-[30px] max-[991px]:hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <h2 class="font-quicksand text-[124px] text-[#fff] opacity-[0.15] font-bold leading-[1.2] tracking-[0.03rem] max-[1399px]:text-[95px] max-[1199px]:text-[70px] max-[767px]:text-[42px]">Explore Categories</h2>
                    </div>
                    <div class="bb-category-block owl-carousel ml-[-150px] w-[calc(100%+150px)] pt-[30px] pl-[30px] bg-[#fff] rounded-tl-[30px] relative max-[991px]:ml-[0] max-[991px]:w-full max-[991px]:p-[0]">
                        <div class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-1 bg-[#fef1f1]" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
                            <div class="category-image mb-[12px]">
                                <img src="assets/img/category/1.svg" alt="category" class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                            </div>
                            <div class="category-sub-contact">
                                <h5 class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]"><a href="shop-left-sidebar-col-3.html" class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">vegetables</a></h5>
                                <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">485 items</p>
                            </div>
                        </div>
                        <div class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-2 bg-[#e1fcf2]" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400">
                            <div class="category-image mb-[12px]">
                                <img src="assets/img/category/2.svg" alt="category" class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                            </div>
                            <div class="category-sub-contact">
                                <h5 class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]"><a href="shop-left-sidebar-col-3.html" class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">Fruits</a></h5>
                                <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">291 items</p>
                            </div>
                        </div>
                        <div class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe]" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600">
                            <div class="category-image mb-[12px]">
                                <img src="assets/img/category/3.svg" alt="category" class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                            </div>
                            <div class="category-sub-contact">
                                <h5 class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]"><a href="shop-left-sidebar-col-3.html" class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">Cold Drinks</a></h5>
                                <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">49 items</p>
                            </div>
                        </div>
                        <div class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-4 bg-[#fbf9e4]" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="800">
                            <div class="category-image mb-[12px]">
                                <img src="assets/img/category/4.svg" alt="category" class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                            </div>
                            <div class="category-sub-contact">
                                <h5 class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]"><a href="shop-left-sidebar-col-3.html" class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">Bakery</a></h5>
                                <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">08 items</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Day of the deal -->
<section class="section-deal overflow-hidden py-[50px] max-[1199px]:py-[35px]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="section-title bb-deal mb-[20px] pb-[20px] z-[5] relative flex justify-between max-[991px]:pb-[0] max-[991px]:flex-col max-[991px]:justify-center max-[991px]:text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="section-detail max-[991px]:mb-[12px]">
                        <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">Day of the <span class="text-[#6c7fd8]">deal</span></h2>
                        <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">Don't wait. The time will never be just right.</p>
                    </div>
                    <div id="dealend" class="dealend-timer"></div>
                </div>
            </div>
            <div class="w-full px-[12px]">
                <div class="bb-deal-slider m-[-12px]">
                    <div class="bb-deal-block owl-carousel">
                        <div class="bb-deal-card p-[12px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                            <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                        </span>
                                    <a href="javascript:void(0)">
                                        <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                            <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/product/1.jpg" alt="product-1">
                                            <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/product/back-1.jpg" alt="product-1">
                                        </div>
                                    </a>
                                    <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bb-pro-contact p-[20px]">
                                    <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                        <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Chocos</a>
                                        <span class="bb-pro-rating">
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                            </span>
                                    </div>
                                    <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                        <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Mixed Fruits Chocolates Pack</a>
                                    </h4>
                                    <div class="bb-price flex flex-wrap justify-between">
                                        <div class="inner-price mx-[-3px]">
                                            <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$25</span>
                                            <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$30</span>
                                        </div>
                                        <span class="last-items text-[14px] text-[#686e7d]">1 Pack</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-deal-card p-[12px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                            <span class="text-[14px] text-[#777] font-medium uppercase">Hot</span>
                                        </span>
                                    <a href="javascript:void(0)">
                                        <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                            <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/product/2.jpg" alt="product-2">
                                            <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/product/back-2.jpg"
                                                 alt="product-2">
                                        </div>
                                    </a>
                                    <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bb-pro-contact p-[20px]">
                                    <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                        <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Juice</a>
                                        <span class="bb-pro-rating">
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                            </span>
                                    </div>
                                    <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                        <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Organic Apple Juice Pack</a>
                                    </h4>
                                    <div class="bb-price flex flex-wrap justify-between">
                                        <div class="inner-price mx-[-3px]">
                                            <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$15</span>
                                            <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">3 Left</span>
                                        </div>
                                        <span class="last-items text-[14px] text-[#686e7d]">100 ml</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-deal-card p-[12px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                    <a href="javascript:void(0)">
                                        <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                            <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/product/3.jpg" alt="product-3">
                                            <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/product/back-3.jpg"
                                                 alt="product-3">
                                        </div>
                                    </a>
                                    <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bb-pro-contact p-[20px]">
                                    <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                        <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Juice</a>
                                        <span class="bb-pro-rating">
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                            </span>
                                    </div>
                                    <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                        <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Mixed Almond nuts juice Pack</a>
                                    </h4>
                                    <div class="bb-price flex flex-wrap justify-between">
                                        <div class="inner-price mx-[-3px]">
                                            <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$32</span>
                                            <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$39</span>
                                        </div>
                                        <span class="last-items text-[14px] text-[#686e7d]">250 g</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-deal-card p-[12px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                            <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                            <span class="text-[14px] text-[#777] font-medium uppercase">Sale</span>
                                        </span>
                                    <a href="javascript:void(0)">
                                        <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                            <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/product/4.jpg" alt="product-4">
                                            <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/product/back-4.jpg"
                                                 alt="product-4">
                                        </div>
                                    </a>
                                    <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bb-pro-contact p-[20px]">
                                    <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                        <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Fruits</a>
                                        <span class="bb-pro-rating">
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                            </span>
                                    </div>
                                    <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                        <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Fresh Mango Slice Juice</a>
                                    </h4>
                                    <div class="bb-price flex flex-wrap justify-between">
                                        <div class="inner-price mx-[-3px]">
                                            <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$25</span>
                                            <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">Out Of Stock</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner-one -->
<section class="section-banner-one overflow-hidden py-[50px] max-[1199px]:py-[35px]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="banner-box p-[30px] rounded-[20px] relative overflow-hidden bg-box-color-one bg-[#fbf2e5]">
                    <div class="inner-banner-box relative z-[1] flex justify-between max-[480px]:flex-col">
                        <div class="side-image px-[12px] flex items-center max-[480px]:p-[0] max-[480px]:mb-[12px] max-[480px]:justify-center">
                            <img src="assets/img/banner-one/one.png" alt="one" class="max-w-max w-[280px] h-[280px] max-[1399px]:w-[230px] max-[1399px]:h-[230px] max-[1199px]:w-[140px] max-[1199px]:h-[140px] max-[991px]:w-[280px] max-[991px]:h-[280px] max-[767px]:h-[200px] max-[767px]:w-[200px] max-[575px]:w-full max-[575px]:h-[auto] max-[480px]:w-[calc(100%-70px)]">
                        </div>
                        <div class="inner-contact max-w-[250px] px-[12px] flex flex-col items-start justify-center max-[480px]:p-[0] max-[480px]:max-w-[100%] max-[480px]:text-center max-[480px]:items-center">
                            <h5 class="font-quicksand mb-[15px] text-[31px] text-[#3d4750] font-bold tracking-[0.03rem] text-[#3d4750] leading-[1.2] max-[991px]:text-[28px] max-[575px]:text-[24px] max-[480px]:mb-[2px] max-[480px]:text-[22px]">Tasty Snack & Fast food</h5>
                            <p class="font-Poppins text-[16px] font-light leading-[28px] tracking-[0.03rem] text-[#686e7d] mb-[15px] max-[480px]:mb-[8px] max-[480px]:text-[14px]">The flavour of something special</p>
                            <a href="shop-left-sidebar-col-3.html" class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[5px] px-[15px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="banner-box p-[30px] rounded-[20px] relative overflow-hidden bg-box-color-two bg-[#ffe8ee]">
                    <div class="inner-banner-box relative z-[1] flex justify-between max-[480px]:flex-col">
                        <div class="side-image px-[12px] flex items-center max-[480px]:p-[0] max-[480px]:mb-[12px] max-[480px]:justify-center">
                            <img src="assets/img/banner-one/two.png" alt="two" class="max-w-max w-[280px] h-[280px] max-[1399px]:w-[230px] max-[1399px]:h-[230px] max-[1199px]:w-[140px] max-[1199px]:h-[140px] max-[991px]:w-[280px] max-[991px]:h-[280px] max-[767px]:h-[200px] max-[767px]:w-[200px] max-[575px]:w-full max-[575px]:h-[auto] max-[480px]:w-[calc(100%-70px)]">
                        </div>
                        <div class="inner-contact max-w-[250px] px-[12px] flex flex-col items-start justify-center max-[480px]:p-[0] max-[480px]:max-w-[100%] max-[480px]:text-center max-[480px]:items-center">
                            <h5 class="font-quicksand mb-[15px] text-[31px] text-[#3d4750] font-bold tracking-[0.03rem] text-[#3d4750] leading-[1.2] max-[991px]:text-[28px] max-[575px]:text-[24px] max-[480px]:mb-[2px] max-[480px]:text-[22px]">Fresh Fruits & Vegetables</h5>
                            <p class="font-Poppins text-[16px] font-light leading-[28px] tracking-[0.03rem] text-[#686e7d] mb-[15px] max-[480px]:mb-[8px] max-[480px]:text-[14px]">A healthy meal for every one</p>
                            <a href="shop-left-sidebar-col-3.html" class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[5px] px-[15px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner-two -->
<section class="section-banner-two overflow-hidden my-[50px] max-[1199px]:my-[35px] bg-[url('assets/img/banner-two/banner.jpg')] min-h-[600px] overflow-hidden bg-no-repeat bg-cover bg-center max-[991px]:max-h-[400px] max-[991px]:min-h-[auto]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px] banner-justify-box-contact w-full h-[600px] flex justify-end items-end max-[991px]:h-[400px]">
                <div class="banner-two-box bg-[#fff] rounded-t-[30px] max-w-[400px] pt-[30px] px-[30px] flex flex-col items-start relative max-[991px]:max-w-[250px] max-[575px]:my-[0] max-[575px]:mx-[auto]">
                    <span class="text-[20px] font-semibold text-[#6c7fd8] leading-[26px] max-[991px]:text-[16px]">25% Off</span>
                    <h4 class="font-quicksand mb-[20px] text-[40px] font-bold text-[#3d4750] tracking-[0.03rem] leading-[1.2] max-[991px]:text-[22px]">Fresh & Organic vegetables</h4>
                    <a href="javascript:void(0)" class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] max-[1199px]:py-[3px] max-[1199px]:px-[15px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New Product tab Area -->
<section class="section-product-tabs overflow-hidden py-[50px] max-[1199px]:py-[35px]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="section-title mb-[20px] pb-[20px] z-[5] relative flex justify-between max-[991px]:pb-[0] max-[991px]:flex-col max-[991px]:justify-center max-[991px]:text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="section-detail max-[991px]:mb-[12px]">
                        <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">New <span class="text-[#6c7fd8]">Arrivals</span></h2>
                        <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">Shop online for new arrivals and get free shipping!</p>
                    </div>
                    <div class="bb-pro-tab">
                        <ul class="bb-pro-tab-nav flex flex-wrap mx-[-20px] max-[991px]:justify-center" id="ProductTab">
                            <li class="nav-item relative leading-[28px]">
                                <a class="nav-link px-[20px] font-Poppins text-[16px] text-[#686e7d] font-medium capitalize leading-[28px] tracking-[0.03rem] block" href="#all">All</a>
                            </li>
                            <li class="nav-item relative leading-[28px] active">
                                <a class="nav-link px-[20px] font-Poppins text-[16px] text-[#686e7d] font-medium capitalize leading-[28px] tracking-[0.03rem] block" href="#snack">Snack & Spices</a>
                            </li>
                            <li class="nav-item relative leading-[28px]">
                                <a class="nav-link px-[20px] font-Poppins text-[16px] text-[#686e7d] font-medium capitalize leading-[28px] tracking-[0.03rem] block" href="#fruit">Fruits</a>
                            </li>
                            <li class="nav-item leading-[28px]">
                                <a class="nav-link px-[20px] font-Poppins text-[16px] text-[#686e7d] font-medium capitalize leading-[28px] tracking-[0.03rem] block" href="#veg">Vegetables</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="w-full">
                <div class="tab-content">
                    <!-- 1st Product tab start -->
                    <div class="tab-product-pane" id="all">
                        <div class="flex flex-wrap w-full">
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/1.jpg"
                                                     alt="product-1">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/back-1.jpg"
                                                     alt="product-1">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Snacks</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Ground Nuts Oil
                                                Pack</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$15</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$22</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">500g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/11.jpg"
                                                     alt="product-3">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/11.jpg"
                                                     alt="product-3">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Fruit</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Red Cherry
                                                Serbia</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$6</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$8</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">250g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">Trend</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/20.jpg"
                                                     alt="product-4">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/20.jpg"
                                                     alt="product-4">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Leaves</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Fresh
                                                Coriander</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$1</span>
                                                <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">Out Of Stock</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/4.jpg"
                                                     alt="product-4">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/back-4.jpg"
                                                     alt="product-4">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Chips</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Crunchy Potato
                                                Chips</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$25</span>
                                                <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">Out Of Stock</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">Sale</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/5.jpg"
                                                     alt="product-5">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/back-5.jpg"
                                                     alt="product-5">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Spices</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Black Pepper
                                                Spice
                                                pack</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$32</span>
                                                <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">2 Left</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">1 pack</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/14.jpg"
                                                     alt="product-6">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/14.jpg"
                                                     alt="product-6">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Fruit</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Red Guava</a>
                                        </h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$15</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$17</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">2kg</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/7.jpg"
                                                     alt="product-7">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/back-7.jpg"
                                                     alt="product-7">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Spices</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Chilli Flakes
                                                Pack</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$29</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$31</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">250g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/19.jpg"
                                                     alt="product-3">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/19.jpg"
                                                     alt="product-3">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Vegetable</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Red organic
                                                Onion</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$10</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$15</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">5kg</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd Product tab start -->
                    <div class="tab-product-pane" id="snack">
                        <div class="flex flex-wrap w-full">
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/1.jpg"
                                                     alt="product-1">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/back-1.jpg"
                                                     alt="product-1">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Snacks</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Ground Nuts Oil
                                                Pack</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$15</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$22</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">500g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">Trend</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/2.jpg"
                                                     alt="product-2">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/back-2.jpg"
                                                     alt="product-2">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Juice</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Organic Litchi
                                                Juice
                                                Pack</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$25</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$30</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">100ml</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/3.jpg"
                                                     alt="product-3">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/back-3.jpg"
                                                     alt="product-3">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Chips</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Crunchy Banana
                                                Chips</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$1</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$02</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">100g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/4.jpg"
                                                     alt="product-4">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/back-4.jpg"
                                                     alt="product-4">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Chips</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Crunchy Potato
                                                Chips</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$25</span>
                                                <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">Out Of Stock</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/5.jpg"
                                                     alt="product-5">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/back-5.jpg"
                                                     alt="product-5">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Spices</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Black Pepper
                                                Spice
                                                pack</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$32</span>
                                                <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">2 Left</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">1 pack</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">Sale</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/6.jpg"
                                                     alt="product-6">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/back-6.jpg"
                                                     alt="product-6">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Spices</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Small Cardamom
                                                Spice
                                                Pack</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$41</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$45</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">200g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/7.jpg"
                                                     alt="product-7">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/back-7.jpg"
                                                     alt="product-7">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Spices</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Chilli Flakes
                                                Pack</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$29</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$31</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">250g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/8.jpg"
                                                     alt="product-8">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/back-8.jpg"
                                                     alt="product-8">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Sauces</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Tomato Ketchup
                                                Pack</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$9</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$10</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3rd Product tab start -->
                    <div class="tab-product-pane" id="fruit">
                        <div class="flex flex-wrap w-full">
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/9.jpg"
                                                     alt="product-1">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/9.jpg"
                                                     alt="product-1">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Fruit</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Organic dragon
                                                fruit</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$5</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$7</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">2 Pcs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/10.jpg"
                                                     alt="product-2">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/10.jpg"
                                                     alt="product-2">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Fruit</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Fresh blue
                                                berry</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$25</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$30</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">500g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/11.jpg"
                                                     alt="product-3">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/11.jpg"
                                                     alt="product-3">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Fruit</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Red Cherry
                                                Serbia</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$6</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$8</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">250g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/12.jpg"
                                                     alt="product-4">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/12.jpg"
                                                     alt="product-4">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Fruit</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Kwangtung Fresh
                                                Litchi</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$2</span>
                                                <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">Out Of Stock</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">Sale</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/13.jpg"
                                                     alt="product-5">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/13.jpg"
                                                     alt="product-5">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Fruit</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Fresh
                                                orange</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$10</span>
                                                <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">2 Left</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">12 Pcs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/14.jpg"
                                                     alt="product-6">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/14.jpg"
                                                     alt="product-6">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Fruit</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Red Guava</a>
                                        </h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$15</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$17</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">2kg</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">Hot</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/15.jpg"
                                                     alt="product-7">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/15.jpg"
                                                     alt="product-7">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Fruit</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Organic Kesar
                                                Mango</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$29</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$31</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">20kg</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/16.jpg"
                                                     alt="product-8">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/16.jpg"
                                                     alt="product-8">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Fruit</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Organic
                                                Banana</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$9</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$10</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4th Product tab start -->
                    <div class="tab-product-pane" id="veg">
                        <div class="flex flex-wrap w-full">
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">Hot</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/17.jpg"
                                                     alt="product-1">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/17.jpg"
                                                     alt="product-1">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Vegetable</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Organic
                                                Tomato</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$15</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$22</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">500g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/18.jpg"
                                                     alt="product-2">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/18.jpg"
                                                     alt="product-2">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Tuber Root</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Ecuador Red
                                                Potato</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$25</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$30</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">10kg</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/19.jpg"
                                                     alt="product-3">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/19.jpg"
                                                     alt="product-3">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Vegetable</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Red organic
                                                Onion</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$10</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$15</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">5kg</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">Trend</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/20.jpg"
                                                     alt="product-4">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/20.jpg"
                                                     alt="product-4">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Leaves</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Fresh
                                                Coriander</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$1</span>
                                                <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">Out Of Stock</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">Sale</span>
                                            </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/21.jpg"
                                                     alt="product-5">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/21.jpg"
                                                     alt="product-5">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Vegetable</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">America
                                                Capcicum</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$4</span>
                                                <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">2 Left</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">500g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/22.jpg"
                                                     alt="product-6">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/22.jpg"
                                                     alt="product-6">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Spices</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Mexico corn</a>
                                        </h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$10</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$12</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">2pcs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/23.jpg"
                                                     alt="product-7">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/23.jpg"
                                                     alt="product-7">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Tuber Root</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Jamaica
                                                Ginger</a></h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$3</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$4</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">250g</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/24.jpg"
                                                     alt="product-8">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/24.jpg"
                                                     alt="product-8">
                                            </div>
                                        </a>
                                        <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                            <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                    <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bb-pro-contact p-[20px]">
                                        <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Vegetable</a>
                                            <span class="bb-pro-rating">
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Fresh Lemon</a>
                                        </h4>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$9</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$10</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="section-services overflow-hidden py-[50px] max-[1199px]:py-[35px]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="bb-services-box p-[30px] border-[1px] border-solid border-[#eee] rounded-[20px] text-center">
                    <div class="services-img mb-[20px] flex justify-center">
                        <img src="assets/img/services/1.png" alt="services-1" class="w-[50px]">
                    </div>
                    <div class="services-contact">
                        <h4 class="font-quicksand mb-[8px] text-[18px] font-bold text-[#3d4750] leading-[1.2] tracking-[0.03rem]">Free Shipping</h4>
                        <p class="font-Poppins font-light text-[14px] leading-[20px] text-[#686e7d] tracking-[0.03rem]">Free shipping on all Us order or above $200</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="bb-services-box p-[30px] border-[1px] border-solid border-[#eee] rounded-[20px] text-center">
                    <div class="services-img mb-[20px] flex justify-center">
                        <img src="assets/img/services/2.png" alt="services-2" class="w-[50px]">
                    </div>
                    <div class="services-contact">
                        <h4 class="font-quicksand mb-[8px] text-[18px] font-bold text-[#3d4750] leading-[1.2] tracking-[0.03rem]">24x7 Support</h4>
                        <p class="font-Poppins font-light text-[14px] leading-[20px] text-[#686e7d] tracking-[0.03rem]">Contact us 24 hours a day, 7 days a week</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="600">
                <div class="bb-services-box p-[30px] border-[1px] border-solid border-[#eee] rounded-[20px] text-center">
                    <div class="services-img mb-[20px] flex justify-center">
                        <img src="assets/img/services/3.png" alt="services-3" class="w-[50px]">
                    </div>
                    <div class="services-contact">
                        <h4 class="font-quicksand mb-[8px] text-[18px] font-bold text-[#3d4750] leading-[1.2] tracking-[0.03rem]">30 Days Return</h4>
                        <p class="font-Poppins font-light text-[14px] leading-[20px] text-[#686e7d] tracking-[0.03rem]">Simply return it within 30 days for an exchange</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="800">
                <div class="bb-services-box p-[30px] border-[1px] border-solid border-[#eee] rounded-[20px] text-center">
                    <div class="services-img mb-[20px] flex justify-center">
                        <img src="assets/img/services/4.png" alt="services-4" class="w-[50px]">
                    </div>
                    <div class="services-contact">
                        <h4 class="font-quicksand mb-[8px] text-[18px] font-bold text-[#3d4750] leading-[1.2] tracking-[0.03rem]">Payment Secure</h4>
                        <p class="font-Poppins font-light text-[14px] leading-[20px] text-[#686e7d] tracking-[0.03rem]">Contact us 24 hours a day, 7 days a week</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vendors -->
<section class="section-vendors overflow-hidden pt-[50px] max-[1199px]:pt-[35px] pb-[100px] max-[1199px]:pb-[70px]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="w-full px-[12px]">
                <div class="section-title mb-[20px] pb-[20px] z-[5] relative flex flex-col items-center text-center max-[991px]:pb-[0]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="section-detail max-[991px]:mb-[12px]">
                        <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">Top <span class="text-[#6c7fd8]">Vendors</span></h2>
                        <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">Discover Our Trusted Partners: Excllence & Reliability in Every choice</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[41.66%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="bb-vendors-img sticky top-[0]">
                    <div class="tab-content">
                        <div class="tab-vendors-pane" id="vendors_tab_one">
                            <a href="javascript:void(0)" class="bb-vendor-init transition-all duration-[0.3s] ease-in-out absolute right-[20px] top-[20px] h-[35px] w-[35px] bg-[#00000080] hover:bg-[#000000cc] flex justify-center items-center rounded-[10px]">
                                <i class="ri-arrow-right-up-line text-[20px] text-[#fff]"></i>
                            </a>
                            <img src="assets/img/vendors/img-1.jpg" alt="vendors-img-1" class="w-full rounded-[30px] border-[1px] border-solid border-[#eee]">
                            <div class="vendors-local-shape absolute bottom-[0] right-[0] h-[120px] w-[120px] bg-[#fff] pt-[20px] pl-[20px] rounded-tl-[30px]">
                                <div class="inner-shape relative"></div>
                                <img src="assets/img/vendors/vendor-1.jpg" alt="vendor" class="w-[100px] h-[100px] rounded-[30px] border-[1px] border-solid border-[#eee]">
                            </div>
                        </div>
                        <div class="tab-vendors-pane" id="vendors_tab_two">
                            <a href="javascript:void(0)" class="bb-vendor-init transition-all duration-[0.3s] ease-in-out absolute right-[20px] top-[20px] h-[35px] w-[35px] bg-[#00000080] hover:bg-[#000000cc] flex justify-center items-center rounded-[10px]">
                                <i class="ri-arrow-right-up-line text-[20px] text-[#fff]"></i>
                            </a>
                            <img src="assets/img/vendors/img-2.jpg" alt="vendors-img-2" class="w-full rounded-[30px] border-[1px] border-solid border-[#eee]">
                            <div class="vendors-local-shape absolute bottom-[0] right-[0] h-[120px] w-[120px] bg-[#fff] pt-[20px] pl-[20px] rounded-tl-[30px]">
                                <div class="inner-shape relative"></div>
                                <img src="assets/img/vendors/vendor-2.jpg" alt="vendor" class="w-[100px] h-[100px] rounded-[30px] border-[1px] border-solid border-[#eee]">
                            </div>
                        </div>
                        <div class="tab-vendors-pane" id="vendors_tab_three">
                            <a href="javascript:void(0)" class="bb-vendor-init transition-all duration-[0.3s] ease-in-out absolute right-[20px] top-[20px] h-[35px] w-[35px] bg-[#00000080] hover:bg-[#000000cc] flex justify-center items-center rounded-[10px]">
                                <i class="ri-arrow-right-up-line text-[20px] text-[#fff]"></i>
                            </a>
                            <img src="assets/img/vendors/img-3.jpg" alt="vendors-img-3" class="w-full rounded-[30px] border-[1px] border-solid border-[#eee]">
                            <div class="vendors-local-shape absolute bottom-[0] right-[0] h-[120px] w-[120px] bg-[#fff] pt-[20px] pl-[20px] rounded-tl-[30px]">
                                <div class="inner-shape relative"></div>
                                <img src="assets/img/vendors/vendor-3.jpg" alt="vendor" class="w-[100px] h-[100px] rounded-[30px] border-[1px] border-solid border-[#eee]">
                            </div>
                        </div>
                        <div class="tab-vendors-pane" id="vendors_tab_four">
                            <a href="javascript:void(0)" class="bb-vendor-init transition-all duration-[0.3s] ease-in-out absolute right-[20px] top-[20px] h-[35px] w-[35px] bg-[#00000080] hover:bg-[#000000cc] flex justify-center items-center rounded-[10px]">
                                <i class="ri-arrow-right-up-line text-[20px] text-[#fff]"></i>
                            </a>
                            <img src="assets/img/vendors/img-4.jpg" alt="vendors-img-4" class="w-full rounded-[30px] border-[1px] border-solid border-[#eee]">
                            <div class="vendors-local-shape absolute bottom-[0] right-[0] h-[120px] w-[120px] bg-[#fff] pt-[20px] pl-[20px] rounded-tl-[30px]">
                                <div class="inner-shape relative"></div>
                                <img src="assets/img/vendors/vendor-4.jpg" alt="vendor" class="w-[100px] h-[100px] rounded-[30px] border-[1px] border-solid border-[#eee]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[58.33%] w-full px-[12px] mb-[24px]">
                <ul class="bb-vendors-tab-nav flex flex-wrap mb-[-24px]" id="vendorstab">
                    <li class="nav-item w-full mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <a class="nav-link p-[30px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[30px] block" href="#vendors_tab_one">
                            <div class="bb-vendors-box">
                                <div class="inner-heading mb-[5px] flex justify-between max-[420px]:flex-col">
                                    <h5 class="font-quicksand text-[18px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">Mira Fashion Pvt. Ltd.</h5>
                                    <span class="font-Poppins text-[14px] text-[#686e7d] leading-[28px] font-normal tracking-[0.03rem]">Sales - 587</span>
                                </div>
                                <p class="font-Poppins text-[14px] leading-[20px] text-[#686e7d] font-light tracking-[0.03rem]">Fruits (5) | Vegetables (30) | Snacks (09) </p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item w-full mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <a class="nav-link p-[30px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[30px] block" href="#vendors_tab_two">
                            <div class="bb-vendors-box">
                                <div class="inner-heading mb-[5px] flex justify-between max-[420px]:flex-col">
                                    <h5 class="font-quicksand text-[18px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">Eelna Fashion Pvt. Ltd.</h5>
                                    <span class="font-Poppins text-[14px] text-[#686e7d] leading-[28px] font-normal tracking-[0.03rem]">Sales - 428</span>
                                </div>
                                <p class="font-Poppins text-[14px] leading-[20px] text-[#686e7d] font-light tracking-[0.03rem]">Fruits (8) | Vegetables (15) | Snacks (04) </p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item w-full mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <a class="nav-link p-[30px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[30px] block" href="#vendors_tab_three">
                            <div class="bb-vendors-box">
                                <div class="inner-heading mb-[5px] flex justify-between max-[420px]:flex-col">
                                    <h5 class="font-quicksand text-[18px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">Mario Fashion Pvt. Ltd.</h5>
                                    <span class="font-Poppins text-[14px] text-[#686e7d] leading-[28px] font-normal tracking-[0.03rem]">Sales - 1024</span>
                                </div>
                                <p class="font-Poppins text-[14px] leading-[20px] text-[#686e7d] font-light tracking-[0.03rem]">Fruits (16) | Vegetables (42) | Snacks (18) </p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item w-full mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                        <a class="nav-link p-[30px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[30px] block" href="#vendors_tab_four">
                            <div class="bb-vendors-box">
                                <div class="inner-heading mb-[5px] flex justify-between max-[420px]:flex-col">
                                    <h5 class="font-quicksand text-[18px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">Maria Fashion Pvt. Ltd.</h5>
                                    <span class="font-Poppins text-[14px] text-[#686e7d] leading-[28px] font-normal tracking-[0.03rem]">Sales - 210</span>
                                </div>
                                <p class="font-Poppins text-[14px] leading-[20px] text-[#686e7d] font-light tracking-[0.03rem]">Fruits (2) | Vegetables (10) | Snacks (03) </p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section-testimonials overflow-hidden py-[100px] max-[1199px]:py-[70px] max-[991px]:p-[0]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="bb-testimonials relative" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <img src="assets/img/testimonials/img-1.png" alt="testimonials-1" class="testimonials-img-1 z-[-1] h-[70px] w-[70px] absolute top-[0] left-[25px] rounded-[20px] rotate-[-10deg] max-[1399px]:h-[60px] max-[1399px]:w-[60px] max-[1399px]:left-[10px] max-[1199px]:hidden">
                    <img src="assets/img/testimonials/img-2.png" alt="testimonials-2" class="testimonials-img-2 z-[-1] h-[50px] w-[50px] absolute bottom-[0] left-[0] rounded-[15px] rotate-[15deg] blur-[3px] max-[1199px]:hidden">
                    <img src="assets/img/testimonials/img-3.png" alt="testimonials-3" class="testimonials-img-3 z-[-1] h-[60px] w-[60px] absolute top-[-50px] right-[500px] rounded-[20px] rotate-[-30deg] blur-[3px] max-[991px]:hidden">
                    <img src="assets/img/testimonials/img-4.png" alt="testimonials-4" class="testimonials-img-4 z-[-1] h-[60px] w-[60px] absolute top-[50px] right-[250px] rounded-[20px] rotate-[15deg] max-[1399px]:top-[20px] max-[991px]:hidden">
                    <img src="assets/img/testimonials/img-5.png" alt="testimonials-5" class="testimonials-img-5 z-[-1] h-[70px] w-[70px] absolute top-[0] right-[20px] rounded-[20px] blur-[3px] max-[991px]:hidden">
                    <img src="assets/img/testimonials/img-6.png" alt="testimonials-6" class="testimonials-img-6 z-[-1] h-[60px] w-[60px] absolute bottom-[30px] right-[100px] rounded-[20px] rotate-[-25deg] max-[1399px]:h-[50px] max-[1399px]:w-[50px] max-[1399px]:right-[50px] max-[1199px]:right-[0] max-[991px]:hidden">
                    <div class="inner-banner rotate-[270deg] absolute top-[0] z-[-1] left-[150px] bottom-[0] max-[1399px]:left-[110px] max-[1199px]:left-[30px] max-[991px]:hidden">
                        <h4 class="font-quicksand text-[#fff] tracking-[0.03rem] opacity-[0.15] text-[42px] font-bold leading-[1.2] max-[1399px]:text-[38px] max-[1199px]:text-[34px]">Testimonials</h4>
                    </div>
                    <div class="owl-carousel testimonials-slider">
                        <div class="bb-testimonials-inner max-w-[900px] m-[auto] max-[1399px]:max-w-[800px]">
                            <div class="flex flex-wrap mx-[-12px] testimonials-row">
                                <div class="min-[768px]:w-[33.33%] w-full px-[12px] max-[767px]:hidden">
                                    <div class="testimonials-image relative max-[575px]:mb-[20px] max-[575px]:max-w-[200px]">
                                        <img src="assets/img/testimonials/1.jpg" alt="testimonials" class="w-full rounded-[30px] block">
                                    </div>
                                </div>
                                <div class="min-[768px]:w-[66.66%] w-full px-[12px]">
                                    <div class="testimonials-contact h-full flex flex-col justify-end">
                                        <div class="user max-[767px]:flex max-[767px]:items-center">
                                            <img src="assets/img/testimonials/1.jpg" alt="testimonials" class="w-full hidden rounded-[15px] max-[767px]:max-w-[60px] max-[767px]:mr-[15px] max-[767px]:flex">
                                            <div class="detail">
                                                <h4 class="font-quicksand text-[#3d4750] tracking-[0.03rem] leading-[1.2] mb-[8px] text-[20px] font-bold max-[767px]:mb-[4px] max-[767px]:text-[18px]">Isabella Oliver</h4>
                                                <span class="font-Poppins font-normal tracking-[0.02rem] text-[14px] text-[#777]">(Manager)</span>
                                            </div>
                                        </div>
                                        <div class="inner-contact bg-[#fff] mt-[10px] border-[1px] border-solid border-[#eee] p-[20px] rounded-[30px]">
                                            <p class="font-Poppins text-[#686e7d] text-[14px] leading-[25px] tracking-[0.03rem] font-light">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                                at sint eligendi possimus perspiciatis asperiores reiciendis hic
                                                amet alias aut quaerat maiores blanditiis."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-testimonials-inner max-w-[900px] m-[auto] max-[1399px]:max-w-[800px]">
                            <div class="flex flex-wrap mx-[-12px] testimonials-row">
                                <div class="min-[768px]:w-[33.33%] w-full px-[12px] max-[767px]:hidden">
                                    <div class="testimonials-image relative max-[575px]:mb-[20px] max-[575px]:max-w-[200px]">
                                        <img src="assets/img/testimonials/2.jpg" alt="testimonials" class="w-full rounded-[30px] block">
                                    </div>
                                </div>
                                <div class="min-[768px]:w-[66.66%] w-full px-[12px]">
                                    <div class="testimonials-contact h-full flex flex-col justify-end">
                                        <div class="user max-[767px]:flex max-[767px]:items-center">
                                            <img src="assets/img/testimonials/2.jpg" alt="testimonials" class="w-full hidden rounded-[15px] max-[767px]:max-w-[60px] max-[767px]:mr-[15px] max-[767px]:flex">
                                            <div class="detail">
                                                <h4 class="font-quicksand text-[#3d4750] tracking-[0.03rem] leading-[1.2] mb-[8px] text-[20px] font-bold max-[767px]:mb-[4px] max-[767px]:text-[18px]">Nikki Albart</h4>
                                                <span class="font-Poppins font-normal tracking-[0.02rem] text-[14px] text-[#777]">(Team Leader)</span>
                                            </div>
                                        </div>
                                        <div class="inner-contact bg-[#fff] mt-[10px] border-[1px] border-solid border-[#eee] p-[20px] rounded-[30px]">
                                            <p class="font-Poppins text-[#686e7d] text-[14px] leading-[25px] tracking-[0.03rem] font-light">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                                at sint eligendi possimus perspiciatis asperiores reiciendis hic
                                                amet alias aut quaerat maiores blanditiis."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-testimonials-inner max-w-[900px] m-[auto] max-[1399px]:max-w-[800px]">
                            <div class="flex flex-wrap mx-[-12px] testimonials-row">
                                <div class="min-[768px]:w-[33.33%] w-full px-[12px] max-[767px]:hidden">
                                    <div class="testimonials-image relative max-[575px]:mb-[20px] max-[575px]:max-w-[200px]">
                                        <img src="assets/img/testimonials/3.jpg" alt="testimonials" class="w-full rounded-[30px] block">
                                    </div>
                                </div>
                                <div class="min-[768px]:w-[66.66%] w-full px-[12px]">
                                    <div class="testimonials-contact h-full flex flex-col justify-end">
                                        <div class="user max-[767px]:flex max-[767px]:items-center">
                                            <img src="assets/img/testimonials/3.jpg" alt="testimonials" class="w-full hidden rounded-[15px] max-[767px]:max-w-[60px] max-[767px]:mr-[15px] max-[767px]:flex">
                                            <div class="detail">
                                                <h4 class="font-quicksand text-[#3d4750] tracking-[0.03rem] leading-[1.2] mb-[8px] text-[20px] font-bold max-[767px]:mb-[4px] max-[767px]:text-[18px]">Stephen Smith</h4>
                                                <span class="font-Poppins font-normal tracking-[0.02rem] text-[14px] text-[#777]">(Co Founder)</span>
                                            </div>
                                        </div>
                                        <div class="inner-contact bg-[#fff] mt-[10px] border-[1px] border-solid border-[#eee] p-[20px] rounded-[30px]">
                                            <p class="font-Poppins text-[#686e7d] text-[14px] leading-[25px] tracking-[0.03rem] font-light">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                                at sint eligendi possimus perspiciatis asperiores reiciendis hic
                                                amet alias aut quaerat maiores blanditiis."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<section class="section-blog overflow-hidden pb-[50px] max-[1199px]:pb-[35px] pt-[100px] max-[1199px]:pt-[70px]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="blog-2-slider owl-carousel">
                    <div class="blog-2-card relative overflow-hidden rounded-[30px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="blog-img">
                            <img src="assets/img/blog/7.jpg" alt="blog-7" class="transition-all duration-[0.3s] ease-in-out w-full block">
                        </div>
                        <div class="blog-contact transition-all duration-[0.3s] ease-in-out m-[5px] p-[15px] absolute bottom-[0] right-[0] left-[0] bg-[#ffffffe6] rounded-[30px]">
                            <span class="font-Poppins font-normal text-[13px] leading-[26px] tracking-[0.02rem] text-[#686e7d]">June 30,2024 - organic</span>
                            <h4 class="text-[16px] leading-[1.2]"><a href="blog-detail-left-sidebar.html" class="font-Poppins tracking-[0.03rem] text-[16px] font-medium leading-[1.3] text-[#3d4750]">Marketing Guide: 5 Steps to Success.</a></h4>
                        </div>
                    </div>
                    <div class="blog-2-card relative overflow-hidden rounded-[30px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="blog-img">
                            <img src="assets/img/blog/8.jpg" alt="blog-8" class="transition-all duration-[0.3s] ease-in-out w-full block">
                        </div>
                        <div class="blog-contact transition-all duration-[0.3s] ease-in-out m-[5px] p-[15px] absolute bottom-[0] right-[0] left-[0] bg-[#ffffffe6] rounded-[30px]">
                            <span class="font-Poppins font-normal text-[13px] leading-[26px] tracking-[0.02rem] text-[#686e7d]">May 10,2023 - organic</span>
                            <h4 class="text-[16px] leading-[1.2]"><a href="blog-detail-left-sidebar.html" class="font-Poppins tracking-[0.03rem] text-[16px] font-medium leading-[1.3] text-[#3d4750]">Best way to solve business deal issue.</a></h4>
                        </div>
                    </div>
                    <div class="blog-2-card relative overflow-hidden rounded-[30px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="blog-img">
                            <img src="assets/img/blog/9.jpg" alt="blog-9" class="transition-all duration-[0.3s] ease-in-out w-full block">
                        </div>
                        <div class="blog-contact transition-all duration-[0.3s] ease-in-out m-[5px] p-[15px] absolute bottom-[0] right-[0] left-[0] bg-[#ffffffe6] rounded-[30px]">
                            <span class="font-Poppins font-normal text-[13px] leading-[26px] tracking-[0.02rem] text-[#686e7d]">Jan 10,2022 - organic</span>
                            <h4 class="text-[16px] leading-[1.2]"><a href="blog-detail-left-sidebar.html" class="font-Poppins tracking-[0.03rem] text-[16px] font-medium leading-[1.3] text-[#3d4750]">Business ideas to grow your business.</a></h4>
                        </div>
                    </div>
                    <div class="blog-2-card relative overflow-hidden rounded-[30px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                        <div class="blog-img">
                            <img src="assets/img/blog/10.jpg" alt="blog-10" class="transition-all duration-[0.3s] ease-in-out w-full block">
                        </div>
                        <div class="blog-contact transition-all duration-[0.3s] ease-in-out m-[5px] p-[15px] absolute bottom-[0] right-[0] left-[0] bg-[#ffffffe6] rounded-[30px]">
                            <span class="font-Poppins font-normal text-[13px] leading-[26px] tracking-[0.02rem] text-[#686e7d]">Feb 12,2022 - organic</span>
                            <h4 class="text-[16px] leading-[1.2]"><a href="blog-detail-left-sidebar.html" class="font-Poppins tracking-[0.03rem] text-[16px] font-medium leading-[1.3] text-[#3d4750]">31 customer stats know in 2020.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Instagram -->
<section class="section-instagram overflow-hidden py-[50px] max-[1199px]:py-[35px] relative">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="bb-title m-[auto] py-[15px] px-[30px] bg-[#fff] rounded-[30px] absolute top-[50%] left-[50%] z-[5] max-[991px]:py-[8px] max-[991px]:px-[20px]">
                    <h3 class="font-quicksand m-[0] text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2] text-[28px] max-[991px]:text-[25px]">#Insta</h3>
                </div>
                <div class="bb-instagram-slider owl-carousel">
                    <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="instagram-img relative overflow-hidden rounded-[30px]">
                            <a href="javascript:void(0)">
                                <img src="assets/img/instagram/1.jpg" alt="instagram-1" class="w-full rounded-[20px]">
                            </a>
                        </div>
                    </div>
                    <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="instagram-img relative overflow-hidden rounded-[30px]">
                            <a href="javascript:void(0)">
                                <img src="assets/img/instagram/2.jpg" alt="instagram-2" class="w-full rounded-[20px]">
                            </a>
                        </div>
                    </div>
                    <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="instagram-img relative overflow-hidden rounded-[30px]">
                            <a href="javascript:void(0)">
                                <img src="assets/img/instagram/3.jpg" alt="instagram-3" class="w-full rounded-[20px]">
                            </a>
                        </div>
                    </div>
                    <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="instagram-img relative overflow-hidden rounded-[30px]">
                            <a href="javascript:void(0)">
                                <img src="assets/img/instagram/4.jpg" alt="instagram-4" class="w-full rounded-[20px]">
                            </a>
                        </div>
                    </div>
                    <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="instagram-img relative overflow-hidden rounded-[30px]">
                            <a href="javascript:void(0)">
                                <img src="assets/img/instagram/5.jpg" alt="instagram-5" class="w-full rounded-[20px]">
                            </a>
                        </div>
                    </div>
                    <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                        <div class="instagram-img relative overflow-hidden rounded-[30px]">
                            <a href="javascript:void(0)">
                                <img src="assets/img/instagram/6.jpg" alt="instagram-6" class="w-full rounded-[20px]">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bb-footer mt-[50px] max-[1199px]:mt-[35px] bg-[#f8f8fb] text-[#fff]">
    <div class="footer-directory py-[50px] max-[1199px]:py-[35px] border-[1px] border-solid border-solid">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="directory-title mb-[24px] text-center">
                        <h4 class="font-quicksand leading-[1.2] text-[16px] font-bold text-[#3d4750] tracking-[0] uppercase">Brands Directory</h4>
                    </div>
                    <div class="directory-contact mb-[-24px]">
                        <div class="flex flex-wrap w-full">
                            <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                <div class="inner-contact mb-[24px]">
                                    <ul class="flex flex-wrap">
                                        <li>
                                            <span class="font-Poppins leading-[28px] tracking-[0.03rem] mr-[12px] text-[14px] font-semibold text-[#686e7d] capitalize">Jewellery :</span>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Necklace</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Earrings</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Couple Rings</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Pendants</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">crystal</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Bangles</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Bracelets</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Nose pin</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Chain</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Earrings</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Couple Rings</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inner-contact mb-[24px]">
                                    <ul class="flex flex-wrap">
                                        <li>
                                            <span class="font-Poppins leading-[28px] tracking-[0.03rem] mr-[12px] text-[14px] font-semibold text-[#686e7d] capitalize">Footwear :</span>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Sport</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Formal</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Boots</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Casual</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Cowboy Shoes</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Safety Shoes</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Party Wear Shoes</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Branded</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">First copy</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Long Shoes</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                <div class="inner-contact mb-[24px]">
                                    <ul class="flex flex-wrap">
                                        <li>
                                            <span class="font-Poppins leading-[28px] tracking-[0.03rem] mr-[12px] text-[14px] font-semibold text-[#686e7d] capitalize">Fashion :</span>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">T-Shirt</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Short & Jeans</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Jacket</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Dress & Frock</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Inner wear</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Hosiery</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inner-contact mb-[24px]">
                                    <ul class="flex flex-wrap">
                                        <li>
                                            <span class="font-Poppins leading-[28px] tracking-[0.03rem] mr-[12px] text-[14px] font-semibold text-[#686e7d] capitalize">Cosmetics :</span>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Shampoo</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Body wash</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">face wash</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Makeup kit</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Liner</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Lipstick</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Perfume</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Body Shop</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Scrub</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Hair Gel</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Hair colors</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Hair Dye</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Sunscreen</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Skin Lotion</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Liner</a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] text-[13px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize">Lipstick</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-container border-t-[1px] border-solid border-[#eee]">
        <div class="footer-top py-[50px] max-[1199px]:py-[35px]">
            <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full max-[991px]:mb-[-30px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="min-[992px]:w-[25%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-cat">
                        <div class="bb-footer-widget bb-footer-company flex flex-col max-[991px]:mb-[24px]">
                            <img src="assets/img/logo/logo.png" class="bb-footer-logo max-w-[144px] mb-[30px] max-[767px]:max-w-[130px]" alt="footer logo">
                            <img src="assets/img/logo/logo-dark.png" class="bb-footer-dark-logo max-w-[144px] mb-[30px] max-[767px]:max-w-[130px] hidden" alt="footer logo">
                            <p class="bb-footer-detail max-w-[400px] mb-[30px] p-[0] font-Poppins text-[14px] leading-[27px] font-normal text-[#686e7d] inline-block relative max-[1399px]:text-[15px] max-[1199px]:text-[14px]">BlueBerry is the biggest market of grocery products. Get
                                your daily needs from our store.</p>
                            <div class="bb-app-store m-[-7px] flex flex-wrap">
                                <a href="javascript:void(0)" class="app-img">
                                    <img src="assets/img/app/android.png" class="adroid max-w-[140px] m-[7px] rounded-[5px] max-[1399px]:max-w-[120px]" alt="apple">
                                </a>
                                <a href="javascript:void(0)" class="app-img">
                                    <img src="assets/img/app/apple.png" class="apple max-w-[140px] m-[7px] rounded-[5px] max-[1399px]:max-w-[120px]" alt="apple">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="min-[992px]:w-[16.66%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-info">
                        <div class="bb-footer-widget">
                            <h4 class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] capitalize border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">Category</h4>
                            <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                <ul class="align-items-center">
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Dairy & Milk</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="shop-banner-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Snack & Spice</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="shop-full-width-col-5.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Fast Food</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="shop-list-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Juice & Drinks</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="shop-list-full-col-2.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Bakery</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center">
                                        <a href="shop-banner-right-sidebar-col-4.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Seafood</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="min-[992px]:w-[16.66%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-account">
                        <div class="bb-footer-widget">
                            <h4 class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] capitalize border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">Company</h4>
                            <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                <ul class="align-items-center">
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="about-us.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">About us</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="track-order.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Delivery</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="faq.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Legal Notice</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="terms.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Terms & conditions</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="checkout.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Secure payment</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center">
                                        <a href="contact-us.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="min-[992px]:w-[16.66%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-service">
                        <div class="bb-footer-widget">
                            <h4 class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] capitalize border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">Account</h4>
                            <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                <ul class="align-items-center">
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="login.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Sign In</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="cart.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">View Cart</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="faq.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Return Policy</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Become a Vendor</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Affiliate Program</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center">
                                        <a href="checkout.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Payments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="min-[992px]:w-[25%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-cont-social">
                        <div class="bb-footer-contact mb-[30px]">
                            <div class="bb-footer-widget">
                                <h4 class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] capitalize border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">Contact</h4>
                                <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                    <ul class="align-items-center">
                                        <li class="bb-footer-link bb-foo-location flex items-start max-[991px]:mb-[15px] mb-[16px]">
                                                <span class="mt-[5px] w-[25px] basis-[auto] grow-[0] shrink-[0]">
                                                    <i class="ri-map-pin-line leading-[0] text-[18px] text-[#6c7fd8]"></i>
                                                </span>
                                            <p class="m-[0] font-Poppins text-[14px] text-[#686e7d] font-normal leading-[28px] tracking-[0.03rem]">971 Lajamni, Motavarachha, Surat, Gujarat, Bharat 394101.</p>
                                        </li>
                                        <li class="bb-footer-link bb-foo-call flex items-start max-[991px]:mb-[15px] mb-[16px]">
                                                <span class="w-[25px] basis-[auto] grow-[0] shrink-[0]">
                                                    <i class="ri-whatsapp-line leading-[0] text-[18px] text-[#6c7fd8]"></i>
                                                </span>
                                            <a href="tel:+009876543210" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] inline-block relative break-all tracking-[0] font-normal max-[1399px]:text-[15px] max-[1199px]:text-[14px]">+00 9876543210</a>
                                        </li>
                                        <li class="bb-footer-link bb-foo-mail flex">
                                                <span class="w-[25px] basis-[auto] grow-[0] shrink-[0]">
                                                    <i class="ri-mail-line leading-[0] text-[18px] text-[#6c7fd8]"></i>
                                                </span>
                                            <a href="mailto:example@email.com" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] inline-block relative break-all tracking-[0] font-normal max-[1399px]:text-[15px] max-[1199px]:text-[14px]">example@email.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bb-footer-social">
                            <div class="bb-footer-widget">
                                <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                    <ul class="align-items-center flex flex-wrap items-center">
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#3d4750] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i class="ri-facebook-fill text-[16px] text-[#fff]"></i></a>
                                        </li>
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#3d4750] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i class="ri-twitter-fill text-[16px] text-[#fff]"></i></a>
                                        </li>
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#3d4750] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i class="ri-linkedin-fill text-[16px] text-[#fff]"></i></a>
                                        </li>
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#3d4750] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i class="ri-instagram-line text-[16px] text-[#fff]"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-[10px] border-t-[1px] border-solid border-[#eee] max-[991px]:py-[15px]">
            <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full">
                    <div class="bb-bottom-info w-full flex flex-row items-center justify-between max-[991px]:flex-col px-[12px]">
                        <div class="footer-copy max-[991px]:mb-[15px]">
                            <div class="footer-bottom-copy max-[991px]:text-center">
                                <div class="bb-copy text-[#686e7d] text-[13px] tracking-[1px] text-center font-normal leading-[2]">Copyright © <span class="text-[#686e7d] text-[13px] tracking-[1px] text-center font-normal" id="copyright_year"></span>
                                    <a class="site-name transition-all duration-[0.3s] ease-in-out font-medium text-[#6c7fd8] hover:text-[#3d4750] font-Poppins text-[15px] leading-[28px] tracking-[0.03rem]" href="index.html">BlueBerry</a> all rights reserved.
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom-right">
                            <div class="footer-bottom-payment flex justify-center">
                                <div class="payment-link">
                                    <img src="assets/img/payment/payment.png" alt="payment" class="max-[360px]:w-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Cart sidebar -->
<div class="bb-side-cart-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#00000080] z-[17]"></div>
<div class="bb-side-cart w-[770px] h-[calc(100%-30px)] my-[15px] ml-[15px] pt-[15px] px-[8px] text-[14px] font-normal fixed z-[17] top-[0] right-[0] left-[auto] block transition-all duration-[0.5s] ease delay-[0s] translate-x-[100%] bg-[#fff] overflow-auto opacity-[0] rounded-tl-[20px] rounded-bl-[20px] max-[991px]:w-[740px] max-[767px]:w-[350px] max-[575px]:w-[300px]">
    <div class="flex flex-wrap h-full">
        <div class="min-[768px]:w-[41.66%] w-full px-[12px] max-[767px]:hidden">
            <div class="bb-top-contact">
                <div class="bb-cart-title w-full mb-[20px] flex flex-wrap justify-between">
                    <h4 class="font-quicksand text-[18px] font-extrabold text-[#3d4750] tracking-[0.03rem] leading-[1.2]">Related Items</h4>
                </div>
            </div>
            <div class="bb-cart-box cart-related bb-border-right flex flex-col pr-[24px] border-r-[1px] border-solid border-[#eee] overflow-auto mb-[-24px]">
                <div class="bb-deal-card mb-[24px]">
                    <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                        <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                    <span class="text-[14px] text-[#777] font-medium uppercase">Hot</span>
                                </span>
                            <a href="javascript:void(0)">
                                <div class="inner-img relative block overflow-hidden rounded-tl-[20px] rounded-tr-[20px]">
                                    <img class="main-img transition-all duration-[0.3s] ease delay-[0s] max-w-full" src="assets/img/product/2.jpg" alt="product-2">
                                    <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/product/back-2.jpg" alt="product-2">
                                </div>
                            </a>
                            <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                    <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                        <i class="ri-heart-line text-[18px] text-[#777] leading-[10px]"></i>
                                    </a>
                                </li>
                                <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                    <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                        <i class="ri-eye-line text-[18px] text-[#777] leading-[10px]"></i>
                                    </a>
                                </li>
                                <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                    <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                        <i class="ri-repeat-line text-[18px] text-[#777] leading-[10px]"></i>
                                    </a>
                                </li>
                                <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                    <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                        <i class="ri-shopping-bag-4-line text-[18px] text-[#777] leading-[10px]"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="bb-pro-contact p-[20px]">
                            <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                <a href="shop-left-sidebar-col-3.html" class="font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Juice</a>
                                <span class="bb-pro-rating">
                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                        <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                    </span>
                            </div>
                            <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Organic Apple Juice Pack</a>
                            </h4>
                            <div class="bb-price flex flex-wrap justify-between">
                                <div class="inner-price mx-[-3px]">
                                    <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$15</span>
                                    <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">3 Left</span>
                                </div>
                                <span class="last-items text-[14px] text-[#6c7fd8]">100 ml</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bb-cart-banner mb-[24px]">
                    <div class="banner rounded-[20px] relative overflow-hidden">
                        <img src="assets/img/category/cart-banner.jpg" alt="cart-banner" class="w-full transition-all duration-[0.3s] ease-in-out">
                        <div class="detail w-full p-[15px] absolute left-[0] bottom-[0] bg-[#000000b3] flex flex-col">
                            <h4 class="font-Poppins text-[15px] mb-[5px] leading-[22px] font-light text-[#fff] tracking-[0.03rem]">Organic & Fresh</h4>
                            <h3 class="font-quicksand font-semibold tracking-[0.03rem] text-[#fff] text-[22px] leading-[30px]">Vegetables</h3>
                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out w-[100px] mt-[15px] py-[5px] px-[10px] border-[1px] border-solid border-[#fff] rounded-[10px] text-[#fff] font-Poppins text-[15px] font-light leading-[28px] tracking-[0.03rem] flex items-center justify-center hover:bg-[#fff] hover:text-[#3d4750]">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="min-[768px]:w-[58.33%] w-full px-[12px]">
            <div class="bb-inner-cart relative z-[9] flex flex-col h-full justify-between">
                <div class="bb-top-contact">
                    <div class="bb-cart-title w-full mb-[20px] flex flex-wrap justify-between">
                        <h4 class="font-quicksand text-[18px] font-extrabold text-[#3d4750] tracking-[0.03rem] leading-[1.2]">My cart</h4>
                        <a href="javascript:void(0)" class="bb-cart-close transition-all duration-[0.3s] ease-in-out w-[16px] h-[20px] absolute top-[-20px] right-[0] bg-[#e04e4eb3] rounded-[10px] cursor-pointer" title="Close Cart"></a>
                    </div>
                </div>
                <div class="bb-cart-box item h-full flex flex-col max-[767px]:justify-start">
                    <ul class="bb-cart-items mb-[-24px]">
                        <li class="cart-sidebar-list mb-[24px] p-[20px] flex bg-[#f8f8fb] rounded-[20px] border-[1px] border-solid border-[#eee] relative max-[575px]:p-[10px]">
                            <a href="javascript:void(0)" class="cart-remove-item transition-all duration-[0.3s] ease-in-out bg-[#3d4750] w-[20px] h-[20px] text-[#fff] absolute top-[-3px] right-[-3px] rounded-[50%] flex items-center justify-center opacity-[0.5] text-[15px]"><i class="ri-close-line"></i></a>
                            <a href="javascript:void(0)" class="bb-cart-pro-img flex grow-[1] shrink-[0] basis-[25%] items-center max-[575px]:flex-[initial]">
                                <img src="assets/img/new-product/1.jpg" alt="product-img-1" class="w-[85px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[575px]:w-[50px]">
                            </a>
                            <div class="bb-cart-contact pl-[15px] relative grow-[1] shrink-[0] basis-[70%] overflow-hidden">
                                <a href="product-left-sidebar.html" class="bb-cart-sub-title w-full mb-[8px] font-Poppins tracking-[0.03rem] text-[#3d4750] whitespace-nowrap overflow-hidden text-ellipsis block text-[14px] leading-[18px] font-medium">Ground Nuts Oil Pack</a>
                                <span class="cart-price mb-[8px] text-[14px] leading-[18px] block font-Poppins text-[#686e7d] font-light tracking-[0.03rem]">
                                        <span class="new-price px-[3px] text-[15px] leading-[18px] text-[#686e7d] font-bold">$15</span>
                                        x 500 g
                                    </span>
                                <div class="qty-plus-minus h-[28px] w-[85px] py-[7px] border-[1px] border-solid border-[#eee] overflow-hidden relative flex items-center justify-between bg-[#fff] rounded-[10px]">
                                    <input class="qty-input text-center" type="text" name="bb-qtybtn" value="1">
                                </div>
                            </div>
                        </li>
                        <li class="cart-sidebar-list mb-[24px] p-[20px] flex bg-[#f8f8fb] rounded-[20px] border-[1px] border-solid border-[#eee] relative max-[575px]:p-[10px]">
                            <a href="javascript:void(0)" class="cart-remove-item transition-all duration-[0.3s] ease-in-out bg-[#3d4750] w-[20px] h-[20px] text-[#fff] absolute top-[-3px] right-[-3px] rounded-[50%] flex items-center justify-center opacity-[0.5] text-[15px]"><i class="ri-close-line"></i></a>
                            <a href="javascript:void(0)" class="bb-cart-pro-img flex grow-[1] shrink-[0] basis-[25%] items-center max-[575px]:flex-[initial]">
                                <img src="assets/img/new-product/2.jpg" alt="product-img-2" class="w-[85px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[575px]:w-[50px]">
                            </a>
                            <div class="bb-cart-contact pl-[15px] relative grow-[1] shrink-[0] basis-[70%] overflow-hidden">
                                <a href="product-left-sidebar.html" class="bb-cart-sub-title w-full mb-[8px] font-Poppins tracking-[0.03rem] text-[#3d4750] whitespace-nowrap overflow-hidden text-ellipsis block text-[14px] leading-[18px] font-medium">Organic Litchi Juice Pack</a>
                                <span class="cart-price mb-[8px] text-[14px] leading-[18px] block font-Poppins text-[#686e7d] font-light tracking-[0.03rem]">
                                        <span class="new-price px-[3px] text-[15px] leading-[18px] text-[#686e7d] font-bold">$25</span>
                                        x 500 ml
                                    </span>
                                <div class="qty-plus-minus h-[28px] w-[85px] py-[7px] border-[1px] border-solid border-[#eee] overflow-hidden relative flex items-center justify-between bg-[#fff] rounded-[10px]">
                                    <input class="qty-input text-center" type="text" name="bb-qtybtn" value="1">
                                </div>
                            </div>
                        </li>
                        <li class="cart-sidebar-list mb-[24px] p-[20px] flex bg-[#f8f8fb] rounded-[20px] border-[1px] border-solid border-[#eee] relative max-[575px]:p-[10px]">
                            <a href="javascript:void(0)" class="cart-remove-item transition-all duration-[0.3s] ease-in-out bg-[#3d4750] w-[20px] h-[20px] text-[#fff] absolute top-[-3px] right-[-3px] rounded-[50%] flex items-center justify-center opacity-[0.5] text-[15px]"><i class="ri-close-line"></i></a>
                            <a href="javascript:void(0)" class="bb-cart-pro-img flex grow-[1] shrink-[0] basis-[25%] items-center max-[575px]:flex-[initial]">
                                <img src="assets/img/new-product/3.jpg" alt="product-img-3" class="w-[85px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[575px]:w-[50px]">
                            </a>
                            <div class="bb-cart-contact pl-[15px] relative grow-[1] shrink-[0] basis-[70%] overflow-hidden">
                                <a href="product-left-sidebar.html" class="bb-cart-sub-title w-full mb-[8px] font-Poppins tracking-[0.03rem] text-[#3d4750] whitespace-nowrap overflow-hidden text-ellipsis block text-[14px] leading-[18px] font-medium">Crunchy Banana Chips</a>
                                <span class="cart-price mb-[8px] text-[14px] leading-[18px] block font-Poppins text-[#686e7d] font-light tracking-[0.03rem]">
                                        <span class="new-price px-[3px] text-[15px] leading-[18px] text-[#686e7d] font-bold">$1</span>
                                        x 500 g
                                    </span>
                                <div class="qty-plus-minus h-[28px] w-[85px] py-[7px] border-[1px] border-solid border-[#eee] overflow-hidden relative flex items-center justify-between bg-[#fff] rounded-[10px]">
                                    <input class="qty-input text-center" type="text" name="bb-qtybtn" value="1">
                                </div>
                            </div>
                        </li>
                        <li class="cart-sidebar-list mb-[24px] p-[20px] flex bg-[#f8f8fb] rounded-[20px] border-[1px] border-solid border-[#eee] relative max-[575px]:p-[10px]">
                            <a href="javascript:void(0)" class="cart-remove-item transition-all duration-[0.3s] ease-in-out bg-[#3d4750] w-[20px] h-[20px] text-[#fff] absolute top-[-3px] right-[-3px] rounded-[50%] flex items-center justify-center opacity-[0.5] text-[15px]"><i class="ri-close-line"></i></a>
                            <a href="javascript:void(0)" class="bb-cart-pro-img flex grow-[1] shrink-[0] basis-[25%] items-center max-[575px]:flex-[initial]">
                                <img src="assets/img/new-product/6.jpg" alt="product-img-3" class="w-[85px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[575px]:w-[50px]">
                            </a>
                            <div class="bb-cart-contact pl-[15px] relative grow-[1] shrink-[0] basis-[70%] overflow-hidden">
                                <a href="product-left-sidebar.html" class="bb-cart-sub-title w-full mb-[8px] font-Poppins tracking-[0.03rem] text-[#3d4750] whitespace-nowrap overflow-hidden text-ellipsis block text-[14px] leading-[18px] font-medium">Small Cardamom Spice Pack</a>
                                <span class="cart-price mb-[8px] text-[14px] leading-[18px] block font-Poppins text-[#686e7d] font-light tracking-[0.03rem]">
                                        <span class="new-price px-[3px] text-[15px] leading-[18px] text-[#686e7d] font-bold">$4</span>
                                        x 500 g
                                    </span>
                                <div class="qty-plus-minus h-[28px] w-[85px] py-[7px] border-[1px] border-solid border-[#eee] overflow-hidden relative flex items-center justify-between bg-[#fff] rounded-[10px]">
                                    <input class="qty-input text-center" type="text" name="bb-qtybtn" value="1">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="bb-bottom-cart">
                    <div class="cart-sub-total mt-[20px] pb-[8px] flex flex-wrap justify-between border-t-[1px] border-solid border-[#eee]">
                        <table class="table cart-table mt-[10px] w-full align-top">
                            <tbody>
                            <tr>
                                <td class="title font-medium text-[#777] p-[.5rem]">Sub-Total :</td>
                                <td class="price text-[#777] text-right p-[.5rem]">$300.00</td>
                            </tr>
                            <tr>
                                <td class="title font-medium text-[#777] p-[.5rem]">VAT (20%) :</td>
                                <td class="price text-[#777] text-right p-[.5rem]">$60.00</td>
                            </tr>
                            <tr>
                                <td class="title font-medium text-[#777] p-[.5rem]">Total :</td>
                                <td class="price text-[#777] text-right p-[.5rem]">$360.00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-btn flex justify-between mb-[20px]">
                        <a href="cart.html" class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[5px] px-[15px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">View Cart</a>
                        <a href="checkout.html" class="bb-btn-2 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[5px] px-[15px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Category Popup -->
<div class="bb-category-sidebar transition-all duration-[0.3s] ease-in-out w-full h-full fixed top-[0] z-[17] hidden">
    <div class="bb-category-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#00000080] z-[17]"></div>
    <div class="category-sidebar w-[calc(100%-30px)] max-[1199px]:h-[calc(100vh-60px)] max-w-[1200px] my-[15px] mx-[auto] py-[30px] px-[15px] text-[14px] font-normal transition-all duration-[0.5s] ease-in-out delay-[0s] bg-[#fff] overflow-auto rounded-[30px] z-[18] relative">
        <button type="button" class="bb-category-close transition-all duration-[0.3s] ease-in-out w-[16px] h-[20px] absolute top-[-5px] right-[27px] bg-[#e04e4eb3] rounded-[10px] cursor-pointer hover:bg-[#e04e4e]" title="Close"></button>
        <div class="w-full mx-auto">
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class="w-full px-[12px]">
                    <div class="bb-category-tags mb-[24px]">
                        <div class="sub-title mb-[20px] flex justify-between">
                            <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize">keywords</h4>
                        </div>
                        <div class="bb-tags">
                            <ul class="flex flex-wrap m-[-5px]">
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                    <a href="javascript:void(0)" class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Clothes</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                    <a href="javascript:void(0)" class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Fruits</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                    <a href="javascript:void(0)" class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Snacks</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                    <a href="javascript:void(0)" class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Dairy</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                    <a href="javascript:void(0)" class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Seafood</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                    <a href="javascript:void(0)" class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Toys</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                    <a href="javascript:void(0)" class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">perfume</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                    <a href="javascript:void(0)" class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">jewelry</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                    <a href="javascript:void(0)" class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Bags</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="flex flex-wrap w-full">
                        <div class="w-full px-[12px]">
                            <div class="sub-title mb-[20px] flex justify-between">
                                <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize">Explore Categories</h4>
                            </div>
                        </div>
                        <div class="min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                            <div class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-1 bg-[#fef1f1]">
                                <div class="category-image mb-[12px]">
                                    <img src="assets/img/category/1.svg" alt="category" class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                </div>
                                <div class="category-sub-contact">
                                    <h5 class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]"><a href="shop-left-sidebar-col-3.html" class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">vegetables</a></h5>
                                    <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">485 items</p>
                                </div>
                            </div>
                        </div>
                        <div class="min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                            <div class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-2 bg-[#e1fcf2]">
                                <div class="category-image mb-[12px]">
                                    <img src="assets/img/category/2.svg" alt="category" class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                </div>
                                <div class="category-sub-contact">
                                    <h5 class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]"><a href="shop-left-sidebar-col-3.html" class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">Fruits</a></h5>
                                    <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">291 items</p>
                                </div>
                            </div>
                        </div>
                        <div class="min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                            <div class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe]">
                                <div class="category-image mb-[12px]">
                                    <img src="assets/img/category/3.svg" alt="category" class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                </div>
                                <div class="category-sub-contact">
                                    <h5 class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]"><a href="shop-left-sidebar-col-3.html" class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">Cold Drinks</a></h5>
                                    <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">49 items</p>
                                </div>
                            </div>
                        </div>
                        <div class="min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                            <div class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-4 bg-[#fbf9e4]">
                                <div class="category-image mb-[12px]">
                                    <img src="assets/img/category/4.svg" alt="category" class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                </div>
                                <div class="category-sub-contact">
                                    <h5 class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]"><a href="shop-left-sidebar-col-3.html" class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">Bakery</a></h5>
                                    <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">08 items</p>
                                </div>
                            </div>
                        </div>
                        <div class="min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                            <div class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-2 bg-[#e1fcf2]">
                                <div class="category-image mb-[12px]">
                                    <img src="assets/img/category/5.svg" alt="category" class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                </div>
                                <div class="category-sub-contact">
                                    <h5 class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]"><a href="shop-left-sidebar-col-3.html" class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">Fast Food</a></h5>
                                    <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">291 items</p>
                                </div>
                            </div>
                        </div>
                        <div class="min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                            <div class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe]">
                                <div class="category-image mb-[12px]">
                                    <img src="assets/img/category/6.svg" alt="category" class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                </div>
                                <div class="category-sub-contact">
                                    <h5 class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]"><a href="shop-left-sidebar-col-3.html" class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">Snacks</a></h5>
                                    <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">49 items</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="flex flex-wrap w-full">
                        <div class="w-full px-[12px]">
                            <div class="sub-title mb-[20px] flex justify-between">
                                <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize">Related products</h4>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                            <div class="bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col">
                                <a href="javascript:void(0)" class="pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]">
                                    <img src="assets/img/new-product/1.jpg" alt="new-product-1" class="w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full">
                                </a>
                                <div class="side-contact flex flex-col">
                                    <h4 class="bb-pro-title text-[15px]">
                                        <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]">Ground Nuts Oil Pack</a>
                                    </h4>
                                    <span class="bb-pro-rating">
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[26px] text-[#777]"></i>
                                        </span>
                                    <div class="inner-price mx-[-3px]">
                                        <span class="new-price px-[3px] text-[15px] text-[#686e7d] font-semibold">$15</span>
                                        <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                            <div class="bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col">
                                <a href="javascript:void(0)" class="pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]">
                                    <img src="assets/img/new-product/2.jpg" alt="new-product-2" class="w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full">
                                </a>
                                <div class="side-contact flex flex-col">
                                    <h4 class="bb-pro-title text-[15px]">
                                        <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]">Organic Litchi Juice</a>
                                    </h4>
                                    <span class="bb-pro-rating">
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[26px] text-[#777]"></i>
                                        </span>
                                    <div class="inner-price mx-[-3px]">
                                        <span class="new-price px-[3px] text-[15px] text-[#686e7d] font-semibold">$25</span>
                                        <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$30</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                            <div class="bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col">
                                <a href="javascript:void(0)" class="pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]">
                                    <img src="assets/img/new-product/3.jpg" alt="new-product-3" class="w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full">
                                </a>
                                <div class="side-contact flex flex-col">
                                    <h4 class="bb-pro-title text-[15px]">
                                        <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]">Spicy Banana Chips</a>
                                    </h4>
                                    <span class="bb-pro-rating">
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[26px] text-[#777]"></i>
                                        </span>
                                    <div class="inner-price mx-[-3px]">
                                        <span class="new-price px-[3px] text-[15px] text-[#686e7d] font-semibold">$01</span>
                                        <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$02</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                            <div class="bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col">
                                <a href="javascript:void(0)" class="pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]">
                                    <img src="assets/img/new-product/4.jpg" alt="new-product-4" class="w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full">
                                </a>
                                <div class="side-contact flex flex-col">
                                    <h4 class="bb-pro-title text-[15px]">
                                        <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]">Spicy Potato Chips</a>
                                    </h4>
                                    <span class="bb-pro-rating">
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[26px] text-[#777]"></i>
                                        </span>
                                    <div class="inner-price mx-[-3px]">
                                        <span class="new-price px-[3px] text-[15px] text-[#686e7d] font-semibold">$25</span>
                                        <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                            <div class="bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col">
                                <a href="javascript:void(0)" class="pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]">
                                    <img src="assets/img/new-product/5.jpg" alt="new-product-5" class="w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full">
                                </a>
                                <div class="side-contact flex flex-col">
                                    <h4 class="bb-pro-title text-[15px]">
                                        <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]">Black Pepper Spice</a>
                                    </h4>
                                    <span class="bb-pro-rating">
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[26px] text-[#777]"></i>
                                        </span>
                                    <div class="inner-price mx-[-3px]">
                                        <span class="new-price px-[3px] text-[15px] text-[#686e7d] font-semibold">$32</span>
                                        <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                            <div class="bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col">
                                <a href="javascript:void(0)" class="pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]">
                                    <img src="assets/img/new-product/6.jpg" alt="new-product-6" class="w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full">
                                </a>
                                <div class="side-contact flex flex-col">
                                    <h4 class="bb-pro-title text-[15px]">
                                        <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]">Small Chili Spice</a>
                                    </h4>
                                    <span class="bb-pro-rating">
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[26px] text-[#777]"></i>
                                        </span>
                                    <div class="inner-price mx-[-3px]">
                                        <span class="new-price px-[3px] text-[15px] text-[#686e7d] font-semibold">$41</span>
                                        <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$45</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick view Modal -->
<div class="bb-modal-overlay w-full h-screen hidden fixed top-0 left-0 z-[26] bg-[#000000b3]"></div>
<div class="bb-modal quickview-modal max-[575px]:w-full fixed top-[45%] max-[767px]:top-[50%] left-[50%] z-[30] max-[767px]:w-full hidden max-[767px]:max-h-full max-[767px]:overflow-y-auto">
    <div class="bb-modal-dialog h-full my-[0%] mx-auto max-w-[700px] w-[700px] max-[991px]:max-w-[650px] max-[991px]:w-[650px] max-[767px]:w-[80%] max-[767px]:h-auto max-[767px]:max-w-[80%] max-[767px]:m-[0] max-[767px]:py-[35px] max-[767px]:mx-auto max-[575px]:w-[90%] transition-transform duration-[0.3s] ease-out cr-fadeOutUp">
        <div class="modal-content p-[24px] relative bg-[#fff] rounded-[20px] overflow-hidden">
            <button type="button" class="bb-close-modal transition-all duration-[0.3s] ease-in-out w-[16px] h-[20px] absolute top-[-5px] right-[27px] bg-[#e04e4eb3] rounded-[10px] cursor-pointer hover:bg-[#e04e4e]" title="Close"></button>
            <div class="modal-body mx-[-12px] max-[767px]:mx-[0]">
                <div class="flex flex-wrap mx-[-12px] mb-[-24px]">
                    <div class="min-[768px]:w-[41.66%] min-[576px]:w-full px-[12px] mb-[24px]">
                        <div class="single-pro-img single-pro-img-no-sidebar h-full border-[1px] border-solid border-[#eee] overflow-hidden rounded-[20px]">
                            <div class="single-product-scroll h-full">
                                <div class="single-slide zoom-image-hover h-full bg-[#fff] flex items-center">
                                    <img class="img-responsive max-w-full block" src="assets/img/product/1.jpg" alt="product-img-1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="min-[768px]:w-[58.33%] min-[576px]:w-full px-[12px] mb-[24px]">
                        <div class="quickview-pro-content">
                            <h5 class="bb-quick-title">
                                <a href="product-left-sidebar.html" class="font-Poppins tracking-[0.03rem] mb-[10px] block text-[#3d4750] text-[20px] leading-[30px] font-medium">Mix nuts premium quality organic dried fruit 250g pack</a>
                            </h5>
                            <div class="bb-pro-rating flex mb-[10px]">
                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                            </div>
                            <div class="bb-quickview-desc mb-[10px] text-[15px] leading-[24px] text-[#777] font-light">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1900s,</div>
                            <div class="bb-quickview-price pt-[5px] pb-[10px] flex items-center justify-left">
                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$50.00</span>
                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$62.00</span>
                            </div>
                            <div class="bb-pro-variation mt-[15px] mb-[25px]">
                                <ul class="flex flex-wrap m-[-2px]">
                                    <li class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal active">
                                        <a href="javascript:void(0)" class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]" data-tooltip="Small">250g</a>
                                    </li>
                                    <li class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal">
                                        <a href="javascript:void(0)" class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]" data-tooltip="Medium">500g</a>
                                    </li>
                                    <li class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal">
                                        <a href="javascript:void(0)" class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]" data-tooltip="Large">1kg</a>
                                    </li>
                                    <li class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal">
                                        <a href="javascript:void(0)" class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]" data-tooltip="Extra Large">2kg</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="bb-quickview-qty flex max-[360px]:justify-center">
                                <div class="qty-plus-minus w-[85px] h-[40px] py-[7px] border-[1px] border-solid border-[#eee] overflow-hidden relative flex items-center justify-between bg-[#fff] rounded-[10px] max-[360px]:m-[auto]">
                                    <input class="qty-input text-[#777] float-left text-[14px] h-auto m-[0] p-[0] text-center w-[32px] outline-[0] font-normal leading-[35px] rounded-[10px]" type="text" name="bb-qtybtn" value="1">
                                </div>
                                <div class="bb-quickview-cart ml-[4px] max-[360px]:mt-[15px] max-[360px]:ml-[0] max-[360px]:flex max-[360px]:justify-center">
                                    <button type="button" class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins h-[40px] leading-[28px] tracking-[0.03rem] py-[3px] px-[20px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">
                                        <i class="ri-shopping-bag-line pr-[8px]"></i>Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter Modal -->
<div class="bb-popnews-bg fixed left-[0] top-[0] w-full h-full bg-[#00000080] hidden z-[25] hidden"></div>
<div class="bb-popnews-box w-full max-w-[600px] p-[24px] fixed left-[50%] top-[50%] bg-[#fff] hidden z-[25] text-center rounded-[15px] overflow-hidden max-[767px]:w-[90%]">
    <div class="bb-popnews-close transition-all duration-[0.3s] ease-in-out w-[16px] h-[20px] absolute top-[-5px] right-[27px] bg-[#e04e4eb3] rounded-[10px] cursor-pointer hover:bg-[#e04e4e]" title="Close"></div>
    <div class="flex flex-wrap mx-[-12px]">
        <div class="min-[768px]:w-[50%] w-full px-[12px]">
            <img src="assets/img/newsletter/newsletter.jpg" alt="newsletter" class="w-full rounded-[15px] max-[767px]:hidden">
        </div>
        <div class="min-[768px]:w-[50%] w-full px-[12px]">
            <div class="bb-popnews-box-content h-full flex flex-col items-center justify-center">
                <h2 class="font-quicksand text-[#3d4750] block text-[22px] leading-[33px] font-semibold mt-[0] mx-[auto] mb-[10px] tracking-[0] capitalize">Newsletter.</h2>
                <p class="font-Poppins font-light tracking-[0.03rem] mb-[8px] text-[14px] leading-[22px] text-[#686e7d]">Subscribe the BlueBerry to get in touch and get the future update.</p>
                <form class="bb-popnews-form mt-[0]" action="#" method="post">
                    <input type="email" name="newsemail" placeholder="Email Address" class="mb-[20px] bg-transparent border-[1px] border-solid border-[#eee] text-[#3d4750] text-[14px] py-[10px] px-[15px] w-full outline-[0] rounded-[10px] font-normal" required>
                    <button type="button" class="bb-btn-2 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[4px] px-[15px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]" name="subscribe">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Tools Sidebar -->
<div class="bb-tools-sidebar-overlay w-full h-screen fixed top-[0] left-[0] bg-[#00000080] z-[16] hidden"></div>
<div class="bb-tools-sidebar w-[300px] h-screen fixed right-[0] top-[0] bg-[#fff] transition-all duration-[0.3s] ease z-[16] translate-x-[300px]">
    <a href="javascript:void(0)" class="bb-tools-sidebar-toggle in-out absolute top-[45%] right-[302px] w-[40px] h-[40px] bg-[#3d4750] transition-all duration-[0.3s] ease-in flex items-center justify-center text-[25px] z-[-1] rounded-[5px]">
        <i class="ri-settings-fill text-[20px] text-[#fff]"></i>
    </a>
    <div class="bb-bar-title mb-[15px] p-[15px] flex flex-row justify-between items-center border-b-[1px] border-solid border-[#eee] ">
        <h6 class="m-[0] font-quicksand text-[17px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">Tools</h6>
        <a href="#" class="close-tools text-[#ff0000] text-[17px] font-semibold leading-[28px] tracking-[0.03rem]"><i class="ri-close-line"></i></a>
    </div>
    <div class="bb-tools-detail h-[calc(100vh-72px)] px-[15px] pb-[15px] overflow-auto">
        <div class="bb-tools-block">
            <h3 class="font-quicksand tracking-[0.03rem] leading-[1.2] my-[15px] text-[14px] font-bold text-[#3d4750]">Select Color</h3>
            <ul class="bb-color">
                <li class="color-primary inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#6c7fd8] active-variant"></li>
                <li class="color-1 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#8118d5]"></li>
                <li class="color-2 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#5f6af5]"></li>
                <li class="color-3 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#f5885f]"></li>
                <li class="color-4 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#32dbe2]"></li>
                <li class="color-5 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#3f51b5]"></li>
                <li class="color-6 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#f44336]"></li>
                <li class="color-7 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#e91e63]"></li>
                <li class="color-8 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#607d8b]"></li>
                <li class="color-9 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#5eb595]"></li>
            </ul>
        </div>
        <div class="bb-tools-block">
            <h3 class="font-quicksand tracking-[0.03rem] leading-[1.2] my-[15px] text-[14px] font-bold text-[#3d4750]">Dark Modes</h3>
            <div class="bb-tools-dark flex flex-wrap flex-row justify-between">
                <div class="mode-primary bb-dark-item mode light relative w-[125px] mb-[10px] text-center active-dark" data-bb-mode-tool="light">
                    <img src="assets/img/tools/light.png" alt="light" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                    <p class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">Light</p>
                </div>
                <div class="bb-dark-item mode dark relative w-[125px] mb-[10px] text-center" data-bb-mode-tool="dark">
                    <img src="assets/img/tools/dark.png" alt="dark" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                    <p class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">Dark</p>
                </div>
            </div>
        </div>
        <div class="bb-tools-block">
            <h3 class="font-quicksand tracking-[0.03rem] leading-[1.2] my-[15px] text-[14px] font-bold text-[#3d4750]">RTL Modes</h3>
            <div class="bb-tools-rtl flex flex-wrap flex-row justify-between">
                <div class="bb-tools-item ltr relative w-[125px] mb-[10px] text-center active-rtl" data-bb-mode-tool="ltr">
                    <img src="assets/img/tools/ltr.png" alt="ltr" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                    <p class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">LTR</p>
                </div>
                <div class="bb-tools-item rtl relative w-[125px] mb-[10px] text-center" data-bb-mode-tool="rtl">
                    <img src="assets/img/tools/rtl.png" alt="rtl" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                    <p class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">RTL</p>
                </div>
            </div>
        </div>
        <div class="bb-tools-block">
            <h3 class="font-quicksand tracking-[0.03rem] leading-[1.2] my-[15px] text-[14px] font-bold text-[#3d4750]">Box Design</h3>
            <div class="bb-tools-box flex flex-wrap flex-row justify-between">
                <div class="bb-tools-item default relative w-[125px] mb-[10px] text-center active-box" data-bb-mode-tool="default">
                    <img src="assets/img/tools/box-0.png" alt="box-0" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                    <p class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">Default</p>
                </div>
                <div class="bb-tools-item box-1 relative w-[125px] mb-[10px] text-center" data-bb-mode-tool="box-1">
                    <img src="assets/img/tools/box-1.png" alt="box-1" class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                    <p class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">Box-1</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Back to top  -->
<a href="#Top" class="back-to-top result-placeholder transition-all duration-[0.3s] ease-in-out w-[38px] h-[38px] hidden fixed right-[15px] bottom-[15px] z-[10] rounded-[20px] cursor-pointer bg-[#fff] text-[#6c7fd8] border-[1px] border-solid border-[#6c7fd8] text-center text-[22px] leading-[1.6]">
    <i class="ri-arrow-up-line text-[20px]"></i>
    <div class="back-to-top-wrap active-progress">
        <svg viewBox="-1 -1 102 102" class="w-[36px] h-[36px] fixed right-[16px] bottom-[16px]">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" class="fill-transparent stroke-[5px] stroke-[#6c7fd8]"></path>
        </svg>
    </div>
</a>

<!-- Plugins -->
<script src="assets/js/vendor/jquery.min.js"></script>
<script src="assets/js/vendor/jquery.zoom.min.js"></script>
<script src="assets/js/vendor/aos.js"></script>
<script src="assets/js/vendor/swiper-bundle.min.js"></script>
<script src="assets/js/vendor/smoothscroll.min.js"></script>
<script src="assets/js/vendor/countdownTimer.js"></script>
<script src="assets/js/vendor/owl.carousel.min.js"></script>
<script src="assets/js/vendor/slick.min.js"></script>
<script src="assets/js/vendor/jquery-range-ui.min.js"></script>

<!-- main-js -->
<script src="assets/js/main.js"></script>
</body>

</html>
