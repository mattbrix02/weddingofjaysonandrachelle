<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>weddingofjaysonandrachelle</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @inertiaHead

    </head>
    <body class="bg-gray-200" id='parchment'>
        @inertia
    </body>
</html>
