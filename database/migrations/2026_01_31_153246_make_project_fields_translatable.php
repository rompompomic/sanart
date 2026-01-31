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
        Schema::table('projects', function (Blueprint $table) {
            $table->renameColumn('category', 'category_lv');
            $table->renameColumn('size', 'size_lv');
        });
        
        Schema::table('projects', function (Blueprint $table) {
            $table->string('category_en')->nullable()->after('category_lv');
            $table->string('size_en')->nullable()->after('size_lv');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['category_en', 'size_en']);
            $table->renameColumn('category_lv', 'category');
            $table->renameColumn('size_lv', 'size');
        });
    }
};
