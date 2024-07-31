<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'StudentID';
    public $incrementing = false;
    protected $fillable = ['StudentName', 'Email'];

    public function classes()
    {
        return $this->belongsToMany(classes::class, 'enrollments', 'StudentID', 'ClassID');
    }

}
