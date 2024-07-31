<?php  

namespace Database\Seeders;  

use Illuminate\Database\Seeder;  
use DB;  

class ClassScheduleTableSeeder extends Seeder  
{  
    public function run()  
    {  
        $classSchedules = [  
            ['DayofWeek' => 'Monday', 'ClassID' => 1, 'CourseID' => 1, 'InstructorID' => 1, 'TimeSlot' => '09:00:00'],  
            ['DayofWeek' => 'Wednesday', 'ClassID' => 1, 'CourseID' => 2, 'InstructorID' => 2, 'TimeSlot' => '11:00:00'],  
            ['DayofWeek' => 'Friday', 'ClassID' => 2, 'CourseID' => 3, 'InstructorID' => 1, 'TimeSlot' => '10:00:00'],  
            ['DayofWeek' => 'Tuesday', 'ClassID' => 3, 'CourseID' => 4, 'InstructorID' => 3, 'TimeSlot' => '14:00:00'],  
        ];  

        DB::table('class_schedules')->insert($classSchedules);  
    }  
}