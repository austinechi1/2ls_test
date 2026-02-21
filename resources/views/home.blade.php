@extends('layouts.app')

@section('title', '2Ls Photography')

@section('content')
<!-- HERO/BANNER SECTION -->
<section class="relative w-full h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/hero-bg.jpg') }}" 
             alt="Hero Background" 
             class="w-full h-full object-cover object-[50%_20%]">
        
        <!-- MUCH LIGHTER dark overlay - only 10% dark -->
        <div class="absolute inset-0 bg-black/10"></div>
    </div>
    
    <!-- Hero Text -->
    <div class="relative text-center text-white px-4">
        <p class="text-sm tracking-[0.3em] uppercase mb-4">Est. 2026</p>
        <h1 class="text-6xl md:text-7xl font-light leading-tight mb-6">
            Telling stories<br>
            <span class="text-white/90">through light</span>
        </h1>
    </div>
</section>

<!-- ABOUT SECTION - Llinda's Story -->
<!-- ABOUT SECTION - Short version for homepage -->
<section id="about" class="w-full px-8 md:px-16 lg:px-24 py-32">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-6xl md:text-7xl font-light mb-4">Hi, I'm <span class="font-medium">Llinda!</span></h2>
            <p class="text-2xl md:text-3xl font-light text-gray-600 mb-6">The photographer behind 2Ls Photography.</p>
            <p class="text-gray-500 font-light leading-relaxed">
                I'm a Maryland-based photographer with a deep love for real moments, real people, and images that feel like you, not a stiff version of you.
            </p>
            <a href="/about" class="inline-block mt-8 text-sm font-light tracking-wide border-b border-gray-900 pb-1 hover:text-gray-600 transition">Read my full story →</a>
        </div>
        <div class="aspect-[3/4] overflow-hidden bg-gray-100">
            <img src="{{ asset('images/llinda.jpg') }}" alt="Llinda" class="w-full h-full object-cover">
        </div>
    </div>
</section>

<!-- OUR STORIES SECTION -->
<section class="w-full px-8 md:px-16 lg:px-24 py-20">
    <div class="flex justify-between items-end mb-10">
        <div>
            <h2 class="text-3xl md:text-4xl font-light mb-1">Our Stories</h2>
            <p class="text-sm text-gray-400 font-light">Moments that matter</p>
        </div>
        <a href="/portfolio" class="text-xs font-light text-gray-500 hover:text-gray-900 transition border-b border-gray-300 pb-0.5">
            View all →
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Wedding Preview -->
        <a href="/portfolio/wedding" class="group">
            <div class="aspect-[4/5] overflow-hidden bg-gray-100">
                <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=800&auto=format" 
                     alt="Wedding" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
        </a>
        
        <!-- Portrait Preview -->
        <a href="/portfolio/portrait" class="group">
            <div class="aspect-[4/5] overflow-hidden bg-gray-100">
                <img src="https://images.unsplash.com/photo-1531741409848-2d3a4d5c1a9c?w=800&auto=format" 
                     alt="Portrait" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
        </a>
        
        <!-- Maternity Preview -->
        <a href="/portfolio/maternity" class="group">
            <div class="aspect-[4/5] overflow-hidden bg-gray-100">
                <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=800&auto=format" 
                     alt="Maternity" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
        </a>
    </div>
</section>

<!-- SERVICES SECTION -->
<section id="services" class="w-full px-8 md:px-16 lg:px-24 py-32">
    <div class="flex justify-between items-end mb-16">
        <h2 class="text-3xl md:text-4xl font-light tracking-wide">Services & Pricing</h2>
        <a href="#" class="text-xs font-light text-gray-500 hover:text-gray-900 transition border-b border-gray-300 pb-0.5">View all →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        @forelse($services as $service)
        <div class="group border border-gray-100 p-8 hover:shadow-lg transition">
            <h3 class="text-xl font-light mb-3">{{ $service->name }}</h3>
            <p class="text-gray-400 text-sm font-light mb-4 leading-relaxed">{{ $service->description }}</p>
            <div class="flex justify-between items-center text-sm mb-4">
                <span class="font-medium text-2xl">${{ number_format($service->price) }}</span>
                <span class="text-gray-400">{{ $service->duration }}</span>
            </div>
            <p class="text-xs text-gray-400 font-light mb-6">{{ $service->inclusions }}</p>
            <a href="#" class="inline-block w-full text-center px-6 py-3 border border-gray-900 text-sm tracking-wide hover:bg-gray-900 hover:text-white transition rounded-full">
                Book Now
            </a>
        </div>
        @empty
        <p class="text-gray-400 col-span-3 text-center py-20">No services yet</p>
        @endforelse
    </div>
</section>


<!-- TESTIMONIALS SECTION -->
<section id="testimonials" class="w-full px-8 md:px-16 lg:px-24 py-32 bg-gray-50">
    <h2 class="text-3xl md:text-4xl font-light tracking-wide text-center mb-16">Client Reviews</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <!-- Testimonial 1 -->
        <div class="text-center">
            <div class="mb-4">
                <span class="text-yellow-400 text-2xl">★★★★★</span>
            </div>
            <p class="text-gray-600 font-light leading-relaxed mb-6">"Llinda captured our wedding day perfectly. The photos are timeless and beautiful. She made us feel so comfortable!"</p>
            <p class="font-medium">Sarah & Michael</p>
            <p class="text-sm text-gray-400">Wedding, 2025</p>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="text-center">
            <div class="mb-4">
                <span class="text-yellow-400 text-2xl">★★★★★</span>
            </div>
            <p class="text-gray-600 font-light leading-relaxed mb-6">"I was nervous for my portrait session but Llinda made it so fun and natural. The photos exceeded my expectations!"</p>
            <p class="font-medium">Jessica R.</p>
            <p class="text-sm text-gray-400">Portrait Session</p>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="text-center">
            <div class="mb-4">
                <span class="text-yellow-400 text-2xl">★★★★★</span>
            </div>
            <p class="text-gray-600 font-light leading-relaxed mb-6">"Our family photos turned out amazing! Llinda was so patient with our kids and captured such genuine moments."</p>
            <p class="font-medium">The Johnson Family</p>
            <p class="text-sm text-gray-400">Family Session</p>
        </div>
    </div>
</section>


<!-- CONTACT SECTION -->
<section id="contact" class="w-full px-8 md:px-16 lg:px-24 py-32 bg-gray-50">
    <h2 class="text-3xl md:text-4xl font-light tracking-wide mb-16 text-center">Let's Connect</h2>
    
    <div class="max-w-2xl mx-auto">
        <form class="space-y-6">
            <div>
                <input type="text" placeholder="Your Name" 
                       class="w-full px-6 py-4 border border-gray-200 rounded-lg focus:outline-none focus:border-gray-400 transition">
            </div>
            <div>
                <input type="email" placeholder="Email Address" 
                       class="w-full px-6 py-4 border border-gray-200 rounded-lg focus:outline-none focus:border-gray-400 transition">
            </div>
            <div>
                <textarea rows="5" placeholder="Tell me about your project..." 
                          class="w-full px-6 py-4 border border-gray-200 rounded-lg focus:outline-none focus:border-gray-400 transition"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="px-12 py-4 bg-gray-900 text-white text-sm tracking-wide hover:bg-gray-800 transition rounded-full">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</section>
@endsection