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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->unsignedBigInteger('StudentID');
            $table->unsignedBigInteger('ClassID');
            $table->primary(['StudentID', 'ClassID']);
            $table->foreign('StudentID')->references('StudentID')->on('students');
            $table->foreign('ClassID')->references('ClassID')->on('classes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
