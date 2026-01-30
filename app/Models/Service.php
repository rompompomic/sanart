<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_lv',
        'title_en',
        'subtitle_lv',
        'subtitle_en',
        'description_lv',
        'description_en',
        'features_lv',
        'features_en',
        'icon',
        'image_path',
        'sort_order',
    ];

    protected $casts = [
        'features_lv' => 'array',
        'features_en' => 'array',
    ];
}
