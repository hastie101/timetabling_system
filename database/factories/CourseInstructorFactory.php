<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseInstructor>
 */
class CourseInstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function seedCourseInstructors() {  
        $courseInstructors = [  
            ['CourseID' => 1, 'InstructorID' => 1],  
            ['CourseID' => 2, 'InstructorID' => 2],  
            ['CourseID' => 3, 'InstructorID' => 3],  
        ];  

        $stmt = $this->pdo->prepare("INSERT INTO CourseInstructors (CourseID, InstructorID) VALUES (:CourseID, :InstructorID)");  
        
        foreach ($courseInstructors as $courseInstructor) {  
            $stmt->execute($courseInstructor);  
        }  
    }  
}
