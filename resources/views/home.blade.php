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
    <nav class="bg-gray-200 shadow-md p-4 flex justify-between items-center">
        <div class="text-xl font-bold text-gray-900">Dasteen<span class="text-purple-500">.Blog</span></div>
        <div class="space-x-6">
            <a href="#" class="text-gray-700">Home</a>
            <a href="#" class="text-gray-700">Category</a>
            <a href="#" class="text-gray-700">Blogs</a>
            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg">LogOut</button>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="text-center py-16 px-4">
        <div class="flex flex col items-start">
        <div class="flex items-center justify-center space-x-4 mt-6">
        <h1 class="text-4xl font-bold text-gray-900">Hi, I’m Dasteen<br>Front End Dev</h1>
        <div class="h-2 w-1 bg-black"></div>
        <p class="text-gray-600 mt-4">On this blog I share tips and tricks, frameworks, projects, tutorials, etc.</p>
        <div class="mt-6 flex justify-center">
            <input type="email" placeholder="Enter your email here..." class="border p-2 rounded-l-lg w-64">
            <button class="bg-purple-600 text-white px-4 py-2 rounded-r-lg">Subscribe</button>
        </div>
        </div>
        <div>
        <img src="{{URL:: asset('/images/learn-coding.png')}}" alt="learn-coding" class="flex flex-wrap h-20 items-end">
        </div>
    </section>
    
    <!-- Categories -->
    <section class="text-center py-8 bg-gray-200">
        <div class="">
        <h2 class="text-2xl font-semibold">Browse The Category</h2>
        </div>
        @foreach($category as $category)
        <div class="flex justify-center space-x-4 mt-6">
            <div class="p-4 bg-white rounded-lg shadow w-[220px] h-[280px]">
            <img src="{{url('/public/category_Images/'.$category->path)}}" class="w-[33px] h-[37px] top-3 left-3">
                {{$category->category_name}}
            </div>
            @endforeach
            <div class="p-4 bg-white rounded-lg shadow">JavaScript</div>
            <div class="p-4 bg-purple-600 text-white rounded-lg shadow">Tailwind</div>
            <div class="p-4 bg-white rounded-lg shadow">Vue JS</div>
            <div class="p-4 bg-white rounded-lg shadow">React JS</div>
        </div>
    </section>
    
    <!-- Featured Articles -->
    <div class="bg-white">
    <section class="py-8 px-4">
        <h2 class="text-2xl font-semibold">Featured Article</h2>
        <div class="grid grid-cols-4 gap-4 mt-6">
            <div class="bg-white p-3 rounded-lg shadow h-70">
                <img src="image1.jpg" alt="" class="rounded-lg h-40 w-40 object-cover">
                <h3 class="mt-2 font-semibold">Fundamental of JavaScript</h3>
                <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
            </div>
            <div class="bg-white p-3 rounded-lg shadow h-70">
                <img src="image2.jpg" alt="" class="rounded-lg h-40 w-40 object-cover">
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
            <img src="image5.jpg" alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">Array in Javascript - Learn JS #3</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src="image6.jpg" alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">7 Projects With Javascript You Must Try</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src="image7.jpg" alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">Make Simple Calculator With Javascript</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
    </div>
</section>

    <section class="py-8 px-4">
    <h2 class="text-2xl font-semibold">Food</h2>
    <div class="grid grid-cols-4 gap-4 mt-6">
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src="image5.jpg" alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">Chicken Kabab - Easy Recipe #3</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src="image6.jpg" alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">7 Projects With Javascript You Must Try</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src="image7.jpg" alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">Make Simple Calculator With Javascript</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
    </div>
</section>



<section class="py-8 px-4">
    <h2 class="text-2xl font-semibold">React JS</h2>
    <div class="grid grid-cols-4 gap-4 mt-6">
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src="image8.jpg" alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">First Month Of Learning React JS</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src="image9.jpg" alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">Build Markdown Editor With React JS</h3>
            <p class="text-gray-500 text-sm">Jan 10, 2022 - 3 Min Read</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow h-80">
            <img src="image10.jpg" alt="" class="rounded-lg h-40 w-full object-cover">
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
<section class="bg-gray-200 py-10 text-center mt-10">
    <h2 class="text-2xl font-semibold">Subscribe For The Latest Updates</h2>
    <p class="text-gray-600">Subscribe to the newsletter and never miss the new post every week.</p>
    <div class="mt-4 flex justify-center">
        <input type="email" placeholder="Enter your email here..." class="border p-2 rounded-l-lg w-64">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-r-lg">Subscribe</button>
    </div>
</section>


<!-- Footer -->
<footer class="bg-gray-100 text-gray-800 py-10 mt-10">
    <div class="container mx-auto grid grid-cols-4 gap-6 px-10">
        <div>
            <h3 class="text-xl font-bold">Dasteen<span class="text-blue-500">.blog</span></h3>
            <p class="mt-2 text-gray-600">Digital assets by Dastin Damrawan</p>
        </div>
        <div>
            <h3 class="text-lg font-semibold">Category</h3>
            <ul class="mt-2 text-gray-600">
                <li>CSS</li>
                <li>JavaScript</li>
                <li>Tailwind</li>
                <li>React JS</li>
            </ul>
        </div>
        <div>
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
    <div class="text-center text-gray-500 mt-6">&copy; 2022 Digitaldastin - Made with ❤️ in Jakarta, Indonesia</div>
</footer>
</body>
</html>
