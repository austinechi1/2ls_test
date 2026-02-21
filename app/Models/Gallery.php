<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'cover_image', 'category_id',
        'images', 'location', 'shoot_date', 'is_featured', 'is_active', 'views'
    ];
    
    protected $casts = [
        'images' => 'array',
        'shoot_date' => 'date',
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}