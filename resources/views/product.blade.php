<x-header title="Online Market"></x-header>
<!-- Loader -->
<div class="bb-loader min-w-full w-full h-screen fixed top-[0] left-[0] flex items-center justify-center bg-[#fff] z-[45]">
    <img src="/assets/img/logo/loader.png" alt="loader" class="absolute">
    <span class="loader w-[60px] h-[60px] relative"></span>
</div>

<!-- Header -->
<x-navbar :parentCategories="$parentCategories" :productsMenu="$productsMenu"></x-navbar>
<!-- Breadcrumb -->
<section class="section-breadcrumb mb-[50px] max-[1199px]:mb-[35px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                    <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                        <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px]">Shop Page</h2>
                    </div>
                    <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                        <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                            <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="{{route('index')}}" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Home</a></li>
                            <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                            <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active">Shop Page</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category section -->
<section class="section-category pt-[50px] max-[1199px]:pt-[35px] mb-[24px]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="bb-category-6-colum owl-carousel">
                    @foreach($parentCategories as $category)
                        <div class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe]"
                             data-aos="flip-left" data-aos-duration="1000" data-aos-delay="600">

                            <div class="category-image mb-[12px]">
                                <img src="{{ isset($category->images[0]) ? \Illuminate\Support\Facades\Storage::url($category->images[0]->path) : asset('default-image.jpg') }}"
                                     alt="category"
                                     class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                            </div>

                            <div class="category-sub-contact">
                                <h5 class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]">
                                    <a href="#"
                                       class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">
                                        {{$category->name}}
                                    </a>
                                </h5>
                                <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">
                                    {{$category->productCount()}} items
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shop section -->
<section class="section-shop pb-[50px] max-[1199px]:pb-[35px]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="min-[992px]:w-[75%] w-full px-[12px] mb-[24px]">
                <div class="bb-shop-pro-inner">
                    <div class="flex flex-wrap mx-[-12px] mb-[-24px]">
                        {{--                        @dd($product)--}}

                            <div class="min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px] pro-bb-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                            <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                        </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="{{\Illuminate\Support\Facades\Storage::url($product->images->first()->path)}}"
                                                     alt="product-1">
                                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="{{\Illuminate\Support\Facades\Storage::url($product->images->first()->path)}}"
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
                                            <a href="shop-left-sidebar-col-3.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">
                                                {{ $product->category->name }}
                                            </a>
                                            <span class="bb-pro-rating">
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                            </span>
                                        </div>
                                        <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                            <a href="/products" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">
                                                {{$product->name}}
                                            </a>
                                        </h4>
                                        <p class="hidden font-Poppins text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">
                                            {{$product->description}}
                                        </p>
                                        <div class="bb-price flex flex-wrap justify-between">
                                            <div class="inner-price mx-[-3px]">
                                                <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">${{$product->price}}</span>
                                                <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">${{$product->sale_price }}</span>
                                            </div>
                                            <span class="last-items text-[14px] text-[#686e7d]">{{ $product->volume->name }}</span>
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


<!-- Footer -->
<x-footer></x-footer>
<!-- Cart sidebar -->
<x-cart-sidebar></x-cart-sidebar>
<!-- Category Popup -->
{{--<x-category-popup :categories="$categories" :products="$products"></x-category-popup>--}}
<!-- Quick view Modal -->
<x-quick-view-modal></x-quick-view-modal>
<!-- Newsletter Modal -->
<x-newsletter-modal></x-newsletter-modal>
<!-- Tools Sidebar -->
<x-tools-sidebar></x-tools-sidebar>
<!-- Back to top  -->
<x-back-to-top></x-back-to-top>
<!-- Plugins -->
<x-plugins></x-plugins>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $(function () {
        let startPrice = {{ request('startPrice', 0) }};
        let endPrice = {{ request('endPrice', 10000) }};

        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 10000,
            values: [startPrice, endPrice],
            slide: function (event, ui) {
                $("#amount").text("$" + ui.values[0] + " - $" + ui.values[1]);
            },
            change: function (event, ui) {
                window.location.href = "?startPrice=" + ui.values[0] + "&endPrice=" + ui.values[1];
            }
        });

        $("#amount").text("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    });
</script>


</body>

</html>
