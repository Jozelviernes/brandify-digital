{{-- Modern Navigation with Glassmorphism --}}
<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="navbar">
    <div class="bg-white/80 backdrop-blur-xl border-b border-gray-200/50 shadow-lg shadow-gray-900/5">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center h-20">
                {{-- Logo --}}
                <a href="/" class="group flex items-center gap-3">
                    <div class="relative w-10 h-10 group">
    {{-- Logo Image --}}
    <img src="{{ asset('images/logo.png') }}" alt="Brandify Logo" class="absolute inset-0 w-full h-full object-contain rounded-xl transition-transform duration-300 group-hover:rotate-12">

    {{-- Glow / Hover Overlay --}}
    <div class="absolute inset-0 w-full h-full rounded-xl blur-lg opacity-50 bg-gradient-to-br from-blue-600 via-purple-600 to-pink-600 group-hover:opacity-75 transition-opacity duration-300"></div>
</div>

                    <span class="text-2xl font-black bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">
                        Brandify Digital
                    </span>
                </a>
                
                {{-- Desktop Menu --}}
                <div class="hidden md:flex items-center gap-1">
                    <a href="/" class="px-5 py-2.5 rounded-xl font-semibold text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-200 relative group">
                        Home
                        <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-purple-600 group-hover:w-3/4 transition-all duration-300"></span>
                    </a>
                    <a href="{{ route('services') }}" class="px-5 py-2.5 rounded-xl font-semibold text-gray-700 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200 relative group">
                        Services
                        <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-purple-600 to-pink-600 group-hover:w-3/4 transition-all duration-300"></span>
                    </a>
                    <a href="{{ route('about') }}" class="px-5 py-2.5 rounded-xl font-semibold text-gray-700 hover:text-pink-600 hover:bg-pink-50 transition-all duration-200 relative group">
                        About
                        <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-pink-600 to-orange-600 group-hover:w-3/4 transition-all duration-300"></span>
                    </a>
                    <a href="{{ route('contact') }}"  class="px-5 py-2.5 rounded-xl font-semibold text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-200 relative group">
                        Contact
                        <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-teal-600 group-hover:w-3/4 transition-all duration-300"></span>
                    </a>
                </div>

                {{-- CTA Button Desktop --}}
                <div class="hidden md:flex items-center gap-4">
                    <a href="/contact" class="group relative px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold rounded-xl overflow-hidden transition-all hover:scale-105 hover:shadow-lg hover:shadow-purple-500/50">
                        <span class="relative z-10 flex items-center gap-2">
                            Get Started
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </a>
                </div>

                {{-- Mobile Menu Button --}}
                <button id="mobile-menu-button" class="md:hidden relative w-10 h-10 rounded-xl hover:bg-gray-100 transition-colors focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <span class="menu-icon-line block w-6 h-0.5 bg-gray-700 mb-1.5 transition-all duration-300"></span>
                        <span class="menu-icon-line block w-6 h-0.5 bg-gray-700 mb-1.5 transition-all duration-300"></span>
                        <span class="menu-icon-line block w-6 h-0.5 bg-gray-700 transition-all duration-300"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu Overlay --}}
    <div id="mobile-menu" class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm opacity-0 invisible transition-all duration-300 md:hidden">
        <div class="absolute right-0 top-0 h-full w-80 max-w-full bg-white shadow-2xl transform translate-x-full transition-transform duration-300" id="mobile-menu-panel">
            {{-- Mobile Menu Header --}}
            <div class="flex items-center justify-between p-6 border-b border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-blue-600 via-purple-600 to-pink-600 rounded-lg"></div>
                    <span class="text-lg font-black bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">
                        Menu
                    </span>
                </div>
                <button id="mobile-menu-close" class="w-10 h-10 rounded-xl hover:bg-gray-100 transition-colors flex items-center justify-center">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            {{-- Mobile Menu Items --}}
            <div class="p-6 space-y-2">
                <a href="/" class="group flex items-center gap-4 px-5 py-4 rounded-xl hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 group-hover:bg-blue-200 flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900 group-hover:text-blue-600 transition-colors">Home</div>
                        <div class="text-sm text-gray-500">Back to homepage</div>
                    </div>
                </a>

                <a href="/services" class="group flex items-center gap-4 px-5 py-4 rounded-xl hover:bg-gradient-to-r hover:from-purple-50 hover:to-purple-100 transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-purple-100 group-hover:bg-purple-200 flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900 group-hover:text-purple-600 transition-colors">Services</div>
                        <div class="text-sm text-gray-500">What we offer</div>
                    </div>
                </a>

                <a href="/about" class="group flex items-center gap-4 px-5 py-4 rounded-xl hover:bg-gradient-to-r hover:from-pink-50 hover:to-pink-100 transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-pink-100 group-hover:bg-pink-200 flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900 group-hover:text-pink-600 transition-colors">About</div>
                        <div class="text-sm text-gray-500">Our story</div>
                    </div>
                </a>

                <a href="/contact" class="group flex items-center gap-4 px-5 py-4 rounded-xl hover:bg-gradient-to-r hover:from-blue-50 hover:to-teal-100 transition-all duration-200">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 group-hover:bg-teal-200 flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-blue-600 group-hover:text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900 group-hover:text-teal-600 transition-colors">Contact</div>
                        <div class="text-sm text-gray-500">Get in touch</div>
                    </div>
                </a>
            </div>

            {{-- Mobile CTA --}}
            <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-gray-50 to-transparent">
                <a href="/contact" class="block w-full px-6 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold rounded-xl text-center hover:shadow-lg hover:shadow-purple-500/50 transition-all">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</nav>

{{-- Navbar Scroll Effect & Mobile Menu Script --}}
<script>
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            navbar.classList.add('nav-scrolled');
        } else {
            navbar.classList.remove('nav-scrolled');
        }
        
        lastScroll = currentScroll;
    });

    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuPanel = document.getElementById('mobile-menu-panel');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const menuIconLines = document.querySelectorAll('.menu-icon-line');

    function openMobileMenu() {
        mobileMenu.classList.remove('invisible', 'opacity-0');
        setTimeout(() => {
            mobileMenuPanel.classList.remove('translate-x-full');
        }, 10);
        
        // Animate hamburger to X
        menuIconLines[0].style.transform = 'rotate(45deg) translateY(8px)';
        menuIconLines[1].style.opacity = '0';
        menuIconLines[2].style.transform = 'rotate(-45deg) translateY(-8px)';
        
        // Prevent body scroll
        document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
        mobileMenuPanel.classList.add('translate-x-full');
        setTimeout(() => {
            mobileMenu.classList.add('invisible', 'opacity-0');
        }, 300);
        
        // Animate X back to hamburger
        menuIconLines[0].style.transform = 'none';
        menuIconLines[1].style.opacity = '1';
        menuIconLines[2].style.transform = 'none';
        
        // Restore body scroll
        document.body.style.overflow = '';
    }

    mobileMenuButton.addEventListener('click', () => {
        if (mobileMenu.classList.contains('invisible')) {
            openMobileMenu();
        } else {
            closeMobileMenu();
        }
    });

    mobileMenuClose.addEventListener('click', closeMobileMenu);

    // Close menu when clicking overlay
    mobileMenu.addEventListener('click', (e) => {
        if (e.target === mobileMenu) {
            closeMobileMenu();
        }
    });

    // Close menu on escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !mobileMenu.classList.contains('invisible')) {
            closeMobileMenu();
        }
    });
</script>

<style>
    .nav-scrolled {
        @apply shadow-xl;
    }

    /* Smooth transitions for all interactive elements */
    nav a, nav button {
        transition: all 0.2s ease;
    }

    /* Add padding to body to account for fixed navbar */
    body {
        padding-top: 80px;
    }
</style>