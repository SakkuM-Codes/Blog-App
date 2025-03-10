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
        return view('home',['categories'=>$user]);
    }

    public function list(Request $request)
    {
        $user=Category::all();
        return view('category.list',['category'=>$user]);
    }
}
