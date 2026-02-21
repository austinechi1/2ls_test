@extends('layouts.app')

@section('title', 'Portrait Gallery - 2Ls Photography')

@section('content')
<!-- Gallery Header -->
<section class="w-full px-8 md:px-16 lg:px-24 pt-40 pb-16">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-6xl md:text-7xl font-light">Portrait Gallery</h1>
        <a href="/portfolio" class="text-sm font-light text-gray-500 hover:text-gray-900 transition flex items-center">
            ← Back to Portfolio
        </a>
    </div>
    <p class="text-xl text-gray-500 font-light max-w-2xl">
        Capturing personalities, expressions, and authentic moments.
    </p>
</section>

<!-- Gallery Grid - 3 columns of images -->
<section class="w-full px-8 md:px-16 lg:px-24 pb-24">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Portrait Photo 1 -->
        <div class="aspect-[4/5] overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1531741409848-2d3a4d5c1a9c?w=800&auto=format" 
                 alt="Portrait photo 1" 
                 class="w-full h-full object-cover hover:scale-105 transition duration-700">
        </div>
        
        <!-- Portrait Photo 2 -->
        <div class="aspect-[4/5] overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1531741409848-2d3a4d5c1a9c?w=800&auto=format" 
                 alt="Portrait photo 2" 
                 class="w-full h-full object-cover hover:scale-105 transition duration-700">
        </div>
        
        <!-- Portrait Photo 3 -->
        <div class="aspect-[4/5] overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1531741409848-2d3a4d5c1a9c?w=800&auto=format" 
                 alt="Portrait photo 3" 
                 class="w-full h-full object-cover hover:scale-105 transition duration-700">
        </div>
        
        <!-- Portrait Photo 4 -->
        <div class="aspect-[4/5] overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1531741409848-2d3a4d5c1a9c?w=800&auto=format" 
                 alt="Portrait photo 4" 
                 class="w-full h-full object-cover hover:scale-105 transition duration-700">
        </div>
        
        <!-- Portrait Photo 5 -->
        <div class="aspect-[4/5] overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1531741409848-2d3a4d5c1a9c?w=800&auto=format" 
                 alt="Portrait photo 5" 
                 class="w-full h-full object-cover hover:scale-105 transition duration-700">
        </div>
        
        <!-- Portrait Photo 6 -->
        <div class="aspect-[4/5] overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1531741409848-2d3a4d5c1a9c?w=800&auto=format" 
                 alt="Portrait photo 6" 
                 class="w-full h-full object-cover hover:scale-105 transition duration-700">
        </div>
        
    </div>
</section>
@endsection