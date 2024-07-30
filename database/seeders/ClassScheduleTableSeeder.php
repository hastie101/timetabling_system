<?php  

namespace Database\Seeders;  

use Illuminate\Database\Seeder;  
use DB;  

class ClassScheduleTableSeeder extends Seeder  
{  
    public function run()  
    {  
        $classSchedules = [  
            ['ClassID' => 1, 'CourseID' => 1, 'TimeSlot' => '09:00:00'],  
            ['ClassID' => 1, 'CourseID' => 2, 'TimeSlot' => '11:00:00'],  
            ['ClassID' => 2, 'CourseID' => 3, 'TimeSlot' => '10:00:00'],  
            ['ClassID' => 3, 'CourseID' => 4, 'TimeSlot' => '14:00:00'],  
        ];  

        DB::table('class_schedules')->insert($classSchedules);  
    }  
}