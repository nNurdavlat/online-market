<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopPageController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Kategoriya filtri
        $categories = $query->when($request->has('category'), function ($q) use ($request) {
            $q->whereIn('category_id', $request->input('category'));
        });

        // Vazn filtri
        $weight = $query->when($request->filled('weight'), function ($q) use ($request) {
            $q->where('weight', $request->input('weight'));
        });

        // Rang filtri
        $color = $query->when($request->filled('color'), function ($q) use ($request) {
            $q->where('color', $request->input('color'));
        });

        // Narx filtri
        $minPrice = $query->when($request->filled('min_price'), function ($q) use ($request) {
            $q->where('price', '>=', $request->input('min_price'));
        });

        $maxPrice = $query->when($request->filled('max_price'), function ($q) use ($request) {
            $q->where('price', '<=', $request->input('max_price'));
        });

        // Tartiblash (sorting)
        $query->when($request->has('sort'), function ($q) use ($request) {
            switch ($request->input('sort')) {
                case 'name_asc':
                    $q->orderBy('name', 'asc');
                    break;
                case 'name_desc':
                    $q->orderBy('name', 'desc');
                    break;
                case 'price_asc':
                    $q->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $q->orderBy('price', 'desc');
                    break;
            }
        });

        // Pagination bilan mahsulotlarni olish
        $posts = $query->paginate(9);

        // Kategoriyalarni olish
        $categories = Category::all();

        // Parent kategoriyalarni olish
        $parentCategories = Category::whereNull('category_id')->get();

        // So‘nggi postlarni olish
        $latestPosts = Product::orderBy('created_at', 'desc')->take(5)->get();
        $productsMenu = Category::query()
            ->whereNull('parent_id')
            ->orderBy('id', 'desc')
            ->with('categories')
            ->get();
        $products= Product::query()
            ->orderBy('id', 'desc')
            ->limit(10)
            ->get();

        return view('shop-page', [
            'posts' => $posts,
            'categories' => $categories,
            'parentCategories' => $parentCategories,
            'latestPosts' => $latestPosts,
            'products' => $products,
            'productsMenu' => $productsMenu,
            'weight' => $weight,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
        ]);
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();
        return view('product.show', compact('product', 'relatedProducts'));
    }
}
