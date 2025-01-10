<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post - Nexa Muhammad Roynaldi</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.header')
    <div class="flex items-end justify-between px-48 mt-8">
        <h1 class="font-bold text-2xl">Blog</h1>
        <a href="/" class="hover:text-[#E4D1BD] duration-300">->Back</a>
    </div>
    <div class="flex flex-col p-5 lg:px-48 ">
        @foreach ($blog as $blogs)
        <div class="bg-gray-100 p-5 mb-10">
            <h1 class="font-bold text-2xl mb-2">{{ $blogs->title }}</h1>
            <p class="my-3">{{ $blogs->content }}</p>
            <button class="text-white font-semibold bg-blue-600 hover:bg-blue-800 p-2 my-1 rounded">Read More...</button>
        </div>
        @endforeach
    </div>
    @include('components.footer')
</body>
</html>