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
        Schema::table('vacancies', function (Blueprint $table) {
            $table->string('profession_lv')->nullable()->after('benefits_en');
            $table->string('profession_en')->nullable()->after('profession_lv');
            $table->string('education_lv')->nullable()->after('profession_en');
            $table->string('education_en')->nullable()->after('education_lv');
            $table->string('languages_lv')->nullable()->after('education_en');
            $table->string('languages_en')->nullable()->after('languages_lv');
            $table->string('working_days_lv')->nullable()->after('languages_en');
            $table->string('working_days_en')->nullable()->after('working_days_lv');
            $table->string('working_time_lv')->nullable()->after('working_days_en');
            $table->string('working_time_en')->nullable()->after('working_time_lv');
            $table->string('address_lv')->nullable()->after('working_time_en');
            $table->string('address_en')->nullable()->after('address_lv');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vacancies', function (Blueprint $table) {
            $table->dropColumn([
                'profession_lv', 'profession_en',
                'education_lv', 'education_en',
                'languages_lv', 'languages_en',
                'working_days_lv', 'working_days_en',
                'working_time_lv', 'working_time_en',
                'address_lv', 'address_en'
            ]);
        });
    }
};
