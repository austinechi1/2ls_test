<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function show($slug)
    {
        // Find the gallery by slug
        $gallery = Gallery::with('category')
            ->where('slug', $slug)
            ->firstOrFail();
        
        // Get related galleries (same category)
        $related = Gallery::with('category')
            ->where('category_id', $gallery->category_id)
            ->where('id', '!=', $gallery->id)
            ->where('is_active', true)
            ->take(3)
            ->get();
        
        return view('gallery', compact('gallery', 'related'));
    }
}