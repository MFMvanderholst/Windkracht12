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

        <!-- Styles -->
        @vite(['resources/scss/tab.scss', 'resources/scss/modal.scss', 'resources/scss/form.scss', 'resources/css/app.css'])
        <!-- scripts  -->
        @vite(['resources/js/modal.js', 'resources/js/tab.js', 'resources/js/app.js'])
    </head>

    <body class="text-gray-900">
        <div class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">


            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>

</html>