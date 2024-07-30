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
        Schema::create('default_package_one_year_degree', function (Blueprint $table) {
            $table->id();
            $table->string('program_type');
            $table->string('degree');
            $table->string('seats')->default('1');
            $table->string('totalAmount');
            $table->string('donor_name');
            $table->string('donor_email');
            $table->string('phone');
            $table->string('payments_status');
            $table->string('prove')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('default_package_one_year_degree');
    }
};
