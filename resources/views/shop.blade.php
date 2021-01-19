<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Products List</title>
</head>

<body class="bg-gray-500">
    <div class="p-2 md:p-10 md:pb-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        <span class="text-center inline-block bg-indigo-600 rounded-full px-3 py-1 text-md font-semibold text-white mr-2 mb-2">Categories:
        </span>
        <a href="{{ URL::to('categories/' . 'Hoodies & Sweatshirts') }}"
            class="text-center inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
            #Hoodies & Sweatshirts
        </a>
        <a href="{{ URL::to('categories/' . 'Eco Friendly') }}"
            class="text-center inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
            #Eco Friendly
        </a>
        
        @include('layouts.search')

    </div>
    
    @include('layouts.list-products')

</body>

</html>
