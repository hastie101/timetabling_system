<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseInstructor extends Model
{
    protected $primaryKey = ['CourseID', 'InstructorID'];
    public $incrementing = false;
    protected $fillable = ['CourseID', 'InstructorID'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'CourseID', 'CourseID');
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'InstructorID', 'InstructorID');
    }
    
    use HasFactory;
}
