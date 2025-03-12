<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$category->category_name}}</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">

   <!-- Navbar -->
    <nav class="bg-gray-200 shadow-xl shadow-gray-700/50 p-4 flex justify-between items-center border-b border-gray-300">
        <div class="text-xl font-bold text-gray-900">Dasteen<span class="text-purple-500 text-sm">.blog</span></div>
        <div class="space-x-6">
            @guest
            <a href="#" class="text-gray-700">Home</a>
            <a href="#" class="text-gray-700">Category</a>
            <a href="#" class="text-gray-700">Blogs</a>
            <a href="login"><button class="bg-purple-600 text-white px-4 py-2 rounded-lg">login</button></a>
            @else
            <div class="flex justify-between items-center gap-4">
                 <a href='/home' class="text-gray-700">Home</a>

                  <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="text-gray-700 focus:outline-none">
                    Category
                </button>
                <div x-show="open" @click.away="open = false"
                    class="absolute left-0 mt-2 w-40 bg-white border border-gray-300 rounded-lg shadow-lg">
                    <a href='/category/list' class="block px-4 py-2 text-gray-700 bg-gray-200 hover:bg-gray-100">Category List</a>
                    <a href='/category/create' class="block px-4 py-2 text-gray-700 bg-gray-200 hover:bg-gray-100">Category Create</a>
                </div>
            </div>
                <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="text-gray-700 focus:outline-none">
                    Blogs 
                </button>
            <div x-show="open" @click.away="open = false"
                class="absolute left-0 mt-2 w-40 bg-white border border-gray-300 rounded-lg shadow-lg">
                <a href='/blogs/list' class="block px-4 py-2 text-gray-700 bg-gray-200 hover:bg-gray-100">Blogs List</a>
                <a href='/blogs/create' class="block px-4 py-2 text-gray-700 bg-gray-200 hover:bg-gray-100">Blogs Create</a>
            </div>
        </div>
            <a href="logout"><button class="bg-purple-600 text-white px-4 py-2 rounded-lg">LogOut</button></a>
            @endguest
        </div>
        </div>
    </nav>


    <div class="font-bold text-2xl">
         {{-- @foreach($category as $category) --}}
        <h1>{{$category->category_name}}:-</h1>
        {{-- @endforeach --}}

        <div>
            <section class="max-w-6xl mx-auto pt-10 ">
        <div class="flex justify-between items-center mb-4">
           {{--  <h2 class="text-xl font-semibold flex items-center text-gray-900">CSS<span class="ml-1 w-10 h-[2px] bg-gray-500"></span></h2>
            <a href="#" class="text-gray-900 text-lg font-semibold relative hover:text-gray-900">See All Article <span class="ml-1"> > </span></a>
        </div> --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
             @foreach($category->blogs as $blog)
             {{-- <a href="{{ route('blogs.show',[$blog->id, $blog->slug]) }}" class="hidden"> --}}
            <div class="bg-white rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover" src="{{url('storage/'.$blog->image)}}" alt="Code Image">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">{{$blog ->excerpt}}</h3>
                    <div class="flex items-center mt-3">
                        <img class="w-8 h-8 rounded-full" src="{{ asset('Images/dasteen.jpeg') }}" alt="Author">
                        <div class="ml-2 text-gray-600 text-sm">
                            <p>Dasteen</p>
                            <p>{{$blog->created_at->format('M d, Y')}} &bull; {{$blog->duration.' Read'}}</p>
                            <a href="{{ route('blogs.detail', $blog->slug) }}">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

        </div>
    </div>