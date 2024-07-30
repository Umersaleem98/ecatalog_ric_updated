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
        Schema::table('endowment_support_one_year', function (Blueprint $table) {
            $table->string('about_partner')->nullable()->after('phone');
            $table->string('country')->nullable()->after('about_partner');
            $table->year('year')->nullable()->after('country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('endowment_support_one_year', function (Blueprint $table) {
            $table->dropColumn(['about_partner', 'country', 'year']);
        });
    }
};
