<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassSchedule>
 */
class ClassScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function seedClassSchedule() {  
        $classSchedules = [  
            ['ClassID' => 1, 'CourseID' => 1, 'TimeSlot' => '09:00:00'],  
            ['ClassID' => 1, 'CourseID' => 2, 'TimeSlot' => '11:00:00'],  
            ['ClassID' => 2, 'CourseID' => 3, 'TimeSlot' => '10:00:00'],  
            ['ClassID' => 3, 'CourseID' => 4, 'TimeSlot' => '14:00:00'],  
        ];  

        $stmt = $this->pdo->prepare("INSERT INTO ClassSchedule (ClassID, CourseID, TimeSlot) VALUES (:ClassID, :CourseID, :TimeSlot)");  
        
        foreach ($classSchedules as $schedule) {  
            $stmt->execute($schedule);  
        }  
    }
}
