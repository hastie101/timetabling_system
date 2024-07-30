<?php  

namespace Database\Seeders;  

use Illuminate\Database\Seeder;  
use DB;  

class InstructorsTableSeeder extends Seeder  
{  
    public function run()  
    {  
        $instructors = [  
            ['InstructorName' => 'Dr. Alice Walker'],  
            ['InstructorName' => 'Dr. Bob Martin'],  
            ['InstructorName' => 'Dr. Carol White'],  
        ];  

        DB::table('instructors')->insert($instructors);  
    }  
}