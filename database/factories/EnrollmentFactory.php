<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function seedEnrollment() {  
        $enrollments = [  
            ['StudentID' => 1, 'ClassID' => 1],  
            ['StudentID' => 1, 'ClassID' => 2],  
            ['StudentID' => 2, 'ClassID' => 1],  
            ['StudentID' => 3, 'ClassID' => 3],  
        ];  

        $stmt = $this->pdo->prepare("INSERT INTO Enrollment (StudentID, ClassID) VALUES (:StudentID, :ClassID)");  
        
        foreach ($enrollments as $enrollment) {  
            $stmt->execute($enrollment);  
        }  
    }
}
