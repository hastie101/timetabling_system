<?php  

namespace Database\Seeders;  

use Illuminate\Database\Seeder;  
use DB;  

class CoursesTableSeeder extends Seeder  
{  
    public function run()  
    {  
        $courses = [  
            ['CourseName' => 'Intro to Programming', 'Credits' => 3],  
            ['CourseName' => 'Data Structures', 'Credits' => 4],  
            ['CourseName' => 'Web Development', 'Credits' => 3],  
            ['CourseName' => 'Database Systems', 'Credits' => 3],  
        ];  

        DB::table('courses')->insert($courses);  
    }  
}