<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        <title>{{ config('app.name', 'Mytotool') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'public/css/access.css'])
    </head>
    <body class="font-sans text-gray-900 dark:text-white antialiased">
        <div class="min-h-screen w-full flex flex-wrap bg-gray-100 dark:bg-gray-900">
        <!-- link to register.blade.php by calling the child compoents -->
            {{ $slot }}
        </div>
    </body>
</html>
