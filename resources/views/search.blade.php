<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Search result for "{{ $needle }}"</title>
</head>

<body class="bg-gray-500">

    @include('layouts.nav')

    <div class="p-2 md:p-10 grid grid-cols-1 gap-5">
        <a href="{{ URL::to('categories/' . 'Hoodies & Sweatshirts') }}"
            class="text-center inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">

            @if(!empty($results))
            Your search for "<span class="font-black text-gray-800">{{ $needle }}</span>" returned the following:
            @else
            We found nothing related to "<span class="font-black text-gray-800">{{ $needle }}</span>", try for something else or check our recommendation!
            @endif

        </a>
    </div>

    @if(empty($results))
                
        @include('layouts.list-products')
        
    @endif

    @include('layouts.list-search-results')

    <script>
        function myFunction() {
            var element = document.getElementById("burger");
            element.classList.toggle("block");
            element.classList.toggle("hidden");
        }

    </script>

    <!-- partial -->
    <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script>

</body>

</html>
