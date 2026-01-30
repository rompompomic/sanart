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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('position_lv');
            $table->string('position_en')->nullable();
            $table->text('description_lv')->nullable();
            $table->text('description_en')->nullable();
            $table->text('requirements_lv')->nullable();
            $table->text('requirements_en')->nullable();
            $table->text('benefits_lv')->nullable();
            $table->text('benefits_en')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
