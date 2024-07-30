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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('qalam_id')->unique(); // Unique identifier
            $table->string('name');
            $table->string('father_name');
            $table->string('institution');
            $table->string('discipline');
            $table->string('scholarship_name');
            $table->string('donor_name');
            $table->string('province');
            $table->string('gender');
            $table->string('program');
            $table->string('degree');
            $table->year('year_of_admission');
            $table->string('father_status');
            $table->string('father_profession');
            $table->decimal('monthly_income', 10, 2);
            $table->text('statement_of_purpose')->nullable();
            $table->string('images')->nullable(); // Field for storing image paths
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
