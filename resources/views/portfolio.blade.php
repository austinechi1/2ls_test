@extends('layouts.app')

@section('title', 'Portfolio - 2Ls Photography')

@section('content')
<!-- Portfolio Header -->
<section class="w-full px-8 md:px-16 lg:px-24 pt-40 pb-16">
    <h1 class="text-7xl md:text-8xl font-light mb-6">Portfolio</h1>
    <p class="text-xl md:text-2xl font-light text-gray-500 max-w-3xl">
        A collection of moments, stories, and memories captured through my lens.
    </p>
</section>

<!-- Portfolio Grid - 3 columns -->
<section class="w-full px-8 md:px-16 lg:px-24 pb-24">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Wedding Gallery Card -->
        <a href="/portfolio/wedding" class="block group">
            <div class="overflow-hidden bg-gray-100 aspect-[4/5]">
                <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=800&auto=format" 
                     alt="Wedding Gallery" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
            <div class="mt-4">
                <h3 class="text-xl font-light text-gray-900">Wedding Gallery</h3>
                <p class="text-sm text-gray-400">View all wedding photos →</p>
            </div>
        </a>
        
        <!-- Portrait Sessions Card -->
        <a href="/portfolio/portrait" class="block group">
            <div class="overflow-hidden bg-gray-100 aspect-[4/5]">
                <img src="https://images.unsplash.com/photo-1531741409848-2d3a4d5c1a9c?w=800&auto=format" 
                     alt="Portrait Sessions" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
            <div class="mt-4">
                <h3 class="text-xl font-light text-gray-900">Portrait Sessions</h3>
                <p class="text-sm text-gray-400">View all portraits →</p>
            </div>
        </a>
        
        <!-- Graduation Shoots Card -->
        <a href="/portfolio/graduation" class="block group">
            <div class="overflow-hidden bg-gray-100 aspect-[4/5]">
                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800&auto=format" 
                     alt="Graduation Shoots" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
            <div class="mt-4">
                <h3 class="text-xl font-light text-gray-900">Graduation Shoots</h3>
                <p class="text-sm text-gray-400">View all graduation photos →</p>
            </div>
        </a>
        
        <!-- My Brand Sessions Card -->
        <a href="/portfolio/brand" class="block group">
            <div class="overflow-hidden bg-gray-100 aspect-[4/5]">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800&auto=format" 
                     alt="My Brand Sessions" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
            <div class="mt-4">
                <h3 class="text-xl font-light text-gray-900">My Brand Sessions</h3>
                <p class="text-sm text-gray-400">View all brand photos →</p>
            </div>
        </a>
        
        <!-- Maternity Card -->
        <a href="/portfolio/maternity" class="block group">
            <div class="overflow-hidden bg-gray-100 aspect-[4/5]">
                <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=800&auto=format" 
                     alt="Maternity" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
            <div class="mt-4">
                <h3 class="text-xl font-light text-gray-900">Maternity</h3>
                <p class="text-sm text-gray-400">View all maternity photos →</p>
            </div>
        </a>
        
        <!-- Boudoir Shoot Card -->
        <a href="/portfolio/boudoir" class="block group">
            <div class="overflow-hidden bg-gray-100 aspect-[4/5]">
                <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=800&auto=format" 
                     alt="Boudoir Shoot" 
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
            </div>
            <div class="mt-4">
                <h3 class="text-xl font-light text-gray-900">Boudoir Shoot</h3>
                <p class="text-sm text-gray-400">View all boudoir photos →</p>
            </div>
        </a>
    </div>
</section>
@endsection