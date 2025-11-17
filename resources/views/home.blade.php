<x-layout>
    <x-slot:title>Home - Dimgent Technologies | Electronics Development</x-slot:title>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 text-white overflow-hidden">
        <div
            class="absolute inset-0 bg-grid-slate-100/5 [mask-image:linear-gradient(0deg,transparent,black)] pointer-events-none">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-32 relative">
            <div class="max-w-3xl">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight mb-6 leading-tight">
                    Custom Electronics Development
                </h1>
                <p class="text-xl sm:text-2xl text-blue-100 mb-8 leading-relaxed">
                    Over 20 years of experience in creating innovative electronic devices from concept to finished
                    product.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('products') }}"
                        class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-base font-semibold text-blue-700 bg-white hover:bg-blue-50 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all">
                        View Our Products
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="{{ route('services') }}"
                        class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-base font-semibold text-white bg-blue-500/20 hover:bg-blue-500/30 border-2 border-blue-400/30 backdrop-blur-sm transition-all">
                        Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">What We Do</h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    We specialize in custom electronic device development, offering both full-cycle solutions and
                    specialized development phases.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Full-Cycle Development -->
                <div
                    class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border border-blue-100 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Full-Cycle Development</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Complete electronic device development from initial concept and technical specifications through
                        to finished, tested product ready for market.
                    </p>
                </div>

                <!-- Specialized Services -->
                <div
                    class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border border-purple-100 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Specialized Phases</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Individual development phases including circuit design, software development, PCB layouts, and
                        prototyping for your specific needs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Services Grid -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">Our Development Services</h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    Comprehensive expertise across all phases of electronic device development
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Service Card -->
                <div
                    class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md border border-slate-200 transition-shadow">
                    <div
                        class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4 text-lg font-bold">
                        1
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Technical Specifications</h3>
                    <p class="text-slate-600 text-sm">Preparation and approval of detailed technical specifications for
                        your electronic device.</p>
                </div>

                <div
                    class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md border border-slate-200 transition-shadow">
                    <div
                        class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4 text-lg font-bold">
                        2
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Circuit Design</h3>
                    <p class="text-slate-600 text-sm">Development of electric circuits optimized for performance and
                        reliability.</p>
                </div>

                <div
                    class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md border border-slate-200 transition-shadow">
                    <div
                        class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4 text-lg font-bold">
                        3
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Software Development</h3>
                    <p class="text-slate-600 text-sm">Custom software solutions tailored to your device requirements.
                    </p>
                </div>

                <div
                    class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md border border-slate-200 transition-shadow">
                    <div
                        class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4 text-lg font-bold">
                        4
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">PCB Layouts</h3>
                    <p class="text-slate-600 text-sm">Professional printed circuit board design and layout services.</p>
                </div>

                <div
                    class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md border border-slate-200 transition-shadow">
                    <div
                        class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4 text-lg font-bold">
                        5
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Mechanical Design</h3>
                    <p class="text-slate-600 text-sm">Structural plans and design of product casings and housings.</p>
                </div>

                <div
                    class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md border border-slate-200 transition-shadow">
                    <div
                        class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4 text-lg font-bold">
                        6
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Prototyping & Testing</h3>
                    <p class="text-slate-600 text-sm">Test model production, assembly, fitting, and comprehensive
                        debugging.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Product -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div
                        class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-4">
                        Featured Product
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-6">
                        Garand 101 Magnetometer
                    </h2>
                    <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                        A high-resolution fluxgate magnetometer-gradiometer designed for one-person operation.
                        Lightweight, user-friendly, and cost-effective solution for magnetic field measurements.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-slate-700">Innovative magnetic field measurement technology</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-slate-700">Fully digital device for improved stability</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-slate-700">User-friendly interface for easy object detection</span>
                        </li>
                    </ul>
                    <a href="{{ route('products') }}"
                        class="inline-flex items-center px-6 py-3 rounded-lg text-base font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-sm hover:shadow transition-all">
                        Learn More About Garand 101
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
                <div class="relative">
                    <div class="aspect-square rounded-2xl overflow-hidden shadow-2xl border border-slate-200">
                        <img src="{{ asset('images/products/main_photo_of_garand101.jpg') }}"
                            alt="Garand 101 Magnetometer" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-br from-slate-800 to-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-5xl font-bold text-blue-400 mb-2">20+</div>
                    <div class="text-lg text-slate-300">Years of Experience</div>
                </div>
                <div>
                    <div class="text-5xl font-bold text-blue-400 mb-2">50+</div>
                    <div class="text-lg text-slate-300">Completed Projects</div>
                </div>
                <div>
                    <div class="text-5xl font-bold text-blue-400 mb-2">100%</div>
                    <div class="text-lg text-slate-300">Success Rate</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-6">
                Ready to Start Your Project?
            </h2>
            <p class="text-lg text-slate-600 mb-8 max-w-2xl mx-auto">
                Whether you need full-cycle development or specialized services, our experienced team is ready to bring
                your electronic device concept to life.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contacts') }}"
                    class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-base font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all">
                    Get In Touch
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="{{ route('projects') }}"
                    class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-base font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 transition-all">
                    View Our Projects
                </a>
            </div>
        </div>
    </section>
</x-layout>