<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Blogs</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">

        <h1 class="font-semibold text-gray-900 text-2xl bg-white">Title:{{ $blog->title }}</h1>

        <img src="{{url('storage/'.$blog->image)}}" class="w-50 h-40 object-cover" alt="Blog Image">

        <p class="text-gray-900 text-xl">{{ $blog->content }}</p>
   </body>
   </html>

  {{--  @extends('layouts.app')

@section('content')
    <h1>{{ $blog->title }}</h1>

    <img src="{{ url('storage/public/' . $blog->path) }}" class="blog-image" alt="Blog Image">

    <p>{{ $blog->content }}</p>
@endsection
  --}}