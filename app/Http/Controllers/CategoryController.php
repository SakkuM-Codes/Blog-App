<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function create()
    {

        return view('category.create');
    }

    public function store(Request $request)
    {
        $categorys = Category::all();

        $path = $request->file('category_image')->store('public', 'public');
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_image = $path;
        $category->save();
        return redirect('home');
    }
}
