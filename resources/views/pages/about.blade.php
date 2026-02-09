@extends('layouts.app')

@section('title', 'Brandify Digital - About Us')

@section('content')
{{-- Hero Section --}}
<section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900">
    {{-- Animated Background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 via-purple-600/20 to-pink-600/20 animate-gradient"></div>
    
    {{-- Floating Shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-float-delayed"></div>
    </div>
       <img src="{{ asset('images/hero.jpg') }}" 
         alt="Hero Background" 
         class="absolute inset-0 w-full h-full object-cover opacity-10">
    <div class="relative z-10 container mx-auto px-6 text-center">
        {{-- Badge --}}
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-white/90 text-sm mb-8 animate-fade-in">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
            Our Story
        </div>
        
        <h1 class="text-5xl md:text-7xl font-black mb-6 animate-slide-up">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">
                About
            </span>
            <span class="text-white"> Brandify</span>
        </h1>
        
        <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed animate-slide-up-delayed">
            Driving digital transformation through creativity, innovation, and measurable results since 2018
        </p>
    </div>
    
    {{-- Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

{{-- Mission & Vision Section --}}
<section class="py-32 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            {{-- Content Side --}}
            <div class="lg:w-1/2 space-y-12">
                {{-- Mission --}}
                <div class="relative pl-8 border-l-4 border-gradient-to-b from-blue-500 to-purple-500">
                    <div class="absolute -left-3 top-0 w-6 h-6 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full"></div>
                    <div class="inline-block px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-bold mb-4">
                        OUR MISSION
                    </div>
                    <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-4">
                        Empowering Brands to Thrive
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        To help businesses grow online through innovative, ethical, and measurable marketing strategies 
                        that drive real results. We believe in transparent partnerships and sustainable growth.
                    </p>
                </div>
                
                {{-- Vision --}}
                <div class="relative pl-8 border-l-4 border-gradient-to-b from-purple-500 to-pink-500">
                    <div class="absolute -left-3 top-0 w-6 h-6 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full"></div>
                    <div class="inline-block px-3 py-1 bg-purple-50 text-purple-600 rounded-full text-xs font-bold mb-4">
                        OUR VISION
                    </div>
                    <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-4">
                        Leading the Digital Future
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        To be the go-to digital marketing agency known for results-driven strategies, creative excellence, 
                        and unwavering commitment to client success in an ever-evolving digital landscape.
                    </p>
                </div>

                {{-- Values List --}}
                <div class="grid grid-cols-2 gap-4 pt-6">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">Integrity</div>
                            <div class="text-sm text-gray-600">Honest & transparent</div>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">Innovation</div>
                            <div class="text-sm text-gray-600">Always evolving</div>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-pink-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">Collaboration</div>
                            <div class="text-sm text-gray-600">True partnerships</div>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-bold text-gray-900">Results</div>
                            <div class="text-sm text-gray-600">Data-driven growth</div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Image Side --}}
            <div class="lg:w-1/2 relative group">
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-500 to-purple-600 rounded-3xl blur-2xl opacity-20 group-hover:opacity-30 transition-opacity"></div>
                <img src="{{ asset('images/team.jpg') }}" 
                     alt="Our Team" 
                     class="relative rounded-3xl shadow-2xl w-full object-cover h-[600px] transform group-hover:scale-105 transition-transform duration-500">
                
                {{-- Stats Overlay --}}
                <div class="absolute -bottom-8 -left-8 right-8 bg-white p-6 rounded-2xl shadow-2xl">
                    <div class="grid grid-cols-3 gap-6 text-center">
                        <div>
                            <div class="text-3xl font-black bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">7+</div>
                            <div class="text-sm text-gray-600 mt-1">Years</div>
                        </div>
                        <div>
                            <div class="text-3xl font-black bg-clip-text text-transparent bg-gradient-to-r from-purple-600 to-pink-600">500+</div>
                            <div class="text-sm text-gray-600 mt-1">Clients</div>
                        </div>
                        <div>
                            <div class="text-3xl font-black bg-clip-text text-transparent bg-gradient-to-r from-pink-600 to-orange-600">15+</div>
                            <div class="text-sm text-gray-600 mt-1">Team</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Company Timeline --}}
<section class="py-32 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <div class="inline-block px-4 py-2 bg-blue-50 text-blue-600 rounded-full text-sm font-semibold mb-4">
                OUR JOURNEY
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                Growing
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">
                    Together
                </span>
            </h2>
        </div>

        <div class="max-w-4xl mx-auto relative">
            {{-- Timeline Line --}}
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-blue-500 via-purple-500 to-pink-500 hidden md:block"></div>

            {{-- Timeline Items --}}
            <div class="space-y-12">
                {{-- 2018 --}}
                <div class="flex items-center gap-8 md:gap-0">
                    <div class="flex-1 md:text-right md:pr-12">
                        <div class="inline-block px-4 py-2 bg-blue-50 text-blue-600 rounded-full text-sm font-bold mb-3">
                            2018
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-2">The Beginning</h3>
                        <p class="text-gray-600">Founded with a vision to help small businesses thrive online</p>
                    </div>
                    <div class="hidden md:block w-6 h-6 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full relative z-10 flex-shrink-0"></div>
                    <div class="flex-1 md:pl-12"></div>
                </div>

                {{-- 2020 --}}
                <div class="flex items-center gap-8 md:gap-0">
                    <div class="flex-1 md:pr-12"></div>
                    <div class="hidden md:block w-6 h-6 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full relative z-10 flex-shrink-0"></div>
                    <div class="flex-1 md:pl-12">
                        <div class="inline-block px-4 py-2 bg-purple-50 text-purple-600 rounded-full text-sm font-bold mb-3">
                            2020
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-2">Major Expansion</h3>
                        <p class="text-gray-600">Grew to 10+ team members and launched enterprise services</p>
                    </div>
                </div>

                {{-- 2022 --}}
                <div class="flex items-center gap-8 md:gap-0">
                    <div class="flex-1 md:text-right md:pr-12">
                        <div class="inline-block px-4 py-2 bg-pink-50 text-pink-600 rounded-full text-sm font-bold mb-3">
                            2022
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-2">Award Recognition</h3>
                        <p class="text-gray-600">Recognized as Top Digital Agency in the region</p>
                    </div>
                    <div class="hidden md:block w-6 h-6 bg-gradient-to-br from-pink-500 to-pink-600 rounded-full relative z-10 flex-shrink-0"></div>
                    <div class="flex-1 md:pl-12"></div>
                </div>

                {{-- 2025 --}}
                <div class="flex items-center gap-8 md:gap-0">
                    <div class="flex-1 md:pr-12"></div>
                    <div class="hidden md:block w-6 h-6 bg-gradient-to-br from-orange-500 to-orange-600 rounded-full relative z-10 flex-shrink-0"></div>
                    <div class="flex-1 md:pl-12">
                        <div class="inline-block px-4 py-2 bg-orange-50 text-orange-600 rounded-full text-sm font-bold mb-3">
                            2025
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-2">The Future</h3>
                        <p class="text-gray-600">500+ successful projects and counting, expanding globally</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Team Section --}}
<section class="py-32 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <div class="inline-block px-4 py-2 bg-purple-50 text-purple-600 rounded-full text-sm font-semibold mb-4">
                OUR PEOPLE
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                Meet the
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">
                    Dream Team
                </span>
            </h2>
            <p class="text-xl text-gray-600">
                Passionate experts dedicated to your success
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            {{-- Team Member 1 --}}
            <div class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-blue-200">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-3xl"></div>
                
                <div class="relative z-10 text-center">
                    <div class="relative inline-block mb-6">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full blur-xl opacity-50 group-hover:opacity-75 transition-opacity"></div>
                        <img src="{{ asset('images/team/member2.jpg') }}" 
                             alt="Alice Johnson" 
                             class="relative w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg">
                        <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center border-4 border-white">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-black text-gray-900 mb-1">Alice Johnson</h3>
                    <p class="text-blue-600 font-semibold mb-4">Founder & CEO</p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Visionary leader with 10+ years of digital marketing expertise
                    </p>
                    
                    <div class="flex justify-center gap-3">
                        <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-blue-100 rounded-xl flex items-center justify-center transition-colors group/social">
                            <svg class="w-5 h-5 text-gray-600 group-hover/social:text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-blue-100 rounded-xl flex items-center justify-center transition-colors group/social">
                            <svg class="w-5 h-5 text-gray-600 group-hover/social:text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Team Member 2 --}}
            <div class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-purple-200">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-3xl"></div>
                
                <div class="relative z-10 text-center">
                    <div class="relative inline-block mb-6">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full blur-xl opacity-50 group-hover:opacity-75 transition-opacity"></div>
                        <img src="{{ asset('images/team/member1.jpg') }}" 
                             alt="Michael Smith" 
                             class="relative w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg">
                        <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center border-4 border-white">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-black text-gray-900 mb-1">Michael Smith</h3>
                    <p class="text-purple-600 font-semibold mb-4">Head of Marketing</p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Strategic thinker with a passion for data-driven campaigns
                    </p>
                    
                    <div class="flex justify-center gap-3">
                        <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-purple-100 rounded-xl flex items-center justify-center transition-colors group/social">
                            <svg class="w-5 h-5 text-gray-600 group-hover/social:text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-purple-100 rounded-xl flex items-center justify-center transition-colors group/social">
                            <svg class="w-5 h-5 text-gray-600 group-hover/social:text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Team Member 3 --}}
            <div class="group relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-pink-200">
                <div class="absolute inset-0 bg-gradient-to-br from-pink-500/5 to-orange-500/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-3xl"></div>
                
                <div class="relative z-10 text-center">
                    <div class="relative inline-block mb-6">
                        <div class="absolute inset-0 bg-gradient-to-br from-pink-500 to-orange-600 rounded-full blur-xl opacity-50 group-hover:opacity-75 transition-opacity"></div>
                        <img src="{{ asset('images/team/member3.jpg') }}" 
                             alt="Sophia Lee" 
                             class="relative w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg">
                        <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-gradient-to-br from-pink-500 to-pink-600 rounded-full flex items-center justify-center border-4 border-white">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-black text-gray-900 mb-1">Sophia Lee</h3>
                    <p class="text-pink-600 font-semibold mb-4">Creative Director</p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Award-winning designer bringing brands to life visually
                    </p>
                    
                    <div class="flex justify-center gap-3">
                        <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-pink-100 rounded-xl flex items-center justify-center transition-colors group/social">
                            <svg class="w-5 h-5 text-gray-600 group-hover/social:text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-pink-100 rounded-xl flex items-center justify-center transition-colors group/social">
                            <svg class="w-5 h-5 text-gray-600 group-hover/social:text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
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
                Join Our Success Story
            </h2>
            <p class="text-xl md:text-2xl text-white/90 mb-12 leading-relaxed">
                Let's work together to achieve your digital marketing goals
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="/contact" class="group px-10 py-5 bg-white text-purple-600 font-black rounded-2xl shadow-2xl hover:shadow-white/50 transition-all hover:scale-105 inline-flex items-center gap-3">
                    Start Your Journey
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="/services" class="px-10 py-5 bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white font-black rounded-2xl hover:bg-white/20 transition-all hover:scale-105">
                    View Services
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