<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSchedule extends Model
{
    protected $primaryKey = ['ClassID', 'CourseID', 'TimeSlot'];
    public $incrementing = false;
    protected $fillable = ['ClassID', 'CourseID', 'TimeSlot'];
    protected $table = 'class_schedule';

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

    // use HasFactory;

    // protected $table = 'class_schedules';
}
