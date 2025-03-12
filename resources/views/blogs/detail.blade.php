<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-white items-center justify-between">
    <div class="max-w-4xl mx-auto p-4">
        <div class="pb-4">
            <h1 class="font-bold text-gray-900 text-4xl">{{ $blog->title }}:-</h1>
        </div>

        <!-- Image Section -->
        <div class="rounded-lg pb-4 h-auto max-w-full">
            <img src="{{ url('storage/'.$blog->image) }}" 
            srcset="{{ url('storage/'.$blog->image) }} 1x, {{ url('storage/'.$blog->image) }} 2x"
            style="image-rendering: crisp-edges;"
            class="w-full h-auto object-cover rounded-lg" alt="Blog Image">
        </div>

        <!-- Excerpt Section -->
        <div class="py-4 text-xl font-semibold">
            <p class="text-gray-900">{{ $blog->excerpt }}</p>
        </div>

        <!-- Content Section -->
        <div class="py-4 text-2xl font-semibold">
            <!-- Use  to render raw HTML content -->
            <p class="text-gray-900 text-2xl font-semibold">
                {!! $blog->content !!}
            </p>
        </div>
    </div>
</body>
</html>
