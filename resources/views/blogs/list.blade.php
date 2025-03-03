<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Blogs</title>
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


<section class="py-8 px-3">
    <div class="flex justify-between items-center mb-6">
    @foreach($blogs as $blog)
    {{-- <h2 class="text-2xl font-semibold">{{$blog->title}}</h2> --}}
    <div class="grid grid-cols-4 gap-4 mt-6">
        <div class="bg-white p-3 rounded-lg shadow h-80">
            <img src="{{url('public/'.$blog->image)}}" alt="" class="rounded-lg h-40 w-full object-cover">
            <h3 class="mt-2 font-semibold">{{$blog ->excerpt}}</h3>
            <p class="text-gray-500 text-sm">{{$blog->created_at->format('M d, Y')}} - {{$blog->duration.'Read'}}</p>
        </div>
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