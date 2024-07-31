<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    protected $primaryKey = 'ClassID';
    public $incrementing = false;
    protected $fillable = ['ClassName'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'enrollments', 'ClassID', 'StudentID');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'CourseID', 'CourseID');
    }

    public function schedule()
    {
        return $this->hasMany(ClassSchedule::class, 'ClassID', 'ClassID');
    }
    
    use HasFactory;
}
