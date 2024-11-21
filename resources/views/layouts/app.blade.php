<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div x-data="{ sidebarOpen: false }" class="min-h-screen bg-gray-100 flex">
        <!-- Sidebar -->
        @include('components.sidebar');

        <!-- Conteúdo Principal -->
        <div class="flex-1" :class="sidebarOpen ? 'ml-64' : 'ml-20'">
            @isset($header)
                <header class="bg-white shadow -m-1">
                    <h2 class="py-6 sm:px-6 lg:px-8 font-semibold text-gray-800 text-3xl leading-tight px-6">
                        {{ $header }}
                    </h2>
                </header>
            @endisset
            <main class="py-2">
                <div class="px-4 sm:px-6 lg:px-8">{{ $slot }}</div>
            </main>
        </div>
    </div>
</body>

</html>
