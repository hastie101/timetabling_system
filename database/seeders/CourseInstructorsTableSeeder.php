<?php  

namespace Database\Seeders;  

use Illuminate\Database\Seeder;  
use DB;  

class CourseInstructorsTableSeeder extends Seeder  
{  
    public function run()  
    {  
        $courseInstructors = [  
            ['CourseID' => 1, 'InstructorID' => 1],  
            ['CourseID' => 2, 'InstructorID' => 2],  
            ['CourseID' => 3, 'InstructorID' => 3],  
        ];  

        DB::table('course_instructors')->insert($courseInstructors);  
    }  
}