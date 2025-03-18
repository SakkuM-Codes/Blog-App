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

        $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'required|image',
        'excerpt' => 'required|string|max:255',
        'content' => 'required|string',
        'duration' => 'required|string',
        'is_feature' => 'nullable|tinyInteger;',
        'slug' => 'required|string|unique:blogs,slug',
        'category_id' => 'required|array',
        'category_id.*' => 'exists:categories,id',
    ]);

    
        $path = $request->file('image')->store('public', 'public');
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->image = $path;  
        $blog->user_id = Auth::id();
        $blog->slug = Str::slug($request->title, '-'); 
        $blog->excerpt = Str::limit(strip_tags($request->excerpt), 100); 
        $blog->duration = $request->duration; 
        $blog->is_feature = $request->has('is_feature') ? 1 : 0;     
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
        // Fetch all categories you want to display
        $categories = Category::whereIn('category_name', ['NATURE', 'FOOD', 'TECH', 'FASHION'])->take(4)->get();

        // Fetch featured blogs
        $feature = Blog::where('is_feature', "1")->latest()->take(4)->get();

        // Fetch all blogs (if needed)
        $blogs = Blog::all();

        return view('home', compact('categories', 'feature', 'blogs'));
    }


        public function detail($slug)
        {

            $blog = Blog::where('slug', $slug)->firstOrFail();

            return view('blogs.detail', compact('blog'));
        }

    }


    // public function feature(Request $request)
    // {
    //     // $blog->is_feature = $request->has('is_feature');
    //     $isFeature = $request->input('is_feature');
        
    //     if($isFeature == true){
    //         $blog = Blog::all();
    //          $featuredBlogs = Blog::where('is_feature', true)->latest()->take(4)->get();   
    //          // $featuredBlogs->save(); 
    //     }else{
    //         $isFeature = false;
    //         return response()->json(['fail' => 'Blog will not display without selection categories.']);
    //     }

    //     return view('home', compact('featuredBlogs', 'isFeature'));
    // }



    //     public function home(Request $request)
// {
//     // Fetch all categories you want to display
    //$categories = Category::whereIn('category_name', ['NATURE', 'FOOD', 'TECH', 'FASHION'])->take(4)->get();

    // Fetch featured blogs
    // $featuredBlogs = Blog::where('is_feature', true)
    //                       ->latest()
    //                       ->take(4)
    //                       ->get();

    // Pass the variables to the view
    //return view('home', compact('categories', 'featuredBlogs'));





        // $isFeature = $request->input('is_feature');
        // if($isFeature == true){
        // $blog = Blog::all();
        // $featuredBlogs = Blog::where('is_feature', true)->latest()->take(4)->get();   
        // $featuredBlogs->save(); 
        //  return view('home', compact('isFeature', 'featureBlogs'));
        // }else{
        //     $isFeature = false;
        //     return response()->json(['fail' => 'Blog will not display without selection categories.']);
        // }
        //     return redirect('/home');
        // }



//home function code:-


// if($isFeature == true){
        //     $blogs = Blog::all();
        //     $featuredBlogs = Blog::where('is_feature', true)->latest()->take(4)->get();   
             // $featuredBlogs->save(); 
        // }else{
        //     $isFeature = false;
        //     return response()->json(['fail' => 'Blog will not display without selection categories.']);
        // }

        //$categoryName = $request->input('category_name', 'NATURE'); // Default to 'NATURE' if no category is provided
        //$categories = Category::all();
        // Fetch the category by name
        //$category = Category::where('name', $categoryName)->first();
        //$blogs = Blog::all();
        // Fetch blogs belonging to the category, limit to 4
        //$blogs = $categories ? $categories->blogs()->take(4)->get() : collect();
        // Fetch featured blogs
        //$featuredBlogs = Blog::where('is_feature', true)->latest()->take(4)->get();




    //$categoryName = $request->input('category_name', 'NATURE');
            //$category = Category::where('category_name', $categoryName)->first();
            //$blogs = $category ? $category->blogs()->latest()->get() : collect();
            //$categories = Category::all();
            //$featuredBlogs = Blog::where('is_feature', true)->latest()->take(4)->get();

//Fetch featured blogs
            //$featuredBlogs = Blog::with('is_feature', true)->latest()->take(4)->get();



    // $blog->is_feature = $request->has('is_feature');

            // $isFeature = $request->input('is_feature');

            // if($isFeature == true){

            // $blogs = Blog::all();

            // $featuredBlogs = Blog::where('is_feature', true)->latest()->take(4)->get();   
            //  //$featuredBlogs->save(); 
            // }else{
            //      $isFeature == false;
            //     return response()->json(['fail' => 'Blog will not display without selection categories.']);
            // }

            // Pass the variables to the view