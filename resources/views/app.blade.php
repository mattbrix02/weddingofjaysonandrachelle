<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('storage/image/JR_Notext.png') }}">
        <title>Wedding of Jayson and Rachelle</title>

        @routes
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @inertiaHead

    </head>
    <body class="bg-gray-200" id='parchment'>
        @inertia
    </body>
</html>
