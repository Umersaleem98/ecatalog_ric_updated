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
        Schema::table('endowment_support_entire_degree', function (Blueprint $table) {
            $table->string('prove')->nullable()->after('payments_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('endowment_support_entire_degree', function (Blueprint $table) {
            $table->dropColumn('prove');
        });
    }
};
