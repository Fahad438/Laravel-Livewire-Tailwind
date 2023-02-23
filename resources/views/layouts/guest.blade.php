<!DOCTYPE html>
<html  dir="rtl">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="https://cdn.tailwindcss.com"></script>
        @livewireStyles
    </head>
    <body class="font-sans slot">

        <!-- component navbar -->
        @livewire('nav-bar')

        <div class="font-sans text-gray-900 ">
            {{ $slot }}
        </div>


        @livewire('footer')
            @livewireScripts
        <script src="resources/js/app.js"></script>
    </body>
</html>
