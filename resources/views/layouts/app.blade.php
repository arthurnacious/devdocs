<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @livewireStyles
</head>
<body class="font-sans antialiased h-full bg-gray-100 dark:bg-zinc-950">
    <div class="flex">

        <!-- Static sidebar for desktop -->
        <livewire:layout.navigation />

        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <!-- Top navigation bar -->
            <livewire:layout.top-bar />

            <!-- Main content area -->
            <main class="flex-1 relative overflow-y-auto focus:outline-none">

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white dark:bg-zinc-800/20 shadow-md rounded-b-3xl">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <div class="py-6">
                    {{$slot}}
                </div>
            </main>
        </div>
    </div>

</body>
</html>
