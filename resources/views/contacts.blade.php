@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-50 to-indigo-100 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Contact Us
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Get in touch with Dimgent Technologies for your electronics development needs
            </p>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                <p class="text-gray-600 mb-8">
                    Fill out the form below and we'll get back to you as soon as possible to discuss your project requirements.
                </p>
                
                <form x-data="{ 
                    name: '', 
                    email: '', 
                    company: '', 
                    phone: '', 
                    message: '', 
                    serviceType: '',
                    submitted: false,
                    submitting: false,
                    
                    submitForm() {
                        this.submitting = true;
                        
                        // Simulate form submission
                        setTimeout(() => {
                            this.submitted = true;
                            this.submitting = false;
                            
                            // Reset form after 3 seconds
                            setTimeout(() => {
                                this.submitted = false;
                                this.name = '';
                                this.email = '';
                                this.company = '';
                                this.phone = '';
                                this.message = '';
                                this.serviceType = '';
                            }, 3000);
                        }, 1500);
                    }
                }" @submit.prevent="submitForm()" class="space-y-6">
                    <!-- Success Message -->
                    <div x-show="submitted" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="bg-green-50 border border-green-200 rounded-lg p-4 mb-6">
                        <div class="flex">
                            <svg class="w-5 h-5 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="text-green-800 font-medium">Thank you for your message! We'll get back to you soon.</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name *</label>
                            <input x-model="name" type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Your full name">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                            <input x-model="email" type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="your@email.com">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company</label>
                            <input x-model="company" type="text" id="company" name="company" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Your company name">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                            <input x-model="phone" type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="+1 (555) 123-4567">
                        </div>
                    </div>

                    <div>
                        <label for="serviceType" class="block text-sm font-medium text-gray-700 mb-2">Service Type</label>
                        <select x-model="serviceType" id="serviceType" name="serviceType" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Select a service type</option>
                            <option value="full-cycle">Full-Cycle Development</option>
                            <option value="individual-phases">Individual Development Phases</option>
                            <option value="project-completion">Project Completion</option>
                            <option value="consulting">Consulting</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                        <textarea x-model="message" id="message" name="message" rows="6" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Tell us about your project requirements..."></textarea>
                    </div>

                    <button type="submit" :disabled="submitting" class="w-full bg-blue-600 hover:bg-blue-700 disabled:bg-blue-400 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                        <span x-show="!submitting">Send Message</span>
                        <span x-show="submitting">Sending...</span>
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Get in Touch</h2>
                <p class="text-gray-600 mb-8">
                    For more information, please email us on: <strong>info@dimgent.com</strong>
                </p>

                <div class="space-y-8">
                    <!-- Email -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Email</h3>
                            <p class="text-gray-600">
                                <a href="mailto:info@dimgent.com" class="text-blue-600 hover:text-blue-700">info@dimgent.com</a>
                            </p>
                            <p class="text-sm text-gray-500 mt-1">We'll respond within 24 hours</p>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Location</h3>
                            <p class="text-gray-600">Minsk, Belarus</p>
                            <p class="text-sm text-gray-500 mt-1">Development Center</p>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Business Hours</h3>
                            <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM</p>
                            <p class="text-gray-600">Saturday - Sunday: Closed</p>
                            <p class="text-sm text-gray-500 mt-1">All times are GMT+3</p>
                        </div>
                    </div>

                    <!-- Response Time -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Quick Response</h3>
                            <p class="text-gray-600">We typically respond to inquiries within 24 hours</p>
                            <p class="text-sm text-gray-500 mt-1">Urgent projects get priority attention</p>
                        </div>
                    </div>
                </div>

                <!-- Why Contact Us -->
                <div class="mt-12 bg-gray-50 rounded-xl p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Why Contact Dimgent Technologies?</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">20+ years of experience in electronics development</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">50+ successfully completed projects</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Cost-effective solutions without compromising quality</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Full-cycle development from concept to finished product</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Ongoing support and maintenance services</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Information -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                What to Expect
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Our process ensures your project gets the attention it deserves
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <div class="text-blue-600 font-bold text-xl">1</div>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Initial Consultation</h3>
                <p class="text-gray-600">We'll discuss your project requirements and provide initial recommendations</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <div class="text-blue-600 font-bold text-xl">2</div>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Project Proposal</h3>
                <p class="text-gray-600">Detailed proposal with timeline, costs, and technical specifications</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <div class="text-blue-600 font-bold text-xl">3</div>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Development Phase</h3>
                <p class="text-gray-600">Regular updates with photos and video of your project's progress</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <div class="text-blue-600 font-bold text-xl">4</div>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Delivery & Support</h3>
                <p class="text-gray-600">Testing, quality assurance, and ongoing technical support</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Frequently Asked Questions
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Common questions about working with Dimgent Technologies
            </p>
        </div>

        <div class="max-w-3xl mx-auto space-y-6">
            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg">
                <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">What types of projects do you work on?</span>
                    <svg x-show="!open" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <svg x-show="open" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="px-6 pb-4">
                    <p class="text-gray-600">We work on a wide range of electronic device projects including control systems, testing equipment, measurement devices, consumer electronics, and medical devices. From simple circuits to complex embedded systems.</p>
                </div>
            </div>

            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg">
                <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">How long does a typical project take?</span>
                    <svg x-show="!open" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <svg x-show="open" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="px-6 pb-4">
                    <p class="text-gray-600">Project timelines vary depending on complexity. Simple projects may take 2-4 weeks, while complex full-cycle developments can take 2-6 months. We'll provide a detailed timeline in our project proposal.</p>
                </div>
            </div>

            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg">
                <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">Do you work with international clients?</span>
                    <svg x-show="!open" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <svg x-show="open" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="px-6 pb-4">
                    <p class="text-gray-600">Yes! We work with clients worldwide. Distance is not a problem thanks to modern communication tools. We provide regular updates with photos and videos throughout the development process.</p>
                </div>
            </div>

            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg">
                <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">What information do you need to provide a quote?</span>
                    <svg x-show="!open" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <svg x-show="open" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="px-6 pb-4">
                    <p class="text-gray-600">We'll need a description of your project requirements, desired functionality, target market, budget range, and timeline. Even rough ideas are enough to get started - we'll help refine the specifications.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-blue-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Ready to Start Your Project?
        </h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Contact us today and let's discuss how we can bring your electronic device ideas to life
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="mailto:info@dimgent.com" class="bg-white hover:bg-gray-50 text-blue-600 font-semibold py-3 px-8 rounded-lg shadow-lg transition-colors">
                Email Us Directly
            </a>
            <a href="{{ route('services') }}" class="bg-blue-700 hover:bg-blue-800 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition-colors">
                Learn About Our Services
            </a>
        </div>
    </div>
</section>
@endsection
