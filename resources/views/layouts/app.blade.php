<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', '2Ls Photography')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .gallery-card { transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); }
        .gallery-card:hover { transform: translateY(-8px); }
        .gallery-card img { transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1); }
        .gallery-card:hover img { transform: scale(1.05); }
        .nav-link { position: relative; }
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -4px;
            left: 0;
            background-color: currentColor;
            transition: width 0.3s ease;
        }
        .nav-link:hover:after { width: 100%; }
    </style>
    @stack('styles')
</head>
<body class="bg-white text-gray-900 antialiased">
    <!-- Navigation - using our custom partial -->
    @include('partials.navigation')

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    @stack('scripts')
</body>
</html>