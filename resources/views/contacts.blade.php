<x-layout>
    <x-slot:title>Contact Us | Dimgent Technologies</x-slot:title>

    <!-- Page Header -->
    <section class="bg-gradient-to-br from-slate-800 to-slate-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl sm:text-5xl font-bold mb-4">Contact Us</h1>
            <p class="text-xl text-slate-300 max-w-3xl">
                Get in touch with our team to discuss your electronic device development needs
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 mb-6">Send Us a Message</h2>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        Fill out the form below and we'll get back to you as soon as possible. We typically respond within 24 hours.
                    </p>

                    <form x-data="{ 
                        formData: { name: '', email: '', subject: '', message: '' }, 
                        submitted: false,
                        submitForm() {
                            this.submitted = true;
                            // In a real application, this would submit to a backend endpoint
                            console.log('Form submitted:', this.formData);
                        }
                    }" @submit.prevent="submitForm" class="space-y-6">
                        
                        <div x-show="!submitted">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-semibold text-slate-900 mb-2">
                                    Your Name <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    x-model="formData.name"
                                    required
                                    class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors outline-none"
                                    placeholder="John Smith"
                                >
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-semibold text-slate-900 mb-2">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    x-model="formData.email"
                                    required
                                    class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors outline-none"
                                    placeholder="john@example.com"
                                >
                            </div>

                            <!-- Subject -->
                            <div>
                                <label for="subject" class="block text-sm font-semibold text-slate-900 mb-2">
                                    Subject <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="subject" 
                                    x-model="formData.subject"
                                    required
                                    class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors outline-none"
                                    placeholder="Project inquiry"
                                >
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-sm font-semibold text-slate-900 mb-2">
                                    Message <span class="text-red-500">*</span>
                                </label>
                                <textarea 
                                    id="message" 
                                    x-model="formData.message"
                                    required
                                    rows="6"
                                    class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors outline-none resize-none"
                                    placeholder="Please describe your project requirements..."
                                ></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div>
                                <button 
                                    type="submit"
                                    class="w-full px-8 py-4 rounded-lg text-base font-semibold text-white bg-blue-600 hover:bg-blue-700 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all"
                                >
                                    Send Message
                                </button>
                            </div>
                        </div>

                        <!-- Success Message -->
                        <div x-show="submitted" 
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform scale-90"
                             x-transition:enter-end="opacity-100 transform scale-100"
                             class="bg-green-50 border border-green-200 rounded-xl p-8 text-center"
                             style="display: none;">
                            <div class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-green-900 mb-2">Message Sent!</h3>
                            <p class="text-green-700 mb-6">Thank you for contacting us. We'll get back to you soon.</p>
                            <button 
                                @click="submitted = false; formData = { name: '', email: '', subject: '', message: '' }"
                                class="inline-flex items-center px-6 py-3 rounded-lg text-sm font-semibold text-green-700 bg-green-100 hover:bg-green-200 transition-colors"
                            >
                                Send Another Message
                            </button>
                        </div>
                    </form>

                    <p class="text-sm text-slate-500 mt-6">
                        <span class="text-red-500">*</span> Required fields
                    </p>
                </div>

                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 mb-6">Get In Touch</h2>
                    
                    <div class="space-y-8 mb-10">
                        <!-- Location -->
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-1">Location</h3>
                                <p class="text-slate-600">Minsk, Belarus</p>
                                <p class="text-sm text-slate-500 mt-1">Development Center</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-1">Email</h3>
                                <p class="text-slate-600">For more information, please email us</p>
                                <p class="text-sm text-slate-500 mt-1">We typically respond within 24 hours</p>
                            </div>
                        </div>

                        <!-- Website -->
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-1">Product Website</h3>
                                <a href="http://www.gradiometr.com" target="_blank" rel="noopener" class="text-blue-600 hover:text-blue-700 font-medium">
                                    www.gradiometr.com
                                </a>
                                <p class="text-sm text-slate-500 mt-1">Learn more about Garand 101</p>
                            </div>
                        </div>
                    </div>

                    <!-- Info Card -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border border-blue-100">
                        <h3 class="text-xl font-bold text-slate-900 mb-4">Why Work With Us?</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-slate-700 text-sm">Over 20 years of experience</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-slate-700 text-sm">50+ successfully completed projects</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-slate-700 text-sm">100% success rate</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-slate-700 text-sm">Distance is not a problem</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-slate-700 text-sm">Regular progress updates</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Info Section -->
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl p-8 lg:p-12 shadow-sm border border-slate-200">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6 text-center">Working With International Clients</h2>
                    <div class="prose prose-slate max-w-none">
                        <p class="text-slate-600 leading-relaxed mb-4">
                            The majority of our clients from other countries outsource their device development to us to keep costs down. Some were initially concerned about working with a remote team, but after receiving their finished product and evaluating its quality, they often return with more orders.
                        </p>
                        <p class="text-slate-600 leading-relaxed mb-4">
                            <strong class="text-slate-900">Distance is not a problem</strong> in today's connected world. The Internet brings us closer than ever before, and we maintain clear communication throughout the development process.
                        </p>
                        <p class="text-slate-600 leading-relaxed">
                            We keep you updated on progress with photos and videos if you wish, ensuring you're always informed about your project's status.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Explore Our Work</h2>
                <p class="text-lg text-slate-600">Learn more about what we do and how we can help</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <a href="{{ route('services') }}" class="group bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-8 border border-blue-100 hover:border-blue-200 hover:shadow-lg transition-all">
                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Our Services</h3>
                    <p class="text-slate-600 text-sm">Full-cycle development and specialized services</p>
                </a>

                <a href="{{ route('projects') }}" class="group bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-8 border border-purple-100 hover:border-purple-200 hover:shadow-lg transition-all">
                    <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Our Projects</h3>
                    <p class="text-slate-600 text-sm">50+ completed projects across various industries</p>
                </a>

                <a href="{{ route('products') }}" class="group bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-8 border border-green-100 hover:border-green-200 hover:shadow-lg transition-all">
                    <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Our Products</h3>
                    <p class="text-slate-600 text-sm">Garand 101 magnetometer and more</p>
                </a>
            </div>
        </div>
    </section>
</x-layout>

