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
        $blog->categorys()->attach($request->category_id);
        //$blog->blogs()->attach($request->blog_id);
        $blog->slug = Str::slug($request->title); 
        $blog->excerpt = Str::limit(strip_tags($request->content), 100); 
        $blog->duration = $request->duration; 
        $blog->is_feature = false;
        $blog->save();
         

        // $blogs = Blog::findOrFail($request->blog_id);
        // $blogs->is_feature = $request->is_feature;
        // $blogs->save();

        return redirect('home');
    }

    public function list(Request $request)
    {
        $user=Blog::all();
        return view('blogs.list',['blogs'=>$user]);
    }
}
