<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $primaryKey = 'CourseID';
    public $incrementing = false;
    protected $fillable = ['CourseName', 'Credits'];

    public function classes()
    {
        return $this->hasMany(ClassSchedule::class, 'CourseID', 'CourseID');
    }

    public function instructors()
    {
        return $this->belongsToMany(Instructor::class, 'course_instructors', 'CourseID', 'InstructorID');
    }

    use HasFactory;
}
