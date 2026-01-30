<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_lv', 'position_en',
        'description_lv', 'description_en',
        'requirements_lv', 'requirements_en',
        'benefits_lv', 'benefits_en',
        'profession_lv', 'profession_en',
        'education_lv', 'education_en',
        'languages_lv', 'languages_en',
        'working_days_lv', 'working_days_en',
        'working_time_lv', 'working_time_en',
        'address_lv', 'address_en',
        'is_active', 'sort_order'
    ];

    protected $casts = [
        'requirements_lv' => 'array',
        'requirements_en' => 'array',
        'benefits_lv' => 'array',
        'benefits_en' => 'array',
        'is_active' => 'boolean',
    ];
}
