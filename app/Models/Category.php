<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'cover_image', 'is_active', 'sort_order'];
    
    // Define the relationship to galleries
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}