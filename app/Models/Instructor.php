<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $primaryKey = 'InstructorID';
    public $incrementing = false;
    protected $fillable = ['InstructorName'];
    protected $table = 'instructors';

    public function classSchedules()
    {
        return $this->hasMany(ClassSchedule::class, 'InstructorID');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_instructors', 'InstructorID', 'CourseID');
    }
    
    use HasFactory;
}
