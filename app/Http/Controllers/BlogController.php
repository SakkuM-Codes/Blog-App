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
        // $categorys = $blog->blogscat();
        // $blog->$blogscat()->attach($request->blog_id);
        $blog->categorys()->attach($request->category_id);
        $blog->categorys()->attach($request->blog_id);
        $blog->slug = Str::slug($request->title); 
        $blog->excerpt = Str::limit(strip_tags($request->excerpt), 100); 
        $blog->duration = $request->duration; 
        $blog->is_feature = false;
        $blog->save();

        return redirect('/blogs/list');
    }

    public function list(Request $request)
    {
        $user=Blog::all();
        return view('blogs.list',['blogs'=>$user]);
    }
}
