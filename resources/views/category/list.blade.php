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


     <!-- Categories -->
    <section class=" py-8 bg-gray-200">
        <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-semibold text-gray-900 flex items-center"> List Of Categories<span class="ml-1"> -> </span></h2>
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

