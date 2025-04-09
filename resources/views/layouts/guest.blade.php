<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans text-gray-900 antialiased h-full bg-gray-100 bg-gradient-to-r dark:from-zinc-900 dark:via-zink-700 dark:to-zinc-800">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <!-- Background pattern for visual interest -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-100 to-blue-100 dark:from-zinc-800 dark:to-zinc-900 opacity-70"></div>
            <div class="absolute top-0 right-0 -mt-12 -mr-12 h-64 w-64 rounded-full bg-gradient-to-br from-indigo-200 to-blue-200 dark:from-indigo-900 dark:to-blue-900 opacity-20 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -mb-12 -ml-12 h-64 w-64 rounded-full bg-gradient-to-br from-blue-200 to-indigo-200 dark:from-blue-900 dark:to-indigo-900 opacity-20 blur-3xl"></div>
        </div>

        <div class="relative z-10">
            <a href="/" wire:navigate class="flex flex-col justify-center items-center transform transition-all hover:scale-105">
                <div class="flex items-center justify-center">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    <div class="text-3xl uppercase font-bold tracking-tight text-slate-900 dark:text-white">
                        Dev <span class="text-sky-500 -ml-1 italic">Doc</span>
                    </div>
                </div>
                <p class="ml-2 mt-1 text-sm text-gray-600 dark:text-gray-100"> Go ahead and login</p>
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-8 px-8 py-8 bg-white dark:bg-[rgb(38,38,36)] shadow-lg shadow-indigo500 overflow-hidden sm:rounded-lg border border-gray-100 dark:border-zinc-700 relative z-10">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 via-blue-500 to-indigo-500"></div>
            {{ $slot }}
        </div>

        <div class="mt-8 text-center text-sm text-gray-500 dark:text-gray-400 relative z-10">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'DevDocs') }}. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
