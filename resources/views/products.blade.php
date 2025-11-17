@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-50 to-indigo-100 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Our Products
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Innovative electronic devices designed for precision and reliability
            </p>
        </div>
    </div>
</section>

<!-- Garand 101 Product -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 p-8 lg:p-12">
                <div>
                    <div class="inline-flex items-center bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full mb-4">
                        Featured Product
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Garand 101</h2>
                    <p class="text-lg text-blue-600 font-medium mb-6">
                        A high-resolution fluxgate magnetometer
                    </p>
                    <p class="text-gray-600 text-lg mb-6 italic">
                        "Magnetic detection can be easy and convenient!"
                    </p>
                    <p class="text-gray-600 mb-8">
                        Garand 101 is a high-resolution fluxgate magnetometer-gradiometer designed to measure disruptions in the Earth's magnetic field caused by ferromagnetic objects. It provides reliable detection of metals such as iron, steel, and nickel.
                    </p>
                    
                    <div class="space-y-4 mb-8">
                        <h3 class="text-xl font-semibold text-gray-900">Key Features:</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Designed for one-person operation</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Lightweight and user-friendly</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Reliable and robust design</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Low-cost solution</span>
                            </li>
                        </ul>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contacts') }}" class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                            Request Information
                        </a>
                        <a href="http://www.gradiometr.com" target="_blank" class="inline-flex items-center justify-center bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold py-3 px-6 rounded-lg transition-colors">
                            Visit Product Website
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/main_photo_of_garand101.jpg') }}" alt="Garand 101 Magnetometer" class="rounded-lg shadow-lg max-w-full h-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technology Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Innovative Technology
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Garand 101 implements new magnetic field measurement technology
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Energy Efficient</h3>
                <p class="text-gray-600">Reduces energy consumption and device weight through innovative measurement technology</p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Simplified Construction</h3>
                <p class="text-gray-600">Simplified construction and maintenance for enhanced reliability</p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Extended Operation</h3>
                <p class="text-gray-600">Increases operating time for longer field work sessions</p>
            </div>
        </div>
    </div>
</section>

<!-- Applications Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Target Applications
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Perfect for various professional and research applications
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <span class="text-gray-700 font-medium">Archaeological Research</span>
            </div>

            <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="text-gray-700 font-medium">Environmental Monitoring</span>
            </div>

            <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <span class="text-gray-700 font-medium">Forensic Investigations</span>
            </div>

            <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <span class="text-gray-700 font-medium">Geological Studies</span>
            </div>

            <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <span class="text-gray-700 font-medium">Civil Engineering</span>
            </div>

            <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <span class="text-gray-700 font-medium">Peace-time Military Applications</span>
            </div>
        </div>
    </div>
</section>

<!-- Advantages Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Advantages Over Other Magnetometers
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Why Garand 101 stands out in the market
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold mr-4">
                        1
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Innovative Measurement Technology</h3>
                        <p class="text-gray-600">New magnetic field measurement technology that sets it apart from conventional devices</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold mr-4">
                        2
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Fully Digital Device</h3>
                        <p class="text-gray-600">Improved noise stability during operation compared to analog alternatives</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold mr-4">
                        3
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">User-Friendly Interface</h3>
                        <p class="text-gray-600">Easy visualization system and interface for simple object detection</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold mr-4">
                        4
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Robust Design</h3>
                        <p class="text-gray-600">Reliable and robust design built for field operations</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold mr-4">
                        5
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Expanded Detection Area</h3>
                        <p class="text-gray-600">Optimized design solutions provide expanded detection area</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold mr-4">
                        6
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Plug-and-Play Operation</h3>
                        <p class="text-gray-600">Simple setup and operation without complex configuration</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold mr-4">
                        7
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Affordable Price</h3>
                        <p class="text-gray-600">Cost-effective solution without compromising on quality and performance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Gallery -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Product Gallery
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                See the Garand 101 in action
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('images/photo_garand101_5.jpg') }}" alt="Garand 101 - View 1" class="w-full h-64 object-cover">
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('images/photo_garand101_6.jpg') }}" alt="Garand 101 - View 2" class="w-full h-64 object-cover">
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('images/photo_garand101_7.jpg') }}" alt="Garand 101 - View 3" class="w-full h-64 object-cover">
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('images/photo_garand101_8.jpg') }}" alt="Garand 101 - View 4" class="w-full h-64 object-cover">
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('images/photo_garand101_10.jpg') }}" alt="Garand 101 - View 5" class="w-full h-64 object-cover">
            </div>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('images/photo_garand101_11.jpg') }}" alt="Garand 101 - View 6" class="w-full h-64 object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Documentation Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Documentation
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Download detailed product information
            </p>
        </div>

        <div class="bg-white rounded-xl p-8 shadow-sm max-w-2xl mx-auto">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Product Presentation</h3>
                    <p class="text-gray-600">Complete technical specifications and features of Garand 101</p>
                </div>
                <a href="#" class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Download PDF
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-blue-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Interested in Garand 101?
        </h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Contact us to learn more about this innovative magnetometer-gradiometer
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contacts') }}" class="bg-white hover:bg-gray-50 text-blue-600 font-semibold py-3 px-8 rounded-lg shadow-lg transition-colors">
                Get More Information
            </a>
            <a href="http://www.gradiometr.com" target="_blank" class="bg-blue-700 hover:bg-blue-800 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition-colors">
                Visit Product Website
            </a>
        </div>
    </div>
</section>
@endsection
