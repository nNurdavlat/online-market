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
                                    <a href="/filter?categories%5B%5D={{ $category->name }}"
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
            <div class="min-[992px]:w-[25%] w-full px-[12px] mb-[24px]">
                <div class="bb-shop-wrap bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px] sticky top-[0]">
                    <div class="bb-sidebar-block p-[20px] border-b-[1px] border-solid border-[#eee]">
                        <div class="bb-sidebar-title mb-[20px]">
                            <h3 class="font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]">Category</h3>
                        </div>
                        <form action="{{ route('filter') }}" method="GET" id="filterForm">
                            <div class="bb-sidebar-contact">
                                <ul>
                                    @foreach($categories as $category)
                                        @php
                                            $selected = in_array($category->name, request()->get('categories', []));
                                        @endphp
                                        <li class="relative block mb-[14px]">
                                            <div class="bb-sidebar-block-item relative">
                                                <input type="checkbox"
                                                       name="categories[]"
                                                       value="{{ $category->name }}"
                                                       class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[999] top-[50%] left-[0] translate-y-[-50%]"
                                                       onchange="updateCategoryFilters()"
                                                    {{ $selected ? 'checked' : '' }}>
                                                <a href="javascript:void(0)" class="ml-[30px] block text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer">
                                                    {{ $category->name }}
                                                </a>
                                                <span class="checked absolute top-[0] left-[0] h-[18px] w-[18px]
                                                    {{ $selected ? 'bg-[#000] border-[#000]' : 'bg-[#fff] border-[#eee]' }}
                                                        border-[1px] border-solid rounded-[5px] overflow-hidden">
                                                </span>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </form>

                    </div>

                    <div class="bb-sidebar-block p-[20px] border-b-[1px] border-solid border-[#eee]">
                        <div class="bb-sidebar-title mb-[20px]">
                            <h3 class="font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]">Weight</h3>
                        </div>
                        <div class="bb-sidebar-contact">
                            <ul>
                                @foreach($weights as $weight)
                                    @php
                                        $checked = request()->has('weights') && in_array($weight->name, request()->weights) ? 'checked' : '';
                                    @endphp
                                    <li class="relative block mb-[14px]">
                                        <div class="bb-sidebar-block-item relative">
                                            <input type="checkbox" name="weights[]" value="{{ $weight->name }}" {{ $checked }}
                                            class="weight-filter w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[999] top-[50%] left-[0] translate-y-[-50%]">
                                            <a href="javascript:void(0)" class="ml-[30px] block text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer">
                                                {{ $weight->name }}
                                            </a>
                                            <span class="checked absolute top-[0] left-[0] h-[18px] w-[18px] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden"></span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @if($products->isNotEmpty() && $products->count() !== 1)
                        <div class="bb-sidebar-block p-[20px] border-b border-solid border-[#eee]">
                            <div class="bb-sidebar-title mb-[20px]">
                                <h3 class="font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]">Price</h3>
                            </div>
                            <div class="bb-price-range">
                                <div class="price-range-slider relative w-full">
                                    <p class="range-value text-center text-[16px] font-semibold text-[#3d4750] mb-[10px]" id="amount"></p>
                                    <div id="slider-range" class="range-bar h-[8px] bg-gray-300 rounded-md"></div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="bb-sidebar-block p-[20px]">
                        <div class="bb-sidebar-title mb-[20px]">
                            <h3 class="font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]">Tags</h3>
                        </div>
                        <div class="bb-tags">
                            <ul class="flex flex-wrap m-[-5px]">
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                    <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Clothes</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                    <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Fruits</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                    <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Snacks</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                    <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Dairy</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                    <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Seafood</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                    <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Toys</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                    <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">perfume</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                    <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">jewelry</a>
                                </li>
                                <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                    <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Bags</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[75%] w-full px-[12px] mb-[24px]">
                <div class="bb-shop-pro-inner">
                    <div class="flex flex-wrap mx-[-12px] mb-[-24px]">
                        <div class="w-full px-[12px]">
                            <div class="bb-pro-list-top mb-[24px] rounded-[20px] flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between">
                                <div class="flex flex-wrap w-full">
                                    <div class="w-[50%] px-[12px] max-[420px]:w-full">
                                        <div class="bb-bl-btn py-[10px] flex max-[420px]:justify-center">
                                            <button type="button" class="grid-btn btn-grid-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent mr-[5px] active" title="grid">
                                                <i class="ri-apps-line text-[20px]"></i>
                                            </button>
                                            <button type="button" class="grid-btn btn-list-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent" title="grid">
                                                <i class="ri-list-unordered text-[20px]"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="relative inline-block text-left">
                                        <button id="sortButton" class="bg-gray-100 text-gray-700 font-medium px-4 py-2 rounded-lg shadow-md flex items-center">
                                            <span id="selectedSort">Sort by</span>
                                            <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>

                                        <div id="sortDropdown" class="hidden absolute mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                                            <a href="?sort=position" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Position</a>
                                            <a href="?sort=name_asc" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Name A-Z</a>
                                            <a href="?sort=name_desc" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Name Z-A</a>
                                            <a href="?sort=price_asc" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Price: Low to High</a>
                                            <a href="?sort=price_desc" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Price: High to Low</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach($products as $product)
                            <div class="min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px] pro-bb-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                    <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                            <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                        </span>
                                        <a href="javascript:void(0)">
                                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                            <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
     src="{{ \Illuminate\Support\Facades\Storage::url($product->images->first()?->path ?? 'default-image.jpg') }}"
     alt="product-1">

<img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
     src="{{ \Illuminate\Support\Facades\Storage::url($product->images->first()?->path ?? 'default-image.jpg') }}"
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
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">
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
                        @endforeach


                        <div class="w-full px-[12px]">
                            <div
                                class="bb-pro-pagination mb-[24px] flex justify-between max-[575px]:flex-col max-[575px]:items-center">
                                <p class="font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] max-[575px]:mb-[10px]">
                                    Showing {{ $products->firstItem() }}-{{ $products->lastItem() }} of {{ $products->total() }} item(s)</p>
                                <ul class="flex">
                                    {{-- Previous Page Link --}}
                                    @if ($products->onFirstPage())
                                        <li class="leading-[28px] mr-[6px] opacity-50 pointer-events-none">
                                            <span
                                                class="transition-all duration-[0.3s] ease-in-out w-[auto] h-[32px] px-[13px] font-light text-[#fff] leading-[30px] bg-gray-400 font-Poppins tracking-[0.03rem] text-[15px] flex text-center align-top justify-center items-center rounded-[10px] border-[1px] border-solid border-[#eee]">
                                                    Prev
                                            </span>
                                        </li>
                                    @else
                                        <li class="leading-[28px] mr-[6px]">
                                            <a href="{{ $products->previousPageUrl() }}"
                                               class="transition-all duration-[0.3s] ease-in-out w-[auto] h-[32px] px-[13px] font-light text-[#fff] leading-[30px] bg-[#3d4750] font-Poppins tracking-[0.03rem] text-[15px] flex text-center align-top justify-center items-center rounded-[10px] border-[1px] border-solid border-[#eee]">
                                                Prev
                                            </a>
                                        </li>
                                    @endif

                                    {{-- Pagination Links --}}
                                    @foreach ($products->links()->elements[0] as $page => $url)
                                        <li class="leading-[28px] mr-[6px] {{ $products->currentPage() == $page ? 'active' : '' }}">
                                            <a href="{{ $url }}"
                                               class="transition-all duration-[0.3s] ease-in-out w-[32px] h-[32px] font-light {{ $products->currentPage() == $page ? 'text-white bg-[#3d4750]' : 'text-[#777] bg-[#f8f8fb]' }} leading-[32px] font-Poppins tracking-[0.03rem] text-[15px] flex text-center align-top justify-center items-center rounded-[10px] border-[1px] border-solid border-[#eee] hover:bg-[#3d4750] hover:text-[#fff]">
                                                {{ $page }}
                                            </a>
                                        </li>
                                    @endforeach

                                    {{-- Next Page Link --}}
                                    @if ($products->hasMorePages())
                                        <li class="leading-[28px]">
                                            <a href="{{ $products->nextPageUrl() }}"
                                               class="next transition-all duration-[0.3s] ease-in-out w-[auto] h-[32px] px-[13px] font-light text-[#fff] leading-[30px] bg-[#3d4750] font-Poppins tracking-[0.03rem] text-[15px] flex text-center align-top justify-center items-center rounded-[10px] border-[1px] border-solid border-[#eee]">
                                                Next <i
                                                    class="ri-arrow-right-s-line transition-all duration-[0.3s] ease-in-out ml-[10px] text-[16px] w-[8px] text-[#fff]"></i>
                                            </a>
                                        </li>
                                    @else
                                        <li class="leading-[28px] opacity-50 pointer-events-none">
                                            <span
                                                class="transition-all duration-[0.3s] ease-in-out w-[auto] h-[32px] px-[13px] font-light text-[#fff] leading-[30px] bg-gray-400 font-Poppins tracking-[0.03rem] text-[15px] flex text-center align-top justify-center items-center rounded-[10px] border-[1px] border-solid border-[#eee]">
                                                Next
                                            </span>
                                        </li>
                                    @endif
                                </ul>

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
<x-category-popup :categories="$categories" :products="$products"></x-category-popup>
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
        let urlParams = new URLSearchParams(window.location.search);

        let startPrice = urlParams.get('startPrice') || {{ $minSalePrice ?? 0 }};
        let endPrice = urlParams.get('endPrice') || {{ $maxSalePrice ?? 10000 }};

        $("#slider-range").slider({
            range: true,
            min: {{ $minSalePrice ?? 0 }},
            max: {{ $maxSalePrice ?? 10000 }},
            values: [startPrice, endPrice],
            slide: function (event, ui) {
                $("#amount").text("$" + ui.values[0] + " - $" + ui.values[1]);
            },
            change: function (event, ui) {
                let newParams = new URLSearchParams(window.location.search);
                newParams.set('startPrice', ui.values[0]);
                newParams.set('endPrice', ui.values[1]);

                window.location.search = newParams.toString();
            }
        });

        $("#amount").text("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    });

    document.addEventListener("DOMContentLoaded", function () {
        const sortButton = document.getElementById("sortButton");
        const sortDropdown = document.getElementById("sortDropdown");
        const sortLinks = document.querySelectorAll("#sortDropdown a");
        const selectedSortText = document.getElementById("selectedSort");

        // Function to get URL parameters
        function getParam(name) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);
        }

        // Toggle dropdown on button click
        sortButton.addEventListener("click", function () {
            sortDropdown.classList.toggle("hidden"); // Show/hide dropdown
        });

        // Close dropdown when clicking outside
        document.addEventListener("click", function (event) {
            if (!sortButton.contains(event.target) && !sortDropdown.contains(event.target)) {
                sortDropdown.classList.add("hidden");
            }
        });

        // Get the current selected sort value from the URL
        const selectedValue = getParam("sort");

        // Update the button text based on the selected value
        if (selectedValue) {
            const activeLink = Array.from(sortLinks).find(link =>
                link.getAttribute("href").includes(`sort=${selectedValue}`)
            );
            if (activeLink) {
                selectedSortText.textContent = activeLink.textContent; // Update button text
            }
        }

        // Add event listeners to update the URL when clicking a link
        sortLinks.forEach(link => {
            link.addEventListener("click", function (event) {
                event.preventDefault(); // Prevent default link navigation

                const selectedOption = new URL(this.href, window.location.origin).searchParams.get("sort");
                if (selectedOption) {
                    const url = new URL(window.location);
                    const params = new URLSearchParams(window.location.search);

                    // Set the new sort value while keeping other params
                    params.set("sort", selectedOption);
                    url.search = params.toString();

                    window.location.href = url.toString(); // Reload page with updated parameters
                }
            });
        });
    });

    function updateCategoryFilters() {
        const url = new URL(window.location);
        const params = new URLSearchParams(url.search);

        // Get all checked category inputs
        const selectedCategories = new Set(); // Use Set to avoid duplicates
        document.querySelectorAll('input[name="categories[]"]:checked').forEach(input => {
            selectedCategories.add(input.value);
        });

        // Remove existing categories from URL before updating
        params.delete('categories[]');

        // Add only unique selected categories back to the URL
        selectedCategories.forEach(category => {
            params.append('categories[]', category);
        });

        // Preserve the sort parameter if it exists
        const sort = params.get('sort');
        if (sort) {
            params.set('sort', sort);
        }

        // Update the URL and reload the page
        url.search = params.toString();
        window.location.href = url.toString();
    }

    document.addEventListener("DOMContentLoaded", function () {
        let params = new URLSearchParams(window.location.search);
        // Og‘irlik checkboxlarini tiklash
        document.querySelectorAll(".weight-filter").forEach(input => {
            if (params.getAll('weights[]').includes(input.value)) {
                input.checked = true;
            }
            input.addEventListener("change", function () {
                let params = new URLSearchParams(window.location.search);

                // Agar checkbox tanlangan bo‘lsa, paramsga qo‘shamiz
                if (this.checked) {
                    params.append('weights[]', this.value);
                } else {
                    let values = params.getAll('weights[]');
                    params.delete('weights[]');
                    values.forEach(val => {
                        if (val !== this.value) params.append('weights[]', val);
                    });
                }

                // Sahifani yangilash
                window.location.search = params.toString();
            });
        });
    });
</script>

</body>
</html>
