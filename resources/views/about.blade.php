@extends('layouts.app')

@section('title', 'About Llinda - 2Ls Photography')

@section('content')
<!-- Full About Page Content -->
<section class="w-full px-8 md:px-16 lg:px-24 pt-40 pb-24">
    <h1 class="text-7xl md:text-8xl font-light mb-12">About <span class="font-medium">Llinda</span></h1>
    
    <!-- Main Story -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mb-24">
        <div>
            <p class="text-2xl font-light text-gray-700 mb-8">The photographer behind 2Ls Photography.</p>
            <div class="space-y-6 text-gray-600 font-light leading-relaxed">
                <p>I'm a Maryland-based photographer with a deep love for real moments, real people, and images that feel like you, not a stiff version of you.</p>
                <p>Photography found me through connection — the quiet confidence in a glance, the joy that sneaks up mid-laugh, the beauty in everyday milestones. I specialize in portraits, lifestyle sessions, and creative shoots that feel relaxed, expressive, and intentional. No awkward posing marathons here. I guide you, gently hype you up, and let the magic happen naturally.</p>
                <p>Outside of photography, I'm a full-time FedEx driver, a DMV photographer, a single mom, and a lifelong observer of details — which might explain why I notice the little things that make your images stand out.</p>
            </div>
        </div>
        <div class="aspect-[3/4] overflow-hidden bg-gray-100">
            <img src="{{ asset('images/llinda.jpg') }}" alt="Llinda" class="w-full h-full object-cover">
        </div>
    </div>

    <!-- My Approach Section -->
    <div class="mb-24">
        <h2 class="text-4xl md:text-5xl font-light mb-12">My <span class="font-medium">Approach</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div>
                <h3 class="text-2xl font-light mb-4">Confidence</h3>
                <p class="text-gray-500 font-light">Building trust so the real you comes through. I create a space where you can show up as yourself.</p>
            </div>
            <div>
                <h3 class="text-2xl font-light mb-4">Storytelling</h3>
                <p class="text-gray-500 font-light">Capturing the feelings behind the smile. Every photo tells your unique story.</p>
            </div>
            <div>
                <h3 class="text-2xl font-light mb-4">Natural Movement</h3>
                <p class="text-gray-500 font-light">Effortless, flowing moments. No stiff posing, just real connections.</p>
            </div>
        </div>
    </div>

    <!-- Values/Connection Section -->
    <div class="bg-gray-50 p-16 mb-24">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-light mb-8">Let's Connect First</h2>
            <p class="text-gray-600 font-light leading-relaxed mb-8">
                All relationships are built on trust and shared values. Before signing any contracts, we'll have a call or meeting to make sure we're a perfect fit because your experience should feel personal, relaxed, and meaningful.
            </p>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <a href="/contact" class="px-8 py-3 bg-gray-900 text-white rounded-full hover:bg-gray-800 transition">Contact Me</a>
                <a href="/portfolio" class="px-8 py-3 border border-gray-900 rounded-full hover:bg-gray-900 hover:text-white transition">Explore My Portfolio</a>
            </div>
        </div>
    </div>
</section>
@endsection