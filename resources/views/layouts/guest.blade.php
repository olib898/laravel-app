<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen sm:justify-center items-center pt-6 sm:pt-0 bg-zinc-100 dark:bg-zinc-900">
            <div class="w-100 flex justify-between p-6">
                <a href="/">
                    <h1 class="text-gray-900 dark:text-white text-xl"> Oli Burnside</h1>
                </a>
                <div class="inline-flex gap-6">
                    <a href="/login" class="text-gray-900 dark:text-white hover:text-gray-700 hover:dark:text-gray-300">
                        <h1> Login</h1>
                    </a>
                    <a href="/register" class="text-gray-900 dark:text-white hover:text-gray-700 hover:dark:text-gray-300">
                        <h1>Register</h1>
                    </a>
                </div>
            </div>

            <div class="mt-6 px-6 py-6 bg-white dark:bg-zinc-800 shadow-md overflow-hidden rounded-xl container mx-auto">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
