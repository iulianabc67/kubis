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

    @include('layouts.nav')
    
    @include('layouts.list-products')

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
