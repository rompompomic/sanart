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
            $table->string('client_lv')->nullable()->after('description_en');
            $table->string('client_en')->nullable()->after('client_lv');
            $table->text('scope_lv')->nullable()->after('client_en');
            $table->text('scope_en')->nullable()->after('scope_lv');
            $table->string('slug')->nullable()->after('title_en');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['client_lv', 'client_en', 'scope_lv', 'scope_en', 'slug']);
        });
    }
};
