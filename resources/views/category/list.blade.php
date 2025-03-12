<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Categories</title>
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


     <!-- Categories -->
    <section class=" py-8 bg-gray-200">
        <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-semibold text-gray-900 flex items-center">List Of Categories<span class="ml-1"> -> </span></h2>
        </div>
        <div class="flex flex-wrap gap-6 justify-center space-x-4 mt-5">
            @foreach($category as $category)
            <div class="flex flex-col shadow-md p-6 bg-white rounded-xl shadow w-[150px] h-[220px]">
            <img src="{{url('storage/public/'.$category->category_image)}}" class="h-12 w-9 mt-8 mb-4">
              <p class="text-black mt-4 font-semibold text-lg">{{$category->category_name}}</p>
              <a href="{{ route('category.category_name', $category->category_name) }}">Detail</a>  
            </div>
        @endforeach
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-100 text-gray-800 py-10 mt-10">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
            <!-- Logo & Description -->
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Dasteen<span class="text-purple-500 text-sm">.blog</span></h2>
                <p class="text-gray-600 mt-2 text-sm">Digitaldastin by Dastin Darmawan</p>
                <div class="flex space-x-4 mt-4">
                    <img src="{{ asset('images/Medium Monogram.png') }}" class="h-[30px] w-[30px]">
                <img src="{{ asset('images/Vector.png') }}" class="h-[22px] w-[17.94px]">
                <img src="{{ asset('images/instagram.png') }}" class="h-[24px] w-[24px]">
                <img src="{{ asset('images/linkedin.png') }}" class="h-[24px] w-[24px]">
                </div>
            </div>

            <!-- Categories -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900">CATEGORY</h3>
                <ul class="mt-3 space-y-2 text-gray-600">
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">Javascript</a></li>
                    <li><a href="#">Tailwind</a></li>
                    <li><a href="#">React JS</a></li>
                    <li><a href="#">More Category</a></li>
                </ul>
            </div>

            <!-- About Me -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900">ABOUT ME</h3>
                <ul class="mt-3 space-y-2 text-gray-600">
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Achievement</a></li>
                </ul>
            </div>

            <!-- Get in Touch -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900">GET IN TOUCH</h3>
                <ul class="mt-3 space-y-2 text-gray-600">
                    <li>+62-8XXX-XXX-XX</li>
                    <li>demo@gmail.com</li>
                </ul>
            </div>

            <!-- Follow Us -->
            <div>
                <h3 class="text-lg font-semibold text-gray-900">FOLLOW US</h3>
                <ul class="mt-3 space-y-2 text-gray-600">
                    <li><a href="#">Medium</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mt-8 border-t border-gray-300 pt-4 flex flex-col md:flex-row justify-between text-gray-600 text-sm">
            <p>© 2022 Digitaldastin</p>
            <p>Made With <span class="text-red-500">❤️</span> Jakarta, Indonesia</p>
        </div>
    </div>
</footer>
</body>
</html>

