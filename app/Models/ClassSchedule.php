<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSchedule extends Model
{
    use HasFactory;

    protected $primaryKey = ['ClassID', 'CourseID', 'TimeSlot', 'InstructorID', 'DayOfWeek'];
    public $incrementing = false;
    protected $fillable = ['ClassID', 'CourseID', 'TimeSlot', 'InstructorID', 'DayOfWeek'];
    protected $table = 'class_schedules';

    public function class()
    {
        return $this->belongsTo(Classes::class, 'ClassID', 'ClassID');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'CourseID', 'CourseID');
    }
    
    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'InstructorID');
    }
}
