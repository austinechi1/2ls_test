<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $gallery->title }} | Studio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .nav-link { position: relative; }
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -4px;
            left: 0;
            background-color: currentColor;
            transition: width 0.3s ease;
        }
        .nav-link:hover:after { width: 100%; }
    </style>
</head>
<body class="bg-white text-gray-900 antialiased">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/80 backdrop-blur-sm z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-lg font-light tracking-[0.3em] uppercase">Studio</a>
                <div class="hidden md:flex space-x-12 text-sm font-light tracking-wide">
                    <a href="/" class="nav-link text-gray-600 hover:text-gray-900 transition">Work</a>
                    <a href="#" class="nav-link text-gray-600 hover:text-gray-900 transition">Services</a>
                    <a href="#" class="nav-link text-gray-600 hover:text-gray-900 transition">Journal</a>
                    <a href="#" class="nav-link text-gray-600 hover:text-gray-900 transition">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Gallery Header -->
    <section class="pt-32 pb-16 px-6 max-w-7xl mx-auto">
        <div class="max-w-3xl">
            <p class="text-sm tracking-[0.3em] uppercase text-gray-400 mb-4">{{ $gallery->category->name ?? 'Editorial' }}</p>
            <h1 class="text-5xl md:text-6xl font-light mb-6">{{ $gallery->title }}</h1>
            <p class="text-lg text-gray-500 font-light leading-relaxed">{{ $gallery->description }}</p>
            @if($gallery->location)
                <p class="text-sm text-gray-400 mt-4">📍 {{ $gallery->location }}</p>
            @endif
        </div>
    </section>

    <!-- Gallery Images -->
    <section class="px-6 max-w-7xl mx-auto pb-32">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @php
                $images = is_array($gallery->images) ? $gallery->images : json_decode($gallery->images, true);
            @endphp
            
            @foreach($images as $index => $image)
                <div class="aspect-[4/5] bg-gray-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=800&auto=format" 
                         alt="{{ $gallery->title }} - Image {{ $index + 1 }}"
                         class="w-full h-full object-cover hover:scale-105 transition duration-700">
                </div>
            @endforeach
        </div>
    </section>

    <!-- Related Galleries -->
    @if($related->count() > 0)
    <section class="px-6 max-w-7xl mx-auto pb-32 border-t border-gray-100 pt-32">
        <h2 class="text-3xl font-light mb-12">More from {{ $gallery->category->name ?? 'this collection' }}</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($related as $relatedGallery)
            <a href="/gallery/{{ $relatedGallery->slug }}" class="group">
                <div class="overflow-hidden bg-gray-100 aspect-[4/5]">
                    <img src="{{ $relatedGallery->cover_image }}" 
                         alt="{{ $relatedGallery->title }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                </div>
                <div class="mt-4">
                    <h3 class="text-sm font-medium tracking-wide">{{ $relatedGallery->title }}</h3>
                    <p class="text-xs text-gray-400 mt-1">{{ $relatedGallery->category->name ?? 'Editorial' }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </section>
    @endif

    <!-- Footer -->
    <footer class="border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="flex flex-col md:flex-row justify-between items-center text-xs text-gray-400 font-light tracking-wide">
                <p>© 2026 Studio Photography</p>
                <div class="flex space-x-8 mt-4 md:mt-0">
                    <a href="#" class="hover:text-gray-900 transition">Instagram</a>
                    <a href="#" class="hover:text-gray-900 transition">Twitter</a>
                    <a href="#" class="hover:text-gray-900 transition">hello@studio.com</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>