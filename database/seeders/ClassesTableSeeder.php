<?php  

namespace Database\Seeders;  

use Illuminate\Database\Seeder;  
use DB;  

class ClassesTableSeeder extends Seeder  
{  
    public function run()  
    {  
        $classes = [  
            ['ClassName' => 'Mathematics 101'],  
            ['ClassName' => 'Physics 101'],  
            ['ClassName' => 'Chemistry 101'],  
            ['ClassName' => 'Biology 101'],  
            ['ClassName' => 'Computer Science 101'],  
        ];  

        DB::table('classes')->insert($classes);  
    }  
}