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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title_lv');
            $table->string('title_en')->nullable();
            $table->text('description_lv')->nullable();
            $table->text('description_en')->nullable();
            $table->string('location_lv')->nullable();
            $table->string('location_en')->nullable();
            $table->string('category')->nullable(); // 'construction', 'engineering'
            $table->string('status')->default('active'); // 'active' (Aktualie), 'completed' (Pabeigtie)
            $table->string('year')->nullable();
            $table->string('size')->nullable(); // apjoms
            $table->string('main_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
