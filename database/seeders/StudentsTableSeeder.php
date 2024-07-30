<?php  

namespace Database\Seeders;  

use Illuminate\Database\Seeder;  
use DB;  

class StudentsTableSeeder extends Seeder  
{  
    public function run()  
    {  
        $students = [  
            ['StudentName' => 'John Doe', 'Email' => 'john.doe@example.com'],  
            ['StudentName' => 'Jane Smith', 'Email' => 'jane.smith@example.com'],  
            ['StudentName' => 'Alice Johnson', 'Email' => 'alice.johnson@example.com'],  
            ['StudentName' => 'Bob Brown', 'Email' => 'bob.brown@example.com'],  
        ];  

        DB::table('students')->insert($students);  
    }  
}