<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instructor>
 */
class InstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function seedInstructors() {  
        $instructors = [  
            ['InstructorName' => 'Dr. Alice Walker'],  
            ['InstructorName' => 'Dr. Bob Martin'],  
            ['InstructorName' => 'Dr. Carol White'],  
        ];  

        $stmt = $this->pdo->prepare("INSERT INTO Instructors (InstructorName) VALUES (:InstructorName)");  
        
        foreach ($instructors as $instructor) {  
            $stmt->execute($instructor);  
        }  
    }
}