<x-layout>
    <x-slot:title>Products - Garand 101 Magnetometer | Dimgent Technologies</x-slot:title>

    <!-- Page Header -->
    <section class="bg-gradient-to-br from-slate-800 to-slate-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl sm:text-5xl font-bold mb-4">Our Products</h1>
            <p class="text-xl text-slate-300 max-w-3xl">
                High-quality electronic devices designed and manufactured with precision and expertise
            </p>
        </div>
    </section>

    <!-- Garand 101 Main Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Product Image -->
                <div>
                    <div x-data="{ currentImage: '{{ asset('images/products/main_photo_of_garand101.jpg') }}' }">
                        <div class="aspect-square rounded-2xl overflow-hidden shadow-xl border border-slate-200 mb-4">
                            <img :src="currentImage" alt="Garand 101 Magnetometer" class="w-full h-full object-cover">
                        </div>

                        <!-- Thumbnail Gallery -->
                        <div class="grid grid-cols-5 gap-2">
                            <button @click="currentImage = '{{ asset('images/products/main_photo_of_garand101.jpg') }}'"
                                class="aspect-square rounded-lg overflow-hidden border-2 hover:border-blue-500 transition"
                                :class="currentImage === '{{ asset('images/products/main_photo_of_garand101.jpg') }}' ? 'border-blue-600' : 'border-slate-200'">
                                <img src="{{ asset('images/products/main_photo_of_garand101.jpg') }}" alt="Garand 101"
                                    class="w-full h-full object-cover">
                            </button>
                            <button @click="currentImage = '{{ asset('images/products/photo_garand101_5.jpg') }}'"
                                class="aspect-square rounded-lg overflow-hidden border-2 hover:border-blue-500 transition"
                                :class="currentImage === '{{ asset('images/products/photo_garand101_5.jpg') }}' ? 'border-blue-600' : 'border-slate-200'">
                                <img src="{{ asset('images/products/photo_garand101_5.jpg') }}" alt="Garand 101"
                                    class="w-full h-full object-cover">
                            </button>
                            <button @click="currentImage = '{{ asset('images/products/photo_garand101_6.jpg') }}'"
                                class="aspect-square rounded-lg overflow-hidden border-2 hover:border-blue-500 transition"
                                :class="currentImage === '{{ asset('images/products/photo_garand101_6.jpg') }}' ? 'border-blue-600' : 'border-slate-200'">
                                <img src="{{ asset('images/products/photo_garand101_6.jpg') }}" alt="Garand 101"
                                    class="w-full h-full object-cover">
                            </button>
                            <button @click="currentImage = '{{ asset('images/products/photo_garand101_7.jpg') }}'"
                                class="aspect-square rounded-lg overflow-hidden border-2 hover:border-blue-500 transition"
                                :class="currentImage === '{{ asset('images/products/photo_garand101_7.jpg') }}' ? 'border-blue-600' : 'border-slate-200'">
                                <img src="{{ asset('images/products/photo_garand101_7.jpg') }}" alt="Garand 101"
                                    class="w-full h-full object-cover">
                            </button>
                            <button @click="currentImage = '{{ asset('images/products/photo_garand101_8.jpg') }}'"
                                class="aspect-square rounded-lg overflow-hidden border-2 hover:border-blue-500 transition"
                                :class="currentImage === '{{ asset('images/products/photo_garand101_8.jpg') }}' ? 'border-blue-600' : 'border-slate-200'">
                                <img src="{{ asset('images/products/photo_garand101_8.jpg') }}" alt="Garand 101"
                                    class="w-full h-full object-cover">
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Details -->
                <div>
                    <div
                        class="inline-block px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-semibold mb-4">
                        High-Resolution Fluxgate Magnetometer
                    </div>
                    <h1 class="text-4xl font-bold text-slate-900 mb-4">Garand 101</h1>
                    <p class="text-xl text-blue-600 font-semibold mb-6">
                        "Magnetic detection can be easy and convenient!"
                    </p>

                    <div class="prose prose-slate max-w-none mb-8">
                        <p class="text-lg text-slate-600 leading-relaxed">
                            The <strong>Garand 101</strong> is a high-resolution fluxgate magnetometer-gradiometer
                            designed to measure disruptions in the Earth's magnetic field caused by ferromagnetic
                            objects. It provides reliable detection of metals such as iron, steel, and nickel.
                        </p>
                        <p class="text-lg text-slate-600 leading-relaxed">
                            The device is designed for one-person operation, being lightweight, user-friendly, reliable,
                            and cost-effective.
                        </p>
                    </div>

                    <!-- Key Features -->
                    <div class="bg-slate-50 rounded-xl p-6 border border-slate-200 mb-8">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Key Features</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-slate-700">Innovative magnetic field measurement technology</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-slate-700">Fully digital device — improved noise stability</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-slate-700">User-friendly visualization system and interface</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-slate-700">Reliable and robust design</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-slate-700">Expanded detection area due to optimized design</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-slate-700">Plug-and-play operation</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-slate-700">Affordable price</span>
                            </li>
                        </ul>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="http://www.gradiometr.com" target="_blank" rel="noopener"
                            class="inline-flex items-center justify-center px-6 py-3 rounded-lg text-base font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-sm hover:shadow transition-all">
                            Visit www.gradiometr.com
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                </path>
                            </svg>
                        </a>
                        <a href="{{ route('contacts') }}"
                            class="inline-flex items-center justify-center px-6 py-3 rounded-lg text-base font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 transition-all">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">Key Technology</h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    Garand 101 implements new magnetic field measurement technology
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-sm border border-slate-200">
                    <div class="w-14 h-14 bg-green-100 text-green-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Reduced Energy Consumption</h3>
                    <p class="text-slate-600">
                        Advanced technology significantly reduces energy consumption and device weight, increasing
                        operating time.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-sm border border-slate-200">
                    <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Simplified Construction</h3>
                    <p class="text-slate-600">
                        Streamlined design simplifies construction and maintenance while maintaining high performance
                        standards.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-sm border border-slate-200">
                    <div
                        class="w-14 h-14 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Extended Operating Time</h3>
                    <p class="text-slate-600">
                        Optimized power management ensures longer field operation time on a single charge.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Applications Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">Target Applications</h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    Versatile magnetometer suitable for various professional fields
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <div class="text-center p-6 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
                    <div
                        class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-slate-900 text-sm">Archaeological Research</h4>
                </div>

                <div class="text-center p-6 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
                    <div
                        class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-slate-900 text-sm">Environmental Monitoring</h4>
                </div>

                <div class="text-center p-6 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
                    <div
                        class="w-12 h-12 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-slate-900 text-sm">Forensic Investigations</h4>
                </div>

                <div class="text-center p-6 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
                    <div
                        class="w-12 h-12 bg-orange-100 text-orange-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-slate-900 text-sm">Geological Studies</h4>
                </div>

                <div class="text-center p-6 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
                    <div
                        class="w-12 h-12 bg-red-100 text-red-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-slate-900 text-sm">Civil Engineering</h4>
                </div>

                <div class="text-center p-6 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors">
                    <div
                        class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-slate-900 text-sm">Military Applications</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Images Section -->
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-slate-900 mb-8 text-center">Product Gallery</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="aspect-square rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                    <img src="{{ asset('images/products/photo_garand101_10.jpg') }}" alt="Garand 101"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="aspect-square rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                    <img src="{{ asset('images/products/photo_garand101_11.jpg') }}" alt="Garand 101"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="aspect-square rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                    <img src="{{ asset('images/products/photo_garand101_12_2.jpg') }}" alt="Garand 101"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
                <div class="aspect-square rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                    <img src="{{ asset('images/products/bag_2_forest.jpg') }}" alt="Garand 101 in Field"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-blue-600 to-indigo-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold mb-6">
                Interested in Garand 101?
            </h2>
            <p class="text-lg text-blue-100 mb-8 max-w-2xl mx-auto">
                Learn more about the Garand 101 magnetometer or contact us for pricing and availability information.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="http://www.gradiometr.com" target="_blank" rel="noopener"
                    class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-base font-semibold text-blue-700 bg-white hover:bg-blue-50 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all">
                    Visit Gradiometr.com
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
                <a href="{{ route('contacts') }}"
                    class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-base font-semibold text-white bg-blue-500/20 hover:bg-blue-500/30 border-2 border-blue-400/30 backdrop-blur-sm transition-all">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
</x-layout>