<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tama Laravel')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="text-white">

    <div class="min-h-screen flex flex-col">

        <header class="bg-gray-800/80 backdrop-blur-sm sticky top-0 z-50">
            <div class="h-1 bg-orange-500"></div>
            <nav class="container mx-auto px-4 lg:px-6 py-3">
                <div class="flex justify-between items-center">
                    <div class="flex-shrink-0">
                        <a href="/"><img src="https://placehold.co/50x50/ffffff/000000?text=LOGO" alt="Logo Instansi" class="h-10 w-auto"></a>
                    </div>
                    <ul class="hidden md:flex items-center space-x-6 lg:space-x-8 text-sm font-medium">
                        <li><a href="/" class="{{ Request::is('/') ? 'text-orange-400 border-b-2 border-orange-400 pb-1' : 'hover:text-orange-400 transition-colors' }}">Home</a></li>
                        <li><a href="/profile" class="{{ Request::is('profile') ? 'text-orange-400 border-b-2 border-orange-400 pb-1' : 'hover:text-orange-400 transition-colors' }}">Profil</a></li>
                        <li><a href="/event" class="{{ Request::is('event') ? 'text-orange-400 border-b-2 border-orange-400 pb-1' : 'hover:text-orange-400 transition-colors' }}">Event</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Publikasi</a></li>
                        <li><a href="/lapor-insiden" class="{{ Request::is('lapor-insiden') ? 'text-orange-400 border-b-2 border-orange-400 pb-1' : 'hover:text-orange-400 transition-colors' }}">Lapor Insiden Siber</a></li>
                        <li><a href="/kontak" class="{{ Request::is('kontak') ? 'text-orange-400 border-b-2 border-orange-400 pb-1' : 'hover:text-orange-400 transition-colors' }}">Kontak Kami</a></li>
                    </ul>
                    <div class="hidden md:flex items-center space-x-4">
                        <div class="relative">
                            <input type="text" placeholder="Search" class="bg-gray-700 rounded-full py-1.5 px-4 text-sm w-40 focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <button class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                            </button>
                        </div>
                        <img src="https://placehold.co/120x50/ffffff/000000?text=CSIRT" alt="Logo CSIRT" class="h-10 w-auto">
                    </div>
                    <div class="md:hidden">
                        <button class="text-white focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg>
                        </button>
                    </div>
                </div>
            </nav>
        </header>

        <main class="flex-grow">
            @yield('content')
        </main>

        <footer class="bg-gray-800 py-4 mt-auto">
            <div class="container mx-auto text-center text-gray-400 text-sm">
                &copy; {{ date('Y') }} Tama Laravel CSIRT. All Rights Reserved.
            </div>
        </footer>

    </div>
    
    @stack('floating-buttons')
</body>
</html>
