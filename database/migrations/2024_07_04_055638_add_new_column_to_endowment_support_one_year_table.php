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
            $table->string('prove')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('endowment_support_one_year', function (Blueprint $table) {
            $table->dropColumn('prove');
        });
    }
};
