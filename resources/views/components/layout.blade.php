<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dimgent Technologies - Electronics Development' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-slate-50 text-slate-900">
    <!-- Navigation -->
    <nav x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-50 bg-white border-b border-slate-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center group">
                        {{-- <img src="{{ asset('images/logo.png') }}" alt="Dimgent Technologies"
                            class="h-10 w-auto transition-transform group-hover:scale-105"> --}}
                        <div class="ml-3 hidden sm:block">
                            <div class="text-lg font-bold text-slate-900 tracking-tight">Dimgent Technologies</div>
                            <div class="text-xs text-slate-500 font-medium">Electronics Development</div>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex md:items-center md:space-x-1">
                    <a href="{{ route('home') }}"
                        class="px-4 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition {{ request()->routeIs('home') ? 'bg-slate-100 text-slate-900' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('products') }}"
                        class="px-4 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition {{ request()->routeIs('products') ? 'bg-slate-100 text-slate-900' : '' }}">
                        Products
                    </a>
                    <a href="{{ route('services') }}"
                        class="px-4 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition {{ request()->routeIs('services') ? 'bg-slate-100 text-slate-900' : '' }}">
                        Services
                    </a>
                    <a href="{{ route('projects') }}"
                        class="px-4 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition {{ request()->routeIs('projects') ? 'bg-slate-100 text-slate-900' : '' }}">
                        Projects
                    </a>
                    <a href="{{ route('about') }}"
                        class="px-4 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition {{ request()->routeIs('about') ? 'bg-slate-100 text-slate-900' : '' }}">
                        About
                    </a>
                    <a href="{{ route('contacts') }}"
                        class="ml-2 px-5 py-2 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-sm hover:shadow transition-all">
                        Contact Us
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-lg text-slate-700 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 transition">
                        <svg class="h-6 w-6" :class="{'hidden': mobileMenuOpen, 'block': !mobileMenuOpen }" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="h-6 w-6" :class="{'block': mobileMenuOpen, 'hidden': !mobileMenuOpen }" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-1" class="md:hidden border-t border-slate-200 bg-white"
            style="display: none;">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}"
                    class="block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition {{ request()->routeIs('home') ? 'bg-slate-100 text-slate-900' : '' }}">
                    Home
                </a>
                <a href="{{ route('products') }}"
                    class="block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition {{ request()->routeIs('products') ? 'bg-slate-100 text-slate-900' : '' }}">
                    Products
                </a>
                <a href="{{ route('services') }}"
                    class="block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition {{ request()->routeIs('services') ? 'bg-slate-100 text-slate-900' : '' }}">
                    Services
                </a>
                <a href="{{ route('projects') }}"
                    class="block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition {{ request()->routeIs('projects') ? 'bg-slate-100 text-slate-900' : '' }}">
                    Projects
                </a>
                <a href="{{ route('about') }}"
                    class="block px-3 py-2 rounded-lg text-base font-semibold text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition {{ request()->routeIs('about') ? 'bg-slate-100 text-slate-900' : '' }}">
                    About
                </a>
                <a href="{{ route('contacts') }}"
                    class="block px-3 py-2 rounded-lg text-base font-semibold text-white bg-blue-600 hover:bg-blue-700 transition text-center">
                    Contact Us
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="md:col-span-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Dimgent Technologies" class="h-10 w-auto mb-4">
                    <p class="text-sm text-slate-400 leading-relaxed mb-4">
                        A group of specialists working in the sector of electronic devices development.
                        Over 20 years of experience and more than 50 successfully completed projects.
                    </p>
                    <p class="text-sm text-slate-400">
                        <strong class="text-slate-300">Location:</strong> Minsk, Belarus
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-sm hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('products') }}" class="text-sm hover:text-white transition">Products</a>
                        </li>
                        <li><a href="{{ route('services') }}" class="text-sm hover:text-white transition">Services</a>
                        </li>
                        <li><a href="{{ route('projects') }}" class="text-sm hover:text-white transition">Projects</a>
                        </li>
                        <li><a href="{{ route('about') }}" class="text-sm hover:text-white transition">About Us</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('contacts') }}" class="text-sm hover:text-white transition">Contact
                                Form</a>
                        </li>
                        <li>
                            <a href="http://www.gradiometr.com" target="_blank" rel="noopener"
                                class="text-sm hover:text-white transition">www.gradiometr.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 pt-8 border-t border-slate-800 text-center">
                <p class="text-sm text-slate-400">
                    &copy; {{ date('Y') }} Dimgent Technologies. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>