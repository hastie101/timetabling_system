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
        Schema::create('class_schedules', function (Blueprint $table) {
            $table->unsignedBigInteger('ClassID');
            $table->unsignedBigInteger('CourseID');
            $table->time('TimeSlot');
            // $table->primary(['ClassID', 'CourseID', 'TimeSlot']);
            $table->foreign('ClassID')->references('ClassID')->on('classes');
            $table->foreign('CourseID')->references('CourseID')->on('courses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_schedules');
    }
};
