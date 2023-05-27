<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    // action for Read ...
    public function index(Request $request)
    {
        $search = $request->query('search');
        $categories = Category::search($search)
            ->orderBy('name')
            ->get();
        return view('categories.index', compact('categories'));
    }

    public function homeIndex(Request $request)
    {
        $categories = Category::orderBy('name')
            ->get();
        return view('welcome', compact('categories'));
    }


    public function create()
    {
        return view('categories.create');
    }


    public function store()
    {

    }


    public function update()
    {

    }

    public function edit()
    {

    }

    public function destroy()
    {

    }
}
