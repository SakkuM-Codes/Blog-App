<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\BelongToMany;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function create()
    {
        // Fetch all categories

        $categorys = Category::all(); 

        return view('blogs.create', compact('categorys'));
    }

   public function store(Request $request)
    {
    
        $path = $request->file('image')->store('public', 'public');
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->image = $path;  
        $blog->user_id = Auth::id();
        $blog->slug = Str::slug($request->title, '-'); 
        $blog->excerpt = Str::limit(strip_tags($request->excerpt), 100); 
        $blog->duration = $request->duration; 
        $blog->is_feature = $request->has('is_feature');      
        $blog->save();

     if ($request->has('category_id')) 
    {
        $blog->categories()->attach($request->category_id); // Use `categories` instead of `categorys`
        
    }
            return redirect('/home');
        
    }

    public function list(Request $request)
    {
        $user=Blog::all();
        return view('blogs.list',['blogs'=>$user]);
    }

    // Home method to fetch and display blogs by category on the homepage
    public function home(Request $request)
    {

        // $categoryName = $request->input('category_name');
        // $category = Category::where($categoryName = ' ');
        // $blogs = Blog::all();
        // $category = Blog::where($categoryName = ' ')->take(4)->get();
        // $featuredBlogs = Blog::where('is_feature', true)->latest()->take(4)->get();
        // return view('home', compact('blogs','category','featuredBlogs'));

        // $categoryName = $request->input('category_name', 'NATURE'); 
        // $category = Category::where('category_name', $categoryName)->first();
        // $blogs = Blog::all();
        // $blogs = $category ? $category->blogs()->take(4)->get() : collect();
        // $featuredBlogs = Blog::where('is_feature', true)->latest()->take(4)->get();

        $categories = Category::where($category_name = ' ');
         $category = Category::all();
        $category = Category::where('category_name', $category_name)->first();
        $blogs = Blog::all();
        $blogs = $category ? $category->blogs()->take(4)->get() : collect();

        return view('home', compact('blogs', 'category', 'featuredBlogs', 'categories'));

    }

     public function detail($slug)
    {

        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('blogs.detail', compact('blog'));
    }

    // public function feature($request Request)
    // {
    //     $is_feature = true;
    //     $featuredBlogs = Blog::where($is_feature)->take(4)->get();
    // }
}
