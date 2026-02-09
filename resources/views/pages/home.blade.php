@extends('layouts.app')

@section('title', 'Brandify Digital - Home')

@section('content')
{{-- Hero Section with Parallax Effect --}}
<section class="-mt-30 relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900">
    {{-- Animated Background Gradient --}}
    <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 via-purple-600/20 to-pink-600/20 animate-gradient"></div>
    
    {{-- Floating Shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-float-delayed"></div>
        <div class="absolute top-1/2 right-1/3 w-64 h-64 bg-pink-500/10 rounded-full blur-3xl animate-float-slow"></div>
    </div>
    <img src="{{ asset('images/hero.jpg') }}" 
         alt="Hero Background" 
         class="absolute inset-0 w-full h-full object-cover opacity-10">
    <div class="relative container mx-auto px-6 py-32 z-10">
        <div class="max-w-5xl mx-auto text-center">
            {{-- Badge --}}
            <div class="mt-5 inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-white/90 text-sm mb-8 animate-fade-in">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                Digital Marketing Excellence
            </div>
            
            {{-- Main Headline --}}
            <h1 class="text-6xl md:text-8xl font-black mb-6 animate-slide-up">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">
                    Elevate Your
                </span>
                <br>
                <span class="text-white">Digital Presence</span>
            </h1>
            
            <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed animate-slide-up-delayed">
                Transform your brand with cutting-edge marketing strategies powered by data, creativity, and innovation.
            </p>
            
            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-fade-in-delayed">
                <a href="/services" class="group relative px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-bold rounded-xl overflow-hidden transition-all hover:scale-105 hover:shadow-2xl hover:shadow-purple-500/50">
                    <span class="relative z-10">Explore Services</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </a>
                <a href="/contact" class="px-8 py-4 bg-white/10 backdrop-blur-sm border border-white/20 text-white font-bold rounded-xl hover:bg-white/20 transition-all hover:scale-105">
                    Get in Touch
                </a>
            </div>
            
            {{-- Stats --}}
            <div class="grid grid-cols-3 gap-8 mt-10 max-w-3xl mx-auto">
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-black text-white mb-2">500+</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Projects</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-black text-white mb-2">98%</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Satisfaction</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-black text-white mb-2">24/7</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Support</div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

{{-- About Section with Split Layout --}}
<section class="relative py-32 bg-white overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgb(0 0 0) 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            {{-- Image Side --}}
            <div class="lg:w-1/2 relative group">
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-500 to-purple-600 rounded-3xl blur-2xl opacity-20 group-hover:opacity-30 transition-opacity"></div>
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" 
                     alt="Team working" 
                     class="relative rounded-3xl shadow-2xl w-full object-cover h-[500px] transform group-hover:scale-105 transition-transform duration-500">
                
                {{-- Floating Card --}}
                <div class="absolute -bottom-8 -right-8 bg-white p-6 rounded-2xl shadow-2xl border border-gray-100">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-black text-gray-900">+250%</div>
                            <div class="text-sm text-gray-600">Avg. Growth</div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Content Side --}}
            <div class="lg:w-1/2 space-y-6">
                <div class="inline-block px-4 py-2 bg-blue-50 text-blue-600 rounded-full text-sm font-semibold mb-4">
                    WHO WE ARE
                </div>
                
                <h2 class="text-5xl md:text-6xl font-black text-gray-900 leading-tight">
                    Your Partner in
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">
                        Digital Success
                    </span>
                </h2>
                
                <p class="text-lg text-gray-600 leading-relaxed">
                    At Brandify Digital, we don't just create campaigns—we craft experiences that resonate. 
                    Our holistic approach combines creativity with data-driven insights to deliver results that matter.
                </p>
                
                <p class="text-lg text-gray-600 leading-relaxed">
                    From emerging startups to established enterprises, we've helped hundreds of brands amplify 
                    their voice and achieve unprecedented growth in the digital landscape.
                </p>
                
                {{-- Features List --}}
                <div class="grid grid-cols-2 gap-4 pt-6">
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">Expert Team</div>
                            <div class="text-sm text-gray-600">Industry veterans</div>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">Proven Results</div>
                            <div class="text-sm text-gray-600">Track record of success</div>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">Custom Strategy</div>
                            <div class="text-sm text-gray-600">Tailored solutions</div>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">24/7 Support</div>
                            <div class="text-sm text-gray-600">Always available</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Services Section with Modern Cards --}}
<section class="py-32 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <div class="inline-block px-4 py-2 bg-purple-50 text-purple-600 rounded-full text-sm font-semibold mb-4">
                WHAT WE DO
            </div>
            <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">
                Our Core
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">
                    Services
                </span>
            </h2>
            <p class="text-xl text-gray-600">
                Comprehensive digital marketing solutions designed to accelerate your growth
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
            {{-- Service Card 1 --}}
            <div class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-blue-200 overflow-hidden">
                {{-- Gradient Overlay --}}
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                
                <div class="relative z-10">
                    {{-- Icon --}}
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Social Media Management</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Build authentic connections with your audience through strategic content creation, 
                        community engagement, and data-driven social strategies.
                    </p>
                    
                    <a href="/services#social-media" class="inline-flex items-center gap-2 text-blue-600 font-bold group-hover:gap-4 transition-all">
                        Learn More
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Service Card 2 --}}
            <div class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-purple-200 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-black text-gray-900 mb-4">SEO Optimization</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Dominate search rankings with comprehensive SEO strategies that drive organic traffic, 
                        improve visibility, and boost conversions.
                    </p>
                    
                    <a href="/services#seo" class="inline-flex items-center gap-2 text-purple-600 font-bold group-hover:gap-4 transition-all">
                        Learn More
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Service Card 3 --}}
            <div class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-pink-200 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-pink-500/5 to-orange-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Content Creation</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Captivating stories that resonate. From blogs to videos, we create content 
                        that engages your audience and drives meaningful action.
                    </p>
                    
                    <a href="/services#content" class="inline-flex items-center gap-2 text-pink-600 font-bold group-hover:gap-4 transition-all">
                        Learn More
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section with Modern Design --}}
<section class="relative py-32 overflow-hidden">
    {{-- Gradient Background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-purple-600 to-pink-600"></div>
    
    {{-- Animated Shapes --}}
    <div class="absolute inset-0 overflow-hidden opacity-20">
        <div class="absolute -top-1/2 -left-1/4 w-96 h-96 bg-white rounded-full blur-3xl animate-float"></div>
        <div class="absolute -bottom-1/2 -right-1/4 w-96 h-96 bg-white rounded-full blur-3xl animate-float-delayed"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-5xl md:text-7xl font-black text-white mb-6 leading-tight">
                Ready to Transform
                <br>
                Your Brand?
            </h2>
            <p class="text-xl md:text-2xl text-white/90 mb-12 leading-relaxed">
                Let's create something extraordinary together. Schedule a free consultation 
                and discover how we can elevate your digital presence.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="/services" class="group px-10 py-5 bg-white text-purple-600 font-black rounded-2xl shadow-2xl hover:shadow-white/50 transition-all hover:scale-105 inline-flex items-center gap-3">
                    Explore Services
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="/contact" class="px-10 py-5 bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white font-black rounded-2xl hover:bg-white/20 transition-all hover:scale-105">
                    Start Your Project
                </a>
            </div>
            
            {{-- Trust Indicators --}}
            <div class="mt-16 flex flex-wrap justify-center items-center gap-8 text-white/80">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <span class="text-sm font-semibold">5-Star Rated</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm font-semibold">Trusted by 500+ Brands</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm font-semibold">Fast Turnaround</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Custom Animations Styles --}}
<style>
@keyframes gradient {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

@keyframes float {
    0%, 100% { transform: translate(0, 0) scale(1); }
    33% { transform: translate(30px, -30px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
}

@keyframes float-delayed {
    0%, 100% { transform: translate(0, 0) scale(1); }
    33% { transform: translate(-30px, 30px) scale(1.1); }
    66% { transform: translate(20px, -20px) scale(0.9); }
}

@keyframes float-slow {
    0%, 100% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(15px, -15px) scale(1.05); }
}

@keyframes fade-in {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slide-up {
    from { 
        opacity: 0;
        transform: translateY(30px);
    }
    to { 
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-gradient {
    background-size: 200% 200%;
    animation: gradient 15s ease infinite;
}

.animate-float {
    animation: float 20s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 25s ease-in-out infinite;
}

.animate-float-slow {
    animation: float-slow 30s ease-in-out infinite;
}

.animate-fade-in {
    animation: fade-in 0.8s ease-out;
}

.animate-fade-in-delayed {
    animation: fade-in 1s ease-out 0.3s both;
}

.animate-slide-up {
    animation: slide-up 0.8s ease-out;
}

.animate-slide-up-delayed {
    animation: slide-up 0.8s ease-out 0.2s both;
}
</style>
@endsection