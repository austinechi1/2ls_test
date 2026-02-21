<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get featured galleries
        $featuredGalleries = Gallery::with('category')
            ->where('is_featured', true)
            ->latest()
            ->take(6)
            ->get();

        // Get all categories
        $categories = Category::all();
        
        // Get services
        $services = Service::where('is_active', true)
            ->orderBy('sort_order')
            ->take(3)
            ->get();
        
        // Get testimonials
        $testimonials = Testimonial::where('is_active', true)
            ->orderBy('sort_order')
            ->take(3)
            ->get();

        return view('home', compact(
            'featuredGalleries', 
            'categories', 
            'services', 
            'testimonials'
        ));
    }
}