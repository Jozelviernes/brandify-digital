{{-- Modern Footer with Gradient Accents --}}
<footer class="relative mt-32 overflow-hidden">
    {{-- Gradient Top Border --}}
    <div class="h-1 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600"></div>
    
    {{-- Main Footer Content --}}
    <div class="bg-gradient-to-br from-gray-900 via-slate-900 to-gray-900">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgb(255 255 255) 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>

        {{-- Floating Gradient Orbs --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 py-16 relative z-10">
            {{-- Top Section --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                {{-- Brand Column --}}
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                       <div class="relative w-12 h-12 group">
    {{-- Logo Image --}}
    <img src="{{ asset('images/logo.png') }}" alt="Brandify Logo" class="absolute inset-0 w-full h-full object-contain rounded-xl transition-transform duration-300 group-hover:rotate-12">

    {{-- Glow / Hover Overlay --}}
    <div class="absolute inset-0 w-full h-full rounded-xl blur-lg opacity-50 bg-gradient-to-br from-blue-600 via-purple-600 to-pink-600 group-hover:opacity-75 transition-opacity duration-300"></div>
</div>

                        <span class="text-2xl font-black text-white">
                            Brandify
                        </span>
                    </div>
                    <p class="text-gray-400 leading-relaxed mb-6">
                        Transforming brands through innovative digital marketing strategies and creative excellence.
                    </p>
                    
                    {{-- Social Links --}}
                    <div class="flex gap-3">
                        <a href="#" class="group relative w-10 h-10 bg-white/5 hover:bg-white/10 rounded-xl flex items-center justify-center transition-all hover:scale-110 hover:-translate-y-1">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-400 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="group relative w-10 h-10 bg-white/5 hover:bg-white/10 rounded-xl flex items-center justify-center transition-all hover:scale-110 hover:-translate-y-1">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-sky-400 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="group relative w-10 h-10 bg-white/5 hover:bg-white/10 rounded-xl flex items-center justify-center transition-all hover:scale-110 hover:-translate-y-1">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-500 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="group relative w-10 h-10 bg-white/5 hover:bg-white/10 rounded-xl flex items-center justify-center transition-all hover:scale-110 hover:-translate-y-1">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-pink-400 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Quick Links --}}
                <div>
                    <h3 class="text-white font-black text-lg mb-6 flex items-center gap-2">
                        <div class="w-1 h-6 bg-gradient-to-b from-blue-500 to-purple-500 rounded-full"></div>
                        Quick Links
                    </h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="/" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all duration-200 group">
                                <span class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-purple-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Home
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/services" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all duration-200 group">
                                <span class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-purple-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Services
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/about" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all duration-200 group">
                                <span class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-purple-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    About Us
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/portfolio" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all duration-200 group">
                                <span class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-purple-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Portfolio
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/contact" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all duration-200 group">
                                <span class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-purple-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Contact
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Services --}}
                <div>
                    <h3 class="text-white font-black text-lg mb-6 flex items-center gap-2">
                        <div class="w-1 h-6 bg-gradient-to-b from-purple-500 to-pink-500 rounded-full"></div>
                        Services
                    </h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="/services#social-media" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all duration-200 group">
                                <span class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-pink-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Social Media
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/services#seo" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all duration-200 group">
                                <span class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-pink-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    SEO Optimization
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/services#content" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all duration-200 group">
                                <span class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-pink-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Content Creation
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/services#ads" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all duration-200 group">
                                <span class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-pink-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Paid Advertising
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/services#branding" class="text-gray-400 hover:text-white hover:translate-x-1 inline-block transition-all duration-200 group">
                                <span class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 bg-pink-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Brand Strategy
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Newsletter --}}
                <div>
                    <h3 class="text-white font-black text-lg mb-6 flex items-center gap-2">
                        <div class="w-1 h-6 bg-gradient-to-b from-pink-500 to-orange-500 rounded-full"></div>
                        Stay Updated
                    </h3>
                    <p class="text-gray-400 text-sm mb-4 leading-relaxed">
                        Subscribe to our newsletter for the latest digital marketing tips and trends.
                    </p>
                    <form class="space-y-3">
                        <div class="relative">
                            <input type="email" 
                                   placeholder="Your email" 
                                   class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all">
                        </div>
                        <button type="submit" 
                                class="w-full px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold rounded-xl hover:shadow-lg hover:shadow-purple-500/50 transition-all hover:scale-105">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>

            {{-- Divider --}}
            <div class="h-px bg-gradient-to-r from-transparent via-white/10 to-transparent my-8"></div>

            {{-- Bottom Section --}}
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="text-gray-400 text-sm text-center md:text-left">
                    <p>&copy; {{ date('Y') }} <span class="text-white font-semibold">Brandify Digital</span>. All rights reserved.</p>
                </div>

                {{-- Legal Links --}}
                <div class="flex flex-wrap justify-center gap-6 text-sm">
                    <a href="/privacy" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
                    <span class="text-gray-700">•</span>
                    <a href="/terms" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
                    <span class="text-gray-700">•</span>
                    <a href="/cookies" class="text-gray-400 hover:text-white transition-colors">Cookie Policy</a>
                </div>

                {{-- Back to Top Button --}}
                <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
                        class="group flex items-center gap-2 px-4 py-2 bg-white/5 hover:bg-white/10 rounded-xl transition-all hover:scale-105">
                    <span class="text-gray-400 group-hover:text-white text-sm font-semibold transition-colors">Back to Top</span>
                    <svg class="w-4 h-4 text-gray-400 group-hover:text-white group-hover:-translate-y-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Gradient Bottom Border --}}
    <div class="h-2 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600"></div>
</footer>

<style>
    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }
</style>