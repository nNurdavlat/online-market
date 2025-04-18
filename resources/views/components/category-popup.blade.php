@props(['categories','products'])
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
                    </div>
                </div>
                <div class="w-full">
                    <div class="flex flex-wrap w-full">
                        <div class="w-full px-[12px]">
                            <div class="sub-title mb-[20px] flex justify-between">
                                <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize">Explore Categories</h4>
                            </div>
                        </div>
                        @foreach($categories as $category)
                            <div class="min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                <div class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe]">
                                    <div class="category-image mb-[12px]">
                                        <img src="{{ isset($category->images[0]) ? \Illuminate\Support\Facades\Storage::url($category->images[0]->path) : asset('default-image.jpg') }}" alt="category" class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                    </div>
                                    <div class="category-sub-contact">
                                        <h5 class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]"><a href="shop-left-sidebar-col-3.html" class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">{{$category->name}}</a></h5>
                                        <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">{{$category->productCount()}} product</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="w-full">
                    <div class="flex flex-wrap w-full">
                        <div class="w-full px-[12px]">
                            <div class="sub-title mb-[20px] flex justify-between">
                                <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize">Related products</h4>
                            </div>
                        </div>
                        @foreach($products as $product)
                            <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                <div class="bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col">
                                    <a href="javascript:void(0)" class="pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]">
                                        <img src="{{ isset($product->images[0]) ? \Illuminate\Support\Facades\Storage::url($product->images[0]->path) : asset('default-image.jpg') }}" alt="new-product-6" class="w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full">
                                    </a>
                                    <div class="side-contact flex flex-col">
                                        <h4 class="bb-pro-title text-[15px]">
                                            <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]">{{$product->name}}</a>
                                        </h4>
                                        <span class="bb-pro-rating">
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[26px] text-[#777]"></i>
                                        </span>
                                        <div class="inner-price mx-[-3px]">
                                            <span class="new-price px-[3px] text-[15px] text-[#686e7d] font-semibold">${{$product->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
