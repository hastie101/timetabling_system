<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateClassScheduleTable extends Migration
{
    public function up()
    {
        Schema::table('class_schedules', function (Blueprint $table) {
            // Check if the columns do not exist before adding
            if (!Schema::hasColumn('class_schedules', 'DayOfWeek')) {
                $table->string('DayOfWeek')->after('TimeSlot'); // Add column if it doesn't exist
            }
            if (!Schema::hasColumn('class_schedules', 'InstructorID')) {
                $table->unsignedInteger('InstructorID')->after('TimeSlot')->nullable(); // Ensure correct type and position
            }
            
            // Add foreign key constraint if it doesn't already exist
            if (!Schema::hasColumn('class_schedules', 'InstructorID')) {
                $table->foreign('InstructorID')
                      ->references('InstructorID')
                      ->on('instructors')
                      ->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        Schema::table('class_schedules', function (Blueprint $table) {
            if (Schema::hasColumn('class_schedules', 'InstructorID')) {
                $table->dropForeign(['InstructorID']);
                $table->dropColumn('InstructorID');
            }
            if (Schema::hasColumn('class_schedules', 'DayOfWeek')) {
                $table->dropColumn('DayOfWeek');
            }
        });
    }
}
