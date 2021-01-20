<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $item->name }}</title>
    <!-- Tailwind CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css'>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-500">

    @include('layouts.nav')

    <div class="py-6">

        @include('layouts.breadcrumbs')

        <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 mt-6">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-0 md:px-4">
                    <div x-data="{ image: 1 }" x-cloak>
                        <div class="rounded-lg mb-4">
                            @for ($i = 1; $i <= 4; $i++)
                                <div x-show="image === {{ $i }}"
                                    class="rounded-lg mb-4 flex items-center justify-center">
                                    <img class="w-full" src="{{ $item->main_image }}" alt="">
                                </div>
                            @endfor
                        </div>
                        <div class="flex -mx-2 mb-4 px-4 md:px-0">
                            <template x-for="i in 4">
                                <div class="flex-1 px-2">
                                    <button x-on:click="image = i"
                                        :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }"
                                        class="focus:outline-none w-full rounded-lg h-20 md:h-30 bg-gray-100 flex items-center justify-center">
                                        <span x-text="i" class="text-2xl"></span>
                                    </button>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="md:flex-1 px-4">
                    <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-100 text-2xl md:text-3xl">
                        {{ $item->name }}
                    </h2>
                    <div class="flex items-center space-x-4 my-4">
                        <div>
                            <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                                <span class="text-indigo-400 mr-1 mt-1">&euro;</span>
                                <span class="font-bold text-indigo-600 text-3xl">{{ round($item->price, 2) }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-gray-100">{!! $item->description !!}</div>
                    <div class="pt-4 pb-2">
                        @foreach ($item->categories as $category)
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $category->name }}</span>
                        @endforeach
                    </div>
                    <div class="flex py-4 space-x-4">
                        <div class="relative">
                            <div
                                class="text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold">
                                Qty</div>
                            <select
                                class="cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <svg class="w-5 h-5 text-gray-400 absolute right-0 bottom-0 mb-2 mr-2"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                        <button type="button"
                            class="h-14 px-6 py-2 font-semibold rounded-xl bg-gray-200 text-gray-700 hover:bg-indigo-500 hover:text-gray-100">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
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
