<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function home()
    {

        return view('home');
    }

    public function create()
    {
        return view('blogs.create');
    }

   public function store(Request $request)
{
    
    $path = $request->file('image')->store('public', 'public');
    $blog = new Blog();
    $blog->title = $request->title;
    $blog->content = $request->content;
    $blog->image = $path;  
    $blog->user_id = Auth::id();
    $blog->category_id = $request->category_id;
    $blog->slug = Str::slug($request->title); 
    $blog->excerpt = Str::limit(strip_tags($request->content), 100); 
    $blog->duration = '5 min read'; 
    $blog->is_feature = false; 
    $blog->save();

        // $blogs = Blog::findOrFail($request->blog_id);
        // $blogs->is_feature = $request->is_feature;
        // $blogs->save();

        return redirect('home');

        
    }

    // public function show(Request $request)
    // {
    //         $user=Blog::all();
    //         return view('show',['blog'=>$user]);
    // }

    // public function home()
    // {
    //     $blogs = Blog::latest()->take(5)->get(); 
    //     return view('welcome',['data' => $blogs]);
    // }
}
