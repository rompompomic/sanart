<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_lv', 'title_en', 'slug',
        'description_lv', 'description_en',
        'client_lv', 'client_en',
        'location_lv', 'location_en',
        'scope_lv', 'scope_en',
        'category_lv', 'category_en', 'status', 'year',
        'size_lv', 'size_en', 'main_image', 'gallery_images',
        'sort_order'
    ];

    protected $casts = [
        'gallery_images' => 'array',
    ];
}
