<?php  

namespace Database\Seeders;  

use Illuminate\Database\Seeder;  
use DB;  

class EnrollmentTableSeeder extends Seeder  
{  
    public function run()  
    {  
        $enrollments = [  
            ['StudentID' => 1, 'ClassID' => 1],  
            ['StudentID' => 1, 'ClassID' => 2],  
            ['StudentID' => 2, 'ClassID' => 1],  
            ['StudentID' => 3, 'ClassID' => 3],  
        ];  

        DB::table('enrollments')->insert($enrollments);  
    }  
}