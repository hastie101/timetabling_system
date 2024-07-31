<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $primaryKey = ['StudentID', 'ClassID'];
    public $incrementing = false;
    protected $fillable = ['StudentID', 'ClassID'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'StudentID', 'StudentID');
    }

    public function class()
    {
        return $this->belongsTo(Classes::class, 'ClassID', 'ClassID');
    }
    
    use HasFactory;
}
