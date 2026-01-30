<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title_lv');
            $table->string('title_en')->nullable();
            $table->string('subtitle_lv')->nullable();
            $table->string('subtitle_en')->nullable();
            $table->text('description_lv')->nullable();
            $table->text('description_en')->nullable();
            $table->json('features_lv')->nullable();
            $table->json('features_en')->nullable();
            $table->string('icon')->nullable();
            $table->string('image_path')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
