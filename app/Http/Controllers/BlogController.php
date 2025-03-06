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
        $blog->slug = Str::slug($request->title); 
        $blog->excerpt = Str::limit(strip_tags($request->excerpt), 100); 
        $blog->duration = $request->duration; 
        $blog->is_feature = $request->has('toggle');        
        $blog->save();


         // Attach the selected categories (category_id[] from your form)
        $blog->categorys()->attach($request->category_id);

        return redirect('/blogs/list');
    }

    public function list(Request $request)
    {
        $user=Blog::all();
        return view('blogs.list',['blogs'=>$user]);
    }

    public function home(Request $request)
    {
        $category = Category::where('category_name', 'FOOD')->first();
        $blogs = $category ? $category->blogs : collect();

        return view('home', compact('blogs', 'category'));
    }
}
