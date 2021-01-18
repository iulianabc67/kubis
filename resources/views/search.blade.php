<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Search Result</title>
</head>

<body class="bg-gray-500">

    <div class="p-2 md:p-10 grid grid-cols-1 gap-5">
        <a href="{{ URL::to('categories/' . 'Hoodies & Sweatshirts') }}"
            class="text-center inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
            Search Result
        </a>
    </div>

    <div class="p-2 md:p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-6">
        @foreach ($json->data as $item)
            @foreach ($results as $resault)
                @if ($item->sku === $resault && ($item->status === 1 && ($item->visibility === 3 || $item->visibility === 4)))

                    <div
                        class="flex flex-col bg-white w-full md:w-80 shadow-lg rounded transform hover:scale-105 duration-300 ease-in-out">
                        <a href="{{ URL::to('shop/' . $item->slug) }}">
                            <img class="w-full rounded-t" src="{{ $item->main_image }}" alt="placeholder image">
                            <div class="flex justify-around w-full transform -translate-y-5 px-4">
                                <div
                                    class="text-indigo-600 rounded-full shadow w-20 h-10 flex justify-center items-center bg-gray-100 font-bold">
                                    {{ round($item->price, 2) }} &euro;
                                </div>
                            </div>
                            <div class="flex-grow flex flex-col justify-between p-4">
                                <div class="">
                                    <h2 class="font-bold text-base mb-2">{{ $item->name }}</h2>
                                    <p class="font-light text-gray-500 text-xs my-2">tax:
                                        @if ($item->tax_class === 1)
                                            9%
                                        @elseif ($item->tax_class === 2)
                                            19%
                                        @endif
                                    </p>
                                    <p class="text-xs text-red-900">{!! substr($item->description, 0, 100) !!}
                                        <a class="text-gray-400 hover:text-gray-600"
                                            href="{{ URL::to('shop/' . $item->slug) }}"> ... read more</a>
                                    </p>
                                </div>
                                <div>
                                    <div class="pt-4 pb-2">
                                        @foreach ($item->categories as $category)
                                            <span
                                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $category->name }}</span>
                                        @endforeach
                                    </div>
                                    <a href="#"
                                        class="block bg-gray-300 py-2 px-2 text-gray-600 text-center rounded shadow-lg uppercase font-light mt-6 hover:bg-gray-400 hover:text-white duration-300 ease-in-out">Add
                                        to cart</a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>

</body>

</html>
