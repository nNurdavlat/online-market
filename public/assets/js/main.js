/* main js */
(function ($) {
    "use strict";

    /* Loader */
    $(window).on("load", function () {
        $(".bb-loader").fadeOut("slow");
    });

    /* Aos animation on scroll */
    AOS.init({
        once: true,
    });

    /* Mobile menu sidebar JS */
    $(".bb-toggle-menu").on("click", function () {
        $(".bb-mobile-menu-overlay").fadeIn();
        $(".bb-mobile-menu").addClass("bb-menu-open");
    });

    $(".bb-mobile-menu-overlay, .bb-close-menu").on("click", function () {
        $(".bb-mobile-menu-overlay").fadeOut();
        $(".bb-mobile-menu").removeClass("bb-menu-open");
    });

    function ResponsiveMobilemsMenu() {
        var $msNav = $(".bb-menu-content, .overlay-menu"),
            $msNavSubMenu = $msNav.find(".sub-menu");
        $msNavSubMenu.parent().prepend('<span class="menu-toggle"></span>');

        $msNav.on("click", "li a, .menu-toggle", function (e) {
            var $this = $(this);
            if ($this.attr("href") === "#" || $this.hasClass("menu-toggle")) {
                e.preventDefault();
                if ($this.siblings("ul:visible").length) {
                    $this.parent("li").removeClass("active");
                    $this.siblings("ul").slideUp();
                    $this.parent("li").find("li").removeClass("active");
                    $this.parent("li").find("ul:visible").slideUp();
                } else {
                    $this.parent("li").addClass("active");
                    $this
                        .closest("li")
                        .siblings("li")
                        .removeClass("active")
                        .find("li")
                        .removeClass("active");
                    $this.closest("li").siblings("li").find("ul:visible").slideUp();
                    $this.siblings("ul").slideDown();
                }
            }
        });
    }

    ResponsiveMobilemsMenu();

    /* Custom select */
    $("select").each(function () {
        var $this = $(this),
            selectOptions = $(this).children("option").length;

        $this.addClass("hide-select");
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="custom-select active"></div>');

        var $customSelect = $this.next("div.custom-select.active");
        $customSelect.text($this.children("option").eq(0).text());

        var $optionlist = $("<ul />", {
            class: "select-options",
        }).insertAfter($customSelect);

        for (var i = 0; i < selectOptions; i++) {
            $("<li />", {
                text: $this.children("option").eq(i).text(),
                rel: $this.children("option").eq(i).val(),
            }).appendTo($optionlist);
        }

        var $optionlistItems = $optionlist.children("li");

        $customSelect.click(function (e) {
            e.stopPropagation();
            $("div.custom-select.active")
                .not(this)
                .each(function () {
                    $(this).removeClass("active").next("ul.select-options").hide();
                });
            $(this).toggleClass("active").next("ul.select-options").slideToggle();
        });

        $optionlistItems.click(function (e) {
            e.stopPropagation();
            $customSelect.text($(this).text()).removeClass("active");
            $this.val($(this).attr("rel"));
            $optionlist.hide();
        });

        $(document).click(function () {
            $customSelect.removeClass("active");
            $optionlist.hide();
        });
    });

    /* Hero Shape */
    var shape = "M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z; M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4 c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6 c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8 C48.9,198.6,57.8,191,51,171.3z; M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z";
    $(window).on("load", function () {
        $(".animate-shape animate").attr('values', shape);
    });

    /* Hero slider */
    var BryMainSlider = new Swiper(".hero-slider.swiper-container", {
        loop: true,
        centeredSlides: true,
        speed: 1000,
        parallax: true,
        autoplay: {
            delay: 5000,
        },
        effect: 'fade',
        autoplay: false,
        autoHeight: true,
        speed: 2500,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    /* Hero scroll Page */
    $('.bb-scroll-Page').on('click', function (event) {
        event.preventDefault();
        $('html, body').animate({ scrollTop: 1000 }, duration);
        return false;
    })

    /* Accordians toggle (faq) */
    $(".accordion-head").click(function () {
        if ($(".accordion-body").is(":visible")) {
            $(".accordion-body").slideUp(300);
            $("h4").removeClass("active-arrow");
        }
        if ($(this).next(".accordion-body").is(":visible")) {
            $(this).next(".accordion-body").slideUp(300);
            $("h4").removeClass("active-arrow");
        } else {
            $(this).next(".accordion-body").slideDown(300);
            $(this).addClass("active-arrow");
        }
    });

    /* Category 6 colum slider section (Shop Page) */
    $(".bb-category-6-colum").owlCarousel({
        margin: 24,
        loop: true,
        dots: false,
        nav: false,
        smartSpeed: 500,
        autoplay: true,
        autoplayTimeout: 3000,
        items: 3,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            421: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 5,
            },
            1400: {
                items: 6,
            }
        },
    });

    /*----------- modal ----------------*/
    $(".bb-modal-toggle").on("click", function () {
        $(".bb-modal-overlay").fadeIn();
        $(".bb-modal").fadeIn();
        $("body").addClass("bb-overflow-hidden")
        $(".bb-modal-dialog").addClass("bb-fadeOutUp");
        $(".bb-modal-dialog").removeClass("bb-fadeInDown");
    });

    $(".bb-close-modal, .bb-modal-overlay").on("click", function () {
        $(".bb-modal-overlay").fadeOut();
        $(".bb-modal").fadeOut();
        $("body").removeClass("bb-overflow-hidden")
        $(".bb-modal-dialog").removeClass("bb-fadeOutUp");
        $(".bb-modal-dialog").addClass("bb-fadeInDown");
    });

    /*-------------- tabs-ProductTab-Tailwindcss -------------------*/
    $("#ProductTab li:nth-child(2)").addClass("active");
    $(".tab-product-pane").hide();
    $(".tab-product-pane:nth-child(2)").show();
    $("#ProductTab li").click(function () {
        $("#ProductTab li").removeClass("active");
        $(this).addClass("active");
        $(".tab-product-pane").hide();
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        return false;
    });

    /*-------------- tabs-ProductTab-Tailwindcss (product-page) -------------------*/
    $("#ProTab li:nth-child(1)").addClass("active");
    $(".tab-pro-pane").hide();
    $(".tab-pro-pane:nth-child(1)").show();
    $("#ProTab li").click(function () {
        $("#ProTab li").removeClass("active");
        $(this).addClass("active");
        $(".tab-pro-pane").hide();
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        return false;
    });

    /*-------------- tabs-Vendors-Tailwindcss -------------------*/
    $("#vendorstab li:nth-child(1)").addClass("active");
    $(".tab-vendors-pane").hide();
    $(".tab-vendors-pane:nth-child(1)").show();
    $("#vendorstab li").click(function () {
        $("#vendorstab li").removeClass("active");
        $(this).addClass("active");
        $(".tab-vendors-pane").hide();
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        return false;
    });

    /* Single product Slider */
    $('.single-product-cover').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        asNavFor: '.single-nav-thumb',
    });

    $('.single-nav-thumb').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.single-product-cover',
        dots: false,
        arrows: true,
        focusOnSelect: true
    });

    /* Category slider section (Home Page) */
    $(".bb-category-block").owlCarousel({
        margin: 24,
        loop: true,
        dots: false,
        nav: false,
        smartSpeed: 500,
        autoplay: true,
        autoplayTimeout: 3000,
        items: 3,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            421: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1200: {
                items: 4,
            },
        },
    });

    /* Deal slider section (Home Page) */
    $(".bb-deal-block").owlCarousel({
        loop: true,
        dots: false,
        nav: false,
        smartSpeed: 500,
        autoplay: false,
        autoplayTimeout: 2500,
        items: 3,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            481: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1200: {
                items: 4,
            },
        },
    });

    /* blog-2 (Home Page) */
    $(".blog-2-slider").owlCarousel({
        margin: 24,
        loop: true,
        dots: false,
        nav: false,
        smartSpeed: 500,
        autoplay: false,
        autoplayTimeout: 2500,
        items: 3,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            421: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1200: {
                items: 4,
            },
        },
    });

    /* instagram (Home Page) */
    $(".bb-instagram-slider").owlCarousel({
        margin: 24,
        loop: true,
        dots: false,
        nav: false,
        smartSpeed: 500,
        autoplay: false,
        autoplayTimeout: 2500,
        items: 3,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            321: {
                items: 2,
            },
            421: {
                items: 3,
            },
            768: {
                items: 4,
            },
            992: {
                items: 5,
            },
            1400: {
                items: 6,
            }
        },
    });

    /* testimonials */
    $(".testimonials-slider").owlCarousel({
        loop: true,
        margin: 24,
        responsiveClass: true,
        dots: false,
        nav: false,
        pagination: false,
        autoplay: true,
        autoplaySpeed: 2000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1,
            },
        },
    });

    /* Remove product on wishlist page */
    $(".bb-remove-wish").on("click", function () {
        $(this).parents(".bb-wishlist").remove();
        var wish_product_count = $(".bb-wishlist").length;
        if (wish_product_count == 0) {
            $('.bb-wish-rightside').html('<p class="bb-wishlist-msg">Your wishlist is empty!</p>');
        }
    });

    /* Remove product on compare page */
    $(".bb-remove-compare").on("click", function () {
        $(this).parents(".bb-compare-box").remove();
    });

    /* Footer Toggle */
    $(document).ready(function () {
        $(".bb-footer-links").addClass("bb-footer-dropdown");

        $(".bb-footer-heading").append(
            "<div class='bb-heading-res'><i class='ri-arrow-down-s-line'></i></div>"
        );

        $(".bb-footer-heading .bb-heading-res").on("click", function () {
            var $this = $(this)
                .closest(".footer-top .bb-footer-toggle")
                .find(".bb-footer-dropdown");
            $this.slideToggle("slow");
            $(".bb-footer-dropdown").not($this).slideUp("slow");
        });
    });

    /* Qty Plus Minus Button  */
    var QtyPlusMinus = $(".qty-plus-minus");
    QtyPlusMinus.prepend('<div class="dec bb-qtybtn">-</div>');
    QtyPlusMinus.append('<div class="inc bb-qtybtn">+</div>');

    $("body").on("click", ".bb-qtybtn", function () {
        var $qtybutton = $(this);
        var QtyoldValue = $qtybutton.parent().find("input").val();
        if ($qtybutton.text() === "+") {
            var QtynewVal = parseFloat(QtyoldValue) + 1;
        } else {
            if (QtyoldValue > 1) {
                var QtynewVal = parseFloat(QtyoldValue) - 1;
            } else {
                QtynewVal = 1;
            }
        }
        $qtybutton.parent().find("input").val(QtynewVal);
    });

    /* Product Image Zoom */
    $(".zoom-image-hover").zoom();

    /* Single Product Color and Size Click to Active  */
    $(document).ready(function () {
        $(".bb-pro-variation ul li").on("click", function () {
            $(this).addClass("active").siblings().removeClass("active");
        });
    });

    /* active-tags  */
    $(document).ready(function () {
        $("ul.bb-shop-tags li").on("click", function () {
            $(this).addClass("active-tags").siblings().removeClass("active-tags");
        });
    });

    /* color-sidebar-active */
    $(document).ready(function () {
        $(".bb-color-contact ul li").on("click", function () {
            $(this).addClass("color-sidebar-active").siblings().removeClass("color-sidebar-active");
        });
    });

    /* active-variation */
    $(document).ready(function () {
        $(".bb-pro-variation-contant ul li").on("click", function () {
            $(this).addClass("active-variation").siblings().removeClass("active-variation");
        });
    });

    /* List Grid View */
    $(document).ready(function () {
        $(".bb-bl-btn button").on("click", function () {
            $(this).addClass("active").siblings().removeClass("active");
        });
    });

    function showList100(e) {
        var $gridCont = $('.bb-shop-pro-inner');
        var $listView = $('.pro-bb-content');
        e.preventDefault();
        $gridCont.addClass('list-view-100');
        $listView.addClass('width-100');
    }

    function gridList100(e) {
        var $gridCont = $('.bb-shop-pro-inner');
        var $gridView = $('.pro-bb-content');
        e.preventDefault();
        $gridCont.removeClass('list-view-100');
        $gridView.removeClass('width-100');
    }

    $(document).on('click', '.btn-grid-100', gridList100);
    $(document).on('click', '.btn-list-100', showList100);

    /* coupon down box */
    $('.coupon-down-box').hide();
    $('.drop-coupon').on('click', function () {
        $('.coupon-down-box').slideToggle();
    })

    /* Range slider */
    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 130,
            max: 500,
            values: [130, 250],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    });

    /* Shop sidebar JS */
    $(".btn-filter").on("click", function () {
        $(".bb-shop-overlay").fadeIn();
        $(".bb-shop-sidebar").addClass("bb-shop-sidebar-open");
    });

    $(".bb-shop-overlay, .filter-close").on("click", function () {
        $(".bb-shop-overlay").fadeOut();
        $(".bb-shop-sidebar").removeClass("bb-shop-sidebar-open");
    });

    /* Cart sidebar JS */
    $(".bb-cart-toggle").on("click", function (e) {
        e.preventDefault();
        $(".bb-side-cart-overlay").fadeIn();
        $(".bb-side-cart").addClass("bb-open-cart");
    });
    $(".bb-side-cart-overlay, .bb-cart-close").on("click", function (e) {
        e.preventDefault();
        $(".bb-side-cart-overlay").fadeOut();
        $(".bb-side-cart").removeClass("bb-open-cart");
    });
    $(".cart-remove-item").on("click", function (e) {
        $(this).parents(".cart-sidebar-list").remove();
        var wish_product_count = $(".cart-sidebar-list").length;
        if (wish_product_count == 0) {
            $('.bb-cart-items').html('<p class="bb-wishlist-msg">Your Cart is empty!</p>');
        }
    });

    /* Category sidebar JS */
    $(".bb-category-toggle").on("click", function (e) {
        e.preventDefault();
        $(".bb-category-overlay").fadeIn();
        $(".bb-category-sidebar").addClass("bb-open-category");
    });
    $(".bb-category-overlay, .bb-category-close").on("click", function (e) {
        e.preventDefault();
        $(".bb-category-overlay").fadeOut();
        $(".bb-category-sidebar").removeClass("bb-open-category");
    });

    /* back-to-top */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $(".back-to-top").fadeIn();
        } else {
            $(".back-to-top").fadeOut();
        }
    });

    var progressPath = document.querySelector('.back-to-top-wrap path');
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
    var updateProgress = function () {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength / height);
        progressPath.style.strokeDashoffset = progress;
    }
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 50;
    var duration = 550;
    jQuery(window).on('scroll', function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top-wrap').addClass('active-progress');
        } else {
            jQuery('.back-to-top-wrap').removeClass('active-progress');
        }
    });
    jQuery('.back-to-top-wrap').on('click', function (event) {
        event.preventDefault();
        jQuery('html, body').animate({ scrollTop: 0 }, duration);
        return false;
    })

    /* Team (About Page) */
    $(".bb-team").owlCarousel({
        margin: 30,
        loop: true,
        dots: false,
        nav: false,
        smartSpeed: 500,
        autoplay: true,
        items: 3,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            420: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
        },
    });

    /* Newsletter popup Homepage */
    setTimeout(function () {
        $(".bb-popnews-bg").fadeIn();
        $(".bb-popnews-box").fadeIn();
    }, 5000);

    $(".bb-popnews-close").click(() => {
        $(".bb-popnews-bg").fadeOut();
        $(".bb-popnews-box").fadeOut();
    });

    $(".bb-popnews-bg").click(() => {
        $(".bb-popnews-bg").fadeOut();
        $(".bb-popnews-box").fadeOut();
    });

    /* Copyright years JS  */
    var date = new Date().getFullYear();
    document.getElementById("copyright_year").innerHTML = date;

    /* Tools Sidebar */
    $('.bb-tools-sidebar-toggle').on("click", function () {
        $('.bb-tools-sidebar').addClass("open-tools");
        $('.bb-tools-sidebar-overlay').fadeIn();
        $('.bb-tools-sidebar-toggle').hide();

    });
    $('.bb-tools-sidebar-overlay, .close-tools').on("click", function () {
        $('.bb-tools-sidebar').removeClass("open-tools");
        $('.bb-tools-sidebar-overlay').fadeOut();
        $('.bb-tools-sidebar-toggle').fadeIn();

    });

    /* color show */
    $(".bb-color li").on("click", function () {
        $("li").removeClass("active-variant");
        $(this).addClass("active-variant");
    });

    $(".color-primary").on("click", function () {
        $("#add_class").remove();
    });

    $(".color-1").on("click", function () {
        $("#add_class").remove();
        $("head").append(
            '<link rel="stylesheet" href="assets/css/color-1.css" id="add_class">'
        );
    });
    $(".color-2").on("click", function () {
        $("#add_class").remove();
        $("head").append(
            '<link rel="stylesheet" href="assets/css/color-2.css" id="add_class">'
        );
    });
    $(".color-3").on("click", function () {
        $("#add_class").remove();
        $("head").append(
            '<link rel="stylesheet" href="assets/css/color-3.css" id="add_class">'
        );
    });
    $(".color-4").on("click", function () {
        $("#add_class").remove();
        $("head").append(
            '<link rel="stylesheet" href="assets/css/color-4.css" id="add_class">'
        );
    });
    $(".color-5").on("click", function () {
        $("#add_class").remove();
        $("head").append(
            '<link rel="stylesheet" href="assets/css/color-5.css" id="add_class">'
        );
    });
    $(".color-6").on("click", function () {
        $("#add_class").remove();
        $("head").append(
            '<link rel="stylesheet" href="assets/css/color-6.css" id="add_class">'
        );
    });
    $(".color-7").on("click", function () {
        $("#add_class").remove();
        $("head").append(
            '<link rel="stylesheet" href="assets/css/color-7.css" id="add_class">'
        );
    });
    $(".color-8").on("click", function () {
        $("#add_class").remove();
        $("head").append(
            '<link rel="stylesheet" href="assets/css/color-8.css" id="add_class">'
        );
    });
    $(".color-9").on("click", function () {
        $("#add_class").remove();
        $("head").append(
            '<link rel="stylesheet" href="assets/css/color-9.css" id="add_class">'
        );
    });

    /* Dark Modes */
    $(".bb-tools-dark div").on("click", function () {
        $("div").removeClass("active-dark");
        $(this).addClass("active-dark");
    });
    $(".light").on("click", function () {
        $("#add_dark").remove();
    });
    $(".dark").on("click", function () {
        $("head").append(
            '<link rel="stylesheet" href="assets/css/dark.css" id="add_dark">'
        );
    });

    /* RTL Modes */
    $(".bb-tools-rtl div").on("click", function () {
        $("div").removeClass("active-rtl");
        $(this).addClass("active-rtl");
    });
    $(".ltr").on("click", function () {
        $("#add_rtl").remove();
    });
    $(".rtl").on("click", function () {
        $("head").append(
            '<link rel="stylesheet" href="assets/css/rtl.css" id="add_rtl">'
        );
    });

    /* box Tools */
    $(".bb-tools-box div").on("click", function () {
        $("div").removeClass("active-box");
        $(this).addClass("active-box");
    });
    $(".default").on("click", function () {
        $("#add_box").remove();
    });
    $(".box-1").on("click", function () {
        $("head").append(
            '<link rel="stylesheet" href="assets/css/box-1.css" id="add_box">'
        );
    });

})(jQuery);
