<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function seedStudents() {  
        $students = [  
            ['StudentName' => 'John Doe', 'Email' => 'john.doe@example.com'],  
            ['StudentName' => 'Jane Smith', 'Email' => 'jane.smith@example.com'],  
            ['StudentName' => 'Alice Johnson', 'Email' => 'alice.johnson@example.com'],  
            ['StudentName' => 'Bob Brown', 'Email' => 'bob.brown@example.com'],  
        ];  

        $stmt = $this->pdo->prepare("INSERT INTO Students (StudentName, Email) VALUES (:StudentName, :Email)");  
        
        foreach ($students as $student) {  
            $stmt->execute($student);  
        }  
    }  
}
