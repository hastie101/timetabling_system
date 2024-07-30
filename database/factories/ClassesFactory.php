<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classes>
 */
class ClassesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function seedClasses() {  
        $classes = [  
            ['ClassName' => 'Mathematics 101'],  
            ['ClassName' => 'Physics 101'],  
            ['ClassName' => 'Chemistry 101'],  
            ['ClassName' => 'Biology 101'],  
            ['ClassName' => 'Computer Science 101'],  
        ];  

        $stmt = $this->pdo->prepare("INSERT INTO Classes (ClassName) VALUES (:ClassName)");  
        
        foreach ($classes as $class) {  
            $stmt->execute($class);  
        }  
    }  
}
