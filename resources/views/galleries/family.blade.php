@extends('layouts.app')

@section('title', 'Family Gallery - 2Ls Photography')

@section('content')
<section class="w-full px-8 md:px-16 lg:px-24 pt-40 pb-16">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-6xl md:text-7xl font-light">Family Gallery</h1>
        <a href="/portfolio" class="text-sm font-light text-gray-500 hover:text-gray-900 transition">
            ← Back to Portfolio
        </a>
    </div>
</section>

<section class="w-full px-8 md:px-16 lg:px-24 pb-24">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="aspect-[4/5] bg-gray-100"></div>
        <div class="aspect-[4/5] bg-gray-100"></div>
        <div class="aspect-[4/5] bg-gray-100"></div>
    </div>
</section>
@endsection