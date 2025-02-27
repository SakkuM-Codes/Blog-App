<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function create()
    {

        return view('category.create');
    }

    public function store(Request $request)
    {

        // $request->validate()
        // ([
        //     'category_name' => 'required|string|max:255',
        //     'category_image' => 'required|string|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $path = $request->file('category_image')->store('public', 'public');
        $imagarray=explode('/',$path);
        $image=$imagarray[1];
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->slug = Str::slug($request->category_name);
        $category->category_image = $image;
        $category->save();
        return redirect('home');
    }

    public function home(Request $request)
    {
        $user=Category::all();
        //$blog_category = Blog::all();
        return view('home',['category'=>$user]);
    }

    public function list(Request $request)
    {
        $user=Category::all();
        return view('category.list',['category'=>$user]);
    }
}
