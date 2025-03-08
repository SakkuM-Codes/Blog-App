<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function create()
    {
        $categorys = Category::all(); // Fetch all categories

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
        $blog->is_feature = $request->has('toggle');        
        $blog->save();

      if ($request->has('category_id')) 
      {

        $blog->categorys()->attach($request->category_id);
        return redirect('/home');
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
        // If a category_id is passed via query string, use that; otherwise, use a default category ('FOOD')
        if ($request->has('category_id') && !empty($request->category_id)) {
            $category = Category::find($request->category_id);
        } else {
            $category = Category::where('category_name')->first();
        }

        // If the category exists, get its blogs; otherwise, return an empty collection.
        $blogs = $category ? $category->blogs()->get() : collect();

        // Pass both variables to the view
        return view('home', compact('blogs', 'category'));
    }

     public function detail($slug)
    {

        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blogs.detail', compact('blog'));

    }
}
