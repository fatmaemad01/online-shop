<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->query('search');
        $categories = Category::all();
        $products = Product::search($search)
            ->orderBy('name')
            ->get();
        return view('products.index', compact('products', 'categories'));
    }

    public function filterByCategory(Category $category)
    {
        $categories = Category::all();
        $products = Product::where('category_id', $category->id)->get();

        return view('products.index', compact('products', 'categories'));
    }
}
