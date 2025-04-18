<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Image;
use App\Models\Product;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Volume;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index', [
            'users' => DB::table('users')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show(Request $request)
    {
        $categories = $request->input('categories');
        $weights = $request->input('weights');
        $startPrice = $request->input('startPrice');
        $endPrice = $request->input('endPrice');

        $selectedCategories = Category::whereIn('name', (array) $categories)->pluck('id')->toArray();

        function getChildCategoryIds($parentIds)
        {
            $childIds = Category::whereIn('parent_id', $parentIds)->pluck('id')->toArray();
            if (!empty($childIds)) {
                return array_merge($childIds, getChildCategoryIds($childIds));
            }
            return [];
        }

        // Merge selected categories with their children
        $allCategoryIds = array_merge($selectedCategories, getChildCategoryIds($selectedCategories));

        $products = Product::query()
            ->when(!empty($allCategoryIds), function ($query) use ($allCategoryIds) {
                return $query->whereIn('category_id', $allCategoryIds);
            })
            ->when($weights, function ($query) use ($weights) {
                $productVolumes = Volume::whereIn('name', $weights)->pluck('id');
                return $query->whereIn('volume_id', $productVolumes);
            })
            ->when(isset($startPrice) && isset($endPrice), function ($query) use ($startPrice, $endPrice) {
                return $query->whereBetween('sale_price', [$startPrice, $endPrice]);
            })
            ->when(request()->has('sort_by'), function ($query) {
                $sortBy = request('sort_by', 'id');
                $sortOrder = request('sort_order', 'asc');
                if ($sortBy && $sortOrder) {
                    $query->orderBy($sortBy, $sortOrder);
                }
            })
            ->with('images')
            ->paginate(10);

        $categories = Category::all();
        $parentCategories = Category::whereNull('parent_id')->orderBy('id', 'desc')->limit(4)->with('categories')->get();
        $productsMenu = Category::whereNull('parent_id')->orderBy('id', 'desc')->with('categories')->get();
        $images = Image::paginate(1);
        $weights = Volume::all();

        $minSalePrice = $products->min('price');
        $maxSalePrice = $products->max('price');

//        $newArrivalProducts = Product::whereHas('category', function ($query) use ($parentCategories) {
//            $query->whereHas('parent', function ($q) use ($parentCategories) {
//                $q->whereNotNull('id')->where('name', $parentCategories->name);
//            });
//        })->orderBy('id', 'desc')->limit(4)->get();


        return view('product-filter', [
            'products' => $products,
            'parentCategories' => $parentCategories,
            'productsMenu' => $productsMenu,
            'categories' => $categories,
            'images'=>$images,
            'weights' => $weights,
//            'newArrivalProducts' => $newArrivalProducts,
            'minSalePrice' => $minSalePrice,
            'maxSalePrice' => $maxSalePrice,
        ]);
    }

    public function singleProduct (Request $request, string $productId) {
        $categories = $request->input('categories');
        $weights = $request->input('weights');
        $startPrice = $request->input('startPrice');
        $endPrice = $request->input('endPrice');

        $selectedCategories = Category::whereIn('name', (array) $categories)->pluck('id')->toArray();

        $categoryIds = Category::whereIn('parent_id', $selectedCategories)
            ->orWhereIn('id', $selectedCategories)
            ->pluck('id')
            ->toArray();

        $parentCategories = Category::whereNull('parent_id')
            ->orderBy('id', 'desc')
            ->limit(4)
            ->with('categories')
            ->get();

        $productsMenu = Category::whereNull('parent_id')
            ->orderBy('id', 'desc')
            ->with('categories')
            ->get();

        $categories = Category::all();

        $images = Image::paginate(1);
        $weights = Volume::all(); // **Shu qatorni qo‘sh!**

        $product = Product::with('images')
            ->where('id', $productId)
            ->first();
        return view('product', [
            'product' => $product,
            'parentCategories' => $parentCategories,
            'productsMenu' => $productsMenu,
            'categories' => $categories,
            'images'=>$images,
            'weights' => $weights
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $products)
    {
        //
    }

    public function likeProduct($productId)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user->likedProducts()->attach($productId);
        } else {
            $likedProducts = Session::get('liked_products', []);
            if (!in_array($productId, $likedProducts)) {
                $likedProducts[] = $productId;
                Session::put('liked_products', $likedProducts);
            }
        }
        return response()->json(['success' => true]); // JavaScript uchun javob
    }
}
