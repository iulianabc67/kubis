<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{-- $item->name --}}</title>
    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    {{--
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css'>
    --}}
</head>

<body class="bg-gray-500">

    <div class="bg-white shadow-sm sticky top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-1 md:py-4">
            <div class="flex items-center justify-between">
                <!-- Menu Trigger -->
                <button onclick="myFunction()" type="button"
                    class="md:hidden w-10 h-10 rounded-lg -ml-2 flex justify-center items-center">
                    <svg class="text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <!-- ./ Menu Trigger -->

                <div class="p-2  md:pb-0 grid grid-cols-1">
                    <a href="#" class="align-middle font-bold text-gray-700 text-2xl">Shop.</a>

                    <div id="burger" class="hidden  flex-1 lg:ml-8">
                        <a href="{{ URL::to('categories/' . 'Hoodies & Sweatshirts') }}"
                            class="w-full text-center inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 my-1">
                            #Hoodies & Sweatshirts
                        </a>
                        <a href="{{ URL::to('categories/' . 'Eco Friendly') }}"
                            class="w-full text-center inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 my-1">
                            #Eco Friendly
                        </a>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="relative hidden md:block">
                        <form action="{{ url('/search') }}" , method="get">
                            @csrf
                            {{ csrf_field() }}
                            <div class="relative block">
                                <input type="search" name="keyword"
                                    class="w-full pl-10 pr-2 h-10 py-1 rounded-lg border border-gray-200 focus:border-gray-300 focus:outline-none focus:shadow-inner leading-none"
                                    placeholder="Search">
                                <svg class="h-6 w-6 text-gray-300 ml-2 mt-2 stroke-current absolute top-0 left-0"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Search Mobile -->
            <div class="relative md:hidden">
                <form action="{{ url('/search') }}" , method="get">
                    @csrf
                    {{ csrf_field() }}
                    <div class="relative block">
                        <input type="search" name="keyword"
                            class="w-full pl-10 pr-2 h-10 py-1 rounded-lg border border-gray-200 focus:border-gray-300 focus:outline-none focus:shadow-inner leading-none"
                            placeholder="Search">
                        <svg class="h-6 w-6 text-gray-300 ml-2 mt-2 stroke-current absolute top-0 left-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </form>
            </div>
            <!-- ./ Search Mobile -->

        </div>
    </div>

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
