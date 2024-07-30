<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function seedCourses() {  
        $courses = [  
            ['CourseName' => 'Intro to Programming', 'Credits' => 3],  
            ['CourseName' => 'Data Structures', 'Credits' => 4],  
            ['CourseName' => 'Web Development', 'Credits' => 3],  
            ['CourseName' => 'Database Systems', 'Credits' => 3],  
        ];  

        $stmt = $this->pdo->prepare("INSERT INTO Courses (CourseName, Credits) VALUES (:CourseName, :Credits)");  
        
        foreach ($courses as $course) {  
            $stmt->execute($course);  
        }  
    }
}
