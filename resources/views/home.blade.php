<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
            {{-- <button class="bg-purple-600 text-white px-4 py-2 rounded-lg">LogOut</button> --}}
            @else
            <div class="flex justify-between items-center gap-4">
                 <a href="#" class="text-gray-700">Home</a>

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
    
    <!-- Hero Section -->
<section class="flex items-center shadow-md shadow-gray-400 justify-between px-8 py-16 bg-gray-200">
    <!-- Left Content -->
    <div class="max-w-lg">
        <h1 class="text-5xl font-bold text-gray-900 leading-tight">
            Hi, I’m Dasteen<br> 
            <span class="text-gray-900">Front End Dev</span>
        </h1>
         <div class="flex items-center space-x-4 mt-4">
            <div class="h-10 w-1 bg-black"></div>
            <p class="text-gray-700 text-sm">
                On this blog, I share tips and tricks, frameworks, projects, tutorials, etc.<br> 
                Make sure you subscribe to get the latest updates.
            </p>
        </div>
        
        <!-- Email Subscription -->
        <div class="mt-6 flex">
            <input type="email" placeholder="Enter your email here..." 
                class="border p-3 w-64 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
            <button class="bg-purple-600 text-white px-5 py-3 rounded-r-lg font-medium hover:bg-purple-700">
                Subscribe
            </button>
        </div>
    </div>

    <!-- Right Side Image -->
    <div class="w-[400px]">
        <img src="{{ asset('images/learn-coding.png') }}" alt="learn-coding" class="w-full">
    </div>
</section>

    
    <!-- Categories -->
    <section class="py-8 bg-gray-200">
        <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-semibold text-gray-900 flex items-center">Browse The Category<span class="ml-1 w-10 h-[2px] bg-gray-500"></span></h2>
        <h2 class="relative text-lg font-semibold"><a href="{{url('/category/list')}}" class="hover:text-gray-900 hover:underline flex items-center">See all the categories<span class="ml-1"> > </span></a></h2>
        </div>
        <div class="flex flex-wrap gap-6 justify-center space-x-4 mt-5">
            @foreach($category as $category)
            <div class="flex flex-col shadow-md p-6 bg-white rounded-xl shadow w-[150px] h-[220px]">
            <img src="{{url('storage/public/'.$category->category_image)}}" class="h-12 w-9 mt-8 mb-4">
              <p class="text-black mt-4 font-semibold text-lg">{{$category->category_name}}</p>  
            </div>
        @endforeach
        </div>
    </section>
    
    <!-- Featured Articles -->
    <div class="bg-white pb-9 pt-14">
    <section class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold items-center flex text-gray-900">Featured Article<span class="ml-1 w-10 h-[2px] bg-gray-500"></span></h2>
            <a href="#" class="text-gray-900 text-lg font-semibold relative hover:text-gray-900">See All Article <span class="ml-1"> > </span></a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover" src="{{ asset('Images/tech1.jpeg') }}" alt="Code Image">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Array In Javascript - Learn JS #3</h3>
                    <div class="flex items-center mt-3">
                        <img class="w-8 h-8 rounded-full" src="{{ asset('Images/dasteen.jpeg') }}" alt="Author">
                        <div class="ml-2 text-gray-600 text-sm">
                            <p>Dasteen</p>
                            <p>Jan 10, 2022 &bull; 3 Min Read</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover" src="{{ asset('Images/tech2.jpeg') }}" alt="Book Image">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Fundamental Of Javascript</h3>
                    <div class="flex items-center mt-9">
                        <img class="w-8 h-8 rounded-full" src="{{ asset('Images/dasteen.jpeg') }}" alt="Author">
                        <div class="ml-2 text-gray-600 text-sm">
                            <p>Dasteen</p>
                            <p>Jan 10, 2022 &bull; 3 Min Read</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="max-w-6xl mx-auto pt-10">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold flex items-center text-gray-900">Javascript<span class="ml-1 w-10 h-[2px] bg-gray-500"></span></h2>
            <a href="#" class="text-gray-900 text-lg font-semibold relative hover:text-gray-900">See All Article <span class="ml-1"> > </span></a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover" src="{{ asset('Images/tech1.jpeg') }}" alt="Code Image">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Array In Javascript - Learn JS #3</h3>
                    <div class="flex items-center mt-3">
                        <img class="w-8 h-8 rounded-full" src="{{ asset('Images/dasteen.jpeg') }}" alt="Author">
                        <div class="ml-2 text-gray-600 text-sm">
                            <p>Dasteen</p>
                            <p>Jan 10, 2022 &bull; 3 Min Read</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover" src="{{ asset('Images/tech2.jpeg') }}" alt="Book Image">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Fundamental Of Javascript</h3>
                    <div class="flex items-center mt-9">
                        <img class="w-8 h-8 rounded-full" src="{{ asset('Images/dasteen.jpeg') }}" alt="Author">
                        <div class="ml-2 text-gray-600 text-sm">
                            <p>Dasteen</p>
                            <p>Jan 10, 2022 &bull; 3 Min Read</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="max-w-6xl mx-auto pt-10">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold flex items-center text-gray-900">CSS<span class="ml-1 w-10 h-[2px] bg-gray-500"></span></h2>
            <a href="#" class="text-gray-900 text-lg font-semibold relative hover:text-gray-900">See All Article <span class="ml-1"> > </span></a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover" src="{{ asset('Images/tech1.jpeg') }}" alt="Code Image">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Flex Box CSS : Everything you need to know</h3>
                    <div class="flex items-center mt-3">
                        <img class="w-8 h-8 rounded-full" src="{{ asset('Images/dasteen.jpeg') }}" alt="Author">
                        <div class="ml-2 text-gray-600 text-sm">
                            <p>Dasteen</p>
                            <p>Jan 10, 2022 &bull; 3 Min Read</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover" src="{{ asset('Images/tech2.jpeg') }}" alt="Book Image">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Grid CSS Make Your Life Esier</h3>
                    <div class="flex items-center mt-9">
                        <img class="w-8 h-8 rounded-full" src="{{ asset('Images/dasteen.jpeg') }}" alt="Author">
                        <div class="ml-2 text-gray-600 text-sm">
                            <p>Dasteen</p>
                            <p>Jan 10, 2022 &bull; 3 Min Read</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="max-w-6xl mx-auto pt-10">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold flex items-center text-gray-900">{{ $category->category_name ?? 'Category' }}<span class="ml-1 w-10 h-[2px] bg-gray-500"></span></h2>
            <a href="#" class="text-gray-900 text-lg font-semibold relative hover:text-gray-900">See All Article <span class="ml-1"> > </span></a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            @if(isset($blogs) && $blogs->isNotEmpty())
            @foreach($blogs as $blog)
            <div class="bg-white rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover" src="{{url('storage/'.$blog->image)}}" alt="Code Image">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">{{$blog ->excerpt}}</h3>
                    <div class="flex items-center mt-3">
                        <img class="w-8 h-8 rounded-full" src="{{ asset('Images/dasteen.jpeg') }}" alt="Author">
                        <div class="ml-2 text-gray-600 text-sm">
                            <p>{{$blog->user_id->username ?? 'Dasteen'}}</p>
                            <p>{{$blog->created_at->format('M d, Y')}} &bull; {{$blog->duration.' Read'}}</p>
                        </div>
                    </div>
                </div>
            </div>
             @endforeach
        @else
            <p>No blogs found for this category.</p>
        @endif
        </div>
    </section>



<div class="text-center mt-8">
    <button class="bg-purple-600 text-white px-6 py-3 rounded-lg">More Articles</button>
</div>
</div>

<!-- Subscription Section -->
<section class="bg-gray-200 py-10 text-center mt-10 items-center flex flex-col justify-between">
    <img src="{{asset('images/Icon.png')}}" class="h-[130px] w-[130px] ">
    <h2 class="text-2xl font-semibold">Subscribe For The Latest Updates</h2>
    <p class="text-gray-400">Subscribe to the newsletter and never miss the new post every week.</p>
    <div class="mt-4 flex justify-center">
        <input type="email" placeholder="Enter your email here..." class="border p-2 rounded-l-lg w-64">
        <button class="bg-purple-600 text-white px-4 py-2 rounded-r-lg">Subscribe</button>
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
