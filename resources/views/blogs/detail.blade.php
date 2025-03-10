<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Blogs</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
        <div class="bg-white">
            <div>
                <h1 class="font-semibold text-gray-900 text-2xl bg-white">Title:{{ $blog->title }}</h1>
            </div>
            <div>
                <img src="{{url('storage/'.$blog->image)}}" class="w-50 h-40 object-cover" alt="Blog Image">
            </div>
            <div>
                <p class="text-gray-900 text-xl">{{ $blog->content }}</p>
            </div>
        </div>
   </body>
   </html>