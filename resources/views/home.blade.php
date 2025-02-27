<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasteen Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <!-- Navbar -->
    <nav class="bg-gray-200 shadow-xl shadow-gray-700/50 p-4 flex justify-between items-center border-b border-gray-300">
        <div class="text-xl font-bold text-gray-900">Dasteen<span class="text-purple-500 text-lg">.Blog</span></div>
        <div class="space-x-6">
            <a href="#" class="text-gray-700">Home</a>
            <a href="#" class="text-gray-700">Category</a>
            <a href="#" class="text-gray-700">Blogs</a>
            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg">LogOut</button>
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
    <section class=" py-8 bg-gray-200">
        <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-semibold text-gray-900 flex items-center">Browse The Category<span class="ml-1 w-10 h-[2px] bg-gray-500"></span></h2>
        <h2 class="relative text-lg font-semibold"><a href="" class="hover:text-gray-900 hover:underline flex items-center">See all the categories<span class="ml-1"> > </span></a></h2>
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
    <div class="bg-white pb-9">
    <section class="py-8 px-4">
        <h2 class="text-2xl font-semibold">Featured Article</h2>
        <div class="grid grid-cols-4 gap-4 mt-6">
            <div class="bg-white p-3 rounded-lg shadow h-70">
                <img src=" " alt="" class="rounded-lg h-40 w-40 object-cover">
                <h3 class="mt-2 font-semibold">Fundamental of JavaScript</h3>
                <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
            </div>
            <div class="bg-white p-3 rounded-lg shadow h-70">
                <img src=" " alt="" class="rounded-lg h-40 w-40 object-cover">
                <h3 class="mt-2 font-semibold">Grid CSS Make Your Life Easier</h3>
                <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
            </div>
            {{-- <div class="bg-white p-4 rounded-lg shadow h-80">
                <img src="image3.jpg" alt="" class="rounded-lg h-40 w-full object-cover">
                <h3 class="mt-2 font-semibold">Make Animated Light Mode And Dark Mode Toggle With CSS</h3>
                <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow h-80">
                <img src="image4.jpg" alt="" class="rounded-lg h-40 w-full object-cover">
                <h3 class="mt-2 font-semibold">Make Tic Tac Toe Games With React JS</h3>
                <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
            </div> --}}
        </div>
    </section>


    <section class="py-8 px-3">
    <h2 class="text-2xl font-semibold">Javascript</h2>
    <div class="grid grid-cols-4 gap-4 mt-6">
        <div class="bg-white p-3 rounded-lg shadow h-80">
            <img src=" " alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">Array in Javascript - Learn JS #3</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src=" " alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">7 Projects With Javascript You Must Try</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src=" " alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">Make Simple Calculator With Javascript</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
    </div>
</section>

    <section class="py-8 px-4">
    <h2 class="text-2xl font-semibold">Food</h2>
    <div class="grid grid-cols-4 gap-4 mt-6">
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src=" " alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">Chicken Kabab - Easy Recipe #3</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src=" " alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">7 Projects With Javascript You Must Try</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src=" " alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">Make Simple Calculator With Javascript</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
    </div>
</section>



<section class="py-8 px-4">
    <h2 class="text-2xl font-semibold">React JS</h2>
    <div class="grid grid-cols-4 gap-4 mt-6">
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src=" " alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">First Month Of Learning React JS</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src=" " alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">Build Markdown Editor With React JS</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src=" " alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">Getting Started With React JS</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
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
    <div class="container mx-auto grid grid-cols-4 gap-6 px-10">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-8">

            <h3 class="text-xl font-bold">Dasteen<span class="text-purple-600 text-sm">.blog</span></h3>
            <p class="mt-2 text-gray-600 text-lg">Digital assets by Dastin Damrawan</p>
            <div class="flex space-x-4 mt-4">
                <img src="{{ asset('images/Medium Monogram.png') }}" class="h-[30px] w-[30px]">
                <img src="{{ asset('images/Vector.png') }}" class="h-[22px] w-[17.94px]">
                <img src="{{ asset('images/instagram.png') }}" class="h-[24px] w-[24px]">
                <img src="{{ asset('images/linkedin.png') }}" class="h-[24px] w-[24px]">
            </div>
        </div>
        <div class="">
            <h3 class="text-lg font-semibold">Category</h3>
            <ul class="mt-2 text-gray-600">
                <li>CSS</li>
                <li>JavaScript</li>
                <li>Tailwind</li>
                <li>React JS</li>
            </ul>
        </div>

        
        <div class="">
            <h3 class="text-lg font-semibold">About Me</h3>
            <ul class="mt-2 text-gray-600">
                <li>About Me</li>
                <li>Projects</li>
                <li>Achievement</li>
            </ul>
        </div>


        <div>
            <h3 class="text-lg font-semibold">Get In Touch</h3>
            <p class="mt-2 text-gray-600">+62-800X-XXX-XX</p>
            <p class="text-gray-600">sakina@gmail.com</p>
        </div>
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
