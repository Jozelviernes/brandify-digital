@extends('layouts.app')

@section('title', 'Brandify Digital - Services')

@section('content')
{{-- Hero Section with Animated Elements --}}
<section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900">
    {{-- Animated Background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 via-purple-600/20 to-pink-600/20 animate-gradient"></div>
      <img src="{{ asset('images/services.jpg') }}" 
         alt="Hero Background" 
         class="absolute inset-0 w-full h-full object-cover opacity-10">
    {{-- Floating Shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-float-delayed"></div>
    </div>
    
    <div class="relative z-10 container mx-auto px-6 text-center">
        {{-- Badge --}}
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-white/90 text-sm mb-8 animate-fade-in">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            What We Do Best
        </div>
        
        <h1 class="text-5xl md:text-7xl font-black mb-6 animate-slide-up">
            <span class="text-white">Our</span>
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">
                Services
            </span>
        </h1>
        
        <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed animate-slide-up-delayed">
            Comprehensive digital marketing solutions designed to elevate your brand and drive measurable results
        </p>
        
        {{-- Quick Stats --}}
        <div class="grid grid-cols-3 gap-8 mt-16 max-w-2xl mx-auto">
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-black text-white mb-2">6+</div>
                <div class="text-gray-400 text-sm uppercase tracking-wider">Services</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-black text-white mb-2">500+</div>
                <div class="text-gray-400 text-sm uppercase tracking-wider">Projects</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-black text-white mb-2">98%</div>
                <div class="text-gray-400 text-sm uppercase tracking-wider">Success Rate</div>
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

{{-- Main Services Section --}}
<section class="py-32 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-6">
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-20">
            <div class="inline-block px-4 py-2 bg-purple-50 text-purple-600 rounded-full text-sm font-semibold mb-4">
                CORE OFFERINGS
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                What We
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">
                    Offer
                </span>
            </h2>
            <p class="text-xl text-gray-600">
                End-to-end digital marketing services tailored to your unique business goals
            </p>
        </div>

        {{-- Services Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            
            {{-- Service 1: Social Media Management --}}
            <div id="social-media" class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-blue-200 overflow-hidden">
                {{-- Gradient Overlay --}}
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-cyan-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                
                <div class="relative z-10">
                    {{-- Icon Container --}}
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Social Media Management</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Build authentic connections with your audience through strategic content creation, community engagement, and platform optimization across all major social channels.
                    </p>
                    
                    {{-- Features List --}}
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Content calendar planning</span>
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Community management</span>
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Performance analytics</span>
                        </li>
                    </ul>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <span class="text-sm font-semibold text-gray-500">Starting at</span>
                        <span class="text-2xl font-black text-blue-600">$499<span class="text-sm text-gray-500 font-normal">/mo</span></span>
                    </div>
                </div>
            </div>

            {{-- Service 2: SEO Optimization --}}
            <div id="seo" class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-purple-200 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                
                <div class="relative z-10">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-black text-gray-900 mb-4">SEO Optimization</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Dominate search rankings with comprehensive SEO strategies that drive organic traffic, improve visibility, and convert visitors into customers.
                    </p>
                    
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Keyword research & strategy</span>
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>On-page optimization</span>
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-purple-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Link building campaigns</span>
                        </li>
                    </ul>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <span class="text-sm font-semibold text-gray-500">Starting at</span>
                        <span class="text-2xl font-black text-purple-600">$799<span class="text-sm text-gray-500 font-normal">/mo</span></span>
                    </div>
                </div>
            </div>

            {{-- Service 3: Content Creation --}}
            <div id="content" class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-pink-200 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-pink-500/5 to-orange-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                
                <div class="relative z-10">
                    <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Content Creation</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Captivating stories that resonate. From blogs to videos, we create content that engages your audience and drives meaningful action.
                    </p>
                    
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-pink-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Blog writing & copywriting</span>
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-pink-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Graphic design & visuals</span>
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-pink-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Video production</span>
                        </li>
                    </ul>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <span class="text-sm font-semibold text-gray-500">Starting at</span>
                        <span class="text-2xl font-black text-pink-600">$599<span class="text-sm text-gray-500 font-normal">/mo</span></span>
                    </div>
                </div>
            </div>

            {{-- Service 4: Paid Advertising --}}
            <div id="ads" class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-green-200 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-emerald-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                
                <div class="relative z-10">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Paid Advertising</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Maximize ROI with targeted ad campaigns across Google, Facebook, Instagram, and LinkedIn. Data-driven strategies that deliver results.
                    </p>
                    
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Google Ads campaigns</span>
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Social media advertising</span>
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Retargeting strategies</span>
                        </li>
                    </ul>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <span class="text-sm font-semibold text-gray-500">Starting at</span>
                        <span class="text-2xl font-black text-green-600">$899<span class="text-sm text-gray-500 font-normal">/mo</span></span>
                    </div>
                </div>
            </div>

            {{-- Service 5: Brand Strategy --}}
            <div id="branding" class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-indigo-200 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/5 to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                
                <div class="relative z-10">
                    <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Brand Strategy</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Define and refine your brand identity. We help you create a compelling brand story that connects with your target audience.
                    </p>
                    
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Brand positioning & messaging</span>
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Visual identity design</span>
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Brand guidelines</span>
                        </li>
                    </ul>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <span class="text-sm font-semibold text-gray-500">Starting at</span>
                        <span class="text-2xl font-black text-indigo-600">$1,299<span class="text-sm text-gray-500 font-normal">/project</span></span>
                    </div>
                </div>
            </div>

            {{-- Service 6: Analytics & Reporting --}}
            <div class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-yellow-200 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/5 to-orange-500/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                
                <div class="relative z-10">
                    <div class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-transform shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Analytics & Reporting</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Make informed decisions with comprehensive analytics and actionable insights. Track performance and measure what matters.
                    </p>
                    
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Custom dashboards</span>
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Performance tracking</span>
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-700">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Monthly reports</span>
                        </li>
                    </ul>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <span class="text-sm font-semibold text-gray-500">Starting at</span>
                        <span class="text-2xl font-black text-yellow-600">$399<span class="text-sm text-gray-500 font-normal">/mo</span></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-purple-600 to-pink-600"></div>
    
    <div class="absolute inset-0 overflow-hidden opacity-20">
        <div class="absolute -top-1/2 -left-1/4 w-96 h-96 bg-white rounded-full blur-3xl animate-float"></div>
        <div class="absolute -bottom-1/2 -right-1/4 w-96 h-96 bg-white rounded-full blur-3xl animate-float-delayed"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-6xl font-black text-white mb-6 leading-tight">
                Ready to Get Started?
            </h2>
            <p class="text-xl md:text-2xl text-white/90 mb-12 leading-relaxed">
                Let's create a custom strategy that drives real results for your business
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="/contact" class="group px-10 py-5 bg-white text-purple-600 font-black rounded-2xl shadow-2xl hover:shadow-white/50 transition-all hover:scale-105 inline-flex items-center gap-3">
                    Get Your Free Consultation
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="/portfolio" class="px-10 py-5 bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white font-black rounded-2xl hover:bg-white/20 transition-all hover:scale-105">
                    View Our Work
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Custom Animations --}}
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

.animate-fade-in {
    animation: fade-in 0.8s ease-out;
}

.animate-slide-up {
    animation: slide-up 0.8s ease-out;
}

.animate-slide-up-delayed {
    animation: slide-up 0.8s ease-out 0.2s both;
}
</style>

@endsection