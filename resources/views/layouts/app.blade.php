<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dimgent Technologies - Custom Electronics Development Services">
    
    <title>{{ $title ?? 'Dimgent Technologies' }} - Electronics Development</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
    <!-- Navigation -->
    <nav x-data="{ mobileMenuOpen: false }" class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center">
                        {{-- <img src="{{ asset('images/logo.png') }}" alt="Dimgent Technologies" class="h-8 w-auto"> --}}
                        <span class="ml-3 text-xl font-semibold text-gray-900">Dimgent Technologies</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="{{ route('home') }}" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Home</a>
                        <a href="{{ route('products') }}" class="text-gray-500 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Products</a>
                        <a href="{{ route('services') }}" class="text-gray-500 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Services</a>
                        <a href="{{ route('projects') }}" class="text-gray-500 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Projects</a>
                        <a href="{{ route('contacts') }}" class="text-gray-500 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Contacts</a>
                        <a href="{{ route('about') }}" class="text-gray-500 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">About</a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                        <svg x-show="!mobileMenuOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="mobileMenuOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t border-gray-200">
                <a href="{{ route('home') }}" class="text-gray-900 hover:text-blue-600 block px-3 py-2 text-base font-medium">Home</a>
                <a href="{{ route('products') }}" class="text-gray-500 hover:text-blue-600 block px-3 py-2 text-base font-medium">Products</a>
                <a href="{{ route('services') }}" class="text-gray-500 hover:text-blue-600 block px-3 py-2 text-base font-medium">Services</a>
                <a href="{{ route('projects') }}" class="text-gray-500 hover:text-blue-600 block px-3 py-2 text-base font-medium">Projects</a>
                <a href="{{ route('contacts') }}" class="text-gray-500 hover:text-blue-600 block px-3 py-2 text-base font-medium">Contacts</a>
                <a href="{{ route('about') }}" class="text-gray-500 hover:text-blue-600 block px-3 py-2 text-base font-medium">About</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Dimgent Technologies" class="h-8 w-auto">
                        <span class="ml-3 text-xl font-semibold">Dimgent Technologies</span>
                    </div>
                    <p class="text-gray-300 mb-4">Electronics Development</p>
                    <p class="text-gray-400 text-sm">A group of specialists working in the development of electronic devices, offering full-cycle development from concept to finished product.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white text-sm">Home</a></li>
                        <li><a href="{{ route('products') }}" class="text-gray-400 hover:text-white text-sm">Products</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white text-sm">Services</a></li>
                        <li><a href="{{ route('projects') }}" class="text-gray-400 hover:text-white text-sm">Projects</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white text-sm">About Us</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase mb-4">Contact</h3>
                    <div class="space-y-2">
                        <p class="text-gray-400 text-sm">Minsk, Belarus</p>
                        <p class="text-gray-400 text-sm">
                            <a href="mailto:info@dimgent.com" class="hover:text-white">info@dimgent.com</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8">
                <p class="text-gray-400 text-sm text-center">
                    © {{ date('Y') }} Dimgent Technologies. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</body>
</html>
