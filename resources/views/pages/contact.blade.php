@extends('layouts.app')

@section('title', 'Brandify Digital - Contact Us')

@section('content')
{{-- Hero Section --}}
<section class="relative min-h-[60vh] flex items-start justify-center overflow-hidden bg-gradient-to-br from-blue-700 via-purple-700 to-teal-500">
    {{-- Background Image Overlay --}}
    <img src="{{ asset('images/contact-hero.jpg') }}" alt="Contact" class="absolute inset-0 w-full h-full object-cover opacity-40">

    {{-- Floating Shapes --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-float-delayed"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 text-center px-6 pt-24">
        <h1 class="text-5xl md:text-6xl font-black text-white drop-shadow-lg animate-slide-up">
            Get In Touch
        </h1>
        <p class="text-lg md:text-xl text-white mt-4 drop-shadow-md animate-slide-up-delayed">
            We'd love to hear from you!
        </p>
    </div>
</section>

{{-- Contact Form Section --}}
<section class="container mx-auto px-6 py-24 max-w-3xl">
    <h2 class="text-4xl font-black mb-12 text-gray-900 text-center">
        Send Us a Message
    </h2>

    <form action="#" method="POST" class="bg-white shadow-2xl rounded-3xl p-10 space-y-6">
        <div>
            <label class="block text-gray-700 font-semibold mb-2" for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mb-2" for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your Email" class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
        </div>
        <div>
            <label class="block text-gray-700 font-semibold mb-2" for="message">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Your Message" class="w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition"></textarea>
        </div>
        <button type="submit" class="bg-gradient-to-r from-blue-500 to-teal-400 text-white font-bold px-6 py-3 rounded-full shadow-lg hover:scale-105 transition transform w-full">
            Send Message
        </button>
    </form>

    {{-- Contact Info --}}
    <div class="mt-16 text-center space-y-4 text-gray-700">
        <p>Email: <a href="mailto:info@brandifydigital.com" class="text-blue-600 hover:underline">info@brandifydigital.com</a></p>
        <p>Phone: <a href="tel:+1234567890" class="text-blue-600 hover:underline">+1 (234) 567-890</a></p>
        <p>Address: 123 Digital Ave, Marketing City, Country</p>
    </div>
</section>

{{-- Custom Animations --}}
<style>
@keyframes float {
    0%, 100% { transform: translate(0,0) scale(1); }
    33% { transform: translate(30px,-30px) scale(1.1); }
    66% { transform: translate(-20px,20px) scale(0.9); }
}
@keyframes float-delayed {
    0%,100% { transform: translate(0,0) scale(1); }
    33% { transform: translate(-30px,30px) scale(1.1); }
    66% { transform: translate(20px,-20px) scale(0.9); }
}
@keyframes slide-up {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-float { animation: float 20s ease-in-out infinite; }
.animate-float-delayed { animation: float-delayed 25s ease-in-out infinite; }
.animate-slide-up { animation: slide-up 0.8s ease-out; }
.animate-slide-up-delayed { animation: slide-up 0.8s ease-out 0.2s both; }
</style>
@endsection
